<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Issuereports extends CI_Controller {

	public function __construct()
	{
	        parent::__construct();
	        $this->load->library('core/validation');
	        $this->load->helper(array('form', 'url', 'cookie'));           
	        $this->load->library('reports/be_reports');
	        $this->load->library('be_users');
		$userdata = (object)$this->session->userdata('user');
		if( empty( $userdata->user_id ) ){
			redirect('/users/login');
		}

		$this->perPage = 10;

	}

	public function index()
	{
		if($this->smartyci->isCached('list.html')){
			$this->smartyci->useCached( 'list.html' );
		}else{
			      $userdata = (object)$this->session->userdata('user');
			      $startdate = $this->input->cookie('startDate') ;
			      $enddate = $this->input->cookie('endDate') ;
  			     $total_report = $this->be_reports->Get_Report_Count( $userdata->user_id, $userdata->group_id, $startdate, $enddate );
			      $arg = array(
		        		'total_items'	=> $total_report,
		        		'pagination'	=> $this->perPage
		        	);
			      $products = $this->be_reports->GetAllProducts( );
			      $cities = $this->be_reports->GetAllCities( $userdata->group_id );
			      $form_types = $this->be_reports->GetFormTypes( $userdata->group_id );
			        $filename = 'reports/list.html';
			        $this->smartyci->clearCache( 'issuereports/list.html' );
			        $this->smartyci->assign('arg', $arg );
			        $this->smartyci->assign('products', $products );
			        $this->smartyci->assign('form_types', $form_types );
			        $this->smartyci->assign('cities', $cities );
			        $this->smartyci->assign('page', 'issuereport' );
			        $this->smartyci->assign('filename',$filename);
			        $this->smartyci->display('issuereports/list.html'); 
		}
	}
	
	public function details()
	{
		$userdata = (object)$this->session->userdata('user');
		$current_page = str_replace(array('Prev', 'Next'), '',  $this->security->xss_clean( $this->input->post("current_page") ) );
		$product_id = $this->security->xss_clean( $this->input->post("product_id") );
		$issue_month = $this->security->xss_clean( $this->input->post("issue_month") );
		$issue_year = $this->security->xss_clean( $this->input->post("issue_year") );
		$adtype_id = $this->security->xss_clean( $this->input->post("form_type") );
		$issue_date = $this->security->xss_clean( $this->input->post("issue_date") );
		$city = $this->security->xss_clean( $this->input->post("city") );
		$session = $this->security->xss_clean( $this->input->post("session") );
		if($product_id == 1 ){
			$defaultWhere = array(
					't_pub_information.form_type'	=> $product_id,
					't_frequencies.month'	=> $issue_month,
					't_frequencies.year'	=> $issue_year,
					't_pub_information.city'	=> $city,
					't_frequencies.session'	=> $session
				);
		}
		if( $product_id == 2 ){
			$defaultWhere = array(
					't_pub_information.form_type'	=> $product_id,
					't_frequencies.month'	=> $issue_month,
					't_frequencies.year'	=> $issue_year
				);
		}

		if( $product_id == 3 ){
			$defaultWhere = array(
					't_pub_information.form_type'	=> $product_id,
					't_frequencies.month'	=> $issue_month,
					't_frequencies.year'	=> $issue_year,
					't_frequencies.adtype_id'	=> $adtype_id
				);
		}

	            if(empty($current_page) || $current_page == 1){
	                 $start_no = 0;
	            }else{
	                $start_no = ($current_page-1) * $this->perPage;
	            }
		$data  = $this->be_reports->GetDetailsForIssueReport( $userdata->group_id, $this->perPage, $start_no, $defaultWhere );
		echo json_encode( $data );
		die;

	}

	public function view( $ro_id )
	{
		$userdata = (object)$this->session->userdata('user');
		$ro_details = $this->be_reports->GetRoDetails( $userdata->group_id, $ro_id );
		$adtypes = $this->be_reports->GetAdTypesDetails( $userdata->group_id, $ro_id );
		$this->smartyci->clearCache('reports/view.html');
		$this->smartyci->assign('ro_details',$ro_details);
		$this->smartyci->assign('adtypes',$adtypes);
		$this->smartyci->display('reports/view.html'); 

	}

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */
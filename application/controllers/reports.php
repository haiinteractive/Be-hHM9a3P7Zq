<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Reports extends CI_Controller {

	public function __construct()
	{
	        parent::__construct();
	        $this->load->library('core/validation');
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
  			     $total_report = $this->be_reports->Get_Report_Count( $userdata->user_id, $userdata->group_id );
			      $arg = array(
		        		'total_items'	=> $total_report,
		        		'pagination'	=> $this->perPage
		        	);
			        $filename = 'reports/list.html';
			        $this->smartyci->assign('arg', $arg );
			        $this->smartyci->assign('filename',$filename);
			        $this->smartyci->display('reports/list.html'); 
		}
	}
	
	public function revenue_report()
	{
		$userdata = (object)$this->session->userdata('user');
		$current_page = str_replace(array('Prev', 'Next'), '',  $this->security->xss_clean( $this->input->post("current_page") ) );
	            if(empty($current_page) || $current_page == 1){
	                 $start_no = 0;
	            }else{
	                $start_no = ($current_page-1) * $this->perPage;
	            }
		$data  = $this->be_reports->GetDetailsForRevenueReport( $userdata->group_id, $this->perPage, $start_no );
		echo json_encode( $data );
		die;

	}

	public function view( $ro_id )
	{
		$userdata = (object)$this->session->userdata('user');
		$ro_details = $this->be_reports->GetRoDetails( $userdata->group_id, $ro_id );
		$adtypes = $this->be_reports->GetAdTypesDetails( $userdata->group_id, $ro_id );
		$this->smartyci->assign('ro_details',$ro_details);
		$this->smartyci->assign('adtypes',$adtypes);
		$this->smartyci->display('reports/view.html'); 

	}

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */
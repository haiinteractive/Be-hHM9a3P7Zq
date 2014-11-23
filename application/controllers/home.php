<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
	        parent::__construct();
	        $this->load->library('core/validation');
	        $this->load->library('be_users');
	        $this->load->library('dashboard/be_dashboard');

	        $this->load->helper(array('form', 'url', 'cookie'));           
		$userdata = (object)$this->session->userdata('user');
		if( empty( $userdata->user_id ) ){
			redirect('/users/login');
		}

	}

	public function index()
	{
		$startdate = $this->input->cookie('startDate') ;
		$enddate = $this->input->cookie('endDate') ;
		$userdata = (object)$this->session->userdata('user');
		if( $userdata-> user_id == '' ||  $userdata-> user_id  == NULL ){
		   	redirect("users/login/"); 		
		}
		if($this->smartyci->isCached('dashboard.html')){
			$this->smartyci->useCached( 'dashboard.html' );
		}else{
			$this->smartyci->display('dashboard/dashboard.html'); 
		}

	}

	public function logout()
	{
		   $this->session->unset_userdata('user'); 
		   redirect("users/login/"); 		
	}

	public function totalofferedrevenue( )
	{
		$startdate = $this->input->cookie('startDate') ;
		$enddate = $this->input->cookie('endDate') ;
		$userdata = (object)$this->session->userdata('user');
		$TotalRackAmount = $this->be_dashboard->TotalRackAmount( $userdata->group_id, $startdate, $enddate );
		$TotalOfferedAmount = $this->be_dashboard->TotalOfferedAmount( $userdata->group_id, $startdate, $enddate );
		$TotalNewOrderAmount = $this->be_dashboard->TotalNewOrderAmount( $userdata->group_id, $startdate, $enddate );
		$NewSignedCustomer = $this->be_dashboard->NewSignedCustomer( $userdata->group_id, $startdate, $enddate );
		//setlocale(LC_MONETARY,"en_US");
		$arg = array(
			'totalrackamount'	=> ( $TotalRackAmount['totalrackamount'] > 0 ) ? number_format( $TotalRackAmount['totalrackamount'], 2 ) : 'No Records',
			'totalofferedamount'	=> ( $TotalOfferedAmount['totalofferedamount'] > 0 ) ? number_format( $TotalOfferedAmount['totalofferedamount'], 2 ) : 'No Records', 
			'totalneworderamount'	=> ( $TotalNewOrderAmount['totalneworderamount'] > 0 ) ?  number_format( $TotalNewOrderAmount['totalneworderamount'], 2 ) : ' No Records ',
			'totalnewsignedcustomer' => ( $NewSignedCustomer['totalnewsignedcustomer'] > 0 ) ? $NewSignedCustomer['totalnewsignedcustomer'] : ' No Records ',
			);
		echo '['. json_encode($arg). ']';
		die; 
	}

	public function revenuechartdata( )
	{
		$startdate = $this->input->cookie('startDate') ;
		$enddate = $this->input->cookie('endDate') ;
		$userdata = (object)$this->session->userdata('user');
		$revenuechartdata = $this->be_dashboard->RevenueChartData( $userdata->group_id, $startdate, $enddate );
		echo json_encode($revenuechartdata);
		//print_r( $revenuechartdata);
		die;

	}

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Company extends CI_Controller {

	public function __construct()
	{
	        parent::__construct();
	        $this->load->library('core/validation');
	        $this->load->library('company/be_company');
	        $this->load->library('be_users');
		$userdata = (object)$this->session->userdata('user');
		if( empty( $userdata->user_id ) ){
			redirect('/users/login');
		}

		$this->perPage = 5;

	}

	public function index()
	{
		
		if($this->smartyci->isCached('list.html')){
			$this->smartyci->useCached( 'list.html' );
		}else{
			        $userdata = (object)$this->session->userdata('user');
  			        $total_users = $this->be_company->Get_company_Count( $userdata->user_id );
  			        $arg = array(
  			        		'total_items'	=> $total_users,
  			        		'pagination'	=> $this->perPage
  			        	);
					
			        $filename = 'company/list.html';
			        $this->smartyci->assign('arg', $arg );
			        $this->smartyci->assign('filename',$filename);
					
			        $this->smartyci->display('company/list.html'); 
		}

	}
	
	public function edit()
	{
		$company_id = $this->security->xss_clean( $this->input->post("company_id") );
		 $get_single_company = $this->be_company->get_single_company( $company_id );
		 echo json_encode($get_single_company);
		die;
	}
	
	public function update()
	{
	 $userdata = (object)$this->session->userdata('user');
		  
		 $comp_id = $this->security->xss_clean( $this->input->post("comp_id") );
		  
		$purpose = $this->security->xss_clean( $this->input->post("purpose") );
		
		$output = $this->EmpValidation( );	// Validating all Inputs
		
		if($purpose == 'company'){
			
			( !empty($output) ) ? $output = $output : $output = 'success';
			
		if($output == 'success')
			{
				
					$response = $this->be_company->updateNewcompany( $this->security->xss_clean( $this->input->post("c_name") ), $this->security->xss_clean( $this->input->post("c_person") ), $this->security->xss_clean( $this->input->post("address") ), $this->security->xss_clean( $this->input->post("pin_code") ), $this->security->xss_clean( $this->input->post("phone") ), $this->security->xss_clean( $this->input->post("email") ), $this->security->xss_clean( $this->input->post("status") ), $userdata->user_id , $comp_id );
						echo json_encode($output);
						die;
				
			}else{
				echo json_encode($output);
				die;
			}
		}
	}
	

	public function add()
	{
	        $userdata = (object)$this->session->userdata('user');
			$output = $this->EmpValidation( );	// Validating all Inputs
			( !empty($output) ) ? $output = $output : $output = 'success';
			if($output == 'success')
			{
					$response = $this->be_company->AddNewcompany( $this->security->xss_clean( $this->input->post("c_name") ), $this->security->xss_clean( $this->input->post("c_person") ), $this->security->xss_clean( $this->input->post("address") ), $this->security->xss_clean( $this->input->post("pin_code") ), $this->security->xss_clean( $this->input->post("phone") ), $this->security->xss_clean( $this->input->post("alt_phone") ),$this->security->xss_clean( $this->input->post("email") ),$this->security->xss_clean( $this->input->post("alt_email") ), $userdata->user_id );
						echo json_encode($output);
						die;
				
			}else{
				echo json_encode($output);
				die;
			}
	}


	public function EmpValidation()
	{
		$output = '';
		if($this->security->xss_clean( $this->input->post("purpose") )== 'company'){
			(  $this->validation->StringValid( $this->security->xss_clean( $this->input->post("c_name") ), 'Company Name' )  != '')  ? $output .=$this->validation->StringValid( $this->security->xss_clean( $this->input->post("c_name") ) , ' Company Name ').'<br />' : '';
			(  $this->validation->StringValid( $this->security->xss_clean( $this->input->post("c_person") ), 'Contact Person' )  != '')  ? $output .=$this->validation->StringValid( $this->security->xss_clean( $this->input->post("c_person") ) , ' Contact Person ').'<br />' : '';
			( $this->validation->EmailValid( $this->security->xss_clean( $this->input->post("email") ), 'Email Address' )  !='')   ? $output  .= $this->validation->EmailValid( $this->security->xss_clean( $this->input->post("email") ), 'Email Address' ).'<br />' : '';
			
			(  $this->validation->check_empty( $this->security->xss_clean( $this->input->post("address") ), 'Address' )  != '')  ? $output .=$this->validation->check_empty( $this->security->xss_clean( $this->input->post("address") ) , ' Address ').'<br />' : '';
			
			(  $this->validation->check_empty( $this->security->xss_clean( $this->input->post("pin_code") ), 'Pin code' )  != '')  ? $output .=$this->validation->check_empty( $this->security->xss_clean( $this->input->post("pin_code") ) , ' Pin code ').'<br />' : '';
			
			(  $this->validation->check_empty( $this->security->xss_clean( $this->input->post("phone") ), 'Phone' )  != '')  ? $output .=$this->validation->check_empty( $this->security->xss_clean( $this->input->post("phone") ) , ' Phone ').'<br />' : '';
			
			if( $this->input->post("alt_email") != '') {
			( $this->validation->EmailValid( $this->security->xss_clean( $this->input->post("alt_email") ), 'Alternate Email' )  !='')   ? $output  .= $this->validation->EmailValid( $this->security->xss_clean( $this->input->post("alt_email") ), 'Alternate Email' ).'<br />' : '';
			}
		
		}
		return $output;		
	}

	public function list_info()
	{
		$userdata = (object)$this->session->userdata('user');
		$current_page = str_replace(array('Prev', 'Next'), '',  $this->security->xss_clean( $this->input->post("current_page") ) );
	            if(empty($current_page) || $current_page == 1){
	                 $start_no = 0;
	            }else{
	                $start_no = ($current_page-1) * $this->perPage;
	            }
		$data = $this->be_company->Get_company_Details( $userdata->user_id, $this->perPage, $start_no );
		echo json_encode($data);
		die;
	}

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */
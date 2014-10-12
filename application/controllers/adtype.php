<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Adtype extends CI_Controller {

	public function __construct()
	{
	        parent::__construct();
	        $this->load->library('core/validation');
	        $this->load->library('adtype/be_adtype');
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
  			     $total_users = $this->be_adtype->Get_adtype_Count( $userdata->user_id );
					
				      $arg = array(
  			        		'total_items'	=> $total_users,
  			        		'pagination'	=> $this->perPage
  			        	);
					$roles = $this->be_adtype->getform_type( );
			        $filename = 'adtype/list.html';
			        $this->smartyci->assign('arg', $arg );
			        $this->smartyci->assign('filename',$filename);
					 $this->smartyci->assign('roles', $roles );
			        $this->smartyci->display('adtype/list.html'); 
		}

	}
	
	public function edit()
	{
		$adtype_id = $this->security->xss_clean( $this->input->post("adtype_id") );
		 $get_single_adtype = $this->be_adtype->get_single_adtype( $adtype_id );
		 echo json_encode($get_single_adtype);
		die;
	}
	
	public function update()
	{
		  $userdata = (object)$this->session->userdata('user');
		  
		 $adtype_id = $this->security->xss_clean( $this->input->post("adtype_id") );
		  
		$purpose = $this->security->xss_clean( $this->input->post("purpose") );
		
		$output = $this->EmpValidation( );	// Validating all Inputs
		
		if($purpose == 'adtype'){
			
			( !empty($output) ) ? $output = $output : $output = 'success';
			
		if($output == 'success')
			{
					$response = $this->be_adtype->updateNewadtype( $this->security->xss_clean( $this->input->post("form_adtype") ), $this->security->xss_clean( $this->input->post("ad_type_name") ), $this->security->xss_clean( $this->input->post("ad_type_code") ), $this->security->xss_clean( $this->input->post("ad_type_rate") ), $this->security->xss_clean( $this->input->post("status") ), $userdata->user_id , $adtype_id );
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
		$purpose = $this->security->xss_clean( $this->input->post("purpose") );
		
			$output = $this->EmpValidation( );	// Validating all Inputs
			( !empty($output) ) ? $output = $output : $output = 'success';
			if($output == 'success')
			{
					$response = $this->be_adtype->AddNewadtype( $this->security->xss_clean( $this->input->post("form_adtype") ),$this->security->xss_clean( $this->input->post("ad_type_name") ), $this->security->xss_clean( $this->input->post("ad_type_code") ), $this->security->xss_clean( $this->input->post("ad_type_rate") ), $userdata->user_id );
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
		if($this->security->xss_clean( $this->input->post("purpose") )== 'adtype'){
			(  $this->validation->StringValid( $this->security->xss_clean( $this->input->post("ad_type_name") ), 'Name' )  != '')  ? $output .=$this->validation->StringValid( $this->security->xss_clean( $this->input->post("ad_type_name") ) , ' Name ').'<br />' : '';
			(  $this->validation->check_empty( $this->security->xss_clean( $this->input->post("ad_type_code") ), 'Code' )  != '')  ? $output .=$this->validation->check_empty( $this->security->xss_clean( $this->input->post("ad_type_code") ) , ' Code ').'<br />' : '';
			(  $this->validation->check_empty( $this->security->xss_clean( $this->input->post("ad_type_rate") ), 'Rack Rate' )  != '')  ? $output .=$this->validation->check_empty( $this->security->xss_clean( $this->input->post("ad_type_rate") ) , ' Rack Rate ').'<br />' : '';
			
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
		$data = $this->be_adtype->Get_adtype_Details( $userdata->user_id, $this->perPage, $start_no );
		echo json_encode($data);
		die;
	}

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Employee extends CI_Controller {

	public function __construct()
	{
	        parent::__construct();
	        $this->load->library('core/validation');
	        $this->load->library('employee/be_employee');
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
  			        $total_users = $this->be_employee->Get_Employees_Count( $userdata->user_id );
  			        $arg = array(
  			        		'total_items'	=> $total_users,
  			        		'pagination'	=> $this->perPage
  			        	);
			        $filename = 'employee/list.html';
			        $this->smartyci->assign('arg', $arg );
			        $this->smartyci->assign('filename',$filename);
			        $this->smartyci->display('employee/list.html'); 
		}

	}

	public function add()
	{
	        $userdata = (object)$this->session->userdata('user');
		$purpose = $this->security->xss_clean( $this->input->post("purpose") );
		if($purpose == 'employee'){
			$output = $this->EmpValidation( );	// Validating all Inputs
			( !empty($output) ) ? $output = $output : $output = 'success';
			if($output == 'success')
			{
				$email_exist = $this->be_users->CheckUserExist( $this->security->xss_clean( $this->input->post("email") ) );
				if(  $email_exist =='' || $email_exist < 0 ){
					$response = $this->be_employee->AddNewUser( $this->security->xss_clean( $this->input->post("user_first_name") ), $this->security->xss_clean( $this->input->post("user_last_name") ), $this->security->xss_clean( $this->input->post("email") ), $this->security->xss_clean( $this->input->post("userpwd") ), $this->security->xss_clean( $this->input->post("user_role") ), $userdata->user_id );
						echo json_encode($output);
						die;
				}else{
					echo json_encode('User Already Exist');
					die;
				}
			}else{
				echo json_encode($output);
				die;
			}
		}else{

			        $roles = $this->be_employee->GetUserRoles( );
			        $this->smartyci->assign('roles', $roles );
			        $this->smartyci->display('employee/add.html'); 

		}
	}


	public function EmpValidation()
	{
		$output = '';
		if($this->security->xss_clean( $this->input->post("purpose") )== 'employee'){
			(  $this->validation->StringValid( $this->security->xss_clean( $this->input->post("user_first_name") ), 'First Name' )  != '')  ? $output .=$this->validation->StringValid( $this->security->xss_clean( $this->input->post("user_first_name") ) , ' First Name ').'<br />' : '';
			(  $this->validation->StringValid( $this->security->xss_clean( $this->input->post("user_last_name") ), 'Last Name' )  != '')  ? $output .=$this->validation->StringValid( $this->security->xss_clean( $this->input->post("user_last_name") ) , ' Last Name ').'<br />' : '';
			( $this->validation->EmailValid( $this->security->xss_clean( $this->input->post("email") ), 'Email Address' )  !='')   ? $output  .= $this->validation->EmailValid( $this->security->xss_clean( $this->input->post("email") ), 'Email Address' ).'<br />' : '';
			( $this->validation->PwdValid( $this->security->xss_clean( $this->input->post("userpwd") ), 'Password' )  !='')   ? $output  .= $this->validation->PwdValid( $this->security->xss_clean( $this->input->post("userpwd") ), 'Password' ).'<br />' : '';
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
		$data = $this->be_employee->Get_Employee_Details( $userdata->user_id, $this->perPage, $start_no );
		echo json_encode($data);
		die;

	}

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */
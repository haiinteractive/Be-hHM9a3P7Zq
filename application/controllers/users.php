<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

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
		$userdata = (object)$this->session->userdata('user');
		if( !empty( $userdata->subscriber_id ) ){
			redirect('/home/index');
		}

	}

	public function index()
	{
	}

	public function login()
	{
		$purpose = $this->security->xss_clean( $this->input->post("purpose") );
		if( $purpose != '' && $purpose == 'login'  ){
			$output = $this->InputValidation( );	// Validating all Inputs
			( !empty($output) ) ? $output = $output : $output = 'success';
			if($output == 'success')
			{
			$response = $this->be_users->UserLogin( $this->security->xss_clean( $this->input->post("email") ), $this->security->xss_clean( $this->input->post("userpwd") ) );
				if( ( $response != 'invalid' ) && ( $response->subscriber_id > 0 || $response->user_id > 0 ) ){
					$this->setsession( $response );	// SET session
					echo json_encode(1);
					die;
				}else{
					echo json_encode("User Credentials Doesn't Match ");
					die;
				}
			}else{

				echo json_encode($output);
				die;
			}
		}else{
			if($this->smartyci->isCached('login.html')){
				$this->smartyci->useCached( 'login.html' );
			}else{
			$this->smartyci->display( 'login.html' );
			}
		}
	}

	public function registration()
	{
		$purpose = $this->security->xss_clean( $this->input->post("purpose") );
		if( $purpose != '' && $purpose == 'registration'  ){
			$output = $this->InputValidation( );	// Validating all Inputs
			( !empty($output) ) ? $output = json_encode($output) : $output = 'success';
			if($output == 'success')
			{
				$response = $this->be_users->Registration( $this->security->xss_clean( $this->input->post("username") ), $this->security->xss_clean( $this->input->post("email") ), $this->security->xss_clean( $this->input->post("userpwd") ));			// Storing User Information
				if($response > 0){
					$user_info = $this->be_users->GetUserInfo( $response );	// Getting Registreted Information
					$this->setsession( $user_info );	// SET session
				}
				echo json_encode($response);
				die;
			}else{
			echo $output;
			die;
			}
		}else{
			if($this->smartyci->isCached('registration.html')){
				$this->smartyci->useCached( 'registration.html' );
			}else{
			$this->smartyci->display( 'registration.html' );
			}
		}
	}

	public function InputValidation()
	{
		$output = '';
			( $this->validation->EmailValid( $this->security->xss_clean( $this->input->post("email") ), 'Email Address' )  !='')   ? $output  .= $this->validation->EmailValid( $this->security->xss_clean( $this->input->post("email") ), 'Email Address' ).'<br />' : '';
			( $this->validation->PwdValid( $this->security->xss_clean( $this->input->post("userpwd") ), 'Password' )  !='')   ? $output  .= $this->validation->PwdValid( $this->security->xss_clean( $this->input->post("userpwd") ), 'Password' ).'<br />' : '';
		if( $this->security->xss_clean( $this->input->post("purpose") )== 'registration'){	
			(  $this->validation->StringValid( $this->security->xss_clean( $this->input->post("username") ), 'User Name' )  != '')  ? $output .=$this->validation->StringValid( $this->security->xss_clean( $this->input->post("username") ) , ' User Name ').'<br />' : '';
			( $this->validation->CompareValid( $this->security->xss_clean( $this->input->post("userpwd") ), $this->security->xss_clean( $this->input->post("retypeuserpwd") ), 'Password' )  !='')   ? $output  .= $this->validation->CompareValid( $this->security->xss_clean( $this->input->post("userpwd") ), $this->security->xss_clean( $this->input->post("retypeuserpwd") ), 'Password' ).'<br />' : '';
		}
			return $output;

	}

	public function setsession( $user_info ){
					$session_data = array(
							'subscriber_id'	=>$user_info->subscriber_id,
							'uniqueid'	=> $user_info->subscriber_unique_id,
							'subscriber_first_name'	=> $user_info->subscriber_first_name,
							'subscriber_last_name'	=> $user_info->subscriber_last_name,
							'company_name'	=> $user_info->company_name,
							'subscriber_email'	=> $user_info->subscriber_email,
							'subscriber_logo'	=> $user_info->subscriber_logo,
							'subscribe_package'	=> $user_info->subscribe_package,
							'subscribed_on'	=> $user_info->subscribed_on,
						);
					$this->session->unset_userdata('user');    
				   	 $this->session->set_userdata( array('user'=>$session_data));
				           				           		
					// clear user lang cookie
					$cookie = array(
						'name'   => 'ss_auth_lang',
						'value'  => '',
						'expire' => '0',
						'prefix' => '',
						'path'   => '/'
					);
					delete_cookie($cookie);
					// set user lang cookie
					$cookie = array(
						'name'   => 'ss_auth_lang',
						'value'  => $user_info->subscriber_id,
						'expire' => time()+60*60*24*30,
						'path'   => '/',
						'prefix' => '',
					);
		
					$this->input->set_cookie($cookie);
			return true;		
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Upload extends CI_Controller {

	public function __construct()
	{
	error_reporting(0);
	        parent::__construct();
	        $this->load->library('core/validation');
	        $this->load->library('upload/be_upload');
		$userdata = (object)$this->session->userdata('user');
		if( empty( $userdata->user_id ) ){
			redirect('/users/login');
		}
	}
	public function index()
	{
		$form_type = $this->be_upload->GetFormType( );
	        	$this->smartyci->assign('form_types', $form_type );
	        	$this->smartyci->display('upload/upload.html'); 

	}
	public function add()
	{
		$notice = array( );
		$userdata = (object)$this->session->userdata('user');
		$use = $this->security->xss_clean( $this->input->post("use") );
		$form_type = $this->security->xss_clean( $this->input->post("form_type") );
		if($use == 'up89765' && is_uploaded_file($_FILES['file_data']['tmp_name'])){
			$handle = fopen($_FILES['file_data']['tmp_name'], "r");
			if( ( $handle != '' ) && ( !empty($handle) ) )
			{ 
			while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
				if( ( in_array( $data[0], $this->config->item('company')) ) || (in_array($data[1], $this->config->item('ro_number') ) ) && (!in_array($data[2], $this->config->item('city') ) ) || (is_numeric($data[1])) ){
					$row = $this->validation->replaceslashes( $data );
					$valid = $this->validation->CheckEmptyValue( $row, $form_type );
					if( count($valid)  ){
						$notice[] = $valid;
					}
				}else{
					echo 'Headers are missing Please check samples file';
					die;
				}
			}
/*			if(count($notice) <= 0 ){
				move_uploaded_file($_FILES["file_data"]["tmp_name"],$this->config->item('clients_file_path')."/".$userdata->uniqueid."/". time().$_FILES["file_data"]["name"]);
				echo 'Successfully Uploaded';
				die;
			}else{
				print_r($notice);
			}
*/		}

			fclose($handle);
			die;
		}

	}


}

/* End of file upload.php */
/* Location: ./application/controllers/upload.php */
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Upload extends CI_Controller {
	public $current_date;
	public function __construct()
	{
	        parent::__construct();
	        $this->load->library('core/validation');
	        $this->load->library('upload/be_upload');
		$userdata = (object)$this->session->userdata('user');
		if( empty( $userdata->user_id ) ){
			redirect('/users/login');
		}
		$this->current_date = date('Y-m-d H:i:s');
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
			 $records = array();	
			while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
				if( ( in_array( $data[0], $this->config->item('company')) ) || (in_array($data[1], $this->config->item('ro_number') ) ) && (!in_array($data[2], $this->config->item('city') ) ) || (is_numeric($data[1])) )
				{
					$row = $this->validation->replaceslashes( $data );
					$valid = $this->validation->CheckEmptyValue( $row, $form_type );
					if( count($valid)  ){
						$notice[] = $valid;
					}else{
						if( ( !in_array( $data[0], $this->config->item('company')) ) || ( !in_array($data[1], $this->config->item('ro_number') ) ) && ( !in_array($data[2], $this->config->item('city') ) )   ){
							$records[] = $this->PushEGData( $data, $form_type, $userdata );
						}
					}
				}else{
					echo 'Headers are missing Please check samples file';
					die;
				}
			}
			if(count($notice) <= 0 ){
				//$temp_response = $this->be_upload->InsertTempInformation( $records );
				move_uploaded_file($_FILES["file_data"]["tmp_name"],$this->config->item('clients_file_path')."/".$userdata->groupid."/". time().$_FILES["file_data"]["name"]);
				//echo 'Successfully Uploaded';
				die;
			}else{
				print_r($notice);
			}
		}else{
			echo ' Please upload file...';
			die;
		}

			fclose($handle);
			die;
		}else{
			echo ' Please upload file...';
			die;

		}

	}

	public function PushEGData( $data, $form_type, $userdata )
	{
		$company_id = $this->be_upload->GetCompanyID( $data[0], $userdata->groupid );

		$arg = array( 
				'ro_number' 	=> $data[1],
				'form_type'	=> $form_type,
				'company_id'	=> $company_id,
				'group_id'	=> $userdata->groupid,
				'city'		=> $data[2],
				'ad_code'	=> $data[9],
				'frequency'	=> $data[11],
				'offered_amount'	=> $data[10],
				'created_on'		=> $this->current_date,
				'approved_on'		=> $data[5],
				'session'		=> $data[14],
				'net_amount'		=> $data[13],
				'special_instruction'	=> $data[12]
 			);
		$this->be_upload->InsertTempEGInformation( $arg );
		return $arg;
	}
}

/* End of file upload.php */
/* Location: ./application/controllers/upload.php */
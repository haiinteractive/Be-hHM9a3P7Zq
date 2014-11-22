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
		$userdata = (object)$this->session->userdata('user');
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
							if( $form_type == 1){
								$this->PushExecData( $data, $form_type, $userdata );
							}else if( $form_type == 2 ){
								$this->PushEGData( $data, $form_type, $userdata );
							}else if($form_type == 3 )
							{
								$this->PushDigitalData( $data, $form_type, $userdata );
							}
						}
					}
				}else{
					echo 'Headers are missing Please check samples file';
					die;
				}
			}
			if(count($notice) <= 0 ){
				//$temp_response = $this->be_upload->InsertTempInformation( $records );
				$csv_file_name = time().$_FILES["file_data"]["name"];
				if( is_dir( $this->config->item('clients_file_path')."/".$userdata->group_id )){
					move_uploaded_file($_FILES["file_data"]["tmp_name"],$this->config->item('clients_file_path')."/".$userdata->group_id."/".$csv_file_name );
				}else{
					mkdir($this->config->item('clients_file_path')."/".$userdata->group_id);
					move_uploaded_file($_FILES["file_data"]["tmp_name"],$this->config->item('clients_file_path')."/".$userdata->group_id."/".$csv_file_name);
				}
				$this->be_upload->InsertFile( $userdata->group_id, $userdata->user_id,  $csv_file_name );
				//echo 'Successfully Uploaded';
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
		$company_id = $this->be_upload->GetCompanyID( $data[0], $userdata->group_id );
		$category_id = $this->be_upload->GetCategoryID( $data[7], $userdata->group_id, $userdata->user_id );
		$sales_person_id = $this->be_upload->GetSalesPersonID( $data[3], $userdata->group_id, $userdata->user_id, 3 );
		$approve_authority_user_id = $this->be_upload->GetSalesPersonID( $data[5], $userdata->group_id, $userdata->user_id, 2 );
		$approved_on= date('Y-m-d', strtotime( $data[5] ));
		$arg = array( 
				'ro_number' 	=> $data[1],
				'form_type'	=> $form_type,
				'approved_by'	=> $approve_authority_user_id,
				'company_id'	=> $company_id,
				'category_id'	=> $category_id,
				'group_id'	=> $userdata->group_id,
				'sales_person_id'	=> $sales_person_id,
				'city'		=> $data[2],
				'ad_code'	=> $data[9],
				'frequency'	=> $data[11],
				'ad_display_city'		=> $data[8],
				'offered_amount'	=> $data[10],
				'created_on'		=> $this->current_date,
				'approved_on'		=> $approved_on,
				'session'		=> $data[14],
				'net_amount'		=> $data[13],
				'special_instruction'	=> $data[12],
				'created_by'		=> $userdata->user_id
 			);
		$this->be_upload->InsertTempEGInformation( $arg );
		return $arg;
	}

	public function PushExecData( $data, $form_type, $userdata )
	{
		$company_id = $this->be_upload->GetCompanyID( $data[0], $userdata->group_id );
		$category_id = $this->be_upload->GetCategoryID( $data[7], $userdata->group_id, $userdata->user_id );
		$sales_person_id = $this->be_upload->GetSalesPersonID( $data[3], $userdata->group_id, $userdata->user_id, 3 );
		$approve_authority_user_id = $this->be_upload->GetSalesPersonID( $data[5], $userdata->group_id, $userdata->user_id, 2 );
		$approved_on= date('Y-m-d', strtotime( $data[5] ));
		$arg = array( 
				'ro_number' 	=> $data[1],
				'form_type'	=> $form_type,
				'approved_by'	=> $approve_authority_user_id,
				'company_id'	=> $company_id,
				'category_id'	=> $category_id,
				'group_id'	=> $userdata->group_id,
				'sales_person_id'	=> $sales_person_id,
				'city'		=> $data[2],
				'ad_code'	=> $data[8],
				'frequency'	=> $data[10],
				'offered_amount'	=> $data[9],
				'created_on'		=> $this->current_date,
				'approved_on'		=> $approved_on,
				'net_amount'		=> $data[12],
				'special_instruction'	=> $data[11],
				'created_by'		=> $userdata->user_id
 			);
		$er = $this->be_upload->InsertTempExecInformation( $arg );
		return $arg;
	}

	public function PushDigitalData( $data, $form_type, $userdata )
	{
		$company_id = $this->be_upload->GetCompanyID( $userdata->user_id, $data[0], $userdata->group_id );
		$category_id = $this->be_upload->GetCategoryID( $data[7], $userdata->group_id, $userdata->user_id );
		$sales_person_id = $this->be_upload->GetSalesPersonID( $data[3], $userdata->group_id, $userdata->user_id, 3 );
		$approve_authority_user_id = $this->be_upload->GetSalesPersonID( $data[5], $userdata->group_id, $userdata->user_id, 2 );
		$product_id = $this->be_upload->GetProductID( $data[8], $userdata->group_id, $userdata->user_id );
		$approved_on= date('Y-m-d', strtotime( $data[5] ));
		$arg = array( 
				'ro_number' 	=> $data[1],
				'form_type'	=> $form_type,
				'approved_by'	=> $approve_authority_user_id,
				'company_id'	=> $company_id,
				'category_id'	=> $category_id,
				'group_id'	=> $userdata->group_id,
				'sales_person_id'	=> $sales_person_id,
				'city'		=> $data[2],
				'product_id'	=> $product_id,
				'ad_code'	=> $data[9],
				'start_date'	=> $data[10],
				'end_date'	=> $data[11],
				'offered_amount'	=> $data[12],
				'frequency'	=> $data[13],
				'created_on'		=> $this->current_date,
				'approved_on'		=> $approved_on,
				'net_amount'		=> $data[15],
				'special_instruction'	=> $data[14],
				'created_by'		=> $userdata->user_id
 			);
		$er = $this->be_upload->InsertTempDigitalInformation( $arg );
		print_r( $er);
		die;
		return $arg;
	}	
}

/* End of file upload.php */
/* Location: ./application/controllers/upload.php */
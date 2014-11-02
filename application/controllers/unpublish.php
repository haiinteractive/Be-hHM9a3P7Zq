<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Unpublish extends CI_Controller {

	public function __construct()
	{
	        parent::__construct();
	        $this->load->library('core/validation');
	        $this->load->library('temp/be_temp');
	        $this->load->library('be_users');
		$this->perPage = 5;

	}

	public function index()
	{
		
		$userdata = (object)$this->session->userdata('user');
		if( empty( $userdata->user_id ) ){
			redirect('/users/login');
		}
		$total = $this->be_temp->GetPubTempCount( $userdata->group_id );
		
			$arg = array(
		     		'total_items'	=> $total,
  			        	'pagination'	=> $this->perPage
  			);
		$this->smartyci->assign('arg', $arg );
  		$this->smartyci->display('temp/list.html');
		
	}
	
	public function Information()
	{
		$userdata = (object)$this->session->userdata('user');
		$current_page = str_replace(array('Prev', 'Next'), '',  $this->security->xss_clean( $this->input->post("current_page") ) );
	            if(empty($current_page) || $current_page == 1){
	                 $start_no = 0;
	            }else{
	                $start_no = ($current_page-1) * $this->perPage;
	            }
		  $output = $this->be_temp->GetTempInfo( $userdata->group_id, $this->perPage, $start_no  );
		echo json_encode($output);
		die;
		  
	}

	public function delete()
	{
		$id = $this->security->xss_clean( $this->input->post("id") );
		$delete = $this->be_temp->DeleteAdData( $id );
		echo $id;
		die;

	}

	public function publish()
	{
		$ids = $this->security->xss_clean( $this->input->post("ids") );
		$publish_items = $this->be_temp->Publish_Items( $ids );
		print_r($publish_items);
		die;
	}
	
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */
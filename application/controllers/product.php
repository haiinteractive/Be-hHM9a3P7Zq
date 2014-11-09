<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product extends CI_Controller {

	public function __construct()
	{
	        parent::__construct();
	        $this->load->library('core/validation');
	        $this->load->library('product/be_product');
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
  			     $total_users = $this->be_product->Get_product_Count( $userdata->user_id, $userdata->group_id );
					
				      $arg = array(
  			        		'total_items'	=> $total_users,
  			        		'pagination'	=> $this->perPage
  			        	);
					
			        $filename = 'product/list.html';
			        $this->smartyci->assign('arg', $arg );
			        $this->smartyci->assign('filename',$filename);
			        $this->smartyci->display('product/list.html'); 
		}

	}
	
	public function edit()
	{
		$product_id = $this->security->xss_clean( $this->input->post("product_id") );
		 $get_single_product = $this->be_product->get_single_product( $product_id );
		 echo json_encode($get_single_product);
		die;
	}
	
	public function update()
	{
		  $userdata = (object)$this->session->userdata('user');
		  
		 $product_id = $this->security->xss_clean( $this->input->post("product_id") );
		  
		$purpose = $this->security->xss_clean( $this->input->post("purpose") );
		
		$output = $this->EmpValidation( );	// Validating all Inputs
		
		if($purpose == 'product'){
			
			( !empty($output) ) ? $output = $output : $output = 'success';
			
		if($output == 'success')
			{
					$response = $this->be_product->updateNewproduct( $this->security->xss_clean( $this->input->post("product_name") ), $this->security->xss_clean( $this->input->post("product_status") ), $userdata->user_id , $product_id );
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
				$response = $this->be_product->AddNewproduct( $userdata->group_id, $this->security->xss_clean( $this->input->post("product_name") ), $userdata->user_id );
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
		if($this->security->xss_clean( $this->input->post("purpose") )== 'product'){
			(  $this->validation->StringValid( $this->security->xss_clean( $this->input->post("product_name") ), 'Product Name' )  != '')  ? $output .=$this->validation->StringValid( $this->security->xss_clean( $this->input->post("product_name") ) , 'Product Name ').'<br />' : '';
			
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
		$data = $this->be_product->Get_product_Details( $userdata->user_id, $this->perPage, $start_no, $userdata->group_id );
		echo json_encode($data);
		die;
	}

	public function delete()
	{
		$product_id = $this->security->xss_clean( $this->input->post("product_id") );
		 $get_single_employee = $this->be_product->DeleteProduct( $product_id );
		 echo 'success';
		 die;

	}

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */
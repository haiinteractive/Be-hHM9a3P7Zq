<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Category extends CI_Controller {

	public function __construct()
	{
	        parent::__construct();
	        $this->load->library('core/validation');
	        $this->load->library('category/be_category');
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
  			     $total_users = $this->be_category->Get_category_Count( $userdata->user_id, $userdata->group_id );
					
				      $arg = array(
  			        		'total_items'	=> $total_users,
  			        		'pagination'	=> $this->perPage
  			        	);
					
			        $filename = 'category/list.html';
			        $this->smartyci->assign('arg', $arg );
			        $this->smartyci->assign('filename',$filename);
			        $this->smartyci->display('category/list.html'); 
		}

	}
	
	public function edit()
	{
		$category_id = $this->security->xss_clean( $this->input->post("category_id") );
		 $get_single_category = $this->be_category->get_single_category( $category_id );
		 echo json_encode($get_single_category);
		die;
	}
	
	public function update()
	{
		  $userdata = (object)$this->session->userdata('user');
		  
		 $category_id = $this->security->xss_clean( $this->input->post("cat_id") );
		  
		$purpose = $this->security->xss_clean( $this->input->post("purpose") );
		
		$output = $this->EmpValidation( );	// Validating all Inputs
		
		if($purpose == 'category'){
			
			( !empty($output) ) ? $output = $output : $output = 'success';
			
		if($output == 'success')
			{
					$response = $this->be_category->updateNewcategory( $this->security->xss_clean( $this->input->post("cat_name") ), $this->security->xss_clean( $this->input->post("cat_status") ), $userdata->user_id , $category_id );
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
					$response = $this->be_category->AddNewcategory( $userdata->group_id, $this->security->xss_clean( $this->input->post("cat_name") ), $userdata->user_id );
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
		if($this->security->xss_clean( $this->input->post("purpose") )== 'category'){
			(  $this->validation->StringValid( $this->security->xss_clean( $this->input->post("cat_name") ), 'Category Name' )  != '')  ? $output .=$this->validation->StringValid( $this->security->xss_clean( $this->input->post("cat_name") ) , 'Category Name ').'<br />' : '';
			
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
		$data = $this->be_category->Get_category_Details( $userdata->user_id, $this->perPage, $start_no, $userdata->group_id );
		echo json_encode($data);
		die;
	}

	public function delete()
	{
		$category_id = $this->security->xss_clean( $this->input->post("category_id") );
		 $get_single_employee = $this->be_category->DeleteCategory( $category_id );
		 echo 'success';
		 die;

	}
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */
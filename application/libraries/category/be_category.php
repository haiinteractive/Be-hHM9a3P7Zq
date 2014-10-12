<?php
/**
 * The Users class file.
 *
 * @category Users
 * @package  None
 * @author   Vijayaragavan S
 * @license  http://www.becouds.com 
 * @link     employee/employee.php
 * 
 */
 
class Be_Category
{
    private $_CI;    
    

    /**
     * Constructor.
     * Loads the CI instance, the users_model and some useful helpers.
     * Creates a users_lib object, populated if passed a valid $init.    
     * @param string/int $init - user id or email of user to load   
     * @access public   
     * @return none
     */
    public function __construct($init = false)
    {
        $this->_CI = & get_instance();
        $this->_CI->load->model('category/category_model');         
        $this->current_date = date('Y-m-d H:i:s');
    }
    
   

    function Get_category_Details( $user_id, $perpage, $start_no )
    {
        $response = false;
                $response = $this->_CI->category_model->Get_category_Details(  $user_id, $perpage, $start_no );
        return $response;
    }
	
	 function get_single_category( $category_id)
    {
        $response = false;
                $response = $this->_CI->category_model->get_single_category(  $category_id );
        return $response;
    }

    function Get_category_Count( $created_by ){
        $response = false;
                $response = $this->_CI->category_model->Get_category_Count( $created_by ) ;
        return $response;
    }

    function AddNewcategory( $cat_name, $user_created_by )
    {
       $response = false;
                $arg = array(
                                'cat_name'   =>  $cat_name,
                                'status'        => '1',
                                'created_by'    => $user_created_by,
                                'created_on'   => $this->current_date
                    );
                $response = $this->_CI->category_model->AddNewcategory(  $arg );
        return $response;
    }
	
	function updateNewcategory($cat_name, $cat_status, $user_created_by,$category_id)
	{
			 $response = false;
			
				$arg = array(
                                'cat_name'   =>  $cat_name,
                                'status'        => $cat_status,
                                'created_by'        => $user_created_by,
                                'modified_on'       => $this->current_date
                    );
			
                $response = $this->_CI->category_model->updateNewcategory(  $arg ,$category_id );
        return $response;
	}
}

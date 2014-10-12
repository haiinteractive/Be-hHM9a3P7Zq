<?php
/**
 * The Users class file.
 *
 * @product Users
 * @package  None
 * @author   Vijayaragavan S
 * @license  http://www.becouds.com 
 * @link     employee/employee.php
 * 
 */
 
class Be_Product
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
        $this->_CI->load->model('product/product_model');         
        $this->current_date = date('Y-m-d H:i:s');
    }
    
   

    function Get_product_Details( $user_id, $perpage, $start_no )
    {
        $response = false;
                $response = $this->_CI->product_model->Get_product_Details(  $user_id, $perpage, $start_no );
        return $response;
    }
	
	 function get_single_product( $product_id)
    {
        $response = false;
                $response = $this->_CI->product_model->get_single_product(  $product_id );
        return $response;
    }

    function Get_product_Count( $created_by ){
        $response = false;
                $response = $this->_CI->product_model->Get_product_Count( $created_by ) ;
        return $response;
    }

    function AddNewproduct( $product_name, $user_created_by )
    {
       $response = false;
                $arg = array(
                                'product_name'   =>  $product_name,
                                'status'        => '1',
                                'created_by'    => $user_created_by,
                                'created_on'   => $this->current_date
                    );
                $response = $this->_CI->product_model->AddNewproduct(  $arg );
        return $response;
    }
	
	function updateNewproduct($product_name, $product_status, $user_created_by,$product_id)
	{
			 $response = false;
			
				$arg = array(
                                'product_name'   =>  $product_name,
                                'status'        => $product_status,
                                'created_by'        => $user_created_by,
                                'modified_on'       => $this->current_date
                    );
			
                $response = $this->_CI->product_model->updateNewproduct(  $arg ,$product_id );
        return $response;
	}
}

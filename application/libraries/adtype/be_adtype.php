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
 
class Be_Adtype
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
        $this->_CI->load->model('adtype/adtype_model');         
        $this->current_date = date('Y-m-d H:i:s');
    }
    
    function getform_type( )
    {
        $response = false;
                $response = $this->_CI->adtype_model->getform_type(  );
        return $response;
    }

    function Get_adtype_Details( $user_id, $perpage, $start_no )
    {
        $response = false;
                $response = $this->_CI->adtype_model->Get_adtype_Details(  $user_id, $perpage, $start_no );
        return $response;
    }
	
	 function get_single_adtype( $adtype_id)
    {
        $response = false;
                $response = $this->_CI->adtype_model->get_single_adtype(  $adtype_id );
        return $response;
    }

    function Get_adtype_Count( $created_by, $group_id ){
        $response = false;
                $response = $this->_CI->adtype_model->Get_adtype_Count( $created_by, $group_id ) ;
        return $response;
    }
    function DeleteAdtype( $adtype_id )
    {
        $response = false;
                $response = $this->_CI->adtype_model->DeleteAdtype( $adtype_id ) ;
        return $response;
    }
    function AddNewadtype( $group_id, $form_adtype, $ad_type_name, $ad_type_code, $ad_type_rate, $user_created_by )
    {
       $response = false;
                $arg = array(
                                'group_id'      => $group_id,
                                'form_type'   =>  $form_adtype,
                                'ad_type_name'        => $ad_type_name,
                                'ad_type_code'            => $ad_type_code,
                                'ad_type_rate'         => $ad_type_rate,
                                'ad_type_status'         => '1',
                                'created_by'        => $user_created_by,
                                'user_created_on'       => $this->current_date
                    );
                $response = $this->_CI->adtype_model->AddNewadtype(  $arg );
        return $response;
    }
	
	function updateNewadtype($form_adtype, $ad_type_name, $ad_type_code, $ad_type_rate,$status,$user_created_by,$adtype_id)
	{
			 $response = false;
			
				$arg = array(
                                'form_type'   =>  $form_adtype,
                                'ad_type_name'        => $ad_type_name,
                                'ad_type_code'            => $ad_type_code,
                                'ad_type_rate'         => $ad_type_rate,
                                'ad_type_status'         => $status,
                                'created_by'        => $user_created_by,
                                'user_modified_on'       => $this->current_date
                    );
			
                $response = $this->_CI->adtype_model->updateNewadtype(  $arg ,$adtype_id );
        return $response;
	}
}

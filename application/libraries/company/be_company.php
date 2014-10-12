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
 
class Be_company
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
        $this->_CI->load->model('company/company_model');         
        $this->current_date = date('Y-m-d H:i:s');
    }
    
   function Get_company_Details( $user_id, $perpage, $start_no )
    {
        $response = false;
                $response = $this->_CI->company_model->Get_company_Details(  $user_id, $perpage, $start_no );
        return $response;
    }
	
	 function get_single_company( $company_id)
    {
        $response = false;
                $response = $this->_CI->company_model->get_single_company(  $company_id );
        return $response;
    }

    function Get_company_Count( $created_by ){
        $response = false;
                $response = $this->_CI->company_model->Get_company_Count( $created_by ) ;
        return $response;
    }

    function AddNewcompany( $c_name, $c_person, $address, $pincode, $phone, $alt_phone, $email, $alt_email, $created_by )
    {
       $response = false;
                $arg = array(
                                'c_name'   =>  $c_name,
                                'c_person'        => $c_person,
                                'c_address'            => $address,
                                'c_pincode'         => $pincode,
                                'c_phone'         => $phone,
								 'c_alterphone'         =>$alt_phone,
							    'c_email'         => $email,
							   'c_alteremail'         => $alt_email,
							    'c_status'         => '1',
                                'c_createdby'        => $created_by,
                                'created_on'       => $this->current_date
                    );
                $response = $this->_CI->company_model->AddNewcompany(  $arg );
        return $response;
    }
	
	function updateNewcompany($co_name, $co_person, $caddress, $cpin_code,$cphone,$cemail,$comp_status,$user_created_by,$comp_id)
	{
			 $response = false;
			
					$arg = array(
                                'c_name'   =>  $co_name,
                                'c_person'  => $co_person,
                                'c_address'  => $caddress,
                                'c_pincode'   => $cpin_code,
                                'c_phone'   => $cphone,
							    'c_email'   => $cemail,
							    'c_status'  => $comp_status,
                                'c_createdby' => $user_created_by,
                                'modified_on' => $this->current_date
                    );
			
                $response = $this->_CI->company_model->updateNewcompany(  $arg ,$comp_id );
        return $response;
	}
}

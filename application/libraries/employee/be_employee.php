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
 
class Be_Employee
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
        $this->_CI->load->model('employee/employee_model');         
        $this->current_date = date('Y-m-d H:i:s');
    }
    
    function GetUserRoles( $group_id )
    {
        $response = false;
                $response = $this->_CI->employee_model->GetUserRoles( $group_id  );
        return $response;
    }

    function Get_Employee_Details( $user_id, $perpage, $start_no )
    {
        $response = false;
                $response = $this->_CI->employee_model->Get_Employee_Details(  $user_id, $perpage, $start_no );
        return $response;
    }
	
 function get_single_employee( $user_id, $group_id )
    {
        $response = false;
                $response = $this->_CI->employee_model->get_single_employee(  $user_id, $group_id  );
        return $response;
    }

    function Get_Employees_Count( $created_by, $group_id ){
        $response = false;
                $response = $this->_CI->employee_model->Get_Employees_Count( $created_by, $group_id ) ;
        return $response;
    }

    function DeleteEmployee( $user_id, $group_id )
    {
        $response = false;
                $response = $this->_CI->employee_model->DeleteEmployee( $user_id, $group_id ) ;
        return $response;
    }

    function AddNewUser( $group_id, $user_first_name, $user_last_name, $user_email, $user_pwd, $user_role, $user_created_by )
    {
       $response = false;
                $arg = array(
                                'group_id'                => $group_id,
                                'user_first_name'   =>  $user_first_name,
                                'user_last_name'        => $user_last_name,
                                'user_email'            => $user_email,
                                'user_password'         => md5($user_pwd),
                                'user_type'         => $user_role,
                                'created_by'        => $user_created_by,
                                'user_created_on'       => $this->current_date
                    );
                $response = $this->_CI->employee_model->AddNewUser(  $arg );
        return $response;
    }
	
	function updateNewUser($user_first_name, $user_last_name, $user_email, $user_pwd, $user_role, $use_status, $user_created_by, $user_id)
	{
			 $response = false;
			
				$arg = array(
                                'user_first_name'   =>  $user_first_name,
                                'user_last_name'    => $user_last_name,
                                'user_email'        => $user_email,
                                'user_password'     => md5($user_pwd),
                                'user_type'         => $user_role,
								'user_is_active'    => $use_status,
                                'created_by'        => $user_created_by,
                                'user_modified_on'  => $this->current_date
                    );
			
                $response = $this->_CI->employee_model->updateNewUser(  $arg ,$user_id );
        return $response;
	}
}

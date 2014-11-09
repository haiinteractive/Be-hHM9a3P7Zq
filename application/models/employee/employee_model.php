<?php
/**
 * The users model
 *
 * @category Users
 * @package  None
 * @author   Vijayaragavan S
 * @license  http://www.beclouds.com
 * @link     models/employee_model.php
 *
 */
 
class Employee_Model extends CI_Model
{
 	 public $_dataMap = ''; 
            function __construct(){
                  // $media = $this->load->database('media', TRUE);
               }
            function GetUserRoles( $group_id  )
            {
                        $this->db->select("user_type_id, user_type_name, user_type_code");
                        $this->db->from(SUBSCRIBER_DB_NAME.'.'.'t_user_type');      
                        $this->db->where(array('user_type_is_active'=>'1' ));        
                        $query = $this->db->get();
                        $db_results = $query->result_array();                   
                         if (count($db_results) > 0 )
                        {            
                                return $db_results;
                        }else{
                                return '';
                        }
            }

            function AddNewUser( $arg )
            {
                            $this->db->insert(SUBSCRIBER_DB_NAME.'.t_users', $arg );
                            return $this->db->insert_id(); 
            }
			
	function updateNewUser($arg , $id)
	{
		$this->db->where('user_id', $id);
		$this->db->update(SUBSCRIBER_DB_NAME.'.t_users', $arg);
		return '1'; 
	}
			

            function Get_Employee_Details( $user_id, $perpage, $start_no ){
    	 //   $result = $this->db->query("CALL Employees_List('{$user_id}', '{$start_no}', '{$perpage}');");
    	$this->db->select("user_id, user_first_name, user_last_name, ut.user_type_id, ut.user_type_name, ut.user_type_code, user_email, created_by, user_created_on");
              $this->db->from('t_users u');      
              $this->db->join('t_user_type ut', 'ut.user_type_id = u.user_type', 'left');  
	$this->db->where(array('u.user_is_active'=>'1', 'u.created_by' => $user_id));  
	$this->db->limit($perpage, $start_no);  
            $query = $this->db->get();
            $db_results = $query->result_array();    
                     
                         if (count($db_results) > 0 )
                        {            
                                return $db_results;
                        }else{
                                return '';
                        }
            }
			
	function get_single_employee($user_id, $group_id )
	{
                        $this->db->select("*");
                        $this->db->from('t_users');      
                        $this->db->where(array('user_id'=>$user_id, 'group_id' => $group_id ));        
                        $query = $this->db->get();
                     $db_results = $query->result_array(); 
					 
					  if (count($db_results) > 0 )
                        {            
                                return $db_results;
                        }else{
                                return '';
                        }
			}

            function Get_Employees_Count( $created_by,$group_id ){
                        $this->db->select("count(1) as total_employees");
                        $this->db->from(SUBSCRIBER_DB_NAME.'.'.'t_users');      
                        $this->db->where(array('user_is_active'=>'1', 'created_by' => $created_by, 'group_id' => $group_id));        
                        $query = $this->db->get();
                        $db_results = $query->result_array();                   
                         if (count($db_results) > 0 )
                        {            
                                return $db_results[0]['total_employees'];
                        }else{
                                return '';
                        }
                    }

            function DeleteEmployee( $user_id, $group_id )
            {
                    $this->db->where( array( 't_users.user_id'=> $user_id, 't_users.group_id' => $group_id ) );
                    $this->db->delete(SUBSCRIBER_DB_NAME.'.t_users');
                    return 1;
            }
}
/* End of file employee_model.php */
?>
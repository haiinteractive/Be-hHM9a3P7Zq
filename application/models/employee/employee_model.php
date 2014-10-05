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
            function GetUserRoles(  )
            {
                        $this->db->select("user_type_id, user_type_name, user_type_code");
                        $this->db->from(SUBSCRIBER_DB_NAME.'.'.'t_user_type');      
                        $this->db->where(array('user_type_is_active'=>'1'));        
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

            function Get_Employee_Details( $user_id, $perpage, $start_no ){
                        $result = $this->db->query("CALL Employees_List('{$user_id}', '{$start_no}', '{$perpage}');");
                       $db_results = $result->result_array();
                       $result->next_result(); // Dump the extra resultset.
                        $result->free_result(); // Does what it says.
                         if (count($db_results) > 0 )
                        {            
                                return $db_results;
                        }else{
                                return '';
                        }
            }

            function Get_Employees_Count( $created_by ){
                        $this->db->select("count(1) as total_employees");
                        $this->db->from(SUBSCRIBER_DB_NAME.'.'.'t_users');      
                        $this->db->where(array('user_is_active'=>'1', 'created_by' => $created_by));        
                        $query = $this->db->get();
                        $db_results = $query->result_array();                   
                         if (count($db_results) > 0 )
                        {            
                                return $db_results[0]['total_employees'];
                        }else{
                                return '';
                        }
                    }
}
/* End of file employee_model.php */
?>
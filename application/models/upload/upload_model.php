<?php
/**
 * The users model
 *
 * @category Users
 * @package  None
 * @author   Vijayaragavan S
 * @license  http://www.beclouds.com
 * @link     upload/upload_model.php
 *
 */
 
class Upload_Model extends CI_Model
{
 	 public $_dataMap = ''; 
            function __construct(){
                  // $media = $this->load->database('REPORT_DB_NAME', TRUE);
               }
            function GetFormType(  )
            {
                        $this->db->select("form_type_id, form_type_name, form_type_code");
                        $this->db->from(REPORT_DB_NAME.'.'.'form_type');      
                        $this->db->where(array('form_type_is_active'=>'1'));
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
            function InsertTempEGInformation( $arg )
            {
                            $this->db->insert(REPORT_DB_NAME.'.'.'temp_pub_information', $arg );
                            return $this->db->insert_id(); 
            }
            function GetCompanyID( $c_name, $groupid )
            {
                        $this->db->select("comp_id");
                        $this->db->from(REPORT_DB_NAME.'.'.'t_company');      
                        $this->db->where(array('c_name'=> "$c_name" ));
                        $query = $this->db->get();
                        $db_results = $query->result();                   
                         if (count($db_results) > 0 )
                        {            
                                return $db_results[0]->comp_id;
                        }else{
                            $arg = array(
                                    'group_id'   => $groupid,
                                    'c_name'    => $c_name
                                );
                            $this->db->insert(REPORT_DB_NAME.'.t_company', $arg );
                            return $this->db->insert_id(); 
                        }

            }
            function InsertTempEGAdData( $arg )
            {
                            $this->db->insert_batch(REPORT_DB_NAME.'.'.'temp_ad_data', $arg );
                            return $this->db->insert_id(); 
            }
            function Get_Employee_Details( $user_id, $perpage, $current_date ){
                        $this->db->select("*");
                        $this->db->from(SUBSCRIBER_DB_NAME.'.'.'t_users');      
                        $this->db->where(array('user_is_active'=>'1', 'created_by' => $user_id));        
                        $query = $this->db->get();
                        $db_results = $query->result_array();                   
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
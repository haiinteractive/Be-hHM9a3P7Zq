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

            function GetCategoryID( $category_name, $group_id, $user_id )
            {
                        $this->db->select("category_id");
                        $this->db->from(REPORT_DB_NAME.'.'.'t_category');      
                        $this->db->where(array('category_name'=> "$category_name" ));
                        $query = $this->db->get();
                        $db_results = $query->result();                   
                         if (count($db_results) > 0 )
                        {            
                                return $db_results[0]->category_id;
                        }else{
                            $arg = array(
                                    'group_id'   => $group_id,
                                    'category_name'    => $category_name,
                                    'created_by'    => $user_id
                                );
                            $this->db->insert(REPORT_DB_NAME.'.t_category', $arg );
                            return $this->db->insert_id(); 
                        }

            }

            function GetAdTypeId( $groupid,  $form_type, $net_pays, $ad_type )
            {
                        $this->db->select("adtype_id");
                        $this->db->from(REPORT_DB_NAME.'.'.'t_adtype');      
                        $this->db->where(array('ad_type_code'=> "$ad_type" ));
                        $query = $this->db->get();
                        $db_results = $query->result();                   
                         if (count($db_results) > 0 )
                        {            
                                return $db_results[0]->adtype_id;
                        }else{
                            $arg = array(
                                    'group_id'  => $groupid,
                                    'form_type'    => $form_type,
                                    'ad_type_code'  => $ad_type,
                                    'ad_type_rate'  => $net_pays,
                                    'user_created_on'   => date('Y-m-d H:i:s')
                                );
                            $this->db->insert(REPORT_DB_NAME.'.t_adtype', $arg );
                            return $this->db->insert_id(); 
                        }

            }

            function GetSalesPersonID( $sales_person_name, $group_id, $user_id, $user_type )
            {
                        $this->db->select("user_id");
                        $this->db->from(SUBSCRIBER_DB_NAME.'.'.'t_users');      
                        $this->db->where(array('user_first_name'=> "$sales_person_name" ));
                        $query = $this->db->get();
                        $db_results = $query->result();                   
                         if (count($db_results) > 0 )
                        {            
                                return $db_results[0]->user_id;
                        }else{
                            $arg = array(
                                    'group_id'   => $group_id,
                                    'user_first_name'    => $sales_person_name,
                                    'created_by'    => $user_id,
                                    'user_type'     => $user_type
                                );
                            $this->db->insert(SUBSCRIBER_DB_NAME.'.t_users', $arg );
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
            function InsertFile( $arg )
            {
                            $this->db->insert(REPORT_DB_NAME.'.csv_files', $arg );
                            return $this->db->insert_id(); 
            }
}
/* End of file employee_model.php */
?>
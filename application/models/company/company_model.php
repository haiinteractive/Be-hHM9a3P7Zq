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
 
class Company_Model extends CI_Model
{
 	 public $_dataMap = ''; 
            function __construct(){
                  // $media = $this->load->database('media', TRUE);
               }
           
		   function AddNewcompany( $arg )
            {
                            $this->db->insert(REPORT_DB_NAME.'.t_company', $arg );
                            return $this->db->insert_id(); 
            }
			
			function updateNewcompany($arg , $id)
			{
					$this->db->where('comp_id', $id);
					$this->db->update(REPORT_DB_NAME.'.t_company', $arg);
					return '1'; 
			}
			

            function Get_company_Details( $user_id, $perpage, $start_no ){
					
					 //   $result = $this->db->query("CALL Employees_List('{$user_id}', '{$start_no}', '{$perpage}');");
					 
					   $this->db->select("*");
                        $this->db->from(REPORT_DB_NAME.'.'.'t_company');      
						$this->db->where(array('c_status '=>'1', 'c_createdby' => 

$user_id));  
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
			
			function get_single_company($company_id)
			{
					 $this->db->select("*");
                        $this->db->from(REPORT_DB_NAME.'.'.'t_company');      
                        $this->db->where(array('comp_id'=>$company_id));        
                        $query = $this->db->get();
                     $db_results = $query->result_array(); 
					 
					  if (count($db_results) > 0 )
                        {            
                                return $db_results;
                        }else{
                                return '';
                        }
			}

            function Get_company_Count( $created_by ){
                        $this->db->select("count(1) as total_company");
                        $this->db->from(REPORT_DB_NAME.'.'.'t_company');      
                        $this->db->where(array('c_status'=>'1', 'c_createdby' => $created_by));        
                        $query = $this->db->get();
                        $db_results = $query->result_array();                   
                         if (count($db_results) > 0 )
                        {            
                                return $db_results[0]['total_company'];
                        }else{
                                return '';
                        }
                    }

            function DeleteCompany( $comp_id )
            {
                    $this->db->where('t_company.comp_id', $comp_id);
                    $this->db->delete(REPORT_DB_NAME.'.t_company');
                    return 1;
            }

}
/* End of file employee_model.php */
?>
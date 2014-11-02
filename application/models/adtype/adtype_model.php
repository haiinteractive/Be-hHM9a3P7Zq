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
 
class Adtype_Model extends CI_Model
{
 	 public $_dataMap = ''; 
            function __construct(){
                  // $media = $this->load->database('media', TRUE);
               }
            function getform_type(  )
            {
                        $this->db->select("*");
                        $this->db->from(REPORT_DB_NAME.'.'.'t_form_adtype');      
                        $query = $this->db->get();
                        $db_results = $query->result_array();                   
                         if (count($db_results) > 0 )
                        {            
                                return $db_results;
                        }else{
                                return '';
                        }
            }

            function AddNewadtype( $arg )
            {
                            $this->db->insert(REPORT_DB_NAME.'.t_adtype', $arg );
                            return $this->db->insert_id(); 
            }
			
	function updateNewadtype($arg , $id)
	{
		$this->db->where('adtype_id', $id);
		$this->db->update(REPORT_DB_NAME.'.t_adtype', $arg);
		return '1'; 
	}
			

            function Get_adtype_Details( $user_id, $perpage, $start_no ){
					
					 //   $result = $this->db->query("CALL Employees_List('{$user_id}', '{$start_no}', '{$perpage}');");
					 
		   $this->db->select("a.adtype_id, a.ad_type_name, a.ad_type_code, a.ad_type_rate, fa.name, a.user_created_on");
                        $this->db->from(REPORT_DB_NAME.'.'.'t_adtype a');      
                        $this->db->join(REPORT_DB_NAME.'.'.'t_form_adtype fa', 'fa.id = a.form_type', 'left');  
		$this->db->where(array('a.ad_type_status '=>'1', 'a.created_by' => $user_id));  
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
			
	function get_single_adtype($adtype_id)
	{
		 $this->db->select("*");
                        $this->db->from(REPORT_DB_NAME.'.'.'t_adtype');      
                        $this->db->where(array('adtype_id'=>$adtype_id));        
                        $query = $this->db->get();
                     $db_results = $query->result_array(); 
	  if (count($db_results) > 0 )
                        {            
                                return $db_results;
                        }else{
                                return '';
                        }
			}

            function Get_adtype_Count( $created_by ){
                        $this->db->select("count(1) as total_adtype");
                        $this->db->from(REPORT_DB_NAME.'.'.'t_adtype');      
                        $this->db->where(array('ad_type_status'=>'1', 'created_by' => $created_by));        
                        $query = $this->db->get();
                        $db_results = $query->result_array();                   
                         if (count($db_results) > 0 )
                        {            
                                return $db_results[0]['total_adtype'];
                        }else{
                                return '';
                        }
                    }
            function DeleteAdtype( $adtype_id )
            {
                    $this->db->where('t_adtype.adtype_id', $adtype_id);
                    $this->db->delete(REPORT_DB_NAME.'.t_adtype');
                    return 1;
            }
}
/* End of file employee_model.php */
?>
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
 
class Category_Model extends CI_Model
{
 	 public $_dataMap = ''; 
            function __construct(){
                  // $media = $this->load->database('media', TRUE);
               }
          

            function AddNewcategory( $arg )
            {
                            $this->db->insert(REPORT_DB_NAME.'.t_category', $arg );
                            return $this->db->insert_id(); 
            }
			
	function updateNewcategory($arg , $id)
	{
                	$this->db->where('category_id', $id);
                	$this->db->update(REPORT_DB_NAME.'.t_category', $arg);
                	return '1'; 
	}
			

            function Get_category_Details( $user_id, $perpage, $start_no, $group_id ){
	//   $result = $this->db->query("CALL Employees_List('{$user_id}', '{$start_no}', '{$perpage}');");
        	           $this->db->select("*");
                        $this->db->from(REPORT_DB_NAME.'.'.'t_category');      
	           $this->db->where(array('status'=>'1', 'created_by' => $user_id, 'group_id' => $group_id));  
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
			
	function get_single_category($category_id)
	{
	         $this->db->select("*");
                        $this->db->from(REPORT_DB_NAME.'.'.'t_category');      
                        $this->db->where(array('category_id'=>$category_id));        
                        $query = $this->db->get();
                        $db_results = $query->result_array(); 
	  if (count($db_results) > 0 )
                        {            
                                return $db_results;
                        }else{
                                return '';
                        }
			}

            function Get_category_Count( $created_by, $group_id ){
                        $this->db->select("count(1) as total_category");
                        $this->db->from(REPORT_DB_NAME.'.'.'t_category');      
                        $this->db->where(array('status'=>'1', 'created_by' => $created_by, 'group_id' => $group_id ));        
                        $query = $this->db->get();
                        $db_results = $query->result_array();                   
                         if (count($db_results) > 0 )
                        {            
                                return $db_results[0]['total_category'];
                        }else{
                                return '';
                        }
                    }
            function DeleteCategory( $category_id )
            {
                    $this->db->where('t_category.category_id', $category_id);
                    $this->db->delete(REPORT_DB_NAME.'.t_category');
                    return 1;
            }

                    
}
/* End of file employee_model.php */
?>
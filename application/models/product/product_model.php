<?php
/**
 * The users model
 *
 * @product Users
 * @package  None
 * @author   Vijayaragavan S
 * @license  http://www.beclouds.com
 * @link     models/employee_model.php
 *
 */
 
class Product_Model extends CI_Model
{
 	 public $_dataMap = ''; 
            function __construct(){
                  // $media = $this->load->database('media', TRUE);
               }
          

            function AddNewproduct( $arg )
            {
                            $this->db->insert(SUBSCRIBER_DB_NAME.'.t_product', $arg );
                            return $this->db->insert_id(); 
            }
			
			function updateNewproduct($arg , $id)
			{
					$this->db->where('product_id', $id);
					$this->db->update(SUBSCRIBER_DB_NAME.'.t_product', $arg);
					return '1'; 
			}
			

            function Get_product_Details( $user_id, $perpage, $start_no ){
					
					 //   $result = $this->db->query("CALL Employees_List('{$user_id}', '{$start_no}', '{$perpage}');");
					 
					   $this->db->select("*");
                        $this->db->from('t_product');      
						$this->db->where(array('status'=>'1', 'created_by' => $user_id));  
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
			
			function get_single_product($product_id)
			{
					 $this->db->select("*");
                        $this->db->from('t_product');      
                        $this->db->where(array('product_id'=>$product_id));        
                        $query = $this->db->get();
                     $db_results = $query->result_array(); 
					 
					  if (count($db_results) > 0 )
                        {            
                                return $db_results;
                        }else{
                                return '';
                        }
			}

            function Get_product_Count( $created_by ){
                        $this->db->select("count(1) as total_product");
                        $this->db->from(SUBSCRIBER_DB_NAME.'.'.'t_product');      
                        $this->db->where(array('status'=>'1', 'created_by' => $created_by));        
                        $query = $this->db->get();
                        $db_results = $query->result_array();                   
                         if (count($db_results) > 0 )
                        {            
                                return $db_results[0]['total_product'];
                        }else{
                                return '';
                        }
                    }
}
/* End of file employee_model.php */
?>
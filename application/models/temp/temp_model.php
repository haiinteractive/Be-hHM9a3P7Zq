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
 
class Temp_Model extends CI_Model
{
 	 public $_dataMap = ''; 
            function __construct(){
                  // $media = $this->load->database('media', TRUE);
                $this->current_date = date('Y-m-d H:i:s');
               }
            function GetTempInfo( $groupid, $perpage, $starts )
            {
                        $this->db->select("*");
                        $this->db->from(REPORT_DB_NAME.'.'.'temp_pub_information pub');
                        $this->db->join(REPORT_DB_NAME.'.'.'t_company com', 'com.comp_id = pub.company_id', 'left');
                        $this->db->join(REPORT_DB_NAME.'.'.'temp_ad_data ada', 'ada.temp_pub_informationid = pub.temp_pub_information_id', 'left');
                        $this->db->where(array('pub.group_id'=> "$groupid"));
	          $this->db->limit($perpage, $starts);  
                        $query = $this->db->get();
                                                
                        $db_results = $query->result_array();                   
                         if (count($db_results) > 0 )
                        {            
                                return $db_results;
                        }else{
                                return '';
                        }
            }
            
            function GetPubTempCount( $groupid )
            {
            	$this->db->select("count(1) as total_items ");
            	$this->db->from(REPORT_DB_NAME.'.'.'temp_pub_information');
            	$this->db->where(array('temp_pub_information.group_id'=> "$groupid"));
            	$query = $this->db->get();
            	
            	$db_results = $query->result_array();
            	if (count($db_results) > 0 )
            	{
            		return $db_results[0]['total_items'];
            	}else{
            		return '';
            	}
            }

            function DeleteAdData( $Id )
            {
                        $this->db->where('temp_ad_data.temp_addataid', $Id);
                        $this->db->delete(REPORT_DB_NAME.'.'.'temp_ad_data');
                        return 1;       
            }

            function Publish_Items( $ids )
            {
                        $ids = explode(',', $ids);
                        $this->db->select("*");
                        $this->db->from(REPORT_DB_NAME.'.'.'temp_pub_information pub');
                        $this->db->join(REPORT_DB_NAME.'.'.'temp_ad_data ada', 'ada.temp_pub_informationid = pub.temp_pub_information_id', 'left');
                        $this->db->where_in('ada.temp_addataid', $ids );
                        $query = $this->db->get();
                        $db_results = $query->result_array();
                     //   $puhed_data = $this->PublishData( $db_results );
                        return $db_results;
            }
            function StorePubInformation( $arg )
            {
                 $this->db->insert(REPORT_DB_NAME.'.'.'t_pub_information', $arg );
                 return $this->db->insert_id();     
             }

             function StoreFrequency( $arg )
             {
                 $this->db->insert(REPORT_DB_NAME.'.'.'t_frequencies', $arg );
                 return $this->db->insert_id();     
             }

             function DeleteFrequency( $delete_fre_ids )
             {
                              $this->db->where_in('temp_ad_data.temp_addataid', array_unique($delete_fre_ids) );
                              $this->db->delete(REPORT_DB_NAME.'.'.'temp_ad_data');
            }

            function DeletePubInformation( $delete_pub_ids )
            {
                            $this->db->where_in('temp_pub_information.temp_pub_information_id', $delete_pub_ids );
                            $this->db->delete(REPORT_DB_NAME.'.'.'temp_pub_information');
            }
            function GetPubInformation( $ro_number, $group_id, $company_id )
            {
                        $this->db->select("t_pub_information_id");
                        $this->db->from(REPORT_DB_NAME.'.'.'t_pub_information pub');
                        $this->db->where(array('pub.ro_number'=> "$ro_number", 'pub.group_id' => "$group_id", 'pub.company_id' => "$company_id"));
                        $this->db->limit(1);
                        $query = $this->db->get();
                        $db_results = $query->result_array();                   
                         if (count($db_results) > 0 )
                        {            
                                return $db_results[0]['t_pub_information_id'];
                          }
            }

            function AvailablePub( $arg )
            {
                         $this->db->select("temp_pub_informationid");
                        $this->db->from(REPORT_DB_NAME.'.'.'temp_ad_data');
                        $this->db->where_in('temp_ad_data.temp_pub_informationid', $arg );
                        $query = $this->db->get();
                        $db_results = $query->result_array();                   
                         if (count($db_results) > 0 )
                        {            
                                return $db_results[0];
                          }
            }

            function CheckPubInformation( $ro_number, $groupid )
            {
                         $this->db->select("t_pub_information_id");
                        $this->db->from(REPORT_DB_NAME.'.'.'t_pub_information');
                        $this->db->where( array( 't_pub_information.ro_number' =>  $ro_number, 't_pub_information.group_id' => $groupid ) );
                        $query = $this->db->get();
                        $db_results = $query->result();                   
                         if (count($db_results) > 0 )
                        {            
                                return $db_results[0]->t_pub_information_id;
                          }
            }
            function GetCategoryID( $category_name, $group_id, $user_id )
            {
                    $db_results = false;
                         $this->db->select("category_id");
                        $this->db->from(REPORT_DB_NAME.'.'.'t_category');
                        $this->db->where( array( 't_category.category_name' =>  $category_name, 't_category.group_id' => $group_id ) );
                        $this->db->limit(1);
                        $query = $this->db->get();
                        $db_results = $query->result_array();                   
                         if (count($db_results) > 0 )
                        {            
                                return $db_results[0]['category_id'];
                        }else{
                                $arg = array(
                                            'group_id'  => $group_id,
                                            'category_name' => $category_name,
                                            'created_by'        => $user_id,
                                            'created_on'        => $this->current_date
                                    );
                                     $this->db->insert(REPORT_DB_NAME.'.'.'t_category', $arg );
                                     return $this->db->insert_id();     
                        }

            }
}
/* End of file employee_model.php */
?>
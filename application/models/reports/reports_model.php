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
 
class Reports_Model extends CI_Model
{
 	 public $_dataMap = ''; 
            function __construct(){
                  // $media = $this->load->database('media', TRUE);
                $this->current_date = date('Y-m-d H:i:s');
               }
            function GetDetailsForRevenueReport( $group_id, $perPage, $starts_from, $startdate, $enddate  )
            {
                        $this->db->select("*");
                        $this->db->from(REPORT_DB_NAME.'.'.'t_pub_information pub');
                        $this->db->join(REPORT_DB_NAME.'.'.'t_frequencies fre', 'fre.t_pub_informationid = pub.t_pub_information_id', 'inner');
                        $this->db->join(REPORT_DB_NAME.'.'.'t_category cat', 'cat.category_id = pub.category_id', 'inner');
                        $this->db->join(REPORT_DB_NAME.'.'.'t_company comp', 'comp.comp_id = pub.company_id', 'inner');
                        $this->db->where(array('pub.group_id'=> "$group_id"));
                        $this->db->where(array('fre.publish_date >=' => $startdate, 'fre.publish_date <=' => $enddate ));        
                        $this->db->group_by('pub.ro_number');
                        $this->db->limit($perPage, $starts_from);  
                        $query = $this->db->get();
                        $db_results = $query->result();                   
                         if (count($db_results) > 0 )
                        {            
                                return $db_results;
                        }else{
                                return '';
                        }
            }

            function Get_Report_Count( $user_id,  $group_id, $startdate, $enddate )
            {
                        $this->db->select("count(1) as total_rows");
                        $this->db->from(REPORT_DB_NAME.'.'.'t_frequencies');      
                        $this->db->join(REPORT_DB_NAME.'.'.'t_pub_information pub', 'pub.t_pub_information_id = t_frequencies.t_pub_informationid', 'inner');
                        $this->db->join(REPORT_DB_NAME.'.'.'t_category cat', 'cat.category_id = pub.category_id', 'inner');
                        $this->db->join(REPORT_DB_NAME.'.'.'t_company comp', 'comp.comp_id = pub.company_id', 'inner');
                        $this->db->where(array('pub.status'=>'1', 'pub.created_by' => $user_id, 'pub.group_id' => $group_id ));        
                        $this->db->where(array('t_frequencies.publish_date >=' => $startdate, 't_frequencies.publish_date <=' => $enddate ));        
                        $this->db->group_by('pub.ro_number');
                        $query = $this->db->get();
                        $db_results = $query->result_array();                   
                         if (count($db_results) > 0 )
                        {            
                                return $db_results[0]['total_rows'];
                        }else{
                                return '';
                        }
            }
            function GetRoDetails( $group_id, $ro_id )
            {
                        $this->db->select("*");
                        $this->db->from(REPORT_DB_NAME.'.'.'t_frequencies');      
                        $this->db->join(REPORT_DB_NAME.'.'.'t_pub_information pub', 'pub.t_pub_information_id = t_frequencies.t_pub_informationid', 'inner');
                        $this->db->join(SUBSCRIBER_DB_NAME.'.'.'t_users user', 'user.user_id = pub.sales_person_id', 'inner');
                        $this->db->join(REPORT_DB_NAME.'.'.'t_adtype adtype', 'adtype.adtype_id = t_frequencies.adtype_id', 'inner');
                        $this->db->join(REPORT_DB_NAME.'.'.'t_category cat', 'cat.category_id = pub.category_id', 'inner');
                        $this->db->join(REPORT_DB_NAME.'.'.'t_company comp', 'comp.comp_id = pub.company_id', 'inner');
                        $this->db->where(array('pub.status'=>'1', 'pub.group_id' => $group_id, 'pub.ro_number' => $ro_id ));        
                        $query = $this->db->get();
                        $db_results = $query->result_array();                   
                         if (count($db_results) > 0 )
                        {            
                                return $db_results[0];
                        }else{
                                return '';
                        }
            }
            function GetAdTypesDetails( $group_id, $ro_id )
            {
                        $this->db->select("*");
                        $this->db->from(REPORT_DB_NAME.'.'.'t_frequencies');      
                        $this->db->join(REPORT_DB_NAME.'.'.'t_pub_information pub', 'pub.t_pub_information_id = t_frequencies.t_pub_informationid', 'inner');
                        $this->db->join(REPORT_DB_NAME.'.'.'t_adtype adtype', 'adtype.adtype_id = t_frequencies.adtype_id', 'inner');
                        $this->db->where(array('pub.status'=>'1', 'pub.group_id' => $group_id, 'pub.ro_number' => $ro_id ));        
                        $query = $this->db->get();
                        $db_results = $query->result_array();                   
                         if (count($db_results) > 0 )
                        {            
                                return $db_results;
                        }else{
                                return false;
                        }
            }

            function GetDetailsForIssueReport( $group_id, $perPage, $starts_from, $defaultWhere )
            {
                        $this->db->select("*");
                        //$this->db->select("*, COUNT(ad_data_id) as qty, SUM(ad_data.offered_rate) as net_bill");
                    $this->db->from(REPORT_DB_NAME.'.t_pub_information');
                    $this->db->join(REPORT_DB_NAME.'.t_frequencies', 't_frequencies.t_pub_informationid = t_pub_information.t_pub_information_id', 'inner');
                    $this->db->join(REPORT_DB_NAME.'.t_adtype', 't_adtype.adtype_id = t_frequencies.publish_type', 'inner');
                    $this->db->join(REPORT_DB_NAME.'.t_category', 't_category.category_id = t_pub_information.category_id', 'inner');
                    $this->db->join(REPORT_DB_NAME.'.form_type', 'form_type.form_type_id = t_adtype.form_type', 'inner');
                    $this->db->join(REPORT_DB_NAME.'.t_company', 't_company.comp_id = t_pub_information.company_id', 'inner');
                    $this->db->where(array('t_pub_information.status'=>'1', 't_frequencies.is_active'=>'1'));
                    $this->db->where( $defaultWhere );
                    $query = $this->db->get();
                    $db_results = $query->result_array();        
                    if (count($db_results) > 0 )
                    { 
                        return $db_results;
                    } else {            
                        return FALSE;
                    }       
            }



            function GetAllProducts(  )
            {
                        $this->db->select("*");
                        $this->db->from(REPORT_DB_NAME.'.'.'form_type');
                        $query = $this->db->get();
                        $db_results = $query->result_array(); 
                         if (count($db_results) > 0 )
                        {            
                                return $db_results;
                        }else{
                                return '';
                        }
            }

            function GetAllCities(  $group_id )
            {
                        $this->db->select("*");
                        $this->db->from(REPORT_DB_NAME.'.'.'cities');
                        $this->db->where(array('cities.group_id'=>$group_id));        
                        $query = $this->db->get();
                        $db_results = $query->result_array(); 
                         if (count($db_results) > 0 )
                        {            
                                return $db_results;
                        }else{
                                return '';
                        }
            }

            function GetFormTypes( $group_id )
            {
                        $this->db->select("*");
                        $this->db->from(REPORT_DB_NAME.'.'.'t_adtype');
                        $this->db->where(array('t_adtype.group_id'=>$group_id));        
                        $query = $this->db->get();
                        $db_results = $query->result_array(); 
                         if (count($db_results) > 0 )
                        {            
                                return $db_results;
                        }else{
                                return '';
                        }
            }
    }
/* End of file employee_model.php */
?>
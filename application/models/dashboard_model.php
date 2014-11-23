<?php
/**
 * The users model
 *
 * @category Users
 * @package  None
 * @author   Anoop kP
 * @license  http://www.flycell.com Flycell
 * @link     libraries/core/users.php
 *
 */
 
class Dashboard_Model extends CI_Model
{
 
            function TotalRackAmount( $group_id, $startdate, $enddate )
            {
                        $this->db->select("SUM( ad_type_rate ) as totalrackamount");
                        $this->db->from(REPORT_DB_NAME.'.'.'t_pub_information pub');
                        $this->db->join(REPORT_DB_NAME.'.'.'t_frequencies fre', 'fre.t_pub_informationid = pub.t_pub_information_id', 'inner');
                        $this->db->join(REPORT_DB_NAME.'.'.'t_adtype ad', 'ad.adtype_id = fre.adtype_id', 'inner');
                        $this->db->where(array('pub.group_id'=> "$group_id"));
                        $this->db->where(array('fre.publish_date >=' => $startdate, 'fre.publish_date <=' => $enddate ));        
                        $query = $this->db->get();
                        $db_results = $query->result_array();                   
                         if (count($db_results) > 0 )
                        {            
                                return $db_results[0];
                        }else{
                                return 'invalid';
                        }
            } 

            function TotalOfferedAmount( $group_id, $startdate, $enddate )
            {
                        $this->db->select("SUM( offered_rate ) as totalofferedamount");
                        $this->db->from(REPORT_DB_NAME.'.'.'t_frequencies fre');
                        $this->db->join(REPORT_DB_NAME.'.'.'t_pub_information pub', ' pub.t_pub_information_id = fre.t_pub_informationid', 'inner');
                        $this->db->where(array('pub.group_id'=> "$group_id"));
                        $this->db->where(array('fre.publish_date >=' => $startdate, 'fre.publish_date <=' => $enddate ));        
                        $query = $this->db->get();
                        $db_results = $query->result_array();                   
                         if (count($db_results) > 0 )
                        {            
                                return $db_results[0];
                        }else{
                                return 'invalid';
                        }
            } 

            function TotalNewOrderAmount( $group_id, $startdate, $enddate )
            {
                        $this->db->select("SUM( net_amount ) as totalneworderamount");
                        $this->db->from(REPORT_DB_NAME.'.'.'t_pub_information pub');
                        $this->db->where(array('pub.group_id'=> "$group_id"));
                        $this->db->where(array('pub.approved_on >=' => $startdate, 'pub.approved_on <=' => $enddate ));        
                        $query = $this->db->get();
                        $db_results = $query->result_array();                   
                         if (count($db_results) > 0 )
                        {            
                                return $db_results[0];
                        }else{
                                return 'invalid';
                        }
            } 

            function NewSignedCustomer( $group_id, $startdate, $enddate )
            {
                        $this->db->select("COUNT( comp_id ) as totalnewsignedcustomer");
                        $this->db->from(REPORT_DB_NAME.'.'.'t_company comp');
                        $this->db->where(array('comp.group_id'=> "$group_id"));
                        $this->db->where(array('comp.created_on >=' => $startdate, 'comp.created_on <=' => $enddate ));        
                        $query = $this->db->get();
                        $db_results = $query->result_array();                   
                         if (count($db_results) > 0 )
                        {            
                                return $db_results[0];
                        }else{
                                return 'invalid';
                        }

            } 

            function RevenueChartData( $group_id, $startdate, $enddate )
            {
                        $this->db->select("SUM(offered_rate) as offered_rate, publish_date");
                        $this->db->from(REPORT_DB_NAME.'.'.'t_frequencies fre');
                        $this->db->join(REPORT_DB_NAME.'.'.'t_pub_information pub', ' pub.t_pub_information_id = fre.t_pub_informationid', 'inner');
                        $this->db->where(array('pub.group_id'=> "$group_id"));
                        $this->db->where(array('fre.publish_date >=' => $startdate, 'fre.publish_date <=' => $enddate ));        
                        $this->db->group_by('fre.publish_date');
                        $query = $this->db->get();
                        $db_results = $query->result_array();                   
                         if (count($db_results) > 0 )
                        {
                                $reports['cols'][] = array(
                                            "id"    => "A", "label" => "Records", "type"  => "string"
                                    );
                                $reports['cols'][] = array(
                                            "id"    => "B", "label" => "Revenue", "type"  => "number"
                                    );
                                foreach( $db_results as $row )
                                {
                                            $reports['rows'][] = array('c' => array(  array(v => $row['publish_date']), array(v => (int)$row['offered_rate']) ) );
                                }
                        }else{
                                return 'invalid';
                        }
                        return $reports;

            } 
        }
/* End of file users_model.php */
?>
<?php
/**
 * The Users class file.
 *
 * @category Users
 * @package  None
 * @author   Anoop KP
 * @license  http://www.skillsweet.com 
 * @link     models/users_model.php
 * 
 */
 
class Be_Temp
{
    private $_CI;    
    

    /**
     * Constructor.
     * Loads the CI instance, the users_model and some useful helpers.
     * Creates a users_lib object, populated if passed a valid $init.    
     * @param string/int $init - user id or email of user to load   
     * @access public   
     * @return none
     */
    public function __construct($init = false)
    {
        $this->_CI = & get_instance();
        $this->_CI->load->model('temp/temp_model');         
        $this->current_date = date('Y-m-d H:i:s');
    }
    
    function GetTempInfo( $groupid, $perpage, $starts )
    {
        $response = false;
        $response = $this->_CI->temp_model->GetTempInfo( $groupid, $perpage, $starts );
        return $response;
    }
    
    function GetPubTempCount( $groupid )
    {
    	$response = false;
    	$response = $this->_CI->temp_model->GetPubTempCount( $groupid );
    	return $response;
    }

    function DeleteAdData( $id )
    {
        $response = false;
        $response = $this->_CI->temp_model->DeleteAdData( $id );
        return $response;
    }

    function Publish_Items( $ids )
    {
        $response = false;
        $response = $this->_CI->temp_model->Publish_Items( $ids );
        $output = $this->Publish( $response );
        return $output;
    }

    function Publish( $response )
    {
                $delete_pub_ids =  $pub_info = $delete_fre_ids = array();
                       foreach( $response as $key => $result )
                        {
                                    // Starts for Pub Information
                                         $pub_info['group_id'] = $result['group_id'];
                                         $pub_info['ro_number'] = $result['ro_number'];
                                         $pub_info['company_id'] = $result['company_id'];
                                         $pub_info['form_type'] = $result['form_type'];
                                         $pub_info['category_id'] = $result['category_id'];
                                         $pub_info['net_amount'] = $result['net_amount'];
                                         $pub_info['city'] = $result['city'];
                                         $pub_info['sales_person_id'] = $result['sales_person_id'];
                                         $pub_info['approved_by'] = $result['approved_by'];
                                         $pub_info['created_on'] = $result['created_on'];
                                         $pub_info['approved_on'] = $result['approved_on'];
                                         $pub_info['special_instruction'] = $result['special_instruction'];
                                         $pub_info['created_by'] = $result['created_by'];
                                         $pub_info['status'] = $result['status'];
                                         $check_pub_information = $this->_CI->temp_model->CheckPubInformation( $result['ro_number'] , $result['group_id'] );   
                                         if( $check_pub_information == '')
                                         {
                                                $inserted_pub_information = $this->_CI->temp_model->StorePubInformation( $pub_info );
                                         }
                                       array_push( $delete_pub_ids, $result['temp_pub_information_id'] );
                                       // Ends Pub Information

                                       // Starts Ad Data
                                       $pub_information_id = $this->_CI->temp_model->GetPubInformation( $result['ro_number'], $result['group_id'], $result['company_id'] );
                                       $frequencies_info['t_pub_informationid']    = $pub_information_id;
                                       $frequencies_info['month']    = $result['month'];
                                       $frequencies_info['year']    = $result['year'];
                                       $frequencies_info['session']    = $result['session'];
                                       $frequencies_info['city']    = $result['city'];
                                       $frequencies_info['publish_date']    = $result['publish_date'];
                                       $frequencies_info['publish_type']    = $result['publish_type'];
                                       $frequencies_info['offered_rate']    = $result['offered_rate'];
                                       $inserted_frequency = $this->_CI->temp_model->StoreFrequency( $frequencies_info );
                                       array_push( $delete_fre_ids, $result['temp_addataid'] );
                            }
                            $this->_CI->temp_model->DeleteFrequency( $delete_fre_ids );
                            $avail_arg = $this->_CI->temp_model->AvailablePub( $delete_pub_ids );  
                            ($avail_arg != '' )  ? $delete_pub_ids = array_diff( $delete_pub_ids, $avail_arg ) : $delete_pub_ids = $delete_pub_ids ;
                            if( $delete_pub_ids != '' && $delete_pub_ids != null && count( $delete_pub_ids ) > 0 )
                            {
                                $this->_CI->temp_model->DeletePubInformation( $delete_pub_ids );
                            }
                           // return $delete_pub_ids;

    } 
}

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
 
class Be_Reports
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
        $this->_CI->load->model('reports/reports_model');         
        $this->current_date = date('Y-m-d H:i:s');
    }
    
             function Get_Report_Count( $user_id, $group_id, $startdate, $enddate )
             {
                         $response = false;
                        $response = $this->_CI->reports_model->Get_Report_Count( $user_id, $group_id, $startdate, $enddate );
                        return $response;
            }
	function GetDetailsForRevenueReport( $group_id, $perPage, $starts_from, $startdate, $enddate )
	{
		 $response = false;
		$response = $this->_CI->reports_model->GetDetailsForRevenueReport( $group_id, $perPage, $starts_from , $startdate, $enddate);
		return $response;
	}

            function GetRoDetails( $group_id, $ro_id, $startdate, $enddate )
            {
                             $response = false;
                            $response = $this->_CI->reports_model->GetRoDetails( $group_id, $ro_id, $startdate, $enddate );
                            return $response;
            }

            function GetAdTypesDetails( $group_id, $ro_id )
            {
                             $response = false;
                            $response = $this->_CI->reports_model->GetAdTypesDetails( $group_id, $ro_id );
                            return $response;
            }
}

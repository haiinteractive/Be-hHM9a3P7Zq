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
 
class Be_Dashboard
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
        $this->_CI->load->model('dashboard_model');         
        $this->current_date = date('Y-m-d H:i:s');
    }
    
        function  TotalRackAmount( $group_id, $startdate, $enddate )
        {
                $response = false;
                $response = $this->_CI->dashboard_model->TotalRackAmount( $group_id, $startdate, $enddate );
                return $response;
        }
        function  TotalOfferedAmount( $group_id, $startdate, $enddate )
        {
                $response = false;
                $response = $this->_CI->dashboard_model->TotalOfferedAmount( $group_id, $startdate, $enddate );
                return $response;
        }

        function  TotalNewOrderAmount( $group_id, $startdate, $enddate )
        {
                $response = false;
                $response = $this->_CI->dashboard_model->TotalNewOrderAmount( $group_id, $startdate, $enddate );
                return $response;
        }

        function  NewSignedCustomer( $group_id, $startdate, $enddate )
        {
                $response = false;
                $response = $this->_CI->dashboard_model->NewSignedCustomer( $group_id, $startdate, $enddate );
                return $response;
        }

}

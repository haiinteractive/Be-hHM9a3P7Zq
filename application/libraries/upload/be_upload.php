<?php
/**
 * The Users class file.
 *
 * @category Upload
 * @package  None
 * @author   Vijayaragavan S
 * @license  http://www.becouds.com 
 * @link     be_upload/upload.php
 * 
 */
 
class Be_Upload
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
        $this->_CI->load->model('upload/upload_model');         
        $this->current_date = date('Y-m-d H:i:s');
    }
    
    function GetFormType( )
    {
        $response = false;
                $response = $this->_CI->upload_model->GetFormType(  );
        return $response;
    }

    function Get_Employee_Details( $user_id, $perpage, $current_date )
    {
        $response = false;
                $response = $this->_CI->employee_model->Get_Employee_Details(  $user_id, $perpage, $current_date );
        return $response;
    }

    function Get_Employees_Count( $created_by ){
        $response = false;
                $response = $this->_CI->employee_model->Get_Employees_Count( $created_by ) ;
        return $response;
    }

    function AddNewUser( $user_first_name, $user_last_name, $user_email, $user_pwd, $user_role, $user_created_by )
    {
       $response = false;
                $arg = array(
                                'user_first_name'   =>  $user_first_name,
                                'user_last_name'        => $user_last_name,
                                'user_email'            => $user_email,
                                'user_password'         => md5($user_pwd),
                                'user_type'         => $user_role,
                                'created_by'        => $user_created_by,
                                'user_created_on'       => $this->current_date
                    );
                $response = $this->_CI->employee_model->AddNewUser(  $arg );
        return $response;
    }

    public function InsertTempEGInformation( $arg )
    {
        $response = false;
                $response = $this->_CI->upload_model->InsertTempEGInformation(  $arg );
                if($response){
                    $this->InsertTempEGAdData( $response, $arg );
                }
        return $response;
    }

    public function InsertTempEGAdData( $pubid, $arg )
    {
                $response = false;
                $ad_arg = array();
                $net_pays = explode(';', $arg['net_amount']);
                $pub_format = explode(';', $arg['session']);
                $offered_rate = explode(';', $arg['offered_amount']);
                $publish_dates = explode(';', $arg['frequency']);
                $ad_codes = explode(';', $arg['ad_code']);
                $total_arg = count($net_pays);
                for( $starts_with = 0; $starts_with < $total_arg; $starts_with++)
                {
                            $dat = explode("-", trim($publish_dates[$starts_with]));
                            $ordered_month = date('m', strtotime($dat[1]));
                            $ordered_year = date('Y', strtotime($dat[2]));
                            $publish_date = $ordered_year."-".$ordered_month."-01";
                            $ad_info = array(
                                'temp_pub_informationid'    => $pubid, 
                                'month' => $ordered_month,
                                'year'  => $ordered_year,
                                'session' => $dat[0],
                                'city'    => $arg['city'],
                                'publish_date' => $publish_date,
                                'publish_type' => 1,
                                'offered_rate' => $offered_rate[$starts_with],
                                'created_on'        => $this->current_date
                            );
                            $ad_arg[] = $ad_info;
                }
                $response = $this->_CI->upload_model->InsertTempEGAdData(  $ad_arg );
                return $response;
    }

    function GetCompanyID( $c_name, $groupid )
    {
        $response = false;
                $response = $this->_CI->upload_model->GetCompanyID( $c_name, $groupid ) ;
        return $response;
    }
}

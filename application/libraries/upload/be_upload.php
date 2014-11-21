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

    public function InsertTempExecInformation( $arg )
    {
        $response = false;
                $response = $this->_CI->upload_model->InsertTempExecInformation(  $arg );
                if($response){
                    $rt = $this->InsertTempExecAdData( $response, $arg );
                }
        return $response;
    }

    public function InsertTempDigitalInformation( $arg )
    {
        $response = false;
                $response = $this->_CI->upload_model->InsertTempDigitalInformation(  $arg );
                if($response){
                    $rt = $this->InsertTempDigitalAdData( $response, $arg );
                }
        return $rt;
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
                $total_arg = count($publish_dates);
                for( $starts_with = 0; $starts_with < $total_arg; $starts_with++)
                {
                            $adtype_id = $this->_CI->upload_model->GetAdTypeId( $arg['group_id'], $arg['form_type'], $net_pays[$starts_with], $ad_codes[$starts_with] );
                            $dat = explode("-", trim($publish_dates[$starts_with]));
                            $ordered_month = date('m', strtotime($dat[1]));
                            $ordered_year = date('Y', strtotime($dat[2]));
                            if($dat[0] == 'FH'){
                                $ordered_date  = '01';
                            }else{
                                $ordered_date  = '15';
                            }
                            $publish_date = $ordered_year."-".$ordered_month."-" .$ordered_date;
                            $ad_info = array(
                                'temp_pub_informationid'    => $pubid, 
                                'adtype_id' => $adtype_id,
                                'month' => $ordered_month,
                                'year'  => $ordered_year,
                                'session' => $dat[0],
                                'city'    => $arg['ad_display_city'],
                                'publish_date' => $publish_date,
                                'publish_type' => 1,
                                'offered_rate' => $offered_rate[$starts_with],
                                'created_on'        => $this->current_date
                            );
                            array_push( $ad_arg ,  $ad_info );
                }
                $response = $this->_CI->upload_model->InsertTempEGAdData(  $ad_arg );
                return $response;
    }


    public function InsertTempExecAdData( $pubid, $arg )
    {
                $response = $ordered_year= false;
                $ad_arg = array();
                $net_pays = explode(';', $arg['net_amount']);
                $pub_format = explode(';', $arg['session']);
                $offered_rate = explode(';', $arg['offered_amount']);
                $publish_dates = explode(';', $arg['frequency']);
                $ad_codes = explode(';', $arg['ad_code']);
                $total_arg = count($publish_dates);
                for( $starts_with = 0; $starts_with < $total_arg; $starts_with++)
                {
                            $adtype_id = $this->_CI->upload_model->GetAdTypeId( $arg['group_id'], $arg['form_type'], $net_pays[$starts_with], $ad_codes[$starts_with] );
                            $dat = explode("-", trim($publish_dates[$starts_with]));
                            $ordered_month = date('m', strtotime($publish_dates[$starts_with]));
                            $ordered_year = date('Y', strtotime($publish_dates[$starts_with]));
                            $publish_date = $ordered_year."-".$ordered_month."-01";
                            $ad_info = array(
                                'temp_pub_informationid'    => $pubid, 
                                'adtype_id' => $adtype_id,
                                'month' => $ordered_month,
                                'year'  => $ordered_year,
                                'publish_date' => $publish_date,
                                'publish_type' => 1,
                                'offered_rate' => $offered_rate[$starts_with],
                                'created_on'        => $this->current_date
                            );
                            array_push( $ad_arg ,  $ad_info );
                }
                $response = $this->_CI->upload_model->InsertTempExecAdData(  $ad_arg );
                return $response;
    }

    public function InsertTempDigitalAdData( $pubid, $arg )
    {
                $response = $ordered_year= false;
                $ad_arg = array();
                $net_pays = explode(';', $arg['offered_amount']);
                $pub_format = explode(';', $arg['session']);
                $offered_rate = explode(';', $arg['offered_amount']);
                $publish_dates = explode(';', $arg['frequency']);
                $startdate = explode(';', $arg['start_date']);
                $enddate = explode(';', $arg['end_date']);
                $ad_codes = explode(';', $arg['ad_code']);
                $total_arg = count($publish_dates);
                for( $starts_with = 0; $starts_with < $total_arg; $starts_with++)
                {
                            $adtype_id = $this->_CI->upload_model->GetAdTypeId( $arg['group_id'], $arg['form_type'], $net_pays[$starts_with], $ad_codes[$starts_with] );
                            $dat = explode("-", trim($publish_dates[$starts_with]));
                            $ordered_month = date('m', strtotime($publish_dates[$starts_with]));
                            $ordered_year = date('Y', strtotime($publish_dates[$starts_with]));
                            $publish_date = $ordered_year."-".$ordered_month."-01";
                            $ad_info = array(
                                'temp_pub_informationid'    => $pubid, 
                                'adtype_id' => $adtype_id,
                                'product_id' => $arg['product_id'],
                                'start_date' => date('Y-m-d', strtotime( $startdate[$starts_with] ) ),
                                'end_date'  => date('Y-m-d', strtotime( $enddate[$starts_with] ) ),
                                'publish_date' => $publish_date,
                                'publish_type' => 1,
                                'offered_rate' => $offered_rate[$starts_with],
                                'created_on'        => $this->current_date
                            );
                            array_push( $ad_arg ,  $ad_info );
                }
                $response = $this->_CI->upload_model->InsertTempDigitalAdData(  $ad_arg );
                return $response;
    }


            function GetCompanyID( $c_name, $group_id )
    {
        $response = false;
                $response = $this->_CI->upload_model->GetCompanyID( $c_name, $group_id ) ;
        return $response;
    }
    function GetCategoryID( $category_name, $group_id, $user_id )
    {
        $response = false;
                $response = $this->_CI->upload_model->GetCategoryID( $category_name, $group_id, $user_id ) ;
        return $response;
    }    
    function GetProductID( $product_name, $group_id, $user_id )
    {
        $response = false;
                $response = $this->_CI->upload_model->GetProductID( $product_name, $group_id, $user_id ) ;
        return $response;
    }

    function GetSalesPersonID( $sales_person_name, $group_id, $user_id, $user_type )
    {
        $response = false;
                $response = $this->_CI->upload_model->GetSalesPersonID( $sales_person_name, $group_id, $user_id, $user_type ) ;
        return $response;
    }

    function InsertFile( $group_id, $user_id, $csv_file_name )
    {
        $response = false;
                    $arg = array(
                                'group_id'  => $group_id,
                                'csv_file_name' => $csv_file_name,
                                'uploaded_by'       => $user_id,
                                'created_on'    =>  $this->current_date,
                        );
                $response = $this->_CI->upload_model->InsertFile( $arg ) ;
        return $response;
    }

}

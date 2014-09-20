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
 
class Be_Users
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
        $this->_CI->load->model('users_model');         
        $this->current_date = date('Y-m-d H:i:s');
    }
    
    function Registration( $username, $email, $userpwd )
    {
        $response = false;
        $arg = array(
                        'company_name' => $username,
                        'subscriber_email' => $email,
                        'subscriber_unique_id' => uniqid(),
                        'subscriber_password'  => md5($userpwd),
                        'subscribe_package'         => 2,
                        'subscribed_on' => $this->current_date
                    );        
        if( $this->CheckExist( $email ) == '' ){
                $response = $this->_CI->users_model->Registration( $arg );
        }else{
            $response = 'Email Address already Exists';
        }
        return $response;
    }
        function  CheckExist( $email )
        {
                $response = false;
                $response = $this->_CI->users_model->CheckExist( $email );
                return $response;
        }

        function GetUserInfo( $user_id )
        {
                $response = false;
                $response = $this->_CI->users_model->GetUserInfo( $user_id );
                return $response;
        }

        function UserLogin( $email, $password )
        {
                $response = false;
                    $arg = array(
                                'subscriber_email' => $email,
                                'subscriber_password' => md5( $password )
                        )  ; 
                $response = $this->_CI->users_model->UserLogin( $arg );
                return $response;

        }
}

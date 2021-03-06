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
 
class Validation
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
    }
    
    function StringValid( $input, $string )
    {
            if(strlen( $input ) != 0 || !empty($input)){
                    (!preg_match("/^[A-Za-z\\- \']+$/",$input))  ? $message = $string. " is not Valid." : $message ='' ;
            }else{
                $message = 'Please enter' .$string;
            }
            return $message;
    }
	
	function check_empty($input, $string)
	{
		 if(strlen( $input ) == 0 || empty($input)){
		 	$message = 'Please enter' .$string;
		 }
		 else
		 {
		 $message = '';
		 }
		  return $message;
	}

    function EmailValid( $input, $string ){
            (!filter_var($input, FILTER_VALIDATE_EMAIL)) ? $message = $string. ' is Invalid. ' : $message = '';
            return $message;
    }

    function PwdValid( $input , $string ){
        ( strlen( trim($input) ) < 6  ) ? $message = $string. ' is not valid. Enter More than 6 Characters ' : $message = '';     
        return $message;
    }

    function CompareValid( $one, $two, $string )
    {
        ( trim( $one ) === trim( $two ) && strlen( trim($one) ) > 5  ) ? $message = '' : $message = $string ." doesn't match ";
        return $message;
    }
    function replaceslashes( $data ){
        return str_replace(array('/', '\\'), '', $data); 
    }

    function CheckEmptyValue( $row, $form_type  ){
            $response = array( );
            if( $form_type == 2 )
            {
                if($this->_CI->config->item('EG_total_fields') == 15){
                            foreach ($row as $key => $value) {
                                $value = trim($value);
                                if (empty($value) && $key != 12 )
                                        $response[] =  $key.' cell  should not be empty';
                        }
                   }else{
                        $response[] = ' Some fields are missing. Check & try again!';
                   }     
               } else if( $form_type == 1)
               {
                if($this->_CI->config->item('EG_total_fields') == 15){
                            foreach ($row as $key => $value) {
                                $value = trim($value);
                                if (empty($value) && $key != 11 )
                                        $response[] =  $key.' cell  should not be empty';
                        }
                   }else{
                        $response[] = ' Some fields are missing. Check & try again!';
                   }     
               }
               return $response;         
    }

}
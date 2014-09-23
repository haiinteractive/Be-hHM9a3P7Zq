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
 
class Users_Model extends CI_Model
{
 
	 public $_dataMap = ''; 
	 
            function Registration( $arg )
            {
        	 $this->db->insert(SUBSCRIBER_DB_NAME.'.subscriber', $arg );
        	 return $this->db->insert_id();     
            }

            function CheckExist( $email )
            {
                        $this->db->select("subscriber_id");
                        $this->db->from('subscriber');      
                        $this->db->where(array('subscriber.subscriber_email'=>$email));        
                        $query = $this->db->get();
                        $db_results = $query->result_array();                   
                         if (count($db_results) > 0 )
                        {            
                                return $db_results[0]['subscriber_id'];
                        }else{
                                return '';
                        }
            }

            function CheckUserExist( $user_email ){
                        $this->db->select("user_id");
                        $this->db->from('t_users');      
                        $this->db->where(array('t_users.user_email'=>$user_email));        
                        $query = $this->db->get();
                        $db_results = $query->result_array();                   
                         if (count($db_results) > 0 )
                        {            
                                return $db_results[0]['user_id'];
                        }else{
                                return '';
                        }
                    }

            function GetUserInfo( $user_id )
            {
                        $this->db->select("*");
                        $this->db->from('subscriber');      
                        $this->db->where(array('subscriber.subscriber_id'=>$user_id ));        
                        $query = $this->db->get();
                        $db_results = $query->result();                   
                         if (count($db_results) > 0 )
                        {            
                                return $db_results[0];
                        }else{
                                return '';
                        }
            }

            function UserLogin( $arg )
            {
                        $this->db->select("*");
                        $this->db->from('subscriber');      
                        $this->db->where( $arg );        
                        $query = $this->db->get();
                        $db_results = $query->result();                   
                         if (count($db_results) > 0 )
                        {            
                                return $db_results[0];
                        }else{
                                return 'invalid';
                        }

            } 
}
/* End of file users_model.php */
?>
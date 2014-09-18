<?php 
class My
{
    private $_CI;    
    // present for all users
    
    public $loggedIn = false;
    /**
     * Constructor.
     * Loads the CI instance, the users_model and some useful helpers.
     * Creates a menu_lib object, populated if passed a valid $init.    
     * @param string/int $init - user id or email of user to load   
     * @access public   
     * @return none
     */
    public function __construct($init = false)
    {
        // take advantage of codeigniter libraries
        // use $this->_CI in place of normal codeigniter $this
        $this->_CI = & get_instance();
        $this->_CI->load->helper('url');
        // load users model
         $this->_CI->smartyci->assign('static_server',base_url());
         $this->_CI->smartyci->assign('img_path', $this->_CI->config->item('img_path') );


    }
 
        
}

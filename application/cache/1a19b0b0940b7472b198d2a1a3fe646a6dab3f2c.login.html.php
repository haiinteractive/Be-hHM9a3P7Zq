<?php /*%%SmartyHeaderCode:3747545533259ceb57-32665095%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a19b0b0940b7472b198d2a1a3fe646a6dab3f2c' => 
    array (
      0 => 'application\\views\\login.html',
      1 => 1414781553,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3747545533259ceb57-32665095',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54566473c4f421_25832329',
  'has_nocache_code' => false,
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54566473c4f421_25832329')) {function content_54566473c4f421_25832329($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd" >
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs" >
<head>

  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <title>Login - BeClouds.com</title>
  
  <!-- Free google font -->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300,600' rel='stylesheet' type='text/css' />
  <link href="http://demo.localhost.com/media//assets/app/css/form-style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="http://demo.localhost.com/media//assets/app/css/notification/ns-default.css" />
    <link rel="stylesheet" type="text/css" href="http://demo.localhost.com/media//assets/app/css/notification/ns-style-other.css" />
  </head>
  <body>
    <div class='logo'>
      <a href='#'><img src='http://demo.localhost.com/media//assets/app/images/logos/beclouds.png' class='logo' alt='logo' /></a>
    </div>
    <div class='form'>
      <h1>Sign in</h1>
      <div class='line'></div>
      <form class='input-form' name='loginForm' id="loginForm" action='#'>
            <div class='form-group'>
                <label class='col-sm-2 control-label'>Email Id: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                <input type='text' name='email' id='email' placeholder='Email Address' />
            </div>
            <div class='form-group'>
                <label class='col-sm-2 control-label'>Password: &nbsp;&nbsp;</label>
                <input type='password' name='userpwd' id='userpwd' placeholder='Password' />
          </div>
        <a class='forgotten-password-link' href='#'>Forgotten password</a>
        <input type='button' class='btn-sign-in btn-facebook' id='btn-sign-in' value='Sign in' />
      </form>
      
      <div class='forgotten-password-box'>
        <form class='input-form'>
          <span class='ie-placeholders'>Email:</span><input type='text' class='forgotten-password-email' placeholder='E-mail' />
          <input type='submit' class='btn-facebook' value='Send' /><br /><br />
        </form>
      </div>
           
      <div class='sign-link'>
        Don't have an account? <a href='http://demo.localhost.com/media/users/registration'>Sign up</a>
      </div> 
    </div>
    
  </body>
      <script src="http://demo.localhost.com/media//assets/app/js/jquery-2.1.1.min.js"></script>
    <script src="http://demo.localhost.com/media//assets/app/js/notification/modernizr.custom.js"></script>
    <script src="http://demo.localhost.com/media//assets/app/js/notification/classie.js"></script>
    <script src="http://demo.localhost.com/media//assets/app/js/notification/notificationFx.js"></script>
    <script src="http://demo.localhost.com/media//assets/app/js/beclouds.js"></script>
    </html><?php }} ?>

<?php /*%%SmartyHeaderCode:953354566475c8cc18-47858650%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d2cfdd41337becfa252136c0f422718472b4543' => 
    array (
      0 => 'application\\views\\registration.html',
      1 => 1414948229,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '953354566475c8cc18-47858650',
  'cache_lifetime' => 3600,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54566586960618_09232106',
  'variables' => 
  array (
    'static_server' => 0,
    'img_path' => 0,
  ),
  'has_nocache_code' => false,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54566586960618_09232106')) {function content_54566586960618_09232106($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd" >
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs" >
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title>Registration - BeClouds.com</title>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300,600' rel='stylesheet' type='text/css'>
  <link href="http://demo.localhost.com/media//assets/app/css/form-style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="http://demo.localhost.com/media//assets/app/css/notification/ns-default.css" />
    <link rel="stylesheet" type="text/css" href="http://demo.localhost.com/media//assets/app/css/notification/ns-style-other.css" />

<style type="text/css">
  .col-sm-2{
    min-width: 95px;
  }
</style>
  </head>
  <body>
    <div class='logo'>
      <a href='#'><img src='http://demo.localhost.com/media//assets/app/images/logos/beclouds.png' class='logo' alt='logo' /></a>
    </div>
    <div class='form'>
      <h1>Registration</h1>
      <div class='line'></div>
      <form class='input-form'>
            <div class='form-group'>
                    <label class='col-sm-2 control-label'>Login:</label>
                    <input type='text'  name='username' id='username' placeholder='Company Name' />
              </div>
            <div class='form-group'>
                  <label class='col-sm-2 control-label'>E-mail:</label>
                  <input type='text' name='email' id='email' placeholder='E-mail' />
              </div>
            <div class='form-group'>
                  <label class='col-sm-2 control-label'>Password:</label>
                  <input type='password' id='userpwd' name='userpwd' placeholder='Password' />
            </div>
             <div class='form-group'>
                  <label class='col-sm-2 control-label'>Retype Pass:</label>
                  <input type='password' id='retypeuserpwd' name='retypeuserpwd' placeholder='Retype password' /><br />
            </div>
        <input type='checkbox' id='tac-checkbox' /><label for='tac-chec kbox'>I agree with <a href='#'>terms and conditions</a></label>
        <input type='button' class='btn-register btn-facebook' id='btn-register' value='Register' />
                    <span class="progress"></span>

      </form>
      <div class='error-box red'>
        <span class='error-message'><b>Incorrect</b> login or password.</span>
      </div>
      <div class='sign-link'>
        Already have an account? <a href='http://demo.localhost.com/media/users/login'>Sign in</a>
      </div>
    </div>
  </body>

    <script src="http://demo.localhost.com/media//assets/app/js/jquery-2.1.1.min.js"></script>
    <script src="http://demo.localhost.com/media//assets/app/js/notification/modernizr.custom.js"></script>
    <script src="http://demo.localhost.com/media//assets/app/js/notification/classie.js"></script>
    <script src="http://demo.localhost.com/media//assets/app/js/notification/notificationFx.js"></script>
    <script src="http://demo.localhost.com/media//assets/app/js/beclouds.js"></script>
</html><?php }} ?>

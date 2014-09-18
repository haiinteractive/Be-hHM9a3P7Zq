<?php /*%%SmartyHeaderCode:24622541b25dba98d84-81384879%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d2cfdd41337becfa252136c0f422718472b4543' => 
    array (
      0 => 'application\\views\\registration.html',
      1 => 1411065414,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24622541b25dba98d84-81384879',
  'cache_lifetime' => 3600,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_541b26473325a9_31534268',
  'variables' => 
  array (
    'static_server' => 0,
    'img_path' => 0,
  ),
  'has_nocache_code' => false,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541b26473325a9_31534268')) {function content_541b26473325a9_31534268($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd" >
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs" >
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title>Registration - BeClouds.com</title>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300,600' rel='stylesheet' type='text/css'>
  <link href="http://demo.localhost.com/media//assets/app/css/form-style.css" rel="stylesheet" type="text/css" />
  </head>
  <body>
    <div class='logo'>
      <a href='#'><img src='http://demo.localhost.com/media//assets/app/images/logos/beclouds.png' class='logo' alt='logo' /></a>
    </div>
    <div class='form'>
      <h1>Registration</h1>
      <div class='line'></div>
      <form class='input-form'>
        <span class='ie-placeholders'>Login:</span><input type='text' placeholder='Login' />
        <span class='ie-placeholders'>E-mail:</span><input type='text' placeholder='E-mail' />
        <span class='ie-placeholders'>Password:</span><input type='password' placeholder='Password' />
        <span class='ie-placeholders'>Retype Pass:</span><input type='password' placeholder='Retype password' /><br />
        <input type='checkbox' id='tac-checkbox' /><label for='tac-checkbox'>I agree with <a href='#'>terms and conditions</a></label>
        <input type='submit' class='btn-register btn-facebook' value='Register' />
      </form>
      <div class='error-box red'>
        <span class='error-message'><b>Incorrect</b> login or password.</span>
      </div>
      <div class='sign-link'>
        Already have an account? <a href='http://demo.localhost.com/media/users/login'>Sign in</a>
      </div>
    </div>
  </body>
</html><?php }} ?>

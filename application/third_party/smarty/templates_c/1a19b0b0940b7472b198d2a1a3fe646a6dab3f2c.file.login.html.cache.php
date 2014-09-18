<?php /* Smarty version Smarty-3.1.19, created on 2014-09-18 18:34:00
         compiled from "application\views\login.html" */ ?>
<?php /*%%SmartyHeaderCode:22701541b23547358b6-53244194%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a19b0b0940b7472b198d2a1a3fe646a6dab3f2c' => 
    array (
      0 => 'application\\views\\login.html',
      1 => 1411065238,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22701541b23547358b6-53244194',
  'function' => 
  array (
  ),
  'cache_lifetime' => 3600,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_541b235487ed86_25638295',
  'variables' => 
  array (
    'static_server' => 0,
    'img_path' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541b235487ed86_25638295')) {function content_541b235487ed86_25638295($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd" >
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs" >
<head>

  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <title>Login - BeClouds.com</title>
  
  <!-- Free google font -->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300,600' rel='stylesheet' type='text/css' />
  <link href="<?php echo $_smarty_tpl->tpl_vars['static_server']->value;?>
/assets/app/css/form-style.css" rel="stylesheet" type="text/css" />
  </head>
  <body>
    <div class='logo'>
      <a href='#'><img src='<?php echo $_smarty_tpl->tpl_vars['static_server']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['img_path']->value;?>
/logos/beclouds.png' class='logo' alt='logo' /></a>
    </div>
    <div class='form'>
      <h1>Sign in</h1>
      <div class='line'></div>
      <form class='input-form' action='#'>
        <span class='ie-placeholders'>Login:</span><input type='text' placeholder='Login' />
        <span class='ie-placeholders'>Password:</span><input type='password' placeholder='Password' />
        <a class='forgotten-password-link' href='#'>Forgotten password</a>
        <input type='submit' class='btn-sign-in btn-facebook' value='Sign in' />
      </form>
      
      <div class='forgotten-password-box'>
        <form class='input-form'>
          <span class='ie-placeholders'>Email:</span><input type='text' class='forgotten-password-email' placeholder='E-mail' />
          <input type='submit' class='btn-facebook' value='Send' /><br /><br />
        </form>
      </div>
      <div class='error-box red'>
        <span class='error-message'><b>Incorrect</b> login or password.</span>
      </div>
           
      <div class='sign-link'>
        Don't have an account? <a href='<?php echo $_smarty_tpl->tpl_vars['static_server']->value;?>
users/registration'>Sign up</a>
      </div> 
    </div>
    
  </body>
</html><?php }} ?>

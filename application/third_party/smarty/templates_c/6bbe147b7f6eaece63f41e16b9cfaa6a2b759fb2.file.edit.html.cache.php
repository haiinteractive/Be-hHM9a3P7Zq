<?php /* Smarty version Smarty-3.1.19, created on 2014-10-02 17:50:07
         compiled from "application\views\employee\edit.html" */ ?>
<?php /*%%SmartyHeaderCode:28457542d8f78f03f41-91285645%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6bbe147b7f6eaece63f41e16b9cfaa6a2b759fb2' => 
    array (
      0 => 'application\\views\\employee\\edit.html',
      1 => 1412272202,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28457542d8f78f03f41-91285645',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_542d8f78f09847_85818063',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542d8f78f09847_85818063')) {function content_542d8f78f09847_85818063($_smarty_tpl) {?>
<section class="main-content">
<div class="content-wrap" style="margin-top:50px;">
		<div class="panel-body">
			<div class='form' style="">
			      <h1>Add New Employee</h1>
			      <div class='line'></div>
			      <form class='employee-form' name='employee-form' id='employee-form' action='#'>
			      <div class='form-group'>
			        	<label class='col-sm-2 control-label'>First Name:</label>
			        	<input type='text' name='user_first_name' id='user_first_name' class='form-control' placeholder='First Name' />
			        </div>
			      <div class='form-group'>
			        	<label class='col-sm-2 control-label'>Last Name:</label>
				<input type='text' name='user_last_name' id='user_last_name' class='form-control' placeholder='Last Name' />
			       </div>
			      <div class='form-group'>
			        	<label class='col-sm-2 control-label'>Email : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
			        	<input type='text' name='user_email' id='user_email' placeholder='User Email' />
			        </div>
			      <div class='form-group'>
			        	<label class='col-sm-2 control-label'>Password: &nbsp;&nbsp;</label>
			        	<input type='password' name='userpwd' id='userpwd' placeholder='Password' />
			        </div>
			        <input type='button' class='btn-sign-in btn-facebook' id='btn-employee-edit' value='Edit' />
			      </form>
		</div>
</div>
</section>
<style>
	.pm-icon{
		margin-top: -5px;
	}
</style>
<?php }} ?>

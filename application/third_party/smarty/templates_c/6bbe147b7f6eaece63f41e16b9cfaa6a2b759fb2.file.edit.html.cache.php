<?php /* Smarty version Smarty-3.1.19, created on 2014-11-01 19:16:16
         compiled from "application\views\employee\edit.html" */ ?>
<?php /*%%SmartyHeaderCode:57025455318012b652-39140689%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6bbe147b7f6eaece63f41e16b9cfaa6a2b759fb2' => 
    array (
      0 => 'application\\views\\employee\\edit.html',
      1 => 1414868299,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '57025455318012b652-39140689',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54553180135d03_75209999',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54553180135d03_75209999')) {function content_54553180135d03_75209999($_smarty_tpl) {?>
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

<?php /* Smarty version Smarty-3.1.19, created on 2014-11-01 19:16:16
         compiled from "application\views\employee\edit-popup.html" */ ?>
<?php /*%%SmartyHeaderCode:2031754553180250bf6-82651806%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '54948e9140656091d5c70d1d59a005b941063f84' => 
    array (
      0 => 'application\\views\\employee\\edit-popup.html',
      1 => 1414868529,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2031754553180250bf6-82651806',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'roles' => 0,
    'role' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54553180275d27_26263575',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54553180275d27_26263575')) {function content_54553180275d27_26263575($_smarty_tpl) {?>		 <div id="edit_employee">
			<div id="signup-ct">
				<div id="signup-header">
					<span>Edit New Employee</span>
					<a class="modal_close" href="#"></a>
				</div>
				
				<form action="#" method="post" id="defaultForm1" class="form-horizontal" data-bv-message="This value is not valid"
                      data-bv-feedbackicons-valid="glyphicon glyphicon-ok"
                      data-bv-feedbackicons-invalid="glyphicon glyphicon-remove"
                      data-bv-feedbackicons-validating="glyphicon glyphicon-refresh">
     
				  <div class="form-group">
				    <span class="col-sm-3 control-label">First Name :</span>
				    <div class="col-sm-5">
					 <input type="text" name='use_first_name' id='use_first_name' class="form-control" placeholder="First Name"  required data-bv-notempty-message="The first name is required"/>
				  </div>
				  </div>
				  
				  <div class="form-group">
				    <span class="col-sm-3 control-label">Last Name:</span>
				    <div class="col-sm-5">
					 <input type="text" name='use_last_name' id='use_last_name' placeholder="Last Name" class="form-control" required data-bv-notempty-message="The last name is required"/>
					 </div>
				  </div>
				  
				   <div class="form-group">
				    <span class="col-sm-3 control-label">Email:</span>
				    <div class="col-sm-5">
					 <input type="email" name='use_email' id='use_email' class="form-control" placeholder="Email" required data-bv-notempty-message="The email is required"/>
					 </div>
				  </div>
				  
				   <div class="form-group">
				    <span class="col-sm-3 control-label">Roles:</span>
				    <div class="col-sm-5">
					<select name='use_roles' id='use_roles' class="form-control" data-bv-notempty data-bv-notempty-message="The role is required" >
			        		<?php  $_smarty_tpl->tpl_vars['role'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['role']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['roles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['role']->key => $_smarty_tpl->tpl_vars['role']->value) {
$_smarty_tpl->tpl_vars['role']->_loop = true;
?>
			        			<option value='<?php echo $_smarty_tpl->tpl_vars['role']->value['user_type_id'];?>
'><?php echo $_smarty_tpl->tpl_vars['role']->value['user_type_name'];?>


</option>
			        		<?php } ?>
			     </select>
					 </div>
				  </div>
				  
				<input type="hidden" name='usereid' id='usereid'/>
				
				 <div class="form-group">
				 <span class="col-sm-3 control-label">Status: </span>
				  <div class="col-sm-5">
				 <select name='use_status' id='use_status' class="form-control" data-bv-notempty data-bv-notempty-message="The status is required" >
				 	<option value="1">Active</option>
				 	<option value="0">Inactive</option>
				 </select>
				  </div>
				  </div>
				  
				  <div class="btn-fld">
				  <input type="submit" id="edit_loginbtn" value="Update &raquo;"/>
				  </div>
				   </form>
			</div>
		</div>
<?php }} ?>

<?php /* Smarty version Smarty-3.1.19, created on 2014-11-01 19:24:26
         compiled from "application\views\employee\add-popup.html" */ ?>
<?php /*%%SmartyHeaderCode:2181254553180214ab9-98136537%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '449520cdf217957c861d1a068500142326b4cd78' => 
    array (
      0 => 'application\\views\\employee\\add-popup.html',
      1 => 1414869860,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2181254553180214ab9-98136537',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_545531802430e3_37012797',
  'variables' => 
  array (
    'static_server' => 0,
    'roles' => 0,
    'role' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545531802430e3_37012797')) {function content_545531802430e3_37012797($_smarty_tpl) {?>    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['static_server']->value;?>
/assets/app/css/popup.css" />

		<div id="employee">
			<div id="signup-ct">
				<div id="signup-header">
					<span>Add New Employee</span>
					<a class="modal_close" href="#"></a>
				</div>
				
				<form action="#" method="post" id="defaultForm" class="form-horizontal" data-bv-message="This value is not valid"
                      data-bv-feedbackicons-valid="glyphicon glyphicon-ok"
                      data-bv-feedbackicons-invalid="glyphicon glyphicon-remove"
                      data-bv-feedbackicons-validating="glyphicon glyphicon-refresh" >
     
				  <div class="form-group">
				    <span class="col-sm-3 control-label">First Name:</span>
				    <div class="col-sm-5">
					 <input type="text" name='us_first_name' class="form-control" id='us_first_name' placeholder="First Name"   required data-bv-notempty-message="The first name is required"/>
					 </div>
				  </div>
				  
				   <div class="form-group">
				    <span class="col-sm-3 control-label">Last Name:</span>
				    <div class="col-sm-5">
					 <input type="text" name='us_last_name' class="form-control" id='us_last_name' placeholder="Last Name"   required data-bv-notempty-message="The last name is required"/>
					 </div>
				  </div>
				  
				   <div class="form-group">
				    <span class="col-sm-3 control-label">Email:</span>
				    <div class="col-sm-5">
					 <input type="email" name='us_email' class="form-control" id='us_email' placeholder="Email" required  data-bv-notempty-message="The email is required"/>
					 </div>
				  </div>
				  
				   <div class="form-group">
				    <span class="col-sm-3 control-label">Password:</span>
				    <div class="col-sm-5">
					 <input type="password" name='uspwd' class="form-control" id='uspwd' placeholder="Password"   required data-bv-notempty-message="The password is required"  data-bv-identical="true" data-bv-identical-field="confirm_password" data-bv-identical-message="The password and its confirm are not the same" />
					 </div>
				  </div>
				  
				  
				   <div class="form-group">
				    <span class="col-sm-3 control-label">Retype password:</span>
				    <div class="col-sm-5">
					 <input type="password" name='confirm_password' class="form-control" id='confirm_password' placeholder="Confirm password" required data-bv-notempty-message="The confirm password is required" data-bv-identical="true" data-bv-identical-field="uspwd" data-bv-identical-message="The password and its confirm are not the same"/>
					 </div>
				  </div>
				  
				  
				   <div class="form-group">
				    <span class="col-sm-3 control-label">Roles:</span>
				    <div class="col-sm-5">
					<select name='us_roles' id='us_roles' class="form-control" data-bv-notempty data-bv-notempty-message="The role is required" >
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
				  
				 
				  <div class="btn-fld">
				  
				   <input type="submit" id="loginbtn" value="Add &raquo;"/>
				   </div>
				   </form>
			 
			
		</div>
		</div><?php }} ?>

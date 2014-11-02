<?php /* Smarty version Smarty-3.1.19, created on 2014-11-01 20:30:23
         compiled from "application\views\adtype\edit.html" */ ?>
<?php /*%%SmartyHeaderCode:3393545542df945026-55488262%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61834f32aab98387042f68108550cd500df340d9' => 
    array (
      0 => 'application\\views\\adtype\\edit.html',
      1 => 1414873720,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3393545542df945026-55488262',
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
  'unifunc' => 'content_545542df966dd9_00803727',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545542df966dd9_00803727')) {function content_545542df966dd9_00803727($_smarty_tpl) {?>   <div id="edit_adtype">
	<div id="signup-ct">
		<div id="signup-header">
			<span>Edit AdType</span>
			<a class="modal_close" href="#"></a>
		</div>
				
		<form action="#" method="post" id="defaultForm1" class="form-horizontal" data-bv-message="This value is not valid"
                      data-bv-feedbackicons-valid="glyphicon glyphicon-ok"
                      data-bv-feedbackicons-invalid="glyphicon glyphicon-remove"
                      data-bv-feedbackicons-validating="glyphicon glyphicon-refresh" >

			  <div class="form-group">
			    <span class="col-sm-3 control-label">Form Type : </span>
			    <div class="col-sm-5">
				 <select name='edit_type_roles' id='edit_type_roles' class="form-control" data-bv-notempty data-bv-notempty-message="The type is required" >
		        		<?php  $_smarty_tpl->tpl_vars['role'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['role']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['roles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['role']->key => $_smarty_tpl->tpl_vars['role']->value) {
$_smarty_tpl->tpl_vars['role']->_loop = true;
?>
		        			<option value='<?php echo $_smarty_tpl->tpl_vars['role']->value['id'];?>
'><?php echo $_smarty_tpl->tpl_vars['role']->value['name'];?>
</option>
		        		<?php } ?>
		     	</select>
			  </div>
			  </div>
			  
			  <div class="form-group">
			    <span class="col-sm-3 control-label">Name :</span>
			    <div class="col-sm-5">
				 <input type="text" name='edit_type_name' id='edit_type_name' placeholder="Name" class="form-control" required data-bv-notempty-message="The adtype name is required"/>
				 </div>
			  </div>
			  
			  <div class="form-group">
			    <span class="col-sm-3 control-label">Code :</span>
			    <div class="col-sm-5">
				 <input type="text" name='edit_type_code' id='edit_type_code' placeholder="Code" class="form-control"  required data-bv-notempty-message="The adtype code is required"/>
				 </div>
			  </div>
			  
			  <div class="form-group">
			    <span class="col-sm-3 control-label">Rack Rate :</span>
			    <div class="col-sm-5">
				 <input type="text" name='edit_rack_rate' id='edit_rack_rate' placeholder="Rack Rate" class="form-control"  required data-bv-notempty-message="The rack rate is required"/>
				 </div>
			  </div>
			  
			  <input type="hidden" name='adtype_id' id='adtype_id'/>
			  
			   <div class="form-group">
			 <span class="col-sm-3 control-label">Status: </span>
			  <div class="col-sm-5">
			 <select name='edtype_status' id='edtype_status' class="form-control" data-bv-notempty data-bv-notempty-message="The status is required" >
			 	<option value="1">Active</option>
			 	<option value="0">Inactive</option>
			 </select>
			  </div>
			  </div>
			  
			  <div class="btn-fld">
			  <input type="submit" id="edit_adtypebtn" value="Update &raquo;"/>
			  </div>
			   </form>
		</div>
	</div>
<?php }} ?>

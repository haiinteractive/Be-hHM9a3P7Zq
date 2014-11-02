<?php /* Smarty version Smarty-3.1.19, created on 2014-11-01 20:33:35
         compiled from "application\views\adtype\add.html" */ ?>
<?php /*%%SmartyHeaderCode:3112545542df90ba57-38147737%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bef41d11ce8d890fea659a3d5a766b97e7d924a0' => 
    array (
      0 => 'application\\views\\adtype\\add.html',
      1 => 1414873988,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3112545542df90ba57-38147737',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_545542df934883_49638551',
  'variables' => 
  array (
    'roles' => 0,
    'role' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545542df934883_49638551')) {function content_545542df934883_49638551($_smarty_tpl) {?>
<div id="adtype">
	<div id="signup-ct">
		<div id="signup-header">
			<span>Add New AdType</span>
			<a class="modal_close" href="#"></a>
		</div>
				
		<form action="#" method="post" id="defaultForm" class="form-horizontal" data-bv-message="This value is not valid"
                      data-bv-feedbackicons-valid="glyphicon glyphicon-ok"
                      data-bv-feedbackicons-invalid="glyphicon glyphicon-remove"
                      data-bv-feedbackicons-validating="glyphicon glyphicon-refresh">
		<div class="form-group">
		    <span class="col-sm-3 control-label">Form Type :</span>
		    <div class="col-sm-5">
			   <select name='form_adtype' id='form_adtype' class="form-control" data-bv-notempty data-bv-notempty-message="The type is required"  >
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
			 <input type="text" name='ad_type_name' id='ad_type_name' placeholder="Name" class="form-control"   required data-bv-notempty-message="The adtype name is required"/>
			 </div>
		  </div>
		  
		  <div class="form-group">
		    <span class="col-sm-3 control-label">Code :</span>
		    <div class="col-sm-5">
			 <input type="text" name='ad_type_code' id='ad_type_code' placeholder="Code" class="form-control"   required data-bv-notempty-message="The adtype code is required"/>
			 </div>
		  </div>
		  
		  <div class="form-group">
		    <span class="col-sm-3 control-label">Rack Rate :</span>
		    <div class="col-sm-5">
			 <input type="text" name='ad_type_rate' id='ad_type_rate' placeholder="Rack Rate" class="form-control"   required data-bv-notempty-message="The rack rate is required"/>
			 </div>
		  </div>
		  
		   <div class="btn-fld">
		  
		   <input type="submit" id="adtypebtn" value="Add &raquo;"/>
		   </div>
		   </form>
		</div>
	</div><?php }} ?>

<?php /* Smarty version Smarty-3.1.19, created on 2014-11-01 19:18:57
         compiled from "application\views\employee\add.html" */ ?>
<?php /*%%SmartyHeaderCode:18810545532219a2933-40507599%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3048120ae534b3f30586be70681bda686cd9d271' => 
    array (
      0 => 'application\\views\\employee\\add.html',
      1 => 1413049985,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18810545532219a2933-40507599',
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
  'unifunc' => 'content_54553221a171b7_62625424',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54553221a171b7_62625424')) {function content_54553221a171b7_62625424($_smarty_tpl) {?>
	<?php echo $_smarty_tpl->getSubTemplate ('../layout/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<section class="main-content">
<div class="content-wrap" style="margin-top:50px;">
	<section class="panel panel-info">
		<header class="panel-heading">Employee Details</header>
		<div class="panel-body">
			<div class='form' style="">
			      <h1>Add New Employee</h1>
			      <div class='line'></div>
			      <form class='employee-form' action='#'>
			      <div class='form-group'>
			        	<label class='col-sm-2 control-label'>First Name:</label>
			        	<input type='text' name='user_first_name' id='user_first_name' placeholder='First Name' />
			        </div>
			      <div class='form-group'>
			        	<label class='col-sm-2 control-label'>Last Name:</label>
				<input type='text' name='user_last_name' id='user_last_name' placeholder='Last Name' />
			       </div>
			      <div class='form-group'>
			        	<label class='col-sm-2 control-label'>Email : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
			        	<input type='text' name='user_email' id='user_email' placeholder='User Email' />
			        </div>
			      <div class='form-group'>
			        	<label class='col-sm-2 control-label'>Password: &nbsp;&nbsp;</label>
			        	<input type='password' name='userpwd' id='userpwd' placeholder='Password' />
			        </div>
			      <div class='form-group'>
			        	<label class='col-sm-2 control-label'>Roles: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
			        	<select name='user_roles' id='user_roles' >
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
			        <input type='button' class='btn-sign-in btn-facebook' id='btn-employee-add' value='Add' />
			      </form>
		</div>
	</section>
</div>
</section>
	<?php echo $_smarty_tpl->getSubTemplate ('../layout/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<?php }} ?>

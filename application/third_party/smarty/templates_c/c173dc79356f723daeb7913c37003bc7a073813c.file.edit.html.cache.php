<?php /* Smarty version Smarty-3.1.19, created on 2014-11-02 15:41:37
         compiled from "application\views\category\edit.html" */ ?>
<?php /*%%SmartyHeaderCode:660254564fbd9f9499-36436164%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c173dc79356f723daeb7913c37003bc7a073813c' => 
    array (
      0 => 'application\\views\\category\\edit.html',
      1 => 1414942893,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '660254564fbd9f9499-36436164',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54564fbd9fdf18_95480081',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54564fbd9fdf18_95480081')) {function content_54564fbd9fdf18_95480081($_smarty_tpl) {?>		<div id="edit_signup">
			<div id="signup-ct">
				<div id="signup-header">
					<span>Edit Category</span>
					<a class="modal_close" href="#"></a>
				</div>
				
				<form action="#" method="post" id="defaultForm1" class="form-horizontal"  data-bv-message="This value is not valid"
                      data-bv-feedbackicons-valid="glyphicon glyphicon-ok"
                      data-bv-feedbackicons-invalid="glyphicon glyphicon-remove"
                      data-bv-feedbackicons-validating="glyphicon glyphicon-refresh">
     
				  <div class="form-group">
				    <span>Category Name</span>
				     <div class="col-sm-5">
					 <input type="text" name='cate_name' id='cate_name' class="form-control" placeholder="Category Name" required data-bv-notempty-message="The category name is required"/>
					  </div>
				  </div>
					<input type="hidden" name='cate_id' id='cate_id'/>
				 <div class="form-group">
				 <span>Status: </span>
				 <div class="col-sm-5">
				 <select name='cat_status' id='cat_status' class="form-control" data-bv-notempty data-bv-notempty-message="The status is required" >
				 	<option value="1">Active</option>
				 	<option value="0">Inactive</option>
				 </select>
				  </div>
				  </div>
				  <div class="btn-fld">
				  <input type="submit" id="edit_categorybtn" value="Update &raquo;"/>
				  </div>
				   </form>
			</div>
		</div><?php }} ?>

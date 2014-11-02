<?php /* Smarty version Smarty-3.1.19, created on 2014-11-02 15:37:33
         compiled from "application\views\category\add.html" */ ?>
<?php /*%%SmartyHeaderCode:1669354564fbd9e4bc8-60788147%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5741b3593443b23860b037fa6a842694fbe0fad5' => 
    array (
      0 => 'application\\views\\category\\add.html',
      1 => 1414942604,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1669354564fbd9e4bc8-60788147',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54564fbd9e8601_00403109',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54564fbd9e8601_00403109')) {function content_54564fbd9e8601_00403109($_smarty_tpl) {?>		<div id="signup">
			<div id="signup-ct">
				<div id="signup-header">
					<span>Add New Category</span>
					<a class="modal_close" href="#"></a>
				</div>
				
				<form action="#" method="post" id="defaultForm" class="form-horizontal" data-bv-message="This value is not valid"
                      data-bv-feedbackicons-valid="glyphicon glyphicon-ok"
                      data-bv-feedbackicons-invalid="glyphicon glyphicon-remove"
                      data-bv-feedbackicons-validating="glyphicon glyphicon-refresh">
     
				  <div class="form-group">
				    <span class="col-sm-3 control-label">Category Name</span>
				    <div class="col-sm-5">
					 <input type="text" name='cat_name' class="form-control" id='cat_name' placeholder="Category Name"  required data-bv-notempty-message="The category name is required"/>
					 </div>
				  </div>
				  
				 
				  <div class="btn-fld">
				  
				   <input type="submit" id="categorybtn" class="btn btn-primary" value="Add &raquo;"/>
				   </div>
				   </form>
			 
			
		</div>
		</div>
<?php }} ?>

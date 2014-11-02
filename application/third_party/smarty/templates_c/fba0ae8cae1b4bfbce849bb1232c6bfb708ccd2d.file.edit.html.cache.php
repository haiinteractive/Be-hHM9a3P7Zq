<?php /* Smarty version Smarty-3.1.19, created on 2014-11-02 16:00:23
         compiled from "application\views\product\edit.html" */ ?>
<?php /*%%SmartyHeaderCode:49385456551723b210-97238715%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fba0ae8cae1b4bfbce849bb1232c6bfb708ccd2d' => 
    array (
      0 => 'application\\views\\product\\edit.html',
      1 => 1414944000,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '49385456551723b210-97238715',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5456551723e168_44545864',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5456551723e168_44545864')) {function content_5456551723e168_44545864($_smarty_tpl) {?>   <div id="edit_product">
			<div id="signup-ct">
				<div id="signup-header">
					<span>Edit Product</span>
					<a class="modal_close" href="#"></a>
				</div>
				
				<form action="#" method="post" id="defaultForm1" class="form-horizontal" data-bv-message="This value is not valid"
                      data-bv-feedbackicons-valid="glyphicon glyphicon-ok"
                      data-bv-feedbackicons-invalid="glyphicon glyphicon-remove"
                      data-bv-feedbackicons-validating="glyphicon glyphicon-refresh">
     
				  <div class="form-group">
				    <span>Product Name:</span>
				     <div class="col-sm-5">
					 <input type="text" name='proe_name' id='proe_name' placeholder="Product Name" class="form-control" required data-bv-notempty-message="The product name is required"/>
				 </div>
				  </div>
				  
				<input type="hidden" name='product_id' id='product_id'/>
				 <div class="form-group">
				 <span>Status: </span>
				 <div class="col-sm-5">
				 <select name='product_status' id='product_status' class="form-control" data-bv-notempty data-bv-notempty-message="The status is required" >
				 	<option value="1">Active</option>
				 	<option value="0">Inactive</option>
				 </select>
				 </div>
				  </div>
				  <div class="btn-fld">
				  <input type="submit" id="edit_productbtn" value="Update &raquo;"/>
				  </div>
				   </form>
			</div>
		</div><?php }} ?>

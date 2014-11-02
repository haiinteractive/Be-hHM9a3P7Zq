<?php /* Smarty version Smarty-3.1.19, created on 2014-11-02 16:00:23
         compiled from "application\views\product\add.html" */ ?>
<?php /*%%SmartyHeaderCode:124695456551722c8a4-11047844%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '55451b7f6336d155853b18e42847d6e1baf5d1bc' => 
    array (
      0 => 'application\\views\\product\\add.html',
      1 => 1414943992,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '124695456551722c8a4-11047844',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5456551722f6f5_90118060',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5456551722f6f5_90118060')) {function content_5456551722f6f5_90118060($_smarty_tpl) {?>		<div id="product">
			<div id="signup-ct">
				<div id="signup-header">
					<span>Add New Product</span>
					<a class="modal_close" href="#"></a>
				</div>
				
				<form action="#" method="post" id="defaultForm" class="form-horizontal" data-bv-message="This value is not valid"
                      data-bv-feedbackicons-valid="glyphicon glyphicon-ok"
                      data-bv-feedbackicons-invalid="glyphicon glyphicon-remove"
                      data-bv-feedbackicons-validating="glyphicon glyphicon-refresh" >
     
				  <div class="form-group">
				    <span class="col-sm-3 control-label">Product Name:</span>
				    <div class="col-sm-5">
					 <input type="text" name='product_name' id='product_name'  class="form-control" placeholder="Product Name"  required data-bv-notempty-message="The product name is required"/>
					 </div>
				  </div>
				  
				 
				  <div class="btn-fld">
				  
				   <input type="submit" id="productbtn"  class="btn btn-primary" value="Add &raquo;"/>
				   </div>
				   </form>
			 
			
		</div>
		</div>

<?php }} ?>

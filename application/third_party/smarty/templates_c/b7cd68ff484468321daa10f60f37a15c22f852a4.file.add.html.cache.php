<?php /* Smarty version Smarty-3.1.19, created on 2014-11-01 21:12:59
         compiled from "application\views\company\add.html" */ ?>
<?php /*%%SmartyHeaderCode:2557654554cdb0b9ce4-36951445%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7cd68ff484468321daa10f60f37a15c22f852a4' => 
    array (
      0 => 'application\\views\\company\\add.html',
      1 => 1414876323,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2557654554cdb0b9ce4-36951445',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54554cdb0bdaa8_28908910',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54554cdb0bdaa8_28908910')) {function content_54554cdb0bdaa8_28908910($_smarty_tpl) {?>
		<div id="company">
			<div id="signup-ct">
				<div id="signup-header">
					<span>Add New Company</span>
					<a class="modal_close" href="#"></a>
				</div>
				
				<form action="#" method="post" id="defaultForm" class="form-horizontal" data-bv-message="This value is not valid"
                      data-bv-feedbackicons-valid="glyphicon glyphicon-ok"
                      data-bv-feedbackicons-invalid="glyphicon glyphicon-remove"
                      data-bv-feedbackicons-validating="glyphicon glyphicon-refresh">
				
				
				<div class="form-group">
				    <span class="col-sm-3 control-label">Company Name :</span>
				    <div class="col-sm-5">
					  <input type="text" name='c_name' id='c_name' placeholder="Company Name" class="form-control" required data-bv-notempty-message="The company name is required" />
					 </div>
				  </div>
				  
				  <div class="form-group">
				    <span class="col-sm-3 control-label">Contact Person :</span>
				    <div class="col-sm-5">
					  <input type="text" name='c_person' id='c_person' placeholder="Contact Person" class="form-control" required data-bv-notempty-message="The contact person is required"/>
					 </div>
				  </div>
				  
				  
				  <div class="form-group">
				    <span class="col-sm-3 control-label">Address :</span>
				    <div class="col-sm-5">
					   <textarea name="address" id="address" cols="25" rows="1" placeholder="Address" class="form-control" required data-bv-notempty-message="The address is required"></textarea>
					 </div>
				  </div>
				  
				  <div class="form-group">
				    <span class="col-sm-3 control-label">Pin Code :</span>
				    <div class="col-sm-5">
					   <input type="text" name='pin_code' id='pin_code' placeholder="Pin Code" required class="form-control" data-bv-notempty-message="The pin code is required"/>
					 </div>
				  </div>
				  
				  <div class="form-group">
				    <span class="col-sm-3 control-label">Phone :</span>
				    <div class="col-sm-5">
					 <input type="text" name='phone' id='phone' placeholder="Phone" required class="form-control" data-bv-notempty-message="The phone is required"/>
					 </div>
				  </div>
				  
				  <div class="form-group">
				    <span class="col-sm-3 control-label">Alternative Phone :</span>
				    <div class="col-sm-5">
					 <input type="text" name='alt_phone' id='alt_phone' placeholder="Alternative Phone"  class="form-control" />
					 </div>
				  </div>
				  
				  <div class="form-group">
				    <span class="col-sm-3 control-label">Email :</span>
				    <div class="col-sm-5">
					 <input type="email" name='email' id='email' placeholder="Email" required  class="form-control" data-bv-notempty-message="The email is required"/>
					 </div>
				  </div>
				  
				  <div class="form-group">
				    <span class="col-sm-3 control-label">Alternative Email :</span>
				    <div class="col-sm-5">
					 <input type="email" name='alt_email' id='alt_email' placeholder="Alternative Email"  class="form-control"/>
					 </div>
				  </div>
				  
				    <div class="btn-fld">
				  
				   <input type="submit" id="companybtn" value="Add &raquo;"/>
				   </div>
				   </form>
			 
			
		</div>
		</div>
<?php }} ?>

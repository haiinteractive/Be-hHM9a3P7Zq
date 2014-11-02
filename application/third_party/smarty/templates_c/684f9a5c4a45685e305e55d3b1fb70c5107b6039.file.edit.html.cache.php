<?php /* Smarty version Smarty-3.1.19, created on 2014-11-01 21:12:59
         compiled from "application\views\company\edit.html" */ ?>
<?php /*%%SmartyHeaderCode:2713754554cdb0c96b9-68642828%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '684f9a5c4a45685e305e55d3b1fb70c5107b6039' => 
    array (
      0 => 'application\\views\\company\\edit.html',
      1 => 1414876335,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2713754554cdb0c96b9-68642828',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54554cdb0cd185_13032424',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54554cdb0cd185_13032424')) {function content_54554cdb0cd185_13032424($_smarty_tpl) {?>		
    <div id="edit_company">
			<div id="signup-ct">
				<div id="signup-header">
					<span>Edit Company</span>
					<a class="modal_close" href="#"></a>
				</div>
				
				<form action="#" method="post" id="defaultForm1" class="form-horizontal" data-bv-message="This value is not valid"
                      data-bv-feedbackicons-valid="glyphicon glyphicon-ok"
                      data-bv-feedbackicons-invalid="glyphicon glyphicon-remove"
                      data-bv-feedbackicons-validating="glyphicon glyphicon-refresh">
     
				 <div class="form-group">
				    <span class="col-sm-3 control-label">Company Name :</span>
				    <div class="col-sm-5">
					  <input type="text" name='co_name' id='co_name' placeholder="Company Name" class="form-control"  required data-bv-notempty-message="The company name is required" />
					 </div>
				  </div>
				  
				  <div class="form-group">
				    <span class="col-sm-3 control-label">Contact Person :</span>
				    <div class="col-sm-5">
					  <input type="text" name='co_person' id='co_person' placeholder="Contact Person" class="form-control"  required data-bv-notempty-message="The contact person is required" />
					 </div>
				  </div>
				  
				  
				  <div class="form-group">
				    <span class="col-sm-3 control-label">Address :</span>
				    <div class="col-sm-5">
					   <textarea name="caddress" required id="caddress" cols="25" rows="1" placeholder="Address" class="form-control" data-bv-notempty-message="The address is required" ></textarea>
					 </div>
				  </div>
				  
				  <div class="form-group">
				    <span class="col-sm-3 control-label">Pin Code :</span>
				    <div class="col-sm-5">
					   <input type="text" name='cpin_code' id='cpin_code' placeholder="Pin Code" class="form-control" required data-bv-notempty-message="The pin code is required"/>
					 </div>
				  </div>
				  
				  <div class="form-group">
				    <span class="col-sm-3 control-label">Phone :</span>
				    <div class="col-sm-5">
					 <input type="text" name='cphone' id='cphone' placeholder="Phone" class="form-control" required  data-bv-notempty-message="The phone is required"/>
					 </div>
				  </div>
				  
				  <div class="form-group">
				    <span class="col-sm-3 control-label">Email :</span>
				    <div class="col-sm-5">
					 <input type="email" name='cemail' id='cemail' placeholder="Email" class="form-control" required  data-bv-notempty-message="The email is required"/>
					 </div>
				  </div>
				  
				  <input type="hidden" name='comp_id' id='comp_id' />
				  
				<div class="form-group">
				 <span class="col-sm-3 control-label">Client Status: </span>
				  <div class="col-sm-5">
				 <select name='comp_status' id='comp_status' class="form-control"  data-bv-notempty-message="The status is required" >
				 	<option value="1">Active</option>
				 	<option value="0">Inactive</option>
				 </select>
				  </div>
				  </div>
				  
				  <div class="btn-fld">
				  <input type="submit" id="edit_companybtn" value="Update &raquo;"/>
				  </div>
				   </form>
			</div>
		</div><?php }} ?>

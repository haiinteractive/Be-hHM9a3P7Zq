<?php /* Smarty version Smarty-3.1.19, created on 2014-11-02 17:23:31
         compiled from "application\views\upload\upload.html" */ ?>
<?php /*%%SmartyHeaderCode:40845456689345da30-81419086%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6161b9633d40f424d3a05d9ed24ed22e284100bd' => 
    array (
      0 => 'application\\views\\upload\\upload.html',
      1 => 1413739388,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '40845456689345da30-81419086',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'static_server' => 0,
    'form_types' => 0,
    'form_type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_545668935233b4_42652953',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545668935233b4_42652953')) {function content_545668935233b4_42652953($_smarty_tpl) {?>
	<?php echo $_smarty_tpl->getSubTemplate ('../layout/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<style>
form { display: block; margin: 20px auto; background: #eee; border-radius: 10px; padding: 15px }
#progress { position:relative; width:400px; border: 1px solid #ddd; padding: 1px; border-radius: 3px; }
#bar { background-color: #B4F5B4; width:0%; height:20px; border-radius: 3px; }
#percent { position:absolute; display:inline-block; top:3px; left:48%; }
</style>
<section class="main-content">
<div class="content-wrap" style="margin-top:50px;">
	<section class="panel panel-info">
		<header class="panel-heading">Upload Data</header>
		<div class="panel-body">
			<div class='form' style="">
			      <h1>Upload</h1>
			      <div class='line'></div>
			      <form class='upload-form' action='<?php echo $_smarty_tpl->tpl_vars['static_server']->value;?>
upload/add' method='POST' enctype="multipart/form-data">
			      <div class='form-group'>
			        	<label class='col-sm-2 control-label'>Form Type: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
			        	<select name='form_type' id='form_type' >
			        		<?php  $_smarty_tpl->tpl_vars['form_type'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['form_type']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['form_types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['form_type']->key => $_smarty_tpl->tpl_vars['form_type']->value) {
$_smarty_tpl->tpl_vars['form_type']->_loop = true;
?>
			        			<option value='<?php echo $_smarty_tpl->tpl_vars['form_type']->value['form_type_id'];?>
'><?php echo $_smarty_tpl->tpl_vars['form_type']->value['form_type_name'];?>
</option>
			        		<?php } ?>
			        	</select>
			        </div>
			      <div class='form-group'>
			        	<label class='col-sm-2 control-label'>File: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><br/>
			        	<input type='file' name='file_data' id='file_data' />
			        	<input type='hidden' name='use' id='use' value='up89765' />
			        </div>
			      <div class='form-group'><br/>
				<div id="progress">
				        <div id="bar"></div>
				        <div id="percent">0%</div >
				</div>
				<div id="message"></div>
			        </div>
			        <input type='submit' class='btn-sign-in btn-facebook' id='btn-upload-add' value='Add' />
			      </form>
		</div>
	</section>
</div>
</section>
	<?php echo $_smarty_tpl->getSubTemplate ('../layout/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<script src="http://malsup.github.com/jquery.form.js"></script>

<script>
$(document).ready(function()
{
    var options = { 
    beforeSend: function() 
    {
        $("#progress").show();
        //clear everything
        $("#bar").width('0%');
        $("#message").html("");
        $("#percent").html("0%");
    },
    uploadProgress: function(event, position, total, percentComplete) 
    {
        $("#bar").width(percentComplete+'%');
        $("#percent").html(percentComplete+'%');
        $("#btn-upload-add").val('Please Wait...');
        $("#btn-upload-add").attr('disabled','disabled');
     },
    success: function() 
    {
        $("#bar").width('100%');
        $("#percent").html('100%');
        $("#btn-upload-add").val('Add');
        $("#btn-upload-add").removeAttr('disabled','disabled');

     },
    complete: function(response) 
    {
        $("#message").html("<font color='green'>"+response.responseText+"</font>");
    },
    error: function()
    {
        $("#message").html("<font color='red'> ERROR: unable to upload files</font>");
     }
 }; 
     $(".upload-form").ajaxForm(options);
 });
 </script>
<?php }} ?>

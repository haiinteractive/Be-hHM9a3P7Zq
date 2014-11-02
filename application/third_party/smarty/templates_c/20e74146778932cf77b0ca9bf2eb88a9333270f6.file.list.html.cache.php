<?php /* Smarty version Smarty-3.1.19, created on 2014-11-01 21:23:05
         compiled from "application\views\company\list.html" */ ?>
<?php /*%%SmartyHeaderCode:2687954553600530e94-90775118%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '20e74146778932cf77b0ca9bf2eb88a9333270f6' => 
    array (
      0 => 'application\\views\\company\\list.html',
      1 => 1414876780,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2687954553600530e94-90775118',
  'function' => 
  array (
  ),
  'cache_lifetime' => 3600,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_545536005af161_44953132',
  'variables' => 
  array (
    'static_server' => 0,
    'arg' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545536005af161_44953132')) {function content_545536005af161_44953132($_smarty_tpl) {?>
	<?php echo $_smarty_tpl->getSubTemplate ('../layout/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<section class="main-content">
<div class="content-wrap" style="margin-top:50px;">
	<section class="panel panel-info">
		<header class="panel-heading">Company Details</header>
		<div class="panel-body">
			<div class="table-responsive no-border">
			<a id="company_onclick" style=" width:138px; display: block;" rel="leanModal" name="company" href="#company">Add New Company</a>
				<table class="table table-bordered table-striped mg-t datatable">
				<thead>
				<tr>
				<th>Companies</th>
				<th>Contact person</th>
				<th>Address</th>
				<th>Phone</th>
				<th>Email</th>
				<th>Actions</th>
				</tr>
				</thead>
				<tbody class='list_content'>
					<div id='loading-image' style="text-align: center"><img src="<?php echo $_smarty_tpl->tpl_vars['static_server']->value;?>
assets/app/images/framely.gif" align="middle" style="height:75px; width:75px;"/></div>
				</tbody>
				</table>
			</div>
		</div>
		                        <p class="pagination"></p>
		                      
	</section>
</div>
</section>



	<?php echo $_smarty_tpl->getSubTemplate ('../layout/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['static_server']->value;?>
assets/app/js/lib/jquery.simplePagination.js"></script>
	
	<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['static_server']->value;?>
assets/app/css/lib/simplePagination.css"/>


<style type="text/css">
.pm-content{
		height:600px;
	}
	
	.form-group label { margin:0px; font-weight:normal;}
	
	#company .form-group { margin:0px;}
	
	#edit_company .form-group { margin:0px;}
	
	form { margin:0px;}
	
	#company .form-group input { margin:0px; line-height: normal; padding: 4px;  height: 31px;}
	
	#company .form-group select { width: 242px; margin:0px; padding: 4px;}
	
	#company .form-group textarea { width: 242px; margin:0px; padding: 4px;}
	
	#edit_company .form-group select { width: 242px; margin:0px; padding: 4px;}
	
	#edit_company .form-group input { margin:0px; line-height: normal; padding: 4px;}
	
	.col-sm-3  { padding:0px;}
	
	#signup-ct button { float:right;}
	
#tac-checkbox, label, .forgotten-password-link { float:none; margin:0px;}

.has-error .form-control {border-color: #ff604f !important; }

.has-success .form-control {border-color: #2b542c !important; }

.form-control-feedback { display:none !important;}

.col-sm-5 {
  
    padding: 0 !important;
    width: 67.667%;
}

.help-block {  margin-bottom: 0px!important; margin-top: 0px!important; }

</style>
<script type='text/javascript'>
		$(function() {
		    $('.pagination').pagination({
		        items: <?php echo $_smarty_tpl->tpl_vars['arg']->value['total_items'];?>
,
		        itemsOnPage: <?php echo $_smarty_tpl->tpl_vars['arg']->value['pagination'];?>
,
		        cssStyle: 'light-theme',
		        onPageClick: function(){
		        	Collect_Info();
		        }
		    });
		    Collect_Info();
		    
		});
		function Collect_Info(){
			var current_page = $('.current').text();
			
		              $.ajax({
		                            type: "POST",
		                            data: 'current_page='+current_page,
		                            dataType:'JSON',
		                            beforeSend: function(){
	                            		$("#loading-image").show();
		                            },
		                            url: base_url+'/company/list_info',
		                            beforeSend: function() {
			              $("#loading-image").show();
			           },
		                            success: function(sresponse) {
		                            	$("#loading-image").hide();
		                            	var objdata = new Array() ;
					$.each(sresponse, function(i, obj) {
					  //use obj.id and obj.name here, for example:
					  	objdata += '<tr>';
					  	objdata += '<td>'+obj.c_name+'</td>'; 
					  	objdata += '<td>'+obj.c_person+'</td>'; 
					  	objdata += '<td>'+obj.c_address+'</td>'; 
					  	objdata += '<td>'+obj.c_phone+'</td>'; 
						objdata += '<td>'+obj.c_email+'</td>';
					  	objdata += '<td><a href="#" id="'+obj.comp_id+'" class="user_edit" onClick="edit_company_info('+obj.comp_id+');">Edit</a></td>'; 
					  	objdata += '<td><a href="#" id="'+obj.comp_id+'" class="user_delete" onClick="delete_company_info('+obj.comp_id+');">Delete</a></td>'; 
					  	objdata += '</tr>';
					});
					$(".list_content").html(objdata);
		                            }
		               });
		}
		
		
			function edit_company_info(id)
			{
				  $( "#user_edit_tree" ).trigger( "click" );
				 var request_ur = base_url+'/company/edit';
				  $.ajax({
					type: "POST",
					data: 'company_id='+id,
					dataType:'JSON',
					url: request_ur,
					success: function(sresponse) {
						$.each(sresponse, function(i, obj) {
						 
						  $("#co_name").val(obj.c_name);
						   $("#co_person").val(obj.c_person);
						    $("#caddress").val(obj.c_address);
							$("#cpin_code").val(obj.c_pincode);
							$("#cphone").val(obj.c_phone);
						  $("#cemail").val(obj.c_email);
						   $("#comp_status").val(obj.c_status);
						    $("#comp_id").val(obj.comp_id);
						}); 
					}
				});
			}
			
			$(function() {
    			$('a[rel*=leanModal]').leanModal({ top : 60, closeButton: ".modal_close" });		
			});
			
			$(document).ready(function() {
					$('#defaultForm').bootstrapValidator();
				});
				
				 $(document).ready(function() {
					$('#defaultForm1').bootstrapValidator();
				});
	
</script>


<a id="user_edit_tree" rel="leanModal" href="#edit_company">Edit</a>
	<?php echo $_smarty_tpl->getSubTemplate ('company/add.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

	<?php echo $_smarty_tpl->getSubTemplate ('company/edit.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<?php }} ?>

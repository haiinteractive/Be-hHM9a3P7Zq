<?php /* Smarty version Smarty-3.1.19, created on 2014-11-01 20:54:24
         compiled from "application\views\adtype\list.html" */ ?>
<?php /*%%SmartyHeaderCode:2069054553212be9415-77318950%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '41daa3a774a200cedd9db8906c0147b2761de6b1' => 
    array (
      0 => 'application\\views\\adtype\\list.html',
      1 => 1414875152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2069054553212be9415-77318950',
  'function' => 
  array (
  ),
  'cache_lifetime' => 3600,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54553212ca79a3_79264569',
  'variables' => 
  array (
    'static_server' => 0,
    'arg' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54553212ca79a3_79264569')) {function content_54553212ca79a3_79264569($_smarty_tpl) {?>
	<?php echo $_smarty_tpl->getSubTemplate ('../layout/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<section class="main-content">
<div class="content-wrap" style="margin-top:50px;">
	<section class="panel panel-info">
		<header class="panel-heading">AdType Details</header>
		<div class="panel-body">
			<div class="table-responsive no-border">
			
			<a id="adtype_onclick" style=" width:138px; display: block;" rel="leanModal" name="adtype" href="#adtype">Add New AdType</a>	
			
				<table class="table table-bordered table-striped mg-t datatable">
				<thead>
				<tr>
				<th>Form Type</th>
				<th>Code Type</th>
				<th>Code</th>
				<th>Rack Rate</th>
				<th>Action</th>
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
	
	#adtype .form-group { margin:0px;}
	
	#edit_adtype .form-group { margin:0px;}
	
	form { margin:0px;}
	
	#adtype .form-group input { margin:0px; line-height: normal; padding: 4px;}
	
	#adtype .form-group select { width: 242px; margin:0px; padding: 4px;}
	
	#edit_adtype .form-group select { width: 242px; margin:0px; padding: 4px;}
	
	#edit_adtype .form-group input { margin:0px; line-height: normal; padding: 4px;}
	
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

.help-block {  margin-bottom: 0px!important; }
</style>
<script type='text/javascript'>
		$(function() {
		    $('.pagination').pagination({
		        items: 0<?php echo $_smarty_tpl->tpl_vars['arg']->value['total_items'];?>
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
		                            url: base_url+'/adtype/list_info',
		                            beforeSend: function() {
			              $("#loading-image").show();
			           },
		                            success: function(sresponse) {
		                            	$("#loading-image").hide();
		                            	var objdata = new Array() ;
					$.each(sresponse, function(i, obj) {
					  //use obj.id and obj.name here, for example:
					  	objdata += '<tr>';
					  	objdata += '<td>'+obj.name+'</td>'; 
					  	objdata += '<td>'+obj.ad_type_name+'</td>'; 
					  	objdata += '<td>'+obj.ad_type_code+'</td>'; 
					  	objdata += '<td>'+obj.ad_type_rate+'</td>'; 
					  	objdata += '<td>'+obj.user_created_on+'</td>'; 
					  	objdata += '<td><a href="#" id="'+obj.adtype_id+'" class="user_editsss" onClick="edit_adtype_info('+obj.adtype_id+');">Edit</a></td>'; 
					  	objdata += '<td><a href="#" id="'+obj.adtype_id+'" class="user_types" onClick="delete_adtype_info('+obj.adtype_id+');">Delete</a></td>'; 
					  	objdata += '</tr>';
					});
					$(".list_content").html(objdata);
		                            }
		               });
		}
		
		
		function edit_adtype_info(id)
		{
			 $( "#user_edit_tree" ).trigger( "click" );
			 var request_ur = base_url+'/adtype/edit';
			  $.ajax({
				type: "POST",
				data: 'adtype_id='+id,
				dataType:'JSON',
				url: request_ur,
				success: function(sresponse) {
					$.each(sresponse, function(i, obj) {
					 
					  $("#edit_type_roles").val(obj.form_type);
					   $("#edit_type_name").val(obj.ad_type_name);
					    $("#edit_type_code").val(obj.ad_type_code);
						$("#edit_rack_rate").val(obj.ad_type_rate);
						$("#edtype_status").val(obj.ad_type_status);
					  $("#adtype_id").val(id);
					}); 
				}
			});
		}
			
			
			$(function() {
    			$('a[rel*=leanModal]').leanModal({ top : 92, closeButton: ".modal_close" });		
			});
			
			
			 $(document).ready(function() {
					$('#defaultForm').bootstrapValidator();
				});
				
				 $(document).ready(function() {
					$('#defaultForm1').bootstrapValidator();
				});
	
</script>


<a id="user_edit_tree" rel="leanModal" href="#edit_adtype">Edit</a>
 	<?php echo $_smarty_tpl->getSubTemplate ('adtype/add.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

 	<?php echo $_smarty_tpl->getSubTemplate ('adtype/edit.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<?php }} ?>

<?php /* Smarty version Smarty-3.1.19, created on 2014-11-02 15:50:35
         compiled from "application\views\category\list.html" */ ?>
<?php /*%%SmartyHeaderCode:1436754564e89aac6b5-31608683%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89db1a626d5e501badd73aed438647c839a96c00' => 
    array (
      0 => 'application\\views\\category\\list.html',
      1 => 1414943239,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1436754564e89aac6b5-31608683',
  'function' => 
  array (
  ),
  'cache_lifetime' => 3600,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54564e89b8cd70_81241509',
  'variables' => 
  array (
    'static_server' => 0,
    'arg' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54564e89b8cd70_81241509')) {function content_54564e89b8cd70_81241509($_smarty_tpl) {?>
	<?php echo $_smarty_tpl->getSubTemplate ('../layout/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<section class="main-content">
<div class="content-wrap" style="margin-top:50px;">
	<section class="panel panel-info">
		<header class="panel-heading">Category Details</header>
		<div class="panel-body">
		
			<div class="table-responsive no-border">
			<a id="category_onclick" style=" width:142px; display: block;" rel="leanModal" name="signup" href="#signup">Add New Category</a>	
		
				<table class="table table-bordered table-striped mg-t datatable">
				<thead>
				<tr>
				<th>Category Name</th>
				<th>Created On</th>
				<th>Category Status</th>
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
	
	#signup .form-group { margin:0px;}
	
	#edit_signup .form-group { margin:0px;}
	
	form { margin:0px;}
	
	#signup .form-group input { margin:0px; line-height: normal;}
	
	#edit_signup .form-group select { width: 242px; margin:0px;}
	
	#edit_signup .form-group input { margin:0px; line-height: normal;}
	
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
		                            url: base_url+'/category/list_info',
		                            beforeSend: function() {
			              $("#loading-image").show();
			           },
		                            success: function(sresponse) {
		                            	$("#loading-image").hide();
		                            	var objdata = new Array() ;
					$.each(sresponse, function(i, obj) {
					  //use obj.id and obj.name here, for example:
					  	objdata += '<tr>';
					  	objdata += '<td>'+obj.category_name+'</td>'; 
					  	objdata += '<td>'+obj.created_on+'</td>'; 
					  	objdata += '<td>'+obj.status+'</td>'; 
					  	objdata += '<td><a href="#" onClick="edit_category_info('+obj.category_id+');">Edit</a></td>'; 
					  	objdata += '<td><a href="#" onClick="delete_category_info('+obj.category_id+');">Delete</a></td>'; 
					  	objdata += '</tr>';
					});
					$(".list_content").html(objdata);
		                            }
		               });
		}
		
		
			function edit_category_info(id)
			{
 				$( "#user_edit_tree" ).trigger( "click" );
				 var request_ur = base_url+'/category/edit';
				  $.ajax({
					type: "POST",
					data: 'category_id='+id,
					dataType:'JSON',
					url: request_ur,
					success: function(sresponse) {
						$.each(sresponse, function(i, obj) {
						  $("#cate_name").val(obj.category_name);
						   $("#cate_id").val(obj.category_id);
						    $("#cat_status").val(obj.status);
						}); 
				}
				});
			}
			
			
			$(function() {
    			$('a[rel*=leanModal]').leanModal({ top : 150, closeButton: ".modal_close" });		
			});
			
			   $(document).ready(function() {
					$('#defaultForm').bootstrapValidator();
				});
				
				 $(document).ready(function() {
					$('#defaultForm1').bootstrapValidator();
				});
</script>




<a id="user_edit_tree" rel="leanModal" href="#edit_signup">Edit</a>

	<?php echo $_smarty_tpl->getSubTemplate ('category/add.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

	<?php echo $_smarty_tpl->getSubTemplate ('category/edit.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

   
		<?php }} ?>

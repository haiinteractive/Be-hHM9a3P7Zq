<?php /* Smarty version Smarty-3.1.19, created on 2014-11-02 16:39:33
         compiled from "application\views\product\list.html" */ ?>
<?php /*%%SmartyHeaderCode:1526354565370a2dbf3-73920553%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be59ccdacbfc8bb62a36233694b4c4d43a3db157' => 
    array (
      0 => 'application\\views\\product\\list.html',
      1 => 1414946216,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1526354565370a2dbf3-73920553',
  'function' => 
  array (
  ),
  'cache_lifetime' => 3600,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54565370b390d6_05953276',
  'variables' => 
  array (
    'static_server' => 0,
    'arg' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54565370b390d6_05953276')) {function content_54565370b390d6_05953276($_smarty_tpl) {?>
	<?php echo $_smarty_tpl->getSubTemplate ('../layout/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<section class="main-content">
<div class="content-wrap" style="margin-top:50px;">
	<section class="panel panel-info">
		<header class="panel-heading">Product Details</header>
		<div class="panel-body">
			<div class="table-responsive no-border">
			
			<a id="product_onclick" style=" width:142px; display: block;" rel="leanModal" name="product" href="#product">Add New Product</a>	
				<table class="table table-bordered table-striped mg-t datatable">
				<thead>
				<tr>
				<th>Product Name</th>
				<th>Created On</th>
				<th>product Status</th>
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
	
	#product .form-group { margin:0px;}
	
	#edit_product .form-group { margin:0px;}
	
	form { margin:0px;}
	
	#product .form-group input { margin:0px; line-height: normal;}
	
	#edit_product .form-group select { width: 242px; margin:0px;}
	
	#edit_product .form-group input { margin:0px; line-height: normal;}
	
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
		                            url: base_url+'/product/list_info',
		                            beforeSend: function() {
			              $("#loading-image").show();
			           },
		                            success: function(sresponse) {
		                            	$("#loading-image").hide();
		                            	var objdata = new Array() ;
					$.each(sresponse, function(i, obj) {
					  //use obj.id and obj.name here, for example:
					  	objdata += '<tr>';
					  	objdata += '<td>'+obj.product_name+'</td>'; 
					  	objdata += '<td>'+obj.created_on+'</td>'; 
					  	objdata += '<td>'+obj.status+'</td>'; 
					  	objdata += '<td><a href="#" id="'+obj.product_id+'" class="user_editsss" onClick="edit_product_info('+obj.product_id+');">Edit</a></td>'; 
					  	objdata += '<td><a href="#" id="'+obj.product_id+'" class="product_editsss" onClick="delete_product_info('+obj.product_id+');">Delete</a></td>'; 
					  	objdata += '</tr>';
					});
					$(".list_content").html(objdata);
		                            }
		               });
		}
		
		
			function edit_product_info(id)
			{
				 $( "#user_edit_tree" ).trigger( "click" );
				 var request_ur = base_url+'/product/edit';
				  $.ajax({
					type: "POST",
					data: 'product_id='+id,
					dataType:'JSON',
					url: request_ur,
					success: function(sresponse) {
						$.each(sresponse, function(i, obj) {
						 
						  $("#proe_name").val(obj.product_name);
						   $("#product_id").val(obj.product_id);
						    $("#product_status").val(obj.status);
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




<a id="user_edit_tree" rel="leanModal" href="#edit_product">Edit</a>

	<?php echo $_smarty_tpl->getSubTemplate ('product/add.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

	<?php echo $_smarty_tpl->getSubTemplate ('product/edit.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>



		
   
<?php }} ?>

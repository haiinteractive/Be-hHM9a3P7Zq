<?php /* Smarty version Smarty-3.1.19, created on 2014-11-02 17:57:02
         compiled from "application\views\temp\list.html" */ ?>
<?php /*%%SmartyHeaderCode:2937154566c855a1d76-88543199%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '729ca073896454dca8a4db3312505ea5aea3eee2' => 
    array (
      0 => 'application\\views\\temp\\list.html',
      1 => 1414951020,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2937154566c855a1d76-88543199',
  'function' => 
  array (
  ),
  'cache_lifetime' => 3600,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54566c856a52f7_42764930',
  'variables' => 
  array (
    'static_server' => 0,
    'arg' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54566c856a52f7_42764930')) {function content_54566c856a52f7_42764930($_smarty_tpl) {?>
	<?php echo $_smarty_tpl->getSubTemplate ('../layout/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<section class="main-content">
<div class="content-wrap" style="margin-top:50px;">
	<section class="panel panel-info">
		<header class="panel-heading">Details</header>
		<div class="panel-body">
			<div>	
				<input type="button" name="publishit" id="publishit" value="Publish It" /> 
			</div>
			<div class="table-responsive no-border">
				<table class="table table-bordered table-striped mg-t datatable">
				<thead>
				<tr>
				<th></th>
				<th>RO Number</th>
				<th>Company Name</th>
				<th>City</th>
				<th>Frequency</th>
				<th>Offered Rate</th>
				<th>Published On</th>
				</tr>
				</thead>
				<tbody class='list_content'>
					<div id='loading-image' style="text-align: center"><img src="<?php echo $_smarty_tpl->tpl_vars['static_server']->value;?>
assets/app/images/framely.gif" align="middle" style="height:75px; width:75px;"/></div>
				</tbody>
				</table>
				<div class='notice' style="padding:20px; color:red; display:none;" align="center"> </div>
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
		                            url: base_url+'/unpublish/information',
		                            beforeSend: function() {
			              $("#loading-image").show();
			           },
		                            success: function(sresponse) {
		                            	$("#loading-image").hide();
		                            	var objdata = new Array() ;
		                            	if(sresponse == '' )
		                            	{
		                            		$(".notice").show();
		                            		$(".notice").html("No Data Available");
		                            	}
					$.each(sresponse, function(i, obj) {
					  //use obj.id and obj.name here, for example:
					  	objdata += '<tr>';
					  	objdata += '<td><input type="checkbox" name="ids[]" id="ids[]" value="'+obj.temp_addataid+'" /> </td>'; 
					  	objdata += '<td>'+obj.ro_number+'</td>'; 
					  	objdata += '<td>'+obj.c_name+'</td>'; 
					  	objdata += '<td>'+obj.city+'</td>'; 
					  	objdata += '<td>'+obj.session+'</td>'; 
						objdata += '<td>'+obj.offered_rate+'</td>';						
						objdata += '<td>'+obj.publish_date+'</td>';
					  	objdata += '<td><a href="#" id="'+obj.temp_addataid+'" class="user_edit" onClick="delete_info('+obj.temp_addataid+');">Delete</a></td>'; 
					  	objdata += '</tr>';
					});
					$(".list_content").html(objdata);
		                            }
		               });
		}
	$(document).ready(function() {
		$('#defaultForm').bootstrapValidator();
		$("#publishit").on('click', function(){
			var ids = [];
			$('input[type=checkbox]:checked').map(function(_, el) {
			    ids[_] = $(el).val();
			}).get();
		              $.ajax({
		                            type: "POST",
		                            data: 'ids='+ids,
		                            beforeSend: function(){
	                            		$("#loading-image").show();
		                            },
		                            url: base_url+'/unpublish/publish',
		                            success: function(sresponse) {
		                            	$("#loading-image").hide();
		                            	window.location.reload();
		                            }
		                       });     

		});
	});
	
</script>


<?php }} ?>

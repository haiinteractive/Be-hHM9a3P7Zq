<?php /* Smarty version Smarty-3.1.19, created on 2014-10-02 18:00:47
         compiled from "application\views\employee\list.html" */ ?>
<?php /*%%SmartyHeaderCode:12275542d8f78d5f901-46488646%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '82df9ace1838dacb8df2793610fdb7a0c728e8bb' => 
    array (
      0 => 'application\\views\\employee\\list.html',
      1 => 1412272840,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12275542d8f78d5f901-46488646',
  'function' => 
  array (
  ),
  'cache_lifetime' => 3600,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_542d8f78e1bde0_79779030',
  'variables' => 
  array (
    'static_server' => 0,
    'arg' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542d8f78e1bde0_79779030')) {function content_542d8f78e1bde0_79779030($_smarty_tpl) {?>
	<?php echo $_smarty_tpl->getSubTemplate ('../layout/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<section class="main-content">
<div class="content-wrap" style="margin-top:50px;">
	<section class="panel panel-info">
		<header class="panel-heading">Employee Details</header>
		<div class="panel-body">
			<div class="table-responsive no-border">
				<table class="table table-bordered table-striped mg-t datatable">
				<thead>
				<tr>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Email</th>
				<th>User Role</th>
				<th>User From</th>
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
		                        <div class='modal' style="display:none;">
		                        		<?php echo $_smarty_tpl->getSubTemplate ('employee/edit.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

		                        </div>
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
		                            url: base_url+'/employee/list_info',
		                            beforeSend: function() {
			              $("#loading-image").show();
			           },
		                            success: function(sresponse) {
		                            	$("#loading-image").hide();
		                            	var objdata = new Array() ;
					$.each(sresponse, function(i, obj) {
					  //use obj.id and obj.name here, for example:
					  	objdata += '<tr>';
					  	objdata += '<td>'+obj.user_first_name+'</td>'; 
					  	objdata += '<td>'+obj.user_last_name+'</td>'; 
					  	objdata += '<td>'+obj.user_email+'</td>'; 
					  	objdata += '<td>'+obj.user_type_name+'</td>'; 
					  	objdata += '<td>'+obj.user_created_on+'</td>'; 
					  	objdata += '<td><a href="#" id="'+obj.user_id+'" class="user_editsss" onClick="edit_user_info('+obj.user_id+');">Edit</a></td>'; 
					  	objdata += '</tr>';
					});
					$(".list_content").html(objdata);
		                            }
		               });

		}

</script>

<?php }} ?>

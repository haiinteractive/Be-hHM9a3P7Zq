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
    'd344234172c37feaf85545efb522b5bf8c747ecc' => 
    array (
      0 => 'C:\\wamp\\www\\Hai_interactive\\demo\\media\\application\\views\\layout\\header.html',
      1 => 1414432308,
      2 => 'file',
    ),
    '6000eea689e8757c53cea7fd09c26659976ddce4' => 
    array (
      0 => 'C:\\wamp\\www\\Hai_interactive\\demo\\media\\application\\views\\layout\\footer.html',
      1 => 1413739287,
      2 => 'file',
    ),
    '55451b7f6336d155853b18e42847d6e1baf5d1bc' => 
    array (
      0 => 'application\\views\\product\\add.html',
      1 => 1414943992,
      2 => 'file',
    ),
    'fba0ae8cae1b4bfbce849bb1232c6bfb708ccd2d' => 
    array (
      0 => 'application\\views\\product\\edit.html',
      1 => 1414944000,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1526354565370a2dbf3-73920553',
  'cache_lifetime' => 3600,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54565e45a08fc7_23691143',
  'variables' => 
  array (
    'static_server' => 0,
    'arg' => 0,
  ),
  'has_nocache_code' => false,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54565e45a08fc7_23691143')) {function content_54565e45a08fc7_23691143($_smarty_tpl) {?>	<!doctype html>
<html class="no-js" lang="">
<head>
 
<meta charset="utf-8">
<meta name="description" content="Flat, Clean, Responsive, admin template built with bootstrap 3">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">
 
<title>Dashboard | BeClouds.com</title>
 
<link rel="stylesheet" href="http://demo.localhost.com/media/assets/app/css/vendor/offline/theme.css">
<link rel="stylesheet" href="http://demo.localhost.com/media/assets/app/css/vendor/pace/theme.css">
 
 
<link rel="stylesheet" href="http://demo.localhost.com/media/assets/app/css/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="http://demo.localhost.com/media/assets/app/css/common/font-awesome.min.css">
<link rel="stylesheet" href="http://demo.localhost.com/media/assets/app/css/common/animate.min.css">

<link rel="stylesheet" href="http://demo.localhost.com/media/assets/app/css/jquery_popup.css">

<link rel="stylesheet" href="http://demo.localhost.com/media/assets/app/css/style.css">

<link rel="stylesheet" href="http://demo.localhost.com/media/assets/app/css/bootstrap.css">
 
 
<link rel="stylesheet" href="http://demo.localhost.com/media/assets/app/css/common/skins/palette.1.css" id="skin">
<link rel="stylesheet" href="http://demo.localhost.com/media/assets/app/css/common/fonts/style.1.css" id="font">
<link rel="stylesheet" href="http://demo.localhost.com/media/assets/app/css/common/main.css">
   <link href="http://demo.localhost.com/media//assets/app/css/form-style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="http://demo.localhost.com/media/assets/app/css/common/panel.css">
     <link rel="stylesheet" type="text/css" href="http://demo.localhost.com/media//assets/app/css/notification/ns-default.css" />
    <link rel="stylesheet" type="text/css" href="http://demo.localhost.com/media//assets/app/css/notification/ns-style-other.css" />

<script src="http://demo.localhost.com/media/assets/app/css/vendor/modernizr.js"></script>
</head>
 
<body>
<div class="app horizontal">
 
<header class="header header-fixed navbar">
<a href="javascript:;" class="fa fa-bars navbar-toggle off-left visible-xs" data-toggle="collapse" data-target="#hor-menu"></a>
<div class="brand">
<a href="http://demo.localhost.com/media/home/index" class="navbar-brand">
	<img src='http://demo.localhost.com/media/assets/app/images/logos/beclouds.png'   />
</a>
</div>
<div class="collapse navbar-collapse pull-left no-padding" id="hor-menu">
<ul class="nav navbar-nav">
	<li class="dropdown show-on-hover">
		<a href="javascript:;" data-toggle="dropdown">
		<span>Employees</span>
		<b class="caret"></b>
		</a>
		<ul class="dropdown-menu">
			<li>
				<a href="http://demo.localhost.com/media/employee/add">
				<span>Add New Employee</span>
				</a>
			</li>
			<li>
				<a href="http://demo.localhost.com/media/employee/index">
				<span>Employees Report</span>
				</a>
			</li>
		</ul>
	</li>
	
	<li class="dropdown show-on-hover">
		<a href="javascript:;" data-toggle="dropdown">
		<span>AdType</span>
		<b class="caret"></b>
		</a>
		<ul class="dropdown-menu">
			
			<li>
				<a href="http://demo.localhost.com/media/adtype/index">
				<span>AdType Report</span>
				</a>
			</li>
		</ul>
	</li>
	
	<li class="dropdown show-on-hover">
		<a href="javascript:;" data-toggle="dropdown">
		<span>Companies</span>
		<b class="caret"></b>
		</a>
		<ul class="dropdown-menu">
			
			<li>
				<a href="http://demo.localhost.com/media/company/index">
				<span>Companies Report</span>
				</a>
			</li>
		</ul>
	</li>
	
	<li class="dropdown show-on-hover">
		<a href="javascript:;" data-toggle="dropdown">
		<span>Categories</span>
		<b class="caret"></b>
		</a>
		<ul class="dropdown-menu">
			
			<li>
				<a href="http://demo.localhost.com/media/category/index">
				<span>Categories Report</span>
				</a>
			</li>
		</ul>
	</li>
	
	<li class="dropdown show-on-hover">
		<a href="javascript:;" data-toggle="dropdown">
		<span>Products</span>
		<b class="caret"></b>
		</a>
		<ul class="dropdown-menu">
			
			<li>
				<a href="http://demo.localhost.com/media/product/index">
				<span>Products Report</span>
				</a>
			</li>
		</ul>
	</li>
	

<li class="dropdown show-on-hover">
	<a href="http://demo.localhost.com/media/upload/index" >
		<span>Upload Data</span>
	</a>
</li>

<li class="dropdown show-on-hover">
	<a href="http://demo.localhost.com/media/unpublish/index" >
		<span>Publish Data</span>
	</a>
</li>

<li class="dropdown active show-on-hover">
<a href="javascript:;" data-toggle="dropdown">
<span>Layouts</span>
<b class="caret"></b>
</a>
<ul class="dropdown-menu">
<li>
<a href="boxed.html">
<span>Boxed</span>
</a>
</li>
<li class="active">
<a href="horizontal.html">
<span>Horizontal menu</span>
</a>
</li>
<li>
<a href="horizontal_boxed.html">
<span>Horizontal Boxed</span>
</a>
</li>
<li>
<a href="small-sidebar.html">
<span>Small sidebar</span>
</a>
</li>
<li>
<a href="right-sidebar.html">
<span>Right Sidebar</span>
</a>
</li>
<li>
<a href="right-sidebar-collapsible.html">
<span>Right Sidebar collapsible</span>
</a>
</li>
<li>
<a href="both.html">
<span>Mixed menus</span>
</a>
</li>
<li>
<a href="collapsible.html">
<span>Collapsible Menu</span>
</a>
</li>
<li>
<a href="footer.html">
<span>With Footer</span>
</a>
</li>
</ul>
</li>
<li class="dropdown show-on-hover">
<a href="javascript:;" data-toggle="dropdown">
<span>Pages</span>
<b class="caret"></b>
</a>
<ul class="dropdown-menu">
<li>
<a href="tasks.html">
<span>Tasks</span>
</a>
</li>
<li>
<a href="profile.html">
<span>Profile</span>
</a>
</li>
<li>
<a href="invoice.html">
<span>Invoice</span>
</a>
</li>
<li>
<a href="gallery.html">
<span>Gallery</span>
</a>
</li>
<li>
<a href="signin.html">
<span>Signin</span>
</a>
</li>
<li>
<a href="signup.html">
<span>Signup</span>
</a>
</li>
<li>
<a href="lock.html">
<span>Lock Screen</span>
</a>
</li>
<li>
<a href="404.html">
<span>404 Page</span>
</a>
</li>
<li>
<a href="500.html">
<span>500 Page</span>
</a>
</li>
<li>
<a href="blank.html">
<span>Blank</span>
</a>
</li>
</ul>
</li>
</ul>
</div>
<ul class="nav navbar-nav navbar-right hidden-xs">
<li class="notifications dropdown">
<a href="javascript:;" data-toggle="dropdown">
<i class="fa fa-bell"></i>
<div class="badge badge-top bg-danger animated flash">3</div>
</a>
<div class="dropdown-menu dropdown-menu-right animated slideInRight">
<div class="panel bg-white no-border no-margin">
<div class="panel-heading no-radius">
<small>
<b>Notifications</b>
</small>
<small class="pull-right">
<a href="javascript:;" class="mg-r-xs">mark as read</a>&#8226;
<a href="javascript:;" class="fa fa-cog mg-l-xs"></a>
</small>
</div>
<ul class="list-group">
<li class="list-group-item">
<a href="javascript:;">
<span class="pull-left mg-t-xs mg-r-md">
<img src="img/face4.jpg" class="avatar avatar-sm img-circle" alt="">
</span>
<div class="m-body show pd-t-xs">
<span>Dean Winchester</span>
<span>Posted on to your wall</span>
<small>2 mins ago</small>
</div>
</a>
</li>
<li class="list-group-item">
<a href="javascript:;">
<span class="pull-left mg-t-xs mg-r-md">
<span class="fa-stack fa-lg">
<i class="fa fa-circle fa-stack-2x text-warning"></i>
<i class="fa fa-download fa-stack-1x fa-inverse"></i>
</span>
</span>
<div class="m-body show pd-t-xs">
<span>145 MB download in progress.</span>
<div class="progress progress-xs mg-t-xs mg-b-xs">
<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
</div>
</div>
<small>Started 23 mins ago</small>
</div>
</a>
</li>
<li class="list-group-item">
<a href="javascript:;">
<span class="pull-left mg-t-xs mg-r-md">
<img src="img/face3.jpg" class="avatar avatar-sm img-circle" alt="">
</span>
<div class="m-body show pd-t-xs">
<span>Application</span>
<span>Where is my workspace widget</span>
<small>5 days ago</small>
</div>
</a>
</li>
</ul>
<div class="panel-footer no-border">
<a href="javascript:;">See all notifications</a>
</div>
</div>
</div>
</li>
<li class="quickmenu">
<a href="javascript:;" data-toggle="dropdown">
<img src="img/avatar.jpg" class="avatar pull-left img-circle" alt="Hai Interactive" title="user">
<i class="caret mg-l-xs hidden-xs no-margin"></i>
</a>
<ul class="dropdown-menu dropdown-menu-right">
<li>
<a href="javascript:;">
<div class="pd-t-sm">
	admin@haiinteractive.com
<br>
<small class="text-muted">4.2 MB of 51.25 GB used</small>
</div>
<div class="progress progress-xs no-radius no-margin mg-b-sm">
<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
</div>
</div>
</a>
</li>
<li>
<a href="profile.html">Settings</a>
</li>
<li>
<a href="javascript:;">Upgrade</a>
</li>
<li>
<a href="javascript:;">Notifications
<div class="badge bg-danger pull-right">3</div>
</a>
</li>
<li>
<a href="javascript:;">Help ?</a>
</li>
<li class="divider"></li>
<li>
<a href="http://demo.localhost.com/media/home/logout">Logout</a>
</li>
</ul>
</li>
</ul>
</header>
 

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
					<div id='loading-image' style="text-align: center"><img src="http://demo.localhost.com/media/assets/app/images/framely.gif" align="middle" style="height:75px; width:75px;"/></div>
				</tbody>
				</table>
			</div>
		</div>
		                        <p class="pagination"></p>
		                      
	</section>
</div>
</section>



	</div>
</body>
</html>
<script src="http://demo.localhost.com/media/assets/app/css/vendor/jquery-1.11.1.min.js"></script>
<script src="http://demo.localhost.com/media/assets/app/css/bootstrap/js/bootstrap.js"></script>
<script src="http://demo.localhost.com/media/assets/app/css/vendor/jquery.easing.min.js"></script>
<script src="http://demo.localhost.com/media/assets/app/css/vendor/jquery.placeholder.js"></script>
 
 
<script src="http://demo.localhost.com/media/assets/app/css/vendor/moment.js"></script>
<script src="http://demo.localhost.com/media/assets/app/css/vendor/skycons.js"></script>
<script src="http://demo.localhost.com/media/assets/app/css/vendor/jquery.blockUI.js"></script>
<script src="http://demo.localhost.com/media/assets/app/css/vendor/raphael.min.js"></script>
<script src="http://demo.localhost.com/media/assets/app/css/vendor/jquery.slimscroll.js"></script>
<script src="http://demo.localhost.com/media/assets/app/css/vendor/bxslider/jquery.bxslider.min.js"></script>
<script src="http://demo.localhost.com/media/assets/app/css/vendor/offline/offline.min.js"></script>
<script src="http://demo.localhost.com/media/assets/app/css/vendor/pace/pace.min.js"></script>
 
    <script src="http://demo.localhost.com/media//assets/app/js/notification/modernizr.custom.js"></script>
    <script src="http://demo.localhost.com/media//assets/app/js/notification/classie.js"></script>
    <script src="http://demo.localhost.com/media//assets/app/js/notification/notificationFx.js"></script>
 
<script src="http://demo.localhost.com/media/assets/app/js/common/off-canvas.js"></script>
<script src="http://demo.localhost.com/media/assets/app/js/common/main.js"></script>
 
<script src="http://demo.localhost.com/media/assets/app/js/common/panel.js"></script>
<script src="http://demo.localhost.com/media/assets/app/js/beclouds.js"></script>

<script src="http://demo.localhost.com/media/assets/app/js/common/dashboard.js"></script>

<script type="text/javascript" src="http://demo.localhost.com/media/assets/app/js/jquery.leanModal.min.js"></script>

<script src="http://demo.localhost.com/media/assets/app/js/jquery_popup.js"></script>

<script src="http://demo.localhost.com/media/assets/app/js/bootstrap.min.js"></script>

<script src="http://demo.localhost.com/media/assets/app/js/bootstrapValidator.js"></script>

	<script type="text/javascript" src="http://demo.localhost.com/media/assets/app/js/lib/jquery.simplePagination.js"></script>
	
	<link type="text/css" rel="stylesheet" href="http://demo.localhost.com/media/assets/app/css/lib/simplePagination.css"/>


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
		        items: 03,
		        itemsOnPage: 5,
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

			<div id="product">
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


	   <div id="edit_product">
			<div id="signup-ct">
				<div id="signup-header">
					<span>Edit Product</span>
					<a class="modal_close" href="#"></a>
				</div>
				
				<form action="#" method="post" id="defaultForm1" class="form-horizontal" data-bv-message="This value is not valid"
                      data-bv-feedbackicons-valid="glyphicon glyphicon-ok"
                      data-bv-feedbackicons-invalid="glyphicon glyphicon-remove"
                      data-bv-feedbackicons-validating="glyphicon glyphicon-refresh">
     
				  <div class="form-group">
				    <span>Product Name:</span>
				     <div class="col-sm-5">
					 <input type="text" name='proe_name' id='proe_name' placeholder="Product Name" class="form-control" required data-bv-notempty-message="The product name is required"/>
				 </div>
				  </div>
				  
				<input type="hidden" name='product_id' id='product_id'/>
				 <div class="form-group">
				 <span>Status: </span>
				 <div class="col-sm-5">
				 <select name='product_status' id='product_status' class="form-control" data-bv-notempty data-bv-notempty-message="The status is required" >
				 	<option value="1">Active</option>
				 	<option value="0">Inactive</option>
				 </select>
				 </div>
				  </div>
				  <div class="btn-fld">
				  <input type="submit" id="edit_productbtn" value="Update &raquo;"/>
				  </div>
				   </form>
			</div>
		</div>


		
   
<?php }} ?>

<?php /*%%SmartyHeaderCode:30971545fb940a5cc10-28868395%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c923e4dc75ce4f424876bfd74df84b5167a51669' => 
    array (
      0 => 'application\\views\\reports\\view.html',
      1 => 1415559522,
      2 => 'file',
    ),
    'd344234172c37feaf85545efb522b5bf8c747ecc' => 
    array (
      0 => 'C:\\wamp\\www\\Hai_interactive\\demo\\media\\application\\views\\layout\\header.html',
      1 => 1415208486,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30971545fb940a5cc10-28868395',
  'cache_lifetime' => 3600,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_545fb9637412b4_87309827',
  'variables' => 
  array (
    'ro_details' => 0,
    'adtypes' => 0,
    'ad' => 0,
  ),
  'has_nocache_code' => false,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545fb9637412b4_87309827')) {function content_545fb9637412b4_87309827($_smarty_tpl) {?>	<!doctype html>
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
	<span>Reports</span>
	<b class="caret"></b>
	</a>
	<ul class="dropdown-menu">
		<li>
		<a href="http://demo.localhost.com/media/reports/index">
		<span>Revenue Reports</span>
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
	<div class="content-wrap">
		<div class="row" style="margin-top:60px;">
			<div class="col-md-3 mg-b-lg">
				<section class="panel panel-primary">
					<div class="panel-heading">
					</div>
					<ul class="list-group">
						<li class="list-group-item">
							<div class="show no-margin pd-t-xs">
								Ro Number:
								<small class="pull-right">16878</small>
							</div>
						</li>
						<li class="list-group-item">
							<div class="show no-margin pd-t-xs">
							Publication:
								<small class="pull-right">Bangalore</small>
							</div>
						</li>
						<li class="list-group-item">
							<div class="show no-margin pd-t-xs">
								Sales Person:
								<small class="pull-right">prathap</small>
							</div>
						</li>
						<li class="list-group-item">
							<div class="show no-margin pd-t-xs">
								Date:
								<small class="pull-right">2014-02-01</small>
							</div>
						</li>
						<li class="list-group-item">
							<div class="show no-margin pd-t-xs">
								Special Instruction:
								<small class="pull-right"></small>
							</div>
						</li>
					</ul>
				</section>
				
			</div>
			<div class="col-md-3">
			<section class="panel panel-success bg-success">
				<div class="panel-body">
					<h1 style="color:white;">Revenue Report</h1>
				<div>
			</section>
			</div>
			<div class="col-md-4">
				<section class="panel panel-primary">
					<div class="panel-heading">
					</div>
					<ul class="list-group">
						<li class="list-group-item">
							<div class="show no-margin pd-t-xs">
								Agency:
								<small class="pull-right"></small>
							</div>
						</li>
						<li class="list-group-item">
							<div class="show no-margin pd-t-xs">
							Company Name:
								<small class="pull-right">G.C.Taste Maker</small>
							</div>
						</li>
						<li class="list-group-item">
							<div class="show no-margin pd-t-xs">
								Contact Person:
								<small class="pull-right"></small>
							</div>
						</li>
						<li class="list-group-item">
							<div class="show no-margin pd-t-xs">
								Address:
								<small class="pull-right"></small>
							</div>
						</li>
						<li class="list-group-item">
							<div class="show no-margin pd-t-xs">
								Pincode:
								<small class="pull-right"></small>
							</div>
						</li>
						<li class="list-group-item">
							<div class="show no-margin pd-t-xs">
								Name of Establishment being Advertised:
								<small class="pull-right">G.C.Taste Maker</small>
							</div>
						</li>
						<li class="list-group-item">
							<div class="show no-margin pd-t-xs">
								Description of Business Being Advertised:
								<small class="pull-right">Eating Out</small>
							</div>
						</li>
					</ul>
				</section>
			</div>
			<div class="col-md-12">
				<div class='col-md-2'>
					<section class="panel panel-success bg-success">
						<div>
							<b>Payment & Billing Schedule</b>
						</div>
					</section>
				</div>
			</div>
			<div class="col-md-7">
				<section class='panel panel-primary post bg-primary'>
					<table border="1" style="border-color:#fff; ">
						<tr >
							<td width="100">Period</td> 
							<td width="100">Cheque / DD No</td>
							<td width="100">Drawn On</td>
							<td width="100">Dated</td>
							<td width="100">Amount</td>
							<td width="200">Payment Information </td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td>4000</td>
							<td></td>
						</tr>
					</table>
				</section>
			</div>
		</div>
			<div class="col-md-10 mg-b-lg">
				<section class="panel panel-primary">
					<ul class="list-group">
						<li class="list-group-item">
							<div class="show no-margin pd-t-xs">
								<table>
									<tr>
										<td>City</td>
										<td>Code</td>
										<td>Rack Rate</td>
										<td>Insertions</td>
										<td>Offered Rate</td>
									</tr>
									<tr>
										<td>Bangalore</td>
										<td>FPC</td>
										<td>4000</td>
										<td>3</td>
										<td>4000</td>
									</tr>
								</table>
							</div>
						</li>
					</ul>
					<ul class="list-group">
						<li class="list-group-item">
							<div class="show no-margin pd-t-xs">
								<table>
									<tr>
																			<td>FH 2 2014</td>
																			<td>SH 2 2014</td>
																			<td>FH 3 2014</td>
																		</tr>
								</table>
							</div>
						</li>
					</ul>
				</section>
			</div>	
		</div>
 
</section><?php }} ?>

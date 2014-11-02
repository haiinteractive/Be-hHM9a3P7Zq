<?php /*%%SmartyHeaderCode:5539545533334f8da8-82812958%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f8cdc5ba51eff38b81824c48dfae7e6bd4d4d5f' => 
    array (
      0 => 'application\\views\\dashboard\\dashboard.html',
      1 => 1413134245,
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
  ),
  'nocache_hash' => '5539545533334f8da8-82812958',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54566616374881_07426062',
  'has_nocache_code' => false,
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54566616374881_07426062')) {function content_54566616374881_07426062($_smarty_tpl) {?>	<!doctype html>
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
<img src="img/avatar.jpg" class="avatar pull-left img-circle" alt="havas" title="user">
<i class="caret mg-l-xs hidden-xs no-margin"></i>
</a>
<ul class="dropdown-menu dropdown-menu-right">
<li>
<a href="javascript:;">
<div class="pd-t-sm">
	havas@gmail.com
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
 


<section class="layout">
<aside class="chat-sidebar canvas-right pull-right">
<div class="slimscroll" data-height="auto" data-size="6px" data-distance="0">
<div class="row text-white pd-md">
<div class="col-xs-8">
<p class="mg-t-xs">Mute notifications</p>
</div>
<div class="col-xs-4">
<input type="checkbox" class="js-switch" checked />
</div>
</div>
<b class="center-block text-white pd-md">
Activity feed
</b>
<div class="pd-md">
<a href="javascript:;" class="pull-left mg-r-md">
<span class="fa-stack fa-lg">
<i class="fa fa-circle fa-stack-2x text-warning"></i>
<i class="fa fa-download fa-stack-1x fa-inverse"></i>
</span>
</a>
Rose Fournier
<small>Posted on to your wall</small><br>
<small>2 mins ago</small>
</div>
<div class="pd-md">
<a href="javascript:;" class="pull-left mg-r-md">
<span class="fa-stack fa-lg">
<i class="fa fa-circle fa-stack-2x text-danger"></i>
<i class="fa fa-download fa-stack-1x fa-inverse"></i>
</span>
</a>
Liviu Cîndea
<small>Shared a photo with you.</small><br>
<small>13 mins ago</small>
</div>
<div class="pd-md">
<a href="javascript:;" class="pull-left mg-r-md">
<span class="fa-stack fa-lg">
<i class="fa fa-circle fa-stack-2x text-success"></i>
<i class="fa fa-download fa-stack-1x fa-inverse"></i>
</span>
</a>
Ane Marín
<small>Left the group(HR)</small><br>
<small>4 days ago</small>
</div>
<b class="center-block text-white pd-md">
Favourites
</b>
<div class="pd-md">
<a href="javascript:;" class="pull-left mg-r-md">
<img src="img/face4.jpg" class="avatar avatar-sm img-circle" alt="">
</a>
<div class="user">
Adi Afrom
<i class="fa fa-circle text-danger pull-right"></i>
</div>
<small>Offline</small>
</div>
<div class="pd-md">
<a href="javascript:;" class="pull-left mg-r-md">
<img src="img/face3.jpg" class="avatar avatar-sm img-circle" alt="">
</a>
<div class="user">
Leonie Horn
<i class="fa fa-circle text-danger pull-right"></i>
</div>
<small>Offline</small>
</div>
<b class="center-block text-white pd-md">
Friends Online
</b>
<div class="pd-md">
<a href="javascript:;" class="pull-left mg-r-md">
<img src="img/face1.jpg" class="avatar avatar-sm img-circle" alt="">
</a>
<div class="user">
Joshua Smart
<i class="fa fa-circle text-warning pull-right"></i>
</div>
<small>is thinking of bananas</small>
</div>
<div class="pd-md">
<a href="javascript:;" class="pull-left mg-r-md">
<img src="img/face3.jpg" class="avatar avatar-sm img-circle" alt="">
</a>
<div class="user">
娉 廖
<i class="fa fa-circle text-success pull-right"></i>
</div>
<small>Ready to chat</small>
</div>
<div class="pd-md">
<a href="javascript:;" class="pull-left mg-r-md">
<img src="img/face5.jpg" class="avatar avatar-sm img-circle" alt="">
</a>
<div class="user">
Albert Madsen
<i class="fa fa-circle-o text-default pull-right"></i>
</div>
<small>idle</small>
</div>
</div>
</aside>
 
 
<section class="main-content">
 
<div class="content-wrap">
<div class="row mg-b">
<div class="col-xs-6">
<h3 class="no-margin">Dashboard</h3>
<small>Welcome back, Gary Stone</small>
</div>
</div>
<div class="row">
<div class="col-md-3 col-sm-6 col-xs-12">
<section class="panel">
<div class="panel-body">
<div class="circle-icon bg-success">
<i class="fa fa-microphone"></i>
</div>
<div>
<h3 class="no-margin">5469</h3>
New signups
</div>
</div>
</section>
</div>
<div class="col-md-3 col-sm-6 col-xs-12">
<section class="panel">
<div class="panel-body">
<div class="circle-icon bg-danger">
<i class="fa fa-anchor"></i>
</div>
<div>
<h3 class="no-margin">2,300</h3>
Total equity
</div>
</div>
</section>
</div>
<div class="col-md-3 col-sm-6 col-xs-12">
<section class="panel">
<div class="panel-body">
<div class="circle-icon bg-default">
<i class="fa fa-magnet"></i>
</div>
<div>
<h3 class="no-margin">3,823</h3>
Views today
</div>
</div>
</section>
</div>
<div class="col-md-3 col-sm-6 col-xs-12">
<section class="panel">
<div class="panel-body">
<div class="circle-icon">
<canvas id="icon1" width="50" height="50"></canvas>
</div>
<div>
<h3 class="no-margin">12&#176;</h3>
Fog Overcast
</div>
</div>
</section>
</div>
</div>
<div class="row">
<div class="col-md-8">
<div class="row">
<div class="col-md-6 col-sm-6 col-xs-12">
<section class="panel no-border overflow-hidden widget-social">
<div class="panel-body bg-white">
<a href="javascript:;" class="pull-left mg-r-md">
<img src="img/avatar.jpg" class="avatar avatar-md img-circle" alt="">
</a>
<div>Gary Stone
<small class="pull-right">87 mins ago</small>
</div>
<small>San Francisco, CA</small>
<br>
<small>Interactive UX Developer</small>
</div>
<div class="panel-footer no-padding no-border">
<div class="row no-margin">
<div class="col-xs-4 bg-primary pd-md text-center">
<a href="javascript:;">
<span class="fa fa-heart mg-b-xs show"></span>
782
</a>
</div>
<div class="col-xs-4 bg-warning pd-md text-center">
<a href="javascript:;">
<span class="fa fa-user mg-b-xs show"></span>
8,234
</a>
</div>
<div class="col-xs-4 bg-info pd-md text-center">
<a href="javascript:;">
<span class="fa fa-plus mg-b-xs show"></span>
290,847
</a>
</div>
</div>
</div>
</section>
</div>
<div class="col-md-6 col-sm-6 col-xs-12">
<section class="panel position-relative">
<div class="ribbon ribbon-danger">
<div class="banner">
<div class="text">New Ticket</div>
</div>
</div>
<div class="panel-body">
<a href="javascript:;" class="pull-left mg-r-md">
<img src="img/avatar.jpg" class="avatar avatar-sm img-circle" alt="">
</a>
<div>Gary Stone</div>
<small>Apple</small>
<p class="mg-t-xs">
<span class="label label-primary">Facebook</span>
<span class="label label-info">Twitter</span>
<span class="label label-danger">Dribbble</span>
</p>
<small>
<i class="fa fa-circle text-primary mg-r-xs"></i>Hope you can help. How can I get the sidebar widgets to appear on post pages? At the moment they only appear on the homepage.</small>
<p class="mg-xs"></p>
</div>
</section>
</div>
<div class="col-md-12 col-sm-12 col-xs-12">
<section class="panel panel-default dashboard-chart">
<div class="heading pd-lg">
<small class="show pd-b">MESSAGE ANALYTICS
<i class="pull-right">
<a class="fa fa-refresh panel-refresh pd-r-xs" href="javascript:;"></a>
<a class="fa fa-times panel-remove" href="javascript:;"></a>
</i>
<br>Weekly Stats
</small>
</div>
<div class="panel-body no-padding">
<div id="line" style="height:160px;"></div>
</div>
<div class="panel-footer text-center">
<div class="row text-center">
<div class="col-xs-6 col-sm-3">
<i class="fa fa-circle text-default"></i>
<span class="h4 mg-r-xs">5,687</span>
<small class="text-muted">Sent mail</small>
</div>
<div class="col-xs-6 col-sm-3">
<i class="fa fa-circle text-primary"></i>
<span class="h4 mg-r-xs">78,694</span>
<small class="text-muted">Received</small>
</div>
<div class="col-xs-6 col-sm-3">
<span class="h4 mg-r-xs">12,095</span>
<small class="text-muted">Pending</small>
</div>
<div class="col-xs-6 col-sm-3">
<span class="h4 mg-r-xs">9,427</span>
<small class="text-muted">Outbound</small>
</div>
</div>
</div>
</section>
</div>
<div class="col-md-6 col-sm-6 col-xs-12">
<section class="panel panel-color weather-widget">
<div class="panel-body no-padding">
<div class="row no-margin bg-color">
<div class="col-xs-6 bg-white pd-md">
<canvas id="icon2" width="60" height="60"></canvas>
<ul class="mg-t-sm">
<li>
<canvas id="icon3" width="18" height="18"></canvas>
<span>Sunny, 32&#176; C</span>
</li>
<li>
<canvas id="icon4" width="18" height="18"></canvas>
<span>3 Mp/h, NW</span>
</li>
</ul>
</div>
<div class="col-xs-6 bg-color no-padding">
<div class="current-date text-center">
<h1 class="no-margin text-white timer"></h1>
<small class="no-margin text-white date text-uppercase"></small>
<br>
<small class="fa fa-refresh text-white panel-refresh mg-t-sm"></small>
</div>
</div>
</div>
</div>
</section>
</div>
<div class="col-md-6 col-sm-6 col-xs-12">
<section class="panel panel-danger weather-widget">
<div class="panel-body no-padding">
<div class="row no-margin bg-danger">
<div class="col-xs-6 bg-white pd-md">
<canvas id="icon5" width="60" height="60"></canvas>
<ul class="mg-t-sm">
<li>
<canvas id="icon6" width="18" height="18"></canvas>
<span>Snowy, -2&#176; C</span>
</li>
<li>
<canvas id="icon7" width="18" height="18"></canvas>
<span>2 Mp/h, SE</span>
</li>
</ul>
</div>
<div class="col-xs-6 bg-danger no-padding">
<div class="current-date text-center">
<h1 class="no-margin text-white">32&#176;</h1>
<small class="no-margin text-white text-uppercase">today's forecast</small>
<br>
<small class="fa fa-refresh text-white panel-refresh mg-t-sm"></small>
</div>
</div>
</div>
</div>
</section>
</div>
<div class="col-md-6 col-sm-6 col-xs-12">
<section class="panel panel-primary">
<div class="panel-heading">People you may know
</div>
<ul class="list-group">
<li class="list-group-item">
<span class="pull-left mg-t-xs mg-r-md">
<img src="img/face3.jpg" class="avatar avatar-sm img-circle" alt="">
</span>
<div class="show no-margin pd-t-xs">
Gary Stone
<small class="pull-right">1,244 Followers</small>
</div>
<small class="text-muted">Friends with Kevin Hanson</small>
</li>
<li class="list-group-item">
<span class="pull-left mg-t-xs mg-r-md">
<img src="img/face5.jpg" class="avatar avatar-sm img-circle" alt="">
</span>
<div class="show no-margin pd-t-xs">
Taylor King
<small class="pull-right">1,244 Followers</small>
</div>
<small class="text-muted">Friends with Kevin Hanson</small>
</li>
</ul>
</section>
</div>
</div>
</div>
<div class="col-md-4 col-sm-12 col-xs-12">
<section class="panel no-border">
<div class="panel-heading no-border">
<a href="javascript:;" class="pull-left mg-r-md">
<img src="img/avatar.jpg" class="avatar avatar-sm img-circle" alt="">
</a>
<div>Gary Stone
<small class="pull-right">
<a class="fa fa-chevron-down panel-collapsible pd-r-xs" href="javascript:;"></a>
<a class="fa fa-refresh panel-refresh pd-r-xs" href="javascript:;"></a>
<a class="fa fa-times panel-remove" href="javascript:;"></a>
</small>
</div>
<small>shared a picture with Matt Stone.</small>
</div>
<div class="panel-body no-padding">
<div class="imgpost-heading">
<ul class="bxslider">
<li>
<div class="cover" style="background-image: url(img/profile-cover.jpg)"></div>
</li>
<li>
<div class="cover" style="background-image: url(img/cover.jpg)"></div>
</li>
</ul>
</div>
<div class="pd-md">
<small>Peter Capaldi, Matt Smith, David Tennant, Christopher Eccleston and 6 others hate the Dalek.</small>
<div class="clearfix mg-t-md">
<img src="img/face3.jpg" class="avatar avatar-sm img-circle pull-left mg-r-md" alt="">
<div class="input-group ">
<input type="text" class="form-control" placeholder="Write a comment">
<span class="input-group-addon">
<i class="fa fa-camera"></i>
</span>
</div>
</div>
</div>
</div>
</section>
<section class="panel no-border bg-success">
<div class="panel-heading no-border">
<small class="pull-right text-white">
<a class="fa fa-chevron-down panel-collapsible pd-r-xs" href="javascript:;"></a>
<a class="fa fa-refresh panel-refresh pd-r-xs" href="javascript:;"></a>
<a class="fa fa-times panel-remove" href="javascript:;"></a>
</small>
<h5 class="text-white pd">Cameo
<b>Responsive template powered by Twitter bootstrap 3</b>
</h5>
</div>
<div class="panel-body bg-white">
<a href="javascript:;" class="pull-left mg-r-md">
<img src="img/avatar.jpg" class="avatar avatar-sm img-circle" alt="">
</a>
<div>Gary Stone
<small class="pull-right">12 mins ago</small>
</div>
<small>San Francisco, CA</small>
<p class="mg-t-sm">
The whole of science is nothing more than a refinement of everyday thinking.
</p>
<div class="text-muted">
<a href="javascript:;" class="muted mg-r-md">
<i class="fa fa-comment-o  mg-r-xs"></i>3523
</a>
<a href="javascript:;" class="text-white">
<i class="fa fa-heart  text-danger mg-r-xs"></i>12K
</a>
</div>
</div>
</section>
</div>
</div>
</div>
 
</section>
 
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

<?php }} ?>

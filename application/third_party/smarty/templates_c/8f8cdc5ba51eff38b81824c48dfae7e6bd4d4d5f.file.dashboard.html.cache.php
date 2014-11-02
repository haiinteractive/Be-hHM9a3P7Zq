<?php /* Smarty version Smarty-3.1.19, created on 2014-11-01 19:23:31
         compiled from "application\views\dashboard\dashboard.html" */ ?>
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
  ),
  'nocache_hash' => '5539545533334f8da8-82812958',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54553333544a91_35064105',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54553333544a91_35064105')) {function content_54553333544a91_35064105($_smarty_tpl) {?>
	<?php echo $_smarty_tpl->getSubTemplate ('../layout/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>



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
	<?php echo $_smarty_tpl->getSubTemplate ('../layout/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<?php }} ?>

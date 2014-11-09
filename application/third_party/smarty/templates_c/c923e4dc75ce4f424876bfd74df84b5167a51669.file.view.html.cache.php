<?php /* Smarty version Smarty-3.1.19, created on 2014-11-09 18:58:43
         compiled from "application\views\reports\view.html" */ ?>
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
  ),
  'nocache_hash' => '30971545fb940a5cc10-28868395',
  'function' => 
  array (
  ),
  'cache_lifetime' => 3600,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_545fb940bec580_87803608',
  'variables' => 
  array (
    'ro_details' => 0,
    'adtypes' => 0,
    'ad' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545fb940bec580_87803608')) {function content_545fb940bec580_87803608($_smarty_tpl) {?>
	<?php echo $_smarty_tpl->getSubTemplate ('../layout/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

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
								<small class="pull-right"><?php echo $_smarty_tpl->tpl_vars['ro_details']->value['ro_number'];?>
</small>
							</div>
						</li>
						<li class="list-group-item">
							<div class="show no-margin pd-t-xs">
							Publication:
								<small class="pull-right"><?php echo $_smarty_tpl->tpl_vars['ro_details']->value['city'];?>
</small>
							</div>
						</li>
						<li class="list-group-item">
							<div class="show no-margin pd-t-xs">
								Sales Person:
								<small class="pull-right"><?php echo $_smarty_tpl->tpl_vars['ro_details']->value['user_first_name'];?>
</small>
							</div>
						</li>
						<li class="list-group-item">
							<div class="show no-margin pd-t-xs">
								Date:
								<small class="pull-right"><?php echo $_smarty_tpl->tpl_vars['ro_details']->value['publish_date'];?>
</small>
							</div>
						</li>
						<li class="list-group-item">
							<div class="show no-margin pd-t-xs">
								Special Instruction:
								<small class="pull-right"><?php echo $_smarty_tpl->tpl_vars['ro_details']->value['special_instruction'];?>
</small>
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
								<small class="pull-right"><?php echo $_smarty_tpl->tpl_vars['ro_details']->value['agency_name'];?>
</small>
							</div>
						</li>
						<li class="list-group-item">
							<div class="show no-margin pd-t-xs">
							Company Name:
								<small class="pull-right"><?php echo $_smarty_tpl->tpl_vars['ro_details']->value['c_name'];?>
</small>
							</div>
						</li>
						<li class="list-group-item">
							<div class="show no-margin pd-t-xs">
								Contact Person:
								<small class="pull-right"><?php echo $_smarty_tpl->tpl_vars['ro_details']->value['c_person'];?>
</small>
							</div>
						</li>
						<li class="list-group-item">
							<div class="show no-margin pd-t-xs">
								Address:
								<small class="pull-right"><?php echo $_smarty_tpl->tpl_vars['ro_details']->value['c_address'];?>
</small>
							</div>
						</li>
						<li class="list-group-item">
							<div class="show no-margin pd-t-xs">
								Pincode:
								<small class="pull-right"><?php echo $_smarty_tpl->tpl_vars['ro_details']->value['c_pincode'];?>
</small>
							</div>
						</li>
						<li class="list-group-item">
							<div class="show no-margin pd-t-xs">
								Name of Establishment being Advertised:
								<small class="pull-right"><?php echo $_smarty_tpl->tpl_vars['ro_details']->value['c_name'];?>
</small>
							</div>
						</li>
						<li class="list-group-item">
							<div class="show no-margin pd-t-xs">
								Description of Business Being Advertised:
								<small class="pull-right"><?php echo $_smarty_tpl->tpl_vars['ro_details']->value['category_name'];?>
</small>
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
							<td><?php echo $_smarty_tpl->tpl_vars['ro_details']->value['net_amount'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['ro_details']->value['special_instruction'];?>
</td>
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
										<td><?php echo $_smarty_tpl->tpl_vars['ro_details']->value['city'];?>
</td>
										<td><?php echo $_smarty_tpl->tpl_vars['ro_details']->value['ad_type_code'];?>
</td>
										<td><?php echo $_smarty_tpl->tpl_vars['ro_details']->value['ad_type_rate'];?>
</td>
										<td><?php echo count($_smarty_tpl->tpl_vars['adtypes']->value);?>
</td>
										<td><?php echo $_smarty_tpl->tpl_vars['ro_details']->value['offered_rate'];?>
</td>
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
									<?php  $_smarty_tpl->tpl_vars['ad'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ad']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['adtypes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ad']->key => $_smarty_tpl->tpl_vars['ad']->value) {
$_smarty_tpl->tpl_vars['ad']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['ad']->key;
?>
										<td><?php echo $_smarty_tpl->tpl_vars['ad']->value['session'];?>
 <?php echo $_smarty_tpl->tpl_vars['ad']->value['month'];?>
 <?php echo $_smarty_tpl->tpl_vars['ad']->value['year'];?>
</td>
									<?php } ?>
									</tr>
								</table>
							</div>
						</li>
					</ul>
				</section>
			</div>	
		</div>
 
</section><?php }} ?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
<?php $this->load->view("admin_interface/includes/head");?>
</head>
<body>
<!--[if lt IE 7]>
	<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
<![endif]-->
	<?php $this->load->view("admin_interface/includes/navbar");?>
	<div class="container">
		<div class="row">
			<div class="span3">
				<?php $this->load->view("admin_interface/includes/sidebar");?>
			</div>
			<div class="span9">
				<ul class="breadcrumb">
					<li><a href="<?=site_url(ADMIN_START_PAGE);?>">Панель управления</a> <span class="divider">/</span></li>
					<li class="active">Контакты</li>
				</ul>
				<div class="clear"></div>
				<h2>Контакты</h2>
				<table class="table table-bordered">
					<thead>
						<tr>
							<th class="span3">Адрес</th>
							<th class="span3">Телефон</th>
							<th class="span3">Email</th>
							<th class="span1"></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><?=$contact['address'];?></td>
							<td><?=$contact['phones'];?></td>
							<td><?=$contact['emails'];?></td>
							<td>
								<a href="<?=site_url(ADMIN_START_PAGE.'/contact/edit?mode=text&id='.$contact['id'])?>" class="btn btn-link" ><i class="icon-edit"></i></a>
							</td>
						</tr>
					</tbody>
				</table>
				<div class="clear"></div>
			</div>
		</div>
	</div>
	
	<?php $this->load->view("admin_interface/includes/footer");?>
	<?php $this->load->view("admin_interface/includes/scripts");?>
</body>
</html>
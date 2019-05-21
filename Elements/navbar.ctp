<?php if($theme_config['navbar']): ?>
<?= $this->Html->css('nav.css'); ?>
<section id="nav-up">
	<div class="row" style="margin-left:0px;margin-right:0px">
		<div class="col-4 nav-left">
			<div class="container">
				<div class="online">
					<?php if($banner_server): ?>
						<i class="fa fa-users icon"></i>
						<?= $server_infos['GET_PLAYER_COUNT'] ?> connectés
					<?php endif; ?>
				</div>	
			</div>	
		</div>
		<div class="col-8 nav-right">
			<?php if(!$isConnected && !empty($theme_config['accueil']->textslider)): ?>
				<marquee><?= $theme_config['accueil']->textslider ?></marquee>
			<?php endif; ?>
			<div class="container">
				<div  class="nav-admin">
				<?php if($isConnected): ?>
			<a class="nav-link"
			   href="<?= $this->Html->url(array('controller' => 'profile', 'action' => 'index', 'plugin' => null)) ?>">
				Mon profil <i aria-hidden="true" class="fa fa-user"></i>
			</a>
			<a class="nav-link" href="#notifications_modal" data-toggle="modal">
				Mes notifications <i aria-hidden="true" class="fa fa-flag"></i>
			</a>
			<a class="nav-link"
			   href="<?= $this->Html->url(array('controller' => 'user', 'action' => 'logout', 'plugin' => null)) ?>">
				Se déconnecter <i aria-hidden="true" class="fa fa-power-off"></i>
			</a>
			<?php if($Permissions->can('ACCESS_DASHBOARD')): ?>
			<a class="nav-link"
			   href="<?= $this->Html->url(array('controller' => '', 'action' => 'index', 'plugin' => 'admin')) ?>">
				Admin <i aria-hidden="true" class="fa fa-cogs"></i>
			</a>
			<?php endif; ?>
			<?php endif; ?>
			<?php if(!$isConnected): ?>
				<a href="#login" data-toggle="modal" class="nav-link" style="margin-right:20px;">
					<?= $Lang->get('USER__LOGIN') ?> 
				</a>
				<a href="#register" data-toggle="modal" class="nav-link">
					<?= $Lang->get('USER__REGISTER') ?> 
				</a>
			<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="nav">
	<div class="container">
		<div class="row">
			<div class="col-12 text">
				<?php if($theme_config['logo'] != ""): ?>
					<img src="<?= $theme_config['logo'] ?>"/>
				<?php else: ?>
					<a class="title" href="/"><?= $website_name ?></a>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>





<section id="slider"
	<?php if($theme_config['accueil']->slider != ""): ?>
		style="background: url('<?= $theme_config['accueil']->slider ?>') no-repeat;background-size: cover;background-position: center;"
	<?php else: ?>
		style="background: url(theme/Tactile/img/banniere.png) no-repeat;background-size: cover;background-position: center;"
	<?php endif; ?>>
	<div id="particles-js"></div>
	<?= $this->Html->script('particles.js') ?>
	<div class="container">
		<div class="row" style="position: relative; z-index:2">
			<div class="col-6">
				<div class="section-right">
					<h6 class="title"><?= $theme_config['accueil']->title ?></h6>
					<p class="lead subtitle"><?= $theme_config['accueil']->subtitle ?></p>
				</div>
			</div>
			<div class="col-6">
				<a class="link"><?= $theme_config['accueil']->ip ?></a>
			</div>
		</div>
	</div>
	
</section>
<nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
	<button class="navbar-toggler navbar-toggler-right icon-nav" type="button" data-toggle="collapse"
			data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
			aria-label="Toggle navigation" style="border-color: #fff;">
		<i class="fa fa-bars icon"></i>
	</button>
	<div class="collapse navbar-collapse" id="navbarResponsive" aria-expanded="true">
		<ul class="navbar-nav nav-main">

			<?php if(!empty($nav)): ?>
			<?php $i = 0; ?>
			<?php foreach ($nav as $key => $value): ?>
			<?php if(empty($value['Navbar']['submenu'])): ?>
			<li class="nav-item">
				<a class="nav-link js-scroll-trigger" href="<?= $value['Navbar']['url'] ?>">
					<?php if(!empty($value['Navbar']['icon'])): ?>
					<i class="fa fa-<?= $value['Navbar']['icon'] ?>"></i>
					<?php endif; ?>
					<?= $value['Navbar']['name'] ?>
				</a>
			</li>
			<?php else: ?>
			<li class="dropdown">
				<a href="#" class="nav-link js-scroll-trigger" data-toggle="dropdown" role="button"
				   aria-expanded="false">
					<?php if(!empty($value['Navbar']['icon'])): ?>
					<i class="fa fa-<?= $value['Navbar']['icon'] ?>"></i>
					<?php endif; ?>
					<?= $value['Navbar']['name'] ?>
					<i class="fa fa-angle-down">
					</i>
				</a>
				<ul style="text-align: left;padding: 0px;" class="dropdown-menu" role="menu">
					<?php
					$submenu = json_decode($value['Navbar']['submenu']);
                     foreach ($submenu as $k => $v) {
					?>
					<div class="dropd-menu">
						<a class="title-drop"
						   href="<?= rawurldecode(rawurldecode($v)) ?>"<?= ($value['Navbar']['open_new_tab']) ?'target="_blank"':''?>>
						   <?= rawurldecode(str_replace('+', ' ', $k)) ?>
						</a>
					</div>

					<?php } ?>
				</ul>
			</li>
			<?php endif; ?>
			<?php endforeach; ?>
			<?php endif; ?>
		</ul>
	</div>
</nav>
<?php else: ?>
<?= $this->Html->css('nav2.css'); ?>
<!-- IMAGE NAVIGATION -->
<section class="text-center title-img">
	<header id="slider-up"
	<?php if($theme_config['accueil']->slider != ""): ?>
		style="background: url('<?= $theme_config['accueil']->slider ?>') no-repeat;background-size: cover;background-position: center;"
	<?php else: ?>
		style="background: url(theme/Subtil/img/banniere.png) no-repeat;background-size: cover;background-position: center;"
	<?php endif; ?>>
	<div id="particles-js"></div>
	<?= $this->Html->script('particles.js') ?>
	<?php if($theme_config['logo'] != ""): ?>
		<img class="pulse" src="<?= $theme_config['logo'] ?>"/>
	<?php else: ?>
		<a href="/"><h6><?= $website_name ?></h6></a>
	<?php endif; ?>


	</header>
	<div class="down-img row">
		<div class="col-4 down-img-ip">
			<i class="fa fa-map-marker"></i><b> IP : </b>
		</div>
		<div class="col-8">
			<b><?= $theme_config['accueil']->ip ?></b>
		</div>

	</div>
</section>
<!-- UP NAVIGATION -->
<section id="upNav" class="fixed-top">
	<div class="nav-co">
		<?php if($banner_server): ?>
		<i class="fa fa-users icon"></i>
		<?= $server_infos['GET_PLAYER_COUNT'] ?> connectés
		<?php endif; ?>
	</div>
	
	<div class="nav-connection">
		<div id="nav-admin-buttons" class="nav-link">
			<?php if(!$isConnected): ?>
			<a href="#login" data-toggle="modal" class="right nav-link">
				<?= $Lang->get('USER__LOGIN') ?> <i aria-hidden="true" class="fa fa-sign-in"></i>
			</a>
			<a href="#register" data-toggle="modal" class="right nav-link">
				<?= $Lang->get('USER__REGISTER') ?> <i aria-hidden="true" class="fa fa-user-plus"></i>
			</a>
			<?php else: ?>
			
			<a class="right nav-link"
			   href="<?= $this->Html->url(array('controller' => 'profile', 'action' => 'index', 'plugin' => null)) ?>">
				Mon profil <i aria-hidden="true" class="fa fa-user"></i>
			</a>
			<a class="right nav-link" href="#notifications_modal" data-toggle="modal">
				Mes notifications <i aria-hidden="true" class="fa fa-flag"></i>
			</a>
			<a class="right nav-link"
			   href="<?= $this->Html->url(array('controller' => 'user', 'action' => 'logout', 'plugin' => null)) ?>">
				Se déconnecter <i aria-hidden="true" class="fa fa-power-off"></i>
			</a>
			<?php if($Permissions->can('ACCESS_DASHBOARD')): ?>
			<a class="right nav-link"
			   href="<?= $this->Html->url(array('controller' => '', 'action' => 'index', 'plugin' => 'admin')) ?>">
				Admin <i aria-hidden="true" class="fa fa-cogs"></i>
			</a>
			<?php endif; ?>
			<?php endif; ?>
		</div>
	</div>
</section>
<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
	<button class="navbar-toggler navbar-toggler-right icon-nav" type="button" data-toggle="collapse"
			data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
			aria-label="Toggle navigation" style="border-color: #fff;">
		<i class="fa fa-bars icon"></i>
	</button>
	<div class="collapse navbar-collapse" id="navbarResponsive" aria-expanded="true">
		<ul class="navbar-nav nav-main ">

			<?php if(!empty($nav)): ?>
			<?php $i = 0; ?>
			<?php foreach ($nav as $key => $value): ?>
			<?php if(empty($value['Navbar']['submenu'])): ?>
			<li class="nav-item">
				<a class="nav-link js-scroll-trigger" href="<?= $value['Navbar']['url'] ?>">
					<?php if(!empty($value['Navbar']['icon'])): ?>
					<i class="fa fa-<?= $value['Navbar']['icon'] ?>"></i>
					<?php endif; ?>
					<?= $value['Navbar']['name'] ?>
				</a>
			</li>
			<?php else: ?>
			<li class="dropdown">
				<a href="#" class="nav-link js-scroll-trigger" data-toggle="dropdown" role="button"
				   aria-expanded="false">
					<?php if(!empty($value['Navbar']['icon'])): ?>
					<i class="fa fa-<?= $value['Navbar']['icon'] ?>"></i>
					<?php endif; ?>
					<?= $value['Navbar']['name'] ?>
					<i class="fa fa-angle-down">
					</i>
				</a>
				<ul style="text-align: left;padding: 0px;" class="dropdown-menu" role="menu">
					<?php
					$submenu = json_decode($value['Navbar']['submenu']);
                     foreach ($submenu as $k => $v) {
					?>
					<div class="dropd-menu">
						<a class="title-drop"
						   href="<?= rawurldecode(rawurldecode($v)) ?>"<?= ($value['Navbar']['open_new_tab']) ?'target="_blank"':''?>>
						   <?= rawurldecode(str_replace('+', ' ', $k)) ?>
						</a>
					</div>

					<?php } ?>
				</ul>
			</li>
			<?php endif; ?>
			<?php endforeach; ?>
			<?php endif; ?>
		</ul>
	</div>
</nav>

<?php endif; ?>

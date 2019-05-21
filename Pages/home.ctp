<section id="home-up">
	<div class="container">
		<div class="jumbotron jumbotron-fluid text-center">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="thumbnail img1" style="background: url(<?= $theme_config['accueil']->section->img ?>) no-repeat;">
						</div>
					</div>
					<div class="col-md-8">
						<h1 class="display-3 title"><?= $theme_config['accueil']->section->titre ?></h1>
						<p class="lead"><?= $theme_config['accueil']->section->desc ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="services"
	<?php if($theme_config['accueil']->slider2 != ""): ?>
		style="background: url('<?= $theme_config['accueil']->slider2 ?>') no-repeat;background-size: cover;background-position: center;"
	<?php else: ?>
		style="background: url(theme/Subtil/img/banniere.png) no-repeat;background-size: cover;background-position: center;"
	<?php endif; ?>>
	<div class="title-services">
		Services
	</div>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-4">
				<div class="card">
					<div class="card-body text-center">
						<i style="font-size:30px" class="fa fa-<?= $theme_config['service']->un->icon ?>"></i>
						<h4 class="card-title"><?= $theme_config['service']->un->titre ?></h4>
						<p class="card-text"><?= $theme_config['service']->un->description ?></p>
						<a href="<?= $theme_config['service']->un->lien ?>" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-4">
				<div class="card">
					<div class="card-body text-center">
						<i style="font-size:30px" class="fa fa-<?= $theme_config['service']->deux->icon ?>"></i>
						<h4 class="card-title"><?= $theme_config['service']->deux->titre ?></h4>
						<p class="card-text"><?= $theme_config['service']->deux->description ?></p>
						<a href="<?= $theme_config['service']->deux->lien ?>" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-4">
				<div class="card">
					<div class="card-body text-center">
						<i style="font-size:30px" class="fa fa-<?= $theme_config['service']->trois->icon ?>"></i>
						<h4 class="card-title"><?= $theme_config['service']->trois->titre ?></h4>
						<p class="card-text"><?= $theme_config['service']->trois->description ?></p>
						<a href="<?= $theme_config['service']->trois->lien ?>" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>
<section id="news">
	<div class="container">
		<div class="row">
			<?php
        if(!empty($search_news)) {
        $i = 0;
        foreach ($search_news as $k => $v) {
			$i++;
			if($i > 3) {
			break;
			}
			?>
			<div class="col-lg-4 mb-4">
				<div class="card h-100">
					<h4 class="card-header title"><?= $v['News']['title'] ?></h4>
					
					<div class="card-body" style="overflow:hidden;">
						<p class="card-text">
							<?= $this->Text->truncate($v['News']['content'], 400, array('ellipsis' => '...', 'html' => true))?></p>
					</div>
					<div class="card-footer">
						<a href="<?= $this->Html->url(array('controller' => 'blog', 'action' => $v['News']['slug'])) ?>"
						   class="btn btn-secondary">Lire plus</a>
						<span><?= $v['News']['count_comments'] ?> <i class="fa fa-comments"
																	 style="color: #000"></i></span>
						<span style="margin-left:15px"><?= $v['News']['count_likes'] ?>
							<i class="fa fa-thumbs-up" style="color: #000"></i></span>
					</div>
				</div>
			</div>
			<?php } ?>
			<?php } else { ?>
			<div class="col-lg-12"><h4 style="font-family: 'Concert One', sans-serif;margin-top:40px"><?= $Lang->get('NEWS__NONE_PUBLISHED') ?></h4></div>
			<?php } ?>
		</div>
	</div>
</section>

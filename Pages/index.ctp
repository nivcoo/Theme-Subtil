<section id="pages">
	<div class="jumbotron jumbotron-fluid text-center">
		<div class="container">
			<h1 class="display-3 title"><?= before_display($page['title']) ?></h1>
			<p class="lead"><?= $Lang->get('GLOBAL__UPDATED') ?> : <?= $Lang->date($page['updated']) ?></p>
			<p class="lead"><?= $Lang->get('GLOBAL__AUTHOR') ?> : <?= $page['author'] ?></p>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-body">
						<?= $page['content'] ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<div class="jumbotron jumbotron-fluid text-center">
	<div class="container">
		<h1 class="display-3 title">News</h1>
		<p class="lead">Liste des news</p>
	</div>
</div>
<div class="container">
    <div class="row">
		<?php        if(!empty($search_news)) { foreach ($search_news as $news) {?>
			<div class="col-lg-4 mb-4">
				<div class="card h-100">
					<h4 class="card-header title"><?= $news['News']['title'] ?></h4>
					
					<div class="card-body" style="overflow:hidden;">
						<p class="card-text">
							<?= $this->Text->truncate($v['News']['content'], 400, array('ellipsis' => '...', 'html' => true))?></p>
					</div>
					<div class="card-footer">
						<a href="<?= $this->Html->url(array('controller' => 'blog', 'action' => $news['News']['slug'])) ?>"
						   class="btn btn-secondary">Lire plus</a>
						<span><?= $news['News']['count_comments'] ?> <i class="fa fa-comments"
																	 style="color: #000"></i></span>
						<span style="margin-left:15px"><?= $news['News']['count_likes'] ?>
							<i class="fa fa-thumbs-up" style="color: #000"></i></span>
					</div>
				</div>
			</div>
		<? } } else { ?>
			<div class="col-lg-12"><h4 style="font-family: 'Concert One', sans-serif;margin-top:40px"><?= $Lang->get('NEWS__NONE_PUBLISHED') ?></h4></div>
		<? } ?>
	</div>
</div>

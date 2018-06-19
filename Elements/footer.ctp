<section id="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="title-footer">
					Liens
				</div>
				<div class="lien-footer">
					<ul class="lien-nav-footer">
						<?php if(!empty($nav)) {
							$i = 0;
							foreach ($nav as $key => $value) { ?>
							<?php if($i <= 3) { ?>
							<?php if(empty($value['Navbar']['submenu'])) { ?>
									<li>
										<a class="lien-nav" href="<?= $value['Navbar']['url'] ?>" <?= ($value['Navbar']['open_new_tab']) ? ' target="_blank"' : '' ?>>
											<?= $value['Navbar']['name'] ?>
										</a>
									</li>
								<?php } ?>
								<?php } else break; ?>
							<?php $i++; }
						} ?>
					</ul>
				</div>
			</div>
			<div class="col-md-4">
				<div class="title-footer">
					Partenaires
				</div>
				<div class="lien-footer">
					<?php if(!empty($theme_config['footer']->un->titre)): ?>
						<i class="fa fa-angle-double-right"></i>
						<a href="<?= $theme_config['footer']->un->lien ?>">
							<?= $theme_config['footer']->un->titre ?>
						</a><br>
					<?php endif; ?>
					<?php if(!empty($theme_config['footer']->deux->titre)): ?>
						<i class="fa fa-angle-double-right"></i>
						<a href="<?= $theme_config['footer']->deux->lien ?>">
							<?= $theme_config['footer']->deux->titre ?>
						</a><br>
					<?php endif; ?>
					<?php if(!empty($theme_config['footer']->trois->titre)): ?>
						<i class="fa fa-angle-double-right"></i>
						<a href="<?= $theme_config['footer']->trois->lien ?>">
							<?= $theme_config['footer']->trois->titre ?>
						</a>
					<?php endif; ?>
				</div>
				<div id="socials">
			<?php
				if (!empty($findSocialButtons)):
					foreach ($findSocialButtons as $key => $value):
			?>
			<?php
					endforeach;
				endif;
			?>
			<?php
				if(!empty($facebook_link)): ?>
				<a class="lien-facebook" href="<?= $facebook_link ?>"><i class="fa fa-facebook"></i></a>
			<?php
				endif;
				if(!empty($twitter_link)):
			?>
				<a class="lien-twitter" href="<?= $twitter_link ?>"><i class="fa fa-twitter"></i></a>
			<?php
				endif;
				if(!empty($youtube_link)):
			?>
				<a class="lien-youtube" href="<?= $youtube_link ?>"><i class="fa fa-youtube"></i></a>
			<?php
				endif;
				if(!empty($skype_link)):
			?>
				<a class="lien-skype" href="<?= $skype_link ?>"><i class="fa fa-skype"></i></a>
			<?php
				endif;
			?>
		</div>
			</div>
			<div class="col-md-4">
				<div class="title-footer">
					Informations
					<i class="fa fa-angle-down"></i>
				</div>
				<div class="text-footer">
					<?= $theme_config['footer']->infos ?>
				</div>
			</div>
		</div>
	</div>
	<div id="footer-by">
	<div class="container">
            <span class="left">
				Copyright &copy; <?php echo date('Y');?>
				<a href=""><?= $website_name ?></a> -
				Thème créé par <a href="" target="_blank">nivcoo</a>
			</span>
		<span class="right">
				Propulsé par <a href="http://mineweb.org" target="_BLANK">MineWeb</a>
			</span>
	</div>
	</div>
</section>

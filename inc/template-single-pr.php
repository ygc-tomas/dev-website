<section class="u-pt--45 u-pt--30--sp">
	<div class="l-wrap--1100 l-wrap--sp">
		<div class="p-section --medium">
			<div class="p-section__contents">
				<?php if (have_posts()): while (have_posts()): the_post(); ?>
						<div class="p-postArticle04">
							<div class="p-postArticle04__meta">
								<div class="p-postArticle04__date"><?php echo the_time('Y.m.d'); ?></div>
								<?php $cats = get_the_terms($post->ID, 'pr_cat');
								if ($cats): ?>
									<ul class="p-postArticle04__category">
										<?php foreach ($cats as $cat): ?>
											<li class="p-postArticle04__category__item">
												<?php echo $cat->name; ?>
											</li>
										<?php endforeach; ?>
									</ul>
								<?php endif; ?>
							</div>
							<h1 class="p-postArticle04__heading"><?php the_title(); ?></h1>
							<?php if (get_the_post_thumbnail()): ?>
								<div class="p-postArticle04__thumbnail">
									<?php the_post_thumbnail('large'); ?>
								</div>
							<?php endif; ?>
							<article class="p-postArticle04__article p-wysiwyg02">
								<?php the_content(); ?>
							</article>
						</div>
				<?php endwhile;
				endif; ?>
			</div>
		</div>
	</div>
</section>
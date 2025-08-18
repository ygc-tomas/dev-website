<?php global $langClass; ?>
<section class="u-pt--45 u-pt--30--sp">
	<div class="l-wrap l-wrap--sp">
		<div class="p-tab">
			<div class="p-tab__head">

				<div class="p-postSort">
					<?php
					switch ($langClass) {
						case "ja":
							$cats = get_terms('blog_cat');
							break;
						case "en":
							$cats = get_terms('blog-en_cat');
							break;
						case "th":
							$cats = get_terms('blog-th_cat');
							break;
					}
					if ($cats): ?>
						<button type="button" class="p-postSort__button">
							<span class="icon">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/case-study/icon_category_01.svg" alt="">
							</span>
							<span class="label">
								<?php switch ($langClass) {
									case 'ja': ?>
										カテゴリーから探す
									<?php break;
									case 'en': ?>
										Search by Category
									<?php break;
									case 'th': ?>
										ค้นหาจากหมวดหมู่
								<?php break;
								} ?>
							</span>
						</button>
						<div class="p-postSort__panel">
							<div class="p-postSort__panel__inner">
								<ul class="p-postSort__category">
									<li class="p-postSort__category__item">
										<a href="<?php echo $langPath; ?>/blog" class="p-postSort__category__link">
											<?php switch ($langClass) {
												case 'ja': ?>
													すべて
												<?php break;
												case 'en': ?>
													All
												<?php break;
												case 'th': ?>
													All
											<?php break;
											} ?>
										</a>
									</li>
									<?php foreach ($cats as $cat): ?>
										<li class="p-postSort__category__item">
											<a href="<?php echo get_term_link($cat); ?>" class="p-postSort__category__link"><?php echo $cat->name; ?></a>
										</li>
									<?php endforeach; ?>
								</ul>
							</div>
						</div>
					<?php endif; ?>
				</div>

				<div class="p-postSort02">
					<?php
					switch ($langClass) {
						case "ja":
							$cats = get_terms('blog_cat');
							break;
						case "en":
							$cats = get_terms('blog-en_cat');
							break;
						case "th":
							$cats = get_terms('blog-th_cat');
							break;
					}
					if ($cats): ?>
						<div class="p-postSort02__item">
							<button type="button" class="p-postSort02__button">
								<span class="icon">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/case-study/icon_category_01.svg" alt="">
								</span>
								<span class="label">
									<?php switch ($langClass) {
										case 'ja': ?>
											カテゴリーから探す
										<?php break;
										case 'en': ?>
											Search by Category
										<?php break;
										case 'th': ?>
											ค้นหาจากหมวดหมู่
									<?php break;
									} ?>
								</span>
							</button>
							<div class="p-postSort02__panel">
								<div class="p-postSort02__panel__inner">
									<ul class="p-postSort02__category">
										<li class="p-postSort02__category__item">
											<a href="<?php echo $langPath; ?>/blog" class="p-postSort__category__link">
												<?php switch ($langClass) {
													case 'ja': ?>
														すべて
													<?php break;
													case 'en': ?>
														All
													<?php break;
													case 'th': ?>
														All
												<?php break;
												} ?>
											</a>
										</li>
										<?php foreach ($cats as $cat): ?>
											<li class="p-postSort02__category__item">
												<a href="<?php echo get_term_link($cat); ?>" class="p-postSort__category__link"><?php echo $cat->name; ?></a>
											</li>
										<?php endforeach; ?>
									</ul>
								</div>
							</div>
						</div>
					<?php endif; ?>
				</div>
			</div>

			<div class="p-tab__body">
				<?php if (have_posts()): ?>
					<div class="p-postArchive03">
						<?php while (have_posts()): the_post(); ?>
							<a href="<?php the_permalink(); ?>" class="p-postCard">
								<div class="p-postCard__thumbnail">
									<?php if (get_the_post_thumbnail()): ?>
										<?php the_post_thumbnail('large'); ?>
									<?php else: ?>
										<img src="<?php echo get_template_directory_uri(); ?>/ogimage.png" alt="">
									<?php endif; ?>
								</div>
								<div class="p-postCard__body">
									<span class="p-postCard__date"><?php echo the_time('Y.m.d'); ?></span>
									<?php $cats = get_the_terms($post->ID, 'blog_cat');
									if ($cats): ?>
										<ul class="p-postCard__category">
											<?php foreach ($cats as $cat): ?>
												<li class="p-postCard__category__item">
													<?php echo $cat->name; ?>
												</li>
											<?php endforeach; ?>
										</ul>
									<?php endif; ?>
									<p class="p-postCard__heading --hasMt">
										<?php the_title(); ?>
									</p>
								</div>
							</a>
						<?php endwhile; ?>
					</div>
					<div class="p-pagination u-mt--25 u-mt--18--sp">
						<?php
						$args = array(
							'mis_size' => 3,
							'screen_reader_text' => '',
							'prev_text' => '<',
							'next_text' => '>'
						);
						the_posts_pagination($args);
						?>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>
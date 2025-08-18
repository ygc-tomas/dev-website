<?php global $langClass; ?>
<section class="u-pt--45 u-pt--30--sp">
	<div class="l-wrap--1100 l-wrap--sp">
		<div class="p-section --medium">
			<div class="p-section__contents">
				<?php if (have_posts()): while (have_posts()): the_post(); ?>
						<div class="p-postArticle04">
							<div class="p-postArticle04__meta">
								<div class="p-postArticle04__date"><?php echo the_time('Y.m.d'); ?></div>
								<?php
								switch ($langClass) {
									case "ja":
										$cats = get_the_terms($post->ID, 'seminar_cat');
										break;
									case "en":
										$cats = get_the_terms($post->ID, 'seminar-en_cat');
										break;
									case "th":
										$cats = get_the_terms($post->ID, 'seminar-th_cat');
										break;
								}
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


							<?php switch ($langClass) {
								case 'ja': ?>
									<?php if (!has_term('end', 'seminar_cat')): ?>
										<div class="p-postArticle04__form p-form">
											<p class="p-postArticle04__form__heading">
												申込フォーム
											</p>
											<div class="p-postArticle04__form__contents">
												<?php echo do_shortcode('[contact-form-7 id="f8d1c77" title="セミナー申し込み - 日本語"]'); ?>
											</div>
										</div>
						</div>
					<?php endif; ?>
				<?php break;
								case 'en': ?>
					<?php if (!has_term('end', 'seminar-en_cat')): ?>
						<div class="p-postArticle04__form p-form">
							<p class="p-postArticle04__form__heading">
								Application form
							</p>
							<div class="p-postArticle04__form__contents">
								<?php echo do_shortcode('[contact-form-7 id="2dbb5cc" title="セミナー申し込み - 英語"]'); ?>
							</div>
						</div>
			</div>
		<?php endif; ?>
	<?php break;
								case 'th': ?>
		<?php if (!has_term('end', 'seminar-th_cat')): ?>
			<div class="p-postArticle04__form p-form">
				<p class="p-postArticle04__form__heading">
					แบบฟอร์มใบสมัคร
				</p>
				<div class="p-postArticle04__form__contents">
					<?php echo do_shortcode('[contact-form-7 id="a3db564" title="資料請求 - タイ語"]'); ?>
				</div>
			</div>
		</div>
	<?php endif; ?>
<?php break;
							} ?>
<?php endwhile;
				endif; ?>
	</div>
	</div>
	</div>
</section>
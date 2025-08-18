<?php global $langClass;
global $langPath; ?>
<?php if (have_posts()): while (have_posts()): the_post(); ?>
		<section class="p-lowerMv">
			<div class="p-lowerMv__inner">
				<p class="p-lowerMv__heading">
					Solution <?php
								switch ($langClass) {
									case "ja":
										$postNum = get_post_number("solution");
										break;
									case "en":
										$postNum = get_post_number("solution-en");
										break;
									case "th";
										$postNum = get_post_number("solution-th");
										break;
								}
								echo str_pad($postNum, 2, 0, STR_PAD_LEFT); ?>
				</p>
				<nav class="p-lowerMv__bread">
					<ul class="p-lowerMv__bread__list">
						<li class="p-lowerMv__bread__list__item">
							<a href="<?php echo $langPath; ?>/">TOP</a>
						</li>
						<li class="p-lowerMv__bread__list__item">
							<a href="<?php $langPath; ?>/solution">Solution list</a>
						</li>
						<li class="p-lowerMv__bread__list__item">
							<span><?php the_title(); ?></span>
						</li>
					</ul>
				</nav>
			</div>
		</section>

		<section class="u-pt--40 u-pt--30--sp">
			<div class="l-wrap l-wrap--sp">
				<div class="p-postArticle">
					<article class="p-postArticle__article p-wysiwyg">
						<?php the_content(); ?>
					</article>
				</div>
			</div>
		</section>

<?php endwhile;
endif; ?>

<?php
switch ($langClass) {
	case "ja":
		$postType = "case-study";
		$category = "case-study_cat";
		break;
	case "en":
		$postType = "case-study-en";
		$category = "case-study-en_cat";
		break;
	case "th":
		$postType = "case-study-th";
		$category = "case-study-th_cat";
		break;
}
$args = array(
	'post_type' => $postType,
	'posts_per_page' => 6,
);
$query = new WP_Query($args);
if ($query->have_posts()):
?>
	<section class="u-pt--45 u-pt--30--sp">
		<div class="l-wrap l-wrap--sp">
			<div class="p-section --case">
				<div class="p-section__contents --flex u-bg--quaternary">
					<div class="p-section__heading c-heading">
						<span class="decoration">Case Study</span>
						<h2 class="main">
							<?php switch ($langClass) {
								case 'ja': ?>
									導入事例
								<?php break;
								case 'en': ?>
									Case Studies
								<?php break;
								case 'th': ?>
									กรณีศึกษา
							<?php break;
							} ?>
						</h2>
					</div>
					<div class="p-section__button">
						<a href="<?php echo $langPath; ?>/case-study" class="c-button">
							View All
						</a>
					</div>

					<div class="p-section__body">
						<div class="p-caseArchive">
							<div class="p-caseArchive__slide swiper">
								<div class="p-caseArchive__slide__wrapper swiper-wrapper">
									<?php while ($query->have_posts()): $query->the_post(); ?>
										<a href="<?php the_permalink(); ?>" class="p-caseArchive__slide__item p-caseCard u-bg--wh swiper-slide">
											<div class="p-caseCard__row">
												<div class="p-caseCard__images">
													<div class="p-caseCard__thumbnail">
														<?php if (get_the_post_thumbnail()): ?>
															<?php the_post_thumbnail('large'); ?>
														<?php else: ?>
															<img src="<?php echo get_template_directory_uri(); ?>/ogimage.png" alt="">
														<?php endif; ?>
													</div>
													<?php $cats =  get_the_terms($post->ID, $category);
													if ($cats): ?>
														<ul class="p-caseCard__category">
															<?php foreach ($cats as $cat): ?>
																<li class="p-caseCard__category__item">
																	<?php echo $cat->name; ?>
																</li>
															<?php endforeach; ?>
														</ul>
													<?php endif; ?>
												</div>
												<div class="p-caseCard__contents">
													<div class="p-caseCard__head">
														<p class="p-caseCard__client"><?php echo get_field('cf_client'); ?> <?php switch ($langClass) {
																																case 'ja': ?>
																	様
																<?php break;
																																case 'en': ?>

																<?php break;
																																case 'th': ?>

															<?php break;
																															} ?></p>
														<p class="p-caseCard__heading">
															<?php the_title(); ?>
														</p>
													</div>
													<div class="p-caseCard__text">
														<?php
														if (mb_strlen($post->post_content, 'UTF-8') > 180) {
															$content = str_replace('\n', '', mb_substr(strip_tags($post->post_content), 0, 180, 'UTF-8'));
															echo $content . '…';
														} else {
															echo str_replace('\n', '', strip_tags($post->post_content));
														}
														?>
													</div>
													<div class="p-caseCard__button">
														<span class="c-button --small --right">View More</span>
													</div>
												</div>
											</div>
											<span class="p-caseCard__count">Case <?php
																					echo str_pad($query->current_post + 1, 2, 0, STR_PAD_LEFT); ?></span>
										</a>
									<?php endwhile; ?>
								</div>
								<button type="button" class="p-caseArchive__arrow --prev"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/icon_arrow_02.svg" alt=""></button>
								<button type="button" class="p-caseArchive__arrow --next"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/icon_arrow_02.svg" alt=""></button>
							</div>
							<div class="p-caseArchive__pagination">
								<span class="p-caseArchive__pagination__count --current"></span>
								<span class="p-caseArchive__pagination__count --index"></span>
								<div class="p-caseArchive__pagination__arrow">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/icon_arrow_01_secondary.svg" alt="">
								</div>
								<div class="p-caseArchive__pagination__line">
									<div class="p-caseArchive__pagination__line__fill"></div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="p-section__illust">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/index/bg_case_01.svg" alt="">
				</div>
			</div>
		</div>
	</section>

<?php endif;
wp_reset_postdata(); ?>
<?php global $langClass;
global $langPath;
$_SESSION['col'] = 2;
?>

<section class="u-pt--45 u-pt--30--sp">
	<div class="l-wrap l-wrap--sp">
		<div class="p-tab --quaternary">
			<div class="p-tab__head">

				<div class="p-postSort">
					<?php
					switch ($langClass) {
						case "ja":
							$challenges = get_terms('solution_challenges');
							$cats = get_terms('solution_cat');
							break;
						case "en":
							$challenges = get_terms('solution-en_challenges');
							$cats = get_terms('solution-en_cat');
							break;
						case "th":
							$challenges = get_terms('solution-th_challenges');
							$cats = get_terms('solution-th_cat');
							break;
					}
					if ($challenges): ?>
						<button type="button" class="p-postSort__button">
							<span class="icon">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/case-study/icon_challenge_01.svg" alt="">
							</span>
							<span class="label">
								<?php switch ($langClass) {
									case 'ja': ?>
										課題から探す
									<?php break;
									case 'en': ?>
										Search by Challenge
									<?php break;
									case 'th': ?>
										ค้นหาจากสิ่งที่เรามุ่งเน้น
								<?php break;
								} ?>
							</span>
						</button>
					<?php endif; ?>
					<?php
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
					<?php endif; ?>

					<?php if ($challenges): ?>
						<div class="p-postSort__panel">
							<div class="p-postSort__panel__inner">
								<ul class="p-postSort__category">
									<li class="p-postSort__category__item">
										<a href="<?php echo $langPath; ?>/solution" class="p-postSort__category__link">
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
									<?php foreach ($challenges as $challenge): ?>
										<li class="p-postSort__category__item">
											<a href="<?php echo get_term_link($challenge); ?>" class="p-postSort__category__link"><?php echo $challenge->name; ?></a>
										</li>
									<?php endforeach; ?>
								</ul>
							</div>
						</div>
					<?php endif; ?>
					<?php if ($cats): ?>
						<div class="p-postSort__panel">
							<div class="p-postSort__panel__inner">
								<ul class="p-postSort__category">
									<li class="p-postSort__category__item">
										<a href="<?php echo $langPath; ?>/solution" class="p-postSort__category__link u-bg--secondary u-c--base">
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
											<a href="<?php echo get_term_link($cat); ?>" class="p-postSort__category__link u-bg--secondary u-c--base"><?php echo $cat->name; ?></a>
										</li>
									<?php endforeach; ?>
								</ul>
							</div>
						</div>
					<?php endif; ?>
				</div>

				<div class="p-postSort02">
					<?php if ($challenges): ?>
						<div class="p-postSort02__item">
							<button type="button" class="p-postSort02__button">
								<span class="icon">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/case-study/icon_challenge_01.svg" alt="">
								</span>
								<span class="label">
									<?php switch ($langClass) {
										case 'ja': ?>
											課題から探す
										<?php break;
										case 'en': ?>
											Search by Challenge
										<?php break;
										case 'th': ?>
											ค้นหาจากสิ่งที่เรามุ่งเน้น
									<?php break;
									} ?>
								</span>
							</button>
							<div class="p-postSort02__panel">
								<div class="p-postSort02__panel__inner">
									<ul class="p-postSort02__category">
										<?php foreach ($challenges as $challenge): ?>
											<li class="p-postSort02__category__item">
												<a href="<?php echo get_term_link($challenge); ?>" class="p-postSort__category__link"><?php echo $challenge->name; ?></a>
											</li>
										<?php endforeach; ?>
									</ul>
								</div>
							</div>
						</div>
					<?php endif; ?>
					<?php if ($cats): ?>
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
					<div class="p-postLayout">
						<div class="p-postLayout__head">
							<p class="p-postLayout__heading">
								<?php switch ($langClass) {
									case 'ja': ?>
										表示変更
									<?php break;
									case 'en': ?>
										Display Change
									<?php break;
									case 'th': ?>
										เปลี่ยนการแสดงผล
								<?php break;
								} ?>
							</p>
							<div class="p-postLayout__button">
								<a href="?col=4" class="p-postLayout__button__item" data-col="4" id="layoutButton4">
									<span class="icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/icon_layout_01.svg" alt=""></span>
									<span class="label">
										<?php switch ($langClass) {
											case 'ja': ?>
												4列
											<?php break;
											case 'en': ?>
												4 columns
											<?php break;
											case 'th': ?>
												4 คอลัมภ์
										<?php break;
										} ?>
									</span>
								</a>
								<a href="?col=2" class="p-postLayout__button__item --current" data-col="2" id="layoutButton2">
									<span class="icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/icon_layout_02.svg" alt=""></span>
									<span class="label">
										<?php switch ($langClass) {
											case 'ja': ?>
												2列
											<?php break;
											case 'en': ?>
												2 columns
											<?php break;
											case 'th': ?>
												2 คอลัมภ์
										<?php break;
										} ?>
									</span>
								</a>
								<a href="?col=1" class="p-postLayout__button__item" data-col="1" id="layoutButton1">
									<span class="icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/icon_layout_03.svg" alt=""></span>
									<span class="label">
										<?php switch ($langClass) {
											case 'ja': ?>
												1列
											<?php break;
											case 'en': ?>
												1 column
											<?php break;
											case 'th': ?>
												1 คอลัมภ์
										<?php break;
										} ?>
									</span>
								</a>
							</div>
						</div>
						<div class="p-postArchive03 p-postLayout__contents" data-layout="2">
							<?php while (have_posts()): the_post(); ?>
								<a href="<?php the_permalink(); ?>" class="p-postCard">
									<div class="p-postCard__thumbnail u-bg--wh">
										<?php if (get_the_post_thumbnail()): ?>
											<?php the_post_thumbnail('large'); ?>
										<?php else: ?>
											<img src="<?php echo get_template_directory_uri(); ?>/ogimage.png" alt="">
										<?php endif; ?>
									</div>
									<div class="p-postCard__body">
										<h3 class="p-postCard__heading">
											<?php the_title(); ?>
										</h3>
										<?php
										switch ($langClass) {
											case "ja":
												$cats = get_the_terms($post->ID, 'solution_cat');
												$challenges = get_the_terms($post->ID, 'solution_challenges');
												break;
											case "en":
												$cats = get_the_terms($post->ID, 'solution-en_cat');
												$challenges = get_the_terms($post->ID, 'solution-en_challenges');
												break;
											case "th":
												$cats = get_the_terms($post->ID, 'solution-th_cat');
												$challenges = get_the_terms($post->ID, 'solution-th_challenges');
												break;
										}
										if ($cats || $challenges):
										?>
											<ul class="p-postCard__category">
												<?php if ($cats): foreach ($cats as $cat): ?>
														<li class="p-postCard__category__item">
															<?php echo $cat->name; ?>
														</li>
												<?php endforeach;
												endif; ?>
												<?php if ($challenges): foreach ($challenges as $challenge): ?>
														<li class="p-postCard__category__item u-bg--secondary u-c--base">
															<?php echo $challenge->name; ?>
														</li>
												<?php endforeach;
												endif; ?>
											</ul>
										<?php endif; ?>
										<p class="p-postCard__text">
											<?php
											if (mb_strlen($post->post_content, 'UTF-8') > 240) {
												$content = str_replace('\n', '', mb_substr(strip_tags($post->post_content), 0, 240, 'UTF-8'));
												echo $content . '…';
											} else {
												echo str_replace('\n', '', strip_tags($post->post_content));
											}
											?>
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
	</div>
</section>
<?php global $langClass; ?>

<?php if (get_query_var('paged') === 0): ?>
	<section class="u-pt--45 u-pt--30--sp">
		<div class="p-client">
			<div class="l-wrap l-wrap--sp">
				<div class="p-client__contents">
					<div class="p-client__row">
						<div class="p-client__row__head">
							<div class="c-heading">
								<?php switch ($langClass) {
									case 'ja': ?>
										<span class="decoration" aria-hidden="true">Clients</span>
									<?php break;
									case 'en': ?>

									<?php break;
									case 'th': ?>
										<span class="decoration" aria-hidden="true">Clients</span>
								<?php break;
								} ?>
								<h2 class="main">
									<?php switch ($langClass) {
										case 'ja': ?>
											導入企業
										<?php break;
										case 'en': ?>
											Implemented Company
										<?php break;
										case 'th': ?>
											ลูกค้าของเรา
									<?php break;
									} ?>
								</h2>
							</div>
						</div>
						<div class="p-client__row__body">
							<div class="p-client__list">
								<div class="p-client__list__item">
									Asian Stanley. International Limited.<br>
									ATA Casting Technology Co., Ltd.<br>
									CHI CHANG Computer(Thailand) Co.,Ltd.<br>
									DAIFUKU(THAILAND) LTD.<br>
									EKK Eagle(Thailand) Co.,Ltd.<br>
									EXEDY(THAILAND) Co.,Ltd.<br>
									Hanwa Steel Service(Thailand) Co.,LTD.<br>
									HCAMB(CAMBODIA) CO., LTD.<br>
									Hitachi Astemo Chonburi Manufacturing Ltd.<br>
									ICEngineering Corporation Co., Ltd.
								</div>
								<div class="p-client__list__item">
									Isuzu Engine Manufacturing Co.,(Thailand) Ltd.<br>
									Isuzu Logistics(Thailand) Co.,Ltd.<br>
									JTEKT MACHINE SYSTEMS (THAILAND) CO.,LTD.<br>
									Kaneka (Thailand) Co., Ltd.<br>
									KIMBALL ELECTRONICS(THAILAND) LTD.<br>
									KTX PRECISION (THAILAND) CO., LTD.<br>
									LF Logistics (Thailand) Limited.<br>
									LG ELECTRONICS(THAILAND) CO.,LTD.<br>
									LUMEN (THAILAND) COMPANY LIMITED.<br>
									MAX(THAILAND) CO.,LTD.
								</div>
							</div>
							<div class="p-client__button">
								<a href="<?php echo $langPath; ?>/clients" class="c-button">View More</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php endif; ?>

<section class="u-pt--30 u-pt--20--sp">
	<div class="l-wrap l-wrap--sp">
		<div class="p-tab">
			<div class="p-tab__head">
				<div class="p-postSort">
					<?php
					switch ($langClass) {
						case "ja":
							$challenges = get_terms('case-study_challenges');
							$cats = get_terms('case-study_cat');
							break;
						case "en":
							$challenges = get_terms('case-study-en_challenges');
							$cats = get_terms('case-study-en_cat');
							break;
						case "th":
							$challenges = get_terms('case-study-th_challenges');
							$cats = get_terms('case-study-th_cat');
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
										<a href="<?php echo $langPath; ?>/case-study" class="p-postSort__category__link u-bg--secondary u-c--base">
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
											<a href="<?php echo get_term_link($challenge); ?>" class="p-postSort__category__link u-bg--secondary u-c--base"><?php echo $challenge->name; ?></a>
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
										<a href="<?php echo $langPath; ?>/case-study" class="p-postSort__category__link">
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
										<li class="p-postSort02__category__item">
											<a href="<?php echo $langPath; ?>/case-study" class="p-postSort__category__link">
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
										<li class="p-postSort02__category__item">
											<a href="<?php echo $langPath; ?>/case-study" class="p-postSort__category__link">
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
				<?php
				switch ($langClass) {
					case "ja":
						$category = "case-study_cat";
						break;
					case "en":
						$category = "case-study-en_cat";
						break;
					case "th":
						$category = "case-study-th_cat";
						break;
				}
				?>
				<?php if (have_posts()): ?>
					<div class="p-caseArchive02">
						<?php while (have_posts()): the_post(); ?>
							<a href="<?php the_permalink(); ?>" class="p-caseArchive02__item p-caseCard swiper-slide">
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
											<?php if (get_field('cf_client')): ?>
												<p class="p-caseCard__client"><?php echo get_field('cf_client'); ?> <?php switch ($langClass) {
																														case 'ja': ?>
															様
														<?php break;
																														case 'en': ?>

														<?php break;
																														case 'th': ?>

													<?php break;
																													} ?></p>
											<?php endif; ?>
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
								<span class="p-caseCard__count">Case <?php $postNumber = (max(1, $paged) - 1) * $wp_query->query_vars['posts_per_page'] + $wp_query->current_post + 1;
																		echo str_pad($postNumber, 2, 0, STR_PAD_LEFT);  ?></span>
							</a>
						<?php endwhile; ?>
					</div>
				<?php endif; ?>
				<div class="p-pagination u-mt--25">
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
			</div>
		</div>

	</div>
</section>
<?php global $langClass;
global $langPath; ?>
<?php if (have_posts()): while (have_posts()): the_post(); ?>
		<section class="u-pt--40 u-pt--30--sp">
			<div class="l-wrap l-wrap--sp">
				<div class="p-casePost">
					<div class="p-casePost__head">
						<div class="p-casePost__head__images">
							<div class="p-casePost__thumbnail">
								<?php if (get_the_post_thumbnail()): ?>
									<?php the_post_thumbnail('large'); ?>
								<?php else: ?>
									<img src="<?php echo get_template_directory_uri(); ?>/ogimage.png" alt="">
								<?php endif; ?>
							</div>
							<?php $cats =  get_the_terms($post->ID, 'case-study_cat');
							if ($cats): ?>
								<ul class="p-casePost__category">
									<?php foreach ($cats as $cat): ?>
										<li class="p-casePost__category__item">
											<?php echo $cat->name; ?>
										</li>
									<?php endforeach; ?>
								</ul>
							<?php endif; ?>
						</div>
						<div class="p-casePost__head__contents">
							<?php if (get_field('cf_client')): ?>
								<p class="p-casePost__client">
									<?php switch ($langClass) {
										case 'ja': ?>
											<?php echo get_field('cf_client'); ?> 様
										<?php break;
										case 'en': ?>
											<?php echo get_field('cf_client'); ?>
										<?php break;
										case 'th': ?>
											<?php echo get_field('cf_client'); ?>
									<?php break;
									} ?>
								</p>
							<?php endif; ?>
							<h1 class="p-casePost__heading">
								<?php the_title(); ?>
							</h1>
							<div class="p-casePost__text">
								<?php the_content(); ?>
							</div>
						</div>
					</div>

					<div class="p-casePost__body">
						<div class="p-casePost__contents">
							<?php if (have_rows('cf_detail')): while (have_rows('cf_detail')): the_row(); ?>
									<div class="p-casePost__contents__item">
										<h3 class="p-casePost__contents__heading">
											<?php the_sub_field('cf_detail_heading'); ?>
										</h3>
										<div class="p-casePost__contents__article">
											<?php the_sub_field('cf_detail_contents'); ?>
										</div>
									</div>
							<?php endwhile;
							endif; ?>
						</div>

						<div class="p-casePost__foot">
							<div class="p-casePost__clientInformation">
								<?php if (have_rows('cf_clientInfo')): while (have_rows('cf_clientInfo')): the_row(); ?>
										<dl>
											<dt><?php the_sub_field('cf_clientInfo_heading'); ?></dt>
											<dd><?php the_sub_field('cf_clientInfo_contents'); ?></dd>
										</dl>
								<?php endwhile;
								endif; ?>
							</div>
						</div>

						<div class="p-casePost__button">
							<a href="<?php echo $langPath; ?>/case-study" class="c-backButton">
								<?php switch ($langClass) {
									case 'ja': ?>
										導入事例一覧に戻る
									<?php break;
									case 'en': ?>
										Return to Case Study List
									<?php break;
									case 'th': ?>
										กลับสู่กรณีศึกษาทั้งหมด
								<?php break;
								} ?>
							</a>
							<?php switch ($langClass) {
								case 'ja': ?>
									<a href="/document/contact_pegasus_casestudy/" class="c-button02">
										導入事例集ダウンロード
									</a>
								<?php break;
								case 'en': ?>
									<a href="/en/document/curated-case-study-collection/" class="c-button02">
										Download Case Study Collection
									</a>
								<?php break;
								case 'th': ?>
									<a href="/th/curated-case-study-collection/" class="c-button02">
										ดาวน์โหลดเอกสารกรณีศึกษาทั้งหมด
									</a>
							<?php break;
							} ?>
							</a>
						</div>
					</div>

				</div>
			</div>
		</section>
<?php endwhile;
endif; ?>
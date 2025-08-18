<?php /*
Template Name: トップページ
*/ ?>
<?php
global $langClass;
global $langPath;
if (is_page('en')) {
	$langClass = "en";
	$langPath = home_url() . "/en";
} else if (is_page('th')) {
	$langClass = 'th';
	$langPath = home_url() . "/th";
} else {
	$langClass = "ja";
	$langPath = home_url();
}
?>
<?php get_header(); ?>

<section class="p-mv">
	<div class="p-mv__image">
		<div class="p-mv__image__bg">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/index/bg_mv_01.svg" alt="">
		</div>
		<picture class="p-mv__image__illust">
			<source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/index/illust_mv_01_sp.webp 1x, <?php echo get_template_directory_uri(); ?>/assets/images/index/illust_mv_01_sp@2x.webp 2x" media="(max-width: 768px)">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/index/illust_mv_01.webp" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/index/illust_mv_01.webp 1x, <?php echo get_template_directory_uri(); ?>/assets/images/index/illust_mv_01@2x.webp 2x" alt="">
		</picture>
		<!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/index/img_mv_01.webp" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/index/img_mv_01.webp 1x, <?php echo get_template_directory_uri(); ?>/assets/images/index/img_mv_01@2x.webp 2x" alt=""> -->
	</div>
	<div class="l-wrap p-mv__inner">
		<div class="p-mv__body">
			<h1 class="p-mv__heading">
				<?php switch ($langClass) {
					case "ja":
				?>
						<span class="label">IoT・DXで</span>
						<span class="label">製造業・物流業の</span>
						<span class="label">デジタル化を支援</span>
					<?php break;
					case "en": ?>
						<span class="label">Supporting </span>
						<span class="label">Digital Transformation</span>
						<span class="label">in Manufacturing </span>
						<span class="label">and Logistics</span>
						<span class="label">through IoT and DX</span>
					<?php break;
					case "th": ?>
						<span class="label">สนับสนุนการใช้เทคโนโลยี IoT・DX</span>
						<span class="label">ในอุตสาหกรรมการผลิต</span>
						<span class="label">และโลจิสติกส์</span>
				<?php break;
				} ?>
			</h1>
			<p class="p-mv__text">
				<?php switch ($langClass) {
					case 'ja': ?>
						TOMAS TECHは、東南アジアで<br class="u-display--sp">システム導入による、<br>
						「コスト削減」「業務効率化」を<br class="u-display--sp">提案する会社です。
					<?php break;
					case 'en': ?>
						TOMAS TECH is a company <br>that offers solutions <br>for "cost reduction" and<br>"business efficiency improvement" <br>through system implementation <br>in Southeast Asia.
					<?php break;
					case 'th': ?>
						TOMAS TECH เราคือผู้ให้บริการการติดตั้งระบบครบรูปแบบ<br>
						ในภูมิภาคเอเชียตะวันออกเฉียงใต้<br>
						โดยคำนึงถึง “การลดต้นทุน“<br>
						และ “การเพิ่มประสิทธิภาพการทำงาน” <br>
						เป็นจุดหมายสำคัญ
				<?php break;
				} ?>
			</p>
		</div>
	</div>
</section>

<section class="u-pt--18 u-pt--14--sp">
	<div class="l-wrap--1100 l-wrap--sp">
		<div class="c-heading">
			<?php switch ($langClass) {
				case 'ja': ?>
					<span class="decoration u-c--wh" aria-hidden="true">Company Introduction Video</span>
				<?php break;
				case 'en': ?>

				<?php break;
				case 'th': ?>
					<span class="decoration u-c--wh" aria-hidden="true">Company Introduction Video</span>
			<?php break;
			} ?>
			<h2 class="main u-c--lightGray">
				<?php switch ($langClass) {
					case 'ja': ?>
						TOMAS TECHの紹介動画
					<?php break;
					case 'en': ?>
						TOMASTECH Introduction Video
					<?php break;
					case 'th': ?>
						วิดีโอแนะนำบริษัท TOMASTECH
				<?php break;
				} ?>
			</h2>
		</div>
		<div class="p-movie u-mt--20 u-mt--16--sp">
			<button type="button" class="p-movie__thumbnail">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/index/img_movie_01.webp" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/index/img_movie_01.webp 1x,  <?php echo get_template_directory_uri(); ?>/assets/images/index/img_movie_01@2x.webp 2x" alt="">
			</button>
			<div class="p-movie__popup">
				<div class="p-movie__popup__overlay p-movie__popup__closeTrigger"></div>
				<div class="p-movie__popup__contents">
					<div class="p-movie__popup__movie">
						<video src="<?php echo get_template_directory_uri(); ?>/assets/images/index/video_introduction_01.mp4" controls="" preload="metadata" controlslist="nodownload">
						</video>
					</div>
					<button type="button" class="p-movie__popup__close p-movie__popup__closeTrigger"><span class="line"></span><span class="line"></span></button>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="u-pt--45 u-pt--30--sp">
	<div class="l-wrap l-wrap--sp">
		<div class="p-solution">
			<div class="p-solution__row">
				<div class="p-solution__row__head">
					<div class="c-heading">
						<?php switch ($langClass) {
							case 'ja': ?>
								<span class="decoration" aria-hidden="true">Solution</span>
							<?php break;
							case 'en': ?>

							<?php break;
							case 'th': ?>
								<span class="decoration" aria-hidden="true">Solution</span>
						<?php break;
						} ?>
						<h2 class="main">
							<?php switch ($langClass) {
								case 'ja': ?>
									伴走する<br>
									未来へ
								<?php break;
								case 'en': ?>
									Solutions
								<?php break;
								case 'th': ?>
									โซลูชั่น
							<?php break;
							} ?>
						</h2>
					</div>
				</div>
				<div class="p-solution__row__body">
					<div class="p-solution__text">
						<?php switch ($langClass) {
							case 'ja': ?>
								<p>
									TOMAS TECHは製造業、物流業のお客様にシステムを提供する、システムインテグレーターです。<Br>
									コンサルティング提案からシステム導入、アフターサポートまで一気通貫でお客様を支援することで、「コスト削減」 「業務効率化」を実現します。<Br>
									当社は、多岐にわたるトータルソリューションの提供を強みとしています。制御機器の開発から、デバイスアプリケーション、オンプレミスやクラウドサーバーを活用したサーバーアプリケーションの開発まで、幅広い領域でお客様のニーズに応えるサービスを展開しています。変化の激しいビジネス環境において、迅速かつ柔軟に対応できる体制を整え、ソフトウェア、ハードウェア、インフラストラクチャの3つの分野を総合的に組み合わせた最適なソリューションを提供しています。お客様の成長と競争力を支えるため、当社は常に最新技術と柔軟な対応力で、課題解決に貢献するパートナーとして共に歩んでいきます。
								</p>
							<?php break;
							case 'en': ?>
								<p>
									TOMAS TECH is a systems integrator provider that provides solutions for customers in the manufacturing and logistics industries. By supporting clients through the entire process—from consulting proposals to system implementation and after-sales support—we achieve "cost reduction" and "operational efficiency".<br>
									Our strength lies in offering a wide range of total solutions. We provide services that cater to diverse customer needs, from the development of control devices to device applications and the creation of server applications utilizing on-premise and cloud servers. In a rapidly changing business environment, we have established a structure that allows us to respond quickly and flexibly, delivering optimal solutions that comprehensively combine software, hardware, and infrastructure.<br>
									To support our customers' growth and competitiveness, we continuously strive to be a partner in solving challenges, leveraging the latest technologies and our flexible responsiveness.
								</p>
							<?php break;
							case 'th': ?>
								<p>
									TOMAS TECH เราคือผู้ให้บริการติดตั้งระบบ เพื่อควบรวมระบบการทำงาน(Integrater) ในอุตสาหกรรมการผลิต และโลจิสติกส์<br>
									โดยให้บริการตั้งแต่การให้คำปรึกษา การติดตั้งระบบ รวมไปถึงการให้บริการหลังการขาย โดยทั้งหมดนี้จะคำนึงถึง "การลดต้นทุน" และ "การเพิ่มประสิทธิภาพการทำงาน" ของลูกค้าเป็นสิ่งสำคัญ<br>
									บริษัทของเรามีจุดแข็งในการนำเสนอโซลูชั่นที่หลากหลาย โดยครอบคลุมตั้งแต่การออกแบบระบบควบคุมอุปกรณ์ ไปจนถึงแอปพลิเคชันสำหรับอุปกรณ์ และการพัฒนาแอปพลิเคชันเซิร์ฟเวอร์ที่ใช้ทั้งในระบบภายใน(On-Premise)และบนคลาวด์ ที่จะครอบคลุมความต้องการของลูกค้าในหลากหลายรูปแบบ<br>
									และด้วยสภาวะที่มีการเปลี่ยนแปลงอย่างรวดเร็วในภาคธุรกิจ เรามีระบบที่สามารถตอบสนองได้อย่างรวดเร็วและยืดหยุ่น โดยนำเสนอโซลูชันที่ดีที่สุดผ่านการรวมกันของซอฟต์แวร์ ฮาร์ดแวร์ และโครงสร้างพื้นฐาน เพื่อสนับสนุนการเติบโต และความสามารถในการแข่งขันของลูกค้า<br>
									ด้วยเทคโนโลยีล่าสุด และความสามารถในการปรับตัวของเรา TOMAS TECH มุ่งมั่นที่จะเป็นคู่ค้าที่ยืนหยัดเคียงข้างลูกค้าในการแก้ไขปัญหา และก้าวหน้าไปพร้อม ๆ กัน
								</p>
						<?php break;
						} ?>
					</div>
					<div class="p-solution__button">
						<a href="<?php echo $langPath; ?>/solution" class="c-button">View More</a>
					</div>
				</div>
			</div>
		</div>
		<div class="p-solutionList u-mt--20 u-mt--16--sp">
			<?php switch ($langClass) {
				case "ja":
					$solutionPath01 = "/solution_territory/iot-and-traceability";
					$solutionPath02 = "/solution_territory/production-management-system";
					$solutionPath03 = "/solution_territory/logistics-improvement-solutions";
					break;
				case "en":
					$solutionPath01 = "/solution-en_territory/iot-and-traceability";
					$solutionPath02 = "/solution-en_territory/production-management-system";
					$solutionPath03 = "/solution-en_territory/logistics-improvement-solutions";
					break;
				case "th":
					$solutionPath01 = "/solution-th_territory/iot-and-traceability";
					$solutionPath02 = "/solution-th_territory/production-management-system";
					$solutionPath03 = "/solution-th_territory/logistics-improvement-solutions";
					break;
			} ?>
			<a href="<?php echo $solutionPath01; ?>" class="p-solutionList__item">
				<h3 class="p-solutionList__heading">
					<?php switch ($langClass) {
						case 'ja': ?>
							IoT・トレサビリティ領域
						<?php break;
						case 'en': ?>
							IoT and Traceability Domain
						<?php break;
						case 'th': ?>
							ด้าน IoT และการตรวจสอบย้อนกลับ (Traceability)
					<?php break;
					} ?>
				</h3>
				<div class="p-solutionList__image">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/index/img_solution_01.webp" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/index/img_solution_01.webp 1x, <?php echo get_template_directory_uri(); ?>/assets/images/index/img_solution_01@2x.webp 2x" alt="">
				</div>
				<div class="p-solutionList__button">
					<span class="c-button --small">View More</span>
				</div>
				<span class="p-solutionList__decoration" aria-hidden="true">IOT・Traceability domain</span>
			</a>
			<a href="<?php echo $solutionPath02; ?>" class="p-solutionList__item">
				<h3 class="p-solutionList__heading">
					<?php switch ($langClass) {
						case 'ja': ?>
							生産管理システム領域
						<?php break;
						case 'en': ?>
							Production Management System Domain
						<?php break;
						case 'th': ?>
							ด้านระบบการจัดการการผลิต
					<?php break;
					} ?>
				</h3>
				<div class="p-solutionList__image">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/index/img_solution_02.webp" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/index/img_solution_02.webp 1x, <?php echo get_template_directory_uri(); ?>/assets/images/index/img_solution_02@2x.webp 2x" alt="">
				</div>
				<div class="p-solutionList__button">
					<span href="" class="c-button --small">View More</span>
				</div>
				<span class="p-solutionList__decoration" aria-hidden="true">Production System</span>
			</a>
			<a href="<?php echo $solutionPath03; ?>" class="p-solutionList__item">
				<h3 class="p-solutionList__heading">
					<?php switch ($langClass) {
						case 'ja': ?>
							物流改善ソリューション領域
						<?php break;
						case 'en': ?>
							Logistics Improvement Solutions Domain
						<?php break;
						case 'th': ?>
							ด้านโซลูชันการปรับปรุงระบบโลจิสติกส์
					<?php break;
					} ?>
				</h3>
				<div class="p-solutionList__image">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/index/img_solution_03.webp" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/index/img_solution_03.webp 1x, <?php echo get_template_directory_uri(); ?>/assets/images/index/img_solution_03@2x.webp 2x" alt="">
				</div>
				<div class="p-solutionList__button">
					<span class="c-button --small">View More</span>
				</div>
				<span class="p-solutionList__decoration" aria-hidden="true">Logistics Solution</span>
			</a>
		</div>
	</div>
</section>

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
	<section class="u-pt--40 u-mt--30--sp">
		<div class="l-wrap l-wrap--sp">
			<div class="p-section --case">
				<div class="p-section__contents --flex">
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
										<a href="<?php the_permalink(); ?>" class="p-caseArchive__slide__item p-caseCard swiper-slide">
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
														<p class="p-caseCard__client">
															<?php echo get_field('cf_client'); ?>
															<?php switch ($langClass) {
																case 'ja': ?>
																	様
																<?php break;
																case 'en': ?>

																<?php break;
																case 'th': ?>

															<?php break;
															} ?>
														</p>
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
											<span class="p-caseCard__count">Case <?php echo str_pad($query->current_post + 1, 2, 0, STR_PAD_LEFT);  ?></span>
										</a>
									<?php endwhile; ?>
								</div>
								<button type="button" class="p-caseArchive__arrow --prev"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/icon_arrow_02.svg" alt=""></button>
								<button type="button" class="p-caseArchive__arrow --next"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/icon_arrow_02.svg" alt=""></button>
							</div>
							<div class="p-caseArchive__pagination">
								<span class="p-caseArchive__pagination__count --current">01</span>
								<span class="p-caseArchive__pagination__count --index">06</span>
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

<section class="u-pt--40 u-pt--30--sp">
	<!-- <div class="l-wrap--1040 l-wrap--sp"> -->
	<div class="p-dx">
		<div class="p-dx__wrapper">
			<div class="p-dx__illust">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/index/illust_dx_01.svg" alt="">
			</div>
			<div class="p-dx__inner">
				<div class="p-dx__contents">
					<div class="p-dx__heading c-heading">
						<?php switch ($langClass) {
							case 'ja': ?>
								<span class="decoration u-c--wh" aria-hidden="true">Blog</span>
							<?php break;
							case 'en': ?>

							<?php break;
							case 'th': ?>
								<span class="decoration u-c--wh" aria-hidden="true">Blog</span>
						<?php break;
						} ?>
						<h2 class="main u-c--wh">
							<?php switch ($langClass) {
								case 'ja': ?>
									失敗しないDX
								<?php break;
								case 'en': ?>
									Successful DX
								<?php break;
								case 'th': ?>
									DX ในอุตสาหกรรม
							<?php break;
							} ?>
						</h2>
					</div>
					<p class="p-dx__text">
						<?php switch ($langClass) {
							case 'ja': ?>
								製造業において、どのように取り組めばいいのか？取り組んだはいいが、効果が出ない。また失敗を恐れてDX化できない。などタイ工場においてはも様々なお悩みを持たれているのではないのでしょうか？本記事では、タイの製造業において、失敗しないためのDXと題して、状況、課題、対策をわかりやすく解説を致します。
							<?php break;
							case 'en': ?>
								In the manufacturing industry, how should we approach the digital transformation (DX)? Many may have started their efforts but are not seeing effective results, or they may hesitate to embrace DX due to the fear of failure. Such concerns are common among factories in Thailand. This article aims to clearly explain the situation, challenges, and countermeasures related to successful DX in Thailand's manufacturing sector.
							<?php break;
							case 'th': ?>
								คุณอาจมีคำถามว่า ในอุตสาหกรรมการผลิต เราควรเริ่มต้นนำ DX ไปประยุกต์ใช้อย่างไร? และถึงแม้ว่าจะนำไปใช้แล้ว จะได้ผลดีไหม หรือกลัวความผิดพลาดจนไม่กล้าเริ่มทำ DX ซึ่งคำถาม และความกลัวต่าง ๆ เหล่านี้เป็นเรื่องที่หลายโรงงานในประเทศไทยอาจจะกำลังเผชิญอยู่ โดยในบทความนี้ เราจะพูดถึง DX ในอุตสาหกรรมการผลิตในไทย โดยอธิบายสถานการณ์ ปัญหา และแนวทางแก้ไขอย่างชัดเจน เพื่อช่วยให้ไม่พลาดในการทำเริ่มต้นทำ DX
						<?php break;
						} ?>
					</p>
					<div class="p-dx__button">
						<?php switch ($langClass) {
							case 'ja': ?>
								<a href="/blog/blog_01/" class="c-button --right --secondary">View More</a>
							<?php break;
							case 'en': ?>
								<a href="/en/blog/what-is-the-dx-initiative-that-does-not-fail-in-the-manufacturing-industry-and-thailand-explaining-issues-and-solutions-together/" class="c-button --right --secondary">View More</a>
							<?php break;
							case 'th': ?>
								<a href="/th/blog/blog_033/" class="c-button --right --secondary">View More</a>
						<?php break;
						} ?>

					</div>
				</div>
			</div>
			<span class="p-dx__decoration" aria-hidden="true">Current status of DX implementation.</span>
		</div>
	</div>
	<!-- </div> -->
</section>

<?php
switch ($langClass) {
	case "ja":
		$postType = "blog";
		$category = "blog_cat";
		break;
	case "en":
		$postType = "blog-en";
		$category = "blog-en_cat";
		break;
	case "th":
		$postType = "blog-th";
		$category = "blog-th_cat";
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
			<div class="p-section">
				<div class="p-section__contents --flex">
					<div class="p-section__heading c-heading">
						<?php switch ($langClass) {
							case 'ja': ?>
								<span class="decoration" aria-hidden="true">Blog Articles</span>
							<?php break;
							case 'en': ?>

							<?php break;
							case 'th': ?>
								<span class="decoration" aria-hidden="true">Blog Articles</span>
						<?php break;
						} ?>
						<h2 class="main">
							<?php switch ($langClass) {
								case 'ja': ?>
									ブログ記事
								<?php break;
								case 'en': ?>
									Blog Articles
								<?php break;
								case 'th': ?>
									บทความ
							<?php break;
							} ?>
						</h2>
					</div>
					<div class="p-section__button">
						<a href="<?php echo $langPath; ?>/blog" class="c-button">
							View More
						</a>
					</div>
					<div class="p-section__body">
						<div class="p-postArchive">
							<div class="p-postArchive__slide swiper">
								<div class="p-postArchive__slide__wrapper swiper-wrapper">
									<?php while ($query->have_posts()): $query->the_post(); ?>
										<a href="<?php the_permalink(); ?>" class="p-postArchive__slide__item swiper-slide">
											<div class="p-postArchive__slide__thumbnail">
												<?php if (get_the_post_thumbnail()): ?>
													<?php the_post_thumbnail('large'); ?>
												<?php else: ?>
													<img src="<?php echo get_template_directory_uri(); ?>/ogimage.png" alt="">
												<?php endif; ?>
											</div>
											<div class="p-postArchive__slide__contents">
												<div class="p-postArchive__slide__date"><?php echo the_time('Y.m.d'); ?></div>
												<p class="p-postArchive__slide__heading">
													<?php the_title(); ?>
												</p>
												<div class="p-postArchive__slide__button">
													<span class="c-button --small">View More</span>
												</div>
											</div>
										</a>
									<?php endwhile; ?>
								</div>
								<button type="button" class="p-postArchive__slide__arrow --prev"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/icon_arrow_02.svg" alt=""></button>
								<button type="button" class="p-postArchive__slide__arrow --next"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/icon_arrow_02.svg" alt=""></button>
							</div>
							<div class="p-postArchive__pagination">
								<span class="p-postArchive__pagination__count --current">01</span>
								<span class="p-postArchive__pagination__count --index">06</span>
								<div class="p-postArchive__pagination__arrow">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/icon_arrow_01_secondary.svg" alt="">
								</div>
								<div class="p-postArchive__pagination__line">
									<div class="p-postArchive__pagination__line__fill"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php endif;
wp_reset_postdata(); ?>
	
<?php
switch ($langClass) {
	case "ja":
		$postType = "seminar";
		$category = "seminar_cat";
		break;
	case "en":
		$postType = "seminar-en";
		$category = "seminar-en_cat";
		break;
	case "th":
		$postType = "seminar-th";
		$category = "seminar-th_cat";
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
		<div class="p-section02">
			<div class="l-wrap">
				<div class="p-section02__contents">
					<div class="p-section02__heading c-heading">
						<?php switch ($langClass) {
							case 'ja': ?>
								<span class="decoration" aria-hidden="true">Seminar Information</span>
							<?php break;
							case 'en': ?>

							<?php break;
							case 'th': ?>
								<span class="decoration" aria-hidden="true">Seminar Information</span>
						<?php break;
						} ?>
						<h2 class="main">
							<?php switch ($langClass) {
								case 'ja': ?>
									セミナー情報
								<?php break;
								case 'en': ?>
									Seminar Information
								<?php break;
								case 'th': ?>
									กิจกรรม และการสัมมนา
							<?php break;
							} ?>
						</h2>
					</div>
					<div class="p-section02__button">
						<a href="<?php echo $langPath; ?>/seminar" class="c-button">
							View More
						</a>
					</div>
					<div class="p-section02__body">
						<div class="p-postArchive02">
							<div class="p-postArchive02__slide swiper">
								<div class="p-postArchive02__slide__wrapper swiper-wrapper">
									<?php while ($query->have_posts()): $query->the_post(); ?>
										<a href="<?php the_permalink(); ?>" class="p-postArchive02__slide__item swiper-slide">
											<div class="p-postArchive02__slide__thumbnail">
												<?php if (get_the_post_thumbnail()): ?>
													<?php the_post_thumbnail('large'); ?>
												<?php else: ?>
													<img src="<?php echo get_template_directory_uri(); ?>/ogimage.png" alt="">
												<?php endif; ?>
											</div>
											<div class="p-postArchive02__slide__contents">
												<?php $cats = get_the_terms($post->ID, $category);
												if ($cats): ?>
													<ul class="p-postCard__category">
														<?php foreach ($cats as $cat): ?>
															<li class="p-postCard__category__item">
																<?php echo $cat->name; ?>
															</li>
														<?php endforeach; ?>
													</ul>
												<?php endif; ?>
												<p class="p-postArchive02__slide__heading">
													<?php the_title(); ?>
												</p>
											</div>
										</a>
									<?php endwhile; ?>
								</div>
							</div>
							<button type="button" class="p-postArchive02__slide__arrow --prev"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/icon_arrow_02.svg" alt=""></button>
							<button type="button" class="p-postArchive02__slide__arrow --next"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/icon_arrow_02.svg" alt=""></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php endif;
wp_reset_postdata(); ?>


<section class="u-pt--45 u-pt--30--sp">
	<div class="l-wrap l-wrap--sp">
		<div class="p-section --company">
			<div class="p-section__contents --flex">
				<div class="p-section__heading c-heading">
					<?php switch ($langClass) {
						case 'ja': ?>
							<span class="decoration" aria-hidden="true">Company Information</span>
						<?php break;
						case 'en': ?>

						<?php break;
						case 'th': ?>
							<span class="decoration" aria-hidden="true">Company Information</span>
					<?php break;
					} ?>
					<h2 class="main">
						<?php switch ($langClass) {
							case 'ja': ?>
								会社情報
							<?php break;
							case 'en': ?>
								Company Information
							<?php break;
							case 'th': ?>
								ข้อมูลบริษัท
						<?php break;
						} ?>
					</h2>
				</div>
				<div class="p-section__button">
					<a href="<?php echo $langPath; ?>/company" class="c-button">View More</a>
				</div>
				<div class="p-section__body">
					<div class="p-company">
						<div class="p-company__row">
							<div class="p-company__contents">
								<p class="p-company__heading">TOMAS TECH CO.,LTD.</p>
								<div class="p-company__information">
									<dl>
										<dt>
											<?php switch ($langClass) {
												case 'ja': ?>
													所在地
												<?php break;
												case 'en': ?>
													Location:
												<?php break;
												case 'th': ?>
													ที่อยู่
											<?php break;
											} ?>
										</dt>
										<dd>
											<?php switch ($langClass) {
												case 'ja': ?>
													No.1 MD Tower 16Fl, Unit C1, Soi Bangna-Trad 25, Debaratna Rd., Khwaeng Bang Na Nuea, Khet Bang Na, Bangkok 10260 Thailand.
												<?php break;
												case 'en': ?>
													No.1 MD Tower 16Fl, Unit C1, Soi Bangna-Trad 25, Debaratna Rd., Khwaeng Bang Na Nuea, Khet Bang Na, Bangkok 10260 Thailand.
												<?php break;
												case 'th': ?>
													No.1 MD Tower 16Fl, Unit C1, Soi Bangna-Trad 25, Debaratna Rd., Khwaeng Bang Na Nuea, Khet Bang Na, Bangkok 10260 Thailand.
											<?php break;
											} ?>
										</dd>
									</dl>
									<dl>
										<dt>
											<?php switch ($langClass) {
												case 'ja': ?>
													事業内容
												<?php break;
												case 'en': ?>
													Business Activities:
												<?php break;
												case 'th': ?>
													ประเภทกิจการ
											<?php break;
											} ?>
										</dt>
										<dd>
											<?php switch ($langClass) {
												case 'ja': ?>
													システムコンサルティング業務<br>
													システム設計・開発業務<br>
													システム運用・サポート業務
												<?php break;
												case 'en': ?>
													System consulting services<br>
													System design and development<br>
													System operation and support services
												<?php break;
												case 'th': ?>
													บริการที่ปรึกษาระบบ<br>
													ออกแบบ และพัฒนาระบบ<br>
													การนำระบบไปใช้ และการบริการหลังการขาย
											<?php break;
											} ?>
										</dd>
									</dl>
								</div>
							</div>
							<div class="p-company__map">
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3876.676305581122!2d100.6324988!3d13.677436300000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x311d5f438ff5c987%3A0xbc2312d0ec7c2b71!2sTOMAS%20TECH%20CO.%2C%20LTD.!5e0!3m2!1sen!2sjp!4v1731429752162!5m2!1sen!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="p-section__illust">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/index/illust_company_01.svg" alt="">
			</div>
		</div>
	</div>
</section>


<?php get_footer(); ?>
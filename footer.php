<?php global $langClass;
global $langPath; ?>

<section class="u-pt--45 u-pt--40--sp">
	<div class="l-wrap l-wrap--sp">
		<a href="<?php echo $langPath; ?>/recruit" class="p-recruitBanner">
			<div class="p-recruitBanner__inner">
				<div class="p-recruitBanner__contents">
					<div class="p-recruitBanner__heading c-heading">
						<?php switch ($langClass) {
							case 'ja': ?>
								<span class="decoration u-c--wh" aria-hidden="true">Recruitment</span>
							<?php break;
							case 'en': ?>

							<?php break;
							case 'th': ?>
								<span class="decoration u-c--wh" aria-hidden="true">Recruitment</span>
						<?php break;
						} ?>
						<h2 class="main u-c--wh">
							<?php switch ($langClass) {
								case 'ja': ?>
									採用情報
								<?php break;
								case 'en': ?>
									Recruitment Information
								<?php break;
								case 'th': ?>
									ข้อมูลการรับสมัครงาน
							<?php break;
							} ?>
						</h2>
					</div>
					<p class="p-recruitBanner__text">
						<?php switch ($langClass) {
							case 'ja': ?>
								「IoT×DX」で、製造業の未来を<br>一緒に変革していく仲間を募集しています。
							<?php break;
							case 'en': ?>
								We are looking for team members to transform the future of manufacturing together through "IoT x DX."
							<?php break;
							case 'th': ?>
								เรากำลังมองหาผู้ร่วมทีมที่ต้องการเปลี่ยนแปลงอนาคตของอุตสาหกรรมการผลิตไปพร้อมกับเราในยุค "IoT × DX"
						<?php break;
						} ?>
					</p>
				</div>
				<div class="p-recruitBanner__button">
					<span class="c-button --secondary">View More</span>
				</div>
			</div>
		</a>
	</div>
</section>

<div class="u-pt--45 u-pb--80 u-pt--30--sp u-pb--40--sp">
	<div class="l-wrap l-wrap--sp">
		<div class="p-linkCard">
			<a href="<?php echo $langPath; ?>/case-study" class="p-linkCard__item">
				<p class="p-linkCard__heading">
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
				</p>
				<div class="p-linkCard__image">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/icon_case_01.svg" alt="">
				</div>
				<div class="p-linkCard__button">
					<span class="c-button --small">View More</span>
				</div>
				<span class="p-linkCard__decoration" aria-hidden="true">Case Study</span>
			</a>
			<a href="<?php echo $langPath; ?>/document" class="p-linkCard__item">
				<p class="p-linkCard__heading">
					<?php switch ($langClass) {
						case 'ja': ?>
							資料請求
						<?php break;
						case 'en': ?>
							Request for Materials
						<?php break;
						case 'th': ?>
							ติดต่อขอเอกสารเพิ่มเติม
					<?php break;
					} ?>
				</p>
				<div class="p-linkCard__image">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/icon_documents_01.svg" alt="">
				</div>
				<div class="p-linkCard__button">
					<span class="c-button --small">View More</span>
				</div>
				<span class="p-linkCard__decoration" aria-hidden="true">Request for information</span>
			</a>
			<a href="<?php echo $langPath; ?>/contact" class="p-linkCard__item">
				<p class="p-linkCard__heading">
					<?php switch ($langClass) {
						case 'ja': ?>
							お問い合わせ
						<?php break;
						case 'en': ?>
							Contact Us
						<?php break;
						case 'th': ?>
							ติดต่อเรา
					<?php break;
					} ?>
				</p>
				<div class="p-linkCard__image">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/icon_contact_01.svg" alt="">
				</div>
				<div class="p-linkCard__button">
					<span class="c-button --small">View More</span>
				</div>
				<span class="p-linkCard__decoration" aria-hidden="true">Contact TOMAS TECH</span>
			</a>
		</div>
	</div>
</div>

<footer class="l-footer">
	<div class="l-footer__inner">
		<nav class="l-footer__nav">
			<ul class="l-footer__nav__list">
				<li class="l-footer__nav__list__item">
					<a href="<?php echo $langPath; ?>/solution" class="l-footer__nav__list__link">
						<?php switch ($langClass) {
							case 'ja': ?>
								ソリューション
							<?php break;
							case 'en': ?>
								Solutions
							<?php break;
							case 'th': ?>
								โซลูชั่น
						<?php break;
						} ?>
					</a>
					<ul class="l-footer__nav__subList">
						<?php
						switch ($langClass) {
							case "ja":
								$challenges = get_terms('solution_challenges');
								$cats = get_terms('solution_cat');
								$domains = get_terms('solution_territory');
								break;
							case "en":
								$challenges = get_terms('solution-en_challenges');
								$cats = get_terms('solution-en_cat');
								$domains = get_terms('solution-en_territory');
								break;
							case "th":
								$challenges = get_terms('solution-th_challenges');
								$cats = get_terms('solution-th_cat');
								$domains = get_terms('solution-th_territory');
								break;
						}
						?>
						<?php if ($domains): ?>
							<li class="l-footer__nav__subList__item">
								<p class="l-footer__nav__subList__heading">
									<?php switch ($langClass) {
										case 'ja': ?>
											領域から探す
										<?php break;
										case 'en': ?>
											Search by Domain
										<?php break;
										case 'th': ?>
											ด้าน
									<?php break;
									} ?>
								</p>
								<ul class="l-footer__nav__subList__linkList">
									<?php foreach ($domains as $domain): ?>
										<li class="l-footer__nav__subList__linkList__item">
											<a href="<?php echo get_term_link($domain); ?>">
												<?php echo $domain->name; ?>
											</a>
										</li>
									<?php endforeach; ?>
								</ul>
							</li>
						<?php endif; ?>
						<?php if ($challenges): ?>
							<li class="l-footer__nav__subList__item">
								<p class="l-footer__nav__subList__heading">
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
								</p>
								<ul class="l-footer__nav__subList__linkList">
									<?php foreach ($challenges as $challenge): ?>
										<li class="l-footer__nav__subList__linkList__item">
											<a href="<?php echo get_term_link($challenge); ?>">
												<?php echo $challenge->name; ?>
											</a>
										</li>
									<?php endforeach; ?>
								</ul>
							</li>
						<?php endif; ?>
						<?php if ($cats): ?>
							<li class="l-footer__nav__subList__item">
								<p class="l-footer__nav__subList__heading">
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
								</p>
								<ul class="l-footer__nav__subList__linkList">
									<?php foreach ($cats as $cat): ?>
										<li class="l-footer__nav__subList__linkList__item">
											<a href="<?php echo get_term_link($cat); ?>">
												<?php echo $cat->name; ?>
											</a>
										</li>
									<?php endforeach; ?>
								</ul>
							</li>
						<?php endif; ?>
					</ul>
				</li>
				<li class="l-footer__nav__list__item">
					<a href="<?php echo $langPath; ?>/client" class="l-footer__nav__list__link">
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
					</a>
				</li>
				<li class="l-footer__nav__list__item">
					<a href="<?php echo $langPath; ?>/case-study" class="l-footer__nav__list__link">
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
					</a>
				</li>
				<li class="l-footer__nav__list__item">
					<a href="<?php echo $langPath; ?>/case-study" class="l-footer__nav__list__link">
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
					</a>
				</li>
				<li class="l-footer__nav__list__item">
					<a href="<?php echo $langPath; ?>/blog" class="l-footer__nav__list__link">
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
					</a>
				</li>
				<li class="l-footer__nav__list__item">
					<a href="<?php echo $langPath; ?>/pr" class="l-footer__nav__list__link">
						<?php switch ($langClass) {
							case 'ja': ?>
								PR記事
							<?php break;
							case 'en': ?>
								PR Articles
							<?php break;
							case 'th': ?>
								ประชาสัมพันธ์
						<?php break;
						} ?>
					</a>
				</li>
				<li class="l-footer__nav__list__item">
					<a href="<?php echo $langPath; ?>/seminar" class="l-footer__nav__list__link">
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
					</a>
				</li>
				<li class="l-footer__nav__list__item">
					<a href="<?php echo $langPath; ?>/company" class="l-footer__nav__list__link">
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
					</a>
				</li>
				<li class="l-footer__nav__list__item">
					<a href="<?php echo $langPath; ?>/recruit" class="l-footer__nav__list__link">
						<?php switch ($langClass) {
							case 'ja': ?>
								採用情報
							<?php break;
							case 'en': ?>
								Recruitment Information
							<?php break;
							case 'th': ?>
								ข้อมูลการรับสมัครงาน
						<?php break;
						} ?>
					</a>
				</li>
				<li class="l-footer__nav__list__item">
					<a href="<?php echo $langPath; ?>/contact" class="l-footer__nav__list__link">
						<?php switch ($langClass) {
							case 'ja': ?>
								お問い合わせ
							<?php break;
							case 'en': ?>
								Contact Us
							<?php break;
							case 'th': ?>
								ติดต่อเรา
						<?php break;
						} ?>
					</a>
				</li>
			</ul>
		</nav>

		<div class="l-footer__foot">
			<div class="l-footer__logo">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/logo_tomastech_01.webp" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/common/logo_tomastech_01.webp 1x, <?php echo get_template_directory_uri(); ?>/assets/images/common/logo_tomastech_01@2x.webp 2x" alt="TOMAS TECH">
			</div>
			<div class="l-footer__foot__contents">
				<a href="#wrapper" class="l-footer__pagetop">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/icon_pagetop_01.svg" alt="PAGE TOP">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/icon_pagetop_02.svg" alt="">
				</a>
				<a href="<?php echo $langPath; ?>/privacy" class="l-footer__privacy">
					<?php switch ($langClass) {
						case 'ja': ?>
							プライバシーポリシー
						<?php break;
						case 'en': ?>
							Privacy Policy
						<?php break;
						case 'th': ?>
							นโยบายความเป็นส่วนตัว
					<?php break;
					} ?>
				</a>
				<p class="l-footer__copyright">©TOMAS TECH CO.,LTD. All Rights Reserved.</p>
			</div>
		</div>

	</div>
</footer>

</div>



<?php wp_footer(); ?>
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/script.js?v=<?php echo time(); ?>"></script>
</body>

</html>
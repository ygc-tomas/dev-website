<?php global $langClass;
global $langPath; ?>
<!DOCTYPE html>
<html lang="<?php echo $langClass; ?>">

<head>
<!-- ▼ 画面下中央の追従バナー（リンク付き＋×ボタン） -->
<div id="sticky-banner" style="
  position: fixed;
  bottom: 20px;
  left: 50%;
  transform: translateX(-50%);
  width: 825px;
  max-width: 95%;
  height: auto;
  z-index: 9999;
">
  <div style="position: relative; width: 100%;">
    
    <!-- バナー画像＋リンク(言語ごとに切り替え) -->
	<?php switch ($langClass) {
		case 'ja': ?>
		<a href="https://tomastc.com/contact/" target="_blank" rel="noopener" style="display: block;">
			<img src="https://tomastc.com/wp-content/uploads/2025/04/TOMAS-TECH追従バナー.png"
			alt="製造DXバナー"
			style="width: 100%; height: auto; object-fit: cover; border-radius: 6px;">
		</a>
		<?php break;
		case 'en': ?>
		<a href="https://tomastc.com/en/contact/" target="_blank" rel="noopener" style="display: block;">
			<img src="https://tomastc.com/wp-content/uploads/2025/06/EN_TOMASTECH追従バナー.png"
			alt="製造DXバナー"
			style="width: 100%; height: auto; object-fit: cover; border-radius: 6px;">
		</a>
		<?php break;
			case 'th': ?>
			<a href="https://tomastc.com/th/contact/" target="_blank" rel="noopener" style="display: block;">
			<img src="https://tomastc.com/wp-content/uploads/2025/06/TH_TOMASTECH追従バナー.png"
			alt="製造DXバナー"
			style="width: 100%; height: auto; object-fit: cover; border-radius: 6px;">
		</a>
		<?php break;
	} ?>

    <!-- ×ボタン -->
    <button id="close-banner" style="
      position: absolute;
      top: 8px;
      right: 8px;
      background: rgba(255,255,255,0.9);
      border: 1px solid #ccc;
      font-size: 16px;
      width: 28px;
      height: 28px;
      padding: 0;
      border-radius: 50%;
      cursor: pointer;
      box-shadow: 0 2px 5px rgba(0,0,0,0.2);
    ">×</button>
  </div>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const banner = document.getElementById('sticky-banner');
    const closeBtn = document.getElementById('close-banner');

    closeBtn.addEventListener('click', function () {
      banner.style.display = 'none';
    });
  });
</script>

	<script type="text/javascript" charset="utf-8" src="https://kenga.tech/pop-ups-zultrlscwjqqpqex.js"></script>
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://web.archive.org/web/20240304051543/https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-T7937K2');</script>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta rel="canonical" href="<?php echo home_url(); ?>">

	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" sizes="32x32" type="image/vnd.microsoft.icon">
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon.png">
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/android-chrome-256x256.png" sizes="256x256">

	<link
		rel="stylesheet"
		href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css?v=<?php echo time(); ?>">
<?php
if (is_front_page()) {
  echo '<title>TOMAS TECH CO.,LTD.｜タイの製造業・物流業のDX化を支援</title>';
  echo '<meta name="description" content="TOMAS TECHは、タイの製造業・物流業において、IoTやDXを活用した業務改善・コスト削減を支援する企業です。" />';
} else {
  echo '<title>' . wp_get_document_title() . '</title>';
}
?>

	<?php wp_head(); ?>
</head>


<body class="--<?php echo $langClass; ?> <?php if (is_front_page() || is_page('en') || is_page('th')) {
												echo "--home";
											} ?>">
	<div id="wrapper">


		<header class="l-header">
			<div class="l-header__inner">
				<a href="<?php echo $langPath; ?>/" class="l-header__logo">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/logo_tomastech_01.webp" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/common/logo_tomastech_01.webp 1x, <?php echo get_template_directory_uri(); ?>/assets/images/common/logo_tomastech_01@2x.webp 2x" alt="TOMAS TECH">
				</a>
				<div class="l-header__contents">
					<nav class="l-header__nav">
						<ul class="l-header__nav__list">
							<li class="l-header__nav__list__item">
								<a href="<?php echo $langPath; ?>/solution" class="l-header__nav__list__link">
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
								<div class="l-header__nav__meganav">
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
									<div class="l-header__nav__meganav__contents">
										<ul class="l-header__nav__meganav__list">
											<?php if ($domains): ?>
												<li class="l-header__nav__meganav__list__item">
													<div class="l-header__nav__meganav__list__heading">
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
													</div>
													<ul class="l-header__nav__meganav__linkList">
														<?php foreach ($domains as $domain): ?>
															<li class="l-header__nav__meganav__linkList__item">
																<a href="<?php echo get_term_link($domain); ?>">
																	<?php echo $domain->name; ?>
																</a>
															</li>
														<?php endforeach; ?>
													</ul>
												</li>
											<?php endif; ?>
											<?php if ($challenges): ?>
												<li class="l-header__nav__meganav__list__item">
													<div class="l-header__nav__meganav__list__heading">
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
													</div>
													<ul class="l-header__nav__meganav__linkList">
														<?php foreach ($challenges as $challenge): ?>
															<li class="l-header__nav__meganav__linkList__item">
																<a href="<?php echo get_term_link($challenge); ?>">
																	<?php echo $challenge->name; ?>
																</a>
															</li>
														<?php endforeach; ?>
													</ul>
												</li>
											<?php endif; ?>
											<?php if ($cats): ?>
												<li class="l-header__nav__meganav__list__item">
													<div class="l-header__nav__meganav__list__heading">
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
													</div>
													<ul class="l-header__nav__meganav__linkList">
														<?php foreach ($cats as $cat): ?>
															<li class="l-header__nav__meganav__linkList__item">
																<a href="<?php echo get_term_link($cat); ?>">
																	<?php echo $cat->name; ?>
																</a>
															</li>
														<?php endforeach; ?>
													</ul>
												</li>
											<?php endif; ?>
										</ul>
									</div>
								</div>
							</li>
							<li class="l-header__nav__list__item">
								<a href="<?php echo $langPath; ?>/case-study" class="l-header__nav__list__link">
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
							<li class="l-header__nav__list__item">
								<?php switch ($langClass) {
									case 'ja': ?>
										<a href="/blog/blog_01/" class="l-header__nav__list__link">
											失敗しないDX
										</a>
									<?php break;
									case 'en': ?>
										<a href="/en/blog/what-is-the-dx-initiative-that-does-not-fail-in-the-manufacturing-industry-and-thailand-explaining-issues-and-solutions-together/" class="l-header__nav__list__link">
											Successful DX
										</a>
									<?php break;
									case 'th': ?>
										<a href="/th/blog/blog_033/" class="l-header__nav__list__link">
											DX ในอุตสาหกรรม
										</a>
								<?php break;
								} ?>
							</li>
							<li class="l-header__nav__list__item">
								<a href="<?php echo $langPath; ?>/blog" class="l-header__nav__list__link">
									<?php switch ($langClass) {
										case 'ja': ?>
											ブログ
										<?php break;
										case 'en': ?>
											Blog
										<?php break;
										case 'th': ?>
											บทความ
									<?php break;
									} ?>
								</a>
							</li>
							<li class="l-header__nav__list__item">
								<a href="<?php echo $langPath; ?>/pr" class="l-header__nav__list__link">
									<?php switch ($langClass) {
										case 'ja': ?>
											PR
										<?php break;
										case 'en': ?>
											PR
										<?php break;
										case 'th': ?>
											ประชาสัมพันธ์
									<?php break;
									} ?>
								</a>
							</li>
							<li class="l-header__nav__list__item">
								<a href="<?php echo $langPath; ?>/seminar" class="l-header__nav__list__link">
									<?php switch ($langClass) {
										case 'ja': ?>
											セミナー
										<?php break;
										case 'en': ?>
											Seminars
										<?php break;
										case 'th': ?>
											กิจกรรมและการสัมมนา
									<?php break;
									} ?>
								</a>
							</li>
							<li class="l-header__nav__list__item">
								<a href="<?php echo $langPath; ?>/company" class="l-header__nav__list__link">
									<?php switch ($langClass) {
										case 'ja': ?>
											会社情報
										<?php break;
										case 'en': ?>
											Compay Information
										<?php break;
										case 'th': ?>
											เกี่ยวกับเรา
									<?php break;
									} ?>
								</a>
							</li>
							</li>
							<li class="l-header__nav__list__item">
								<a href="<?php echo $langPath; ?>/recruit" class="l-header__nav__list__link">
									<?php switch ($langClass) {
										case 'ja': ?>
											採用情報
										<?php break;
										case 'en': ?>
											Recruitment
										<?php break;
										case 'th': ?>
											ข้อมูลการรับสมัครงาน
									<?php break;
									} ?>
								</a>
							</li>
						</ul>
					</nav>

					<div class="l-header__btnLink">
						<a href="<?php echo $langPath; ?>/document" class="l-header__btnLink__item --document">
							<span class="icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/icon_documents_02.svg" alt=""></span>
							<span class="label">
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
							</span>
						</a>
						<a href="<?php echo $langPath; ?>/contact" class="l-header__btnLink__item --contact">
							<span class="icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/icon_contact_02.svg" alt=""></span>
							<span class="label">
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
							</span>
						</a>
					</div>
				</div>


				<div class="l-header__lang">
					<button type="button" class="l-header__lang__heading">Language</button>
					<ul class="l-header__lang__list">
						<li class="l-header__lang__list__item">
							<a href="/" class="l-header__lang__list__link <?php if ($langClass === 'ja') {
																				echo "--current";
																			} ?>">Japanese</a>
						</li>
						<li class="l-header__lang__list__item">
							<a href="/en" class="l-header__lang__list__link <?php if ($langClass === 'en') {
																				echo "--current";
																			} ?>">English</a>
						</li>
						<li class="l-header__lang__list__item">
							<a href="/th" class="l-header__lang__list__link <?php if ($langClass === 'th') {
																				echo "--current";
																			} ?>">Thai</a>
						</li>
					</ul>
				</div>

				<button type="button" class="l-header__humberger">
					<span class="line"></span><span class="line"></span><span class="line"></span>
				</button>
			</div>
		</header>
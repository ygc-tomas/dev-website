<?php /*
Template Name: お問い合わせ
*/ ?>
<?php
global $langClass;
global $langPath;
if (is_ancestor('en')) {
	$langClass = "en";
	$langPath = home_url() . "/en";
} else if (is_ancestor('th')) {
	$langClass = 'th';
	$langPath = home_url() . "/th";
} else {
	$langClass = "ja";
	$langPath = home_url();
}
?>
<?php get_header(); ?>

<section class="p-lowerMv">
	<div class="p-lowerMv__inner">
		<h1 class="p-lowerMv__heading">
			Contact
		</h1>
		<nav class="p-lowerMv__bread">
			<ul class="p-lowerMv__bread__list">
				<li class="p-lowerMv__bread__list__item">
					<a href="<?php echo $langPath; ?>/">TOP</a>
				</li>
				<li class="p-lowerMv__bread__list__item">
					<span>Contact</span>
				</li>
			</ul>
		</nav>
	</div>
</section>

<section class="u-pt--45 u-pt--30--sp">
	<div class="l-wrap--1100 l-wrap--sp">
		<div class="p-section --small">
			<div class="p-section__contents">
				<div class="c-sentence">
					<?php switch ($langClass) {
						case 'ja': ?>
							<p>
								IoT・DXに関するお悩みやご相談をご希望の方は、下記のフォームよりご連絡ください。<br>
								内容を確認させていただき担当者よりご連絡させていただきます。*は必須項目です。
							</p>
						<?php break;
						case 'en': ?>

						<?php break;
						case 'th': ?>

					<?php break;
					} ?>
				</div>

				<div class="p-form u-mt--27 u-mt--18--sp">
					<?php if (have_posts()) {
						while (have_posts()) {
							the_post();
							the_content();
						}
					}
					?>
				</div>

				<script>
					/*
					 ** フォーム送信後サンクスページへリダイレクト
					 */
					document.addEventListener('wpcf7mailsent', function(event) {
						location = '<?php echo $langPath; ?>/contact/completed';
					}, false);

					document.addEventListener('wpcf7invalid', function(event) {
						setTimeout(() => {
							const errEl = document.querySelector('.wpcf7-not-valid');
							const rect = errEl.getBoundingClientRect().top;
							const offset = window.scrollY;
							const gap = 70;
							const target = rect + offset - gap;
							window.scrollTo({
								top: target,
								behavior: "smooth"
							})
						}, 500);
					})
				</script>

			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
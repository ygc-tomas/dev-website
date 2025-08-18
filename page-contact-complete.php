<?php /*
Template Name: お問い合わせ完了
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
			Contact Completed
		</h1>
		<nav class="p-lowerMv__bread">
			<ul class="p-lowerMv__bread__list">
				<li class="p-lowerMv__bread__list__item">
					<a href="<?php echo $langPath; ?>/">TOP</a>
				</li>
				<li class="p-lowerMv__bread__list__item">
					<a href="<?php echo $langPath; ?>/contact">Contact</a>
				</li>
				<li class="p-lowerMv__bread__list__item">
					<span>Contact Completed</span>
				</li>
			</ul>
		</nav>
	</div>
</section>

<section class="u-pt--45 u-pt--30--sp">
	<div class="l-wrap--1100 l-wrap--sp">
		<div class="p-section --small">
			<div class="p-section__contents">

				<div class="c-heading">
					<h2 class="main">
						<?php switch ($langClass) {
							case 'ja': ?>
								お問い合わせ完了
							<?php break;
							case 'en': ?>
								Inquiry Completed
							<?php break;
							case 'th': ?>
								การติดต่อ เรียบร้อยแล้วค่ะ
						<?php break;
						} ?>
					</h2>
				</div>
				<div class="c-sentence u-mt--16 u-mt--12--sp">
					<?php switch ($langClass) {
						case 'ja': ?>
							<p>
								お問合せを承りました。この度はTOMAS TEC CO.,LTD.にお問い合わせをいただきましてありがとうございます。内容を確認の上、担当者よりご連絡させていただきます。
							</p>
						<?php break;
						case 'en': ?>
							Your inquiry has been received. Thank you for your inquiry to TOMAS TEC CO. A representative will contact you upon confirmation of the content of your inquiry.
						<?php break;
						case 'th': ?>
							บริษัทได้รับข้อมูลการติดต่อแล้ว ขอบคุณสำหรับการติดต่อหา TOMAS TEC CO.,LTD. หลังจากตรวจเช็คข้อมูลแล้ว เจ้าหน้าที่จะทำการติดต่อท่านกลับไปค่ะ
					<?php break;
					} ?>
				</div>

				<div class="u-mt--36 u-mt--20--sp">
					<a href="<?php echo $langPath; ?>/" class="c-backButton">
						<?php switch ($langClass) {
							case 'ja': ?>
								TOPに戻る
							<?php break;
							case 'en': ?>
								Back to TOP
							<?php break;
							case 'th': ?>
								กลับหน้า TOP
						<?php break;
						} ?>
					</a>
				</div>

			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
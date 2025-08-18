<?php /*
Template Name: エントリー完了
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
			Entry Completed
		</h1>
		<nav class="p-lowerMv__bread">
			<ul class="p-lowerMv__bread__list">
				<li class="p-lowerMv__bread__list__item">
					<a href="<?php echo $langPath; ?>/">TOP</a>
				</li>
				<li class="p-lowerMv__bread__list__item">
					<a href="<?php echo $langPath; ?>/recruit">Contact</a>
				</li>
				<li class="p-lowerMv__bread__list__item">
					<a href="<?php echo $langPath; ?>/recruit/entry-form">Entry Form</a>
				</li>
				<li class="p-lowerMv__bread__list__item">
					<span>Entry Completed</span>
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
								エントリー完了
							<?php break;
							case 'en': ?>
								Entry Complete
							<?php break;
							case 'th': ?>
								ส่งเนื้อหาการสมัครงานของท่านสำเร็จเรียบร้อยแล้ว
						<?php break;
						} ?>
					</h2>
				</div>
				<div class="c-sentence u-mt--16 u-mt--12--sp">
					<?php switch ($langClass) {
						case 'ja': ?>
							<p>
								エントリーを承りました、この度はTOMAS TEC CO.,LTD.にエントリーをいただきましてありがとうございます。<br>
								内容を確認の上、担当者よりご連絡させていただきます。
							</p>
						<?php break;
						case 'en': ?>
							<p>
								Thank you for submitting your entry to TOMAS TECH CO., LTD. We appreciate your interest. Our team will review your submission and contact you shortly.
							</p>
						<?php break;
						case 'th': ?>
							<p>
								TOMAS TECH CO.,LTD ขอขอบพระคุณสำหรับการสมัครงานของท่านมา ณ ที่นี้<br>
								เมื่อผู้เกี่ยวข้องทำการตรวจสอบเรียบร้อยแล้ว ทางเราจะติดต่อท่านกลับไปอีกครั้ง
							</p>
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
								กลับสู่หน้าหลัก
						<?php break;
						} ?>
					</a>
				</div>

			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
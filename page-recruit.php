<?php /*
Template Name: 採用
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
			Recruit
		</h1>
		<nav class="p-lowerMv__bread">
			<ul class="p-lowerMv__bread__list">
				<li class="p-lowerMv__bread__list__item">
					<a href="<?php echo $langPath; ?>/">TOP</a>
				</li>
				<li class="p-lowerMv__bread__list__item">
					<span>Recruit</span>
				</li>
			</ul>
		</nav>
	</div>
</section>

<section class="u-pt--45 u-mt--30--sp">
	<div class="l-wrap l-wrap--sp">
		<div class="p-section">
			<div class="p-section__contents p-recruit">
				<div class="c-image">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/img_recruit_01.webp" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/img_recruit_01.webp 1x, <?php echo get_template_directory_uri(); ?>/assets/images/recruit/img_recruit_01@2x.webp 2x" alt="">
				</div>
				<div class="c-heading u-mt--28 u-mt--15--sp">
					<h2 class="main">
						<?php switch ($langClass) {
							case 'ja': ?>
								デジタルで世の中を変えよう。
							<?php break;
							case 'en': ?>

							<?php break;
							case 'th': ?>

						<?php break;
						} ?>
					</h2>
				</div>
				<div class="p-list u-mt--46 u-mt--20--sp">
					<h3 class="p-list__heading">
						<?php switch ($langClass) {
							case 'ja': ?>
								募集要項
							<?php break;
							case 'en': ?>
								Job Openings
							<?php break;
							case 'th': ?>
								รายละเอียดการรับสมัครงาน
						<?php break;
						} ?>
					</h3>
					<div class="p-list__list">
						<dl>
							<dt>
								<?php switch ($langClass) {
									case 'ja': ?>
										募集職種
									<?php break;
									case 'en': ?>
										Positions Available
									<?php break;
									case 'th': ?>
										ตำแหน่งที่เปิดรับ
								<?php break;
								} ?>
							</dt>
							<dd>
								<?php switch ($langClass) {
									case 'ja': ?>
										・ソフトウエアエンジニア (Java developer)<br>
										・ソフトウエアエンジニア (.Net developer)<br>
										・ソフトウエアエンジニア (PHP developer)<br>
										・IoTエンジニア (PLC developer)<br>
										・システムエンジニア<br>
										・セールスエンジニア<br>
										・アドミニストレーター
									<?php break;
									case 'en': ?>
										・Software Engineer (Java Developer)<br>
										・Software Engineer (.Net Developer)<br>
										・Software Engineer (PHP Developer)<br>
										・IoT Engineer (PLC Developer)<br>
										・System Engineer<br>
										・Sales Engineer<br>
										・Administrator
									<?php break;
									case 'th': ?>
										・Software Engineer (Java Developer)<br>
										・Software Engineer (.Net Developer)<br>
										・Software Engineer (PHP Developer)<br>
										・IoT Engineer (PLC Developer)<br>
										・System Engineer<br>
										・Sales Engineer<br>
										・Administrator
								<?php break;
								} ?>
							</dd>
						</dl>
						<dl>
							<dt>
								<?php switch ($langClass) {
									case 'ja': ?>
										募集区分
									<?php break;
									case 'en': ?>
										Employment Type
									<?php break;
									case 'th': ?>
										ประเภทการจ้างงาน
								<?php break;
								} ?>
							</dt>
							<dd>
								<?php switch ($langClass) {
									case 'ja': ?>
										正社員・契約社員・フリーランス・学生インターン
									<?php break;
									case 'en': ?>
										Full-Time, Contract, Freelance, Student Internship
									<?php break;
									case 'th': ?>
										พนักงานประจำ, พนักงานสัญญาจ้าง, ฟรีแลนซ์, นักศึกษาเข้าฝึกงาน
								<?php break;
								} ?>
							</dd>
						</dl>

						<dl>
							<dt>
								<?php switch ($langClass) {
									case 'ja': ?>
										勤務地
									<?php break;
									case 'en': ?>
										Location
									<?php break;
									case 'th': ?>
										สถานที่ทำงาน
								<?php break;
								} ?>
							</dt>
							<dd>
								<?php switch ($langClass) {
									case 'ja': ?>
										バンコク　BTSウドムスック駅
									<?php break;
									case 'en': ?>
										Bangkok, BTS Udomsuk Station
									<?php break;
									case 'th': ?>
										กรุงเทพฯ รถไฟฟ้า BTS สถานีอุดมสุข
								<?php break;
								} ?>
							</dd>
						</dl>
						<dl>
							<dt>
								<?php switch ($langClass) {
									case 'ja': ?>
										給与
									<?php break;
									case 'en': ?>
										Salary
									<?php break;
									case 'th': ?>
										เงินเดือน
								<?php break;
								} ?>
							</dt>
							<dd>
								<?php switch ($langClass) {
									case 'ja': ?>
										・ソフトウエアエンジニア (Java developer)　25,000-70,000 Baht<br>
										・ソフトウエアエンジニア (.Net developer)　25,000-70,000 Baht<br>
										・ソフトウエアエンジニア (PHP developer)　25,000-70,000 Baht<br>
										・IoTエンジニア (PLC developer)　25,000-70,000 Baht<br>
										・システムエンジニア　25,000-100,000 Baht<br>
										・アドミニストレーター　20,000-40,000 Baht
									<?php break;
									case 'en': ?>
										・Software Engineer (Java Developer): 25,000-70,000 Baht<br>
										・Software Engineer (.Net Developer): 25,000-70,000 Baht<br>
										・Software Engineer (PHP Developer): 25,000-70,000 Baht<br>
										・IoT Engineer (PLC Developer): 25,000-70,000 Baht<br>
										・System Engineer: 25,000-100,000 Baht<br>
										・Administrator: 20,000-40,000 Baht
									<?php break;
									case 'th': ?>
										・Software Engineer (Java Developer) 25,000-70,000 บาท<br>
										・Software Engineer (.Net Developer) 25,000-70,000 บาท<br>
										・Software Engineer (PHP Developer) 25,000-70,000 บาท<br>
										・IoT Engineer (PLC Developer) 25,000-70,000 บาท<br>
										・System Engineer 25,000-100,000 บาท<br>
										・Administrator 20,000-40,000 บาท
								<?php break;
								} ?>
							</dd>
						</dl>
						<dl>
							<dt>
								<?php switch ($langClass) {
									case 'ja': ?>
										諸手当
									<?php break;
									case 'en': ?>
										Additional Allowances
									<?php break;
									case 'th': ?>
										สวัสดิการ
								<?php break;
								} ?>
							</dt>
							<dd>
								<?php switch ($langClass) {
									case 'ja': ?>
										割増手当（時間外勤務手当、深夜勤務手当、休日勤務手当） 通勤手当 携帯電話手当 住宅手当 制服支給 賞与
									<?php break;
									case 'en': ?>
										Overtime, Night Shift, and Holiday Pay<br>
										Commuting Allowance<br>
										Mobile Phone Allowance<br>
										Housing Allowance<br>
										Uniform Provision<br>
										Annual Bonus
									<?php break;
									case 'th': ?>
										โบนัส (ค่าล่วงเวลา, ค่ากะกลางคืน, ค่าทำงานวันหยุด)<br>
										ค่าเดินทาง<br>
										ค่าโทรศัพท์มือถือ<br>
										ค่าเช่าบ้าน<br>
										ชุดยูนิฟอร์ม<br>
										โบนัส
								<?php break;
								} ?>
							</dd>
						</dl>
						<dl>
							<dt>
								<?php switch ($langClass) {
									case 'ja': ?>
										勤務形態
									<?php break;
									case 'en': ?>
										Working Style
									<?php break;
									case 'th': ?>
										รูปแบบการทำงาน
								<?php break;
								} ?>
							</dt>
							<dd>
								<?php switch ($langClass) {
									case 'ja': ?>
										オフィス勤務、在宅勤務
									<?php break;
									case 'en': ?>
										Office-based and Remote Work Options
									<?php break;
									case 'th': ?>
										Office หรือ Work from home
								<?php break;
								} ?>
							</dd>
						</dl>
						<dl>
							<dt>
								<?php switch ($langClass) {
									case 'ja': ?>
										賞与
									<?php break;
									case 'en': ?>
										Bonus
									<?php break;
									case 'th': ?>
										โบนัส
								<?php break;
								} ?>
							</dt>
							<dd>
								<?php switch ($langClass) {
									case 'ja': ?>
										年1回
									<?php break;
									case 'en': ?>
										Once Annually
									<?php break;
									case 'th': ?>
										ปีละ 1 ครั้ง
								<?php break;
								} ?>
							</dd>
						</dl>
						<dl>
							<dt>
								<?php switch ($langClass) {
									case 'ja': ?>
										昇給
									<?php break;
									case 'en': ?>
										Salary Review
									<?php break;
									case 'th': ?>
										การขึ้นเงินเดือน
								<?php break;
								} ?>
							</dt>
							<dd>
								<?php switch ($langClass) {
									case 'ja': ?>
										会社および個人の業績に応じて昇給
									<?php break;
									case 'en': ?>
										Based on company and individual performance
									<?php break;
									case 'th': ?>
										ขึ้นอยู่กับผลประกอบการของบริษัทและบุคคล
								<?php break;
								} ?>
							</dd>
						</dl>
						<dl>
							<dt>
								<?php switch ($langClass) {
									case 'ja': ?>
										保険
									<?php break;
									case 'en': ?>
										Insurance
									<?php break;
									case 'th': ?>
										ประกัน
								<?php break;
								} ?>
							</dt>
							<dd>
								<?php switch ($langClass) {
									case 'ja': ?>
										社会保険<br>労災保険
									<?php break;
									case 'en': ?>
										Social Insurance, Workers' Compensation Insurance
									<?php break;
									case 'th': ?>
										ประกันสังคม<br>
										ประกันอุบัติเหตุในที่ทำงาน
								<?php break;
								} ?>
							</dd>
						</dl>
					</div>
				</div>
				<div class="u-mt--36 u-mt--18--sp">
					<a href="<?php echo $langPath; ?>/recruit/entry-form" class="c-button02 --center">
						<?php switch ($langClass) {
							case 'ja': ?>
								エントリーフォームへ
							<?php break;
							case 'en': ?>
								Entry Form
							<?php break;
							case 'th': ?>
								แบบฟอร์มสมัครงาน
						<?php break;
						} ?>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
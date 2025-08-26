<?php /*
Template Name: 会社情報
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
			Company
		</h1>
		<nav class="p-lowerMv__bread">
			<ul class="p-lowerMv__bread__list">
				<li class="p-lowerMv__bread__list__item">
					<a href="<?php echo $langPath; ?>/">TOP</a>
				</li>
				<li class="p-lowerMv__bread__list__item">
					<span>Company</span>
				</li>
			</ul>
		</nav>
	</div>
</section>

<section class="u-pt--45 u-pt--30--sp">
	<div class="l-wrap l-wrap--sp">
		<div class="p-section">
			<div class="p-section__contents p-company">
				<div class="c-image">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/company/img_company_01.webp" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/company/img_company_01.webp 1x, <?php echo get_template_directory_uri(); ?>/assets/images/company/img_company_01@2x.webp 2x" alt="">
				</div>
				<div class="p-list u-mt--46 u-mt--24--sp">
					<div class="p-list__list">
						<dl>
							<dt>
								<?php switch ($langClass) {
									case 'ja': ?>
										会社名
									<?php break;
									case 'en': ?>
										Company Name
									<?php break;
									case 'th': ?>
										บริษัท
								<?php break;
								} ?>
							</dt>
							<dd>
								TOMAS TECH CO.,LTD.
							</dd>
						</dl>
						<dl>
							<dt>
								<?php switch ($langClass) {
									case 'ja': ?>
										所在地
									<?php break;
									case 'en': ?>
										Location
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
										Business Activities
									<?php break;
									case 'th': ?>
										กิจกรรมของบริษัท
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
										System Consulting<br>
										System Design and Developmen<br>
										System Operation and Support
									<?php break;
									case 'th': ?>
										ให้คำปรึกษาเกี่ยวกับการออกแบบระบบงาน<br>
										ออกแบบและพัฒนาระบบ<br>
										บริการดูแลและสนับสนุนระบบหลังการขาย
								<?php break;
								} ?>
							</dd>
						</dl>
						<dl>
							<dt>
								<?php switch ($langClass) {
									case 'ja': ?>
										ミッション
									<?php break;
									case 'en': ?>
										Mission
									<?php break;
									case 'th': ?>
										พันธกิจ
								<?php break;
								} ?>
							</dt>
							<dd>
								<?php switch ($langClass) {
									case 'ja': ?>
										“Genba” Productivity, Maximized by Technology<br>
										テクノロジーの力で、”Genba”の生産性を最大化する
									<?php break;
									case 'en': ?>
										“Genba” Productivity, Maximized by Technology
									<?php break;
									case 'th': ?>
										“Genba” Productivity, Maximized by Technology<br>
										เทคโนโลยีเพื่อการยกระดับประสิทธิภาพสูงสุดของ “หน้างาน”
								<?php break;
								} ?>
							</dd>
						</dl>
						<dl>
							<dt>
								<?php switch ($langClass) {
									case 'ja': ?>
										ビジョン
									<?php break;
									case 'en': ?>
										Vision
									<?php break;
									case 'th': ?>
										วิสัยทัศน์
								<?php break;
								} ?>
							</dt>
							<dd>
								<?php switch ($langClass) {
									case 'ja': ?>
										A technology partner chosen by the "Genba"<br>
										“Genba"から選ばれるテクノロジー企業へ
									<?php break;
									case 'en': ?>
										A technology partner chosen by the "Genba"<br>
									<?php break;
									case 'th': ?>
										A technology partner chosen by the "Genba"<br>
										พาร์ทเนอร์ด้านเทคโนโลยีที่ “หน้างาน” ไว้วางใจเลือกใช้
								<?php break;
								} ?>
							</dd>
						</dl>
						<dl>
							<dt>
								<?php switch ($langClass) {
									case 'ja': ?>
										バリュー
									<?php break;
									case 'en': ?>
										Our Value
									<?php break;
									case 'th': ?>
										ค่านิยม
								<?php break;
								} ?>
							</dt>
							<dd>
								<?php switch ($langClass) {
									case 'ja': ?>
										【Tomas Way - 5つの行動指針】<br>
										Keeping Promises – 約束を守る<br>
										Strive for Success – 成果のために努力する<br>
										Top of View – 会社の代表として行動する <br>
										Common Success – 成功はみんなのもの<br>
										Team work - 成果のためチームで協力をする<br>
									<?php break;
									case 'en': ?>
										【Tomas Way - 5 Principles of Action】<br>
										Keeping Promises – Always keep your promises<br>
										Strive for Success – Always aim for success<br>
										Top of View – Act as a representative of the company<br>
										Common Success – Success is for everyone<br>
										Team work – Collaborate as a team for success<br>
									<?php break;
									case 'th': ?>
										【Tomas Way - 5 หลักการปฏิบัติ】<br>
										Keeping Promises – การรักษาสัญญา<br>
										Strive for Success - มุ่งมั่นสู่ความสำเร็จ<br>
										Top of View - ปฏิบัติในฐานะตัวแทนบริษัท<br>
										Common Success - ความสำเร็จเป็นของทุกคน<br>
										Team work - ทำงานเป็นทีมเพื่อความสำเร็จ<br>
								<?php break;
								} ?>
							</dd>
						</dl>
						<dl>
							<dt>
								<?php switch ($langClass) {
									case 'ja': ?>
										代表取締役社長
									<?php break;
									case 'en': ?>
										President
									<?php break;
									case 'th': ?>
										ประธานกรรมการบริหาร
								<?php break;
								} ?>
							</dt>
							<dd>
								<?php switch ($langClass) {
									case 'ja': ?>
										野崎　涼
									<?php break;
									case 'en': ?>
										Ryo Nozaki
									<?php break;
									case 'th': ?>
										คุณโนซากิ เรียว
								<?php break;
								} ?>
							</dd>
						</dl>
						<dl>
							<dt>
								<?php switch ($langClass) {
									case 'ja': ?>
										従業員数
									<?php break;
									case 'en': ?>
										Number of Employees
									<?php break;
									case 'th': ?>
										จำนวนพนักงาน
								<?php break;
								} ?>
							</dt>
							<dd>
								<?php switch ($langClass) {
									case 'ja': ?>
										41名（日本人4名・タイ人37名）*2025年06月現在
									<?php break;
									case 'en': ?>
										41 (4 Japanese, 37 Thai) *As of June 2025
									<?php break;
									case 'th': ?>
										41 คน (คนญี่ปุ่น 4 คน, คนไทย 37 คน) * ณ เดือนมิถุนายน 2025
								<?php break;
								} ?>
							</dd>
						</dl>
						<dl>
							<dt>
								<?php switch ($langClass) {
									case 'ja': ?>
										代表電話番号
									<?php break;
									case 'en': ?>
										Main Phone Number
									<?php break;
									case 'th': ?>
										เบอร์โทรศัพท์
								<?php break;
								} ?>
							</dt>
							<dd>
								<?php switch ($langClass) {
									case 'ja': ?>
										+66-98-271-9741　受付時間 平日/土曜日 08:00-17:00
									<?php break;
									case 'en': ?>
										+66-98-271-9741 (Hours Mon-Sat 08:00-17:00)
									<?php break;
									case 'th': ?>
										+66-98-271-9741 เวลาให้บริการ วันจันทร์ - วันเสาร์ 08:00-17:00
								<?php break;
								} ?>
							</dd>
						</dl>
						<dl>
							<dt>
								<?php switch ($langClass) {
									case 'ja': ?>
										代表メール
									<?php break;
									case 'en': ?>
										Main Email
									<?php break;
									case 'th': ?>
										อีเมล
								<?php break;
								} ?>
							</dt>
							<dd>
								info@tomastc.com
							</dd>
						</dl>
						<dl>
							<dt>
								<?php switch ($langClass) {
									case 'ja': ?>
										取引先銀行
									<?php break;
									case 'en': ?>
										Banking Partner
									<?php break;
									case 'th': ?>
										ธนาคารที่ใช้บริการ
								<?php break;
								} ?>
							</dt>
							<dd>
								<?php switch ($langClass) {
									case 'ja': ?>
										<a href="https://www.scb.co.th/th/personal-banking.html" target="_blank" rel="noopener noreferrer" class="u-uline">
											Siam Commercial Bank Public Company Limited.
										</a>
									<?php break;
									case 'en': ?>
										<a href="https://www.scb.co.th/th/personal-banking.html" target="_blank" rel="noopener noreferrer" class="u-uline">
											Siam Commercial Bank Public Company Limited
										</a>
									<?php break;
									case 'th': ?>
										<a href="https://www.scb.co.th/th/personal-banking.html" target="_blank" rel="noopener noreferrer" class="u-uline">
											ธนาคารไทยพาณิชย์ จำกัด (มหาชน)
										</a>
								<?php break;
								} ?>
							</dd>
						</dl>
						<dl>
							<dt>
								<?php switch ($langClass) {
									case 'ja': ?>
										掲載メディア
									<?php break;
									case 'en': ?>
										Featured in Media
									<?php break;
									case 'th': ?>
										สื่อที่นำเสนอ
								<?php break;
								} ?>
							</dt>
							<dd>
								<?php switch ($langClass) {
									case 'ja': ?>
										<a href="https://www.smri.asia/jp/tomastc" target="_blank" rel="noopener noreferrer" class="u-uline">サムライアジア Samurai Asia</a><br>
										<a href="https://www.fact-link.com/mem_profile.php?pl=jp&mem=00008087&page=00019850" target="_blank" rel="noopener noreferrer" class="u-uline">Fact Link.com Japan-Thailand Industrial Directory</a><br>
										<a href="https://asprova.net/ja/tomas-tech/" target="_blank" rel="noopener noreferrer" class="u-uline">Asprova ASP 目指せ！世界一の工場 アジアの時代</a><br>
										<a href="https://i-reporter.jp/interview/11420/" target="_blank" rel="noopener noreferrer" class="u-uline">i-Reporterの利用により正しいデータの取得とデータ分析が可能となり、生産工程の効率化を実現</a>
									<?php break;
									case 'en': ?>
										<a href="https://www.smri.asia/en/tomastc" target="_blank" rel="noopener noreferrer" class="u-uline">サムライアジア Samurai Asia</a><br>
										<a href="https://www.fact-link.com/mem_profile.php?pl=en&mem=00008087&page=00019908" target="_blank" rel="noopener noreferrer" class="u-uline">Fact Link.com Japan-Thailand Industrial Directory</a><br>
										<a href="https://asprova.net/ja/tomas-tech/" target="_blank" rel="noopener noreferrer" class="u-uline">Asprova ASP 目指せ！世界一の工場 アジアの時代</a><br>
										<a href="https://i-reporter.jp/interview/11420/" target="_blank" rel="noopener noreferrer" class="u-uline">i-Reporterの利用により正しいデータの取得とデータ分析が可能となり、生産工程の効率化を実現</a>
									<?php break;
									case 'th': ?>
										<a href="https://www.smri.asia/th/tomastc" target="_blank" rel="noopener noreferrer" class="u-uline">サムライアジア (Samurai Asia)</a><br>
										<a href="https://www.fact-link.com/mem_profile.php?pl=th&mem=00008087&page=00019907" target="_blank" rel="noopener noreferrer" class="u-uline">Fact Link.com Japan-Thailand Industrial Directory</a><br>
										<a href="https://asprova.net/ja/tomas-tech/" target="_blank" rel="noopener noreferrer" class="u-uline">Asprova ASP 目指せ！世界一の工場 アジアの時代</a><br>
										<a href="https://i-reporter.jp/interview/11420/" target="_blank" rel="noopener noreferrer" class="u-uline">i-Reporterの利用により正しいデータの取得とデータ分析が可能となり、生産工程の効率化を実現</a>
								<?php break;
								} ?>
							</dd>
						</dl>
					</div>
				</div>
				<div class="u-mt--36 u-mt--18--sp">
					<?php switch ($langClass) {
						case 'ja': ?>
							<a href="/document/thanks_download_companyprofile/" class="c-button02 --center">
								会社案内ダウンロード
							</a>
						<?php break;
						case 'en': ?>
							<a href="/en/document/company-profile/" class="c-button02 --center">
								Download Our Company Brochure
							</a>
						<?php break;
						case 'th': ?>
							<a href="/th/document/document-27/" class="c-button02 --center">
								ดาวน์โหลดข้อมูลบริษัท
							</a>
					<?php break;
					} ?>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
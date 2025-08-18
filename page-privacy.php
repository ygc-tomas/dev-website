<?php /*
Template Name: プライバシーポリシー
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
			Privacy Policy
		</h1>
		<nav class="p-lowerMv__bread">
			<ul class="p-lowerMv__bread__list">
				<li class="p-lowerMv__bread__list__item">
					<a href="<?php echo $langPath; ?>/">TOP</a>
				</li>
				<li class="p-lowerMv__bread__list__item">
					<span>Privacy Policy</span>
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
							<p>以下はTOMAS TECH CO.,LTD.が運営するウェブサイト（以下「当サイト」といいます）における、個人情報を含む利用者情報の取り扱いに関するプライバシーポリシーです。TOMAS TECH CO.,LTD.（以下「当社」といいます）は、個人情報の保護に関する法律（以下「個人情報保護法」といいます）その他関連法規を遵守し、お客様の大切な個人情報を厳重に管理いたします。</p>
<p>このプライバシーポリシーでは、個人情報の定義や収集方法、利用目的、第三者への提供、クッキー（Cookie）の使用などについてご案内いたします。なお、本ポリシーに定めのない事項については、個人情報保護法その他の関連法令に従います。</p>

<p class="policy-heading" style="font-size:20px; font-weight:bold;">第1条 総則</p>
<p>当社は、当サイトにおいて提供するサービス（以下「本サービス」といいます）を通じて取得したお客様の個人情報を、以下のプライバシーポリシー（以下「本ポリシー」といいます）に従って取り扱います。本ポリシーにおいては、個人情報に加えて、当社が収集・利用する履歴情報や特性情報などについても扱います。</p>

<p class="policy-heading" style="font-size:20px; font-weight:bold;">第2条 個人情報の定義</p>
<p>本ポリシーにおける「個人情報」とは、個人情報保護法第2条第1項に定義される「生存する個人に関する情報」を指します。具体的には、氏名、生年月日、住所、電話番号、メールアドレス、銀行口座番号、クレジットカード番号、運転免許証番号、個人識別符号など、これらの情報と他の情報を容易に照合することで特定の個人を識別できる情報を含みます。</p>

<p class="policy-heading" style="font-size:20px; font-weight:bold;">第3条 収集する情報と収集方法</p>
<p class="policy-subheading" style="font-size:16px; font-weight:bold;">1. ユーザーからご提供いただく情報</p>
<p>当サイトの会員登録や、本サービス利用時の入力フォームを通じて、お名前・生年月日・住所・電話番号・メールアドレス・決済手段に関する情報などを取得する場合があります。お問い合わせ内容や取引履歴の中に個人情報が含まれている場合にも、あわせて収集いたします。</p>

<p class="policy-subheading" style="font-size:16px; font-weight:bold;">2. 自動的に収集する情報</p>
<p>ユーザーが当サイトや提携先のページを閲覧したり、サービスを利用したりする際に、以下の履歴情報や特性情報を収集する場合があります。</p>
<ul style="color:#002B5C;">
  <li>・閲覧したページや広告の履歴、検索キーワード、利用日時、利用環境など</li>
  <li>・IPアドレス、クッキー（Cookie）情報、位置情報、端末の個体識別情報など</li>
</ul>

<p class="policy-subheading" style="font-size:16px; font-weight:bold;">3. 他サービスとの連携による取得</p>
<p>ソーシャルメディア等の外部サービスと連携する際、そのサービスに登録されているユーザーID、公開範囲として許可された情報などを取得する場合があります。</p>

<p class="policy-heading" style="font-size:20px; font-weight:bold;">第4条 個人情報を収集・利用する目的</p>
<p>当社が個人情報を収集・利用する主な目的は、以下のとおりです。</p>
<ul style="color:#002B5C;">
  <li>・本サービスの提供・運営や、利用料金の決済計算などを適切に行うため</li>
  <li>・ユーザーからのお問い合わせに対応するため（本人確認を含みます）</li>
  <li>・本サービスの新機能、更新情報、キャンペーンや関連する商品・サービスなどに関するご案内を行うため</li>
  <li>・ユーザーに料金をご請求するため（有料サービスの提供時など）</li>
  <li>・利用状況の分析やサービス品質向上のため（アクセス解析、行動履歴の測定など）</li>
  <li>・当社が定める利用規約や法令に違反したおそれのあるユーザーへの対応のため</li>
  <li>・上記利用目的に付随する目的</li>
</ul>

<p class="policy-heading" style="font-size:20px; font-weight:bold;">第5条（個人情報の安全管理措置）</p>

<p>当社は、個人情報への不正アクセス、漏洩、滅失、毀損などを防止するため、以下の安全管理措置を講じています。</p>
<ul style="color:#002B5C;">
  <li>・組織的措置：管理責任者の設置、取扱状況の定期点検</li>
  <li>・人的措置：従業員への研修と誓約書取得</li>
  <li>・物理的措置：入退室管理、書類・機器の管理</li>
  <li>・技術的措置：アクセス制御、ウイルス対策、暗号化処理など</li>
</ul>
<p>また、外部委託先に対しても契約等により同等の安全管理措置を求め、適切な監督を実施します。</p>
<p>当社は、利用目的の達成に必要な範囲において、国外に所在する業務委託先に対して個人情報の取扱いを委託することがあります。その場合には、委託先が個人情報保護に関する適切な措置を講じていることを確認した上で、契約その他の手段により必要かつ適切な監督を行います。</p>

<p class="policy-heading" style="font-size:20px; font-weight:bold;">第6条 個人情報の第三者提供</p>
<p>当社は、あらかじめご本人の同意を得ずに第三者へ個人情報を提供しません。ただし、以下に示す場合は例外とします。</p>
<ul style="color:#002B5C;">
  <li>・法令に基づく場合</li>
  <li>・人の生命、身体または財産の保護のために緊急に必要と認められる場合</li>
  <li>・公衆衛生の向上または児童の健全な育成推進のために特に必要な場合</li>
  <li>・国や地方公共団体、または委託先が法令の定める事務を遂行するために協力する必要がある場合で、ご本人の同意を得ることが手続き上困難な場合</li>
  <li>・予め利用目的に第三者への提供が含まれていることを明示し、他の法令上必要な事項を告知または公表している場合</li>
</ul>
<p>なお、次に掲げる場合は、第三者への提供に該当しません。</p>
<ul style="color:#002B5C;">
  <li>・当社が利用目的の達成に必要な範囲内で外部に取り扱いを委託する場合</li>
  <li>・合併や事業承継に伴って個人情報が提供される場合</li>
  <li>・個人情報保護法の定めに基づき共同利用が認められる場合</li>
</ul>

<p class="policy-heading" style="font-size:20px; font-weight:bold;">第7条 個人情報の開示・訂正・削除・利用停止</p>
<p class="policy-subheading" style="font-size:16px; font-weight:bold;">1. 開示請求</p>
<p>当社は、本人から個人情報の開示を求められた場合、法令に基づき、遅滞なくこれに対応いたします。ただし、開示により他の第三者の権利・利益を害するおそれがある場合、またはその他法令に定める事由が認められる場合には、全部または一部の開示を行わないことがあります。その際は、開示を行わない旨とその理由を遅滞なく通知いたします。なお、開示にあたっては、所定の手数料（1件あたり1,000円）を申し受ける場合があります。</p>

<p class="policy-subheading" style="font-size:16px; font-weight:bold;">2. 訂正・削除請求</p>
<p>当社が保有する個人情報に誤りがある場合、本人は所定の手続きにより、当該情報の訂正または削除を請求することができます。当社は、請求内容を確認の上、必要と判断した場合には、速やかに訂正または削除を行い、その結果を本人に通知いたします。</p>

<p class="policy-subheading" style="font-size:16px; font-weight:bold;">3. 利用停止・消去請求</p>
<p>本人は、個人情報が利用目的の範囲を超えて取り扱われている場合や、不正な手段により取得された場合、当社に対し、その利用の停止または消去を請求することができます。当社は、請求内容に基づき必要な調査を行い、その結果、対応が必要であると判断した場合には、速やかに利用停止または消去を実施し、その旨を本人に通知いたします。</p>

<p class="policy-heading" style="font-size:20px; font-weight:bold;">第8条 クッキー（Cookie）の利用</p>
<p>当サイトでは、ユーザーの利便性向上やアクセス解析のため、クッキー（Cookie）を使用しています。クッキーを通じて収集した情報は、サイト運営やサービス改善、広告配信の最適化などに用います。ブラウザの設定でクッキーを無効化することが可能ですが、その場合は一部サービスが正しく動作しない場合があります。</p>

<p class="policy-heading" style="font-size:20px; font-weight:bold;">第9条 プライバシーポリシーの変更</p>
<p>当社は、必要に応じて本ポリシーの内容を変更することがあります。変更後の内容は、当サイト上へ掲載した時点から効力が生じるものとします。ただし、法令上ユーザーの同意が必要となるような内容の変更を行う場合は、当社所定の方法であらためて同意を取得いたします。</p>

<p class="policy-heading" style="font-size:20px; font-weight:bold;">第10条 お問い合わせ窓口</p>
<div class="c-box --border">
  <p>TOMAS TECH CO.,LTD. 個人情報問い合わせ窓口</p>
  <p>Eメールアドレス：info@tomastc.com（代表メール）</p>
  <p>住所：8(Room 1B)Udom Suk 46 Alley(Sukhumvit 103), Khwaeng Bang Na, Khet Bang Na, Krung Thep MahaNakhon 10260 Thailand</p>
						<?php break;
						case 'en': ?>
							<p>Below is the privacy policy regarding the handling of user information, including personal information, on the website (hereinafter referred to as the “Site”) operated by TOMAS TECH CO.,LTD. (hereinafter referred to as the “Company”). The Company strictly manages your valuable personal information in compliance with the Act on the Protection of Personal Information (hereinafter referred to as the “Personal Information Protection Act”) and other relevant laws and regulations.</p>
<p>This Privacy Policy explains the definition of personal information, methods of collection, purposes of use, provision to third parties, the use of cookies, etc. Matters not specified in this Policy comply with the Personal Information Protection Act and other relevant laws.</p>

<p class="policy-heading" style="font-size:20px; font-weight:bold;">Article 1 General Provisions</p>
<p>The Company handles customers’ personal information obtained through the services (hereinafter referred to as the “Service”) provided on the Site in accordance with this Privacy Policy (hereinafter referred to as this “Policy”). This Policy also covers the handling of history information and characteristic information collected and used by the Company, in addition to personal information.</p>

<p class="policy-heading" style="font-size:20px; font-weight:bold;">Article 2 Definition of Personal Information</p>
<p>In this Policy, “personal information” refers to “information about a living individual” as defined in Article 2, Paragraph 1 of the Personal Information Protection Act. This specifically includes name, date of birth, address, phone number, email address, bank account number, credit card number, driver’s license number, personal identification codes, or any other information that identifies a specific individual by easily collating with other information.</p>

<p class="policy-heading" style="font-size:20px; font-weight:bold;">Article 3 Information Collected and Methods of Collection</p>
<p class="policy-subheading" style="font-size:16px; font-weight:bold;">1. Information Provided by Users</p>
<p>We may obtain information such as name, date of birth, address, phone number, email address, and information related to payment methods through membership registration on the Site or input forms when using the Service. We also collect information included in inquiries and transaction histories if personal information is contained therein.</p>

<p class="policy-subheading" style="font-size:16px; font-weight:bold;">2. Information Collected Automatically</p>
<p>When users browse this website or pages of our partners, or use the services, the following browsing history and characteristic information may be collected.</p>
<ul style="color:#002B5C;">
  <li>・History of pages and advertisements viewed, search keywords, usage dates and times, usage environment, etc.</li>
  <li>・IP address, cookie information, location information, and device identification information, etc.</li>
</ul>

<p class="policy-subheading" style="font-size:16px; font-weight:bold;">3. Information Acquired through Integration with Other Services</p>
<p>When integrating with external services such as social media, we may obtain user IDs registered with those services and information permitted to be disclosed within the public scope.</p>

<p class="policy-heading" style="font-size:20px; font-weight:bold;">Article 4 Purposes of Collecting and Using Personal Information</p>
<p>The main purposes for which the Company collects and uses personal information are as follows.</p>
<ul style="color:#002B5C;">
  <li>・To properly provide and operate the Service, and to calculate usage fees</li>
  <li>・To respond to inquiries from users (including identity verification)</li>
  <li>・To provide information on new functions of the Service, updates, campaigns, and related products and services</li>
  <li>・To invoice users for fees (when providing paid services)</li>
  <li>・To analyze usage conditions and improve service quality (e.g., access analysis, measurement of behavioral history)</li>
  <li>・To address users who may have violated the Company’s Terms of Use or applicable laws</li>
  <li>・To achieve purposes incidental to the above</li>
</ul>

<p class="policy-heading" style="font-size:20px; font-weight:bold;">Article 5 (Security Control Measures for Personal Information)</p>

<p>The Company takes the following security control measures to prevent unauthorized access, leakage, loss, or damage of personal information.</p>
<ul style="color:#002B5C;">
  <li>・Organizational measures: Appointment of a person responsible for management, and regular inspections of handling conditions</li>
  <li>・Personnel measures: Training employees and obtaining written pledges</li>
  <li>・Physical measures: Controlling entry and exit, and managing documents and equipment</li>
  <li>・Technical measures: Access control, virus protection, encryption, etc.</li>
</ul>
<p>We also require external contractors to implement equivalent security control measures through contracts and conduct appropriate supervision.  
We may entrust the handling of personal information to contractors located outside Japan when necessary to achieve the usage purposes. In such cases, the Company confirms that these contractors have taken appropriate measures to protect personal information, and exercises the necessary and appropriate supervision through contracts or other means.</p>

<p class="policy-heading" style="font-size:20px; font-weight:bold;">Article 6 Provision of Personal Information to Third Parties</p>
<p>The Company does not provide personal information to third parties without obtaining the individual’s prior consent, except in the following cases:</p>
<ul style="color:#002B5C;">
  <li>・Cases based on laws and regulations</li>
  <li>・Cases of urgent necessity for the protection of human life, body, or property</li>
  <li>・Cases particularly necessary for improving public health or promoting the healthy development of children</li>
  <li>・Cases where cooperation with national or local governments (or their entrusted parties) is necessary for executing duties prescribed by law, and obtaining the individual’s consent might interfere with those duties</li>
  <li>・Cases where the purpose of use includes providing data to third parties, and other statutory requirements have already been announced or disclosed</li>
</ul>
<p>In addition, provision of personal information to a third party in the following cases does not constitute “provision to a third party”:</p>
<ul style="color:#002B5C;">
  <li>・When the Company outsources handling to the extent necessary to achieve the purposes of use</li>
  <li>・When personal information is provided due to a merger or business succession</li>
  <li>・When shared use is permitted by the Personal Information Protection Act or other laws</li>
</ul>

<p class="policy-heading" style="font-size:20px; font-weight:bold;">Article 7 Disclosure, Correction, Deletion, and Suspension of Use of Personal Information</p>
<p class="policy-subheading" style="font-size:16px; font-weight:bold;">1. Request for Disclosure</p>
<p>When an individual requests the disclosure of personal information, the Company promptly responds in accordance with the law. However, if disclosure may harm the rights or interests of another third party, or if there are other lawful reasons, the Company may decide not to disclose all or part of the information. In such cases, the Company promptly notifies the individual of the reason for non-disclosure. A prescribed fee (1,000 yen per request) may be charged for disclosure.</p>

<p class="policy-subheading" style="font-size:16px; font-weight:bold;">2. Request for Correction or Deletion</p>
<p>If the personal information held by the Company is incorrect, the individual may request its correction or deletion through the prescribed procedure. The Company reviews the request, and if deemed necessary, promptly corrects or deletes the information and notifies the individual of the results.</p>

<p class="policy-subheading" style="font-size:16px; font-weight:bold;">3. Request for Suspension or Erasure</p>
<p>If personal information is used beyond the scope of the usage purposes or has been obtained by inappropriate means, the individual may request suspension or erasure of its use. The Company investigates based on the request, and if action is deemed necessary, promptly suspends or erases use of the personal information and notifies the individual accordingly.</p>

<p class="policy-heading" style="font-size:20px; font-weight:bold;">Article 8 Use of Cookies</p>
<p>The Site uses cookies to enhance user convenience and analyze access. Information collected through cookies is used for site operation, service improvement, and optimizing advertisement distribution. Cookies may be disabled in browser settings, though some services might not function properly if they are disabled.</p>

<p class="policy-heading" style="font-size:20px; font-weight:bold;">Article 9 Changes to the Privacy Policy</p>
<p>The Company may change the content of this Policy when necessary. The revised Policy takes effect once it is posted on the Site. However, if changes require user consent under relevant laws, the Company obtains consent again through its prescribed methods.</p>

<p class="policy-heading" style="font-size:20px; font-weight:bold;">Article 10 Contact Information</p>
<div class="c-box --border">
  <p>TOMAS TECH CO.,LTD. Personal Information Contact Window</p>
  <p>Email address: info@tomastc.com (General contact)</p>
  <p>Address: 8(Room 1B)Udom Suk 46 Alley(Sukhumvit 103), Khwaeng Bang Na, Khet Bang Na, Krung Thep MahaNakhon 10260 Thailand</p>
						<?php break;
						case 'th': ?>
							<p>ด้านล่างนี้คือ นโยบายความเป็นส่วนตัวเกี่ยวกับการจัดการข้อมูลผู้ใช้ รวมถึงข้อมูลส่วนบุคคล บนเว็บไซต์ (ต่อไปนี้เรียกว่า “เว็บไซต์นี้”) ที่ดำเนินการโดย TOMAS TECH CO.,LTD. (ต่อไปนี้เรียกว่า “บริษัทฯ”) บริษัทฯ ปฏิบัติตามพระราชบัญญัติคุ้มครองข้อมูลส่วนบุคคล (ต่อไปนี้เรียกว่า “พระราชบัญญัติคุ้มครองข้อมูลส่วนบุคคล”) และกฎหมายอื่น ๆ ที่เกี่ยวข้อง อีกทั้งยังให้ความสำคัญในการจัดการข้อมูลส่วนบุคคลอันมีค่าของท่านอย่างเข้มงวด</p>
<p>นโยบายความเป็นส่วนตัวนี้จะอธิบายถึงคำนิยามของข้อมูลส่วนบุคคล วิธีการเก็บรวบรวม วัตถุประสงค์ในการใช้งาน การเปิดเผยข้อมูลให้บุคคลที่สาม รวมถึงการใช้คุกกี้ (Cookie) เป็นต้น หากมีประเด็นใดที่ไม่ได้ระบุไว้ในนโยบายฉบับนี้ จะปฏิบัติตามพระราชบัญญัติคุ้มครองข้อมูลส่วนบุคคลและกฎหมายที่เกี่ยวข้องอื่น ๆ</p>

<p class="policy-heading" style="font-size:20px; font-weight:bold;">มาตรา 1 ข้อทั่วไป</p>
<p>บริษัทฯ จะดำเนินการจัดการข้อมูลส่วนบุคคลของลูกค้าที่ได้รับผ่านบริการ (ต่อไปนี้เรียกว่า “บริการ”) บนเว็บไซต์นี้ ตามที่ระบุไว้ในนโยบายความเป็นส่วนตัวฉบับนี้ (ต่อไปนี้เรียกว่า “นโยบายฉบับนี้”) ทั้งนี้ นอกเหนือจากข้อมูลส่วนบุคคลแล้ว บริษัทฯ จะจัดการข้อมูลที่เกี่ยวกับประวัติการใช้งานและข้อมูลลักษณะเฉพาะต่าง ๆ ซึ่งบริษัทฯ ได้จัดเก็บและใช้งานด้วย ตามเงื่อนไขในนโยบายฉบับนี้</p>

<p class="policy-heading" style="font-size:20px; font-weight:bold;">มาตรา 2 คำนิยามของข้อมูลส่วนบุคคล</p>
<p>“ข้อมูลส่วนบุคคล” ในที่นี้ หมายถึง “ข้อมูลเกี่ยวกับบุคคลที่ยังมีชีวิตอยู่” ตามที่กำหนดไว้ในมาตรา 2 วรรค 1 ของพระราชบัญญัติคุ้มครองข้อมูลส่วนบุคคล ซึ่งรวมถึง ชื่อ วันเดือนปีเกิด ที่อยู่ หมายเลขโทรศัพท์ อีเมล เลขบัญชีธนาคาร หมายเลขบัตรเครดิต หมายเลขใบขับขี่ รหัสระบุบุคคล และข้อมูลอื่น ๆ ที่สามารถนำมาเชื่อมโยงเพื่อระบุตัวตนของบุคคลดังกล่าวได้โดยง่าย</p>

<p class="policy-heading" style="font-size:20px; font-weight:bold;">มาตรา 3 ข้อมูลที่เก็บรวบรวมและวิธีการเก็บรวบรวม</p>
<p class="policy-subheading" style="font-size:16px; font-weight:bold;">1. ข้อมูลที่ผู้ใช้ให้โดยตรง</p>
<p>บริษัทฯ อาจได้รับข้อมูล เช่น ชื่อ วันเดือนปีเกิด ที่อยู่ หมายเลขโทรศัพท์ อีเมล และข้อมูลที่เกี่ยวข้องกับวิธีการชำระเงิน ผ่านการลงทะเบียนสมาชิกบนเว็บไซต์นี้ หรือผ่านแบบฟอร์มที่กรอกเมื่อใช้บริการ หากในเนื้อหาการติดต่อสอบถามหรือประวัติการทำธุรกรรมมีข้อมูลส่วนบุคคล บริษัทฯ จะเก็บรวบรวมข้อมูลเหล่านั้นด้วย</p>

<p class="policy-subheading" style="font-size:16px; font-weight:bold;">2. ข้อมูลที่เก็บโดยอัตโนมัติ</p>
<p>เมื่อผู้ใช้เข้าชมเว็บไซต์นี้หรือหน้าเว็บไซต์ของพันธมิตรของเรา หรือใช้บริการ อาจมีการเก็บรวบรวมข้อมูลประวัติการเข้าชมและข้อมูลลักษณะเฉพาะต่อไปนี้</p>
<ul style="color:#002B5C;">
  <li>・ประวัติการเข้าชมหน้าเว็บหรือโฆษณา คำค้นหา วันและเวลาในการใช้งาน สภาพแวดล้อมในการใช้งาน เป็นต้น</li>
  <li>・ที่อยู่ IP ข้อมูลคุกกี้ (Cookie) ข้อมูลตำแหน่งที่ตั้ง ข้อมูลระบุอุปกรณ์ เป็นต้น</li>
</ul>

<p class="policy-subheading" style="font-size:16px; font-weight:bold;">3. ข้อมูลที่ได้รับจากการเชื่อมต่อบริการอื่น</p>
<p>เมื่อมีการเชื่อมต่อกับบริการภายนอก เช่น โซเชียลมีเดีย บริษัทฯ อาจได้รับข้อมูลต่าง ๆ เช่น รหัสผู้ใช้ที่ลงทะเบียนกับบริการดังกล่าว และข้อมูลที่ได้รับอนุญาตให้เปิดเผยในขอบเขตที่กำหนดไว้</p>

<p class="policy-heading" style="font-size:20px; font-weight:bold;">มาตรา 4 วัตถุประสงค์ในการเก็บรวบรวมและใช้ข้อมูลส่วนบุคคล</p>
<p>บริษัทฯ จัดเก็บและใช้ข้อมูลส่วนบุคคลเพื่อตอบสนองวัตถุประสงค์หลัก ดังต่อไปนี้</p>
<ul style="color:#002B5C;">
  <li>・เพื่อให้บริการและบริหารจัดการเว็บไซต์อย่างเหมาะสม รวมถึงการคำนวณค่าธรรมเนียมการใช้งาน</li>
  <li>・เพื่อตอบข้อซักถามจากผู้ใช้ (รวมถึงการยืนยันตัวตน)</li>
  <li>・เพื่อแจ้งข้อมูลเกี่ยวกับฟังก์ชันใหม่ การอัปเดต แคมเปญ หรือสินค้าและบริการที่เกี่ยวข้องกับบริการนี้</li>
  <li>・เพื่อเรียกเก็บค่าใช้จ่ายกับผู้ใช้ (กรณีที่มีบริการแบบชำระเงิน)</li>
  <li>・เพื่อวิเคราะห์ลักษณะการใช้งานและปรับปรุงคุณภาพของบริการ (เช่น การวิเคราะห์การเข้าถึง การวัดพฤติกรรมการใช้งาน)</li>
  <li>・เพื่อดำเนินมาตรการกับผู้ใช้ที่อาจกระทำการฝ่าฝืนเงื่อนไขการใช้งานหรือกฎหมาย</li>
  <li>・เพื่อบรรลุวัตถุประสงค์อื่นที่เกี่ยวข้องกับวัตถุประสงค์ข้างต้น</li>
</ul>

<p class="policy-heading" style="font-size:20px; font-weight:bold;">มาตรา 5 (มาตรการรักษาความปลอดภัยของข้อมูลส่วนบุคคล)</p>
<p>บริษัทฯ มีมาตรการรักษาความปลอดภัยเพื่อป้องกันการเข้าถึงข้อมูลส่วนบุคคลโดยไม่ได้รับอนุญาต หรือป้องกันการรั่วไหล การสูญหาย หรือความเสียหายของข้อมูล ดังต่อไปนี้</p>
<ul style="color:#002B5C;">
 <li>・มาตรการเชิงองค์กร: แต่งตั้งผู้รับผิดชอบการจัดการ และตรวจสอบกระบวนการจัดการเป็นระยะ</li>
  <li>・มาตรการด้านบุคคล: ให้ความรู้แก่พนักงานและจัดทำหนังสือสัญญาข้อตกลง</li>
  <li>・มาตรการด้านกายภาพ: ควบคุมการเข้า-ออกสถานที่ และจัดการเอกสาร/อุปกรณ์</li>
  <li>・มาตรการทางเทคนิค: ควบคุมการเข้าถึง ป้องกันไวรัส และเข้ารหัสข้อมูล เป็นต้น</li>
</ul>
<p>นอกจากนี้ บริษัทฯ จะทำสัญญาและกำกับดูแลผู้รับจ้างภายนอกอย่างเหมาะสม เพื่อให้มั่นใจว่าผู้รับจ้างดังกล่าวใช้มาตรการรักษาความปลอดภัยในระดับเดียวกัน  
หากจำเป็นต้องมอบหมายให้ผู้รับจ้างที่ตั้งอยู่นอกประเทศเป็นผู้ดูแลข้อมูลส่วนบุคคลเพื่อบรรลุวัตถุประสงค์ในการใช้งาน บริษัทฯ จะตรวจสอบว่าผู้รับจ้างมีมาตรการที่เหมาะสมในการคุ้มครองข้อมูลส่วนบุคคล และจัดทำสัญญา หรือกำหนดมาตรการอื่น ๆ เพื่อกำกับดูแลอย่างเหมาะสม</p>

<p class="policy-heading" style="font-size:20px; font-weight:bold;">มาตรา 6 การเปิดเผยข้อมูลส่วนบุคคลแก่บุคคลที่สาม</p>
<p>บริษัทฯ จะไม่เปิดเผยข้อมูลส่วนบุคคลแก่บุคคลที่สามโดยไม่ได้รับความยินยอมจากท่านล่วงหน้า เว้นแต่จะเข้าข้อยกเว้นดังต่อไปนี้</p>
<ul style="color:#002B5C;">
  <li>・กรณีที่จำเป็นต้องปฏิบัติตามกฎหมาย</li>
  <li>・กรณีฉุกเฉินที่เกี่ยวข้องกับการคุ้มครองชีวิต ร่างกาย หรือทรัพย์สินของบุคคล</li>
  <li>・กรณีที่จำเป็นเป็นพิเศษเพื่อส่งเสริมสุขอนามัยของประชาชน หรือส่งเสริมการพัฒนาเยาวชนอย่างเหมาะสม</li>
  <li>・กรณีที่ต้องให้ความร่วมมือกับหน่วยงานราชการ หรือหน่วยงานปกครองส่วนท้องถิ่น (หรือผู้ได้รับมอบหมาย) เพื่อดำเนินภารกิจตามที่กฎหมายกำหนด และการขอความยินยอมจากท่านอาจเป็นอุปสรรคต่อการปฏิบัติหน้าที่</li>
  <li>・กรณีที่บริษัทฯ ได้ประกาศหรือแจ้งวัตถุประสงค์ในการใช้งาน ซึ่งรวมถึงการเปิดเผยข้อมูลแก่บุคคลที่สาม และเป็นไปตามข้อบังคับตามกฎหมาย</li>
</ul>
<p>ทั้งนี้ การเปิดเผยข้อมูลให้แก่บุคคลที่สามจะไม่ถือว่าเป็น “การเปิดเผยข้อมูลแก่บุคคลที่สาม” ในกรณีต่อไปนี้</p>
<ul style="color:#002B5C;">
  <li>・กรณีที่บริษัทฯ มอบหมายให้บุคคลภายนอกจัดการข้อมูลตามขอบเขตที่จำเป็นในการบรรลุวัตถุประสงค์ในการใช้งาน</li>
  <li>・กรณีที่ข้อมูลส่วนบุคคลถูกโอนไปอันเนื่องมาจากการควบรวมกิจการหรือการสืบทอดกิจการ</li>
  <li>・กรณีที่กฎหมายเกี่ยวกับการคุ้มครองข้อมูลส่วนบุคคลอนุญาตให้มีการใช้งานร่วมกันได้</li>
</ul>

<p class="policy-heading" style="font-size:20px; font-weight:bold;">มาตรา 7 การเปิดเผย แก้ไข ลบ และระงับการใช้ข้อมูลส่วนบุคคล</p>
<p class="policy-subheading" style="font-size:16px; font-weight:bold;">1. คำขอเปิดเผยข้อมูล</p>
<p>เมื่อเจ้าของข้อมูลร้องขอให้เปิดเผยข้อมูลส่วนบุคคล บริษัทฯ จะดำเนินการเปิดเผยให้ทันการณ์ตามกฎหมาย อย่างไรก็ตาม หากการเปิดเผยนั้นอาจเป็นอันตรายต่อสิทธิหรือผลประโยชน์ของบุคคลที่สาม หรือมีสาเหตุอื่นตามที่กฎหมายกำหนด บริษัทฯ อาจปฏิเสธที่จะเปิดเผยข้อมูลทั้งหมดหรือบางส่วน และจะแจ้งให้ทราบถึงเหตุผลนั้นโดยเร็ว ทั้งนี้ การเปิดเผยข้อมูลอาจมีค่าธรรมเนียมตามที่กำหนด (1,000 เยนต่อคำขอ)</p>

<p class="policy-subheading" style="font-size:16px; font-weight:bold;">2. คำขอแก้ไขหรือลบข้อมูล</p>
<p>หากพบว่าข้อมูลส่วนบุคคลที่บริษัทฯ เก็บรวบรวมไว้นั้นไม่ถูกต้อง เจ้าของข้อมูลมีสิทธิ์ยื่นคำขอแก้ไขหรือลบข้อมูลตามขั้นตอนที่กำหนด บริษัทฯ จะตรวจสอบคำขอ และดำเนินการแก้ไขหรือลบโดยเร็วหากเห็นว่าเหมาะสม พร้อมแจ้งผลให้เจ้าของข้อมูลทราบ</p>

<p class="policy-subheading" style="font-size:16px; font-weight:bold;">3. คำขอระงับหรือลบการใช้งาน</p>
<p>หากข้อมูลส่วนบุคคลถูกนำไปใช้นอกเหนือขอบเขตวัตถุประสงค์ในการใช้งาน หรือได้มาโดยวิธีการที่ไม่เหมาะสม เจ้าของข้อมูลมีสิทธิ์ยื่นคำขอให้ระงับหรือลบการใช้งานข้อมูลดังกล่าว บริษัทฯ จะทำการตรวจสอบตามคำขอ และหากเห็นว่าจำเป็นต้องดำเนินการ จะดำเนินการระงับหรือลบการใช้งานโดยเร็ว และจะแจ้งผลให้เจ้าของข้อมูลทราบ</p>

<p class="policy-heading" style="font-size:20px; font-weight:bold;">มาตรา 8 การใช้คุกกี้ (Cookie)</p>
<p>บนเว็บไซต์นี้ มีการใช้คุกกี้เพื่ออำนวยความสะดวกในการใช้งานของผู้ใช้ และเพื่อวิเคราะห์การเข้าถึง ข้อมูลที่ได้จากคุกกี้จะถูกนำไปใช้ในการบริหารจัดการเว็บไซต์ การปรับปรุงบริการ และการปรับการแสดงโฆษณาให้เหมาะสม ผู้ใช้สามารถตั้งค่าเบราว์เซอร์ให้ปิดการใช้คุกกี้ได้ แต่บางส่วนของบริการอาจทำงานได้ไม่สมบูรณ์</p>

<p class="policy-heading" style="font-size:20px; font-weight:bold;">มาตรา 9 การเปลี่ยนแปลงนโยบายความเป็นส่วนตัว</p>
<p>บริษัทฯ อาจมีการเปลี่ยนแปลงนโยบายฉบับนี้ตามความจำเป็น โดยมีผลบังคับใช้ตั้งแต่เวลาที่ประกาศบนเว็บไซต์นี้ อย่างไรก็ตาม หากการเปลี่ยนแปลงใด ๆ เป็นสาระสำคัญที่กฎหมายกำหนดให้ต้องได้รับความยินยอมจากผู้ใช้ บริษัทฯ จะดำเนินการเพื่อขอความยินยอมตามวิธีที่กำหนด</p>

<p class="policy-heading" style="font-size:20px; font-weight:bold;">มาตรา 10 ช่องทางการติดต่อ</p>
<div class="c-box --border">
  <p>แผนกติดต่อข้อมูลส่วนบุคคล บริษัท TOMAS TECH CO.,LTD.</p>
  <p>อีเมล: info@tomastc.com (อีเมลกลาง)</p>
  <p>ที่อยู่: 8(Room 1B)Udom Suk 46 Alley(Sukhumvit 103), Khwaeng Bang Na, Khet Bang Na, Krung Thep MahaNakhon 10260 Thailand</p>
						<?php break;
					} ?>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
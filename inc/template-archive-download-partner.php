<?php global $langClass;
global $langPath;
?>
<section class="u-pt--45 u-pt--30--sp">
        <div class="l-wrap l-wrap--sp">
                <div class="p-tab">
                        <div class="p-tab__head">
                                <div class="p-postSort">
                                        <?php
                                        switch ($langClass) {
                                                case "ja":
                                                        $cats = get_terms('download-partner_cat');
                                                        break;
                                                case "en":
                                                        $cats = get_terms('download-partner-en_cat');
                                                        break;
                                                case "th":
                                                        $cats = get_terms('download-partner-th_cat');
                                                        break;
                                        }

                                        echo '<pre>';
                                        var_dump($cats);
                                        echo '</pre>';
                                        if ($cats): ?>
                                                <button type="button" class="p-postSort__button">
                                                        <span class="icon">
                                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/case-study/icon_category_01.svg" alt="">
                                                        </span>
                                                        <span class="label">
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
                                                        </span>
                                                </button>
                                        <?php endif; ?>

                                        <div class="p-postSort__search">
                                                <form action="<?php echo $langPath; ?>/download-partner" method="get">
                                                        <?php switch ($langClass) {
                                                                case 'ja': ?>
                                                                        <input type="text" name="s" placeholder="キーワードから探す">
                                                                <?php break;
                                                                case 'en': ?>
                                                                        <input type="text" name="s" placeholder="Search by Keyword">
                                                                <?php break;
                                                                case 'th': ?>
                                                                        <input type="text" name="s" placeholder="ค้นหาด้วยคำสำคัญ">
                                                        <?php break;
                                                        } ?>
                                                        <button type="submit"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/icon_search_01.svg" alt="検索する"></button>
                                                </form>
                                        </div>

                                        <?php if ($cats): ?>
                                                <div class="p-postSort__panel">
                                                        <div class="p-postSort__panel__inner">
                                                                <ul class="p-postSort__category">
                                                                        <?php foreach ($cats as $cat): ?>
                                                                                <li class="p-postSort__category__item">
                                                                                        <a href="<?php echo get_term_link($cat); ?>" class="p-postSort__category__link"><?php echo $cat->name; ?></a>
                                                                                </li>
                                                                        <?php endforeach; ?>
                                                                </ul>
                                                        </div>
                                                </div>
                                        <?php endif; ?>
                                </div>

                                <div class="p-postSort02">
                                        <?php if ($cats): ?>
                                                <div class="p-postSort02__item">
                                                        <button type="button" class="p-postSort02__button">
                                                                <span class="icon">
                                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/case-study/icon_category_01.svg" alt="">
                                                                </span>
                                                                <span class="label">
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
                                                                </span>
                                                        </button>
                                                        <div class="p-postSort02__panel">
                                                                <div class="p-postSort02__panel__inner">
                                                                        <ul class="p-postSort02__category">
                                                                                <?php foreach ($cats as $cat): ?>
                                                                                        <li class="p-postSort02__category__item">
                                                                                                <a href="<?php echo get_term_link($cat); ?>" class="p-postSort__category__link"><?php echo $cat->name; ?></a>
                                                                                        </li>
                                                                                <?php endforeach; ?>
                                                                        </ul>
                                                                </div>
                                                        </div>
                                                </div>
                                        <?php endif; ?>
                                        <div class="p-postSort02__item">
                                                <div class="p-postSort02__search">
                                                        <form action="<?php echo $langPath; ?>/download-partner" method="get">
                                                                        <?php switch ($langClass) {
                                                                        case 'ja': ?>
                                                                                <input type="text" name="s" placeholder="キーワードから探す">
                                                                        <?php break;
                                                                        case 'en': ?>
                                                                                <input type="text" name="s" placeholder="Search by Keyword">
                                                                        <?php break;
                                                                        case 'th': ?>
                                                                                <input type="text" name="s" placeholder="ค้นหาด้วยคำสำคัญ">
                                                                <?php break;
                                                                } ?>
                                                                <button type="submit"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/icon_search_01.svg" alt="検索する"></button>
                                                        </form>
                                                </div>
                                        </div>
                                </div>

                        </div>

                        <div class="p-tab__body">
                                <?php if (have_posts()): ?>
                                        <div class="p-postLayout">
                                                <div class="p-postLayout__head">
                                                        <p class="p-postLayout__heading">
                                                                <?php switch ($langClass) {
                                                                        case 'ja': ?>
                                                                                表示変更
                                                                        <?php break;
                                                                        case 'en': ?>
                                                                                Display Change
                                                                        <?php break;
                                                                        case 'th': ?>
                                                                                เปลี่ยนการแสดงผล
                                                                <?php break;
                                                                } ?>
                                                        </p>
                                                        <div class="p-postLayout__button">
                                                                <a href="?col=4" class="p-postLayout__button__item" data-col="4" id="layoutButton4">
                                                                        <span class="icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/icon_layout_01.svg" alt=""></span>
                                                                        <span class="label">
                                                                                <?php switch ($langClass) {
                                                                                        case 'ja': ?>
                                                                                                4列
                                                                                        <?php break;
                                                                                        case 'en': ?>
                                                                                                4 columns
                                                                                        <?php break;
                                                                                        case 'th': ?>
                                                                                                4 คอลัมภ์
                                                                                <?php break;
                                                                                } ?>
                                                                        </span>
                                                                </a>
                                                                <a href="?col=2" class="p-postLayout__button__item --current" data-col="2" id="layoutButton2">
                                                                        <span class="icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/icon_layout_02.svg" alt=""></span>
                                                                        <span class="label">
                                                                                <?php switch ($langClass) {
                                                                                        case 'ja': ?>
                                                                                                2列
                                                                                        <?php break;
                                                                                        case 'en': ?>
                                                                                                2 columns
                                                                                        <?php break;
                                                                                        case 'th': ?>
                                                                                                2 คอลัมภ์
                                                                                <?php break;
                                                                                } ?>
                                                                        </span>
                                                                </a>
                                                                <a href="?col=1" class="p-postLayout__button__item" data-col="1" id="layoutButton1">
                                                                        <span class="icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/icon_layout_03.svg" alt=""></span>
                                                                        <span class="label">
                                                                                <?php switch ($langClass) {
                                                                                        case 'ja': ?>
                                                                                                1列
                                                                                        <?php break;
                                                                                        case 'en': ?>
                                                                                                1 column
                                                                                        <?php break;
                                                                                        case 'th': ?>
                                                                                                1 คอลัมภ์
                                                                                <?php break;
                                                                                } ?>
                                                                        </span>
                                                                </a>
                                                        </div>
                                                        <?php
                                                        switch ($langClass) {
                                                                case "ja":
                                                                        $langTax = 'download-partner_lang';
                                                                        $postType = 'download-partner';
                                                                        break;
                                                                case "en":
                                                                        $langTax = 'download-partner-en_lang';
                                                                        $postType = 'download-partner-en';
                                                                        break;
                                                                case "th":
                                                                        $langTax = 'download-partner-th_lang';
                                                                        $postType = 'download-partner-th';
                                                                        break;
                                                        }
                                                        $langTerms = get_terms($langTax);
                                                        if ($langTerms):
                                                        ?>
                                                                <div class="p-postLayout__select">
                                                                        <div class="p-postLayout__select__head">
                                                                                <span class="label">
                                                                                        <?php if (is_tax($langTax, 'jp')): ?>
                                                                                                JP
                                                                                        <?php elseif (is_tax($langTax, 'en')): ?>
                                                                                                EN
                                                                                        <?php elseif (is_tax($langTax, 'th')): ?>
                                                                                                TH
                                                                                        <?php else: ?>
                                                                                                LANG
                                                                                        <?php endif; ?>
                                                                                </span>
                                                                        </div>

                                                                        <ul class="p-postLayout__select__list">
                                                                                <li class="p-postLayout__select__list__item">
                                                                                        <a href="<?php echo $langPath; ?>/download-partner">
                                                                                                ALL
                                                                                        </a>
                                                                                </li>
                                                                                <?php foreach ($langTerms as $langTerm): ?>
                                                                                        <li class="p-postLayout__select__list__item">
                                                                                                <a href="<?php echo get_term_link($langTerm); ?><?php if (isset($_GET['col'])) {
                                                                                                                                                                                                        echo "?col=" . $_GET["col"];
                                                                                                                                                                                                } ?>" class="p-postLayout__select__list__link <?php if (is_tax($langTax, $langTerm)) {
                                                                                                                                                                                                                                                                                                        echo "--current";
                                                                                                                                                                                                                                                                                                } ?>">
                                                                                                        <?php echo $langTerm->name; ?>
                                                                                                </a>
                                                                                        </li>
                                                                                <?php endforeach; ?>
                                                                        </ul>
                                                                </div>
                                                        <?php endif; ?>
                                                </div>
                                                <div class="p-postArchive03 p-postLayout__contents">
                                                        <?php while (have_posts()): the_post(); ?>
                                                                <a href="<?php the_permalink(); ?>" class="p-postCard">
                                                                        <div class="p-postCard__thumbnail">
                                                                                <?php if (get_the_post_thumbnail()): ?>
                                                                                        <?php the_post_thumbnail('large'); ?>
                                                                                <?php else: ?>
                                                                                        <img src="<?php echo get_template_directory_uri(); ?>/ogimage.png" alt="">
                                                                                <?php endif; ?>
                                                                        </div>
                                                                        <div class="p-postCard__body">
                                                                                <?php
                                                                                switch ($langClass) {
                                                                                        case "ja":
                                                                                                $cats = get_the_terms($post->ID, 'download-partner_cat');
                                                                                                break;
                                                                                        case "en":
                                                                                                $cats = get_the_terms($post->ID, 'download-partner-en_cat');
                                                                                                break;
                                                                                        case "th":
                                                                                                $cats = get_the_terms($post->ID, 'download-f-th_cat');
                                                                                                break;
                                                                                }
                                                                                if ($cats): ?>
                                                                                        <ul class="p-postCard__category --noMt">
                                                                                                <?php foreach ($cats as $cat): ?>
                                                                                                        <li class="p-postCard__category__item">
                                                                                                                <?php echo $cat->name; ?>
                                                                                                        </li>
                                                                                                <?php endforeach; ?>
                                                                                        </ul>
                                                                                <?php endif; ?>
                                                                                <h3 class="p-postCard__heading --hasMt">
                                                                                        <?php the_title(); ?>
                                                                                                                                                                </h3>
                                                                                <p class="p-postCard__text">
                                                                                <!-- PDFダウンロードボタン追加 -->
                                                                                <?php if ( get_post_meta( get_the_ID(), 'cf_file', true ) ) : ?> 
                                                                                        <a href="<?php echo esc_url( get_permalink() ); ?>" class="download-button">PDF</a><br>
                                                                                <?php endif; ?>

                                                                                <!-- Excel用ボタン（詳細ページに遷移） -->
                                                                                <?php if ( get_post_meta( get_the_ID(), 'cf_excel_file', true ) ) : ?> 
                                                                                        <a href="<?php echo esc_url( get_permalink() . '?type=excel' ); ?>" class="download-button">Excel</a><br>
                                                                                <?php endif; ?>

                                                                                <!-- PowerPoint用ボタン（詳細ページに遷移） -->
                                                                                <?php if ( get_post_meta( get_the_ID(), 'cf_powerpoint_file', true ) ) : ?> 
                                                                                        <a href="<?php echo esc_url( get_permalink() . '?type=powerpoint' ); ?>" class="download-button">PowerPoint</a>
                                                                                <?php endif; ?>
                                                                                </p>


                                                                        </div>
                                                                </a>
                                                        <?php endwhile; ?>
                                                </div>
                                                <div class="p-pagination u-mt--25 u-mt--18--sp">
                                                        <?php
                                                        $args = array(
                                                                'mis_size' => 3,
                                                                'screen_reader_text' => '',
                                                                'prev_text' => '<',
                                                                'next_text' => '>'
                                                        );
                                                        the_posts_pagination($args);
                                                        ?>
                                                </div>
                                        </div>
                                <?php endif; ?>
                        </div>
                </div>
        </div>
</section>
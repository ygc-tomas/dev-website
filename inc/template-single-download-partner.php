<?php global $langClass;
global $langPath; ?>
<section class="u-pt--45 u-pt--30--sp">
        <div class="l-wrap l-wrap--sp">
                <div class="p-section">
                        <div class="p-section__contents">
                                <?php if (have_posts()): while (have_posts()): the_post(); ?>
                                                <?php $formFlg = get_field('cf_formFlg'); ?>
                                                <?php if ($formFlg): ?>
                                                        <div class="p-postArticle02">
                                                                <div class="p-postArticle02__contents">
                                                                        <div class="p-postArticle02__thumbnail">
                                                                                <?php if (get_the_post_thumbnail()): ?>
                                                                                        <?php the_post_thumbnail('large'); ?>
                                                                                <?php else: ?>
                                                                                        <img src="<?php echo get_template_directory_uri(); ?>/ogimage.png" alt="">
                                                                                <?php endif; ?>
                                                                        </div>
                                                                        <h1 class="p-postArticle02__heading">
                                                                                <?php the_title(); ?>
                                                                        </h1>
                                                                        <article class="p-postArticle02__article">
                                                                                <?php the_content(); ?>
                                                                        </article>
                                                                </div>
                                                                <div class="p-postArticle02__form">
                                                                        <p class="u-text--16">
                                                                                <?php switch ($langClass) {
                                                                                        case 'ja': ?>
                                                                                                Download the partner information using the form below. * indicates required fields.
                                                                                        <?php break;
                                                                                        case 'en': ?>

                                                                                        <?php break;
                                                                                        case 'th': ?>

                                                                                <?php break;
                                                                                } ?>
                                                                        </p>
                                                                        <div class="p-form --small u-mt--25 u-mt--18--sp">
                                                                                <?php
                                                                                switch ($langClass) {
                                                                                        case "ja":
                                                                                                echo  do_shortcode('[contact-form-7 id="368436c" title="資料請求 - 日本語"]');
                                                                                                break;
                                                                                        case "en":
                                                                                                echo do_shortcode('[contact-form-7 id="20d9641" title="資料請求 - 英語"]');
                                                                                                break;
                                                                                        case "th":
                                                                                                echo do_shortcode('[contact-form-7 id="a3db564" title="資料請求 - タイ語"]');
                                                                                                break;
                                                                                }
                                                                                ?>
                                                                        </div>


                                                                        <script>
                                                                                /*
                                                                                 ** フォーム送信後サンクスページへリダイレクト
                                                                                 */
                                                                                document.addEventListener('wpcf7mailsent', function(event) {
                                                                                        location = '<?php echo $langPath; ?>/document-completed';
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
                                                <?php else: ?>
                                                        <div class="p-postArticle03">
                                                                <div class="p-postArticle03__images">
                                                                        <div class="p-postArticle03__thumbnail">
                                                                                <?php if (get_the_post_thumbnail()): ?>
                                                                                        <?php the_post_thumbnail('large'); ?>
                                                                                <?php else: ?>
                                                                                        <img src="<?php echo get_template_directory_uri(); ?>/ogimage.png" alt="">
                                                                                <?php endif; ?>
                                                                        </div>
                                                                </div>
                                                                <div class="p-postArticle03__contents">

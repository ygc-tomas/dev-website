<?php

// CTA_BNショートコードの登録　（日本語バナー）
function tomas_cta_bn_shortcode() {
    ob_start();
    ?>
    <div class="cta-bn-wrapper">
        <a href="https://tomastc.com/contact/" target="_blank" rel="noopener">
            <img src="https://tomastc.com/wp-content/uploads/2024/11/TOMAS-TECH_POPUPバナー.png" alt="TOMAS TECHへのお問い合わせバナー" class="cta-bn-image" />
        </a>
    </div>
    <style>
        .cta-bn-wrapper {
            max-width: 800px;
            margin: 40px auto;
            padding: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            border-radius: 8px;
            background-color: #fff;
            text-align: center;
        }

        .cta-bn-wrapper img.cta-bn-image {
            width: 100%;
            height: auto;
            display: block;
            margin: 0 auto;
        }
    </style>
    <?php
    return ob_get_clean();
}
add_shortcode('CTA_BN', 'tomas_cta_bn_shortcode');

// CTA_BN_ENショートコードの登録 （英語バナー）
function tomas_cta_bn_EN_shortcode() {
    ob_start();
    ?>
    <div class="cta-bn-wrapper">
        <a href="https://tomastc.com/en/contact/" target="_blank" rel="noopener">
            <img src="https://tomastc.com/wp-content/uploads/2025/05/EN_TOMAS-TECH_POPUPバナー.png" alt="Banner for Contact" class="cta-bn-image" />
        </a>
    </div>
    <style>
        .cta-bn-wrapper {
            max-width: 800px;
            margin: 40px auto;
            padding: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            border-radius: 8px;
            background-color: #fff;
            text-align: center;
        }

        .cta-bn-wrapper img.cta-bn-image {
            width: 100%;
            height: auto;
            display: block;
            margin: 0 auto;
        }
    </style>
    <?php
    return ob_get_clean();
}
add_shortcode('CTA_BN_EN', 'tomas_cta_bn_EN_shortcode');

// CTA_BN_ENショートコードの登録 （タイ語バナー）
function tomas_cta_bn_TH_shortcode() {
    ob_start();
    ?>
    <div class="cta-bn-wrapper">
        <a href="https://tomastc.com/th/contact/" target="_blank" rel="noopener">
            <img src="https://tomastc.com/wp-content/uploads/2025/06/TH_TOMAS-TECH_POPUPバナー.png" alt="Banner for Contact" class="cta-bn-image" />
        </a>
    </div>
    <style>
        .cta-bn-wrapper {
            max-width: 800px;
            margin: 40px auto;
            padding: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            border-radius: 8px;
            background-color: #fff;
            text-align: center;
        }

        .cta-bn-wrapper img.cta-bn-image {
            width: 100%;
            height: auto;
            display: block;
            margin: 0 auto;
        }
    </style>
    <?php
    return ob_get_clean();
}
add_shortcode('CTA_BN_TH', 'tomas_cta_bn_TH_shortcode');

//wp_head wp_footer
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'feed_links_extra', 3);

/* the_archive_title 余計な文字を削除 */
add_filter('get_the_archive_title', function ($title) {
        if (is_category()) {
                $title = single_cat_title('', false);
        } elseif (is_tag()) {
                $title = single_tag_title('', false);
        } elseif (is_tax()) {
                $title = single_term_title('', false);
        } elseif (is_post_type_archive()) {
                $title = post_type_archive_title('', false);
        } elseif (is_date()) {
                $title = get_the_time('Y年n月');
        } elseif (is_search()) {
                $title = '検索結果：' . esc_html(get_search_query(false));
        } elseif (is_404()) {
                $title = '「404」ページが見つかりません';
        } else {
        }
        return $title;
});

/*
//アイキャッチを有効に
*/
function setup_theme()
{
        add_theme_support('post-thumbnails');
        add_theme_support('align-wide');

}
add_action('after_setup_theme', 'setup_theme');

// アーカイブ表記に「年」を追加
function my_archives_link($html)
{
        if (preg_match('/[0-9]+?<\/a>/', $html))
                $html = preg_replace('/([0-9]+?)<\/a>/', '$1年</a>', $html);
        if (preg_match('/title=[\'\"][0-9]+?[\'\"]/', $html))
                $html = preg_replace('/(title=[\'\"][0-9]+?)([\'\"])/', '$1年$2', $html);
        return $html;
}
add_filter('get_archives_link', 'my_archives_link', 10);


//メニュー制御
function remove_menus()
{
        remove_menu_page('edit.php');

        if (current_user_can('editor')) {
                remove_menu_page('edit-comments.php');
                remove_menu_page('themes.php');
                remove_menu_page('plugins.php');
                remove_menu_page('tools.php');
                remove_menu_page('options-general.php');
                remove_menu_page('edit.php?post_type=acf-field-group');
                remove_menu_page('admin.php?page=ai1wm_export');
        }
}
add_action('admin_menu', 'remove_menus', 999);

//メニューバー制御
function remove_admin_bar_menus($wp_admin_bar)
{
        if (!(current_user_can('administrator'))) {
                $wp_admin_bar->remove_menu('user-info');
                $wp_admin_bar->remove_menu('edit-profile');
                $wp_admin_bar->remove_menu('comments');
                $wp_admin_bar->remove_menu('comments');
                $wp_admin_bar->remove_menu('new-content');
        }
}
add_action('admin_bar_menu', 'remove_admin_bar_menus', 999);




function myguten_enqueue()
{
        wp_enqueue_script('myguten-script', get_theme_file_uri('/assets/js/myguten.js'), array(), wp_get_theme()->get('Version'), array('strategy' => 'defer'));
}
add_action('enqueue_block_editor_assets', 'myguten_enqueue');

function myguten_stylesheet()
{
        wp_enqueue_style('mygute-style', get_theme_file_uri('/assets/css/myguten.css'));
}
add_action('enqueue_block_assets', 'myguten_stylesheet');

//固定ページ第二階層までナビ表示
function get_root_page($child_id, $root = true)
{
        if ($child_id == false) {
                return false;
        }
        while ($child_id) {
                $page = get_post($child_id);
                $result[] = $page;
                $child_id = $page->post_parent;
        }

        $result = array_reverse($result);

        if ($root == true) {
                $result = $result[0];
        }
        return $result;
}




//メインループカスタム
function custom_query($query)
{
        if (is_admin() || !$query->is_main_query()) {
                return;
        }
        if (($query->is_post_type_archive('case-study') && $query->is_archive() || $query->is_tax('case-study_cat'))) {
                $query->set('posts_per_page', '8');
                $query->set('order', 'DESC');
                return;
        }
        if (($query->is_post_type_archive('case-study-en') && $query->is_archive() || $query->is_tax('case-study-en_cat'))) {
                $query->set('posts_per_page', '8');
                $query->set('order', 'DESC');
                return;
        }
        if (($query->is_post_type_archive('case-study-th') && $query->is_archive() || $query->is_tax('case-study-th_cat'))) {
                $query->set('posts_per_page', '8');
                $query->set('order', 'DESC');
                return;
        }


        if (($query->is_post_type_archive('blog') && $query->is_archive() || $query->is_tax('blog_cat'))) {
                $query->set('posts_per_page', '12');
                $query->set('order', 'DESC');
                return;
        }
        if (($query->is_post_type_archive('blog-en') && $query->is_archive() || $query->is_tax('blog-en_cat'))) {
                $query->set('posts_per_page', '12');
                $query->set('order', 'DESC');
                return;
        }
        if (($query->is_post_type_archive('blog-th') && $query->is_archive() || $query->is_tax('blog-th_cat'))) {
                $query->set('posts_per_page', '12');
                $query->set('order', 'DESC');
                return;
        }
        
        if (($query->is_post_type_archive('pr') && $query->is_archive() || $query->is_tax('pr_cat'))) {
                $query->set('posts_per_page', '12');
                $query->set('order', 'DESC');
                return;
        }
        if (($query->is_post_type_archive('pr-en') && $query->is_archive() || $query->is_tax('pr-en_cat'))) {
                $query->set('posts_per_page', '12');
                $query->set('order', 'DESC');
                return;
        }
        if (($query->is_post_type_archive('pr-th') && $query->is_archive() || $query->is_tax('pr-th_cat'))) {
                $query->set('posts_per_page', '12');
                $query->set('order', 'DESC');
                return;
        }

        if (($query->is_post_type_archive('seminar') && $query->is_archive() || $query->is_tax('seminar_cat'))) {
                $query->set('posts_per_page', '12');
                $query->set('order', 'DESC');
                return;
        }
        if (($query->is_post_type_archive('seminar-en') && $query->is_archive() || $query->is_tax('seminar-en_cat'))) {
                $query->set('posts_per_page', '12');
                $query->set('order', 'DESC');
                return;
        }
        if (($query->is_post_type_archive('seminar-th') && $query->is_archive() || $query->is_tax('seminar-th_cat'))) {
                $query->set('posts_per_page', '12');
                $query->set('order', 'DESC');
                return;
        }

        if (($query->is_post_type_archive('solution') && $query->is_archive() || $query->is_tax('solution_cat') || $query->is_tax('solution_challenges'))) {
                $query->set('posts_per_page', '16');
                $query->set('order', 'DESC');
                return;
        }
        if (($query->is_post_type_archive('solution-en') && $query->is_archive() || $query->is_tax('solution-en_cat') || $query->is_tax('solution-en_challenges'))) {
                $query->set('posts_per_page', '16');
                $query->set('order', 'DESC');
                return;
        }
        if (($query->is_post_type_archive('solution-th') && $query->is_archive() || $query->is_tax('solution-th_cat') || $query->is_tax('solution-th_challenges'))) {
                $query->set('posts_per_page', '16');
                $query->set('order', 'DESC');
                return;
        }

if (($query->is_post_type_archive('download-partner') && $query->is_archive() || $query->is_tax('download-partner_cat') || $query->is_tax('download-partner_lang'))) {
                $query->set('posts_per_page', '16');
                $query->set('order', 'DESC');
                return;
        }
if (($query->is_post_type_archive('download-partner-en') && $query->is_archive() || $query->is_tax('download-partner-en_cat') || $query->is_tax('download-partner-en_lang'))) {
        $query->set('posts_per_page', '16');
        $query->set('order', 'DESC');
        return;
}

if (($query->is_post_type_archive('download-partner-th') && $query->is_archive() || $query->is_tax('download-partner-th_cat') || $query->is_tax('download-partner-th_lang'))) {
        $query->set('posts_per_page', '16');
        $query->set('order', 'DESC');
        return;
}
        if (($query->is_post_type_archive('document') && $query->is_archive() || $query->is_tax('document_cat') || $query->is_tax('document_lang'))) {
                $query->set('posts_per_page', '16');
                $query->set('order', 'DESC');
                return;
        }
        if (($query->is_post_type_archive('document-en') && $query->is_archive() || $query->is_tax('document-en_cat') || $query->is_tax('document-en_lang'))) {
                $query->set('posts_per_page', '16');
                $query->set('order', 'DESC');
                return;
        }
        if (($query->is_post_type_archive('document-th') && $query->is_archive() || $query->is_tax('document-th_cat') || $query->is_tax('document-th_lang'))) {
                $query->set('posts_per_page', '16');
                $query->set('order', 'DESC');
                return;
        }
}
add_action('pre_get_posts', 'custom_query');


/*
//カスタム投稿タイプ
*/
add_action('init', 'my_custom_init');
function my_custom_init()
{
        $labels = array(
                'name' => _x('導入事例 - 日本語', 'post type general name'),
                'add_new' => _x('新規追加', 'case-study'),
                'add_new_item' => __('投稿を登録'),
                'edit_item' => __('投稿を編集'),
                'new_item' => __('新しい投稿'),
                'view_item' => __('投稿を見る'),
                'search_items' => __('投稿を探す'),
                'not_found' =>  __('投稿はありません'),
                'not_found_in_trash' => __('ゴミ箱に投稿はありません'),
                'parent_item_colon' => ''
        );
        $args = array(
                'labels' => $labels,
                'supports' => array(
                        'title',
                        'editor',
                        // 'excerpt',
                        'thumbnail',
                        'author',
                        // 'page-attributes',
                        'revisions'
                ),
                'public' => true,
                'publicly_queryable' => true,
                'show_ui' => true,
                'query_var' => true,
                'rewrite' => array(
                        'slug' => 'case-study',
                        'with_front' => false
                ),
                'capability_type' => 'post',
                'hierarchical' => false,
                'menu_position' => 5,
                'has_archive' => true,
                'show_in_rest' => true,
        );
        register_post_type('case-study', $args);
        register_taxonomy(
                'case-study_challenges', /* タクソノミー名 */
                'case-study', /* 該当カスタム投稿 */
                array(
                        'hierarchical' => true, /* 親子関係が必要なければ false */
                        'update_count_callback' => '_update_post_term_count',
                        'label' => '導入事例課題（日）',
                        'public' => true,
                        'show_ui' => true,
                        'show_in_rest' => true,
                )
        );
        register_taxonomy(
                'case-study_cat', /* タクソノミー名 */
                'case-study', /* 該当カスタム投稿 */
                array(
                        'hierarchical' => true, /* 親子関係が必要なければ false */
                        'update_count_callback' => '_update_post_term_count',
                        'label' => '導入事例カテゴリー（日）',
                        'public' => true,
                        'show_ui' => true,
                        'show_in_rest' => true,
                )
        );

        $labels = array(
                'name' => _x('導入事例 - 英語', 'post type general name'),
                'add_new' => _x('新規追加', 'case-study-en'),
                'add_new_item' => __('投稿を登録'),
                'edit_item' => __('投稿を編集'),
                'new_item' => __('新しい投稿'),
                'view_item' => __('投稿を見る'),
                'search_items' => __('投稿を探す'),
                'not_found' =>  __('投稿はありません'),
                'not_found_in_trash' => __('ゴミ箱に投稿はありません'),
                'parent_item_colon' => ''
        );
        $args = array(
                'labels' => $labels,
                'supports' => array(
                        'title',
                        'editor',
                        // 'excerpt',
                        'thumbnail',
                        'author',
                        // 'page-attributes',
                        'revisions'
                ),
                'public' => true,
                'publicly_queryable' => true,
                'show_ui' => true,
                'query_var' => true,
                'rewrite' => array(
                        'slug' => 'en/case-study',
                        'with_front' => false
                ),
                'capability_type' => 'post',
                'hierarchical' => false,
                'menu_position' => 5,
                'has_archive' => true,
                'show_in_rest' => true,
        );
        register_post_type('case-study-en', $args);
        register_taxonomy(
                'case-study-en_challenges', /* タクソノミー名 */
                'case-study-en', /* 該当カスタム投稿 */
                array(
                        'hierarchical' => true, /* 親子関係が必要なければ false */
                        'update_count_callback' => '_update_post_term_count',
                        'label' => '導入事例課題（英）',
                        'public' => true,
                        'show_ui' => true,
                        'show_in_rest' => true,
                )
        );
        register_taxonomy(
                'case-study-en_cat', /* タクソノミー名 */
                'case-study-en', /* 該当カスタム投稿 */
                array(
                        'hierarchical' => true, /* 親子関係が必要なければ false */
                        'update_count_callback' => '_update_post_term_count',
                        'label' => '導入事例カテゴリー（英）',
                        'public' => true,
                        'show_ui' => true,
                        'show_in_rest' => true,
                )
        );

        $labels = array(
                'name' => _x('導入事例 - タイ語', 'post type general name'),
                'add_new' => _x('新規追加', 'case-study-th'),
                'add_new_item' => __('投稿を登録'),
                'edit_item' => __('投稿を編集'),
                'new_item' => __('新しい投稿'),
                'view_item' => __('投稿を見る'),
                'search_items' => __('投稿を探す'),
                'not_found' =>  __('投稿はありません'),
                'not_found_in_trash' => __('ゴミ箱に投稿はありません'),
                'parent_item_colon' => ''
        );
        $args = array(
                'labels' => $labels,
                'supports' => array(
                        'title',
                        'editor',
                        // 'excerpt',
                        'thumbnail',
                        'author',
                        // 'page-attributes',
                        'revisions'
                ),
                'public' => true,
                'publicly_queryable' => true,
                'show_ui' => true,
                'query_var' => true,
                'rewrite' => array(
                        'slug' => 'th/case-study',
                        'with_front' => false
                ),
                'capability_type' => 'post',
                'hierarchical' => false,
                'menu_position' => 5,
                'has_archive' => true,
                'show_in_rest' => true,
        );
        register_post_type('case-study-th', $args);
        register_taxonomy(
                'case-study-th_challenges', /* タクソノミー名 */
                'case-study-th', /* 該当カスタム投稿 */
                array(
                        'hierarchical' => true, /* 親子関係が必要なければ false */
                        'update_count_callback' => '_update_post_term_count',
                        'label' => '導入事例課題（タイ）',
                        'public' => true,
                        'show_ui' => true,
                        'show_in_rest' => true,
                )
        );
        register_taxonomy(
                'case-study-th_cat', /* タクソノミー名 */
                'case-study-th', /* 該当カスタム投稿 */
                array(
                        'hierarchical' => true, /* 親子関係が必要なければ false */
                        'update_count_callback' => '_update_post_term_count',
                        'label' => '導入事例カテゴリー（タイ）',
                        'public' => true,
                        'show_ui' => true,
                        'show_in_rest' => true,
                )
        );

        $labels = array(
                'name' => _x('ソリューション - 日本語', 'post type general name'),
                'add_new' => _x('新規追加', 'solution'),
                'add_new_item' => __('投稿を登録'),
                'edit_item' => __('投稿を編集'),
                'new_item' => __('新しい投稿'),
                'view_item' => __('投稿を見る'),
                'search_items' => __('投稿を探す'),
                'not_found' =>  __('投稿はありません'),
                'not_found_in_trash' => __('ゴミ箱に投稿はありません'),
                'parent_item_colon' => ''
        );
        $args = array(
                'labels' => $labels,
                'supports' => array(
                        'title',
                        'editor',
                        // 'excerpt',
                        'thumbnail',
                        'author',
                        // 'page-attributes',
                        'revisions'
                ),
                'public' => true,
                'publicly_queryable' => true,
                'show_ui' => true,
                'query_var' => true,
                'rewrite' => array(
                        'slug' => 'solution',
                        'with_front' => false
                ),
                'capability_type' => 'post',
                'hierarchical' => false,
                'menu_position' => 5,
                'has_archive' => true,
                'show_in_rest' => true,
        );
        register_post_type('solution', $args);
        register_taxonomy(
                'solution_challenges', /* タクソノミー名 */
                'solution', /* 該当カスタム投稿 */
                array(
                        'hierarchical' => true, /* 親子関係が必要なければ false */
                        'update_count_callback' => '_update_post_term_count',
                        'label' => 'ソリューション課題（日）',
                        'public' => true,
                        'show_ui' => true,
                        'show_in_rest' => true,
                )
        );
        register_taxonomy(
                'solution_cat', /* タクソノミー名 */
                'solution', /* 該当カスタム投稿 */
                array(
                        'hierarchical' => true, /* 親子関係が必要なければ false */
                        'update_count_callback' => '_update_post_term_count',
                        'label' => 'ソリューションカテゴリー（日）',
                        'public' => true,
                        'show_ui' => true,
                        'show_in_rest' => true,
                )
        );
        register_taxonomy(
                'solution_territory', /* タクソノミー名 */
                'solution', /* 該当カスタム投稿 */
                array(
                        'hierarchical' => true, /* 親子関係が必要なければ false */
                        'update_count_callback' => '_update_post_term_count',
                        'label' => 'ソリューション領域（日）',
                        'public' => true,
                        'show_ui' => true,
                        'show_in_rest' => true,
                )
        );

        $labels = array(
                'name' => _x('ソリューション - 英語', 'post type general name'),
                'add_new' => _x('新規追加', 'solution-en'),
                'add_new_item' => __('投稿を登録'),
                'edit_item' => __('投稿を編集'),
                'new_item' => __('新しい投稿'),
                'view_item' => __('投稿を見る'),
                'search_items' => __('投稿を探す'),
                'not_found' =>  __('投稿はありません'),
                'not_found_in_trash' => __('ゴミ箱に投稿はありません'),
                'parent_item_colon' => ''
        );
        $args = array(
                'labels' => $labels,
                'supports' => array(
                        'title',
                        'editor',
                        // 'excerpt',
                        'thumbnail',
                        'author',
                        // 'page-attributes',
                        'revisions'
                ),
                'public' => true,
                'publicly_queryable' => true,
                'show_ui' => true,
                'query_var' => true,
                'rewrite' => array(
                        'slug' => 'en/solution',
                        'with_front' => false
                ),
                'capability_type' => 'post',
                'hierarchical' => false,
                'menu_position' => 5,
                'has_archive' => true,
                'show_in_rest' => true,
        );
        register_post_type('solution-en', $args);
        register_taxonomy(
                'solution-en_challenges', /* タクソノミー名 */
                'solution-en', /* 該当カスタム投稿 */
                array(
                        'hierarchical' => true, /* 親子関係が必要なければ false */
                        'update_count_callback' => '_update_post_term_count',
                        'label' => 'ソリューション課題（英）',
                        'public' => true,
                        'show_ui' => true,
                        'show_in_rest' => true,
                )
        );
        register_taxonomy(
                'solution-en_cat', /* タクソノミー名 */
                'solution-en', /* 該当カスタム投稿 */
                array(
                        'hierarchical' => true, /* 親子関係が必要なければ false */
                        'update_count_callback' => '_update_post_term_count',
                        'label' => 'ソリューションカテゴリー（英）',
                        'public' => true,
                        'show_ui' => true,
                        'show_in_rest' => true,
                )
        );
        register_taxonomy(
                'solution-en_territory', /* タクソノミー名 */
                'solution-en', /* 該当カスタム投稿 */
                array(
                        'hierarchical' => true, /* 親子関係が必要なければ false */
                        'update_count_callback' => '_update_post_term_count',
                        'label' => 'ソリューション領域（英）',
                        'public' => true,
                        'show_ui' => true,
                        'show_in_rest' => true,
                )
        );

        $labels = array(
                'name' => _x('ソリューション - タイ語', 'post type general name'),
                'add_new' => _x('新規追加', 'solution-th'),
                'add_new_item' => __('投稿を登録'),
                'edit_item' => __('投稿を編集'),
                'new_item' => __('新しい投稿'),
                'view_item' => __('投稿を見る'),
                'search_items' => __('投稿を探す'),
                'not_found' =>  __('投稿はありません'),
                'not_found_in_trash' => __('ゴミ箱に投稿はありません'),
                'parent_item_colon' => ''
        );
        $args = array(
                'labels' => $labels,
                'supports' => array(
                        'title',
                        'editor',
                        // 'excerpt',
                        'thumbnail',
                        'author',
                        // 'page-attributes',
                        'revisions'
                ),
                'public' => true,
                'publicly_queryable' => true,
                'show_ui' => true,
                'query_var' => true,
                'rewrite' => array(
                        'slug' => 'th/solution',
                        'with_front' => false
                ),
                'capability_type' => 'post',
                'hierarchical' => false,
                'menu_position' => 5,
                'has_archive' => true,
                'show_in_rest' => true,
        );
        register_post_type('solution-th', $args);
        register_taxonomy(
                'solution-th_challenges', /* タクソノミー名 */
                'solution-th', /* 該当カスタム投稿 */
                array(
                        'hierarchical' => true, /* 親子関係が必要なければ false */
                        'update_count_callback' => '_update_post_term_count',
                        'label' => 'ソリューション課題（タイ）',
                        'public' => true,
                        'show_ui' => true,
                        'show_in_rest' => true,
                )
        );
        register_taxonomy(
                'solution-th_cat', /* タクソノミー名 */
                'solution-th', /* 該当カスタム投稿 */
                array(
                        'hierarchical' => true, /* 親子関係が必要なければ false */
                        'update_count_callback' => '_update_post_term_count',
                        'label' => 'ソリューションカテゴリー（タイ）',
                        'public' => true,
                        'show_ui' => true,
                        'show_in_rest' => true,
                )
        );
        register_taxonomy(
                'solution-th_territory', /* タクソノミー名 */
                'solution-th', /* 該当カスタム投稿 */
                array(
                        'hierarchical' => true, /* 親子関係が必要なければ false */
                        'update_count_callback' => '_update_post_term_count',
                        'label' => 'ソリューション領域（タイ）',
                        'public' => true,
                        'show_ui' => true,
                        'show_in_rest' => true,
                )
        );
        // 資料請求
        $labels = array(
                'name' => _x('資料請求 - 日本語', 'post type general name'),
                'add_new' => _x('新規追加', 'document'),
                'add_new_item' => __('投稿を登録'),
                'edit_item' => __('投稿を編集'),
                'new_item' => __('新しい投稿'),
                'view_item' => __('投稿を見る'),
                'search_items' => __('投稿を探す'),
                'not_found' =>  __('投稿はありません'),
                'not_found_in_trash' => __('ゴミ箱に投稿はありません'),
                'parent_item_colon' => ''
        );
        $args = array(
                'labels' => $labels,
                'supports' => array(
                        'title',
                        'editor',
                        // 'excerpt',
                        'thumbnail',
                        'author',
                        // 'page-attributes',
                        'revisions'
                ),
                'public' => true,
                'publicly_queryable' => true,
                'show_ui' => true,
                'query_var' => true,
                'rewrite' => array(
                        'slug' => 'document',
                        'with_front' => false
                ),
                'capability_type' => 'post',
                'hierarchical' => false,
                'menu_position' => 5,
                'has_archive' => true,
                'show_in_rest' => true,
        );
        register_post_type('document', $args);
        register_taxonomy(
                'document_cat', /* タクソノミー名 */
                'document', /* 該当カスタム投稿 */
                array(
                        'hierarchical' => true, /* 親子関係が必要なければ false */
                        'update_count_callback' => '_update_post_term_count',
                        'label' => '資料請求カテゴリー（日）',
                        'public' => true,
                        'show_ui' => true,
                        'show_in_rest' => true,
                )
        );
        register_taxonomy(
                'document_lang', /* タクソノミー名 */
                'document', /* 該当カスタム投稿 */
                array(
                        'hierarchical' => true, /* 親子関係が必要なければ false */
                        'update_count_callback' => '_update_post_term_count',
                        'label' => '資料請求言語（日）',
                        'public' => true,
                        'show_ui' => true,
                        'show_in_rest' => true,
                )
        );
        $labels = array(
                'name' => _x('資料請求 - 英語', 'post type general name'),
                'add_new' => _x('新規追加', 'document-en'),
                'add_new_item' => __('投稿を登録'),
                'edit_item' => __('投稿を編集'),
                'new_item' => __('新しい投稿'),
                'view_item' => __('投稿を見る'),
                'search_items' => __('投稿を探す'),
                'not_found' =>  __('投稿はありません'),
                'not_found_in_trash' => __('ゴミ箱に投稿はありません'),
                'parent_item_colon' => ''
        );
        $args = array(
                'labels' => $labels,
                'supports' => array(
                        'title',
                        'editor',
                        // 'excerpt',
                        'thumbnail',
                        'author',
                        // 'page-attributes',
                        'revisions'
                ),
                'public' => true,
                'publicly_queryable' => true,
                'show_ui' => true,
                'query_var' => true,
                'rewrite' => array(
                        'slug' => 'en/document',
                        'with_front' => false
                ),
                'capability_type' => 'post',
                'hierarchical' => false,
                'menu_position' => 5,
                'has_archive' => true,
                'show_in_rest' => true,
        );
        register_post_type('document-en', $args);
        register_taxonomy(
                'document-en_cat', /* タクソノミー名 */
                'document-en', /* 該当カスタム投稿 */
                array(
                        'hierarchical' => true, /* 親子関係が必要なければ false */
                        'update_count_callback' => '_update_post_term_count',
                        'label' => '資料請求カテゴリー（英）',
                        'public' => true,
                        'show_ui' => true,
                        'show_in_rest' => true,
                )
        );
        register_taxonomy(
                'document-en_lang', /* タクソノミー名 */
                'document-en', /* 該当カスタム投稿 */
                array(
                        'hierarchical' => true, /* 親子関係が必要なければ false */
                        'update_count_callback' => '_update_post_term_count',
                        'label' => '資料請求言語（英）',
                        'public' => true,
                        'show_ui' => true,
                        'show_in_rest' => true,
                )
        );

        $labels = array(
                'name' => _x('資料請求 - タイ語', 'post type general name'),
                'add_new' => _x('新規追加', 'document-th'),
                'add_new_item' => __('投稿を登録'),
                'edit_item' => __('投稿を編集'),
                'new_item' => __('新しい投稿'),
                'view_item' => __('投稿を見る'),
                'search_items' => __('投稿を探す'),
                'not_found' =>  __('投稿はありません'),
                'not_found_in_trash' => __('ゴミ箱に投稿はありません'),
                'parent_item_colon' => ''
        );
        $args = array(
                'labels' => $labels,
                'supports' => array(
                        'title',
                        'editor',
                        // 'excerpt',
                        'thumbnail',
                        'author',
                        // 'page-attributes',
                        'revisions'
                ),
                'public' => true,
                'publicly_queryable' => true,
                'show_ui' => true,
                'query_var' => true,
                'rewrite' => array(
                        'slug' => 'th/document',
                        'with_front' => false
                ),
                'capability_type' => 'post',
                'hierarchical' => false,
                'menu_position' => 5,
                'has_archive' => true,
                'show_in_rest' => true,
        );
        register_post_type('document-th', $args);
        register_taxonomy(
                'document-th_cat', /* タクソノミー名 */
                'document-th', /* 該当カスタム投稿 */
                array(
                        'hierarchical' => true, /* 親子関係が必要なければ false */
                        'update_count_callback' => '_update_post_term_count',
                        'label' => '資料請求カテゴリー（タイ）',
                        'public' => true,
                        'show_ui' => true,
                        'show_in_rest' => true,
                )
        );
        register_taxonomy(
                'document-th_lang', /* タクソノミー名 */
                'document-th', /* 該当カスタム投稿 */
                array(
                        'hierarchical' => true, /* 親子関係が必要なければ false */
                        'update_count_callback' => '_update_post_term_count',
                        'label' => '資料請求言語（タイ）',
                        'public' => true,
                        'show_ui' => true,
                        'show_in_rest' => true,
                )
        );



        $labels = array(
                'name' => _x('ブログ - 日本語', 'post type general name'),
                'add_new' => _x('新規追加', 'blog'),
                'add_new_item' => __('投稿を登録'),
                'edit_item' => __('投稿を編集'),
                'new_item' => __('新しい投稿'),
                'view_item' => __('投稿を見る'),
                'search_items' => __('投稿を探す'),
                'not_found' =>  __('投稿はありません'),
                'not_found_in_trash' => __('ゴミ箱に投稿はありません'),
                'parent_item_colon' => ''
        );
        $args = array(
                'labels' => $labels,
                'supports' => array(
                        'title',
                        'editor',
                        // 'excerpt',
                        'thumbnail',
                        'author',
                        // 'page-attributes',
                        'revisions'
                ),
                'public' => true,
                'publicly_queryable' => true,
                'show_ui' => true,
                'query_var' => true,
                'rewrite' => array(
                        'slug' => 'blog',
                        'with_front' => false
                ),
                'capability_type' => 'post',
                'hierarchical' => false,
                'menu_position' => 5,
                'has_archive' => true,
                'show_in_rest' => true,
        );
        register_post_type('blog', $args);
        register_taxonomy(
                'blog_cat', /* タクソノミー名 */
                'blog', /* 該当カスタム投稿 */
                array(
                        'hierarchical' => true, /* 親子関係が必要なければ false */
                        'update_count_callback' => '_update_post_term_count',
                        'label' => 'ブログカテゴリー（日）',
                        'public' => true,
                        'show_ui' => true,
                        'show_in_rest' => true,
                )
        );

        $labels = array(
                'name' => _x('ブログ - 英語', 'post type general name'),
                'add_new' => _x('新規追加', 'blog-en'),
                'add_new_item' => __('投稿を登録'),
                'edit_item' => __('投稿を編集'),
                'new_item' => __('新しい投稿'),
                'view_item' => __('投稿を見る'),
                'search_items' => __('投稿を探す'),
                'not_found' =>  __('投稿はありません'),
                'not_found_in_trash' => __('ゴミ箱に投稿はありません'),
                'parent_item_colon' => ''
        );
        $args = array(
                'labels' => $labels,
                'supports' => array(
                        'title',
                        'editor',
                        // 'excerpt',
                        'thumbnail',
                        'author',
                        // 'page-attributes',
                        'revisions'
                ),
                'public' => true,
                'publicly_queryable' => true,
                'show_ui' => true,
                'query_var' => true,
                'rewrite' => array(
                        'slug' => 'en/blog',
                        'with_front' => false
                ),
                'capability_type' => 'post',
                'hierarchical' => false,
                'menu_position' => 5,
                'has_archive' => true,
                'show_in_rest' => true,
        );
        register_post_type('blog-en', $args);
        register_taxonomy(
                'blog-en_cat', /* タクソノミー名 */
                'blog-en', /* 該当カスタム投稿 */
                array(
                        'hierarchical' => true, /* 親子関係が必要なければ false */
                        'update_count_callback' => '_update_post_term_count',
                        'label' => 'ブログカテゴリー（英）',
                        'public' => true,
                        'show_ui' => true,
                        'show_in_rest' => true,
                )
        );

        $labels = array(
                'name' => _x('ブログ - タイ語', 'post type general name'),
                'add_new' => _x('新規追加', 'blog-th'),
                'add_new_item' => __('投稿を登録'),
                'edit_item' => __('投稿を編集'),
                'new_item' => __('新しい投稿'),
                'view_item' => __('投稿を見る'),
                'search_items' => __('投稿を探す'),
                'not_found' =>  __('投稿はありません'),
                'not_found_in_trash' => __('ゴミ箱に投稿はありません'),
                'parent_item_colon' => ''
        );
        $args = array(
                'labels' => $labels,
                'supports' => array(
                        'title',
                        'editor',
                        // 'excerpt',
                        'thumbnail',
                        'author',
                        // 'page-attributes',
                        'revisions'
                ),
                'public' => true,
                'publicly_queryable' => true,
                'show_ui' => true,
                'query_var' => true,
                'rewrite' => array(
                        'slug' => 'th/blog',
                        'with_front' => false
                ),
                'capability_type' => 'post',
                'hierarchical' => false,
                'menu_position' => 5,
                'has_archive' => true,
                'show_in_rest' => true,
        );
        register_post_type('blog-th', $args);
        register_taxonomy(
                'blog-th_cat', /* タクソノミー名 */
                'blog-th', /* 該当カスタム投稿 */
                array(
                        'hierarchical' => true, /* 親子関係が必要なければ false */
                        'update_count_callback' => '_update_post_term_count',
                        'label' => 'ブログカテゴリー（タイ）',
                        'public' => true,
                        'show_ui' => true,
                        'show_in_rest' => true,
                )
        );

        $labels = array(
                'name' => _x('セミナー - 日本語', 'post type general name'),
                'add_new' => _x('新規追加', 'seminar'),
                'add_new_item' => __('投稿を登録'),
                'edit_item' => __('投稿を編集'),
                'new_item' => __('新しい投稿'),
                'view_item' => __('投稿を見る'),
                'search_items' => __('投稿を探す'),
                'not_found' =>  __('投稿はありません'),
                'not_found_in_trash' => __('ゴミ箱に投稿はありません'),
                'parent_item_colon' => ''
        );
        $args = array(
                'labels' => $labels,
                'supports' => array(
                        'title',
                        'editor',
                        // 'excerpt',
                        'thumbnail',
                        'author',
                        // 'page-attributes',
                        'revisions'
                ),
                'public' => true,
                'publicly_queryable' => true,
                'show_ui' => true,
                'query_var' => true,
                'rewrite' => array(
                        'slug' => 'seminar',
                        'with_front' => false
                ),
                'capability_type' => 'post',
                'hierarchical' => false,
                'menu_position' => 5,
                'has_archive' => true,
                'show_in_rest' => true,
        );
        register_post_type('seminar', $args);
        register_taxonomy(
                'seminar_cat', /* タクソノミー名 */
                'seminar', /* 該当カスタム投稿 */
                array(
                        'hierarchical' => true, /* 親子関係が必要なければ false */
                        'update_count_callback' => '_update_post_term_count',
                        'label' => 'セミナーカテゴリー（日）',
                        'public' => true,
                        'show_ui' => true,
                        'show_in_rest' => true,
                )
        );

        $labels = array(
                'name' => _x('セミナー - 英語', 'post type general name'),
                'add_new' => _x('新規追加', 'seminar-en'),
                'add_new_item' => __('投稿を登録'),
                'edit_item' => __('投稿を編集'),
                'new_item' => __('新しい投稿'),
                'view_item' => __('投稿を見る'),
                'search_items' => __('投稿を探す'),
                'not_found' =>  __('投稿はありません'),
                'not_found_in_trash' => __('ゴミ箱に投稿はありません'),
                'parent_item_colon' => ''
        );
        $args = array(
                'labels' => $labels,
                'supports' => array(
                        'title',
                        'editor',
                        // 'excerpt',
                        'thumbnail',
                        'author',
                        // 'page-attributes',
                        'revisions'
                ),
                'public' => true,
                'publicly_queryable' => true,
                'show_ui' => true,
                'query_var' => true,
                'rewrite' => array(
                        'slug' => 'en/seminar',
                        'with_front' => false
                ),
                'capability_type' => 'post',
                'hierarchical' => false,
                'menu_position' => 5,
                'has_archive' => true,
                'show_in_rest' => true,
        );
        register_post_type('seminar-en', $args);
        register_taxonomy(
                'seminar-en_cat', /* タクソノミー名 */
                'seminar-en', /* 該当カスタム投稿 */
                array(
                        'hierarchical' => true, /* 親子関係が必要なければ false */
                        'update_count_callback' => '_update_post_term_count',
                        'label' => 'セミナーカテゴリー（英）',
                        'public' => true,
                        'show_ui' => true,
                        'show_in_rest' => true,
                )
        );

        $labels = array(
                'name' => _x('セミナー - タイ語', 'post type general name'),
                'add_new' => _x('新規追加', 'seminar-th'),
                'add_new_item' => __('投稿を登録'),
                'edit_item' => __('投稿を編集'),
                'new_item' => __('新しい投稿'),
                'view_item' => __('投稿を見る'),
                'search_items' => __('投稿を探す'),
                'not_found' =>  __('投稿はありません'),
                'not_found_in_trash' => __('ゴミ箱に投稿はありません'),
                'parent_item_colon' => ''
        );
        $args = array(
                'labels' => $labels,
                'supports' => array(
                        'title',
                        'editor',
                        // 'excerpt',
                        'thumbnail',
                        'author',
                        // 'page-attributes',
                        'revisions'
                ),
                'public' => true,
                'publicly_queryable' => true,
                'show_ui' => true,
                'query_var' => true,
                'rewrite' => array(
                        'slug' => 'th/seminar',
                        'with_front' => false
                ),
                'capability_type' => 'post',
                'hierarchical' => false,
                'menu_position' => 5,
                'has_archive' => true,
                'show_in_rest' => true,
        );
        register_post_type('seminar-th', $args);
        register_taxonomy(
                'seminar-th_cat', /* タクソノミー名 */
                'seminar-th', /* 該当カスタム投稿 */
                array(
                        'hierarchical' => true, /* 親子関係が必要なければ false */
                        'update_count_callback' => '_update_post_term_count',
                        'label' => 'セミナーカテゴリー（タイ）',
                        'public' => true,
                        'show_ui' => true,
                        'show_in_rest' => true,
                )
        );
        // PRカスタム投稿タイプとタクソノミーの追加

// PRカスタム投稿タイプ（日本語）
$labels = array(
        'name' => _x('PR - 日本語', 'post type general name'),
    'add_new' => _x('新規追加', 'pr'),
    'add_new_item' => __('投稿を登録'),
    'edit_item' => __('投稿を編集'),
    'new_item' => __('新しい投稿'),
    'view_item' => __('投稿を見る'),
    'search_items' => __('投稿を探す'),
    'not_found' =>  __('投稿はありません'),
    'not_found_in_trash' => __('ゴミ箱に投稿はありません'),
    'parent_item_colon' => ''
    );

$args = array(
    'labels' => $labels,
    'supports' => array(
        'title',
        'editor',
        // 'excerpt',
        'thumbnail',
        'author',
        // 'page-attributes',
        'revisions'
    ),
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'query_var' => true,
    'rewrite' => array(
        'slug' => 'pr',
        'with_front' => false
    ),
    'capability_type' => 'post',
    'hierarchical' => false,
    'menu_position' => 5,
    'has_archive' => true,
    'show_in_rest' => true,
    );
register_post_type('pr', $args);

// PRカテゴリータクソノミー
register_taxonomy(
        'pr_cat', /* タクソノミー名 */
        'pr', /* 該当カスタム投稿 */
        array(
            'hierarchical' => true, /* 親子関係が必要なければ false */
            'update_count_callback' => '_update_post_term_count',
            'label' => 'PRカテゴリー（日）',
            'public' => true,
            'show_ui' => true,
            'show_in_rest' => true,
        )
);

// PRカスタム投稿タイプ（英語）
$labels = array(
        'name' => _x('PR - 英語', 'post type general name'),
        'add_new' => _x('新規追加', 'pr-en'),
        'add_new_item' => __('投稿を登録'),
        'edit_item' => __('投稿を編集'),
        'new_item' => __('新しい投稿'),
        'view_item' => __('投稿を見る'),
        'search_items' => __('投稿を探す'),
        'not_found' =>  __('投稿はありません'),
        'not_found_in_trash' => __('ゴミ箱に投稿はありません'),
        'parent_item_colon' => ''
    );


$args = array(
       'labels' => $labels,
        'supports' => array(
            'title',
            'editor',
            // 'excerpt',
            'thumbnail',
            'author',
            // 'page-attributes',
            'revisions'
        ),
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => array(
            'slug' => 'en/pr',
            'with_front' => false
        ),
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => 5,
        'has_archive' => true,
        'show_in_rest' => true,
    );
register_post_type('pr-en', $args);

// PR英語カテゴリータクソノミー
register_taxonomy(
        'pr-en_cat', /* タクソノミー名 */
        'pr-en', /* 該当カスタム投稿 */
        array(
            'hierarchical' => true, /* 親子関係が必要なければ false */
            'update_count_callback' => '_update_post_term_count',
            'label' => 'PRカテゴリー（英）',
            'public' => true,
            'show_ui' => true,
            'show_in_rest' => true,
        )
);

// PRカスタム投稿タイプ（タイ語）
$labels = array(
        'name' => _x('PR - タイ語', 'post type general name'),
        'add_new' => _x('新規追加', 'pr-th'),
        'add_new_item' => __('投稿を登録'),
        'edit_item' => __('投稿を編集'),
        'new_item' => __('新しい投稿'),
        'view_item' => __('投稿を見る'),
        'search_items' => __('投稿を探す'),
        'not_found' =>  __('投稿はありません'),
        'not_found_in_trash' => __('ゴミ箱に投稿はありません'),
        'parent_item_colon' => ''
    );

$args = array(
        'labels' => $labels,
        'supports' => array(
            'title',
            'editor',
            // 'excerpt',
            'thumbnail',
            'author',
            // 'page-attributes',
            'revisions'
        ),
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => array(
            'slug' => 'th/pr',
            'with_front' => false
        ),
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => 5,
        'has_archive' => true,
        'show_in_rest' => true,
    );
register_post_type('pr-th', $args);

// PRタイ語カテゴリータクソノミー
register_taxonomy(
        'pr-th_cat', /* タクソノミー名 */
        'pr-th', /* 該当カスタム投稿 */
        array(
           'hierarchical' => true, /* 親子関係が必要なければ false */
            'update_count_callback' => '_update_post_term_count',
            'label' => 'PRカテゴリー（タイ）',
            'public' => true,
            'show_ui' => true,
            'show_in_rest' => true,
        )
);

//ダウンロードパートナー

$labels = array(
                'name' => _x('ダウンロードパートナー - 日本語', 'post type general name'),
                'add_new' => _x('新規追加', 'download-partner'),
                'add_new_item' => __('投稿を登録'),
                'edit_item' => __('投稿を編集'),
                'new_item' => __('新しい投稿'),
                'view_item' => __('投稿を見る'),
                'search_items' => __('投稿を探す'),
                'not_found' =>  __('投稿はありません'),
                'not_found_in_trash' => __('ゴミ箱に投稿はありません'),
                'parent_item_colon' => ''
        );
        $args = array(
                'labels' => $labels,
                'supports' => array(
                        'title',
                        'editor',
                        'thumbnail',
                        'author',
                        'revisions'
                ),
                'public' => true,
                'publicly_queryable' => true,
                'show_ui' => true,
                'query_var' => true,
                'rewrite' => array(
                        'slug' => 'download-partner',
                        'with_front' => false
                ),
                'capability_type' => 'post',
                'hierarchical' => false,
                'menu_position' => 5,
                'has_archive' => true,
                'show_in_rest' => true,
        );
        register_post_type('download-partner', $args);
        register_taxonomy(
                'download-partner_cat', /* タクソノミー名 */
                'download-partner', /* 該当カスタム投稿 */
                array(
                        'hierarchical' => true, /* 親子関係が必要なければ false */
                        'update_count_callback' => '_update_post_term_count',
                        'label' => 'ダウンロードパートナー（日）',
                        'public' => true,
                        'show_ui' => true,
                        'show_in_rest' => true,
                )
        );
        register_taxonomy(
                'download-partner_lang', /* タクソノミー名 */
                'download-partner', /* 該当カスタム投稿 */
                array(
                        'hierarchical' => true, /* 親子関係が必要なければ false */
                        'update_count_callback' => '_update_post_term_count',
                        'label' => 'ダウンロードパートナー（日）',
                        'public' => true,
                        'show_ui' => true,
                        'show_in_rest' => true,
                )
        );

        
        $labels = array(
                'name' => _x('ダウンロードパートナー - 英語', 'post type general name'),
                'add_new' => _x('新規追加', 'download-partner-en'),
                'add_new_item' => __('投稿を登録'),
                'edit_item' => __('投稿を編集'),
                'new_item' => __('新しい投稿'),
                'view_item' => __('投稿を見る'),
                'search_items' => __('投稿を探す'),
                'not_found' =>  __('投稿はありません'),
                'not_found_in_trash' => __('ゴミ箱に投稿はありません'),
                'parent_item_colon' => ''
        );
        $args = array(
                'labels' => $labels,
                'supports' => array(
                        'title',
                        'editor',
                        'thumbnail',
                        'author',
                        'revisions'
                ),
                'public' => true,
                'publicly_queryable' => true,
                'show_ui' => true,
                'query_var' => true,
                'rewrite' => array(
                        'slug' => 'en/download-partner',
                        'with_front' => false
                ),
                'capability_type' => 'post',
                'hierarchical' => false,
                'menu_position' => 5,
                'has_archive' => true,
                'show_in_rest' => true,
        );
        register_post_type('download-partner-en', $args);
        register_taxonomy(
                'download-partner-en_cat', /* タクソノミー名 */
                'download-partner-en', /* 該当カスタム投稿 */
                array(
                        'hierarchical' => true, /* 親子関係が必要なければ false */
                        'update_count_callback' => '_update_post_term_count',
                        'label' => 'ダウンロードパートナー（英）',
                        'public' => true,
                        'show_ui' => true,
                        'show_in_rest' => true,
                )
        );
        register_taxonomy(
                'download-partner-en_lang', /* タクソノミー名 */
                'download-partner-en', /* 該当カスタム投稿 */
                array(
                        'hierarchical' => true, /* 親子関係が必要なければ false */
                        'update_count_callback' => '_update_post_term_count',
                        'label' => 'ダウンロードパートナー（英）',
                        'public' => true,
                        'show_ui' => true,
                        'show_in_rest' => true,
                )
        );

        $labels = array(
                'name' => _x('ダウンロードパートナー - タイ語', 'post type general name'),
                'add_new' => _x('新規追加', 'download-partner-th'),
                'add_new_item' => __('投稿を登録'),
                'edit_item' => __('投稿を編集'),
                'new_item' => __('新しい投稿'),
                'view_item' => __('投稿を見る'),
                'search_items' => __('投稿を探す'),
                'not_found' =>  __('投稿はありません'),
                'not_found_in_trash' => __('ゴミ箱に投稿はありません'),
                'parent_item_colon' => ''
        );
        $args = array(
                'labels' => $labels,
                'supports' => array(
                        'title',
                        'editor',
                        'thumbnail',
                        'author',
                        'revisions'
                ),
                'public' => true,
                'publicly_queryable' => true,
                'show_ui' => true,
                'query_var' => true,
                'rewrite' => array(
                        'slug' => 'th/download-partner',
                        'with_front' => false
                ),
                'capability_type' => 'post',
                'hierarchical' => false,
                'menu_position' => 5,
                'has_archive' => true,
                'show_in_rest' => true,
        );
        register_post_type('download-partner-th', $args);
        register_taxonomy(
                'download-partner-th_cat', /* タクソノミー名 */
                'download-partner-th', /* 該当カスタム投稿 */
                array(
                        'hierarchical' => true, /* 親子関係が必要なければ false */
                        'update_count_callback' => '_update_post_term_count',
                        'label' => 'ダウンロードパートナー（タイ）',
                        'public' => true,
                        'show_ui' => true,
                        'show_in_rest' => true,
                )
        );
        register_taxonomy(
                'download-partner-th_lang', /* タクソノミー名 */
                'download-partner-th', /* 該当カスタム投稿 */
                array(
                        'hierarchical' => true, /* 親子関係が必要なければ false */
                        'update_count_callback' => '_update_post_term_count',
                        'label' => 'ダウンロードパートナー（タイ）',
                        'public' => true,
                        'show_ui' => true,
                        'show_in_rest' => true,
                )
        );
}


/*
// Contact Form 7 Pタグとbrタグ自動挿入無効化 //
*/
function wpcf_autop_delete()
{
        return false;
}
add_filter('wpcf7_autop_or_not', 'wpcf_autop_delete');


/*
// 資料請求フォームの送信後にファイルをダウンロードする //
*/
// function wpcf7_document_download_function($contact_form)
// {
//      $submission = WPCF7_Submission::get_instance(); // Contact Form 7の送信データを取得
//      if ($submission) {
//              $postId = $submission->get_meta('container_post_id');
//              if ($postId) {
//                      $post_type = get_post_type($postId);
//                      if ($post_type === 'document') {
//                              $filePath = get_field('cf_file', $postId);
//                              // $mimeType = (new finfo(FILEINFO_MIME_TYPE))->file($filePath);

//                              if ($filePath) {
//                                      download_file($filePath);
//                              }

//                              // if (!preg_match('/\A\S+?\/\S+/', $mimeType)) {
//                              //      $mimeType = 'application/octet-stream';
//                              // }
//                              // $mimeType = 'application/octet-stream';

//                              // //-- Content-Type
//                              // header('Content-Type: ' . $mimeType);
//                              // //-- ウェブブラウザが独自にMIMEタイプを判断する処理を抑止する
//                              // header('X-Content-Type-Options: nosniff');
//                              // //-- ダウンロードファイルのサイズ
//                              // header('Content-Length: ' . filesize($filePath));
//                              // //-- ダウンロード時のファイル名
//                              // header('Content-Disposition: attachment; filename="' . basename($filePath) . '"');
//                              // //-- keep-aliveを無効にする
//                              // header('Connection: close');
//                              // //-- readfile()の前に出力バッファリングを無効化する ※詳細は後述
//                              // while (ob_get_level()) {
//                              //      ob_end_clean();
//                              // }
//                              // //-- 出力
//                              // readfile($filePath);
//                              // //-- 最後に終了させるのを忘れない
//                              // exit;
//                      }
//              }
//      }
// }
// add_action('wpcf7_mail_sent', 'wpcf7_document_download_function');

// function download_file($file_url)
// {
//      if (!empty($file_url)) {
//              // ファイルのダウンロード処理
//              header('Content-Type: application/pdf');
//              // header('Content-Type: application/octet-stream');
//              header('Content-Disposition: attachment; filename="' . basename($file_url) . '"');
//              while (ob_get_level()) {
//                      ob_end_clean();
//              }
//              readfile($file_url);
//              exit;
//      }
// }


/*
// 祖先ページ判定用関数
*/
function is_ancestor($slug)
{
        global $post;
        $result = false;

        if (!empty($post->post_parent)) {
                $ancestors = get_post_ancestors($post->ID);
                foreach ($ancestors as $ancestor) {
                        $post_data = get_post($ancestor);
                        if ($slug == $post_data->post_name) {
                                $result = true;
                        }
                }
        }
        return $result;
}

function get_post_number($post_type = 'post', $op = '<=')
{
        global $wpdb, $post;
        $post_type = is_array($post_type) ? implode("','", $post_type) : $post_type;
        $number = $wpdb->get_var("
        SELECT COUNT( * )
        FROM $wpdb->posts
        WHERE post_date {$op} '{$post->post_date}'
        AND post_status = 'publish'
        AND post_type = ('{$post_type}')
    ");
        return $number;
}



// メール送信後のタイミングのフックを利用して PDF のURLをセッションに保存するアクションフックを定義
function after_mail_sent_action($contact_form)
{
        if ($contact_form->id() == 51) { // フォームのID を適宜設定する
                $submission = WPCF7_Submission::get_instance();

                if ($submission) {
                        // CONTACT FORM が埋め込まれている投稿ページのID を取得する
                        // $post_id = $submission->get_meta('container_post_id');

                        // // カスタムフィールドからファイルのURLを取得する
                        // if (function_exists('CFS')) {
                        //      $file_url = CFS()->get('download_file_url', $post_id);

                        //      if ($file_url) {
                        //              session_start();
                        //              $_SESSION['download_url'] = $file_url;
                        //      }
                        // }

                        $postId = $submission->get_meta('container_post_id');
                        if ($postId) {
                                $post_type = get_post_type($postId);
                                if ($post_type === 'document') {
                                        $filePath = get_field('cf_file', $postId);
                                        // $mimeType = (new finfo(FILEINFO_MIME_TYPE))->file($filePath);

                                        if ($filePath) {
                                                session_start();
                                                $_SESSION['download_url'] = $filePath;
                                        }
                                }
                        }
                }
        }
}
add_action('wpcf7_mail_sent', 'after_mail_sent_action');

// PDF ダウンロード用のエンドポイントを定義
add_action('rest_api_init', function () {
        // URL は適宜
        register_rest_route('vendor/v1', '/get-download-url', array(
                'methods' => 'GET',
                'callback' => 'get_download_url',
        ));
});

// セッションを参照して PDF のURL を返す
function get_download_url()
{
        session_start();
        if (isset($_SESSION['download_url'])) {
                $download_url = $_SESSION['download_url'];
                unset($_SESSION['download_url']);
                return new WP_REST_Response(array('download_url' => $download_url), 200);
        } else {
                return new WP_REST_Response(array('download_url' => null), 404);
        }
}


/*
// 資料請求やセミナーの問い合わせの自動返信に投稿タイトルを追加
*/
function add_custom_form_tags()
{
        wpcf7_add_form_tag('page_title', 'get_page_title_form_tag_handler');
}

function get_page_title_form_tag_handler($tag)
{
        return '<input type="hidden" name="page_title" value="' . get_the_title() . '" />';
}
add_action('wpcf7_init', 'add_custom_form_tags');


function my_enqueue_ajax_script() {}

/*
// カノニカルを設定
*/
function canonical_to_base_url_without_col() {
    if (isset($_GET['col'])) {
        // 現在のURL（クエリパラメータ付き）を取得
        $full_url = home_url(add_query_arg(NULL, NULL));
        // クエリパラメータを取り除いたベースURLを取得
        $base_url = strtok($full_url, '?');
        // canonicalタグを上書き出力
        echo '<link rel="canonical" href="' . esc_url($base_url) . '">' . "\n";
    }
}
add_action('wp_head', 'canonical_to_base_url_without_col', 1); // 先に出すことでAll in One SEOより優先されやすくする



<?php
if (is_tax('case-study_cat') || is_tax('case-study_challenges') || get_post_type('case-study')) :
        include(TEMPLATEPATH . '/archive-case-study.php');
        exit;
endif;

if (is_tax('case-study-en_cat') || is_tax('case-study-en_challenges') || get_post_type('case-study-en')) :
        include(TEMPLATEPATH . '/archive-case-study-en.php');
        exit;
endif;

if (is_tax('case-study-th_cat') || is_tax('case-study-th_challenges') || get_post_type('case-study-th')) :
        include(TEMPLATEPATH . '/archive-case-study-th.php');
        exit;
endif;

if (is_tax('solution_cat') || is_tax('solution_challenges') || is_tax('solution_territory') || get_post_type('solution')) :
        include(TEMPLATEPATH . '/archive-solution.php');
        exit;
endif;

if (is_tax('solution-en_cat') || is_tax('solution-en_challenges') || is_tax('solution-en_territory') || get_post_type('solution-en')) :
        include(TEMPLATEPATH . '/archive-solution-en.php');
        exit;
endif;

if (is_tax('solution-th_cat') || is_tax('solution-th_challenges') || is_tax('solution-th_territory') || get_post_type('solution-th')) :
        include(TEMPLATEPATH . '/archive-solution-th.php');
        exit;
endif;

if (is_tax('download-partner_cat') || is_tax('download-partner_lang') || get_post_type('download-partner')) :
        include(TEMPLATEPATH . '/archive-download-partner.php');
        exit;
endif;
if (is_tax('download-partner-en_cat') || is_tax('download-partner-en_lang') || get_post_type('download-partner-en')) :
        include(TEMPLATEPATH . '/archive-download-partner-en.php');
        exit;
endif;

if (is_tax('download-partner-th_cat') || is_tax('download-partner-th_lang') || get_post_type('download-partner-th')) :
        include(TEMPLATEPATH . '/archive-download-partner-th.php');
        exit;
endif;
if (is_tax('document_cat') || is_tax('document_lang') || get_post_type('document')) :
        include(TEMPLATEPATH . '/archive-document.php');
        exit;
endif;

if (is_tax('document-en_cat') || is_tax('document-en_lang') || get_post_type('document-en')) :
        include(TEMPLATEPATH . '/archive-document-en.php');
        exit;
endif;

if (is_tax('document-th_cat') || is_tax('document-th_lang') || get_post_type('document-th')) :
        include(TEMPLATEPATH . '/archive-document-th.php');
        exit;
endif;

if (is_tax('blog_cat') ||  get_post_type('blog')) :
        include(TEMPLATEPATH . '/archive-blog.php');
        exit;
endif;

if (is_tax('blog-en_cat') ||  get_post_type('blog-en')) :
        include(TEMPLATEPATH . '/archive-blog-en.php');
        exit;
endif;

if (is_tax('blog-th_cat') ||  get_post_type('blog-th')) :
        include(TEMPLATEPATH . '/archive-blog-th.php');
        exit;
endif;

if (is_tax('seminar_cat') ||  get_post_type('seminar')) :
        include(TEMPLATEPATH . '/archive-seminar.php');
        exit;
endif;

if (is_tax('seminar-en_cat') ||  get_post_type('seminar-en')) :
        include(TEMPLATEPATH . '/archive-seminar-en.php');
        exit;
endif;

if (is_tax('seminar-th_cat') ||  get_post_type('seminar-th')) :
        include(TEMPLATEPATH . '/archive-seminar-th.php');
        exit;
endif;

<?php
 require_once get_theme_file_path('inc/class-bs-collapse-navwalker.php');

 function acf_blocks()
 {
     if (function_exists('acf_register_block')) {
         acf_register_block(array(
             'name'				=> 'cb_hero',
             'title'				=> __('CB Hero'),
             'description'		=> __(''),
             'render_template'	=> 'page-templates/blocks/cb_image_hero.php',
             'category'			=> 'layout',
             'icon'				=> 'cover-image',
             'keywords'			=> array( 'image', 'hero' ),
             'mode'	=> 'edit',
             'supports' => array('mode' => false),
         ));
         acf_register_block(array(
         	'name'				=> 'cb_infographics',
         	'title'				=> __('CB Infographics'),
         	'description'		=> __(''),
         	'render_template'	=> 'page-templates/blocks/cb_infographics.php',
         	'category'			=> 'layout',
         	'icon'				=> 'cover-image',
         	'keywords'			=> array( 'infographics' ),
         	'mode'	=> 'edit',
            'supports' => array('mode' => false),
         ));
         acf_register_block(array(
             'name'				=> 'cb_text_image',
             'title'				=> __('CB Text/Image'),
             'description'		=> __(''),
             'render_template'	=> 'page-templates/blocks/cb_text_image.php',
             'category'			=> 'layout',
             'icon'				=> 'align-pull-right',
             'keywords'			=> array( 'text', 'image' ),
             'mode'	=> 'edit',
             'supports' => array('mode' => false),
         ));
         acf_register_block(array(
             'name'				=> 'cb_full_width_text',
             'title'				=> __('CB Full Width Text'),
             'description'		=> __(''),
             'render_template'	=> 'page-templates/blocks/cb_full_width.php',
             'category'			=> 'layout',
             'icon'				=> 'align-pull-right',
             'keywords'			=> array( 'full', 'width' ),
             'mode'	=> 'edit',
             'supports' => array('mode' => false),
         ));
         acf_register_block(array(
             'name'				=> 'cb_text_video',
             'title'				=> __('CB Text/Video'),
             'description'		=> __(''),
             'render_template'	=> 'page-templates/blocks/cb_text_video.php',
             'category'			=> 'layout',
             'icon'				=> 'embed-video',
             'keywords'			=> array( 'text', 'video' ),
             'mode'	=> 'edit',
             'supports' => array('mode' => false),
         ));
         acf_register_block(array(
             'name'				=> 'CB Text w Image Background',
             'title'				=> __('CB Text w Image Background'),
             'description'		=> __(''),
             'render_template'	=> 'page-templates/blocks/cb_text_imagebg.php',
             'category'			=> 'layout',
             'icon'				=> 'embed-photo',
             'keywords'			=> array( 'text', 'image', 'background' ),
             'mode'	=> 'edit',
             'supports' => array('mode' => false),
         ));
         acf_register_block(array(
             'name'				=> 'cb_faq_block',
             'title'				=> __('CB FAQ'),
             'description'		=> __(''),
             'render_template'	=> 'page-templates/blocks/cb_faq_block.php',
             'category'			=> 'layout',
             'icon'				=> 'list-view',
             'keywords'			=> array( 'faq','block' ),
             'mode'	=> 'edit',
             'supports' => array('mode' => false),
         ));
         acf_register_block(array(
             'name'				=> 'cb_gradient_cta',
             'title'				=> __('CB Gradient CTA'),
             'description'		=> __(''),
             'render_template'	=> 'page-templates/blocks/cb_gradient_cta.php',
             'category'			=> 'layout',
             'icon'				=> 'button',
             'keywords'			=> array( 'gradient','cta' ),
             'mode'	=> 'edit',
             'supports' => array('mode' => false),
         ));
         acf_register_block(array(
             'name'				=> 'cb_gradient_pushthrough',
             'title'				=> __('CB Gradient Pushthrough'),
             'description'		=> __(''),
             'render_template'	=> 'page-templates/blocks/cb_gradient_pushthrough.php',
             'category'			=> 'layout',
             'icon'				=> 'button',
             'keywords'			=> array( 'gradient','pushthrough' ),
             'mode'	=> 'edit',
             'supports' => array('mode' => false),
         ));
         acf_register_block(array(
             'name'				=> 'cb_section_title',
             'title'				=> __('CB Section Title'),
             'description'		=> __(''),
             'render_template'	=> 'page-templates/blocks/cb_section_title.php',
             'category'			=> 'layout',
             'icon'				=> 'heading',
             'keywords'			=> array( 'section','title' ),
             'mode'	=> 'edit',
             'supports' => array('mode' => false),
         ));
         acf_register_block(array(
             'name'				=> 'CB Rollover Nav',
             'title'				=> __('CB Rollover Nav'),
             'description'		=> __(''),
             'render_template'	=> 'page-templates/blocks/cb_rollover.php',
             'category'			=> 'layout',
             'icon'				=> 'networking',
             'keywords'			=> array( 'rollover', 'nav' ),
             'mode'	=> 'edit',
             'supports' => array('mode' => false),
         ));
         acf_register_block(array(
             'name'				=> 'CB Rollover Two',
             'title'				=> __('CB Rollover Two'),
             'description'		=> __(''),
             'render_template'	=> 'page-templates/blocks/cb_rollover_two.php',
             'category'			=> 'layout',
             'icon'				=> 'networking',
             'keywords'			=> array( 'rollover', 'two' ),
             'mode'	=> 'edit',
             'supports' => array('mode' => false),
         ));
         acf_register_block(array(
             'name'				=> 'CB Not Rollover Nav',
             'title'				=> __('CB Not Rollover Nav'),
             'description'		=> __(''),
             'render_template'	=> 'page-templates/blocks/cb_not_rollover.php',
             'category'			=> 'layout',
             'icon'				=> 'networking',
             'keywords'			=> array( 'not', 'rollover', 'nav' ),
             'mode'	=> 'edit',
             'supports' => array('mode' => false),
         ));
         acf_register_block(array(
             'name'             => 'CB Shop',
             'title'                => __('CB Shop'),
             'description'      => __(''),
             'render_template'  => 'page-templates/blocks/cb_shop.php',
             'category'         => 'layout',
             'icon'             => 'networking',
             'keywords'         => array( 'shop' ),
             'mode' => 'edit',
             'supports' => array('mode' => false),
         ));
         acf_register_block(array(
             'name'             => 'CB Technology Nav',
             'title'                => __('CB Technology Nav'),
             'description'      => __(''),
             'render_template'  => 'page-templates/blocks/cb_tech_nav.php',
             'category'         => 'layout',
             'icon'             => 'networking',
             'keywords'         => array( 'tech', 'nav' ),
             'mode' => 'edit',
             'supports' => array('mode' => false),
         ));
         acf_register_block(array(
             'name'				=> 'CB Lone Worker Block',
             'title'				=> __('CB Lone Worker Block'),
             'description'		=> __(''),
             'render_template'	=> 'page-templates/blocks/cb_tech_nav--lone-worker.php',
             'category'			=> 'layout',
             'icon'				=> 'networking',
             'keywords'			=> array( 'tech', 'nav', 'lone', 'worker' ),
             'mode'	=> 'edit',
             'supports' => array('mode' => false),
         ));
         acf_register_block(array(
             'name'				=> 'CB Configurable Tech Nav Block (2 col)',
             'title'				=> __('CB Configurable Tech Nav Block (2 col)'),
             'description'		=> __(''),
             'render_template'	=> 'page-templates/blocks/cb_tech_nav--2-up-configurable.php',
             'category'			=> 'layout',
             'icon'				=> 'networking',
             'keywords'			=> array( 'tech', 'nav', 'configurable' ),
             'mode'	=> 'edit',
             'supports' => array('mode' => false),
         ));
         acf_register_block(array(
             'name'				=> 'CB Clients Slider',
             'title'				=> __('CB Clients Slider'),
             'description'		=> __('Case studies having logos'),
             'render_template'	=> 'page-templates/blocks/cb_clients_slider.php',
             'category'			=> 'layout',
             'icon'				=> 'slides',
             'keywords'			=> array( 'clients', 'slider' ),
             'mode'	=> 'edit',
             'supports' => array('mode' => false),
         ));
         acf_register_block(array(
             'name'				=> 'CB Logo Slider',
             'title'				=> __('CB Logo Slider'),
             'description'		=> __(''),
             'render_template'	=> 'page-templates/blocks/cb_logo_slider.php',
             'category'			=> 'layout',
             'icon'				=> 'slides',
             'keywords'			=> array( 'logo', 'slider' ),
             'mode'	=> 'edit',
             'supports' => array('mode' => false),
         ));
         acf_register_block(array(
             'name'				=> 'CB Stat Spinner',
             'title'				=> __('CB Stat Spnner'),
             'description'		=> __(''),
             'render_template'	=> 'page-templates/blocks/cb_stat_spinner.php',
             'category'			=> 'layout',
             'icon'				=> 'performance',
             'keywords'			=> array( 'stat', 'spinner' ),
             'mode'	=> 'edit',
             'supports' => array('mode' => false),
         ));
         acf_register_block(array(
             'name'				=> 'CB Product Header',
             'title'				=> __('CB Product Header'),
             'description'		=> __(''),
             'render_template'	=> 'page-templates/blocks/cb_product_header.php',
             'category'			=> 'layout',
             'icon'				=> 'align-left',
             'keywords'			=> array( 'feature' ),
             'mode'	=> 'edit',
             'supports' => array('mode' => false),
         ));
         acf_register_block(array(
             'name'				=> 'CB Feature Block',
             'title'				=> __('CB Feature Block'),
             'description'		=> __(''),
             'render_template'	=> 'page-templates/blocks/cb_feature_block.php',
             'category'			=> 'layout',
             'icon'				=> 'list-view',
             'keywords'			=> array( 'feature' ),
             'mode'	=> 'edit',
             'supports' => array('mode' => false),
         ));
         acf_register_block(array(
             'name'				=> 'CB Feature List',
             'title'				=> __('CB Feature List'),
             'description'		=> __(''),
             'render_template'	=> 'page-templates/blocks/cb_feature_list.php',
             'category'			=> 'layout',
             'icon'				=> 'list-view',
             'keywords'			=> array( 'feature', 'list' ),
             'mode'	=> 'edit',
             'supports' => array('mode' => false),
         ));
         acf_register_block(array(
             'name'				=> 'CB Big Quote',
             'title'				=> __('CB Big Quote'),
             'description'		=> __(''),
             'render_template'	=> 'page-templates/blocks/cb_big_quote.php',
             'category'			=> 'layout',
             'icon'				=> 'quote',
             'keywords'			=> array( 'big', 'quote' ),
             'mode'	=> 'edit',
             'supports' => array('mode' => false),
         ));
         acf_register_block(array(
             'name'				=> 'CB Big Quote Slider',
             'title'				=> __('CB Big Quote Slider'),
             'description'		=> __(''),
             'render_template'	=> 'page-templates/blocks/cb_big_quote_slider.php',
             'category'			=> 'layout',
             'icon'				=> 'quote',
             'keywords'			=> array( 'big', 'quote', 'slider' ),
             'mode'	=> 'edit',
             'supports' => array('mode' => false),
         ));
         acf_register_block(array(
             'name'				=> 'CB File Download',
             'title'				=> __('CB File Download'),
             'description'		=> __(''),
             'render_template'	=> 'page-templates/blocks/cb_file_download.php',
             'category'			=> 'layout',
             'icon'				=> 'download',
             'keywords'			=> array( 'file', 'download' ),
             'mode'	=> 'edit',
             'supports' => array('mode' => false),
         ));
         acf_register_block(array(
             'name'				=> 'CB Sector Nav',
             'title'				=> __('CB Sector Nav'),
             'description'		=> __(''),
             'render_template'	=> 'page-templates/blocks/cb_sector_nav.php',
             'category'			=> 'layout',
             'icon'				=> 'networking',
             'keywords'			=> array( 'sector', 'nav' ),
             'mode'	=> 'edit',
             'supports' => array('mode' => false),
         ));
         acf_register_block(array(
             'name'				=> 'CB Container',
             'title'				=> __('CB Container'),
             'description'		=> __(''),
             'render_template'	=> 'page-templates/blocks/cb_container.php',
             'category'			=> 'layout',
             'icon'				=> 'text',
             'keywords'			=> array( 'container' ),
             'mode'	=> 'edit',
             'supports' => array('mode' => false),
         ));
         acf_register_block(array(
             'name'				=> 'CB Related Products',
             'title'				=> __('CB Related Products'),
             'description'		=> __(''),
             'render_template'	=> 'page-templates/blocks/cb_related_products.php',
             'category'			=> 'layout',
             'icon'				=> 'slides',
             'keywords'			=> array( 'related','products' ),
             'mode'	=> 'edit',
             'supports' => array('mode' => false),
         ));
         acf_register_block(array(
             'name'				=> 'CB Related Case Studies',
             'title'				=> __('CB Related Case Studies'),
             'description'		=> __(''),
             'render_template'	=> 'page-templates/blocks/cb_related_case_studies.php',
             'category'			=> 'layout',
             'icon'				=> 'slides',
             'keywords'			=> array( 'related','case','studies' ),
             'mode'	=> 'edit',
             'supports' => array('mode' => false),
         ));
         acf_register_block(array(
             'name'				=> 'CB Related Resources',
             'title'				=> __('CB Related Resources'),
             'description'		=> __(''),
             'render_template'	=> 'page-templates/blocks/cb_related_resources.php',
             'category'			=> 'layout',
             'icon'				=> 'slides',
             'keywords'			=> array( 'related','resources' ),
             'mode'	=> 'edit',
             'supports' => array('mode' => false),
         ));
         acf_register_block(array(
             'name'				=> 'CB Case Study User Story Combo',
             'title'				=> __('CB Case Study User Story Combo'),
             'description'		=> __(''),
             'render_template'	=> 'page-templates/blocks/cb_case_user_combo.php',
             'category'			=> 'layout',
             'icon'				=> 'table',
             'keywords'			=> array( 'case', 'study', 'user', 'story', 'combo' ),
             'mode'	=> 'edit',
             'supports' => array('mode' => false),
         ));
         acf_register_block(array(
             'name'				=> 'CB Breadcrumbs',
             'title'				=> __('CB Breadcrumbs'),
             'description'		=> __(''),
             'render_template'	=> 'page-templates/blocks/cb_breadcrumbs.php',
             'category'			=> 'layout',
             'icon'				=> 'links',
             'keywords'			=> array( 'breadcrumbs' ),
             'mode'	=> 'edit',
             'supports' => array('mode' => false),
         ));
         acf_register_block(array(
             'name'				=> 'CB Two Cards',
             'title'				=> __('CB Two Cards'),
             'description'		=> __(''),
             'render_template'	=> 'page-templates/blocks/cb_two_cards.php',
             'category'			=> 'layout',
             'icon'				=> 'columns',
             'keywords'			=> array( 'two', 'cards' ),
             'mode'	=> 'edit',
             'supports' => array('mode' => false),
         ));
         acf_register_block(array(
             'name'				=> 'CB Banner',
             'title'				=> __('CB Banner'),
             'description'		=> __(''),
             'render_template'	=> 'page-templates/blocks/cb_banner.php',
             'category'			=> 'layout',
             'icon'				=> 'slides',
             'keywords'			=> array( 'banner' ),
             'mode'	=> 'edit',
             'supports' => array('mode' => false),
         ));
         acf_register_block(array(
             'name'				=> 'CB Gallery',
             'title'				=> __('CB Gallery'),
             'description'		=> __(''),
             'render_template'	=> 'page-templates/blocks/cb_gallery.php',
             'category'			=> 'layout',
             'icon'				=> 'gallery',
             'keywords'			=> array( 'gallery' ),
             'mode'	=> 'edit',
             'supports' => array('mode' => false),
         ));
         acf_register_block(array(
             'name'				=> 'CB Turtl Link',
             'title'				=> __('CB Turtl Link'),
             'description'		=> __(''),
             'render_template'	=> 'page-templates/blocks/cb_turtl_link.php',
             'category'			=> 'layout',
             'icon'				=> 'image',
             'keywords'			=> array( 'turtl', 'link' ),
             'mode'	=> 'edit',
             'supports' => array('mode' => false),
         ));
         acf_register_block(array(
             'name'				=> 'CB Person',
             'title'				=> __('CB Person'),
             'description'		=> __(''),
             'render_template'	=> 'page-templates/blocks/cb_person.php',
             'category'			=> 'layout',
             'icon'				=> 'users',
             'keywords'			=> array( 'person' ),
             'mode'	=> 'edit',
             'supports' => array('mode' => false),
         ));
         acf_register_block(array(
             'name'				=> 'CB Latest Posts',
             'title'				=> __('CB Latest Posts'),
             'description'		=> __(''),
             'render_template'	=> 'page-templates/blocks/cb_latest_posts.php',
             'category'			=> 'layout',
             'icon'				=> 'excerpt-view',
             'keywords'			=> array( 'latest','posts' ),
             'mode'	=> 'edit',
             'supports' => array('mode' => false),
         ));
         acf_register_block(array(
             'name'				=> 'CB Guides',
             'title'				=> __('CB Guides'),
             'description'		=> __(''),
             'render_template'	=> 'page-templates/blocks/cb_guides.php',
             'category'			=> 'layout',
             'icon'				=> 'excerpt-view',
             'keywords'			=> array( 'latest','guides' ),
             'mode'	=> 'edit',
             'supports' => array('mode' => false),
         ));
         acf_register_block(array(
             'name'				=> 'CB Two Columns',
             'title'				=> __('CB Two Columns'),
             'description'		=> __(''),
             'render_template'	=> 'page-templates/blocks/cb_two_cols.php',
             'category'			=> 'layout',
             'icon'				=> 'columns',
             'keywords'			=> array( 'two','columns' ),
             'mode'	=> 'edit',
             'supports' => array('mode' => false),
         ));
         acf_register_block(array(
             'name'				=> 'CB Featured In',
             'title'				=> __('CB Featured In'),
             'description'		=> __(''),
             'render_template'	=> 'page-templates/blocks/cb_featured_in.php',
             'category'			=> 'layout',
             'icon'				=> 'columns',
             'keywords'			=> array( 'featured','in' ),
             'mode'	=> 'edit',
             'supports' => array('mode' => false),
         ));
         acf_register_block(array(
             'name'				=> 'CB Timeline',
             'title'				=> __('CB Timeline'),
             'description'		=> __(''),
             'render_template'	=> 'page-templates/blocks/cb_timeline.php',
             'category'			=> 'layout',
             'icon'				=> 'columns',
             'keywords'			=> array( 'timeline' ),
             'mode'	=> 'edit',
             'supports' => array('mode' => false),
         ));
         acf_register_block(array(
             'name'				=> 'CB Benefits / Text',
             'title'				=> __('CB Benefits / Text'),
             'description'		=> __(''),
             'render_template'	=> 'page-templates/blocks/cb_benefits_text.php',
             'category'			=> 'layout',
             'icon'				=> 'columns',
             'keywords'			=> array( 'benefits', 'text' ),
             'mode'	=> 'edit',
             'supports' => array('mode' => false),
         ));
         acf_register_block(array(
             'name'				=> 'CB Benefits / Video',
             'title'				=> __('CB Benefits / Video'),
             'description'		=> __(''),
             'render_template'	=> 'page-templates/blocks/cb_benefits_video.php',
             'category'			=> 'layout',
             'icon'				=> 'columns',
             'keywords'			=> array( 'benefits', 'video' ),
             'mode'	=> 'edit',
             'supports' => array('mode' => false),
         ));
         acf_register_block(array(
             'name'				=> 'CB Case Study Quote Slider',
             'title'				=> __('CB Case Study Quote Slider'),
             'description'		=> __(''),
             'render_template'	=> 'page-templates/blocks/cb_testimonial_slider.php',
             'category'			=> 'layout',
             'icon'				=> 'columns',
             'keywords'			=> array( 'case','study','quote','slider' ),
             'mode'	=> 'edit',
             'supports' => array('mode' => false),
         ));
		 acf_register_block(array(
             'name'				=> 'CB Three Col Cards',
             'title'				=> __('CB Three Col Cards'),
             'description'		=> __(''),
             'render_template'	=> 'page-templates/blocks/cb_three_col_cards.php',
             'category'			=> 'layout',
             'icon'				=> 'columns',
             'keywords'			=> array( 'three','column','cards' ),
             'mode'	=> 'edit',
             'supports' => array('mode' => false),
         ));
		 acf_register_block(array(
            'name'				=> 'CB Newsletter Signup Block',
            'title'				=> __('CB Newsletter Signup Block'),
            'description'		=> __(''),
            'render_template'	=> 'page-templates/blocks/cb_newsletter_signup.php',
            'category'			=> 'layout',
            'icon'				=> 'columns',
            'keywords'			=> array( 'newsletter','signup' ),
            'mode'	=> 'edit',
            'supports' => array('mode' => false),
        ));
		acf_register_block(array(
            'name'				=> 'CB Media Block',
            'title'				=> __('CB Media Block'),
            'description'		=> __(''),
            'render_template'	=> 'page-templates/blocks/cb_media_block.php',
            'category'			=> 'layout',
            'icon'				=> 'columns',
            'mode'	=> 'edit',
            'supports' => array('mode' => false),
        ));
		acf_register_block(array(
            'name'				=> 'CB Gated Modal',
            'title'				=> __('CB Gated Modal'),
            'description'		=> __(''),
            'render_template'	=> 'page-templates/blocks/cb_gated_modal.php',
            'category'			=> 'layout',
            'icon'				=> 'columns',
            'mode'	=> 'edit',
            'supports' => array('mode' => false),
        ));
        acf_register_block(array(
            'name'              => 'CB Banner Slideshow',
            'title'             => __('CB Banner Slideshow'),
            'description'       => __(''),
            'render_template'   => 'page-templates/blocks/cb_banner_slideshow.php',
            'category'          => 'layout',
            'icon'              => 'columns',
            'mode'  => 'edit',
            'supports' => array('mode' => false),
        ));
        acf_register_block(array(
            'name'              => 'CB Team',
            'title'             => __('CB Team'),
            'description'       => __(''),
            'render_template'   => 'page-templates/blocks/cb_team.php',
            'category'          => 'layout',
            'icon'              => 'columns',
            'mode'  => 'edit',
            'supports' => array('mode' => false),
        ));
     }
 }
 add_action('acf/init', 'acf_blocks');



 // rename posts to blog
 function change_post_label()
 {
     global $menu;
     global $submenu;
     $menu[5][0] = 'Blog Posts';
     $submenu['edit.php'][5][0] = 'Blog Posts';
     $submenu['edit.php'][10][0] = 'Add Blog';
     $submenu['edit.php'][16][0] = 'Blog Tags';
 }
 function change_post_object()
 {
     global $wp_post_types;
     $labels = &$wp_post_types['post']->labels;
     $labels->name = 'Blog Posts';
     $labels->singular_name = 'Blog Post';
     $labels->add_new = 'Add Blog';
     $labels->add_new_item = 'Add Blog';
     $labels->edit_item = 'Edit Blog';
     $labels->new_item = 'Blog';
     $labels->view_item = 'View Blog';
     $labels->search_items = 'Search Blog';
     $labels->not_found = 'No Blog found';
     $labels->not_found_in_trash = 'No Blog found in Trash';
     $labels->all_items = 'All Blog';
     $labels->menu_name = 'Blog';
     $labels->name_admin_bar = 'Blog';
 }
 
 add_action('admin_menu', 'change_post_label');
 add_action('init', 'change_post_object');



 if (function_exists('acf_add_options_page')) {
     acf_add_options_page(
         array(
             'page_title' 	=> 'Site-Wide Settings',
             'menu_title'	=> 'Site-Wide Settings',
             'menu_slug' 	=> 'theme-general-settings',
             'capability'	=> 'edit_posts',
         )
     );
 }


 // function add_first_nav_item($items, $args) {
 // 	if( $args->theme_location == 'primary_nav' ) {
 // 		return '<li class="d-none d-md-block"><a rel="home" class="logo" href="/" itemprop="url"></a></li>'. $items;
 // 	}
 // 	return $items;
 // }
 // add_filter('wp_nav_menu_items','add_first_nav_item', 10, 2);


 function archive_limit($query)
 {
     if ($query->is_archive() && $query->is_main_query() && !is_admin()) {
         $query->set('posts_per_page', 100);
     }
 }
 add_action('pre_get_posts', 'archive_limit');

 add_filter('wpseo_breadcrumb_links', 'override_yoast_breadcrumb_trail_stories');

 function override_yoast_breadcrumb_trail_stories($links)
 {
     global $post;

     if (is_tax('incidents')) {
         $breadcrumb[] = array(
             'url' => '/stories/',
             'text' => 'Stories',
         );
         array_splice($links, 1, -2, $breadcrumb);
     }

     if (is_singular('careers')) {
         $breadcrumb[] = array(
             'url' => '/careers/',
             'text' => 'Careers',
         );
         array_splice($links, 1, -2, $breadcrumb);
     }

     if (is_singular(array('news','guides', 'post', 'whitepapers', 'legislation'))) {
         $breadcrumb[] = array(
             'url' => '/resources/',
             'text' => 'Knowledge Hub',
         );
         array_splice($links, 1, -2, $breadcrumb);
     }

     if (is_archive(array('news','guides', 'post', 'whitepapers', 'legislation'))) {
         $breadcrumb[] = array(
             'url' => '/resources/',
             'text' => 'Knowledge Hub',
         );
         array_splice($links, 1, -2, $breadcrumb);
     }

     return $links;
 }


 // exclude stories from search

 function search_filter($query)
 {
     if (! is_admin() && $query->is_main_query()) {
         if ($query->is_search) {
             $post_types = get_post_types(array(), 'names');
             $exclude = array(
                 'attachment',
                 'revision',
                 'nav_menu_item',
                 'acf-field',
                 'acf-field-group',
                 'stories',
                 'brochures',
                 'wp_block',
                 'wp_global_styles',
                 'cookielawinfo'
             );
             $include = array_diff($post_types, $exclude);
             $query->set('post_type', $include);
         }
     }
 }
 add_action('pre_get_posts', 'search_filter');

 // demo button on mobile menu
 add_filter('wp_nav_menu_items', 'add_demo_button', 10, 2);
 function add_demo_button($items, $args)
 {
     if ($args->theme_location == 'primary_nav') {
         $items .= '<a href="/shop/" class="d-lg-none btn btn-primary mt-2 mx-3"><strong>Buy Now</strong></a>';
         // $items .= '<button type="button" class="d-lg-none btn btn-primary mt-2 mx-3" data-toggle="modal" data-target="#demoModal">Book a Demo</button>';
     }
     return $items;
 }


 // function wpse_modify_category_query( $query ) {
//     if ( ! is_admin() && $query->is_main_query() ) {
//         if ( $query->is_category() ) {
//             $query->set( 'posts_per_page', 2 );
//         }
//     }
 // }
 // add_action( 'pre_get_posts', 'wpse_modify_category_query' );

 add_action('pre_get_posts', function ($q) {
     if (!is_admin() // Only target the front end queries
          && $q->is_main_query() // Targets the main query only
          && $q->is_category() // Only target category pages
     ) {
         $q->set('posts_per_page', 10);
         $q->set('ignore_sticky_posts', 1);
     }
 });

function other_videos($id) {

    ob_start();

    $q = new WP_Query(array(
        'post_type' => 'video',
        'posts_per_page' => 3,
        'post__not_in' => array($id)
    ));

    ?>
<style>
    .h2__container::before {
        content: '';
        position: absolute;
        height: 1px;
        background: #ffa823;
        left: 16px;
        right: 0;
        top: 24px;
    }
    .h2__container {
        position: relative;
        display: flex;
        justify-content: space-between;
    }
    .h2__link {
        font-size: 0.8rem;
        margin-top: 0.9rem;
        background-color: white;
        z-index: 99;
        padding-left: 0.5rem;
    }
    .h2__link::after {
        content: " >";
    }
    .h2__link a {
        color: #0a0f1c;
        font-weight: 600;
    }
    .h2__container h2 {
        position: relative;
        background-color: #fff;
        display: inline-block;
        padding-right: 0.5rem;
    }
</style>
    <div class="recent_news">
        <div class="h2__container mb-2">
            <h2>Other videos</h2>
            <div class="h2__link"><a href="/video/" class="noline">View all</a></div>
        </div>
        <div class="row">
            <?php
    while ($q->have_posts()) {
        $q->the_post();
        $img = get_vimeo_data_from_id(get_field('vimeo_id'), 'thumbnail_url') ?: get_stylesheet_directory_uri() . '/img/ps-logo-placeholder.png';
        ?>
            <div class="col-md-4 mb-4 mb-lg-0">
                <div class="guide">
                    <a href="<?=get_the_permalink(get_the_ID())?>">
                        <div class="guide__image">
                            <img src="<?=$img?>">
                        </div>
                        <div class="guide__inner">
                            <div class="guide__title"><?=get_the_title(get_the_ID())?></div>
                        </div>
                    </a>
                </div>
            </div>
        <?php
    }
        ?>
        </div>
    </div>
    <?php

    return ob_get_clean();

}
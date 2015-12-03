<?php

add_action('admin_init', 'my_remove_menu_pages');
add_action('wp_dashboard_setup', 'remove_dashboard_widgets');
add_action('wp_before_admin_bar_render', 'remove_admin_bar_links');
add_action('init', 'registration_post_type', 0);
add_action('init', 'program_post_type', 0);
add_action('init', 'speakers_post_type', 0);
add_action('init', 'sponsorships_post_type', 0);
add_action('wp_enqueue_scripts', 'add_style');

add_theme_support('post-thumbnails');

function add_style() {
    wp_enqueue_script('jquery');
    wp_enqueue_style('bootsrtap_style_main', get_template_directory_uri() . '/css/bootstrap.css');
    wp_enqueue_style('bootsrtap_style_theme', get_template_directory_uri() . '/css/bootstrap-theme.css');
    wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css');
    wp_enqueue_style('owl', get_template_directory_uri() . '/css/owl.carousel.css');
    wp_enqueue_style('theme_main_styles', get_template_directory_uri() . '/css/main.css');
    wp_enqueue_script('bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery', '', true);
    wp_enqueue_script('owl_js', get_template_directory_uri() . '/js/owl.carousel.min.js', 'jquery', '', true);
    wp_enqueue_script('main_js', get_template_directory_uri() . '/js/main.js', 'jquery', '', true);
}

function my_remove_menu_pages() {
    remove_menu_page('edit.php');
}

function remove_admin_bar_links() {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('new-content');
    $wp_admin_bar->remove_menu('new-link');
    $wp_admin_bar->remove_menu('comments');
}

function remove_dashboard_widgets() {
    global $wp_meta_boxes;


    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
    update_user_meta(get_current_user_id(), 'show_welcome_panel', false);
    remove_meta_box('dashboard_activity', 'dashboard', 'normal');
}

if (function_exists('acf_add_options_page')) {

    acf_add_options_page(array(
        'page_title' => 'Theme General Settings',
        'menu_title' => 'Theme Settings',
        'menu_slug' => 'theme-general-settings',
        'capability' => 'edit_posts',
        'redirect' => false
    ));
}

function program_post_type() {

    $labels = array(
        'name' => _x('Programs', 'Post Type General Name', 'congress'),
        'singular_name' => _x('Programs', 'Post Type Singular Name', 'congress'),
        'menu_name' => __('Programs', 'congress'),
        'name_admin_bar' => __('Programs', 'congress'),
        'parent_item_colon' => __('Program Item:', 'congress'),
        'all_items' => __('All Items', 'congress'),
        'add_new_item' => __('Add New program', 'congress'),
        'add_new' => __('Add program', 'congress'),
        'new_item' => __('New program', 'congress'),
        'edit_item' => __('Edit program', 'congress'),
        'update_item' => __('Update program', 'congress'),
        'view_item' => __('View program', 'congress'),
        'search_items' => __('Search program', 'congress'),
        'not_found' => __('Not found', 'congress'),
        'not_found_in_trash' => __('Not found in Trash', 'congress'),
        'items_list' => __('Programs list', 'congress'),
        'items_list_navigation' => __('Programs list navigation', 'congress'),
        'filter_items_list' => __('Filter programs list', 'congress'),
    );
    $args = array(
        'label' => __('Programs', 'congress'),
        'description' => __('Programs', 'congress'),
        'labels' => $labels,
        'supports' => array('title', 'editor', 'thumbnail', 'revisions'),
        'taxonomies' => array(),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 10,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => true,
        'publicly_queryable' => true,
        'capability_type' => 'post',
    );
    register_post_type('programs', $args);
}

function speakers_post_type() {

    $labels = array(
        'name' => _x('Speakers', 'Post Type General Name', 'congress'),
        'singular_name' => _x('Speakers', 'Post Type Singular Name', 'congress'),
        'menu_name' => __('Speakers', 'congress'),
        'name_admin_bar' => __('Speakers', 'congress'),
        'parent_item_colon' => __('Speaker:', 'congress'),
        'all_items' => __('All Speakers', 'congress'),
        'add_new_item' => __('Add Speaker program', 'congress'),
        'add_new' => __('Add Speaker', 'congress'),
        'new_item' => __('New Speaker', 'congress'),
        'edit_item' => __('Edit Speaker', 'congress'),
        'update_item' => __('Update Speaker', 'congress'),
        'view_item' => __('View Speaker', 'congress'),
        'search_items' => __('Search Speaker', 'congress'),
        'not_found' => __('Not found', 'congress'),
        'not_found_in_trash' => __('Not found in Trash', 'congress'),
        'items_list' => __('Speakers list', 'congress'),
        'items_list_navigation' => __('Speakers list navigation', 'congress'),
        'filter_items_list' => __('Filter Speakers list', 'congress'),
    );
    $args = array(
        'label' => __('Speakers', 'congress'),
        'description' => __('Speakers', 'congress'),
        'labels' => $labels,
        'supports' => array('title', 'editor', 'thumbnail', 'revisions'),
        'taxonomies' => array(),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 10,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => true,
        'publicly_queryable' => true,
        'capability_type' => 'post',
    );
    register_post_type('speakers', $args);
}

function registration_post_type() {

    $labels = array(
        'name' => _x('Registrations', 'Post Type General Name', 'congress'),
        'singular_name' => _x('Registrations', 'Post Type Singular Name', 'congress'),
        'menu_name' => __('Registrations', 'congress'),
        'name_admin_bar' => __('Registrations', 'congress'),
        'parent_item_colon' => __('Registration:', 'congress'),
        'all_items' => __('All Registrations', 'congress'),
        'add_new_item' => __('Add Registration program', 'congress'),
        'add_new' => __('Add Registration', 'congress'),
        'new_item' => __('New Registration', 'congress'),
        'edit_item' => __('Edit Registration', 'congress'),
        'update_item' => __('Update Registration', 'congress'),
        'view_item' => __('View Registration', 'congress'),
        'search_items' => __('Search Registration', 'congress'),
        'not_found' => __('Not found', 'congress'),
        'not_found_in_trash' => __('Not found in Trash', 'congress'),
        'items_list' => __('Registrations list', 'congress'),
        'items_list_navigation' => __('Registrations list navigation', 'congress'),
        'filter_items_list' => __('Filter Registrations list', 'congress'),
    );
    $args = array(
        'label' => __('Registrations', 'congress'),
        'description' => __('Registrations', 'congress'),
        'labels' => $labels,
        'supports' => array('title', 'editor', 'thumbnail', 'revisions'),
        'taxonomies' => array(),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 10,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => true,
        'publicly_queryable' => true,
        'capability_type' => 'post',
    );
    register_post_type('registrations', $args);
}
function sponsorships_post_type() {

    $labels = array(
        'name' => _x('Sponsorships', 'Post Type General Name', 'congress'),
        'singular_name' => _x('Sponsorships', 'Post Type Singular Name', 'congress'),
        'menu_name' => __('Sponsorships', 'congress'),
        'name_admin_bar' => __('Sponsorships', 'congress'),
        'parent_item_colon' => __('Sponsorships:', 'congress'),
        'all_items' => __('All Sponsorships', 'congress'),
        'add_new_item' => __('Add Sponsorship program', 'congress'),
        'add_new' => __('Add Sponsorship', 'congress'),
        'new_item' => __('New Sponsorship', 'congress'),
        'edit_item' => __('Edit Sponsorship', 'congress'),
        'update_item' => __('Update Sponsorship', 'congress'),
        'view_item' => __('View Sponsorship', 'congress'),
        'search_items' => __('Search Sponsorship', 'congress'),
        'not_found' => __('Not found', 'congress'),
        'not_found_in_trash' => __('Not found in Trash', 'congress'),
        'items_list' => __('Sponsorships list', 'congress'),
        'items_list_navigation' => __('Sponsorships list navigation', 'congress'),
        'filter_items_list' => __('Filter Sponsorships list', 'congress'),
    );
    $args = array(
        'label' => __('Sponsorships', 'congress'),
        'description' => __('Sponsorships', 'congress'),
        'labels' => $labels,
        'supports' => array('title','thumbnail'),
        'taxonomies' => array(),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 10,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => true,
        'publicly_queryable' => true,
        'capability_type' => 'post',
    );
    register_post_type('sponsorships', $args);
}

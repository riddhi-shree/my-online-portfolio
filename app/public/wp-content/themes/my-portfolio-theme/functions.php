<?php 
function load_css_and_javascript_files() {
    wp_enqueue_script('main-js', get_theme_file_uri('/build/index.js'), array('jquery'), '1.0', true);
    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('load_main_styles', get_theme_file_uri('/build/style-index.css'));
    wp_enqueue_style('load_extra_styles', get_theme_file_uri('./build/index.css'));
}

add_action('wp_enqueue_scripts', 'load_css_and_javascript_files');

function my_portfolio_theme_setup() {
    register_nav_menu('headerMenuLocation', 'Header Menu Location');
    register_nav_menu('footerMenuLocation1', 'Footer Menu Location1');
    register_nav_menu('footerMenuLocation2', 'Footer Menu Location2');
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'my_portfolio_theme_setup');
?>
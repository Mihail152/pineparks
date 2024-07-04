<?php
// add scripts
function theme_name_scripts()
{
    wp_enqueue_style('pineparks-style', get_template_directory_uri() . '/css/style.min.css');
    wp_enqueue_style('blankslate-style', get_stylesheet_uri());
    wp_enqueue_script('jquery');
    wp_enqueue_script('pineparks-scripts', get_template_directory_uri() . '/js/scripts.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'theme_name_scripts');

// add ajax_url
function js_variables()
{
    $variables = array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'is_mobile' => wp_is_mobile()
    );
    echo (
        '<script type="text/javascript">window.wp_data = ' .
        json_encode($variables) .
        ';</script>'
    );
}
add_action('wp_head', 'js_variables');

// calculator
add_action('wp_ajax_calculator', 'calculator_ajax');
add_action('wp_ajax_nopriv_calculator', 'calculator_ajax');
function calculator_ajax()
{
    $method = $_POST['method'];
    $operand1 = $_POST['operand1'];
    $operand2 = $_POST['operand2'];
    if (is_numeric($method) && is_numeric($operand1) && is_numeric($operand2)) {
        switch ($method) {
            case 1:
                $summa = $operand1 + $operand2;
                break;
            case 2:
                $summa = $operand1 - $operand2;
                break;
            case 3:
                $summa = $operand1 * $operand2;
                break;
            case 4:
                $summa = $operand1 / $operand2;
                break;
        }
    }

    echo $summa;

    die;
}


add_action('after_setup_theme', 'blankslate_setup');
function blankslate_setup()
{
    load_theme_textdomain('blankslate', get_template_directory() . '/languages');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('responsive-embeds');
    add_theme_support('automatic-feed-links');
    add_theme_support('html5', array('search-form', 'navigation-widgets'));
    add_theme_support('appearance-tools');
    add_theme_support('woocommerce');
    global $content_width;
    if (!isset($content_width)) {
        $content_width = 1920;
    }
    register_nav_menus(array('main-menu' => esc_html__('Main Menu', 'blankslate')));
    register_nav_menus(array('footer-menu-1' => esc_html__('Footer Menu 1', 'blankslate')));
    register_nav_menus(array('footer-menu-2' => esc_html__('Footer Menu 2', 'blankslate')));
}
add_action('admin_notices', 'blankslate_notice');
function blankslate_schema_type()
{
    $schema = 'https://schema.org/';
    if (is_single()) {
        $type = "Article";
    } elseif (is_author()) {
        $type = 'ProfilePage';
    } elseif (is_search()) {
        $type = 'SearchResultsPage';
    } else {
        $type = 'WebPage';
    }
    echo 'itemscope itemtype="' . esc_url($schema) . esc_attr($type) . '"';
}
add_filter('nav_menu_link_attributes', 'blankslate_schema_url', 10);
function blankslate_schema_url($atts)
{
    $atts['itemprop'] = 'url';
    return $atts;
}

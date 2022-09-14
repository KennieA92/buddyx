<?php
// Exit if accessed directly
if (!defined('ABSPATH')) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if (!function_exists('chld_thm_cfg_locale_css')) :
    function chld_thm_cfg_locale_css($uri)
    {
        if (empty($uri) && is_rtl() && file_exists(get_template_directory() . '/rtl.css'))
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter('locale_stylesheet_uri', 'chld_thm_cfg_locale_css');

if (!function_exists('child_theme_configurator_css')) :
    function child_theme_configurator_css()
    {
        wp_enqueue_style('chld_thm_cfg_child', trailingslashit(get_stylesheet_directory_uri()) . 'style.css', array('buddyx-global', 'buddyx-site-loader', 'buddyx-load-fontawesome', 'buddyx-buddypress', 'buddyx-platform', 'buddyx-bbpress', 'buddyx-slick', 'buddyx-dark-mode'));
    }
endif;
add_action('wp_enqueue_scripts', 'child_theme_configurator_css', 10);

// END ENQUEUE PARENT ACTION

function my_login_stylesheet()
{
    wp_enqueue_style('custom-login', get_stylesheet_directory_uri() . '/style-login.css');
    wp_enqueue_script('custom-login', get_stylesheet_directory_uri() . '/style-login.js');
}
add_action('login_enqueue_scripts', 'my_login_stylesheet');


function my_login_logo()
{ ?>
    <style type="text/css">
        #login h1 a,
        .login h1 a {
            height: 200px;
            width: 200px;
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/site-login-logo.png);
            background-size: 200px, 200px;
        }
    </style>
<?php }
add_action('login_enqueue_scripts', 'my_login_logo');

function my_buddyx_sub_header()
{ ?>
    <div class="buddyx-sub-header-test">
        <img class="banner-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/images/site-login-logo.png" alt="">
    </div>
    <style type="text/css">
        .buddyx-sub-header-test {
            background: linear-gradient(180deg, #28364A 33%, #1E2939 100%);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 250px;
            width: 100vw;
        }

        .banner-logo {
            height: 200px;
            width: 200px;
        }
    </style>
<?php }
add_action('buddyx_header_before', 'my_buddyx_sub_header');

//used to remove the admin bar at top.
//add_theme_support('admin-bar', array('callback' => '__return_false'));



function my_nav_css_stylesheet()
{
    wp_enqueue_style('custom-nav', get_stylesheet_directory_uri() . '/style-nav.css');
}
add_action('wp_enqueue_scripts', 'my_nav_css_stylesheet');

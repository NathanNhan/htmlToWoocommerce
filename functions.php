<?php

function load_assets()
{

    wp_enqueue_style("bootstrapcss", get_theme_file_uri() . '/assets/css/vendor/bootstrap.min.css', array(), "1.1", 'all');
    wp_enqueue_style("vandella", get_theme_file_uri() . '/assets/css/vendor/vandella.css', array(), '1.0.2', 'all');
    wp_enqueue_style("jellybelly", get_theme_file_uri() . '/assets/css/vendor/jellybelly.css', array(), '1.0.3', 'all');
    wp_enqueue_style("icofont", get_theme_file_uri() . '/assets/css/vendor/icofont.min.css', array(), '1.0.3', 'all');
    wp_enqueue_style("fontello", get_theme_file_uri() . '/assets/css/vendor/fontello.css', array(), '1.0.3', 'all');
    wp_enqueue_style("easyzoom", get_theme_file_uri() . '/assets/css/plugins/easyzoom.css', array(), '1.0.3', 'all');
    wp_enqueue_style("slick", get_theme_file_uri() . '/assets/css/plugins/slick.css', array(), '1.0.3', 'all');
    wp_enqueue_style("nice-select", get_theme_file_uri() . '/assets/css/plugins/nice-select.css', array(), '1.0.3', 'all');
    wp_enqueue_style("animate", get_theme_file_uri() . '/assets/css/plugins/animate.css', array(), '1.0.3', 'all');
    wp_enqueue_style("magnific", get_theme_file_uri() . '/assets/css/plugins/magnific-popup.css', array(), '1.0.3', 'all');
    wp_enqueue_style("jquery-ui", get_theme_file_uri() . '/assets/css/plugins/jquery-ui.css', array(), '1.0.3', 'all');
    wp_enqueue_style("style", get_theme_file_uri() . '/assets/css/style.css', array(), '1.0.3', 'all');

    wp_enqueue_script("modernizr-3.11.7.min", get_theme_file_uri() . '/assets/js/vendor/modernizr-3.11.7.min.js', array('jquery'), '1.02', true);
    wp_enqueue_script("jquery-v3.6.0.min", get_theme_file_uri() . '/assets/js/vendor/jquery-v3.6.0.min.js', array(), '1.02', true);
    wp_enqueue_script("jquery-migrate-v3.3.2", get_theme_file_uri() . '/assets/js/vendor/jquery-migrate-v3.3.2.min.js', array(), '1.02', true);
    wp_enqueue_script("popper", get_theme_file_uri() . '/assets/js/vendor/popper.js', array('jquery'), '1.02', true);
    wp_enqueue_script("bootstrap.min.js", get_theme_file_uri() . '/assets/js/vendor/bootstrap.min.js', array('jquery'), '1.02', true);
    wp_enqueue_script("svg-injector.min.js", get_theme_file_uri() . '/assets/js/plugins/svg-injector.min.js', array('jquery'), '1.02', true);

    wp_enqueue_script('slick.js', get_theme_file_uri('/assets/js/plugins/slick.js'), array('jquery'), '1.0.1', true);

    wp_enqueue_script("countdown.min.js", get_theme_file_uri() . '/assets/js/plugins/countdown.js', array('jquery'), '1.02', true);
    wp_enqueue_script("wow.min.js", get_theme_file_uri() . '/assets/js/plugins/wow.js', array('jquery'), '1.02', true);
    wp_enqueue_script("instafeed.min.js", get_theme_file_uri() . '/assets/js/plugins/instafeed.js', array('jquery'), '1.02', true);
    wp_enqueue_script("jquery.nice-select.min.js", get_theme_file_uri() . '/assets/js/plugins/jquery.nice-select.min.js', array('jquery'), '1.02', true);
    wp_enqueue_script("mouse-parallax.js", get_theme_file_uri() . '/assets/js/plugins/mouse-parallax.js', array('jquery'), '1.02', true);
    wp_enqueue_script("images-loaded.js", get_theme_file_uri() . '/assets/js/plugins/images-loaded.js', array('jquery'), '1.02', true);
    wp_enqueue_script("isotope.js", get_theme_file_uri() . '/assets/js/plugins/isotope.js', array('jquery'), '1.02', true);
    wp_enqueue_script("jquery-ui.js", get_theme_file_uri() . '/assets/js/plugins/jquery-ui.js', array('jquery'), '1.02', true);

    wp_enqueue_script("magnific-popup.js", get_theme_file_uri() . '/assets/js/plugins/magnific-popup.js', array('jquery'), '1.02', true);
    wp_enqueue_script("easyzoom.js", get_theme_file_uri() . '/assets/js/plugins/easyzoom.js', array('jquery'), '1.02', true);
    wp_enqueue_script("scrollup.js", get_theme_file_uri() . '/assets/js/plugins/scrollup.js', array('jquery'), '1.02', true);
    wp_enqueue_script("ajax-mail.js", get_theme_file_uri() . '/assets/js/plugins/ajax-mail.js', array('jquery'), '1.02', true);

    wp_enqueue_script("main.js", get_theme_file_uri() . '/assets/js/main.js', array('jquery'), '1.02', true);
}
add_action("wp_enqueue_scripts", "load_assets");

//Đăng ký menu
function add_menu()
{
    add_theme_support('menus');
    register_nav_menus(array(
        'themeLocationOne' => 'Header Menu One',
    ));
}

//Thêm menu vào wordpress -> footer
add_action("init", "add_menu");

add_theme_support('woocommerce');

add_theme_support('post-thumbnails');

add_filter('loop_shop_columns',function ($columns) {
        return is_shop() ? 3 : 4;
    },
    10,
    1
);

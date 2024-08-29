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
    wp_localize_script("main.js", "ajaxurl", array(
    "baseURL" => admin_url("admin-ajax.php"),
));

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


add_action('init', 'remove_breadcrumb');
function remove_breadcrumb() {
    remove_action('woocommerce_before_main_content','woocommerce_breadcrumb', 20);
}


add_action('init', 'remove_title');
function remove_title()
{
    remove_action('woocommerce_shop_loop_header', 'woocommerce_product_taxonomy_archive_header', 10);
}


add_action('init', 'remove_result_count');
function remove_result_count()
{
    remove_action('woocommerce_before_shop_loop', 'woocommerce_result_count', 20);
}


add_action('init', 'remove_catalog_ordering');
function remove_catalog_ordering()
{
    remove_action('woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30);
}


add_action('init', 'remove_pagination');
function remove_pagination()
{
    remove_action('woocommerce_after_shop_loop', 'woocommerce_pagination', 10);
}


//Add new Pagination for woocommerce
function custom_pagination()
{
    global $wp_query;
    $big = 999999999;
    $pages = paginate_links(array(
        'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
        'format' => '?page=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages,
        'prev_next' => false,
        'type' => 'array',
        'prev_next' => true,
        'prev_text' => '<i class="icofont-long-arrow-left"></i>',
        'next_text' => '<i class="icofont-long-arrow-right"></i>',
    ));
    if (is_array($pages)) {
        $current_page = (get_query_var('paged') == 0) ? 1 : get_query_var('paged');
        echo '<div class="pro-pagination-style text-center mt-50">';
        echo '<ul>';
        foreach ($pages as $i => $page) {
            if ($current_page == 1 && $i == 0) {
                echo "<li><a class='active'>$page</a></li>";
            } else {
                if ($current_page != 1 && $current_page == $i) {
                    echo "<li><a class='active'>$page</a></li>";
                } else {
                    echo "<li>$page</li>";
                }
            }
        }
        echo '</div>';
        echo '</ul>';
    }
}










   
   
   // Lets create the function to house our form
remove_action('woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30);

function woocommerce_catalog_page_ordering()
{
    ?>
<?php echo '<span class="itemsorder">Items Per Page:' ?>
    <form action="" method="POST" name="results" class="woocommerce-ordering">
    <select name="woocommerce-sort-by-columns" id="woocommerce-sort-by-columns" class="sortby" onchange="this.form.submit()">
<?php

//Get products on page reload
    if (isset($_POST['woocommerce-sort-by-columns']) && (($_COOKIE['shop_pageResults'] != $_POST['woocommerce-sort-by-columns']))) {
        $numberOfProductsPerPage = $_POST['woocommerce-sort-by-columns'];
    } else {
        $numberOfProductsPerPage = $_COOKIE['shop_pageResults'];
    }

//  This is where you can change the amounts per page that the user will use  feel free to change the numbers and text as you want, in my case we had 4 products per row so I chose to have multiples of four for the user to select.
    $shopCatalog_orderby = apply_filters('woocommerce_sortby_page', array(
        //Add as many of these as you like, -1 shows all products per page
        //  ''       => __('Results per page', 'woocommerce'),
        '-1' => __('All', 'diking'),
        '2' => __('2', 'diking'),
        '4' => __('4','diking'),
        '6' => __('6', 'diking')
    ));

    foreach ($shopCatalog_orderby as $sort_id => $sort_name) {
        echo '<option value="' . $sort_id . '" ' . selected($numberOfProductsPerPage, $sort_id, true) . ' >' . $sort_name . '</option>';
    }

    ?>
</select>
</form>

<?php echo ' </span>' ?>
<?php
}

// now we set our cookie if we need to
function dl_sort_by_page($count)
{
    if (isset($_COOKIE['shop_pageResults'])) { // if normal page load with cookie
        $count = $_COOKIE['shop_pageResults'];
    }
    if (isset($_POST['woocommerce-sort-by-columns'])) { //if form submitted
        setcookie('shop_pageResults', $_POST['woocommerce-sort-by-columns'], time() + 1209600, '/', 'diking', false); //this will fail if any part of page has been output- hope this works!
        $count = $_POST['woocommerce-sort-by-columns'];
    }
    // else normal page load and no cookie
    return $count;
}

add_filter('loop_shop_per_page', 'dl_sort_by_page');
add_action('woocommerce_before_shop_loop', 'woocommerce_catalog_page_ordering', 20);




function arphabet_widgets_init()
{

    register_sidebar(array(
        'name' => 'Home right sidebar',
        'id' => 'home_right_1',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="rounded">',
        'after_title' => '</h2>',
    ));

}
add_action('widgets_init', 'arphabet_widgets_init');









   






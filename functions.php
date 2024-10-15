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
    wp_enqueue_style("mystyle", get_theme_file_uri() . '/style.css', array(), '1.0.1', 'all');
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
    "baseURL" => admin_url("admin-ajax.php")
));

    wp_enqueue_script("myjs.js", get_theme_file_uri() . '/assets/js/my_javascript.js', array('jquery'), '1.02', true);


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
        return 3;
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
    <div class="row flex-row-reverse">
   <div class="shop-top-bar pb-10">
    <div class="shop-top-bar-left">
        <div class="shop-tab nav">
            <a href="#shop-1" class="active" data-bs-toggle="tab"><img class="inject-me" src="assets/images/icon-img/shop-grid.svg" alt=""></a>
            <a href="#shop-2" data-bs-toggle="tab"><img class="inject-me" src="assets/images/icon-img/shop-list.svg" alt=""></a>
        </div>
    </div>
<?php echo '<div class="shop-top-bar-right">' ?>
    <div class="shop-page-list">
<?php
    //If Cookies === column user chọn => add class active vào thẻ a 

//  This is where you can change the amounts per page that the user will use  feel free to change the numbers and text as you want, in my case we had 4 products per row so I chose to have multiples of four for the user to select.
    $shopCatalog_orderby = apply_filters('woocommerce_sortby_page', array(
        //Add as many of these as you like, -1 shows all products per page
        //  ''       => __('Results per page', 'woocommerce'),
        '-1' => __('SHOW', 'diking'),
        '2' => __('2', 'diking'),
        '4' => __('4','diking'),
        '6' => __('6', 'diking')
    ));
    ?>
     <ul>
    <?php 
    foreach ($shopCatalog_orderby as $sort_id => $sort_name) {
        ?>
            <li id="number_per_page" data-number=<?= $sort_id ?>><a href='?woocommerce-sort-by-columns=<?= $sort_id ?>'><?= $sort_name ?></a></li>
        <?php 
    }

    ?>
   </ul>
</div>
</div>
</div>
<script>
    //Lấy dường dẫn URL
    const urlParams = new URLSearchParams(window.location.search);
    //Lấy giá trị tham số woocommerce-sort-by-columns
    const myParam = urlParams.get('woocommerce-sort-by-columns');
    //Lấy phần tử li
    let liTags = document.querySelectorAll("#number_per_page");
    //Vòng lặp và add class active nếu data number = params 
    liTags.forEach(element => {
        if(element.getAttribute('data-number') == myParam) {
            element.classList.add("active");
        };
  });
</script>
<?php echo ' </div>' ?>
<?php
}

// now we set our cookie if we need to
function dl_sort_by_page($count)
{
    if (isset($_COOKIE['shop_pageResults'])) { // if normal page load with cookie
        $count = $_COOKIE['shop_pageResults'];
    }
    if (isset($_GET['woocommerce-sort-by-columns'])) { //if form submitted
        setcookie('shop_pageResults', $_GET['woocommerce-sort-by-columns'], time() + 1209600, '/', 'diking', false); //this will fail if any part of page has been output- hope this works!
        $count = $_GET['woocommerce-sort-by-columns'];
    }
    // else normal page load and no cookie
    return $count;
}

add_filter('loop_shop_per_page', 'dl_sort_by_page');
add_action('woocommerce_before_shop_loop', 'woocommerce_catalog_page_ordering', 20);



add_filter( 'use_widgets_block_editor', '__return_false' );



//Init widget sidebar
function arphabet_widgets_init()
{

    register_sidebar(array(
        'name' => 'Shop Left sidebar',
        'id' => 'left_sidebar',
        'before_widget' => '<div class="sidebar-widget">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="pro-sidebar-title">',
        'after_title' => '</h4>',
    ));

}
add_action('widgets_init', 'arphabet_widgets_init');



//Handle Ajax Filter product by price 
add_action("wp_ajax_filterPriceSlider", 'filterPrice');
add_action('wp_ajax_nopriv_filterPriceSlider', 'filterPrice');

function filterPrice()
{
//Lấy 2 giá trị min price và max price từ client
    $min = sanitize_text_field($_POST['min_price']);
    $max = sanitize_text_field($_POST['max_price']);
//Custom query -> truy vấn ra các sản phẩm trong giữa min và max price

    $args = array(
        'post_type' => 'product',
        'paged' => 1,
        'meta_query' => array(
            array(
                'key' => '_price',
                'value' => array($min, $max),
                'type' => 'numeric',
                'compare' => 'BETWEEN',
            ),
        ),
    );

    $query = new WP_Query($args);

    $item = array();
    while ($query->have_posts()):
        $query->the_post();
        $item[] = array(
            'ID' => get_the_ID(),
            'name' => get_the_title(get_the_ID()),
            'price' => wc_get_product(get_the_ID())->get_price_html(),
            'regular_price' => wc_get_product(get_the_ID())->get_regular_price(),
            'sale_price' => wc_get_product(get_the_ID())->get_sale_price(),
            'image' => wc_get_product(get_the_ID())->get_image(),
            'link' => get_the_permalink(get_the_ID()),
            'stock_status' => wc_get_product(get_the_ID())->get_stock_status(),
        );

    endwhile;

    // total: tổng số records
    // limit: số records hiển thị trên mỗi trang

    $total = $query->found_posts;
    $limit = get_option( 'posts_per_page' );
    $paginate = ceil($total / $limit);
    $results = array(
        'paginate' => $paginate, 
        'data' => $item
    );
   
    
    print_r(json_encode($results));
    wp_die();
}

//Handle AJAX cho phân trang
add_action("wp_ajax_paginateAjax", 'pagination');
add_action('wp_ajax_nopriv_paginateAjax', 'pagination');
function pagination () {
    //Học viên tự làm dựa theo phần handle ajax lọc theo giá ở trên
}





//Add minites and plus button to quantity for woocommerce
add_action('woocommerce_before_quantity_input_field', 'bbloomer_display_quantity_minus');

function bbloomer_display_quantity_minus()
{
    if (!is_product() && !is_cart()) {
        return;
    }

    echo '<button type="button" class="minus" >-</button>';
}

add_action('woocommerce_after_quantity_input_field', 'bbloomer_display_quantity_plus');

function bbloomer_display_quantity_plus()
{
    if (!is_product() && !is_cart()) {
        return;
    }

    echo '<button type="button" class="plus" >+</button>';
}

add_action('wp_footer', 'bbloomer_add_cart_quantity_plus_minus');

function bbloomer_add_cart_quantity_plus_minus()
{
    wc_enqueue_js("
      $('form.cart, td.product-quantity').on( 'click', 'button.plus, button.minus', function() {
            var qty = $( this ).parents( '.quantity' ).find( '.qty' );
            var val   = parseFloat(qty.val());
            var max = parseFloat(qty.attr( 'max' ));
            var min = parseFloat(qty.attr( 'min' ));
            var step = parseFloat(qty.attr( 'step' ));
            if ( $( this ).is( '.plus' ) ) {
               if ( max && ( max <= val ) ) {
                  qty.val( max );
               } else {
                  qty.val( val + step );
               }
            } else {
               if ( min && ( min >= val ) ) {
                  qty.val( min );
               } else if ( val > 1 ) {
                  qty.val( val - step );
               }
            }
         });
   ");
}


//Empty Cart 
add_action('wp_loaded', 'custom_woocommerce_empty_cart_action', 20);
function custom_woocommerce_empty_cart_action()
{
    if (isset($_GET['empty_cart']) && 'yes' === esc_html($_GET['empty_cart'])) {
        WC()->cart->empty_cart();

        $referer = wp_get_referer() ? esc_url(remove_query_arg('empty_cart')) : wc_get_cart_url();
        wp_safe_redirect($referer);
    }
}


//Add label quantity for single product
add_action('woocommerce_before_add_to_cart_quantity', 'bbloomer_echo_qty_front_add_cart');

function bbloomer_echo_qty_front_add_cart()
{
    global $product;
    if ($product->get_min_purchase_quantity() == $product->get_max_purchase_quantity()) {
        return;
    }

    echo '<div class="qty">Quantity: </div>';
}


//Handle Position Add To Cart button and price , description
add_action('init', 'handle_position_detail_product');
function handle_position_detail_product() {
    remove_action('woocommerce_single_product_summary','woocommerce_template_single_price',10);
    remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt',20 );
    remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30);
    remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);


} 

add_action('woocommerce_single_product_summary', 'woocommerce_template_single_price', 20);
add_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 10);
add_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 30);

add_action('woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 40);




add_action('woocommerce_single_product_summary', 'bbloomer_product_sold_count', 10);

function bbloomer_product_sold_count()
{
    global $product;
    $units_sold = $product->get_total_sales();
    if ($units_sold) {
        echo '<p>' . sprintf(__('%s orders', 'woocommerce'), $units_sold) . '</p>';
    }

}





function dis () {
    wp_dequeue_script('wc-checkout');
}

add_action('wp_enqueue_scripts', 'dis');




add_filter('wc_get_template', 'hide_order_recieved_customer_details', 10, 1);
function hide_order_recieved_customer_details($template_name)
{
    // Targeting thankyou page and the customer details
    if (is_wc_endpoint_url('order-received') &&  strpos($template_name, 'order-details.php') !== false) {
        return false;
    }
    return $template_name;
}


 //Remove checkout login form default
 remove_action( 'woocommerce_before_checkout_form', 'woocommerce_checkout_login_form', 10 );


 
 //remove checkout billing form

 add_filter( 'woocommerce_checkout_fields' , 'remove_field' );
 function remove_field($data) {
	unset($data["billing"]["billing_company"]);
    unset($data["billing"]["billing_phone"]);
    unset($data["billing"]["billing_email"]);
    unset($data["billing"]["billing_city"]);
    
    $data['billing']['billing_country']['priority'] = 65;

    //Add class row first / row last into country field and post code field
    $data['billing']['billing_country']['class'][0] = 'form-row-first';
    $data['billing']['billing_postcode']['class'][0] = 'form-row-last' ;

    //clear all label

    $data["billing"]["billing_first_name"]['label'] = false;
    $data["billing"]["billing_last_name"]['label'] = false;
    $data["billing"]["billing_country"]['label'] = false;
    $data["billing"]["billing_postcode"]['label'] = false;
    $data["billing"]["billing_address_1"]['label'] = false;
    
    //add place holder
    $data["billing"]['billing_first_name']['placeholder'] = 'First Name';
    $data["billing"]['billing_last_name']['placeholder'] = 'Last Name';
    $data["billing"]['billing_postcode']['placeholder'] = 'Post Code';
    $data["billing"]['billing_address_2']['placeholder'] = "Address More";




	return $data;
 }



 function guest_init() {
    $labels = array(
        'name'                  => _x( 'Guest', 'guest', 'diking' ),
        'singular_name'         => _x( 'Guest', 'guest', 'diking' ),
        'menu_name'             => _x( 'Guest', 'Guest', 'diking' ),
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_rest'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'guest' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor'),
    );
 
    register_post_type( 'guest', $args );
}
 
add_action( 'init', 'guest_init' );




function create_new_guest()
{
 

    $new_post = array(
    'ID' => '',
    'post_type' => 'guest',
    'post_status' => $_POST['status'],
    'post_title' => $_POST['title'],
    'post_content' => $_POST['content'],
);
//here i introduce the data in the custom type post
$post_id = wp_insert_post($new_post);
if(!empty($post_id)) {
    print_r(json_encode(array("status" => "200", "message" => "We created new guest successfully!")));

}

wp_die();

}

add_action('wp_ajax_nopriv_createGuest', 'create_new_guest');
add_action('wp_ajax_createGuest', 'create_new_guest');



































   






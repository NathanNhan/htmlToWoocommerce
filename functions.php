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
        "baseURL" => admin_url("admin-ajax.php"),
    ));


    wp_enqueue_script("wishlist.js", get_theme_file_uri() . '/assets/js/wishlist.js', array('jquery'), '1.0.0', true);
    wp_localize_script("wishlist.js", "ajaxurl", array(
        "wishlist" => admin_url("admin-ajax.php"),
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

// Kích hoạt tính năng phóng to ảnh (Zoom)
add_theme_support( 'wc-product-gallery-zoom' );

// Kích hoạt Lightbox (Mở ảnh to trong popup)
add_theme_support( 'wc-product-gallery-lightbox' );

// Kích hoạt Slider mặc định của WooCommerce (Flexslider)
add_theme_support( 'wc-product-gallery-slider' );




add_filter('loop_shop_columns', function ($columns) {
    return 3;
},
    10,
    1
);

add_action('init', 'remove_breadcrumb');
function remove_breadcrumb()
{
    remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);
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
        '4' => __('4', 'diking'),
        '6' => __('6', 'diking'),
    ));
    ?>
     <ul>
    <?php
foreach ($shopCatalog_orderby as $sort_id => $sort_name) {
        ?>
            <li id="number_per_page" data-number=<?=$sort_id?>><a href='?woocommerce-sort-by-columns=<?=$sort_id?>'><?=$sort_name?></a></li>
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

add_filter('use_widgets_block_editor', '__return_false');

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
    $paged = isset($_POST['paged']) ? $_POST['paged'] : 1;
    $min = sanitize_text_field($_POST['min_price']);
    $max = sanitize_text_field($_POST['max_price']);
//Custom query -> truy vấn ra các sản phẩm trong giữa min và max price

    $args = array(
        'post_type' => 'product',
        'paged' => (int) $paged,
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
    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            ?>
               <li class="product-wrap product type-product post-<?= get_the_ID(); ?> status-publish instock product_cat-music has-post-thumbnail downloadable virtual purchasable product-type-simple">
                        <a href="<?= get_the_permalink(get_the_ID()); ?>" class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><?= wc_get_product(get_the_ID())->get_image() ?><h2 class="woocommerce-loop-product__title"><?= get_the_title(get_the_ID()); ?></h2>
                            <span class="price"><?= wc_get_product(get_the_ID())->get_price_html() ?></span>
                                </a>
                                  <div class="product-action-position-1 text-center">
                                            <div class="product-content">
                                                 <h4><a href="<?= get_the_permalink(get_the_ID()); ?>"><?= get_the_title(get_the_ID()); ?></a></h4>
                                                 <div class="product-price">
                                                     <span><?= wc_get_product(get_the_ID())->get_regular_price() ?></span>
                                                    <span class="old-price"><?= wc_get_product(get_the_ID())->get_sale_price(); ?></span>
                                                 </div>
                                         </div>
                                         <div class="product-action-wrap">
                                             <div class="product-action-cart">
                                                 <a href="?add-to-cart=<?= get_the_ID(); ?>" aria-describedby="woocommerce_loop_add_to_cart_link_describedby_<?= get_the_ID(); ?>" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="<?= get_the_ID(); ?>" data-product_sku="woo-album" aria-label="Thêm vào giỏ hàng: “<?= get_the_title(get_the_ID()) ?>”" rel="nofollow" data-product_name="<?= get_the_title(get_the_ID()) ?>" data-price="<?= wc_get_product(get_the_ID())->get_sale_price() ? wc_get_product(get_the_ID())->get_sale_price() : wc_get_product(get_the_ID())->get_regular_price(); ?>">Thêm vào giỏ hàng</a>
                                             </div>
                                             <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-zoom"></i></button>
                                             <button title="Add to Compare"><i class="icon-compare"></i></button>
                                             <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                         </div>
                                         </div><span id="woocommerce_loop_add_to_cart_link_describedby_ <?= get_the_ID(); ?> " class="screen-reader-text">
                                         </span>
                </li>

            <?php
}
    }

    $pages = $query->max_num_pages;

    $links = paginate_links( [
        'base' => '%_%',
        'format' => '?paged=%#%',
        'total' => $pages,
        'current' => $paged,
        'type' => 'list',
        'prev_next' => true,
        'prev_text' => '<i class="icofont-long-arrow-left"></i>',
        'next_text' => '<i class="icofont-long-arrow-right"></i>'

    ] );
  
        if($links) {
            echo '<div class="pro-pagination-style text-center mt-50"';
            echo '<ul>';
            echo $links;
            echo '</ul>';
            echo '</div>';
        }

     else {
        echo "Sorry, We have not found any posts";
    }

    
    wp_die();
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
      jQuery('form.cart, td.product-quantity').on( 'click', 'button.plus, button.minus', function() {
            var qty = jQuery( this ).parents( '.quantity' ).find( '.qty' );
            jQuery('.woocommerce-cart-form').find('button[name=update_cart]').removeAttr('disabled');

            var val   = parseFloat(qty.val());
         
            var max = parseFloat(qty.attr( 'max' ));
            var min = parseFloat(qty.attr( 'min' ));
            var step = parseFloat(qty.attr( 'step' ));
            
            if ( $( this ).is( '.plus' ) ) {
               if ( max && ( max <= val ) ) {
                  qty.val( max );
               } else {
                  var result = val + step;
                  qty.val( result );
               }
            } else {
               if ( min && ( min >= val ) ) {
                  qty.val( min );
               } else if ( val > 1 ) {
                var result = val - step;
                  qty.val( result);
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
function handle_position_detail_product()
{
    remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_price', 10);
    remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20);
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

function dis()
{
    wp_dequeue_script('wc-checkout');
}

add_action('wp_enqueue_scripts', 'dis');

add_filter('wc_get_template', 'hide_order_recieved_customer_details', 10, 1);
function hide_order_recieved_customer_details($template_name)
{
    // Targeting thankyou page and the customer details
    if (is_wc_endpoint_url('order-received') && strpos($template_name, 'order-details.php') !== false) {
        return false;
    }
    return $template_name;
}

//Remove checkout login form default
remove_action('woocommerce_before_checkout_form', 'woocommerce_checkout_login_form', 10);

//remove checkout billing form

add_filter('woocommerce_checkout_fields', 'remove_field');
function remove_field($data)
{
    unset($data["billing"]["billing_company"]);
    unset($data["billing"]["billing_phone"]);
    unset($data["billing"]["billing_email"]);
    unset($data["billing"]["billing_city"]);

    $data['billing']['billing_country']['priority'] = 65;

    //Add class row first / row last into country field and post code field
    $data['billing']['billing_country']['class'][0] = 'form-row-first';
    $data['billing']['billing_postcode']['class'][0] = 'form-row-last';

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

function guest_init()
{
    $labels = array(
        'name' => _x('Guest', 'guest', 'diking'),
        'singular_name' => _x('Guest', 'guest', 'diking'),
        'menu_name' => _x('Guest', 'Guest', 'diking'),
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_rest' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'guest'),
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title', 'editor'),
    );

    register_post_type('guest', $args);
}

add_action('init', 'guest_init');

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
    if (!empty($post_id)) {
        print_r(json_encode(array("status" => "200", "message" => "We created new guest successfully!")));

    }

    wp_die();

}

add_action('wp_ajax_nopriv_createGuest', 'create_new_guest');
add_action('wp_ajax_createGuest', 'create_new_guest');


//handle quick view
function quick_view_product() {
    $product = array();
    if(isset($_POST['id'])) {
        $product = wc_get_product($_POST['id']);
    }
    $attributes_color = '';
    $arr_colors = [];
    if(isset($product) &&  $product->get_attribute('pa_color') != "") {
        $attributes_color = $product->get_attribute('pa_color');
        $arr_colors = explode(",",$attributes_color);
    }
    $attributes_size = '';
    $arr_size = [];
    if(isset($product) &&  $product->get_attribute('pa_size') != "") {
        $attributes_size = $product->get_attribute('pa_size'); 
        $arr_size = explode(",",$attributes_size);
    }
    print_r($arr_colors);
    ?>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true"></span></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-12 col-sm-6">
                                <div class="quickview-img">
                                    <!-- <img src="<?php echo get_theme_file_uri() . '/assets/images/product/product-3.jpg'?>" alt=""> -->
                                     <?= $product->get_image(); ?>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-7 col-12 col-sm-6">
                                <div class="product-details-content quickview-content">
                                    <h2><?= $product->get_name(); ?></h2>
                                    <div class="product-ratting-review-wrap">
                                        <div class="product-ratting-digit-wrap">
                                            <div class="product-ratting">
                                                <i class="icon-rating"></i>
                                                <i class="icon-rating"></i>
                                                <i class="icon-rating"></i>
                                                <i class="icon-rating"></i>
                                                <i class="icon-star-empty"></i>
                                            </div>
                                            <div class="product-digit">
                                                <span><?= $product->get_average_rating(); ?></span>
                                            </div>
                                        </div>
                                        <div class="product-review-order">
                                            <span><?= $product->get_review_count() ?> Reviews</span>
                                            <span><?= $product->get_total_sales(); ?> orders</span>
                                        </div>
                                    </div>
                                    <p><?= $product->get_short_description(); ?></p>
                                    <div class="pro-details-price">
                                        <span><?= $product->get_sale_price(); ?></span>
                                        <span class="old-price"><?= $product->get_regular_price(); ?></span>
                                    </div>
                                    <div class="pro-details-color-wrap">
                                        <span>Color:</span>
                                        <div class="pro-details-color-content">
                                            <ul>
                                                <li><a class="white" href="#">Black</a></li>
                                                <li><a class="azalea" href="#">Blue</a></li>
                                                <li><a class="dolly" href="#">Green</a></li>
                                                <li><a class="peach-orange" href="#">Orange</a></li>
                                                <li><a class="mona-lisa active" href="#">Pink</a></li>
                                                <li><a class="cupid" href="#">gray</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="pro-details-size">
                                        <span>Size:</span>
                                        <div class="pro-details-size-content">
                                            <ul>
                                                <li><a href="#">XS</a></li>
                                                <li><a href="#">S</a></li>
                                                <li><a href="#">M</a></li>
                                                <li><a href="#">L</a></li>
                                                <li><a href="#">XL</a></li>
                                                <li><a href="#">XXL</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="pro-details-quality">
                                        <span>Quantity:</span>
                                        <div class="cart-plus-minus">
                                            <input readonly class="cart-plus-minus-box" type="text" name="qtybutton" value="<?= $product->get_stock_quantity(); ?>">
                                        </div>
                                    </div>
                                    <div class="product-details-meta">
                                        <ul>
                                            <li><span>Model:</span> <a href="#"><?= $product->get_sku(); ?></a></li>
                                            <!-- <li><span>Ship To</span> <a href="#">2834 Laurel Lane</a>, <a href="#">Mentone</a> , <a href="#">Texas</a></li> -->
                                        </ul>
                                    </div>
                                    <div class="pro-details-action-wrap">
                                        <div class="pro-details-buy-now">
                                            <a href="<?= $product->add_to_cart_url(); ?>">Buy Now</a>
                                        </div>
                                        <div class="pro-details-action">
                                            <a title="Add to Cart" href="#"><i class="icon-basket"></i></a>
                                            <a title="Add to Wishlist" href="#"><i class="icon-heart"></i></a>
                                            <a class="social" title="Social" href="#"><i class="icon-share"></i></a>
                                            <div class="product-dec-social">
                                                <a class="facebook" title="Facebook" href="#"><i class="icon-social-facebook-square"></i></a>
                                                <a class="twitter" title="Twitter" href="#"><i class="icon-social-twitter"></i></a>
                                                <a class="instagram" title="Instagram" href="#"><i class="icon-social-instagram"></i></a>
                                                <a class="pinterest" title="Pinterest" href="#"><i class="icon-social-pinterest"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


   <?php 
}

add_action('wp_ajax_nopriv_quickview', 'quick_view_product');
add_action('wp_ajax_quickview', 'quick_view_product');



//add to wishlist / like product




add_action('wp_ajax_get_wishlist_products', 'tn_get_wishlist_products');
add_action('wp_ajax_nopriv_get_wishlist_products', 'tn_get_wishlist_products');

function tn_get_wishlist_products() {
    $ids = isset($_POST['ids']) ? array_map('intval', $_POST['ids']) : array();

    if (empty($ids)) {
        wp_send_json_error('No products found');
    }

    $args = array(
        'post_type' => 'product',
        'post__in'  => $ids,
        'posts_per_page' => -1,
        'orderby' => 'post__in'
    );

    $query = new WP_Query($args);
    $html = '';

    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            $product = wc_get_product(get_the_ID());
            
            $html .= '<tr>';
            $html .= '<td class="cart-product">
                        <div class="product-img-info-wrap">
                            <div class="product-img">
                                <a href="'.get_permalink().'">'.get_the_post_thumbnail(get_the_ID(), 'thumbnail').'</a>
                            </div>
                            <div class="product-info">
                                <h4><a href="'.get_permalink().'">'.get_the_title().'</a></h4>
                            </div>
                        </div>
                      </td>';
            $html .= '<td class="product-price"><span class="amount">'.$product->get_price_html().'</span></td>';
            $html .= '<td class="th-text-center">'.($product->is_in_stock() ? 'Còn hàng' : 'Hết hàng').'</td>';
            $html .= '<td class="product-wishlist-cart">
                        <a href="'.get_permalink().'">Add To Cart</a>
                      </td>';
            $html .= '<td class="th-text-center">
                        <a href="#" class="remove-wishlist" data-id="'.get_the_ID().'">❌</a>
                      </td>';
            $html .= '</tr>';
        }
        wp_reset_postdata();
    }

    wp_send_json_success($html);
}





function custom_sidebar_product_filter() {
    // 1. Lấy dữ liệu hiện tại từ URL để đánh dấu trạng thái "Active"
    $current_cat   = isset($_GET['f_cat']) ? $_GET['f_cat'] : '';
    $current_color = isset($_GET['f_color']) ? $_GET['f_color'] : '';
    $current_size  = isset($_GET['f_size']) ? $_GET['f_size'] : '';
    $current_price = isset($_GET['f_price']) ? $_GET['f_price'] : '';
    // Xử lý giá min/max từ URL
    $min_price = isset($_GET['min_price']) ? intval($_GET['min_price']) : 0;
    $max_price = isset($_GET['max_price']) ? intval($_GET['max_price']) : 100000; // Giá tối đa mặc định

    // Hàm hỗ trợ tạo link lọc nhanh
    function get_filter_link($param, $value) {
        $link = strtok($_SERVER["REQUEST_URI"], '?');
        $query = $_GET;
        // $query = [
        //     "f_cat" => "clothing",
        // ];
        if ($value) {
            $query[$param] = $value;
        } else {
            unset($query[$param]);
        }
        // Giữ lại các tham số lọc khác khi nhấn vào một lọc mới
        return add_query_arg($query, $link);
    }

    ob_start(); ?>
    <div class="col-lg-3">
        <div class="shop-sidebar-style">
            
            <div class="sidebar-widget">
                <h4 class="pro-sidebar-title">Categories</h4>
                <div class="sidebar-widget-categori mt-45 mb-70">
                    <ul>
                        <li><a href="<?php echo get_filter_link('f_cat', ''); ?>">All</a></li>
                        <?php
                        $categories = get_terms('product_cat', array('hide_empty' => true));
                        foreach ($categories as $cat) :
                            $active = ($current_cat == $cat->slug) ? 'active' : '';
                            echo '<li><a class="'.$active.'" href="'.get_filter_link('f_cat', $cat->slug).'">'.$cat->name.'</a></li>';
                        endforeach; ?>
                    </ul>
                </div>
            </div>

            <div class="sidebar-widget">
                <h4 class="pro-sidebar-title">Filter By Color</h4>
                <div class="pro-details-color-content sidebar-widget-color mt-45 mb-70">
                    <ul>
                        <?php
                        $colors = get_terms('pa_color', array('hide_empty' => true));
                        foreach ($colors as $color) :
                            $active = ($current_color == $color->slug) ? 'active' : '';
                            echo '<li><a class="'.$color->slug.' '.$active.'" href="'.get_filter_link('f_color', $color->slug).'">'.'</a></li>';
                        endforeach; ?>
                    </ul>
                </div>
            </div>

            <div class="sidebar-widget">
                <h4 class="pro-sidebar-title">Filter By Price Range</h4>
                <div class="price-filter mt-55 mb-65">
                    <div id="slider-range"></div>
                    <div class="price-slider-amount">
                        <div class="label-input">
                            <span>Price: </span>
                            <input type="text" id="amount" name="price" readonly placeholder="Add Your Price" />
                        </div>
                        <form id="price-filter-form" method="GET" action="<?php echo strtok($_SERVER["REQUEST_URI"], '?'); ?>">
                            <?php if($current_cat): ?><input type="hidden" name="f_cat" value="<?php echo $current_cat; ?>"><?php endif; ?>
                            <?php if($current_color): ?><input type="hidden" name="f_color" value="<?php echo $current_color; ?>"><?php endif; ?>
                            <?php if($current_size): ?><input type="hidden" name="f_size" value="<?php echo $current_size; ?>"><?php endif; ?>
                            
                            <input type="hidden" id="min_price" name="min_price" value="<?php echo $min_price; ?>">
                            <input type="hidden" id="max_price" name="max_price" value="<?php echo $max_price; ?>">
                            <button type="submit" class="btn-filter" style="margin-top:15px; background:#333; color:#fff; border:none; padding:5px 15px; cursor:pointer;">Filter Now</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
   

    
    <?php
    return ob_get_clean();
}
add_shortcode('custom_sidebar_filter', 'custom_sidebar_product_filter');

add_action('wp_footer', function() {
    ?>
    <script type="text/javascript">
    (function($) {
        "use strict";
        
        // Hàm kiểm tra định kỳ xem thư viện đã sẵn sàng chưa
        var checkSliderLibrary = setInterval(function() {
            if ($.isFunction($.fn.slider)) {
                clearInterval(checkSliderLibrary); // Dừng kiểm tra khi đã thấy thư viện
                
                var minVal = parseInt($("#min_price").val()) || 0;
                var maxVal = parseInt($("#max_price").val()) || 100000;

                $("#slider-range").slider({
                    range: true,
                    min: 0,
                    max: 100000,
                    values: [minVal, maxVal],
                    slide: function(event, ui) {
                        $("#amount").val(ui.values[0].toLocaleString() + "đ - " + ui.values[1].toLocaleString() + "đ");
                        $("#min_price").val(ui.values[0]);
                        $("#max_price").val(ui.values[1]);
                    }
                });
                
                $("#amount").val($("#slider-range").slider("values", 0).toLocaleString('vi-VN') + "đ - " + $("#slider-range").slider("values", 1).toLocaleString("vi-VN") + "đ");
                console.log("Slider initialized successfully!");
            }
        }, 100); // Kiểm tra mỗi 0.1 giây

    })(jQuery);
    </script>
    <?php
}, 999);



add_action( 'woocommerce_product_query', 'custom_force_product_filter_logic', 999 );

function custom_force_product_filter_logic( $query ) {
    if ( is_admin() ) return;

    // Lấy các giá trị từ URL
    $min = isset($_GET['min_price']) ? intval($_GET['min_price']) : '';
    $max = isset($_GET['max_price']) ? intval($_GET['max_price']) : '';
    
    $f_cat = isset($_GET['f_cat']) ? sanitize_text_field($_GET['f_cat']) : '';
    $f_color = isset($_GET['f_color']) ? sanitize_text_field($_GET['f_color']) : '';
    $f_size = isset($_GET['f_size']) ? sanitize_text_field($_GET['f_size']) : '';

    $meta_query = (array) $query->get( 'meta_query' );
    $tax_query  = (array) $query->get( 'tax_query' );

    

    // 1. ÉP LỌC GIÁ (Cách này can thiệp sâu vào tầng meta của Woo)
    if ( $min !== '' && $max !== '' ) {
        $meta_query[] = array(
            'key'     => '_price',
            'value'   => array( $min, $max ),
            'compare' => 'BETWEEN',
            'type'    => 'NUMERIC',
        );
    }

    // 2. ÉP LỌC CHUYÊN MỤC
    if ( ! empty( $f_cat ) ) {
        $tax_query[] = array(
            'taxonomy' => 'product_cat',
            'field'    => 'slug',
            'terms'    => $f_cat,
            'operator' => 'IN',
        );
    }

    // 3. ÉP LỌC THUỘC TÍNH (Màu sắc & Kích thước)
    if ( ! empty( $f_color ) ) {
        $tax_query[] = array(
            'taxonomy' => 'pa_color',
            'field'    => 'slug',
            'terms'    => $f_color,
            'operator' => 'IN',
        );
    }
    
    if ( ! empty( $f_size ) ) {
        $tax_query[] = array(
            'taxonomy' => 'pa_size',
            'field'    => 'slug',
            'terms'    => $f_size,
            'operator' => 'IN',
        );
    }

    $query->set( 'meta_query', $meta_query );
    $query->set( 'tax_query', $tax_query );
}








//filter products with AJAX
// 1. Thêm bọc thẻ cho nội dung sidebar (Sửa lại shortcode)
function custom_sidebar_product_filter_ajax() {
     $current_cat   = '';
     $current_color = '';
     $min_price = 0;
     $max_price = 100000;

    ob_start(); ?>
    <div class="col-lg-3">
        <div class="shop-sidebar-style" id="ajax-filter-container">
            <div class="sidebar-widget">
                <h4 class="pro-sidebar-title">Categories</h4>
                <div class="sidebar-widget-categori mt-45 mb-70">
                    <ul class="filter-list" data-filter="f_cat">
                        <li><a href="#" data-value="">All</a></li>
                        <?php
                        $categories = get_terms('product_cat', array('hide_empty' => true));
                        foreach ($categories as $cat) :
                            $active = ($current_cat == $cat->slug) ? 'active' : '';
                            echo '<li><a class="'.$active.'" href="#" data-value="'.$cat->slug.'">'.$cat->name.'</a></li>';
                        endforeach; ?>
                    </ul>
                </div>
            </div>

            <div class="sidebar-widget">
                <h4 class="pro-sidebar-title">Filter By Color</h4>
                <div class="pro-details-color-content sidebar-widget-color mt-45 mb-70">
                    <ul class="filter-list" data-filter="f_color">
                        <?php
                        $colors = get_terms('pa_color', array('hide_empty' => true));
                        foreach ($colors as $color) :
                            $active = ($current_color == $color->slug) ? 'active' : '';
                            echo '<li><a class="'.$color->slug.' '.$active.'" href="#" data-value="'.$color->slug.'"></a></li>';
                        endforeach; ?>
                    </ul>
                </div>
            </div>

            <div class="sidebar-widget">
                <h4 class="pro-sidebar-title">Filter By Price Range</h4>
                <div class="price-filter mt-55 mb-65">
                    <div id="slider-range"></div>
                    <div class="price-slider-amount">
                        <div class="label-input">
                            <span>Price: </span>
                            <input type="text" id="amount" readonly />
                        </div>
                        <input type="hidden" id="min_price" value="<?php echo $min_price; ?>">
                        <input type="hidden" id="max_price" value="<?php echo $max_price; ?>">
                        <button type="button" class="btn-filter ajax-trigger-filter" style="margin-top:15px; background:#333; color:#fff; border:none; padding:5px 15px; cursor:pointer;">Filter Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    return ob_get_clean();
}
add_shortcode('custom_sidebar_filter_ajax', 'custom_sidebar_product_filter_ajax');

// 2. Xử lý AJAX trả về danh sách sản phẩm
add_action('wp_ajax_filter_products', 'ajax_filter_products_handler');
add_action('wp_ajax_nopriv_filter_products', 'ajax_filter_products_handler');

function ajax_filter_products_handler() {
    $min = isset($_POST['min_price']) ? intval($_POST['min_price']) : 0;
    $max = isset($_POST['max_price']) ? intval($_POST['max_price']) : 100000;
    $f_cat = isset($_POST['f_cat']) ? sanitize_text_field($_POST['f_cat']) : '';
    $f_color = isset($_POST['f_color']) ? sanitize_text_field($_POST['f_color']) : '';
    // Lấy số trang hiện tại từ AJAX
    $paged = isset($_POST['paged']) ? intval($_POST['paged']) : 1;
    

    $args = array(
        'post_type' => 'product',
        'posts_per_page' => 12,
        'paged'          => $paged,
        'status' => 'publish',
        'meta_query' => array(
            array(
                'key' => '_price',
                'value' => array($min, $max),
                'compare' => 'BETWEEN',
                'type' => 'NUMERIC'
            )
        ),
        'tax_query' => array('relation' => 'AND')
    );

    if ($f_cat) {
        $args['tax_query'][] = array('taxonomy' => 'product_cat', 'field' => 'slug', 'terms' => $f_cat);
    }
    if ($f_color) {
        $args['tax_query'][] = array('taxonomy' => 'pa_color', 'field' => 'slug', 'terms' => $f_color);
    }

    $loop = new WP_Query($args);
    
    if ($loop->have_posts()) {
        echo '<div class="row">'; // Tùy chỉnh class này theo theme của bạn
        while ($loop->have_posts()) : $loop->the_post();
            wc_get_template_part('content', 'product');
        endwhile;
        echo '</div>';

        // Hiển thị phân trang
        echo '<div class="ajax-pagination-wrapper mt-40">';
        echo paginate_links(array(
            'base'      => '%_%',
            'format'    => '?paged=%#%',
            'current'   => $paged,
            'total'     => $loop->max_num_pages,
            'prev_text' => '&laquo;',
            'next_text' => '&raquo;',
            'type'      => 'list',
        ));
        echo '</div>';
    } else {
        echo '<p>No products found.</p>';
    }
    wp_reset_postdata();
    die();
}



add_action('wp_footer', function() {
    ?>
    <script type="text/javascript">

    (function($) {
        "use strict";

        // Cấu hình ID vùng chứa sản phẩm (CẦN KIỂM TRA LẠI CLASS/ID TRONG THEME)
        var $productContainer = $('.products'); 

        function loadProducts(page = 1) {
            var data = {
                action: 'filter_products',
                f_cat: $('.sidebar-widget-categori a.active').data('value') || '',
                f_color: $('.pro-details-color-content a.active').data('value') || '',
                min_price: $("#min_price").val(),
                max_price: $("#max_price").val(),
                paged: page
            };

            $productContainer.css('opacity', '0.5'); // Hiệu ứng loading

            $.ajax({
                url: '<?php echo admin_url('admin-ajax.php'); ?>',
                type: 'POST',
                data: data,
                success: function(response) {
                    $productContainer.html(response).css('opacity', '1');
                }
            });
        }

        // Bắt sự kiện Click vào Category/Color
        $(document).on('click', '.filter-list a, .pro-details-color-content a', function(e) {
            e.preventDefault();
            $(this).closest('ul').find('a').removeClass('active');
            $(this).addClass('active');
            loadProducts(1);
        });

        // Bắt sự kiện Nút Filter Price
        $(document).on('click', '.ajax-trigger-filter', function() {
            loadProducts(1);
        });

        // 3. Click phân trang AJAX
        $(document).on('click', '.ajax-pagination-wrapper a', function(e) {
            e.preventDefault();
            
            // Lấy số trang từ link (WordPress thường để dạng /page/2/ hoặc ?paged=2)
            var href = $(this).attr('href');
            var page = 1;

            if (href.indexOf('paged=') > -1) {
                page = href.split('paged=')[1].split(/[&?]/)[0];
            } else {
                var arr = href.split('/page/');
                if (arr.length > 1) {
                    page = parseInt(arr[1]);
                }
            }
            
            loadProducts(page);
        });

        // Khởi tạo Slider (Giữ nguyên logic của bạn)
        var checkSlider = setInterval(function() {
            if ($.isFunction($.fn.slider)) {
                clearInterval(checkSlider);
                var minVal = parseInt($("#min_price").val()) || 0;
                var maxVal = parseInt($("#max_price").val()) || 100000;

                $("#slider-range").slider({
                    range: true,
                    min: 0,
                    max: 100000,
                    values: [minVal, maxVal],
                    slide: function(event, ui) {
                        $("#amount").val(ui.values[0].toLocaleString() + "đ - " + ui.values[1].toLocaleString() + "đ");
                        $("#min_price").val(ui.values[0]);
                        $("#max_price").val(ui.values[1]);
                    }
                });
                $("#amount").val(minVal.toLocaleString('vi-VN') + "đ - " + maxVal.toLocaleString("vi-VN") + "đ");
            }
        }, 100);


        // --- TỰ ĐỘNG CHẠY KHI VỪA VÀO TRANG ---
        $(document).ready(function() {
            // Kiểm tra nếu đang ở trang có danh sách sản phẩm thì mới chạy
            if ($('.shop-area .products').length > 0) {
                loadProducts(1); 
            }
        });

    })(jQuery);
    </script>
    <style>
        /* CSS cơ bản để phân trang trông đẹp hơn */
        .ajax-pagination-wrapper ul { display: flex; list-style: none; padding: 0; gap: 10px; justify-content: center; }
        .ajax-pagination-wrapper ul li a, .ajax-pagination-wrapper ul li span {
            padding: 8px 15px; border: 1px solid #ddd; text-decoration: none; color: #333;
        }
        .ajax-pagination-wrapper ul li span.current { background: #333; color: #fff; border-color: #333; }
    </style>
    <?php
}, 999);

<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 8.6.0
 */

defined('ABSPATH') || exit;

get_header('shop');
?>
    <div class="breadcrumb-area breadcrumb-mt bg-gray breadcrumb-ptb-1">
            <div class="container">
                <div class="breadcrumb-content">
                    <h2>Fashion Shop</h2>
                    <p class="left">Seamlessly predominate enterprise metrics without performance based process improvements.</p>
                </div>
            </div>
            <div class="breadcrumb-img-2">
                <img src="<?php echo get_theme_file_uri() . '/assets/images/about/breadcrumb-3.png' ?>" alt="">
            </div>
        </div>
        <div class="categorie-area">
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="custom-col-8">
                        <div class="single-categories-5 text-center">
                            <div class="single-categories-5-img">
                                <a href="shop.html"><img class="inject-me" src="<?php echo get_theme_file_uri() . '/assets/images/icon-img/furniture-dress.svg' ?>" alt=""></a>
                            </div>
                            <div class="categorie-content-6">
                                <h4><a class="color-light" href="shop.html">Fashion</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-8">
                        <div class="single-categories-5 text-center">
                            <div class="single-categories-5-img">
                                <a href="shop.html"><img class="inject-me" src="<?php echo get_theme_file_uri() . '/assets/images/icon-img/furniture-headphone.svg' ?>" alt=""></a>
                            </div>
                            <div class="categorie-content-6">
                                <h4><a class="color-light" href="shop.html">Gadget</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-8">
                        <div class="single-categories-5 text-center">
                            <div class="single-categories-5-img">
                                <a href="shop.html"><img class="inject-me" src="<?php echo get_theme_file_uri() . '/assets/images/icon-img/furniture-chair.svg' ?>" alt=""></a>
                            </div>
                            <div class="categorie-content-6">
                                <h4><a class="color-light" href="shop.html">Furniture</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-8">
                        <div class="single-categories-5 text-center">
                            <div class="single-categories-5-img">
                                <a href="shop.html"><img class="inject-me" src="<?php echo get_theme_file_uri() . '/assets/images/icon-img/furniture-chair-2.svg' ?>" alt=""></a>
                            </div>
                            <div class="categorie-content-6">
                                <h4><a class="color-light" href="shop.html">Chair</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-8">
                        <div class="single-categories-5 text-center">
                            <div class="single-categories-5-img">
                                <a href="shop.html"><img class="inject-me" src="<?php echo get_theme_file_uri() . '/assets/images/icon-img/furniture-book.svg' ?>" alt=""></a>
                            </div>
                            <div class="categorie-content-6">
                                <h4><a class="color-light" href="shop.html">Book</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-8">
                        <div class="single-categories-5 text-center">
                            <div class="single-categories-5-img">
                                <a href="shop.html"><img class="inject-me" src="<?php echo get_theme_file_uri() . '/assets/images/icon-img/autos.svg' ?>" alt=""></a>
                            </div>
                            <div class="categorie-content-6">
                                <h4><a class="color-light" href="shop.html">Autos</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-8">
                        <div class="single-categories-5 text-center">
                            <div class="single-categories-5-img">
                                <a href="shop.html"><img class="inject-me" src="<?php echo get_theme_file_uri() . '/assets/images/icon-img/bicycle.svg' ?>" alt=""></a>
                            </div>
                            <div class="categorie-content-6">
                                <h4><a class="color-light" href="shop.html">Bicycle </a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-8">
                        <div class="single-categories-5 text-center">
                            <div class="single-categories-5-img">
                                <a href="shop.html"><img class="inject-me" src="<?php echo get_theme_file_uri() . '/assets/images/icon-img/fitness.svg' ?>" alt=""></a>
                            </div>
                            <div class="categorie-content-6">
                                <h4><a class="color-light" href="shop.html">Fitness</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shop-area pt-160 pb-160">
            <div class="container">
                <div class="shop-categorie-tab mb-75 nav">
                    <a href="#shop-categorie-1" data-bs-toggle="tab">Women</a>
                    <a href="#shop-categorie-2" class="active" data-bs-toggle="tab">men</a>
                    <a href="#shop-categorie-3" data-bs-toggle="tab">Kids</a>
                </div>
                <div class="row flex-row-reverse">
                    <div class="col-lg-9">
<?php
/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action('woocommerce_before_main_content');

/**
 * Hook: woocommerce_shop_loop_header.
 *
 * @since 8.6.0
 *
 * @hooked woocommerce_product_taxonomy_archive_header - 10
 */
do_action('woocommerce_shop_loop_header');

if (woocommerce_product_loop()) {

    /**
     * Hook: woocommerce_before_shop_loop.
     *
     * @hooked woocommerce_output_all_notices - 10
     * @hooked woocommerce_result_count - 20
     * @hooked woocommerce_catalog_ordering - 30
     */
    do_action('woocommerce_before_shop_loop');

    woocommerce_product_loop_start();

    if (wc_get_loop_prop('total')) {
        while (have_posts()) {
            the_post();

            /**
             * Hook: woocommerce_shop_loop.
             */
            do_action('woocommerce_shop_loop');

            wc_get_template_part('content', 'product');
        }
    }

    woocommerce_product_loop_end();

    /**
     * Hook: woocommerce_after_shop_loop.
     *
     * @hooked woocommerce_pagination - 10
     */
    do_action('woocommerce_after_shop_loop');
} else {
    /**
     * Hook: woocommerce_no_products_found.
     *
     * @hooked wc_no_products_found - 10
     */
    do_action('woocommerce_no_products_found');
}

/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action('woocommerce_after_main_content');

/**
 * Hook: woocommerce_sidebar.
 *
 * @hooked woocommerce_get_sidebar - 10
 */
do_action('woocommerce_sidebar');
?>
                    </div>
                    <div class="col-lg-3">
                        <div class="shop-sidebar-style">
                            <div class="sidebar-widget">
                                <h4 class="pro-sidebar-title">Subcategories</h4>
                                <div class="sidebar-widget-categori mt-45 mb-70">
                                    <ul>
                                        <li><a href="#">All</a> </li>
                                        <li><a class="active" href="#">Clothing</a> </li>
                                        <li><a href="#">Shoes</a> </li>
                                        <li><a href="#">Watches</a> </li>
                                        <li><a href="#">Jewelry</a> </li>
                                        <li><a href="#">Accessories</a> </li>
                                        <li><a href="#"> Big & Tall </a> </li>
                                        <li><a href="#">Contemporary</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-widget">
                                <h4 class="pro-sidebar-title">Filter By Color</h4>
                                <div class="pro-details-color-content sidebar-widget-color mt-45 mb-70">
                                    <ul>
                                        <li><a class="white" href="#">Black</a></li>
                                        <li><a class="azalea" href="#">Blue</a></li>
                                        <li><a class="dolly" href="#">Green</a></li>
                                        <li><a class="peach-orange" href="#">Orange</a></li>
                                        <li><a class="mona-lisa active" href="#">Pink</a></li>
                                        <li><a class="cupid" href="#">gray</a></li>
                                        <li><a class="one" href="#">one</a></li>
                                        <li><a class="two" href="#">two</a></li>
                                        <li><a class="three" href="#">three</a></li>
                                        <li><a class="four" href="#">four</a></li>
                                        <li><a class="five" href="#">five</a></li>
                                        <li><a class="six" href="#">six</a></li>
                                        <li><a class="seven" href="#">seven</a></li>
                                        <li><a class="eight" href="#">eight</a></li>
                                        <li><a class="nine" href="#">nine</a></li>
                                        <li><a class="ten" href="#">ten</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-widget">
                                <h4 class="pro-sidebar-title">Filter By Size</h4>
                                <div class="sidebar-widget-size mt-50 mb-75">
                                    <ul>
                                        <li><a href="#">XS</a> </li>
                                        <li><a href="#">S</a> </li>
                                        <li><a href="#">M</a> </li>
                                        <li><a href="#">L</a> </li>
                                        <li><a href="#">XL</a> </li>
                                        <li><a href="#">XXL</a> </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-widget">
                                <h4 class="pro-sidebar-title">Filter By Price Range</h4>
                                <div class="price-filter mt-55 mb-65">
                                    <div id="slider-range"></div>
                                    <div class="price-slider-amount">
                                        <div class="label-input">
                                            <span>Price: </span><input type="text" id="amount" name="price" placeholder="Add Your Price" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-widget">
                                <h4 class="pro-sidebar-title">Filter By Brand</h4>
                                <div class="sidebar-widget-brand-logo mt-50">
                                    <ul>
                                        <li><a href="#"><img src="<?php echo get_theme_file_uri() . '/assets/images/brand-logo/brand-logo-1.png' ?>" alt=""></a></li>
                                        <li><a href="#"><img src="<?php echo get_theme_file_uri() . '/assets/images/brand-logo/brand-logo-2.png' ?>" alt=""></a></li>
                                        <li><a href="#"><img src="<?php echo get_theme_file_uri() . '/assets/images/brand-logo/brand-logo-3.png' ?>" alt=""></a></li>
                                        <li><a href="#"><img src="<?php echo get_theme_file_uri() . '/assets/images/brand-logo/brand-logo-6.png' ?>" alt=""></a></li>
                                        <li><a href="#"><img src="<?php echo get_theme_file_uri() . '/assets/images/brand-logo/brand-logo-5.png' ?>" alt=""></a></li>
                                        <li><a href="#"><img src="<?php echo get_theme_file_uri() . '/assets/images/brand-logo/brand-logo-4.png' ?>" alt=""></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php
get_footer('shop');

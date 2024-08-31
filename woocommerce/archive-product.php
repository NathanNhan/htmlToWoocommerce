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
?>


<?php 
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
                    <div class="shop-top-bar pb-10">
                        <div class="shop-top-bar-left">
                            <div class="shop-tab nav">
                                <a href="#shop-1" class="active" data-bs-toggle="tab"><img class="inject-me" src="assets/images/icon-img/shop-grid.svg" alt=""></a>
                                <a href="#shop-2" data-bs-toggle="tab"><img class="inject-me" src="assets/images/icon-img/shop-list.svg" alt=""></a>
                            </div>
                        </div>
                        <div class="shop-top-bar-right">
                            <div class="shop-page-list">
                                <ul>
                                         <li>Show</li>
                                         <li class="active"><a class="page_list" href="javascript:void(0)"data-page="2">2</a></li>
                                         <li><a class="page_list"href="javascript:void(0)" data-page="4">4</a></li>
                                         <li><a class="page_list"href="javascript:void(0)"data-page="6">6</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
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
    custom_pagination();
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

?>

                    </div>
                   <?php get_sidebar(); ?>
                </div>
            </div>
        </div>
            
<?php
get_footer('shop');

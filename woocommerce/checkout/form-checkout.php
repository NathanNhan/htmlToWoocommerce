<?php
/**
 * Checkout Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-checkout.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

do_action( 'woocommerce_before_checkout_form', $checkout );

// If checkout registration is disabled and not logged in, the user cannot checkout.
if ( ! $checkout->is_registration_enabled() && $checkout->is_registration_required() && ! is_user_logged_in() ) {
    echo esc_html( apply_filters( 'woocommerce_checkout_must_be_logged_in_message', __( 'You must be logged in to checkout.', 'woocommerce' ) ) );
    return;
}
?>
          <div class="breadcrumb-area breadcrumb-mt breadcrumb-ptb-2">
            <div class="container">
                <div class="breadcrumb-content">
                    <h2>Checkout</h2>
                    <ul>
                        <li>
                            <a href="index.html">Home </a>
                        </li>
                        <li><span> > </span></li>
                        <li>
                            <a href="index.html">Product </a>
                        </li>
                        <li><span> > </span></li>
                        <li class="active"> Checkout </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="cart-check-order-link-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 ms-auto me-auto">
                        <div class="cart-check-order-link">
                            <a href="cart.html">Shopping Cart</a>
                            <a class="active" href="checkout.html">Check Out</a>
                            <a href="order-complete.html">Order Complete</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<div class="checkout-area bg-gray pt-160 pb-160">
			<div class="container">
<?php 
?>

<form name="checkout" method="post" class="checkout woocommerce-checkout" action="<?php echo esc_url( wc_get_checkout_url() ); ?>" enctype="multipart/form-data">
    <div class="row">
		<div class="col-lg-6">
			<div class="checkout-left-wrap">
				<div class="login-guest-top">
                                <div class="checkout-tab nav">
                                    <a href="#checkout-login" data-bs-toggle="tab">
                                        Log In
                                    </a>
                                    <a class="active" href="#checkout-guest" data-bs-toggle="tab">
                                        Buy as a Guest
                                    </a>
                                </div>
                                <div class="tab-content">
                                    <div id="checkout-login" class="tab-pane">
                                        <div class="checkout-login-wrap">
                                            <h4>Login information</h4>
                                            <div class="checkout-login-style">
                                                <form action="#">
                                                    <?php echo wc_get_template('checkout/form-login.php'); ?>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="checkout-guest" class="tab-pane active">
                                        <div class="checkout-guest-wrap">
                                            <h4>Contact information</h4>
                                            <div class="checkout-guest-style">
                                                <form action="#">
                                                    <input type="text" name="user-name" placeholder="Enter Mobile Number or Email">
                                                    <div class="guest-login-toggle-btn">
                                                        <input type="checkbox">
                                                        <label>Keep me up to date on news and exclusive offers</label>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
	<?php if ( $checkout->get_checkout_fields() ) : ?>

		<?php do_action( 'woocommerce_checkout_before_customer_details' ); ?>

		<div class="col2-set" id="customer_details">
			<div class="col-12">
				<?php do_action( 'woocommerce_checkout_billing' ); ?>
			</div>

			
		</div>

		<?php do_action( 'woocommerce_checkout_after_customer_details' ); ?>

	<?php endif; ?>
	    </div>
		
		</div>
	    <div class="col-lg-6">
	<?php do_action( 'woocommerce_checkout_before_order_review_heading' ); ?>
	
	
	<?php do_action( 'woocommerce_checkout_before_order_review' ); ?>
	<div id="order_review" class="woocommerce-checkout-review-order ">
        
        <?php do_action( 'woocommerce_checkout_order_review' ); ?>
		</div>
		
		<?php do_action( 'woocommerce_checkout_after_order_review' ); ?>
		</div>
		
 </div>

  <div class="col-12">
			<div class="back-continue-wrap">
                    <a href="<?php echo site_url("/cua-hang") ?>">Back to cart</a>
                    <a href="#">Please Order</a>
                </div>
		</div>
</form>

<?php do_action( 'woocommerce_after_checkout_form', $checkout ); ?>
</div>
</div>
<?php
/**
 * "Order received" message.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/order-received.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 8.8.0
 *
 * @var WC_Order|false $order
 */

defined( 'ABSPATH' ) || exit;
?>
 <div class="breadcrumb-area breadcrumb-mt breadcrumb-ptb-2">
            <div class="container">
                <div class="breadcrumb-content">
                    <h2>Order Complete</h2>
                    <ul>
                        <li>
                            <a href="index.html">Home </a>
                        </li>
                        <li><span> > </span></li>
                        <li>
                            <a href="index.html">Product </a>
                        </li>
                        <li><span> > </span></li>
                        <li class="active"> Order Complete </li>
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
                            <a href="checkout.html">Check Out</a>
                            <a class="active" href="order-complete.html">Order Complete</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="order-complete-area bg-gray pt-160 pb-160">
            <div class="container">
<p class="woocommerce-notice woocommerce-notice--success woocommerce-thankyou-order-received">
	 <div class="order-complete-title">
	<?php
	/**
	 * Filter the message shown after a checkout is complete.
	 *
	 * @since 2.2.0
	 *
	 * @param string         $message The message.
	 * @param WC_Order|false $order   The order created during checkout, or false if order data is not available.
	 */
	$message = apply_filters(
		'woocommerce_thankyou_order_received_text',
		esc_html( __( 'Thank you. Your order has been received.', 'woocommerce' ) ),
		$order
	);

	// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	echo $message;
	?>
	 <div class="order-complete-title">
</p>
</div>
</div>

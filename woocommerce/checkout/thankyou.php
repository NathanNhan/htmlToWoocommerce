<?php
/**
 * Thankyou page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/thankyou.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 8.1.0
 *
 * @var WC_Order $order
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

	 
<div class="woocommerce-order">

	<?php
	if ( $order ) :

		do_action( 'woocommerce_before_thankyou', $order->get_id() );
		?>

		<?php if ( $order->has_status( 'failed' ) ) : ?>

			<p class="woocommerce-notice woocommerce-notice--error woocommerce-thankyou-order-failed"><?php esc_html_e( 'Unfortunately your order cannot be processed as the originating bank/merchant has declined your transaction. Please attempt your purchase again.', 'woocommerce' ); ?></p>

			<p class="woocommerce-notice woocommerce-notice--error woocommerce-thankyou-order-failed-actions">
				<a href="<?php echo esc_url( $order->get_checkout_payment_url() ); ?>" class="button pay"><?php esc_html_e( 'Pay', 'woocommerce' ); ?></a>
				<?php if ( is_user_logged_in() ) : ?>
					<a href="<?php echo esc_url( wc_get_page_permalink( 'myaccount' ) ); ?>" class="button pay"><?php esc_html_e( 'My account', 'woocommerce' ); ?></a>
				<?php endif; ?>
			</p>

		<?php else : ?>
            <div class="order-complete-title">
			<?php wc_get_template( 'checkout/order-received.php', array( 'order' => $order ) ); ?>
             </div>

			
                <div class="order-product-details">
                    <form action="#">
                        <div class="table-content table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th>ORDER NO</th>
                                        <th>DATE</th>
                                        <th>TOTAL</th>
                                        <th>PAYMENT METHOD</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                         
											<p><?php echo esc_html($order->get_order_number()); ?></p>
                                        </td>
                                        <td>
                                           
											<p><?php echo esc_html(wc_format_datetime($order->get_date_created())); ?></p>
                                        </td>
                                        <td>
                                            
											<p><?php echo wp_kses_post($order->get_formatted_order_total()); ?></p>
                                        </td>
                                        <td>
                                            
											<p><?php echo wp_kses_post($order->get_payment_method_title()); ?></p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>

		<?php endif; ?>

		
		<?php do_action( 'woocommerce_thankyou', $order->get_id() ); ?>

	<?php else : ?>

		<?php wc_get_template( 'checkout/order-received.php', array( 'order' => false ) ); ?>

	<?php endif; ?>

</div>

</div>
</div>






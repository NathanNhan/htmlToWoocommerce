<?php
/**
 * Checkout Order Receipt Template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/order-receipt.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.2.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
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
                                            <?php esc_html_e('Order number:', 'woocommerce');?>
											<strong><?php echo esc_html($order->get_order_number()); ?></strong>
                                        </td>
                                        <td>
                                            <?php esc_html_e('Date:', 'woocommerce');?>
											<strong><?php echo esc_html(wc_format_datetime($order->get_date_created())); ?></strong>
                                        </td>
                                        <td>
                                            <?php esc_html_e('Total:', 'woocommerce');?>
											<strong><?php echo wp_kses_post($order->get_formatted_order_total()); ?></strong>
                                        </td>
                                        <td>
                                            <?php esc_html_e('Payment method:', 'woocommerce');?>
											<strong><?php echo wp_kses_post($order->get_payment_method_title()); ?></strong>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>


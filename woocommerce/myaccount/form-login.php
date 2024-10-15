<?php
/**
 * Login Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-login.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 9.2.0
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
?>
<div class="breadcrumb-area breadcrumb-mt breadcrumb-ptb-2">
            <div class="container">
                <div class="breadcrumb-content text-center">
                    <h2>Login / Register</h2>
                    <ul>
                        <li>
                            <a href="index.html">Home </a>
                        </li>
                        <li><span> > </span></li>
                        <li>
                            <a href="index.html">Product </a>
                        </li>
                        <li><span> > </span></li>
                        <li class="active"> Login / Register </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="login-register-area bg-gray pt-155 pb-160">
            <div class="container">
                <div class="row">
					<div class="col-lg-7 col-md-12 ms-auto me-auto">
                        <div class="login-register-wrapper">
							<div class="login-register-tab-list nav">
                                <a class="active" data-bs-toggle="tab" href="#lg1">
                                    <h4> login </h4>
                                </a>
                                <a data-bs-toggle="tab" href="#lg2">
                                    <h4> register </h4>
                                </a>
                            </div>
							<div class="tab-content">

<?php 
do_action('woocommerce_before_customer_login_form');?>

<?php if ('yes' === get_option('woocommerce_enable_myaccount_registration')): ?>

<!-- <div class="u-columns col2-set" id="customer_login">
   
	<div class="u-column1 col-1"> -->
		<div id="lg1" class="tab-pane active">
                                    <div class="login-form-container">
                                        <div class="login-register-form">

<?php endif;?>

		

		<form class="" method="post">

			<?php do_action('woocommerce_login_form_start');?>

			
				
				<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username" id="username" placeholder="<?php esc_html_e("username"); ?>" autocomplete="username" value="<?php echo (!empty($_POST['username'])) ? esc_attr(wp_unslash($_POST['username'])) : ''; ?>"  aria-required="true" /><?php // @codingStandardsIgnoreLine ?>
			
			
				
				<input class="woocommerce-Input woocommerce-Input--text input-text" type="password" name="password"  id="password"  placeholder="<?php esc_html_e("password"); ?>" autocomplete="current-password" required aria-required="true" />
			

			<?php do_action('woocommerce_login_form');?>
            <div class="button-box">
				<div class="login-toggle-btn">
					<input class="" name="rememberme" type="checkbox" id="rememberme" value="forever" /> <span><?php esc_html_e('Remember me', 'woocommerce');?></span>
					<a href="<?php echo esc_url(wp_lostpassword_url()); ?>"><?php esc_html_e('Lost your password?', 'woocommerce');?></a>
				<div>
			</div>
			<?php wp_nonce_field('woocommerce-login', 'woocommerce-login-nonce');?>
			<button type="submit" class="woocommerce-button button woocommerce-form-login__submit<?php echo esc_attr(wc_wp_theme_get_element_class_name('button') ? ' ' . wc_wp_theme_get_element_class_name('button') : ''); ?>" name="login" value="<?php esc_attr_e('Log in', 'woocommerce');?>"><?php esc_html_e('Log in', 'woocommerce');?></button>

			

			<?php do_action('woocommerce_login_form_end');?>

		</form>
 </div>
 </div>
 </div>
<?php if ('yes' === get_option('woocommerce_enable_myaccount_registration')): ?>

	</div>
     <div id="lg2" class="tab-pane">
                                    <div class="login-form-container">
                                        <div class="login-register-form">
	<!-- <div class="u-column2 col-2"> -->

		<form method="post" class="" >

			<?php do_action('woocommerce_register_form_start');?>

			<?php if ('no' === get_option('woocommerce_registration_generate_username')): ?>

				
					<input type="text" class="" placeholder="username" name="username" id="reg_username" autocomplete="username" value="<?php echo (!empty($_POST['username'])) ? esc_attr(wp_unslash($_POST['username'])) : ''; ?>" required aria-required="true" /><?php // @codingStandardsIgnoreLine ?>
			

			<?php endif;?>

			
				
				<input type="email" placeholder="email" class="woocommerce-Input woocommerce-Input--text input-text" name="email" id="reg_email" autocomplete="email" value="<?php echo (!empty($_POST['email'])) ? esc_attr(wp_unslash($_POST['email'])) : ''; ?>" required aria-required="true" /><?php // @codingStandardsIgnoreLine ?>
		

			<?php if ('no' === get_option('woocommerce_registration_generate_password')): ?>

				
					
					<input type="password" placeholder="password" class="woocommerce-Input woocommerce-Input--text input-text" name="password" id="reg_password" autocomplete="new-password" required aria-required="true" />
				

			<?php else: ?>

				<p><?php esc_html_e('A link to set a new password will be sent to your email address.', 'woocommerce');?></p>

			<?php endif;?>

			<?php do_action('woocommerce_register_form');?>

			<div class="button-box">
				<?php wp_nonce_field('woocommerce-register', 'woocommerce-register-nonce');?>
				<button type="submit" class=""><?php esc_html_e('Register', 'woocommerce');?></button>
			</div>

			<?php do_action('woocommerce_register_form_end');?>

		</form>
		</div>
		</div>
		</div>

	</div>

</div>
<?php endif;?>
</div>
</div>
</div>
</div>
</div>
</div>
<?php do_action('woocommerce_after_customer_login_form');?>
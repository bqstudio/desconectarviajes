<?php
/**
 * Lost password form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-lost-password.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.2
 */

defined( 'ABSPATH' ) || exit; ?>

<section class="hero_simple">
    <div class="container">
        <div class="hero_simple__text-cont">
            <?php 
            echo ($forgot_password_title = get_field('forgot_password_title'))? '<h1 class="hero_simple__title">'.$forgot_password_title.'</h1>':'';
            echo ($forgot_passowrd_text = get_field('forgot_passowrd_text'))? '<div class="hero_simple__text">'.$forgot_passowrd_text.'</div>':'';
            ?>
        </div>
    </div>  
</section>


<section>
	<div class="container">
		<?php do_action( 'woocommerce_before_lost_password_form' );
		?>

		<form method="post" class="woocommerce-ResetPassword lost_reset_password">

			<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
				<?php /*label for="user_login"><?php esc_html_e( 'Username or email', 'woocommerce' ); ?></label>*/ ?>
				<input class="woocommerce-Input woocommerce-Input--text input-text" type="text" name="user_login" id="user_login" placeholder="Username or email" autocomplete="username" />
			</p>

			<div class="clear"></div>

			<?php do_action( 'woocommerce_lostpassword_form' ); ?>

			<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide button__cont">
				<input type="hidden" name="wc_reset_password" value="true" />
				<button type="submit" class="woocommerce-Button button" value="<?php esc_attr_e( 'Reset password', 'woocommerce' ); ?>"><?php esc_html_e( 'Reset password', 'woocommerce' ); ?></button>
			</p>

			<?php wp_nonce_field( 'lost_password', 'woocommerce-lost-password-nonce' ); ?>

		</form>
		<?php
		do_action( 'woocommerce_after_lost_password_form' ); ?>
	</div>
</section>

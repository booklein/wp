<?php
/**
 * Edit account form
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.2.7
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
?>

<?php wc_print_notices(); ?>
<div class="wd_edit_account">
	<header class="title-wrapper"><h3 class="heading-title"><?php _e('edit account','wpdance') ?></h3></header>
	<form action="" method="post">

		<?php do_action( 'woocommerce_edit_account_form_start' ); ?>
		<p class="form-row form-row-wide">
			<label for="account_first_name"><?php _e( 'First name', 'wpdance' ); ?> <span class="required">*</span></label>
			<input type="text" class="input-text" name="account_first_name" id="account_first_name" value="<?php echo esc_attr( $user->first_name ); ?>" />
		</p>
		<p class="form-row form-row-wide">
			<label for="account_last_name"><?php _e( 'Last name', 'wpdance' ); ?> <span class="required">*</span></label>
			<input type="text" class="input-text" name="account_last_name" id="account_last_name" value="<?php echo esc_attr( $user->last_name ); ?>" />
		</p>
		<p class="form-row form-row-wide">
			<label for="account_email"><?php _e( 'Email address', 'wpdance' ); ?> <span class="required">*</span></label>
			<input type="email" class="input-text" name="account_email" id="account_email" value="<?php echo esc_attr( $user->user_email ); ?>" />
		</p>
		<p class="form-row form-row-wide">
			<label for="password_current"><?php _e( 'Current Password (leave blank to leave unchanged)', 'wpdance' ); ?></label>
			<input type="password" class="input-text" name="password_current" id="password_current" />
		</p>
		<p class="form-row form-row-wide">
			<label for="password_1"><?php _e( 'New Password (leave blank to leave unchanged)', 'wpdance' ); ?></label>
			<input type="password" class="input-text" name="password_1" id="password_1" />
		</p>
		<p class="form-row form-row-wide">
			<label for="password_2"><?php _e( 'Confirm New Password', 'wpdance' ); ?></label>
			<input type="password" class="input-text" name="password_2" id="password_2" />
		</p>
		<div class="clear"></div>
		
		<?php do_action( 'woocommerce_edit_account_form' ); ?>

		<p><input type="submit" class="button" name="save_account_details" value="<?php _e( 'Save changes', 'wpdance' ); ?>" /></p>

		<?php wp_nonce_field( 'save_account_details' ); ?>
		<input type="hidden" name="action" value="save_account_details" />
		
		<?php do_action( 'woocommerce_edit_account_form_end' ); ?>
	</form>
</div>
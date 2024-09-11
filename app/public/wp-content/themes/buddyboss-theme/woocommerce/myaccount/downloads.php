<?php
/**
 * Downloads
 *
 * Shows downloads on the account page.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/downloads.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 7.8.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$downloads     = WC()->customer->get_downloadable_products();
$has_downloads = (bool) $downloads;
?>

<div class="wc-MyAccount-sub-heading">
	<h2><?php esc_html_e( 'Downloads', 'buddyboss-theme' ); ?></h2>
</div>

<div class="wc-MyAccount-inner-content">
	<?php do_action( 'woocommerce_before_account_downloads', $has_downloads ); ?>

	<?php if ( $has_downloads ) : ?>

		<?php do_action( 'woocommerce_before_available_downloads' ); ?>

		<?php do_action( 'woocommerce_available_downloads', $downloads ); ?>

		<?php do_action( 'woocommerce_after_available_downloads' ); ?>

	<?php else : ?>
		<div class="woocommerce-Message woocommerce-Message--info woocommerce-info wc-MyAccount-fix-center">
			<div class="wc-MyAccount-sub-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/cart.svg" alt="Shop cart" /></div>
			<div class="wc-MyAccount-sub-tagline"><?php esc_html_e( 'No downloads available yet.', 'buddyboss-theme' ); ?></div>
			<a class="woocommerce-Button button" href="<?php echo esc_url( apply_filters( 'woocommerce_return_to_shop_redirect', wc_get_page_permalink( 'shop' ) ) ); ?>">
				<?php esc_html_e( 'Go shop', 'buddyboss-theme' ); ?>
			</a>
		</div>
	<?php endif; ?>

	<?php do_action( 'woocommerce_after_account_downloads', $has_downloads ); ?>
</div>

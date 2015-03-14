<?php
/**
 * Single product short description
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $post;

$heading = esc_html( apply_filters( 'woocommerce_product_description_heading', __( 'Product Description', 'woocommerce' ) ) );

if ( ! $post->post_content ) {
	return;
}

?>
<h4><?php echo $heading; ?></h4>
<div itemprop="description">
	<?php echo apply_filters( 'woocommerce_short_description', $post->post_content ) ?>
</div>

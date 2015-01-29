<?php
/**
 * External product add to cart
 *
 * @author              WooThemes
 * @package     WooCommerce/Templates
 * @version     2.1.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
?>

<?php do_action( 'woocommerce_before_add_to_cart_button' ); ?>

<p class="cart">
        <!--span style="display:none" id="frame_src"><?php echo esc_url( $product_url ); ?></span-->
        <a href="<?php echo esc_url( $product_url ); ?>" rel="nofollow" class="single_add_to_cart_button button alt" target="_blank"><?php echo $button_text; ?></a>
        <!--a href="#modalframe" rel="nofollow" class="single_add_to_cart_button button alt">Смотреть демо</a-->
        <a href="#modalform" rel="nofollow" class="single_add_to_cart_button button alt">Заказать</a>
</p>

<?php do_action( 'woocommerce_after_add_to_cart_button' ); ?>
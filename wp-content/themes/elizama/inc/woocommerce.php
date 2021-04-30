<?php

if (!function_exists('elizama_cart_link')) {

    function elizama_cart_link() {
        ?>	
        <a class="cart-contents" href="<?php echo esc_url(wc_get_cart_url()); ?>" title="<?php esc_html_e('View your shopping cart', 'elizama'); ?>">
            <i class="p-2 bd-highlight fa fa-shopping-bag"><span class="count"><?php echo wp_kses_data(WC()->cart->get_cart_contents_count()); ?></span></i>
            <div class="p-2 bd-highlight amount-cart"><?php echo wp_kses_data(WC()->cart->get_cart_subtotal()); ?></div> 
        </a>
        <?php
    }

}


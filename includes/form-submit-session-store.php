<?php

function form_submission_() {
    session_start();

    if (isset($_POST['make_payment'])) {
        $_SESSION['register_form'] = $_POST; // Simplified assigning POST data to session

        $payment_id = !empty(get_theme_mod('form_payment_id')) ? get_theme_mod('form_payment_id') : '';

        // Check if WooCommerce is active
        if (class_exists('WooCommerce')) {
            add_action('template_redirect', function () use ($payment_id) {
                global $woocommerce; // Make $woocommerce variable accessible inside the function

                if (!$woocommerce) {
                    $woocommerce = WC(); // Initialize $woocommerce if it's not defined
                }

                $woocommerce->cart->add_to_cart($payment_id);
                $checkout_url = wc_get_checkout_url();
                wp_redirect($checkout_url);
                exit;
            });
        }
    }
}
add_action('init', 'form_submission_');

// price update function 
function update_cart_item_price($cart_object) {
    foreach ($cart_object->cart_contents as $cart_item_key => $cart_item) {
        $new_price = $_SESSION['register_form']['amount'];
        $cart_item['data']->set_price($new_price);
    }
}
add_action('woocommerce_before_calculate_totals', 'update_cart_item_price', 10, 1);


// echo '<pre>';
// session_start();
// print_r( $_SESSION['register_form']);
// echo '</pre>';
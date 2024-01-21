<?php

// Add action hook for WooCommerce thank you page
add_action('woocommerce_thankyou', 'generate_pdf_and_send_email_on_order_completion', 10, 1);

function generate_pdf_and_send_email_on_order_completion($order_id) {
     // Check if this is a valid order
     if (!$order_id) {
        return;
    }

    // Get the order object
    $order = wc_get_order($order_id);

    if ($order && $order->is_paid()) {

        global $wpdb;

        $table_name_convocation_register = $wpdb->prefix . 'convocation_register';
        
        $encoded_data = json_encode($_SESSION['register_form']);
        $date = date('Y-m-d');
        $data_convocation_register = array(
            'submission_data' => $encoded_data,
            'submit_date' => $date,
        );
        $wpdb->insert($table_name_convocation_register, $data_convocation_register);

        // Redirect user after processing
        wp_redirect( home_url() . '/thank-you' );
        exit;
    }
}
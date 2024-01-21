<?php
/**
* payment-status-form-shortcode
*/

function payment_status_form_shortcode() {
    $output = '';

    require_once('partials/payment-status-form-preview.php');

    return $output;
}

add_shortcode( 'payment_status_form', 'payment_status_form_shortcode' );
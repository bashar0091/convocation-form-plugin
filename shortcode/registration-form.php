<?php
/**
* registration-form-shortcode
*/

function registration_form_shortcode() {
    $output = '';

    require_once('partials/registration-form-preview.php');

    return $output;
}

add_shortcode( 'registration_form', 'registration_form_shortcode' );
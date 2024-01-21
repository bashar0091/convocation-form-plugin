<?php

add_action('wp_ajax_payment_status_form', 'payment_status_form_handler');
add_action('wp_ajax_nopriv_payment_status_form', 'payment_status_form_handler');

function payment_status_form_handler() {

    $form_data = isset($_POST['form_data']) ? $_POST['form_data'] : '';
    parse_str($form_data, $formFields);
    $id_number = isset($formFields['id_number']) ? $formFields['id_number'] : '';

    // get data from database 
    $registered_convocation = get_option('registered_convocation');
    foreach ($registered_convocation as $convocation) {
        if ($convocation[1] == $id_number) {

            echo json_encode(
                array(
                    'student_name' => $convocation['2'],
                    'student_id' => $convocation['1'],
                    'programm' => $convocation['3'],
                    'payment_paid' => $convocation['6'],
                    'amount_adjusted' => $convocation['13'],
                    'balance' => $convocation['14'],
                    'aditional_amount' => $convocation['23'],
                )
            );

            break; 
        }
    }

    wp_die();
}
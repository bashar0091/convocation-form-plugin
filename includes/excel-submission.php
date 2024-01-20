<?php


/**
 * excel submission handler
 */
add_action('init', 'excel_submisison_handler');

function excel_submisison_handler() {
    if (isset($_POST['upload_excel_nonce']) && wp_verify_nonce($_POST['upload_excel_nonce'], 'upload_excel')) {
        // Check if a file is uploaded
        if (isset($_FILES['excel_file']['tmp_name']) && !empty($_FILES['excel_file']['tmp_name'])) {
            // Process the Excel file
            $excel_data = process_excel_file($_FILES['excel_file']['tmp_name']);
    
            // Check if the option exists
            if (get_option('registered_convocation') !== false) {
                update_option('registered_convocation', $excel_data);
            } else {
                add_option('registered_convocation', $excel_data);
            }
        }
    }
}

function process_excel_file($file_path) {
    $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($file_path);
    $worksheet = $spreadsheet->getActiveSheet();
    $data = $worksheet->toArray();

    return $data;
}

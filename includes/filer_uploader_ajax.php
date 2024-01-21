<?php

function image_upload_handler_callback() {
    if (!empty($_FILES['file']['name'])) {
        $allowed_types = array('image/jpeg', 'image/png');
        $file_type = $_FILES['file']['type'];
        $file_size = $_FILES['file']['size']; // Get the file size in bytes
        $max_file_size = 1024 * 1024; // Maximum file size in bytes (1024KB)

        if (in_array($file_type, $allowed_types) && $file_size <= $max_file_size) {
            require_once ABSPATH . 'wp-admin/includes/image.php';
            require_once ABSPATH . 'wp-admin/includes/file.php';
            require_once ABSPATH . 'wp-admin/includes/media.php';

            $attachment_id = media_handle_upload('file', 0); // Upload the file to the media library

            if (is_wp_error($attachment_id)) {
                echo json_encode(array('error' => $attachment_id->get_error_message()));
            } else {
                $image_url = wp_get_attachment_url($attachment_id); // Get the URL of the uploaded image
                echo json_encode(array('url' => $image_url, 'id' => $attachment_id)); // Return URL and ID in the JSON response
            }
        } else {
            if ($file_size > $max_file_size) {
                echo json_encode(array('error' => 'File size exceeds the limit of 1mb.'));
            } else {
                echo json_encode(array('error' => 'Please upload only JPG, PNG'));
            }
        }
    } else {
        echo json_encode(array('error' => 'No file received'));
    }

    wp_die(); // Always use wp_die() to end AJAX handling in WordPress
}

add_action('wp_ajax_image_upload_handler', 'image_upload_handler_callback');
add_action('wp_ajax_nopriv_image_upload_handler', 'image_upload_handler_callback');
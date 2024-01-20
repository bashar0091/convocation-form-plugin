<?php

/**
 * Add New Admin Menu Registered Convocation
 */
function register_convocation_menu() {
    add_menu_page(
        'Registered Convocation',    // Page title
        'Registered Convocation',    // Menu title
        'manage_options',            // Capability
        'registered_convocation',    // Menu slug
        'convocation_page_content',  // Callback function to display content
        'dashicons-businessman',     // Icon (you can change this)
        30                           // Position in the menu
    );

    add_submenu_page(
        'registered_convocation',    // Parent menu slug
        'New Submission',            // Page title
        'New Submission',            // Menu title
        'manage_options',            // Capability
        'new_submission',            // Menu slug
        'new_submission_page_content'// Callback function to display content
    );
}
add_action('admin_menu', 'register_convocation_menu');

// Callback function to display content
function convocation_page_content() {
    ?>
    <div class="wrap">
        <h2>Registered Convocation</h2>
        <br><br>
        
        <form method="post" enctype="multipart/form-data">
            <?php wp_nonce_field('upload_excel', 'upload_excel_nonce'); ?>
            <label for=""><b>Upload Excel File to get convocation data</b></label>
            <br><br>
            <input type="file" name="excel_file" id="excel_file_upload" required />
            <br><br>
            <button type="submit" class="woocommerce-BlankState-cta button-primary button">Upload</button>
        </form>
        
        <br><br><br>
        <table id="registered_convocation" class="display">
            <thead>
                <tr>
                    <th>#ID</th>
                    <th>Student Name</th>
                    <th>Student Email</th>
                    <th>Program</th>
                    <th>Submission Date</th>
                    <th>Action</th>
                </tr>
            </thead>
        </table>
    </div>
    <?php
}

// Callback function to display content for "New Submission" page
function new_submission_page_content() {
    ?>
    <div class="wrap">
        <h2>New Submission</h2>
        <!-- Your custom content for New Submission goes here -->
        <p>basg</p>
    </div>
    <?php
}
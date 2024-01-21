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
        <h3>All Convocation List</h3>
        <?php 
            $registered_convocation = get_option('registered_convocation');

            if($registered_convocation) {
                $registered_convocation_th = $registered_convocation[0];
            }
        ?>
        <table id="registered_convocation" class="display">
            <thead>
                <tr>
                    <?php
                        if($registered_convocation) {
                            foreach($registered_convocation_th as $key => $convocation_th) {
                                if (in_array($key, [0, 1, 2, 3, 4, 5, 6, 9, 13, 14, 23, 24])) {
                                    echo '<th>' . $convocation_th . '</th>';
                                }
                            }
                        }
                    ?>
                </tr>
            </thead>

            <tbody>
                <?php 
                    if($registered_convocation) {
                        foreach($registered_convocation as $key => $convocation) { 
                            if (!in_array($key, [0])) {
                                echo '<tr>';
                                    foreach($convocation as $key => $convocation_td) { 
                                        if (in_array($key, [0, 1, 2, 3, 4, 5, 6, 9, 13, 14, 23, 24])) {
                                            echo '<td>' . $convocation_td . '</td>';
                                        }
                                    }
                                echo '</tr>';
                            }
                        }
                    }
                ?>
            </tbody>
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
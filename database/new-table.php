<?php

/**
 * Make a new table in database
 */

// Create the table when the plugin is activated
function create_admission_form_table() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'convocation_register';

    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE IF NOT EXISTS $table_name (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        submission_data longtext NOT NULL,
        submit_date date DEFAULT '0000-00-00' NOT NULL,
        PRIMARY KEY (id)
    ) $charset_collate;";

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
}
register_activation_hook(__FILE__, 'create_admission_form_table');
<?php
/**
 * Plugin Name: Convocation Form
 * Plugin URI:
 * Description:
 * Version: 1.0.0
 * Author: DEV Bashar
 * Author URI:
 * License: GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain: convocation_form
 */

// Prevent direct access to the plugin file
defined('ABSPATH') || exit;

/**
 * Require vendor file
 */
require_once 'vendor/autoload.php';

/**
 * Require All CSS, JS Files Here
 */
function form_enqueue_scripts() {

    // css file 
    wp_enqueue_style('customd-style', plugin_dir_url(__FILE__) . 'assets/css/custom.css', false, '1.0.0', '');

    // js file 
    wp_enqueue_script('custom-script', plugin_dir_url(__FILE__) . 'assets/js/custom.js', array('jquery'), '1.0.0', true);

    // Ajax Request URL
    wp_localize_script('custom-script', 'formAjax', array('ajaxurl' => admin_url('admin-ajax.php')));
}
add_action('wp_enqueue_scripts', 'form_enqueue_scripts');

/**
 * Require All Admin CSS, JS Files Here
 */
function admin_enqueue_scripts() {

    // css file 
    wp_enqueue_style('jquery-dataTables-style', 'https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css', false, '1.0.0', '');

    // js file 
    wp_enqueue_script('jquery-dataTables-script', 'https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('table2excel-script', plugin_dir_url(__FILE__) . 'assets/js/table2excel.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('custom-admin-script', plugin_dir_url(__FILE__) . 'assets/js/custom-admin.js', array('jquery'), '1.0.0', true);
}
add_action('admin_enqueue_scripts', 'admin_enqueue_scripts');

/**
 * Require All Include Files Here
 */
require_once plugin_dir_path(__FILE__) . 'shortcode/registration-form.php';
require_once plugin_dir_path(__FILE__) . 'shortcode/payment-status-form.php';
require_once plugin_dir_path(__FILE__) . 'admin/new-menu.php';
require_once plugin_dir_path(__FILE__) . 'includes/excel-submission.php';
require_once plugin_dir_path(__FILE__) . 'includes/payment-status-form-ajaxHandler.php';
require_once plugin_dir_path(__FILE__) . 'includes/form-submit-session-store.php';
require_once plugin_dir_path(__FILE__) . 'includes/form-submit-store-db.php';
require_once plugin_dir_path(__FILE__) . 'includes/filer_uploader_ajax.php';
require_once plugin_dir_path(__FILE__) . 'database/new-table.php';


/**
 * 
 * One Product Cart Item
 * 
 */
add_filter('woocommerce_add_cart_item_data', 'restrict_single_product_to_cart', 10, 3);
function restrict_single_product_to_cart($cart_item_data, $product_id, $variation_id) {
    WC()->cart->empty_cart();

    return $cart_item_data;
}

/**
 * 
 * // Function to form_payment_field_register customizer settings
 * 
 */
function form_payment_field_register($wp_customize) {
    // Add a section
    $wp_customize->add_section('form_payment_field', array(
        'title' => __('Form Payment Field', 'epfwoo'),
        'priority' => 30,
    ));

    // Add a setting
    $wp_customize->add_setting('form_payment_id', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    // Add a control
    $wp_customize->add_control('form_id_control', array(
        'label' => __('Payment Id', 'epfwoo'),
        'section' => 'form_payment_field',
        'settings' => 'form_payment_id',
        'type' => 'number',
    ));
}
add_action('customize_register', 'form_payment_field_register');
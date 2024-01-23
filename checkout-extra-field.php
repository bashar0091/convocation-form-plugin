<?php

// Add the custom field to the WooCommerce billing section as a select field
function checkout_custom_checkout_fields($fields){
    $fields['checkout_condition_extra_fields'] = array(
        'checkout_field_select_condition' => array(
            'type'      => 'select',
            'class'     => array('form-row checkout_select'),
            'required'  => true,
            'label'     => __('Which for?'),
            'options'   => array(
                'people'   => __('People', 'woocommerce'),
                'business' => __('Business', 'woocommerce'),
            ),
        ),
        'bedrijfsnaam' => array(
            'type'         => 'text',
            'class'     => array('checkout_extra_condition_field'),
            // 'required'  => true,
            'label'        => __('Bedrijfsnaam'),
            'placeholder'  => __('Bedrijfsnaam'),
        ),
        'kvk_nummer' => array(
            'type'         => 'text',
            'class'     => array('checkout_extra_condition_field'),
            // 'required'  => true,
            'label'        => __('KVK nummer'),
            'placeholder'  => __('KVK nummer'),
        ),
        'btw_nummer' => array(
            'type'         => 'text',
            'class'     => array('checkout_extra_condition_field'),
            // 'required'  => true,
            'label'        => __('BTW nummer'),
            'placeholder'  => __('BTW nummer'),
        ),
    );

    return $fields;
}
add_filter('woocommerce_checkout_fields', 'checkout_custom_checkout_fields');
function checkout_extra_checkout_fields(){
    $checkout = WC()->checkout(); ?>
    <div class="col2-set">
        <h3><?php _e('Gegevens contactpersoon'); ?></h3>
        <?php
        foreach ($checkout->checkout_fields['checkout_condition_extra_fields'] as $key => $field) : ?>
            <?php woocommerce_form_field($key, $field, $checkout->get_value($key)); ?>
        <?php endforeach; ?>
    </div>
<?php }
add_action('woocommerce_before_checkout_billing_form', 'checkout_extra_checkout_fields');


// saving data
function save_extra_checkout_fields( $order_id, $posted ){

    if( isset( $posted['checkout_field_select_condition'] ) ) {
        update_post_meta( $order_id, '_checkout_field_select_condition', sanitize_text_field( $posted['checkout_field_select_condition'] ) );
    }

    if( isset( $posted['bedrijfsnaam'] ) ) {
        update_post_meta( $order_id, '_bedrijfsnaam', sanitize_text_field( $posted['bedrijfsnaam'] ) );
    }

    if( isset( $posted['kvk_nummer'] ) ) {
        update_post_meta( $order_id, '_kvk_nummer', sanitize_text_field( $posted['kvk_nummer'] ) );
    }

    if( isset( $posted['btw_nummer'] ) ) {
        update_post_meta( $order_id, '_btw_nummer', sanitize_text_field( $posted['btw_nummer'] ) );
    }

}
add_action( 'woocommerce_checkout_update_order_meta', 'save_extra_checkout_fields', 10, 2 );




// Display the Data to User
function display_order_data($order_id) {
    ?>
    <table class="shop_table shop_table_responsive additional_info">
        <tbody>
            <?php
            // Array of custom fields to display
            $custom_fields = array(
                'checkout_field_select_condition' => __('Which for?'),
                'bedrijfsnaam' => __('Bedrijfsnaam'),
                'kvk_nummer'   => __('KVK nummer'),
                'btw_nummer'   => __('BTW nummer'),
            );

            // Loop through custom fields and display their values
            foreach ($custom_fields as $field_key => $field_label) :
                $field_value = get_post_meta($order_id, '_' . $field_key, true);
                ?>
                <tr>
                    <th><?php echo esc_html($field_label); ?>:</th>
                    <td><?php echo esc_html($field_value); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?php
}
add_action('woocommerce_thankyou', 'display_order_data', 20);
add_action('woocommerce_view_order', 'display_order_data', 20);


// Display data on the Dashboard WC order details page
function vicodemedia_display_order_data_in_admin($order) {
    ?>
    <div class="order_data_column">
        <h4><?php _e('Extra Information', 'woocommerce'); ?></h4>
        <div class="address">
            <?php
            // Array of custom fields to display
            $custom_fields = array(
                'checkout_field_select_condition' => __('Which for?'),
                'bedrijfsnaam' => __('Bedrijfsnaam'),
                'kvk_nummer'   => __('KVK nummer'),
                'btw_nummer'   => __('BTW nummer'),
            );

            // Loop through custom fields and display their values
            foreach ($custom_fields as $field_key => $field_label) :
                $field_value = get_post_meta($order->get_id(), '_' . $field_key, true);
                echo '<p><strong>' . esc_html($field_label) . ':</strong> ' . esc_html($field_value) . '</p>';
            endforeach;
            ?>
        </div>
        <div class="edit_address">
            <?php
            // Loop through custom fields to display input fields for editing
            foreach ($custom_fields as $field_key => $field_label) :
                woocommerce_wp_text_input(array(
                    'id'            => '_' . $field_key,
                    'label'         => esc_html($field_label),
                    'wrapper_class' => '_billing_company_field',
                    'value'         => get_post_meta($order->get_id(), '_' . $field_key, true),
                ));
            endforeach;
            ?>
        </div>
    </div>
    <?php
}
add_action('woocommerce_admin_order_data_after_order_details', 'vicodemedia_display_order_data_in_admin');
<?php
$output .= '
<div
    class="elementor-element elementor-element-cd395ea elementor-button-align-end elementor-widget elementor-widget-form"
>
    <div class="elementor-widget-container">
        <form method="post" id="payment_status_form">
            <div class="elementor-form-fields-wrapper elementor-labels-above">
                <div class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-name elementor-col-100">
                    <label for="form-field-name" class="elementor-field-label"> ID number </label>
                    <input size="1" type="text" name="id_number" id="form-field-name" class="elementor-field elementor-size-sm elementor-field-textual" placeholder="Your ID number" required />
                </div>
                <div class="elementor-field-group elementor-column elementor-field-type-submit elementor-col-100 e-form__buttons">
                    <span class="spinner"></span>
                    <button type="submit" class="elementor-button elementor-size-sm">
                        <span>
                            <span class="elementor-button-icon"> </span>
                            <span class="elementor-button-text">Search </span>
                        </span>
                    </button>
                </div>
            </div>
        </form>
    </div>
    
    <div class="payment_status_result">

        <span class="spinner"></span>
        
        <div class="payment_status_row">
            <div class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-name elementor-col-100">
                <label class="elementor-field-label">Student Name</label>
                <div class="student_name elementor-field elementor-size-sm elementor-field-textual">JOHN</div>
            </div>
            <div class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-name elementor-col-100">
                <label class="elementor-field-label">Student ID</label>
                <div class="student_id elementor-field elementor-size-sm elementor-field-textual">1234</div>
            </div>
            <div class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-name elementor-col-100">
                <label class="elementor-field-label">Programm</label>
                <div class="programm elementor-field elementor-size-sm elementor-field-textual">BSC</div>
            </div>
            <div class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-name elementor-col-100">
                <label class="elementor-field-label">Paymet Paid (Taka)</label>
                <div class="payment_paid elementor-field elementor-size-sm elementor-field-textual">000</div>
            </div>
            <div class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-name elementor-col-100">
                <label class="elementor-field-label">Amount Adjusted (Taka)</label>
                <div class="amount_adjusted elementor-field elementor-size-sm elementor-field-textual">000</div>
            </div>
            <div class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-name elementor-col-100">
                <label class="elementor-field-label">Balance</label>
                <div class="balance elementor-field elementor-size-sm elementor-field-textual">000</div>
            </div>
            <div class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-name elementor-col-100">
                <label class="elementor-field-label">Aditional amount required for re-registration</label>
                <div class="aditional_amount elementor-field elementor-size-sm elementor-field-textual">000</div>
            </div>
        </div>

        <div class="no_record_found elementor-field-type-text elementor-field-group elementor-column elementor-field-group-name elementor-col-100">
            <label class="elementor-field-label">No record Found</label>
        </div>
    </div>

</div>
';
<?php
$output .= '
<div class="elementor-element elementor-element-94fe545 elementor-button-align-end elementor-widget elementor-widget-form">
    <div class="elementor-widget-container">
        <style>
            /*! elementor-pro - v3.18.0 - 17-01-2024 */
            .elementor-button.elementor-hidden,
            .elementor-hidden {
                display: none;
            }
            .e-form__step {
                width: 100%;
            }
            .e-form__step:not(.elementor-hidden) {
                display: flex;
                flex-wrap: wrap;
            }
            .e-form__buttons {
                flex-wrap: wrap;
            }
            .e-form__buttons,
            .e-form__buttons__wrapper {
                display: flex;
            }
            .e-form__indicators {
                display: flex;
                justify-content: space-between;
                align-items: center;
                flex-wrap: nowrap;
                font-size: 13px;
                margin-bottom: var(--e-form-steps-indicators-spacing);
            }
            .e-form__indicators__indicator {
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                flex-basis: 0;
                padding: 0 var(--e-form-steps-divider-gap);
            }
            .e-form__indicators__indicator__progress {
                width: 100%;
                position: relative;
                background-color: var(--e-form-steps-indicator-progress-background-color);
                border-radius: var(--e-form-steps-indicator-progress-border-radius);
                overflow: hidden;
            }
            .e-form__indicators__indicator__progress__meter {
                width: var(--e-form-steps-indicator-progress-meter-width, 0);
                height: var(--e-form-steps-indicator-progress-height);
                line-height: var(--e-form-steps-indicator-progress-height);
                padding-right: 15px;
                border-radius: var(--e-form-steps-indicator-progress-border-radius);
                background-color: var(--e-form-steps-indicator-progress-color);
                color: var(--e-form-steps-indicator-progress-meter-color);
                text-align: right;
                transition: width 0.1s linear;
            }
            .e-form__indicators__indicator:first-child {
                padding-left: 0;
            }
            .e-form__indicators__indicator:last-child {
                padding-right: 0;
            }
            .e-form__indicators__indicator--state-inactive {
                color: var(--e-form-steps-indicator-inactive-primary-color, #c2cbd2);
            }
            .e-form__indicators__indicator--state-inactive [class*="indicator--shape-"]:not(.e-form__indicators__indicator--shape-none) {
                background-color: var(--e-form-steps-indicator-inactive-secondary-color, #fff);
            }
            .e-form__indicators__indicator--state-inactive object,
            .e-form__indicators__indicator--state-inactive svg {
                fill: var(--e-form-steps-indicator-inactive-primary-color, #c2cbd2);
            }
            .e-form__indicators__indicator--state-active {
                color: var(--e-form-steps-indicator-active-primary-color, #39b54a);
                border-color: var(--e-form-steps-indicator-active-secondary-color, #fff);
            }
            .e-form__indicators__indicator--state-active [class*="indicator--shape-"]:not(.e-form__indicators__indicator--shape-none) {
                background-color: var(--e-form-steps-indicator-active-secondary-color, #fff);
            }
            .e-form__indicators__indicator--state-active object,
            .e-form__indicators__indicator--state-active svg {
                fill: var(--e-form-steps-indicator-active-primary-color, #39b54a);
            }
            .e-form__indicators__indicator--state-completed {
                color: var(--e-form-steps-indicator-completed-secondary-color, #fff);
            }
            .e-form__indicators__indicator--state-completed [class*="indicator--shape-"]:not(.e-form__indicators__indicator--shape-none) {
                background-color: var(--e-form-steps-indicator-completed-primary-color, #39b54a);
            }
            .e-form__indicators__indicator--state-completed .e-form__indicators__indicator__label {
                color: var(--e-form-steps-indicator-completed-primary-color, #39b54a);
            }
            .e-form__indicators__indicator--state-completed .e-form__indicators__indicator--shape-none {
                color: var(--e-form-steps-indicator-completed-primary-color, #39b54a);
                background-color: initial;
            }
            .e-form__indicators__indicator--state-completed object,
            .e-form__indicators__indicator--state-completed svg {
                fill: var(--e-form-steps-indicator-completed-secondary-color, #fff);
            }
            .e-form__indicators__indicator__icon {
                width: var(--e-form-steps-indicator-padding, 30px);
                height: var(--e-form-steps-indicator-padding, 30px);
                font-size: var(--e-form-steps-indicator-icon-size);
                border-width: 1px;
                border-style: solid;
                display: flex;
                justify-content: center;
                align-items: center;
                overflow: hidden;
                margin-bottom: 10px;
            }
            .e-form__indicators__indicator__icon img,
            .e-form__indicators__indicator__icon object,
            .e-form__indicators__indicator__icon svg {
                width: var(--e-form-steps-indicator-icon-size);
                height: auto;
            }
            .e-form__indicators__indicator__icon .e-font-icon-svg {
                height: 1em;
            }
            .e-form__indicators__indicator__number {
                width: var(--e-form-steps-indicator-padding, 30px);
                height: var(--e-form-steps-indicator-padding, 30px);
                border-width: 1px;
                border-style: solid;
                display: flex;
                justify-content: center;
                align-items: center;
                margin-bottom: 10px;
            }
            .e-form__indicators__indicator--shape-circle {
                border-radius: 50%;
            }
            .e-form__indicators__indicator--shape-square {
                border-radius: 0;
            }
            .e-form__indicators__indicator--shape-rounded {
                border-radius: 5px;
            }
            .e-form__indicators__indicator--shape-none {
                border: 0;
            }
            .e-form__indicators__indicator__label {
                text-align: center;
            }
            .e-form__indicators__indicator__separator {
                width: 100%;
                height: var(--e-form-steps-divider-width);
                background-color: #babfc5;
            }
            .e-form__indicators--type-icon,
            .e-form__indicators--type-icon_text,
            .e-form__indicators--type-number,
            .e-form__indicators--type-number_text {
                align-items: flex-start;
            }
            .e-form__indicators--type-icon .e-form__indicators__indicator__separator,
            .e-form__indicators--type-icon_text .e-form__indicators__indicator__separator,
            .e-form__indicators--type-number .e-form__indicators__indicator__separator,
            .e-form__indicators--type-number_text .e-form__indicators__indicator__separator {
                margin-top: calc(var(--e-form-steps-indicator-padding, 30px) / 2 - var(--e-form-steps-divider-width, 1px) / 2);
            }
            .elementor-field-type-hidden {
                display: none;
            }
            .elementor-field-type-html {
                display: inline-block;
            }
            .elementor-field-type-tel input {
                direction: inherit;
            }
            .elementor-login .elementor-lost-password,
            .elementor-login .elementor-remember-me {
                font-size: 0.85em;
            }
            .elementor-field-type-recaptcha_v3 .elementor-field-label {
                display: none;
            }
            .elementor-field-type-recaptcha_v3 .grecaptcha-badge {
                z-index: 1;
            }
            .elementor-button .elementor-form-spinner {
                order: 3;
            }
            .elementor-form .elementor-button > span {
                display: flex;
                justify-content: center;
                align-items: center;
            }
            .elementor-form .elementor-button .elementor-button-text {
                white-space: normal;
                flex-grow: 0;
            }
            .elementor-form .elementor-button svg {
                height: auto;
            }
            .elementor-form .elementor-button .e-font-icon-svg {
                height: 1em;
            }
            .elementor-select-wrapper .select-caret-down-wrapper {
                position: absolute;
                top: 50%;
                transform: translateY(-50%);
                inset-inline-end: 10px;
                pointer-events: none;
                font-size: 11px;
            }
            .elementor-select-wrapper .select-caret-down-wrapper svg {
                display: unset;
                width: 1em;
                aspect-ratio: unset;
                fill: currentColor;
            }
            .elementor-select-wrapper .select-caret-down-wrapper i {
                font-size: 19px;
                line-height: 2;
            }
            .elementor-select-wrapper.remove-before:before {
                content: "" !important;
            }
        </style>
        <form action="" method="post">
            <div class="elementor-form-fields-wrapper elementor-labels-above">
                <div class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-name elementor-col-100">
                    <label for="form-field-name" class="elementor-field-label"> Name </label>
                    <input size="1" type="text" name="name" id="form-field-name" class="elementor-field elementor-size-sm elementor-field-textual" placeholder="Name" required />
                </div>
                <div class="elementor-field-type-email elementor-field-group elementor-column elementor-field-group-email elementor-col-50 elementor-field-required">
                    <label for="form-field-email" class="elementor-field-label"> Email </label>
                    <input size="1" type="email" name="email" id="form-field-email" class="elementor-field elementor-size-sm elementor-field-textual" placeholder="Email" required="required"  />
                </div>
                <div class="elementor-field-type-tel elementor-field-group elementor-column elementor-field-group-field_61680f7 elementor-col-50 elementor-field-required">
                    <label for="form-field-field_61680f7" class="elementor-field-label"> Phone </label>
                    <input
                        size="1"
                        type="tel"
                        name="phone"
                        id="form-field-field_61680f7"
                        class="elementor-field elementor-size-sm elementor-field-textual"
                        placeholder="Phone"
                        required="required"
                        
                        pattern="[0-9()#&amp;+*-=.]+"
                        title="Only numbers and phone characters (#, -, *, etc) are accepted."
                    />
                </div>
                <div class="elementor-field-type-select elementor-field-group elementor-column elementor-field-group-field_d685c80 elementor-col-100 elementor-field-required">
                    <label for="form-field-field_d685c80" class="elementor-field-label"> Select Programm </label>
                    <div class="elementor-field elementor-select-wrapper remove-before">
                        <div class="select-caret-down-wrapper">
                            <svg aria-hidden="true" class="e-font-icon-svg e-eicon-caret-down" viewBox="0 0 571.4 571.4" xmlns="http://www.w3.org/2000/svg">
                                <path d="M571 393Q571 407 561 418L311 668Q300 679 286 679T261 668L11 418Q0 407 0 393T11 368 36 357H536Q550 357 561 368T571 393Z"></path>
                            </svg>
                        </div>
                        <select name="program" id="form-field-field_d685c80" class="elementor-field-textual elementor-size-sm" required="required" >
                            <option value="BPH in Occupational Health and Safety (Hons)">BPH in Occupational Health and Safety (Hons)</option>
                            <option value="BPH in Reproductive and Child Health (Hons)">BPH in Reproductive and Child Health (Hons)</option>
                            <option value="BPH in Community Nutrition (Hons)">BPH in Community Nutrition (Hons)</option>
                            <option value="BPH in Epidemiology and Biostatistics (Hons)">BPH in Epidemiology and Biostatistics (Hons)</option>
                            <option value="BSc in Radiology and Imaging Technology (Hons)">BSc in Radiology and Imaging Technology (Hons)</option>
                            <option value="BSc in Biomedical Engineering (Hons)">BSc in Biomedical Engineering (Hons)</option>
                            <option value="BSc in Computer Sciences and Engineering (Hons)">BSc in Computer Sciences and Engineering (Hons)</option>
                            <option value="BSc in Laboratory Technology (Hons)">BSc in Laboratory Technology (Hons)</option>
                            <option value="MS in Biochemistry">MS in Biochemistry</option>
                            <option value="MS in Microbiology">MS in Microbiology</option>
                            <option value="MS in Immunology">MS in Immunology</option>
                            <option value="MPH in Reproductive and Child Health">MPH in Reproductive and Child Health</option>
                            <option value="MPH in Noncommunicable Diseases">MPH in Noncommunicable Diseases</option>
                            <option value="MPH in Epidemiology">MPH in Epidemiology</option>
                            <option value="MPH in Community Nutrition">MPH in Community Nutrition</option>
                            <option value="MPH in Occupational Health and Safety">MPH in Occupational Health and Safety</option>
                            <option value="MPH in Community Dentistry">MPH in Community Dentistry</option>
                            <option value="MPH in Community Medicine">MPH in Community Medicine</option>
                            <option value="MPH in Health Promotion and Health Education">MPH in Health Promotion and Health Education</option>
                            <option value="MPH in Environmental Health and Safety">MPH in Environmental Health and Safety</option>
                            <option value="MS in Health Informatics">MS in Health Informatics</option>
                            <option value="MS in Biostatistics">MS in Biostatistics</option>
                            <option value="MS in Applied Laboratory Sciences">MS in Applied Laboratory Sciences</option>
                        </select>
                    </div>
                </div>
                <div class="elementor-field-type-number elementor-field-group elementor-column elementor-field-group-field_50dd99a elementor-col-50">
                    <label for="form-field-field_50dd99a" class="elementor-field-label"> ID number </label>
                    <input type="number" name="id_number" id="form-field-field_50dd99a" class="elementor-field elementor-size-sm elementor-field-textual" placeholder="ID number" min="" max="" required />
                </div>
                <div class="elementor-field-type-select elementor-field-group elementor-column elementor-field-group-field_6571848 elementor-col-50 elementor-field-required">
                    <label for="form-field-field_6571848" class="elementor-field-label"> Select your Admission Session </label>
                    <div class="elementor-field elementor-select-wrapper remove-before">
                        <div class="select-caret-down-wrapper">
                            <svg aria-hidden="true" class="e-font-icon-svg e-eicon-caret-down" viewBox="0 0 571.4 571.4" xmlns="http://www.w3.org/2000/svg">
                                <path d="M571 393Q571 407 561 418L311 668Q300 679 286 679T261 668L11 418Q0 407 0 393T11 368 36 357H536Q550 357 561 368T571 393Z"></path>
                            </svg>
                        </div>
                        <select name="admission_session" id="form-field-field_6571848" class="elementor-field-textual elementor-size-sm" required="required" >
                            <option value="Fall 2013">Fall 2013</option>
                            <option value="Spring 2013">Spring 2013</option>
                            <option value="Fall 2014">Fall 2014</option>
                            <option value="Spring 2014">Spring 2014</option>
                            <option value="Fall 2015">Fall 2015</option>
                            <option value="Spring 2015">Spring 2015</option>
                            <option value="Fall 2016">Fall 2016</option>
                            <option value="Spring 2016">Spring 2016</option>
                            <option value="Fall 2017">Fall 2017</option>
                            <option value="Spring 2017">Spring 2017</option>
                            <option value="Fall 2018">Fall 2018</option>
                            <option value="Spring 2018">Spring 2018</option>
                            <option value="Fall 2019">Fall 2019</option>
                            <option value="Spring 2019">Spring 2019</option>
                            <option value="Fall 2020">Fall 2020</option>
                            <option value="Spring 2020">Spring 2020</option>
                            <option value="Fall 2021">Fall 2021</option>
                            <option value="Spring 2021">Spring 2021</option>
                            <option value="Fall 2022">Fall 2022</option>
                            <option value="Spring 2022">Spring 2022</option>
                        </select>
                    </div>
                </div>

                <div class="elementor-field-type-radio elementor-field-group elementor-column elementor-field-group-field_560b9b8 elementor-col-100 elementor-field-required">
                    <label for="form-field-field_560b9b8" class="elementor-field-label"> Will any guests accompany with you? (Maximum 2 persons) </label>
                    <div id="guest_condition_change" class="elementor-field-subgroup">
                        <span class="elementor-field-option">
                            <input type="radio" value="yes" id="form-field-field_560b9b8-0" name="guest_condition" required="required"  /> <label for="form-field-field_560b9b8-0">YES</label>
                        </span>
                        <span class="elementor-field-option">
                            <input type="radio" checked value="no" id="form-field-field_560b9b8-1" name="guest_condition" required="required"  /> <label for="form-field-field_560b9b8-1">No</label>
                        </span>

                        <div class="additional_field">
                            <div class="elementor-field-subgroup">
                                <input size="1" type="text" name="person1" id="person1" class="elementor-field elementor-size-sm elementor-field-textual" placeholder="1st Accompanying Person Name:">
                                <label class="elementor-field-label">Relation with accompanying person: </label>
                                <span class="elementor-field-option">
                                    <input type="radio" checked value="Father" name="guest_condition_value1" id="father1" /> <label for="father1">Father</label>
                                    <input type="radio" value="Mother" name="guest_condition_value1" id="mother1" /> <label for="mother1">Mother</label>
                                    <input type="radio" value="Spouse" name="guest_condition_value1" id="spouse1" /> <label for="spouse1">Spouse</label>
                                </span>
                            </div>
                            <div class="elementor-field-subgroup">
                                <input size="1" type="text" name="person2" id="person2" class="elementor-field elementor-size-sm elementor-field-textual" placeholder="2nd Accompanying Person Name:">
                                <label class="elementor-field-label">Relation with accompanying person: </label>
                                <span class="elementor-field-option">
                                    <input type="radio" value="Father" name="guest_condition_value2" id="father2" /> <label for="father2">Father</label>
                                    <input type="radio" checked value="Mother" name="guest_condition_value2" id="mother2" /> <label for="mother2">Mother</label>
                                    <input type="radio" value="Spouse" name="guest_condition_value2" id="spouse2" /> <label for="spouse2">Spouse</label>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-field-type-radio elementor-field-group elementor-column elementor-field-group-field_e478877 elementor-col-100 elementor-field-required">
                    <label for="form-field-field_e478877" class="elementor-field-label"> Have you taken the certificate? </label>
                    <div id="certificate_condition_change" class="elementor-field-subgroup">
                        <span class="elementor-field-option">
                            <input type="radio" value="yes" id="form-field-field_e478877-0" name="certificate_condition" required="required"  /> <label for="form-field-field_e478877-0">YES</label>
                        </span>
                        <span class="elementor-field-option">
                            <input type="radio" checked value="no" id="form-field-field_e478877-1" name="certificate_condition" required="required"  /> <label for="form-field-field_e478877-1">No</label>
                        </span>

                        <div class="additional_field">
                            <div class="elementor-field-subgroup additional_field_guest">
                                <span class="elementor-field-option">
                                    <input type="radio" checked value="Original Certificate" name="certificate_condition_value" id="original_certificate" /> <label for="original_certificate">Original Certificate</label>
                                </span>
                                <span class="elementor-field-option">
                                    <input type="radio" value="Original Certificate+Transcript" name="certificate_condition_value" id="original_Certificate_transcript" /> <label for="original_Certificate_transcript">Original Certificate+Transcript</label>
                                </span>
                                <span class="elementor-field-option">
                                    <input type="radio" value="Provisional Certificate" name="certificate_condition_value" id="provisional_certificate" /> <label for="provisional_certificate">Provisional Certificate</label>
                                </span>
                                <span class="elementor-field-option">
                                    <input type="radio" value="Provisional Certificate+Transcript" name="certificate_condition_value" id="provisional_certificate_transcript" /> <label for="provisional_certificate_transcript">Provisional Certificate+Transcript</label>
                                </span>
                                <span class="elementor-field-option">
                                    <input type="radio" value="Only Transcript" name="certificate_condition_value" id="only_transcript" /> <label for="only_transcript">Only Transcript</label>
                                </span>
                                <span class="elementor-field-option">
                                    <input type="radio" value="N/A" name="certificate_condition_value" id="na" /> <label for="na">N/A</label>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-field-type-upload elementor-field-group elementor-column elementor-field-group-field_1d51885 elementor-col-100 elementor-field-required">
                    <label for="image_upload" class="elementor-field-label"> Upload your recent photo </label>
                    <input type="file" name="" id="image_upload" class="elementor-field elementor-size-sm elementor-upload-field" required="required"  />
                    <span class="spinner"></span>
                    <input type="hidden" name="uploaded_photo" id="uploaded_photo" value="" required />
                </div>
                <div class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-field_c643adc elementor-col-100 elementor-field-required">
                    <label for="form-field-field_c643adc" class="elementor-field-label"> Amount </label>
                    <input size="1" type="number" name="amount" id="form-field-field_c643adc" class="elementor-field elementor-size-sm elementor-field-textual" placeholder="Tk" required="required"  />
                </div>
                <div class="elementor-field-group elementor-column elementor-field-type-submit elementor-col-100">
                    <button type="submit" name="make_payment" class="elementor-button elementor-size-sm">
                        <span class="elementor-button-text">Pay Now</span>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
';
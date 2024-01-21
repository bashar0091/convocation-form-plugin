jQuery(document).ready(function($){

    // 1. payment status form ajax submit
    $('#payment_status_form').on('submit', function(e){
        e.preventDefault();

        var form = $(this);
        var formData = form.serialize();

        form.find('.spinner').addClass('is-active');
        $('.payment_status_result').addClass('processing');

        jQuery.ajax({
            type: 'POST',
            url: formAjax.ajaxurl,
            data: {
                action: 'payment_status_form',
                form_data: formData,
            },
            success: function (response) {

                form.find('.spinner').removeClass('is-active');
                $('.payment_status_result').removeClass('processing');

                $('.payment_status_result').show();

                if(response) {
                    var data = JSON.parse(response);
                    
                    $('.payment_status_result .no_record_found').hide();
                    $('.payment_status_result .payment_status_row').show();

                    $('.payment_status_result .student_name').text(data.student_name);
                    $('.payment_status_result .student_id').text(data.student_id);
                    $('.payment_status_result .programm').text(data.programm);
                    $('.payment_status_result .payment_paid').text(data.payment_paid);
                    $('.payment_status_result .amount_adjusted').text(data.amount_adjusted);
                    $('.payment_status_result .balance').text(data.balance);
                    $('.payment_status_result .aditional_amount').text(data.aditional_amount);
                } else {
                    $('.payment_status_result .payment_status_row').hide();
                    $('.payment_status_result .no_record_found').show();
                }

            },
            error: function (errorThrown) {
                console.error('Error occurred:', error);
            }
        });
    });


    // 2. register form gust condition
    $('#guest_condition_change input').on('change', function(){
        var input_val = $(this).val();
        
        if(input_val == 'yes') {
            $(this).parent().parent().find('.additional_field').show();
            $('#person1').attr('required',true)
            $('#person2').attr('required',true)
        } else if(input_val == 'no'){
            $(this).parent().parent().find('.additional_field').hide();
            $('#person1').attr('required',false)
            $('#person2').attr('required',false)
        }
    })


    // 3. register form certificate condition
    $('#certificate_condition_change input').on('change', function(){
        var input_val = $(this).val();
        
        if(input_val == 'yes') {
            $(this).parent().parent().find('.additional_field').show();
        } else if(input_val == 'no'){
            $(this).parent().parent().find('.additional_field').hide();
        }
    })

    // 4. file upload validation
    $(document).on('change', '#image_upload', function (event) {
        var get_this = jQuery(this);
        var isUploading = false; // Flag to track ongoing upload
        var allowedTypes = ['image/jpeg', 'image/png']; // Allowed file types
        var maxSizeKB = 1024; // Maximum file size in kilobytes (1024KB)
    
        var file = event.target.files[0];
        if (file.size <= maxSizeKB * 1024) { // Check file size in bytes
            if (allowedTypes.includes(file.type)) {
                if (!isUploading) {
                    isUploading = true; // Set the flag to true to indicate an upload is in progress
    
                    var formData = new FormData();
                    formData.append('action', 'image_upload_handler');
                    formData.append('file', file); // Append the file to the form data

                    get_this.parent().find('.spinner').addClass('is-active');
                    $.ajax({
                        type: 'POST',
                        url: formAjax.ajaxurl,
                        data: formData,
                        contentType: false,
                        processData: false,
                        success: function (response) {

                            get_this.parent().find('.spinner').removeClass('is-active');
                            
                            var data = JSON.parse(response);
                            var imageUrl = data.url;

                            get_this.parent().find('#uploaded_photo').val(imageUrl);
    
                            isUploading = false; // Reset the flag once the upload is complete
                        
                        },
                        error: function (error) {
                            console.error('Error occurred:', error);
                            isUploading = false; // Reset the flag on error as well
                        }
                    });
                }
            } else {
                alert('Error: Please select a valid JPG or PNG file.');
                // Clear the file input
                $(this).val('');
            }
        } else {
            alert('Error: File size exceeds 1MB limit');
            // Clear the file input
            $(this).val('');
        }
    });
    


});
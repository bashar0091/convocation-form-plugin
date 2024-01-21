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
    })

});
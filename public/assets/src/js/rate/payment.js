$(document).ready(function () {

    $.ajaxSetup({
        headers:
            { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
    });

    $('.search').on('click', function(event) {
        event.preventDefault();
        
        if ($('input[name="invoice_no"]').val() == "") {
            $('input[name="invoice_no"]').after("<p style='color:red;font-size:17px' class='error'>Enter valid invoice number</p>");

            setTimeout(function () {
                $('.error').remove();
            }, 3000);
        } else if ($('select[name="payment_mode"]').val() == null) {
            $('select[name="payment_mode"]').after("<p style='color:red;font-size:17px' class='error'>Select payment type</p>");

            setTimeout(function () {
                $('.error').remove();
            }, 3000);
        } else if ($('input[name="amount"]').val() == "") {
            $('input[name="amount"]').after("<p style='color:red;font-size:17px' class='error'>Enter amount paid</p>");

            setTimeout(function () {
                $('.error').remove();
            }, 3000);
        } else {
            fetchInvoiceDetails($('input[name="invoice_no"]').val());
        }
    });
    
    $('.statement').on('click', function(event) {
        event.preventDefault();
 
        window.location = $(this).attr('href');
    });

    function fetchInvoiceDetails(invoice_number) {
        var url = $("input[name='invoice_url']").attr("url");
        var url_stmt = $("input[name='customer_stmt_url']").attr('url');
        var formData = new FormData();
        formData.append('invoice_number', invoice_number);

        $.ajax({
            url: url,
            type: "POST",
            data: formData,
            dataType: 'json',
            processData: false,
            contentType: false,
            cache: false,
            success: function (response) {
                if (response.status == '0') {
                    $('input[name="invoice_no"]').after('<p class="error" style="color:red;font-size:17px">'+response.message+'</p>');

                    setTimeout(function () {
                        $('.error').remove();
                    }, 5000);
                } else {
                    $('input[name="invoice_number"]').val(response.message.invoice_no);
                    $('input[name="customer_id"]').val(response.message.customer_id);
                    $('input[name="customer_name"]').val(response.message.customer_name);
                    $('input[name="customer_type"]').val(response.message.customer_type);
                    $('input[name="region"]').val(response.message.region);
                    $('input[name="district"]').val(response.message.district);
                    $('input[name="contact"]').val(response.message.contact);
                    $('input[name="weight"]').val(response.message.weight);
                    $('input[name="rate"]').val(response.message.rate);
                    $('input[name="total_amount"]').val(response.message.amount);
                }
            },
            error: function (error) {
                alert(error.statusText + error.responseText);
            },
        });
    }
});
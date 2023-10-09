$(document).ready(function () {

    $.ajaxSetup({
        headers:
            { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
    });
    
    $('.search').on('click', function(event) {
        event.preventDefault();
        
        if ($('input[name="truck_number"]').val() == "") {
            $('input[name="truck_number"]').after("<p style='color:red;font-size:17px' class='error'>Enter valid truck number</p>");

            setTimeout(function () {
                $('.error').remove();
            }, 3000);
        } else if ($('select[name="product_types_id"]').val() == null) {
            $('select[name="product_types_id"]').after("<p style='color:red;font-size:17px' class='error'>Select product type</p>");

            setTimeout(function () {
                $('.error').remove();
            }, 3000);
        } else {
            fetchTruckDetails($('input[name="truck_number"]').val(), $('select[name="product_types_id"]').val());
        }
    });

    function fetchTruckDetails(truck_number, product_type) {
        var url = $("input[name='truck_url']").attr("url");
        var formData = new FormData();
        formData.append('truck_number', truck_number);
        formData.append('product_type', product_type);
        if ($('#apply_vat').is(':checked')) {
            formData.append('apply_vat', 'yes');
        } else {
            formData.append('apply_vat', 'no');
        }

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
                    $('input[name="truck_number"]').after('<p class="error" style="color:red;font-size:17px">'+response.message+'</p>');

                    setTimeout(function () {
                        $('.error').remove();
                    }, 5000);
                } else {
                    $('input[name="truck_no"]').val(response.message.truck_no);
                    $('input[name="truck_type"]').val(response.message.truck_type + " cubic meters");
                    $('input[name="customer_id"]').val(response.message.customer_id);
                    $('input[name="customer_name"]').val(response.message.customer_name);
                    $('input[name="product_type"]').val(response.message.product_type);
                    $('input[name="product_rate"]').val(response.message.product_rate);
                    $('input[name="invoice_amount"]').val(response.message.invoice_amount);
                    $('input[name="vat_amount"]').val(response.message.vat_amount);
                    $('input[name="levy_amount"]').val(response.message.levy_amount);
                    $('input[name="total_amount"]').val(response.message.total_amount);
                }
            },
            error: function (error) {
                alert(error.statusText + error.responseText);
            },
        });
    }
});
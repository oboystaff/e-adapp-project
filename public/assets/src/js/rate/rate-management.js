$(document).ready(function () {

    $.ajaxSetup({
        headers:
            { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
    });

    $('select[name="truck_types_id"]').change(function () {
        if ($('select[name="product_types_id"]').val() !== null) {
            checkCombination($(this).val(),$('select[name="product_types_id"]').val());
        } 
    });

    $('select[name="product_types_id"]').change(function () {
        if ($('select[name="truck_types_id"]').val() !== null) {
            checkCombination($('select[name="truck_types_id"]').val(),$(this).val());
        } 
    });

    

    function checkCombination(truck_type, product_type){
        var url = $("input[name='check_url']").attr("url");
        var formData = new FormData();
        formData.append('truck_type', truck_type);
        formData.append('product_type', product_type);

        $.ajax({
            url: url,
            type: "POST",
            data: formData,
            dataType: 'json',
            processData: false,
            contentType: false,
            cache: false,
            success: function (response) {
                if (response.message == '1') {
                    $('.save').prop('disabled', true);
                    $('select[name="product_types_id"]').after('<p class="error" style="color:red;font-size:17px">Rate for this combination already exist</p>');
                } else {
                    $('.save').prop('disabled', false);
                    $('.error').remove();
                }
            },
            error: function (error) {
                //alert(error.statusText + error.responseText);
            },
        });
    }
});
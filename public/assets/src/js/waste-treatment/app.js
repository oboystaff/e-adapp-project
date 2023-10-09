$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('input[name="weight"]').on('input', function() {
        if (parseFloat($(this).val()) > parseFloat($('input[name="total_stock"]').val())) {
            $(this).after('<p style="color:red" class="error">Weight cannot be more than total stock</p>');
            $('.save').prop('disabled', true);
        } else {
            $('.error').remove();
            $('.save').prop('disabled', false);
        }
    });
});
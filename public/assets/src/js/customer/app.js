$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('select[name="region_id"]').change(function () {
        districts($(this).val());
    });

    function districts(region_id) {
        var url = $("input[name='district_url']").attr("url");
        var formData = new FormData();
        formData.append("region_id", region_id);

        $.ajax({
            url: url,
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,
            beforeSend: function () {
                // $('#register').preloader();
                // $("#send").prop("disabled", true);
            },
            success: function (response) {
                $("select[name='district_id']").html("");
                $("select[name='district_id']").append("<option disabled selected>Select District</option>");
                for (var i = 0; i < response.message.length; i++) {
                    $("select[name='district_id']").append("<option value=" + response.message[i].id + ">" +
                        response.message[i].name + "</option>");
                }
            },
            error: function (error) {
                alert(error.statusText + error.responseText);
            },
        });
    }

});
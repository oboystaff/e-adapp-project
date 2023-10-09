$(document).ready(function () {

   $('.generate_report').on('click', function(event) {
        event.preventDefault();

        var from_date = $('input[name="from_date"]').val();
        var to_date = $('input[name="to_date"]').val();
        var cubic_meters = $('input[name="cubic_meters"]').val();

        $('#style-2').DataTable().destroy();
        load_data(from_date, to_date, cubic_meters);
    });

    function load_data(from_date = '', to_date = '', cubic_meters = '') {
        var url = $("input[name='entry-register-report_url']").attr("url");

        try {
            $('#style-2').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: url,

                    data: {
                        from_date: from_date,
                        to_date: to_date,
                        cubic_meters: cubic_meters
                    }
                },

               columns: [

                    {data: 'DT_RowIndex', name: 'DT_RowIndex'},

                    {data: 'truck_no', name: 'truck_no'},

                    {data: 'customer', name: 'customer'},

                    {data: 'cubic_meters', name: 'cubic_meters'},

                    {data: 'status', name: 'status'},

                    {data: 'registered_by', name: 'registered_by'},

                    {data: 'created_at', name: 'created_at'}

                ],
                "dom": "<'dt--top-section'<'row'<'col-12 col-sm-6 d-flex justify-content-sm-start justify-content-center'l><'col-12 col-sm-6 d-flex justify-content-sm-end justify-content-center mt-sm-0 mt-3'f>>>" +
                "<'dt--top-section'<'row'<'col-sm-12 col-md-12 d-flex justify-content-md-start justify-content-center'B>>>" +
                "<'table-responsive'tr>" +
                "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
                "oLanguage": {
                        "oPaginate": {
                        "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
                        "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>'
                    },
                    "sInfo": "Showing page _PAGE_ of _PAGES_",
                    "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                    "sSearchPlaceholder": "Search...",
                    "sLengthMenu": "Results :  _MENU_",
                },
                "lengthMenu": [5, 10, 20, 50, 100],
                "pageLength": 10
            });
        } catch (err) {
            //alert(err);
        }
    }
});
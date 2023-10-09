@extends('layout.base')

@section('page-styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/src/plugins/src/table/datatable/datatables.css') }}">

    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/src/plugins/css/light/table/datatable/dt-global_style.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/src/plugins/css/light/table/datatable/custom_dt_custom.css') }}">

    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/src/plugins/css/dark/table/datatable/dt-global_style.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/src/plugins/css/dark/table/datatable/custom_dt_custom.css') }}">
@endsection

@section('page-content')
    <!-- BREADCRUMB -->
    <div class="page-meta">
        <nav class="breadcrumb-style-one" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Farmer Management</a></li>
                <li class="breadcrumb-item active" aria-current="page">View Farmers</li>
            </ol>
        </nav>
    </div>
    <!-- /BREADCRUMB -->

    <div class="d-flex justify-content-end">
        <a href="{{ route('farmers.create') }}" class="btn btn-success mb-2 me-4">Add
            Farmer</a>
    </div>


    @if (session()->has('status'))
        <div class="alert alert-light-success alert-dismissible fade show border-0 mb-4" role="alert">
            <span>{{ session('status') }}</span>
        </div>
    @endif

    <div class="row layout-spacing">
        <div class="col-lg-12">
            <div class="statbox widget box box-shadow">
                <div class="widget-content widget-content-area">
                    <table id="html5-extension" class="table dt-table-hover" style="width:100%">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Firstname</th>
                                <th>Lastname</th>
                                <th>Birth Place</th>
                                <th>Date of Birth</th>
                                <th>House Number</th>
                                <th>Community</th>
                                <th>Occupation</th>
                                <th>District</th>
                                <th>Religion</th>
                                <th>Marital Status</th>
                                <th>Created On</th>
                                <th class="text-center dt-no-sorting">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($farmers as $index => $farmer)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $farmer->firstname }}</td>
                                    <td>{{ $farmer->lastname }}</td>
                                    <td>{{ $farmer->birth_place }}</td>
                                    <td>{{ $farmer->dob }}</td>
                                    <td>{{ $farmer->house_number }}</td>
                                    <td>{{ $farmer->community }}</td>
                                    <td>{{ $farmer->occupation }}</td>
                                    <td>{{ $farmer->district }}</td>
                                    <td>{{ $farmer->religion }}</td>
                                    <td>{{ $farmer->marital_status }}</td>
                                    <td>{{ $farmer->created_at }}</td>
                                    <td class="text-center">
                                        <div class="action-btns">
                                            <a href="{{ route('farmers.show', $farmer) }}"
                                                class="action-btn btn-view bs-tooltip me-2" data-toggle="tooltip"
                                                data-placement="top" title="View">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-eye">
                                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                    <circle cx="12" cy="12" r="3"></circle>
                                                </svg>
                                            </a>
                                            <a href="{{ route('farmers.edit', $farmer) }}"
                                                class="action-btn btn-edit bs-tooltip me-2" data-toggle="tooltip"
                                                data-placement="top" title="Edit">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-edit-2">
                                                    <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('page-scripts')
    <script src="{{ asset('assets/src/plugins/src/global/vendors.min.js') }}"></script>
    <script src="{{ asset('assets/src/assets/js/custom.js') }}"></script>
    <script src="{{ asset('assets/src/plugins/src/table/datatable/datatables.js') }}"></script>
    <script>
        c2 = $('#style-2').DataTable({

            "dom": "<'dt--top-section'<'row'<'col-12 col-sm-6 d-flex justify-content-sm-start justify-content-center'l><'col-12 col-sm-6 d-flex justify-content-sm-end justify-content-center mt-sm-0 mt-3'f>>>" +
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
            "lengthMenu": [5, 10, 20, 50],
            "pageLength": 10
        });

        multiCheck(c2);
    </script>
    <script src="{{ asset('assetssrc/plugins/src/table/datatable/datatables.js') }}"></script>
    <script src="{{ asset('assets/src/plugins/src/table/datatable/button-ext/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/src/plugins/src/table/datatable/button-ext/jszip.min.js') }}"></script>
    <script src="{{ asset('assets/src/plugins/src/table/datatable/button-ext/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/src/plugins/src/table/datatable/button-ext/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/src/plugins/src/table/datatable/custom_miscellaneous.js') }}"></script>
@endsection

@extends('layouts.app')

@section('breadcrumb')
<div class="row page-titles">
    <div class="col-md-5">
        <h4 class="text-themecolor">@lang('index.nav.home')</h4>
    </div>
    <div class="col-md-7">
        <div class="d-flex justify-content-end align-items-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">@lang('index.nav.home')</li>
            </ol>
            {{-- <button type="button" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Create New</button> --}}
        </div>
    </div>
</div>
@endsection

@section('style')
    <!-- page css -->
    <link href="{{asset('PERKESO_UI/horizontal-nav-fullwidth/dist/css/pages/tab-page.css')}}" rel="stylesheet">
    <link href="{{asset('PERKESO_UI/assets/node_modules/wizard/steps.css')}}" rel="stylesheet">
    <!--alerts CSS -->
    <link href="{{asset('PERKESO_UI/assets/node_modules/sweetalert/sweetalert.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('PERKESO_UI/assets/node_modules/datatables/media/css/dataTables.bootstrap4.css')}}" rel="stylesheet">
    <link href="{{asset('PERKESO_UI/assets/node_modules/select2/dist/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('PERKESO_UI/assets/node_modules/multiselect/css/multi-select.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

<!-- Row -->
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">HUK</h4>
                {{-- <h6 class="card-subtitle">Use default tab with class <code>nav-tabs & tabcontent-border </code></h6> --}}
                <div class="row p-10">
                    <div class="col-md-6">
                    </div>
                    {{-- Button Modal --}}
                    <div class="col-md-6" >
                        <button type="button" class="btn waves-effect waves-light btn-info" data-toggle="modal" data-target="#request_info" data-whatever="@getbootstrap">@lang('medical_board/index.request_info')</button>
                        {{-- <button type="button" class="btn waves-effect waves-light btn-info" data-toggle="modal" data-target="#set_appointment"d ata-whatever="@getbootstrap">@lang('index.set_appointment')</button> --}}
                        {{-- <button type="button" class="btn waves-effect waves-light btn-info" data-toggle="modal" data-target="#review" data-whatever="@getbootstrap">@lang('medical_board/index.review')</button> --}}
                    </div>
                    {{-- modal --}}
                    @include('medical_board.ro.detail_case.request_info')
                    {{-- @include('ro.set_appointment_modal') --}}
                </div>
                    <!-- Nav tabs -->
                    <ul class="nav customtab" role="tablist">

                        <li class="nav-item"> 
                            <a class="nav-link active" data-toggle="tab" href="#ob_details" role="tab">
                                <span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">@lang('medical_board/ob_details.title')</span>
                            </a> 
                        </li>

                        <li class="nav-item"> 
                            <a class="nav-link" data-toggle="tab" href="#application_details" role="tab"><span class="hidden-sm-up"><i class="ti-pencil-alt"></i></span> <span class="hidden-xs-down">@lang('medical_board/application_details.title')</span>
                            </a> 
                        </li>

                        <li class="nav-item"> 
                            <a class="nav-link" data-toggle="tab" href="#previous_claim" role="tab"><span class="hidden-sm-up"><i class="ti-layers"></i></span> <span class="hidden-xs-down">@lang('medical_board/previous_claim.title')</span>
                            </a> 
                        </li>

                        <li class="nav-item"> 
                            <a class="nav-link" data-toggle="tab" href="#interest_claim_details" role="tab"><span class="hidden-sm-up"><i class="ti-layers-alt"></i></span> <span class="hidden-xs-down">@lang('medical_board/interest_claim_details.title')</span>
                            </a> 
                        </li>

                        <li class="nav-item"> 
                            <a class="nav-link" data-toggle="tab" href="#documents" role="tab"><span class="hidden-sm-up"><i class="ti-notepad"></i></span> <span class="hidden-xs-down">Documents</span>
                            </a> 
                        </li>
                        
                        {{-- <li class="nav-item"> 
                            <a class="nav-link" data-toggle="tab" href="#input" role="tab"><span class="hidden-sm-up"><i class="ti-notepad"></i></span> <span class="hidden-xs-down">@lang('medical_board/input.title')</span>
                            </a> 
                        </li> --}}

                        {{-- <li class="nav-item"> 
                            <a class="nav-link" data-toggle="tab" href="#appointment" role="tab"><span class="hidden-sm-up"><i class="ti-notepad"></i></span> <span class="hidden-xs-down">@lang('medical_board/appointment.title')</span>
                            </a> 
                        </li> --}}

                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content tabcontent-border">

                        <div class="tab-pane p-20 active" id="ob_details" role="tabpanel">
                            @include('medical_board.ro..detail_case.ob_details')
                        </div>

                        <div class="tab-pane p-20" id="application_details" role="tabpanel">
                            @include('medical_board.ro.detail_case.application_details')
                        </div>

                        <div class="tab-pane p-20" id="previous_claim" role="tabpanel">
                            @include('medical_board.ro.detail_case.previous_claim')
                        </div>

                        <div class="tab-pane p-20" id="interest_claim_details" role="tabpanel">
                            @include('medical_board.ro.detail_case.interest_claim_details')
                        </div>

                        <div class="tab-pane p-20" id="documents" role="tabpanel">
                            @include('medical_board.ro.detail_case.documents')
                        </div>

                        {{-- <div class="tab-pane p-20" id="input" role="tabpanel">
                            @include('medical_board.ro.detail_case.input')
                        </div> --}}

                        {{-- <div class="tab-pane p-20" id="appointment" role="tabpanel">
                            @include('medical_board.ro.appointment.set_appointment')
                        </div> --}}
                    </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')

    <!-- This is data table -->
    <script src="{{asset('PERKESO_UI/assets/node_modules/datatables/datatables.min.js')}}"></script>
    <!-- start - This is for export functionality only -->
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>
    <!-- end - This is for export functionality only -->
    
    <script>
    $(function() {

        $('#document_table').DataTable({
            // Sort desc for column date
            "order": [
                [0, 'asc'],
            ],
            // Search not for text field
            'columnDefs' : [{ 
                // 'searchable'    : false, 
                'orderable'     : false,
                'targets'       : [1,2]
            }],
            // 10 rows per page
            "displayLength": 10,
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });

        $('#previousclaims_table').DataTable({
            // Sort desc for column date
            "order": [
                [0, 'asc'],
            ],
            // Search not for text field
            'columnDefs' : [{ 
                // 'searchable'    : false, 
                'orderable'     : false,
                'targets'       : [1,2,3,4,5],
            }],
            // 10 rows per page
            "displayLength": 10,
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
        $('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass('btn btn-primary mr-1');

        // $(function() {
        //     var table = $('#example').DataTable({
        //         "columnDefs": [{
        //             "visible": false,
        //             "targets": 2
        //         }],
        //         "order": [
        //             [2, 'asc']
        //         ],
        //         "displayLength": 25,
        //         "drawCallback": function(settings) {
        //             var api = this.api();
        //             var rows = api.rows({
        //                 page: 'current'
        //             }).nodes();
        //             var last = null;
        //             api.column(2, {
        //                 page: 'current'
        //             }).data().each(function(group, i) {
        //                 if (last !== group) {
        //                     $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
        //                     last = group;
        //                 }
        //             });
        //         }
        //     });
        //     // Order by the grouping
        //     $('#example tbody').on('click', 'tr.group', function() {
        //         var currentOrder = table.order()[0];
        //         if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
        //             table.order([2, 'desc']).draw();
        //         } else {
        //             table.order([2, 'asc']).draw();
        //         }
        //     });
        // });
    });
    </script>
    
    <script src="{{asset('PERKESO_UI/horizontal-nav-fullwidth/dist/js/pages/validation.js')}}"></script>
    <script src="{{asset('PERKESO_UI/assets/node_modules/wizard/jquery.steps.min.js')}}"></script>
    <script src="{{asset('PERKESO_UI/assets/node_modules/wizard/jquery.validate.min.js')}}"></script>
    <script src="{{asset('PERKESO_UI/assets/node_modules/sweetalert/sweetalert.min.js')}}"></script>
    <script src="{{asset('PERKESO_UI/assets/node_modules/select2/dist/js/select2.full.min.js')}}" type="text/javascript"></script>
    <script type="text/javascript" src="{{asset('PERKESO_UI/assets/node_modules/multiselect/js/jquery.multi-select.js')}}"></script>

    <script>
    ! function(window, document, $) {
        "use strict";
        $("input,select,textarea").not("[type=submit]").jqBootstrapValidation();
    }(window, document, jQuery);
    </script>
    
    <script>
        //Custom design form example

        var form = $(".validation-wizard").show();

        $(".validation-wizard").steps({
            headerTag: "h6",
            bodyTag: "section",
            transitionEffect: "fade",
            titleTemplate: '<span class="step">#index#</span> #title#',
            labels: {
                finish: "@lang('appointment.save')"
            },
            onStepChanging: function (event, currentIndex, newIndex) {
                return currentIndex > newIndex || !(3 === newIndex && Number($("#age-2").val()) < 18) && (currentIndex < newIndex && (form.find(".body:eq(" + newIndex + ") label.error").remove(), form.find(".body:eq(" + newIndex + ") .error").removeClass("error")), form.validate().settings.ignore = ":disabled,:hidden", form.valid())
            },
            onFinishing: function (event, currentIndex) {
                return form.validate().settings.ignore = ":disabled", form.valid()
            },
            onFinished: function (event, currentIndex) {
                swal("Form Submitted!", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem erat eleifend ex semper, lobortis purus sed.");
            }
        }), $(".validation-wizard").validate({
            ignore: "input[type=hidden]",
            errorClass: "text-danger",
            successClass: "text-success",
            highlight: function (element, errorClass) {
                $(element).removeClass(errorClass)
            },
            unhighlight: function (element, errorClass) {
                $(element).removeClass(errorClass)
            },
            errorPlacement: function (error, element) {
                error.insertAfter(element)
            },
            rules: {
                email: {
                    email: !0
                }
            }
        })
    </script>

    <script>
    var room = 1;

    function panel_fields() {

        room++;
        var objTo = document.getElementById('panel_fields')
        var divtest = document.createElement("div");
        divtest.setAttribute("class", "removeclass" + room);
        var rdiv = 'removeclass' + room;
        divtest.innerHTML = '<div class="form-group"><label class="control-label">@lang('medical_board/appointment.attr.panel') '+ room +'</label><div class="input-group"><select name="panel'+ room +'" class="form-control{{-- required --}}" id="set_app_panel" ><option>Choose @lang('medical_board/appointment.attr.panel') :</option><option value="">Dr. Fawwaz</option><option value="">Dr. Nizam</option></select><div class="input-group-append"><button class="btn btn-danger" type="button" onclick="remove_education_fields(' + room + ');"><i class="fa fa-minus"></i> </button></div></div></div>';

        objTo.appendChild(divtest);
    }

    function remove_education_fields(rid) {
        $('.removeclass' + rid).remove();
        room--;
    }
    </script>

    
    <script>
        // For select 2
        $("#set_app_state").select2();
        $("#set_app_hospital").select2();
        $("#set_app_speciality").select2();
        $("#set_app_panel").select2();
        $("#set_app_chairman").select2();
        $("#set_app_sectariat").select2();
        $("#set_app_state2").select2();
        $("#set_app_hospital2").select2();
    </script>

@endsection

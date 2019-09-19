@extends('layouts.app')

@section('breadcrumb')
	<div class="row page-titles" >
        <div class="col-md-5">
            <h4 class="text-themecolor">@lang('medical_board/index.nav.takwim')</h4>
        </div>
        <div class="col-md-7">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/home">@lang('medical_board/index.nav.home')</a></li>
                    <li class="breadcrumb-item active">@lang('medical_board/takwim.takwim')</li>
                </ol>
                {{-- <button type="button" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Create New</button> --}}
            </div>
        </div>
    </div>
@endsection

@section('style')
    {{-- CSS for TAB_NAV --}}
    <link href="{{asset('PERKESO_UI/horizontal-nav-fullwidth/dist/css/pages/tab-page.css')}}" rel="stylesheet">
    <link href="{{asset('PERKESO_UI/assets/node_modules/wizard/steps.css')}}" rel="stylesheet">
    {{-- CSS for DATA TABLES --}}
    <link href="{{asset('PERKESO_UI/assets/node_modules/datatables/media/css/dataTables.bootstrap4.css')}}" rel="stylesheet">
    {{-- CSS for SEARCH DROPDOWN --}}
    <link href="{{asset('PERKESO_UI/assets/node_modules/select2/dist/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Date picker plugins css -->
    <link href="{{asset('PERKESO_UI/assets/node_modules/bootstrap-datepicker/bootstrap-datepicker.min.css')}}" rel="stylesheet" type="text/css" />
    {{-- CSS for FULLCALENDAR --}}
    <link href="{{asset('js-year-calendar/dist/js-year-calendar.css')}}" rel="stylesheet">
    {{-- @include('medical_board.ro.takwim.calendar') --}}
    {{-- <link rel="stylesheet" type="text/css" href="{{asset('PERKESO_UI/assets/node_modules/calendar/dist/fullcalendar.min.css')}}"> --}}
@endsection

@section('content')
    <!-- Row -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                        <!-- Nav tabs -->
                        <ul class="nav customtab" role="tablist">
                            
                            <li class="nav-item"> 
                                <a class="nav-link active" data-toggle="tab" href="#calendar_takwim" role="tab"><span class="hidden-sm-up"><i class="ti-calendar"></i></span> <span class="hidden-xs-down">@lang('medical_board/index.calendar')</span>
                                </a> 
                            </li>

                            <li class="nav-item"> 
                                <a class="nav-link" data-toggle="tab" href="#listing_takwim" role="tab">
                                    <span class="hidden-sm-up"><i class="ti-menu-alt"></i></span> <span class="hidden-xs-down">@lang('medical_board/index.listing')</span>
                                </a> 
                            </li>

                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content tabcontent-border">
                            
                            <div class="tab-pane p-20 active" id="calendar_takwim" role="tabpanel">
                                @include('medical_board.ro.takwim.calender_takwim_page')
                            </div>

                            <div class="tab-pane p-20" id="listing_takwim" role="tabpanel">
                                @include('medical_board.ro.takwim.set_takwim_page')
                            </div>

                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')

@include('medical_board.ro.takwim.calendar');

{{-- SCRIPT for FULLCALENDAR --}}
<script src="{{asset('js-year-calendar/dist/js-year-calendar.js')}}"></script>
{{-- SCRIPT for DATA TABLES --}}
<script src="{{asset('PERKESO_UI/assets/node_modules/datatables/datatables.min.js')}}"></script>

{{-- CALENDAR --}}
<script type="text/javascript">
    $('#takwim_hospital').change(function () { //we watch and execute the next lines when any value from the dropdown#1 is selected
        var hospital_id = $(this).val(); //we get the selected value on dropdown#1 and store it on id variable
        if(hospital_id == ''){
            $('#takwim_address').val('');
            $('#takwim_statecode').val('');
            $('#calendar').hide();
        }else{
            $('#calendar').show();
            calendar(hospital_id);
        }
        var url = $('#application_url').val(); //we get the url from our hidden element that we used in first line of our view file, and store it on url variable
        // calendar(id);
        // alert('Y');
            //here comes the ajax function part
            $.ajax({
            url: url + "/takwim/hospital_address/" + hospital_id, //we use the same url we used in our route file and we are adding the id variable which have the selected value in dropdown#1
            dataType: "json", //we specify that we are going to use json type of data. That's where we sent our query result (from our controller)
            success: function (data) { //*on my understanding using json datatype means that the variable "data" gets the value and that's why we use it to tell what to do since here.*
                //and this final part is where we use the dropdown#1 value and we set the values for the dropdown#2 just adding the variables that we got from our query (in controllert) through "data" variable.
                $('#takwim_address').empty();
                $('#takwim_address').val(data.hospital_add1 + ' ' + data.hospital_add2 + ' ' + data.hospital_add3 + ' ' + data.hospital_postcode + ' ' + data.hospital_city);
                // $.each(data, function (key, value) {
                //     $('#takwim_address').val(value.hospital_add1 + ' ' + value.hospital_add2 + ' ' + value.hospital_add3 + ' ' + value.hospital_postcode + ' ' + value.hospital_city);
                // });
            }
        });

        $.ajax({
            url: url + "/takwim/statecode/" + hospital_id, //we use the same url we used in our route file and we are adding the id variable which have the selected value in dropdown#1
            dataType: "json", //we specify that we are going to use json type of data. That's where we sent our query result (from our controller)
            success: function (data) { //*on my understanding using json datatype means that the variable "data" gets the value and that's why we use it to tell what to do since here.*
                //and this final part is where we use the dropdown#1 value and we set the values for the dropdown#2 just adding the variables that we got from our query (in controllert) through "data" variable.
                $('#takwim_statecode').empty();
                $.each(data, function (key, value) {
                    $('#takwim_statecode').val(value.statecode);
                });
            }
        });
    });
</script>

{{-- SUMMARY LISTING --}}
<script type="text/javascript">
    $('#takwim_year_listing').change(function () { 
        // var takwim_hospital_listing = $('#takwim_hospital_listing').val();
        var takwim_year_listing = $('#takwim_year_listing').val();

        if(takwim_year_listing != '')
            document.getElementById("search_annualAgenda").disabled = false;
        else
            document.getElementById("search_annualAgenda").disabled = true;
    });

    $('#takwim_medical_board_category_listing').change(function () { 

            document.getElementById("search_annualAgenda").disabled = false;
    });

    $('#takwim_hospital_listing').change(function () { 

        document.getElementById("search_annualAgenda").disabled = false;

        var id = $(this).val(); //we get the selected value on dropdown#1 and store it on id variable
        if(id == ''){
            $('#takwim_address_listing').val('');
            $('#takwim_statecode_listing').val('');
        }
        var url = $('#application_url_listing').val(); //we get the url from our hidden element that we used in first line of our view file, and store it on url variable
        // calendar(id);
            //here comes the ajax function part
            $.ajax({
            url: url + "/takwim/hospital_address/" + id, //we use the same url we used in our route file and we are adding the id variable which have the selected value in dropdown#1
            dataType: "json", //we specify that we are going to use json type of data. That's where we sent our query result (from our controller)
            success: function (data) { //*on my understanding using json datatype means that the variable "data" gets the value and that's why we use it to tell what to do since here.*
                //and this final part is where we use the dropdown#1 value and we set the values for the dropdown#2 just adding the variables that we got from our query (in controllert) through "data" variable.
                $('#takwim_address_listing').empty();
                $('#takwim_address_listing').val(data.hospital_add1 + ' ' + data.hospital_add2 + ' ' + data.hospital_add3 + ' ' + data.hospital_postcode + ' ' + data.hospital_city);
                // $.each(data, function (key, value) {
                //     $('#takwim_address').val(value.hospital_add1 + ' ' + value.hospital_add2 + ' ' + value.hospital_add3 + ' ' + value.hospital_postcode + ' ' + value.hospital_city);
                // });
            }
        });

        $.ajax({
            url: url + "/takwim/statecode/" + id, //we use the same url we used in our route file and we are adding the id variable which have the selected value in dropdown#1
            dataType: "json", //we specify that we are going to use json type of data. That's where we sent our query result (from our controller)
            success: function (data) { //*on my understanding using json datatype means that the variable "data" gets the value and that's why we use it to tell what to do since here.*
                //and this final part is where we use the dropdown#1 value and we set the values for the dropdown#2 just adding the variables that we got from our query (in controllert) through "data" variable.
                $('#takwim_statecode_listing').empty();
                $.each(data, function (key, value) {
                    $('#takwim_statecode_listing').val(value.statecode);
                });
                document.getElementById("search_annualAgenda").disabled = false;
            }
        });
    });
</script>

{{-- SUMMARY LISTING --}}
<script type="text/javascript">
    $('#search_annualAgenda').click(function () {

        var takwim_year_listing = $('#takwim_year_listing').val();
        var takwim_hospital_listing1 = $('#takwim_hospital_listing').val();
        var takwim_medical_board_category_listing1 = $('#takwim_medical_board_category_listing').val();

        if(takwim_year_listing == ''){
            alert('Please select year');
        }

        if(takwim_hospital_listing1 == ''){
            var takwim_hospital_listing = 'NULL';
        }else{
           var takwim_hospital_listing = $('#takwim_hospital_listing').val(); 
        }

        if(takwim_medical_board_category_listing1 == ''){
            var takwim_medical_board_category_listing = 'NULL';
        }else{
           var takwim_medical_board_category_listing = $('#takwim_medical_board_category_listing').val(); 
        }

        var url = $('#application_url_listing').val(); 

        if(takwim_year_listing != ''){
            $(document).ready(function() {

            jQuery.extend( jQuery.fn.dataTableExt.oSort, {
                "date-uk-pre": function ( a ) {
                    if (a == null || a == "") {
                        return 0;
                    }
                    var ukDatea = a.split('/');
                    return (ukDatea[2] + ukDatea[1] + ukDatea[0]) * 1;
                },
             
                "date-uk-asc": function ( a, b ) {
                    return ((a < b) ? -1 : ((a > b) ? 1 : 0));
                },
             
                "date-uk-desc": function ( a, b ) {
                    return ((a < b) ? 1 : ((a > b) ? -1 : 0));
                }
            } );

            var example_table = $('#takwim_listing').DataTable( {
                destroy: true,
                // "ordering": false,
                ajax: {
                    url: url + "/takwim/annualAgenda/" + takwim_hospital_listing + "/" + takwim_year_listing + "/" + takwim_medical_board_category_listing,
                    dataSrc: function(data){
                        if(data.errorcode == -1){
                            return [];
                        }
                        else {
                            return data;
                        }
                    },
                    dataType: "json",
                },
                "columns": [
                    // { "data": null },
                    { "data": "date_takwim" },
                    { "data": "sidang" },
                    { "data": "venue" },
                    { "data": "mb_category" },
                    { "data": "doc_speaciality" },
                    { "data": "hospital_name" },
                    { "data": "remarks" },
                    { "data": "doctor_name" },
                    { "data": "quota" },
                ],
                //Sort desc for column date
                // "order": [
                //     [0, 'asc'],
                // ],
                //Search not for text field
                'columnDefs' : [{ 
                    type: 'date-uk', 
                    targets: 0,
                    // "order" : false,
                    // "target": 4, 
                }],
                // 10 rows per page
                "displayLength": 10,
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });
            // example_table.on( 'order.dt search.dt', function () {
            //     example_table.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
            //         cell.innerHTML = i+1;
            //     });
            // }).draw();
            $('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass('btn btn-primary mr-1');
            });
            document.getElementById("search_annualAgenda").disabled = true;

        }else{
            $('#takwim_listing').DataTable().clear().draw();
            document.getElementById("search_annualAgenda").disabled = true;
        }
        
        //     $.ajax({
        //     url: url + "/takwim/annualAgenda/" + takwim_hospital_listing , //we use the same url we used in our route file and we are adding the id variable which have the selected value in dropdown#1
        //     dataType: "json", //we specify that we are going to use json type of data. That's where we sent our query result (from our controller)
        //     success: function (data) { //*on my understanding using json datatype means that the variable "data" gets the value and that's why we use it to tell what to do since here.*
        //         //and this final part is where we use the dropdown#1 value and we set the values for the dropdown#2 just adding the variables that we got from our query (in controllert) through "data" variable.
        //         $('#tbody').empty();
        //         $.each(data, function (key, value) {
        //             $('#tbody').append('<tr><td></td><td>'+ value.date_takwim+'</td><td>'+value.sidang+'</td><td>'+value.venue+'</td><td>'+value.mb_category+'</td><td>'+value.doc_speaciality+'</td><td></td></tr>');
        //         });
        //     }
        // });
    });
</script>

{{-- <script type="text/javascript">
    $('#takwim_medical_board_category').change(function () { //we watch and execute the next lines when any value from the dropdown#1 is selected
        var id = $(this).val(); //we get the selected value on dropdown#1 and store it on id variable
        $('#takwim_benefit_type').empty();
        if(id == '2' || id == '4'){
            $('#takwim_benefit_type').append('<option value="">-- @lang('index.please_select') -- </option><option value="OD">OD - Optional Disease</option>');
        }else if(id == '1' || id == '3'){
            $('#takwim_benefit_type').append('<option value="">-- @lang('index.please_select') -- </option><option value="HUK">HUK - Hilang Upaya Kekal</option><option value="ILT">ILT - Ilat</option>');
        }else {
            $('#takwim_benefit_type').append('<option value="">-- @lang('index.please_select') -- </option>@foreach ($benefit_type as $value)<option value={{$value->refcode}}>{{$value->refcode}} - {{$value->descen}}</option>@endforeach');
        }
    });
</script> --}}

{{-- SCRIPT for SEARCH DROPDOWN --}}
<script src="{{asset('PERKESO_UI/assets/node_modules/select2/dist/js/select2.full.min.js')}}" type="text/javascript"></script>
<script>
    // For select 2
    $(".select2").select2();
    $("#takwim_hospital").select2();
    $("#takwim_hospital_listing").select2();
        $(".ajax").select2({
            ajax: {
                url: "https://api.github.com/search/repositories",
                dataType: 'json',
                delay: 250,
                data: function (params) {
                    return {
                        q: params.term, // search term
                        page: params.page
                    };
                },
                processResults: function (data, params) {
                    // parse the results into the format expected by Select2
                    // since we are using custom formatting functions we do not need to
                    // alter the remote JSON data, except to indicate that infinite
                    // scrolling can be used
                    params.page = params.page || 1;
                    return {
                        results: data.items,
                        pagination: {
                            more: (params.page * 30) < data.total_count
                        }
                    };
                },
                cache: true
            },
            escapeMarkup: function (markup) {
                return markup;
            }, // let our custom formatter work
            minimumInputLength: 1,
            //templateResult: formatRepo, // omitted for brevity, see the source of this page
            //templateSelection: formatRepoSelection // omitted for brevity, see the source of this page
        });
</script>

    {{-- <script>
        $("#takwim_hospital").change(function() {
          $.ajax({
            url: '/address/' + $(this).val(),
            type: 'get',
            data: {},
            success: function(data) {
              if (data.success == true) {
                $("#text").value = data.info;
              } else {
                alert('Cannot find info');
              }

            },
            error: function(jqXHR, textStatus, errorThrown) {}
          });
        });
    </script> --}}

{{-- SCRIPT for TAB_NAV --}}
<script src="{{asset('PERKESO_UI/horizontal-nav-fullwidth/dist/js/pages/validation.js')}}"></script>
<script src="{{asset('PERKESO_UI/assets/node_modules/wizard/jquery.steps.min.js')}}"></script>
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
    $('#takwim_listing').DataTable({
        // Sort desc for column date
        "order": [
            [0, 'desc'],
        ],
        // Search not for text field
        // 'columnDefs' : [{ 
        //     'orderable'    : false, 
        //     'targets'       : [1]
        // }],
        // 10 rows per page
        "displayLength": 10,
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print',
        ]
    });
    $('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass('btn btn-primary mr-1');
});
</script>

<!-- Date Picker Plugin JavaScript -->
<script src="{{asset('PERKESO_UI/assets/node_modules/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
<script>
    // Date Picker
    jQuery('#date-range_modal').datepicker({
        autoclose: true,
        toggleActive: true,
        format: 'dd/mm/yyyy',
    });

    // Date Picker
    jQuery('#date-range_update').datepicker({
        autoclose: true,
        toggleActive: true,
        format: 'dd/mm/yyyy',
    });

    // Date Picker
    jQuery('#date-range-duplicate').datepicker({
        autoclose: true,
        toggleActive: true,
        format: 'dd/mm/yyyy',
    });

    jQuery('#date-range-quota').datepicker({
        autoclose: true,
        toggleActive: true,
        format: 'dd/mm/yyyy',
    });

    $('.start_update').change(function() {
        var date2 = $('.start_update').datepicker('getDate');
        date2.setDate(date2.getDate());
        $('.end_update').datepicker('setDate', date2);
    });

</script>

<script>
    // Date Picker
    jQuery('#takwim_year').datepicker({
        autoclose: true,
        format: 'yyyy',
    });
</script>
    
    {{-- <script src="{{asset('PERKESO_UI/assets/node_modules/calendar/jquery-ui.min.js')}}"></script>
    <script src="{{asset('PERKESO_UI/assets/node_modules/moment/moment.js')}}"></script>
    <script src="{{asset('PERKESO_UI/assets/node_modules/calendar/dist/fullcalendar.min.js')}}" type="text/javascript"></script> --}}
    {{-- <script src="{{asset('PERKESO_UI/assets/node_modules/calendar/dist/cal-init.js')}}"></script> --}}
    {{-- @include('inc.calendar_js') --}}

<script src="{{asset('PERKESO_UI/horizontal-nav-fullwidth/dist/js/custom.min.js')}}"></script>
<script src="{{asset('PERKESO_UI/horizontal-nav-fullwidth/dist/js/pages/validation.js')}}"></script>
<script>
    ! function(window, document, $) {
        "use strict";
        $("input,select,textarea").not("[type=submit]").jqBootstrapValidation();
    }(window, document, jQuery);
</script>
{{-- <script src="{{asset('js/calendar1.js')}}"></script> --}}

@endsection


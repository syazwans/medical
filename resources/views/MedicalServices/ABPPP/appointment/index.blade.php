@extends('layouts.app')


@section('head')
<!-- page css -->
<link href="/PERKESO_UI/horizontal-nav-fullwidth/dist/css/pages/tab-page.css" rel="stylesheet">
<link href="/PERKESO_UI/assets/node_modules/wizard/steps.css" rel="stylesheet">
<!--alerts CSS -->
<link href="/PERKESO_UI/assets/node_modules/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">
<link href="/PERKESO_UI/assets/node_modules/datatables/media/css/dataTables.bootstrap4.css" rel="stylesheet">
<link href="/PERKESO_UI/assets/node_modules/select2/dist/css/select2.min.css" rel="stylesheet" type="text/css" />
<link href="/PERKESO_UI/assets/node_modules/multiselect/css/multi-select.css" rel="stylesheet" type="text/css" />
@endsection

@section('content')
<!-- Row -->
<div class="row">
    <div class="col-md-12">

        {{-- <h4 class="card-title">Default Tab</h4> --}}
        {{-- <h6 class="card-subtitle">Use default tab with class <code>nav-tabs & tabcontent-border </code></h6> --}}


        <div class="row" id="rowindex">
            <div class="col-md-12">
                <div class="card text-left" id="cardindex">
                    <div class="card-body" id="cardbody">
                        <table>
                            <thead>
                                <tr>
                                    <th><label>Name</label></th>

                                    <th>:</th>
                                    <th>@isset($FactC->name) {{$FactC->name}} @endisset</th>
                                </tr>
                                <tr>
                                    <th><label>Identification No.</label></th>
                                    <th>:</th>
                                    <th>@isset($FactC->idno) {{$FactC->idno}} @endisset</th>
                                </tr>

                                <tr>
                                    <th><label>Scheme Reference No.</label></th>
                                    <th>:</th>
                                    <th>{{(Session::get('schemerefno'))}}</th>
                                </tr>
                                <tr>
                                    <th><label>MO Reference No.</label></th>
                                    <th>:</th>
                                    <th>@isset($FactC->msrefno) {{$FactC->msrefno}} @endisset</th>
                                </tr>

                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row p-12">
            <div class="col-md-12">
                <h4 class="card-title">@lang('ABPPP')</h4>
            </div>
            {{-- Button Modal --}}
            {{-- <div class="col-md-6 align-self-center text-right" >
                            <button type="button" class="btn waves-effect waves-light btn-info" data-toggle="modal" data-target="#request_info" data-whatever="@getbootstrap">@lang('index.request_info')</button>
                            {{-- <button type="button" class="btn waves-effect waves-light btn-info" data-toggle="modal" data-target="#set_appointment" data-whatever="@getbootstrap">@lang('index.set_appointment')</button>
                            <button type="button" class="btn waves-effect waves-light btn-info" data-toggle="modal" data-target="#review" data-whatever="@getbootstrap">@lang('index.review')</button>
                        </div> --}}
            {{-- modal --}}
            {{-- @include('medical_board.ro.request_info') --}}
            {{-- @include('ro.set_appointment_modal') --}}
        </div>
        <!-- Nav tabs -->
        <ul class="nav customtab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#appointments" role="tab"><span 
                        class="hidden-sm-up"><i class="ti-notepad"></i></span> <span 
                        class="hidden-xs-down">@lang('Appointment')</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#committees" role="tab"><span 
                        class="hidden-sm-up"><i class="ti-notepad"></i></span> <span 
                        class="hidden-xs-down">@lang('Committee')</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#minutes" role="tab">
                    <span class="hidden-sm-up"><i class="ti-user"></i></span> <span
                        class="hidden-xs-down">@lang('Minutes of Meeting')</span>
                </a>
            </li>
            
        </ul>
        <!-- Tab panes -->
        <div class="tab-content tabcontent-border">

            <div class="tab-pane p-20 active" id="appointments" role="tabpanel">
            @include('MedicalServices.ABPPP.appointment.createApp')
            </div>
            
            <div class="tab-pane p-20" id="committees" role="tabpanel">
                @include('MedicalServices.ABPPP.appointment.committee')
            </div>
            <div class="tab-pane p-20" id="minutes" role="tabpanel">
            @include('MedicalServices.ABPPP.appointment.minutes')
                
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')
<script>
    // DataTable
    var table = $('#committeeTable').DataTable({
        "paging":   false,
        "ordering": false,
        "info":     false,
        sDom: 'lrtip'
    });

    // Apply the search
    table.columns(0).every(function () {
        var that = this;
        
        $('#commit_no').on('keyup change', function () {
            if (that.search() !== this.value) {
                that
                    .search(this.value)
                    .draw();
            }
        });
    });


// 	$(document).ready(function () {
// 		var language= $('#change_language').val();
// 		if(language=="BM"){
//       //$('#malay').addClass("ti-check");
//       //$('#english').removeClass("ti-check");
      
//       //chg07072019 - irina
//       $('#malay').css("cssText", "font-weight:bold !important;");
//       $('#english').css("cssText", "font-weight:normal !important;");

//       $('#committeeTable').DataTable({
      	
//       	language: {
//       		"url": "//cdn.datatables.net/plug-ins/1.10.19/i18n/Malay.json"
//       	},
//       });
//       $('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass('btn btn-primary mr-1');
//   }
//   else{
//       //$('#english').addClass("ti-check");
//       //$('#malay').removeClass("ti-check");
      
//       $('#committeeTable').DataTable({
      	
//       });
//       $('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass('btn btn-primary mr-1');
//       //chg07072019 - irina
//       $('#malay').css("cssText", "font-weight:normal !important;");
//       $('#english').css("cssText", "font-weight:bold !important;");

//   }
// });
</script>

@endsection


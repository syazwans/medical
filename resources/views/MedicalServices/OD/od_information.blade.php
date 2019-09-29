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
<link href="/PERKESO_UI/assets/node_modules/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />

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
                <h4 class="card-title">@lang('Occupational Disease')</h4>
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
                <a class="nav-link active" data-toggle="tab" href="#fact_case" role="tab">
                    <span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">@lang('Case Fact Info')</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#current_case" role="tab">
                    <span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">@lang('Current Case Info')</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#benefit_case" role="tab">
                    <span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">@lang('History Info')</span>
                </a>
            </li>
                  
            

            {{--
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#medical_decision" role="tab"><span 
                        class="hidden-sm-up"><i class="ti-notepad"></i></span> <span 
                        class="hidden-xs-down">@lang('Decision')</span>
                </a>
            </li>--}}

            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#supporting_document" role="tab">
                    <span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">@lang('Supporting Document')</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#medical_view" role="tab">
                    <span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">@lang('Decision')</span>
                </a>
            </li>

            {{-- <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#committee" role="tab">
                    <span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">@lang('Committee Board')</span>
                </a>
            </li> --}}

           
            {{--
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#query_info" role="tab"><span class="hidden-sm-up"><i
                            class="ti-notepad"></i></span> <span class="hidden-xs-down">@lang('Query
                        Information')</span>
                </a>
            </li>

            
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#Specific_info" role="tab"><span class="hidden-sm-up"><i
                            class="ti-notepad"></i></span> <span class="hidden-xs-down">@lang('Specific
                        Information')</span>
                </a>
            </li> --}}

        </ul>



        <!-- Tab panes -->
        <div class="tab-content tabcontent-border">

            <div class="tab-pane p-20 active" id="fact_case" role="tabpanel">
                @include('MedicalServices.noticeAccident.fact_case')
            </div>

            <div class="tab-pane p-20" id="current_case" role="tabpanel">
                @include('MedicalServices.noticeAccident.current_case')
               
            </div>

            <div class="tab-pane p-20" id="benefit_case" role="tabpanel">
                @include('MedicalServices.noticeAccident.benefit_case')
                
            </div>
         
            <div class="tab-pane p-20" id="supporting_document" role="tabpanel">
                @include('MedicalServices.noticeAccident.document')
            </div>

            <div class="tab-pane p-20" id="medical_view" role="tabpanel">
                @include('MedicalServices.noticeAccident.medical_opinion')
            </div>
{{-- 
             <div class="tab-pane p-20" id="committee" role="tabpanel">
                 @include('MedicalServices.committee')
             </div> --}}
        </div>
    </div> 
 </div>

@endsection
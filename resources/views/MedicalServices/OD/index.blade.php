@extends('layouts.app')

@section('breadcrumb')
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">@lang('index.nav.index')</h4>
    </div>
    <div class="col-md-7 align-self-center text-right">
        <div class="d-flex justify-content-end align-items-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/home">@lang('index.nav.home')</a></li>
                <li class="breadcrumb-item active">@lang('index.nav.index')</li>
            </ol>
            {{-- <button type="button" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Create New</button> --}}
        </div>
    </div>
</div>
@endsection

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
                                        <th></th>
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
                    <span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">@lang('Fact
                        Case Info')</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#current_case" role="tab"><span class="hidden-sm-up"><i
                            class="ti-pencil-alt"></i></span> <span class="hidden-xs-down">@lang('Current Case
                        Info')</span>
                </a>
            </li>


            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#benefit_case" role="tab"><span class="hidden-sm-up"><i
                            class="ti-layers"></i></span> <span class="hidden-xs-down">@lang('History Benefit
                        Info')</span>
                </a>
            </li>
            {{--       
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#medical_fact" role="tab"><span 
                        class="hidden-sm-up"><i class="ti-notepad"></i></span> <span 
                        class="hidden-xs-down">@lang('Case Fact')</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#medical_decision" role="tab"><span 
                        class="hidden-sm-up"><i class="ti-notepad"></i></span> <span 
                        class="hidden-xs-down">@lang('Decision')</span>
                </a>
            </li>--}}

            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#supporting_document" role="tab"><span
                        class="hidden-sm-up"><i class="ti-layers-alt"></i></span> <span
                        class="hidden-xs-down">@lang('Supporting Document')</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#medical_view" role="tab"><span class="hidden-sm-up"><i
                            class="ti-notepad"></i></span> <span class="hidden-xs-down">@lang('Opinion /
                        Info')</span>
                </a>
            </li>
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
                @include('MedicalServices.fact_case')
            </div>

            <div class="tab-pane p-20" id="current_case" role="tabpanel">
                @include('MedicalServices.current_case')
            </div>

            <div class="tab-pane p-20" id="benefit_case" role="tabpanel">
                @include('MedicalServices.benefit_case')
            </div>

            {{--  
            <div class="tab-pane p-20" id="medical_fact" role="tabpanel">
                @include('MedicalServices.case_fact')
            </div>
            
            <div class="tab-pane p-20" id="medical_decision" role="tabpanel">
                @include('MedicalServices.decision')
            </div>
--}}
            <div class="tab-pane p-20" id="supporting_document" role="tabpanel">
                @include('MedicalServices.document')
            </div>

            <div class="tab-pane p-20" id="medical_view" role="tabpanel">
                @include('MedicalServices.medical_opinion')
            </div>


            {{--
            
             <div class="tab-pane p-20" id="interest_claim_details" role="tabpanel">
                                @include('ro.interest_claim_details')
                            </div>

                            <div class="tab-pane p-20" id="documents" role="tabpanel">
                                @include('ro.documents')
                            </div>--}}


            {{-- <div class="tab-pane p-20" id="appointment" role="tabpanel">
                                @include('ro.set_appointment')
                            </div>--}}
        </div>
    </div>
</div>
@endsection

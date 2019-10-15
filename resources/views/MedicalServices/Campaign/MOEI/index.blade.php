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
                <h4 class="card-title">@lang('CAMPAIGN')</h4>
            </div>
            {{-- Button Modal --}}
            {{-- <div class="col-md-6 align-self-center text-right" >
                            <button type="button" class="btn waves-effect waves-light btn-info" data-toggle="modal" data-target="#main_tab" data-whatever="@getbootstrap">@lang('Main')</button>
                            {{-- <button type="button" class="btn waves-effect waves-light btn-info" data-toggle="modal" data-target="#set_appointment_campaign" data-whatever="@getbootstrap">@lang('Set Appointment')</button>
                            <button type="button" class="btn waves-effect waves-light btn-info" data-toggle="modal" data-target="#prepare_doc" data-whatever="@getbootstrap">@lang('Prepare Report')</button>
                            <button type="button" class="btn waves-effect waves-light btn-info" data-toggle="modal" data-target="#support_doc_campaign" data-whatever="@getbootstrap">@lang('Supporting Document')</button>
                        </div> --}}
            {{-- modal --}}
            {{-- @include('medical_board.ro.request_info') --}}
            {{-- @include('ro.set_appointment_modal') --}}
        </div>
        <!-- Nav tabs -->
        <ul class="nav customtab" role="tablist">
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#create_campaign" role="tab">
                    <span class="hidden-sm-up"><i class="ti-user"></i></span> <span
                        class="hidden-xs-down">@lang('Create Campaign')</span>
                </a>
            </li>
             <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#campaign_notes" role="tab">
                    <span class="hidden-sm-up"><i class="ti-user"></i></span> <span
                        class="hidden-xs-down">@lang('Campaign Notes')</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#prepare_report" role="tab">
                    <span class="hidden-sm-up"><i class="ti-user"></i></span> <span
                        class="hidden-xs-down">@lang('Prepare Report')</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#support_doc_campaign" role="tab">
                    <span class="hidden-sm-up"><i class="ti-user"></i></span> <span
                        class="hidden-xs-down">@lang('Supporting Document')</span>
                </a>
            </li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content tabcontent-border">

            <div class="tab-pane p-20 active" id="create_campaign" role="tabpanel">
                @include('MedicalServices.Campaign.MOEI.create_campaign')

            </div>
             <div class="tab-pane p-20" id="campaign_notes" role="tabpanel">
                @include('MedicalServices.Campaign.MOEI.campaign_notes') 

            </div>
            <div class="tab-pane p-20" id="prepare_report" role="tabpanel">
                @include('MedicalServices.Campaign.MOEI.prepare_report') 

            </div> 
            <div class="tab-pane p-20" id="support_doc_campaign" role="tabpanel">
            @include('MedicalServices.Campaign.MOEI.support_doc') 

            </div>
            
        </div>
    </div>
</div>

@endsection

@extends('layouts.app')

@section('maintitle', 'Tab Screen')

@section('desc', 'Form')

@section('head')
<link href="{{ asset("bower_components/footable/css/footable.standalone.min.css")}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
            <div class="card-body">
                <h4 class="card-title">@lang('index.attr.death_notice')</h4>

                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
              
                    <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#insured_person" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">@lang('index.attr.insured_details')</span></a> </li>
                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#employer_details" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">@lang('index.attr.employer_details')</span></a> </li>
                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#wages" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span  class="hidden-xs-down">@lang('index.attr.wages_details')</span></a> </li>
                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#death_details" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span  class="hidden-xs-down">@lang('index.attr.death_details')</span></a> </li>
                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#accident_details" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span  class="hidden-xs-down">@lang('index.attr.accident_details')</span></a> </li>
                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#medical" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">@lang('index.attr.medical_details')</span></a> </li>
                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#uploadDocument" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">@lang('index.attr.upload_documents')</span></a> </li>
                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#prefered" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('index.attr.preferred_socso')</span></a> </li>
                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#certificate" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">@lang('index.attr.certificate') </span></a> </li>
                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#dependantProfiles" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">@lang('index.attr.dependant_profiles') </span></a> </li>
                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#bankInformation" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">@lang('index.attr.bank_information') </span></a> </li>
                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#remarks" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">@lang('index.attr.remarks')</span></a> </li>
                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#confirmation" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">@lang('index.attr.confirmation')</span></a> </li>
                  
                </ul>

                <div class="tab-content tabcontent-border">

                    <!-- insured details tab -->
                    @include('noticedeath.insuredPersonDetails')

                    <!-- accident details tab -->
                    @include('noticedeath.employer')

                     <!-- wages tab -->
                     @include('noticedeath.wages')

                     <!-- accident details tab -->
                    @include('noticedeath.deathdetail')

                    <!-- accident details tab -->
                    @include('noticedeath.accidentdetails')

                    <!-- medical tab -->
                    @include('noticedeath.medical')

                    <!-- upload document -->
                    @include('noticedeath.uploadDocument')

                     <!-- prefered tab -->
                    @include('noticedeath.prefered')

                      <!-- certificate tab -->
                    @include('noticedeath.certificate')

                    <!-- dependant profiles -->
                    @include('noticedeath.dependantProfiles.index')

                    <!-- bank information -->
                    @include('noticedeath.bankInformation')
                    
                    <!-- remarks -->
                    @include('noticedeath.remarks')

                    <!-- confirmation tab -->
                    @include('noticedeath.confirmation.index')
                   
                </div>
            </div>
    </div>
</div>

<!-- row -->
@endsection

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
                    <h4 class="card-title">@lang('index.attr.invalidity_notice')</h4>

                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">

                    <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#insureddetails" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('index.attr.insured_details')</span></a> </li>
                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#insuredwages" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('index.attr.wages_details')</span></a> </li>
                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#upload" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('index.attr.upload_documents')</span></a> </li>
                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#pensiondetails" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('index.attr.pension_details')</span></a> </li>
                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#preferredsocso" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('index.attr.preferred_socso')</span></a> </li>
                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#bankinformation" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('index.attr.bank_information')</span></a> </li>
                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#permanentRepresentative" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('index.attr.permanent_representative') </span></a> </li>
                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#remarks" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('index.attr.remarks') </span></a> </li>
                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#confirmationinsured" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('index.attr.confirmation')</span></a> </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content tabcontent-border">

                    <div class="tab-pane active" id="insureddetails" role="tabpanel">
                        @include('noticeinvalidity.ob_form')
                    </div>

                    <div class="tab-pane p-20" id="insuredwages" role="tabpanel">
                        @include('noticeinvalidity.wagesDetails')
                    </div>

                    <div class="tab-pane p-20" id="upload" role="tabpanel">
                        @include('noticeOd.uploadDocument')
                    </div>  

                    <div class="tab-pane p-20" id="pensiondetails" role="tabpanel">
                        @include('noticeinvalidity.pensionDetails')
                    </div>
                    
                    <div class="tab-pane p-20" id="preferredsocso" role="tabpanel">
                        @include('noticeinvalidity.preferredsocso')
                    </div>

                    <div class="tab-pane p-20" id="bankinformation" role="tabpanel">
                        @include('noticeinvalidity.bankInformation')
                    </div>

                    <div class="tab-pane p-20" id="permanentRepresentative" role="tabpanel">
                        @include('noticeOd.permanentRepresentative')
                    </div>  

                    <div class="tab-pane p-20" id="remarks" role="tabpanel">
                        @include('noticeOd.remarks')
                    </div>

                    <div class="tab-pane p-20" id="confirmationinsured" role="tabpanel">
                        @include('noticeinvalidity.confirmation.index')
                    </div>

                    
                </div>
            </div>
        </div>
    </div>



<!-- row -->
@endsection
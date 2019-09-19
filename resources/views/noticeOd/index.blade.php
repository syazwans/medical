@extends('layouts.app')

@section('content')
<div class="col-md-12">
    <div class="card-body p-b-0">
        <h4 class="card-title">@lang('index.attr.od_notice')</h4>

        <!-- Nav tabs -->
        <ul class="nav  customtab" role="tablist" id="tabMenu">
            <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#obform" role="tab"><span
                        class="hidden-sm-up"><i class="ti-home"></i></span> <span
                        class="hidden-xs-down">@lang('index.attr.insured_details')</span></a> </li>
            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#employer" role="tab"><span
                        class="hidden-sm-up"><i class="ti-user"></i></span> <span
                        class="hidden-xs-down">@lang('index.attr.employer_details')</span></a> </li>
            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#odempinfo" role="tab"><span
                        class="hidden-sm-up"><i class="ti-email"></i></span> <span
                        class="hidden-xs-down">@lang('index.attr.employer_history')</span></a> </li>
            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#odinfo" role="tab"><span
                        class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">OD
                        Information</span></a> </li>
            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#mcdetails" role="tab"><span
                        class="hidden-sm-up"><i class="ti-files"></i></span> <span
                        class="hidden-xs-down">@lang('index.attr.medical_details')</span></a> </li>
            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#wages" role="tab"><span
                        class="hidden-sm-up"><i class="ti-email"></i></span> <span
                        class="hidden-xs-down">@lang('index.attr.wages_details')</span></a> </li>
            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#bankinfo" role="tab"><span
                        class="hidden-sm-up"><i class="ti-email"></i></span> <span
                        class="hidden-xs-down">@lang('index.attr.bank_information')</span></a> </li>
            {{-- <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#certificate" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('index.attr.certificate') </span></a> </li> --}}
            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#uploaddoc" role="tab"><span
                        class="hidden-sm-up"><i class="ti-email"></i></span> <span
                        class="hidden-xs-down">@lang('index.attr.upload_documents') </span></a> </li>
            {{-- <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#permanentrepresentative" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('index.attr.permanent_representative') </span></a> </li> --}}
            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#confirmation" role="tab"><span
                        class="hidden-sm-up"><i class="ti-email"></i></span> <span
                        class="hidden-xs-down">@lang('index.attr.confirmation') </span></a> </li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane p-20 active" id="obform" role="tabpanel">
                @include('noticeOd.obForm')
            </div>
            <div class="tab-pane  p-20" id="employer" role="tabpanel">
                @include('noticeOd.employerDetails')
            </div>
            <div class="tab-pane p-20" id="odempinfo" role="tabpanel">
                @include('noticeOd.odEmphistory')
            </div>
            <div class="tab-pane p-20" id="odinfo" role="tabpanel">
                @include('noticeOd.odInformation')
            </div>
            <div class="tab-pane p-20" id="mcdetails" role="tabpanel">
                @include('noticeOd.medicalCertificate')
            </div>
            <div class="tab-pane p-20" id="wages" role="tabpanel">
                @include('noticeOd.wagesDetails')
            </div>
            <div class="tab-pane p-20" id="bankinfo" role="tabpanel">
                @include('noticeOd.bankInformation')
            </div>
            {{-- <div class="tab-pane p-20" id="certificate" role="tabpanel">
                @include('noticeOd.certificateEmployer')
            </div> --}}
            <div class="tab-pane p-20" id="uploaddoc" role="tabpanel">
                @include('noticeOd.uploadDocument')
            </div>
            {{-- <div class="tab-pane p-20" id="permanentrepresentative" role="tabpanel">
                @include('noticeOd.permanentRepresentative')
            </div>	 --}}
            <div class="tab-pane p-20" id="confirmation" role="tabpanel">
                @include('noticeOd.confirmation')
            </div>
        </div>
    </div>
</div>
<!-- Row -->

<script>
    //redirect to specific tab
    $(document).ready(function () {
        $('#tabMenu a[href="#{{ old('
            tab ') }}"]').tab('show')
    });

</script>
@endsection

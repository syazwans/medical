@extends('layouts.app')

@section('content')
<div class="col-md-12">
		<div class="card-body p-b-0">
			<h4 class="card-title">@lang('index.attr.od_notice')</h4>
			
			<!-- Nav tabs -->
			<ul class="nav nav-tabs customtab2" role="tablist">
				<li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#insuredperson" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">@lang('index.attr.insured_details')</span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#employer" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">@lang('index.attr.employer_details')</span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#wages" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('index.attr.wages_details')</span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#upload" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('index.attr.upload_documents')</span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#notice" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('index.attr.od_details')</span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#office" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('index.attr.preferred_socso')</span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#certificate" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('index.attr.certificate') </span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#bankInfo" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('index.attr.bank_information') </span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#permanentRepresentative" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('index.attr.permanent_representative') </span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#remarks" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('index.attr.remarks') </span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#confirmation" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('index.attr.confirmation') </span></a> </li>
			</ul>
			<!-- Tab panes -->
			<div class="tab-content">
				<div class="tab-pane p-20 active" id="insuredperson" role="tabpanel">
					@include('noticeOd.insuredPersonDetails')
				</div>
				<div class="tab-pane  p-20" id="employer" role="tabpanel">
					@include('noticeOd.employerDetails')
				</div>
				<div class="tab-pane p-20" id="wages" role="tabpanel">
					@include('noticeOd.wagesDetails')
				</div>	
				<div class="tab-pane p-20" id="upload" role="tabpanel">
					@include('noticeOd.uploadDocument')
				</div>
				<div class="tab-pane p-20" id="notice" role="tabpanel">
					@include('noticeOd.odDetails')
				</div>	
				<div class="tab-pane p-20" id="office" role="tabpanel">
					@include('noticeOd.socsoOffice')
				</div>	
				<div class="tab-pane p-20" id="certificate" role="tabpanel">
					@include('noticeOd.certificateEmployer')
				</div>
				<div class="tab-pane p-20" id="bankInfo" role="tabpanel">
					@include('noticeOd.bankInfo')
				</div>	
				<div class="tab-pane p-20" id="permanentRepresentative" role="tabpanel">
					@include('noticeOd.permanentRepresentative')
				</div>	
				<div class="tab-pane p-20" id="remarks" role="tabpanel">
					@include('noticeOd.remarks')
				</div>
				<div class="tab-pane p-20" id="confirmation" role="tabpanel">
					@include('noticeOd.confirmation.index')
				</div>							
			</div>
		</div>
</div>
<!-- Row -->
</div>
@endsection
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
            <h4 class="card-title">@lang('index.attr.accident_notice')</h4>
		
		<!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist" id="tabMenu">
                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#obform" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">@lang('index.attr.insured_details')</span></a> </li>

                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#employer" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">@lang('index.attr.employer_details')</span></a> </li>

                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#wages" role="tab"><span class="hidden-sm-up"><i class="ti-files"></i></span> <span class="hidden-xs-down">@lang('index.attr.wages_details')</span></a> </li>

                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#accddetails" role="tab"><span class="hidden-sm-up"><i class="ti-pencil-alt"></i></span> <span class="hidden-xs-down">@lang('index.attr.accident_details')</span></a> </li>

                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#mcdetails" role="tab"><span class="hidden-sm-up"><i class="ti-files"></i></span> <span class="hidden-xs-down">@lang('index.attr.medical_details')</span></a> </li>

                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#bankinfo" role="tab"><span class="hidden-sm-up"><i class="ti-check-box"></i></span> <span class="hidden-xs-down">@lang('index.attr.bank_information') </span></a> </li>
                
                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#uploaddoc" role="tab"><span class="hidden-sm-up"><i class="ti-files"></i></span> <span class="hidden-xs-down">@lang('index.attr.upload_documents')</span></a> </li>

                <li class="nav-item"> <a class="nav-link"  id="navbar_confirmation" data-toggle="tab" href="#confirmation" role="tab"><span class="hidden-sm-up"><i class="ti-check-box"></i></span> <span class="hidden-xs-down">@lang('index.attr.confirmation') </span></a> </li>

                {{-- <li class="nav-item"> <a class="nav-link" id="navbar_preview" data-toggle="tab" href="#form10" role="tab"><span class="hidden-sm-up"><i class="ti-check-box"></i></span> <span class="hidden-xs-down">PREVIEW</span></a> </li> --}}

                <!-- <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#form11" role="tab"><span class="hidden-sm-up"><i class="ti-check-box"></i></span> <span class="hidden-xs-down">@lang('index.attr.remarks')</span></a> </li> -->

                <!-- <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#form8" role="tab"><span class="hidden-sm-up"><i class=" ti-check-box"></i></span> <span class="hidden-xs-down">@lang('index.attr.certificate') </span></a> </li> -->

            </ul>
				<!-- Tab panes -->
            <div class="tab-content tabcontent-border">

                <div class="tab-pane p-20 active" id="obform" role="tabpanel">
                        @include('noticeAccident.obForm')
                </div>

                <div class="tab-pane p-20" id="employer" role="tabpanel">
                        @include('noticeAccident.employerDetails')
                </div>
                <div class="tab-pane p-20" id="wages" role="tabpanel">
                        @include('noticeAccident.wagesDetails')
                </div>
                <div class="tab-pane p-20" id="accddetails" role="tabpanel">
                        @include('noticeAccident.accidentDetails')
                </div> 
                <div class="tab-pane p-20" id="mcdetails" role="tabpanel">
                        @include('noticeAccident.medicalCertificate')
                </div>

                <div class="tab-pane p-20" id="bankinfo" role="tabpanel">
                        @include('noticeAccident.bankInformation')
                </div>

                <div class="tab-pane p-20" id="uploaddoc" role="tabpanel">
                        @include('noticeAccident.uploadDocument')
                </div>

                <div class="tab-pane p-20" id="confirmation" role="tabpanel">
                        @include('noticeAccident.confirmation')
                </div>

                {{-- <div class="tab-pane p-20" id="form10" role="tabpanel">
                        @include('noticeAccident.preview')
                </div> --}}
            </div>
        </div>
    </div>
</div>

<!-- row -->
<script>
 //redirect to specific tab
 $(document).ready(function () {
 $('#tabMenu a[href="#{{ old('tab') }}"]').tab('show')
 });
</script>

<script>
                function placeacc(){
                        
                         var accdwhen = $("#placeaccd").val();
                         //alert(accdwhen);
                         $('#descen').find('option').not(':first').remove();
                 if (accdwhen){  
        
                   $.ajax({ 
                     url: '/reftable/'+accdwhen,
                     type: 'GET',
                     dataType: 'json',
                    success: function(data){
          //            console.log(data);
        
                     var len = 0;
                     if(data != null){
                        len = data.length;
                    }   
        
                    if(len > 0){
                        $("#accwhen").empty();
                        for(var i=0; i<len; i++){
        
                            var id = data[i].refcode;
                            var name = data[i].descen; 
                            
                            var option ="<option value='"+id+"'>"+name+"</option>";
        
                            $("#accwhen").append(option);
                        }
                    }   
                            
                                }
        
                           }); 
                        }
                }
        </script>

@endsection


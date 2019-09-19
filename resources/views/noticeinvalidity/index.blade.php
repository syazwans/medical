@extends('layouts.app')

@section('maintitle', 'Tab Screen')

@section('desc', 'Form')



@section('content')
<div class="p-20">
    <form action="#">
        <h4 class="card-title">@lang('index.attr.invalidity_notice')</h4>


        <!-- Nav tabs -->
        <ul class="nav customtab" role="tablist" >

            <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#obform" role="tab">
                    <span class="hidden-sm-up"><i class="ti-email"></i></span>
                    <span class="hidden-xs-down">@lang('index.attr.insured_details')</span></a> </li>
            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#wages" role="tab">
                    <span class="hidden-sm-up"><i class="ti-email"></i></span>
                    <span class="hidden-xs-down">@lang('index.attr.wages_details')</span></a> </li>
            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#pensiondetails" role="tab"><span
                        class="hidden-sm-up"><i class="ti-email"></i></span> <span
                        class="hidden-xs-down">@lang('index.attr.pension_details')</span></a> </li>
            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#empinfo" role="tab"><span
                        class="hidden-sm-up"><i class="ti-email"></i></span> <span
                        class="hidden-xs-down">@lang('index.attr.employer_history')</span></a> </li>
            {{-- <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#preferredsocso" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('index.attr.preferred_socso')</span></a> </li> --}}
            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#bankinfo" role="tab"><span
                        class="hidden-sm-up"><i class="ti-email"></i></span> <span
                        class="hidden-xs-down">@lang('index.attr.bank_information')</span></a> </li>
            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#uploaddoc" role="tab"><span
                        class="hidden-sm-up"><i class="ti-files"></i></span> <span
                        class="hidden-xs-down">@lang('index.attr.upload_documents')</span></a> </li>
            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#confirmation" role="tab"><span
                        class="hidden-sm-up"><i class="ti-email"></i></span> <span
                        class="hidden-xs-down">@lang('index.attr.confirmation')</span></a> </li>
            {{-- <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#preview" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Preview</span></a> </li> --}}
        </ul>

        <!-- Tab panes -->
        <div class="tab-content tabcontent-border">

            <div class="tab-pane active" id="obform" role="tabpanel">
                @include('noticeinvalidity.ob_form')
            </div>

            <div class="tab-pane p-20" id="wages" role="tabpanel">
                @include('noticeinvalidity.wagesDetails')

            </div>

            <div class="tab-pane p-20" id="pensiondetails" role="tabpanel">
                @include('noticeinvalidity.pensionDetails')
            </div>

            <div class="tab-pane p-20" id="empinfo" role="tabpanel">
                @include('noticeinvalidity.emphistory')
            </div>
            {{-- <div class="tab-pane p-20" id="preferredsocso" role="tabpanel">
                        @include('noticeinvalidity.preferredsocso')
                    </div> --}}

            <div class="tab-pane p-20" id="bankinfo" role="tabpanel">
                @include('noticeinvalidity.bankInformation')
            </div>

            <div class="tab-pane p-20" id="uploaddoc" role="tabpanel">
                @include('noticeinvalidity.uploadDocument')
            </div>

            <div class="tab-pane p-20" id="confirmation" role="tabpanel">
                @include('noticeinvalidity.confirmation')
            </div>

            {{--<div class="tab-pane p-20" id="preview" role="tabpanel">
                            @include('noticeinvalidity.preview')
                        </div> --}}


        </div>
</div>


<script>
    //redirect to specific tab
    $(document).ready(function () {
        $('#tabMenu a[href="#{{ old('
            tab ') }}"]').tab('show')
    });

</script>

<!-- row -->
<script>
    function statechange() {

        var statecode = $("#state1").val();
        // alert(statecode);
        $('#brname').find('option').not(':first').remove();
        if (statecode) {

            $.ajax({
                url: '/branch/' + statecode,
                type: 'GET',
                dataType: 'json',
                success: function (data) {
                    //            console.log(data);

                    var len = 0;
                    if (data != null) {
                        len = data.length;
                    }

                    if (len > 0) {
                        for (var i = 0; i < len; i++) {

                            var id = data[i].brcode;
                            var name = data[i].brname;

                            var option = "<option value='" + id + "'>" + name + "</option>";

                            $("#brname").append(option);
                        }
                    }

                }

            });
        }
    }

</script>
<!-- row -->
@endsection

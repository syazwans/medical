<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="#">
                    <div class="form-body">
                        <h4 class="card-title">@lang('medical_board/application_details.title')</h4>
                        <hr>
                        <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('medical_board/application_details.attr.mb_id_no')</label>
                                    <input type="text" class="form-control" value="@isset($applicationdetails->mbidno){{$applicationdetails->mbidno}} @endisset" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('medical_board/application_details.attr.sources')</label>
                                    <input type="text" class="form-control" value="{{$applicationdetails->source}}"readonly>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">@lang('medical_board/application_details.attr.type_of_claim')</label>
                                    <input type="text" class="form-control" value="{{$applicationdetails->typeofclaims}}" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('medical_board/application_details.attr.date_case_received')</label>
                                    <input type="text" class="form-control" value="{{$applicationdetails->date_assign}}" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('medical_board/application_details.attr.registered_by')</label>
                                    <input type="text" class="form-control" value="{{$applicationdetails->addby}}"readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('medical_board/application_details.attr.socso_office_code_receiver')</label>
                                    <input type="text" class="form-control" value="{{$applicationdetails->brreceiver}}"readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('medical_board/application_details.attr.socso_office_code_processing')</label>
                                    <input type="text" class="form-control" value="{{$applicationdetails->brprocess}}"readonly>
                                </div>
                            </div>
                            {{-- <div class="form-actions col-md-12 text-right">
                                <button type="submit" class="btn btn waves-effect waves-light btn-success"> <i class="fa fa-check"></i>
                                @lang('medical_board/application_details.save')</button>
                            </div> --}}
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
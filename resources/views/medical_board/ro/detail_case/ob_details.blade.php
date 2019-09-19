<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="#">
                    <div class="form-body">
                        <h4 class="card-title">@lang('medical_board/ob_details.title')</h4>
                        <hr>
                        <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('medical_board/ob_details.attr.ob_name')</label>
                                    <input type="text"  value="{{$obdetails->name}}" name="info_ob_name" class="form-control" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('medical_board/ob_details.attr.ic_no')</label>
                                    <input type="number" value="{{$obdetails->idno}}" name="info_ic_no" class="form-control" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('medical_board/ob_details.attr.age')</label>
                                    <input type="number" name="info_age" class="form-control" value='{{$calculateAge}}' readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('medical_board/ob_details.attr.gender')</label>
                                    <input type="text" value="{{$obdetails->gender}}" name="info_gender" class="form-control" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('medical_board/ob_details.attr.phone_number')</label>
                                    <input type="number" value="{{$obdetails->telno}}" name="info_phone_no" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('medical_board/ob_details.attr.mobile_number')</label>
                                    <input type="number" value="{{$obdetails->mobileno}}" name="info_mobile_no" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">@lang('medical_board/ob_details.attr.email')</label>
                                    <input type="email" value="{{$obdetails->email}}" name="info_email" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">@lang('medical_board/ob_details.attr.address')</label>
                                    <textarea class="form-control" rows="5" value="{{$obdetails->add1}}{{$obdetails->add2}}{{$obdetails->add3}}{{$obdetails->postcode}}" name="info_address" readonly></textarea>
                                </div>
                            </div>
                            <div class="form-actions col-md-12 text-right">
                                <button type="submit" class="btn btn waves-effect waves-light btn-success"> <i class="fa fa-check"></i>
                                @lang('medical_board/ob_details.save')</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
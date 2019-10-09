<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="#">
                    <div class="form-body" id="factCase">
                        <h4 class="card-title">@lang('Case Fact Information')</h4>
                        <hr>
                        <div id="accordion1" role="tablist" aria-multiselectable="true">
                            <div class="card">
                                <div class="card-header" role="tab" id="headingOne1">
                                    <h5 class="mb-0">
                                        <a class="link" data-toggle="collapse" data-parent="#accordion1"
                                            href="#collapseOne1" aria-expanded="true" aria-controls="collapseOne"><i
                                                class="fa fa-plus"></i>
                                            Insured Person's Details
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseOne1" class="collapse show" role="tabpanel"
                                    aria-labelledby="headingOne1">
                                    <div class="card-body">
                                        <div class="form-body">
                                            <div class="row p-t-20">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">@lang('ID No. :')</label>
                                                        <input type="text" value="" class="form-control" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label">@lang('Insured Person Name:
                                                            :')</label>
                                                        <input type="text" value="" class="form-control" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label">@lang('Address :')</label>
                                                        <input type="text" value="" class="form-control" readonly>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" value="" class="form-control" readonly>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" value="" class="form-control" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">@lang('Contact Number: :')</label>
                                                        <input type="text" value="" class="form-control" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">@lang('Email :')</label>
                                                        <input type="text" value="" class="form-control" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card ">
                                <div class="card-header" role="tab" id="headingTwo2">
                                    <h5 class="mb-0">
                                        <a class="collapsed link" data-toggle="collapse" data-parent="#accordion1"
                                            href="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2"><i
                                                class="fa fa-plus"></i>
                                            Doctor Details
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseTwo2" class="collapse " role="tabpanel" aria-labelledby="headingTwo2">
                                    <div class="card-body">
                                        <div class="form-body">
                                            <div class="row p-t-20">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label">@lang('Doctor Name :')</label>
                                                        <input type="text" value="" class="form-control" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label">@lang('Address :')</label>
                                                        <input type="text" value="" class="form-control" readonly>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" value="" class="form-control" readonly>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" value="" class="form-control" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">@lang('Contact Number: :')</label>
                                                        <input type="text" value="" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">@lang('Email :')</label>
                                                        <input type="text" value="" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row p-t-20">
                                                <div class="col-md-12">
                                                    <div class="card-header" role="tab" id="headingTwo3">
                                                        <h5 class="mb-0">
                                                            <a class="collapsed link" data-toggle="collapse"
                                                                data-parent="#accordion1" href="#collapseTwo3"
                                                                aria-expanded="false" aria-controls="collapseTwo3"><i
                                                                    class="fa fa-plus"></i>
                                                                Invoice
                                                            </a>
                                                        </h5>
                                                    </div>
                                                    <div id="collapseTwo3" class="collapse" role="tabpanel"
                                                        aria-labelledby="headingTwo3">
                                                        <div class="card-body">
                                                            <div class="form-body">
                                                                <div class="row p-t-20">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="control-label">@lang('Ref. No.
                                                                                :')</label>
                                                                            <input type="text" value=""
                                                                                class="form-control" readonly>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="control-label">@lang('Invoice
                                                                                Date :')</label>
                                                                            <input type="date" value=""
                                                                                class="form-control" readonly>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="control-label">@lang('Amount
                                                                                :')</label>
                                                                            <input type="date" value=""
                                                                                class="form-control" readonly>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-5">
                                                                        <div class="form-group">
                                                                            <label class="control-label">Upload</label>
                                                                            <div class="input-group">
                                                                                <div class="custom-file">
                                                                                    <input type="file"
                                                                                        class="custom-file-input "
                                                                                        id="inputGroupFile01">
                                                                                    <label class="custom-file-label"
                                                                                        for="inputGroupFile01">Choose
                                                                                        file</label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" role="tab" id="headingThree3">
                                    <h5 class="mb-0">
                                        <a class="link" data-toggle="collapse" data-parent="#accordion1"
                                            href="#collapseThree3" aria-expanded="true"
                                            aria-controls="collapseThree3"><i class="fa fa-plus"></i>
                                            Medical Clarification Report
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseThree3" class="collapse" role="tabpanel"
                                    aria-labelledby="headingThree3">
                                    <div class="card-body">
                                        <div class="form-body">
                                            <div class="row p-t-20">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label">@lang('Document
                                                            :')</label>
                                                        <div class="input-group ">
                                                            <input type="text"
                                                                value="@isset($cCase->schemerefno) {{$cCase->schemerefno}} @endisset"
                                                                class="form-control" readonly>
                                                            <div class="input-group-append">
                                                                <a id="view" data-target="#" href="#tt1"
                                                                    aria-expanded="true"><i class="fas fa-file-alt"
                                                                        title="View Document"
                                                                        data-toggle="tooltip"></i></a></span>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row p-t-20">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Action :</label>
                                                        <select class="form-control" name="moreinfo" id="moreinfo">
                                                            <option value="PS" hidden selected readonly>Please Select
                                                            </option>
                                                            <option value="Y">Approve</option>
                                                            <option value="N">Reject</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label">@lang('Remark')</label>
                                                        <textarea type="text" rows="3" class="form-control"></textarea>
                                                    </div>
                                                </div>
                                            </div>




                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

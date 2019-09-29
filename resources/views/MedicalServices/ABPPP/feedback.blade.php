<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="#">
                    <div class="form-body">
                        <h4 class="card-title">@lang('Feedback')</h4>
                        <div class="modal-body">
                            <div class="card-body">
                                <div class="row p-t-20">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label class="control-label">@lang('From :')</label>
                                            <input type="text"
                                                value=""
                                                class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">@lang('Date :')</label>
                                            <input type="date"
                                                value=""
                                                class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">@lang('Query :')</label>
                                            <input type="text"
                                                value=""
                                                class="form-control" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="accordion1" role="tablist" aria-multiselectable="true">
                                <div class="card">
                                    <div class="card-header" role="tab" id="headingOne">
                                        <h5 class="mb-0">
                                            <a class="link" data-toggle="collapse" data-parent="#accordion1"
                                                href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><i
                                                    class="fa fa-plus"></i>
                                                Insured Person
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseOne" class="collapse " role="tabpanel"
                                        aria-labelledby="headingOne">
                                        <div class="card-body">
                                            <div class="form-body">
                                                <div class="row p-t-20">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="control-label">@lang('Name :')</label>
                                                            <input type="text"
                                                                value=""
                                                                class="form-control" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="control-label">@lang('Address :')</label>
                                                            <input type="text"
                                                                value=""
                                                                class="form-control" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="form-group">
                                                            <label class="control-label">@lang('Telephone No. :')</label>
                                                            <input type="text"
                                                                value=""
                                                                class="form-control" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="form-group">
                                                            <label class="control-label">@lang('Email :')</label>
                                                            <input type="text"
                                                                value=""
                                                                class="form-control" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 offset-6">
                                                        <a class=" btn btn waves-effect waves-light btn-success a1"
                                                            data-toggle="collapse" data-target="#collapseOne,#collapseTwo"
                                                            aria-expanded="true" aria-controls="collapseOne1">
                                                            Next
                                                        </a>
                                                    </div>
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card ">
                                <div class="card-header" role="tab" id="headingTwo">
                                    <h5 class="mb-0">
                                        <a class="collapsed link" data-toggle="collapse" data-parent="#accordion1"
                                            href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"><i
                                                class="fa fa-plus"></i>
                                            Employer
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="card-body">
                                        <div class="form-body">
                                            <div class="row p-t-20">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label">@lang('Name :')</label>
                                                        <input type="text"
                                                            value=""
                                                            class="form-control" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label">@lang('Address :')</label>
                                                        <input type="text"
                                                            value=""
                                                            class="form-control" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-5">
                                                    <div class="form-group">
                                                        <label class="control-label">@lang('Telephone No. :')</label>
                                                        <input type="text"
                                                            value=""
                                                            class="form-control" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-5">
                                                    <div class="form-group">
                                                        <label class="control-label">@lang('Email :')</label>
                                                        <input type="text"
                                                            value=""
                                                            class="form-control" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label">@lang('Feedback :')</label>
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
                </div>
            </form>
        </div>
    </div>
</div>
    
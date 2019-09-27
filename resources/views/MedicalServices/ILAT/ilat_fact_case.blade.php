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
                                            Case Information
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
                                                        <label class="control-label">@lang('MO Ref. No. :')</label>
                                                        <input type="text"
                                                            value="@isset($FactC->msrefno) {{$FactC->msrefno}} @endisset"
                                                            class="form-control" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">@lang('Received Date :')</label>
                                                        <input type="text"
                                                            value="@isset($FactC->date) {{substr($FactC->date,6,2)}}-{{substr($FactC->date,4,2)}}-{{substr($FactC->date,0,4)}}@endisset"
                                                            class="form-control" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">@lang('SOCSO Office :')</label>
                                                        <input type="text"
                                                            value="@isset($FactC->branchname) {{$FactC->branchname}} @endisset"
                                                            class="form-control" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">@lang('Requestor Name :')</label>
                                                        <input type="text"
                                                            value="@isset($FactC->reqoperid) {{$FactC->reqoperid}} @endisset"
                                                            class="form-control" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 offset-6">
                                                    <a class=" btn btn waves-effect waves-light btn-success a1"
                                                        data-toggle="collapse" data-target="#collapseOne1,#collapseTwo2"
                                                        aria-expanded="true" aria-controls="collapseOne1">
                                                        Next
                                                    </a>
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
                                            Case Fact Details
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseTwo2" class="collapse " role="tabpanel" aria-labelledby="headingTwo2">
                                    <div class="card-body">
                                        <div class="form-body">
                                            <div class="row p-t-20">
                                                <div class="col-md-12">
                                                    <div class="card-header" role="tab" id="headingTwo3">
                                                        <h5 class="mb-0">
                                                            <a class="collapsed link" data-toggle="collapse"
                                                                data-parent="#accordion1" href="#collapseTwo3"
                                                                aria-expanded="false" aria-controls="collapseTwo3"><i
                                                                    class="fa fa-plus"></i>
                                                                Insured Person
                                                            </a>
                                                        </h5>
                                                    </div>
                                                    <div id="collapseTwo3" class="collapse show" role="tabpanel"
                                                        aria-labelledby="headingTwo3">
                                                        <div class="card-body">
                                                            <div class="form-body">
                                                                <div class="row p-t-20">
                                                                    <div class="col-md-12">
                                                                        @include('MedicalServices.noticeAccident.FactCase.insuredPerson')

                                                                        <div class="col-md-6 offset-6">
                                                                            <a class=" btn btn waves-effect waves-light btn-success a1"
                                                                                data-toggle="collapse"
                                                                                data-target="#collapseTwo3,#collapseTwo4"
                                                                                aria-expanded="true"
                                                                                aria-controls="collapseTwo3">
                                                                                Next
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="card-header" role="tab" id="headingTwo4">
                                                        <h5 class="mb-0">
                                                            <a class="collapsed link" data-toggle="collapse"
                                                                data-parent="#accordion1" href="#collapseTwo4"
                                                                aria-expanded="false" aria-controls="collapseTwo4"><i
                                                                    class="fa fa-plus"></i>
                                                                Employer Details
                                                            </a>
                                                        </h5>
                                                    </div>
                                                    <div id="collapseTwo4" class="collapse" role="tabpanel"
                                                        aria-labelledby="headingTwo4">
                                                        <div class="card-body">
                                                            <div class="form-body">
                                                                <div class="row p-t-20">
                                                                    <div class="col-md-12">
                                                                        @include('MedicalServices.noticeAccident.FactCase.employerDetails')
                                                                        <div class="col-md-6 offset-6">
                                                                            <a class=" btn btn waves-effect waves-light btn-success a1"
                                                                                data-toggle="collapse"
                                                                                data-target="#collapseTwo4,#collapseTwo5"
                                                                                aria-expanded="true"
                                                                                aria-controls="collapseTwo4">
                                                                                Next
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="card-header" role="tab" id="headingTwo4">
                                                        <h5 class="mb-0">
                                                            <a class="collapsed link" data-toggle="collapse"
                                                                data-parent="#accordion1" href="#collapseTwo5"
                                                                aria-expanded="false" aria-controls="collapseTwo5"><i
                                                                    class="fa fa-plus"></i>
                                                                Morbidity Details
                                                            </a>
                                                        </h5>
                                                    </div>
                                                    <div id="collapseTwo5" class="collapse" role="tabpanel"
                                                        aria-labelledby="headingTwo5">
                                                        <div class="card-body">
                                                            <div class="card-body">
                                                                <div class="form-body">
                                                                    <div class="row p-t-20">
                                                                        <div class="col-md-12">
                                                                            <div class="form-group">
                                                                                <label class="control-label">@lang('Morbidity Details :')</label>
                                                                                <input type="text"
                                                                                    value=""
                                                                                    class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div class="form-group">
                                                                                <label class="control-label">@lang('Investigation Details :')</label>
                                                                                <input type="text"
                                                                                    value=""
                                                                                    class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div class="form-group">
                                                                                <label class="control-label">@lang('Conclusion :')</label>
                                                                                <input type="text"
                                                                                    value=""
                                                                                    class="form-control">
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

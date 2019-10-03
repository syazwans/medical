<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="#">
                    <div class="form-body">
                        <h4 class="card-title">@lang('Prepare Document')</h4>
                        <div class="modal-body">
                            <div id="accordion1" role="tablist" aria-multiselectable="true">
                                <div class="card">
                                    <div class="card-header" role="tab" id="headingOne">
                                        <h5 class="mb-0">
                                            <a class="link" data-toggle="collapse" data-parent="#accordion1"
                                                href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><i
                                                    class="fa fa-plus"></i>
                                                Generate Document
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseOne" class="collapse " role="tabpanel"
                                        aria-labelledby="headingOne">
                                        <div class="card-body">
                                            <div class="form-body">
                                                <div class="row p-t-20">
                                                        <div class="col-12">
                                                            <div class="table-responsive">
                                                                <table id="demo-foo-row-toggler" class="table table-bordered"
                                                                    data-toggle-column="first">
                                                                    <thead>
                                                                        <th>Document</th>
                                                                        <th>Generate</th>
                                                                    </thead>
                                                                    <tbody>
                                                                        <td>Medical Clarification Form</td>
                                                                        <td><div class="input-group ">
                                                                                <div class="input-group-append">
                                                                                    <a id="view" data-toggle="modal"
                                                                                            data-target="#clarification"
                                                                                            data-whatever="@getbootstrap" href="#tt1"
                                                                                            aria-expanded="true"><i class="fas fa-file-alt"
                                                                                                title="Generate
                                                                                            " data-toggle="tooltip"></i></a></span>
                                                                                    @include('MedicalServices.noticeAccident.clarification')
                                                                                </div></td>
                                                                    </tbody>
                                                                    <tbody>
                                                                        <td>Consent Letter</td>
                                                                        <td></td>
                                                                    </tbody>
                                                                </table>
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
                                                Upload Document
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="card-body">
                                        <div class="form-body">
                                            <div class="row p-t-20">
                                                <div class="col-12">
                                                    <div class="table-responsive">
                                                        <table id="demo-foo-row-toggler" class="table table-bordered"
                                                            data-toggle-column="first">
                                                            <thead>
                                                                <th>Document</th>
                                                                <th>Upload</th>
                                                                <th>Action</th>
                                                            </thead>
                                                            <tbody>
                                                                <td>Upload Consent Letter</td>
                                                                <td></td>
                                                                <td></td>
                                                            </tbody>
                                                        </table>
                                                        <div class="col-md-6 offset-6">
                                                            <a class="btn btn waves-effect waves-light btn-success a1" data-toggle="collapse"
                                                                data-target="#collapseTwo,#collapseThree" aria-expanded="true"
                                                                aria-controls="collapseTwo22">
                                                                Next
                                                            </a>
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
    
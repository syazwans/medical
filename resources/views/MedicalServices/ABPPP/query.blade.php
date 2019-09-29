<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="#">
                    <div class="form-body">
                        <h4 class="card-title">@lang('Query')</h4>
                        <div class="modal-body">
                            <div class="card-body">
                                <div class="row p-t-20">
                                    <div class="col-md-6 offset-6">
                                        <a class="btn-success link a1" id="btn_query" data-toggle="modal"
                                            data-whatever="@getbootstrap" aria-expanded="true">
                                            Add Row 
                                        </a>
                                    </div>
                                    <div class="col-12">
                                        <div class="table-responsive m-t-40">
                                            <table id="myTable_query" class="table table-bordered"
                                                data-toggle-column="first">
                                                <thead>
                                                    <tr>
                                                        <th>No.</th>
                                                        <th>Query To</th>
                                                        <th>Request For Supporting Document</th>
                                                        <th>Remarks</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr id="clari1">
                                                        <td style="display:none;"><input type="hidden" value="1"></td>
                                                        <td>1</td>
                                                        <td width="60">
                                                        <div class="dropdown">
                                                            <button class="btn btn-default dropdown-toggle middle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Please Select<span class="caret"></span></button>
                                                                <div class="dropdown-menu" style="width:300px;" aria-labelledby="dropdownMenu1">
                                                                    <a href="#" value="emp_ob">Employer/OB</a>
                                                                    <br>
                                                                    <a href="#" value="emp_ob">Scheme</a>
                                                                    <br>
                                                                    <a href="#" value="emp_ob">RTW</a>
                                                                    <br>
                                                                    <a href="#" value="emp_ob">Medical Investigation-Perkeso Doctor</a>
                                                                    <br>
                                                                    <a href="#" value="emp_ob">Medical Investigation-Special Report</a> 
                                                                    <br>
                                                                    <a href="#" data-toggle="modal" data-target="#medicalOpinionModal">Medical Investigation- Medical Clarification</a>
                                                                </div>
                                                        </div>
                                                            </td>
                                                        <td><div class="input-group-append">
                                                            <span class="input-group-text" style="background-color: #d8e8e9;"><a
                                                                    class="get-code" data-toggle="modal"
                                                                    data-target="#modal_document" data-id="1" data-whatever="@getbootstrap"
                                                                    href="#tt1" aria-expanded="true"><i class="fas fa-file-alt"
                                                                        title="Request Document
                                                                            " data-toggle="tooltip"></i></a></span>
                                                            @include('MedicalServices.noticeAccident.modal_document')
                                                        </div>
                                                        <p id="requestDoc1"></p></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                </tbody>
                                            </table>
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
                </form>
            </div>
        </div>
    </div>
</div>
    
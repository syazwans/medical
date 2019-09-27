<div class="row">
    <div class="col-lg-12">
        <div class="card" id="collapseone">
            <div class="card-body">
                <form action="#">
                    <div class="form-body">
                        <h4 class="card-title" id="committee">@lang('Refer to Committee Board')</h4>
                        <div id="accordion1" role="tablist" aria-multiselectable="true">
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-body">
                                        <div class="row p-t-20">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">@lang('Case No. :')</label>
                                                    <div class="input-group ">
                                                        <input type="text" value="" class="form-control" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row p-t-20">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <br>
                                                    <label class="control-label">@lang('Name :')</label>
                                                    <input type="text" value="" class="form-control" readonly>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">@lang('ID No. :')</label>
                                                    <input type="text" value="" class="form-control" readonly>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">@lang('Age :')</label>
                                                    <input type="text" value="" class="form-control" readonly>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">@lang('Gender :')</label>
                                                    <input type="text" value="" class="form-control" readonly>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label">@lang('Job :')</label>
                                                    <input type="text" value="" class="form-control" >
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label">@lang('Diagnosis :')</label>
                                                    <textarea type="text" rows="5" class="form-control"
                                                        ></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label class="control-label">@lang('Notice Date :')</label>
                                                    <input type="text" value="" class="form-control" >
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">@lang('Table 5, AKSP 1996 :')</label>
                                                    <select class="form-control" name="moreinfo" id="moreinfo">
                                                        <option value="" hidden selected readonly>Please Select</option>
                                                        <option value="">Yes</option>
                                                        <option value="">No</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                   
                            <div class="card ">
                                <div class="card-header" role="tab" id="headingtwo">
                                    <h5 class="mb-0">
                                        <a class="collapsed link" data-toggle="collapse" data-parent="#accordion1"
                                            href="#collapsetwo" aria-expanded="false" aria-controls="collapsetwo"><i
                                                class="fa fa-plus"></i>
                                            Employment History
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapsetwo" class="collapse " role="tabpanel" aria-labelledby="headingtwo">
                                    <div class="card-body">
                                        <div class="form-body">
                                            <div class="row p-t-20">
                                                <div class="table-responsive">
                                                    <table id="demo-foo-row-toggler" class="table table-bordered"
                                                        data-toggle-column="first">
                                                        <thead>
                                                            <th>No.</th>
                                                            <th>Start Date</th>
                                                            <th>End Date</th>
                                                            <th>Employer Code</th>
                                                            <th>Employer name</th>
                                                            <th>Occupation</th>
                                                            <th>Type Of Industry</th>
                                                        </thead>
                                                        <tbody>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                        </tbody>
                                                    </table>
                                                    <div class="col-md-6 offset-6">
                                                        <a class="btn btn waves-effect waves-light btn-success a1"
                                                            data-toggle="collapse"
                                                            data-target="#collapsetwo,#collapsethree"
                                                            aria-expanded="true" aria-controls="collapsetwo">
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
                                <div class="card-header" role="tab" id="headingthree">
                                    <h5 class="mb-0">
                                        <a class="collapsed link" data-toggle="collapse" data-parent="#accordion1"
                                            href="#collapsethree" aria-expanded="false" aria-controls="collapsethree"><i
                                                class="fa fa-plus"></i>
                                                Benefit Case
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapsethree" class="collapse" role="tabpanel" aria-labelledby="headingthree">
                                    <div class="card-body">
                                        <div class="form-body">
                                            <div class="row p-t-20">
                                                <div class="col-12">
                                                        <div class="table-responsive">
                                                                <table id="demo-foo-row-toggler" class="table table-bordered"
                                                                    data-toggle-column="first">
                                                                    <thead>
                                                                        <th>Notice Date</th>
                                                                        <th>Notice Type</th>
                                                                        <th>Scheme Ref. No.</th>
                                                                        <th>Benefit Ref. No.</th>
                                                                        <th>View</th>
                                                                    </thead>
                                                                    <tbody>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>
                                                                            <div class="input-group-append">
                                                                                <span class="input-group-text"
                                                                                    style="background-color: #d8e8e9;"><a
                                                                                        class="get-code" href="#tt1"
                                                                                        aria-expanded="true"><i
                                                                                            class="fas fa-file-alt" title="Scheme Case/Supporting Doc
                                                                                    " data-toggle="tooltip"></i></a></span>
                                                                                &nbsp;<span class="input-group-text"
                                                                                    style="background-color: #d8e8e9;"><a
                                                                                        class="get-code" href="#tt1"
                                                                                        aria-expanded="true"><i
                                                                                            class="fas fa-info-circle" title="Opinion Details
                                                                                    " data-toggle="tooltip"></i></a></span>
                                                                                &nbsp;<span class="input-group-text"
                                                                                    style="background-color: #d8e8e9;"><a
                                                                                        class="get-code" href="#tt1"
                                                                                        aria-expanded="true"><i
                                                                                            class="fas fa-handshake" title="RTW Social Economic Report
                                                                                    " data-toggle="tooltip"></i></a></span>
                                                                                &nbsp;<span class="input-group-text"
                                                                                    style="background-color: #d8e8e9;"><a
                                                                                        class="get-code" href="#tt1"
                                                                                        aria-expanded="true"><i class="fas fa-users"
                                                                                            title="RTW Report
                                                                                    " data-toggle="tooltip"></i></a></span>
            
                                                                            </div>
                                                                        </td>
                                                                    </tbody>
                                                                </table>
                                                                <div class="col-md-6 offset-6">
                                                                    <a class="btn btn waves-effect waves-light btn-success a1"
                                                                        data-toggle="collapse"
                                                                        data-target="#collapsethree,#collapsefour"
                                                                        aria-expanded="true" aria-controls="collapsethree">
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
                            <div class="card ">
                                <div class="card-header" role="tab" id="headingfour">
                                    <h5 class="mb-0">
                                        <a class="collapsed link" data-toggle="collapse" data-parent="#accordion1"
                                            href="#collapsefour" aria-expanded="false" aria-controls="collapsefour"><i
                                                class="fa fa-plus"></i>
                                                Medical Board Decision
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapsefour" class="collapse" role="tabpanel" aria-labelledby="headingfour">
                                    <div class="card-body">
                                        <div class="form-body">
                                            <div class="row p-t-20">
                                                <div class="col-12">
                                                        <div class="table-responsive">
                                                                <table id="demo-foo-row-toggler" class="table table-bordered"
                                                                    data-toggle-column="first">
                                                                    <thead>
                                                                        <th>No.</th>
                                                                        <th>Scheme Ref. No.</th>
                                                                        <th>MB Date</th>
                                                                        <th>MB Category</th>
                                                                        <th>Diagnosis</th>
                                                                        <th>Result</th>
                                                                        <th>View</th>
                                                                    </thead>
                                                                    <tbody>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>
                                                                            <div class="input-group-append">
                                                                                <span class="input-group-text"
                                                                                    style="background-color: #d8e8e9;"><a
                                                                                        class="get-code" href="#tt1"
                                                                                        aria-expanded="true"><i
                                                                                            class="fas fa-file-alt" title="All Details + Supporting Doc
                                                                                    " data-toggle="tooltip"></i></a></span>
                                                                            </div>
                                                                        </td>
                                                                    </tbody>
                                                                </table>
                                                                <div class="col-md-6 offset-6">
                                                                    <a class="btn btn waves-effect waves-light btn-success a1"
                                                                        data-toggle="collapse"
                                                                        data-target="#collapsefour,#collapsefive"
                                                                        aria-expanded="true" aria-controls="collapsefour">
                                                                        Next
                                                                    </a>
                                                                </div>
                                                            </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="card ">
                                        <div class="card-header" role="tab" id="headingfive">
                                            <h5 class="mb-0">
                                                <a class="collapsed link" data-toggle="collapse" data-parent="#accordion1"
                                                    href="#collapsefive" aria-expanded="false" aria-controls="collapsefive"><i
                                                        class="fa fa-plus"></i>
                                                        Rehab Supply History
                                                </a>
                                            </h5>
                                        </div>
                                        <div id="collapsefive" class="collapse" role="tabpanel" aria-labelledby="headingfive">
                                            <div class="card-body">
                                                <div class="form-body">
                                                    <div class="row p-t-20">
                                                        <div class="col-12">
                                                                <div class="table-responsive">
                                                                        <table id="demo-foo-row-toggler" class="table table-bordered"
                                                                            data-toggle-column="first">
                                                                            <thead>
                                                                                <th>Bill</th>
                                                                                <th>Type of Equipment</th>
                                                                                <th>Diagnosis</th>
                                                                                <th>Date Of Delivery</th>
                                                                                <th>Total (RM)</th>
                                                                            </thead>
                                                                            <tbody>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <div class="card-body">
                                    <div class="form-body">
                                        <div class="row p-t-20">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label">@lang('Opinion :')</label>
                                                    <input type="text" value="" class="form-control" >
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label">@lang('Recommendation  q :')</label>
                                                    <input type="text" value="" class="form-control" >
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label">@lang('Prepare By :')</label>
                                                    <input type="text" value="" class="form-control" >
                                                </div>
                                            </div>
                                              <div class="col-md-2">
                                                <div class="form-group">
                                                    <label class="control-label">@lang('Date :')</label>
                                                    <input type="text" value="" class="form-control" >
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

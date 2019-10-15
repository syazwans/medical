<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="#">
                    <div class="form-body">
                        <h4 class="card-title">@lang('Campaign Notes')</h4>
                        <div class="modal-body">
                            <div class="card-body">
                                <div class="col-md-4">
                                    <div class="form-group">

                                        <label class="control-label">@lang('Search :')</label>
                                        <div class="input-group ">
                                            <input type="text" class="form-control" id="commit_no">
                                            <div class="input-group-append">
                                                <span class="input-group-text" style="background-color: #d8e8e9;"><i
                                                        class="ti-search"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row p-t-20">
                                    <div class="col-12">
                                        <div class="table-responsive">
                                            <table id="committeeTable" class="table table-bordered"
                                                data-toggle-column="first">
                                                <thead>
                                                    <th>Campaign Ref. No.</th>
                                                    <th>Start Date</th>
                                                    <th>End Date</th>
                                                    <th>Campaign Name</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </thead>
                                                <tbody>
                                                    <td>OD001/19</td>
                                                    <td>950</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>
                                                        <div class="input-group-append">
                                                            <a id="view" data-toggle="modal"
                                                                data-target="#modal_document" data-id="1"
                                                                data-whatever="@getbootstrap" href="#tt1"
                                                                aria-expanded="true"><i class="fas fa-file-alt"
                                                                    title="View" data-toggle="tooltip"></i></a>
                                                            &nbsp;
                                                            <a id="deletedraft" data-toggle="modal"
                                                                data-target="#modal_document" data-id="1"
                                                                data-whatever="@getbootstrap" href="#tt1"
                                                                aria-expanded="true"><i class="fas fa-trash-alt fa-sm"
                                                                    title="Delete" data-toggle="tooltip"></i></a>

                                                            &nbsp;
                                                            <a id='selectdraft' class="get-code" data-toggle="modal"
                                                                data-target="#modal_document" data-id="1"
                                                                data-whatever="@getbootstrap" href="#tt1"
                                                                aria-expanded="true"><i class="fas fa-edit" title="Edit"
                                                                    data-toggle="tooltip"></i></a>

                                                        </div>
                                                    </td>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <div id="accordion1" role="tablist" aria-multiselectable="true">
                                    <div class="card">
                                        <div class="card-header" role="tab" id="headingOne1">
                                            <h5 class="mb-0">
                                                <a class="link" data-toggle="collapse" data-parent="#accordion1"
                                                    href="#collapseOne1" aria-expanded="true"
                                                    aria-controls="collapseOne"><i class="fa fa-plus"></i>
                                                    Campaign Notes
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
                                                                <label class="control-label">Campaign Ref. No. :</label>
                                                                <input type="text" value="" class="form-control"
                                                                    readonly>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label class="control-label">Campaign Name :</label>
                                                                <input type="text" value="" class="form-control"
                                                                    readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row p-t-20">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="control-label">Date :</label>
                                                                <input type="date" value="" class="form-control"
                                                                    readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row p-t-20">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="control-label">Status :</label>
                                                                <select class="form-control" name="moreinfo"
                                                                    id="moreinfo">
                                                                    <option value="PS" hidden selected readonly>Please
                                                                        Select
                                                                    </option>
                                                                    <option value="Y">In Progress</option>
                                                                    <option value="N">Submit for Review</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row p-t-20">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="control-label">Notes :</label>
                                                            <input type="text" value="" class="form-control" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label">@lang('Upload Document')</label><br>
                                                            <span class="choosefile"><input type="file" name="" id=""
                                                                    required> </span>
                                                        </div>
                                                    </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 offset-6">
                                        <a  class=" pull-center btn btn waves-effect waves-light btn-success a1">Submit</a>
                                </div>
                            </div>


                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<!-- <script>
function show(nr) {
    document.getElementById("table1").style.display="none";
    document.getElementById("table"+nr).style.display="block";
}

<script> -->

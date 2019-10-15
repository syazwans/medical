<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="#">
                    <div class="form-body">
                        <h4 class="card-title">@lang('Create Campaign')</h4>
                        <div class="modal-body">
                            <div class="card-body">
                                <div class="row p-t-20">
                                <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Campaign Ref. No. :</label>
                                            <input type="text" value="" class="form-control" readonly>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="row p-t-20">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Start Date :</label>
                                            <input type="date" value="" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">End Date :</label>
                                            <input type="date" value="" class="form-control" readonly>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="row p-t-20">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">Campaign Name :</label>
                                            <input type="text" value="" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">@lang('Report :')</label><br>
                                            <span class="choosefile"><input type="file" name=""id="" required> </span>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">@lang('Report Finding :')</label>
                                            <input type="text" value="" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">@lang('Campaign Objective :')</label>
                                            <input type="text" value="" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">@lang('Assign to  :')</label>
                                           <select class="form-control" name="moreinfo" id="moreinfo">
                                                            <option value="PS" hidden selected readonly>Please Select
                                                            </option>
                                                            <option value="Y"></option>
                                                            <option value="N"></option>
                                            </select>
                                        </div>
                                    </div>
                                    </div>
                                    <br>
                                    <div class="col-md-6 offset-6">
                                            <a class="btn-success link a1" id="btn_add_campaign" data-toggle="modal" data-target="#quotationModal"
                                                data-whatever="@getbootstrap" aria-expanded="true">
                                                Add Campaign
                                            </a>
                                    </div>
                                    <br>
                                    <br>
                                    <div class="table-responsive m-t-40">
                                <table id="myTable_campaign" class="table table-bordered table-striped">
                                    <thead style="background-color:skyblue;">
                                        <tr>
                                            <th>Campaign Ref. No.</th>
                                            <th>Start Date</th>
                                            <th>End Date</th>
                                            <th>Campaign Name</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    <tbody>
                                        <tr >
                                            <td style="display:none;"><input type="hidden" value="0"></td>
                                        </tr>
                                        </thead>
                                    </tbody>
                                </table>
                                </div>
                                    
                                <br>
                                
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

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="#">
                    <div class="form-body">
                        <h4 class="card-title">@lang('Set Appointment')</h4>
                        <hr>
                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">

                                    <label class="control-label">@lang('Reference No. :')</label>

                                    <div class="input-group ">
                                        <input type="text" value="" class="form-control" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">@lang('Tittle :')</label>
                                    <input type="text" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('Date :')</label>
                                    <input type="text" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label class="control-label">@lang('Time :')</label>
                                    <input type="text" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">@lang('Address :')</label>
                                    <textarea type="text" rows="4" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="col-md-11 offset-11 p-t-20">
                                <div class="col-md-1">
                                    <div class="form-group">
                                        <button type="button" id="btn_setApp" class="btn-success link a1" data-toggle="collapse" aria-expanded="true">Add</button>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive m-t-40">
                                <table id="myTable_setApp" class="table table-bordered table-striped">
                                    <thead style="background-color:skyblue;">
                                        <tr>
                                            <th>Employer</th>
                                            <th>Email</th>
                                            <th>PPN/PPP</th>
                                            <th>Email</th>
                                            <th>Agency</th>
                                            <th>Email</th>
                                            <th>Action</th>
                                        </tr>
                                    <tbody>
                                        <tr >
                                            <td style="display:none;"><input type="hidden" value="0"></td>
                                        </tr>
                                        </thead>
                                    </tbody>
                                </table>
                                <div class="col-md-12">
                                    <label class="control-label">@lang('Remark :')</label>
                                    <textarea type="text" rows="4" class="form-control"></textarea>
                                </div>
                                <div class="form-actions">
                                    <a class="btn btn waves-effect waves-light btn-success a1">Cancel</a>
                                    <a class="btn btn waves-effect waves-light btn-success a1">Back</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

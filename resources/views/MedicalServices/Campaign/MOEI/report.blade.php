<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="#">
                    <div class="form-body">
                        <h4 class="card-title">@lang('Prepare Report')</h4>
                        <hr>
                        <div class="row p-t-20">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">@lang('Tittle :')</label>
                                    <input type="text" value="" class="form-control" readonly>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('Date :')</label>
                                    <input type="date" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label class="m-t-20">Time</label>
                                <div class="input-group clockpicker " data-placement="bottom" data-align="top"
                                    data-autoclose="true">
                                    <input type="text" class="form-control" value="" id="">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">@lang('Address :')</label>
                                    <input type="text" class="form-control" value="" id="">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" value="" id="">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" value="" id="">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">@lang('Industry Description :')</label>
                                    <input type="text" value="" class="form-control" >
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">@lang('Industry Details :')</label>
                                    <input type="text" value="" class="form-control" >
                                </div>
                            </div>
                            <div class="col-md-11 offset-11 p-t-20">
                                <div class="col-md-1">
                                    <div class="form-group">
                                        <button type="button" id="btn_att" class="btn-success link a1" data-toggle="collapse" aria-expanded="true">Add</button>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive m-t-40">
                                <table id="myTable_att" class="table table-bordered table-striped">
                                    <thead style="background-color:skyblue;">
                                        <tr>
                                            <th>Attenance</th>
                                            <th>Agency Name</th>
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
                                    <div class="form-group">
                                        <label class="control-label">@lang('Work Unit :')</label>
                                        <input type="text" value="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">@lang('Hidden Activities :')</label>
                                        <input type="text" value="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">@lang('Agent / Hazard :')</label>
                                        <input type="text" value="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">@lang('Control Measures :')</label>
                                        <input type="text" value="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">@lang('Investigation :')</label>
                                        <input type="text" value="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">@lang('Employers justification :')</label>
                                        <input type="text" value="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">@lang('Employees justification :')</label>
                                        <input type="text" value="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">@lang('Assessment Improvement :')</label>
                                        <input type="text" value="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">@lang('Assessment :')</label>
                                        <input type="text" value="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">@lang('Prepared by :')</label>
                                        <input type="text" value="" class="form-control" readonly>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">@lang('Name :')</label>
                                        <input type="text" value="" class="form-control" readonly>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">@lang('Position :')</label>
                                        <input type="text" value="" class="form-control" readonly>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('Date :')</label>
                                        <input type="date" value="" class="form-control" readonly>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">@lang('Remarks :')</label>
                                        <input type="text" value="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">@lang('Approved By :')</label>
                                        <input type="text" value="" class="form-control" readonly>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">@lang('Position :')</label>
                                        <input type="text" value="" class="form-control" readonly>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('Date :')</label>
                                        <input type="date" value="" class="form-control" readonly>
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

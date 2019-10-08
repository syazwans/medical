<!-- sample modal content -->
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" id="appointment" aria-labelledby="myLargeModalLabel"
    aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="appointment">Create Appointment</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <div class="row p-t-20">
                        <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">@lang('Date :')</label>
                                    <input type="date" value="" id="create_date" class="form-control" >
                                </div>
                            </div>
                            {{-- <div class="col-md-3"> --}}
                                {{-- <div class="form-group">
                                    <label class="input-group ">@lang('Time :')</label>
                                    <input type="text" value="13:14"  id="id_diagnosis" value="" class="form-control clockpicker" >
                                </div> --}}
                                {{-- <div class="input-group">
                                    <input type="text" class="form-control" id="datepicker-autoclose" placeholder="mm/dd/yyyy">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="icon-calender"></i></span>
                                    </div>
                                </div> --}}

                                <div class="col-md-4">
                                    <label class="m-t-20">Time</label>
                                    <div class="input-group clockpicker " data-placement="bottom" data-align="top" data-autoclose="true">
                                        <input type="text" class="form-control" value="" id="create_time">
                                    </div>
                                </div>
                            {{-- </div> --}}
                            
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">@lang('Place :')</label>
                                    <input type="text" id="" value="" class="form-control" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('Meeting Ref. No. :')</label>
                                    <input type="text" id="id_meeting" value="" class="form-control" >
                                </div>
                            </div>
                            
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">@lang('Chairperson :')</label>
                                    <input type="text" id="" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-11 offset-11 p-t-20">
                            <div class="col-md-1">
                                <div class="form-group">
                                    <button type="button" id="add_panel" class="btn-success link a1" data-toggle="collapse" aria-expanded="true">Add</button>
                                </div>
                            </div>
                            </div>
                            <div class="col-md-12" id="panel">
                                <div class="table-responsive">
                                    <table id="table_panel" class="table table-bordered"
                                        data-toggle-column="first">
                                        <thead>
                                            <tr>
                                                <th>Committee Panel </th>
                                                <th>Name</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1 </td>
                                                <td><input type="text" id="id_diagnosis" value="" class="form-control" ></td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            
                            
                            <div class="col-12">
                                <div class="table-responsive">
                                    <table id="" class="table table-bordered"
                                        data-toggle-column="first">
                                        <thead>
                                            <tr>
                                                <th>MO Ref. No</th>
                                                <th>IP Name</th>
                                                <th>ID No.</th>
                                                <th>JD Date</th>
                                                <th>Select</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Close</button>
                <button type="button" id="btn_create" class="btn-success link a1" data-toggle="collapse" aria-expanded="true">Save</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->



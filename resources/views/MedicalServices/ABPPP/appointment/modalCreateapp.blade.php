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
                                    <input type="date" value="" class="form-control" >
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">@lang('Time :')</label>
                                    <div class="input-group clockpicker">
                                    <input text="time" id="id_diagnosis" value="" class="form-control" >
                                    <div class="input-group-append">
                                    <span class="input-group-text"><i class="fa fa-clock-o"></i></span>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">@lang('Place :')</label>
                                    <input type="text" id="id_diagnosis" value="" class="form-control" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('Meeting Ref. No. :')</label>
                                    <input type="text" id="id_diagnosis" value="" class="form-control" >
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">@lang('Chairperson :')</label>
                                    <input type="text" id="id_diagnosis" value="" class="form-control" >
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">@lang('Replacement Chairperson :')</label>
                                    <input type="text" id="id_diagnosis" value="" class="form-control" >
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">@lang('Committee Panel 1 :')</label>
                                    <input type="text" id="id_diagnosis" value="" class="form-control" >
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">@lang('Committee Panel 2 :')</label>
                                    <input type="text" id="id_diagnosis" value="" class="form-control" >
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">@lang('Committee Panel 2 :')</label>
                                    <input type="text" id="id_diagnosis" value="" class="form-control" >
                                </div>
                            </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Close</button>
                <button type="button" id="btn_diagnosis" class="btn-success link a1" data-toggle="collapse" aria-expanded="true">Add</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->


<!-- sample modal content -->
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" id="diagnosis" aria-labelledby="myLargeModalLabel"
    aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="diagnosis">Add Diagnosis</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <div class="row p-t-20">
                        <div class="col-md-1">
                                <div class="form-group">
                                    <label class="control-label">@lang('No. :')</label>
                                    <input type="text" value="" class="form-control" readonly>
                                </div>
                            </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label">@lang('Diagnosis :')</label>
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
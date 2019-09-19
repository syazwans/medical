<div class="modal fade" id="quota-modal" tabindex="-1" role="dialog" aria-labelledby="event-modal">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="quota_modal">@lang('medical_board/takwim.takwim')</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <form action="/takwim/setQuota" method="post">
            <div class="modal-body">
                {{ csrf_field() }}
                    {{-- <input type="hidden" name="takwim-index"> --}}
                    {{-- <input type="text" name="takwim-hospital"> --}}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">@lang('medical_board/takwim.attr.date')</label>
                                <div class="input-group input-daterange" id="date-range-quota">
                                    <input id="min-date" name="takwim-start-date" type="text" required class="form-control" readonly>
                                    <div class="input-group-prepend input-group-append">
                                        {{-- <div class="input-group-text" id="to">to</div> --}}
                                    </div>
                                    <input name="takwim-end-date" id="takwim-end-date" type="text" required class="form-control" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">@lang('medical_board/takwim.attr.quota')</label>
                                <div class="controls">
                                <input type="number" name="takwim_quota" required class="form-control">
                                </div>
                            </div>
                        </div>
                        {{-- <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">@lang('takwim.attr.doctor')</label>
                                <div class="controls">
                                <select name="takwim_doctor" required class="form-control" style="width: 100%;">
                                    <option value="">-- @lang('index.please_select') -- </option>
                                    @foreach ($doctor as $value)
                                        <option value={{$value->doctor_id}}>{{$value->doctor_name}}</option>
                                    @endforeach
                                </select>
                                </div>
                            </div>
                        </div> --}}
                    </div>
            </div>
            <div class="modal-footer">
                <div class="align-self-center text-left">
                <button type="button" class="btn btn waves-effect waves-light btn-danger" data-dismiss="modal">@lang('medical_board/modal.cancel')</button></div>
                {{-- <button type="submit" class="btn btn waves-effect waves-light btn-success" id="save-event1"><i class="fa fa-check"></i> @lang('medical_board/modal.save')</button> --}}
                <button type="button" class="btn btn waves-effect waves-light btn-success" id="quota-event"><i class="fa fa-check"></i> @lang('medical_board/modal.save')</button>
            </div>
        </form>
        </div>
    </div>
</div>

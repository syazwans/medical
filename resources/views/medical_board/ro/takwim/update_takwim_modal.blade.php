<div class="modal fade" id="update-modal" tabindex="-1" role="dialog" aria-labelledby="event-modal">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="set_takwim_modal">@lang('medical_board/takwim.takwim')</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <form action="/takwim/update" method="post">
            <div class="modal-body">
                {{ csrf_field() }}
                    <input type="hidden" name="takwim-index">
                    {{-- <input id="takwim_year" name="takwim_year" type="text"> --}}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">@lang('medical_board/takwim.attr.date')</label>
                                <div class="input-group input-daterange" id="date-range_update">
                                    <input id="min-date" name="takwim-start-date" type="text" class="form-control start_update" >
                                    <div class="input-group-prepend input-group-append">
                                        {{-- <div class="input-group-text">to</div> --}}
                                    </div>
                                    <input name="takwim-end-date" type="hidden" class="form-control end_update" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">@lang('medical_board/takwim.attr.venue')</label>
                                {{-- <div class="controls"> --}}
                                    <input type="text" name="takwim_venue" required class="form-control">
                                {{-- </div> --}}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">@lang('medical_board/takwim.attr.session')</label>
                                {{-- <div class="controls"> --}}
                                <select name="takwim_session" id="takwim_session" required class="form-control">
                                    <option value="">-- @lang('medical_board/index.please_select') --</option>
                                    @foreach ($session as $value)
                                        <option value={{$value->refcode}}>{{$value->descen}}</option>
                                    @endforeach
                                </select>
                                {{-- </div> --}}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">@lang('medical_board/takwim.attr.medical_board_category')</label>
                                {{-- <div class="controls"> --}}
                                <select name="takwim_medical_board_category" id="takwim_medical_board_category" required class="form-control">
                                    <option value="">-- @lang('medical_board/index.please_select') -- </option>
                                    @foreach ($medical_board_category as $value)
                                        <option value={{$value->refcode}}>{{$value->descen}}</option>
                                    @endforeach
                                </select>
                                {{-- </div> --}}
                            </div>
                        </div>
                        {{-- <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">@lang('takwim.attr.benefit_type')</label>
                                <div class="controls">
                                <select name="takwim_benefit_type" id="takwim_benefit_type" required class="form-control" >
                                    <option value="">-- @lang('index.please_select') -- </option>
                                    @foreach ($benefit_type as $value)
                                    <option value={{$value->refcode}}>{{$value->refcode}} - {{$value->descen}}</option>
                                    @endforeach
                                </select>
                                </div>
                            </div>
                        </div> --}}
                        {{-- <hr class="p-t-10" width="100%"> --}}
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">@lang('medical_board/takwim.attr.discipline')</label>
                                {{-- <div class="controls"> --}}
                                <select name="takwim_discipline" required class="form-control" style="width: 100%;">
                                    <option value="">-- @lang('medical_board/index.please_select') -- </option>
                                    @foreach ($discipline as $value)
                                        <option value={{$value->refcode}}>{{$value->descen}}</option>
                                    @endforeach
                                </select>
                                {{-- </div> --}}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                {{-- <label class="control-label">@lang('medical_board/takwim.attr.quota')</label> --}}
                                {{-- <div class="controls"> --}}
                                <input type="hidden" name="takwim_quota" required class="form-control">
                                {{-- </div> --}}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">@lang('medical_board/takwim.attr.remarks')</label>
                                {{-- <div class="controls"> --}}
                                <textarea name="takwim_remarks" class="form-control"></textarea>
                                {{-- </div> --}}
                            </div>
                        </div>
                        <input type="hidden" id="takwim_statecode" name="takwim_statecode" class="form-control">
                        
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
                <div class="align-self-left text-left">
                <button type="button" class="btn btn waves-effect waves-light btn-info" data-dismiss="modal" id="duplicate-event">@lang('medical_board/takwim.duplicate')</button>
                <button type="button" class="btn btn waves-effect waves-light btn-danger" data-dismiss="modal">@lang('medical_board/modal.cancel')</button></div>
                <button type="submit" class="btn btn waves-effect waves-light btn-success" id="update-event"><i class="fa fa-check"></i> @lang('medical_board/takwim.update')</button>
            </div>
        </form>
        </div>
    </div>
</div>

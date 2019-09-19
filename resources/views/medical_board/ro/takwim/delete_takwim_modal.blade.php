<div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="event-modal">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="set_takwim_modal">@lang('medical_board/takwim.takwim')</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <form action="/takwim/destroy" method="post">
            <div class="modal-body">
                {{ csrf_field() }}
                    <input type="hidden" name="takwim-index">
                    {{-- <input id="takwim_year" name="takwim_year" type="text"> --}}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">@lang('medical_board/takwim.attr.date')</label>
                                <div class="input-group input-daterange" id="date-range">
                                    <input id="min-date" name="takwim-start-date" type="text" class="form-control" disabled>
                                    <div class="input-group-prepend input-group-append">
                                        {{-- <div class="input-group-text">to</div> --}}
                                    </div>
                                    <input name="takwim-end-date" type="hidden" class="form-control" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">@lang('medical_board/takwim.attr.venue')</label>
                                <div class="controls">
                                    <input type="text" name="takwim_venue" class="form-control" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">@lang('medical_board/takwim.attr.session')</label>
                                <div class="controls">
                                <select name="takwim_session" id="takwim_session" class="form-control" disabled>
                                    <option value="">-- @lang('medical_board/index.please_select') --</option>
                                    @foreach ($session as $value)
                                        <option value={{$value->refcode}}>{{$value->descen}}</option>
                                    @endforeach
                                </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">@lang('medical_board/takwim.attr.medical_board_category')</label>
                                <div class="controls">
                                <select name="takwim_medical_board_category" id="takwim_medical_board_category" class="form-control" disabled>
                                    <option value="">-- @lang('medical_board/index.please_select') -- </option>
                                    @foreach ($medical_board_category as $value)
                                        <option value={{$value->refcode}}>{{$value->descen}}</option>
                                    @endforeach
                                </select>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">@lang('takwim.attr.benefit_type')</label>
                                <div class="controls">
                                <select name="takwim_benefit_type" id="takwim_benefit_type" class="form-control" >
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
                                <div class="controls">
                                <select name="takwim_discipline" class="form-control" style="width: 100%;" disabled>
                                    <option value="">-- @lang('medical_board/index.please_select') -- </option>
                                    @foreach ($discipline as $value)
                                        <option value={{$value->refcode}}>{{$value->descen}}</option>
                                    @endforeach
                                </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">@lang('medical_board/takwim.attr.quota')</label>
                                <div class="controls">
                                <input type="text" name="takwim_quota" class="form-control"disabled>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">@lang('medical_board/takwim.attr.remarks')</label>
                                <div class="controls">
                                <textarea name="takwim_remarks" class="form-control" disabled></textarea>
                                </div>
                            </div>
                        </div>
                        
                        {{-- <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">@lang('takwim.attr.doctor')</label>
                                <div class="controls">
                                <select name="takwim_doctor" class="form-control" style="width: 100%;">
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
                <button type="button" class="btn btn waves-effect waves-light btn-success" id="delete1-event"><i class="fa fa-trash-alt"></i> @lang('medical_board/takwim.delete')</button>
            </div>
        </form>
        </div>
    </div>
</div>

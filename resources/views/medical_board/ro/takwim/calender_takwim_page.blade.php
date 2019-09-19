    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body m-10">
                    <form action="/takwim" method="post">
                        {{ csrf_field() }}
                        <div class="form-body">
                            <h4 class="card-title">@lang('medical_board/takwim.calender_takwim')</h4>
                            <hr>
                            <div id="message"></div>
                            <div class="row p-t-20">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('medical_board/takwim.attr.hospital')</label>
                                        <div class="controls">
                                            <select name="takwim_hospital"  id="takwim_hospital" required class="select2 form-control" style="width:100%;">
                                            <option value=""><b>-- @lang('medical_board/index.please_select') -- </b></option>
                                            @if(!isset($jsonAnnualAgenda))
                                            @foreach ($state as $s)
                                                @foreach ($hospital as $h)
                                                    @if($s->refcode == $h->statecode)
                                                        <optgroup label="{{$s->descen}}">
                                                            <option value={{$h->hospital_id}}>{{$h->hospital_name}}</option>
                                                        </optgroup>
                                                    @endif
                                                @endforeach
                                            @endforeach
                                            @endif
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" id="takwim_statecode" name="takwim_statecode" class="form-control">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="hidden" name="application_url" id="application_url" value="{{URL::to(Request::route()->getPrefix()) }}"/>
                                        <label class="control-label">@lang('medical_board/takwim.attr.address')</label>
                                        <input type="text" class="form-control" id="takwim_address" name="takwim_address" disabled>
                                        {{-- <div id="takwim_address_div"></div> --}}
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('medical_board/takwim.attr.medical_board_category')</label>
                                        {{-- <div class="controls"> --}}
                                        <select name="takwim_medical_board_category_calendar" id="takwim_medical_board_category_calendar" required class="form-control">
                                            <option value=""><b>-- @lang('medical_board/index.please_select') -- </b></option>
                                            <option value="all">-- @lang('medical_board/index.all') -- </option>
                                            @foreach ($medical_board_category1 as $value)
                                                <option value="{{$value->refcode}}" {{-- selected = "selected" --}}>{{$value->descen}}</option>
                                            @endforeach --}}
                                            {{-- <option value="1">JD</option>
                                            <option selected value="2">JDK</option> --}}
                                        </select>
                                        {{-- </div> --}}
                                    </div>
                                </div>
                                {{-- <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">@lang('takwim.attr.quota')</label>
                                        <input type="text" class="form-control" id="takwim_quota" name="takwim_quota" readonly> --}}
                                        {{-- <div id="takwim_address_div"></div> --}}
                                   {{--  </div>
                                </div> --}}
                            <div id="calendar"></div>
                            </div>
                            @include('medical_board.ro.takwim.set_takwim_modal')
                        </div>
                    </form>
                    @include('medical_board.ro.takwim.update_takwim_modal')
                    @include('medical_board.ro.takwim.duplicate_takwim_modal')
                    @include('medical_board.ro.takwim.delete_takwim_modal')
                    @include('medical_board.ro.takwim.quota_modal')
                </div>
            </div>
        </div>
    </div>
    <!-- BEGIN MODAL -->
        
    {{-- <div class="modal fade" id="event-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Event</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
            </div>
            <div class="modal-body">
                <input type="hidden" name="event-index">
                <form class="form-horizontal">
                    <div class="form-group row">
                        <label for="event-name" class="col-sm-4 control-label">Name</label>
                        <div class="col-sm-8">
                            <input id="event-name" name="event-name" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="event-location" class="col-sm-4 control-label">Location</label>
                        <div class="col-sm-8">
                            <input id="event-location" name="event-location" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="min-date" class="col-sm-4 control-label">Dates</label>
                        <div class="col-sm-8">
                            <div class="input-group input-daterange" id="date-range">
                                <input id="min-date" name="event-start-date" type="text" class="form-control">
                <div class="input-group-prepend input-group-append">
                    <div class="input-group-text">to</div>
                </div>
                                <input name="event-end-date" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" id="save-event">
                    Save
                </button>
            </div>
        </div>
    </div>
</div>
<div id="context-menu">
</div> --}}
    <!-- END MODAL -->
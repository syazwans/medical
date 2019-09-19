{{-- <div class="tab-pane  p-20" id="medical" role="tabpanel"> --}}
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form action="#">
                        <div class="form-body">
                            <h3 class="card-title">@lang('accidentDetails.title')</h3>
                            <hr>
                            <div class="row p-t-20">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('accidentDetails.attr.accident_date')</label>
                                        <input type="date" class="form-control" placeholder="dd/mm/yyyy">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('accidentDetails.attr.time_accident')</label>
                                        <div class="input-group clockpicker" data-placement="bottom" data-align="top" data-autoclose="true">
                                            <input type="text" class="form-control" value="00:00">
                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="fa fa-clock-o"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('accidentDetails.attr.place_accident')</label>
                                        <select class="form-control custom-select">
                                            <option>@lang('accidentDetails.choose1')</option>
                                            <option value="">@lang('accidentDetails.in_premises')</option>
                                            <option value="">@lang('accidentDetails.out_premises')</option>
                                        </select> 
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('accidentDetails.attr.when_accident')</label>
                                        <select class="select2 form-control custom-select" style="width: 100%; height:36px;">
                                            <option>@lang('accidentDetails.choose5')</option>
                                            <optgroup label="@lang('accidentDetails.in_premises')">
                                                <option value="DW">@lang('accidentDetails.attr.during_work')</option>
                                                <option value="DE">@lang('accidentDetails.attr.during_emergency')</option>
                                                <option value="others">@lang('accidentDetails.attr.others')</option>
                                                <optgroup label="@lang('accidentDetails.out_premises')">
                                                    <option value="DW">@lang('accidentDetails.attr.during_work')</option>
                                                    <option value="DT">@lang('accidentDetails.attr.during_travel')</option>
                                                    <option value="DTT">@lang('accidentDetails.attr.during_tarvel_time')</option>
                                                    <option value="DC">@lang('accidentDetails.attr.during_course')</option>
                                                    <option value="DTR">@lang('accidentDetails.attr.during_travel_related')</option>
                                                    <option value="DE">@lang('accidentDetails.attr.during_emergency')</option>
                                                    <option value="others">@lang('accidentDetails.attr.others')</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label">@lang('accidentDetails.attr.date_death')</label>
                                                <input type="date" class="form-control" placeholder="dd/mm/yyyy">
                                            </div>
                                        </div>
                                        <!--/span-->
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="control-label">@lang('accidentDetails.attr.how_accident')</label>
                                                <textarea type="text" id="how" class="form-control"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>@lang('accidentDetails.attr.mode_transport')</label>
                                                <select name="mode_transport_other"class="form-control custom-select">
                                                    <option>@lang('accidentDetails.choose3')</option>
                                                    <option>@lang('accidentDetails.attr.airplane')</option>
                                                    <option>@lang('accidentDetails.attr.bicycle')</option>
                                                    <option>@lang('accidentDetails.attr.bot')</option>
                                                    <option>@lang('accidentDetails.attr.bus')</option>
                                                    <option>@lang('accidentDetails.attr.car')</option>
                                                    <option>@lang('accidentDetails.attr.helicopter')</option>
                                                    <option>@lang('accidentDetails.attr.lorry')</option>
                                                    <option>@lang('accidentDetails.attr.motorcycle')</option>
                                                    <option>@lang('accidentDetails.attr.pedestrian')</option>
                                                    <option>@lang('accidentDetails.attr.train')</option>
                                                    <option value="others">@lang('accidentDetails.attr.others')</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 mb-6">
                                                <input name="others" id="others" type="text" class="form-control" placeholder="@lang('accidentDetails.other_trans')">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label">@lang('accidentDetails.attr.causative_agent1')</label>
                                                <input type="text" id="totalDay" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label">@lang('accidentDetails.attr.accident_code')</label>
                                                <input type="text" id="totalDay" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label">@lang('accidentDetails.attr.industrial_code')</label>
                                                <input type="text" id="totalDay" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label">@lang('accidentDetails.attr.employment_code')</label>
                                                <input type="text" id="totalDay" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <!--/span-->
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="control-label">@lang('accidentDetails.attr.causative_agent')</label>
                                                <textarea type="text" id="McStatus" class="form-control" placeholder=""></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="control-label">@lang('accidentDetails.attr.injury_desc')</label>
                                                <textarea type="text" id="totalDay" class="form-control" placeholder=""></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/row-->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>@lang('accidentDetails.attr.accident_workingDay')</label>
                                                <select class="form-control custom-select">
                                                    <option>@lang('accidentDetails.choose4')</option>
                                                    <option>@lang('accidentDetails.yes')</option>
                                                    <option>@lang('accidentDetails.no')</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">@lang('accidentDetails.attr.start_workingTime')</label>
                                                <div class="input-group clockpicker" data-placement="bottom" data-align="top" data-autoclose="true">
                                                    <input type="text" class="form-control" value="00:00">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text"><i class="fa fa-clock-o"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">@lang('accidentDetails.attr.rest_period')</label>
                                                <div class="input-group clockpicker" data-placement="bottom" data-align="top" data-autoclose="true">
                                                    <input type="text" class="form-control" value="00:00">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text"><i class="fa fa-clock-o"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">@lang('accidentDetails.attr.end_workingTime')</label>
                                                <div class="input-group clockpicker" data-placement="bottom" data-align="top" data-autoclose="true">
                                                    <input type="text" class="form-control" value="00:00">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text"><i class="fa fa-clock-o"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">@lang('accidentDetails.attr.witness_name')</label>
                                                <input type="text" id="totalDay" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">@lang('accidentDetails.attr.witness_no')</label>
                                                <input type="text" id="status" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="control-label">@lang('accidentDetails.attr.nameAddress_clinic')</label>
                                                <textarea type="text" id="name" class="form-control"></textarea>
                                            </div>
                                        </div>
                                    </div >
                                </div>
                                <div class="form-actions">
                                    <button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.cancel')</button>
                                    <button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.clear')</button>
                                    <button type="submit" class="btn btn waves-effect waves-light btn-success"> <i class="fa fa-check"></i>
                                    @lang('insuredPerson.save')</button>
    
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<div class="tab-pane p-20" id="death_details" role="tabpanel">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="#">
                        <div class="form-body">
                            <h3 class="card-title">@lang('deathDetails.title')</h3>
                            <hr>
                            <div class="row p-t-20">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('deathDetails.attr.date_death')</label>
                                        <input type="date" name="death_details_date_death" id="death_details_date_death"
                                            class="form-control">
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('deathDetails.attr.cause_death')</label>
                                        <input type="text" name="death_details_cause_death"
                                            id="death_details_cause_death" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group ">
                                        <label
                                            class="control-label">@lang('deathDetails.attr.death_due_accident')</label>
                                        <select class="form-control" tabindex="1">
                                            <option value="Malay">@lang('deathDetails.attr.yes')</option>
                                            <option value="Chinese">@lang('deathDetails.attr.no')</option>

                                        </select>

                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <div class="row p-t-20">
                                <div class="col-md-4">
                                    <div class="form-group ">
                                        <label
                                            class="control-label">@lang('deathDetails.attr.death_due_accident')</label>
                                        <select class="form-control" tabindex="1">
                                            <option value="Malay">@lang('deathDetails.attr.yes')</option>
                                            <option value="Chinese">@lang('deathDetails.attr.no')</option>

                                        </select>

                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group ">
                                        <label class="control-label">@lang('deathDetails.attr.status')</label>
                                        <select class="form-control" tabindex="1">
                                            <option value="Single">@lang('deathDetails.attr.single')</option>
                                            <option value="Married">@lang('deathDetails.attr.married')</option>
                                            <option value="Divorced">@lang('deathDetails.attr.divorced')</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions">
                                    <button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.cancel')</button>
                                    <button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.clear')</button>
                                    <button type="submit" class="btn btn waves-effect waves-light btn-success"> <i class="fa fa-check"></i>
                                    @lang('insuredPerson.save')</button>
                                    
                                </div>
                            {{-- <div class="row p-t-20">
                                <div class="col-md-12">
                                    <div class="form-group ">
                                        <label class="control-label">@lang('deathDetails.attr.inpayment_case')</label>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="death_details_inpayment_case1"
                                                name="death_details_inpayment_case" class="custom-control-input"
                                                value="Pencen Ilat">
                                            <label class="custom-control-label"
                                                for="death_details_inpayment_case1">@lang('deathDetails.attr.pencen')t</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" name="death_details_inpayment_case"
                                                id="death_details_inpayment_case2" class="custom-control-input"
                                                value="HUK">
                                            <label class="custom-control-label"
                                                for="death_details_inpayment_case2">@lang('deathDetails.attr.huk')</label>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

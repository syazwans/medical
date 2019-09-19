<!-- Row -->
<div class="tab-pane  p-20" id="medical" role="tabpanel">
  <!-- Row -->
<div class="row" id="mcDetails">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form action="#">
                        <div class="form-body">
                            <h3 class="card-title">@lang('medicalDetails.title')</h3>
                            <hr>
                            <div class="row p-t-20">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">@lang('medicalDetails.attr.nameAddress_clinic')</label>
                                        <textarea type="text" id="name" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label">@lang('medicalDetails.attr.start_mc')</label>
                                        <input type="date" class="form-control" placeholder="dd/mm/yyyy">
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label">@lang('medicalDetails.attr.end_mc')</label>
                                        <input type="date" class="form-control" placeholder="dd/mm/yyyy">
                                    </div>
                                </div>
                                <!--/span-->
                                <!--/span-->
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label">@lang('medicalDetails.attr.mc_status')</label>
                                        <select class="form-control">
                                                {{-- <option>@lang('insuredPerson.attr.choose_id_type')</option> --}}
                                            <option value=""></option>
                                            <option value=""></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label">@lang('medicalDetails.attr.total_days')</label>
                                        <input type="text" id="totalDay" class="form-control" placeholder="">
                                    </div>
                                </div>
                                
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label">@lang('medicalDetails.attr.start_date')</label>
                                        <input type="date" class="form-control" placeholder="dd/mm/yyyy">
                                    </div>
                                </div>
                                <!--/span-->
                            
                            <!--/span-->
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">@lang('medicalDetails.attr.end_date')</label>
                                    <input type="date" class="form-control" placeholder="dd/mm/yyyy">
                                </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">@lang('medicalDetails.attr.days_work')</label>
                                    <input type="text" id="totalDay" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">@lang('medicalDetails.attr.status')</label>
                                    <input type="text" id="status" class="form-control" placeholder="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/row-->
                    <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('medicalDetails.attr.wages_mc')</label>
                                    <select class="form-control custom-select">
                                        {{-- <option>@lang('medicalDetails.choose')</option> --}}
                                        <option>@lang('medicalDetails.attr.yes')</option>
                                        <option>@lang('medicalDetails.attr.no')</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="button" class="btn btn waves-effect waves-light btn-secondary btn-newMC ">@lang('insuredPerson.cancel')</button>
                            <button type="button" class="btn btn waves-effect waves-light btn-secondary btn-newMC">@lang('insuredPerson.clear')</button>
                            <button type="button" class="btn waves-effect waves-light btn-info btn-newMC" id="addMC">Add MC</button>
                            <button type="submit" class="btn btn waves-effect waves-light btn-success btn-newMC"> <i class="fa fa-check"></i>
                            @lang('insuredPerson.save')</button>
                        </div>
                    </form>
                </div>
    
                                <!-- Row -->
                {{-- <div class="row" id="mcDetails2">
                    <hr>    
                    <div class="col-lg-12">
                            <div class="card-body">
                            <form method="post" action="{{url ('MCDetail')}}">
                                {{csrf_field()}}
                                    <div class="form-body">
                                        <div class="row p-t-20">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label">@lang('medicalDetails.attr.nameAddress_clinic')</label>
                                                    <textarea type="text" id="name" class="form-control"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label">@lang('medicalDetails.attr.start_mc')</label>
                                                    <input type="date" class="form-control" placeholder="dd/mm/yyyy">
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label">@lang('medicalDetails.attr.end_mc')</label>
                                                    <input type="date" class="form-control" placeholder="dd/mm/yyyy">
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label">@lang('medicalDetails.attr.mc_status')</label>
                                                    <input type="text" id="McStatus" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label">@lang('medicalDetails.attr.total_days')</label>
                                                    <input type="text" id="totalDay" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label">@lang('medicalDetails.attr.start_date')</label>
                                                    <input type="date" class="form-control" placeholder="dd/mm/yyyy">
                                                </div>
                                            </div>
                                        <!--/span-->
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="control-label">@lang('medicalDetails.attr.end_date')</label>
                                                <input type="date" class="form-control" placeholder="dd/mm/yyyy">
                                            </div>
                                        </div>
                                        <!--/span-->
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="control-label">@lang('medicalDetails.attr.days_work')</label>
                                                <input type="text" id="totalDay" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="control-label">@lang('medicalDetails.attr.status')</label>
                                                <input type="text" id="status" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                        <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="control-label">@lang('medicalDetails.attr.wages_mc')</label>
                                                <select class="form-control custom-select">
                                                    {{-- <option>@lang('medicalDetails.choose')</option> --}}
                                                    {{-- <option>@lang('medicalDetails.attr.yes')</option>
                                                    <option>@lang('medicalDetails.attr.no')</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <button type="button" class="btn btn waves-effect waves-light btn-secondary btn-newMC1">@lang('insuredPerson.cancel')</button>
                                        <button type="button" class="btn btn waves-effect waves-light btn-secondary btn-newMC1">@lang('insuredPerson.clear')</button>
                                        <button type="button" class="btn waves-effect waves-light btn-info btn-newMC1" id="addMC">Add MC</button>
                                        <button type="submit" class="btn btn waves-effect waves-light btn-success btn-newMC1"> <i class="fa fa-check"></i>
                                        @lang('insuredPerson.save')</button>
    
                                    </div>
                                </form>
                            </div>
                    </div>
                </div> 
                <!-- Ro --}}w -->
            </div>
        </div>
        <div id="id1">
        </div>
    </div>
</div>

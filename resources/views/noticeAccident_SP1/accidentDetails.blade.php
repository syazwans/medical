<!-- Row -->
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form method="post" action="{{url ('/noticeaccident')}}">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-body">
                        <h3 class="card-title">@lang('accidentDetails.title')</h3>
                        <hr>
                        
                        <div class="row">
                            <div class="col-md-12 col-lg-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('accidentDetails.attr.accident_date')</label>
                                    @if (!empty($accinfo))
                                    <input type="date" class="form-control" id="accddate" name="accddate" value="{{substr($accinfo->accddate,0,4)}}-{{substr($accinfo->accddate,4,2)}}-{{substr($accinfo->accddate,6,2)}}">
                                    @else
                                    @if (Session::get('accddate'))
                                    
                                    <input type="date" class="form-control" id="accddate" name="accddate" value="{{substr(Session::get('accddate'),0,4)}}-{{substr(Session::get('accddate'),4,2)}}-{{substr(Session::get('accddate'),6,2)}}">
                                    @else
                                    <input type="date" class="form-control" id="accddate" name="accddate" value="">
                                    @endif
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('accidentDetails.attr.time_accident')</label>
                                    <div class="input-group clockpicker" data-placement="bottom" data-align="top"
                                    data-autoclose="true">
                                    @if (!empty($accinfo))
                                    <input type="time" class="form-control" id="timeaccident" name="timeaccident" value="{{substr($accinfo->accdtime,0,2)}}:{{substr($accinfo->accdtime,2,2)}}:{{substr($accinfo->accdtime,4,2)}}">
                                    @else
                                    @if (Session::get('accdtime'))
                                    <input type="time" class="form-control" id="timeaccident" name="timeaccident" value="{{substr(Session::get('accdtime'),0,2)}}:{{substr(Session::get('accdtime'),2,2)}}:{{substr(Session::get('accdtime'),4,2)}}">
                                    @else
                                    <input type="time" class="form-control" id="timeaccident" name="timeaccident" value="">
                                    @endif
                                    @endif
                                    

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/span-->
                        <div class="row">
                        <div class="col-md-12 col-lg-4">
                            <div class="form-group">
                                <label class="control-label">@lang('accidentDetails.attr.place_accident')</label>
                                <select class="form-control" name="placeaccd">
                                     <!--option value="">@if(!empty($accinfo)){{$accinfo->place}} @endif</option-->
                                     <option>Please select</option>
                                    @foreach($accdplace as $AccPlace)
                                    @if (!empty($accinfo) && $accinfo->place == $AccPlace->refcode)
                                    <option value="{{$AccPlace->refcode}}" selected>{{$AccPlace->descen}}</option>
                                    @else
                                    <option value="{{$AccPlace->refcode}}">{{$AccPlace->descen}}</option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-8">
                            <div class="form-group">
                                <label class="control-label">@lang('accidentDetails.attr.when_accident')</label>
                                <select class="select2 form-control" name="accwhen" style="width: 100%; height:36px;">
                                    <!--option value="">@if(!empty($accinfo)){{$accinfo->accwhen}} @endif</option-->
                                    <option>Please select</option>
                                    @foreach($accdwhen as $AccWhen)
                                        @if (!empty($accinfo) && $accinfo->accwhen == $AccWhen->refcode)
                                        <option value="{{$AccWhen->refcode}}" selected>{{$AccWhen->descen}}</option>
                                        @else
                                        <option value="{{$AccWhen->refcode}}">{{$AccWhen->descen}}</option>
                                        @endif
                                    @endforeach
                                    
                                 </select>
                            </div>
                        </div>
                        </div>
                            {{-- <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('accidentDetails.attr.date_death')</label>
                                    <input type="date" name="dodeath" class="form-control" placeholder="dd/mm/yyyy">
                                </div>
                            </div> --}}
                            <!--/span-->
                            <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">@lang('accidentDetails.attr.how_accident')</label>
                                    <textarea type="text" id="how" name="how" class="form-control" >@if(!empty($accinfo)){{$accinfo->how}} @endif</textarea>
                                </div>
                            </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-lg-6">
                                    <div class="form-group">
                                        <label>@lang('accidentDetails.attr.mode_transport')</label>
                                        <select id="transport" name="transport" class="form-control">
                                            <!--option value="">@if(!empty($accinfo)){{$accinfo->transport}} @endif</option-->
                                            <option>Please select</option>
                                            @foreach($transport as $T)
                                                @if (!empty($accinfo) && $accinfo->transport == $T->refcode)
                                                <option value="{{$T->refcode}}" selected>{{$T->descen}}</option>
                                                @else
                                                <option value="{{$T->refcode}}">{{$T->descen}}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-6">
                                    <div class="form-group">
                                        <label>Others</label>
                                        <input name="trothers" id="trothers" type="text" class="form-control"
                                         value="@if(!empty($accinfo)){{$accinfo->transportothers}} @endif">
                                    </div>
                                </div>
                            
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-lg-6">
                                    <div class="form-group">
                                        <label class="control-label">@lang('accidentDetails.attr.causative_agent1')</label>
                                        <select name="causative" class="form-control">
                                            <!--option value="">@if(!empty($accinfo)){{$accinfo->causative}} @endif</option-->
                                            <option>Please select</option>
                                            @foreach($causative as $c)
                                            @if (!empty($accinfo) && $accinfo->causative == $c->refcode)
                                            <option value="{{$c->refcode}}" selected>{{$c->descen}}</option>
                                            @else
                                            <option value="{{$c->refcode}}">{{$c->descen}}</option>
                                            @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12  col-lg-6">
                                    <div class="form-group">
                                        <label class="control-label">@lang('accidentDetails.attr.accident_code')</label>
                                        <select name="accdcode" class="form-control">
                                            <!--option value="">@if(!empty($accinfo)){{$accinfo->accdcode}} @endif</option-->
                                           <option>Please select</option>
                                            @foreach($accdcode as $c)
                                                @if (!empty($accinfo) && $accinfo->accdcode == $c->refcode)
                                                <option value="{{$c->refcode}}" selected>{{$c->descen}}</option>
                                                @else
                                                 <option value="{{$c->refcode}}">{{$c->descen}}</option>
                                                 @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                            <div class="col-md-12 col-lg-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('accidentDetails.attr.industrial_code')</label>
                                    <select name="industcode" class="form-control">
                                        <!--option value="">@if(!empty($accinfo)){{$accinfo->industrialcode}} @endif</option-->
                                        <option>Please select</option>
                                        @foreach($industcode as $c)
                                            @if (!empty($accinfo) && $accinfo->industrialcode == $c->refcode)
                                            <option value="{{$c->refcode}}" selected>{{$c->descen}}</option>
                                            @else
                                             <option value="{{$c->refcode}}">{{$c->descen}}</option>
                                             @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('accidentDetails.attr.employment_code')</label>
                                    <select name="profcode" class="form-control">
                                       <!--option value="">@if(!empty($accinfo)){{$accinfo->employmentcode}} @endif</option-->
                                       <option>Please select</option>
                                       @foreach($profcode as $c)
                                            @if (!empty($accinfo) && $accinfo->employmentcode == $c->refcode)
                                            <option value="{{$c->refcode}}" selected>{{$c->descen}}</option>
                                            @else
                                             <option value="{{$c->refcode}}">{{$c->descen}}</option>
                                             @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                           
                            <!--/span-->
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">@lang('accidentDetails.attr.reason_travelling')</label>
                                    <textarea type="text" id="McStatus" name="reason" class="form-control" placeholder="">@if(!empty($accinfo)){{$accinfo->reasontravel}} @endif</textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">@lang('accidentDetails.attr.injury_desc')</label>
                                    <textarea type="text" id="injurydesc"  name="injurydesc" class="form-control" placeholder="">@if(!empty($accinfo)){{$accinfo->injurydesc}} @endif</textarea>
                                </div>
                            </div>
                        </div>
                        <!--/row-->
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>@lang('accidentDetails.attr.accident_workingDay')</label>
                                    <select class="form-control" name="accdworkingday">
                                        <!--option value="">@if(!empty($accinfo)){{$accinfo->accwork}} @endif</option-->
                                        <option>Please select</option>
                                        @if (!empty($accinfo) && $accinfo->accwork == 'Y')
                                        <option value='Y' selected>@lang('accidentDetails.yes')</option>
                                        <option value='N'>@lang('accidentDetails.no')</option>
                                        @elseif (!empty($accinfo) && $accinfo->accwork == 'N')
                                        <option value='Y' >@lang('accidentDetails.yes')</option>
                                        <option value='N' selected>@lang('accidentDetails.no')</option>
                                        @else
                                        <option value='Y'>@lang('accidentDetails.yes')</option>
                                        <option value='N'>@lang('accidentDetails.no')</option>
                                        @endif
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">    
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('accidentDetails.attr.start_workingTime')</label>
                                    <div class="input-group clockpicker" data-placement="bottom" data-align="top"
                                    data-autoclose="true">
                                        <input type="text" class="form-control" name="startworkingtime" value="@if(!empty($accinfo)&&$accinfo->startworktime!='') {{substr($accinfo->startworktime,0,2)}}:{{substr($accinfo->startworktime,2,2)}}:{{substr($accinfo->startworktime,4,2)}} @endif">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fa fa-clock-o"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">@lang('accidentDetails.attr.rest_period')</label>
                                <div class="input-group clockpicker" data-placement="bottom" data-align="top"
                                data-autoclose="true">
                                <input type="text" class="form-control" name="restperiod" value="@if(!empty($accinfo)&&$accinfo->restperiod!=''){{substr($accinfo->restperiod,0,2)}}:{{substr($accinfo->restperiod,2,2)}}:{{substr($accinfo->restperiod,4,2)}} @endif">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fa fa-clock-o"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">@lang('accidentDetails.attr.end_workingTime')</label>
                            <div class="input-group clockpicker" data-placement="bottom" data-align="top"
                            data-autoclose="true">
                            <input type="text" class="form-control" name="endworkingtime" value="@if(!empty($accinfo)&&$accinfo->endworktime!=''){{substr($accinfo->endworktime,0,2)}}:{{substr($accinfo->endworktime,2,2)}}:{{substr($accinfo->endworktime,4,2)}} @endif">
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
                        <input type="text" id="witnessname" name="witnessname" class="form-control" placeholder="" value="@if(!empty($accinfo)){{$accinfo->witnessname}} @endif">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">@lang('accidentDetails.attr.witness_no')</label>
                        <input type="text" id="witnesscontact" name="witnesscontact"  class="form-control" placeholder="" value="@if(!empty($accinfo)){{$accinfo->witnesscontact}} @endif">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label
                        class="control-label">@lang('accidentDetails.attr.nameAddress_clinic')</label>
                        <textarea type="text" id="clinicinfo" name="clinicinfo" class="form-control">@if(!empty($accinfo)){{$accinfo->clinicinfo}} @endif</textarea>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="form-actions">
            <button type="button"
            class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.cancel')</button>
            <button type="button"
            class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.clear')</button>
            <button type="submit" class="btn btn waves-effect waves-light btn-success"> <i
                class="fa fa-check"></i>
            @lang('insuredPerson.save')</button>
        </div>
        @if(Session::get('messageacc')) 
        <div class="card-footer">

            <div class="alert alert-warning">
                {{Session::get('messageacc')}}
            </div>

        </div>
        @elseif (!empty($messageacc))
        <div class="card-footer">

            <div class="alert alert-warning">
                {{$messageacc}}
            </div>

        </div>
        @endif
    </form>
</div>
</div>
</div>
</div>
<!-- Row -->



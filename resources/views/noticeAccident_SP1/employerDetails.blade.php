<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="./employerDetails" method="POST">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-body">
                        <h3 class="card-title">@lang('employerDetails.title')</h3>
                        <hr>
                        <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('employerDetails.attr.employerCode')</label>
                                    <input type="text" id="empcode" name="empcode" value=
                                           "@if (!empty($emprecord) && $emprecord[0]->empcode != null){{$emprecord[0]->empcode}} @else {{$employer->empcode}} @endif " class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('employerDetails.attr.employerType')</label>
                                    <select class="form-control custom-select" tabindex="1" name='emptype' id='emptype'>
                                        @foreach ($emptype as $et)
                                        @if (!empty($emprecord) && $emprecord[0]->emptype == $et->refcode )
                                        <option value="{{$et->refcode}}" selected>{{$et->descen}}</option>
                                        @else
                                        <option value="{{$et->refcode}}">{{$et->descen}}</option>
                                        @endif
                                        @endforeach
                                        
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">@lang('employerDetails.attr.employerName')</label>
                                    <input type="text" id="empname" name="empname" value=
                                           "@if (!empty($emprecord) && $emprecord[0]->empname != null){{$emprecord[0]->empname}}@else{{$employer->empname}}@endif" 
                                           class="form-control form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('employerDetails.attr.postal_address1')</label>
                                    <input type="text" id="add1" name="add1" value=
                                           "@if (!empty($emprecord) && $emprecord[0]->add1 != null){{$emprecord[0]->add1}}@else{{$employer->add1}}@endif" class="form-control" >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('employerDetails.attr.postal_address2')</label>
                                    <input type="text" id="add2" name="add2" value=
                                           "@if (!empty($emprecord) && $emprecord[0]->add2 != null){{$emprecord[0]->add2}}@else{{$employer->add2}}@endif" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('employerDetails.attr.postal_address3')</label>
                                    <input type="text" id="add3" name="add3" value=
                                           "@if (!empty($emprecord) && $emprecord[0]->add3 != null){{$emprecord[0]->add3}}@else{{$employer->add3}}@endif" class="form-control" >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('employerDetails.attr.postcode')</label>
                                    <input type="text" id="postcode" name="postcode" value=
                                           "@if (!empty($emprecord) && $emprecord[0]->postcode != null){{$emprecord[0]->postcode}}@else{{$employer->postcode}}@endif" class="form-control" >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>@lang('employerDetails.attr.city')</label>
                                    <input type="text" id="city" name="city" value=
                                           "@if (!empty($emprecord) && $emprecord[0]->city != null){{$emprecord[0]->city}}@else{{$employer->city}}@endif" class="form-control" >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('employerDetails.attr.state')</label>
                                    <select class="form-control custom-select" tabindex="1" name='state' id='state'>
                                            @foreach($state as $id)
                                            @if (!empty($emprecord) && $emprecord[0]->statecode == $id->refcode)
                                            <option value="{{$id->refcode}}" selected>{{$id->descen}}</option>
                                            @else
                                            <option value="{{$id->refcode}}">{{$id->descen}}</option>
                                            @endif
                                            @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>@lang('employerDetails.attr.telNo')</label>
                                    <input type="text" id="phoneno" name="phoneno" value=
                                           "@if (!empty($emprecord) && $emprecord[0]->telno != null){{$emprecord[0]->telno}}@else{{$employer->phoneno}}@endif" class="form-control"  >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>@lang('employerDetails.attr.faxNo')</label>
                                    <input type="text" id="faxno" name="faxno" value=
                                           "@if (!empty($emprecord) && $emprecord[0]->faxno != null){{$emprecord[0]->faxno}}@else{{$employer->faxno}}@endif" class="form-control"  >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>@lang('employerDetails.attr.email')</label>
                                    <input type="text" id="email" name="email" value=
                                           "@if (!empty($emprecord) && $emprecord[0]->email != null){{$emprecord[0]->email}}@else{{$employer->email}}@endif" class="form-control" >
                                </div>
                            </div>
                        
                        
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('wages.attr.commencement_date')</label>
                                    <input type="date" id="startdate" name="startdate" value="@if(!empty($emprecord) && $emprecord[0]->startdate!=''){{substr($emprecord[0]->startdate,0,4)}}-{{substr($emprecord[0]->startdate,4,2)}}-{{substr($emprecord[0]->startdate,6,2)}} @endif" class="form-control"  >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('wages.attr.end_date')</label>
                                    <input type="date" id="enddate" name="enddate" value="@if(!empty($emprecord) && $emprecord[0]->enddate!=''){{substr($emprecord[0]->enddate,0,4)}}-{{substr($emprecord[0]->enddate,4,2)}}-{{substr($emprecord[0]->enddate,6,2)}} @endif" class="form-control">
                                </div>
                            </div>
                         </div>   
                       
                        <div class="form-actions">
                            <button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.cancel')</button>
                            <button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.clear')</button>
                            <button type="submit" class="btn btn waves-effect waves-light btn-success"> <i class="fa fa-check"></i>
                            @lang('insuredPerson.save')</button>

                        </div>
                                                
                        @if(Session::get('messageemp')) 
                        <div class="card-footer">

                            <div class="alert alert-warning">
                                {{Session::get('messageemp')}}
                            </div>

                        </div>
                        @elseif (!empty($messageemp))
                        <div class="card-footer">

                            <div class="alert alert-warning">
                                {{$messageemp}}
                            </div>

                        </div>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
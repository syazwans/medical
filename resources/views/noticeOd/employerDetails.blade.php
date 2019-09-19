<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="/employerdetails_od" method="POST">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-body">
                        <h5 class="card-title">@lang('employerDetails.title')</h5>
                        <hr>
                        <div class="row p-t-20">
                        	{{-- <div class="col-md-3">
                        		<div class="form-group">
                        			<label class="control-label">Employer Code</label>
                        			<input type="text" class="form-control" name="empcode" value={{$checkaccddate->empcode}} required>
                        			<div class="input-group-append">
                        			</div>
                        		</div>
                        	</div>
                        	<div class="form-actions">
                        		<button type="submit" class="btn btn waves-effect waves-light btn-secondary">Search</button>
                        	</div> --}}
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('employerDetails.attr.employerCode')</label>
                                    {{-- @if(!empty($emprecord) && $emprecord[0]->empcode != null) --}}
                                    @if(!empty($emprecord) && $emprecord->empcode != '')
                                    <input type="text" id="empcode" name="empcode" value="{{$emprecord->empcode}}" class="form-control" required>
                                    @elseif(!empty($employer) && $employer->empcode != '')
                                    <input type="text" id="empcode" name="empcode" value="{{$employer->empcode}}" class="form-control" required>
                                    @else
                                    <input type="text" id="empcode" name="empcode" value="{{old('empcode')}}" class="form-control" required>
                                    @endif
                                </div>
                            </div>
							{{-- <div class="form-actions">
                        		<button type="submit" class="btn btn waves-effect waves-light btn-secondary">Search</button>
                        	</div> --}}
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('employerDetails.attr.employerType')</label>
                                    <select class="form-control custom-select" tabindex="1" name='emptype' id='emptype'>
                                        @foreach ($emptype as $et)
                                        @if (!empty($emprecord) && $emprecord->emptype == $et->refcode )
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
                                    @if(!empty($emprecord) && $emprecord->empname != '')
                                    <input type="text" id="empname" name="empname" value="{{$emprecord->empname}}" class="form-control" required>
                                    @elseif(!empty($employer) && $employer->empname != '')
                                    <input type="text" id="empname" name="empname" value="{{$employer->empname}}" class="form-control" required>
                                    @else
                                    <input type="text" id="empname" name="empname" value="" class="form-control" required>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">@lang('employerDetails.attr.postal_address')</label>
                                    @if(!empty($emprecord) && $emprecord->add1 != '')
                                    <input type="text" id="add1" name="add1" value="{{$emprecord->add1}}" class="form-control">
                                    @elseif(!empty($employer) && $employer->add1 != '')
                                    <input type="text" id="add1" name="add1" value="{{$employer->add1}}" class="form-control">
                                    @else
                                    <input type="text" id="add1" name="add1" value="" class="form-control">
                                    @endif
                                    {{-- <input type="text" id="add1" name="add1" value=
                                           "@if (!empty($emprecord) && $emprecord[0]->add1 != null){{$emprecord[0]->add1}}@else{{$employer->add1}}@endif" class="form-control" > --}}
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    {{-- <label class="control-label">@lang('employerDetails.attr.postal_address2')</label> --}}
                                    @if(!empty($emprecord) && $emprecord->add2 != '')
                                    <input type="text" id="add2" name="add2" value="{{$emprecord->add2}}" class="form-control">
                                    @elseif(!empty($employer) && $employer->add1 != '')
                                    <input type="text" id="add2" name="add2" value="{{$employer->add2}}" class="form-control">
                                    @else
                                    <input type="text" id="add2" name="add2" value="" class="form-control">
                                    @endif
                                    {{-- <input type="text" id="add2" name="add2" value=
                                           "@if (!empty($emprecord) && $emprecord[0]->add2 != null){{$emprecord[0]->add2}}@else{{$employer->add2}}@endif" class="form-control"> --}}
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    {{-- <label class="control-label">@lang('employerDetails.attr.postal_address3')</label>  --}}
                                    @if(!empty($emprecord) && $emprecord->add3 != '')
                                    <input type="text" id="add3" name="add3" value="{{$emprecord->add3}}" class="form-control">
                                    @elseif(!empty($employer) && $employer->add3 != '')
                                    <input type="text" id="add3" name="add3" value="{{$employer->add3}}" class="form-control">
                                    @else
                                    <input type="text" id="add3" name="add3" value="{{old('add3')}}" class="form-control">
                                    @endif
                                    {{-- <input type="text" id="add3" name="add3" value=
                                           "@if (!empty($emprecord) && $emprecord[0]->add3 != null){{$emprecord[0]->add3}}@else{{$employer->add3}}@endif" class="form-control" > --}}
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('employerDetails.attr.postcode')</label>
                                    @if(!empty($emprecord) && $emprecord->postcode != '')
                                    <input type="text" id="postcode" name="postcode" value="{{$emprecord->postcode}}" class="form-control">
                                    @elseif(!empty($employer) && $employer->postcode != '')
                                    <input type="text" id="postcode" name="postcode" value="{{$employer->postcode}}" class="form-control">
                                    @else
                                    <input type="text" id="postcode" name="postcode" value="{{old('postcode')}}" class="form-control">
                                    @endif
                                    {{-- <input type="text" id="postcode" name="postcode" value=
                                           "@if (!empty($emprecord) && $emprecord[0]->postcode != null){{$emprecord[0]->postcode}}@else{{$employer->postcode}}@endif" class="form-control" > --}}
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>@lang('employerDetails.attr.city')</label>
                                    @if(!empty($emprecord) && $emprecord->city != '')
                                    <input type="text" id="city" name="city" value="{{$emprecord->city}}" class="form-control">
                                    @elseif(!empty($employer) && $employer->city != '')
                                    <input type="text" id="city" name="city" value="{{$employer->city}}" class="form-control">
                                    @else
                                    <input type="text" id="city" name="city" value="" class="form-control">
                                    @endif
                                    {{-- <input type="text" id="city" name="city" value=
                                           "@if (!empty($emprecord) && $emprecord[0]->city != null){{$emprecord[0]->city}}@else{{$employer->city}}@endif" class="form-control" > --}}
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('employerDetails.attr.state')</label>
                                    <select class="form-control custom-select" tabindex="1" name='state' id='state'>
                                            @foreach($state as $id)
                                            @if (!empty($emprecord) && $emprecord->statecode == $id->refcode)
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
                                    <label>PO BOX</label>
                                    @if(!empty($emprecord) && $emprecord->pobox != '')
                                    <input type="text" id="pobox" name="pobox" value="{{$emprecord->pobox}}" class="form-control">
                                    @elseif(!empty($emprecord) && $emprecord->city != '')
                                    <input type="text" id="pobox" name="pobox" value="{{$emprecord->pobox}}" class="form-control">
                                    @else
                                    <input type="text" id="pobox" name="pobox" value="" class="form-control">
                                    @endif
                                  {{--   <input type="text" id="pobox" name="pobox" value=
                                           "@if (!empty($emprecord) && $emprecord[0]->pobox != null){{$emprecord[0]->pobox}}@else{{$employer->pobox}}@endif" class="form-control"  > --}}
                                </div>
                            </div>
                             <div class="col-md-4">
                                <div class="form-group">
                                    <label>Locked Bag</label>
                                    @if(!empty($emprecord) && $emprecord->lockedbag != '')
                                    <input type="text" id="lockedbag" name="lockedbag" value="{{$emprecord->lockedbag}}" class="form-control">
                                    @elseif(!empty($emprecord) && $emprecord->lockedbag != '')
                                    <input type="text" id="lockedbag" name="lockedbag" value="{{$emprecord->lockedbag}}" class="form-control">
                                    @else
                                    <input type="text" id="lockedbag" name="lockedbag" value="" class="form-control">
                                    @endif
                                    {{-- <input type="text" id="lockedbag" name="lockedbag" value=
                                           "{{-- @if (!empty($emprecord)){{$employer->wdt}}@endif" class="form-control"> --}} 
                                </div>
                            </div>
                             <div class="col-md-4">
                                <div class="form-group">
                                    <label>WDT</label>
                                    @if(!empty($emprecord) && $emprecord->wdt != '')
                                    <input type="text" id="wdt" name="wdt" value="{{$emprecord->wdt}}" class="form-control">
                                    @elseif(!empty($emprecord) && $emprecord->wdt != '')
                                    <input type="text" id="wdt" name="wdt" value="{{$emprecord->wdt}}" class="form-control">
                                    @else
                                    <input type="text" id="wdt" name="wdt" value="" class="form-control">
                                    @endif
                                    {{-- <input type="text" id="wdt" name="wdt" value=
                                           "{{-- @if (!empty($emprecord)){{$employer->wdt}}@endif" class="form-control"> --}} 
                                </div>
                            </div>
                             <div class="col-md-4">
                                <div class="form-group">
                                    <label>@lang('employerDetails.attr.telNo')</label>
                                    @if(!empty($emprecord) && $emprecord->telno != '')
                                    <input type="text" id="telno" name="telno" value="{{$emprecord->telno}}" class="form-control">
                                    @elseif(!empty($employer) && $employer->phoneno != '')
                                    <input type="text" id="telno" name="telno" value="{{$employer->phoneno}}" class="form-control">
                                    @else
                                    <input type="text" id="telno" name="telno" value="" class="form-control">
                                    @endif
                                    {{-- <input type="text" id="phoneno" name="phoneno" value=
                                           "@if (!empty($emprecord)){{$employer->wdt}}@endif" class="form-control"  > --}}
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>@lang('employerDetails.attr.faxNo')</label>
                                    @if(!empty($emprecord) && $emprecord->faxno != '')
                                    <input type="text" id="faxno" name="faxno" value="{{$emprecord->faxno}}" class="form-control">
                                    @elseif(!empty($employer) && $employer->faxno != '')
                                    <input type="text" id="faxno" name="faxno" value="{{$employer->faxno}}" class="form-control">
                                    @else
                                    <input type="text" id="faxno" name="faxno" value="" class="form-control">
                                    @endif
                                    {{-- <input type="text" id="faxno" name="faxno" value=
                                           "@if (!empty($emprecord) && $emprecord[0]->faxno != null){{$emprecord[0]->faxno}}@else{{$employer->faxno}}@endif" class="form-control"  > --}}
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>@lang('employerDetails.attr.email')</label>
                                    @if(!empty($emprecord) && $emprecord->email != '')
                                    <input type="text" id="email" name="email" value="{{$emprecord->email}}" class="form-control">
                                    @elseif(!empty($employer) && $employer->faxno != '')
                                    <input type="text" id="email" name="email" value="{{$employer->email}}" class="form-control">
                                    @else
                                    <input type="text" id="email" name="email" value="" class="form-control">
                                    @endif
                                    {{-- <input type="text" id="email" name="email" value=
                                           "@if (!empty($emprecord) && $emprecord[0]->email != null){{$emprecord[0]->email}}@else{{$employer->email}}@endif" class="form-control" > --}}
                                </div>
                            </div>    
                       
                        <div class='row'>
                            <div class="col-md-6">
                                <div class="form-group">
                        <div class="form-actions" >
                            <!--button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.cancel')</button>
                            <button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.clear')</button-->
                            <button type="submit" class="btn btn waves-effect waves-light btn-success">
                            @lang('insuredPerson.save')</button>

                        </div>
                        </div>
                                </div>
                        </div>
                                </div>
                        <br/>                
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
   
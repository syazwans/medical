<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                
                <form action="/obform" method="POST">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-body">
                        <h5 class="card-title">@lang('insuredPerson.title')</h5>
                        <hr>
                        <div class="row p-t-20">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">@lang('insuredPerson.attr.name')</label>
                                    @if(!empty($obprofile) && $obprofile->name !='')
                                    <input type="text" id="name" name="name" value="{{ $obprofile->name }}" class="form-control">
                                    @else
                                    <input type="text" id="name" name="name" value="{{ $obformassist->name }}" class="form-control">
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">@lang('insuredPerson.attr.id_type')</label>
                                   {{--  <input id="idtype" value="{{ $obprofile->idtype }}" class="form-control"> --}}

                                    <select id="idtype" class="form-control" value="@if(!empty($obprofile)){{$obprofile->idtype}} @endif" name="idtype">
                                            <!--option value="">@if(!empty($obprofile)){{$obprofile->idtype}} @endif</option-->
                                        @foreach($idtype as $id)
                                        @if (!empty($obprofile) && $id->refcode == $obprofile->idtype)
                                        <option value="{{$id->refcode}}" selected>{{$id->descen}}</option>
                                        @else
                                        <option value="{{$id->refcode}}">{{$id->descen}}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">@lang('insuredPerson.attr.id_no')</label>
                                    @if(!empty($obprofile) && $obprofile->idno !='')
                                    <input type="text" id="idno" name="idno" value="{{ $obprofile->idno }}" class="form-control">
                                    <input type="hidden" id="previdno" name="previdno" value="{{ $obprofile->idno }}" class="form-control">
                                    @else
                                    <input type="text" id="idno" name="idno" value="{{ $obformassist->idno }}" class="form-control">
                                    <input type="hidden" id="previdno" name="previdno" value="{{ $obformassist->idno }}" class="form-control">
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">@lang('insuredPerson.attr.dateOfBirth')</label>
                                    @if(!empty($obprofile) && $obprofile->dob !='')
                                    <input type="text" id="dob" name="dob" value="{{substr($obprofile->dob,6,2)}}/{{substr($obprofile->dob,4,2)}}/{{substr($obprofile->dob,0,4)}}" class="form-control">
                                    @else
                                    <input type="text" id="dob" name="dob" value="{{substr($obformassist->dob,6,2)}}/{{substr($obformassist->dob,4,2)}}/{{substr($obformassist->dob,0,4)}}" class="form-control">
                                    @endif

                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">@lang('insuredPerson.attr.race')</label>
                                   {{--  <input type="text" id="race" value="{{ $obprofile->race }}" class="form-control"> --}}
                                    <select class="form-control" name="race"> 
                                            <!--option value="">@if(!empty($obprofile)){{ $obprofile->race }} @endif</option-->
                                        @foreach($race as $id)
                                        @if (!empty($obprofile) && $obprofile->race == $id->refcode)
                                        <option value="{{$id->refcode}}" selected>{{$id->descen}}</option>
                                        @else
                                        <option value="{{$id->refcode}}">{{$id->descen}}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">@lang('insuredPerson.attr.gender')</label>
                                   {{--  <input type="text" id="gender" value="{{ $obprofile->gender }}" class="form-control"> --}}
                                    <select class="form-control" name="gender">
                                <!--option value="">@if(!empty($obprofile)){{ $obprofile->gender }} @endif</option-->
                                        @if (!empty($obprofile) && $obprofile->gender == 'F')
                                        <option value="F" selected>Female</option>
                                         <option value="M">Male</option>
                                         @elseif (!empty($obprofile) && $obprofile->gender == 'M')
                                         <option value="F">Female</option>
                                         <option value="M" selected>Male</option>
                                         @else
                                         <option value="F">Female</option>
                                         <option value="M">Male</option>
                                         @endif
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">@lang('insuredPerson.attr.occupation')</label>
                                    <input type="text" name="occupation" id="occupation" value="@if(!empty($obprofile)){{ $obprofile->occupation }} @endif" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>@lang('insuredPerson.attr.postal_address1')</label>
                                    <input type="text" name="add1" value="@if(!empty($obprofile)){{ $obprofile->add1 }} @endif" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>@lang('insuredPerson.attr.postal_address2')</label>
                                    <input type="text" name="add2" value="@if(!empty($obprofile)){{ $obprofile->add2 }} @endif" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>@lang('insuredPerson.attr.postal_address3')</label>
                                    <input type="text" name="add3" value="@if(!empty($obprofile)){{ $obprofile->add3 }} @endif" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>@lang('insuredPerson.attr.city')</label>
                                    <input type="text" class="form-control" name="city"  value="@if(!empty($obprofile)){{ $obprofile->city }} @endif">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('insuredPerson.attr.state')</label>
                                    <!--input type="text" name="state" id="state" value="@if(!empty($obcontact)){{ $obcontact->statecode }} @endif" class="form-control"-->
                                    <select name='state' id='state' class='form-control'>
                                        @foreach($state as $s)
                                        @if(!empty($obprofile) && $obprofile->statecode == $s->refcode)
                                        <option value='{{$s->refcode}}' selected>{{$s->descen}}</option>
                                        @else
                                        <option value='{{$s->refcode}}'>{{$s->descen}}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>@lang('insuredPerson.attr.postcode')</label>
                                    <input type="text" id="postcode" name="postcode" value="@if(!empty($obprofile)){{ $obprofile->postcode }} @endif" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>@lang('insuredPerson.attr.telNo')</label>
                                    <input type="text" id="telno" name="telno" value="@if(!empty($obprofile)){{ $obprofile->telno }} @endif" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>@lang('insuredPerson.attr.mobileNo')</label>
                                    <input type="text" id="mobileno" name="mobileno" value="@if(!empty($obprofile)){{ $obprofile->mobileno }} @endif" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>@lang('insuredPerson.attr.email')</label>
                                    <input type="text" id="email" name="email"  value="@if(!empty($obprofile)){{ $obprofile->email }} @endif" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('insuredPerson.attr.citizen')</label>
                                    {{-- <input type="text" id="citizen" value="@if(!empty($obprofile)){{ $obprofile->nationality }} @endif" class="form-control"> --}}
                                    <select class="form-control" tabindex="1" name='nationality' id='nationality'>
                                            <!--option value="">@if(!empty($obcontact)){{ $obcontact->nationality }} @endif</option-->
                                        @foreach($national as $N)
                                        @if (!empty($obprofile) && $obprofile->nationality == $N->refcode)
                                            <option value="{{$N->refcode}}" selected>{{$N->descen}}</option>
                                            @else
                                            <option value="{{$N->refcode}}">{{$N->descen}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class="form-actions">
                                <button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.cancel')</button>
                                <button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.clear')</button>
                                <button type="submit" class="btn btn waves-effect waves-light btn-success"> <i class="fa fa-check"></i>
                                @lang('insuredPerson.save')</button>
                            </div>
                        </div>  
                        @if(Session::get('messageob')) 
                        <div class="card-footer">

                            <div class="alert alert-warning">
                                {{Session::get('messageob')}}
                            </div>

                        </div>
                        @elseif (!empty($messageob))
                        <div class="card-footer">

                            <div class="alert alert-warning">
                                {{$messageob}}
                            </div>

                        </div>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

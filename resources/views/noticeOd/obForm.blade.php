<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="/obform_od" method="POST">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-body">
                        <h5 class="card-title">@lang('insuredPerson.title')</h5>
                        <hr>
                        <div class="row p-t-20">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">@lang('insuredPerson.attr.name')</label>
                                    @if(!empty($obprofile) && $obprofile->name != '')
                                    <input type="text" id="name" name="name" value="{{ $obprofile->name }}" class="form-control" required>
                                    @elseif(!empty($obformassist) && $obformassist->name != '')
                                    <input type="text" id="name" name="name" value="{{ $obformassist->name }}" class="form-control" required>
                                    @else
                                    <input type="text" id="name" name="name" value="" class="form-control" required>
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
                                    @elseif(!empty($obformassist) && $obformassist->idno !='')
                                    <input type="text" id="idno" name="idno" value="{{ $obformassist->idno }}" class="form-control">
                                    <input type="hidden" id="previdno" name="previdno" value="{{ $obformassist->idno }}" class="form-control">
                                    @else
                                    <input type="text" id="idno" name="idno" value="" class="form-control">
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">@lang('insuredPerson.attr.dateOfBirth')</label>
                                    @if(!empty($obprofile) && $obprofile->dob !='')
                                    <input type="date" id="dob" name="dob" value="{{substr($obprofile->dob,0,4)}}-{{substr($obprofile->dob,4,2)}}-{{substr($obprofile->dob,6,2)}}" class="form-control">
                                    @elseif(!empty($obformassist) && $obformassist->dob !='')
                                    <input type="date" id="dob" name="dob" value="{{substr($obformassist->dob,0,4)}}-{{substr($obformassist->dob,4,2)}}-{{substr($obformassist->dob,6,2)}}" class="form-control">
                                    @else
                                    <input type="date" id="dob" name="dob" value="" class="form-control">
                                    @endif

                                </div>
                            </div>
                            
                        </div>
                        <div class='row'>
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
                                    @if(!empty($obprofile) && $obprofile->occupation != '')
                                    <input type="text" id="occupation" name="occupation" value="{{ $obprofile->occupation }}" class="form-control">
                                    @else
                                    <input type="text" id="occupation" name="occupation" value="" class="form-control">
                                    @endif
                                </div>
                            </div>
                        </div>
                        <!--div class='row'>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Date of Death</label>
                                    <input type="date" name="dodeath" id="dodeath" value="@if(!empty($obprofile)){{ $obprofile->dodeath }} @endif" class="form-control">
                                </div>
                            </div>
                        </div-->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>@lang('insuredPerson.attr.postal_address')</label>
                                    @if(!empty($obprofile) && $obprofile->add1 != '')
                                    <input type="text" id="add1" name="add1" value="{{ $obprofile->add1 }}" class="form-control">
                                    @else
                                    <input type="text" id="add1" name="add1" value="" class="form-control">
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                   {{--  <label>@lang('insuredPerson.attr.postal_address2')</label> --}}
                                    @if(!empty($obprofile) && $obprofile->add2 != '')
                                    <input type="text" id="add2" name="add2" value="{{ $obprofile->add2 }}" class="form-control">
                                    @else
                                    <input type="text" id="add2" name="add2" value="" class="form-control">
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    {{-- <label>@lang('insuredPerson.attr.postal_address3')</label> --}}
                                    @if(!empty($obprofile) && $obprofile->add3 != '')
                                    <input type="text" id="add3" name="add3" value="{{ $obprofile->add3 }}" class="form-control">
                                    @else
                                    <input type="text" id="add3" name="add3" value="" class="form-control">
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                        <div class="col-md-4">
                                <div class="form-group">
                                    <label>@lang('insuredPerson.attr.postcode')</label>
                                    @if(!empty($obprofile) && $obprofile->postcode != '')
                                    <input type="text" id="postcode" name="postcode" value="{{ $obprofile->postcode }}" class="form-control">
                                    @else
                                    <input type="text" id="postcode" name="postcode" value="" class="form-control">
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>@lang('insuredPerson.attr.pobox')</label>
                                    @if(!empty($obprofile) && $obprofile->pobox != '')
                                    <input type="text" id="pobox" name="pobox" value="{{ $obprofile->pobox }}" class="form-control">
                                    @else
                                    <input type="text" id="pobox" name="pobox" value="" class="form-control">
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>@lang('insuredPerson.attr.lockedbag')</label>
                                    @if(!empty($obprofile) && $obprofile->lockedbag != '')
                                    <input type="text" id="lockedbag" name="lockedbag" value="{{ $obprofile->lockedbag }}" class="form-control">
                                    @else
                                    <input type="text" id="lockedbag" name="lockedbag" value="" class="form-control">
                                    @endif
                                </div>
                            </div>
                            
                            
                        </div>
                        <div class='row'>
                            
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>@lang('insuredPerson.attr.wdt')</label>
                                    @if(!empty($obprofile) && $obprofile->wdt != '')
                                    <input type="text" id="wdt" name="wdt" value="{{ $obprofile->wdt }}" class="form-control">
                                    @else
                                    <input type="text" id="wdt" name="wdt" value="" class="form-control">
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>@lang('insuredPerson.attr.city')</label>
                                    @if(!empty($obprofile) && $obprofile->city != '')
                                    <input type="text" id="city" name="city" value="{{ $obprofile->city }}" class="form-control">
                                    @else
                                    <input type="text" id="city" name="city" value="" class="form-control">
                                    @endif
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
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>@lang('insuredPerson.attr.telNo')</label>
                                    @if(!empty($obprofile) && $obprofile->telno != '')
                                    <input type="text" id="telno" name="telno" value="{{ $obprofile->telno }}" class="form-control">
                                    @else
                                    <input type="text" id="telno" name="telno" value="" class="form-control">
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>@lang('insuredPerson.attr.mobileNo')</label>
                                    @if(!empty($obprofile) && $obprofile->mobileno != '')
                                    <input type="text" id="mobileno" name="mobileno" value="{{ $obprofile->mobileno }}" class="form-control">
                                    @else
                                    <input type="text" id="mobileno" name="mobileno" value="" class="form-control">
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>@lang('insuredPerson.attr.email')</label>
                                    @if(!empty($obprofile) && $obprofile->email != '')
                                    <input type="text" id="email" name="email" value="{{ $obprofile->email }}" class="form-control">
                                    @else
                                    <input type="text" id="email" name="email" value="" class="form-control">
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
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
                            <div class="form-actions">
                                <!--button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.cancel')</button>
                                <button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.clear')</button-->
                                <button type="submit" class="btn btn-success">
                                @lang('insuredPerson.save')</button>
                            </div>
                        <br/>
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

    

               
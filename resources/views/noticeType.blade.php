@extends('layouts.app')

@section('maintitle', 'Tab Screen')

@section('desc', 'Form')

@section('head')
<link href="{{ asset("bower_components/footable/css/footable.standalone.min.css")}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="/idno" method="post">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-body">
                        <h5 class="card-title">@lang('noticetype.title')</h5>
                        <hr>
                        <div class="row">
                            <div class="col-md-4">
                                @lang('noticetype.details')<br /><br />
                            </div>
                        </div>
                            <div class="row">
                                <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('noticetype.attr.id_type')</label>
                                    <select class="form-control custom-select" name='idtype' id='idtype' required>
                                        @foreach ($idtype as $id)
                                        @if (old('idtype') == $id->refcode)
                                        <option value="{{$id->refcode}}" selected>{{$id->descen}}</option>
                                        @else
                                        <option value="{{$id->refcode}}">{{$id->descen}}</option>
                                        @endif
                                        @endforeach
                                        <!--option value="">@lang('noticetype.attr.new_ic')</option>
                                        <option value="">@lang('noticetype.attr.old_ic')</option>
                                        <option value="">@lang('noticetype.attr.army_id')</option>
                                        <option value="">@lang('noticetype.attr.police_id')</option>
                                        <option value="">@lang('noticetype.attr.ssn_id')</option>
                                        <option value="">@lang('noticetype.attr.cid')</option-->
                                    </select>
                                </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('noticetype.attr.enter_ic')</label>
                                        <input type="text" name="idno" id='idno' class="form-control" value="{{ old('idno') }}" required>{{-- {{Session::get('idno')}} --}}
                                        <!--label class="" >{{Session::get('error')}}</label-->
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('employerDetails.attr.employerCode')</label>
                                    <input type="text" id='empcode' name="empcode" value="{{ old('empcode') }}" class="form-control">{{-- {{Session::get('empcode')}} --}}
                                    <!--label class="" >{{Session::get('error')}}</label-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/row-->
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">@lang('noticetype.attr.notice_type')</label>
                                 <select  name="notice_type" id='notice_type' class="form-control custom-select">
                                     @foreach ($noticetype as $nt)
                                     @if (old('notice_type') == $nt->refcode)
                                    <option value="{{$nt->refcode}}" selected>{{$nt->descen}}</option>
                                    @else
                                    <option value="{{$nt->refcode}}">{{$nt->descen}}</option>
                                    @endif
                                        @endforeach
                                    <!--option value="Accident Notice">@lang('noticetype.attr.accident_notice')</option>
                                    <option value="Occupational Decease Notice">@lang('noticetype.attr.od_notice')</option>
                                    <option value="Invalidity Notice">@lang('noticetype.attr.invalidity_notice')</option>
                                    <option value="Death Notice">@lang('noticetype.attr.death_notice')</option-->
                                   
                                </select>

                            </div>
                        </div>
                    </div>
                    <!--div class="form-actions">
                        
                    </div-->
                    <div class="form-actions">
                    
                        <div class="row">
                            <div class="col-md-4">
                        <!--button type="button" class="btn btn-inverse">@lang('noticetype.cancel')</button-->
                        <button type="submit" class="btn btn-success" onclick="checkmandatory()"> @lang('noticetype.next')</button>
                            </div>
                        </div>
                    
                    </div>
                    
                    @if(Session::get('messagent')) 
                    <br/>
                        <div class="card-footer">

                            <div class="alert alert-warning">
                                {{Session::get('messagent')}}
                            </div>

                        </div>
                        
                        @endif
                </form>
            </div>
        </div>
    </div>
</div>
<script>
function checkmandatory()
{
    var casetype = document.getElementById('notice_type').value;
    var empcodefld = document.getElementById('empcode');
    var idno = document.getElementById('idno').value;
    
    if (casetype == '01' || casetype == '02' || casetype == '04')
    {
        empcodefld.required = true;
    }
    else
    {
        empcodefld.required = false;
    }
    
    //alert(casetype);
}

</script>
@endsection

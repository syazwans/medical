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
                <form action="/accidentdatetime" method="post">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-body">
                        <h5 class="card-title">Accident Details</h5>
                        <hr>
                        <div class="row">
                           <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Date</label>
                                    <input type="date" class="form-control" name="date" value={{-- {{$checkaccddate->accddate}} --}}>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Time</label>
                                    <div class="input-group clockpicker" data-placement="bottom" data-align="top"
                                        data-autoclose="true">
                                        <input type="time" class="form-control" name="time" value={{-- {{$checkaccddate->accdtime}} --}}>
                                        
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">@lang('employerDetails.attr.employerCode')</label>
                                    <input type="text" class="form-control" name="empcode" id="empcode" value={{-- {{$checkaccddate->empcode}}>
                                </div>
                            </div>  --}}
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-md-3">
                    <div class="form-actions">
                        <button type="button" class="btn btn-secondary" onclick="window.location='/noticetype'">@lang('noticetype.cancel')</button>
                        <button type="submit" class="btn btn-success">
                            @lang('noticetype.next')</button>
                    </div>
                    </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

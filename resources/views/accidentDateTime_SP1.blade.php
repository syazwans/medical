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
                        <h3 class="card-title">Accident Details</h3>
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
                                        <input type="text" class="form-control" name="time" value={{-- {{$checkaccddate->accdtime}} --}}>
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="fa fa-clock-o"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i>
                            @lang('noticetype.next')</button>
                        <button type="button" class="btn btn-inverse">@lang('noticetype.cancel')</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

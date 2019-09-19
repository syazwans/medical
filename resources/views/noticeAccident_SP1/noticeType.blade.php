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
                <form action="/idno" id="idno" method="post">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-body">
                        <h3 class="card-title">@lang('noticetype.title')</h3>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                @lang('noticetype.details')<br /><br />
                                <div class="form-group">
                                    <label class="control-label">@lang('noticetype.attr.id_type')</label>
                                    <select class="form-control custom-select">
                                        <option value="">@lang('noticetype.attr.new_ic')</option>
                                        <option value="">@lang('noticetype.attr.old_ic')</option>
                                        <option value="">@lang('noticetype.attr.army_id')</option>
                                        <option value="">@lang('noticetype.attr.police_id')</option>
                                        <option value="">@lang('noticetype.attr.ssn_id')</option>
                                        <option value="">@lang('noticetype.attr.cid')</option>
                                    </select>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('noticetype.attr.enter_ic')</label>
                                    <input type="text" name="idno" class="form-control">{{-- {{Session::get('idno')}} --}}
                                    <label class="" >{{Session::get('error')}}</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/row-->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">@lang('noticetype.attr.notice_type')</label>
                                 <select  name="notice_type" class="form-control custom-select">
                                    <option value="Accident Notice">@lang('noticetype.attr.accident_notice')</option>
                                    <option value="Occupational Decease Notice">@lang('noticetype.attr.od_notice')</option>
                                    <option value="Invalidity Notice">@lang('noticetype.attr.invalidity_notice')</option>
                                    <option value="Death Notice">@lang('noticetype.attr.death_notice')</option>
                                   
                                </select>

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

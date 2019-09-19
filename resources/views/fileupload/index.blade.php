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
                <form action="" id="form_claim_notice_info">
                    <div class="form-body">
                        <h3 class="card-title">@lang('home.list_claim')</h3>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Enter IC Number">
                                </div>
                            </div>
                            <div class="col-md-6">
                            <button type="button" class="btn waves-effect waves-light btn-info">@lang('home.search')</button>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    
                                    <h6 class="card-subtitle"></h6>



                                    <div class="table-responsive">
                                        <table id="demo-foo-addrow"
                                            class="table table-bordered m-t-30 table-hover contact-list"
                                            data-paging="true" data-paging-size="7">
                                            <thead>
                                                    <tr>
                                                            <th>@lang('home.no')</th>
                                                            <th>@lang('home.date')</th>
                                                            <th>@lang('home.aging')</th>
                                                            <th>@lang('home.scheme_ref_no')</th>
                                                            <th>@lang('home.case_id')</th>
                                                            <th>@lang('home.desc')</th>
                                                            <th>@lang('home.action')</th>
            
                                                        </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                        <td>1</td>
                                                        <td>16/05/2019</td>
                                                        <td>2</td>
                                                        <td>A31NTK0520190002</a></td>
                                                        <td></td>
                                                        <td>Accident</td>
                                                    <td>
                                                    <button type="button" class="btn waves-effect waves-light btn-secondary">Scan</button>
                                                    <a href="/fileupload" class="btn waves-effect waves-light btn-info">Upload</a>
                                                    <button type="button" class="btn waves-effect waves-light btn-light">View</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                        <td>2</td>
                                                        <td>16/05/2019</td>
                                                        <td>2</td>
                                                        <td>A31NTK0520190001</a></td>
                                                        <td>A31HUK190000001</td>
                                                        <td>HUK Application</td>
                                                    <td>
                                                    <button type="button" class="btn waves-effect waves-light btn-secondary">Scan</button>
                                                    <a href="/fileupload" class="btn waves-effect waves-light btn-info">Upload</a>
                                                    <button type="button" class="btn waves-effect waves-light btn-light">View</button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('maintitle', 'Tab Screen')

@section('desc', 'Form')

@section('head')
<link href="{{ asset("bower_components/footable/css/footable.standalone.min.css")}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

<!-- Column -->

<div class="col-12">
    <div class="card card-body">
        <h4 class="card-title">Task Inbox</h4>
        <div class="message-box">
            <div class="message-widget">
                <!-- Message -->

                <div class="row p-t-20">

                <div class="col-md-3">
                        <div class="form-group">
                                <label class="control-label"><h3>@lang('home.search')</h3></label>
                            </div>
                </div>

                <div class="col-md-6"> </div>

                <div class="col-md-3">
                        <div class="form-group">
                            <a href="javascript:void(0)">
                                <div class="mail-contnet text-right">
                                    <h3><b>{{count($workbasket)}}</b></h3>
                                    <h5><b>@lang('home.total_task')</b></h5> {{-- <span class="mail-desc">Todays headlines : Breakdancing Grandma Proves ..</span> --}} </div>
                                </a>
                            </div>
                        </div>
                        
                </div>

                        <div class="row p-t-20">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label">@lang('home.date')</label>
                                        <input type="date" id="dateofbirth" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label">@lang('home.scheme_ref_no')</label>
                                        <input type="text" id="scheme_ref_no" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label">@lang('home.case_id')</label>
                                        <input type="text" id="dateofbirth" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <button type="button" class="btn btn-primary">@lang('home.search')</button>
                                    </div>
                                </div>
                        </div>
    
                               {{--  <h4 class="card-title">Responsive Table </h4>
                               <h6 class="card-subtitle">Create responsive tables by wrapping any <code>.table</code> in <code>.table-responsive </code></h6> --}}
                               <div class="col-12">
                                <div class="card">
                                        <div class="table-responsive m-t-40">
                                                <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                                    <thead>
                                                        <tr>
                                                            <th>@lang('home.no')</th>
                                                            <th>@lang('home.date')</th>
                                                            <th>@lang('home.aging')</th>
                                                            <th>@lang('home.scheme_ref_no')</th>
                                                            <th>@lang('home.case_id')</th>
                                                            <th>@lang('home.revision_ref_no')</th>
                                                            <th>@lang('home.med_ref_no')</th>
                                                            <th>@lang('home.rtw_ref_no')</th>
                                                            <th>@lang('home.desc')</th>
                                                        </tr>
                                                    </thead>
                                                    
                                                    <tbody>
                                                           
                                                        @foreach ($workbasket as $wb)
                                                        <tr>
                                                            <td>{{ $wb->wbid }}</td>
                                                            <td>{{substr($wb->date,6,2)}}-{{substr($wb->date,4,2)}}-{{substr($wb->date,0,4)}}</td>
                                                            <td><?php echo (date('Ymd') - $wb->date);?></td>
                                                            <td>{{ $wb->schemerefno }}</td>
                                                            <td>{{ $wb->caseid }}</td>
                                                            <td>{{ $wb->revisionrefno }}</td>
                                                            <td>{{ $wb->medrefno }}</td>
                                                            <td>{{ $wb->rtwrefno }}</td>
                                                            <td>{{ $wb->descen }}</td>
                                                            
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- row -->
        @endsection

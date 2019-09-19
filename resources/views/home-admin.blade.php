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
        <h4 class="card-title">Notification</h4>
        <div class="message-box">
            <div class="message-widget">
                <!-- Message -->
                <br>
                <div class="col-md-6">
                    <div class="form-group">
                        <a href="javascript:void(0)">
                            <div class="user-img"><span class="round bg-warning"><img src="PERKESO_UI\assets\images\alert.png"></span></div>
                            <div class="mail-contnet">
                                <h5>@lang('home.total_task')</h5> {{-- <span class="mail-desc">Todays headlines : Breakdancing Grandma Proves ..</span> --}} <span class="time">9:10 AM</span> </div>
                            </a>
                        </div>
                    </div>

                             {{-- <div class="card-body"> --}}
                                {{-- <h4 class="card-title">Pagination Footable</h4>
                                <h6 class="card-subtitle">Create your table with Paginated Footable</h6>
                                <div class="m-b-20">
                                    <button type="button" class="btn btn-info" data-page-size="10">10</button>
                                    <button type="button" class="btn btn-info" data-page-size="20">20</button>
                                    <button type="button" class="btn btn-info" data-page-size="30">30</button> --}}
                               {{--  </div>
                                <div class="table-responsive"> --}}
                                  {{--   <table id="demo-foo-pagination" class="table table-bordered toggle-arrow-tiny" data-sorting="true" data-paging="true" data-paging-size="5">
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
                                                <td><a href="javascript:void(0)"><div class="f-icon"><i class="fas fa-th-large"></i></div></a></td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>16/05/2019</td>
                                                <td>2</td>
                                                <td>A31NTK0520190001</a></td>
                                                <td>A31HUK190000001</td>
                                                <td>HUK Application</td>
                                                <td><a href="javascript:void(0)"><div class="f-icon"><i class="fas fa-th-large"></i></div></a></td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>16/05/2019</td>
                                                <td>2</td>
                                                <td>A31NTK0520190001</a></td>
                                                <td>A31HUK190000001</td>
                                                <td>HUK Application</td>
                                                <td><a href="javascript:void(0)"><div class="f-icon"><i class="fas fa-th-large"></i></div></a></td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>16/05/2019</td>
                                                <td>2</td>
                                                <td>A31NTK0520190001</a></td>
                                                <td>A31HUK190000001</td>
                                                <td>HUK Application</td>
                                                <td><a href="javascript:void(0)"><div class="f-icon"><i class="fas fa-th-large"></i></div></a></td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>16/05/2019</td>
                                                <td>2</td>
                                                <td>A31NTK0520190001</a></td>
                                                <td>A31HUK190000001</td>
                                                <td>HUK Application</td>
                                                <td><a href="javascript:void(0)"><div class="f-icon"><i class="fas fa-th-large"></i></div></a></td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>16/05/2019</td>
                                                <td>2</td>
                                                <td>A31NTK0520190001</a></td>
                                                <td>A31HUK190000001</td>
                                                <td>HUK Application</td>
                                                <td><a href="javascript:void(0)"><div class="f-icon"><i class="fas fa-th-large"></i></div></a></td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>16/05/2019</td>
                                                <td>2</td>
                                                <td>A31NTK0520190001</a></td>
                                                <td>A31HUK190000001</td>
                                                <td>HUK Application</td>
                                                <td><a href="javascript:void(0)"><div class="f-icon"><i class="fas fa-th-large"></i></div></a></td>
                                            </tr>
                                            <tr>
                                                <td>8</td>
                                                <td>16/05/2019</td>
                                                <td>2</td>
                                                <td>A31NTK0520190001</a></td>
                                                <td>A31HUK190000001</td>
                                                <td>HUK Application</td>
                                                <td><a href="javascript:void(0)"><div class="f-icon"><i class="fas fa-th-large"></i></div></a></td>
                                            </tr>
                                            <tr>
                                                <td>9</td>
                                                <td>16/05/2019</td>
                                                <td>2</td>
                                                <td>A31NTK0520190001</a></td>
                                                <td>A31HUK190000001</td>
                                                <td>HUK Application</td>
                                                <td><a href="javascript:void(0)"><div class="f-icon"><i class="fas fa-th-large"></i></div></a></td>
                                            </tr>
                                            <tr>
                                                <td>10</td>
                                                <td>16/05/2019</td>
                                                <td>2</td>
                                                <td>A31NTK0520190001</a></td>
                                                <td>A31HUK190000001</td>
                                                <td>HUK Application</td>
                                                <td><a href="javascript:void(0)"><div class="f-icon"><i class="fas fa-th-large"></i></div></a></td>
                                            </tr>
                                            <tr>
                                                <td>11</td>
                                                <td>16/05/2019</td>
                                                <td>2</td>
                                                <td>A31NTK0520190001</a></td>
                                                <td>A31HUK190000001</td>
                                                <td>HUK Application</td>
                                                <td><a href="javascript:void(0)"><div class="f-icon"><i class="fas fa-th-large"></i></div></a></td>
                                            </tr> --}}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @endsection

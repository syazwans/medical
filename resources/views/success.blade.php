@extends('layouts.app')

@section('maintitle', 'Tab Screen')

@section('desc', 'Form')

@section('head')
<link href="{{ asset("bower_components/footable/css/footable.standalone.min.css")}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

<!-- Column -->

<div class="my-5 my-md-7">
    <div class="container">
        <form action="/backhome" method="POST">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="row">
                <div class="col-md-12 ">
                    <div class="greyGroup text-center">
                      <div class="row">
                        <div class="col-md-5 messageScreen">
                            <br><br><br><h3 class="text-center" ><i class="fa fa-check-circle fa-2x greenColor"></i><br> 
                              <br>Case has been submitted successfully.</h3>
                        </div>
                        <div class="card-footer col-md-7">
                            <div class=" text-right">
                                <div class="card-body">
                                    <div class='row'>
                                        <label class="form-label">
                                            <h5>Scheme Ref No:</h5>
                                        </label>
                                        <label class="form-label">
                                            <h5><strong>{{Session::get('schemerefno')}}</strong></h5>
                                        </label>
                                    </div>
                                    <div class='row'>
                                        <label class="form-label">
                                            <h5>Case Status:</h5>
                                        </label>
                                        @if (Session::get('casestatus') == '02')
                                        <label class="form-label">
                                            <h5><strong>New</strong></h5>
                                        </label>
                                        @elseif (Session::get('casestatus') == '100')
                                        <label class="form-label">
                                            <h5><strong>Closed</strong></h5>
                                        </label>
                                        @endif
                                    </div>
                                    <div class='row'>
                                        <label class="form-label">
                                            <h5>Source:</h5>
                                        </label>
                                        <label class="form-label">
                                            <h5><strong>{{Session::get('source')}}</strong></h5>
                                        </label>
                                    </div>
                                    <br><br>
                                    <div class="d-flex">
                                        <!--a href="./home" class="btn btn-success">OK</a-->
                                        <button type="submit" class="btn btn-success">OK</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div> 
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
</div>
<!-- row -->
@endsection
{{-- <div class="card">
                <div class="card-status bg-blue"></div> 
                 <div class="card-header">
                    <h5 class="card-title">CASE HAS BEEN SUBMITTED SUCCESSFULLY</h5>
                    <div class="card-options">
                      <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                    </div>
                </div>
                </div> --}}

@extends('layouts.app')

@section('maintitle', 'Tab Screen')

@section('desc', 'Form')

@section('head')
<link href="{{ asset("bower_components/footable/css/footable.standalone.min.css")}}" rel="stylesheet" type="text/css" />
<link rel="icon" type="image/png" sizes="16x16" href="PERKESO_UI/assets/images/favicon.png">


@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Upload Your Supported Document</h4>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            

                            <input type="file" id="input-file-now" class="dropify" />
                        </div>
                    </div>
                </div>
                <div class="form-group text-center" >
                      
                    <div class="col-md-1" >
                        <button type="button" class="btn btn-rounded btn-block btn-outline-success ">Upload</button>
                    </div>

                </div>
            </div>

        </div>

    </div>
</div>


@endsection

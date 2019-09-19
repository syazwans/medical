@extends('layouts.app')

@section('maintitle', 'Tab Screen')

@section('desc', 'Form')

@section('head')
<link href="{{ asset("bower_components/footable/css/footable.standalone.min.css")}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
<div class="row">
<div class="col-12">
        <div class="card-body">
            <form action="/">
                <div class="form-body">
                    <h3 class="card-title">CLAIM & NOTICE INFO</h3>
                    <hr>
                    <div class="row">
                            <div class="col-md-6">
                                Please fill in these information: <br/><br/>
                                <div class="form-group">
                                    <label class="control-label">Identification Type</label>
                                    <select class="form-control custom-
                                    ;select">
                                    <option value="">New IC</option>
                                    <option value="">Old IC</option>
                                    <option value="">Army ID</option>
                                    <option value="">Police ID</option>
                                    <option value="">Social Security Number ID (SSN)</option>
                                    <option value="">CID</option>
                                </select>
                            </div>
                        </div>	
                    </div>
                    <div class="row">
                            <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Enter IC Number">
                                    </div>
                                </div>
                            </div>
                </div>
                <!--/row-->
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Notice Type</label>
                                <div class="custom-control custom-radio col-md-6">
                                    <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio1">Accident Notice</label>
                                </div>
                                <div class="custom-control custom-radio col-md-6">
                                    <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio2">Occupational Decease Notice</label>
                                </div>
                                <div class="custom-control custom-radio col-md-6">
                                    <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio3">Invalidity Notice</label>
                                </div>
                                <div class="custom-control custom-radio col-md-6">
                                    <input type="radio" id="customRadio4" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio4">Death Notice</label>
                                </div>
                        </div>
                    </div>
                </div>

                <div class="form-actions">
                    <button type="button" class="btn btn-inverse">Cancel</button>
                    <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Next</button>
                <div>
            </form>
        </div>
    </div>
</div>
@endsection
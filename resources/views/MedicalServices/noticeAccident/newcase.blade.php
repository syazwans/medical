@extends('layouts.app')



@section('head')
<!-- page css -->
<link href="/PERKESO_UI/horizontal-nav-fullwidth/dist/css/pages/tab-page.css" rel="stylesheet">
<link href="/PERKESO_UI/assets/node_modules/wizard/steps.css" rel="stylesheet">
<!--alerts CSS -->
<link href="/PERKESO_UI/assets/node_modules/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">
<link href="/PERKESO_UI/assets/node_modules/datatables/media/css/dataTables.bootstrap4.css" rel="stylesheet">
<link href="/PERKESO_UI/assets/node_modules/select2/dist/css/select2.min.css" rel="stylesheet" type="text/css" />
<link href="/PERKESO_UI/assets/node_modules/multiselect/css/multi-select.css" rel="stylesheet" type="text/css" />
@endsection



@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="#">
                    <div class="form-body">
                        <h4 class="card-title">@lang('New Case')</h4>
                        <hr>
                        <div id="accordion1" role="tablist" aria-multiselectable="true">
                            <div class="card">
                                <div class="card-header" role="tab" id="heading1">
                                    <h5 class="mb-0">
                                        <a class="link" data-toggle="collapse" data-parent="#accordion1"
                                            href="#collapse1" aria-expanded="true" aria-controls="collapse1"><i
                                                class="fa fa-plus"></i>
                                            Requestor Details
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapse1" class="collapse show" role="tabpanel" aria-labelledby="heading1">
                                    <div class="card-body">
                                        <div class="form-body">
                                                <div class="row p-t-20">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
        
                                                                <label class="control-label">@lang('Requestor Ref. No. :')</label>
        
                                                                <div class="input-group ">
                                                                    <input type="text" value="" class="form-control" >
        
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
        
                                                                <label class="control-label">@lang('Request Received date :')</label>
                                                                <div class="input-group">
                                                                    <input type="text" id="date" class="form-control mydatepicker " placeholder="mm/dd/yyyy">
                                                                </div>
                    
                                                            </div>
                                                        </div>
                                                    </div>
                                            <div class="row p-t-20">
                                                <div class="col-md-6">
                                                    <div class="form-group">

                                                        <label class="control-label">@lang('Requestor Name :')</label>

                                                        <div class="input-group ">
                                                            <input type="text" value="" class="form-control" >

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">

                                                        <label class="control-label">@lang('Requestor Designation :')</label>
                                                        <input type="text" value="" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="row p-t-20">
                                                <div class="col-md-6">
                                                    <div class="form-group">

                                                        <label class="control-label">@lang('Email :')</label>
                                                        <input type="text" value="" class="form-control" >
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">

                                                        <label class="control-label">@lang('Source :')</label>
                                                        <input type="text" value="" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label">@lang('Remarks :')</label>
                                                        <input type="text" value="" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 offset-6">
                                                    <a class="btn btn waves-effect waves-light btn-success a1"
                                                        data-toggle="collapse" data-target="#collapse1,#collapse2"
                                                        aria-expanded="true" aria-controls="collapse1">
                                                        Next
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card ">
                                <div class="card-header" role="tab" id="heading2">
                                    <h5 class="mb-0">
                                        <a class="collapsed link" data-toggle="collapse" data-parent="#accordion1"
                                            href="#collapse2" aria-expanded="false" aria-controls="collapse2"><i
                                                class="fa fa-plus"></i>
                                            Benefit Case Summary
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapse2" class="collapse " role="tabpanel" aria-labelledby="heading2">
                                    <div class="card-body">
                                        <div class="form-body">
                                            <div class="row p-t-20">
                                                <div class="col-md-8">
                                                    <div class="form-group">

                                                        <label class="control-label">@lang('Search By
                                                            :')</label>
                                                        <div class="input-group ">
                                                            <input type="text" value="" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">

                                                        <label class="control-label">@lang('ID No. :')</label>
                                                        <input type="text" value="" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row p-t-20">
                                                <div class="col-12">
                                                    <div class="table-responsive">
                                                        <table id="demo-foo-row-toggler" class="table table-bordered"
                                                            data-toggle-column="first">
                                                            <thead>
                                                                <th>Select</th>
                                                                <th>No</th>
                                                                <th>Notice Date</th>
                                                                <th>Notice Type</th>
                                                                <th>Scheme Reference No.</th>
                                                                <th>Benefit Reference No.</th>
                                                                <th>View</th>
                                                            </thead>
                                                            <tbody>
                                                                <td><input type="checkbox" name="select" value="select"></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 offset-6">
                                                <a class="btn btn waves-effect waves-light btn-success a1"
                                                    data-toggle="collapse" data-target="#collapse2,#collapse3"
                                                    aria-expanded="true" aria-controls="collapse2">
                                                    Next
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card ">
                                <div class="card-header" role="tab" id="heading3">
                                    <h5 class="mb-0">
                                        <a class="collapsed link" data-toggle="collapse" data-parent="#accordion1"
                                            href="#collapse3" aria-expanded="false" aria-controls="collapse3"><i
                                                class="fa fa-plus"></i>
                                            Insured Person Details
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapse3" class="collapse" role="tabpanel" aria-labelledby="heading3">
                                    <div class="card-body">
                                        <div class="form-body">
                                            <div class="row p-t-20">
                                                <div class="col-md-6">
                                                    <div class="form-group">

                                                        <label class="control-label">@lang('Insured Person
                                                            Name:')</label>
                                                        <div class="input-group ">
                                                            <input type="text" value="" class="form-control" readonly>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">

                                                        <label class="control-label">@lang('Identification No
                                                            :')</label>
                                                        <div class="input-group ">
                                                            <input type="text" value="" class="form-control" readonly>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row p-t-20">
                                                <div class="col-md-6">
                                                    <div class="form-group">

                                                        <br>
                                                        <label class="control-label">@lang('Occupation :')</label>
                                                        <input type="text" value="" class="form-control" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">

                                                        <br>
                                                        <label class="control-label">@lang('Job Description :')</label>
                                                        <input type="text" value="" class="form-control" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 offset-6">
                                                <a class="btn btn waves-effect waves-light btn-success a1"
                                                    data-toggle="collapse" data-target="#collapse3,#collapse4"
                                                    aria-expanded="true" aria-controls="collapse3">
                                                    Next
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card ">
                                <div class="card-header" role="tab" id="heading4">
                                    <h5 class="mb-0">
                                        <a class="collapsed link" data-toggle="collapse" data-parent="#accordion1"
                                            href="#collapse4" aria-expanded="false" aria-controls="collapse4"><i
                                                class="fa fa-plus"></i>
                                            Employer Details
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapse4" class="collapse" role="tabpanel" aria-labelledby="heading4">
                                    <div class="card-body">
                                        <div class="form-body">
                                            <div class="row p-t-20">
                                                <div class="col-md-12">
                                                    <div class="form-group">

                                                        <label class="control-label">@lang('Employer Name:')</label>
                                                        <div class="input-group ">
                                                            <input type="text" value="" class="form-control" readonly>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">

                                                        <label class="control-label">@lang('Industries Code :')</label>
                                                        <div class="input-group ">
                                                            <input type="text" value="" class="form-control" readonly>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">@lang('Type of Industry :')</label>
                                                        <input type="text" value="" class="form-control" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 offset-6">
                                                <a class="btn btn waves-effect waves-light btn-success a1"
                                                    data-toggle="collapse" data-target="#collapse4,#collapse5"
                                                    aria-expanded="true" aria-controls="collapse4">
                                                    Next
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card ">
                                <div class="card-header" role="tab" id="heading5">
                                    <h5 class="mb-0">
                                        <a class="collapsed link" data-toggle="collapse" data-parent="#accordion1"
                                            href="#collapse5" aria-expanded="false" aria-controls="collapse5"><i
                                                class="fa fa-plus"></i>
                                            Accident Details
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapse5" class="collapse" role="tabpanel" aria-labelledby="heading5">
                                    <div class="card-body">
                                        <div class="form-body">
                                            <div class="row p-t-20">
                                                <div class="col-md-12">
                                                    <div class="form-group">

                                                        <label class="control-label">@lang('Injury
                                                            Description:')</label>

                                                        <textarea type="text" rows="7" class="form-control"
                                                            readonly></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 offset-6">
                                                    <a class="btn btn waves-effect waves-light btn-success a1">
                                                        Submit
                                                    </a>
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
</div>

@endsection

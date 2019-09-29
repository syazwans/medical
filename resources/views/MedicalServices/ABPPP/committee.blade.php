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
                    <div class="form-body" id="factCase">
                        <h4 class="card-title">@lang('Case Fact Information')</h4>
                        <hr>
                        <div id="accordion1" role="tablist" aria-multiselectable="true">
                            <div class="card">
                                <div class="card-header" role="tab" id="headingOne1">
                                    <h5 class="mb-0">
                                        <a class="link" data-toggle="collapse" data-parent="#accordion1"
                                            href="#collapseOne1" aria-expanded="true" aria-controls="collapseOne"><i
                                                class="fa fa-plus"></i>
                                                Refer to Committee Board
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseOne1" class="collapse show" role="tabpanel"
                                    aria-labelledby="headingOne1">
                                    <div class="card-body">
                                        <div class="form-body">
                                            <div class="row p-t-20">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label">@lang('Case No. :')</label>
                                                        <div class="input-group ">
                                                            <input type="text" value="" class="form-control" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <br>
                                                        <label class="control-label">@lang('Name :')</label>
                                                        <input type="text" value="" class="form-control" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label">@lang('ID No. :')</label>
                                                        <input type="text" value="" class="form-control" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label">@lang('Age :')</label>
                                                        <input type="text" value="" class="form-control" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label">@lang('Gender :')</label>
                                                        <input type="text" value="" class="form-control" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label">@lang('Job :')</label>
                                                        <input type="text" value="" class="form-control" >
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label">@lang('Diagnosis :')</label>
                                                        <textarea type="text" rows="5" class="form-control"
                                                            ></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="control-label">@lang('Notice Date :')</label>
                                                        <input type="text" value="" class="form-control" >
                                                    </div>
                                                </div>
                                                <div class="col-md-6 offset-6">
                                                    <a class=" btn btn waves-effect waves-light btn-success a1"
                                                        data-toggle="collapse" data-target="#collapseOne1,#collapseTwo2"
                                                        aria-expanded="true" aria-controls="collapseOne1">
                                                        Next
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card ">
                                <div class="card-header" role="tab" id="headingTwo2">
                                    <h5 class="mb-0">
                                        <a class="collapsed link" data-toggle="collapse" data-parent="#accordion1"
                                            href="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2"><i
                                                class="fa fa-plus"></i>
                                            Case Fact Details
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseTwo2" class="collapse " role="tabpanel" aria-labelledby="headingTwo2">
                                    <div class="card-body">
                                        <div class="form-body">
                                            <div class="row p-t-20">
                                                <div class="col-12">
                                                    <div class="table-responsive">
                                                        <table id="demo-foo-row-toggler" class="table table-bordered"
                                                            data-toggle-column="first">
                                                            <thead>
                                                                <th>Notice Date</th>
                                                                <th>Notice Type</th>
                                                                <th>Scheme Ref. No.</th>
                                                                <th>Benefit Ref. No.</th>
                                                                <th>View</th>
                                                            </thead>
                                                            <tbody>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>
                                                                    <div class="input-group-append">
                                                                        <span class="input-group-text"
                                                                            style="background-color: #d8e8e9;"><a
                                                                                class="get-code" href="#tt1"
                                                                                aria-expanded="true"><i
                                                                                    class="fas fa-file-alt" title="Scheme Case/Supporting Doc
                                                                            " data-toggle="tooltip"></i></a></span>
                                                                        &nbsp;<span class="input-group-text"
                                                                            style="background-color: #d8e8e9;"><a
                                                                                class="get-code" href="#tt1"
                                                                                aria-expanded="true"><i
                                                                                    class="fas fa-info-circle" title="Opinion Details
                                                                            " data-toggle="tooltip"></i></a></span>
                                                                        &nbsp;<span class="input-group-text"
                                                                            style="background-color: #d8e8e9;"><a
                                                                                class="get-code" href="#tt1"
                                                                                aria-expanded="true"><i
                                                                                    class="fas fa-handshake" title="RTW Social Economic Report
                                                                            " data-toggle="tooltip"></i></a></span>
                                                                        &nbsp;<span class="input-group-text"
                                                                            style="background-color: #d8e8e9;"><a
                                                                                class="get-code" href="#tt1"
                                                                                aria-expanded="true"><i class="fas fa-users"
                                                                                    title="RTW Report
                                                                            " data-toggle="tooltip"></i></a></span>
                                                                    </div>
                                                                </td>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 offset-6">
                                                    <a class="btn btn waves-effect waves-light btn-success a1"
                                                        data-toggle="collapse"
                                                        data-target="#collapseTwo2,#collapseThree3"
                                                        aria-expanded="true" aria-controls="collapsetwo">
                                                        Next
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card ">
                                <div class="card-header" role="tab" id="headingThree3">
                                    <h5 class="mb-0">
                                        <a class="collapsed link" data-toggle="collapse" data-parent="#accordion1"
                                            href="#collapseThree3" aria-expanded="false" aria-controls="collapseThree3"><i
                                                class="fa fa-plus"></i>
                                                Medical Board Decision
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseThree3" class="collapse" role="tabpanel" aria-labelledby="headingThree3">
                                    <div class="card-body">
                                        <div class="form-body">
                                            <div class="row p-t-20">
                                                <div class="col-12">
                                                    <div class="table-responsive">
                                                        <table id="demo-foo-row-toggler" class="table table-bordered"
                                                            data-toggle-column="first">
                                                            <thead>
                                                                <th>No.</th>
                                                                <th>Scheme Ref. No.</th>
                                                                <th>MB Date</th>
                                                                <th>MB Category</th>
                                                                <th>Diagnosis</th>
                                                                <th>Result</th>
                                                                <th>View</th>
                                                            </thead>
                                                            <tbody>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>
                                                                    <div class="input-group-append">
                                                                        <span class="input-group-text"
                                                                            style="background-color: #d8e8e9;"><a
                                                                                class="get-code" href="#tt1"
                                                                                aria-expanded="true"><i
                                                                                    class="fas fa-file-alt" title="All Details + Supporting Doc
                                                                            " data-toggle="tooltip"></i></a></span>
                                                                    </div>
                                                                </td>
                                                            </tbody>
                                                        </table>
                                                        <div class="col-md-6 offset-6">
                                                            <a class="btn btn waves-effect waves-light btn-success a1"
                                                                data-toggle="collapse"
                                                                data-target="#collapseThree3,#collapseFour4"
                                                                aria-expanded="true" aria-controls="collapsefour">
                                                                Next
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="card ">
                                    <div class="card-header" role="tab" id="headingFour4">
                                        <h5 class="mb-0">
                                            <a class="collapsed link" data-toggle="collapse" data-parent="#accordion1"
                                                href="#collapseFour4" aria-expanded="false" aria-controls="collapseFour4"><i
                                                    class="fa fa-plus"></i>
                                                    Rehab Supply History
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseFour4" class="collapse" role="tabpanel" aria-labelledby="headingFour4">
                                        <div class="card-body">
                                            <div class="form-body">
                                                <div class="row p-t-20">
                                                    <div class="col-12">
                                                            <div class="table-responsive">
                                                                <table id="demo-foo-row-toggler" class="table table-bordered"
                                                                    data-toggle-column="first">
                                                                    <thead>
                                                                        <th>Bill</th>
                                                                        <th>Type of Equipment</th>
                                                                        <th>Diagnosis</th>
                                                                        <th>Date Of Delivery</th>
                                                                        <th>Total (RM)</th>
                                                                    </thead>
                                                                    <tbody>
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
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <div class="card-body">
                                    <div class="form-body">
                                        <div class="row p-t-20">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label">@lang('Opinion :')</label>
                                                    <input type="text" value="" class="form-control" >
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label">@lang('Recommendation  q :')</label>
                                                    <input type="text" value="" class="form-control" >
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label">@lang('Prepare By :')</label>
                                                    <input type="text" value="" class="form-control" >
                                                </div>
                                            </div>
                                              <div class="col-md-2">
                                                <div class="form-group">
                                                    <label class="control-label">@lang('Date :')</label>
                                                    <input type="text" value="" class="form-control" >
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
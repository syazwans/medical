<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="#">
                    <div class="form-body">
                        <h4 class="card-title">@lang('Committee')</h4>
                        <div class="modal-body">
                            <div class="card-body">
                                <div class="col-md-4">
                                    <div class="form-group">

                                        <label class="control-label">@lang('Meeting Reference No. :')</label>
                                        <div class="input-group ">
                                            <input type="text" class="form-control" id="commit_no">
                                            <div class="input-group-append">
                                            <span class="input-group-text" style="background-color: #d8e8e9;"><i
                                                    class="ti-search"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row p-t-20">
                                    <div class="col-12">
                                        <div class="table-responsive">
                                            <table id="committeeTable" class="table table-bordered" data-toggle-column="first">
                                                <thead>
                                                    <th>Meeting Reference No.</th>
                                                    <th>Date time</th>
                                                    <th>No of case</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </thead>
                                                <tbody>
                                                    <td>OD001/19</td>
                                                    <td>950</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td><div class="input-group-append">
                                                    <a id="view" onclick="committeeHideShow();" aria-expanded="true"><i class="fas fa-file-alt" title="View" data-toggle="tooltip"></i></a>

                                                    </div></td>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <div class="row p-t-20">
                                    <div class="col-12">
                                        <div class="table-responsive" id="showTable" style="display:none;">
                                            <table id="table1" class="table table-bordered" 
                                                data-toggle-column="first">
                                                <thead>
                                                    <th>No.</th>
                                                    <th>Insured Person Name</th>
                                                    <th>Identification No.</th>
                                                    <th>Notice Type</th>
                                                    <th>MO Name</th>
                                                    <th>Action</th>
                                                </thead>
                                                <tbody>
                                                    <td>SYAHIRAH</td>
                                                    <td>950</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td><div class="input-group-append">
                                                    <a id="view" onclick="showAccordion();" aria-expanded="true"><i class="fas fa-file-alt" title="View" data-toggle="tooltip"></i></a>

                                                    </div></td>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="accordionShow" role="tablist" aria-multiselectable="true"  style="display:none;">
                                <div class="card" >
                                    <div class="card-header" role="tab" id="headingOne">
                                        <h5 class="mb-0">
                                            <a class="link" data-toggle="collapse" data-parent="#accordion1"
                                                href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><i
                                                    class="fa fa-plus"></i>
                                                Committtee Board: Case Summary
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseOne" class="collapse " role="tabpanel"
                                        aria-labelledby="headingOne">
                                        <div class="card-body">
                                            <div class="form-body">
                                                <div class="row p-t-20">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label">@lang('Case No. :')</label>
                                                            <input type="text" value="" class="form-control" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="control-label">@lang('Name :')</label>
                                                            <input type="text" value="" class="form-control" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label">@lang('ID No. :')</label>
                                                            <input type="text" value="" class="form-control" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="control-label">@lang('Age :')</label>
                                                            <input type="text" value="" class="form-control" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="control-label">@lang('Gender :')</label>
                                                            <input type="text" value="" class="form-control" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="control-label">@lang('Job :')</label>
                                                            <input type="text" value="" class="form-control" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label">@lang('Notice Date :')</label>
                                                            <input type="date" value="" class="form-control" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label">@lang('Table 5, AKSP, 1996
                                                                :')</label>
                                                            <input type="text" value="" class="form-control" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label">@lang('Diagnosis :')</label>
                                                            <input type="text" value="" class="form-control" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label">@lang('Medical
                                                                Problem')</label>
                                                            <input type="text" value="" class="form-control" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 offset-6">
                                                        <a class=" btn btn waves-effect waves-light btn-success a1"
                                                            data-toggle="collapse"
                                                            data-target="#collapseOne,#collapseTwo" aria-expanded="true"
                                                            aria-controls="collapseOne1">
                                                            Next
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            
                            <div class="card ">
                                <div class="card-header" role="tab" id="headingTwo">
                                    <h5 class="mb-0">
                                        <a class="collapsed link" data-toggle="collapse" data-parent="#accordion1"
                                            href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"><i
                                                class="fa fa-plus"></i>
                                            Employment History
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="card-body">
                                        <div class="form-body">
                                            <div class="row p-t-20">
                                                <div class="col-12">
                                                    <div class="table-responsive">
                                                        <table id="demo-foo-row-toggler" class="table table-bordered"
                                                            data-toggle-column="first">
                                                            <thead>
                                                                <th>No.</th>
                                                                <th>Start Date</th>
                                                                <th>End Date</th>
                                                                <th>Employer Code</th>
                                                                <th>Employer Name</th>
                                                                <th>Occupation</th>
                                                                <th>Type Of Industry</th>
                                                            </thead>
                                                            <tbody>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                            </tbody>
                                                        </table>
                                                        <div class="col-md-6 offset-6">
                                                            <a class="btn btn waves-effect waves-light btn-success a1"
                                                                data-toggle="collapse"
                                                                data-target="#collapseTwo,#collapseThree"
                                                                aria-expanded="true" aria-controls="collapseTwo22">
                                                                Next
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card ">
                                <div class="card-header" role="tab" id="headingThree">
                                    <h5 class="mb-0">
                                        <a class="collapsed link" data-toggle="collapse" data-parent="#accordion1"
                                            href="#collapseThree" aria-expanded="false" aria-controls="collapseThree"><i
                                                class="fa fa-plus"></i>
                                            Benefit History
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="card-body">
                                        <div class="form-body">
                                            <div class="row p-t-20">
                                                <div class="col-12">
                                                    <div class="table-responsive">
                                                        <table id="demo-foo-row-toggler" class="table table-bordered"
                                                            data-toggle-column="first">
                                                            <thead>
                                                                <th>No.</th>
                                                                <th>Notice Date</th>
                                                                <th>Notice Type</th>
                                                                <th>Scheme Ref. No.</th>
                                                                <th>Benefit Ref. No.</th>
                                                            </thead>
                                                            <tbody>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                            </tbody>
                                                        </table>
                                                        <div class="col-md-6 offset-6">
                                                            <a class="btn btn waves-effect waves-light btn-success a1"
                                                                data-toggle="collapse"
                                                                data-target="#collapseThree,#collapseFour"
                                                                aria-expanded="true" aria-controls="collapseTwo22">
                                                                Next
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card ">
                                <div class="card-header" role="tab" id="headingFour">
                                    <h5 class="mb-0">
                                        <a class="collapsed link" data-toggle="collapse" data-parent="#accordion1"
                                            href="#collapseFour" aria-expanded="false" aria-controls="collapseFour"><i
                                                class="fa fa-plus"></i>
                                            Medical Board History
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour">
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
                                                            </thead>
                                                            <tbody>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                            </tbody>
                                                        </table>
                                                        <div class="col-md-6 offset-6">
                                                            <a class="btn btn waves-effect waves-light btn-success a1"
                                                                data-toggle="collapse"
                                                                data-target="#collapseFour,#collapseFive"
                                                                aria-expanded="true" aria-controls="collapseTwo22">
                                                                Next
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card ">
                                <div class="card-header" role="tab" id="headingFive">
                                    <h5 class="mb-0">
                                        <a class="collapsed link" data-toggle="collapse" data-parent="#accordion1"
                                            href="#collapseFive" aria-expanded="false" aria-controls="collapseFive"><i
                                                class="fa fa-plus"></i>
                                            Rehab Supply History
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseFive" class="collapse" role="tabpanel" aria-labelledby="headingFive">
                                    <div class="card-body">
                                        <div class="form-body">
                                            <div class="row p-t-20">
                                                <div class="col-12">
                                                    <div class="table-responsive">
                                                        <table id="demo-foo-row-toggler" class="table table-bordered"
                                                            data-toggle-column="first">
                                                            <thead>
                                                                <th>Bill</th>
                                                                <th>Type Of Equipment</th>
                                                                <th>Diagnosis</th>
                                                                <th>Date Of Delivery</th>
                                                                <th>Total(RM)</th>
                                                            </thead>
                                                            <tbody>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                            </tbody>
                                                        </table>
                                                        <div class="card-body">
                                                            <div class="form-body">
                                                                <div class="row p-t-20">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label class="control-label">@lang('Opinion
                                                                                :')</label>
                                                                            <input type="text" value=""
                                                                                class="form-control">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label
                                                                                class="control-label">@lang('Recommendation
                                                                                :')</label>
                                                                            <input type="text" value=""
                                                                                class="form-control">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label class="control-label">@lang('Prepare
                                                                                By :')</label>
                                                                            <input type="text" value=""
                                                                                class="form-control">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <div class="form-group">
                                                                            <label class="control-label">@lang('Date
                                                                                :')</label>
                                                                            <input type="text" value=""
                                                                                class="form-control">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 offset-6">
                                                            <a class="btn btn waves-effect waves-light btn-success a1"
                                                                data-toggle="collapse"
                                                                data-target="#collapseFour,#collapseFive"
                                                                aria-expanded="true" aria-controls="collapseTwo22">
                                                                Next
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                @include('MedicalServices.ABPPP.appointment.medical_opinion_committee')
                            </div>
                           
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>




<script type="text/javascript">
    function committeeHideShow(){
            $('#showTable').show();
    }

    function showAccordion(){
            $('#accordionShow').show();
    }
</script>

<!-- <script>
function show(nr) {
    document.getElementById("table1").style.display="none";
    document.getElementById("table"+nr).style.display="block";
}

<script> -->
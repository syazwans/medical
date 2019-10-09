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
                                                    <td>
                                                    <a id='view' href="/previewCommittee"><i class="fas fa-file-alt"></i></a>
                                                    <!-- <div class="input-group-append"><a id="view" onclick="showAccordion();" aria-expanded="true"><i class="fas fa-file-alt" title="View" data-toggle="tooltip"></i></a></div></td> -->
                                                </tbody>
                                            </table>
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
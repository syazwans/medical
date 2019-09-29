<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="#">
                    <div class="form-body">
                        <h4 class="card-title">@lang('Employability Report')</h4>
                        <div class="modal-body">
                            <div class="card-body">
                                <div class="row p-t-20">
                                <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Notice Type :</label>
                                            <input type="text" value="" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Scheme Reference No :</label>
                                            <input type="text" value="" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">Name :</label>
                                            <input type="text" value="" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">@lang('ID No. :')</label>
                                            <input type="text" value="" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">@lang('Investigation Date :')</label>
                                            <input type="text" value="" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">@lang('Place :')</label>
                                            <select class="form-control" name="moreinfo" id="moreinfo">
                                        <option value="PS" hidden selected readonly>Please Select</option>
                                        <option value="Y"></option>
                                        <option value="N"></option>
                                    </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 offset-6">
                                            <a class="btn-success link a1" id="btn_moei_investigation" data-toggle="modal"
                                                data-whatever="@getbootstrap" aria-expanded="true">
                                                Add Row 
                                            </a>
                                        </div>
                                    <div class="table-responsive m-t-40">
                                    <table id="myTable_moei_investigation" class="table table-bordered table-striped">
                                        <thead style="background-color:skyblue;">
                                            <tr>
                                                <th>No.</th>
                                                <th>Claim History</th>
                                                <th>Job History</th>
                                                <th>Family/Social History</th>
                                                <th>Medical History</th>
                                                <th>Diagnosis</th>
                                                <th>5th Schedule</th>
                                            </tr>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr id="moei1">
                                                <td style="display:none;"><input type="hidden" value="1"></td>
                                                <td>1</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td>
                                                <select class="form-control" name="moreinfo" id="moreinfo">
                                                <option value="PS" hidden selected readonly>Please Select</option>
                                                <option value="Y">Yes</option>
                                                <option value="N">No</option>
                                                <option value="N">Not Applicable</option>
                                                </select>
                                            </td>
                                            </tr>
                                        </tbody>
                                        <tbody>
                                            <tr id="moei2">
                                                <td style="display:none;"><input type="hidden" value="2">>2</td>
                                                <td>2</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        </tbody>                                       
                                    </table>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Observation and Investigation :</label>
                                        <input type="text" value="" class="form-control" >
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Recommendation :</label>
                                        <input type="text" value="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Prepared By :</label>
                                        <input type="text" value="" class="form-control" readonly >
                                    </div>
                                </div>
                                <br>
                                <div class="col-md-6 offset-6">
                                        <a  class=" pull-center btn btn waves-effect waves-light btn-success a1">Preview/Save</a>
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

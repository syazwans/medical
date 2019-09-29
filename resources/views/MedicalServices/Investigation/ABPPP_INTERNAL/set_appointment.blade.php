<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="#">
                    <div class="form-body">
                        <h4 class="card-title">@lang('Set Appointment')</h4>
                        <div class="modal-body">
                            <div class="card-body">
                                <div class="row p-t-20">
                                <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Meeting Reference No. :</label>
                                            <input type="text" value="" class="form-control" readonly>
                                        </div>
                                    </div>
                                <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Opinion Case No. :</label>
                                            <input type="text" value="" class="form-control" readonly>
                                        </div>
                                    </div>
                                <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Time :</label>
                                            <input type="text" value="" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">Place :</label>
                                            <input type="text" value="" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                        <label class="control-label">Doctor Name :</label>
                                        <select class="form-control" name="moreinfo" id="moreinfo">
                                        <option value="PS" hidden selected readonly>Please Select</option>
                                        <option value="Y"></option>
                                        <option value="N"></option>
                                    </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">Insured Person Name :</label>
                                            <input type="text" value="" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">@lang('Employer :')</label>
                                        <select class="form-control" name="moreinfo" id="moreinfo">
                                        <option value="PS" hidden selected readonly>Please Select</option>
                                        <option value="Y"></option>
                                        <option value="N"></option>
                                    </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">@lang('Employer Address. :')</label>
                                            <input type="text" value="" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">@lang('Agency :')</label>
                                            <select class="form-control" name="moreinfo" id="moreinfo">
                                        <option value="PS" hidden selected readonly>Please Select</option>
                                        <option value="Y"></option>
                                        <option value="N"></option>
                                    </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">@lang('Email. :')</label>
                                            <input type="text" value="" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 offset-6">
                                            <a class="btn-success link a1" id="btn_add_sp" data-toggle="modal" data-target="#quotationModal"
                                                data-whatever="@getbootstrap" aria-expanded="true">
                                                Add
                                            </a>
                                    </div>
                                    <br>
                                    <br>
                                    
                                    <div class="table-responsive m-t-40">
                                    <table id="myTable_clarification" class="table table-bordered table-striped">
                                        <thead style="background-color:skyblue;">
                                            <tr>
                                                <th>Date/Time</th>
                                                <th>Place</th>
                                                <th>Doctor Name</th>
                                                <th>Employer</th>
                                                <th>Agency</th>
                                                <th>Action</th>
                                                <th>Select</th>
                                            </tr>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr id="clari1">
                                                <td style="display:none;"><input type="hidden" value="1"></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td><div class="custom-control custom-checkbox mr-sm-2 mb-3">
                                                 <input type="checkbox" class="custom-control-input" id="checkbox0" value="check">
                                                <label class="custom-control-label" for="checkbox0"></label>
                                    </div></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <br>
                            </div> 
                            
                        </div>
                        <div class="col-md-6 offset-6">
                                        <a  class=" pull-center btn btn waves-effect waves-light btn-success a1">Send Invitation</a>
                                </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>

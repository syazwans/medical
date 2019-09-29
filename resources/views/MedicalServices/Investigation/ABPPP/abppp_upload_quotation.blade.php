<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="#">
                    <div class="form-body">
                        <h4 class="card-title">@lang('Upload Quotation')</h4>
                        <div class="modal-body">
                            <div class="card-body">
                                <div class="row p-t-20">
                                <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">MO Ref. No. :</label>
                                            <input type="text" value="" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">Type of Investigation :</label>
                                            <input type="text" value="" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Date :</label>
                                            <input type="text" value="" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">Insured Person Name :</label>
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
                                            <label class="control-label">@lang('Tel. No. :')</label>
                                            <input type="text" value="" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">@lang('Place of Investigation :')</label>
                                            <input type="text" value="" class="form-control" readonly>                      
                                        </div>
                                        <div class="form-group">
                                            <input type="text" value="" class="form-control" readonly>                      
                                        </div>
                                        <div class="form-group">
                                            <input type="text" value="" class="form-control" readonly>                      
                                        </div>
                                    </div>                                    
                                    <div class="table-responsive m-t-40">
                                    <table id="myTable_clarification" class="table table-bordered table-striped">
                                        <thead style="background-color:skyblue;">
                                            <tr>
                                                <!-- <th>No.</th> -->
                                                <th>Service Provider</th>
                                                <th>Email</th>
                                                <th>Quotation Ref. No.</th>
                                                <th>Expiry Date</th>
                                                <th>Action</th>
                                            </tr>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr id="clari1">
                                                <td style="display:none;"><input type="hidden" value="1"></td>
                                                <!-- <td>1</td> -->
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td><div class="input-group-append">
                                                <a id="uploaddraft" data-toggle="modal" data-target="#modal_document" data-id="1" data-whatever="@getbootstrap"
                                                 href="#tt1" aria-expanded="true"><i class="fas fa-file-alt" title="View Upload File" data-toggle="tooltip"></i></a>
                                                &nbsp;
                                                <a id="view" data-toggle="modal" data-target="#modal_document" data-id="1" data-whatever="@getbootstrap"
                                                 href="#tt1" aria-expanded="true"><i class="fas fa-file-alt" title="View" data-toggle="tooltip"></i></a>
                                                &nbsp;
                                                <a id="deletedraft" data-toggle="modal" data-target="#modal_document" data-id="1" data-whatever="@getbootstrap"
                                                 href="#tt1" aria-expanded="true"><i class="fas fa-trash-alt fa-sm" title="Delete" data-toggle="tooltip"></i></a>
                                               
                                                    </div></td>
                                            </tr>
                                        </tbody>
                                        <tbody>
                                            <tr id="clari2">
                                                <td style="display:none;"><input type="hidden" value="2">>2</td>
                                                <!-- <td>2</td> -->
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td><div class="input-group-append">
                                                <a id="uploaddraft" data-toggle="modal" data-target="#modal_document" data-id="1" data-whatever="@getbootstrap"
                                                 href="#tt1" aria-expanded="true"><i class="fas fa-file-alt" title="View Upload File" data-toggle="tooltip"></i></a>
                                                &nbsp;
                                                <a id="view" data-toggle="modal" data-target="#modal_document" data-id="1" data-whatever="@getbootstrap"
                                                 href="#tt1" aria-expanded="true"><i class="fas fa-file-alt" title="View" data-toggle="tooltip"></i></a>
                                                &nbsp;
                                                <a id="deletedraft" data-toggle="modal" data-target="#modal_document" data-id="1" data-whatever="@getbootstrap"
                                                 href="#tt1" aria-expanded="true"><i class="fas fa-trash-alt fa-sm" title="Delete" data-toggle="tooltip"></i></a>
                                               
                                                    </div></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">@lang('Remark :')</label>
                                            <input type="text" value="" class="form-control" readonly>
                                        </div>
                                    </div>
                                <br>
                                
                                <div class="col-md-6 offset-6">
                                        <a  class=" pull-center btn btn waves-effect waves-light btn-success a1">Save</a>
                                        <a  class=" pull-center btn btn waves-effect waves-light btn-success a1">Submit</a>
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

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="#">
                    <div class="form-body">
                        <h4 class="card-title">@lang('Invoice Approval')</h4>
                        <div class="modal-body">
                            <div class="card-body">
                                <div class="row p-t-20">
                                <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">MO Ref. No. :</label>
                                            <input type="text" value="" class="form-control" readonly>
                                        </div>
                                    </div>
                                <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Quotation Ref. No. :</label>
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
                                            <input type="date" value="" class="form-control" readonly>
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
                                                <th>Quotation</th>
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
                                                <td><div class="input-group-append">
                                                <a id="view" data-toggle="modal" data-target="#modal_document" data-id="1" data-whatever="@getbootstrap"
                                                 href="#tt1" aria-expanded="true"><i class="fas fa-file-alt" title="View" data-toggle="tooltip"></i></a></span> 
                                                    </div></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">@lang('Recommendation :')</label>
                                            <input type="text" value="" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">@lang('Status  :')</label>
                                            <input type="text" value="Approved" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">@lang('Justification*  :')</label>
                                            <input type="text" value="" class="form-control" readonly>
                                        </div>
                                    </div>
                                    
                                <br>
                                
                            </div> 
                            <div class="col-md-6 offset-6">
                                        <a  class=" pull-center btn btn waves-effect waves-light btn-success a1">Submit</a>
                                </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>

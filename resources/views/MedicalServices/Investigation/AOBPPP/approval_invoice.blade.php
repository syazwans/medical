<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="#">
                    <div class="form-body">
                        <h4 class="card-title">@lang('Invoice & Report Approval')</h4>
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
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">@lang('Service Provider :')</label>
                                            <input type="text" value="" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">@lang('Email :')</label>
                                            <input type="text" value="" class="form-control" readonly>
                                        </div>
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
                            <h5 class="card-title">@lang('Quotation')</h5>
                            <div class="row p-t-20">
                                <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Ref. No. :</label>
                                            <input type="text" value="" class="form-control" readonly>
                                        </div>
                                 </div>
                                <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Expiry Date. :</label>
                                            <input type="text" value="" class="form-control" readonly>
                                        </div>
                                </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Amount :</label>
                                            <input type="text" value="" class="form-control" readonly>
                                        </div>
                                    </div>
                                <br>
                                
                            </div> 
                            <h5 class="card-title">@lang('Invoice')</h5>
                            <div class="row p-t-20">
                                <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Ref. No. :</label>
                                            <input type="text" value="" class="form-control" readonly>
                                        </div>
                                 </div>
                                <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Invoice Date. :</label>
                                            <input type="text" value="" class="form-control" readonly>
                                        </div>
                                </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Amount :</label>
                                            <input type="text" value="" class="form-control" readonly>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Invoice :</label>
                                           <div> &nbsp;
                                                 <a id="view" data-toggle="modal" data-target="#modal_document" data-id="1" data-whatever="@getbootstrap"
                                                 href="#tt1" aria-expanded="true"><i class="fas fa-file-alt" title="View Document" data-toggle="tooltip"></i></a>
                                             </div>
                                        </div>
                                    </div>
                                <br>
                                
                            </div>
                            <h5 class="card-title">@lang('Report')</h5>
                            <div class="row p-t-20">
                            <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Document :</label>
                                            <div>&nbsp;
                                            <a id="view" data-toggle="modal" data-target="#modal_document" data-id="1" data-whatever="@getbootstrap"
                                                 href="#tt1" aria-expanded="true"><i class="fas fa-file-alt" title="View Document" data-toggle="tooltip"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">Remarks :</label>
                                            <input type="text" value="" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">@lang('Action  :')</label>
                                            <select class="form-control" name="action" id="action">
                                        <option value="PS" hidden selected readonly>Please Select</option>                                       
                                        <option value="N">Approve</option>
                                        <option value="Y">Reject</option>
                                    </select>
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

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="#">
                    <div class="form-body">
                        <h4 class="card-title">@lang('Request Quotation')</h4>
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
                                    <br>
                                    <div class="col-md-6 offset-6">
                                            <a class="btn-success link a1" id="btn_add_sp" data-toggle="modal" data-target="#quotationModal"
                                                data-whatever="@getbootstrap" aria-expanded="true">
                                                Add Service Provider 
                                            </a>
                                    </div>
                                    <div class="table-responsive m-t-40">
                                    <table id="myTable_clarification" class="table table-bordered table-striped">
                                        <thead style="background-color:skyblue;">
                                            <tr>
                                                <!-- <th>No.</th> -->
                                                <th>Service Provider</th>
                                                <th>Email</th>
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
                                                <td><div class="input-group-append">
                                                <a id="view" data-toggle="modal" data-target="#modal_document" data-id="1" data-whatever="@getbootstrap"
                                                 href="#tt1" aria-expanded="true"><i class="fas fa-file-alt" title="View" data-toggle="tooltip"></i></a>
                                                &nbsp;
                                                <a id="deletedraft" data-toggle="modal" data-target="#modal_document" data-id="1" data-whatever="@getbootstrap"
                                                 href="#tt1" aria-expanded="true"><i class="fas fa-trash-alt fa-sm" title="Delete" data-toggle="tooltip"></i></a>
                                                 &nbsp;
                                                <a id='selectdraft' class="get-code" data-toggle="modal" data-target="#modal_document" data-id="1" data-whatever="@getbootstrap"
                                                 href="#tt1" aria-expanded="true"><i class="fas fa-edit" title="Edit" data-toggle="tooltip"></i></a>
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

<div class="modal fade" id="quotationModal" tabindex="-1" role="dialog" aria-labelledby="quotationModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="quotationModal">New message</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <form>
                <div class="row p-t-20">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                    <label class="control-label">Service Provider :</label>
                                                    <select name="select_opt" id="select_opt" class="form-control" onchange="showRequest(this.options[this.selectedIndex].value)" required>
                                                    <option value="PS" hidden selected readonly>Please Select</option>
                                                    <option value=""></option>
                                                    <option value="other">Other</option>
                                                </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                            
                                                <div class="form-group" id="divspecify123" style="display:none;">
                                                <label class="control-label">if choose Other, please specify</label>
                                                <input type="text" value="" class="form-control">
                                                
                                            </div>
                                        </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label">@lang('Email :')</label>
                                                        <input type="text" value="" class="form-control">
                                                    </div>
                                                </div>
                                        </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
        function showRequest(name){
            if(name == 'other') {
                $('#divspecify123').show();
            }
            else {
                $('#divspecify123').hide();
            }   
        }
        </script>
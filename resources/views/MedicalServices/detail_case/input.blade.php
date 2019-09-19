<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="#">
                    <div class="form-body">
                        <h4 class="card-title">@lang('input.title')</h4>
                        <hr>
                        <div class="row p-t-20">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">@lang('input.attr.type_of_discipline')</label>
                                    <input type="text" class="form-control" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('input.attr.speciality')</label>
                                    <select name="speciality" class="form-control">
                                        <option value="ohd">OHD</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('input.attr.apportionment')</label>
                                    <select name="apportionment" class="form-control">
                                        <option value="yes">YES</option>
                                        <option value="no">NO</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">@lang('input.attr.remarks')</label>
                                    <textarea name="remarks" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">@lang('input.attr.information_supporting_documents')</label>
                                    <select name="information_supporting_documents" class="form-control">
                                        <option value="complete">COMPLETE</option>
                                        <option value="incomplete">INCOMPLETE</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-actions col-md-12 text-right">
                                <button type="submit" class="btn btn waves-effect waves-light btn-success"> <i class="fa fa-check"></i>
                                @lang('input.save')</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
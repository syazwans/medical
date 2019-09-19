
      <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form action="/remark" method="POST">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="form-body">
                            <h3 class="card-title">@lang('index.attr.remarks')</h3>
                            <hr>
                            <div class="row p-t-20">
                             <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Remarks</label>
                                    <textarea type="text" class="form-control" name="remarks"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('permanentRepresentative.cancel')</button>
                            <button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('permanentRepresentative.clear')</button>
                            <button type="submit" class="btn btn waves-effect waves-light btn-success"> <i class="fa fa-check"></i>
                            @lang('permanentRepresentative.save')</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
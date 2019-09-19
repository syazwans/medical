<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="#">
                    <div class="form-body">
                        <h4 class="card-title">@lang('interest_claim_details.title')</h4>
                        <hr>
                        <div class="row p-t-20">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">@lang('interest_claim_details.attr.notice_id_no')</label>
                                    <input type="text" class="form-control" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('interest_claim_details.attr.accident_date')</label>
                                    <input type="date" class="form-control" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('interest_claim_details.attr.about_injury')</label>
                                    <input type="text" class="form-control" readonly>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">@lang('interest_claim_details.attr.profession')</label>
                                    <input type="text" class="form-control" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('interest_claim_details.attr.potential_huk')</label>
                                    <input type="text" class="form-control" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('interest_claim_details.attr.section96')</label>
                                    <input type="text" class="form-control" readonly>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">@lang('interest_claim_details.attr.remarks')</label>
                                    <textarea class="form-control" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">@lang('interest_claim_details.attr.supporting_documents')</label><br>
                                    <button type="button" class="btn btn waves-effect waves-light btn-info">@lang('interest_claim_details.view')</button>
                                </div>
                            </div>
                            <div class="form-actions col-md-12 text-right">
                                <button type="submit" class="btn btn waves-effect waves-light btn-success"> <i class="fa fa-check"></i>
                                @lang('interest_claim_details.save')</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="#">
                    <div class="form-body">
                        <h4 class="card-title">@lang('medical_board/previous_claim.title')</h4>
                        <hr>
                        {{-- <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('medical_board/previous_claim.attr.reference_jd_no')</label>
                                    <input type="text" class="form-control" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('medical_board/previous_claim.attr.notice_id_no')</label>
                                    <input type="text" class="form-control" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('medical_board/previous_claim.attr.accident_date')</label>
                                    <input type="date" class="form-control" value="HUK" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('medical_board/previous_claim.attr.type_of_injury')</label>
                                    <input type="text" class="form-control" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('medical_board/previous_claim.attr.jd_date')</label>
                                    <input type="date" class="form-control" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('medical_board/previous_claim.attr.jd_result')</label>
                                    <input type="text" class="form-control" readonly>
                                </div>
                            </div>
                            {{-- <div class="form-actions col-md-12 text-right">
                                <button type="submit" class="btn btn waves-effect waves-light btn-success"> <i class="fa fa-check"></i>
                                @lang('medical_board/previous_claim.save')</button>
                            </div> --}}
                        {{-- </div> --}}
                        <table id="previousclaims_table" class="table table-bordered table-striped">
                            <thead style="background-color:skyblue;">
                                <tr>
                                    <th>@lang('medical_board/previous_claim.attr.reference_jd_no')</th>
                                    <th>@lang('medical_board/previous_claim.attr.notice_id_no')</th>
                                    <th>@lang('medical_board/previous_claim.attr.accident_date')</th>
                                    <th>@lang('medical_board/previous_claim.attr.type_of_injury')</th>
                                    <th>@lang('medical_board/previous_claim.attr.jd_date')</th>
                                    <th>@lang('medical_board/previous_claim.attr.jd_result')</th>
                                </tr>
                            </thead>
                            {{-- <tbody>
                                
                            </tbody> --}}
                        </table>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
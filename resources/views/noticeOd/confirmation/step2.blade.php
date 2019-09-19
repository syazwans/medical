<h6>@lang('confirmation.bank_info')</h6>
<section>
    <div class="row p-t-20">
        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label">@lang('confirmation.attr.recipient_bank')</label>
                <select class="form-control">
                    <option>@lang('confirmation.attr.select_reason')
                    </option>
                    <option value="No IC">@lang('confirmation.attr.yes')</option>
                    <option value="Permanent Representative Overseas">@lang('confirmation.attr.no')</option>
                </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label">@lang('confirmation.attr.bank_location')</label>
                <select class="form-control">
                    <option>@lang('confirmation.attr.select_reason')
                    </option>
                    <option value="No IC">@lang('confirmation.attr.local_bank')</option>
                    <option value="Permanent Representative Overseas">@lang('confirmation.attr.overseas_bank')</option>
                </select>
            </div>
        </div>
    </div>
    <div class="row p-t-20">
        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label">@lang('confirmation.attr.reason')</label>
                <select class="form-control custom-select">
                    <option selected disabled hidden>@lang('confirmation.attr.select_reason')
                    </option>
                    <option value="No IC">@lang('confirmation.attr.ic_no')</option>
                    <option value="Permanent Representative Overseas">@lang('confirmation.attr.permanent_representative')</option>
                    <option value="Bankrup">@lang('confirmation.attr.bankrup')</option>

                </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label">@lang('confirmation.attr.bai_status')</label>
                <select class="form-control custom-select">
                    <option selected disabled hidden>@lang('confirmation.attr.choose_bai')
                    </option>
                    <option value="Active">@lang('confirmation.attr.active')</option>
                    <option value="Inactive">@lang('confirmation.attr.inactive')</option>
                    <option value="Suspense">@lang('confirmation.attr.suspense')</option>
                    <option value="Closed">@lang('confirmation.attr.closed')</option>

                </select>

            </div>
        </div>
    </div>
    <div class="row p-t-20">
        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label">@lang('confirmation.attr.substatus_desc')
                </label>
                <input type="text" name="sub_status_description" id="sub_status_description" class="form-control">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label">@lang('confirmation.attr.payment')</label>
                <select class="form-control custom-select">
                    <option selected disabled hidden>@lang('confirmation.attr.choose_payment')
                    </option>
                    <option value="Cheque">@lang('confirmation.attr.cheque')</option>
                    <option value="EFT">@lang('confirmation.attr.eft')</option>
                    <option value="No Payment">@lang('confirmation.attr.no_payment')</option>
                </select>
            </div>
        </div>
    </div>
</section>

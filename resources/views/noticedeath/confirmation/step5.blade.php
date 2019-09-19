<h6>@lang('confirmation.bank_info')</h6>
<section>
    <div class="row p-t-20">
        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label">@lang('confirmation.attr.recipient_bank')?</label>
                <div class="custom-control custom-radio">
                    <input type="radio" id="recipient_have_bank_account1" name="recipient_have_bank_account"
                        class="custom-control-input">
                    <label class="custom-control-label" for="recipient_have_bank_account1">@lang('confirmation.attr.yes')</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="recipient_have_bank_account2" name="recipient_have_bank_account"
                        class="custom-control-input">
                    <label class="custom-control-label" for="recipient_have_bank_account2">@lang('confirmation.attr.no')</label>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label">@lang('confirmation.attr.bank_location')</label>
                <div class="custom-control custom-radio">
                    <input type="radio" id="bank_location1" name="bank_location" class="custom-control-input">
                    <label class="custom-control-label" for="bank_location1">@lang('confirmation.local_bank')</</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="bank_location2" name="bank_location" class="custom-control-input">
                    <label class="custom-control-label" for="bank_location2">@lang('confirmation.overseas_bank')</</label>
                </div>
            </div>
        </div>
    </div>
    <div class="row p-t-20">
        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label">@lang('confirmation.attr.reason')</</label>
                <select class="form-control custom-select">
                    <option selected disabled hidden>--Choose your reason--
                    </option>
                    <option value="No IC">No IC</option>
                    <option value="Permanent Representative Overseas">Permanent
                        Representative Overseas</option>
                    <option value="Bankrup">Bankrup</option>

                </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label">@lang('confirmation.attr.bai_status')</</label>
                <select class="form-control custom-select">
                    <option selected disabled hidden>--Choose your BAI Status--
                    </option>
                    <option value="Active">Active</option>
                    <option value="Inactive">Inactive</option>
                    <option value="Suspense">Suspense</option>
                    <option value="Closed">Closed</option>

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
                    <option selected disabled hidden>--Choose your Payment
                        Method--
                    </option>
                    <option value="Cheque">Cheque</option>
                    <option value="EFT">EFT</option>
                    <option value="No Payment">No Payment</option>
                </select>
            </div>
        </div>
    </div>
</section>

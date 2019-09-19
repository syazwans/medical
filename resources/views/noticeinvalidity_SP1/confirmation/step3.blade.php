<h6>@lang('confirmation.local_bank')</h6>
<section>
    <div class="row p-t-20">
        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label">@lang('confirmation.attr.bank_name')</label>
                <select class="form-control custom-select">
                    <option selected disabled hidden>--Choose your Bank Name--
                    </option>
                    <option value="CIMB Bank Berhad">CIMB Bank Berhad</option>
                    <option value="Maybank (MBB)">Maybank (MBB)</option>
                    <option value="Bank Simpanan Nasional (BSN)">Bank Simpanan
                        Nasional (BSN)</option>
                    <option value="Bank Muamalat (BMMB)">Bank Muamalat (BMMB)
                    </option>
                    <option value="RHB Bank Berhad (RHB)">RHB Bank Berhad (RHB)
                    </option>
                    <option value="Public Bank Berhad (PBB)">Public Bank Berhad
                        (PBB)</option>
                    <option value="Bank Islam Malaysia Berhad (BIMB)">Bank Islam
                        Malaysia Berhad (BIMB)</option>
                    <option value="Hong Leong Bank Berhad (HLBB)">Hong Leong
                        Bank Berhad (HLBB)</option>
                    <option value="Ambank Berhad (AMBank)">Ambank Berhad
                        (AMBank)</option>
                </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label">@lang('confirmation.attr.bank_branch')</label>
                <input type="text" name="bank_branch" id="bank_branch" class="form-control">
            </div>
        </div>
    </div>
    <div class="row p-t-20">
        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label">@lang('confirmation.attr.bank_accNo')</label>
                <input type="text" name="bank_account_no" id="bank_account_no" class="form-control">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label">@lang('confirmation.attr.bank_address')</label>
                <input type="text" name="bank_address" id="bank_address" class="form-control">
            </div>
        </div>
    </div>
    <div class="row p-t-20">
        <div class="col-md-12">
            <div class="form-group">
                <label class="control-label">@lang('confirmation.attr.type_acc')</label>
                <div class="custom-control custom-radio">
                    <input type="radio" name="type_of_account" id="type_of_account1" value="Saving"
                        class="custom-control-input">
                    <label class="custom-control-label" for="type_of_account1">Saving</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" name="type_of_account" id="type_of_account2" value="Current"
                        class="custom-control-input">
                    <label class="custom-control-label" for="type_of_account2">Current</label>
                </div>
            </div>
        </div>
    </div>
</section>

<h6>@lang('guardianDetails.title')</h6>
<section>
    <div class="row p-t-20">
        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label">@lang('guardianDetails.attr.ot_name')</label>
                <input type="text" name="ot_name" id="ot_name" class="form-control">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label">@lang('guardianDetails.attr.guardian_name')</label>
                <input type="text" name="guardian_name" id="guardian_name" class="form-control">
            </div>
        </div>
    </div>
    <div class="row p-t-20">
        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label">@lang('guardianDetails.attr.id_type')</label>
                <input type="text" name="identification_type" id="identification_type" class="form-control">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label">@lang('guardianDetails.attr.id_no')</label>
                <input type="text" name="identification_number" id="identification_number" class="form-control">
            </div>
        </div>
    </div>
    <div class="row p-t-20">
        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label">@lang('guardianDetails.attr.pass_exp_date')</label>
                <input type="date" name="passport_expired_date" id="passport_expired_date" class="form-control">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label">@lang('guardianDetails.attr.eligibility_start_date')</label>
                <input type="date" name="eligibility_start_date" id="eligbility_start_date" class="form-control">
            </div>
        </div>
    </div>
    <div class="row p-t-20">
        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label">@lang('guardianDetails.attr.eligibility_end_date')</label>
                <input type="date" name="passport_end_date" id="eligbility_end_date" class="form-control">
            </div>
        </div>

    </div>
    <div class="row p-t-20">

        <div class="col-md-12">
            <div class="form-group">
                <label class="control-label">@lang('guardianDetails.attr.address')</label>
                <textarea class="form-control" id="postal_address" rows="3" placeholder=""></textarea>
            </div>
        </div>
    </div>
    <div class="row p-t-20">
        <div class="col-md-4">
            <div class="form-group">
                <label class="control-label">@lang('guardianDetails.attr.city')</label>
                <input type="text" name="city" id="city" class="form-control">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label class="control-label">@lang('guardianDetails.attr.state')</label>
                <input type="text" name="state" id="state" class="form-control">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label class="control-label">@lang('guardianDetails.attr.postcode')</label>
                <input type="number" name="post_code" id="post_code" class="form-control">
            </div>
        </div>
    </div>
    <div class="row p-t-20">
        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label">@lang('guardianDetails.attr.demised_date')</label>
                <input type="date" name="demised_date" id="demised_date" class="form-control">
            </div>
        </div>
    </div>
</section>

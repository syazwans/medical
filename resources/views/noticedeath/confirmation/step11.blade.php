<h6>@lang('applicantDetails.title')</h6>
<section>
    <div class="row p-t-20">
        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label">@lang('applicantDetails.attr.name')</label>
                <input type="text" name="applicant_details_name" id="applicant_details_approver_name"
                    class="form-control">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label">@lang('applicantDetails.attr.relationship')</label>
                <div class="custom-control custom-radio">
                    <input type="radio" id="applicant_details_relationship_insured_person1"
                        name="applicant_details_relationship_insured_person" class="custom-control-input" value="IMM13">
                    <label class="custom-control-label" for="relationship_insured_person1">Son</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="applicant_details_relationship_insured_person2"
                        name="applicant_details_relationship_insured_person" class="custom-control-input"
                        value="indigenous people">
                    <label class="custom-control-label" for="applicant_details_relationship_insured_person2">The
                        eldest</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="applicant_details_relationship_insured_person3"
                        name="applicant_details_relationship_insured_person" class="custom-control-input"
                        value="Others">

                    <label class="custom-control-label" for="reason_no_ic3">Others:
                    </label>
                  
                        <input type="" name="applicant_details_relationship_insured_person_other"
                            id="applicant_details_relationship_insured_person_other" class="form-control">
                    
                </div>
            </div>
        </div>

    </div>
    <div class="row p-t-20">
        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label">@lang('applicantDetails.attr.postal_address')</label>
                <input type="text" name="applicant_details_postal_address" id="applicant_details_postal_address"
                    class="form-control">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label">@lang('applicantDetails.attr.postcode')</label>
                <input type="text" name="applicant_details_postcode" id="applicant_details_postcode"
                    class="form-control">
            </div>
        </div>
    </div>
    <div class="row p-t-20">
        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label">@lang('applicantDetails.attr.state')</label>
                <input type="text" name="applicant_details_state" id="applicant_details_state" class="form-control">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label">@lang('applicantDetails.attr.id_type')</label>
                <input type="text" name="applicant_details_identification_type"
                    id="applicant_details_identification_type" class="form-control">
            </div>
        </div>
    </div>
    <div class="row p-t-20">
        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label">@lang('applicantDetails.attr.id_no')</label>
                <input type="text" name="applicant_details_identification_number"
                    id="applicant_details_identification_number" class="form-control">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label">@lang('applicantDetails.attr.telNo')</label>
                <input type="text" name="applicant_details_telephone_no" id="applicant_details_telephone_no"
                    class="form-control">
            </div>
        </div>
    </div>
    <div class="row p-t-20">
        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label">@lang('applicantDetails.attr.mobileNo')</label>
                <input type="text" name="applicant_details_mobile_no" id="applicant_details_mobile_no"
                    class="form-control">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label">@lang('applicantDetails.attr.email')</label>
                <input type="text" name="applicant_details_email" id="applicant_details_email" class="form-control">
            </div>
        </div>
    </div>
    <div class="row p-t-20">
        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label">A@lang('applicantDetails.attr.amount')</label>
                <input type="text" name="applicant_details_amount" id="applicant_details_amount" class="form-control">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label">@lang('applicantDetails.attr.receipt')</label>
                <input type="text" name="applicant_details_receipt_funeral" id="applicant_details_receipt_funeral"
                    class="form-control">
                    <!-- for claimant other than the widow/widower  or mother/father (Reg. 98(1)) -->
            </div>
        </div>
    </div>
    <div class="row p-t-20">
        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label">@lang('applicantDetails.attr.notice_date')</label>
                <input type="date" name="applicant_details_notice_date" id="applicant_details_notice_date"
                    class="form-control">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label">@lang('applicantDetails.attr.acceptance_stamp')</label>
                <input type="text" name="applicant_details_acceptance_stamp" id="applicant_details_acceptance_stamp"
                    class="form-control">
            </div>
        </div>
    </div>
    <div class="row p-t-20">
        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label">@lang('applicantDetails.attr.date')</label>
                <input type="date" name="applicant_details_date" id="applicant_details_date" class="form-control">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label">@lang('applicantDetails.attr.state_origin')</label>
                <input type="text" name="applicant_details_state" id="applicant_details_state" class="form-control">
            </div>
        </div>
    </div>
    <div class="row p-t-20">
        <div class="col-md-12">
            <div class="form-group">
                <label class="control-label">@lang('applicantDetails.attr.city')</label>
                <input type="text" name="applicant_details_origin" id="applicant_details_origin" class="form-control">
            </div>
        </div>
    </div>
</section>

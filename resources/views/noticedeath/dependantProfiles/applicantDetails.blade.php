<h6>Applicant Details</h6>  
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
                            <select name="relationship" class="form-control">
                                {{-- <option>--Select your Transport--</option> --}}
                                <option>@lang('applicantDetails.attr.son')</option>
                                <option>@lang('applicantDetails.attr.eldest')</option>
                                <option value="Others">@lang('applicantDetails.attr.others')</option>
                            </select>
                        </div>
                        <input type="text" name="relationship_other" id="relationship_other"
                            class="form-control" placeholder="">
                    </div>
            
                </div>
                <div class="row p-t-20">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">@lang('applicantDetails.attr.postal_address')</label>
                            <input type="text" name="applicant_details_postal_address" id="applicant_details_postal_address"
                                class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">@lang('applicantDetails.attr.postcode')</label>
                            <input type="text" name="applicant_details_postcode" id="applicant_details_postcode"
                                class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">@lang('applicantDetails.attr.state')</label>
                            <input type="text" name="applicant_details_state" id="applicant_details_state" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row p-t-20">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="control-label">@lang('applicantDetails.attr.id_type')</label>
                            <select class="form-control">
                                {{-- <option>@lang('insuredPerson.attr.choose_id_type')</option> --}}
                                <option value="">@lang('dependantsProfile.attr.new_ic')</option>
                                <option value="">@lang('dependantsProfile.attr.old_ic')</option>
                                <option value="">@lang('dependantsProfile.attr.army_id')</option>
                                <option value="">@lang('dependantsProfile.attr.police_id')</option>
                                <option value="">@lang('dependantsProfile.attr.ssn_id')</option>
                                <option value="">@lang('dependantsProfile.attr.cid')</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="control-label">@lang('applicantDetails.attr.id_no')</label>
                            <input type="text" name="applicant_details_identification_number"
                                id="applicant_details_identification_number" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="control-label">@lang('applicantDetails.attr.telNo')</label>
                            <input type="text" name="applicant_details_telephone_no" id="applicant_details_telephone_no"
                                class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="control-label">@lang('applicantDetails.attr.mobileNo')</label>
                            <input type="text" name="applicant_details_mobile_no" id="applicant_details_mobile_no"
                                class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row p-t-20">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="control-label">@lang('applicantDetails.attr.email')</label>
                            <input type="text" name="applicant_details_email" id="applicant_details_email" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="control-label">@lang('applicantDetails.attr.amount')</label>
                            <input type="text" name="applicant_details_amount" id="applicant_details_amount" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="control-label">@lang('applicantDetails.attr.receipt')</label>
                            <input type="text" name="applicant_details_receipt_funeral" id="applicant_details_receipt_funeral"
                                class="form-control">
                                <!-- for claimant other than the widow/widower  or mother/father (Reg. 98(1)) -->
                        </div>
                    </div>                
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="control-label">@lang('applicantDetails.attr.notice_date')</label>
                            <input type="date" name="applicant_details_notice_date" id="applicant_details_notice_date"
                                class="form-control">
                        </div>
                    </div>
                </div>
                    <div class="row p-t-20">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="control-label">@lang('applicantDetails.attr.acceptance_stamp')</label>
                            <input type="text" name="applicant_details_acceptance_stamp" id="applicant_details_acceptance_stamp"
                                class="form-control">
                        </div>
                    </div>
                
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="control-label">@lang('applicantDetails.attr.date')</label>
                            <input type="date" name="applicant_details_date" id="applicant_details_date" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="control-label">@lang('applicantDetails.attr.state_origin')</label>
                            <input type="text" name="applicant_details_state" id="applicant_details_state" class="form-control">
                        </div>
                    </div>
                
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="control-label">@lang('applicantDetails.attr.city')</label>
                            <input type="text" name="applicant_details_origin" id="applicant_details_origin" class="form-control">
                        </div>
                    </div>
                    </div>
                
      </section>
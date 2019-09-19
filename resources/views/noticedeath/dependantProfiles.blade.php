<div class="tab-pane  p-20" id="dependantProfiles" role="tabpanel">
    <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="#">
                    <div class="form-body">
                        <h3 class="card-title">@lang('dependantsProfile.title')</h3>
                        <hr> 
                        <div class="row p-t-20">
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label class="control-label">@lang('dependantsProfile.attr.ot_name')</label>
                                          <input type="text" name="ot_name" id="ot_name" class="form-control">
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label class="control-label">@lang('dependantsProfile.attr.id_type')
                                          </label>
                                          <input type="text" name="identification_type" id="identification_type" class="form-control">
                                      </div>
                                  </div>
                              </div>
                              <div class="row p-t-20">
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label class="control-label">@lang('dependantsProfile.attr.id_no')</label>
                                          <input type="text" name="identification_number" id="identification_number" class="form-control">
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label class="control-label">@lang('dependantsProfile.attr.relationship')
                                          </label>
                                          <input type="text" name="relationship_insured_person" id="relationship_insured_person" class="form-control">
                                      </div>
                                  </div>
                              </div>
                              <div class="row p-t-20">
                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <label class="control-label">@lang('dependantsProfile.attr.dateOfBirth')</label>
                                          <input type="date" name="date_of_birth" id="date_of_birth" class="form-control">
                                      </div>
                                  </div>
                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <label class="control-label">@lang('dependantsProfile.attr.married_date')
                                          </label>
                                          <input type="date" name="married_date" id="married_date" class="form-control">
                                      </div>
                                  </div>
                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <label class="control-label">@lang('dependantsProfile.attr.registered_married')</label>
                                          <select class="form-control">
                                              <option selected disabled hidden>--Choose your answer--
                                              </option>
                                              <option value="Yes">@lang('dependantsProfile.attr.yes')</option>
                                              <option value="No">@lang('dependantsProfile.attr.no')
                                              </option>
                                          </select>
                                      </div>
                                  </div>
                              </div>
                              <div class="row p-t-20">
                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <label class="control-label">@lang('dependantsProfile.attr.edah')
                                          </label>
                                          <select class="form-control">
                                              <option selected disabled hidden>--Choose your answer--
                                              </option>
                                              <option value="Yes">@lang('dependantsProfile.attr.yes')</option>
                                              <option value="No">@lang('dependantsProfile.attr.no')
                                              </option>
                                          </select>
                                      </div>
                                  </div>
                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <label class="control-label">@lang('dependantsProfile.attr.disability')</label>
                                          <select class="form-control">
                                              <option selected disabled hidden>--Choose your answer-- </option>
                                              <option value="Yes">@lang('dependantsProfile.attr.yes')</option>
                                              <option value="No">@lang('dependantsProfile.attr.no')
                                              </option>
                                          </select>
                                      </div>
                                  </div>
                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <label class="control-label">@lang('dependantsProfile.attr.passport_expired')
                                          </label>
                                          <input type="date" name="passport_expired_date" id="passport_expired_date" class="form-control">
                                      </div>
                                  </div>
                              </div>
                              <div class="row p-t-20">
                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <label class="control-label">@lang('dependantsProfile.attr.eligibility_start')</label>
                                          <input type="date" name="eligbility_start_date" id="eligbility_start_date" class="form-control">
                                      </div>
                                  </div>
                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <label class="control-label">@lang('dependantsProfile.attr.eligibility_end')</label>
                                          <input type="date" name="eligbility_end_date" id="eligbility_end_date" class="form-control">
                                      </div>
                                  </div>
                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <label class="control-label">@lang('dependantsProfile.attr.status')</label>
                                          <select class="form-control">
                                              <option selected disabled hidden>--Choose your answer--</option>
                                              <option value="Before">Demised</option>
                                              <option value="Remarried">Remarried</option>
                                              <option value="Bankruptcy">Bankruptcy</option>
                                              <option value="Studying">Studying</option>
                                              <option value="Married">Married</option>
                                              <option value="Disabled">Disabled</option>
                                              <option value="Adoption">Adoption</option>
                                              <option value="DateNotQualified">Date Not Qualified</option>
                                          </select>
                                      </div>
                                  </div>
                              </div>
                              <div class="row p-t-20">
                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <label class="control-label">@lang('dependantsProfile.attr.demised_date')</label>
                                          <input type="date" name="demised_date" id="demised_date" class="form-control">
                                      </div>
                                  </div>
                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <label class="control-label">@lang('dependantsProfile.attr.date_marriedOb')</label>
                                          <input type="date" name="date_of_married_ob" id="date_of_married_ob" class="form-control">
                                      </div>
                                  </div>
                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <label class="control-label">@lang('dependantsProfile.attr.disability_beforeAfter_death')</label>
                                          <select class="form-control">
                                              <option selected disabled hidden>--Choose your answer--</option>
                                              <option value="Before">Before</option>
                                              <option value="After">After</option>
                                          </select>
                                      </div>
                                  </div>
                              </div>
                              
                              <div class="row p-t-20">
                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <label class="control-label">Postal Address 1</label>
                                          <input type="text" name="address1" id="address1" class="form-control">
                                      </div>
                                  </div>
                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <label class="control-label">Postal Address 2</label>
                                          <input type="text" name="address2" id="address2" class="form-control">
                                      </div>
                                  </div>
                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <label class="control-label">Postal Address 3</label>
                                          <input type="text" name="address3" id="address3" class="form-control">
                                      </div>
                                  </div>
                              </div>
                              
                              <div class="row p-t-20">
                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <label class="control-label">@lang('dependantsProfile.attr.city')</label>
                                          <input type="text" name="city" id="city" class="form-control">
                                      </div>
                                  </div>
                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <label class="control-label">@lang('dependantsProfile.attr.state')</label>
                                          <input type="text" name="state" id="state" class="form-control">
                                      </div>
                                  </div>
                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <label class="control-label">@lang('dependantsProfile.attr.postcode')</label>
                                          <input type="number" name="post_code" id="post_code" class="form-control">
                                      </div>
                                  </div>
                              </div>
                              <div class="row p-t-20">
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label class="control-label">@lang('dependantsProfile.attr.po_box')</label>
                                          <input type="text" name="po_box" id="po_box" class="form-control">
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label class="control-label">@lang('dependantsProfile.attr.locked_bag')</label>
                                          <input type="text" name="locked_bag" id="locked_bag" class="form-control">
                                      </div>
                                  </div>
                              </div>
                              <div class="row p-t-20">
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label class="control-label">@lang('dependantsProfile.attr.wdt')</label>
                                          <input type="text" name="wdt" id="wdt" class="form-control">
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label class="control-label">@lang('dependantsProfile.attr.telephoneNo')</label>
                                          <input type="number" name="tel_no" id="tel_no" class="form-control">
                                      </div>
                                  </div>
                              </div>
                              <div class="row p-t-20">
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label class="control-label">@lang('dependantsProfile.attr.mobileNo')</label>
                                          <input type="text" name="mobile_no" id="mobile_no" class="form-control">
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label class="control-label">@lang('dependantsProfile.attr.email')</label>
                                          <input type="email" name="email" id="email" class="form-control">
                                      </div>
                                  </div>
                              </div>
                              <div class="row p-t-20">
                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <label class="control-label">@lang('dependantsProfile.attr.ot_guardian')</label>
                                          <select class="form-control">
                                              <option selected disabled hidden>--Choose your answer--
                                              </option>
                                              <option value="Yes">@lang('dependantsProfile.attr.yes')</option>
                                              <option value="No">@lang('dependantsProfile.attr.no')
                                              </option>
                                          </select>
                                      </div>
                                  </div>
                              </div>
                              
                              <h3 class="box-title m-t-40">@lang('guardianDetails.title')</h3>
                              <hr>
                              
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
                                      <div class="col-md-4">
                                          <div class="form-group">
                                              <label class="control-label">@lang('guardianDetails.attr.pass_exp_date')</label>
                                              <input type="date" name="passport_expired_date" id="passport_expired_date" class="form-control">
                                          </div>
                                      </div>
                                      <div class="col-md-4">
                                          <div class="form-group">
                                              <label class="control-label">@lang('guardianDetails.attr.eligibility_start_date')</label>
                                              <input type="date" name="eligibility_start_date" id="eligbility_start_date" class="form-control">
                                          </div>
                                      </div>
                                      <div class="col-md-4">
                                          <div class="form-group">
                                              <label class="control-label">@lang('guardianDetails.attr.eligibility_end_date')</label>
                                              <input type="date" name="passport_end_date" id="eligbility_end_date" class="form-control">
                                          </div>
                                      </div>
                                  </div>
                                  <div class="row p-t-20">
                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <label class="control-label">Postal Address 1</label>
                                          <input type="text" name="address1" id="address1" class="form-control">
                                      </div>
                                  </div>
                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <label class="control-label">Postal Address 2</label>
                                          <input type="text" name="address2" id="address2" class="form-control">
                                      </div>
                                  </div>
                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <label class="control-label">Postal Address 3</label>
                                          <input type="text" name="address3" id="address3" class="form-control">
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
                                      <div class="col-md-4">
                                          <div class="form-group">
                                              <label class="control-label">@lang('guardianDetails.attr.demised_date')</label>
                                              <input type="date" name="demised_date" id="demised_date" class="form-control">
                                          </div>
                                      </div>
                                  </div>
                              
                              <h3 class="box-title m-t-40">@lang('dependantStudy.title')</h3>
                              <hr>
                              
                                  <div class="row p-t-20">
                                      <div class="col-md-4">
                                          <div class="form-group">
                                              <label class="control-label">@lang('dependantStudy.attr.study_start_date')</label>
                                              <input type="date" name="study_start_date" id="study_start_date" class="form-control">
                                          </div>
                                      </div>
                                      <div class="col-md-4">
                                          <div class="form-group">
                                              <label class="control-label">@lang('dependantStudy.attr.study_end_date')</label>
                                              <input type="date" name="expected_study_end_date" id="expected_study_end_date" class="form-control">
                                          </div>
                                      </div>
                                      <div class="col-md-4">
                                          <div class="form-group">
                                              <label class="control-label">@lang('dependantStudy.attr.status')</label>
                                              <select class="form-control">
                                                  <option selected disabled hidden>--Choose your status--
                                                  </option>
                                                  <option value="Full Time">Full Time</option>
                                                  <option value="Part Time">Part Time
                                                  </option>
                                              </select>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="row p-t-20">
                                      <div class="col-md-6">
                                          <div class="form-group">
                                              <label class="control-label">@lang('dependantStudy.attr.edu_level')</label>
                                              <select class="form-control">
                                                  <option selected disabled hidden>--Choose your Education
                                                      Level--
                                                  </option>
                                                  <option value="Certificate">Certificate</option>
                                                  <option value="Diploma">Diploma</option>
                                                  <option value="Degree">Degree</option>
                                                  <option value="Master">Master</option>
                                                  <option value="PHD">PHD</option>
                                                  <option value="Others">Others
                                                  </option>
                                              </select>
                                          </div>
                                      </div>
                              
                                      <div class="col-md-6">
                                          <div class="form-group">
                                              <label class="control-label">@lang('dependantStudy.attr.pls_specify')</label>
                                              <input type="text" name="please_specify" id="please_specify" class="form-control">
                                          </div>
                                      </div>
                                  </div>
                                  <div class="row p-t-20">
                                      <div class="col-md-6">
                                          <div class="form-group">
                                              <label class="control-label">@lang('dependantStudy.attr.course_name')</label>
                                              <input type="text" name="course_name" id="course_name" class="form-control">
                                          </div>
                                      </div>
                                      <div class="col-md-6">
                                          <div class="form-group">
                                              <label class="control-label">@lang('dependantStudy.attr.inst_univer_name')
                                              </label>
                                              <input type="text" name="institute_university_name" id="institute_university_name" class="form-control">
                                          </div>
                                      </div>
                                  </div>

                                  <h3 class="box-title m-t-40">@lang('applicantDetails.title')</h3>
                                  <hr>

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
                                                  <label class="control-label">@lang('applicantDetails.attr.amount')</label>
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

                                      <div class="form-actions">
                                              <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i>
                                                  Save</button>
                                              <button type="button" class="btn btn-inverse">Cancel</button>
                                          </div>
                              
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
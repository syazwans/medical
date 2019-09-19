<h6>Dependant Profiles</h6>  
<section>
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
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="control-label">@lang('dependantsProfile.attr.dateOfBirth')</label>
                            <input type="date" name="date_of_birth" id="date_of_birth" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="control-label">@lang('dependantsProfile.attr.married_date')
                            </label>
                            <input type="date" name="married_date" id="married_date" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="control-label">@lang('dependantsProfile.attr.registered_married')</label>
                            <select class="form-control">
                                {{-- <option selected disabled hidden>--Choose your answer--
                                </option> --}}
                                <option value="Yes">@lang('dependantsProfile.attr.yes')</option>
                                <option value="No">@lang('dependantsProfile.attr.no')
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="control-label">@lang('dependantsProfile.attr.edah')
                            </label>
                            <select class="form-control">
                                {{-- <option selected disabled hidden>--Choose your answer--
                                </option> --}}
                                <option value="Yes">@lang('dependantsProfile.attr.yes')</option>
                                <option value="No">@lang('dependantsProfile.attr.no')
                                </option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row p-t-20">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="control-label">@lang('dependantsProfile.attr.disability')</label>
                            <select class="form-control">
                                {{-- <option selected disabled hidden>--Choose your answer-- </option> --}}
                                <option value="Yes">@lang('dependantsProfile.attr.yes')</option>
                                <option value="No">@lang('dependantsProfile.attr.no')
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="control-label">@lang('dependantsProfile.attr.passport_expired')
                            </label>
                            <input type="date" name="passport_expired_date" id="passport_expired_date" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="control-label">@lang('dependantsProfile.attr.eligibility_start')</label>
                            <input type="date" name="eligbility_start_date" id="eligbility_start_date" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="control-label">@lang('dependantsProfile.attr.eligibility_end')</label>
                            <input type="date" name="eligbility_end_date" id="eligbility_end_date" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row p-t-20">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="control-label">@lang('dependantsProfile.attr.status')</label>
                            <select class="form-control">
                                {{-- <option selected disabled hidden>--Choose your answer--</option> --}}
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
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="control-label">@lang('dependantsProfile.attr.demised_date')</label>
                            <input type="date" name="demised_date" id="demised_date" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="control-label">@lang('dependantsProfile.attr.date_marriedOb')</label>
                            <input type="date" name="date_of_married_ob" id="date_of_married_ob" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="control-label">@lang('dependantsProfile.attr.disability_beforeAfter_death')</label>
                            <select class="form-control">
                                {{-- <option selected disabled hidden>--Choose your answer--</option> --}}
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
                                {{-- <option selected disabled hidden>--Choose your answer--
                                </option> --}}
                                <option value="Yes">@lang('dependantsProfile.attr.yes')</option>
                                <option value="No">@lang('dependantsProfile.attr.no')
                                </option>
                            </select>
                        </div>
                    </div>
                </div>
      </section>
<div class="tab-pane p-20 active" id="insured_person" role="tabpanel">

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body wizard-content">
                    <h3 class="card-title">@lang('insuredPerson.title')</h3>
                    <hr>
                    <form action="#" class="tab-wizard wizard-circle">
                        <div class="row p-t-20">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">@lang('insuredPerson.attr.name')</label>
                                    <input type="text" name="section_j_received" id="section_j_received"
                                        class="form-control">
                                </div>
                            </div>

                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('insuredPerson.attr.id_type')</label>
                                    <select class="form-control custom-select">
                                        <option value="">@lang('insuredPerson.attr.new_ic')</option>
                                        <option value="">@lang('insuredPerson.attr.old_ic')</option>
                                        <option value="">@lang('insuredPerson.attr.army_id')</option>
                                        <option value="">@lang('insuredPerson.attr.police_id')</option>
                                        <option value="">@lang('insuredPerson.attr.ssn_id')</option>
                                        <option value="">@lang('insuredPerson.attr.cid')</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('insuredPerson.attr.acceptance_stamp')
                                    </label>
                                    <input type="date" name="acceptance_stamp_date" id="acceptance_stamp_date"
                                        class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('insuredPerson.attr.dateOfBirth')</label>
                                    <input type="date" id="dateofbirth" class="form-control"
                                        placeholder="Date of Birth">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('insuredPerson.attr.race')</label>
                                    <select class="form-control custom-select" data-placeholder="Choose a Category"
                                        tabindex="1">
                                        <option value="Malay">@lang('insuredPerson.attr.malay')</option>
                                        <option value="Chinese">@lang('insuredPerson.attr.chinese')</option>
                                        <option value="Indian">@lang('insuredPerson.attr.indian')</option>
                                        <option value="Sabah">Bumiputera Sabah</option>
                                        <option value="Sarawak">Bumiputera Sarawak</option>
                                        <option value="Others">@lang('insuredPerson.attr.others')</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('insuredPerson.attr.gender')</label>

                                    <div class="custom-control custom-radio col-md-3">
                                        <input type="radio" id="customRadio11" name="customRadio"
                                            class="custom-control-input">
                                        <label class="custom-control-label" for="customRadio11">@lang('insuredPerson.attr.male')</label>
                                    </div>
                                    <div class="custom-control custom-radio col-md-3">
                                        <input type="radio" id="customRadio22" name="customRadio"
                                            class="custom-control-input">
                                        <label class="custom-control-label" for="customRadio22">@lang('insuredPerson.attr.female')</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('insuredPerson.attr.occupation')</label>

                                    <input type="text" id="occupation" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>@lang('insuredPerson.attr.postal_address1')</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>@lang('insuredPerson.attr.postal_address2')</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>@lang('insuredPerson.attr.postal_address3')</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label> @lang('insuredPerson.attr.city')</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('insuredPerson.attr.state')</label>
                                    <select class="form-control custom-select" data-placeholder="Choose a Category"
                                        tabindex="1">
                                        <option value="Johor">Johor</option>
                                        <option value="Kedah">Kedah</option>
                                        <option value="Kelantan">Kelantan</option>
                                        <option value="Melaka">Melaka</option>
                                        <option value="NegeriSembilan">Negeri Sembilan</option>
                                        <option value="Pahang">Pahang</option>
                                        <option value="Penang">Penang</option>
                                        <option value="Perak">Perak</option>
                                        <option value="Perlis">Perlis</option>
                                        <option value="Sabah">Sabah</option>
                                        <option value="Sarawak">Sarawak</option>
                                        <option value="Selangor">Selangor</option>
                                        <option value="Terengganu">Terengganu</option>
                                        <option value="KualaLumpur">W.P Kuala Lumpur</option>
                                        <option value="Labuan">W.P Labuan</option>
                                        <option value="Putrajaya">W.P Putrajaya</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>@lang('insuredPerson.attr.postcode')</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>@lang('insuredPerson.attr.telNo')</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>@lang('insuredPerson.attr.mobileNo')</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>@lang('insuredPerson.attr.email')</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('insuredPerson.attr.citizen')</label>
                                    <select class="form-control custom-select" data-placeholder="Choose a Category"
                                        tabindex="1">
                                        <option selected disabled hidden>--Choose your answer-- </option>
                                        <option value="Malay">Warganegara</option>
                                        <option value="Chinese">Bumiputera</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

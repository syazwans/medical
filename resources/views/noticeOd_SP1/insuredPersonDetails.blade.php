<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                {{-- <form action="#"> --}}
                <form action="{{ route('noticeOd.GetOBDetails', $obprofile->id) }}" method="POST">
                    <div class="form-body">
                        <h3 class="card-title">@lang('insuredPerson.title')</h3>
                        <hr>
                        <div class="row p-t-20">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">@lang('insuredPerson.attr.name')</label>
                                    <input type="text" id="name" value="{{ $obprofile->name }}" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('insuredPerson.attr.id_type')</label>
                                    <input type="text" id="idtype" value="{{ $obprofile->idtype }}" class="form-control">
                                  {{--   <select class="form-control">
                                        <option>@lang('insuredPerson.attr.choose_id_type')</option>
                                        <option value="">@lang('insuredPerson.attr.new_ic')</option>
                                        <option value="">@lang('insuredPerson.attr.old_ic')</option>
                                        <option value="">@lang('insuredPerson.attr.army_id')</option>
                                        <option value="">@lang('insuredPerson.attr.police_id')</option>
                                        <option value="">@lang('insuredPerson.attr.ssn_id')</option>
                                        <option value="">@lang('insuredPerson.attr.cid')</option>
                                    </select>
 --}}                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('insuredPerson.attr.id_no')</label>
                                    <input type="text" id="ic_no" value="{{ $obprofile->ic_no }}" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">@lang('insuredPerson.attr.dateOfBirth')</label>
                                    <input type="date" id="dob" value="{{ $obprofile->dob }}" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">@lang('insuredPerson.attr.race')</label>
                                    <input type="text" id="race" value="{{ $obprofile->race }}" class="form-control">
                                    {{-- <select class="form-control"> 
                                        <option>@lang('insuredPerson.attr.choose_race')</option>
                                        <option value="Malay">@lang('insuredPerson.attr.malay')</option>
                                        <option value="Chinese">@lang('insuredPerson.attr.chinese')</option>
                                        <option value="Indian">@lang('insuredPerson.attr.indian')</option>
                                        <option value="Sabah">Bumiputera Sabah</option>
                                        <option value="Sarawak">Bumiputera Sarawak</option>
                                        <option value="Others">@lang('insuredPerson.attr.others')</option>
                                    </select> --}}
                                </div>
                            </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="control-label">@lang('insuredPerson.attr.gender')</label>
                                <input type="text" id="gender" value="{{ $obprofile->gender }}" class="form-control">
                                {{-- <select class="form-control">
                                    <option>@lang('insuredPerson.attr.choose_gender')</option>
                                    <option value="Completed">@lang('insuredPerson.attr.male')</option>
                                    <option value="{{ $obprofile->gender }}">@lang('insuredPerson.attr.female')</option>
                                </select> --}}
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="control-label">@lang('insuredPerson.attr.occupation')</label>
                                <input type="text" id="occupation" value="{{ $obprofile->occupation }}" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row p-t-20">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>@lang('insuredPerson.attr.postal_address1')</label>
                                <input type="text" value="{{ $obprofile->address1 }}" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>@lang('insuredPerson.attr.postal_address2')</label>
                                <input type="text" value="{{ $obprofile->address2 }}" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>@lang('insuredPerson.attr.postal_address3')</label>
                                <input type="text" value="{{ $obprofile->address3 }}" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>@lang('insuredPerson.attr.city')</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">@lang('insuredPerson.attr.state')</label>
                                <input type="text" id="state" value="{{ $obprofile->state }}" class="form-control">
                             {{--    <select class="form-control" tabindex="1">
                                <option>@lang('insuredPerson.attr.choose_state')</option>
                                <option value="{{ $obprofile->state }}"></option>
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
                            </select> --}}
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>@lang('insuredPerson.attr.postcode')</label>
                            <input type="text" id="postcode" value="{{ $obprofile->postcode }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>@lang('insuredPerson.attr.telNo')</label>
                            <input type="text" id="telNo" value="{{ $obprofile->telNo }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>@lang('insuredPerson.attr.mobileNo')</label>
                            <input type="text" id="mobileNo" value="{{ $obprofile->mobileNo }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>@lang('insuredPerson.attr.email')</label>
                            <input type="text" id="email" value="{{ $obprofile->email }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="control-label">@lang('insuredPerson.attr.citizen')</label>
                            <input type="text" id="citizen" value="{{ $obprofile->citizen }}" class="form-control">
                            {{-- <select class="form-control" tabindex="1">
                            <option>@lang('insuredPerson.attr.choose_citizen')</option>   
                            <option value="Warganegara">Warganegara</option>
                            <option value="Bumiputera">Bumiputera</option>
                        </select> --}}
                    </div>
                </div>
                <div class="form-actions">
                        <button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.cancel')</button>
                        <button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.clear')</button>
                        <button type="submit" class="btn btn waves-effect waves-light btn-success"> <i class="fa fa-check"></i>
                        @lang('insuredPerson.save')</button>
                    </div>
            </div>
        </div>
    </form>
</div>
</div>
</div>
</div>

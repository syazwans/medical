<div class="tab-pane  p-20" id="employer_details" role="tabpanel">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form action="#">
                        <div class="form-body">
                            <h3 class="card-title">@lang('employerDetails.title')</h3>
                            <hr>
                            <div class="row p-t-20">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">@lang('employerDetails.attr.employerCode')</label>
                                        <input type="text" id="employerCode" class="form-control">
                                    </div>
                                </div>
                              
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">@lang('employerDetails.attr.employerType')</label>
                                        <input type="text" id="employerType" class="form-control">
                                    </div>
                                </div>

                            </div>
                            <div class="row p-t-20">

                                   
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">@lang('employerDetails.attr.employerName')</label>
                                            <input type="text" id="employerName" class="form-control form-control">
                                        </div>
                                    </div>
                                  
    
                                </div>
                            <div class="row p-t-20">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label
                                            class="control-label">@lang('employerDetails.attr.postal_address1')</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label
                                            class="control-label">@lang('employerDetails.attr.postal_address2')</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label
                                            class="control-label">@lang('employerDetails.attr.postal_address3')</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row p-t-20">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('employerDetails.attr.postcode')</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>@lang('employerDetails.attr.city')</label>
                                        <input type="text" class="form-control">
                                        {{-- <select class="select2 form-control custom-select" >
                                        <option>@lang('employerDetails.attr.select_city')</option>
                                        <option>Kuala Lumpur</option>
                                        <option>Petaling Jaya</option>
                                        <option>Rawang</option>
                                        <option>Klang</option>
                                        <option>Kajang</option>
                                        <option>Tanjung Karang</option>
                                        <option>Ipoh</option>
                                        <option>Taiping</option>
                                        <option>Kuala Kangsar</option>
                                        <option>Tapah</option>
                                        <option>Teluk Intan</option>
                                        <option>Manjung</option>
                                        <option>Seberang Jaya</option>
                                        <option>George Town</option>
                                        <option>Alor Setar</option>
                                        <option>Langkawi</option>
                                        <option>Sungai Petani</option>
                                        <option>Kulim</option>
                                        <option>Kangar</option>
                                        <option>Seremban</option>
                                        <option>Kuala Pilah</option>
                                        <option>Ayer Keroh</option>
                                        <option>Johor Bahru</option>
                                        <option>Muar</option>
                                        <option>Batu Pahat</option>
                                        <option>Kluang</option>
                                        <option>Segamat</option>
                                        <option>Kuantan</option>
                                        <option>Temerloh</option>
                                        <option>Bentong</option>
                                        <option>Kuala Terengganu</option>
                                        <option>Kemaman</option>
                                        <option>Dungun</option>
                                        <option>Kota Bharu</option>
                                        <option>Kuala Krai</option>
                                        <option>Labuan</option>
                                        <option>Kota Kinabalu</option>
                                        <option>Tawau</option>
                                        <option>Lahad Datu</option>
                                        <option>Keningau</option>
                                        <option>Sandakan</option>
                                        <option>Kota Marudu</option>
                                        <option>Beaufort</option>
                                        <option>Kuching</option>
                                        <option>Miri</option>
                                        <option>Sri Aman</option>
                                        <option>Bintulu</option>
                                        <option>Sibu</option>
                                        <option>Kapit</option>
                                        <option>Sarikei</option>
                                        <option>Mukah</option>
                                        <option>Limbang</option>
                                        <option>Serian</option>
                                        </select> --}}
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('employerDetails.attr.state')</label>
                                        <select class="form-control">
                                            {{-- <option>@lang('employerDetails.attr.select_city')</option> --}}
                                            <option>Johor</option>
                                            <option>Kedah</option>
                                            <option>Melaka</option>
                                            <option>Negeri Sembilan</option>
                                            <option>Pahang</option>
                                            <option>Penang</option>
                                            <option>Perak</option>
                                            <option>Perlis</option>
                                            <option>Sabah</option>
                                            <option>Sarawak</option>
                                            <option>Selangor</option>
                                            <option>Terrenganu</option>
                                            <option>Kuala Lumpur</option>
                                            <option>Labuan</option>
                                            <option>Putrajaya</option>

                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row p-t-20">
                                <div class="col-md-4 ">
                                    <div class="form-group">
                                        <label>@lang('employerDetails.attr.telNo')</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>@lang('employerDetails.attr.faxNo')</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>@lang('employerDetails.attr.email')</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                                <button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.cancel')</button>
                                <button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.clear')</button>
                                <button type="submit" class="btn btn waves-effect waves-light btn-success"> <i class="fa fa-check"></i>
                                @lang('insuredPerson.save')</button>
                                
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

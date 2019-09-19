<!-- Validation wizard -->
<div class="row" id="validation">
    <div class="col-lg-12">
        <div class="card wizard-content">
            <div class="card-body">
                <h4 class="card-title">@lang('medical_board/appointment.set_appointment')</h4>
                {{-- <h6 class="card-subtitle">You can us the validation like what we did</h6> --}}
                <hr>
                <form action="#" class="validation-wizard wizard-circle">
                    <!-- Step 1 -->
                    <h6>@lang('medical_board/appointment.set_appointment')</h6>
                    <section>
                        <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('medical_board/appointment.attr.appointment_date')</label>
                                    <input type="date" class="form-control" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('medical_board/appointment.attr.sidang')</label>
                                    <select name="sidang" class="form-control {{-- required --}}">
                                        <option>Choose @lang('medical_board/appointment.attr.sidang') :</option>
                                        <option value="Morning">Morning</option>
                                        <option value="Evening">Evening</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">@lang('medical_board/appointment.attr.record_office')</label>
                                    <input type="text" class="form-control" readonly>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">@lang('medical_board/appointment.attr.venue')</label>
                                    <input type="text" name="venue" class="form-control {{-- required --}}">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">@lang('medical_board/appointment.attr.address')</label>
                                    <textarea name="address" class="form-control {{-- required --}}" rows="4"></textarea>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Step 2 -->
                    <h6>Panel</h6>
                    <section>
                        <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('medical_board/appointment.attr.state')</label>
                                    <select name="state" class="form-control{{-- required --}}" id="set_app_state" style="width: 100%;">
                                        <option>Choose @lang('medical_board/appointment.attr.state') :</option>
                                        <option value="">Wilayah Persekutuan Kuala Lumpur</option>
                                        <option value="">Pahang</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('medical_board/appointment.attr.hospital')</label>
                                    <select name="hospital" class="form-control{{-- required --}}" id="set_app_hospital" style="width: 100%;">
                                        <option>Choose @lang('medical_board/appointment.attr.hospital') :</option>
                                        <option value="">Hospital KL</option>
                                        <option value="">Hoshah</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">@lang('medical_board/appointment.attr.speciality')</label>
                                    <select name="speciality" class="form-control {{-- required --}}" id="set_app_speciality" style="width: 100%;">
                                        <option>Choose @lang('medical_board/appointment.attr.speciality') :</option>
                                        <option value="">OHD</option>
                                        <option value="">DENTAL</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">@lang('medical_board/appointment.attr.panel')</label>
                                    <div class="input-group">
                                        <select name="panel" class="form-control" required id="set_app_panel" style="width:100%; display:block;">
                                            <option>Choose @lang('medical_board/appointment.attr.panel') :</option>
                                            <option value="">Dr. Fawwaz</option>
                                            <option value="">Dr. Nizam</option>
                                        </select>
                                        <div class="input-group-append">
                                            <button class="btn btn waves-effect waves-light btn-success" type="button" onclick="panel_fields();"><i class="fa fa-plus"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="panel_fields" class="col-md-12"></div>
                        </div>
                    </section>
                    <!-- Step 3 -->
                    <h6>Chairman & Sectariat</h6>
                    <section>
                        <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('medical_board/appointment.attr.state')</label>
                                    <select name="state" class="form-control {{-- required --}}" id="set_app_state2" style="width: 100%;">
                                        <option>Choose @lang('medical_board/appointment.attr.state') :</option>
                                        <option value="">Wilayah Persekutuan Kuala Lumpur</option>
                                        <option value="">Pahang</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('medical_board/appointment.attr.hospital')</label>
                                    <select name="hospital" class="form-control {{-- required --}}" id="set_app_hospital2" style="width: 100%;">
                                        <option>Choose @lang('medical_board/appointment.attr.hospital') :</option>
                                        <option value="">Hospital KL</option>
                                        <option value="">Hoshah</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">@lang('medical_board/appointment.attr.chairman')</label>
                                    <select name="chairman" class="form-control {{-- required --}}" id="set_app_chairman" style="width: 100%;">
                                        <option>Choose @lang('medical_board/appointment.attr.chairman') :</option>
                                        <option value="">En. Mohd Syukri</option>
                                        <option value="">En. Azim Adnan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">@lang('medical_board/appointment.attr.sectariat')</label>
                                    <select name="sectariat" class="form-control {{-- required --}}" id="set_app_sectariat" style="width: 100%;">
                                        <option>Choose @lang('medical_board/appointment.attr.sectariat') :</option>
                                        <option value="">OHD</option>
                                        <option value="">DENTAL</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </section>
                </form>
            </div>
        </div>
    </div>
</div>

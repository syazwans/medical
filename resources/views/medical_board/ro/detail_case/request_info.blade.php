<div class="modal fade" id="request_info" tabindex="-1" role="dialog" aria-labelledby="request_info">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="request_info">@lang('medical_board/index.request_info')</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <form novalidate>
                    {{ csrf_field() }}
                    <div class="form-group">
                        <h5>@lang('medical_board/modal.request_info.medical_report')</h5>
                        {{-- <div class="controls"> --}}
                            <div class="row">
                                <div class="col-md-6">
                                    <fieldset>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" value="ophthalmology" name="medical_report" {{-- required --}} class="custom-control-input" id="ophthalmology">
                                            <label class="custom-control-label" for="ophthalmology">OPHTHALMOLOGY</label>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" value="ent" name="medical_report" class="custom-control-input" id="ent">
                                            <label class="custom-control-label" for="ent">ENT</label>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" value="orl" name="medical_report" class="custom-control-input" id="orl">
                                            <label class="custom-control-label" for="orl">ORL</label>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" value="echo" name="medical_report" class="custom-control-input" id="echo">
                                            <label class="custom-control-label" for="echo">ECHO</label>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" value="cardiology" name="medical_report" class="custom-control-input" id="cardiology">
                                            <label class="custom-control-label" for="cardiology">CARDIOLOGY</label>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" value="ortho" name="medical_report" class="custom-control-input" id="ortho">
                                            <label class="custom-control-label" for="ortho">ORTHO</label>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" value="psy" name="medical_report" class="custom-control-input" id="psy">
                                            <label class="custom-control-label" for="psy">PSY</label>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" value="neurology" name="medical_report" class="custom-control-input" id="neurology">
                                            <label class="custom-control-label" for="neurology">NEUROLOGY</label>
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="col-md-6">
                                    <fieldset>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" value="oncology" name="medical_report" class="custom-control-input" id="oncology">
                                            <label class="custom-control-label" for="oncology">ONCOLOGY</label>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" value="nephrology" name="medical_report" class="custom-control-input" id="nephrology">
                                            <label class="custom-control-label" for="nephrology">NEPHROLOGY</label>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" value="dermatology" name="medical_report" class="custom-control-input" id="dermatology">
                                            <label class="custom-control-label" for="dermatology">DERMATOLOGY</label>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" value="plastic" name="medical_report" class="custom-control-input" id="plastic">
                                            <label class="custom-control-label" for="plastic">PLASTIC</label>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" value="respiratory" name="medical_report" class="custom-control-input" id="respiratory">
                                            <label class="custom-control-label" for="respiratory">RESPIRATORY</label>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" value="surgical" name="medical_report" class="custom-control-input" id="surgical">
                                            <label class="custom-control-label" for="surgical">SURGICAL</label>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" value="dental" name="medical_report" class="custom-control-input" id="dental">
                                            <label class="custom-control-label" for="dental">DENTAL</label>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                        {{-- </div> --}}
                    </div>
                    <div class="form-group">
                        <h5>@lang('medical_board/modal.request_info.special_investigation')</h5>
                        {{-- <div class="controls"> --}}
                            <div class="row">
                                <div class="col-md-6">
                                    <fieldset>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" value="mri" name="special_investigation" {{-- required --}} class="custom-control-input" id="mri">
                                            <label class="custom-control-label" for="mri">MRI</label>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" value="audiogram" name="special_investigation" class="custom-control-input" id="audiogram">
                                            <label class="custom-control-label" for="audiogram">AUDIOGRAM</label>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" value="ct_scan" name="special_investigation" class="custom-control-input" id="ct_scan">
                                            <label class="custom-control-label" for="ct_scan">CT SCAN</label>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" value="xray" name="special_investigation" class="custom-control-input" id="xray">
                                            <label class="custom-control-label" for="xray">XRAY</label>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" value="echo" name="special_investigation" class="custom-control-input" id="echo1">
                                            <label class="custom-control-label" for="echo1">ECHO</label>
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="col-md-6">
                                    <fieldset>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" value="lung_function_test" name="special_investigation" class="custom-control-input" id="lung_function_test">
                                            <label class="custom-control-label" for="lung_function_test">LUNG FUNCTION TEST</label>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" value="noise_mapping" name="special_investigation" class="custom-control-input" id="noise_mapping">
                                            <label class="custom-control-label" for="noise_mapping">NOISE MAPPING</label>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" value="visual_test" name="special_investigation" class="custom-control-input" id="visual_test">
                                            <label class="custom-control-label" for="visual_test">VISUAL TEST</label>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" value="lab_result" name="special_investigation" class="custom-control-input" id="lab_result">
                                            <label class="custom-control-label" for="lab_result">LAB RESULT</label>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                        {{-- </div> --}}
                    </div>
                    <div class="form-group">
                        <label for="others" class="control-label">@lang('medical_board/modal.request_info.others')</label>
                        {{-- <div class="controls"> --}}
                            <textarea class="form-control" id="others" {{-- required data-validation-required-message="This field is required" --}} ></textarea>
                        {{-- </div> --}}
                    </div>
                    <div class="form-group">
                        <h5>@lang('medical_board/modal.request_info.benefit_query')</h5>
                        {{-- <div class="controls"> --}}
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" {{-- required --}} value="benefit_query" class="custom-control-input" id="benefit_query">
                                <label class="custom-control-label" for="benefit_query">@lang('medical_board/modal.request_info.penukaran_notis')</label>
                            </div>
                        {{-- </div> --}}
                    </div>
            </div>
            <div class="modal-footer">
                <div class="align-self-center text-left">
                <button type="button" class="btn btn waves-effect waves-light btn-danger" data-dismiss="modal">@lang('medical_board/modal.cancel')</button></div>
                <button type="submit" class="btn btn waves-effect waves-light btn-success"><i class="fa fa-check"></i> @lang('medical_board/modal.save')</button>
                </form>
            </div>
        </div>
    </div>
</div>

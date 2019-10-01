<div class="modal fade" id="modal_document" tabindex="-1" role="dialog" aria-labelledby="modal_document">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modal_document">Request Document</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <form novalidate>
                    {{ csrf_field() }}
                    <div class="form-group">
                        <h5>Request Document</h5>
                        <div class="row">
                            <div class="col-md-6">
                                <fieldset>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" value="MRI" name="medical_report" {{-- required --}} class="custom-control-input" id="ophthalmology">
                                        <label class="custom-control-label" for="ophthalmology">MRI</label>
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" value="Skin Prick Test" name="medical_report" class="custom-control-input" id="ent">
                                        <label class="custom-control-label" for="ent">Skin Prick Test</label>
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" value="Laporan Perubatan" name="medical_report" class="custom-control-input" id="orl">
                                        <label class="custom-control-label" for="orl">Laporan Perubatan</label>
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" value="Ergonomic Risk Assesment (ERA) Report" name="medical_report" class="custom-control-input" id="echo">
                                        <label class="custom-control-label" for="echo">Ergonomic Risk Assesment (ERA) Report</label>
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" value="CT Scan" name="medical_report" class="custom-control-input" id="cardiology">
                                        <label class="custom-control-label" for="cardiology">CT Scan</label>
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" value="Chemical Monitoring Report" name="medical_report" class="custom-control-input" id="ortho">
                                        <label class="custom-control-label" for="ortho">Chemical Monitoring Report</label>
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" value="Noise Mapping" name="medical_report" class="custom-control-input" id="psy">
                                        <label class="custom-control-label" for="psy">Noise Mapping</label>
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" value="Chemical Health Risk Assessment (CHRA) Report" name="medical_report" class="custom-control-input" id="neurology">
                                        <label class="custom-control-label" for="neurology">Chemical Health Risk Assessment (CHRA) Report</label>
                                    </div>
                                </fieldset>
                            </div>
                            <div class="col-md-6">
                                <fieldset>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" value="Audiogram" name="medical_report" class="custom-control-input" id="oncology">
                                        <label class="custom-control-label" for="oncology">Audiogram</label>
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" value="Safety Data Sheet (SDS)" name="medical_report" class="custom-control-input" id="nephrology">
                                        <label class="custom-control-label" for="nephrology">Safety Data Sheet (SDS)</label>
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" value="Echo" name="medical_report" class="custom-control-input" id="dermatology">
                                        <label class="custom-control-label" for="dermatology">Echo</label>
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" value="Activity of Daily Living (ADL) Report" name="medical_report" class="custom-control-input" id="plastic">
                                        <label class="custom-control-label" for="plastic">Activity of Daily Living (ADL) Report</label>
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" value="Lung Function Test" name="medical_report" class="custom-control-input" id="respiratory">
                                        <label class="custom-control-label" for="respiratory">Lung Function Test</label>
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" value="Pengesahan Sijil Cuti Sakit" name="medical_report" class="custom-control-input" id="surgical">
                                        <label class="custom-control-label" for="surgical">Pengesahan Sijil Cuti Sakit</label>
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" value="Visual Equity" name="medical_report" class="custom-control-input" id="dental">
                                        <label class="custom-control-label" for="dental">Visual Equity </label>
                                    </div>
                                </fieldset>
                                <fieldset>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" value="Others (Remark)" name="medical_report" class="custom-control-input" id="dental">
                                            <label class="custom-control-label" for="dental">Others (Remark)</label>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" value="HVF" name="medical_report" class="custom-control-input" id="dental">
                                                <label class="custom-control-label" for="dental">HVF</label>
                                            </div>
                                        </fieldset>
                        
                
                            </div>
                        </div>
                    </div>
                    
                    <div class="modal-footer">
                        <div class="align-self-center text-left">
                        <button type="button" class="btn btn waves-effect waves-light btn-danger" data-dismiss="modal">@lang('medical_board/modal.cancel')</button></div>
                        <button type="button" class="btn btn waves-effect waves-light btn-success submitModal" value=""><i class="fa fa-check"></i> @lang('medical_board/modal.save')</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
    
    
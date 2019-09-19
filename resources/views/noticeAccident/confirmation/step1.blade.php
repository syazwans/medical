
<section>
    <div class="row p-t-20">
        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label">@lang('confirmation.attr.sectionj_received')</label>
                <select class="form-control">
                    {{-- <option selected disabled hidden>Choose your answer</option> --}}
                    <option value="Completed">@lang('confirmation.attr.complete')</option>
                    <option value="Not Completed">@lang('confirmation.attr.not_complete')</option>
                </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label">@lang('confirmation.attr.complete_sectionj')
                </label>
                <input type="date" name="section_j_received_date" id="section_j_received_date" class="form-control">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label class="control-label">@lang('confirmation.attr.remarks')</label>
                <input type="text" name="remarks" id="remarks" class="form-control">
            </div>
        </div>
    </div>
</section>

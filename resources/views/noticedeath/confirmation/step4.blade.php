<h6>@lang('dependantStudy.title')</h6>
<section>
    <div class="row p-t-20">
        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label">@lang('dependantStudy.attr.study_start_date')</label>
                <input type="date" name="study_start_date" id="study_start_date" class="form-control">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label">@lang('dependantStudy.attr.study_end_date')</label>
                <input type="date" name="expected_study_end_date" id="expected_study_end_date" class="form-control">
            </div>
        </div>
    </div>
    <div class="row p-t-20">
        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label">@lang('dependantStudy.attr.status')</label>
                <select class="form-control custom-select">
                    <option selected disabled hidden>--Choose your status--
                    </option>
                    <option value="Full Time">Full Time</option>
                    <option value="Part Time">Part Time
                    </option>
                </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label">@lang('dependantStudy.attr.edu_level')</label>
                <select class="form-control custom-select">
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
    </div>
    <div class="row p-t-20">
        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label">@lang('dependantStudy.attr.pls_specify')</label>
                <input type="text" name="please_specify" id="please_specify" class="form-control">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label">@lang('dependantStudy.attr.course_name')</label>
                <input type="text" name="course_name" id="course_name" class="form-control">
            </div>
        </div>
    </div>
    <div class="row p-t-20">
        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label">@lang('dependantStudy.attr.inst_univer_name')
                </label>
                <input type="text" name="institute_university_name" id="institute_university_name" class="form-control">
            </div>
        </div>
    </div>
</section>

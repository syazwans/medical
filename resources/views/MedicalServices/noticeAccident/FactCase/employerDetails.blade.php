<div class="card-body">
    <div class="form-body">
        <div class="row p-t-20">
            <div class="col-md-12">
                <div class="form-group">
                    <label class="control-label">@lang('Employer Name :')</label>
                    <input type="text" value="@isset($FactC->empname) {{$FactC->empname}} @endisset" class="form-control" readonly>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label">@lang('Industries Code :')</label>
                    <input type="text" value="@isset($FactC->empcode) {{$FactC->empcode}} @endisset" class="form-control" readonly>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label">@lang('Type Of Industry :')</label>
                    <input type="text" value="@isset($FactC->emptype) {{$FactC->emptype}} @endisset" class="form-control" readonly>
                </div>
            </div>
        </div>
    </div>
</div>
    
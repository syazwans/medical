<div class="card-body">
    <div class="form-body">
        <div class="row p-t-20">
            
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label">@lang('Name :')</label>
                    <input type="text" value="@isset($FactC->name) {{$FactC->name}} @endisset" class="form-control" readonly>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label">@lang('ID No :')</label>
                    <input type="text" value="@isset($FactC->idno) {{$FactC->idno}} @endisset" class="form-control" readonly>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label">@lang('Occupation :')</label>
                    <input type="text" value="@isset($FactC->occupation) {{$FactC->occupation }} @endisset" class="form-control" readonly>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label">@lang('Job Description :')</label>
                    <input type="text" value="@isset($FactC->jobdesc1) {{$FactC->jobdesc1}} @endisset" class="form-control" readonly>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <div class="form-body">
            <h4 class="card-title">Doctor Details</h4>
            <div class="row p-t-20">
                <div class="col-md-12">
                    <div class="form-group">

                        <br>
                        <label class="control-label">@lang('Opinion :')</label>
                        <input type="text"
                            value=""
                            class="form-control" readonly>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label">@lang('Recommendation :')</label>
                        <textarea type="text" rows="7" class="form-control"
                            readonly>@isset($cCase->injurydesc) {{$cCase->injurydesc}} @endisset</textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label">@lang('Prepare By :')</label>
                        <input type="text"
                            value="@isset($cCase->hukpotential) {{$cCase->hukpotential}} @endisset"
                            class="form-control" readonly>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">@lang('Date :')</label>
                        <input type="date"
                            value=""
                            class="form-control" readonly>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
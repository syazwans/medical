<div class="tab-pane  p-20" id="wages" role="tabpanel">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form action="#">
                        <div class="form-body">
                            <h3 class="card-title">@lang('wages.title')</h3>
                            <hr>
                            <div class="row p-t-20">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Company Name</label>
                                            <select class="form-control " tabindex="1">
                                                <option value="EASS">EASS Sdn Bhd</option>
                                                <option value="Hitachi">Hitachi ebWorx</option>
                                                <option value="Heitech">Heitech Padu Bethad</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            <div class="row p-t-20">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('wages.attr.commencement_date')</label>
                                        <input type="date" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('wages.attr.end_date')</label>
                                        <input type="date" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Are wages paid on the day of accident?</label>
                                        <select class="form-control custom-
                                                    ;select" data-placeholder="Choose a Category" tabindex="1">
                                            <option value="yes">@lang('wages.attr.yes')</option>
                                            <option value="no">@lang('wages.attr.no')</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- Column -->
                            <div class="row p-t-20">
                                <div class="col-12">
                                    <div class="card">
                                        <label>@lang('wages.attr.details_wages')</label>
                                        <div class="table-responsive">
                                            <table id="demo-foo-row-toggler" class="table table-bordered"
                                                data-toggle-column="first">
                                                <thead>
                                                    <tr>
                                                        <th data-breakpoints="xs">@lang('wages.attr.num')</th>
                                                        <th>@lang('wages.attr.month')</th>
                                                        <th>@lang('wages.attr.year')</th>
                                                        <th data-breakpoints="xs sm">@lang('wages.attr.wages')</th>
                                                        <th data-breakpoints="xs">@lang('wages.attr.contribution')</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr data-expanded="true">
                                                        <td>1</td>
                                                        <td>
                                                            <div class="col-md-10">
                                                                <select class="form-control"
                                                                    data-placeholder="Month" tabindex="2">
                                                                    {{-- <option>@lang('wages.attr.select_month')</option> --}}
                                                                    <option value="January">@lang('wages.attr.january')
                                                                    </option>
                                                                    <option value="February">
                                                                        @lang('wages.attr.february')</option>
                                                                    <option value="March">@lang('wages.attr.march')
                                                                    </option>
                                                                    <option value="April">@lang('wages.attr.april')
                                                                    </option>
                                                                    <option value="May">@lang('wages.attr.may')</option>
                                                                    <option value="June">@lang('wages.attr.june')
                                                                    </option>
                                                                    <option value="July">@lang('wages.attr.july')
                                                                    </option>
                                                                    <option value="August">@lang('wages.attr.august')
                                                                    </option>
                                                                    <option value="September">
                                                                        @lang('wages.attr.september')</option>
                                                                    <option value="October">@lang('wages.attr.october')
                                                                    </option>
                                                                    <option value="November">
                                                                        @lang('wages.attr.november')</option>
                                                                    <option value="December">
                                                                        @lang('wages.attr.december')</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="col-md-10">
                                                                    <input type="text" class="form-control">
                                                            </div>
                                                        </td>
                                                        <td><input type="text" class="form-control"></td>
                                                        <td><input type="text" class="form-control"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>
                                                            <div class="col-md-10">
                                                                <select class="form-control"
                                                                    data-placeholder="Month" tabindex="2">
                                                                    {{-- <option>@lang('wages.attr.select_month')</option> --}}
                                                                    <option value="January">@lang('wages.attr.january')
                                                                    </option>
                                                                    <option value="February">
                                                                        @lang('wages.attr.february')</option>
                                                                    <option value="March">@lang('wages.attr.march')
                                                                    </option>
                                                                    <option value="April">@lang('wages.attr.april')
                                                                    </option>
                                                                    <option value="May">@lang('wages.attr.may')</option>
                                                                    <option value="June">@lang('wages.attr.june')
                                                                    </option>
                                                                    <option value="July">@lang('wages.attr.july')
                                                                    </option>
                                                                    <option value="August">@lang('wages.attr.august')
                                                                    </option>
                                                                    <option value="September">
                                                                        @lang('wages.attr.september')</option>
                                                                    <option value="October">@lang('wages.attr.october')
                                                                    </option>
                                                                    <option value="November">
                                                                        @lang('wages.attr.november')</option>
                                                                    <option value="December">
                                                                        @lang('wages.attr.december')</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="col-md-10">
                                                                    <input type="text" class="form-control">
                                                            </div>
                                                        </td>
                                                        <td><input type="text" class="form-control"></td>
                                                        <td><input type="text" class="form-control"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>
                                                            <div class="col-md-10">
                                                                <select class="form-control"
                                                                    data-placeholder="Month" tabindex="2">
                                                                    {{-- <option>@lang('wages.attr.select_month')</option> --}}
                                                                    <option value="January">@lang('wages.attr.january')
                                                                    </option>
                                                                    <option value="February">
                                                                        @lang('wages.attr.february')</option>
                                                                    <option value="March">@lang('wages.attr.march')
                                                                    </option>
                                                                    <option value="April">@lang('wages.attr.april')
                                                                    </option>
                                                                    <option value="May">@lang('wages.attr.may')</option>
                                                                    <option value="June">@lang('wages.attr.june')
                                                                    </option>
                                                                    <option value="July">@lang('wages.attr.july')
                                                                    </option>
                                                                    <option value="August">@lang('wages.attr.august')
                                                                    </option>
                                                                    <option value="September">
                                                                        @lang('wages.attr.september')</option>
                                                                    <option value="October">@lang('wages.attr.october')
                                                                    </option>
                                                                    <option value="November">
                                                                        @lang('wages.attr.november')</option>
                                                                    <option value="December">
                                                                        @lang('wages.attr.december')</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="col-md-10">
                                                                    <input type="text" class="form-control">
                                                            </div>
                                                        </td>
                                                        <td><input type="text" class="form-control"></td>
                                                        <td><input type="text" class="form-control"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>
                                                            <div class="col-md-10">
                                                                <select class="form-control"
                                                                    data-placeholder="Month" tabindex="2">
                                                                    {{-- <option>@lang('wages.attr.select_month')</option> --}}
                                                                    <option value="January">@lang('wages.attr.january')
                                                                    </option>
                                                                    <option value="February">
                                                                        @lang('wages.attr.february')</option>
                                                                    <option value="March">@lang('wages.attr.march')
                                                                    </option>
                                                                    <option value="April">@lang('wages.attr.april')
                                                                    </option>
                                                                    <option value="May">@lang('wages.attr.may')</option>
                                                                    <option value="June">@lang('wages.attr.june')
                                                                    </option>
                                                                    <option value="July">@lang('wages.attr.july')
                                                                    </option>
                                                                    <option value="August">@lang('wages.attr.august')
                                                                    </option>
                                                                    <option value="September">
                                                                        @lang('wages.attr.september')</option>
                                                                    <option value="October">@lang('wages.attr.october')
                                                                    </option>
                                                                    <option value="November">
                                                                        @lang('wages.attr.november')</option>
                                                                    <option value="December">
                                                                        @lang('wages.attr.december')</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="col-md-10">
                                                                    <input type="text" class="form-control">
                                                            </div>
                                                        </td>
                                                        <td><input type="text" class="form-control"></td>
                                                        <td><input type="text" class="form-control"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>5</td>
                                                        <td>
                                                            <div class="col-md-10">
                                                                <select class="form-control"
                                                                    data-placeholder="Month" tabindex="2">
                                                                    {{-- <option>@lang('wages.attr.select_month')</option> --}}
                                                                    <option value="January">@lang('wages.attr.january')
                                                                    </option>
                                                                    <option value="February">
                                                                        @lang('wages.attr.february')</option>
                                                                    <option value="March">@lang('wages.attr.march')
                                                                    </option>
                                                                    <option value="April">@lang('wages.attr.april')
                                                                    </option>
                                                                    <option value="May">@lang('wages.attr.may')</option>
                                                                    <option value="June">@lang('wages.attr.june')
                                                                    </option>
                                                                    <option value="July">@lang('wages.attr.july')
                                                                    </option>
                                                                    <option value="August">@lang('wages.attr.august')
                                                                    </option>
                                                                    <option value="September">
                                                                        @lang('wages.attr.september')</option>
                                                                    <option value="October">@lang('wages.attr.october')
                                                                    </option>
                                                                    <option value="November">
                                                                        @lang('wages.attr.november')</option>
                                                                    <option value="December">
                                                                        @lang('wages.attr.december')</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="col-md-10">
                                                                    <input type="text" class="form-control">
                                                            </div>
                                                        </td>
                                                        <td><input type="text" class="form-control"></td>
                                                        <td><input type="text" class="form-control"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>6</td>
                                                        <td>
                                                            <div class="col-md-10">
                                                                <select class="form-control"
                                                                    data-placeholder="Month" tabindex="2">
                                                                    {{-- <option>@lang('wages.attr.select_month')</option> --}}
                                                                    <option value="January">@lang('wages.attr.january')
                                                                    </option>
                                                                    <option value="February">
                                                                        @lang('wages.attr.february')</option>
                                                                    <option value="March">@lang('wages.attr.march')
                                                                    </option>
                                                                    <option value="April">@lang('wages.attr.april')
                                                                    </option>
                                                                    <option value="May">@lang('wages.attr.may')</option>
                                                                    <option value="June">@lang('wages.attr.june')
                                                                    </option>
                                                                    <option value="July">@lang('wages.attr.july')
                                                                    </option>
                                                                    <option value="August">@lang('wages.attr.august')
                                                                    </option>
                                                                    <option value="September">
                                                                        @lang('wages.attr.september')</option>
                                                                    <option value="October">@lang('wages.attr.october')
                                                                    </option>
                                                                    <option value="November">
                                                                        @lang('wages.attr.november')</option>
                                                                    <option value="December">
                                                                        @lang('wages.attr.december')</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="col-md-10">
                                                                    <input type="text" class="form-control">
                                                            </div>
                                                        </td>
                                                        <td><input type="text" class="form-control"></td>
                                                        <td><input type="text" class="form-control"></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div class="form-actions">
                                                    <button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.cancel')</button>
                                                    <button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.clear')</button>
                                                    <button type="submit" class="btn btn waves-effect waves-light btn-success"> <i class="fa fa-check"></i>
                                                    @lang('insuredPerson.save')</button>
                                                    
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Row -->

<div class="tab-pane  p-20" id="wages" role="tabpanel">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form action="#">
                        <div class="form-body">
                            <h3 class="card-title">Insured Person's Wages Details</h3>
                            <hr>
                            <div class="row p-t-20">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Status Attended Work</label>
                                        <input type="text" class="form-control" placeholder="Status Attended Work" input
                                            here…" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="row p-t-20">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Commencement Date</label>
                                        <input type="date" class="form-control" placeholder="Commencement Date">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Employment End Date</label>
                                        <input type="date" class="form-control" placeholder="Employment End Date">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Are wages paid on the day of accident?</label>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio1" name="customRadio"
                                                class="custom-control-input">
                                            <label class="custom-control-label" for="customRadio1">Yes</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio2" name="customRadio"
                                                class="custom-control-input">
                                            <label class="custom-control-label" for="customRadio2">No</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Column -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <label>Details of wages for the period of 6 consecutive months before the month
                                            of accident/ death/ notice of invalidity/ notice of occupational
                                            disease</label>
                                        <div class="table-responsive">
                                            <table id="demo-foo-row-toggler" class="table table-bordered"
                                                data-toggle-column="first">
                                                <thead>
                                                    <tr>
                                                        <th data-breakpoints="xs">No</th>
                                                        <th>Month</th>
                                                        <th>Year</th>
                                                        <th data-breakpoints="xs sm">Wages (RM)</th>
                                                        <th data-breakpoints="xs">Contribution (RM)</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr data-expanded="true">
                                                        <td>1</td>
                                                        <td>
                                                            <div class="col-md-10">
                                                                <select class="form-control custom-select"
                                                                    data-placeholder="Month" tabindex="2">
                                                                    <option>@lang('wages.attr.select')</option>
                                                                    <option value="January">@lang('wages.attr.january')</option>
                                                                    <option value="February">@lang('wages.attr.february')</option>
                                                                    <option value="March">@lang('wages.attr.march')</option>
                                                                    <option value="April">@lang('wages.attr.april')</option>
                                                                    <option value="May">@lang('wages.attr.may')</option>
                                                                    <option value="June">@lang('wages.attr.june')</option>
                                                                    <option value="July">@lang('wages.attr.july')</option>
                                                                    <option value="August">@lang('wages.attr.august')</option>
                                                                    <option value="September">@lang('wages.attr.september')</option>
                                                                    <option value="October">@lang('wages.attr.october')</option>
                                                                    <option value="November">@lang('wages.attr.november')</option>
                                                                    <option value="December">@lang('wages.attr.december')</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="col-md-10">
                                                                <select class="form-control custom-select"
                                                                    data-placeholder="Year" tabindex="1">
                                                                    <option>@lang('wages.attr.select')</option>
                                                                    <option value="2019">2019</option>
                                                                    <option value="2018">2018</option>
                                                                    <option value="2017">2017</option>
                                                                    <option value="2016">2016</option>
                                                                    <option value="2015">2015</option>
                                                                    <option value="2014">2014</option>
                                                                    <option value="2013">2013</option>
                                                                    <option value="2012">2012</option>
                                                                    <option value="2011">2011</option>
                                                                    <option value="2010">2010</option>
                                                                    <option value="2009">2009</option>
                                                                    <option value="2008">2008</option>
                                                                    <option value="2007">2007</option>
                                                                    <option value="2006">2006</option>
                                                                    <option value="2005">2005</option>
                                                                    <option value="2004">2004</option>
                                                                    <option value="2003">2003</option>
                                                                    <option value="2002">2002</option>
                                                                    <option value="2001">2001</option>
                                                                    <option value="2000">2000</option>
                                                                    <option value="1999">2000</option>
                                                                    <option value="1998">1998</option>
                                                                    <option value="1997">1997</option>
                                                                    <option value="1996">1996</option>
                                                                    <option value="1995">1995</option>
                                                                    <option value="1994">1994</option>
                                                                    <option value="1993">1993</option>
                                                                    <option value="1992">1992</option>
                                                                    <option value="1991">1991</option>
                                                                    <option value="1990">1990</option>
                                                            </div>
                                                        </td>
                                                        <td><input type="text" class="form-control"></td>
                                                        <td><input type="text" class="form-control"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>
                                                            <div class="col-md-10">
                                                                <select class="form-control custom-select"
                                                                    data-placeholder="Month" tabindex="2">
                                                                    <option>@lang('wages.attr.select')</option>
                                                                    <option value="January">@lang('wages.attr.january')</option>
                                                                    <option value="February">@lang('wages.attr.february')</option>
                                                                    <option value="March">@lang('wages.attr.march')</option>
                                                                    <option value="April">@lang('wages.attr.april')</option>
                                                                    <option value="May">@lang('wages.attr.may')</option>
                                                                    <option value="June">@lang('wages.attr.june')</option>
                                                                    <option value="July">@lang('wages.attr.july')</option>
                                                                    <option value="August">@lang('wages.attr.august')</option>
                                                                    <option value="September">@lang('wages.attr.september')</option>
                                                                    <option value="October">@lang('wages.attr.october')</option>
                                                                    <option value="November">@lang('wages.attr.november')</option>
                                                                    <option value="December">@lang('wages.attr.december')</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="col-md-10">
                                                                <select class="form-control custom-select"
                                                                    data-placeholder="Year" tabindex="2">
                                                                    <option>@lang('wages.attr.select')</option>
                                                                    <option value="2019">2019</option>
                                                                    <option value="2018">2018</option>
                                                                    <option value="2017">2017</option>
                                                                    <option value="2016">2016</option>
                                                                    <option value="2015">2015</option>
                                                                    <option value="2014">2014</option>
                                                                    <option value="2013">2013</option>
                                                                    <option value="2012">2012</option>
                                                                    <option value="2011">2011</option>
                                                                    <option value="2010">2010</option>
                                                                    <option value="2009">2009</option>
                                                                    <option value="2008">2008</option>
                                                                    <option value="2007">2007</option>
                                                                    <option value="2006">2006</option>
                                                                    <option value="2005">2005</option>
                                                                    <option value="2004">2004</option>
                                                                    <option value="2003">2003</option>
                                                                    <option value="2002">2002</option>
                                                                    <option value="2001">2001</option>
                                                                    <option value="2000">2000</option>
                                                                    <option value="1999">2000</option>
                                                                    <option value="1998">1998</option>
                                                                    <option value="1997">1997</option>
                                                                    <option value="1996">1996</option>
                                                                    <option value="1995">1995</option>
                                                                    <option value="1994">1994</option>
                                                                    <option value="1993">1993</option>
                                                                    <option value="1992">1992</option>
                                                                    <option value="1991">1991</option>
                                                                    <option value="1990">1990</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td><input type="text" class="form-control"></td>
                                                        <td><input type="text" class="form-control"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>
                                                            <div class="col-md-10">
                                                                <select class="form-control custom-select"
                                                                    data-placeholder="Month" tabindex="2">
                                                                    <option>@lang('wages.attr.select')</option>
                                                                    <option value="January">@lang('wages.attr.january')</option>
                                                                    <option value="February">@lang('wages.attr.february')</option>
                                                                    <option value="March">@lang('wages.attr.march')</option>
                                                                    <option value="April">@lang('wages.attr.april')</option>
                                                                    <option value="May">@lang('wages.attr.may')</option>
                                                                    <option value="June">@lang('wages.attr.june')</option>
                                                                    <option value="July">@lang('wages.attr.july')</option>
                                                                    <option value="August">@lang('wages.attr.august')</option>
                                                                    <option value="September">@lang('wages.attr.september')</option>
                                                                    <option value="October">@lang('wages.attr.october')</option>
                                                                    <option value="November">@lang('wages.attr.november')</option>
                                                                    <option value="December">@lang('wages.attr.december')</option>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="col-md-10">
                                                                <select class="form-control custom-select"
                                                                    data-placeholder="Year" tabindex="2">
                                                                    <option>@lang('wages.attr.select')</option>
                                                                    <option value="2019">2019</option>
                                                                    <option value="2018">2018</option>
                                                                    <option value="2017">2017</option>
                                                                    <option value="2016">2016</option>
                                                                    <option value="2015">2015</option>
                                                                    <option value="2014">2014</option>
                                                                    <option value="2013">2013</option>
                                                                    <option value="2012">2012</option>
                                                                    <option value="2011">2011</option>
                                                                    <option value="2010">2010</option>
                                                                    <option value="2009">2009</option>
                                                                    <option value="2008">2008</option>
                                                                    <option value="2007">2007</option>
                                                                    <option value="2006">2006</option>
                                                                    <option value="2005">2005</option>
                                                                    <option value="2004">2004</option>
                                                                    <option value="2003">2003</option>
                                                                    <option value="2002">2002</option>
                                                                    <option value="2001">2001</option>
                                                                    <option value="2000">2000</option>
                                                                    <option value="1999">2000</option>
                                                                    <option value="1998">1998</option>
                                                                    <option value="1997">1997</option>
                                                                    <option value="1996">1996</option>
                                                                    <option value="1995">1995</option>
                                                                    <option value="1994">1994</option>
                                                                    <option value="1993">1993</option>
                                                                    <option value="1992">1992</option>
                                                                    <option value="1991">1991</option>
                                                                    <option value="1990">1990</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td><input type="text" class="form-control"></td>
                                                        <td><input type="text" class="form-control"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>
                                                            <div class="col-md-10">
                                                                <select class="form-control custom-select"
                                                                    data-placeholder="Month" tabindex="2">
                                                                    <option>@lang('wages.attr.select')</option>
                                                                    <option value="January">@lang('wages.attr.january')</option>
                                                                    <option value="February">@lang('wages.attr.february')</option>
                                                                    <option value="March">@lang('wages.attr.march')</option>
                                                                    <option value="April">@lang('wages.attr.april')</option>
                                                                    <option value="May">@lang('wages.attr.may')</option>
                                                                    <option value="June">@lang('wages.attr.june')</option>
                                                                    <option value="July">@lang('wages.attr.july')</option>
                                                                    <option value="August">@lang('wages.attr.august')</option>
                                                                    <option value="September">@lang('wages.attr.september')</option>
                                                                    <option value="October">@lang('wages.attr.october')</option>
                                                                    <option value="November">@lang('wages.attr.november')</option>
                                                                    <option value="December">@lang('wages.attr.december')</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="col-md-10">
                                                                <select class="form-control custom-select"
                                                                    data-placeholder="Year" tabindex="2">
                                                                    <option>@lang('wages.attr.select')</option>
                                                                    <option value="2019">2019</option>
                                                                    <option value="2018">2018</option>
                                                                    <option value="2017">2017</option>
                                                                    <option value="2016">2016</option>
                                                                    <option value="2015">2015</option>
                                                                    <option value="2014">2014</option>
                                                                    <option value="2013">2013</option>
                                                                    <option value="2012">2012</option>
                                                                    <option value="2011">2011</option>
                                                                    <option value="2010">2010</option>
                                                                    <option value="2009">2009</option>
                                                                    <option value="2008">2008</option>
                                                                    <option value="2007">2007</option>
                                                                    <option value="2006">2006</option>
                                                                    <option value="2005">2005</option>
                                                                    <option value="2004">2004</option>
                                                                    <option value="2003">2003</option>
                                                                    <option value="2002">2002</option>
                                                                    <option value="2001">2001</option>
                                                                    <option value="2000">2000</option>
                                                                    <option value="1999">2000</option>
                                                                    <option value="1998">1998</option>
                                                                    <option value="1997">1997</option>
                                                                    <option value="1996">1996</option>
                                                                    <option value="1995">1995</option>
                                                                    <option value="1994">1994</option>
                                                                    <option value="1993">1993</option>
                                                                    <option value="1992">1992</option>
                                                                    <option value="1991">1991</option>
                                                                    <option value="1990">1990</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td><input type="text" class="form-control"></td>
                                                        <td><input type="text" class="form-control"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>5</td>
                                                        <td>
                                                            <div class="col-md-10">
                                                                <select class="form-control custom-select"
                                                                    data-placeholder="Month" tabindex="2">
                                                                    <option>@lang('wages.attr.select')</option>
                                                                    <option value="January">@lang('wages.attr.january')</option>
                                                                    <option value="February">@lang('wages.attr.february')</option>
                                                                    <option value="March">@lang('wages.attr.march')</option>
                                                                    <option value="April">@lang('wages.attr.april')</option>
                                                                    <option value="May">@lang('wages.attr.may')</option>
                                                                    <option value="June">@lang('wages.attr.june')</option>
                                                                    <option value="July">@lang('wages.attr.july')</option>
                                                                    <option value="August">@lang('wages.attr.august')</option>
                                                                    <option value="September">@lang('wages.attr.september')</option>
                                                                    <option value="October">@lang('wages.attr.october')</option>
                                                                    <option value="November">@lang('wages.attr.november')</option>
                                                                    <option value="December">@lang('wages.attr.december')</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="col-md-10">
                                                                <select class="form-control custom-select"
                                                                    data-placeholder="Year" tabindex="2">
                                                                    <option>@lang('wages.attr.select')</option>
                                                                    <option value="2019">2019</option>
                                                                    <option value="2018">2018</option>
                                                                    <option value="2017">2017</option>
                                                                    <option value="2016">2016</option>
                                                                    <option value="2015">2015</option>
                                                                    <option value="2014">2014</option>
                                                                    <option value="2013">2013</option>
                                                                    <option value="2012">2012</option>
                                                                    <option value="2011">2011</option>
                                                                    <option value="2010">2010</option>
                                                                    <option value="2009">2009</option>
                                                                    <option value="2008">2008</option>
                                                                    <option value="2007">2007</option>
                                                                    <option value="2006">2006</option>
                                                                    <option value="2005">2005</option>
                                                                    <option value="2004">2004</option>
                                                                    <option value="2003">2003</option>
                                                                    <option value="2002">2002</option>
                                                                    <option value="2001">2001</option>
                                                                    <option value="2000">2000</option>
                                                                    <option value="1999">2000</option>
                                                                    <option value="1998">1998</option>
                                                                    <option value="1997">1997</option>
                                                                    <option value="1996">1996</option>
                                                                    <option value="1995">1995</option>
                                                                    <option value="1994">1994</option>
                                                                    <option value="1993">1993</option>
                                                                    <option value="1992">1992</option>
                                                                    <option value="1991">1991</option>
                                                                    <option value="1990">1990</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td><input type="text" class="form-control"></td>
                                                        <td><input type="text" class="form-control"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>6</td>
                                                        <td>
                                                            <div class="col-md-10">
                                                                <select class="form-control custom-select"
                                                                    data-placeholder="Month" tabindex="2">
                                                                    <option>@lang('wages.attr.select')</option>
                                                                    <option value="January">@lang('wages.attr.january')</option>
                                                                    <option value="February">@lang('wages.attr.february')</option>
                                                                    <option value="March">@lang('wages.attr.march')</option>
                                                                    <option value="April">@lang('wages.attr.april')</option>
                                                                    <option value="May">@lang('wages.attr.may')</option>
                                                                    <option value="June">@lang('wages.attr.june')</option>
                                                                    <option value="July">@lang('wages.attr.july')</option>
                                                                    <option value="August">@lang('wages.attr.august')</option>
                                                                    <option value="September">@lang('wages.attr.september')</option>
                                                                    <option value="October">@lang('wages.attr.october')</option>
                                                                    <option value="November">@lang('wages.attr.november')</option>
                                                                    <option value="December">@lang('wages.attr.december')</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="col-md-12">
                                                                <select class="form-control custom-select"
                                                                    data-placeholder="Year" tabindex="2">
                                                                    <option>@lang('wages.attr.select')</option>
                                                                    <option value="2019">2019</option>
                                                                    <option value="2018">2018</option>
                                                                    <option value="2017">2017</option>
                                                                    <option value="2016">2016</option>
                                                                    <option value="2015">2015</option>
                                                                    <option value="2014">2014</option>
                                                                    <option value="2013">2013</option>
                                                                    <option value="2012">2012</option>
                                                                    <option value="2011">2011</option>
                                                                    <option value="2010">2010</option>
                                                                    <option value="2009">2009</option>
                                                                    <option value="2008">2008</option>
                                                                    <option value="2007">2007</option>
                                                                    <option value="2006">2006</option>
                                                                    <option value="2005">2005</option>
                                                                    <option value="2004">2004</option>
                                                                    <option value="2003">2003</option>
                                                                    <option value="2002">2002</option>
                                                                    <option value="2001">2001</option>
                                                                    <option value="2000">2000</option>
                                                                    <option value="1999">2000</option>
                                                                    <option value="1998">1998</option>
                                                                    <option value="1997">1997</option>
                                                                    <option value="1996">1996</option>
                                                                    <option value="1995">1995</option>
                                                                    <option value="1994">1994</option>
                                                                    <option value="1993">1993</option>
                                                                    <option value="1992">1992</option>
                                                                    <option value="1991">1991</option>
                                                                    <option value="1990">1990</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td><input type="text" class="form-control"></td>
                                                        <td><input type="text" class="form-control"></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div class="form-actions">
                                                <button type="submit" class="btn btn-success"> <i
                                                        class="fa fa-check"></i> Save</button>
                                                <button type="button" class="btn btn-inverse">Cancel</button>
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

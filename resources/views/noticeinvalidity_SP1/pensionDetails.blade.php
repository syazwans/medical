<!-- Row -->
<div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form action="#">
                        <div class="form-body">
                            <h3 class="card-title">@lang('pensionDetails.title')</h3>
                        <hr>
                        <div class="row p-t-20">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">@lang('pensionDetails.attr.desc')</label>
                                    <input type="text" id="descriptionmorbidity" class="form-control">
                                    <!--<small class="form-control-feedback"> This is inline help </small>--> 
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('pensionDetails.attr.year')</label>
                                    <select class="form-control custom-
                                        ;select">
                                        <option value="2030">2030</option>
                                        <option value="2029">2029</option>
                                        <option value="2028">2028</option>
                                        <option value="2027">2027</option>
                                        <option value="2026">2026</option>
                                        <option value="2025">2025</option>
                                        <option value="2024">2024</option>
                                        <option value="2023">2023</option>
                                        <option value="2022">2022</option>
                                        <option value="2021">2021</option>
                                        <option value="2020">2020</option>
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
                                        <option value="1999">1999</option>
                                        <option value="1998">1998</option>
                                        <option value="1997">1997</option>
                                        <option value="1996">1996</option>
                                        <option value="1995">1995</option>
                                        <option value="1994">1994</option>
                                        <option value="1993">1993</option>
                                        <option value="1992">1992</option>
                                        <option value="1991">1991</option>
                                        <option value="1990">1990</option>
                                        <option value="1989">1989</option>
                                        <option value="1988">1988</option>
                                        <option value="1987">1987</option>
                                        <option value="1986">1986</option>
                                        <option value="1985">1985</option>
                                        <option value="1984">1984</option>
                                        <option value="1983">1983</option>
                                        <option value="1982">1982</option>
                                        <option value="1981">1981</option>
                                        <option value="1980">1980</option>
                                        <option value="1979">1979</option>
                                        <option value="1978">1978</option>
                                        <option value="1977">1977</option>
                                        <option value="1976">1976</option>
                                        <option value="1975">1975</option>
                                        <option value="1974">1974</option>
                                    </select>
                                </div>
                            </div>
                        

                            <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('pensionDetails.attr.engaged_employment')</label>
                                        <select class="form-control custom-
                                        ;select" data-placeholder="Choose a Category" tabindex="1">
                                        <option value="yes">@lang('pensionDetails.attr.yes')</option>
                                        <option value="no">@lang('pensionDetails.attr.no')</option>
                                        </select>
                                    </div>
                                </div>

                       <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">@lang('pensionDetails.attr.date_cessation')</label>
                                <input type="date" name="dafe_of_cessation" id="date_of_cessation" class="form-control">
                              
                            </div>
                        </div>  
                    </div>
                        
                        <h3 class="box-title m-t-40">@lang('pensionDetails.employment_info')</h3>
                        <hr>
                    
                        <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>@lang('pensionDetails.attr.employer_name')</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>@lang('pensionDetails.attr.employer_address')</label>
                                    <input type="textarea" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>@lang('pensionDetails.attr.period')</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>@lang('pensionDetails.attr.occupation')</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('pensionDetails.attr.monthly_wages')</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.cancel')</button>
                            <button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.clear')</button>
                            <button type="submit" class="btn btn waves-effect waves-light btn-success"> <i class="fa fa-check"></i>
                            @lang('insuredPerson.save')</button>
                            
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>


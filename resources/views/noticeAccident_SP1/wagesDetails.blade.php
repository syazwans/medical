<!-- Row -->
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="./wagesdetails" method="POST">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-body">
                        <h3 class="card-title">@lang('wages.title')</h3>
                        <hr>
                        
                    <?php $contrcnt = 0; ?>
                    <?php $wagescnt = 0; ?>
                    @foreach ($contribution as $contr)
                        <div class="row p-t-20">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label class="control-label">Company Name</label>
                                    <input type="hidden" id="empcode[{{$contrcnt}}]" name="empcode[{{$contrcnt}}]" value="{{$contr->empcode}}" class="form-control" >
                                    <input type="text" id="empname[{{$contrcnt}}]" name="empname[{{$contrcnt}}]" value="{{$contr->empname}}" class="form-control" >

                                    </div>
                            </div>
                            
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Are wages paid on the day of accident?</label>
                                    <select class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1">
                                        <option value="y">@lang('wages.attr.yes')</option>
                                        <option value="N">@lang('wages.attr.no')</option>
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
                                        <table id="demo-foo-row-toggler" class="table table-bordered" data-toggle-column="first">
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
                                            <?php $accdmonth = session('accdmonth'); 
                                                  $accdyear = session('accdyear'); 
                                                  $cnt = 0; ?>
                                            @while ($cnt < 6)   
                                            <?php 
                                            $accdmonth = $accdmonth - 1;
                                            if ($accdmonth <= 0)
                                            {
                                                $accdmonth = 12 + $accdmonth;
                                                $accdyear  = $accdyear - 1;
                                            }
                                            ?>
                                                <tr data-expanded="true">
                                                    <td>{{$cnt+1}}</td>
                                                    <td><select id="month[{{$contrcnt}}][{{$cnt}}]" name="month[{{$contrcnt}}][{{$cnt}}]" class="form-control">
                                                            @foreach ($month as $m)
                                                            @if ($m->refcode == $accdmonth)
                                                            <option value='{{$m->refcode}}' selected>{{$m->descen}}</option>
                                                            @else
                                                            <option value='{{$m->refcode}}'>{{$m->descen}}</option>
                                                            @endif
                                                            @endforeach
                                                        </select>
                                                    </td>
                                                    <td><input type="text" id="year[{{$contrcnt}}][{{$cnt}}]" name="year[{{$contrcnt}}][{{$cnt}}]" value="{{$accdyear}}" class="form-control" ></td>
                                                    <?php $wagefound = false; ?>
                                                    @if (!empty($wagesinfo))
                                                    @foreach ($wagesinfo as $w)
                                                        @if ($w->empcode == $contr->empcode)
                                                        @foreach ($w->wagesinfo as $gaji)
                                                            @if ($gaji->month == $accdmonth && $gaji->year == $accdyear)
                                                            <td><input type="text" id="wages[{{$contrcnt}}][{{$cnt}}]" name="wages[{{$contrcnt}}][{{$cnt}}]" value="{{$gaji->wages}}" class="form-control" ></td>
                                                            <?php $wagefound = true; ?>
                                                            @endif
                                                        @endforeach
                                                        @endif
                                                    @endforeach
                                                    @endif
                                                    @if ($wagefound == false)
                                                    <td><input type="text" id="wages[{{$contrcnt}}][{{$cnt}}]" name="wages[{{$contrcnt}}][{{$cnt}}]" value="" class="form-control" ></td>
                                                    @endif
                                                    
                                                    <?php $contrfound = false; ?>
                                                    @if (!empty($contr))
                                                    @foreach ($contr->contribution as $c)
                                                    @if ($c->month == $accdmonth && $c->year == $accdyear)
                                                    <td><input type="text" id="contrpaid[{{$contrcnt}}][{{$cnt}}]" name="contrpaid[{{$contrcnt}}][{{$cnt}}]" value="{{$c->contribution}}" class="form-control" ></td>
                                                    <?php $contrfound = true; ?>
                                                    @endif
                                                    @endforeach
                                                    @endif
                                                    
                                                    @if ($contrfound == false)
                                                    <td><input type="text" id="contrpaid[{{$contrcnt}}][{{$cnt}}]" name="contrpaid[{{$contrcnt}}][{{$cnt}}]" value="" class="form-control" ></td>
                                                    @endif
                                                    
                                                </tr>
                                                <?php $cnt++; 
                                                      ?>
                                            @endwhile
                                            
                                            
                                            
                                            
                                            
                                            <!--    @for ($i = 0; $i < 6; $i++)
                                                <tr data-expanded="true">
                                                    <td>{{$i+1}}</td>
                                                    <td>
                                                        <select id="month[{{$i}}]" name="month[{{$i}}]">
                                                            @foreach ($month as $m)

                                                            <option value='{{$m->refcode}}'>{{$m->descen}}</option>
                                                            @endforeach
                                                            
                                                        </select>
                                                    </td>
                                                    <td><input type="text" id="year[{{$i}}]" name="year[{{$i}}]" value="" class="form-control" ></td>
                                                    <td><input type="text" id="wages[{{$i}}]" name="wages[{{$i}}]" value="" class="form-control" ></td>
                                                    <td><input type="text" id="contrpaid[{{$i}}]" name="contrpaid[{{$i}}]" value="" class="form-control"></td>
                                                </tr>
                                                @endfor 
                                                -->
                                            
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php $contrcnt++; ?>                    
                    @endforeach
                                            
                        <div class="form-actions">
                            <button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.cancel')</button>
                            <button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.clear')</button>
                            <!--button type="button" class="btn btn waves-effect waves-light btn-secondary" id="addWages" onclick="datafield();">Add Wages</button-->
                            <button type="submit" class="btn btn waves-effect waves-light btn-success"> <i class="fa fa-check"></i>
                            @lang('insuredPerson.save')</button>
                        </div>
                        @if(Session::get('messagewage')) 
                        <div class="card-footer">

                            <div class="alert alert-warning">
                                {{Session::get('messagewage')}}
                            </div>

                        </div>
                        @elseif (!empty($messagewage))
                        <div class="card-footer">

                            <div class="alert alert-warning">
                                {{$messagewage}}
                            </div>

                        </div>
                        @endif

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Row -->
<script>
    var room =1;

    function datafield() {
            room++;
            var objTo = document.getElementById('id1')
            var divtest =document.createElement("div");
            divtest.setAttribute("id","mcDetails" + room);
    //var rdiv = 'removeclass' + room;

    divtest.innerHTML = '<div class="col-lg-12"><div class="card"><div class="card-body"><form action="#"><div class="form-body"><hr><div class="row p-t-20"><div class="col-md-6"><div class="form-group"><label class="control-label">Company Name</label><input type="text" id="compname" name="compname" value="" class="form-control" ></div></div></div><div class="row p-t-20"><div class="col-md-4"><div class="form-group"><label class="control-label">@lang('wages.attr.commencement_date')</label><input type="date" class="form-control" ></div></div><div class="col-md-4"><div class="form-group"><label class="control-label">@lang('wages.attr.end_date')</label><input type="date" class="form-control" ></div></div><div class="col-md-4"><div class="form-group"><label>Are wages paid on the day of accident?</label><select class="form-control custom- ;select" data-placeholder="Choose a Category" tabindex="1"><option value="yes">@lang('wages.attr.yes')</option><option value="no">@lang('wages.attr.no')</option></select> </div></div></div><!-- Column --><div class="row p-t-20"><div class="col-12"><div class="card"><label>@lang('wages.attr.details_wages')</label><div class="table-responsive"><table id="demo-foo-row-toggler" class="table table-bordered" data-toggle-column="first"><thead><tr><th data-breakpoints="xs">@lang('wages.attr.num')</th><th>@lang('wages.attr.month')</th><th>@lang('wages.attr.year')</th><th data-breakpoints="xs sm">@lang('wages.attr.wages')</th><th data-breakpoints="xs">@lang('wages.attr.contribution')</th></tr></thead><tbody><tr data-expanded="true"><td>1</td><td><div class="col-md-10"><select class="form-control custom-select" data-placeholder="Month" tabindex="2">{{-- <option>@lang('wages.select_month')</option> --}}<option value="January">@lang('wages.attr.january')</option><option value="February">@lang('wages.attr.february')</option><option value="March">@lang('wages.attr.march')</option><option value="April">@lang('wages.attr.april')</option><option value="May">@lang('wages.attr.may')</option><option value="June">@lang('wages.attr.june')</option><option value="July">@lang('wages.attr.july')</option><option value="August">@lang('wages.attr.august')</option><option value="September">@lang('wages.attr.september')</option><option value="October">@lang('wages.attr.october')</option><option value="November">@lang('wages.attr.november')</option><option value="December">@lang('wages.attr.december')</option></select></div></td><td><div class="col-md-10"><input type="text" class="form-control"></div></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td></tr><tr><td>2</td><td><div class="col-md-10"><select class="form-control custom-select" data-placeholder="Month" tabindex="2">{{-- <option>@lang('wages.select_month')</option> --}}<option value="January">@lang('wages.attr.january')</option><option value="February">@lang('wages.attr.february')</option><option value="March">@lang('wages.attr.march')</option><option value="April">@lang('wages.attr.april')</option><option value="May">@lang('wages.attr.may')</option><option value="June">@lang('wages.attr.june')</option><option value="July">@lang('wages.attr.july')</option><option value="August">@lang('wages.attr.august')</option><option value="September">@lang('wages.attr.september')</option><option value="October">@lang('wages.attr.october')</option><option value="November">@lang('wages.attr.november')</option><option value="December">@lang('wages.attr.december')</option></select></div></td><td><div class="col-md-10"><input type="text" class="form-control"></div></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td></tr><tr><td>3</td><td><div class="col-md-10"><select class="form-control custom-select" data-placeholder="Month" tabindex="2">{{-- <option>@lang('wages.select_month')</option> --}}<option value="January">@lang('wages.attr.january')</option><option value="February">@lang('wages.attr.february')</option><option value="March">@lang('wages.attr.march')</option><option value="April">@lang('wages.attr.april')</option><option value="May">@lang('wages.attr.may')</option><option value="June">@lang('wages.attr.june')</option><option value="July">@lang('wages.attr.july')</option><option value="August">@lang('wages.attr.august')</option><option value="September">@lang('wages.attr.september')</option><option value="October">@lang('wages.attr.october')</option><option value="November">@lang('wages.attr.november')</option><option value="December">@lang('wages.attr.december')</option></select></div></td><td><div class="col-md-10"><input type="text" class="form-control"></div></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td></tr><tr><td>4</td><td><div class="col-md-10"><select class="form-control custom-select" data-placeholder="Month" tabindex="2">{{-- <option>@lang('wages.select_month')</option> --}}<option value="January">@lang('wages.attr.january')</option><option value="February">@lang('wages.attr.february')</option><option value="March">@lang('wages.attr.march')</option><option value="April">@lang('wages.attr.april')</option><option value="May">@lang('wages.attr.may')</option><option value="June">@lang('wages.attr.june')</option><option value="July">@lang('wages.attr.july')</option><option value="August">@lang('wages.attr.august')</option><option value="September">@lang('wages.attr.september')</option><option value="October">@lang('wages.attr.october')</option><option value="November">@lang('wages.attr.november')</option><option value="December">@lang('wages.attr.december')</option></select></div></td><td><div class="col-md-10"><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td></tr><tr><td>5</td><td><div class="col-md-10"><select class="form-control custom-select" data-placeholder="Month" tabindex="2">{{-- <option>@lang('wages.select_month')</option> --}}<option value="January">@lang('wages.attr.january')</option><option value="February">@lang('wages.attr.february')</option><option value="March">@lang('wages.attr.march')</option><option value="April">@lang('wages.attr.april')</option><option value="May">@lang('wages.attr.may')</option><option value="June">@lang('wages.attr.june')</option><option value="July">@lang('wages.attr.july')</option><option value="August">@lang('wages.attr.august')</option><option value="September">@lang('wages.attr.september')</option><option value="October">@lang('wages.attr.october')</option><option value="November">@lang('wages.attr.november')</option><option value="December">@lang('wages.attr.december')</option></select></div></td><td><div class="col-md-10"><input type="text" class="form-control"></div></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td></tr><tr><td>6</td><td><div class="col-md-10"><select class="form-control custom-select" data-placeholder="Month" tabindex="2">{{-- <option>@lang('wages.select_month')</option> --}}<option value="January">@lang('wages.attr.january')</option><option value="February">@lang('wages.attr.february')</option><option value="March">@lang('wages.attr.march')</option><option value="April">@lang('wages.attr.april')</option><option value="May">@lang('wages.attr.may')</option><option value="June">@lang('wages.attr.june')</option><option value="July">@lang('wages.attr.july')</option><option value="August">@lang('wages.attr.august')</option><option value="September">@lang('wages.attr.september')</option><option value="October">@lang('wages.attr.october')</option><option value="November">@lang('wages.attr.november')</option><option value="December">@lang('wages.attr.december')</option></select></div></td><td><div class="col-md-10"><input type="text" class="form-control"></div></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td></tr></tbody></table><div id="id1"></div></div></div></div></div></div></form></div></div></div>';

    objTo.appendChild(divtest)

    document.getElementById('btn1').disabled = true;
    }
</script>

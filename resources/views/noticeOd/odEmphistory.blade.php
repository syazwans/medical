<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="/odemphistory" method="post">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-body">
                        <h5 class="card-title">@lang('odDetails.title')</h5>
                        <hr>
                        <div class="row p-t-20">
                            <div class="col-12">
                                <div class="card">
                                    <label>@lang('odDetails.attr.nameAddress')</label>
                                    <div class="table-responsive">
                                        <table id="demo-foo-row-toggler" class="table table-bordered" data-toggle-column="first">
                                            <thead>
                                                <tr>
                                                    <th data-breakpoints="xs">@lang('odDetails.attr.num')</th>
                                                    <th>Name of Employer</th>
                                                    <th>Address of Employer</th>
                                                    <th>@lang('odDetails.attr.period')</th>
                                                    <th data-breakpoints="xs sm">@lang('odDetails.attr.designation')</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                {{-- @if (!empty($odempinfo))
                                                @foreach ($odempinfo as $odemp)
                                                @foreach ($odemp->odempinfo as $od) --}}
                                                
                                                @if (empty($odempinfo))
                                                    <?php $cnt = 5; ?>
                                                    @for ($i = 0; $i < $cnt; $i++)
                                                    <tr data-expanded="true">
                                                        <td>{{$i+1}}</td>
                                                        <td><textarea type="text" id="empname[{{$i}}]" name="empname[{{$i}}]" value="" class="form-control"></textarea></td>
                                                        <td><textarea type="text" id="empadd[{{$i}}]" name="empadd[{{$i}}]" value="" class="form-control"></textarea></td>
                                                        <td><textarea type="text" id="duration[{{$i}}]" name="duration[{{$i}}]" value="" class="form-control"></textarea></td>
                                                        <td><textarea type="text" id="designation[{{$i}}]" name="designation[{{$i}}]" value="" class="form-control"></textarea></td>
                                                    </tr>
                                                    @endfor
                                                @else
                                                    <?php $cnt = 5; $i = 0; ?>
                                                    @foreach ($odempinfo as $odemp)
                                                    <tr data-expanded="true">
                                                        <td>{{$i+1}}</td>
                                                        <td><textarea type="text" id="empname[{{$i}}]" name="empname[{{$i}}]" value="" class="form-control">{{$odemp->empname}}</textarea></td>
                                                        <td><textarea type="text" id="empadd[{{$i}}]" name="empadd[{{$i}}]" value="" class="form-control">{{$odemp->empadd}}</textarea></td>
                                                        <td><textarea type="text" id="duration[{{$i}}]" name="duration[{{$i}}]" value="" class="form-control">{{$odemp->duration}}</textarea></td>
                                                        <td><textarea type="text" id="designation[{{$i}}]" name="designation[{{$i}}]" value="" class="form-control">{{$odemp->designation}}</textarea></td>
                                                    </tr>
                                                    <?php $i++; ?>
                                                    @endforeach
                                                    @for ($j = $i; $j < $cnt; $j++)
                                                    <tr data-expanded="true">
                                                        <td>{{$j+1}}</td>
                                                        <td><textarea type="text" id="empname[{{$j}}]" name="empname[{{$j}}]" value="" class="form-control"></textarea></td>
                                                        <td><textarea type="text" id="empadd[{{$j}}]" name="empadd[{{$j}}]" value="" class="form-control"></textarea></td>
                                                        <td><textarea type="text" id="duration[{{$j}}]" name="duration[{{$j}}]" value="" class="form-control"></textarea></td>
                                                        <td><textarea type="text" id="designation[{{$j}}]" name="designation[{{$j}}]" value="" class="form-control"></textarea></td>
                                                    </tr>
                                                    @endfor
                                                    
                                                @endif
                                                
                                                {{-- @endforeach
                                                @endforeach
                                                @endif --}}

                                                {{-- <tr data-expanded="true">
                                                    <td>{{$cnt+1}}</td>
                                                    <td><textarea type="text" id="empname[{{$cnt}}]" name="empname[{{$cnt}}]" value="" class="form-control">{{$odemp->empname}}</textarea></td>
                                                    <td><textarea type="text" id="empadd[{{$cnt}}]" name="empadd[{{$cnt}}]" value="" class="form-control">{{$odemp->empname}}</</textarea></td>
                                                    <td><textarea type="text" id="duration[{{$cnt}}]" name="duration[{{$cnt}}]" value="" class="form-control">{{$odemp->duration}}</textarea></td>
                                                    <td><textarea type="text" id="designation[{{$cnt}}]" name="designation[{{$cnt}}]" value="" class="form-control">{{$odemp->designation}}</textarea></td>
                                                </tr>
                                                <tr data-expanded="true">
                                                    <td>{{$cnt+1}}</td>
                                                    <td><input type="text" id="empname[{{$cnt}}]" name="empname[{{$cnt}}]" value="{{$odemp->empname}}" class="form-control">{{$odemp->empname}}</input></td>
                                                    <td><input type="text" id="empadd[{{$cnt}}]" name="empadd[{{$cnt}}]" value="{{$odemp->empname}}" class="form-control">{{$odemp->empname}}</</input></td>
                                                    <td><input type="text" id="duration[{{$cnt}}]" name="duration[{{$cnt}}]" value="{{$odemp->designation}}" class="form-control">{{$odemp->duration}}</input></td>
                                                    <td><input type="text" id="designation[{{$cnt}}]" name="designation[{{$cnt}}]" value={{$odemp->designation}}" class="form-control">{{$odemp->designation}}</input></td>
                                                </tr> --}}

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                        <!--button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('odDetails.cancel')</button>
                        <button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('odDetails.clear')</button-->
                        <button type="submit" class="btn btn waves-effect waves-light btn-success">
                        @lang('odDetails.save')</button>
                    </div>
                    <br/>
                        @if(Session::get('msgodemphist')) 
                    <div class="card-footer">

                        <div class="alert alert-warning">
                            {{Session::get('msgodemphist')}}
                        </div>

                    </div>
                    @elseif (!empty($msgodemphist))
                    <div class="card-footer">

                        <div class="alert alert-warning">
                            {{$msgodemphist}}
                        </div>

                    </div>
                    @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

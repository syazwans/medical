    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body m-10">
                    <form action="" method="">
                        {{ csrf_field() }}
                        <div class="form-body">
                            <h4 class="card-title">@lang('medical_board/takwim.takwim')</h4>
                            <hr>
                            <br>
                            <div class="row p-t-20">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label">@lang('medical_board/takwim.attr.year')</label>
                                        <div class="controls">
                                            <select name="takwim_year" id="takwim_year_listing" class="form-control">
                                                <option value="">-- @lang('medical_board/index.please_select') -- </option>}
                                                @for($year=date('Y') - 1 ; $year <= date('Y') + 1 ; $year++)
                                                    <option value="{{$year}}">{{$year}}</option>
                                                @endfor
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('medical_board/takwim.attr.hospital')</label>
                                        <div class="controls">
                                            <select name="takwim_hospital"  id="takwim_hospital_listing" required class="select2 form-control" style="width:100%;">
                                            <option value=""><b>-- @lang('medical_board/index.please_select') -- </b></option>
                                            @foreach ($state as $s)
                                                @foreach ($hospital as $h)
                                                    @if($s->refcode == $h->statecode)
                                                        <optgroup label="{{$s->descen}}" style="font-style:bold;">
                                                            <option value={{$h->hospital_id}}>{{$h->hospital_name}}</option>
                                                        </optgroup>
                                                    @endif
                                                @endforeach
                                            @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" id="takwim_statecode_listing" name="takwim_statecode">
                                {{-- <div class="col-md-6">
                                    <div class="form-group"> --}}
                                        <input type="hidden" name="application_url" id="application_url_listing" value="{{URL::to(Request::route()->getPrefix()) }}"/>
                                        {{-- <label class="control-label">@lang('medical_board/takwim.attr.address')</label> --}}
                                        <input type="hidden" class="form-control" id="takwim_address_listing" name="takwim_address" disabled>
                                        {{-- <div id="takwim_address_div"></div> --}}
                                    {{-- </div>
                                </div> --}}
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('medical_board/takwim.attr.medical_board_category')</label>
                                        {{-- <div class="controls"> --}}
                                        <select name="takwim_medical_board_category" id="takwim_medical_board_category_listing" required class="form-control">
                                            <option value=""><b>-- @lang('medical_board/index.please_select') -- </b></option>
                                            <option value="ALL">@lang('medical_board/index.all')</option>
                                            @foreach ($medical_board_category1 as $value)
                                                <option value="{{$value->refcode}}" {{-- selected = "selected" --}}>{{$value->descen}}</option>
                                            @endforeach --}}
                                            {{-- <option value="1">JD</option>
                                            <option selected value="2">JDK</option> --}}
                                        </select>
                                        {{-- </div> --}}
                                    </div>
                                </div>
                                {{-- <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">@lang('takwim.attr.venue')</label>
                                        <textarea name="takwim_venue" class="form-control"></textarea>
                                    </div>
                                </div> --}}
                                <div class="col-md-1" style="margin-top: 8px;">
                                    <div class="form-group">
                                        <label class="control-label"></label>
                                        <button type="button" class="btn btn waves-effect waves-light btn-success" id="search_annualAgenda" disabled> <i class="fa fa-search"></i> @lang('medical_board/takwim.search')</button>
                                    </div>
                                </div>
                            </div>
                            <br>{{-- <br> --}}
                            <hr>
                            <br>
                            <div class="table-responsive">
                                <table id="takwim_listing" class="table table-bordered table-striped">
                                    <thead style="background-color:skyblue;">
                                        <tr>
                                            {{-- <th>NO</th> --}}
                                            <th>@lang('medical_board/takwim.list.date')</th>
                                            <th>@lang('medical_board/takwim.list.session')</th>
                                            <th>@lang('medical_board/takwim.list.venue')</th>
                                            <th>@lang('medical_board/takwim.list.medical_board_category')</th>
                                            <th>@lang('medical_board/takwim.list.discipline')</th>
                                            <th>@lang('medical_board/takwim.list.hospital')</th>
                                            <th>@lang('medical_board/takwim.list.remarks')</th>
                                            <th>@lang('medical_board/takwim.list.panel')</th>
                                            <th>@lang('medical_board/takwim.list.quota')</th>
                                        </tr>
                                    </thead>
                                    {{-- <tbody id="tbody">
                                        @if(isset($jsonAnnualAgenda))
                                        @foreach($jsonAnnualAgenda as $value)
                                            <tr>
                                                <td></td>
                                                <td>{{$value->date_takwim}}</td>
                                                <td>{{$value->sidang}}</td>
                                                <td></td>
                                                <td>{{$value->mb_category}}</td>
                                                <td>{{$value->doc_speaciality}}</td>
                                                <td></td>
                                            </tr>
                                        @endforeach
                                        @endif
                                    </tbody> --}}
                                </table>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">                       
                <form action="/ilatinfo" method="POST">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-body">
                        <h5 class="card-title">@lang('pensionDetails.title')</h5>
                        <hr>
                        <div class="row p-t-20">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">@lang('pensionDetails.attr.desc')</label>
                                        

                                    @if(!empty($ilatinfo) && $ilatinfo->morbiddesc !='')
                                    {{--<input type="text" value="{{ $ilatinfo->morbiddesc }}" name="descriptionmorbidity" id="descriptionmorbidity" class="form-control">--}}
                                    <textarea name="descriptionmorbidity" id="descriptionmorbidity" class="form-control">{{ $ilatinfo->morbiddesc }}</textarea>
                                    @else
                                    {{--<input type="text"  name="descriptionmorbidity" id="descriptionmorbidity" class="form-control">--}}
                                    <textarea name="descriptionmorbidity" id="descriptionmorbidity" class="form-control"></textarea>
                                    @endif
                                           <!--<small class="form-control-feedback"> This is inline help </small>-->
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label class="control-label">@lang('pensionDetails.attr.year')</label>
                                    <select class="form-control custom-select" name="year_morbidity" onchange='checkyear()' id='year_morbidity'>
                                        <option></option>
                                        <?php $curryear = date('Y'); ?>
                                        @for ($i = $curryear; $i >= 1974; $i--)
                                        @if (!empty($ilatinfo) && $ilatinfo->morbidyear !='' && $ilatinfo->morbidyear == $i)
                                         <option value="{{$i}}" selected>{{$i}}</option>
                                         @else
                                         <option value="{{$i}}">{{$i}}</option>
                                         @endif
                                        @endfor

                                         {{--@if (!empty($ilatinfo) && $ilatinfo->morbidyear !='')
                                         <option value="{{$ilatinfo->morbidyear}}" hidden selected>{{$ilatinfo->morbidyear}}</option>

                                        @endif --}}
                                    </select>
                                    <label class="control-label" id='lblerror' style='color:red'></label>
                                </div>
                            </div> 
                        
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">@lang('pensionDetails.attr.engaged_employment')</label>
                                    <select name="engage" class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1">
                                         @if (!empty($ilatinfo) && $ilatinfo->inemployment !='' && $ilatinfo->inemployment == 'Y')
                                         <!--option value="{{$ilatinfo->inemployment}}" hidden selected>{{$ilatinfo->inemployment}}</option-->
                                         
                                         <option value="Y" selected>@lang('pensionDetails.attr.yes')</option>
                                         <option value="N">@lang('pensionDetails.attr.no')</option>
                                         @elseif (!empty($ilatinfo) && $ilatinfo->inemployment !='' && $ilatinfo->inemployment == 'N')
                                         <option value="Y">@lang('pensionDetails.attr.yes')</option>
                                         <option value="N" selected>@lang('pensionDetails.attr.no')</option>
                                         @else
                                        <option value="Y">@lang('pensionDetails.attr.yes')</option>
                                        <option value="N">@lang('pensionDetails.attr.no')</option>
                                        @endif
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label
                                        class="control-label">@lang('pensionDetails.attr.date_cessation')</label>
                                        @if(!empty($ilatinfo) && $ilatinfo->endempdate !='')
                                        <input type="date" value="{{substr($ilatinfo->endempdate,0,4)}}-{{substr($ilatinfo->endempdate,4,2)}}-{{substr($ilatinfo->endempdate,6,2)}}" name="dafe_of_cessation" id="date_of_cessation" class="form-control">
                                        @else
                                        <input type="date" name="dafe_of_cessation" id="date_of_cessation"class="form-control">
                                        @endif


                                </div>
                            </div>
                        </div>
                    </div>
                    <br/>       
                    @if(Session::get('messageilat'))
                    <div class="card-footer">

                        <div class="alert alert-warning">
                            {{Session::get('messageilat')}}
                        </div>

                    </div>
                    @elseif (!empty($messageilat))
                    <div class="card-footer">

                        <div class="alert alert-warning">
                            {{$messageilat}}
                        </div>

                    </div>
                    @endif
                    {{--<button type="button" class="btn btn waves-effect waves-light btn-secondary"
                        id="add_emp_info">Add Employer Information</button>
                    <div class="form-actions">
                        <button type="button"
                            class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.cancel')</button>
                        <button type="button"
                            class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.clear')</button>--}}
                    <div class="form-actions">
                    <button type="submit" class="btn btn-success"> @lang('insuredPerson.save')</button>

                    </div>
                

                </form>
            </div>
        </div>
    </div>
 </div>
    
<script>
function checkyear()
{
    var morbidyear = document.getElementById('year_morbidity').value;
    
    var lblerror = document.getElementById('lblerror');
    var today = new Date();
    
    var curryear = today.getFullYear();
    
    if (morbidyear > curryear)
    {
        lblerror.innerHTML  = 'Morbid date must not be after current year';
    }
    else
    {
        lblerror.innerHTML  = '';
    }
}
</script>

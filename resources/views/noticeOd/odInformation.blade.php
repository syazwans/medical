<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="/odinfo" method="post">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-body">
                        <h5 class="card-title">@lang('odDetails.title')</h5>
                        <hr>
                        <div class="row p-t-20">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">@lang('odDetails.attr.desc')</label>
                                    @if(!empty($oddata) && $oddata->oddesc != '')
                                    <textarea type="text" id="oddesc" name="oddesc" value="" class="form-control form-control">{{$oddata->oddesc}}</textarea>
                                    @else
                                    <textarea type="text" id="oddesc" name="oddesc" value="" class="form-control form-control"></textarea>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>@lang('odDetails.attr.disease_related')</label>
                                    <select class="form-control">
                                        <option>Please select</option>
                                        @if (!empty($oddata) == 'Y')
                                        <option value='Y' selected>@lang('odDetails.attr.yes')</option>
                                        <option value='N'>@lang('odDetails.attr.no')</option>
                                        @elseif (!empty($oddata) == 'N')
                                        <option value='Y'>@lang('odDetails.attr.yes')</option>
                                        <option value='N' selected>@lang('odDetails.attr.no')</option>
                                        @else
                                        <option value='Y'>@lang('accidentDetails.yes')</option>
                                        <option value='N'>@lang('accidentDetails.no')</option>
                                        @endif
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">@lang('odDetails.attr.duties')</label>
                                    @if(!empty($oddata) && $oddata->dutydesc != '')
                                    <textarea type="text" id="dutydesc" name="dutydesc" value="" class="form-control form-control">{{$oddata->dutydesc}}</textarea>
                                    @else
                                    <textarea type="text" id="dutydesc" name="dutydesc" value="" class="form-control form-control"></textarea>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">@lang('odDetails.attr.symptoms')</label>
                                    @if(!empty($oddata) && $oddata->symptom != '')
                                    <textarea type="text" id="symptom" name="symptom" value="" class="form-control form-control">{{$oddata->symptom}}</textarea>
                                    @else
                                    <textarea type="text" id="symptom" name="symptom" value="" class="form-control form-control"></textarea>
                                    @endif
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
                    @if(Session::get('messageod')) 
                    <div class="card-footer">

                        <div class="alert alert-warning">
                            {{Session::get('messageod')}}
                        </div>

                    </div>
                    @elseif (!empty($messageod))
                    <div class="card-footer">

                        <div class="alert alert-warning">
                            {{$messageod}}
                        </div>

                    </div>
                    @endif
                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-1.8.3.js"></script>
            <script src="https://code.jquery.com/ui/1.10.0/jquery-ui.js"></script>
            {{-- <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/redmond/jquery-ui.css" /> --}}

<script>
    $(document).ready(function() {
        $( "#startdate,#enddate" ).datepicker({
            changeMonth: true,
            changeYear: true,
            firstDay: 1,
            dateFormat: 'dd/mm/yy',
        })
        $( "#startdate" ).datepicker({ dateFormat: 'dd/mm/yy' });
        $( "#enddate" ).datepicker({ dateFormat: 'dd-mm-yy' });

        $('#enddate').change(function() {
            var start = $('#startdate').datepicker('getDate');
            var end   = $('#enddate').datepicker('getDate');

            if (start<end) {
                var days   = (end - start)/1000/60/60/24;
                $('#days').val(days);
            }
            else {
                alert ("You cant come back before you have been!");
                $('#startdate').val("");
                $('#enddate').val("");
                $('#days').val("");
            }
}); //end change function
}); //end ready
</script>

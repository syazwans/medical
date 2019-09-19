<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form method="POST" action="./certificateemployee">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">

                    <div class="form-body">
                        <h3 class="card-title">@lang('certification.title')</h3>
                        <hr class="m-t-0 m-b-40">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="custom-control custom-checkbox mr-sm-2 mb-3">
                                    @if (!empty($empcert))
                                    @if ($empcert->emprepname == '' && $empcert->emprepdes == '' && $empcert->emprepdate == '')
                                    
                                    <input type="checkbox" class="custom-control-input" id="chkcert" name='chkcert' onchange="chkcertchange()">
                                    @else
                                    
                                    <input type="checkbox" class="custom-control-input" id="chkcert" name='chkcert' checked onchange="chkcertchange()">>
                                    @endif
                                    @else
                                    
                                    <input type="checkbox" class="custom-control-input" id="chkcert" name='chkcert' onchange="chkcertchange()">>
                                    @endif
                                    <label class="custom-control-label" for="chkcert">@lang('certification.attr.details')</label>
                                </div>
                            </div>
                        </div>	
                        <div class="card-body">
                                
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">@lang('certification.attr.name')</label>
                                    @if(!empty($empcert))
                                    @if ($empcert->emprepname == '' && $empcert->emprepdes == '' && $empcert->emprepdate == '')
                                    <input type="text" class="form-control" id='emprepname' name="emprepname" value="" disabled>
                                    @else
                                    <input type="text" class="form-control" id='emprepname' name="emprepname" value="{{$empcert->emprepname}}">
                                    @endif
                                    @else
                                    <input type="text" class="form-control" id='emprepname' name="emprepname" value="" disabled>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">@lang('certification.attr.designation')</label>
                                    @if(!empty($empcert))
                                    @if ($empcert->emprepname == '' && $empcert->emprepdes == '' && $empcert->emprepdate == '')
                                    <input type="text" class="form-control" id='emprepdes' name="emprepdes" value="" disabled>
                                    @else
                                    <input type="text" class="form-control" id='emprepdes' name="emprepdes" value="{{$empcert->emprepdes}}">
                                    @endif
                                    @else
                                    <input type="text" class="form-control" id='emprepdes' name="emprepdes" value="" disabled>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">@lang('certification.attr.date')</label>
                                    @if(!empty($empcert))
                                    @if ($empcert->emprepname == '' && $empcert->emprepdes == '' && $empcert->emprepdate == '')
                                    <input type="date" class="form-control" id="emprepdate"  value="" name="emprepdate" disabled >
                                    @else
                                    <input type="date" class="form-control" id="emprepdate"  value="@if (strlen($empcert->emprepdate) == 8){{substr($empcert->emprepdate,0,4)}}-{{substr($empcert->emprepdate,4,2)}}-{{substr($empcert->emprepdate,6,2)}}@endif" name="emprepdate">
                                    @endif
                                    @else
                                    <input type="date" class="form-control" id="emprepdate"  value="" name="emprepdate" disabled >
                                    @endif
                                </div>
                            </div>
							
                        </div>
					
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-1"></label>
                                    <div class="col-md-12">
                                            <p class="form-control-static"> @lang('certification.attr.no_sign') </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="form-actions">
                                            <button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.cancel')</button>
                                            <button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.clear')</button>
                                            <button type="submit" class="btn btn waves-effect waves-light btn-success"> <i class="fa fa-check"></i>@lang('insuredPerson.save')</button>  
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        @if(Session::get('messagecert')) 
                        <div class="card-footer">

                            <div class="alert alert-warning">
                                {{Session::get('messagecert')}}
                            </div>

                        </div>
                        @elseif (!empty($messagecert))
                        <div class="card-footer">

                            <div class="alert alert-warning">
                                {{$messagecert}}
                            </div>

                        </div>
                        @endif
				
                    </div>
                </form>
            </div>
	</div>
    </div>
<!-- Row -->
</div>

<script type='text/javascript'>
    function chkcertchange()
    {
        var chkcert = document.getElementById('chkcert');
        var chkval = chkcert.value;
        
        //alert(chkcert.checked);
        
        if (chkcert.checked == false)
        {
            document.getElementById('emprepname').setAttribute('disabled', true);
            document.getElementById('emprepdes').setAttribute('disabled', true);
            document.getElementById('emprepdate').setAttribute('disabled', true);
        }
        else
        {
            document.getElementById('emprepname').removeAttribute('disabled');
            document.getElementById('emprepdes').removeAttribute('disabled');
            document.getElementById('emprepdate').removeAttribute('disabled');
        }
    }
</script>
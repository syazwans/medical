<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <form method="post" action="{{url ('/updmc')}}">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <input type="hidden" name="caserefno" value="{{$caserefno}}">
                <div class="form-body">
                    <h3 class="card-title">@lang('medicalDetails.title')</h3>
                    <hr>
                    
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">@lang('medicalDetails.attr.nameAddress_clinic')</label>
                                    <textarea type="text" id="clinicname" name="clinicname" class="form-control">@if (!empty($mcdata)){{$mcdata[0]->clinicname}}@endif</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">@lang('medicalDetails.attr.start_mc')</label>
                                    <input  id="startdate" name="mcstartdate" 
                                            value="@if (!empty($mcdata) && strlen($mcdata[0]->mcinfo[0]->startdate>0)) {{substr($mcdata[0]->mcinfo[0]->startdate,6,2)}}/{{substr($mcdata[0]->mcinfo[0]->startdate,4,2)}}/{{substr($mcdata[0]->mcinfo[0]->startdate,0,4)}} @endif" 
                                            type="text" class="datepicker" placeholder="dd/mm/yyyy">
                                </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label" >@lang('medicalDetails.attr.end_mc')</label>
                                    <input id="enddate" name="mcenddate" 
                                           value="@if (!empty($mcdata) && strlen($mcdata[0]->mcinfo[0]->enddate>0)) {{substr($mcdata[0]->mcinfo[0]->enddate,6,2)}}/{{substr($mcdata[0]->mcinfo[0]->enddate,4,2)}}/{{substr($mcdata[0]->mcinfo[0]->enddate,0,4)}} @endif" 
                                           type="text" class="datepicker" placeholder="dd/mm/yyyy">
                                </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label" >@lang('medicalDetails.attr.total_days')</label>
                                    <input type="text" name="totaldays" value="@if (!empty($mcdata)) {{$mcdata[0]->mcinfo[0]->totalmc}} @endif" id="totaldays" class="form-control" placeholder=""> 
                                </div>
                            </div>
                        </div>			
                        <!--/span-->
                        <!--div class="col-md-3">
                            <div class="form-group">
                                <label class="control-label">@lang('medicalDetails.attr.mc_status')</label>
                                <select class="form-control" tabindex="1">
                                    @foreach($mcsts as $MC)
                                    <option value="{{$MC->refcode}}">{{$MC->descen}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div-->
                        
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label" >@lang('medicalDetails.attr.start_date')</label>
                                    <input id="startdate1" name="workstart" type="text" 
                                           value="@if (!empty($mcdata) && strlen($mcdata[0]->mcinfo[0]->workstartdate>0)) {{substr($mcdata[0]->mcinfo[0]->workstartdate,6,2)}}/{{substr($mcdata[0]->mcinfo[0]->workstartdate,4,2)}}/{{substr($mcdata[0]->mcinfo[0]->workstartdate,0,4)}} @endif" 
                                           class="datepicker" placeholder="dd/mm/yyyy">
                                </div>
                            </div>
                        <!--/span-->

                        <!--/span-->
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label" >@lang('medicalDetails.attr.end_date')</label>
                                    <input id="enddate1" name="workend" type="text" 
                                           value="@if (!empty($mcdata) && strlen($mcdata[0]->mcinfo[0]->workenddate>0)) {{substr($mcdata[0]->mcinfo[0]->workenddate,6,2)}}/{{substr($mcdata[0]->mcinfo[0]->workenddate,4,2)}}/{{substr($mcdata[0]->mcinfo[0]->workenddate,0,4)}} @endif" 
                                           class="datepicker" placeholder="dd/mm/yyyy">
                                </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">@lang('medicalDetails.attr.days_work')</label>
                                    <input type="text" id="days1" name="totalwork" value="@if (!empty($mcdata)) {{$mcdata[0]->mcinfo[0]->totalwork}} @endif" class="form-control" placeholder="">
                                </div>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('medicalDetails.attr.status')</label>
                                    <!--input type="text" id="status" name="worksts" class="form-control" placeholder=""-->
                                    <select type="text" id="status" name="worksts" class="form-control">
                                        <option>@lang('medicalDetails.choose')</option>
                                        @foreach ($worksts as $w)
                                        @if (!empty($mcdata) && $mcdata[0]->mcinfo[0]->statuswork == $w->refcode) 
                                        <option value="{{$w->refcode}}" selected>{{$w->descen}}</option>
                                        @else
                                        <option value="{{$w->refcode}}">{{$w->descen}}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">@lang('medicalDetails.attr.wages_mc')</label>
                                    <select class="form-control custom-select" name="wagespaid">
                                        <option>@lang('medicalDetails.choose')</option>
                                        @if (!empty($mcdata) && $mcdata[0]->mcinfo[0]->wagespaid == 'Y') 
                                        <option value="Y" selected>@lang('medicalDetails.attr.yes')</option>
                                        <option value="N">@lang('medicalDetails.attr.no')</option>
                                        @elseif (!empty($mcdata) && $mcdata[0]->mcinfo[0]->wagespaid == 'N') 
                                        <option value="Y">@lang('medicalDetails.attr.yes')</option>
                                        <option value="N" selected>@lang('medicalDetails.attr.no')</option>
                                        @else
                                        <option value="Y">@lang('medicalDetails.attr.yes')</option>
                                        <option value="N">@lang('medicalDetails.attr.no')</option>
                                        @endif
                                    </select>
                                </div>
                            </div>
                        </div>
                    
                </div>
                <!--/row-->
                
                
                    <div class="form-actions">
                        <button type="button" class="btn btn waves-effect waves-light btn-secondary btn-newMC ">@lang('insuredPerson.cancel')</button>
                        <button type="button" class="btn btn waves-effect waves-light btn-secondary btn-newMC">@lang('insuredPerson.clear')</button>
                        <!--button type="button" class="btn waves-effect waves-light btn-info btn-newMC" id="addMC" onclick="datafield();">Add MC</button-->
                        <button type="submit" class="btn btn waves-effect waves-light btn-success btn-newMC" onclick="test();"> <i class="fa fa-check"></i>
                        @lang('insuredPerson.save')</button>
                    </div>
                @if(Session::get('messagemc')) 
                <div class="card-footer">

                    <div class="alert alert-warning">
                        {{Session::get('messagemc')}}
                    </div>

                </div>
                @elseif (!empty($messagemc))
                <div class="card-footer">

                    <div class="alert alert-warning">
                        {{$messagemc}}
                    </div>

                </div>
                @endif 
            </form>
        </div>
    </div>
</div>



<script>


// $(document).ready(function () {
//  $('[id=startdate]').change(function () {
// 	var startdate= new Date(document.getElementById("startdate").value);
// 	alert(startdate);
// 	});
// });
// function test() {
// 	var startdate= new Date(document.getElementById("startdate").value);
// 	var enddate= new Date(document.getElementById("enddate").value);

// 	var a = moment(startdate);
//     var b = moment(enddate);
//     var diffDays = b.diff(a, 'days');

// 	// alert(totaldays.toLocaleDateString());

// 	} 



//    var startdate= new Date(document.getElementById("startdate").value);
//    var enddate= new Date(document.getElementById("enddate").value);

// 	var a = moment(startdate);
//     var b = moment(enddate);
//     var diffDays = b.diff(a, 'days');

var room = 1;

function datafield() {


	room++;
	var objTo = document.getElementById('id1');

	var divtest = document.createElement("div");
	divtest.setAttribute("id", "mcDetails" + room);
	var startdate=document.getElementById('startdate');
	var enddate=document.getElementById('enddate');
	var total_days=document.getElementById('days');

	var startdate1=document.getElementById('startdate1');
	var enddate1=document.getElementById('enddate1');
	var total_days1=document.getElementById('days1');


	startdate.setAttribute("id","startdate"+room);
	enddate.setAttribute("id","enddate"+room);
	total_days.setAttribute("id","days"+room);
	startdate1.setAttribute("id","startdate1"+room);
	enddate1.setAttribute("id","enddate1"+room);
	total_days1.setAttribute("id","days1"+room);

					//var rdiv = 'removeclass' + room;

					divtest.innerHTML = '<div class="col-lg-12"><form action="#"><div class="form-body"><hr><div class="row p-t-20"><div class="col-md-12"><div class="form-group"><label class="control-label">@lang('medicalDetails.attr.nameAddress_clinic')</label><textarea type="text" id="name" class="form-control"></textarea></div></div><div class="col-md-3"><div class="form-group"><label class="control-label">@lang('medicalDetails.attr.start_mc')</label><input  id="startdate" type="text" class="datepicker" placeholder="dd/mm/yyyy"></div></div><div class="col-md-3"><div class="form-group"><label class="control-label" >@lang('medicalDetails.attr.end_mc')</label><input id="enddate" type="text" class="datepicker" placeholder="dd/mm/yyyy"></div></div><div class="col-md-3"><div class="form-group"><label class="control-label" >@lang('medicalDetails.attr.total_days')</label><input type="text" id="days" class="form-control" placeholder=""></div></div><div class="col-md-3"><div class="form-group"><label class="control-label">@lang('medicalDetails.attr.mc_status')</label><select class="form-control"><option value=""></option><option value=""></option></select></div></div><div class="col-md-3"><div class="form-group"><label class="control-label" >@lang('medicalDetails.attr.start_date')</label><input id="startdate1" type="text" class="datepicker" placeholder="dd/mm/yyyy"></div></div><div class="col-md-3"><div class="form-group"><label class="control-label" >@lang('medicalDetails.attr.end_date')</label><input id="enddate1" type="text" class="datepicker" placeholder="dd/mm/yyyy"></div></div><div class="col-md-3"><div class="form-group"><label class="control-label">@lang('medicalDetails.attr.days_work')</label><input type="text" id="days1" class="form-control" placeholder=""></div></div><div class="col-md-3"><div class="form-group"><label class="control-label">@lang('medicalDetails.attr.status')</label><input type="text" id="status" class="form-control" placeholder=""></div></div></div></div><div class="row"><div class="col-md-4"><div class="form-group"><label class="control-label">@lang('medicalDetails.attr.wages_mc')</label><select class="form-control custom-select"><option>@lang('medicalDetails.attr.yes')</option><option>@lang('medicalDetails.attr.no')</option></select></div></div></div><div id="id1"></div></form></div></div></div>'; 

					objTo.appendChild(divtest)

					document.getElementById('btn1').disabled = true;



				}
			</script>

			<script src="https://code.jquery.com/jquery-1.8.3.js"></script>
			<script src="https://code.jquery.com/ui/1.10.0/jquery-ui.js"></script>
			{{-- <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/redmond/jquery-ui.css" /> --}}
			{{-- <script>
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
</script> --}}

<script>
	$(document).ready(function() {

		$( "#startdate1,#enddate1" ).datepicker({
			changeMonth: true,
			changeYear: true,
			firstDay: 1,
			dateFormat: 'dd/mm/yy',
		})

		$( "#startdate1" ).datepicker({ dateFormat: 'dd/mm/yy' });
		$( "#enddate1" ).datepicker({ dateFormat: 'dd-mm-yy' });

		$('#enddate1').change(function() {
			var start = $('#startdate1').datepicker('getDate');
			var end   = $('#enddate1').datepicker('getDate');

			if (start<end) {
				var days   = (end - start)/1000/60/60/24;
				$('#days1').val(days);
			}
			else {
				alert ("You cant come back before you have been!");
				$('#startdate1').val("");
				$('#enddate1').val("");
				$('#days1').val("");
			}
		});
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
<script>
	$('#addMC').click(function () {
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
	});
</script>

<script>
	$('#addMC').click(function () {
		$( "#startdate1,#enddate1" ).datepicker({
			changeMonth: true,
			changeYear: true,
			firstDay: 1,
			dateFormat: 'dd/mm/yy',
		})

		$( "#startdate1" ).datepicker({ dateFormat: 'dd/mm/yy' });
		$( "#enddate1" ).datepicker({ dateFormat: 'dd-mm-yy' });

		$('#enddate1').change(function() {
			var start = $('#startdate1').datepicker('getDate');
			var end   = $('#enddate1').datepicker('getDate');

			if (start<end) {
				var days   = (end - start)/1000/60/60/24;
				$('#days1').val(days);
			}
			else {
				alert ("You cant come back before you have been!");
				$('#startdate1').val("");
				$('#enddate1').val("");
				$('#days1').val("");
			}

}); //end ready
	});
</script>
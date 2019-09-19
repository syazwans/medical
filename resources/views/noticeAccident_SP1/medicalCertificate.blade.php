@extends('layouts.app')

@section('maintitle', 'Tab Screen')

@section('desc', 'Form')

@section('head')
<link href="{{ asset("bower_components/footable/css/footable.standalone.min.css")}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <form method="post" action="{{url ('/testmc')}}">
                <input type="hidden" name="_token" value="{{csrf_token()}}">

                <div class="form-body ">
                    <h5 class="card-title">@lang('medicalDetails.title')</h5>
                    <hr>
                    
                    <div id="mcdetails">
                        <input type="input" value="" id="startdate[0]" name="startdate[0]">
                        <input type="input" value="" id="enddate[0]" name="enddate[0]">
                    </div>
                    
                    <div id="div_mcdetail" class="attendtable1">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                        <label class="control-label">@lang('medicalDetails.attr.nameAddress_clinic')</label>
                                        <textarea type="text" id="clinicname" name="clinicname" class="form-control">@if (!empty($mcdata)){{$mcdata[0]->clinicname}}@endif</textarea>
                                </div>
                            </div>
                        </div>
                        <div id="div_mcmain" class="toappend">
                            <input type="hidden" value="" id="cnt">
                             
                        <div class="row">
                            <div class="col-md-12 col-lg-4">
                                <div class="form-group">
                                    <label class="control-label">Type Of HUS</label>
                                    <select class="form-control" name="husstatus">


                                    </select>
                                </div>
                            </div>
                        </div>		
                            <!--/span-->
                        
                        <div class="row" id="mcdets">
                            
                            <div class="col-md-12 classdivdalam" id="divdalam">
                                <div id="accordion1" role="tablist" aria-multiselectable="true">
                                    <div class="card m-b-0">
                                        <div class="card-header" role="tab" id="attendwork">
                                            <h5 class="mb-0">
                                            <a class="collapsed link" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">
                                              Medical Leave
                                            </a>
                                            </h5>
                                        </div>
                                        <div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="attendwork">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="control-label" >@lang('medicalDetails.attr.start_date')</label>
                                                            <input id="startdate1" name="startdate1" type="text" 
                                                                                       value="@if (!empty($mcdata) && strlen($mcdata[0]->mcinfo[0]->workstartdate>0)) {{substr($mcdata[0]->mcinfo[0]->workstartdate,6,2)}}/{{substr($mcdata[0]->mcinfo[0]->workstartdate,4,2)}}/{{substr($mcdata[0]->mcinfo[0]->workstartdate,0,4)}} @endif" 
                                                                                       class="datepicker" placeholder="dd/mm/yyyy">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="control-label" >@lang('medicalDetails.attr.end_date')</label>
                                                            <input id="enddate1" name="enddate1" type="text" 
                                                                       value="@if (!empty($mcdata) && strlen($mcdata[0]->mcinfo[0]->workenddate>0)) {{substr($mcdata[0]->mcinfo[0]->workenddate,6,2)}}/{{substr($mcdata[0]->mcinfo[0]->workenddate,4,2)}}/{{substr($mcdata[0]->mcinfo[0]->workenddate,0,4)}} @endif" 
                                                                       class="datepicker" placeholder="dd/mm/yyyy">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="control-label">@lang('medicalDetails.attr.total_days')</label>
                                                                <input type="text" id="days1" name="totalwork" value="@if (!empty($mcdata)) {{$mcdata[0]->mcinfo[0]->totalwork}} @endif" class="form-control" placeholder="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">

                                                <div id="accordion2" role="tablist" aria-multiselectable="true">
                                                    <div class="card m-b-0">
                                                        <div class="card-header" role="tab" id="attendwork">
                                                            <h5 class="mb-0">
                                                                <a class="collapsed link" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo3" aria-expanded="false" aria-controls="collapseTwo3">
                                                                  Attended Work
                                                                </a>
                                                          </h5>
                                                        </div>
                                                        <div id="collapseTwo3" class="collapse" role="tabpanel" aria-labelledby="attendwork">
                                                            <div class="card-body">
                                                                <table id="demo-foo-row-toggler" class="table table-bordered attendtable" data-toggle-column="first">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Start Date</th>
                                                                            <th>End Date</th>
                                                                            <th data-breakpoints="xs sm">Total Days</th>
                                                                            <th data-breakpoints="xs">Status</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr data-expanded="true" id="div_attend_work">
                                                                            <td>
                                                                                <div class="col-md-10">
                                                                                    <input id="startdate1" name="workstart" type="text" value="@if (!empty($mcdata) && strlen($mcdata[0]->mcinfo[0]->workstartdate>0)) {{substr($mcdata[0]->mcinfo[0]->workstartdate,6,2)}}/{{substr($mcdata[0]->mcinfo[0]->workstartdate,4,2)}}/{{substr($mcdata[0]->mcinfo[0]->workstartdate,0,4)}} @endif" class="datepicker" placeholder="dd/mm/yyyy">
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="col-md-10">
                                                                                    <input id="enddate1" name="workend" type="text" 
                                                                                            value="@if (!empty($mcdata) && strlen($mcdata[0]->mcinfo[0]->workenddate>0)) {{substr($mcdata[0]->mcinfo[0]->workenddate,6,2)}}/{{substr($mcdata[0]->mcinfo[0]->workenddate,4,2)}}/{{substr($mcdata[0]->mcinfo[0]->workenddate,0,4)}} @endif" 
                                                                                            class="datepicker" placeholder="dd/mm/yyyy">
                                                                                </div>
                                                                            </td>
                                                                            <td><input type="text" class="form-control"></td>
                                                                           <td>
                                                                                <select type="text" id="status" name="worksts" class="form-control">

                                                                                </select>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <div class="col-lg-3">
                                                                    <button type="button" id="btn_add_attended_work" class="btn btn waves-effect waves-light btn-success btn-newMC">Add Attended Work</button>
                                                                </div>    
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        </div>
                    </div>
                        
                </div>  
                    <!--/row-->
                    
                    
                <div class="form-actions">
                    <button type="button" class="btn btn waves-effect waves-light btn-secondary btn-newMC ">@lang('insuredPerson.cancel')</button>
                    <button type="button" class="btn btn waves-effect waves-light btn-secondary btn-newMC">@lang('insuredPerson.clear')</button>
                    <button type="button" id="btn_add_MC" class="btn waves-effect waves-light btn-info btn-newMC"  onclick="generateMC()">Add MC</button>
                    <button type="submit" class="btn btn waves-effect waves-light btn-success btn-newMC"> <i class="fa fa-check"></i>
                    @lang('insuredPerson.save')</button>
                </div>
                    
            </form>
        </div>
    </div>
</div>
    
<script>
    
  
var num = 0;
function generateMC()
{
    mcdets = document.getElementById('mcdetails');
    //$('.toappend').append(get_div1);
    
    var divrow = document.createElement("div");
    divrow.className = 'row';  
    
    var labelstart = document.createElement('label');
    labelstart.className = 'control-label';
    labelstart.setAttribute("class", 'control-label');
    labelstart.innerHTML = 'Start Date';
    
    var labelend = document.createElement('label');
    labelend.className = 'control-label';
    labelend.setAttribute("class", 'control-label');
    labelend.innerHTML = 'End Date';
    
    var labeltotal = document.createElement('label');
    labeltotal.className = 'control-label';
    labeltotal.setAttribute("class", 'control-label');
    labeltotal.innerHTML = 'Total';
    
    var startdate = document.createElement("input");
    startdate.id = 'startdate_'+num;//'startdate['+num+']';
    startdate.type = 'date';
    startdate.name = 'startdate_'+num;//'startdate['+num+']';
    startdate.className = 'form-control';
    startdate.setAttribute("onchange", 'counttotal('+num+')');
    startdate.value=startdate.id;
    
    var enddate = document.createElement("input");
    enddate.id = 'enddate_'+num;//'enddate['+num+']';
    enddate.type = 'date';
    enddate.name = 'enddate_'+num;//'enddate['+num+']';
    enddate.className = 'form-control';
    enddate.setAttribute("onchange", 'counttotal('+num+')');
    
    
    var total = document.createElement("input");
    total.id = 'total_'+num;//'total['+num+']';
    total.type = 'text';
    total.name = 'total_'+num;//'total['+num+']';
    total.className = 'form-control';
    //enddate.setAttribute("class", 'form-control');
        
    var divcol3 = document.createElement("div");
    divcol3.className = 'col-md-3';
    var divformgroup = document.createElement("div");
    divformgroup.className = 'form-group';  
    divformgroup.appendChild(labelstart);
    divformgroup.appendChild(startdate);
    divcol3.appendChild(divformgroup);
    divrow.appendChild(divcol3);
    
    var divcol3 = document.createElement("div");
    divcol3.className = 'col-md-3';
    divformgroup = document.createElement("div");
    divformgroup.className = 'form-group';
    divformgroup.appendChild(labelend);
    divformgroup.appendChild(enddate);
    divcol3.appendChild(divformgroup);
    divrow.appendChild(divcol3);
    
    var divcol3 = document.createElement("div");
    divcol3.className = 'col-md-3';
    divformgroup = document.createElement("div");
    divformgroup.className = 'form-group';
    divformgroup.appendChild(labeltotal);
    divformgroup.appendChild(total);
    divcol3.appendChild(divformgroup);
    divrow.appendChild(divcol3);
    
    
    
    
    mcdets.appendChild(divrow);
    
    
    //alert(get_div.innerHTML);
    num++;

}



function counttotal(idx)
{
    
    //var startdate = document.getElementById('startdate['+idx+']').value;
    var startdate = document.getElementById('startdate_'+idx).value;
    //alert(startdate);
    var enddate = document.getElementById('enddate_'+idx).value;
    var total = document.getElementById('total_'+idx);
    
    if(startdate != "" && enddate != ""){
        total.value = GetDays(startdate,enddate);
        //total.value = startdate;
    }
    else
    {
        total.value = "";
    }
    
    
}

function GetDays(startdate, enddate){
    var dropdt = new Date(startdate);
    var pickdt = new Date(enddate);
    return parseInt(((pickdt - dropdt) / (24 * 3600 * 1000)) + 1);
    //return Math.round((dropdt - pickdt) / (24 * 3600 * 1000));
}
/*
function cal(){
    if(document.getElementById("mcfrom").value != "" && document.getElementById("mcto").value != ""){
        document.getElementById("totalmc").value = GetDays();
    }
    else
    {
        document.getElementById("totalmc").value = "";
    }
}  */
</script>
    
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
    
    @endsection
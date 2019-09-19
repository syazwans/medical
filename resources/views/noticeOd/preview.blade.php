@extends('layouts.app')

@section('maintitle', 'Tab Screen')

@section('desc', 'Form')

@section('head')
<link href="{{ asset("bower_components/footable/css/footable.standalone.min.css")}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

<!-- Column -->

<div class="my-3 my-md-5">
<div class="row" >
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                        <form action="/accsubmit" method="POST"> 
                        <div class="form-body" >
						<h5 class="card-title">Insured Person Details</h5>
                            <hr class="m-t-0 m-b-40">
                            <div class="row" id="div_preview">
								<div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label">Name :</label>
                                            <div class="col-md-6">
                                                <label class="control-label text-right" >{{ $obprofile->name }}</label>
											</div>
                                    </div>
                                </div>
								<div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label">Identification Type :</label>
                                            <div class="col-md-6">
                                                <label class="control-label text-right ">@foreach($idtype as $id)
                                                    @if (!empty($obprofile) && $id->refcode == $obprofile->idtype)
                                                     {{$id->descen}}
                                                    @else
                                                    @endif
                                                    @endforeach</label>
											</div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->
                            <div class="row">
								<div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="control-label">Identification Number :</label>
                                                <div class="col-md-6">
                                                    <label class="control-label text-right ">{{ $obprofile->idno }}</label>
                                                </div>
                                        </div>
                                </div>
								<div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="control-label">Date of Birth :</label>
                                                <div class="col-md-6">
                                                    <label class="control-label text-right ">{{substr($obprofile->dob,6,2)}}/{{substr($obprofile->dob,4,2)}}/{{substr($obprofile->dob,0,4)}}</label>
                                                </div>
                                        </div>
                                </div>
                            </div>
                            <div class="row">
								<div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label">Race :</label>
                                            <div class="col-md-6">
                                                <label class="control-label text-right "> @foreach($race as $id)
                                                    @if (!empty($obprofile) && $obprofile->race == $id->refcode)
                                                    {{$id->descen}}
                                                    @else
                                                    @endif
                                                    @endforeach</label>
											</div>
                                    </div>
                                </div>
								<div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label">Gender :</label>
                                            <div class="col-md-6">
                                                <label class="control-label text-right ">{{ $obprofile->gender }}</label>
											</div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->
							<div class="row">
								<div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label">Occupation :</label>
                                            <div class="col-md-6">
                                                <label class="control-label text-right ">{{ $obprofile->occupation }} </label>
											</div>
                                    </div>
                                </div>
								<div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label">Address :</label>
                                            <div class="col-md-6">
                                                <label class="control-label text-right ">{{ $obprofile->add1 }}</label>
											</div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <div class="row">
								<div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="control-label">City :</label>
                                                <div class="col-md-6">
                                                    <label class="control-label text-right ">{{ $obprofile->city }}</label>
                                                </div>
                                        </div>
                                </div>
								<div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="control-label">State :</label>
                                                <div class="col-md-6">
                                                    <label class="control-label text-right ">@foreach($state as $s)
                                                        @if(!empty($obprofile) && $obprofile->statecode == $s->refcode)
                                                       {{$s->descen}}
                                                        @else
                                                        @endif
                                                        @endforeach</label>
                                                </div>
                                        </div>
                                </div>
                            </div>
							<div class="row">
								<div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label">Postcode :</label>
                                            <div class="col-md-6">
                                                <label class="control-label text-right ">{{ $obprofile->postcode }}</label>
											</div>
                                    </div>
                                </div>
								<div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label">Telephone No. :</label>
                                            <div class="col-md-6">
                                                <label class="control-label text-right ">{{ $obprofile->telno }}</label>
											</div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
							<div class="row">
								<div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label">Mobile No. :</label>
                                            <div class="col-md-6">
                                                <label class="control-label text-right ">{{ $obprofile->mobileno }}</label>
											</div>
                                    </div>
                                </div>
								<div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label">Email :</label>
                                            <div class="col-md-6">
                                                <label class="control-label text-right ">{{ $obprofile->mobileno }}</label>
											</div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <div class="row">
								<div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="control-label">Citizen :</label>
                                                <div class="col-md-6">
                                                    <label class="control-label text-right ">@foreach($national as $N)
                                                        @if (!empty($obprofile) && $obprofile->nationality == $N->refcode)
                                                            {{$N->descen}}
                                                            @else
                                                            @endif
                                                        @endforeach</label>
                                                </div>
                                        </div>
                                </div>
                            </div> 
                            <h5 class="card-title">Employer Details</h5>
                            <hr class="m-t-0 m-b-40">
                            <div class="row">
								<div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label">Employer Code No :</label>
                                            <div class="col-md-6">
                                                <label class="control-label text-right ">{{$employer->empcode}}</label>
											</div>
                                    </div>
                                </div>
								<div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label">Employer Type :</label>
                                            <div class="col-md-6">
                                                <label class="control-label text-right ">@foreach ($emptype as $et)
                                                    @if (!empty($emprecord) && $emprecord[0]->emptype == $et->refcode )
                                                    {{$et->descen}}
                                                    @else
                                                    @endif
                                                    @endforeach</label>
											</div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            
							<div class="row">
								<div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="control-label">Employer Name :</label>
                                                <div class="col-md-6">
                                                    <label class="control-label text-right ">{{$employer->empname}}</label>
                                                </div>
                                        </div>
                                </div>
								<div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="control-label">Address :</label>
                                                <div class="col-md-8">
                                                    <label class="control-label text-right ">@if (!empty($emprecord) && $emprecord[0]->add1 != null){{$emprecord[0]->add1}}@else{{$employer->add1}}@endif,@if (!empty($emprecord) && $emprecord[0]->add2 != null){{$emprecord[0]->add2}}@else{{$employer->add2}}@endif</label>
                                                </div>
                                        </div>
                                </div>
                            </div>
							<div class="row">
								<div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label">Postcode :</label>
                                            <div class="col-md-6">
                                                <label class="control-label text-right ">{{$employer->postcode}}</label>
											</div>
                                    </div>
                                </div>
								<div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label">City :</label>
                                            <div class="col-md-6">
                                                <label class="control-label text-right ">{{$employer->city}}</label>
											</div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
							<div class="row">
								<div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label">State :</label>
                                            <div class="col-md-6">
                                                <label class="control-label text-right ">0123456897</label>
											</div>
                                    </div>
                                </div>
								<div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label">Telephone No. :</label>
                                            <div class="col-md-6">
                                                <label class="control-label text-right ">{{$employer->phoneno}}</label>
											</div>
                                    </div>
                                </div>
                            </div>
							<div class="row">
								<div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label">Fax No. :</label>
                                            <div class="col-md-6">
                                                <label class="control-label text-right ">{{$employer->faxno}}</label>
											</div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="control-label">E-mail :</label>
                                                <div class="col-md-6">
                                                    <label class="control-label text-right ">{{$employer->email}}</label>
                                                </div>
                                        </div>
                                    </div>
                                <!--/span-->
                            </div>
							<div class="row">
								<div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label">Commencement Date :</label>
                                            <div class="col-md-6">
                                                <label class="control-label text-right "></label>
											</div>
                                    </div>
                                </div>
								<div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label">Employment End Date :</label>
                                            <div class="col-md-6">
                                                <label class="control-label text-right "></label>
											</div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
							<h5 class="card-title">Wages Details</h5>
                            <hr class="m-t-0 m-b-40">
                            <div class="row">
								<div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label">Company Name:</label>
                                            <div class="col-md-6">
                                                <label class="control-label text-right">{{$employer->empname}}</label>
											</div>
                                    </div>
                                </div>
								<div class="col-md-6">
                                </div>
								<div class="col-md-12">
									<table class="table table-bordered">
                                        <thead>
                                            <tr>
												<th>No</th>
                                                <th>Month</th>
                                                <th>Year</th>
                                                <th>Wages(RM)</th>
                                                <th>Contribution (RM)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
												<td>1</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
								</div>
                                <!--/span-->
                            </div>
							<h5 class="card-title">Accident Details</h5>
                            <hr class="m-t-0 m-b-40">
                            <div class="row">
								<div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label">Accident Date:</label>
                                            <div class="col-md-6">
                                                <label class="control-label text-right ">{{substr(Session::get('accddate'),0,4)}}-{{substr(Session::get('accddate'),4,2)}}-{{substr(Session::get('accddate'),6,2)}}</label>
											</div>
                                    </div>
                                </div>
								<div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label">Time Accident :</label>
                                            <div class="col-md-6">
                                                <label class="control-label text-right ">{{substr(Session::get('accdtime'),0,2)}}:{{substr(Session::get('accdtime'),2,2)}}:{{substr(Session::get('accdtime'),4,2)}}</label>
											</div>
                                    </div>
                                </div>
                            </div>
							<div class="row">
								<div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label">Place of Accident :</label>
                                            <div class="col-md-6">
                                                <label class="control-label text-right ">@foreach($accdplace as $AccPlace)
                                                        @if (!empty($accinfo) && $accinfo->place == $AccPlace->refcode)
                                                        {{$AccPlace->descen}}
                                                        @else
                                                        @endif
                                                        @endforeach</label>
											</div>
                                    </div>
                                </div>
								<div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="control-label">When Accident Happen :</label>
                                                <div class="col-md-6">
                                                    <label class="control-label text-right ">@if(!empty($accinfo)){{$accinfo->accwhen}} @endif</label>
                                                </div>
                                        </div>
                                    </div>
                                <!--/span-->
                            </div>
							<div class="row">
								<div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label">How the Accident Happened :</label>
                                            <div class="col-md-6">
                                                <label class="control-label text-right ">@if(!empty($accinfo)){{$accinfo->how}} @endif</label>
											</div>
                                    </div>
                                </div>
								<div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label">Reason for Travelling  :</label>
                                            <div class="col-md-6">
                                                <label class="control-label text-right ">@if(!empty($accinfo)){{$accinfo->reasontravel}} @endif</label>
											</div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
							<div class="row">
								<div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label">Injury Description :</label>
                                            <div class="col-md-6">
                                                <label class="control-label text-right ">@if(!empty($accinfo)){{$accinfo->injurydesc}} @endif</label>
											</div>
                                    </div>
                                </div>
								<div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label">Is Accident Date a Working Day For The Insured Person:</label>
                                            <div class="col-md-2">
                                                <label class="control-label text-right "></label>
											</div>
                                    </div>
                                </div>
                            </div>
							<div class="row">   
								<div class="col-md-6"> 
                                <div class="form-group row">
                                    <label class="control-label">Are wages paid on the day of accident? :</label>
                                        <div class="col-md-6">
                                            <label class="control-label text-right "></label>
                                        </div>
                                </div>
                                <!--/span-->
                                </div>
								<div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="control-label">Start Working Time on Accident Day  :</label>
                                                <div class="col-md-6">
                                                    <label class="control-label text-right ">@if(!empty($accinfo)&&$accinfo->startworktime!='') {{substr($accinfo->startworktime,0,2)}}:{{substr($accinfo->startworktime,2,2)}}:{{substr($accinfo->startworktime,4,2)}} @endif</label>
                                                </div>
                                        </div>
                                    </div>
							</div>
							<div class="row">
								<div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label">Rest Periods are Allowed on The Day of The Accident :</label>
                                            <div class="col-md-2">
                                                <label class="control-label text-right ">@if(!empty($accinfo)&&$accinfo->restperiod!=''){{substr($accinfo->restperiod,0,2)}}:{{substr($accinfo->restperiod,2,2)}}:{{substr($accinfo->restperiod,4,2)}} @endif</label>
											</div>
                                    </div>
                                </div>
								<div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label">Ending Time of Work on The Accident Date:</label>
                                            <div class="col-md-2">
                                                <label class="control-label text-right ">@if(!empty($accinfo)&&$accinfo->endworktime!=''){{substr($accinfo->endworktime,0,2)}}:{{substr($accinfo->endworktime,2,2)}}:{{substr($accinfo->endworktime,4,2)}} @endif</label>
											</div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
							<div class="row">
								<div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="control-label">Name of Witness :</label>
                                                <div class="col-md-6">
                                                    <label class="control-label text-right ">@if(!empty($accinfo)){{$accinfo->witnessname}} @endif</label>
                                                </div>
                                        </div>
                                    </div>
								<div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label">Witness Phone No. :</label>
                                            <div class="col-md-6">
                                                <label class="control-label text-right ">@if(!empty($accinfo)){{$accinfo->witnesscontact}} @endif</label>
											</div>
                                    </div>
                                </div>
                            </div>
							<div class="row">
								<div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="control-label">Name and Address of Clinic Which Provides First Treatment:</label>
                                            <div class="col-md-6">
                                                <label class="control-label text-right ">@if(!empty($accinfo)){{$accinfo->clinicinfo}} @endif</label>
											</div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <h5 class="card-title">MC Details</h5>
                            <hr class="m-t-0 m-b-40">
                            <div class="row">
								<div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="control-label">Name and Address of Clinic of which Provides Treatment :</label>
                                            <div class="col-md-6">
                                                <label class="control-label text-right ">@if (!empty($mcdata)){{$mcdata[0]->clinicname}}@endif</label>
											</div>
                                    </div>
                                </div>
							</div>
							<div class="row">
								<div class="col-md-4">
                                    <div class="form-group row">
                                        <label class="control-label">Type Of HUS :</label>
                                            <div class="col-md-4">
                                                <label class="control-label text-right "></label>
											</div>
                                    </div>
                                </div>
							</div>
							<div class="row">
								<div class="col-md-4">
                                    <div class="form-group row">
										<label class="control-label">Medical Leave</label>
									</div>
							   </div>
							</div>
							<div class="row">
								<div class="col-md-4">
                                    <div class="form-group row">
                                        <label class="control-label">Start Date:</label>
                                            <div class="col-md-4">
                                                <label class="control-label text-right "></label>
											</div>
                                    </div>
                                </div>
								<div class="col-md-4">
                                    <div class="form-group row">
                                        <label class="control-label">End Date:</label>
                                            <div class="col-md-4">
                                                <label class="control-label text-right "></label>
											</div>
                                    </div>
                                </div>
								<div class="col-md-4">
                                    <div class="form-group row">
                                        <label class="control-label">Total Day(s):</label>
                                            <div class="col-md-4">
                                                <label class="control-label text-right "></label>
											</div>
                                    </div>
                                </div>
                            </div>
							<div class="row">
                                <div class="col-md-9">
								<label>Attended Work</label>
									<table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Start Date</th>
                                                <th>End Date</th>
                                                <th>Total Day(s)</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
								</div>
                            </div>
							<h5 class="card-title">Bank Information</h5>
                            <hr class="m-t-0 m-b-40">
                            <div class="row">
								<div class="col-md-4">
                                    <div class="form-group row">
                                        <label class="control-label">Payment Mode:</label>
                                            <div class="col-md-4">
                                                <label class="control-label text-right ">Cheque</label>
											</div>
                                    </div>
                                </div>
								<div class="col-md-4">
                                    <div class="form-group row">
                                        <label class="control-label">Reason :</label>
                                            <div class="col-md-4">
                                                <label class="control-label text-right "></label>
											</div>
                                    </div>
                                </div>
								<div class="col-md-4">
                                    <div class="form-group row">
                                        <label class="control-label"> :</label>
                                            <div class="col-md-4">
                                                <label class="control-label text-right "></label>
											</div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
							<h5 class="card-title">Upload Document</h5>
                            <hr class="m-t-0 m-b-40">
                            <div class="row">
								<div class="col-md-6">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Document</th>
                                                <th>View</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Form34</td>
                                                <td>.pdf</td>
                                            </tr>
											 <tr>
                                                <td>Copy of Insured Person's Identification Card ( both sides )Form34</td>
                                                <td>.pdf</td>
                                            </tr>
											 <tr>
                                                <td>Original Police Report </td>
                                                <td>.pdf</td>
                                            </tr>
											<tr>
                                                <td>Medical Report </td>
                                                <td>.pdf</td>
                                            </tr>
											<tr>
                                                <td>Others</td>
                                                <td>.pdf</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!--/span-->
                            </div>
							<h5 class="card-title">Confirmation</h5>
                            <hr class="m-t-0 m-b-40">
							<h5 class="box-title">Preferred Socso Office</h3>
                            <hr class="m-t-0 m-b-40">
                            <div class="row">
								<div class="col-md-4">
                                    <div class="form-group row">
                                        <label class="control-label">State:</label>
                                            <div class="col-md-4">
                                                <label class="control-label text-right "></label>
											</div>
                                    </div>
                                </div>
								<div class="col-md-4">
                                    <div class="form-group row">
                                        <label class="control-label">City :</label>
                                            <div class="col-md-4">
                                                <label class="control-label text-right "></label>
											</div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
							<h5 class="box-title">Confirmation Of Insured Person</h3>
                            <hr class="m-t-0 m-b-40">
                            <div class="row">
								<div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label">Section J Received :</label>
                                            <div class="col-md-4">
                                                <label class="control-label text-right "></label>
											</div>
                                    </div>
                                </div>
								<div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label">Complete Section J Received Date :</label>
                                            <div class="col-md-4">
                                                <label class="control-label text-right "></label>
											</div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
							<div class="row">
								<div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label">Notice Date :</label>
                                            <div class="col-md-4">
                                                <label class="control-label text-right "></label>
											</div>
                                    </div>
                                </div>
								<div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label">Acceptance stamp date:</label>
                                            <div class="col-md-4">
                                                <label class="control-label text-right "></label>
											</div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
							<div class="row">
								<div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label">Remarks :</label>
                                            <div class="col-md-4">
                                                <label class="control-label text-right "></label>
											</div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                        </div>
                        <div class="form-actions">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-offset-3 col-md-9">
                                            <button type="button" class="btn btn-danger"> <i class="fa fa-pencil"></i> Edit</button>
                                            <button type="submit" class="btn btn waves-effect waves-light btn-success" alt="alert" class="img-responsive model_img" id="sa-warning">Submit</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6"> </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
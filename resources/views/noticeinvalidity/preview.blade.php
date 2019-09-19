<!-- Row -->
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form class="form-horizontal" role="form">
                    <div class="form-body">
                        <h5 class="card-title">Insured Person Details</h5>
                        <hr class="m-t-0 m-b-40">
                        <div class="row" id="div_preview">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="control-label">Name :</label>
                                    <div class="col-md-6">
                                        <label class="control-label text-right">{{ $obprofile->name }}</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="control-label">Identification Type :</label>
                                    <div class="col-md-6">
                                        <label class="control-label text-right ">{{ $obprofile->idtype }}</label>
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
                                        <label class="control-label text-right ">{{ $obprofile->dob}}</label>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="control-label">Race :</label>
                                    <div class="col-md-6">
                                        @foreach($race as $id)
                                        @if (!empty($obprofile) && $obprofile->race == $id->refcode)
                                        <label class="control-label text-right ">{{$id->descen}}</label>
                                        @else
                                        @endif
                                        @endforeach
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
                        <h5 class="card-title">Wages Details</h5>
                        <hr class="m-t-0 m-b-40">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="control-label">Company Name:</label>
                                    <div class="col-md-6">
                                            @foreach ($contribution as $contr)
                                        <label class="control-label text-right">{{$contr->empname}}</label>
                                        @endforeach
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

                        <h5 class="card-title">Pension Details</h5>
                            <hr class="m-t-0 m-b-40">
                            <div class="row">
								<div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label">Description of Morbidity:</label>
                                            <div class="col-md-6">
                                                <label class="control-label text-right ">@if(!empty($ilatinfo)){{ $ilatinfo->morbiddesc }}@endif</label>
											</div>
                                    </div>
                                </div>
								<div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label">Year Morbidity is First Suffered:</label>
                                            <div class="col-md-6">
                                                <label class="control-label text-right ">{{$ilatinfo->morbidyear}}</label>
											</div>
                                    </div>
                                </div>
                            </div>
							<div class="row">
								<div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label">Is the insured person still engaged in employment? </label>
                                            <div class="col-md-6">
                                                <label class="control-label text-right ">{{$ilatinfo->inemployment}}</label>
											</div>
                                    </div>
                                </div>
								<div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="control-label">Date of Cessation of Employment ? </label>
                                                <div class="col-md-6">
                                                    <label class="control-label text-right ">{{$ilatinfo->endempdate}}</label>
                                                </div>
                                        </div>
                                    </div>
                                <!--/span-->
                            </div>
                            <div class="col-md-12">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                    <th>@lang('pensionDetails.attr.employer_name')</th>
                                                    <th>@lang('pensionDetails.attr.employer_address')</th>
                                                    <th>@lang('pensionDetails.attr.period')</th>
                                                    <th> @lang('pensionDetails.attr.occupation')</th>
                                                    <th>@lang('pensionDetails.attr.monthly_wages')</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
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
                                            <button type="button" class="btn btn-danger"> <i class="fa fa-pencil"></i>
                                                Edit</button>
                                            <button type="submit" class="btn btn waves-effect waves-light btn-success"
                                                alt="alert" class="img-responsive model_img"
                                                id="sa-warning">Submit</button>
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

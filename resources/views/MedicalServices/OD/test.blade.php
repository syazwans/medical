<!-- sample modal content -->
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" id="test" aria-labelledby="myLargeModalLabel"
    aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            
            <h5 class="card-title" id="test">Insured Person Info</h5>
            
                                <table id="div_preview" border="0" cellpadding="10px">
                                    <tr>
                                        <td class="control-label"><label>@lang('insuredPerson.attr.name')</label></td>
                                        <td>:</td>
                                        <td>
                                                {{-- @if(!empty($obprofile) && $obprofile->name !='')
                                                {{ $obprofile->name }}
                                                @elseif(!empty($obformassist) && $obformassist->name !='')
                                                {{ $obformassist->name }}
                                                @else
                                                @endif --}}
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="control-label"><label>@lang('insuredPerson.attr.id_type')</label></td>
                                        <td>:</td>
                                        <td class="control-label text-left" >
                                            
                                        </td>
                                    </tr>
                                    <tr>
                                            <td class="control-label"><label>@lang('insuredPerson.attr.id_no')</label></td>
                                            <td>:</td>
                                            <td class="control-label text-left">
                                                   
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td class="control-label"><label>@lang('insuredPerson.attr.dateOfBirth')</label></td>
                                            <td>:</td>
                                            <td class="control-label text-left" >
                                                    
                                            </td>  
                                    </tr>
                                    <tr>
                                            <td class="control-label"><label>@lang('insuredPerson.attr.race')</label></td>
                                            <td>:</td>
                                            <td class="control-label text-left" >
                                               
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td class="control-label"><label>@lang('insuredPerson.attr.gender')</label></td>
                                            <td>:</td>
                                        <td class="control-label text-left" > 
                                            
                                                    <label class="control-label text-right ">Female</label>
                                        
                                            
                                            </td>
                                    </tr>
                                    <tr>
                                            <td class="control-label"><label>@lang('insuredPerson.attr.occupation')</label></td>
                                            <td>:</td>
                                            <td class="control-label text-left">
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td class="control-label"><label>@lang('insuredPerson.attr.postal_address')</label></td>
                                            <td>:</td>
                                            <td class="control-label" >
                                                    <label class="control-label text-right "></label>
                                                    {{-- <br><label class="control-label text-right ">{{ $obprofile->add2 }} </label>
                                                    <br><label class="control-label text-right ">{{ $obprofile->add3 }}  </label> --}}
                                                        
                                            </td>
                                    </tr>
                                    <tr>
                                            <td class="control-label"><label>@lang('insuredPerson.attr.city')</label></td>
                                            <td>:</td>
                                            <td class="control-label text-left">
                                                    {{-- @if(!empty($obprofile)){{ $obprofile->city }} @endif --}}
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><label class="control-label text-right "></label></td>
                                            <td></td>
                                        
                                    </tr>
                                    <tr>
                                            <td class="control-label"><label>@lang('insuredPerson.attr.state')</label></td>
                                            <td>:</td>
                                            <td class="control-label text-left">
                                                {{-- @foreach($state as $s)
                                                @if(!empty($obprofile) && $obprofile->statecode == $s->refcode)
                                                {{$s->descen}}
                                                @else
                                                @endif
                                            @endforeach --}}
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><label class="control-label text-right "></label></td>
                                            
                                    </tr>
                                    <tr>    
                                        <td class="control-label"><label>@lang('insuredPerson.attr.postcode')</label></td>
                                        <td>:</td>
                                        <td class="control-label text-left" >
                                                {{-- @if(!empty($obprofile)){{ $obprofile->postcode }} @endif --}}
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="control-label"><label>@lang('insuredPerson.attr.pobox')</label></td>
                                        <td>:</td>
                                        <td class="control-label text-left">
                                            {{-- @if(!empty($obprofile)){{ $obprofile->pobox }} @endif --}}
                                        </td>
                                        
                                        
                                    </tr>
                                    <tr>    
                                            <td class="control-label"><label>@lang('insuredPerson.attr.lockedbag')</label></td>
                                            <td>:</td>
                                            <td class="control-label text-left" >
                                                   
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td class="control-label"><label>@lang('insuredPerson.attr.wdt')</label></td>
                                            <td>:</td>
                                            <td class="control-label text-left">
                                                    
                                            </td>
                                            
                                            
                                    </tr>
                                    <tr>    
                                            <td class="control-label"><label>@lang('insuredPerson.attr.mobileNo')</label></td>
                                            <td>:</td>
                                            <td class="control-label text-left" >
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td class="control-label"><label>@lang('insuredPerson.attr.telNo')</label></td>
                                            <td>:</td>
                                            <td class="control-label text-left" >
                                            </td>
                                            
                                    </tr>
                                    <tr>    
                                            <td class="control-label"><label>@lang('insuredPerson.attr.email')</label></td>
                                            <td>:</td>
                                            <td class="control-label text-left" >
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td class="control-label"><label>@lang('insuredPerson.attr.citizen')</label></td>
                                            <td>:</td>
                                            <td class="control-label text-left">
                                                    <label class="control-label text-right ">
                                                            {{-- @foreach($national as $N)
                                                            @if (!empty($obprofile) && $obprofile->nationality == $N->refcode)
                                                            {{$N->descen}}
                                                            @endif
                                                            @endforeach --}}
                                                        </label>
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            
                                    </tr>
                                </table><br/> 
                            <h5 class="card-title"><label>@lang('employerDetails.title')</label></h5>
                            <hr class="m-t-0 m-b-40">
                                <table id="div_preview" border="0" cellpadding="10px">
                                    <tr>
                                        <td class="control-label"><label>@lang('employerDetails.attr.employerCode')</label></td>
                                        <td>:</td>
                                        <td><label class="control-label text-right ">
                                                {{-- @if(!empty($emprecord) && $emprecord->empcode != '')
                                                {{$emprecord->empcode}}
                                                @elseif(!empty($employer) && $employer->empcode != '')
                                                {{$employer->empcode}}
                                                @else
                                                @endif --}}
                                        </label>
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="control-label"><label>@lang('employerDetails.attr.employerType')</label></td>
                                        <td>:</td>
                                        <td class="control-label text-left" >
                                                {{-- @foreach ($emptype as $et)
                                                @if (!empty($emprecord) && $emprecord->emptype == $et->refcode )
                                                    {{$et->descen}}
                                                @endif
                                                @endforeach --}}
                                        </td>
                                    </tr>
                                    <tr>
                                            <td class="control-label"><label>@lang('employerDetails.attr.employerName')</label></td>
                                            <td>:</td>
                                            <td class="control-label text-left">
                                                    {{-- @if(!empty($emprecord) && $emprecord->empname != '')
                                                    {{$emprecord->empname}}
                                                    @elseif(!empty($employer) && $employer->empname != '')
                                                    {{$employer->empname}}
                                                    @else
                                                    @endif --}}
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td class="control-label"><label>@lang('employerDetails.attr.postal_address')</label></td>
                                            <td>:</td>
                                            <td class="control-label" >
                                                <label class="control-label text-right ">
                                                        {{-- @if(!empty($emprecord) && $emprecord->add1 != '')
                                                        {{$emprecord->add1}}
                                                        @elseif(!empty($employer) && $employer->add1 != '')
                                                        {{$employer->add1}}
                                                        @else
                                                        @endif --}}
                                                </label>
                                            </td> 
                                    </tr>
                                    <tr>
                                            <td class="control-label"><label>@lang('employerDetails.attr.postcode')</label></td>
                                            <td>:</td>
                                            <td class="control-label text-left" >
                                                    {{-- @if(!empty($emprecord) && $emprecord->postcode != '')
                                                    {{$emprecord->postcode}}
                                                    @elseif(!empty($employer) && $employer->add3 != '')
                                                    {{$employer->postcode}}
                                                    @else
                                                    @endif --}}
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            {{-- <td> @if(!empty($emprecord) && $emprecord->add2 != '')
                                                    {{$emprecord->add1}}
                                                    @elseif(!empty($employer) && $employer->add2 != '')
                                                    {{$employer->add2}}
                                                    @else
                                                    @endif --}}
                                                </td>
                                            
                                    </tr>
                                    <tr>
                                            <td class="control-label"><label>@lang('employerDetails.attr.state')</label></td>
                                            <td>:</td>
                                            <td class="control-label text-left">
                                                    {{-- @foreach($state as $id)
                                                    @if (!empty($emprecord) && $emprecord->statecode == $id->refcode)
                                                    {{$id->descen}}
                                                    @endif
                                                    @endforeach --}}
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                    {{-- @if(!empty($emprecord) && $emprecord->add3 != '')
                                                    {{$emprecord->add3}}
                                                    @elseif(!empty($employer) && $employer->add3 != '')
                                                    {{$employer->add3}}
                                                    @else
                                                    @endif --}}
                                            </td>
                                            
                                    </tr>
                                    <tr>
                                            
                                            <td class="control-label"><label>@lang('employerDetails.attr.city')</label></td>
                                            <td>:</td>
                                            <td class="control-label text-left" >
                                                    {{-- @if(!empty($emprecord) && $emprecord->city != '')
                                                    {{$emprecord->city}}
                                                    @elseif(!empty($employer) && $employer->city != '')
                                                    {{$employer->city}}
                                                    @else
                                                    @endif --}}
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td class="control-label"><label>@lang('insuredPerson.attr.pobox')</label></td>
                                            <td>:</td>
                                            <td class="control-label text-left">
                                                    {{-- @if(!empty($emprecord) && $emprecord->pobox != '')
                                                {{$emprecord->pobox}} --}}
                                                    {{-- @elseif(!empty($employer) && $employer->pobox != '')
                                                    <input type="text" id="pobox" name="pobox" value="{{$employer->pobox}}" class="form-control"> --}}
                                                    {{-- @else
                                                    @endif --}}
                                                
                                            </td>
                                    </tr>
                                    <tr>
                                            <td class="control-label"><label>@lang('employerDetails.attr.telNo')</label></td>
                                            <td>:</td>
                                            <td class="control-label text-left">
                                                    {{-- @if(!empty($emprecord) && $emprecord->telno != '')
                                                    {{$emprecord->telno}}
                                                    @elseif(!empty($employer) && $employer->phoneno != '')
                                                    {{$employer->phoneno}}
                                                    @else
                                                    @endif --}}
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td class="control-label"><label>@lang('insuredPerson.attr.lockedbag')</label></td>
                                            <td>:</td>
                                            <td class="control-label text-LEFT" >
                                                    {{-- @if(!empty($emprecord) && $emprecord->lockedbag != '')
                                                {{$emprecord->lockedbag}} --}}
                                                    {{-- @elseif(!empty($employer) && $employer->lockedbag != '')
                                                    <input type="text" id="lockedbag" name="lockedbag" value="{{$employer->lockedbag}}" class="form-control"> --}}
                                                    {{-- @else
                                                    @endif --}}
                                            </td>
                                        
                                    </tr>
                                    <tr>
                                            <td class="control-label"><label>@lang('employerDetails.attr.email')</label></td>
                                            <td>:</td>
                                            <td class="control-label text-left">
                                                    {{-- @if(!empty($emprecord) && $emprecord->email != '')
                                                    {{$emprecord->email}}
                                                    @elseif(!empty($employer) && $employer->faxno != '')
                                                    {{$employer->email}}
                                                    @else
                                                    @endif --}}
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td class="control-label"><label>@lang('insuredPerson.attr.wdt')</label></td>
                                            <td>:</td>
                                            <td class="control-label text-left" >
                                                    {{-- @if(!empty($emprecord) && $emprecord->wdt != '')
                                                    {{$emprecord->wdt}} --}}
                                                    {{-- @elseif(!empty($employer) && $employer->wdt != '')
                                                    <input type="text" id="wdt" name="wdt" value="{{$employer->wdt}}" class="form-control"> --}}
                                                    {{-- @else
                                                    @endif --}}
                                            </td>
                                    </tr>
                                    <tr>            
                                            <td class="control-label"><label>@lang('employerDetails.attr.faxNo')</label></td>
                                            <td>:</td>
                                            <td class="control-label text-left" >
                                                <label class="control-label text-right ">
                                                        {{-- @if(!empty($emprecord) && $emprecord->faxno != '')
                                                        {{$emprecord->faxno}}
                                                        @elseif(!empty($employer) && $employer->faxno != '')
                                                        {{$employer->faxno}}
                                                        @else
                                                        @endif   --}}
                                                </label>
                                            </td>
                                            
                                    </tr>  
                                </table><br/> 
                            <h5 class="card-title">@lang('wages.title')</h5>
                            <hr class="m-t-0 m-b-40"> 
    
                            
                            {{-- @foreach ($contribution as $contr) --}}
                                <table border="0" cellpadding="10px">
                                    <tr>
                                        <td class="control-label"><label>@lang('Compony Name')</label></td>
                                        <td>:</td>
                                        <td class="control-label text-left"></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="control-label"><label>@lang('wages.attr.commencement_date')</label></td>
                                        <td>:</td>
                                        <td class="control-label text-left"></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="control-label"><label>@lang('wages.attr.end_date')</label></td>
                                        <td>:</td>
                                        <td class="control-label text-left"></td>
                                    </tr>
                                </table>
                                <div class="row p-t-20">
                                        <div class="col-12">
                                            <div class="card">
                                                <label>@lang('wages.attr.details_wages_od')</label>
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
                                                       
                                                            
                                                                {{-- @if (!empty($wagesinfo))
                                                                @foreach ($wagesinfo as $w)
                                                                    @if ($w->empcode == $contr->empcode)
                                                                    @foreach ($w->wagesinfo as $gaji)
                                                                        @if ($gaji->month == $mcmonth && $gaji->year == $mcyear)
                                                                        <td><input type="text" id="wages[{{$contrcnt}}][{{$cnt}}]" name="wages[{{$contrcnt}}][{{$cnt}}]" value="{{$gaji->wages}}" class="form-control maskdecimal" ></td>
                                                                        
                                                                        @endif
                                                                    @endforeach
                                                                    @endif
                                                                @endforeach
                                                                @endif
                                                                @if ($wagefound == false)
                                                                <td><input type="text" id="wages[{{$contrcnt}}][{{$cnt}}]" name="wages[{{$contrcnt}}][{{$cnt}}]" value="" class="form-control maskdecimal" ></td>
                                                                @endif
                                                                
                                                                
                                                                @if (!empty($contr))
                                                                @foreach ($contr->contribution as $c)
                                                                @if ($c->month == $mcmonth && $c->year == $mcyear)
                                                                <td><input type="text" id="contrpaid[{{$contrcnt}}][{{$cnt}}]" name="contrpaid[{{$contrcnt}}][{{$cnt}}]" value="{{$c->contribution}}" class="form-control maskdecimal" ></td>
                                                                
                                                                @endif
                                                                @endforeach
                                                                @endif
                                                                
                                                                @if ($contrfound == false)
                                                                <td><input type="text" id="contrpaid[{{$contrcnt}}][{{$cnt}}]" name="contrpaid[{{$contrcnt}}][{{$cnt}}]" value="" class="form-control maskdecimal" ></td>
                                                                @endif --}}
                                                                
                                                            {{-- </tr>
                                                             --}}
                                                        {{-- @endwhile --}}
                                                                                                        
                                                        <!--  
                                                          
                                                            -->
                                                        
                                                            
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                
                                {{-- @endforeach --}}
    
                                <h5 class="card-title">@lang('deathDetails.title')</h5>
                                <hr class="m-t-0 m-b-40">
                                <table border="0" cellpadding="5px">
                                    <tr >
                                        <td class="control-label"><label class="control-label">@lang('deathDetails.attr.date_death')</label></td>
                                        <td>:</td>
                                        <td class="control-label text-left"></td>
                                        <td class="control-label"><label class="control-label">@lang('deathDetails.attr.cause_death')</label></p></td>
                                        <td></td>
                                        <td class="control-label text-left"></td>                             
                                        <td class="control-label"><label class="control-label">@lang('deathDetails.attr.status')</label></td>
                                        <td>:</td>
                                        <td class="control-label text-left">
                                        </td>
                                    </tr>
                                </table>
    
    
                            
                            <h5 class="card-title">@lang('confirmation.bank_info')</h5>
                            <hr class="m-t-0 m-b-40">
                                <table border="0" cellpadding="5px">
                                    <tr >
    
                                        <td class="control-label"><label>@lang('confirmation.attr.payment')</label></td>
                                        <td>:</td>
                                        <td width="300">
                                                {{-- @foreach($optionpay as $opay)
                                                @if (!empty($bankinfo) && $bankinfo->paymode == $opay->refcode)
                                                    {{$opay->descen}}
                                                    <input type="hidden" id="payment_method" value="{{$opay->refcode}}">
                                                @else
                                                @endif
                                            @endforeach --}}
                                        </td>
                                    </tr>
                                    <tr>
                                            <td class="control-label have_acc_bank"><label>@lang('confirmation.attr.recipient_bank')</label></td>
                                            <td class="control-label have_acc_bank">:</td>
                                            <td class="control-label have_acc_bank" width="300">
                                                {{-- @foreach($optionreason as $or)
                                                    @if (!empty($bankinfo) && $bankinfo->reasonnoacc == $or->refcode)
                                                    {{$or->descen}}
                                                    @else
                                                    @endif
                                                @endforeach --}}
                                            </td>
                                            <td class="control-label have_acc_bank"></td>
                                            <td class="control-label reason_no_acc"><label>@lang('confirmation.attr.reason_no_bankAcc')</label></td>
                                            <td class="control-label reason_no_acc">:</td>
                                            <td class="control-label reason_no_acc">
                                                {{-- @foreach($optionreason as $or)
                                                    @if (!empty($bankinfo) && $bankinfo->reasonnoacc == $or->refcode)
                                                    {{$or->descen}}
                                                    @else
                                                    @endif
                                                    @endforeach --}}
                                            </td>
                                    </tr>
                                    <tr>
                                            <td class="control-label bank_location"><label>@lang('confirmation.attr.bank_location')</label></td>
                                            <td class="control-label bank_location">:</td>
                                            <td class="control-label bank_location">
                                                {{-- @foreach($optionbank as $ob)
                                                    @if (!empty($bankinfo) && $bankinfo->bankloc == $ob->refcode)
                                                    {{$ob->descen}}
                                                    <input type="hidden" id="preview_bank" value="{{$ob->refcode}}">
                                                    @else
                                                    @endif
                                                @endforeach --}}
                                            </td>
                                            <td class="control-label bank_location"></td>
                                            <td class="control-label status_bai"><label>@lang('confirmation.attr.bai_status')</label></td>
                                            <td class="control-label status_bai">:</td>
                                            <td class="control-label status_bai" width="300">
                                                {{-- @foreach($optionbai as $obai)
                                                    @if (!empty($bankinfo) && $bankinfo->baists == $obai->refcode)
                                                    {{$obai->descen}}
                                                    @else
                                                    @endif
                                                @endforeach --}}
                                            </td>
                                    </tr>
                                    <tr>
                                            <td class="control-label bank_status"><label>@lang('confirmation.attr.substatus_desc')</label></td>
                                            <td class="control-label bank_status">:</td>
                                            <td class="control-label bank_status">
                                                {{-- @if(!empty($bankinfo) && $bankinfo->substsdesc != '')
                                                {{$bankinfo->substsdesc}}
                                                    @else
                                                @endif --}}
                                            </td>
                                            <td class="control-label bank_status"></td>
                                            <td class="control-label bank_code"><label>@lang('confirmation.attr.bank_name')</label></td>
                                            <td class="control-label bank_code">:</td>
                                            <td class="control-label bank_code">
                                                {{-- @foreach($bankcode as $bc)
                                                    @if (!empty($bankinfo) && $bankinfo->bankloc == 'L' &&
                                                    $bankinfo->bankcode == $bc->refcode)
                                                    {{$bc->descen}}
                                                    @else
                                                    @endif
                                                @endforeach --}}
                                            </td>
                                    </tr>
                                    <tr>
                                            <td class="control-label bank_branch"><label>@lang('confirmation.attr.bank_branch')</label></td>
                                            <td class="control-label bank_branch">:</td>
                                            <td class="control-label bank_branch">
                                                {{-- @if (!empty($bankinfo) && $bankinfo->bankloc=='L')
                                                    {{$bankinfo->bankbr}}
                                                    @elseif (!empty($bankinfo) && $bankinfo->bankloc=='O')
                                                    @else
                                                @endif --}}
                                            </td>
                                            <td class="control-label bank_branch"></td>
                                            <td class="control-label bank_acc"><label>@lang('confirmation.attr.bank_accNo')</label></td>
                                            <td class="control-label bank_acc">:</td>
                                            <td class="control-label bank_acc">  
                                                {{-- @if (!empty($bankinfo) && $bankinfo->bankloc=='L')
                                                    {{$bankinfo->accno}}
                                                    @elseif (!empty($bankinfo) && $bankinfo->bankloc=='O')
                                                    @else
                                                @endif --}}
                                            </td>
                                    </tr>
                                    <tr>
                                            <td class="control-label bank_address"><label>@lang('confirmation.attr.bank_address')</label></td>
                                            <td class="control-label bank_address">:</td>
                                            <td class="control-label bank_address">
                                                {{-- @if (!empty($bankinfo) && $bankinfo->bankloc=='L' && $bankinfo->bankaddr)
                                                    {{$bankinfo->bankaddr}}
                                                    @elseif (!empty($bankinfo) && $bankinfo->bankloc=='O')
                                                    @else
                                                @endif --}}
                                            </td>
                                            <td class="control-label bank_address"></td>
                                            <td class="control-label bank_acc_type"><label>@lang('confirmation.attr.type_acc')</label></td>
                                            <td class="control-label bank_acc_type">:</td>
                                            <td class="control-label bank_acc_type">
                                                {{-- @foreach($accountype as $at)
                                                    @if (!empty($bankinfo) && $bankinfo->bankloc == 'L' && $bankinfo->acctype == $at->refcode)
                                                    {{$at->descen}}
                                                    @endif
                                                @endforeach --}}
                                            </td>
                                    </tr>
                                    <tr>
                                        <td class="control-label swiftcode"><label>@lang('confirmation.attr.swift_code')</label></td>
                                        <td class="control-label swiftcode">:</td>
                                        <td class="control-label swiftcode">
                                                {{-- @if (!empty($bankinfo) && $bankinfo->bankloc=='O')
                                                {{$bankinfo->swiftcode}}
                                                @elseif (!empty($bankinfo) && $bankinfo->bankloc=='L')
                                                @else
                                                @endif --}}
                                        </td>
                                        <td class="control-label swiftcode"></td>
                                        <td class="control-label bsbcode"><label>@lang('confirmation.attr.bsb_code')</label></td>
                                        <td class="control-label bsbcode">:</td>
                                        <td class="control-label bsbcode"> 
                                            {{-- @if (!empty($bankinfo) && $bankinfo->bankloc=='O')
                                            {{$bankinfo->bsbcode}}
                                            @elseif (!empty($bankinfo) && $bankinfo->bankloc=='L')
                                            @else
                                            @endif --}}
                                        </td>
                                    </tr>
                                </table><br>
    
                            <h5 class="card-title">Confirmation</h5>
                            <hr class="m-t-0 m-b-40">
                            <h5 class="box-title"><label>@lang('socso.title')</label></h5>
                            <hr class="m-t-0 m-b-40">
                                <table border="0" cellpadding="5px">
                                    <tr>
                                        <td class="control-label"><label>@lang('socso.attr.state')</label></td>
                                        <td>:</td>
                                        <td><label class="control-label text-right ">
                                                {{-- @foreach($state as $S)
                                                @if (!empty($confirmation) && $confirmation->statecode == $S->refcode)
                                                    {{$S->descen}}
                                                @endif
                                                @endforeach --}}
                                            </label>
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                            <td></td>
                                        <td class="control-label"><label>@lang('socso.attr.city')</label></td>
                                        <td>:</td>
                                        <td><label class="control-label text-right ">
                                                
                                            </label>
                                        </td>
                                        <td></td>
                                    </tr>
                                </table><br>
                            <h5 class="box-title"><label>@lang('Confirmation OD')</label></h5>
                            <hr class="m-t-0 m-b-40">
                                <table border="0" cellpadding="5px">
                                    {{-- @if (!empty($confirmation -> jsection)) 
                                    @foreach($confirmation -> jsection as $d) --}}
                                            <tr>
                                                <td class="control-label"><label>@lang('ID Type')</label></td>
                                                <td>:</td>
                                                <td><label class="control-label text-right ">
                                                       
                                                    </label>
                                                </td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td class="control-label"><label>@lang('ID No.')</label></td>
                                                <td>:</td>
                                                <td><label class="control-label text-right ">
                                                        
                                                    </label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="control-label"><label>@lang('confirmation.attr.sectionj_received')</label></td>
                                                <td>:</td>
                                                <td><label class="control-label text-right ">
    
                                                    </label>
                                                </td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td class="control-label"><label>@lang('confirmation.attr.complete_sectionj')</label></td>
                                                <td>:</td>
                                                <td><label class="control-label text-right ">
                                                    
                                                </label>
                                                </td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td class="control-label"><label>@lang('confirmation.attr.acceptance_stamp')</label></td>
                                                <td>:</td>
                                                <td><label class="control-label text-right ">
                                                    
                                                    </label>
                                            </td>
                                            </tr>
                                            {{-- @endforeach
                                            @endif --}}
                                </table>
                                
                     
            <div class="modal-footer">
                <button type="button" class="btn btn-success waves-effect text-left" data-dismiss="modal">Close</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

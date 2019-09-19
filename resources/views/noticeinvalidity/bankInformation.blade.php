<div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="/bankinformationilat">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
    
                        <div class="form-body">
                            <h5 class="card-title">@lang('confirmation.bank_info')</h5>
                            <hr>
                            <div class="row p-t-20">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('confirmation.attr.payment')</label>
                                        <select class="form-control" name='paymode' id='paymode'>
    
                                            @foreach($optionpay as $opay)
                                            @if (!empty($bankinfo) && $bankinfo->paymode == $opay->refcode)
                                            <option value="{{$opay->refcode}}" selected>{{$opay->descen}}</option>
                                            @else
                                            <option value="{{$opay->refcode}}">{{$opay->descen}}</option>
                                            @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div id="bank_reason" class="row p-t-20">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('confirmation.attr.reason')</label>
                                        @if (!empty($bankinfo) && $bankinfo->accexist=='N')
                                        <select class="form-control" name='reasonnoacc' id='reasonnoacc'>
                                            @else
                                            <select class="form-control" name='reasonnoacc' id='reasonnoacc'>
                                                @endif
    
    
                                                @foreach($optionreason as $or)
                                                @if (!empty($bankinfo) && $bankinfo->reasonnoacc == $or->refcode)
                                                <option value="{{$or->refcode}}" selected>{{$or->descen}}</option>
                                                @else
                                                <option value="{{$or->refcode}}">{{$or->descen}}</option>
                                                @endif
                                                @endforeach
                                            </select>
                                    </div>
                                </div>
                            </div>
                            <div id="bank_eft">
                                <div class="row p-t-20">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">@lang('confirmation.attr.recipient_bank')</label>
                                            <!--input type="text" name="sub_status_description" id="sub_status_description" class="form-control" value="@if(!empty($bankinfo)) {{$bankinfo->accexist}} @endif">-->
                                            <select class="form-control" name="accexist" id="accexist"
                                                onchange='accountexist()'>
                                                @if(!empty($bankinfo) && $bankinfo->accexist=='Y')
                                                <option value='Y' selected>Yes</option>
                                                <option value='N'>No</option>
                                                @elseif (!empty($bankinfo) && $bankinfo->accexist=='N')
                                                <option value='Y'>Yes</option>
                                                <option value='N' selected>No</option>
                                                @else
                                                <option value='Y'>Yes</option>
                                                <option value='N'>No</option>
                                                @endif
                                            </select>
    
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">@lang('confirmation.attr.bank_location')</label>
                                            <select class="form-control" id="selectBank" name='bankloc'
                                                onchange="myFunction()">
    
                                                @foreach($optionbank as $ob)
                                                @if (!empty($bankinfo) && $bankinfo->bankloc == $ob->refcode)
                                                <option value="{{$ob->refcode}}" selected>{{$ob->descen}}</option>
                                                @else
                                                <option value="{{$ob->refcode}}">{{$ob->descen}}</option>
                                                @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-t-20">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">@lang('confirmation.attr.bai_status')</label>
                                            <select class="form-control" name='baists' id='baists'>
                                                {{-- <option>@lang('confirmation.attr.choose_bai')
                                                </option> --}}
                                                @foreach($optionbai as $obai)
                                                @if (!empty($bankinfo) && $bankinfo->baists == $obai->refcode)
                                                <option value="{{$obai->refcode}}" selected>{{$obai->descen}}</option>
                                                @else
                                                <option value="{{$obai->refcode}}">{{$obai->descen}}</option>
                                                @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">@lang('confirmation.attr.substatus_desc')
                                            </label>
                                            @if(!empty($bankinfo) && $bankinfo->substsdesc != '')
                                            <input type="text" id="substsdesc" name="substsdesc" value="{{$bankinfo->substsdesc}}" class="form-control">
                                            @else
                                            <input type="text" id="substsdesc" name="substsdesc" value="" class="form-control">
                                            @endif
                                            {{-- <input type="text" name="substsdesc" id="substsdesc" class="form-control"
                                                value="@if(!empty($bankinfo)){{$bankinfo->substsdesc}} @endif"> --}}
                                        </div>
                                    </div>
    
                                </div>
                                <div id="local_bank">
                                    <h3 class="box-title m-t-40">@lang('confirmation.local_bank')</h3>
                                    <hr>
                                    <div class="row p-t-20">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label">@lang('confirmation.attr.bank_name')</label>
                                                @if (!empty($bankinfo) && $bankinfo->bankloc=='L')
                                                <select class="form-control selectLocalBank" name='bankcode' id='bankcode'>
                                                    @elseif (!empty($bankinfo) && $bankinfo->bankloc=='O')
                                                    <select class="form-control selectLocalBank" name='bankcode'
                                                        id='bankcode'>
                                                        @else
                                                        <select class="form-control selectLocalBank" name='bankcode'
                                                            id='bankcode'>
                                                            @endif
    
    
                                                            @foreach($bankcode as $bc)
                                                            @if (!empty($bankinfo) && $bankinfo->bankloc == 'L' &&
                                                            $bankinfo->bankcode == $bc->refcode)
                                                            <option value="{{$bc->refcode}}" selected>{{$bc->descen}}
                                                            </option>
                                                            @else
                                                            <option value="{{$bc->refcode}}">{{$bc->descen}}</option>
                                                            @endif
                                                            @endforeach
                                                        </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label">@lang('confirmation.attr.bank_branch')</label>
                                                @if (!empty($bankinfo) && $bankinfo->bankloc=='L')
                                                <input type="text" name="bankbr" id="bankbr"
                                                    class="form-control selectLocalBank" value="{{$bankinfo->bankbr}}">
                                                @elseif (!empty($bankinfo) && $bankinfo->bankloc=='O')
                                                <input type="text" name="bankbr" id="bankbr"
                                                    class="form-control selectLocalBank" value="">
                                                @else
                                                <input type="text" name="bankbr" id="bankbr"
                                                    class="form-control selectLocalBank" value="">
                                                @endif
    
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label">@lang('confirmation.attr.bank_accNo')</label>
                                                @if (!empty($bankinfo) && $bankinfo->bankloc=='L')
                                                <input type="text" name="accno" id="accno"
                                                    class="form-control selectLocalBank" value="{{$bankinfo->accno}}">
                                                @elseif (!empty($bankinfo) && $bankinfo->bankloc=='O')
                                                <input type="text" name="accno" id="accno"
                                                    class="form-control selectLocalBank" value="">
                                                @else
                                                <input type="text" name="accno" id="accno"
                                                    class="form-control selectLocalBank" value="">
                                                @endif
    
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row p-t-20">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label class="control-label">@lang('confirmation.attr.bank_address')</label>
                                                @if (!empty($bankinfo) && $bankinfo->bankloc=='L' && $bankinfo->bankaddr)
                                                <input type="text" name="bankaddr" id="bankaddr"
                                                    class="form-control selectLocalBank" value="{{$bankinfo->bankaddr}}">
                                                @elseif (!empty($bankinfo) && $bankinfo->bankloc=='O' && $bankinfo->bankaddr)
                                                <input type="text" name="bankaddr" id="bankaddr"
                                                    class="form-control selectLocalBank" value="{{$bankinfo->bankaddr}}">
                                                @else
                                                <input type="text" name="bankaddr" id="bankaddr"
                                                    class="form-control selectLocalBank" value="">
                                                @endif
    
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label">@lang('confirmation.attr.type_acc')</label>
                                                @if (!empty($bankinfo) && $bankinfo->bankloc=='L' && $bankinfo->acctype)
                                                <select class="form-control selectLocalBank" name='acctype'
                                                    id='acctype' value="{{$bankinfo->acctype}}">
                                                    @elseif (!empty($bankinfo) && $bankinfo->bankloc=='O' && $bankinfo->acctype)
                                                    <select class="form-control selectLocalBank" name='acctype'
                                                        id='acctype' value="{{$bankinfo->acctype}}">
                                                        @else
                                                        <select class="form-control selectLocalBank" name='acctype'
                                                            id='acctype'>
                                                            @endif
    
    
                                                            @foreach($accountype as $at)
                                                            @if (!empty($bankinfo) && $bankinfo->bankloc == 'L' &&
                                                            $bankinfo->acctype == $at->refcode)
                                                            <option value="{{$at->refcode}}" selected>{{$at->descen}}
                                                            </option>
                                                            @else
                                                            <option value="{{$at->refcode}}">{{$at->descen}}</option>
                                                            @endif
                                                            @endforeach
                                                        </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="oversea_bank">
                                <h3 class="box-title m-t-40" id="cardOverseas">@lang('confirmation.overseas_bank')</h3>
                                <hr>
                                <div class="row p-t-20">
                                    <div class="col-md-4">
                                        <div class="form-group">
    
                                            <label class="control-label">@lang('confirmation.attr.bank_name')</label>
                                            @if (!empty($bankinfo) && $bankinfo->bankloc=='O' && $bankinfo->ovbankname)
                                            <input type="text" name="ovbankname" id="ovbankname"
                                                class="form-control selectOverseasBank" value="{{$bankinfo->ovbankname}}">
                                            @elseif (!empty($bankinfo) && $bankinfo->bankloc=='L')
                                            <input type="text" name="ovbankname" id="ovbankname"
                                                class="form-control selectOverseasBank" value="">
                                            @else
                                            <input type="text" name="ovbankname" id="ovbankname"
                                                class="form-control selectOverseasBank" value="">
                                            @endif
    
                                            <!--select class="form-control selectOverseasBank" name='ovbankname' id='ovbankname'>
                                                {{-- <option>@lang('confirmation.attr.choose_bank')
                                                </option> --}}
                                                @foreach($overseasbank as $overb)
                                                <option value="{{$overb->refcode}}">{{$overb->descen}}</option>
                                                @endforeach
                                            </select-->
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">@lang('confirmation.attr.bank_branch')</label>
                                            @if (!empty($bankinfo) && $bankinfo->bankloc=='O' && $bankinfo->bankbr)
                                            <input type="text" name="bankbr" id="bankbr"
                                                class="form-control selectOverseasBank" value="{{$bankinfo->bankbr}}">
                                            @elseif (!empty($bankinfo) && $bankinfo->bankloc=='L' && $bankinfo->bankbr)
                                            <input type="text" name="bankbr" id="bankbr"
                                                class="form-control selectOverseasBank" value="{{$bankinfo->bankbr}}">
                                            @else
                                            <input type="text" name="bankbr" id="bankbr"
                                                class="form-control selectOverseasBank" value="">
                                            @endif
    
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group ">
                                            <label class="control-label">@lang('confirmation.attr.bank_accNo')</label>
                                            @if (!empty($bankinfo) && $bankinfo->bankloc=='O' && $bankinfo->accno)
                                            <input type="text" name="accno" id="accno"
                                                class="form-control selectOverseasBank" value="{{$bankinfo->accno}}">
                                            @elseif (!empty($bankinfo) && $bankinfo->bankloc=='L' && $bankinfo->accno)
                                            <input type="text" name="accno" id="accno"
                                                class="form-control selectOverseasBank" value="{{$bankinfo->accno}}">
                                            @else
                                            <input type="text" name="accno" id="accno"
                                                class="form-control selectOverseasBank" value="">
                                            @endif
    
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-t-20">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">@lang('confirmation.attr.swift_code')</label>
                                            @if (!empty($bankinfo) && $bankinfo->bankloc=='O')
                                            <input type="text" name="swiftcode" id="swiftcode"
                                                class="form-control selectOverseasBank" value="{{$bankinfo->swiftcode}}">
                                            @elseif (!empty($bankinfo) && $bankinfo->bankloc=='L')
                                            <input type="text" name="swiftcode" id="swiftcode"
                                                class="form-control selectOverseasBank" value="">
                                            @else
                                            <input type="text" name="swiftcode" id="swiftcode"
                                                class="form-control selectOverseasBank" value="">
                                            @endif
    
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">@lang('confirmation.attr.bsb_code')</label>
                                            @if (!empty($bankinfo) && $bankinfo->bankloc=='O')
                                            <input type="text" name="bsbcode" id="bsbcode"
                                                class="form-control selectOverseasBank" value="{{$bankinfo->bsbcode}}">
                                            @elseif (!empty($bankinfo) && $bankinfo->bankloc=='L')
                                            <input type="text" name="bsbcode" id="bsbcode"
                                                class="form-control selectOverseasBank" value="">
                                            @else
                                            <input type="text" name="bsbcode" id="bsbcode"
                                                class="form-control selectOverseasBank" value="">
                                            @endif
    
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-t-20">
    
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label class="control-label">@lang('confirmation.attr.bank_address')</label>
                                            @if (!empty($bankinfo) && $bankinfo->bankloc=='O')
                                            <input type="text" name="bankaddr" id="bankaddr"
                                                class="form-control selectOverseasBank" value="{{$bankinfo->bankaddr}}">
                                            @elseif (!empty($bankinfo) && $bankinfo->bankloc=='L')
                                            <input type="text" name="bankaddr" id="bankaddr"
                                                class="form-control selectOverseasBank" value="">
                                            @else
                                            <input type="text" name="bankaddr" id="bankaddr"
                                                class="form-control selectOverseasBank" value="">
                                            @endif
    
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">@lang('confirmation.attr.type_acc')</label>
                                            @if (!empty($bankinfo) && $bankinfo->bankloc=='O')
                                            <select class="form-control selectOverseasBank" name='acctype' id='acctype'>
                                                @elseif (!empty($bankinfo) && $bankinfo->bankloc=='L')
                                                <select class="form-control selectOverseasBank" name='acctype'
                                                    id='acctype'>
                                                    @else
                                                    <select class="form-control selectOverseasBank" name='acctype'
                                                        id='acctype'>
                                                        @endif
    
                                                        @foreach($overseasbanktype as $ovt)
                                                        @if (!empty($bankinfo) && $bankinfo->bankloc == 'O' &&
                                                        $bankinfo->acctype == $ovt->refcode)
                                                        <option value="{{$ovt->refcode}}" selected>{{$ovt->descen}}</option>
                                                        @else
                                                        <option value="{{$ovt->refcode}}">{{$ovt->descen}}</option>
                                                        @endif
                                                        @endforeach
                                                    </select>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
    
                            {{-- <h3 class="box-title m-t-40">@lang('confirmation.bankrupt')</h3> --}}
                            {{-- <hr> --}}
                            {{-- <div class="row p-t-20">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">@lang('confirmation.attr.date_letter')</label>
                                            <input type="date" name="data_generated_carian_insolvensi" id="data_generated_carian_insolvensi" placeholder="dd/mm/yyyy"
                                            class="form-control">
                                        </div>
                                    </div>
                                </div> --}}
                            {{-- <div class="row p-t-20">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">@lang('confirmation.attr.insolvensy_add')</label>
                                            <input type="text" name="insolvensi" id="insolvensi" class="form-control">
                                        </div>
                                    </div>
                                </div> --}}
                            {{-- <div class="row p-t-20">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">@lang('confirmation.attr.branch_insolvency')</label>
                                            <input type="text" name="branch" id="branch" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">@lang('confirmation.attr.cheque_no')</label>
                                            <input type="text" name="cheque_no" id="cheque_no" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">@lang('confirmation.attr.cheque_date')</label>
                                            <input type="date" name="cheque_date" id="cheque_date" class="form-control">
                                        </div>
                                    </div>
                                </div> --}}
                            {{-- <div class="row p-t-20">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">@lang('confirmation.attr.nett_amount')</label>
                                            <input type="text" name="net_amount" id="net_amount" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">@lang('confirmation.attr.reason_no_ic')</label>
                                            <select class="form-control">
                                                <option selected disabled hidden>@lang('confirmation.choose1')</option>
                                                <option value="yes">IMM13</option>
                                                <option value="no">Indigenous People</option>
                                                <option value="no">Others</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">Account Bank Number</label>
                                            <input type="text" name="acc_bankNo" id="acc_bankNo" class="form-control">
                                        </div>
                                    </div>
                                </div> --}}
                            {{--  <div class="row p-t-20">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Comments</label>
                                            <input type="text" name="comment" id="comment" class="form-control">
                                        </div>
                                    </div>
                                </div>--}}
    
                                <div class="row">
                                <div class="col-md-4">
                            <div class="form-actions">
                                <!--button type="button"
                                    class="btn btn waves-effect waves-light btn-secondary">@lang('confirmation.cancel')</button>
                                <button type="button"
                                    class="btn btn waves-effect waves-light btn-secondary">@lang('confirmation.clear')</button-->
                                <button type="submit" class="btn btn waves-effect waves-light btn-success"> 
                                    @lang('confirmation.save')</button>
                            </div>
                                    </div>
                                    </div>
    
                                <br/>
                            @if(Session::get('messagebank'))
                            <div class="card-footer">
    
                                <div class="alert alert-warning">
                                    {{Session::get('messagebank')}}
                                </div>
    
                            </div>
                            @elseif (!empty($messagebank))
                            <div class="card-footer">
    
                                <div class="alert alert-warning">
                                    {{$messagebank}}
                                </div>
    
                            </div>
                            @endif
                        </div>
                    </form>
    
                </div>
            </div>
        </div>
    </div>
    
    
    {{-- <script>
    
        $('select[name=paymode]').change(function () {
        if (this.value == '02') {
            $('#bank_reason').hide();
            $('#bank_eft').show();
        }
        else if (this.value == '01'){
            $('#bank_reason').show();
            $('#bank_eft').hide();
            $('#oversea_bank').hide();
            $('#local_bank').hide();
        }
        else{
            $('#bank_reason').hide();
            $('#bank_eft').hide();
            $('#oversea_bank').hide();
            $('#local_bank').hide();
        }
    });
    $('select[name=bankloc]').change(function () {
        if (this.value == 'L') {
            $('#local_bank').show();
            $('#oversea_bank').hide();
        }
        else{
            $('#local_bank').hide();
            $('#oversea_bank').show();
    
        }
    });
    
    </script> --}}
    
     {{--    // function accountexist() {
        //     var accexist = document.getElementById('accexist').value;
        //     if (accexist == 'Y') {
        //         document.getElementById('reasonnoacc').setAttribute('disabled', true);
        //     } else if (accexist == 'N') {
        //         document.getElementById('reasonnoacc').removeAttribute('disabled');
        //     }
        // }
    
        // function myFunction() {
        //     var objTo = document.getElementById('selectBank')
    
        //     if (objTo.value == 'L') {
        //         $('.selectOverseasBank').prop("disabled", true);
        //         $('.selectLocalBank').prop("disabled", false);
    
        //     } else if (objTo.value == 'O') {
        //         $('.selectLocalBank').prop("disabled", true);
        //         $('.selectOverseasBank').prop("disabled", false);
    
        //     }
    
        // }  --}}
    
    
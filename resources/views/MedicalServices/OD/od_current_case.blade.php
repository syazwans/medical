<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="#">
                    <div class="form-body">
                        <h4 class="card-title">@lang('Current Case Information')</h4>
                        <hr>
                        <div id="accordion1" role="tablist" aria-multiselectable="true">
                            <div class="card">
                                <div class="card-header" role="tab" id="heading1">
                                    <h5 class="mb-0">
                                        <a class="link" data-toggle="collapse" data-parent="#accordion1"
                                            href="#collapse1" aria-expanded="true" aria-controls="collapse1"><i
                                                class="fa fa-plus"></i>
                                            Current Case
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapse1" class="collapse show" role="tabpanel" aria-labelledby="heading1">
                                    <div class="card-body">
                                        <div class="form-body">
                                            <div class="row p-t-20">
                                                <div class="col-md-4">
                                                    <div class="form-group">

                                                        <label class="control-label">@lang('Scheme Ref. No.
                                                            :')</label>

                                                        <div class="input-group ">
                                                            <input type="text"
                                                                value="@isset($cCase->schemerefno) {{$cCase->schemerefno}} @endisset"
                                                                class="form-control" readonly>
                                                            <div class="input-group-append">
                                                                <span class="input-group-text"
                                                                    style="background-color: #d8e8e9;"><a
                                                                        class="get-code" data-toggle="modal"
                                                                        data-target="#test"
                                                                        data-whatever="@getbootstrap" href="#tt1"
                                                                        aria-expanded="true"><i class="fas fa-file-alt"
                                                                            title="Scheme Case
                                                                        " data-toggle="tooltip"></i></a></span>
                                                                @include('MedicalServices.noticeAccident.test')
                                                            </div>

                                                            &nbsp;<div class="input-group-append">
                                                                <span class="input-group-text"
                                                                    style="background-color: #d8e8e9;"><a
                                                                        class="get-code" data-toggle="modal"
                                                                        data-target="#opinion"
                                                                        data-whatever="@getbootstrap" href="#tt1"
                                                                        aria-expanded="true"><i class="fas fa-history"
                                                                            title="History Opinion"
                                                                            data-toggle="tooltip"></i></a></span>
                                                                @include('MedicalServices.noticeAccident.modal_historyOpinion')
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row p-t-20">
                                                <div class="col-md-4">
                                                    <div class="form-group">

                                                        <br>
                                                        <label class="control-label">@lang('Notice Date :')</label>
                                                        <input type="text"
                                                            value="@isset($cCase->dateadd) {{substr($cCase->dateadd,6,2)}}-{{substr($cCase->dateadd,4,2)}}-{{substr($cCase->dateadd,0,4)}}@endisset"
                                                            class="form-control" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-5">
                                                    <div class="form-group">

                                                        <br>
                                                        <label class="control-label">@lang('Notice Type :')</label>
                                                        <input type="text"
                                                            value="@isset($cCase->casetype) {{$cCase->casetype}} @endisset"
                                                            class="form-control" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label">@lang('Injury Description
                                                            :')</label>
                                                        <textarea type="text" rows="7" class="form-control"
                                                            readonly>@isset($cCase->injurydesc) {{$cCase->injurydesc}} @endisset</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">@lang('Potential HUK :')</label>
                                                        <input type="text"
                                                            value="@isset($cCase->hukpotential) {{$cCase->hukpotential}} @endisset"
                                                            class="form-control" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">@lang('Potential Sec. 96
                                                            :')</label>
                                                        <input type="text"
                                                            value="@isset($cCase->sek96potential) {{$cCase->sek96potential}} @endisset"
                                                            class="form-control" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 offset-6">
                                                    <a class="btn btn waves-effect waves-light btn-success a1"
                                                        data-toggle="collapse" data-target="#collapse1,#collapse2"
                                                        aria-expanded="true" aria-controls="collapse1">
                                                        Next
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card ">
                                <div class="card-header" role="tab" id="heading2">
                                    <h5 class="mb-0">
                                        <a class="collapsed link" data-toggle="collapse" data-parent="#accordion1"
                                            href="#collapse2" aria-expanded="false" aria-controls="collapse2"><i
                                                class="fa fa-plus"></i>
                                            RTW Information
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapse2" class="collapse " role="tabpanel" aria-labelledby="heading2">
                                    <div class="card-body">
                                        <div class="form-body">
                                            <div class="row p-t-20">
                                                <div class="col-md-4">
                                                    <div class="form-group">

                                                        <label class="control-label">@lang('RTW Ref. No.
                                                            :')</label>
                                                         <div class="input-group ">
                                                            <input type="text" value="@isset($cCase->schemerefno) {{$cCase->schemerefno}} @endisset"
                                                            class="form-control" readonly>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text"
                                                                style="background-color: #d8e8e9;"><a class="get-code"
                                                                    data-toggle="modal" data-target="#rtw"
                                                                    data-whatever="@getbootstrap" href="#tt1"
                                                                    aria-expanded="true"><i class="fas fa-file-alt"
                                                                    title="RTW Information" data-toggle="tooltip"></i></a></span>
                                                            @include('MedicalServices.noticeAccident.modal_rtw')
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row p-t-20">
                                                <div class="col-md-4">
                                                    <div class="form-group">

                                                        <br>
                                                        <label class="control-label">@lang('Report Date :')</label>
                                                        <input type="text" value="" class="form-control" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-5">
                                                    <div class="form-group">

                                                        <br>
                                                        <label class="control-label">@lang('Report From :')</label>
                                                        <input type="text" value="" class="form-control" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 offset-6">
                                                    <a class="btn btn waves-effect waves-light btn-success a1"
                                                        data-toggle="collapse" data-target="#collapse2,#collapse3"
                                                        aria-expanded="true" aria-controls="collapse2">
                                                        Next
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card ">
                                <div class="card-header" role="tab" id="heading3">
                                    <h5 class="mb-0">
                                        <a class="collapsed link" data-toggle="collapse" data-parent="#accordion1"
                                            href="#collapse3" aria-expanded="false" aria-controls="collapse3"><i
                                                class="fa fa-plus"></i>
                                            Medical Board Information
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapse3" class="collapse" role="tabpanel" aria-labelledby="heading3">
                                    <div class="card-body">
                                        <div class="form-body">
                                            <div class="row p-t-20">
                                                <div class="col-md-4">
                                                    <div class="form-group">

                                                        <label class="control-label">@lang('MB Ref. No. :')</label>
                                                        <div class="input-group ">
                                                            <input type="text" value="@isset($cCase->schemerefno) {{$cCase->schemerefno}} @endisset"
                                                            class="form-control" readonly>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text"
                                                                style="background-color: #d8e8e9;"><a class="get-code"
                                                                    data-toggle="modal" data-target="#medical"
                                                                    data-whatever="@getbootstrap" href="#tt1"
                                                                    aria-expanded="true"><i class="fas fa-file-alt"
                                                                    title="Medical Board Information" data-toggle="tooltip"></i></a></span>
                                                            @include('MedicalServices.noticeAccident.modal_medical')
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row p-t-20">
                                                <div class="col-md-4">
                                                    <div class="form-group">

                                                        <br>
                                                        <label class="control-label">@lang('Report Date :')</label>
                                                        <input type="text" value="" class="form-control" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-5">
                                                    <div class="form-group">

                                                        <br>
                                                        <label class="control-label">@lang('Hospital Name :')</label>
                                                        <input type="text" value="" class="form-control" readonly>
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
            </form>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="#">
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label class="control-label">Action :</label>
                                    <select class="form-control" name="moreinfo" id="moreinfo">
                                        <option value="PS" hidden selected readonly>Please Select</option>
                                        <option value="Y">Query</option>
                                        <option value="N">Recommendation</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <br>
                        <div class="row-pt-20 default" id="cardt">
                            <div class="tab-content tabcontent-border">
                                <div id="accordion1" role="tablist" aria-multiselectable="true">
                                    <div class="card">
                                        <h4 class="card-title">@lang('Recommendation')</h4>
                                        <br>

                                        <div class="col-md-6 offset-6">
                                            <a class="btn-success link a1" data-toggle="modal"
                                                data-whatever="@getbootstrap" data-toggle="collapse"
                                                data-target="#diagnosis" aria-expanded="true">
                                                Add Diagnosis
                                            </a>
                                            @include('MedicalServices.noticeAccident.diagnosis')
                                        </div>
                                        <div class="table-responsive m-t-40">
                                            <table id="myTable2" class="table table-bordered table-striped">
                                                <thead style="background-color:skyblue;">
                                                    <tr>
                                                        <th>No.</th>
                                                        <th>Diagnosis</th>
                                                        <th>Action</th>
                                                    </tr>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td style="display:none;"><input type="hidden" value="0"></td>
                                                        <td style="display:none;"></td>
                                                        <td style="display:none;"></td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                        </div>
                                        <div class="row p-t-20">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label">@lang('Justification :')</label>
                                                    <textarea type="text" rows="3" class="form-control"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label">@lang('Recommendation :')</label>
                                                    <textarea type="text" rows="3" class="form-control"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="control-label">Submit To :</label>
                                                <select class="form-control" name="subto" id="subto">
                                                    <option value="PS" hidden selected readonly>Please Select</option>
                                                    <option value="">Committee</option>
                                                    <option value="">Requestor</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <a class="btn btn waves-effect waves-light btn-success a1">Submit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h4 class="card-title" id="cardt2">@lang('Query Details')</h4>
                        <br>
                        <div class="card ">
                            <div id="collapseOne111" role="tabpanel" aria-labelledby="cardt2">
                                <div class="card-body">
                                    <div class="row p-t-20">
                                        
        
        
                                        <div class="col-md-6 offset-6">
                                                <a class="btn-success link a1" id="btn_query" data-toggle="modal"
                                                    data-whatever="@getbootstrap" aria-expanded="true">
                                                    Add Row 
                                                </a>
                                            </div>
                                            <div class="table-responsive m-t-40">
                                                <table id="myTable_query" class="table table-bordered table-striped">
                                                    <thead style="background-color:skyblue;">
                                                        <tr>
                                                            <th>No.</th>
                                                            <th>Query To</th>
                                                            <th>Request For Supporting Document</th>
                                                            <th>Remarks</th>
                                                            <th>Action</th>
                                                        </tr>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr id="clari1">
                                                            <td style="display:none;"><input type="hidden" value="1"></td>
                                                            <td>1</td>
                                                            <td>Presenting Complaint?</td>
                                                            <td><div class="input-group-append">
                                                                <span class="input-group-text" style="background-color: #d8e8e9;"><a
                                                                        class="get-code" data-toggle="modal"
                                                                        data-target="#modal_document" data-whatever="@getbootstrap"
                                                                        href="#tt1" aria-expanded="true"><i class="fas fa-file-alt"
                                                                            title="Request Document
                                                                                " data-toggle="tooltip"></i></a></span>
                                                                @include('MedicalServices.noticeAccident.modal_document')
                                                            </div></td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                    </tbody>
                                                    <tbody>
                                                            <tr id="clari2">
                                                                <td style="display:none;"><input type="hidden" value="2">>2</td>
                                                                <td>2</td>
                                                                <td>Past Medical History including</td>
                                                                <td><div class="input-group-append">
                                                                    <span class="input-group-text" style="background-color: #d8e8e9;"><a
                                                                            class="get-code" data-toggle="modal"
                                                                            data-target="#modal_document" data-whatever="@getbootstrap"
                                                                            href="#tt1" aria-expanded="true"><i class="fas fa-file-alt"
                                                                                title="Request Document
                                                                                    " data-toggle="tooltip"></i></a></span>
                                                                    @include('MedicalServices.noticeAccident.modal_document')
                                                                </div></td>
                                                                <td></td>
                                                                <td></td>
                                                            </tr>
                                                        </tbody>
                                                        <tbody>
                                                                <tr id="clari3">
                                                                    <td style="display:none;"><input type="hidden" value="3">>3</td>
                                                                    <td>2</td>
                                                                    <td>Physical examination findings on the first visit</td>
                                                                    <td><div class="input-group-append">
                                                                        <span class="input-group-text" style="background-color: #d8e8e9;"><a
                                                                                class="get-code" data-toggle="modal"
                                                                                data-target="#modal_document" data-whatever="@getbootstrap"
                                                                                href="#tt1" aria-expanded="true"><i class="fas fa-file-alt"
                                                                                    title="Request Document
                                                                                        " data-toggle="tooltip"></i></a></span>
                                                                        @include('MedicalServices.noticeAccident.modal_document')
                                                                    </div></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>

                                                            <tbody>
                                                                    <tr id="clari4">
                                                                        <td style="display:none;"><input type="hidden" value="4"></td>
                                                                        <td>4</td>
                                                                        <td>Diagnosis of the patient’s problem</td>
                                                                        <td><div class="input-group-append">
                                                                            <span class="input-group-text" style="background-color: #d8e8e9;"><a
                                                                                    class="get-code" data-toggle="modal"
                                                                                    data-target="#modal_document" data-whatever="@getbootstrap"
                                                                                    href="#tt1" aria-expanded="true"><i class="fas fa-file-alt"
                                                                                        title="Request Document
                                                                                            " data-toggle="tooltip"></i></a></span>
                                                                            @include('MedicalServices.noticeAccident.modal_document')
                                                                        </div></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </tbody>
                                                </table>
                                            </div>
                                        <br>
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
</div>
</div>


@include('MedicalServices.noticeAccident.modal_historyOpinion')
{{-- 
                                            <div class="tab-pane p-20" id="section" role="tabpanel">
                                                @include('MedicalServices.section') --}}

{{-- <script>
    var test = document.getElementById("moreinfo");
    $(document).ready(function () {
        alert('test');
        $('select[name=moreinfo]').change(function () {
            if (this.value == 'N') {
                $('#accordion1').show();
                $('#Sec').show();
                
            } else if (this.value == 'Y') {
                $('#accordion1').hide();
                $('#Sec').hide();
            }
        });
    });

</script> --}}

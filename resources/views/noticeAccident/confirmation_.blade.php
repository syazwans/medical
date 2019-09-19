    <div class="row" >
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                <form action="/accsave" method="POST">    
                    <h5 class="card-title">@lang('socso.title')</h5>
                <hr>
                <input type='hidden' name='caserefno' id='caserefno' value='{{$caserefno}}'>
                <div class="row p-t-20">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label> @lang('socso.attr.state')</label>
                            <select name="state1" id="state1" class="form-control custom-select" onchange="statechange()">
                                @foreach($state as $S)
                                     <option value="{{$S->refcode}}">{{$S->descen}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <!--/span-->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>@lang('socso.attr.city')</label>
                            <select name="brname" id="brname" class="form-control custom-select" >
                                {{-- <option value=""></option> --}}
                                    @foreach($branch as $B)
                                      <option value="{{$B->brcode}}">{{$B->brname}}</option>
                                      @endforeach
                            </select>
                        </div>
                     </div>
                          {{ csrf_field() }}
                          <!--/span-->
                </div>
                    <h5 class="card-title">Confirmation Of Insured Person</h5>
                    <hr>

                    
                        <div class="row p-t-20">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Section J Received</label>
                                    <select name="sectjrecv" id="sectjrecv" class="form-control">
                                        <option value="Y">Complete</option>
                                        <option value="N">Not Complete</option>
                                    </select>
                                    <!--input type="text" name="section_j_received" id="section_j_received"
                                        class="form-control"-->
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Complete Section J Received Date
                                    </label>
                                    <!--input type="date" name="section_j_received_date" id="section_j_received_date"
                                        class="form-control" placeholder="dd/mm/yyyy"-->
                                    <input type="date" name="sectjrecvdate" id="sectjrecvdate"
                                        class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Notice Date </label>
                                    <input type="text" name="notice_date" id="notice_date" class="form-control" value="{{date('d/m/Y')}}" readonly>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Acceptance stamp date
                                    </label>
                                    <input type="date" name="stampdate" id="stampdate"
                                        class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Remarks</label>
                                    <textarea name="remarks" id="remarks" class="form-control" rows="2"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                            <div class="form-actions">
                                <!--button type="button" class="btn waves-effect waves-light btn-secondary">Back</button-->
                                <button type="submit" name="action" value="Save" class="btn waves-effect waves-light btn-secondary">@lang('confirmation.save')</button>
                                @if (!empty ($confirmation))
                                <button type="submit" name="action" value="Submit" class="btn waves-effect waves-light btn-secondary btn_preview">@lang('confirmation.save')</button>
                                @endif
                                {{-- <button type="submit" name="action" value="Preview" class="btn waves-effect waves-light btn-secondary btn_preview">Preview</button> --}}
                                {{-- <button type="submit" class="btn btn waves-effect waves-light btn-success"> <i class="fa fa-check"></i>Submit</button> --}}
                            </div>
                            </div>
                        </div>
                        @if(Session::get('messageconf')) 
                        <div class="card-footer">

                            <div class="alert alert-warning">
                                {{Session::get('messageconf')}}
                            </div>

                        </div>
                        @elseif (!empty($messageconf))
                        <div class="card-footer">

                            <div class="alert alert-warning">
                                {{$messageconf}}
                            </div>

                        </div>
                        @endif  
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
            function statechange(){
                
                 var statecode = $("#state1").val();
                 //alert(statecode);
                 $('#brname').find('option').not(':first').remove();
                 if (statecode){  
        
                   $.ajax({ 
                     url: '/branch/'+statecode,
                     type: 'GET',
                     dataType: 'json',
                    success: function(data){
          //            console.log(data);
        
                     var len = 0;
                     if(data != null){
                        len = data.length;
                    }   
        
                    if(len > 0){
                        for(var i=0; i<len; i++){
        
                            var id = data[i].brcode;
                            var name = data[i].brname; 
                            
                            var option ="<option value='"+id+"'>"+name+"</option>";
        
                            $("#brname").append(option);
                        }
                    }   
                        
                    }
        
                   }); 
                }
            }
        </script>

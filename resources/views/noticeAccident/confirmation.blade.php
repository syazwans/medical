 <div class="row">
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
                            <select name="state1" id="state1" class="form-control" onchange="statechange()" required>
                                @foreach($state as $S)
                                @if (!empty($confirmation) && $confirmation->statecode == $S->refcode)
                                    <option value="{{$S->refcode}}" selected>{{$S->descen}}</option>
                                @else
                                     <option value="{{$S->refcode}}">{{$S->descen}}</option>
                                @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <!--/span-->
                    <div class="col-md-6">
                     <div class="form-group">
                        <label>@lang('socso.attr.city')</label>
                        <select name="brname" id="brname" class="form-control" onchange='fieldchange()' required>
                            <option value=""></option>
                                   @foreach($branch as $B)
                                   @if (!empty($confirmation) && $confirmation->preferredbranch == $B->brcode)
                                   <option value="{{$B->brcode}}" selected>{{$B->brname}}</option>
                                   @else
                                      <option value="{{$B->brcode}}">{{$B->brname}}</option>
                                   @endif
                                      @endforeach
                                  </select>
                              </div>
                          </div>
                          {{ csrf_field() }}
                          <!--/span-->
                      </div>
                      <!--/row-->
            {{-- <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>@lang('socso.attr.city_origin')</label>
                    <select class="form-control custom-select">
                        {{-- <option>@lang('confirmation.choose5')</option> --}}
                        {{-- <option>Kuala Lumpur</option>
                        <option>Petaling Jaya</option>
                        <option>Rawang</option>
                        <option>Klang</option>
                        <option>Kajang</option>
                        <option>Tanjung Karang</option>
                        <option>Ipoh</option>
                        <option>Taiping</option>
                        <option>Kuala Kangsar</option>
                        <option>Tapah</option>
                        <option>Teluk Intan</option>
                        <option>Manjung</option>
                        <option>Seberang Jaya</option>
                        <option>George Town</option>
                        <option>Alor Setar</option>
                        <option>Langkawi</option>
                        <option>Sungai Petani</option>
                        <option>Kulim</option>
                        <option>Kangar</option>
                        <option>Seremban</option>
                        <option>Kuala Pilah</option>
                        <option>Ayer Keroh</option>
                        <option>Johor Bahru</option>
                        <option>Muar</option>
                        <option>Batu Pahat</option>
                        <option>Kluang</option>
                        <option>Segamat</option>
                        <option>Kuantan</option>
                        <option>Temerloh</option>
                        <option>Bentong</option>
                        <option>Kuala Terengganu</option>
                        <option>Kemaman</option>
                        <option>Dungun</option>
                        <option>Kota Bharu</option>
                        <option>Kuala Krai</option>
                        <option>Labuan</option>
                        <option>Kota Kinabalu</option>
                        <option>Tawau</option>
                        <option>Lahad Datu</option>
                        <option>Keningau</option>
                        <option>Sandakan</option>
                        <option>Kota Marudu</option>
                        <option>Beaufort</option>
                        <option>Kuching</option>
                        <option>Miri</option>
                        <option>Sri Aman</option>
                        <option>Bintulu</option>
                        <option>Sibu</option>
                        <option>Kapit</option>
                        <option>Sarikei</option>
                        <option>Mukah</option>
                        <option>Limbang</option>
                        <option>Serian</option>
                    </select>
                    <small class="form-control-feedback"> If there is a change of office </small> </div>
                </div> --}}
                <!--/span-->
              {{--   <div class="col-md-6">
                   <div class="form-group">
                    <label>@lang('socso.attr.state_origin')</label>
                    <select class="form-control custom-select">
                       <option>@lang('confirmation.choose6')</option> --}}
                        {{-- <option>Wilayah Persekutuan Kuala Lumpur</option>
                        <option>Selangor</option>
                        <option>Perak</option>
                        <option>Pulau Pinang</option>
                        <option>Kedah</option>
                        <option>Perlis</option>
                        <option>Negeri Sembilan</option>
                        <option>Melaka</option>
                        <option>Johor</option>
                        <option>Pahang</option>
                        <option>Terengganu</option>
                        <option>Kelantan</option>
                        <option>Wilayah Persekutuan Labuan</option>
                        <option>Sabah</option>
                        <option>Sarawak</option>
                    </select>
                    <small class="form-control-feedback"> If there is a change of office </small> </div>
                </div>
            </div> --}}
                    
                    <h5 class="card-title">Confirmation Of Insured Person</h5>
                    <hr>

                    
                        <div class="row p-t-20">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Section J Received</label>
                                    <select name="jrecv" id="jrecv" class="form-control" onchange='fieldchange()' required>
                                        @if (!empty($confirmation) && $confirmation->jrecv == 'Y')
                                        <option value="Y" selected>Complete</option>
                                        <option value="N">Not Complete</option>
                                        @elseif (!empty($confirmation) && $confirmation->jrecv == 'N')
                                        <option value="Y">Complete</option>
                                        <option value="N" selected>Not Complete</option>
                                        @else
                                        <option value="Y">Complete</option>
                                        <option value="N">Not Complete</option>
                                        @endif
                                    </select>
                                    {{-- <input type="text" name="section_j_received" id="section_j_received"
                                        class="form-control"> --}}
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Complete Section J Received Date</label>
                                    @if(!empty($confirmation) && $confirmation->jrecvdate != '')
                                    <input type="date" id="jrecvdate" name="jrecvdate" onchange='fieldchange()' value="{{substr($confirmation->jrecvdate,0,4)}}-{{substr($confirmation->jrecvdate,4,2)}}-{{substr($confirmation->jrecvdate,6,2)}}" class="form-control" required>
                                    @else
                                    <input type="date" id="jrecvdate" name="jrecvdate" onchange='fieldchange()' value="" class="form-control" required>
                                    @endif
                                    
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Notice Date </label>
                                    <input type="date" name="notice_date" id="notice_date" class="form-control" value="{{date('Y-m-d')}}" readonly>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Acceptance stamp date</label>
                                    @if(!empty($confirmation) && $confirmation->stampdate != '')
                                    <input type="date" id="stampdate" name="stampdate" onchange='fieldchange()' value="{{substr($confirmation->stampdate,0,4)}}-{{substr($confirmation->stampdate,4,2)}}-{{substr($confirmation->stampdate,6,2)}}" class="form-control" required>
                                    @else
                                    <input type="date" id="stampdate" name="stampdate" onchange='fieldchange()' value="" class="form-control" required>
                                    @endif
                                    
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Remarks</label>
                                   @if(!empty($confirmation) && $confirmation->remarks != '')
                                    <textarea type="text" id="remarks" name="remarks" value="" onchange='fieldchange()' class="form-control">{{$confirmation->remarks}}</textarea>
                                    @else
                                    <textarea type="text" id="remarks" name="remarks" value="" onchange='fieldchange()' class="form-control"></textarea>
                                    @endif
                                   
                                </div>
                            </div>
                        </div>
                        
                        <!-- model -->
                      
                       
                        <div class="row">
                            <div class="col-md-12">
                            <div class="form-actions">
                                <!--button type="button" class="btn waves-effect waves-light btn-secondary">Back</button-->
                                <button type="submit" name="action" value="Save" class="btn btn-success">@lang('confirmation.save')</button>
                             
                               @if (!empty ($confirmation))
                            
                               <!--button type="submit" name="action" value="Preview" class="btn waves-effect waves-light btn-secondary">@lang('confirmation.preview')</button-->
                               <button type="button" name="action" value="Preview" class="btn btn-secondary" disabled>@lang('confirmation.preview')</button>
                                <button type="submit" name="action" value="Submit" class="btn btn-primary" id="sa-warning">@lang('confirmation.submit')</button>
                            
                                @else
                            
                                <button type="button" name="action" value="Preview" class="btn btn-secondary" disabled>@lang('confirmation.preview')</button>
                                <button type="submit" name="action" value="Submit" class="btn btn-primary" id="sa-warning" disabled>@lang('confirmation.submit')</button>
                            
                                @endif
                            </div>
                            </div>
                        </div>
                        <br/>
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

    <!-- row -->
<script>
    function fieldchange()
    {
        //alert('test');
        var submitbutton = document.getElementById('sa-warning');
        //alert(submitbutton);
        submitbutton.disabled = true;
        //alert('test');
    }
    
    function statechange(){
        
         var statecode = $("#state1").val();
         // alert(statecode);
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
        
        fieldchange();
    }
</script>



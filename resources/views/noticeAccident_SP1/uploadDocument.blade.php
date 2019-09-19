<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('claim.upload') }}" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-body">
                        <h3 class="card-title">Upload Document</h3>
                        <hr class="m-t-0 m-b-40">		

                        <div class="form-actions">
                            
                            <div class="row">
                            <div class="col-12">
                            
                                <div class="table-responsive">
                                    @if(count($errors)>0)
                                    <ul>
                                        @foreach($errors->all() as $error)

                                        <li class="alert alert danger">{{$error}}</li>

                                        @endforeach

                                    </ul>

                                    @endif
                                    <table class="table" id="table_upload_doc">
                                        <col width="50%">
                                        <col width="30%">
                                        <col width="20%">
                                        <thead>
                                            <tr>
                                                <th style="display:none;">Doctype </th>
                                                <th>Document Description</th>
                                                <th>Upload Document</th>
                                                <th>View</th>


                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $cnt = 0; ?>
                                            @foreach($doclist as $data)

                                            <tr>
                                                <!--td style="display:none;">{{$cnt}} </td-->
                                                <td style="display:none;"><input type="hidden"name="doctype[{{$cnt}}]" value="{{ $data -> doctype}}"> </td>
                                                <td><input type ="hidden" name="doccat[{{$cnt}}]" value="{{ $data -> doccat}}" >{{ $data -> docdescen}}</td>
                                                <td><input type="file" name="pdf[{{$cnt++}}]"  /></td>
                                                
                                                <?php $docfound = false; ?>
                                                @if (!empty($docinfo))
                                                @foreach ($docinfo as $d)
                                                @if ($d->doctype == $data->doctype)
                                                <td><a href='/viewdoc?docname={{$d->docname}}'>View</a></td>
                                                <?php $docfound = true; ?>
                                                
                                                @endif
                                                @endforeach
                                                @endif
                                                
                                                @if ($docfound ==  false)
                                                <td></td>
                                                @endif
                                             
                                            </tr>

                                            @endforeach
                                            
                                            
                                        </tbody>
                                      
                                        
                                    </table>
                                    <table>
                                        <tr>
                                                <td id="select_database" style="display:none;" >
                                                    <select id="idtype" class="form-control" name="idtype">
                                                            @foreach($doclist as $data)
                                                            <option value="{{ $data -> doctype}}">{{ $data -> docdescen}}
                                                            </option>
                                                            @endforeach
                                                    </select>
                                                </td> 

                                        </tr>

                                    </table>
                                </div>
                            
                                @if(Session::get('messagedoc')) 
                                <div class="card-footer">

                                    <div class="alert alert-warning">
                                        {{Session::get('messagedoc')}}
                                    </div>

                                </div>   
                                @endif

                                <div class="form-action">
                                    <button type="button" id="add_doc"
                                        class="btn btn waves-effect waves-light btn-secondary">Add Document</button>
                                    <!--button type="submit"
                                        class="btn btn-rounded btn-block btn-outline-success ">Upload All</button-->
                                    <button type="submit" class="btn btn waves-effect waves-light btn-success"> <i
                                        class="fa fa-check"></i>Upload All</button>
                                </div>

                            
                        </div>
                    </div>
                            
                        </div>
                    </div>
                </form>
            </div>
	</div>
    </div>
<!-- Row -->
</div>
@extends('layouts.app')

@section('maintitle', 'Tab Screen')

@section('desc', 'Form')

@section('head')
<link href="{{ asset("bower_components/footable/css/footable.standalone.min.css")}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="/testuploaddoc" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-body">
                        <h5 class="card-title">Upload Document</h5>
                        <hr class="m-t-0 m-b-40">		

                        <div class="form-actions">
                            
                            <div class="row">
                            <div class="col-12">
                                <label class="control-label">Case Reference No</label>
                                <input type='text' class='form-control' id='caserefno' name='caserefno'>
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
                                                <th>Upload </th>
                                                <th>Upload Scan</th>
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
                                                <td><button type='button' onclick='sendscan({{$cnt}})' class="btn btn-primary"></td>
                                                
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

<script>
function sendscan(idx)
{
    ajaxFunction();

       //ajaxReq.onreadystatechange = processRequest();
       
    var caseno = document.getElementById('caserefno').value;
    //alert(caseno);

    var url = "http://127.0.0.1:2100?caseno=" + caseno;

    ajaxReq.open('GET', url, true);

    ajaxReq.send(caseno);
       //alert(caseno);
}
</script>

<script>
    $(document).ready(function () {
        alert('test');
//     var no =7;
//     $('#yourtableid tr:last')
    var get_pdfno= $('#table_upload_doc tr:last td:last').find("input").val();
     var no= get_pdfno.substring(4,5);
      
     
    $("#add_doc").click(function () {    
        
         testing=document.getElementById('select_database').innerHTML;
         $("#idtype").prev('li').prop('id', 'idtype');
      //   var pdf="pdf["+no+"]";
   $('#table_upload_doc > tbody:last-child').append('<tr><td id="data_select">'+testing+'</td><td><input type="file" name="pdf_selection"></td></tr>');

//    $('#data_select').html(testing);
      no++
    });
});
</script>

 @endsection
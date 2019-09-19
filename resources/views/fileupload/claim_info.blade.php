@extends('layouts.app')

@section('maintitle', 'Tab Screen')

@section('desc', 'Form')

@section('head')
<link href="{{ asset("bower_components/footable/css/footable.standalone.min.css")}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('claim.upload') }}" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-body">
                        <h3 class="card-title">Upload Document Claim Information</h3>
                        <input type="hidden" name="current_date" value="{{ date('d-m-Y') }}">
                        <input type="hidden" name="current_time" value="{{ date('H:i') }}">
                        <hr>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="table-responsive">
                                    @if(count($errors)>0)
                                    <ul>
                                        @foreach($errors->all() as $error)

                                        <li class="alert alert danger">{{$error}}</li>

                                        @endforeach

                                    </ul>

                                    @endif
                                    <table class="table" id="table_upload_doc">
                                        <thead>
                                            <tr>
                                                <th style="display:none;">No</th>
                                                <th style="display:none;">Doctype </th>
                                                <th>Document Description</th>
                                                <th>Upload Document</th>


                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($doclist as $data)

                                            <tr>
                                                <td style="display:none;">{{$loop->iteration}} </td>
                                                <td style="display:none;"><input type="hidden"name="doctype[{{$loop->iteration}}]" value="{{ $data -> doctype}}"> </td>
                                                <td><input type ="hidden" name="docdescen[{{$loop->iteration}}]" value="{{ $data -> docdescen}}" >{{ $data -> docdescen}}</td>
                                                <td><input type="file" name="pdf[{{$loop->iteration}}]"  /></td>
                                             
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
                            
                                    

                                <div class="form-action">
                                    <button type="button" id="add_doc"
                                        class="btn btn-rounded btn-block btn-outline-success ">Add Document</button>
                                    <button type="submit"
                                        class="btn btn-rounded btn-block btn-outline-success ">Upload</button>
                                </div>

                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

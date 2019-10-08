@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="#">
                    <div class="form-body">
                        <div class="row p-t-20">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">@lang('Date :')</label>
                                    <input type="date" value="" class="form-control" >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label class="m-t-20">Time</label>
                                <div class="input-group clockpicker " data-placement="bottom" data-align="top" data-autoclose="true">
                                    <input type="text" class="form-control" value="">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">@lang('Place :')</label>
                                    <input type="text" id="id_diagnosis" value="" class="form-control" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('Meeting Ref. No. :')</label>
                                    <input type="text" id="id_diagnosis" value="" class="form-control" >
                                </div>
                            </div>
                            
                            <div class="col-md-11">
                                <div class="form-group">
                                    <label class="control-label">@lang('Chairperson :')</label>
                                    <input type="text" id="id_diagnosis" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-1">
                                <div class="form-group">
                                    <button type="button" id="add_chairperson" class="btn-success link a1" data-toggle="collapse" aria-expanded="true">Add</button>
                                </div>
                            </div>
                            <div class="col-md-11" id="chairperson2">
                                <div class="form-group">
                                    <input type="text" id="id_diagnosis" value="" class="form-control" >
                                </div>
                            </div>
                            
                            <div class="col-md-11 offset-11 p-t-20">
                                <div class="col-md-1">
                                    <div class="form-group">
                                        <button type="button" id="add_panel" class="btn-success link a1" data-toggle="collapse" aria-expanded="true">Add</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="table-responsive">
                                    <table id="table_panel" class="table table-bordered"
                                        data-toggle-column="first">
                                        <thead>
                                            <th>Committee Panel </th>
                                            <th>Name</th>
                                            <th>Action</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1 </td>
                                                <td><input type="text" id="id_diagnosis" value="" class="form-control" ></td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
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
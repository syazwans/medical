@extends('layouts.app')

@section('breadcrumb')
<div class="row page-titles">
    <div class="col-md-5">
        <h4 class="text-themecolor">@lang('index.nav.home')</h4>
    </div>
    <div class="col-md-7">
        <div class="d-flex justify-content-end align-items-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">@lang('index.nav.home')</li>
            </ol>
            {{-- <button type="button" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Create New</button> --}}
        </div>
    </div>
</div>
@endsection

@section('style')
<link href="{{asset('PERKESO_UI/assets/node_modules/datatables/media/css/dataTables.bootstrap4.css')}}" rel="stylesheet">
@endsection

@section('content')


<div class="row">
    <div class="col-12">
        <div class="card card-body">
            <!-- Row -->
            <h4 class="card-title">WORKBASKET</h4>
            <hr>
            <!-- Row -->
            <div class="row">
                <!-- Column -->
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body" style="background-color: #d8e8e9;">
                            <div class="d-flex flex-row">
                                <div class="round align-self-center round-info"><i class="ti-write"></i></div>
                                <div class="m-l-10 align-self-center">
                                    <h3 class="m-b-0">0</h3>
                                    <h5 class="text-muted m-b-0">New</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <!-- Column -->
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body" style="background-color: #d8e8e9;">
                            <div class="d-flex flex-row">
                                <div class="round align-self-center round-warning"><i class="ti-infinite"></i></div>
                                <div class="m-l-10 align-self-center">
                                    <h3 class="m-b-0">0</h3>
                                    <h5 class="text-muted m-b-0">In Progress</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <!-- Column -->
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body" style="background-color: #d8e8e9;">
                            <div class="d-flex flex-row">
                                <div class="round align-self-center round-success"><i class="ti-check-box"></i></div>
                                <div class="m-l-10 align-self-center">
                                    <h3 class="m-b-0">0</h3>
                                    <h5 class="text-muted m-b-0">Completed</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
            </div>

            {{-- <h6 class="card-subtitle">Data table example</h6> --}}


            <div class="row p-t-20">
                <div class="col-md-4">
                    {{-- <div class="form-group col"> --}}
                    <label for="example-text-input" class="col-form-label">Scheme Ref. No.</label>
                    <div class="input-group col-12">
                        <input class="form-control" type="text" id="case_no">
                        <div class="input-group-append">
                            <span class="input-group-text" style="background-color: #d8e8e9;;"><i
                                    class="ti-search"></i></span>
                        </div>
                    </div>
                    {{-- </div>  --}}
                </div>
                <div class="col-md-4">
                    {{-- <div class="form-group col"> --}}
                    <label for="example-text-input" class="col-form-label">No IC/Social Security Number</label>
                    <div class="input-group col-12">
                        <input class="form-control" type="number" id="ic_no">
                        <div class="input-group-append">
                            <span class="input-group-text" style="background-color: #d8e8e9;;"><i
                                    class="ti-search"></i></span>
                        </div>
                    </div>
                    {{-- </div> --}}
                </div>
                <div class="col-md-4">
                    {{-- <div class="form-group col"> --}}
                    <label for="example-text-input" class="col-form-label">Name</label>
                    <div class="input-group col-12">
                        <input class="form-control" type="text" id="name">
                        <div class="input-group-append">
                            <span class="input-group-text" style="background-color: #d8e8e9;"><i
                                    class="ti-search"></i></span>
                        </div>
                        {{-- </div> --}}
                    </div>
                </div>
                {{-- </div>--}}
            </div> <br><br>
            <div class="table-responsive m-t-40">
                <table id="myTable"  class="table table-bordered table-striped">
                    <thead style="background-color:skyblue;">
                        <tr>
                            <th>Select</th>
                            <th>Delete</th>
                            <th>Ref. No.</th>
                            <th>Name</th>
                            <th>Id No.</th>
                            <th>Scheme Ref. No.</th>
                            <th>Task Code</th>
                            <th>Branch Name</th>
                            <th>Notice Type</th>
                            <th>Aging</th>
                            <th>Date</th>
                            <th>Status</th>
                            
                            
                        </tr>
                        </tr>
                    </thead>
                    <tbody>


                       @foreach ($wbmedical as $wbms) 
                       @isset($wbms->msrefno)
                        
                        <tr>
                        <td><a id='selectdraft' href='/information?caserefno={{$wbms->caserefno}}&casetype={{$wbms->casetype}}&schemerefno={{$wbms->schemerefno}}'><i class="fas fa-edit"></i></a></td>
                            {{-- <td><a id='selectdraft' href='/information/{{ $wbms->caserefno }}'><i class="fas fa-edit"></i></a></td> --}}
                            <td><a id="deletedraft" onclick="return confirm('Are you sure want to delete the draft?');" ><i class="fas fa-trash-alt fa-sm"></i></a></td>
                            <td>{{ $wbms->msrefno }}</td>
                            <td>{{ $wbms->name }}</td>
                            <td>{{ $wbms->idno }}</td>
                            <td>{{ $wbms->schemerefno }}</td> 
                            <td>{{ $wbms->taskcode }}</td>
                            <td>{{ $wbms->brname }}</td>
                            <td>{{ $wbms->casetype }}</td>
                            <td><?php 
                                $medical = DateTime::createFromFormat('Ymd', ($wbms->date));
                                $currdate = new DateTime();
                                $difference = $currdate->diff($medical);
                                echo ($difference->d);
                                ?></td>
                            <td>{{substr($wbms->date,6,2)}}-{{substr($wbms->date,4,2)}}-{{substr($wbms->date,0,4)}}</td>
                            <td>{{ $wbms->status }}</td>
                            
                            
                        </tr>
                        @endisset
                         @endforeach 
                         {{-- <tr>
                                        <td>ddd</td>
                                        <td>{{ $wbms->name }}</td>
                        <td>{{ $wbms->idno }}</td>
                        <td>{{ $wbms->caserefno }}</td>
                        <td>{{ $wbms->taskcode }}</td>
                        <td>{{ $wbms->brname }}</td>
                        <td>{{ $wbms->casetype }}</td>
                        <td>{{ $wbms->status }}</td>
                        <td>{{substr($wbms->date,6,2)}}-{{substr($wbms->date,4,2)}}-{{substr($wbms->date,0,4)}}
                        </td>
                        </tr> --}}


                        {{-- @if(!empty($msrefno))
                        <td>{{ $wbmedical->msrefno }}</td>
                        <td>{{ $wbmedical->name }}</td>
                        <td>{{ $wbmedical->idno }}</td>
                        <td>{{ $wbmedical->caserefno }}</td>
                        <td>{{ $wbmedical->taskcode }}</td>
                        <td>{{ $wbmedical->brname }}</td>
                        <td>{{ $wbmedical->casetype }}</td>
                        <td>{{ $wbmedical->status }}</td>
                        <td>{{substr($wbmedical->date,6,2)}}-{{substr($wbmedical->date,4,2)}}-{{substr($wbmedical->date,0,4)}}
                        </td>
                        <td><a href="/information" id="status"><span class="label label-info">New</span></a></td>
                        @else

                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><a href="/information" id="status"><span class="label label-info">New</span></a></td>
                        @endif --}}
                    </tbody>
                    <tbody>


                       @foreach ($wbmedical as $wbms) 
                       @isset($wbms->msrefno)
                        
                        <tr>
                        <td><a id='selectdraft' href='/information?caserefno={{$wbms->caserefno}}&casetype={{$wbms->casetype}}&schemerefno={{$wbms->schemerefno}}'><i class="fas fa-edit"></i></a></td>
                            {{-- <td><a id='selectdraft' href='/information/{{ $wbms->caserefno }}'><i class="fas fa-edit"></i></a></td> --}}
                            <td><a id="deletedraft" onclick="return confirm('Are you sure want to delete the draft?');" ><i class="fas fa-trash-alt fa-sm"></i></a></td>
                            <td>{{ $wbms->msrefno }}</td>
                            <td>{{ $wbms->name }}</td>
                            <td>{{ $wbms->idno }}</td>
                            <td>{{ $wbms->schemerefno }}</td> 
                            <td>{{ $wbms->taskcode }}</td>
                            <td>{{ $wbms->brname }}</td>
                            <td>{{ $wbms->casetype }}</td>
                            <td><?php 
                                $medical = DateTime::createFromFormat('Ymd', ($wbms->date));
                                $currdate = new DateTime();
                                $difference = $currdate->diff($medical);
                                echo ($difference->d);
                                ?></td>
                            <td>{{substr($wbms->date,6,2)}}-{{substr($wbms->date,4,2)}}-{{substr($wbms->date,0,4)}}</td>
                            <td>{{ $wbms->status }}</td>
                            
                            
                        </tr>
                        @endisset
                         @endforeach 
                         {{-- <tr>
                                        <td>ddd</td>
                                        <td>{{ $wbms->name }}</td>
                        <td>{{ $wbms->idno }}</td>
                        <td>{{ $wbms->caserefno }}</td>
                        <td>{{ $wbms->taskcode }}</td>
                        <td>{{ $wbms->brname }}</td>
                        <td>{{ $wbms->casetype }}</td>
                        <td>{{ $wbms->status }}</td>
                        <td>{{substr($wbms->date,6,2)}}-{{substr($wbms->date,4,2)}}-{{substr($wbms->date,0,4)}}
                        </td>
                        </tr> --}}


                        {{-- @if(!empty($msrefno))
                        <td>{{ $wbmedical->msrefno }}</td>
                        <td>{{ $wbmedical->name }}</td>
                        <td>{{ $wbmedical->idno }}</td>
                        <td>{{ $wbmedical->caserefno }}</td>
                        <td>{{ $wbmedical->taskcode }}</td>
                        <td>{{ $wbmedical->brname }}</td>
                        <td>{{ $wbmedical->casetype }}</td>
                        <td>{{ $wbmedical->status }}</td>
                        <td>{{substr($wbmedical->date,6,2)}}-{{substr($wbmedical->date,4,2)}}-{{substr($wbmedical->date,0,4)}}
                        </td>
                        <td><a href="/information" id="status"><span class="label label-info">New</span></a></td>
                        @else

                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><a href="/information" id="status"><span class="label label-info">New</span></a></td>
                        @endif --}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<!-- This is data table -->
<script src="{{asset('PERKESO_UI/assets/node_modules/datatables/datatables.min.js')}}"></script>
<script>
    $(function () {
        $('#myTable').DataTable({
            // Sort desc for column date
            "order": [
                [0, 'desc'],
                [11, 'desc'],
            ],
            // Search not for text field
            // 'columnDefs': [{
            //     'searchable': false,
            //     'targets': [0, 4, 5, 6, 7, 8, 9, 10, 11]
            // }],
            // 10 rows per page
            "displayLength": 10
        });
        // $(function() {
        //     var table = $('#example').DataTable({
        //         "columnDefs": [{
        //             "visible": false,
        //             "targets": 2
        //         }],
        //         "order": [
        //             [2, 'asc']
        //         ],
        //         "displayLength": 25,
        //         "drawCallback": function(settings) {
        //             var api = this.api();
        //             var rows = api.rows({
        //                 page: 'current'
        //             }).nodes();
        //             var last = null;
        //             api.column(2, {
        //                 page: 'current'
        //             }).data().each(function(group, i) {
        //                 if (last !== group) {
        //                     $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
        //                     last = group;
        //                 }
        //             });
        //         }
        //     });
        //     // Order by the grouping
        //     $('#example tbody').on('click', 'tr.group', function() {
        //         var currentOrder = table.order()[0];
        //         if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
        //             table.order([2, 'desc']).draw();
        //         } else {
        //             table.order([2, 'asc']).draw();
        //         }
        //     });
        // });
    });

</script>
<script>
    // Searching using text field
    $(document).ready(function () {
        // DataTable
        var table = $('#myTable').DataTable();

        // Apply the search
        table.columns(5).every(function () {
            var that = this;

            $('#case_no').on('keyup change', function () {
                if (that.search() !== this.value) {
                    that
                        .search(this.value)
                        .draw();
                }
            });
        });
        // Apply the search
        table.columns(4).every(function () {
            var that = this;

            $('#ic_no').on('keyup change', function () {
                if (that.search() !== this.value) {
                    that
                        .search(this.value)
                        .draw();
                }
            });
        });
        // Apply the search
        table.columns(3).every(function () {
            var that = this;

            $('#name').on('keyup change', function () {
                if (that.search() !== this.value) {
                    that
                        .search(this.value)
                        .draw();
                }
            });
        });
    });

</script>
<script>

</script>
@endsection

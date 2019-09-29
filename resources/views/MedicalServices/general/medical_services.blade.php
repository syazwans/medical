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
                            <th>No.</th>
                            <th>Date</th>
                            <th>Aging</th>
                            <th>Module</th>
                            <th>Source</th>
                            <th>Reference No.</th>
                            <th>ID No.</th>
                            <th>Notice Type</th>
                            <th>Description</th>
                            <th>Task Status</th>
                            <th>Action</th>
                            
                            
                        </tr>
                        </tr>
                    </thead>
                    <tbody>
                        <td>1</td>
                        <td>29/8/2019</td>
                        <td>3</td>
                        <td>Medical Service</td>
                        <td>Medical Board</td>
                        <td>EI001/19</td>
                        <td>800920145344</td>
                        <td>Accident</td>
                        <td>Medical Opinion</td>
                        <td>New</td>
                    <td><a id='selectdraft' href="{{route ('accident')}}"><i class="fas fa-edit"></i></a></td>
                     </tbody>
                     <tbody>
                            <td>2</td>
                            <td>22/11/2020</td>
                            <td>4</td>
                            <td>Medical Service</td>
                            <td>Medical Board</td>
                            <td>EI001/19</td>
                            <td>800920145344</td>
                            <td>Invalidity</td>
                            <td>Medical Opinion</td>
                            <td>New</td>
                            <td><a id='selectdraft' href="{{route ('invadility')}}"><i class="fas fa-edit"></i></a></td>
                         </tbody>
                         <tbody>
                            <td>3</td>
                            <td>22/9/2020</td>
                            <td>2</td>
                            <td>Medical Service</td>
                            <td>Medical Board</td>
                            <td>EI001/19</td>
                            <td>800920145344</td>
                            <td>Occupational Disease</td>
                            <td>Medical Opinion</td>
                            <td>New</td>
                            <td><a id='selectdraft' href="{{route ('od')}}"><i class="fas fa-edit"></i></a></td>
                        </tbody>
                        <tbody>
                            <td>4</td>
                            <td>9/9/2020</td>
                            <td>4</td>
                            <td>Medical Service</td>
                            <td>Medical Board</td>
                            <td>EI001/19</td>
                            <td>800920145344</td>
                            <td>Accident</td>
                            <td>Medical Opinion</td>
                            <td>New</td>
                            <td><a id='selectdraft' href="/abppp"><i class="fas fa-edit"></i></a></td>
                        </tbody>
                        <tbody>
                            <td>5</td>
                            <td>21/9/2020</td>
                            <td>2</td>
                            <td>Medical Service</td>
                            <td>Medical Board</td>
                            <td>EI001/19</td>
                            <td>800920145344</td>
                            <td>Occupational Disease</td>
                            <td>Medical Investigation Internal</td>
                            <td>New</td>
                            <td><a id='selectdraft'href="{{route ('investigate_internal')}}"><i class="fas fa-edit"></i></a></td>
                        </tbody>
                        <tbody>
                            <td>6</td>
                            <td>11/2/2020</td>
                            <td>2</td>
                            <td>Medical Service</td>
                            <td>Medical Board</td>
                            <td>EI001/19</td>
                            <td>800920145344</td>
                            <td>Occupational Disease</td>
                            <td>Medical Investigation Internal</td>
                            <td>New</td>
                            <td><a id='selectdraft' href="{{route ('investigate_internal_abppp')}}"><i class="fas fa-edit"></i></a></td>
                        </tbody>
                        <tbody>
                            <td>7</td>
                            <td>1/6/2020</td>
                            <td>5</td>
                            <td>Medical Service</td>
                            <td>Medical Board</td>
                            <td>EI001/19</td>
                            <td>800920145344</td>
                            <td>Occupational Disease</td>
                            <td>Medical Investigation Special Report</td>
                            <td>New</td>
                            <td><a id='selectdraft' href="{{route ('special_report')}}"><i class="fas fa-edit"></i></a></td>
                        </tbody>
                        <tbody>
                            <td>8</td>
                            <td>9/6/2020</td>
                            <td>4</td>
                            <td>Medical Service</td>
                            <td>Medical Board</td>
                            <td>EI001/19</td>
                            <td>800920145344</td>
                            <td>Occupational Disease</td>
                            <td>Medical Investigation Special Report</td>
                            <td>New</td>
                            <td><a id='selectdraft' href="{{route ('special_report_aobppp')}}"><i class="fas fa-edit"></i></a></td>
                        </tbody>
                        <tbody>
                            <td>9</td>
                            <td>2/6/2020</td>
                            <td>4</td>
                            <td>Medical Service</td>
                            <td>Medical Board</td>
                            <td>EI001/19</td>
                            <td>800920145344</td>
                            <td>Occupational Disease</td>
                            <td>Medical Investigation Clarification</td>
                            <td>New</td>
                            <td><a id='selectdraft' href=''><i class="fas fa-edit"></i></a></td>
                        </tbody>
                        <tbody>
                            <td>10</td>
                            <td>9/3/2020</td>
                            <td>4</td>
                            <td>Medical Service</td>
                            <td>Medical Board</td>
                            <td>EI001/19</td>
                            <td>800920145344</td>
                            <td>Occupational Disease</td>
                            <td>Medical Investigation Clarification</td>
                            <td>New</td>
                            <td><a id='selectdraft' href=''><i class="fas fa-edit"></i></a></td>
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

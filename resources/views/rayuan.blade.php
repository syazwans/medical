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
<link href="PERKESO_UI/assets/node_modules/datatables/media/css/dataTables.bootstrap4.css" rel="stylesheet">
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
                                    <h3 class="m-b-0">3</h3>
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
                                    <h3 class="m-b-0">4</h3>
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
                                    <h3 class="m-b-0">5</h3>
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
                    <label for="example-text-input" class="col-form-label">IC NO</label>
                    <div class="input-group col-12">
                        <input class="form-control" type="number" id="ic_no">
                        <div class="input-group-append">
                            <span class="input-group-text" style="background-color: #d8e8e9;;"><i
                                    class="ti-search"></i></span>
                        </div>
                    </div>
                    {{-- </div>  --}}
                </div>
                <div class="col-md-4">
                    {{-- <div class="form-group col"> --}}
                    <label for="example-text-input" class="col-form-label">OB NAME</label>
                    <div class="input-group col-12">
                        <input class="form-control" type="text" id="ob_name">
                        <div class="input-group-append">
                            <span class="input-group-text" style="background-color: #d8e8e9;;"><i
                                    class="ti-search"></i></span>
                        </div>
                    </div>
                    {{-- </div> --}}
                </div>
                <div class="col-md-4">
                    {{-- <div class="form-group col"> --}}
                    <label for="example-text-input" class="col-form-label">CASE ID</label>
                    <div class="input-group col-12">
                        <input class="form-control" type="text" id="case_id">
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
                <table id="myTable" class="table table-bordered table-striped">
                    <thead style="background-color:skyblue;">
                        <tr>
                            <th>ASSIGN DATE</th>
                            <th>MAB Ref No</th>
                            <th>MB Ref No</th>
                            <th>NAME</th>
                            <th>KPPN/KSPA No</th>
                            <th>Scheme Ref</th>
                            <th>TYPE OF NOTICE</th>
                            {{-- <th>TAGGING</th> --}}
                            <th>AGING</th>
                            <th>SOURCE</th>
                            <th>STATUS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>2019/05/01</td>
                            <td>34</td>
                            <td>620101036785</td>
                            <td>Nurhidayat Ramli</td>
                            <td>34</td>
                            <td></td>
                            <td>ILAT</td>
                            {{-- <td>NONE</td> --}}
                            <td>1</td>
                            <td></td>
                            <td><a href="/information" id="status"><span class="label label-info">New</span></a></td>
                        </tr>
                        <tr>
                            <td>2019/05/01</td>
                            <td>35</td>
                            <td>700909048907</td>
                            <td>Ikmal Syah</td>
                            <td>35</td>
                            <td></td>
                            <td>OD</td>
                            {{-- <td>NONE</td> --}}
                            <td>1</td>
                            <td></td>
                            <td><a href="/information" id="status"><span class="label label-warning">In
                                        Progress</span></a></td>
                        </tr>
                        <tr>
                            <td>2019/05/01</td>
                            <td>36</td>
                            <td>700909048907</td>
                            <td>Wan Syah</td>
                            <td>36</td>
                            <td></td>
                            <td>HUK</td>
                            {{-- <td>NONE</td> --}}
                            <td>57</td>
                            <td></td>
                            <td><a href="/information" id="status"><span
                                        class="label label-success">Completed</span></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<!-- This is data table -->
<script src="PERKESO_UI/assets/node_modules/datatables/datatables.min.js"></script>
<script>
    $(function () {
        $('#myTable').DataTable({
            // Sort desc for column date
            "order": [
                [0, 'desc'],
                [11, 'desc'],
            ],
            // Search not for text field
            'columnDefs': [{
                'searchable': false,
                'targets': [0, 4, 5, 6, 7, 8, 9, 10, 11]
            }],
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
        table.columns(2).every(function () {
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
        table.columns(1).every(function () {
            var that = this;

            $('#case_id').on('keyup change', function () {
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

            $('#ob_name').on('keyup change', function () {
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

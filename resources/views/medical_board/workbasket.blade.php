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
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body m-10">
                <div class="form-body">
                    <h4 class="card-title">@lang('medical_board/workbasket.workbasket')</h4>
                    <hr>
                    <div class="row p-t-20">
                        <!-- Column -->
                        <div class="col-lg-4 col-md-6">
                            <div class="card">
                                <div class="card-body" style="background-color: #d8e8e9;">
                                    <div class="d-flex flex-row">
                                        <div class="round align-self-center round-info"><i class="ti-write"></i></div>
                                        <div class="m-l-10 align-self-center">
                                            <h3 class="m-b-0">3</h3>
                                            <h5 class="text-muted m-b-0">@lang('medical_board/workbasket.attr.new')</h5>
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
                                            <h5 class="text-muted m-b-0">@lang('medical_board/workbasket.attr.in_progress')</h5>
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
                                            <h5 class="text-muted m-b-0">@lang('medical_board/workbasket.attr.completed')</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                    </div><br><br>
                    <div class="row p-t-20">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">@lang('medical_board/workbasket.attr.ic_no')</label>
                                {{-- <div class="controls"> --}}
                                    <input type="number" name="ic_no" id="ic_no" class="form-control">
                                {{-- </div> --}}
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">@lang('medical_board/workbasket.attr.ob_name')</label>
                                {{-- <div class="controls"> --}}
                                    <input type="text" name="ob_name" id="ob_name" class="form-control">
                                {{-- </div> --}}
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">@lang('medical_board/workbasket.attr.case_id')</label>
                                {{-- <div class="controls"> --}}
                                    <input type="text" name="case_id" id="case_id" class="form-control">
                                {{-- </div> --}}
                            </div>
                        </div>
                    </div>
                    <hr>
                    <br>
                    <div class="table-responsive">
                        <table id="workbasket_table" class="table table-bordered table-striped">
                            <thead style="background-color:skyblue;">
                                <tr>
                                    <th>@lang('medical_board/workbasket.attr.date')</th>
                                    <th>@lang('medical_board/workbasket.attr.case_id')</th>
                                    <th>@lang('medical_board/workbasket.attr.ob_name')</th>
                                    <th>@lang('medical_board/workbasket.attr.ic_no')</th>
                                    <th>@lang('medical_board/workbasket.attr.case_type')</th>
                                    <th>@lang('medical_board/workbasket.attr.type_of_notice')</th>
                                    <th>@lang('medical_board/workbasket.attr.aging')</th>
                                    <th>@lang('medical_board/workbasket.attr.source')</th>
                                    <th>@lang('medical_board/workbasket.attr.status')</th>
                                </tr>
                            </thead>
                            <tbody id="tbody">
                                @if(!empty($workbasket))
                                    @foreach($workbasket as $wb)
                                        @isset($wb->date_assign)
                                            <tr>
                                                <td>{{$wb->date_assign}}</td>
                                                <td>{{$wb->caserefno}}</td>
                                                <td>{{$wb->name}}</td>
                                                <td>{{$wb->idno}}</td>
                                                <td>{{$wb->casetyp}}</td>
                                                <td></td>
                                                <td>
                                                @php
                                                   // $currentDay = date('Ymd');
                                                   // $aging = $currentDay - $wb->date_assign2; 
                                                   // echo ($aging)
                                                   $wbrtwdate = DateTime::createFromFormat('Ymd', ($wb->date_assign2));
                                                    $currdate = new DateTime();
                                                    $difference = $currdate->diff($wbrtwdate);
                                                    echo ($difference->d);
                                                @endphp
                                                </td>
                                                <td></td>
                                                <td><a href="./information/{{$wb->caserefno}}" id="status" {{-- onclick="openInNewTab('./information/{{$wb->caserefno}}');" --}} onclick="changeStatus('{{$wb->caserefno}}','{{$wb->status}}')">
                                                    <span class="label {{-- label-info --}}" 
                                                    style="background-color: {{$wb->colorcode}};">
                                                    {{$wb->status}}</span></a>
                                                </td>
                                            </tr>
                                         @endisset
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
           
@endsection

@section('script')
<!-- This is data table -->
<script src="{{asset('PERKESO_UI/assets/node_modules/datatables/datatables.min.js')}}"></script>
<!-- start - This is for export functionality only -->
<script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>
<!-- end - This is for export functionality only -->

<script>

    $(function() {

        jQuery.extend( jQuery.fn.dataTableExt.oSort, {
            "date-uk-pre": function ( a ) {
                if (a == null || a == "") {
                    return 0;
                }
                var ukDatea = a.split('/');
                return (ukDatea[2] + ukDatea[1] + ukDatea[0]) * 1;
            },
         
            "date-uk-asc": function ( a, b ) {
                return ((a < b) ? -1 : ((a > b) ? 1 : 0));
            },
         
            "date-uk-desc": function ( a, b ) {
                return ((a < b) ? 1 : ((a > b) ? -1 : 0));
            }
        });

        $('#workbasket_table').DataTable({
            // Sort desc for column date
            // "order": [
            //     [0, 'asc'],
            // ],
            //Search not for text field
            'columnDefs': [{
                // 'searchable': false,
                // 'targets': [0],
                // 'orderable': false,
                // 'targets': [3],
                type: 'date-uk', 
                targets: 0,
            }],
            // 10 rows per page
            "displayLength": 10,
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print',
            ]
        });

        $('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass('btn btn-primary mr-1');

    });

    // function openInNewTab(url) {
    //   var win = window.open(url, '_blank');
    //   win.focus();
    // }

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
// });

</script>
<script>

    // Searching using text field
    $(document).ready(function () {
        // DataTable
        var table = $('#workbasket_table').DataTable();

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

    function changeStatus(caserefno, status){
        
        $.ajax({
            type: "POST",
            url: "/takwim",
            dataType: "json",
            data: {year: event.year, venue: event.venue, session: event.session, name: event.name, mb_category: event.mb_category, doc_speciality: event.doc_speciality, quota: event.quota, remarks: event.remarks, date_takwim: event.date_takwim, hospital_id: event.hospital_id, statecode: event.statecode},
            success:function(data){
                // $('#message').append('<div class="alert alert-success alert-rounded">'+data.success+'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span> </button></div>');
                alert(data.success);
           }
        });
    }

</script>

@endsection

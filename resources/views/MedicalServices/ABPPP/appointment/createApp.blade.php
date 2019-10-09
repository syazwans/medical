<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="#">
                    <div class="form-body">
                        <h4 class="card-title">@lang('Create Appointment')</h4>
                            <div class="modal-body">
                                <div class="card-body">
                                    <div class="row p-t-20">
                                        <div class="col-md-6 offset-6">
                                        {{-- <a  href="/blank"class="btn-success link a1" target="blank">
                                                Create
                                            </a> --}}
                                            <a class="btn-success link a1" data-toggle="modal"
                                                data-whatever="@getbootstrap" data-toggle="collapse"
                                                data-target="#appointment" aria-expanded="true">
                                                Create
                                            </a>
                                            @include('MedicalServices.ABPPP.appointment.modalCreateapp')
                                            
                                        </div>
                                        <div class="col-12">
                                        <br>
                                        <div class="table-responsive">
                                            <table id="myTable_create" class="table table-bordered"
                                                data-toggle-column="first">
                                                <thead>
                                                    <tr>

                                                        <th>Meeting Ref. No.</th>
                                                        <th>Date</th>
                                                        <th>Time</th>
                                                        <th>No. Of Case</th>
                                                        <th>Status</th>
                                                        <th>Action</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                        <tr>
                                                            <td style="display:none;"><input type="hidden" value="0"></td>
                                                        </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

    

@section('script')
<script>

    // $(document).ready(function() {
      
    //     $('#chairperson2').hide();

    //     $('#add_chairperson').click(function() {

    //         $('#chairperson2').show();
    //         $('#add_chairperson').hide();

    //     });

    // });
    var no = '1';

    $('#add_panel').click(function(){
    no++;
    $('#table_panel > tbody:last-child').append('<tr><td>'+
    +no+c
    '</td>'+
        '<td><input type="text" value="" class="form-control"></td>'+
        '<td></td></tr>');
    });

    $("#btn_create").click(function () {
    // alert('syauqigila');
        var meeting = $('#id_meeting').val();
        var date = $('#create_date').val();
        var time = $('#create_time').val();
        var delete1 = "('Are you sure want to delete the draft?')";
        var no = $('#myTable_create tr:last td:first').find("input").val();
        no++;
        // var no_index = no++
        $('#myTable_create > tbody:last-child').append('<tr id="create'+no+'">'+
                                                            '<td style="display:none;"><input type="hidden" value="'+no+'"></td>'+
                                                            '<td>'+meeting+'</td>'+
                                                            '<td>'+date+'</td>'+
                                                            '<td>'+time+'</td>'+
                                                            '<td></td>'+
                                                            '<td></td>'+
                                                            '<td><a class="btn btn-sm btn-danger" id="deletedraft2'+no+'" confirm('+delete1+'); ><i class="fas fa-trash-alt fa-sm"></i></a></td>'+
                                                            '</tr>');

        $('#deletedraft2'+no+'').click(function(){
            alert('Are you sure want to delete the draft? ');

            $('#myTable_create').each(function(){
            $('#create'+no+'').remove();
        });
        });
    });

</script>

@endsection


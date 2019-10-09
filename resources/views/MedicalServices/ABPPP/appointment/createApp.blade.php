
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

@section('js')

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
    +no+
    '</td>'+
        '<td><input type="text" value="" class="form-control"></td>'+
        '<td></td></tr>');
    });


</script>
@endsection

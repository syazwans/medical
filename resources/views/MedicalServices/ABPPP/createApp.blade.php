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
                                            <a class="btn-success link a1" data-toggle="modal"
                                                data-whatever="@getbootstrap" data-toggle="collapse"
                                                data-target="#appointment" aria-expanded="true">
                                                Create
                                            </a>
                                            @include('MedicalServices.ABPPP.modalCreateapp')
                                            
                                        </div>
                                        <div class="col-12">
                                        <br>
                                        <div class="table-responsive">
                                            <table id="demo-foo-row-toggler" class="table table-bordered"
                                                data-toggle-column="first">
                                                <thead>
                                                    <th>Meeting Ref. No.</th>
                                                    <th>Date</th>
                                                    <th>Time</th>
                                                    <th>No. Of Case</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </thead>
                                                <tbody>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
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

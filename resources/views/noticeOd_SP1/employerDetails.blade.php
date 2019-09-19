<div class="row">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-body">
				<form action="#">
					<div class="form-body">
						<h3 class="card-title">@lang('employerDetails.title')</h3>
						<hr>
						<div class="row p-t-20">
							<div class="col-md-6">
								<div class="form-group">
									<label class="control-label">@lang('employerDetails.attr.employerCode')</label>
									<select class="form-control " tabindex="1">
										<option value="1001">1001</option>
										<option value="1002">1002</option>
										<option value="1003">1003</option>
									</select>
									{{-- <select name="codeNo" class="form-control">
										<option value="">Select Employer Code No</option>
										@foreach ($codeNo as $key => $value)
										<option value="{{ $key }}">{{ $value }}</option>
										@endforeach
									</select> --}}
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="control-label">@lang('employerDetails.attr.employerType')</label>
									<input type="text" id="employerType" class="form-control"  input here…" readonly>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label class="control-label">@lang('employerDetails.attr.employerName')</label>
									<input type="text" id="employerName" class="form-control form-control" input here…" readonly>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label class="control-label">@lang('employerDetails.attr.postal_address1')</label>
									<input type="text" class="form-control" input here…" readonly>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label class="control-label">@lang('employerDetails.attr.postal_address2')</label>
									<input type="text" class="form-control" input here…" readonly>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label class="control-label">@lang('employerDetails.attr.postal_address3')</label>
									<input type="text" class="form-control" input here…" readonly>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label class="control-label">@lang('employerDetails.attr.postcode')</label>
									<input type="text" class="form-control"  readonly>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label>@lang('employerDetails.attr.city')</label>
									<input type="text" class="form-control">
								</div>
							</div>
							 <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">@lang('employerDetails.attr.state')</label>
                                <select class="form-control " tabindex="1">
                                <option value="Johor">Johor</option>
                                <option value="Kedah">Kedah</option>
                                <option value="Kelantan">Kelantan</option>
                                <option value="Melaka">Melaka</option>
                                <option value="NegeriSembilan">Negeri Sembilan</option>
                                <option value="Pahang">Pahang</option>
                                <option value="Penang">Penang</option>
                                <option value="Perak">Perak</option>
                                <option value="Perlis">Perlis</option>
                                <option value="Sabah">Sabah</option>
                                <option value="Sarawak">Sarawak</option>
                                <option value="Selangor">Selangor</option>
                                <option value="Terengganu">Terengganu</option>
                                <option value="KualaLumpur">W.P Kuala Lumpur</option>
                                <option value="Labuan">W.P Labuan</option>
                                <option value="Putrajaya">W.P Putrajaya</option>
                            </select>
                        </div>
                    </div>
							<div class="col-md-4">
								<div class="form-group">
									<label>@lang('employerDetails.attr.telNo')</label>
									<input type="text" class="form-control"  readonly>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label>@lang('employerDetails.attr.faxNo')</label>
									<input type="text" class="form-control"  readonly>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label>@lang('employerDetails.attr.email')</label>
									<input type="text" class="form-control" readonly>
								</div>
							</div>
						</div>
					<div class="form-actions">
						<button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('employerDetails.cancel')</button>
						<button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('employerDetails.clear')</button>
						<button type="submit" class="btn btn waves-effect waves-light btn-success"> <i class="fa fa-check"></i>
						@lang('employerDetails.save')</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
</div>

{{-- <script type="text/javascript">
    $(document).ready(function() {
        $('select[name="state"]').on('change', function() {
            var stateID = $(this).val();
            if(stateID) {
                $.ajax({
                    url: '/myform/ajax/'+stateID,
                    type: "GET",
                    dataType: "json",
                    success:function(data) {

                        
                        $('select[name="city"]').empty();
                        $.each(data, function(key, value) {
                            $('select[name="city"]').append('<option value="'+ key +'">'+ value +'</option>');
                        });


                    }
                });
            }else{
                $('select[name="city"]').empty();
            }
        });
    });
</script> --}}


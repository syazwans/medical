<div class="row">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-body">
				<form class="form-horizontal" role="form">
					<div class="form-body">
						<h3 class="card-title">@lang('certification.title')</h3>
						<hr class="m-t-0 m-b-40">
						<div class="row">
							<div class="custom-control custom-checkbox mr-sm-2 mb-3">
								<input type="checkbox" class="custom-control-input" id="checkbox0" value="check">
								<label class="custom-control-label" for="checkbox0">@lang('certification.attr.details')</label>
							</div>
						</div>

						<div class="card-body">
							<form class="mt-4">
								<div class="col-md-8">
									<div class="form-group">
										<label for="exampleInputEmail1">@lang('certification.attr.name')</label>
										<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
									</div>
								</div>
								<div class="col-md-8">
									<div class="form-group">
										<label for="exampleInputEmail1">@lang('certification.attr.designation')</label>
										<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label for="exampleInputPassword1">@lang('certification.attr.date')</label>
										<input type="date" class="form-control" id="exampleInputPassword1" >
									</div>
								</div>
							</form>
						</div>
					</form>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group row">
								<label class="control-label text-right col-md-1"></label>
								<div class="col-md-12">
									<p class="form-control-static">@lang('certification.attr.no_sign')</p>
								</div>
							</div>
						</div>
					</div>
					<div class="form-actions">
						<button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('certification.cancel')</button>
						<button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('certification.clear')</button>
						<button type="submit" class="btn btn waves-effect waves-light btn-success"> <i class="fa fa-check"></i>
						@lang('certification.save')</button>

					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Row -->
</div>
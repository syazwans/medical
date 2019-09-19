
<section>
<div class="row p-t-20">
    
    <div class="col-md-6">
        <div class="row">
							<div class="col-md-12">
								<div class="form-group row">
									<label class="control-label text-right col-md-1"></label>
									<div class="col-md-12">
										<p class="form-control-static"> @lang('confirmation.attr.details') </p>
									</div>
								</div>
							</div>
						</div>	

        <div class="form-group">
            
            <label class="control-label">@lang('confirmation.attr.sectionj_received')</label>
            <select class="form-control">
                <option selected disabled hidden>--Choose your answer--</option>
                <option value="Completed">Completed</option>
                <option value="Not Completed">Not Completed</option>
            </select>
        </div>
    </div>
    <div class="col-md-6">
        <div class="row">
							<div class="col-md-12">
								<div class="form-group row">
									<label class="control-label text-right col-md-1"></label>
									<div class="col-md-12">
										<p class="form-control-static"><br> </p>
									</div>
								</div>
							</div>
						</div>
        <div class="form-group">
            <label class="control-label">@lang('confirmation.attr.complete_sectionj')
            </label>
            <input type="date" name="section_j_received_date" id="section_j_received_date" class="form-control">
        </div>
    </div>
</div>
</section>

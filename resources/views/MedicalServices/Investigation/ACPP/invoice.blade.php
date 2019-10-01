<div class="card">
		<div class="card-body">
			<div class="form-body">
				<h4 class="card-title">Doctor Details</h4>
				<div class="row p-t-20">
					<div class="col-md-5">
						<div class="form-group">
							<label class="control-label">@lang('Case Status :')</label>
							<input type="text" value="" class="form-control" readonly>
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							<label class="control-label">@lang('Remarks :')</label>
							<input type="text" value="" class="form-control" readonly>
						</div>
					</div>
					<div class="col-md-5">
						<div class="form-group">
							<label class="control-label">@lang('Contact Number :')</label>
							<input type="text" value="" class="form-control" readonly>
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							<label class="control-label">@lang('Type Of KKM: :')</label>
							<div class="radio">
								<label><input type="radio"  name="optradio" onClick="KKM()" id="radio_kkm">KKM</label>
							
								<label><input type="radio" name="optradio" onClick="non_KKM()" id="radio_nonkkm">Non-KKM</label>
							</div>
						</div>
					</div>
				</div>
			</div>
			{{-- <div id="type_document_invoice" style="display:none">        --}}
				<div id="type_document" style="display:none" class="col-md-12 " >
					<div class="form-group">
						<label class="control-label">@lang('Type Of Document :')</label>
						<div class="radio">
							<label><input type="radio" name="optradios"  onClick="invoice()" id="radio_invoice">Invoice</label>
						
							<label><input type="radio" name="optradios"  onClick="medical()" id="radio_medical">Medical Clarification Report</label>
						</div>
					</div>
				</div>
	   
				<div  id="invoice1" style="display:none" class="form-body" >
					<h4 class="card-title">Invoice</h4>
					<div class="row p-t-20">
						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label">@lang('Ref. No. :')</label>
								<input type="text" value="" class="form-control" readonly>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label">@lang('Invoice Date :')</label>
								<input type="date" value="" class="form-control" readonly>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label">@lang('Amount :')</label>
								<input type="date" value="" class="form-control" readonly>
							</div>
						</div>
						<div class="col-5">
							<div class="form-group">
									<label class="control-label">Upload</label>
								<div class="input-group">
									<div class="custom-file">
										<input type="file" class="custom-file-input " id="inputGroupFile01">
										<label class="custom-file-label" for="inputGroupFile01">Choose file</label>
									</div>
								</div>
							</div>
							</div>
						<div class="col-12">
							<div class="table-responsive">
								<table id="demo-foo-row-toggler" class="table table-bordered"
									data-toggle-column="first">
									<thead>
										<th>No.</th>
										<th>File Name</th>
										<th>Date</th>
										<th>Action</th>
									</thead>
									<tbody>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
									</tbody>
								</table>
								<div class="col-md-6 offset-6">
									<a class="btn btn waves-effect waves-light btn-success a1" data-toggle="collapse"
										data-target="#collapseThree,#collapseFour" aria-expanded="true"
										aria-controls="collapseTwo22">
										Submit
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div  id="medical1" style="display:none" class="form-body">
					<h4 class="card-title">Medical Clarification Report</h4>
					<div class="col-5">
						<div class="form-group">
								<label class="control-label">Upload</label>
							<div class="input-group">
								<div class="custom-file">
									<input type="file" class="custom-file-input" id="inputGroupFile01">
									<label class="custom-file-label" for="inputGroupFile01">Choose file</label>
								</div>
							</div>
						</div>
					</div>
					<div class="row p-t-20">
						<div class="col-12">
							<div class="table-responsive">
								<table id="demo-foo-row-toggler" class="table table-bordered"
									data-toggle-column="first">
									<thead>
										<th>No.</th>
										<th>File Name</th>
										<th>Date</th>
										<th>Action</th>
									</thead>
									<tbody>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
									</tbody>
								</table>
								<div class="col-md-6 offset-6">
									<a class="btn btn waves-effect waves-light btn-success a1" data-toggle="collapse"
										data-target="#collapseThree,#collapseFour" aria-expanded="true"
										aria-controls="collapseTwo22">
										Submit
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			{{-- </div>  --}}
		</div>
	</div>
	
	<script>
	// function KKM() {
	// 	var checkBox = document.getElementById("radio_kkm");
	// 	var type_document = document.getElementById("type_document");
	
	// 	if (checkBox.checked == true){
	// 		type_document.style.display = "block";
	// 	} else {
	// 		type_document.style.display = "none";
	// 	}
	// }
	
	// function non_KKM() {
	// 	var checkBox = document.getElementById("radio_nonkkm");
	// 	var type_document_invoice = document.getElementById("type_document_invoice");
	// 	var invoice = document.getElementById("invoice");
	// 	var medical = document.getElementById("medical");
	
	// 	if (checkBox.checked == true){
	// 		type_document_invoice.style.display = "block";
	// 	} else {
	// 		type_document_invoice.style.display = "none";
	// 	}
	// }
	function KKM() {
		
		// Get the checkbox
		var radioButton = document.getElementById("radio_kkm");
		// Get the output text
		var invoice1 = document.getElementById("invoice1");
		var medical1 = document.getElementById("medical1");
		var type_document = document.getElementById("type_document");
		
		// If the checkbox is checked, display the output text
		if (radioButton.checked == true){
		invoice1.style.display = "none";
		medical1.style.display = "none"; 
		type_document.style.display = "block"; 
		}
	
	}

	function invoice() {
		
		// Get the checkbox
		var radioButton = document.getElementById("radio_invoice");
		// Get the output text
		var invoice1 = document.getElementById("invoice1");
		var medical1 = document.getElementById("medical1");
		
		// If the checkbox is checked, display the output text
		if (radioButton.checked == true){
		invoice1.style.display = "block";
		medical1.style.display = "none"; 
		}
	
	}

	function medical() {
		
		// Get the checkbox
		var radioButton = document.getElementById("radio_medical");
		// Get the output text
		var invoice1 = document.getElementById("invoice1");
		var medical1 = document.getElementById("medical1");
		
		// If the checkbox is checked, display the output text
		if (radioButton.checked == true){
		invoice1.style.display = "none";
		medical1.style.display = "block"; 
		}
	
	}


	function non_KKM() {
	
		// Get the checkbox
		var radioButton = document.getElementById("radio_nonkkm");
		// Get the output text
		var invoice1 = document.getElementById("invoice1");
		var medical1 = document.getElementById("medical1");
		var type_document = document.getElementById("type_document");
		
		// If the checkbox is checked, display the output text
		if (radioButton.checked == true){
		invoice1.style.display = "block";
		medical1.style.display = "block"; 
		type_document.style.display = "none"; 
		}
		
	}
	</script>
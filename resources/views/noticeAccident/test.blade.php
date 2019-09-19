@extends('layouts.app')

@section('content')

<div class="col-lg-3 col-md-6">
	<div class="card">
		<div class="card-body">
			<h5 class="card-title">TOTAL VISIT</h5>
			<div class="d-flex no-block align-items-center m-t-20 m-b-20">
				<div id="sparklinedash"></div>
				<div class="ml-auto">
					<h2 class="text-success"><i class="ti-arrow-up"></i> <span class="counter">8659</span></h2>
				</div>
			</div>
		</div>
		<div id="sparkline8" class="sparkchart"></div>
	</div>
</div>
<!-- Column -->
<div class="col-lg-3 col-md-6">
	<div class="card">
		<div class="card-body">
			<h5 class="card-title">TOTAL PAGE VIEWS</h5>
			<div class="d-flex no-block align-items-center m-t-20 m-b-20">
				<div id="sparklinedash2"></div>
				<div class="ml-auto">
					<h2 class="text-purple"><i class="ti-arrow-up"></i> <span class="counter">7469</span></h2>
				</div>
			</div>
		</div>
		<div id="sparkline8" class="sparkchart"></div>
	</div>
</div> 

@endsection

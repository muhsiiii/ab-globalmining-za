@include('layouts.header')
@include('layouts.nav')

<div class="container-main location-pg mt-5 mb-4">
	<div class="row">
		<div class="col-lg-6">
			<h2>ABGM Locations and Offices</h2>

			<div id="accordion1">
				<div class="card mb-2">
					<div class="card-header" id="headingOne">
						<h5 class="mb-0">
							<button class="btn btn-link  job-namee" data-toggle="collapse" data-target="#{{$locationMap->id}}" aria-expanded="true" aria-controls="collapseOne" onclick="ChangeMap('{{$locationMap->id}}')">{{$locationMap->country}}</button>
						</h5>
					</div>

					<div id="{{$locationMap->id}}" class="collapse show " aria-labelledby="headingOne" data-parent="#accordion1">
						<div class="card-body">
							<div class="addresslist-box">
								<h4 class="mb-2 address-main-haed">{{$locationMap->country}}</h4>
								<div class="main-sub-addrs">
									<div class="sub-addrss">
										<p>{{$locationMap->address}}</p>
									</div>
									<div class="sub-addrss text-dark pl-3">
										<a href="#" class="addrss-dark-txt"><i style="vertical-align: bottom;" class="ri-smartphone-line"></i> {{$locationMap->tel}}</a> <br>
										<a href="#" class="addrss-dark-txt"><i style="vertical-align: bottom;" class="ri-printer-line"></i> {{$locationMap->fax}}</a>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>

			@foreach($locations as $loc)
			<div id="accordion">
				<div class="card mb-2">
					<div class="card-header" id="headingOne">
						<h5 class="mb-0">
							<button class="btn btn-link  job-namee" data-toggle="collapse" data-target="#{{$loc->id}}" aria-expanded="false" aria-controls="collapseOne" onclick="ChangeMap('{{$loc->id}}')">{{$loc->country}}</button>
						</h5>
					</div>

					<div id="{{$loc->id}}" class="collapse " aria-labelledby="headingOne" data-parent="#accordion">
						<div class="card-body">
							<div class="addresslist-box">
								<h4 class="mb-2 address-main-haed">{{$loc->country}}</h4>
								<div class="main-sub-addrs">
									<div class="sub-addrss">
										<p>{{$loc->address}}</p>
									</div>
									<div class="sub-addrss text-dark pl-3">
										<a href="#" class="addrss-dark-txt"><i style="vertical-align: bottom;" class="ri-smartphone-line"></i>{{$loc->tel}}</a> <br>
										<a href="#" class="addrss-dark-txt"><i style="vertical-align: bottom;" class="ri-printer-line"></i>{{$loc->fax}}</a>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
			@endforeach
		</div>
		<div class="col-lg-6" id="map">
			<div class="adrss-map-sec">
                @php
				print_r($locationMap->url)
				@endphp
				<!-- <iframe src="{{$locationMap->url}}" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->

			</div>
		</div>
	</div>
</div>
<!-- Footer -->
<script>
	function ChangeMap(val) {
        // alert(val);
        // return false;

		$.post("/get-map", {
			country_id: val,
			_token: "{{ csrf_token() }}"
		}, function(result) {

			$('#map').html(result);

		});

	}
</script>

@include('layouts.footer')

@include('layouts.header')
@include('layouts.nav')
<section style="background-image: url(/images/Rectangle\ 40.png);" class="banner-head">
	<div class="head-content">
		<div class="container-main">
			<h2>Latest News</h2>
		</div>
	</div>
</section>
<div class="project-detail-head our-team-cntnr container-main services-main-head">
	<p style="padding-top: 10px;padding-bottom: 20px;">Home <span style="color: #B6B6B6;">/ Latest News</span></p>
	<div class="row">
		<div class="col-lg-12">
			<div style="background: #244152;margin-bottom: 20px;" class="underline"></div>
		</div>
	</div>
</div>
<section class="latest-news latest-news-single-page container-main">
	<div class="row">
		@foreach($datas as $data)
		<div class="col-lg-6">

			<div class="box-sldr-news">

				<div class="chld-news-box">

					<img src="{{asset('/latest_news/'.$data->image)}}" alt="">
					<div class="date-slider">
						<h3> <span>{{ $data->updated_at->day }}</span> <br> {{ $data->updated_at->format('F') }}</h3>
					</div>
				</div>
				<div class="chld-news-box rgtsldr">
					<h4 style="font-weight: 500;">{{$data->description}}</h4>
					<h6>{{$data->description}}</h6> <br>
					<a class="learnmoresldr" href="{{$data->url}}" target="_blank">Read more <i style="vertical-align: middle;" class="ri-arrow-right-line"></i></a>
				</div>
			</div>
		</div>
		@endforeach
	</div>
</section>
@include('layouts.footer')

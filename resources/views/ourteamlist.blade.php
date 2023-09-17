@include('layouts.header')
@include('layouts.nav')
<section style="background-image: url(/images/contact-us.png);" class="banner-head">
	<div class="head-content">
		<div class="container-main">
			<h2>Our Team</h2>
		</div>
	</div>
</section>
<div class="project-detail-head our-team-cntnr container-main">
	<p class="serces-project-p" style="padding-top: 10px;padding-bottom: 20px;">Home <span style="color: #B6B6B6;">/ Our Team</span></p>
	<div class="row">
		<div class="col-lg-12">
			<div style="background: #244152;margin-bottom: 20px;" class="underline"></div>
			<h4 class="meet-our-brilants" style="margin-bottom: 25px;">Executive Team</h4>
		</div>
		@foreach($executive_teams as $team)
			<div class="col-lg-4 mb-4">
			<div class="inner-col-grid-view" data-toggle="modal" data-target="" class="col-lg-12 main-div-teamlist">
				<div class="grid-imgs">
					<img style="width: 100% !important;" src="{{asset('/our_teams/'.$team->image)}}" alt="">
					<div class="icons-teams">
						<a href="{{$team->url}}" target="_blank"><i class="ri-linkedin-box-fill lnkdin"></i></a>
					</div>
				</div>
				<div class="grid-name-dv" style="background: #134162;color: #fff;">
					<h5 class="teams-name text-white">{{$team->name}}</h5>
					<p class="text-white mb-0">{{$team->position}}</p>
					<p class="text-white mb-0">{{$team->education}}</p>
					<h6 style="border: 1px solid #ffff;width:130px;text-align:center;padding: 7px 7px;border-radius: 10px;margin: 0;cursor: pointer;color:#fff;margin-top:15px;margin-bottom:10px;" onclick="Click('{{$team->name}}','{{$team->description}}')">Read More</h6>
				</div>
			</div>
		</div>
			@endforeach
	</div>
</div>
</div>
<div class="project-detail-head our-team-cntnr container-main">
	<div class="row">
		<div class="col-lg-12">
			<div style="background: #244152;margin-bottom: 20px;" class="underline"></div>
			<h4 class="meet-our-brilants" style="margin-bottom: 25px;">Team Members</h4>
		</div>
		@foreach($team_members as $member)
			<div class="col-lg-4 mb-4">
			<div class="inner-col-grid-view" data-toggle="modal" data-target="" class="col-lg-12 main-div-teamlist">
				<div class="grid-imgs">
					<img style="width: 100% !important;" src="{{asset('/our_teams/'.$member->image)}}" alt="">
					<div class="icons-teams">
						<a href="{{$member->url}}" target="_blank"><i class="ri-linkedin-box-fill lnkdin"></i></a>
					</div>
				</div>
				<div class="grid-name-dv" style="background: #134162;color: #fff;">
					<h5 class="teams-name text-white">{{$member->name}}</h5>
					<p class="text-white mb-0">{{$member->position}}</p>
					<p class="text-white mb-0">{{$member->education}}</p>
					<h6 style="border: 1px solid #ffff;width:130px;text-align:center;padding: 7px 7px;border-radius: 10px;margin: 0;cursor: pointer;color:#fff;margin-top:15px;margin-bottom:10px;" onclick="Click('{{$member->name}}','{{$member->description}}')">Read More</h6>
				</div>
			</div>
		</div>
			@endforeach
	</div>
</div>
<div class="project-detail-head our-team-cntnr container-main">
	<div class="row">
		<div class="col-lg-12">
			<div style="background: #244152;margin-bottom: 20px;" class="underline"></div>
			<h4 class="meet-our-brilants" style="margin-bottom: 25px;">Associates</h4>
		</div>
		@foreach($associates as $associate)
			<div class="col-lg-4 mb-4">
			<div class="inner-col-grid-view" data-toggle="modal" data-target="" class="col-lg-12 main-div-teamlist">
				<div class="grid-imgs">
					<img style="width: 100% !important;" src="{{asset('/our_teams/'.$associate->image)}}" alt="">
					<div class="icons-teams">
						<a href="{{$associate->url}}" target="_blank"><i class="ri-linkedin-box-fill lnkdin"></i></a>
					</div>
				</div>
				<div class="grid-name-dv" style="background: #134162;color: #fff;">
					<h5 class="teams-name text-white">{{$associate->name}}</h5>
					<p class="text-white mb-0">{{$associate->position}}</p>
					<p class="text-white mb-0">{{$associate->education}}</p>
					<h6 style="border: 1px solid #ffff;width:130px;text-align:center;padding: 7px 7px;border-radius: 10px;margin: 0;cursor: pointer;color:#fff;margin-top:15px;margin-bottom:10px;" onclick="Click('{{$associate->name}}','{{$associate->description}}')">Read More</h6>
				</div>
			</div>
		</div>
			@endforeach
	</div>
</div>
</div>
</section>
<!-- team details popup  -->

<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div style="max-width: 800px;" class="modal-dialog modal-dialog-centered" role="document">
		<div style="background: #ffff;width: 95%;border-radius: 20px;padding: 20px 25px;margin: auto;" class="modal-content">
			<div class="modal-body modal-loginform">
				<h5 style="text-align: center;" id="name"></h5>
				<P id="description"></P>
			</div>
		</div>
	</div>
</div>



	</div>
</div>
<!-- contact section  -->
<div class="contact-now">
	<div class="container-main">
		<h3>Have an enquiry? We would love to help ! </h3>
		<a href="contact.html">Contact now <i style="vertical-align: middle;" class="ri-arrow-right-line"></i></a>
	</div>
</div>
<!-- qualoty section  -->
<div class="quality container-main">
	<div style="background: #244152;margin-bottom: 20px;" class="underline"></div>
	<div class="row">
		<div class="col-lg-12 quality-div">
			<p>The A&B Global mining team strive to provide our clients with the best range of solutions
				and expertise through our four key objectives:</p>
		</div>
	</div>
</div>
<!-- our services box  -->
<section class="mission-ab container-fluid">
	<div class="row">
		<div class="col-lg-3 lightbluegb lgbl">
			<img src="./images/Untitled-3.png" alt="">
			<h5>EXCELLENCE</h5>
			<p>Consistently surpass client
				expectations</p>
		</div>
		<div class="col-lg-3 lightbluegbtwo lgbl">
			<img src="./images/Number_2.png" alt="">
			<h5>GROWTH</h5>
			<p>Grow capabilities and
				proficiencies</p>
		</div>
		<div class="col-lg-3 lightbluegbthree lgbl">
			<img src="./images/Number_3.png" alt="">
			<h5>EXPANSION</h5>
			<p>Greater solution footprint
				for our clients</p>
		</div>
		<div class="col-lg-3 lightbluefour lgbl">
			<img src="./images/Untitled-4.png" alt="">
			<h5>INNOVATION</h5>
			<p>Innovate to create value for clients</p>
		</div>
	</div>
</section>
<script>
	function Click(val1,val2)
	{
		// alert(val);
        $('#loginModal').modal('show');
		$('#name').text(val1);
		$('#description').text(val2);
	}
</script>
@include('layouts.footer')

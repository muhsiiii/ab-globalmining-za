@include('layouts.header')
@include('layouts.nav')
<section style="background-image: url(/images/bnrsrvs.png);" class="banner-head">
	<div class="head-content">
		<div class="container-main">
			<h2>Geological <br> Services</h2>
		</div>
	</div>
</section>
<!-- Geological Service section -->
<section style="margin-bottom: 30px;" class="services container-main">
	<p style="padding-top: 10px;padding-bottom: 20px;">Home <span style="color: #B6B6B6;">/ Services / Geological services</span></p>
	<div style="background: #244152;margin-bottom: 20px;margin-top: 35px;" class="underline"></div>
	<h2 style="margin-bottom: 30px;margin-top: 30px;"> Geological Services </h2>
	<div style="margin-bottom: 40px;" class="servicesdv">
		<div class="lftsrvs">
			<img src="./images/geoalogy.png" alt="">
		</div>
		<div class="rgtsrvs">
			<h5>Mineral Resources Geology </h5>
			<p style="text-align: justify;">ABGM has capabilities to plan and manage drilling programmes in line with the client’s requirements
				and mine production visions. We can manage the drilling programme and supervise the process up
				to the point where a compliant Mineral Resource declaration can be achieved. The following are the
				key services we can provide as part of this offering. </p>
			<ul class="listservice" style="padding-left: 20px;">
				<li>On site drilling management </li>
				<li>Database compilation and management </li>
				<button style="float: right;" data-toggle="modal" data-target="#loginModal3" class="read-more">Read more</button>
			</ul>
		</div>
	</div>
	<!-- geological Studies   popup  -->
	<div class="modal fade" id="loginModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div style="background: #ffff;width: 95%;border-radius: 20px;padding: 20px 25px;margin: auto;" class="modal-content">
				<div class="modal-body modal-loginform">
					<h5 style="text-align: center;padding-bottom: 15px;">Mineral Resources Geology</h5>
					<ul style="padding-left: 20px;">
						<li>On site drilling management </li>
						<li>Database compilation and management </li>
						<li>Geological modelling</li>
						<li>Mineral resource reporting </li>
						<li>Competent Person’s Report and Sign off </li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="servicesdv">
		<div class="lftsrvs">
			<img src="./images/imagesmple.png" alt="">
		</div>
		<div class="rgtsrvs">
			<h5>Exploration Geology </h5>
			<p style="text-align: justify;">ABGM provides tailor-made geological exploration plans to suite the type of geological environment,
				commodity and deposit type. In consultation with the client and aiming to achieve the best possible
				outcomes, we employ the following exploration methods to evaluate mineral deposits. </p>
			<ul class="listservice" style="padding-left: 20px;">
				<li>Diamond and percussion resource drilling </li>
				<li>Geotechnical drilling & logging</li>
				<li>Geohydrolological drilling & logging </li>
			</ul>
			<button style="float: right;" data-toggle="modal" data-target="#loginModal4" class="read-more">Read more</button>
		</div>
		<!-- mineral resources    popup  -->
		<div class="modal fade" id="loginModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div style="background: #ffff;width: 95%;border-radius: 20px;padding: 20px 25px;margin: auto;" class="modal-content">
					<div class="modal-body modal-loginform">
						<h5 style="text-align: center;padding-bottom: 15px;">Exploration Geology</h5>
						<ul style="padding-left: 20px;">
							<li>Diamond and percussion resource drilling </li>
							<li>Geotechnical drilling & logging</li>
							<li>Geohydrolological drilling & logging </li>
							<li>Geochemical Surveys </li>
							<li>Geophysical Surveys </li>
						</ul>
						<p>In most cases a combination of these methods will be used to ensure that the client has the highest
							return in terms in most cases a combination of these methods will
							ensure the highest return in terms of value-add and geological confidence for the least cost
							in the quickest time. With our associates and partners, geophysical surveys can be conducted on a project scale and target generation is achieved in record time. We offer on site execution of the exploration and offsite monitoring and interpretation of collected data. </p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- contact section  -->
<div class="contact-now">
	<div class="container-main">
		<h3>Not sure which solution fits your business needs?</h3>
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
@include('layouts.footer')

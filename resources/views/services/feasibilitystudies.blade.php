@include('layouts.header')
@include('layouts.nav')
<!-- banner  -->
<section style="background-image: url(/images/bnrsrvs.png);" class="banner-head">
	<div class="head-content">
		<div class="container-main">
			<h2>Feasibility <br> Studies</h2>
		</div>
	</div>
</section>
<!-- Feasibility Studies  -->
<section style="margin-bottom: 30px;" class="services container-main">
	<p class="service-head-eng" style="padding-top: 10px;padding-bottom: 20px;">Home <span style="color: #B6B6B6;">/ Services / Feasibility Studies</span></p>

	<div style="background: #244152;margin-bottom: 20px;" class="underline"></div>
	<h2 class="heading-serv" style="margin-bottom: 30px;">Feasibility Studies </h2>
	<div class="servicesdv">
		<div class="lftsrvs">
			<img src="./images/study.png" alt="">
		</div>
		<div class="rgtsrvs">
			<p style="text-align: justify;">ABGM has successfully concluded a number of feasibility studies at all levels of mine development (Pre-feasibility, Definitive Feasibility). Together with trusted subject matter experts, a unique service offering is being able to offer a turnkey service, that offers the following: </p>
			<ul class="listservice" style="padding-left: 20px;">
				<li>Gap analysis</li>
				<li>Specialist studies </li>
				<li>Code compliant Mineral Resources and Reserves Statement </li>
				<li>Executable Mine plan and design </li>
				<li>Mine production schedule and cost model </li>
				<li>Plant design and production schedule </li>
			</ul>
			<button style="float: right;" data-toggle="modal" data-target="#loginModal2" class="read-more">Read more</button>
		</div>
	</div>
</section>
<!-- Feasibility Studies   popup  -->
<div class="modal fade" id="loginModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div style="background: #ffff;width: 95%;border-radius: 20px;padding: 20px 25px;margin: auto;" class="modal-content">
			<div class="modal-body modal-loginform">
				<h5 style="text-align: center;padding-bottom: 15px;">Feasibility Studies </h5>
				<ul style="padding-left: 20px;">
					<li>Gap analysis; </li>
					<li>Specialist studies; </li>
					<li>Code compliant Mineral Resources and Reserves Statement </li>
					<li>Executable Mine plan and design </li>
					<li>Mine production schedule and cost model </li>
					<li>Plant design and production schedule </li>
					<li>Infrastructure Engineering and design </li>
					<li>Logistics and ore transport design </li>
					<li>Environmental, Social and Compliance</li>
				</ul>
			</div>
		</div>
	</div>
</div>
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
		<!-- <div class="col-lg-4 quality-div">
					<h4>Quality and
						Performance at
						the Right Price</h4>
				</div> -->
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

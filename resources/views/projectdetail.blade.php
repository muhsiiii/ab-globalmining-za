@include('layouts.header')
@include('layouts.nav')
<section style="background-image: url(/images/Rectangle\ 40bnr.png);" class="banner-head">
	<div class="head-content">
		<div class="container-main">
			<h2>Projects</h2>
		</div>
	</div>
</section>
<div class="project-detail-head container-main">
	<p class="project-p-section" style="padding-top: 10px;padding-bottom: 20px;">Home <span style="color: #B6B6B6;">/ Projects</span></p>
	<div class="row">
		<div class="col-lg-12">
			<div style="background: #244152;margin-bottom: 20px;" class="underline"></div>
			<h4>Projects</h4>
			<p style="color: #606060;">ABGM provides a range of consulting services in the mining industry in association with several other creditable organisations. This enables the delivery of a comprehensive solution footprint in order to meet our client’s needs.</p>
			<p style="color: #606060;">These are some of the projects we have worked on over the last few years.</p>
		</div>
	</div>
</div>
<div class="project-images container-main">
	<div style="background: #244152;margin-bottom: 20px;margin-top: 35px;" class="underline"></div>
	<h2 style="margin-bottom: 30px;margin-top: 30px;"> Open PIT </h2>
	<div class="row">
		<div data-toggle="modal" data-target="#loginModal6" class="col-lg-4">
			<div class="project-detail-img">
				<img src="./images/Untitled-12.png" alt="">
				<h6>Wescoal | Owners Team for Coal Project | Open Pit (OP)</h6>
				<div class="icon-plus">
					<i class="ri-add-circle-line"></i>
				</div>
			</div>
		</div>
		<div class="col-lg-4">
			<a href="{{route('gamsberg')}}">
				<div class="project-detail-img">
					<img src="./images/Rectangle 68.png" alt="">
					<h6>Gamsberg Zinc – Design to Implementation</h6>
					<div class="icon-plus">
						<i class="ri-add-circle-line"></i>
					</div>
				</div>
			</a>
		</div>
		<div data-toggle="modal" data-target="#loginModal5" class="col-lg-4">
			<div class="project-detail-img">
				<img src="./images/Untitled-11.png" alt="">
				<h6>Charaat Gold Holdings Ltd (CGH | Tulkubash and Kiziltash Pre-Feasibility | Open Pit and Underground</h6>
				<div class="icon-plus">
					<i class="ri-add-circle-line"></i>
				</div>
			</div>
		</div>
		<div class="col-lg-4">
			<a href="{{route('projectsingle')}}">
				<div class="project-detail-img">
					<img src="./images/prjctimage.png" alt="">
					<h6>Kalgold Operational Support | Open Pit</h6>
					<div class="icon-plus">
						<i class="ri-add-circle-line"></i>
					</div>
				</div>
			</a>
		</div>
		<div data-toggle="modal" data-target="#loginModal4" class="col-lg-4">
			<div class="project-detail-img">
				<img src="./images/Untitled-10.png" alt="">
				<h6>Lucara Diamond - Karowe Mine | PFS and DFS Mining Option Studies | Open Pit</h6>
				<div class="icon-plus">
					<i class="ri-add-circle-line"></i>
				</div>
			</div>
		</div>
		<div data-toggle="modal" data-target="#loginModal3" class="col-lg-4">
			<div class="project-detail-img">
				<img src="./images/Untitled-6.png" alt="">
				<h6>Mimosa Mining Company | Mimosa North and South Hills Feasibility Study | Open Pit</h6>
				<div class="icon-plus">
					<i class="ri-add-circle-line"></i>
				</div>
			</div>
		</div>
		<div data-toggle="modal" data-target="#loginModal2" class="col-lg-4">
			<div class="project-detail-img">
				<img src="./images/Untitled-7.png" alt="">
				<h6>Ixia Coal | Imvula Coal Project Feasibility Study | Open Pit</h6>
				<div class="icon-plus">
					<i class="ri-add-circle-line"></i>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- underground  -->
<div class="project-images container-main">
	<div style="background: #244152;margin-bottom: 20px;margin-top: 35px;" class="underline"></div>
	<h2 style="margin-bottom: 30px;margin-top: 30px;"> Underground</h2>
	<div class="row">
		<div data-toggle="modal" data-target="#loginModal" class="col-lg-4">
			<div class="project-detail-img">
				<img src="./images/Untitled-5.png" alt="">
				<h6>Amcol - Batlhako Mining | LG6 underground feasibility study | Underground</h6>
				<div class="icon-plus">
					<i class="ri-add-circle-line"></i>
				</div>
			</div>
		</div>
		<div class="col-lg-4">
			<a href="{{route('preskaproject')}}">
				<div class="project-detail-img">
					<img src="./images/Rectangle 67.png" alt="">
					<h6>Prieska Mine Definitive Feasibility | Underground</h6>
					<div class="icon-plus">
						<i class="ri-add-circle-line"></i>
					</div>
				</div>
			</a>
		</div>
	</div>
</div>
<!-- pop up project  -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div style="max-width: 800px;" class="modal-dialog modal-dialog-centered" role="document">
		<div style="background: #ffff;width: 95%;border-radius: 20px;padding: 20px 25px;margin: auto;" class="modal-content">
			<div class="modal-body modal-loginform">
				<h5 style="text-align: center;">LG6 underground feasibility study</h5>
				<P>ABGM was requested by Batlhako Chrome Mine to undertake a
					PFS - level capital (Capex) estimation study into the development
					of an underground LG6 operation which will replace the current
					diminishing LG6/6a open pit resources. The study included a LOM
					design, including primary surface and underground infrastructure,
					LOM production scheduling, estimated mining costs (Opex), and
					resource/reserve estimation</P>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="loginModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div style="max-width: 800px;" class="modal-dialog modal-dialog-centered" role="document">
		<div style="background: #ffff;width: 95%;border-radius: 20px;padding: 20px 25px;margin: auto;" class="modal-content">
			<div class="modal-body modal-loginform">
				<h5 style="text-align: center;">Imvula Coal Project Feasibility Study </h5>
				<P>Ixia Coal (Pty) Limited is a black-women owned and controlled coal
					mining company. </P>
				<p>A,BGM were awarded the Feasibility study of a surface mine on
					certain reserves to the north of the current Syferfontein Mine
					reserve area (Imvula Mine, also referred to as the Imvula Project).
					The project was successfully completed in early 2015 and included
					ABGM managed and provided technical expertise for the full scope
					of the feasibility from mining to processing and engineerin</P>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="loginModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div style="max-width: 800px;" class="modal-dialog modal-dialog-centered" role="document">
		<div style="background: #ffff;width: 95%;border-radius: 20px;padding: 20px 25px;margin: auto;" class="modal-content">
			<div class="modal-body modal-loginform">
				<h5 style="text-align: center;">Mimosa North and South Hills Feasibility Study</h5>
				<P>ABGM completed Pre-feasibility studies to the Mimosa North
					and South Hill open pit project located in located on the Wedza
					Geological Complex on the Zimbabwean Great Dyke, 150 kilometres
					east of Bulawayo, Zimbabwe during the final quarter of 2014. This
					programme consisted of multiple teams and ABGM executed a Prefeasibility study including Mining modeling, Mining cost modeling
					and financial assessment, Reporting and Support engineering.</P>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="loginModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div style="max-width: 800px;" class="modal-dialog modal-dialog-centered" role="document">
		<div style="background: #ffff;width: 95%;border-radius: 20px;padding: 20px 25px;margin: auto;" class="modal-content">
			<div class="modal-body modal-loginform">
				<h5 style="text-align: center;">PFS and DFS Mining Option Studies </h5>
				<P>ABGM was selected by Boteti Mining (Pty) Ltd and Lucara to provide
					a Class 1 (‐15% to +25% costing accuracy) contractor and owner
					operated comparative mining study and a Class 3 (+/‐10% costing
					accuracy) contractor and owner operator comparative mining study
					for Karowe Diamond Mine in Botswana. Results of the study was
					implemented on site</P>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="loginModal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div style="max-width: 800px;" class="modal-dialog modal-dialog-centered" role="document">
		<div style="background: #ffff;width: 95%;border-radius: 20px;padding: 20px 25px;margin: auto;" class="modal-content">
			<div class="modal-body modal-loginform">
				<h5 style="text-align: center;">Tulkubash and Kiziltash Pre-Feasibility | Open Pit and Underground</h5>
				<P>ABGM completed Pre-feasibility studies to the Mimosa North
					and South Hill open pit project located in located on the Wedza
					Geological Complex on the Zimbabwean Great Dyke, 150 kilometres
					east of Bulawayo, Zimbabwe during the final quarter of 2014. This
					programme consisted of multiple teams and ABGM executed a Prefeasibility study including Mining modeling, Mining cost modeling
					and financial assessment, Reporting and Support engineering.</P>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="loginModal6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div style="max-width: 800px;" class="modal-dialog modal-dialog-centered" role="document">
		<div style="background: #ffff;width: 95%;border-radius: 20px;padding: 20px 25px;margin: auto;" class="modal-content">
			<div class="modal-body modal-loginform">
				<h5 style="text-align: center;">Wescoal is a JSE listed mining company in the Coal commodity. </h5>
				<p>ABGM was appointed as to review the operational readiness from
					a Mining Engineering perspective for their Moabsvelden Project
					which is an execution project with 2.4 MTA production. As part of
					the Projects Owners Engineers, ABGM reviewed feasibility designs
					for tender packages, feedback to the Wescoal Board, adjudication
					of tenders, negotiations with selected tenderer and operational
					readiness engagements</P>
			</div>
		</div>
	</div>
</div>
@include('layouts.footer')

@include('layouts.header')
@include('layouts.nav')
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="3000">
  <div class="carousel-inner">
    <div class="carousel-item banner-div active">
      <img style="width: 100%;height:100vh;" class="d-block w-100" src="/images/img_one.png" alt="First slide">
      <div class="content-banner">
        <div class="underline"></div>
        <h2>Overall Project Track Record </h2>
        <p>Over 17 years of successful delivery on over 500+ projects, large and small, mine planning, MRM, and associated engineering for a myriad of companies.</p>
      </div>
    </div>
    <div class="carousel-item banner-div">
      <img style="width: 100%;height:100vh;" class="d-block w-100" src="/images/img_two.png" alt="Second slide">
      <div class="content-banner">
        <div class="underline"></div>
        <h2>Feasibility Track Record </h2>
        <p>We have completed numerous pre-feasibility and definitive feasibility studies to date as well as short term and long term mine planning and mine design work for operating mines. </p>
      </div>
    </div>
    <div class="carousel-item banner-div">
      <img style="width: 100%;height:100vh;" class="d-block w-100" src="/images/img_three.png" alt="Third slide">
      <div class="content-banner">
        <div class="underline"></div>
        <h2>Capability </h2>
        <p>Evidenced by the ongoing practical implementations of mine planning at client sites like Harmony Gold, Foskor, Gamsberg, Afrimat and CCMSA. </p>
      </div>
    </div>
    <div class="carousel-item banner-div">
      <img style="width: 100%;height:100vh;" class="d-block w-100" src="/images/img_four.png" alt="Fourth slide">
      <div class="content-banner">
        <div class="underline"></div>
        <h2>Time Management </h2>
        <p>ABGM has demonstrated the importance of delivering projects on time and within budget on various PFS projects and mining DFS studies within the shortest possible times. </p>
      </div>
    </div>
    <div class="carousel-item banner-div">
      <img style="width: 100%;height:100vh;" class="d-block w-100" src="/images/img_five.png" alt="Fifth slide">
      <div class="content-banner">
        <div class="underline"></div>
        <h2>Problem Solving Capability </h2>
        <p>ABGM has delivered improved project economic potential and viability through innovative and “out of the box” thinking on various projects. </p>
      </div>
    </div>
    <div class="carousel-item banner-div">
      <img style="width: 100%;height:100vh;" class="d-block w-100" src="/images/img_six.png" alt="Sifth slide">
      <div class="content-banner">
        <div class="underline"></div>
        <h2>Cost Competitiveness </h2>
        <p>ABGM believes in minimising corporate overheads and administrative costs. Our structure enables us to provide services at highly competitive rates. </p>
      </div>
    </div>
  </div>
</div>
<!-- welcome section  -->
<section class="welcome container-main">
  <div class="underline"></div>

  <div class="row">
    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 left-welcome">
    <h2 style="font-size: 27px;"> WELCOME TO OUR ABGM - SOUTH AFRICA WEBSITE!</h2>
      <p>ABGM is a leading niche mining consultancy and provides a world-class service to our clients. Our multi-discipline and multi-commodity team of professional consultants specialise in both underground and surface, hard-rock and soft-rock, mining operations.
        Our core services focus on mineral resource management (MRM), mine optimisation, LOM mine planning and practical mining solutions. Our solution footprint further includes, inter alia: scoping and feasibility studies, geological services and studies, open pit and underground mine design and scheduling, ventilation design, geotechnical studies and applications, process modelling, and legal compliance services.</p>
      <div class="col-welcome-left">
        <div class="img-welcome-lft">
          <h6>DEVENDRA VYAS</h6>
          <p>Managing Director</p>
        </div>
      </div>
    </div>
    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
      <video loop="" controls="" muted width="100%" height="-webkit-fill-available;" autoplay>
        <source src="{{asset('videos')}}/{{$video['video']}}" type="video/mp4">
      </video>
    </div>
  </div>
</section>
<!-- about A & B  -->
<div class="small-aboutus">
  <div class="container-main">
    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 about-div">
        <img src="./images/projectwhite.png" alt="">
        <div class="col-sbout-div">
          <h2>{{ $lagacyprojects->content }}+</h2>
          <h6>PROJECTS</h6>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 about-div">
        <img src="./images/white-glb.png" alt="">
        <div class="col-sbout-div">
          <h2>{{ $lagacycountries->content }}+</h2>
          <h6>COUNTRIES</h6>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 about-div">
        <img src="./images/tickwhite.png" alt="">
        <div class="col-sbout-div">
          <h2>{{ $lagacydiverse->content }}+</h2>
          <h6>DIVERSE COMMODITIES STUDIED</h6>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 about-div">
        <img src="./images/handwhite.png" alt="">
        <div class="col-sbout-div">
          <h2>{{ $lagacyexperience->content }}+</h2>
          <h6>YEARS OF GLOBAL EXPERIENCE </h6>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- special services  -->
<div class="spvlservice">
  <div class="container-main">
    <div class="row">
      <div class="col-lg-3">
        <div class="underline"></div>
        <h3 class="spclheadng">Special <br> Services</h3>
        <p class="spclheadngp">ABGM provides a range of consulting services in the mining industry in association
          with several other creditable organisations. This enables the delivery of a
          comprehensive solution footprint to meet our clients’ needs. </p>
        <a class="servicesbtn" href="{{route('services')}}">All Services</a>
      </div>
      <div class="col-lg-3">
        <div class="boxspclsrvc">
          <img src="./images/businessman-using-digital-tablet 1.png" alt="">
          <div class="btmspcl">
            <h6>Digitalisation </h6>
            <p>Allow ABGM to be your partner in your Digitalisation journey.</p>
            <a class="redmore" data-toggle="modal" data-target="#loginModal" class="redmore" href="#">Read More <i style="vertical-align: middle;" class="ri-arrow-right-line"></i></a>
          </div>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="boxspclsrvc">
          <img src="./images/focusedbuisneesman.png" alt="">
          <div class="btmspcl">
            <h6>Project Management</h6>
            <p>There is no project too big or too small. ABGM can provide.</p>
            <a class="redmore" data-toggle="modal" data-target="#loginModal2" href="#">Read More <i style="vertical-align: middle;" class="ri-arrow-right-line"></i></a>
          </div>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="boxspclsrvc">
          <img src="./images/collegues.png" alt="">
          <div class="btmspcl">
            <h6>Strategic Advisory </h6>
            <p>ABGM’s independent strategic business tools,</p>
            <a class="redmore" data-toggle="modal" data-target="#loginModal3" href="#">Read More <i style="vertical-align: middle;" class="ri-arrow-right-line"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- specila section popups  -->
<!-- services popup  -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div style="background: #ffff;width: 95%;border-radius: 20px;padding: 20px 25px;margin: auto;" class="modal-content">
      <div class="modal-body modal-loginform">
        <h5 style="text-align: center;">Digitalisation </h5>
        <p style="text-align: justify;color:#606060;">Allow ABGM to be your partner in your Digitalisation journey. The ABGM team has core skills in the
          field and will be able to assist the client in conjunction with the ABGM technology partners. ABGM
          can deliver execution roadmaps, scope technology requirements and find the right solution for every
          mines needs. ABGM can also assist in the execution of solutions from communications, backbone
          infrastructure, architecture, devices, data processing, informatics, and reporting. </p>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="loginModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modalrct" role="document">
    <div style="background: #ffff;width: 98%;border-radius: 20px;padding: 20px 25px;margin: auto;" class="modal-content">
      <div class="modal-body modal-loginform">
        <h5 style="text-align: center;">Project Management </h5>
        <p style="text-align: justify;color:#606060;">There is no project too big or too small. ABGM can provide a tailored project management solution
          that fits the purpose of the project from concept to execution using Prince2® principles. ABGM will
          ensure that all required tasks and activities are correctly managed and delivered. Any project related
          issues and deviations that may occur will be managed accordingly to ensure value driven executions
          and objective delivery.</p>
        <h6>Key features: </h6>
        <ul style="padding-left: 40px;">
          <li>Project Management </li>
          <li>Engineering management of multi-discipline teams </li>
          <li>Code compliant Mineral Resources and Reserves Statement </li>
          <li>Cost control </li>
          <li>Schedule control </li>
          <li>Risk management</li>
          <li>Document management</li>
          <li>Quality management </li>
          <li>Preferential Procurement
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="loginModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modalrct" role="document">
    <div style="background: #ffff;width: 98%;border-radius: 20px;padding: 20px 25px;margin: auto;" class="modal-content">
      <div class="modal-body modal-loginform">
        <h5 style="text-align: center;">Strategic Advisory </h5>
        <p style="text-align: justify;color:#606060;">ABGM’s independent strategic business tools, backed by international specialist team will assist you
          to shape your business on a growth trajectory, and sustainability path of Zero-Carbon and AI enabled
          world of 21st Century.</p>
        <h6>Tailored to meet your goals </h6>
        <p>We are a trusted long-term partner that can provide strategic and smarter insights coupled with
          technological, commercial and market knowledge to inspire optimal decisions. Our 360 degrees
          strategy and operational excellence services can provide integrated solutions via deep industry
          knowledge and a global network:</p>
        <ul style="padding-left: 40px;">
          <li>Structured approach advisory based on proprietary research, data, industry analysis, and
            senior expertise </li>
          <li>Independent and trusted support for differentiation capabilities, optimisation of costs to
            reinvest in growth, and take advantage of digitisation </li>
          <li>Code compliant Mineral Resources and Reserves Statement </li>
          <li>Actionable (business, operations, organisational and technological) strategies and owners
            engineering/EPCM </li>
          <li>An execution partner to drive growth and sustainable development on both short to long
            term </li>
          <li>Pragmatic solutions, and robust conclusions and recommendation </li>
          <li>Navigation through today’s geopolitical crosswinds </li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!-- destination contact us  -->
<div class="destination-safe">
  <img src="./images/Frame 4.png" alt="">
  <div class="content-destination">
    <h2>Have an enquiry? We would love to help !</h2>
    <p>ABGM provides a range of consulting services in the mining industry in association <br>
      with several other creditable organisations. This enables the delivery of <br> a
      comprehensive solution footprint to meet our clients’ needs. </p>
    <a href="{{route('contactus')}}" class="contact">Contact now <i style="vertical-align: middle;" class="ri-arrow-right-line"></i></a>
  </div>
</div>
<section class="latest-news container-main">
  <div class="row">
    <div class="col-lg-6">
      <div style="background: #244152;" class="underline"></div>
      <h4 style="margin-bottom: 20px;padding-top: 20px;">Latest News</h4>
      <div class="box-sldr-news">
        <div class="chld-news-box">
          <img src="{{asset('/latest_news/'.$data->image)}}" alt="">
          <div class="date-slider">
            <h3> <span>{{ $data->updated_at->day }}</span> <br> {{ $data->updated_at->format('F') }}</h3>
          </div>
        </div>
        <div class="chld-news-box rgtsldr">
          <h4 style="font-weight: 500;">{{$data->title}}</h4> <br>
          <h6>{{$data->description}}</h6>
          <a class="learnmoresldr" href="{{$data->url}}" target="_blank">Read more <i style="vertical-align: middle;" class="ri-arrow-right-line"></i></a>
        </div>
      </div>
      <a class="allnews" href="{{route('allnews')}}">All News <i style="vertical-align: middle;" class="ri-arrow-right-line"></i></a>
    </div>
    <div style="padding-top: 0;" class="special-rgt col-lg-6">
      <div style="margin-bottom: 20px;background: #7091A4;" class="underline"></div>
      <h4 style="color: #000;padding-bottom: 10px;">Career</h4>
      @if(session()->has('message')) <p class="alert-success">{{session()->get('message')}}</p> @endif
      <form action="{{route('career.home,submit')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
          <div style="	background: #F4F4F4;padding: 20px 20px;border-radius: 10px;width: 100%;" class="box-cntct">
            <h3 style="text-align: center;">Want to join us! </h3>
            <h6 style="text-align: center;padding-bottom: 15px;">Submit your details below.We will be in touch if there is any suitable opportunity for you.</h6>
            <input style="border: none;" type="text" name="firstname" class="form-control form-contact" placeholder="First Name">
            <input style="border: none;" type="text" name="lastname" class="form-control form-contact" placeholder="Last Name">
            <input style="border: none;" type="email" name="email" class="form-control form-contact" placeholder="Email">
            <input style="border: none;" type="number" name="phone" class="form-control form-contact" placeholder="Phone Number">
            <select style="width: 100%;padding: 8px;margin-bottom: 20px;border: none;" id="cars" name="job">
              <option selected disabled>Select Job Disipline</option>
              <option value="Project Management">Project Management</option>
              <option value="Geology">Geology</option>
              <option value="Geotechnical Engineering">Geotechnical Engineering</option>
              <option value="Mineral Resource Geology">Mineral Resource Geology</option>
              <option value="Surveying">Surveying</option>
              <option value="Process Engineering">Process Engineering</option>
              <option value="Exploration Geology">Exploration Geology</option>
              <option value="Open Pit Mine Planning">Open Pit Mine Planning</option>
              <option value="Underground Mine Planning">Underground Mine Planning</option>
              <option value="Ventilation Engineering">Ventilation Engineering</option>
              <option value="Mechanical Engineering">Mechanical Engineering</option>
              <option value="Civil Engineering">Civil Engineering</option>
              <option value="Electrical Engineering">Electrical Engineering</option>
              <option value="Mine Digitalisation">Mine Digitalisation</option>
              <option value="Hydrogeology">Hydrogeology</option>
              <option value="Management">Management</option>
              <option value="Environmental Engineering">Environmental Engineering</option>
              <option value="Optimisation">Optimisation </option>
            </select>
            <label style="color: #000;" for="myfile">Select a file:</label>
            <input type="file" id="myfile" name="myfile"><br><br>
            <button type="submit" style="color: #fff;    background: #244152;" class="btn">Submit <i style="vertical-align: bottom;" class="ri-arrow-right-line"></i></button>
          </div>
        </div>
      </form>
    </div>
  </div>
</section>
<section class="carouselclients container-main">
  <div style="background: #244152;margin-top: 30px;" class="underline"></div>
  <h4 style="padding-top: 30px;">Some of Our Clients</h4>
  <div class="sliderlogos">
    <div class="slide-trackclints">
      @foreach($logos as $logo)
    <div class="slidelogo">
        <img src="{{asset('/logos/'.$logo->logos)}}" height="100" width="250" alt="" />
      </div>
      @endforeach
    </div>
</section>
<!-- make us special section contact us   -->
<section class="special">
  <div class="special-lft">
    <div style="background: #244152;margin-bottom: 20px;" class="underline"></div>
    <h4>What makes us Special?</h4>
    <div class="spcl-main-div">
      <div class="spcl-dv">
        <img src="./images/393-3932984_implementation-tree-work-icon-removebg-preview.png" alt="">
        <p>COMPETENCY</p>
      </div>
      <div class="spcl-dv">
        <img src="./images/2660288-removebg-preview.png" alt="">
        <p>CAPABILITY</p>
      </div>
      <div class="spcl-dv">
        <img src="./images/1938582-200-removebg-preview.png" alt="">
        <p>TIME MANAGEMENT</p>
      </div>
      <div class="spcl-dv">
        <img src="./images/expert.png" alt="">
        <p>EXPERTISE</p>
      </div>
      <div class="spcl-dv">
        <img src="./images/Cost_Competitiveness-removebg-preview.png" alt="">
        <p>COST COMPETITIVENESS</p>
      </div>
      <div class="spcl-dv">
        <img src="./images/5799061-removebg-preview.png" alt="">
        <p>PROBLEM SOLVING CAPABILITY</p>
      </div>
    </div>
  </div>
  <div class="special-rgt  contact-special">
    <div style="margin-bottom: 20px;background: #7091A4;" class="underline"></div>
    <h4>Contact Us</h4>
    @if(session()->has('message')) <p class="alert-success">{{session()->get('message')}}</p> @endif
    <form action="{{route('contactushome.save')}}" method="post">
      @csrf
      <div class="row">
        <div class="col-lg-6 col-md-12">
          <input type="text" name="name" class="form-control form-contact" placeholder="Name">
          @error('name') <p class="alert-danger">{{$message}}</p> @enderror
          <input type="email" name="email" class="form-control form-contact" placeholder="Email">
          @error('email') <p class="alert-danger">{{$message}}</p> @enderror
          <input type="number" name="phone" class="form-control form-contact" placeholder="Phone Number">
          @error('phone') <p class="alert-danger">{{$message}}</p> @enderror
          <input type="text" name="company_name" class="form-control form-contact" placeholder="Company name">
          @error('company_name') <p class="alert-danger">{{$message}}</p> @enderror
          <input type="text" name="designation" class="form-control form-contact" placeholder="Designation">
          @error('designation') <p class="alert-danger">{{$message}}</p> @enderror
        </div>
        <div class="col-lg-6 col-md-12">
          <textarea style="width:100%; height: 130px;" name="company_address" placeholder="Company Address" class="form-control form-contact" id="exampleFormControlTextarea1" rows="3"></textarea>
          @error('company_address') <p class="alert-danger">{{$message}}</p> @enderror
          <textarea style="width:100%; height: 130px;" name="message" placeholder="Message" class="form-control form-contact" id="exampleFormControlTextarea1" rows="3"></textarea>
          @error('message') <p class="alert-danger">{{$message}}</p> @enderror
          <button type="submit" class="btn">Submit <i style="vertical-align: bottom;" class="ri-arrow-right-line"></i></button>
        </div>
      </div>
    </form>
  </div>
</section>
<div style="background-image: url(/images/Group\ 559.png);margin-top: -0px;"  class="contact-adrss">
        <div class="container-main">
          <div class="row">
            <div class="col-lg-6 contact-div">
              <h5>Physical Address (South Africa Office)</h5>
              <ul>
                <li><i class="ri-map-pin-2-line"></i> Lakeside 3, Second Floor, <br> 263 A West Avenue, Die Hoewes,<br> Centurion, 0157, South Africa</li>
              </ul>
            </div>
            <div class="col-lg-6 contact-div">
              <h5>Contact Details (South Africa Office)</h5>
              <ul>
                <li><a href="#"><i style="vertical-align: bottom;" class="ri-smartphone-line"></i>  +27 (0)  12 644 1199</a></li>
                <li><a href="#"><img style="width: 20px;" src="./images/icons8-fax-30.png" alt="">+27 (0) 12 644 1185 </a></li>
                <li><a href="#"><i style="vertical-align: bottom;" class="ri-mail-line"></i> info@abglobalmining.co.za</a></li>
              </ul>
            </div>
          </div>
        </div>
    </div>
@include('layouts.footer')

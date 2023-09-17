@include('layouts.header')
@include('layouts.nav')

<style>
  ul {
    margin-left: 20px;
  }

  .buttonclass {
  background-color: white;
  color: black;
}

/* Active button style */
.buttonclass.active {
  background-color: #244152;
  color: white !important;
}
</style>

<section style="background-image: url(/images/Rectangle\ 40bnr.png);" class="banner-head">
  <div class="head-content">
    <div class="container-main">
      <h2>Career</h2>
    </div>
  </div>
</section>

<div class="project-detail-head container-main career-pg">
  <p class="" style="padding-top: 10px;padding-bottom: 20px;">Home <span style="color: #B6B6B6;">/ Career</span></p>

  <div class="row">
    <div class="col-lg-6">
      <div style="background: #244152;margin-bottom: 20px;" class="underline"></div>
      <h4 style="font-size:17px;">Join Our Team at ABGM: Empowering Excellence in Mining Consultancy</h4>
      <p style="color: #606060;">Be a part of a dynamic and innovative team dedicated to delivering exceptional consulting services in the mining industry. At ABGM, we are passionate about driving excellence and providing comprehensive solutions that meet the evolving needs of our clients.</p>


      <!-- tab buttons -->
      <div class="w3-bar w3-black main-div-carer-tab mb-4">
        <h4 class="w3-bar-item w3-button tab-btn-career mr-3 mb-0 buttonclass" id="b1" style="cursor: pointer;" onclick="OpenCity('all');Jobslist('all')">All</h4>
        @foreach($countries as $country)
        <h4 class="w3-bar-item w3-button tab-btn-career mr-3 mb-0 buttonclass" style="cursor: pointer;" onclick="OpenCity('{{$country->id}}');Jobslist('{{$country->id}}')">{{$country->country}}</h4>
        @endforeach
      </div>
      <!-- tab buttons end -->
      <div id="all" class="w3-container tab-box city">
        <h4>All</h4>
        @foreach($Alljobs as $alljob)
        <div id="accordion">
        <div class="card">
          <div class="card-header mb-2" id="headingOne">
              <h5 class="mb-0" data-toggle="collapse" data-target="#{{$alljob->job}}" type="button" aria-expanded="true" aria-controls="collapseOne" onclick="DropdownAllJobs('{{$alljob->id}}')">
                <i style="position: absolute;right: 20px;top: 20px;" class="ri-arrow-drop-down-line text-white"></i>
                <button class="btn btn-link text-white job-namee">{{$alljob->job}}</button>
              </h5>
            </div>
			
          <div id="{{$alljob->job}}" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
              <div class="card-body">
                <div class="job-main">
                  <div class="job-row mb-1">
                    <h5 class="mb-0">Job Title: {{$alljob->job}}</h5>
                    <h5 class="mb-0">Reporting To: {{$alljob->reporting_to}}</h5>
                  </div>
                  <div class="job-row mb-1">
                    <h5 class="mb-0">Department: {{$alljob->department}}</h5>
                    <h5 class="mb-0">Job Type: {{$alljob->job_type}}</h5>
                  </div>
                  <div class="job-row mb-1">
                    <h5 class="mb-0">Location: {{$alljob->location}}</h5>
                    <h5 class="mb-0">Date Issued: {{$alljob->date_issued}}</h5>
                  </div>
                </div>
                <h4 class="job-desc mt-2"> <span style="font-weight: 500;color: #244152;">Role Description:</span>{!!$alljob->description!!}</h4>
                <h4 class="Respons-main mb-2">Responsibilities:</h4>
                {!!$alljob->responsibilities!!}
                <h4 class="Respons-main mb-2">Qualification/ Experience:</h4>
                {!!$alljob->qualifications!!}
                <h4 class="Respons-main mb-2">Skills/ Knowledge:</h4>
                {!!$alljob->skills!!}
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>

   

    </div>
    <div style="padding-top: 0;" class="special-rgt col-lg-6">
      <div style="margin-bottom: 20px;background: #7091A4;" class="underline"></div>
      <h4 style="color: #000;padding-bottom: 10px;">Career</h4>
      @if(session()->has('message')) <p class="alert-success">{{session()->get('message')}}</p>@endif
      <form action="{{route('career.submit')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
          <div style="background: #244152;;padding: 20px 20px;border-radius: 10px;width: 100%;" class="box-cntct">
            <h3 style="text-align: center;color: #fff;">Want to join us?</h3>
            <h6 style="text-align: center;padding-bottom: 15px;color: #fff;">Submit your details below. We will be in touch if there is any suitable opportunity for you.</h6>
            <input style="border: none;" type="text" name="firstname" class="form-control form-contact" placeholder="First Name">
            <input style="border: none;" type="text" name="lastname" class="form-control form-contact" placeholder="Last Name">
            <input style="border: none;" type="email" name="email" class="form-control form-contact" placeholder="Email">
            <input style="border: none;" type="number" name="phone" class="form-control form-contact" placeholder="Phone Number">

            <select style="width: 100%;padding: 8px;margin-bottom: 20px;border: none;" id="mySelect" name="job">
              <option value="" selected disabled>Select Job Disipline</option>
              @foreach($Alljobs as $job)
              <option value="{{$job->id}}">{{$job->job}}</option>
              @endforeach
            </select>

            <label style="color: #fff;" for="myfile">Select a file:</label>
            <input type="file" id="myfile" name="myfile"><br><br>
            @error('myfile') <p class="alert-danger">{{$message}}</p> @enderror
            <button style="color: #000;    background: #fff;" class="btn">Submit <i style="vertical-align: bottom;" class="ri-arrow-right-line"></i></button>
          </div>
        </div>
      </form>
    </div>
  </div>

</div>
<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script>

	 $('.buttonclass').click(function() {
    // Remove 'active' class from all buttons
    $('.buttonclass').removeClass('active');
    
    // Add 'active' class to the clicked button
    $(this).addClass('active');
  });
	
function OpenCity(val)
{
  $.post("/get-job",{country_id:val,_token: "{{ csrf_token() }}"},function(result){
          
                $('#all').html(result);
            });
}

function DropdownAllJobs(val)
{
//  alert(val);
  $.post("/get-jobs",{jobid:val,_token: "{{ csrf_token() }}"},function(result){
          
                $('#mySelect').html(result);
                // alert(html(result));
            });
}

function DropdownJobs(val)
{
//  alert(val);
  $.post("/get-joblist",{jobid:val,_token: "{{ csrf_token() }}"},function(result){
          
                $('#mySelect').html(result);
                // alert(html(result));
            });
}

function Jobslist(val)
{
//  alert(val);
  $.post("/get-alljob",{country_id:val,_token: "{{ csrf_token() }}"},function(result){
          
                $('#mySelect').html(result);
                // alert(html(result));
            });
}

</script>
@include('layouts.footer')



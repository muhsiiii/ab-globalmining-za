@include('layouts.header')
@include('layouts.nav')
<!-- banner  -->
<section style="background-image: url(/images/contact-us.png);" class="banner-head">
  <div class="head-content">
    <div class="container-main">
      <h2>Contact Us</h2>
    </div>
  </div>
</section>
<!-- contact us  -->
<div class="contact-page container-main">
  <p class="contact-us-heading" style="padding-top: 10px;padding-bottom: 20px;">Home <span style="color: #B6B6B6;">/ Contact Us</span></p>
  <div class="row">
    <div class="col-lg-4">
      <div style="background: #244152;margin-bottom: 20px;" class="underline"></div>
      <h4 class="get-in-touch-heading">Get in Touch</h4>
      <p class="get-in-touch-subhead">Have an enquiry ? We would love to help! <br>
        Complete the contact form, and we will get in touch. <br>
        We look forward to connecting with you. </p>
    </div>
    <div class="col-lg-8">
      <div style="background: #244152;" class="contact-form">
        @if(session()->has('message')) <p class="alert-success">{{session()->get('message')}}</p> @endif
        <form action="{{route('contactus.save')}}" method="post">
          @csrf
          <div class="row">
            <div class="col-lg-6 col-md-12">
              <input type="text" name="name" class="form-control form-contact" placeholder="Name">
              @error('name') <p class="alert-danger">{{$message}}</p> @enderror
              <input type="email" name="email" class="form-control form-contact" placeholder="Email">
              @error('email') <p class="alert-danger">{{$message}}</p> @enderror
              <input type="tel" name="phone" class="form-control form-contact" placeholder="Phone Number">
              @error('phone') <p class="alert-danger">{{$message}}</p> @enderror
              <input type="text" name="company_name" class="form-control form-contact" placeholder="Company name">
              @error('company_name') <p class="alert-danger">{{$message}}</p> @enderror
              <input type="text" name="designation" class="form-control form-contact" placeholder="Designation">
              @error('designation') <p class="alert-danger">{{$message}}</p> @enderror
            </div>
            <div class="col-lg-6 col-md-12">
              <textarea style="width:100%; height: 130px;" placeholder="Company Address" name="company_address" class="form-control form-contact" id="exampleFormControlTextarea1" rows="3"></textarea>
              @error('company_address') <p class="alert-danger">{{$message}}</p> @enderror
              <textarea style="width:100%; height: 130px;" placeholder="Message" name="message" class="form-control form-contact" id="exampleFormControlTextarea1" rows="3"></textarea>
              @error('message') <p class="alert-danger">{{$message}}</p> @enderror
              <button type="submit">Submit <i style="vertical-align: middle;" class="ri-arrow-right-line"></i></button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<section style="margin-top: 60px;" class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3590.5164439470077!2d28.1889349!3d-25.8524747!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e95643d1b32a979%3A0xfdc4f2a45db31d00!2sA%26B%20Global%20Mining!5e0!3m2!1sen!2sin!4v1694163520573!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    {{-- <iframe src="https://goo.gl/maps/9vqLTn78FnLCWZKVA" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
</section>
<div class="main-addrsses">
  <div class="country-heading-div primary-bg mb-2">
    <h4 class="text-light text-center country-text-heading">SOUTH AFRICA</h4>
  </div>
  <div class="container-main">
    <div class="row">
      <div class="col-lg-12 mt-1">
        <div class="inner-col-man-address">
          <h5 class="text-center country-descrption primary-color">A&B Global Mining <br> Lakeside 3, Second Floor,
            <br> 263 A West Avenue, Die Hoewes,
            <br> Centurion, 0157, South Africa</h5>
          <div class="adress-numbers text-center">
            <a class="text-center primary-color adress-number" href="tel:+27 11 702 8000">+27 (0) 12 644 1199 / +27 (0) 12 644 1181</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="main-address-second-row">
  <div class="country-heading-div primary-bg mt-3">
    <h4 class="text-light text-center country-text-heading">INDIA</h4>
  </div>
  <div class="container-main">
    <div class="row">
      <div class="col-lg-12 mb-3">
        <div class="inner-col-man-address">
          <h5 class="text-center country-descrption primary-color">A&B Global Mining <br> Office No. A-435, 4th Floor, Block A, Tower A-2, <br> Work Trade Park, Jawahar Lal Nehru Marg, D-Block,<br> Malviya Nagar, Jaipur, Rajasthan, 302017</h5>
          <div class="adress-numbers text-center">
            <a class="text-center primary-color adress-number" href="tel:+91 9414836977">+91 1414047208</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@include('layouts.footer')



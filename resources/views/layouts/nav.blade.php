<div class="contact-navbar">
  <div class="contact-nav">
    <a href="#"><i style="vertical-align: bottom;" class="ri-phone-line"></i> Call : +27 (0) 12 644 1199/81</a>
  </div>
  <div class="contact-nav">
    <a href="#"><i style="vertical-align: bottom;" class="ri-mail-line"></i> info@abglobalmining.co.za</a>
  </div>
  <div class="dropdown">
    <button class="dropbtn  bg-transparent"><i style="vertical-align: text-top;" class="ri-map-pin-line"></i> South Africa <i style="vertical-align: middle;" class="ri-arrow-drop-down-line"></i></button>
    <div class="dropdown-content">
		<a  href="https://abglobalmining.co.in" target="_blank"><h6>India</h6></a>
      <h6>UAE (Opening Soon)</h6>
    </div>
  </div>
  <div style="color: #fff;" class="contact-nav icon-nav">
    <a href="https://twitter.com/ABGlobalMining1" target="_blank"><i style="margin-right: 7px;font-size: 16px;" class="ri-twitter-fill"></i></a>
    <a href="https://www.linkedin.com/company/a-and-b-global-mining/" target="_blank"><i style="margin-right: 7px;font-size: 16px;" class="ri-linkedin-box-fill"></i></a>
    <a href="https://www.instagram.com/abglobalmining/" target="_blank"><i style="margin-right: 7px;font-size: 16px;" class="ri-instagram-fill"></i></a>
    <a href="https://www.facebook.com/people/A-B-Global-Mining/100084538602316/" target="_blank"><i style="font-size: 16px;" class="ri-facebook-fill"></i></a>
  </div>
</div>
<header>
  <div class="container-main">
    <nav class="navbar">
      <a href="{{route('home')}}" class="navbar-logo"><img src="/images/3 1.svg" alt=""></a>
      <ul class="navbar-links">
        <li class="nav-item">
          <a class="nav-link" href="{{route('home')}}">Home</a>
        </li>
        <li class="nav-item sevicdrp">
          <a class="nav-link active" href="{{route('services')}}">Services</a>
          <div class="blockdrp">
            <a href="{{route('servicessingle')}}">Mining services</a>
            <a href="{{route('engineeringservices')}}">Engineering Services</a>
            <a href="{{route('feasibilitystudies')}}"> Feasibility Studies </a>
            <a href="{{route('geolagicalservices')}}"> Geological services</a>
            <a href="{{route('mineclosure')}}"> Environmental and Mine Closure </a>
            <a href="{{route('speclisedservice')}}">Specialised services</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('ourteamlist')}}">Our Team</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('projectdetail')}}">Projects</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('career')}}">Careers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('contactus')}}">Contact us</a>
        </li>
        <div class="menulogo" onclick="toggleCartt()"><img src="/images/menu-line.png" alt=""></div>
      </ul>
    </nav>
  </div>
</header>
<!-- side bar section  -->
<div class="sidecart">
  <div class="navbar-sidebar">
    <ul>
      <li><a class="#" href="{{route('home')}}">Home</a></li>
      <li><a href="{{route('services')}}">Services</a></li>
      <li><a href="{{route('ourteamlist')}}">Our Team</a></li>
      <li><a href="{{route('projectdetail')}}">Projects</a></li>
      <li><a href="{{route('career')}}">Careers</a></li>
      <li><a href="{{route('contactus')}}">Contact us</a></li>
    </ul>
  </div>
  <div class="d-inline closse" onclick="toggleCartt()"><img src="/images/close-circle-line.png" alt=""></div>
</div>
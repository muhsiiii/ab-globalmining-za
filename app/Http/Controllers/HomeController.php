<?php

namespace App\Http\Controllers;

use App\Mail\CareerMail;
use App\Mail\ContactUsMail;
use App\Models\Career;
use App\Models\ContactUs;
use App\Models\Job;
use App\Models\Logo;
use App\Models\LatestNews;
use App\Models\Legacy;
use App\Models\NewCountry;
use App\Models\OurTeams;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index()
    {
		 $logos=Logo::all();
        $data = LatestNews::latest()->first();
        $video = Video::where('id', 1)->first();
        $lagacyprojects=Legacy::where('id',1)->first();
        $lagacycountries=Legacy::where('id',2)->first();
        $lagacydiverse=Legacy::where('id',3)->first();
        $lagacyexperience=Legacy::where('id',4)->first();
        return view('index', compact('data', 'video','logos','lagacyprojects','lagacycountries','lagacydiverse','lagacyexperience'));
    }

    public function CareerHomeSubmit(Request $request)
    {
        request()->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'job' => 'required',
            'myfile' => 'required'
        ]);

        $file_image = request('myfile');
        $extension = $file_image->extension();
        $file_Name = 'job_file' . time() . '.' . $extension;
        $file_image->move(public_path() . '/careers/', $file_Name);

        $user = Career::create([
            'firstname' => $request->input('firstname'),
            'lastname' => $request->input('lastname'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'job' => $request->input('job'),
            'file' => $file_Name,
        ]);



        Mail::to('career@abglobalmining.co.za')->send(new CareerMail($user));
        return redirect()->route('home')->with('message', 'Thank you for applying for the job! We will review your application and get back to you soon');
    }

    public function ContactUsHomeSave(Request $request)
    {
        request()->validate([

            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'company_name' => 'required',
            'designation' => 'required',
            'company_address' => 'required',
            'message' => 'required'
        ]);

        $user = ContactUs::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'company_name' => $request->input('company_name'),
            'designation' => $request->input('designation'),
            'copmany_address' => $request->input('company_address'),
            'message' => $request->input('message'),
        ]);

        Mail::to('Info@abglobalmining.co.in')->send(new ContactUsMail($user));
        return redirect()->route('home')->with('message', 'Thank you for reaching out to us! Our team will be in touch with you shortly.');
    }

    public function Services()
    {
        return view('services');
    }

    public function ServicesSingle()
    {
        return view('services.servicessingle');
    }

    public function EngineeringServices()
    {
        return view('services.engineeringservices');
    }

    public function FeasibilityStudies()
    {
        return view('services.feasibilitystudies');
    }

    public function GeolagicalServices()
    {
        return view('services.geolagicalservices');
    }

    public function MineClosure()
    {
        return  view('services.mineclosure');
    }

    public function SpecialisedService()
    {
        return view('services.speclisedservice');
    }

    public function OurTeamList()
    {
        $executive_teams = OurTeams::where('categories', 'executive teams')->get();
        $team_members = OurTeams::where('categories', 'team members')->get();
        $associates = OurTeams::where('categories', 'associates')->get();

        return view('ourteamlist', compact('executive_teams', 'team_members', 'associates'));
    }

    public function ProjectDetail()
    {
        return view('projectdetail');
    }

    public function Career()
    {
        $Alljobs = Job::where('status',1)->get();
        $countries = NewCountry::where('status',1)->get();
        return view('career', compact('Alljobs', 'countries'));
    }


    public function Getjob(Request $req)

    {
        $cid = $req->country_id;
        $countryname=NewCountry::where('id',$cid)->first();
        if ($cid == 'all') {
            $jobs = Job::where('status',1)->get();
            $output = '';
            $output .= ' <h4>All</h4>';
            foreach ($jobs as $j) {
                $output .= '

<div id="accordion">
<div class="card">
  <div class="card-header mb-2" id="headingOne">
    <h5 class="mb-0" data-toggle="collapse" data-target="#'.$j->job.'" type="button" aria-expanded="true" aria-controls="collapseOne">
    <i style="position: absolute;right: 20px;top: 20px;" class="ri-arrow-drop-down-line text-white"></i>
      <button class="btn btn-link text-white job-namee" data-toggle="collapse" data-target="#' . $j->job . '" type="button" aria-expanded="true" aria-controls="collapseOne" onclick="DropdownAllJobs(' . $j->id . ')">' . $j->job . '</button>
    </h5>
  </div>
  <div id="' . $j->job . '" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
    <div class="card-body">
    <div class="job-main">
    <div class="job-row mb-1">
      <h5 class="mb-0">Job Title: '.$j->job.'</h5>
      <h5 class="mb-0">Reporting To: '.$j->reporting_to.'</h5>
    </div>
    <div class="job-row mb-1">
      <h5 class="mb-0">Department: '.$j->department.'</h5>
      <h5 class="mb-0">Job Type: '.$j->job_type.'</h5>
    </div>
    <div class="job-row mb-1">
      <h5 class="mb-0">Location: '.$j->location.'</h5>
      <h5 class="mb-0">Date Issued: '.$j->date_issued.'</h5>
    </div>
  </div>
  <h4 class="job-desc mt-2"> <span style="font-weight: 500;color: #244152;">Role Description:</span>'.$j->description.'</h4>
  <h4 class="Respons-main mb-2">Responsibilities:</h4>
  '.$j->responsibilities.'
  <h4 class="Respons-main mb-2">Qualification/ Experience:</h4>
  '.$j->qualifications.'
  <h4 class="Respons-main mb-2">Skills/ Knowledge::</h4>
  '.$j->skills.'
    </div>
  </div>
</div>
</div>
';
            }



            echo $output;
        } else {
            $jobs = Job::where('country', $cid)->where('status',1)->get();
            $output = '';
            $a = '#';

            $output .= ' <h4>' . $countryname->country . '</h4>';
            foreach ($jobs as $j) {
                $output .= '

<div id="accordion">
<div class="card">
  <div class="card-header mb-2" id="headingOne">
    <h5 class="mb-0" data-toggle="collapse" data-target="#'.$j->job.'" type="button" aria-expanded="true" aria-controls="collapseOne">
    <i style="position: absolute;right: 20px;top: 20px;" class="ri-arrow-drop-down-line text-white"></i>
      <button class="btn btn-link text-white job-namee" data-toggle="collapse" data-target="' . $a . $j->job . '" type="button" aria-expanded="true" aria-controls="collapseOne" onclick="DropdownJobs(' . $j->id . ')">' . $j->job . '</button>
    </h5>
  </div>
  <div id="' . $j->job . '" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
    <div class="card-body">
    <div class="job-main">
    <div class="job-row mb-1">
      <h5 class="mb-0">Job Title: '.$j->job.'</h5>
      <h5 class="mb-0">Reporting To: '.$j->reporting_to.'</h5>
    </div>
    <div class="job-row mb-1">
      <h5 class="mb-0">Department: '.$j->department.'</h5>
      <h5 class="mb-0">Job Type: '.$j->job_type.'</h5>
    </div>
    <div class="job-row mb-1">
      <h5 class="mb-0">Location: '.$j->location.'</h5>
      <h5 class="mb-0">Date Issued: '.$j->date_issued.'</h5>
    </div>
  </div>
  <h4 class="job-desc mt-2"> <span style="font-weight: 500;color: #244152;">Role Description:</span>'.$j->description.'</h4>
  <h4 class="Respons-main mb-2">Responsibilities:</h4>
  '. $j->responsibilities.'
  <h4 class="Respons-main mb-2">Qualification/ Experience:</h4>
  '.$j->qualifications.'
  <h4 class="Respons-main mb-2">Skills/ Knowledge::</h4>
  '.$j->skills.'
    </div>
  </div>
</div>
</div>
';
            }
            echo $output;
        }
    }

    public function Getjoblist(Request $req)
    {
        $jid=$req->jobid;
        $getcountryid=Job::where('id',$jid)->first();
    $jobs=Job::where('country',$getcountryid->country)->where('status',1)->get();

    $v='';
    $val="Choose..";

    // echo "<option disabled value=".$v.">".$val."</option>";

        foreach($jobs as $j)
        {
            if($j->id==$jid)
            {
                echo "<option value=".$j->id." selected>".$j->job."</option>";
            }else{
                echo "<option value=".$j->id." >".$j->job."</option>";
            }

        }
    }

    public function Alljob(Request $req)
    {
        $jid=$req->jobid;
        // $getcountryid=Job::where('id',$jid)->first();
    $jobs=Job::where('status',1)->get();

    $v='';
    $val="Choose..";

    // echo "<option disabled value=".$v.">".$val."</option>";

        foreach($jobs as $j)
        {
            if($j->id==$jid)
            {
                echo "<option value=".$j->id." selected>".$j->job."</option>";
            }else{
                echo "<option value=".$j->id." >".$j->job."</option>";
            }

        }
    }

    public function GetAlljob(Request $req)
    {
        $cid=$req->country_id;
        // print_r($cid);
        // die;
        if($cid=='all'){
            $jobs=Job::where('status',1)->get();
        }else{
            $jobs=Job::where('country',$cid)->where('status',1)->get();
        }

    $v='';
    $val="Choose..";

    // echo "<option value=".$v.">".$val."</option>";

        foreach($jobs as $j)
        {
           echo "<option value=".$j->id.">".$j->job."</option>";
        }
    }




    public function CareerSubmit(Request $request)
    {
        request()->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'job' => 'required',
            'myfile' => 'required'
        ]);

        $file_image = request('myfile');
        $extension = $file_image->extension();
        $file_Name = 'job_file' . time() . '.' . $extension;
        $file_image->move(public_path() . '/careers/', $file_Name);

        $user = Career::create([

            'firstname' => $request->input('firstname'),
            'lastname' => $request->input('lastname'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'job' => $request->input('job'),
            'file' => $file_Name,
        ]);

        Mail::to('career@abglobalmining.co.za')->send(new CareerMail($user));

        return redirect()->route('career')->with('message', 'Thank you for applying for the job! We will review your application and get back to you soon');
    }

    public function ContactUs()
    {
        return view('contact');
    }

    public function ContactUsSave(Request $request)
    {
        request()->validate([

            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'company_name' => 'required',
            'designation' => 'required',
            'company_address' => 'required',
            'message' => 'required'
        ]);

        $user = ContactUs::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'company_name' => $request->input('company_name'),
            'designation' => $request->input('designation'),
            'copmany_address' => $request->input('company_address'),
            'message' => $request->input('message'),
        ]);

        Mail::to('info@abglobalmining.co.za')->send(new ContactUsMail($user));
        return redirect()->route('contactus')->with('message', 'Thank you for reaching out to us! Our team will be in touch with you shortly.');
    }

    public function AllNews()
    {
        $datas = LatestNews::all();
        return view('allnews', compact('datas'));
    }

    public function Gamsberg()
    {
        return view('gamsberg');
    }

    public function ProjectSingle()
    {
        return view('projectsingle');
    }

    public function PreskaProject()
    {
        return view('preskaproject');
    }

    public function Location()
    {

        $locationMap=NewCountry::orderBy('id','DESC')->limit(1)->where('status',1)->first();
        $locations=NewCountry::where('id','!=',$locationMap->id)->orderBy('id','DESC')->where('status',1)->get();
        return view('location',compact('locations','locationMap'));
    }

    public function Getmap(Request $req)

    {
        $cid = $req->country_id;
        $countryname=NewCountry::where('id',$cid)->first();
        $output='';
                $output .= '

                <div class="adrss-map-sec">';
              print_r($countryname->url);

            $output .= ' </div>
';
            echo $output;
        }
    }




<?php

namespace App\Http\Controllers;

use App\Models\Career;
use App\Models\ContactUs;
use App\Models\Job;
use App\Models\Logo;
use App\Models\LatestNews;
use App\Models\NewCountry;
use App\Models\OurTeams;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function LatestNewsForm()
    {
        return view('admin.latest_news_form');
    }

    public function LatestNews()
    {
        $datas = LatestNews::all();
        return view('admin.latest_news', compact('datas'));
    }

    public function LatestNewsSubmit(Request $request)
    {
        request()->validate([
            'image' => 'required|image|dimensions:width=800,height=800',
            'title' => 'required',
            'url' => 'required',
            'description' => 'required',
        ]);

        $file_image = request('image');
        $extension = $file_image->extension();
        $file_Name = 'Latest_news' . time() . '.' . $extension;
        $file_image->move(public_path() . '/latest_news/', $file_Name);

        $user = LatestNews::create([
            'image' => $file_Name,
            'title' => $request->input('title'),
            'url' => $request->input('url'),
            'description' => $request->input('description'),
        ]);

        return redirect()->route('latestnews')->with('message', 'News Added Successffully..!!');
    }

    public function LatestNewsEdit($id)
    {
        $data = LatestNews::find($id);
        return view('admin.latestnews_edit', compact('data'));
    }

    public function LatestNewsUpdate()
    {
        request()->validate([

            'image' => 'nullable|image|dimensions:width=800,height=800',
            'title' => 'required',
            'url' => 'required',
            'description' => 'required',
        ]);

        $id = request('id');
        $data = LatestNews::find($id);
        $input = [

            'title' => request('title'),
            'url' => request('url'),
            'description' => request('description')

        ];

        if (request()->hasFile('image')) {
            $file_image = request('image');
            $extension = $file_image->extension();
            $file_Name = 'Latest_news' . time() . '.' . $extension;
            $file_image->move(public_path() . '/latest_news/', $file_Name);

            $input['image'] = $file_Name;
        }

        $data->update($input);

        return redirect()->route('latestnews')->with('message', 'News Updated Succesfully!!');
    }

    public function LatestNewsDelete($id)
    {
        $News = LatestNews::findOrFail($id);

        if (Storage::disk('latest_news')->exists($News->image)) {
            Storage::disk('latest_news')->delete($News->image);
        }

        $News->delete();

        return redirect()->route('latestnews')->with('message', 'News Deleted Successffully..!!');
    }

    public function OurTeamsForm()
    {
        return view('admin.ourteams_form');
    }

    public function OurTeams()
    {
        $datas = OurTeams::all();
        return view('admin.ourteams', compact('datas'));
    }

    public function OurTeamsSave(Request $request)
    {
        $request->validate([

            'image' => 'required|image|dimensions:width=441,height=300',
            'name' => 'required',
            'url' => 'nullable',
            'position' => 'required',
            'description' => 'required',
            'categories' => 'required',
            'education' => 'nullable'

        ]);

        $file_image = $request->file('image');
        $extension = $file_image->extension();
        $file_Name = 'our_teams' . time() . '.' . $extension;
        $file_image->move(public_path() . '/our_teams/', $file_Name);

        OurTeams::create([
            'image' => $file_Name,
            'name' => $request->input('name'),
            'url' => $request->input('url'),
            'position' => $request->input('position'),
            'description' => $request->input('description'),
            'categories' => $request->input('categories'),
            'education' => $request->input('education')
        ]);

        return redirect()->route('ourteams')->with('message', 'Team Added Successffully..!!');
    }

    public function OurTeamsEdit($id)
    {
        $team = OurTeams::find(decrypt($id));
        return view('admin.ourteams_edit', compact('team'));
    }

    public function OurTeamsUpdate(Request $request)
    {
        $request->validate([
            'image' => 'nullable|image|dimensions:width=441,height=300',
            'name' => 'required',
            'position' => 'required',
            'url' => 'nullable',
            'description' => 'required',
            'education' => 'nullable'
        ]);

        $id = $request->input('id');
        $data = OurTeams::find($id);
        $input = [

            'name' => $request->input('name'),
            'position' => $request->input('position'),
            'url' => $request->input('url'),
            'description' => $request->input('description'),
            'education' => $request->input('education')

        ];

        if ($request->hasFile('image')) {
            $file_image = $request->file('image');
            $extension = $file_image->extension();
            $file_Name = 'our_teams' . time() . '.' . $extension;
            $file_image->move(public_path() . '/our_teams/', $file_Name);

            $input['image'] = $file_Name;
        }

        $data->update($input);

        return redirect()->route('ourteams')->with('message', 'Teams Updated Succesfully!!');
    }

    public function OurTeamsDestroy($id)
    {
        $team = OurTeams::find(decrypt($id));
        if (Storage::disk('our_teams')->exists($team->image)) {
            Storage::disk('our_teams')->delete($team->image);
        }

        $team->delete();

        return redirect()->route('ourteams')->with('message', 'Teams Deleted Successffully..!!');
    }

    public function Jobs()
    {
        $jobs=Job::where('status',1)->get();
        return view('admin.jobs',compact('jobs'));
    }

    public function NewJob()
    {   $countries=NewCountry::where('status',1)->get();
        return view('admin.add_job',compact('countries'));
    }

    public function NewJobSave(Request $request)
    {
       

        $validate = $request->validate([
            'job_title' => 'nullable',
            'country' => 'nullable',
            'report' => 'nullable',
            'department' => 'nullable',
            'job_type' => 'nullable',
            'location' => 'nullable',
            'dateissue' => 'nullable',
            'role' => 'nullable',
            'responsibility' => 'nullable',
            'skill' => 'nullable',
            'experience' => 'nullable',

        ]);

        Job::create([

            'job' => $request->job_title,
            'description' => $request->role,
            'country' => $request->country,
            'reporting_to' => $request->report,
            'department' => $request->department,
            'location' => $request->location,
            'date_issued' => $request->dateissue,
            'job_type' => $request->job_type,
            'responsibilities' => $request->responsibility,
            'skills' => $request->skill,
            'qualifications' => $request->experience,
            
        ]);

        return redirect()->route('jobs')->with('message', 'Job Added Successfully..!!');
    }

    public function EditJob($id)
    {
        $job=Job::find($id);
        $countries=NewCountry::where('status',1)->get();
         return view('admin.edit_job',compact('job','countries'));
    }


     public function UpdateJob(Request $request)
    {
        $validate = $request->validate([
            'job_title' => 'nullable',
            'country' => 'nullable',
            'report' => 'nullable',
            'department' => 'nullable',
            'job_type' => 'nullable',
            'location' => 'nullable',
            'dateissue' => 'nullable',
            'role' => 'nullable',
            'responsibility' => 'nullable',
            'skill' => 'nullable',
            'experience' => 'nullable',

        ]);

        $id = $request->input('id');
        $data = Job::find($id);
        $input = [

             'job' => $request->job_title,
            'description' => $request->role,
            'country' => $request->country,
            'reporting_to' => $request->report,
            'department' => $request->department,
            'location' => $request->location,
            'date_issued' => $request->dateissue,
            'job_type' => $request->job_type,
            'responsibilities' => $request->responsibility,
            'skills' => $request->skill,
            'qualifications' => $request->experience,

        ];

        $data->update($input);

        return redirect()->route('jobs')->with('message', 'Job Updated Succesfully!!');
    }

    public function DestroyJob(request $request,$id)
    {
        // $delete=Job::find($id);

    }

    public function GetCountry()
    {
        $countries=NewCountry::where('status',1)->get();
        return view('admin.country',compact('countries'));
    }

    public function Country()
    {
        return view('admin.new_country');
    }

    public function NewCountry(Request $request)
    {
        $validate=$request->validate([
            'new_country'=>'required',
            'address'=>'required',
            'tel'=>'required',
            'fax'=>'required',
            'url'=>'required',
            
        ]);

       NewCountry::create([
        'country'=>$request->input('new_country'),
        'address'=>$request->input('address'),
        'tel'=>$request->input('tel'),
        'fax'=>$request->input('fax'),
        'url'=>$request->input('url'),
        
       ]);

     return redirect()->route('country')->with('message','Country and Location added Successfully..!!');
    
    }

    public function EditCountry($id)
    {
        $country=NewCountry::find($id);
        // return $country;
        // die;
        return view('admin.edit_country',compact('country'));
    }

    public function UpdateCountry(Request $request)
    {
       
        $request->validate([
            'new_country' => 'required',
            'address' => 'required',
            'tel' => 'required',
            'fax' => 'required',
            'url' => 'required'
        ]);

        $id = $request->input('id');
        $data = NewCountry::find($id);
        $input = [

            'country' => $request->input('new_country'),
            'address' => $request->input('address'),
            'tel' => $request->input('tel'),
            'fax' => $request->input('fax'),
            'url' => $request->input('url'),
        ];

        $data->update($input);

        return redirect()->route('getcountry')->with('message', 'Country Updated Succesfully!!');
    }

    public function DestroyCountry($id)
    {
        // return "hello";
        // die;
    }

    public function Careertable()
    {
        $careers = Career::all();
        return view('admin.career', compact('careers'));
    }

    public function ContactUS()
    {
        $contacts = ContactUs::all();
        return view('admin.contact_us', compact('contacts'));
    }

    public function ContactForm()
    {
        return view('admin.contact_form');
    }

    public function DeleteCountry(Request $request)
   {
   

      NewCountry::where('id',$request->country_id)->update([
        'status'=>0
      ]);

      $jobs=Job::where('country',$request->country_id)->get();
      
      foreach($jobs as $j)
      {
        Job::where('id',$j->id)->update([
            'status'=>0
          ]);
      }

      echo "Success";
   


   }

   
   public function Deletejob(Request $request)
   {
   
        Job::where('id',$request->job_id)->update([
            'status'=>0
          ]);
   

      echo "Success";
   


   }
	
	public function Logo()
    {
        $logos = Logo::all();
        return view('admin.logos', compact('logos'));
    }

    public function LogoForm()
    {
        return view('admin.logos_form');
    }

    public function LogoSave(Request $request)

    {
        $request->validate([
            'logo' => 'required|image|dimensions:min_width=200,max_width=300,min_height=100,max_height=200',
        ]);

        $file_image = $request->file('logo');
        $extension = $file_image->extension();
        $file_Name = 'logo_' . time() . '.' . $extension;
        $file_image->move(public_path() . '/logos/', $file_Name);

        Logo::create([
            'logos' => $file_Name,
        ]);

        return redirect()->route('logotable')->with('message', 'Logo Added Successffully..!!');
    }


    public function LogoEdit($id)
    {
        $logo = Logo::find($id);
        return view('admin.logo_edit', compact('logo'));
    }

    public function LogoUpdate(Request $request)

    {
        $request->validate([

            'logo' => 'required|image|dimensions:min_width=200,max_width=300,min_height=100,max_height=200',
  
        ]);

        $id = $request->input('id');
        $data = Logo::find($id);
        $input = [];

        if ($request->hasFile('logo')) {
            $file_image = $request->file('logo');
            $extension = $file_image->extension();
            $file_Name = 'logo_' . time() . '.' . $extension;
            $file_image->move(public_path() . '/logos/', $file_Name);

            $input['logos'] = $file_Name;
        }

        $data->update($input);

        return redirect()->route('logotable')->with('message', 'Logo Updated Succesfully!!');
    }

    public function LogoDestroy($id)
    {
        $logo=Logo::find($id);
        $logo->delete();

        return redirect()->route('logotable')->with('message','Logo Deleted Succesffully..!!');
    }

   
}

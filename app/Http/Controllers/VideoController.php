<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class VideoController extends Controller
{

    public function VideoForm()
    {
        return view('admin.video_upload_form');
    }

    public function VideoUpload(Request $request)
    { {
            $validatedData = $request->validate([
                'video' => 'required|mimetypes:video/mp4,video/webm,video/ogg',
            ]);

            if ($request->hasFile('video')) {
                $video = $request->file('video');
                $video_name = time() . '.' . $video->getClientOriginalExtension();
                $destinationPath = public_path('/videos');
                $video->move($destinationPath, $video_name);
            } else {
                dd('Request Has No File');
            }

            Video::create([
                'video' => $video_name,
            ]);

            return redirect()->route('admin.home')->with('message', 'Video Inserted Successfully..!!');
        }
    }

    public function VideoUpdateForm($id)
    {
        $data = Video::find($id);
        return view('admin.video_update_form', compact('data'));
    }

    public function VideoUpdate(Request $request)
    {
        request()->validate([
            'video' => 'required|mimetypes:video/mp4,video/webm,video/ogg',
        ]);

        $id = $request->input('id');
        $file = Video::find($id);

        if (request()->hasFile('video')) {
            $file_image = request('video');
            $extension = $file_image->extension();
            $file_Name = 'video_' . time() . '.' . $extension;
            $file_image->move(public_path() . '/videos/', $file_Name);

            $input['video'] = $file_Name;

            //     if (Storage::disk('public')->exists('videos/' . $file)) {
            //         Storage::disk('public')->delete('videos/' . $file);
            // }

            Video::where('id', $id)->update(['video' => $file_Name]);
            return redirect()->route('admin.home')->with('message', 'Video Updated Successfully..!!');
        }
    }
}

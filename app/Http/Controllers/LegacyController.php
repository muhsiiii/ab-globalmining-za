<?php

namespace App\Http\Controllers;

use App\Models\Legacy;
use Illuminate\Http\Request;

class LegacyController extends Controller
{
    public function LegacyList()
    {
        $legacies=Legacy::all();
        return view('admin.legacy_list',compact('legacies'));
    }

    public function LegacyUpdate(Request $request){

        $legacyupdate=Legacy::where('id',$request->lid)->update([
            'content'=>$request->count
        ]);

        if($legacyupdate){
            $data['success']='success';
        }else{
            $data['error']='error';
        }

        echo json_encode($data);

    }
}

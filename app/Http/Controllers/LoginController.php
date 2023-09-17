<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }

    public function AdminHome()
    {

        $video = Video::where('id', 1)->first();

        return view('admin.adminhome', ['video' => $video]);
    }

    public function DoLogin()
    {
        $input = ['username' => request('username'), 'password' => request('password')];
        if (auth()->attempt($input)) {
            return redirect()->route('admin.home');
        } else {
            return redirect()->route('login')->with('message', 'username or password invalid');
        }
    }

    public function logOut()
    {
        auth()->logout();
        return redirect()->route('login');
    }
}

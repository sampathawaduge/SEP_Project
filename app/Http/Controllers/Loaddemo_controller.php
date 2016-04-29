<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class Loaddemo_controller extends Controller
{
    //
    public function demo()
    {
        return view('Template1.index');
        
    }
    public function about()
    {
        return view('Template1.about');
    }
    public function post()
    {
        return view('Template1.post');
    }
    public function contact()
    {
        return view('Template1.contact');
    }
}

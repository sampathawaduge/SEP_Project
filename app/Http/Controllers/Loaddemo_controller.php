<?php

namespace App\Http\Controllers;

use App\User;
use App\Post;
use Illuminate\Http\Request;

use App\Http\Requests;

class Loaddemo_controller extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('/temp');
    }
    public function demo()
    {
        return view('Templates.Temp1.first');

    }
    public function about()
    {
        return view('Templates.about');
    }
    public function post()
    {
        return view('Templates.post');
    }
    public function contact()
    {
        return view('Templates.contact');
    }
    public function edit()
    {
//        return view('Edit_form.form');
////        return view('sites.mysite');
          return view('sitecreation.createsite');
    }
    public function editpost()
    {
        $allpost=Post::all();
        return view('posts.addpost')->with('test',$allpost);
    }

    public function live()
    {
        return view('EditTemplate.Tem1.index');
    }
    public function live_demo()
    {
        return view('EditTemplate.Tem1.index');
    }
    public function live_about()
    {
        return view('EditTemplate.Tem1.about');
    }
    public function live_post()
    {
        return view('EditTemplate.Tem1.post');
    }
    public function live_contact()
    {
        return view('EditTemplate.Tem1.contact');
    }
    


}

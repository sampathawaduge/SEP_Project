<?php

namespace App\Http\Controllers;




use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Auth;
use Hash;

use App\Http\Requests;
use App\User;


class profileController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user =User::all();
        return view('/profile' , compact('user'));
    }




    public function update(Request $request){


        $user = User::find(Input::get('id'));

        $user->name = $request->name;
        $user->email = $request->email;
        $user->status = $request->status;
        $user->BOD = $request->BOD;
        $user->address = $request->address;
        $user->job = $request->job;
        $user->mobile = $request->mobile;


        if ($user->update()) {
            return Redirect('/profile#settings')
                ->with('message', 'Details Updated');//Sucessfully Saved
        }
        else{
            return http_response_code(500);//Internal Server Error
        }
    }


        public function link(Request $request){

            $user = User::find(Input::get('id'));

            $user->fb = $request->fb;
            $user->youtube = $request->youtube;
            $user->google = $request->google;
            $user->twiter = $request->twiter;
            $user->instagram = $request->instagram;



            if ($user->save()) {
                return Redirect::back()
                    ->with('message', 'Details Updated');//Sucessfully Saved
            }
            else{
                return http_response_code(500);//Internal Server Error
            }

        }

    public function picture()
    {
        $user = User::find(Input::get('id'));

        $image = Input::file('profile_pic');
        $filename = time() . "-" . $image->getClientOriginalExtension();
        $path = public_path('img/' . $filename);
        Image::make($image->getRealPath())->resize(222, 205)->save($path);

        $user->profile_pic = 'img/' . $filename;

        $user->save();

        return Redirect::back()
            ->with('message', 'Profile Picture Updated');;
    }


    public function changePwd(Request $request)
    {


        $user = User::find(Input::get('id'));

        $curPw = $request->currentp;
        $newp = $request->newp;
        $rep = $request->rep;

        if(strlen($newp) < 6)
        {
            return Redirect('/profile#settings')
                ->with('wmessage', 'Enter a Password with more than 6 characters!');
        }

        else if(Hash::check($curPw, $user->password) && $newp == $rep)
        {
            $newp = bcrypt($newp);
            $user->password = $newp;
            $user->save();
            return Redirect('/profile')
                ->with('pwmessage', 'Password Updated!');
        }

        else if(!Hash::check($curPw, $user->password))
        {
            return Redirect('/profile')
                ->with('wmessage', 'Incorrect Password!');
        }

        else if(Hash::check($curPw, $user->password) && $newp != $rep)
        {
            return Redirect('/profile')
                ->with('wmessage', 'Type The New Password Again!');
        }


    }
}

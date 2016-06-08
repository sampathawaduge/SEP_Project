<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\slideimage;
use App\visitormail;
use App\Template;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;

class MainController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $image = slideimage::where('status', 2)->get();
        $imagefirst = slideimage::where('status', 1)->get();
        //$imagecount = slideimage::where('status', 1)->get()->count();
        // var_dump($imagecount);
        return view('welcome' , compact('image'),compact('imagefirst'),compact('imagecount'));
    }

    public function view_mail()
    {
        $visitormails = visitormail::where('reply', 'not yet reply')->get();
        $allmail=visitormail::all();
        return view('mail_view' , compact('visitormails'),compact('allmail'));
    }

    public function store_mail(Request $request){

        $mail = new visitormail();
        $mail->sender_name = Input::get('name');
        $mail->sender_email = Input::get('email');
        $mail->subject = Input::get('subject');
        $mail->description = Input::get('message');

        $mail->save();

        return back();

    }
    

    public function ignor_mail(Request $request , visitormail $mail){

        $reply = "Ignor";
        $mail->reply = $reply;
        $mail->update();
        return redirect("/templates/mail/view");
    }

    public function reply_mail(Request $request , visitormail $mail){

        $reply = Input::get('reply_message');
        $mail->reply = $reply;
        $data['email']=$mail->sender_email;
        $data['name']=$mail->sender_name;
        $data['body']=$reply;
        $data['reply_by']=Auth::user()->name;
        $mail->reply_by = Auth::user()->name;
        //view('mailbody',compact($reply));
       // var_dump($data);
        Mail::send('mailbody', ['data' => $data], function ($m) use ($data){
            $m->to($data['email'], $data['name'])->subject('Your Reminder!')->from('azinabcoc@gmail.com');
        });
        $mail->update();
        return redirect("/templates/mail/view");

    }

}

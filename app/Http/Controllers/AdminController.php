<?php

namespace App\Http\Controllers;

use App\Template;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Auth;
use Ibox\Uploader\Uploader;

use App\User;

class AdminController extends Controller
{
    public function index(){  
        
        return view('add_temp');
    }

    public function store(Request $request, Uploader $uploader){

        $image = Input::file('temp_pic');
        $source = Input::file('temp_source');

        $filename = Input::get('name') . '-image.blade.' . $image->getClientOriginalExtension();
        //$filename2 = Input::get('name') . '-source.' . $source->getClientOriginalExtension();
        $destinationPath = 'C:/xampp/htdocs/SEP_Project/resources/views/'; // upload path
        $extension = $source->getClientOriginalExtension(); // getting image extension
        $filename2 = Input::get('name') . '-source.'.$extension; // renameing image
        $source->move($destinationPath, $filename2);


        Image::make($image)->save('images/' . $filename);

        Image::make($image)->resize(150, 150)->save('images/previews/' . $filename);

        $Template = new Template;
        $Template->name = Input::get('name');
        $Template->description = Input::get('description');
        $Template->price = Input::get('price');
        $Template->colour = Input::get('colour');
       // $Template->url = Input::get('url');
        $Template->temp_pic = $filename;
        $Template->temp_source = $filename2;

        $Template->save();


        return back();

    }

    public function show( Template $temp){


        $pieces = explode(".", $temp->temp_source);
        return view($pieces[0]);
        
    }
    public function view(){


         $templates = Template::all();

         return view('temp_update' , compact('templates'));

    }

    public function edit(Template $temp){

        return view('edit_template' , compact('temp'));

    }

    public function update(Request $request , Template $temp){

        //return $request;

        $image = Input::file('temp_pic');
        $source = Input::file('temp_source');

        if($image != null ) {
            $filename = Input::get('name') . '-image.' . $image->getClientOriginalExtension();
            Image::make($image)->save('images/' . $filename);
            Image::make($image)->resize(150, 150)->save('images/previews/' . $filename);
            $temp->temp_pic = $filename;
        }
        
        if($source != null) {
            $filename2 = Input::get('name') . '-source.' . $source->getClientOriginalExtension();
            $temp->temp_source = $filename2;
        }
       
        $temp->name = $request->name;
        $temp->description = $request->description;
        $temp->colour = $request->colour;
        $temp->price = $request->price;
        $temp->url = $request->url;

        $temp->update();

        return redirect("/templates/edit");

    }

    public function delete(Template $temp){

        $temp->delete();

        return back();
    }

}

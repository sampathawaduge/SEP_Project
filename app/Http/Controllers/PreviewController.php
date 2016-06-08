<?php

namespace App\Http\Controllers;
use App\About;
use App\Post;
use App\Site;
use App\template;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\TemplateDataRequest;
use Illuminate\Support\Facades\DB;

class PreviewController extends Controller
{
    public function insert(TemplateDataRequest $request,$id)
    {
        $site=new Site;
        $site->hostname=$request->hostname;
        $site->userid=1;
        $site->templateid=$id;
        $site->sitename=$request->sitename;
        $site->save();

        $about=new About;
        $about->siteid=$site->siteid;
        $about->userid=1;
        $about->name=$request->name;
        $about->age=$request->age;
        $about->qualifications=$request->qualifications;
        $about->about=$request->about;
        $about->save();

        $post=new Post;
        $post->userid=1;
        $post->siteid=$site->siteid;
        $post->description=$request->description;
        $post->image='null';
        $post->save();

        $sites=Site::all();
        return view('sites.mysite')->with('sites',$sites);

    }
    public function read()
    {
//        $post=Post::all();
//        $sites=Site::all();
//       return view('site')->with('sites',$sites)->with('post',$post);
        $template=template::all();
        $sites=Site::all();
        return view('sites.mysite')->with('sites',$sites)->with('temp',$template);



    }
    public function viewsite($siteid)
    {


        $site=DB::table('sites')->where('siteid',$siteid)->first();
        $templateid=$site->templateid;
        $data=template::all()->where('id',$templateid);
        $color;
        foreach($data as $key)
        {
          $color=$key->colour;
        }
        $about=DB::table('abouts')->where('siteid',$siteid)->first();
        $post=DB::table('posts')->where('siteid',$siteid)->first();

        return view('Live_templates.Temp1.first',compact('color'))->with('about',$about)->with('post',$post)->with('site',$site);

    }
    public function deletesite($siteid)
    {
        $val1=DB::table('sites')->where('siteid', '=', $siteid)->delete();
        $val2=DB::table('abouts')->where('siteid', '=', $siteid)->delete();
        $val3=DB::table('abouts')->where('siteid', '=', $siteid)->delete();
        $val4=DB::table('posts')->where('siteid', '=', $siteid)->delete();

        $sites=Site::all();
        return view('sites.mysite')->with('sites',$sites);

    }
    public function updatetemplateid($id)
    {
        $count=DB::table('sites')->where('templateid',$id);
        if($count)
        {
          return "Have";
        }
        else {
          return "No Data";
        }
    }

}

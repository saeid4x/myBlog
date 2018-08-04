<?php

namespace App\Http\Controllers;

use App\category;
use App\comment;
use App\contact;
use App\posts;
use Illuminate\Http\Request;

class indexController extends Controller
{
    public function aboutMe()
    {
        return view('about');

    }

    public function fillIndex()
    {
//        $cat_programming=category::with('posts')->where('title','برنامه نویسی')->take(3)->get();
//        $cat_mobProgramming=category::with('posts')->where('title','برنامه نویسی موبایل')->take(3)->get();
//        return view('index',compact('cat_programming','cat_mobProgramming'));

    }
    public function contact()
    {
        return  view('contactMe');

    }

    public function contact_post(Request $request)
    {
        $contact=new contact();
        $contact->name=$request->name;
        $contact->email=$request->email;
        $contact->subject=$request->subject;
        $contact->body=$request->body;
        $contact->save();
        return back();



    }
    public function index()
    {
        $cat_programming=category::with(['posts'=>function($query){$query->orderBy('id','desc')->take(3);}])->where('title','برنامه نویسی')->get();
        $cat_MobProgramming=category::with(['posts'=>function($query){$query->orderBy('id','desc')->take(3);}])->where('title','برنامه نویسی موبایل')->get();
        $cat_db=category::with(['posts'=>function($query){$query->orderBy('id','desc')->take(3);}])->where('title','پایگاه داده ')->get();
        $cat_ai=category::with(['posts'=>function($query){$query->orderBy('id','desc')->take(3);}])->where('title','هوش مصنوعی')->get();
        $cat_gpu=category::with(['posts'=>function($query){$query->orderBy('id','desc')->take(3);}])->where('title','طراحی کامپایلر')->get();
        $cat_os=category::with(['posts'=>function($query){$query->orderBy('id','desc')->take(3);}])->where('title','سیستم عامل')->get();
        $cat_university=category::with(['posts'=>function($query){$query->orderBy('id','desc')->take(3);}])->where('title','دانشگاهی')->get();
        $cat_web=category::with(['posts'=>function($query){$query->orderBy('id','desc')->take(3);}])->where('title','برنامه نویسی وب')->get();


        return view('index',compact('cat_programming','cat_MobProgramming','cat_db','cat_ai','cat_gpu','cat_os','cat_university','cat_web'));
    }

    public function getShrotPost($cat)
    {
      //  $category=category::all();
        $allCat=category::all();
         $category=category::with('posts')->where('title',$cat)->get();


        return view('shortPost',compact('category','allCat'));

    }

    public function getDetailPost($id)
    {
        $post=posts::find($id);
        $comments=posts::with('comments')->where('id',$id)->get();
        return view('showDetailPost',compact('post','comments'));

        
    }

    public function insertComment(Request $request)
    {
        try{
            $comment=new comment();
            $comment->author=$request->author;
            $comment->email=$request->email;
            $comment->website=$request->website;
            $comment->comment=$request->body;
            $comment->posts_id=$request->post_id;
            $comment->date='1397/10/12';
            $comment->save();
        }
        catch(\Exception $e){
            echo $e;
        }




    }

}

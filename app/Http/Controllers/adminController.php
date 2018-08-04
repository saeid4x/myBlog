<?php

namespace App\Http\Controllers;

use App\category;
use App\posts;
use Illuminate\Http\Request;

class adminController extends Controller
{
    //
    public function sendPost_get()
    {
        $category=category::all();
        return view('admin.sendPost',compact('category'));
    }

    public function sendPost_post(Request $request)
    {
        $posts=new posts();
        $posts->user_id=1;
        $posts->title=$request->title;
        $posts->body=$request->body;
        $posts->digestPost=$request->digest;
        $posts->author=$request->author;
        $posts->bazdid=0;
        $posts->save();
        $posts->categories()->sync($request->category);
        $name='post-'.$posts->id.'.'.$request->file('image_url')->getClientOriginalExtension();
        $request->file('image_url')->move(public_path('images/users'),$name);
        $posts->image_url=$name;
        $posts->save();
        return back();

     //   $posts->user=$request->digest;

        






    }

}

@extends('layouts.mainLayout')
@section('script-add')
    <link rel="stylesheet" href="/css/shortPost.css">
    @endsection
@section('content')
    {{--@include('partial.shortPost_categorySection')--}}
    @foreach($category as $cat)

    <div id="content-title"><h3 style="margin-top: 30px;text-align: center;">{{$cat->title}}</h3></div>
    @endforeach
         <div id="content">
             <div class="row">


                 @foreach($category as $cat)
                     @foreach($cat->posts as $post)
                 <section class="perPost  col-3">


                     <img src="/images/users/{{$post->image_url}}" alt="">
                     <h4 style="text-align: center;font-weight: bold">{{$post->title}} </h4>
                     <p>{{$post->digestPost}}</p>
                    <a  href="/post/{{$post->id}}"> <button class="btn btn-outline-primary"> ادامه مطلب</button></a>

                 </section>

                     @endforeach
                 @endforeach

             </div>



             </div>


    @endsection





@extends('layouts.mainLayout')
    @section('top-info')
        @include('partial.mainLayout_topInfo')

    @endsection
@section('script-add')
    <link rel="stylesheet" href="/css/index.css">
    @endsection
@section('content')
    <div class="article">

        {{-- per category --}}

        {{-- $cat=programming--}}
        <div class="row div-title">
            <img src="/images/users/57.jpg" class="index-image col-1" alt="" >
            <span class="col-11">برنامه نویسی</span>
        </div>

              <div class="groupPost row">
                  @foreach($cat_programming as $cat)
                      @foreach($cat->posts as $post)
                  <section class="perPost col-3">

                    <img src="/images/users/{{$post->image_url}}" alt="" >
                        <p><a href="/post/{{$post->id}}">{{$post->title}}</a> </p>
                  </section>
                      @endforeach
                  @endforeach




              </div>
        {{-- /$cat=programming--}}

        {{-- $cat=mob programming--}}
        <div class="row div-title">
            <img src="/images/users/57.jpg" class="index-image col-1" alt="" >
            <span class="col-11"> برنامه نویسی موبایل</span>
        </div>

        <div class="groupPost row">
            @foreach($cat_MobProgramming as $cat)
                @foreach($cat->posts as $post)
                    <section class="perPost col-3">

                        <img src="/images/users/{{$post->image_url}}" alt="" >
                        <p><a href="/post/{{$post->id}}">{{$post->title}}</a> </p>
                    </section>
                @endforeach
            @endforeach

        </div>
        {{-- /$cat=mob programming--}}

        {{-- $cat=db  --}}
        <div class="row div-title">
            <img src="/images/users/57.jpg" class="index-image col-1" alt="" >
            <span class="col-11">  پایگاه داده    </span>
        </div>

        <div class="groupPost row">
            @foreach($cat_db as $cat)
                @foreach($cat->posts as $post)
                    <section class="perPost col-3">

                        <img src="/images/users/{{$post->image_url}}" alt="" >
                        <p><a href="/post/{{$post->id}}">{{$post->title}}</a> </p>
                    </section>
                @endforeach
            @endforeach

        </div>
        {{-- /$cat=db  --}}

        {{-- $cat=web develop  --}}
        <div class="row div-title">
            <img src="/images/users/57.jpg" class="index-image col-1" alt="" >
            <span class="col-11">  برنامه نویسی تحت وب   </span>
        </div>

        <div class="groupPost row">
            @foreach($cat_web as $cat)
                @foreach($cat->posts as $post)
                    <section class="perPost col-3">

                        <img src="/images/users/{{$post->image_url}}" alt="" >
                        <p><a href="/post/{{$post->id}}">{{$post->title}}</a> </p>
                    </section>
                @endforeach
            @endforeach

        </div>
        {{-- /$cat=web develop  --}}

        {{-- $cat=ai    --}}
        <div class="row div-title">
            <img src="/images/users/57.jpg" class="index-image col-1" alt="" >
            <span class="col-11"> هوش مصنوعی   </span>
        </div>

        <div class="groupPost row">
            @foreach($cat_ai as $cat)
                @foreach($cat->posts as $post)
                    <section class="perPost col-3">

                        <img src="/images/users/{{$post->image_url}}" alt="" >
                        <p><a href="/post/{{$post->id}}">{{$post->title}}</a> </p>
                    </section>
                @endforeach
            @endforeach

        </div>
        {{-- /$cat=ai    --}}


        {{-- $cat=gpu   --}}
        <div class="row div-title">
            <img src="/images/users/57.jpg" class="index-image col-1" alt="" >
            <span class="col-11"> طراحی کامپایلر </span>
        </div>

        <div class="groupPost row">
            @foreach($cat_gpu as $cat)
                @foreach($cat->posts as $post)
                    <section class="perPost col-3">

                        <img src="/images/users/{{$post->image_url}}" alt="" >
                        <p><a href="/post/{{$post->id}}">{{$post->title}}</a> </p>
                    </section>
                @endforeach
            @endforeach

        </div>
        {{-- /$cat= gpu  --}}

        {{-- $cat=os   --}}
        <div class="row div-title">
            <img src="/images/users/57.jpg" class="index-image col-1" alt="" >
            <span class="col-11"> سیستم عامل </span>
        </div>

        <div class="groupPost row">
            @foreach($cat_os as $cat)
                @foreach($cat->posts as $post)
                    <section class="perPost col-3">

                        <img src="/images/users/{{$post->image_url}}" alt="" >
                        <p><a href="/post/{{$post->id}}">{{$post->title}}</a> </p>
                    </section>
                @endforeach
            @endforeach

        </div>
        {{-- /$cat= os  --}}
        {{-- $cat=university   --}}
        <div class="row div-title">
            <img src="/images/users/57.jpg" class="index-image col-1" alt="" >
            <span class="col-11"> دانشگاهی</span>
        </div>

        <div class="groupPost row">
            @foreach($cat_university as $cat)
                @foreach($cat->posts as $post)
                    <section class="perPost col-3">

                        <img src="/images/users/{{$post->image_url}}" alt="" >
                        <p><a href="/post/{{$post->id}}">{{$post->title}}</a> </p>
                    </section>
                @endforeach
            @endforeach

        </div>
        {{-- /$cat= univertiy  --}}



    </div>  <!-- .article-->






    @endsection

@extends('layouts.mainLayout')


    @section('script-add')
        <link rel="stylesheet" href="/css/showDetailsPost.css">
    @endsection


    @section('content')

        <div class="leftSection">
            <section class="leftsection_related">
                <h4>مطالب مرتبط</h4>
                <hr>
                <ul>
                   <li><a href="#">عنوان پست 1</a></li>
                   <li><a href="#">عنوان پست 1</a></li>
                   <li><a href="#">عنوان پست 1</a></li>
                   <li><a href="#">عنوان پست 1</a></li>
                   <li><a href="#">عنوان پست 1</a></li>
                </ul>
            </section>
            <section class="leftsection_related">
                <h4>مطالب پربازدید</h4>
                <hr>
                <ul>
                    <li><a href="#">عنوان پست 1</a></li>
                    <li><a href="#">عنوان پست 1</a></li>
                    <li><a href="#">عنوان پست 1</a></li>
                    <li><a href="#">عنوان پست 1</a></li>
                    <li><a href="#">عنوان پست 1</a></li>
                </ul>
            </section>






            <div id="leftsection_categorySegment_title">
                <h3>دسته بندی های سایت</h3>
            </div>

            <div class="row row-segment">

                <section class="col-3 perCategorySegment">

                    <img src="/images/users/post-6.jpg" alt="">

                  <p><a href="/category/برنامه نویسی">برنامه نویسی</a></p>
                </section>
                <section class=" perCategorySegment col-3">
                    <img src="/images/users/post-6.jpg" alt="">
                    <p><a href="/category/برنامه نویسی موبایل"> برنامه نویسی موبایل  </a></p>
                </section>

                <section class=" perCategorySegment col-3">
                    <img src="/images/users/post-6.jpg" alt="">
                    <p><a href="/category/پایگاه داده"> پایگاه داده  </a></p>
                </section>

            </div>
            <div class="row row-segment">

                <section class="col-3 perCategorySegment">

                    <img src="/images/users/post-6.jpg" alt="">

                    <p><a href="/category/هوش مصنوعی"target="_blank"> هوش مصنوعی  </a></p>
                </section>
                {{--<section class=" perCategorySegment col-3">--}}
                    {{--<img src="/images/users/post-6.jpg" alt="">--}}
                    {{--<p>اسم دسته بندی</p>--}}
                {{--</section>--}}

                <section class=" perCategorySegment col-3">
                    <img src="/images/users/post-6.jpg" alt="">
                    <p><a href="/category/طراحی کامپایلر" target="_blank"> طراحی کامپایلر    </a></p>
                </section>

            </div>
            <div class="row row-segment">

                <section class="col-3 perCategorySegment">

                    <img src="/images/users/post-6.jpg" alt="">

                    <p><a href="/category/دانشگاهی" target="_blank"> دانشگاهی    </a></p>
                </section>
                <section class=" perCategorySegment col-3">
                    <img src="/images/users/post-6.jpg" alt="">
                    <p><a href="/category/سیستم عامل" target="_blank"> سیستم عامل </a></p>
                </section>

                {{--<section class=" perCategorySegment col-3">--}}
                    {{--<img src="/images/users/post-6.jpg" alt="">--}}
                    {{--<p>اسم دسته بندی</p>--}}
                {{--</section>--}}

            </div>


        </div>
        <div class="mainContent">
        <h2 style="font-weight: bold;font-size: 35px;text-align: center;">{{$post->title}}</h2>
        <img src="/images/users/{{$post->image_url}}" alt="">

        <div id="digestPost">
            {{$post->digestPost}}
        </div>
       <p> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
           چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع
           با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان
           را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی
           در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمانایجاد کرد.  <br>
           مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.

           لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.

           لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
        <hr>
        <div class="infoPost">
            <span>نویسنده</span>
                <span>{{$post->author}}</span>
            <span>|</span>

            <span>تاریخ</span>
            <span>98/10/02</span>
            <span>|</span>

            <span>بازدید</span>
            <span>{{$post->bazdid}}&nbsp&nbspبار</span>
            <span>|</span>
            <span>اشتراک گذاری</span>
            <span><button class="btn btn-outline-primary">فیسبوک</button><button class="btn btn-outline-primary">توییتر</button></span>

        </div>


    </div>

        <div class="commentTitle">
            <div>
                <span>نظرات</span>
                <span>(5)</span>
            </div>

        </div>
        <div class="comment-form">
            <form action="/users/insertComment" method="post">
            {{csrf_field()}}
            <input type="hidden" name="post_id" value="{{$post->id}}">
             <div class="row">
                 <div class="row col-6 commentForm-leftInput" >
                     <input type="text" class="form-control col-11" placeholder="نام" name="author">
                     <input type="text" class="form-control col-11" placeholder="ایمیل" name="email">
                     <input type="text" class="form-control col-11" placeholder="وب سایت" name="website">

                 </div>

                 <div class="row commentForm-body">
                     <textarea name="body" id="" cols="150" rows="8" class="col-12 form-control"></textarea>


                 </div>


             </div>
           <div>
                <input type="submit" value="ارسال نظر" class="btn btn-success commentForm_submitBtn">
        </div>
            </form>
        </div>
        <div class="comments">
        @foreach($comments as $comment)
            @foreach($comment->comments as $com)
            <div class="perComment row">


                <div class="row col-4">
                    <img src="/images/users/post-6.jpg" alt="" class="col-4">
                    <span class="col-8">{{ $com->author}}(97/10/12)</span>
                </div><!--right row -->

                 <div>
                     <p class="commentBody">
                         {{--{{ $com->comment}}--}}
                               سیس یتسمیت مستی مستیم سیتمس تیمستی مست  سیس یتنستنیست یسنی
                      </p>


                 </div><!--left row -->

            </div>
            @endforeach
            @endforeach
        </div>

 @endsection


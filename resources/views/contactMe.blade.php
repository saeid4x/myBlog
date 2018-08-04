@extends('layouts.mainLayout')


@section('script-add')
    <link rel="stylesheet" href="/css/contact.css">
@endsection


@section('content')
<div id="contactSection">
<h2>تماس با من </h2>
    <p>
        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است
        . چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف
        بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد   <br>
    </p>
    <div class="row0 contact-form">
    <form action="/contact" method="post">
        {{csrf_field()}}
            <div class="row">
                    <input type="text" name="name" placeholder="نام" class="col-7 form-control">
                    <input type="text" name="email" placeholder="ایمیل" class="col-7 form-control">
                    <input type="text" name="subject" placeholder="موضوع" class="col-7 form-control">
                    <textarea name="body" id="" cols="30" rows="10" class="col-10 form-control" placeholder="متن پیام" title=""></textarea>
            </div>
        <input type="submit" class="btn btn-success" value="ارسال فرم">
    </form>
    </div>
</div>

@endsection
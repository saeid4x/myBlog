@extends('layouts.adminLayout')
@section('script')
    <link rel="stylesheet" href="/css/admin.css">
    @endsection

  @section('content')
      <div class="form-sendPost">
      <form action="sendPost" method="post" enctype="multipart/form-data">
          {{csrf_field()}}
          <div>
              <label for="author">نویسنده پست</label><br>
              <input type="text" name="author" id="author" />
          </div>
          <div>
              <label for="title">عنوان پست</label><br>
              <input type="text" name="title" id="title" />
          </div>
          <div>
              <label for="digest">خلاصه پست</label><br>
              <textarea name="digest" id="digest" cols="70" rows="5"></textarea>
          </div>
          <div>
              <label for="body">متن پست</label><br>
              <textarea name="body" id="body" cols="100" rows="15"></textarea>
          </div>
          <div>
              <span>آپلود تصویر پست</span>
              <input type="file" name="image_url">
          </div>
          <div>
              <span>دسته بندی </span>
              <select name="category" id="category">
                  @foreach($category as $cat)
                  <option value="{{$cat->id}}">{{$cat->title}}</option>
                      @endforeach
              </select>
          </div>
          <div>
              <span></span>
              <input type="submit" value="ارسال پست" class="btn btn-primary">
          </div>
      </form>
      </div>



    @endsection
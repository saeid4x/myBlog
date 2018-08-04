<div id="right_area">
    <section id="rightArea_top">
        @foreach($category as $cat)
        <img src="/images/blog/4.jpg" alt="" width="100" height="100">
        <p>{{$cat->title}}</p>
            @endforeach
    </section>

    <section id="rightArea_categories">
        <p> دسته بندی ها</p>
        <ul>
            @foreach($allCat as $cat)
                <li><a href="#">{{$cat->title}}</a></li>
            @endforeach

        </ul>
    </section>
</div>
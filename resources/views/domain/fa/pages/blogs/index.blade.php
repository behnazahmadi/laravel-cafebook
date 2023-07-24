@extends("domain.fa.layout.standard")
@section("pageTitle")
    | بلاگ ها
@endsection


@section("content")
<!-- عنوان صفحه -->
<div class="page-title animatedBackground">
    <div class="container">
        <h3>وبلاگ</h3>
        <ul>
            <li><a href="{{route("domain.home")}}">صفحه اصلی</a></li>
            <li class="dot-divider"></li>
            <li>وبلاگ</li>
        </ul>
    </div>

    <div class="bg-pattern"><img src="{{asset("turacos/img/bg-pattern-2.png")}}" alt="pattern"></div>
</div>
<!-- عنوان صفحه پایانی -->

<!-- منطقه وبلاگ -->
<section class="blog-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    @foreach($blogs as $blog)
                        <div class="col-lg-6 col-md-6">
                            <div class="single-blog-post">
                                <a href="{{route("blog.single",["slug" => $blog->category->slug,"id" => $blog->id])}}" class="blog-image"><img src="{{asset("client/uploads/posts/".$blog->image)}}" alt="blog"></a>

                                <div class="blog-post-content">
                                    <span>{{$blog->category->categoryName}}</span>
                                    <h4><a href="{{route("blog.single",["slug"=>$blog->category->slug,"id" => $blog->id])}}">{{$blog->title}}</a></h4>
                                    <p>{{$blog->short_content}}</p>
                                    <a href="{{route("blog.single",["slug" => $blog->category->slug,"id" => $blog->id])}}" class="read-more-btn">بیشتر بخوانید</a>
                                </div>
                            </div>
                        </div>
                    @endforeach


{{--                        {{$blogs->links()}}--}}

                </div>
            </div>

            <div class="col-lg-4 col-md-12">
                <div class="side-bar mb-0">


                    <div class="widget-box categories-box">
                        <h3 class="title">دسته ها</h3>

                        <ul>
                            @foreach(\App\Models\Category::get() as $category)
                                <li><a href=""><i class="icofont-dotted-right"></i> {{$category->categoryName}} (12)</a></li>
                            @endforeach
                        </ul>
                    </div>


                    <div class="widget-box recent-post-box mb-0">
                        <h3 class="title">بلاگ های اخیر</h3>

                        <ul>
                            @foreach(\App\Models\Post::where("status",1)->get()->take(4) as $blog)

                                <li>
                                    <div class="recent-post-thumb">
                                        <a href="{{route("blog.single",["slug" => $blog->category->slug,"id" => $blog->id])}}"><img src="{{asset("client/uploads/posts/".$blog->image)}}" alt="pic"></a>
                                    </div>

                                    <div class="recent-post-desc">
                                        <h3><a href="{{route("blog.single",["slug" => $blog->category->slug,"id" => $blog->id])}}">{{$blog->title}}</a></h3>
                                        <span class="date">{{$blog->created_at}}</span>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- منطقه وبلاگ -->


@endsection

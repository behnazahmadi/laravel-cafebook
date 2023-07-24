@extends("domain.fa.layout.standard")
@section("pageTitle")
    | بلاگ ها| {{$blog->title}}
@endsection



@section("content")

    <!-- عنوان صفحه -->
    <div class="page-title animatedBackground">
        <div class="container">
            <h3>وبلاگ واحد</h3>
            <ul>
                <li><a href="{{route("domain.home")}}">صفحه اصلی</a></li>
                <li class="dot-divider"></li>
                <li>وبلاگ واحد</li>
            </ul>
        </div>

        <div class="bg-pattern"><img src="{{asset("turacos/img/bg-pattern-2.png")}}" alt="pattern"></div>
    </div>
    <!-- عنوان صفحه پایانی -->



    <!-- منطقه جزئیات وبلاگ -->
    <section class="blog-details-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="blog-details">

                        <div class="thumb">
                            <img src="{{asset("client/uploads/posts/".$blog->image)}}" alt="details">

                            <div class="date">
                                <span>{{$blog->created_at}}</span>
                            </div>
                        </div>

                        <div class="blog-details-heading">
                            <h3>{{$blog->title}}</h3>
                            <ul>
                                <li>پست شده توسط: <a>{{$blog->user->username}}</a></li>
                                <li><a href="#"><i class="icofont-clock-time"></i> {{$blog->created_at}}</a></li>
                            </ul>
                        </div>

                        <div class="blog-details-content">

                            <p>{!! $blog->contentt !!}</p>


                            <br>
                            <br>
                            <br>
                            <div class="blog-details-comments">
                                <?php
                                $countOfComments = \App\Models\Comment::get()->where("parent_id",0)->count();
                                ?>
                                <h3 class="title">نظرات  : {{$countOfComments}}</h3>
                                @foreach(\App\Models\Comment::all() as $comment)
                                <div class="single-comments mt-5">
                                    <div class="thumb">
                                        <img style="width: 75px; height: 75px" src="{{asset("default-profile.png")}}" alt="client">
                                    </div>

                                    <div class="content">
                                        <h4>{{$comment->user->username}}</h4>
                                        <span>{{$comment->created_at}}</span>
                                        <p>{{$comment->body}}</p>
                                        <a href="#">پاسخ <i class="icofont-reply"></i></a>
                                    </div>
                                </div>
                                        <div class="border"></div>

                                    @endforeach

{{--                                <div class="single-comments left-mr">--}}
{{--                                    <div class="thumb">--}}
{{--                                        <img style="width: 75px; height: 75px" src="{{asset("default-profile.png")}}" alt="client">--}}
{{--                                    </div>--}}

{{--                                    <div class="content">--}}
{{--                                        <h4>اوا اسمیت</h4>--}}
{{--                                        <span>30 دی 1401</span>--}}
{{--                                        <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است.</p>--}}
{{--                                        <a href="#">پاسخ <i class="icofont-reply"></i></a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}



                            </div>

                            <div class="blog-details-comments-form">
                                <h3 class="title">پاسخ بگذارید</h3>
                                <form method="post" action="{{ route('domain.comments.store') }}">
                                @csrf
                                    <div class="row">
                                        <input type="hidden" name="post_id" value="{{ $blog->id }}" />
                                        <input type="hidden" name="user_id" value="{{ Auth::id() }}" />

                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <textarea cols="30" rows="6" name="body" class="form-control" placeholder="پیام"></textarea>
                                            </div>
                                            @if($errors->has("body"))
                                                <span class="text-danger">{{$errors->first("body")}}</span>
                                            @endif
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <button class="btn btn-primary" type="submit">ارسال <i class="fa fa-angle-double-right"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12">
                    <div class="side-bar mb-0">
                        <div class="widget-box search-box">
                            <form>
                                <input type="text" placeholder="در اینجا جستجو کنید..." class="form-control">
                                <button type="submit"><i class="icofont-search-2"></i></button>
                            </form>
                        </div>

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
                                @foreach(\App\Models\Post::get()->take(3) as $blog)
                                <li>
                                    <div class="recent-post-thumb">
                                        <a href="{{route("blog.single",["slug" => $blog->category->slug , "id" => $blog->id])}}"><img src="{{asset("client/uploads/posts/".$blog->image)}}" alt="pic"></a>
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
    <!-- منطقه جزئیات وبلاگ -->



@endsection

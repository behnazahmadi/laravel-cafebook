@extends("domain.fa.layout.standard")

@section("pageTitle")
    | ناحیه کاربری
@endsection

@section("styles")

    <link rel="stylesheet" href="{{asset("swanlisting/css/style.css")}}">
    <!-- RTL CSS -->
    <link rel="stylesheet" href="{{asset("swanlisting/css/rtl.css")}}">


@endsection


@section("content")


    <!-- Start Page Title Area -->
    <div class="page-title">
        <div class="breadcrumbs-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="breadcrumbs">
                            <h2>پنل مدیریت</h2>

                            <ul>
                                <li><a href="{{route("domain.home")}}">صفحه اصلی</a></li>
                                <li><i class="fas fa-angle-left"></i></li>
                                <li>پنل کاربری</li>
                                <li><i class="fas fa-angle-left"></i></li>
                                <li class="active">دیدگاه ها</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start Profile Area -->
    <section class="profile-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-5">
                    <div class="user-profile-menu">
                        <div class="user-menu mt-0">
                            <h5 class="title mt-0">مرکز مدیریت <i class="fas fa-cog"></i></h5>

                            <ul>
                                <li><a href="{{route("domain.profile.index")}}"><i class="fas fa-cogs"></i>پروفایل کاربری</a></li>
                                <li><a href="{{route("domain.profile.show.blogs")}}"><i class="far fa-user"></i>بلاگ ها</a></li>
                                <li><a href="{{route("blogs.create")}}"><i class="far fa-user"></i>ایجاد بلاگ جدید</a></li>
                                <li class="active"><a href="{{route("domain.profile.show.comments")}}"><i class="fas fa-edit"></i>دیدگاه ها</a></li>
                            </ul>


                            <div class="logout-btn">
                                <a href="#" class="btn btn-primary"  onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">

                                    خروج
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-9 col-md-7">
                    <div class="massage">
                        <div class="dashboard-detail-box mt-0">
                            <h3 class="title text-dark">پیام ها :
                            {{count($comments)}}
                            </h3>
                            <div class="messages-box">
                                @foreach($comments as $comment)

                                <div class="single-messages">
                                    <img src="{{asset("default-profile.png")}}" alt="messages">
                                    <h5><a href="#">{{$comment->user->username}}</a>
                                        <span class="text-center "> نام بلاگ :{{$comment->post->title}}</span>
                                    </h5>
                                    <p>{{$comment->body}}</p>
                                    <h4><i class="far fa-calendar-alt"></i>{{$comment->created_at}}</h4>
{{--                                    <a href="#" class="reply"><i class="fas fa-reply"></i> پاسخ دادن</a>--}}
                                </div>

                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Edit Area -->


@endsection



@section("scripts")

@endsection

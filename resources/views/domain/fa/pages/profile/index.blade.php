@extends("domain.fa.layout.standard")

@section("pageTitle")
    | ناحیه کاربری
@endsection

@section("styles")

    <link rel="stylesheet" href="{{asset("swanlisting/css/style.css")}}">
    <!-- RTL CSS -->
    <link rel="stylesheet" href="{{asset("swanlisting/css/rtl.css")}}">
    <link rel="stylesheet" href="{{asset("toastr.css")}}">


@endsection


@section("content")


    <!-- Start Page Title Area -->
    <div class="page-title">
        <div class="breadcrumbs-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="breadcrumbs">
                            <h2>ناحیه کاربری</h2>

                            <ul>
                                <li><a href="{{route("domain.home")}}">صفحه اصلی</a></li>
                                <li><i class="fas fa-angle-left"></i></li>
                                <li>ناحیه کاربری</li>
                                <li><i class="fas fa-angle-left"></i></li>
                                <li class="active">ویرایش پروفایل</li>
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
                    <div class="profile edit-profile">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="profile-box mt-0 text-center">
                                    <h3 class="title text-dark">ویرایش پروفایل</h3>
                                    <div class="profile-information">

                                        <form method="POST" action = "{{route("domain.profile.update")}}">
                                            @csrf
                                            <div class="edit-profile-information">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-12">
                                                        <div class="form-group">
                                                            <label>نام</label>
                                                            <input type="text" class="form-control" name="first_name" value="{{$user->first_name}}">
                                                        </div>
                                                        @if($errors->has('first_name'))
                                                            <span>{{$errors->first('first_name')}}</span>
                                                        @endif
                                                    </div>

                                                    <div class="col-lg-6 col-md-12">
                                                        <div class="form-group">
                                                            <label>نام خانوادگی</label>
                                                            <input type="text" class="form-control" name="last_name" value="{{$user->last_name}}">
                                                        </div>
                                                        @if($errors->has('last_name'))
                                                            <span>{{$errors->first('last_name')}}</span>
                                                        @endif
                                                    </div>

                                                    <div class="col-lg-6 col-md-12">
                                                        <div class="form-group">
                                                            <label>نام کاربری</label>
                                                            <input type="text" class="form-control" name="username" value="{{$user->username}}">
                                                        </div>
                                                        @if($errors->has('username'))
                                                            <span>{{$errors->first('username')}}</span>
                                                        @endif
                                                    </div>

                                                    <div class="col-lg-6 col-md-12">
                                                        <div class="form-group">
                                                            <label>شماره تماس</label>
                                                            <input type="text" class="form-control" name="phone_number" value="{{$user->phone_number}}">
                                                        </div>
                                                        @if($errors->has('phone_number'))
                                                            <span>{{$errors->first('phone_number')}}</span>
                                                        @endif
                                                    </div>

                                                    <div class="col-lg-6 col-md-12">
                                                        <div class="form-group">
                                                            <label>کد ملی : </label>
                                                            <input type="text"  class="form-control" name="national_code" value="{{$user->national_code}}">
                                                        </div>
                                                        @if($errors->has('national_code'))
                                                            <span>{{$errors->first('national_code')}}</span>
                                                        @endif
                                                    </div>

                                                    <div class="col-lg-6 col-md-12">
                                                        <div class="form-group">
                                                            <label>ایمیل</label>
                                                            <input type="email" class="form-control" name="email" value="{{$user->email}}">
                                                        </div>
                                                        @if($errors->has('email'))
                                                            <span>{{$errors->first('email')}}</span>
                                                        @endif
                                                    </div>



                                                    <div class="col-lg-12 col-md-12">
                                                        <button type="submit" class="btn btn-primary">ذخیره تغییرات</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
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

    <script src="{{asset("toastr.min.js")}}"></script>

    <script>
        @if(session()->has('message'))
            toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true
            }
        toastr.success("{{ session('message') }}");
        @endif

            @if(session()->has('error'))
            toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true
            }
        toastr.error("{{ session('error') }}");
        @endif

            @if(session()->has('info'))
            toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true
            }
        toastr.info("{{ session('info') }}");
        @endif

            @if(session()->has('warning'))
            toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true
            }
        toastr.warning("{{ session('warning') }}");
        @endif
    </script>
@endsection

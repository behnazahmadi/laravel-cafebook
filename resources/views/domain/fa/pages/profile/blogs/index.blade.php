@extends("domain.fa.layout.standard")

@section("pageTitle")
    | ناحیه کاربری
@endsection

@section("styles")

    <link rel="stylesheet" href="{{asset("swanlisting/css/style.css")}}">
    <!-- RTL CSS -->
    <link rel="stylesheet" href="{{asset("swanlisting/css/rtl.css")}}">
    <!-- Font Awesome Min CSS -->

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
                                <li>ناحیه کاربری</li>
                                <li><i class="fas fa-angle-left"></i></li>
                                <li class="active">بلاگ ها</li>
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
                    <div class="manage-listing">
                        <h3 class="title">فهرست بلاگ ها</h3>

                        <div class="listing-table table-responsive">
                            <table class="table mb-0">
                                <thead>
                                <tr>
                                    <th scope="col">تصویر</th>
                                    <th scope="col">نام</th>
                                    <th scope="col">تاریخ</th>
                                    <th scope="col">وضعیت انتشار</th>
                                    <th scope="col">نظرات</th>
                                    <th scope="col">عملیات</th>
                                </tr>
                                </thead>
                                <tbody>

                                <tr>
                                    @foreach($blogs as $blog)
                                    <td class="listing-image">
                                        <a href="#">
                                            <img src="{{asset("client/uploads/posts/".$blog->image)}}" alt="listing">
                                        </a>
                                    </td>
                                    <td class="listing-info">
                                        <a href="#"></a>
                                        <p><i class="fas fa-map-marker-alt"></i>{{$blog->title}}</p>

                                    </td>
                                    <td class="date text-center">{{$blog->created_at}}</td>
                                    <td class="date text-center">
                                        <?php if($blog->status ==0)
                                            echo 'تایید نشده';
                                        else
                                            echo 'تایید شده';
                                        ?>
                                    <td class="text-center"><i class="fas fa-eye"></i>{{$blog->comments->count()}}</td>
                                        @if($blog->status ==1)
                                    <td class="action"><a class="text-dark" href="{{route("blog.single",["slug" => $blog->category->slug,"id" => $blog->id])}}"><i class="fas fa-edit"></i>مشاهده</a></td>
                                        @endif
                                </tr>
                                @endforeach

                                </tbody>
                            </table>
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

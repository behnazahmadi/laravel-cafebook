@extends("manager.fa.layout.standard")

@section("pageTitle")
    ایجاد دسته بندی
@endsection
@section("styles")
    <link rel="stylesheet" href="{{asset("toastr.css")}}">

@endsection
@section("content")

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="breadcrumb breadcrumb-style ">

                        </ul>
                    </div>
                </div>
            </div>
            <!-- Vertical Layout -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <strong>ایجاد</strong> دسته بندی</h2>
                        </div>
                        <div class="body">
                            <form method="post" action="{{route('manager.category.store')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="row clearfix">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="name" class="form-control" value="{{old('name')}}" placeholder="نام دسته بندی">
                                            </div>
                                            <br>
                                            @if($errors->has("name"))
                                                <span>{{$errors->first("name")}}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="slug" class="form-control" value="{{old('slug')}}" placeholder="اسلاگ">
                                            </div>
                                            <br>
                                            @if($errors->has("slug"))
                                                <span>{{$errors->first("slug")}}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <h2 class="card-inside-title">آپلود تصویر</h2>
                                <div class="row clearfix">
                                    <div class="col-sm-6">
                                            <div class="file-field input-field">
                                                <div class="btn">
                                                    <span>فایل</span>
                                                    <input type="file" class="form-control" name="avatar" value="{{old('avatar')}}">
                                                </div>
                                                <br>
                                                @if($errors->has("avatar"))
                                                    <span>{{$errors->first("avatar")}}</span>
                                                @endif
                                                <div class="file-path-wrapper">
                                                    <input class="file-path validate" type="text">
                                                </div>
                                            </div>
                                    </div>

                                </div>

                                <br>
                                <button type="submit" class="btn btn-primary m-t-15 waves-effect">ذخیره</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Vertical Layout -->


        </div>
    </section>




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

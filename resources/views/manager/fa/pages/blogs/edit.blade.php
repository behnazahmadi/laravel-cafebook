@extends("manager.fa.layout.standard")
@section("pageTitle")
    ویرایش بلاگ
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

                    </div>
                </div>
            </div>
            <!-- Input Group -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <strong>ویرایش</strong> بلاگ</h2>


                        </div>
                        <div class="body">
                            <form action="{{route("manager.blogs.update",$blog->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method("PUT")
                            <h2 class="card-inside-title">اطلاعات کاربر</h2>
                            <div class="row clearfix">
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">person</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control date"
                                                   placeholder="نام کاربری"
                                                   value="{{$blog->user->username}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                                                <span class="input-group-addon">
                                            <i class="material-icons">email</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control date"
                                                   placeholder="ایمیل کاربر"
                                                   value="{{$blog->user->email}}">
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <h2 class="card-inside-title">اطلاعات بلاگ</h2>
                            <div class="row clearfix">
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">computer</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control date"
                                                   name="title" placeholder="عنوان بلاگ"
                                                   value="{{$blog->title}}">
                                        </div>
                                        @if($errors->has('title'))
                                            <span class="text-danger">{{$errors->first('title')}}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                                                <span class="input-group-addon">
                                            <i class="material-icons">access_time</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="number" name="reading_time"
                                                   class="form-control date"
                                                   placeholder="زمان مطالعه(دقیقه)"
                                                   value="{{$blog->reading_time}}">
                                        </div>
                                        @if($errors->has('reading_time'))
                                            <span class="text-danger">{{$errors->first('reading_time')}}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>


                            <h2 class="card-inside-title">متن کوتاه</h2>
                            <div class="row clearfix">
                                <div class="col-md-12">
                                    <div class="input-group">

                                        <div class="form-line">
                                            <textarea type="text" name="short_content" cols="20" rows="5" class="form-control" >{{$blog->short_content}}</textarea>
                                        </div>
                                        @if($errors->has('short_content'))
                                            <span class="text-danger">{{$errors->first('short_content')}}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>


                            <h2 class="card-inside-title">وضعیت انتشار</h2>
                            <div class="card">
                                <div class="header">

                                </div>
                                <div class="body">

                                    <div class="row clearfix">
                                        <div class="col-md-6">

                                            <select class="browser-default" name="status">
                                                <option value="0" disabled selected>گزینه
                                                    خود را انتخاب کنید
                                                </option>
                                                <option value="1">تایید</option>
                                                <option value="0">رد</option>
                                            </select>
                                            @if($errors->has('status'))
                                                <span class="text-danger">{{$errors->first('status')}}</span>
                                            @endif
                                        </div>

                                    </div>
                                </div>
                            </div>


                            <h2 class="card-inside-title">آپلود فایل</h2>
                            <div class="row clearfix">
                                <div class="col-md-12">

                                    <div class="file-field input-field">
                                        <div class="btn">
                                            <span>فایل</span>
                                            <input name="image" type="file">
                                        </div>

                                        <div class="file-path-wrapper">
                                            <input class="file-path validate" type="text" >
                                        </div>
                                        @if($errors->has('image'))
                                            <span class="text-danger">{{$errors->first('image')}}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>


                            @if(!empty($blog->image))
                                <div class="row clearfix">

                                    <div class="col-md-12">
                                        <div class="file-path-wrapper">
                                            <img class="w-25 h-25"
                                                 src="{{asset("/client/uploads/posts/".$blog->image)}}">
                                        </div>
                                    </div>
                                </div>
                            @endif


                            <div class="row clearfix">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="card">

                                        <div class="body">
                                            <h2 class="card-inside-title">محتوای بلاگ</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-md-12">
                                    <div class="input-group">

                                        <div class="form-line">
                                                <textarea class="ckeditor form-control"
                                                          name="contentt">{{$blog->contentt}}</textarea>

                                        </div>
                                        @if($errors->has('contentt'))
                                            <span class="text-danger">{{$errors->first('contentt')}}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                                <button type="submit" class="btn btn-primary m-t-15 waves-effect">ذخیره</button>
                            </form>

                        </div>


                    </div>
                </div>
            </div>
            <!-- #END# Input Group -->

        </div>
    </section>






@endsection

@section("scripts")
    <script src="{{asset("toastr.min.js")}}"></script>

    <script>
        @if(session()->has('message'))
            toastr.options =
            {
                "closeButton": true,
                "progressBar": true
            }
        toastr.success("{{ session('message') }}");
        @endif

            @if(session()->has('error'))
            toastr.options =
            {
                "closeButton": true,
                "progressBar": true
            }
        toastr.error("{{ session('error') }}");
        @endif

            @if(session()->has('info'))
            toastr.options =
            {
                "closeButton": true,
                "progressBar": true
            }
        toastr.info("{{ session('info') }}");
        @endif

            @if(session()->has('warning'))
            toastr.options =
            {
                "closeButton": true,
                "progressBar": true
            }
        toastr.warning("{{ session('warning') }}");
        @endif
    </script>
    <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.ckeditor').ckeditor();
        });
    </script>
@endsection

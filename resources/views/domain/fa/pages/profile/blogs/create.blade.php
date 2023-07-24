@extends("domain.fa.layout.standard")
@section("pageTitle")
    | ایجاد بلاگ
@endsection

@section("styles")
    <link rel="stylesheet" href="{{asset("toastr.css")}}">

@endsection
@section("content")

    <!-- عنوان صفحه -->
    <div class="page-title animatedBackground">
        <div class="container">
            <h3>ایجاد بلاگ</h3>
            <ul>
                <li><a href="{{route("domain.home")}}">صفحه اصلی</a></li>
                <li class="dot-divider"></li>
                <li>ایجاد بلاگ</li>
            </ul>
        </div>

        <div class="bg-pattern"><img src="{{asset("turacos/img/bg-pattern-2.png")}}" alt="pattern"></div>
    </div>
    <!-- عنوان صفحه پایانی -->

    <!-- شروع منطقه پرداخت -->
    <section class="checkout-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">

                </div>
            </div>

            <form method="post" action = "{{route("blogs.store")}}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-2 col-md-2">
                    </div>
                    <div class="col-lg-8 col-md-12">
                        <div class="billing-details">
                            <h3 class="title">ایجاد بلاگ</h3>
                            <br>
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>دسته بندی <span class="required">*</span></label>

                                        <div class="select-box">
                                            <select class="form-select" name="category_id" id="inlineFormSelectPref">
                                                @foreach(\App\Models\Category::all() as $category)
                                                    <option value="{{$category->id}}">{{$category->categoryName}}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                    </div>
                                </div>
                                <br>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>نام بلاگ<span class="required">*</span></label>
                                        <input type="text" name="title" value="{{old("title")}}" class="form-control">
                                        @if($errors->has("title"))
                                            <span>{{$errors->first("title")}}</span>
                                        @endif
                                    </div>

                                </div>
                                <br>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>تصویر<span class="required"></span></label>
                                        <input type="file" name="image" class="form-control">
                                        @if($errors->has("image"))
                                            <span>{{$errors->first("image")}}</span>
                                        @endif
                                    </div>

                                </div>
                                <br>
                                <br>
                                <br>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <textarea class="ckeditor form-control" name="contentt">{{old("contentt")}}</textarea>
                                    </div>
                                    @if($errors->has("contentt"))
                                        <span>{{$errors->first("contentt")}}</span>
                                    @endif
                                </div>


                            </div>
                            <button type="submit" class="btn btn-primary text-center">ثبت</button>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2">
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- پایان پرداخت منطقه -->



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
    <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.ckeditor').ckeditor();
        });
    </script>
@endsection

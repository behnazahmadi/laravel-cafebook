@extends("manager.fa.layout.standard")

@section("pageTitle")
    لیست بلاگ ها
@endsection

@section('styles')
    <style>
        .category-image{
            height: 50px;
            width: 50px;
        }
    </style>

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
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <strong>لیست بلاگ ها
                                </strong></h2>

                        </div>
                        <div class="body">
                            <div class="table-responsive">

                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                    <tr>
                                        <th>شماره</th>
                                        <th>عنوان</th>
                                        <th>تصویر</th>
                                        <th>تاریخ</th>
                                        <th>وضعیت</th>
                                        <th>عملیات</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @php
                                        $count = 0;
                                    @endphp
                                    @foreach($blogs as $blog)
                                        @php
                                            $count++;
                                        @endphp
                                        <tr>
                                            <td>{{$count}}</td>
                                            <td>{{$blog->title}}</td>
                                            <td>
                                                <img src="{{asset('client/uploads/posts/'. $blog->image)}}" width="50px" alt="post image">
                                            </td>
                                            <td>{{$blog->created_at}}</td>
                                            @if($blog->status == 0 )
                                                <td>تایید نشده</td>
                                            @endif
                                            @if($blog->status == 1)
                                                <td>تایید شده</td>
                                            @endif

                                            <td>
                                                <a href="{{route("manager.blogs.edit",$blog->id)}}" title = "ویرایش" class="badge badge-primary">ویرایش</a>


                                            </td>
                                        </tr>
                                    @endforeach

                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>شماره</th>
                                        <th>عنوان</th>
                                        <th>تصویر</th>
                                        <th>تاریخ</th>
                                        <th>وضعیت</th>
                                        <th>عملیات</th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Examples -->

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

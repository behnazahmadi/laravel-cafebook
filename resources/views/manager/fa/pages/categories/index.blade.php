@extends("manager.fa.layout.standard")

@section("pageTitle")
    لیست دسته بندی ها
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
                                <strong>لیست دسته بندی ها
                                </strong></h2>

                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <div class="row">
                                    <div class="btn-group m-r-15">
                                        <a href="{{route("manager.category.create")}}" id="addRow" class="btn btn-info">
                                            افزودن جدید
                                            <i class="fa fa-plus"></i>
                                        </a>
                                    </div>
                                </div>
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                    <tr>
                                        <th>شماره</th>
                                        <th>نام دسته بندی</th>
                                        <th>تصویر</th>
                                        <th>تنظیمات</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @php $count = 0
                                    @endphp
                                    @foreach(\App\Models\Category::all() as $category)
                                        @php $count++ @endphp
                                        <tr>
                                            <td>{{$count}}</td>
                                            <td>{{$category->categoryName}}</td>
                                            <td>
                                                <img src="{{asset('admin/uploads/categories/'. $category->avatar)}}" class="category-image" alt="category image">
                                            </td>
                                            <td>
                                                <a  title="ویرایش" href="{{route('manager.category.edit',$category->id)}}"><i class="fas fa-edit" aria-hidden="true"></i></a>
                                                <form action="{{route('manager.category.destroy',$category->id)}}" method="post" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')

                                                    <button  title="حذف" ><i class="fa fa-trash d-inline" aria-hidden="true"></i></button >
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach

                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>شماره</th>
                                        <th>نام دسته بندی</th>
                                        <th>تصویر</th>
                                        <th>تنظیمات</th>
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

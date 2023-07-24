@extends('admin.main')
@section('styles')
    <style>
        .category-image{
            height: 50px;
            width: 50px;
        }
    </style>
@endsection
@section('title')
    لیست دسته بندی ها
@endsection
@section('content')
    <?php $menu = 'category'; $sub = 'list' ?>

    <div class="row">
        <div class="col-12">
            <h5>دسته بندی ها</h5>
            <div class="card">
                <div class="card-header">
                    <div class="card-tools">
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover">
                        <tr>
                            <th>شماره</th>
                            <th>نام دسته بندی</th>
                            <th>تصویر</th>
                            <th>تنظیمات</th>
                        </tr>
                        @php $count = 0
                        @endphp
                        @foreach($categories as $category)
                            @php $count++ @endphp
                            <tr>
                                <td>{{$count}}</td>
                                <td>{{$category->categoryName}}</td>
                                <td>
                                    <img src="{{asset('admin/uploads/categories/'. $category->avatar)}}" class="category-image" alt="category image">
                                </td>
                                <td>
                                    <a class="btn" title="ویرایش" href="{{route('manager.category.edit',$category->id)}}"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                    <form action="{{route('manager.category.destroy',$category->id)}}" method="post" class="d-inline">
                                        @csrf
                                        @method('DELETE')

                                        <button class="btn" title="حذف" style="background-color:#b0d4f1"><i class="fa fa-trash d-inline" aria-hidden="true"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div><!-- /.row -->
@endsection

@extends('admin.main')
@section("title")
    لیست پست ها
@endsection
@section('content')
    <?php $menu = 'posts'; $sub = '' ?>
    <div class="row">
        <div class="col-12">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
{{--                    <h4> مدیریت پست ها</h4>--}}
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">لیست پست ها</h3>

                        <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control float-right" placeholder="جستجو">

                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover">
                            <tr>
                                <th>شماره</th>
                                <th>عنوان</th>
                                <th>تصویر</th>
                                <th>تاریخ</th>
                                <th>وضعیت</th>
                                <th>عملیات</th>
                            </tr>
                            @php
                            $count = 0;
                            @endphp
                            @foreach($posts as $post)
                                @php
                                $count++;
                                @endphp
                            <tr>
                                <td>{{$count}}</td>
                                <td>{{$post->title}}</td>
                                <td>
                                    <img src="{{asset('client/uploads/posts/'. $post->image)}}" width="50px" alt="post image">
                                </td>
                                <td>{{$post->created_at}}</td>
                                @if($post->status == 0 )
                                <td>تایید نشده</td>
                                @endif
                                @if($post->status == 1)
                                        <td>تایید شده</td>
                                    @endif

                                <td>
                                    <a href="{{route("manager.posts.edit",$post->id)}}" title = "ویرایش" class="badge badge-primary">ویرایش</a>


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

    </section>
{{--        </div>--}}
{{--        {{$posts->links()}}--}}
{{--    </div>--}}
    <!-- /.content -->
@endsection


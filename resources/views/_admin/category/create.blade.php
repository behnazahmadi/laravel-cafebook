@extends('admin.main')
@section('styles')
    <link rel="stylesheet" href="{{asset('admin/plugins/select2/select2.min.css')}}">
@endsection
@section('title')
    اضافه کردن دسته بندی
@endsection
@section('content')
    <div class="col-md-6">
        @if(session()->has('success_message'))
            <div class="alert alert-success">
                {{session()->get('success-message')}}
            </div>
        @endif
        @if(count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>

    <?php $menu = 'category'; $sub = 'create' ?>
    <form method="post" action="{{route('manager.category.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">نام دسته بندی</label>
                <input type="text" name="name" class="form-control" value="{{old('name')}}">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">نامک(slug)</label>
                <input type="text" name="slug" class="form-control" value="{{old('slug')}}">
            </div>
            <div class="form-group">
                <label for="image">آپلود عکس</label>
                <input type="file" class="form-control" name="avatar" value="{{old('avatar')}}">
            </div>

        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">ایجاد</button>
        </div>
    </form>
@endsection

@extends('admin.main')
@section("title")
ویرایش پست
@endsection
@section('content')

    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">ویرایش</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
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
                <form action="{{route("manager.posts.update",$post->id)}}" method="post">
                    @csrf
                    @method("PUT")
                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label for="exampleInputPassword1">نام کاربری</label>
                                <span class="form-control" id="exampleInputPassword1" >{{$post->user->username}}</span>
                            </div>

                            <div class="col-md-6 form-group">
                                <label for="exampleInputPassword1">ایمیل کاربر</label>
                                <span class="form-control" id="exampleInputPassword1" >{{$post->user->email}}</span>
                            </div>

                        <div class="col-md-6 form-group">
                            <label for="exampleInputEmail1">عنوان پست</label>
                            <input type="text" name="title" class="form-control" value="{{$post->title}}">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="exampleInputEmail1">زمان مطالعه(دقیقه)</label>
                            <input type="number" name="reading_time" class="form-control" value="{{$post->reading_time}}">
                        </div>
                            <div class="col-md-6 form-group">
                                <label for="exampleInputEmail1">وضعیت انتشار</label>
                                <br>
                                <select name="status" class="col-md-6 form-group js-example-disabled-results">
                                    <option value="0" disabled="disabled">انتخاب کنید</option>
                                    <option value="1">تایید</option>
                                    <option value="0"> رد</option>
                                </select>
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="exampleInputEmail1">متن کوتاه</label>
                                <input type="text" name="short_content" class="form-control"  value="{{$post->short_content}}">
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="exampleInputEmail1">تصویر</label>
                                <input type="file" name="image" class="form-control" accept="image/png, image/jpeg">
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="exampleInputEmail1">محتوا</label>
                                <textarea type="text" cols="30" rows="5" name="content" class="form-control">{{$post->contentt}}</textarea>
                            </div>


                        </div>

                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-success">ثبت</button>


                    </div>
                </form>

            </div>
            <!-- /.card -->

@endsection

@section("scripts")
<script>

    var $disabledResults = $(".js-example-disabled-results");
    $disabledResults.select2();

</script>


@endsection

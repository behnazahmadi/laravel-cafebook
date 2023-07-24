@extends('admin.master')
@section('title')
    مدیریت کاربران
@endsection
@section('styles')

@endsection
@section('content')
    <?php $menu = 'users'; $sub = '' ?>
    <div class="row">
        <div class="col-12">
            <h5>لیست کاربران</h5>
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
                            <th>نام کاربری</th>
                            <th>حذف</th>
                        </tr>
                        @php $count = 0
                        @endphp
                        @foreach($users as $user)
                            @php $count++
                            @endphp
                            <tr>
                                <td>{{$count}}</td>
                                <td>{{$user->username}}</td>
                                <td>
                                    <form action="{{route('manager.deleteuser',$user->id)}}" method="post" class="d-inline">
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
            {{$users->links()}}

        </div>

    </div><!-- /.row -->
@endsection

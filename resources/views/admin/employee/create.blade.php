@extends('admin.mazer')
@section('title','Add Employee')
@section('content')
<div class="card mb-4 mt-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Create Employee
        <a href="{{ route('employee.index') }}" class="float-end btn btn-sm btn-success">View All</a>
    </div>
    <div class="card-body">

        @if($errors->any())
            @foreach($errors->all() as $error)
                <p class="text-danger">{{$error}}</p>
            @endforeach
        @endif

        @if(Session::has('msg'))
        <p class="text-success">{{session('msg')}}</p>
        @endif
        <form method="post" action="{{route('employee.store')}}" enctype="multipart/form-data">
            @csrf
            <table class="table table-bordered">
                <tr>
                    <th>VỊ TRÍ</th>
                    <td>
                        <select name="depart" class="form-control">
                            <option value="">-- Chọn vị trí --</option>
                            @foreach($departments as $depart)
                                <option value="{{$depart->id}}">{{$depart->title}}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>USERNAME</th>
                    <td>
                        <input type="text" name="username" class="form-control" />
                    </td>
                </tr>
                <tr>
                    <th>PASSWORD</th>
                    <td>
                        <input type="password" name="password" class="form-control" />
                    </td>
                </tr>
                <tr>
                    <th>HỌ VÀ TÊN</th>
                    <td>
                        <input type="text" name="full_name" class="form-control" />
                    </td>
                </tr>
                <tr>
                    <th>ẢNH</th>
                    <td>
                        <input type="file" name="photo" class="form-control" />
                    </td>
                </tr>
                <tr>
                    <th>ĐỊA CHỈ</th>
                    <td>
                        <input type="text" name="address" class="form-control" />
                    </td>
                </tr>
                <tr>
                    <th>SĐT</th>
                    <td>
                        <input type="text" name="phone" class="form-control" />
                    </td>
                </tr>
                <tr>
                    <th>TRẠNG THÁI</th>
                    <td>
                        <input type="radio" name="status" value="1" /> Hoạt động
                        <br />
                        <input type="radio" checked="checked" name="status" value="0" /> Không hoạt động
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" class="btn btn-primary" value="Submit" />
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>

@endsection
@extends('admin.mazer')

@section('content')

<div class="row justify-content-center" style="margin-bottom: 20px;">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<table class="table ">
    <tr>
        <h3>KHÁCH HÀNG</h3>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('users.create') }}">Add User</a>
        </div>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Quản trị viên</th>
        <th width="280px">Actions</th>
    </tr>
    @foreach ($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>NULL</td>
            <td>
                <form action="{{ route('users.destroy',$user->id) }}" method="POST">
                    
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>

{!! $users->links() !!}

@endsection

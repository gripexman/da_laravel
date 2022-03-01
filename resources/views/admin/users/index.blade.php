@extends('admin.mazer')

@section('content')

<div class="card mb-4 mt-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Tất Cả Khách Hàng
    </div>
    <div class="card-body">
        <table id="datatablesSimple" class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>USERNAME</th>
                    <th>EMAIL</th>
                </tr>
            </thead>

            <tbody> 
                    @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <form action="{{ route('users.destroy',$user->id) }}" method="POST">

                                @csrf
                                @method('DELETE')
        
                                <button type="submit" class="btn btn-danger">Xóa</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
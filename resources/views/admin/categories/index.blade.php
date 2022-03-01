@extends('admin.mazer')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    LOẠI SP
                    <a href="{{ route('categories.create') }}" class="btn btn-primary float-right">Tạo mới</a>
                </div>

                <div class="card-body">
                    

                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tên Loại SP</th>
                                <th>Ngày Tạo</th>
                                <th>Chức Năng</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $category)
                            <tr>
                                <td>{{ $category->id}}</td>
                                <td>{{ $category->name}}</td>
                                <td>{{ $category->created_at}}</td>
                                <td>   
                                    <form action="{{ route('categories.destroy',$category->id) }}" method="POST" >  
                                        <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-xs btn-info">Sửa</a>                           
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-xs btn-danger">Xóa</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
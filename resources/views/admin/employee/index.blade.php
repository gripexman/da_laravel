@extends('admin.mazer')
@section('title','All Employees')
@section('content')
<div class="card mb-4 mt-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Tất Cả Nhân Viên
                                <a href="{{ route('employee.create') }}" class="btn btn-sm btn-success">Tạo mới</a>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple" class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>VỊ TRÍ</th>
                                            <th>EMAIL</th>
                                            <th>HỌ TÊN</th>
                                            <th>ẢNH</th>
                                            <th>ĐỊA CHỈ</th>
                                            <th>SĐT</th>
                                            <th>CHỨC NĂNG</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                    	@if($data)
	                                    	@foreach($data as $d)
	                                        <tr>
	                                            <td>{{$d->id}}</td>
	                                            <td>{{$d->department->title}}</td>
                                                <td>{{$d->username}}</td>
                                                <td>{{$d->full_name}}</td>
                                                <td><img src="/photo/{{ $d->photo }}" width="80" /></td>
                                                <td>{{$d->address}}</td>
                                                <td>{{$d->phone}}</td>
                                                <td>
                                                    <form action="{{ route('employee.destroy',$d->id) }}" method="POST">
                                                        <a class="btn btn-primary" href="{{ route('employee.edit',$d->id) }}">Sửa</a>
                                
                                                        @csrf
                                                        @method('DELETE')
                                
                                                        <button type="submit" class="btn btn-danger">Xóa</button>
                                                    </form>
                                                </td>
	                                        </tr>
	                                        @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>

@endsection
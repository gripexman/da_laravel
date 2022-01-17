@extends('admin.mazer')
@section('title','All Departments')
@section('content')
<div class="card mb-4 mt-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                All Departments
                                <a href="{{url('admin/depart/create')}}" class="float-end btn btn-sm btn-success">Add New</a>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple" class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Title</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>Title</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    	@if($data)
	                                    	@foreach($data as $d)
	                                        <tr>
	                                            <td>{{$d->id}}</td>
	                                            <td>{{$d->title}}</td>
                                                <td>
                                                    <form action="{{ route('depart.destroy',$d->id) }}" method="POST">
                                                        <a class="btn btn-primary" href="{{ route('depart.edit',$d->id) }}">Edit</a>
                                                        @csrf
                                                        @method('DELETE')
                                
                                                        <button type="submit" class="btn btn-danger">Delete</button>
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
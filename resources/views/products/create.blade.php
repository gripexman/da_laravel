@extends('admin.mazer')

@section('content')
    <div class="row" style="margin-bottom: 20px;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h3>Add Product</h3>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="form-group">
                    <strong>Tên SP:</strong>
                    <input type="text" name="name" class="form-control">
                </div>
            </div>

            <div class="col-md-8 mx-auto">
            <div class="form-group">
                <strong>Category</strong>
                <select class="form-select" name="category_id">
                    <option>Chọn category</option>
                    @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>  
            </div>    

            <div class="col-md-8 mx-auto">
                <div class="form-group">
                    <strong>Giá:</strong>
                    <input type="text" name="price" class="form-control">
                </div>
            </div>
            <div class="col-md-8 mx-auto">
                <div class="form-group">
                    <strong>Sl:</strong>
                    <input type="text" name="quantity" class="form-control">
                </div>
            </div>

            <div class="col-md-8 mx-auto">
                <div class="form-group">
                    <strong>Size:</strong>
                    <input type="text" name="size" class="form-control">
                </div>
            </div>

            <div class="col-md-8 mx-auto">
                <div class="form-group">
                    <strong>Image:</strong>
                    <input type="file" name="imageUrl" class="form-control" placeholder="imageUrl">
                </div>
            </div>

            <div class="col-md-8 mx-auto">
                <div class="form-group">
                    <strong>Mô tả:</strong>
                    <textarea class="form-control" style="height:150px" name="description"></textarea>
                </div>
            </div>
            <div class="col-md-8 mx-auto text-center">
                <button type="submit" class="btn btn-success">Add Product</button>
                <a class="btn btn-secondary" href="{{route('products.index') }}"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
            </div>
        </div>

    </form>
@endsection
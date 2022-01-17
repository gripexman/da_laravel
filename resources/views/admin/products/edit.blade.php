@extends('admin.mazer')

@section('content')
    <div class="row" style="margin-bottom: 20px;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Lỗi!</strong> Bạn chưa nhập liệu đủ.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('products.update',$product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-md-8 mx-auto">
                <h3>Edit Product</h3>
                <div class="form-group">
                    <strong>TÊN SP:</strong>
                    <input type="text" name="name" value="{{ $product->name }}" class="form-control">
                </div>
            </div>
            <div class="col-md-8 mx-auto">
                <div class="form-group">
                    <strong>Category</strong>
                    <select name="" class="form-select">
                        @if($product->category_id)
                        <option value="{{ $product->category_id }}">{{$product->category->name}}</option>
                    </select>
                        @endif
                </div>
            </div>

            <div class="col-md-8 mx-auto">
                <div class="form-group">
                    <strong>GIÁ:</strong>
                    <input type="text" name="price" value="{{ $product->price }}" class="form-control">
                </div>
            </div>
            <div class="col-md-8 mx-auto">
                <div class="form-group">
                    <strong>SL:</strong>
                    <input type="text" name="quantity" value="{{ $product->quantity }}" class="form-control">
                </div>
            </div>
            <div class="col-md-8 mx-auto">
                <div class="form-group">
                    <strong>SIZE:</strong>
                    <input type="text" name="size" value="{{ $product->size }}" class="form-control">
                </div>
            </div>

            <div class="col-md-8 mx-auto">
                <div class="form-group">
                    <strong>Image:</strong>
                    <input type="file" name="imageUrl" class="form-control" placeholder="imageUrl">
                    <img src="/image/{{ $product->imageUrl }}" width="300px">
                </div>
            </div>

            <div class="col-md-8 mx-auto">
                <div class="form-group">
                    <strong>MÔ TẢ:</strong>
                    <textarea class="form-control" style="height:150px" name="description">{{ $product->description }}</textarea>
                </div>
            </div>
            <div class="col-md-8 mx-auto text-center">
                <button type="submit" class="btn btn-success">Update</button>
                <a class="btn btn-secondary" href="{{route('products.index') }}"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
            </div>
        </div>

    </form>
@endsection
@extends('admin.mazer')

@section('content')
    <div class="row" style="margin-bottom: 20px;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h3>Thêm Hóa Đơn Nhập</h3>
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

    <form action="{{ route('invoiceinput.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="form-group">
                    <strong>Ngày Nhập:</strong>
                    <input type="datetime-local" name="ngaynhap" class="form-control">
                </div>
            </div>

            <div class="col-md-8 mx-auto">
            <div class="form-group">
                <strong>Mã Hóa Đơn:</strong>
                <input type="text" name="mahoadon" class="form-control">
            </div>  
            </div>    

            <div class="col-md-8 mx-auto">
                <div class="form-group">
                    <strong>Tên Sản Phẩm:</strong>
                    <input type="text" name="tensanpham" class="form-control">
                </div>
            </div>
            <div class="col-md-8 mx-auto">
                <div class="form-group">
                    <strong>Số Lượng:</strong>
                    <input type="text" name="soluong" class="form-control">
                </div>
            </div>

            <div class="col-md-8 mx-auto">
                <div class="form-group">
                    <strong>Đơn Giá:</strong>
                    <input type="text" name="dongia" class="form-control">
                </div>
            </div>

            <div class="col-md-8 mx-auto text-center">
                <button type="submit" class="btn btn-success">Accept</button>
                <a class="btn btn-secondary" href="{{route('invoiceinput.index') }}"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
            </div>
        </div>

    </form>
@endsection
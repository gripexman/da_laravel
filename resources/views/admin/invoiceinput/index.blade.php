@extends('admin.mazer')

@section('content')
    <div class="row" style="margin-bottom: 20px;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h3>Hóa Đơn Nhập</h3>
            </div>
            <div class="pull-left">               
                <h3>Tổng hóa đơn: {{$invoice_input->count('soluong')}}</h3>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('invoiceinput.create') }}">Thêm hóa đơn</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>NGÀY NHẬP</th>
            <th>MÃ HÓA ĐƠN</th>
            <th>TÊN SẢN PHẨM</th>
            <th>SỐ LƯỢNG</th>
            <th>ĐƠN GIÁ</th>
            <th>TỔNG TIỀN</th>
            <th width="280px">Actions</th>
        </tr>
        @foreach ($invoice_input as $ip)
            <tr>
                <td>{{$ip->id}}</td>
                <td>{{ $ip->ngaynhap }}</td>
                <td>{{ $ip->mahoadon }}</td>
                <td>{{ $ip->tensanpham}}</td>
                <td>{{ $ip->soluong }}</td>
                <td>{{ number_format(($ip->dongia)/1000,3) }}</td>
                <td>{{ number_format((($ip->soluong) *($ip->dongia))/1000,3) }}</td>
                <td>
                    <form action="{{ route('invoiceinput.destroy',$ip->id) }}" method="POST">
                        <a class="btn btn-primary" href="{{ route('invoiceinput.edit',$ip->id) }}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $invoice_input->links() !!}

@endsection
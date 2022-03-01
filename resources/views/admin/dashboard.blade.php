
@extends('admin.mazer')

@section('content')
<div class="row">

                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon purple">
                                        <i class="iconly-boldShow"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <a href="{{route('products.index')}}">
                                    <h6 class="text-muted font-semibold">Sản Phẩm</h6>
                                    <h6 class="font-extrabold mb-0">{{ $prodcount }}</h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon blue">
                                        <i class="iconly-boldProfile"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                <a href="{{route('categories.index')}}">
                                    <h6 class="text-muted font-semibold">Category</h6>
                                    <h6 class="font-extrabold mb-0">{{$catecount}}</h6>
                                </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon green">
                                        <i class="iconly-boldAdd-User"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                <a href="{{route('users.index')}}">
                                    <h6 class="text-muted font-semibold">User</h6>
                                    <h6 class="font-extrabold mb-0">{{$usercount}}</h6>
                                </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon red">
                                        <i class="iconly-boldBookmark"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Hóa Đơn</h6>
                                    <h6 class="font-extrabold mb-0">{{$invinput}}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</div>
@endsection
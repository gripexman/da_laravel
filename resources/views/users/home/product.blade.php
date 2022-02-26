@extends('layouts.layout_user')
@section('main')
@php
    $data = App\Models\product::all();
@endphp
<div class="slider-area">
        	<!-- Slider -->
			<!-- ./Slider -->
    </div> <!-- End slider area -->
    
    <div class="promo-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo1">
                        <i class="fa fa-refresh"></i>
                        <p>30 Days return</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo2">
                        <i class="fa fa-truck"></i>
                        <p>Free shipping</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo3">
                        <i class="fa fa-lock"></i>
                        <p>Secure payments</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo4">
                        <i class="fa fa-gift"></i>
                        <p>New products</p>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End promo area -->
    
    <div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                        <h2 class="section-title">Tất Cả Sản Phẩm</h2>
                        
                        <div class="product-carousel">
                            @foreach ($data as $sp)
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="image/{{ $sp->imageUrl }}" alt="">
                                </div>
                                
                                <h2><a href="single-product.html">{{ $sp->name }}</a></h2>
                                
                                <div class="product-carousel-price">
                                    <ins>{{number_format( $sp->price )}} VNĐ</ins> <del>$100.00</del>
                                </div> 
                                <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" value="{{ $sp->id }}" name="id">
                                    <input type="hidden" value="{{ $sp->name }}" name="name">
                                    <input type="hidden" value="{{ $sp->price }}" name="price">
                                    <input type="hidden" value="{{ $sp->imageUrl }}"  name="imageUrl">
                                    <input type="hidden" value="1" name="quantity">
                                    <button class="px-4 py-2 text-white bg-blue-800 rounded btn btn-primary">Add To Cart</button>
                                </form>
                            </div>

                            @endforeach
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End main content area -->
    
    <!-- End brands area -->
    
    
@endsection
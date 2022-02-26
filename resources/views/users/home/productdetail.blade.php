@extends('layouts.layout_user')

@section('main')
    
<div class="product-big-title-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-bit-title text-center">
                    <h2>CHI TIẾT SP</h2>
                </div>
            </div>
        </div>
    </div>
</div>
@foreach ($data as $sp )
    <div class="container" style="padding-top:30px">
        <div class="row">
            <div class="col-md-4">
                <div class="single-sidebar">
                    <h2 class="sidebar-title">TÌM KIẾM SẢN PHẨM</h2>
                    <form action="#">
                        <input type="text" placeholder="TÌM KIẾM SẢN PHẨM...">
                        <input type="submit" value="TÌM KIẾM">
                    </form>
                </div>
 
            </div>
            
            <div class="col-md-8">
                <div class="product-content-right">
                    <div class="product-breadcroumb">
                        <a href="">Home</a>
                        <a href="">Chi Tiet San Pham</a>
                        <a href="">{{$sp->name}} </a>
                    </div>
                    
                    <div class="row">
                        
                        <div class="col-sm-6">
                            <div class="product-images">
                                <div class="product-main-img">
                                    <img src="../image/{{$sp->imageUrl}}" alt="">
                                </div>
                                
                                <div class="product-gallery">
                                    <img src="../image/{{$sp->imageUrl}}" alt="">
                                    <img src="../image/{{$sp->imageUrl}}" alt="">
                                    <img src="../image/{{$sp->imageUrl}}" alt="">
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-sm-6">
                            <div class="product-inner">
                                <h2 class="product-name">{{$sp->name}}</h2>
                                <div class="product-inner-price">
                                    <ins>{{number_format( $sp->price )}} VNĐ</ins> <del>$100.00</del>
                                </div>    
                                
                                <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" value="{{ $sp->id }}" name="id">
                                    <input type="hidden" value="{{ $sp->name }}" name="name">
                                    <input type="hidden" value="{{ $sp->price }}" name="price">
                                    <input type="hidden" value="{{ $sp->imageUrl }}"  name="imageUrl">
                                    <input type="number" value="1" name="quantity" >
                                    <button class="px-4 py-2 text-white bg-blue-800 rounded btn btn-primary">Thêm vào giỏ hàng</button>
                                </form>
                                
                                {{-- <div class="product-inner-category">
                                    <p>Category: <a href="">Summer</a>. Tags: <a href="">awesome</a>, <a href="">best</a>, <a href="">sale</a>, <a href="">shoes</a>. </p>
                                </div>  --}}
                                
                                <div role="tabpanel" style="margin-top:3rem">
                                    <ul class="product-tab" role="tablist">
                                        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Description</a></li>
                                        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Reviews</a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane fade in active" id="home">
                                            <h2>Mo Ta San Pham</h2>  
                                            <p>{{$sp->description}}</p> 
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="profile">
                                            <h2>Reviews</h2>
                                            <div class="submit-review">
                                                <p><label for="name">Name</label> <input name="name" type="text"></p>
                                                <p><label for="email">Email</label> <input name="email" type="email"></p>
                                                <div class="rating-chooser">
                                                    <p>Your rating</p>

                                                    <div class="rating-wrap-post">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                </div>
                                                <p><label for="review">Your review</label> <textarea name="review" id="" cols="30" rows="10"></textarea></p>
                                                <p><input type="submit" value="Submit"></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        
                    </div>
                    
                    
                    {{-- <div class="related-products-wrapper">
                        <h2 class="related-products-title">Related Products</h2>
                        <div class="related-products-carousel owl-carousel owl-theme owl-responsive-1200 owl-loaded">
                            <div class="product-carousel">
                                @foreach ($data as $sp)
                                <div class="single-product">
                                    <div class="product-f-image">
                                        <img src="../image/{{ $sp->imageUrl }}" alt="">
                                    </div>
                                    
                                    <h2><a href="single-product.html">{{ $sp->name }}</a></h2>
                                    
                                    <div class="product-carousel-price">
                                        <ins>{{number_format( $sp->price )}} VNĐ</ins> <del>$100.00</del>
                                    </div> 
                                    
                                </div>
    
                                @endforeach
                            </div>    
                    </div> --}}
                </div>                    
            </div>
        </div>
    </div>
    @endforeach
@endsection
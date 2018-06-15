@extends("frontend.master_fe")

@section('content')
    <div class="wrapper">
        <div class="container">
            <div class="row ">

                <!-- SLIDER -->
                <div class="span9 slider">
                    <div class="slider-slides">
                        <div class="slides">
                            <a href="#"><img src="{{ asset('frontend/images/banner/banner1.png') }}" alt=""></a>
                            <div class="overlay">
                                <h1>AWESOME FURNITUR</h1>
                                <p><span>50%</span> OFF <br/> TRENDY <span>DESIGNS</span> </p>
                            </div>
                        </div>
                        <div class="slides">
                            <a href="#"><img src="{{ asset('frontend/images/banner/banner2.png') }}" alt=""></a>
                            <div class="overlay">
                                <h1>LATEST FASHION</h1>
                                <p><span>30%</span> OFF <br/> TRENDY <span>DESIGNS</span> </p>
                            </div>
                        </div>
                        <div class="slides">
                            <a href="#"><img src="{{ asset('frontend/images/banner/banner3.png') }}" alt=""></a>
                            <div class="overlay">
                                <h1>AWESOME FURNITUR</h1>
                                <p><span>50%</span> OFF <br/> TRENDY <span>DESIGNS</span> </p>
                            </div>
                        </div>
                        <div class="slides">
                            <a href="#"><img src="{{ asset('frontend/images/banner/banner4.png') }}" alt=""></a>
                            <div class="overlay">
                                <h1>LATEST FASHION</h1>
                                <p><span>30%</span> OFF <br/> TRENDY <span>DESIGNS</span> </p>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="next"></a>
                    <a href="#" class="prev"></a>
                    <div class="slider-btn"></div>
                </div>
                <!-- SLIDER -->

                <!-- SPECIAL-OFFER -->
                <div class="span3">
                    <div class="offers">
                        <figure>
                            <a href="#"><img src="{{ asset('frontend/images/banner/banner5.png') }}" alt=""></a>
                            <div class="overlay">
                                <h1>SUMMER<span> COLLECTION 35% OFF</span> <small>  - Limited Offer</small></h1>
                            </div>
                        </figure>
                    </div>

                    <div class="offers">
                        <figure>
                            <a href="#"><img src="{{ asset('frontend/images/banner/banner6.png') }}" alt=""></a>
                            <div class="overlay">
                                <h1>SUMMER<span> COLLECTION 35% OFF</span> <small>  - Limited Offer</small></h1>
                            </div>
                        </figure>
                    </div>
                </div>
                <!-- SPECIAL-OFFER -->

            </div>
        </div>
    </div>
    <!-- PRODUCT-OFFER -->
    <div class="product_wrap">
        <div class="container">
            <div class="row heading-wrap">
                <div class="span12 heading">
                    <h2>Sản Phẩm Bán Chạy <span></span></h2>
                </div>
            </div>
            <div class="row">
                @foreach($pay as $item)
                <div class="span3 product">
                    <div>
                        <figure>
                            <div class="img-product">
                                <a href="#"><img class="item-product" src="{{ asset('upload/product/image/'.$item['anh'] )}}" alt=""></a>
                                <div class="{{ $item['sale'] > 0 ? 'discount' : 'an' }}">{{ '-'.$item['sale'].'%'}}</div>
                                <span class="new"><img src="{{ $item['new']==1 ? asset('frontend/images/new.png') : ' ' }}" alt=""></span>
                            </div>
                            <div class="overlay">
                                <a href="{{ asset('upload/product/image/'.$item['anh'] )}}" class="zoom prettyPhoto"></a>
                                <a href="#" class="link"></a>
                            </div>
                        </figure>
                        <div class="detail">
                            <span>Giá : {{ formatprice_KM($item['Gia'],$item['sale'])}} đ</span>
                            <h1 class="name-product" >{{ $item['TenSP'] }}</h1>
                            <h4 class="info-product" ><span>Brown Wood</span> <span>Brown Wood</span></h4>
                            <strike class="{{  $item['sale'] > 0 ? '' : 'an'  }} "> Giá gốc : {{ formatprice($item['Gia']) }}</strike>
                            <div class="icon">
                                <a href="{{ URL::route('cart.add',$item['id_sp']) }}" class="one tooltip" title="Add to cart"></a>
                                <a href="#" class="three tooltip" title="Add to compare"></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- PRODUCT-OFFER -->
    <div class="product_wrap">
        <div class="container">
            <div class="row heading-wrap">
                <div class="span12 heading">
                    <h2>Sản Phẩm Mới Ra <span></span></h2>
                </div>
            </div>
            <div class="row">
                @foreach($new as $item)
                    <div class="span3 product">
                        <div>
                            <figure>
                                <div class="img-product">
                                    <a href="#"><img class="item-product" src="{{ asset('upload/product/image/'.$item['anh'] )}}" alt=""></a>
                                    <div class="{{ $item['sale'] > 0 ? 'discount' : 'an' }}">{{ '-'.$item['sale'].'%'}}</div>
                                    <span class="new"><img src="{{ $item['new']==1 ? asset('frontend/images/new.png') : ' ' }}" alt=""></span>
                                </div>
                                <div class="overlay">
                                    <a href="{{ asset('upload/product/image/'.$item['anh'] )}}" class="zoom prettyPhoto"></a>
                                    <a href="#" class="link"></a>
                                </div>
                            </figure>
                            <div class="detail">
                                <span>Giá : {{ formatprice_KM($item['Gia'],$item['sale'])}} đ</span>
                                <h1 class="name-product" >{{ $item['TenSP'] }}</h1>
                                <h4 class="info-product" ><span>Brown Wood</span> <span>Brown Wood</span></h4>
                                <strike class="{{  $item['sale'] > 0 ? '' : 'an'  }} "> Giá gốc : {{ formatprice($item['Gia']) }}</strike>
                                <div class="icon">
                                    <a href="{{ URL::route('cart.add',$item['id_sp']) }}" class="one tooltip" title="Add to cart"></a>
                                    <a href="#" class="three tooltip" title="Add to compare"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- PRODUCT-OFFER -->
@endsection

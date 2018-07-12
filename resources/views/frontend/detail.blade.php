@extends("frontend.master_fe")
@section('content')
    <!-- BAR -->
    <div class="bar-wrap">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <div class="title-bar">
                        <h1>Chi tiết sản phẩm</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="span12">
                    <div class="sorting-bar clearfix">
                        <div>
                            <label>Sort by</label>
                            <select>
                                <option>Position</option>
                            </select>
                        </div>

                        <div class="show">
                            <label>SHOW</label>
                            <select>
                                <option>5 per page</option>
                            </select>
                        </div>

                        <div class="sorting-btn clearfix">
                            <label>View As</label>
                            <a href="#" class="one"></a>
                            <a href="#" class="two"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BAR -->

    <!-- PRODUCT-OFFER -->
    <div class="product_wrap">

        <div class="container">
            <div class="row">
                <div class="span9">
                    @foreach($detail as $item)
                    <div class="single clearfix">
                        <div class="wrap span5">
                            <div id="carousel-wrapper">
                                <div id="carousel" class="cool-carousel">
                                    <span id="image1"><img src="{{ asset('upload/product/'.$item->anh )}}" alt=""/></span>
                                </div>
                                <a href="#" class="prev"></a><a href="#" class="next"></a>
                            </div>

                            <div class="bottom">
                                <div id="thumbs-wrapper">
                                    <div id="thumbs">
                                        <a href="#image1" class="selected"><img src="{{ asset('upload/product/'.$item->anh )}}"  alt="" /></a>
                                    </div>
                                    <a id="prev" href="#"></a>
                                    <a id="next" href="#"></a>
                                </div>
                            </div>
                        </div>

                        <div class="span4">
                            <div class="product-detail">
                                <h4>{{ $item->TenSP }}</h4>
                                <span>{{ formatprice_KM($item->Gia,$item->sale) }} đ</span>
                            </div>
                            <div class="product-type clearfix">
                                <div>
                                    <label>Mã SP</label>
                                    <select>
                                        <option>{{ $item->id_sp }}</option>
                                    </select>
                                </div>

                                <div>
                                    <label>Số lượng</label>
                                    <select>
                                        <option>{{ $item->soluong }}</option>
                                    </select>
                                </div>

                                <div class="color">
                                    <label>Kích thước màn hình</label>
                                    <select>
                                        <option>42 inch</option>
                                    </select>
                                </div>
                            </div>

                            <div class="buttons">
                                <a href="#" class="cart big-button">Thêm vào giỏ hàng</a>
                                <a href="#" class="compare big-button">Trở về trang trủ</a>
                            </div>
                        </div>
                    </div>

                    <div id="product_tabs">
                        <ul class="clearfix">
                            <li><a href="#tabs-1">Mô tả sản phẩm</a></li>
                        </ul>
                        <!--TABS-->
                        <div id="tabs-1" class="tab" >
                            <p>{{ $item->noidung }}</p>
                        </div>

                    </div>
                    @endforeach
                </div>
                <div class="span3">
                    <div id="sidebar">
                        <div id="sidebar">
                            <div class="widget">
                                <h4>Hiển Thị Theo</h4>

                                <div id="accordion">
                                    <h5><a href="#">Danh mục </a></h5>
                                    <div>
                                        <ul>
                                            @foreach($categoris as $item)
                                                <li><a href="{{ URL::route('product',$item['id']) }}">{{ $item['name'] }} </a></li>
                                            @endforeach
                                        </ul>
                                    </div>

                                    <h5><a href="#">Hãng </a></h5>
                                    <div>
                                        <ul>
                                            @foreach($hang as $item)
                                                <li><a href="{{ URL::route('hang',$item['id']) }}">{{ $item['tenhang'] }}  </a></li>
                                            @endforeach
                                        </ul>
                                    </div>

                                    <h5><a href="#">Kích Thước Màn Hình </a></h5>
                                    <div>
                                        <ul>
                                            @foreach($ktmh as $item)
                                                <li><a href="">{{ $item['kichthuoc'] }} </a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <h5><a href="#">Loại Ti Vi </a></h5>
                                    <div>
                                        <ul>
                                            @foreach($loaitivi as $item)
                                                <li><a href="">{{ $item['loaitivi'] }}  </a></li>
                                            @endforeach
                                        </ul>
                                    </div>

                                    <h5><a href="#">Độ Phân Giải Màn Hình </a></h5>
                                    <div>
                                        <ul>
                                            @foreach($dophangiai as $item)
                                                <li><a href="">{{ $item['dophangiai'] }} </a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget">
                            <h4>Sản Phẩm Bán Chạy</h4>

                            <div class="featured">
                                <ul>
                                    @foreach($payy as $item)
                                        <li class="clearfix">
                                            <figure>
                                                <a href="{{ URL::route('product.detail',$item->id_sp ) }}"><img src="{{ asset('upload/product/'.$item->anh )}}" alt=""></a>
                                            </figure>
                                            <div>
                                                <h5>{{ $item->TenSP }}</h5>
                                                <span>{{ formatprice_KM($item->Gia,$item->sale) }}</span>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- PRODUCT-OFFER -->

@endsection

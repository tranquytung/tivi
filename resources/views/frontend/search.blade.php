@extends("frontend.master_fe")

@section('content')
    <!-- BAR -->
    <div class="bar-wrap">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <div class="title-bar">
                        <h1>Sản Phẩm</h1>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="span12">
                    <div class="sorting-bar clearfix">
                        <div>
                            <label>Tìm kiếm sản phẩm <span style="color: red">{{ $keyword }}</span></label>
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
                <div class="span9 product-grid">
                    <div class=" clearfix">
                        @foreach($items as $item)
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

                    <div class="pagination clearfix">
                        <p>Tổng sản phẩm {{ $items->count() }}</p>
                        @if($items->lastPage()>1)
                        <ul class="clearfix">
                            @if($items->currentPage()!=1)
                                <li><a href="{{ str_replace('/?','?',$items->url($items->currentPage() - 1)) }}"><</a></li>
                            @endif
                            @for($i=1;$i <= $items->lastPage();$i++)
                                <li class="{{ $items->currentPage() == $i  ? 'active' : '' }}">
                                    <a href="{{ str_replace('/?','?',$items->url($i)) }}">{{ $i }}</a>
                                </li>
                            @endfor
                            @if($items->currentPage()==$items->lastPage())
                                <li><a href="{{ str_replace('/?','?',$items->url($items->currentPage() + 1)) }}"> > </a></li>
                            @endif
                        </ul>
                        @endif
                    </div>
                </div>

                <div class="span3">
                    <div id="sidebar">
                        <div class="widget">
                            <h4>Hiển Thị Theo</h4>

                            <div id="accordion">
                                <h5><a href="#">Danh mục (5)</a></h5>
                                <div>
                                    <ul>
                                        @foreach($categoris as $item)
                                            <li><a href="">{{ $item['name'] }} (10) </a></li>
                                        @endforeach
                                    </ul>
                                </div>

                                <h5><a href="#">Hãng (6)</a></h5>
                                <div>
                                    <ul>
                                        @foreach($hang as $item)
                                            <li><a href="">{{ $item['tenhang'] }} (10) </a></li>
                                        @endforeach
                                    </ul>
                                </div>

                                <h5><a href="#">Kích Thước Màn Hình (8)</a></h5>
                                <div>
                                    <ul>
                                        @foreach($ktmh as $item)
                                            <li><a href="">{{ $item['kichthuoc'] }} (10) </a></li>
                                        @endforeach
                                    </ul>
                                </div>
                                <h5><a href="#">Loại Ti Vi (9)</a></h5>
                                <div>
                                    <ul>
                                        @foreach($loaitivi as $item)
                                            <li><a href="">{{ $item['loaitivi'] }} (10) </a></li>
                                        @endforeach
                                    </ul>
                                </div>

                                <h5><a href="#">Độ Phân Giải Màn Hình (5)</a></h5>
                                <div>
                                    <ul>
                                        @foreach($dophangiai as $item)
                                            <li><a href="">{{ $item['dophangiai'] }} (10) </a></li>
                                        @endforeach
                                    </ul>
                                </div>

                            </div>

                        </div>

                        <div class="widget">
                            <h4>Price Filter</h4>

                            <div class="price-range">
                                <div id="slider-range"></div>
                                <p class="clearfix">
                                    <input type="text" id="amount" />
                                    <input type="text" id="amount2" />
                                </p>
                            </div>
                        </div>

                        <div class="widget">
                            <h4>Featured Products</h4>

                            <div class="featured">
                                <ul>
                                    <li class="clearfix">
                                        <figure>
                                            <a href="#"><img src="http://placehold.it/50x50" alt=""></a>
                                        </figure>
                                        <div>
                                            <h5>Brown Wood Chair</h5>
                                            <span>$244.00</span>
                                        </div>
                                    </li>

                                    <li class="clearfix">
                                        <figure>
                                            <a href="#"><img src="http://placehold.it/50x50" alt=""></a>
                                        </figure>
                                        <div>
                                            <h5>Brown Wood Chair</h5>
                                            <span>$244.00</span>
                                        </div>
                                    </li>

                                    <li class="clearfix last">
                                        <figure>
                                            <a href="#"><img src="http://placehold.it/50x50" alt=""></a>
                                        </figure>
                                        <div>
                                            <h5>Brown Wood Chair</h5>
                                            <span>$244.00</span>
                                        </div>
                                    </li>
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
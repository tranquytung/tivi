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
                            <label>Sắp xếp</label>
                            <select>
                                <option>Tăng</option>
                                <option>Giảm</option>
                            </select>
                        </div>

                        <div class="show">
                            <label>Hiển Thị</label>
                            <select>
                                <option>5 sản phẩm</option>
                                <option>10 sản phẩm</option>
                                <option>15 sản phẩm</option>
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
                <div class="span9 product-grid">
                    <div class=" clearfix">
                        @foreach($data as $item)
                            <div class="span3 product">
                                <div>
                                    <figure>
                                        <div class="img-product">
                                            <a href="#"><img class="item-product" src="{{ asset('upload/product/'.$item->anh )}}" alt=""></a>
                                            <div class="{{ $item->anh > 0 ? 'discount' : 'an' }}">{{ '-'.$item->anh.'%'}}</div>
                                            <span class="new"><img src="{{ $item->new==1 ? asset('frontend/images/new.png') : ' ' }}" alt=""></span>
                                        </div>
                                        <div class="overlay">
                                            <a href="{{ asset('upload/product/'.$item->anh )}}" class="zoom prettyPhoto"></a>
                                            <a href="#" class="link"></a>
                                        </div>
                                    </figure>
                                    <div class="detail">
                                        <span class="price-item" >Giá : {{ formatprice_KM($item->Gia,$item->sale)}} đ</span>
                                        <h1 class="name-product" >{{ $item->TenSP }}</h1>
                                        <h4 class="info-product" >
                                            <span>{{ $item->tenhang }}</span>
                                            <span>{{ $item->TenSP }}</span>
                                            <span>, {{ $item->loaitivi }}</span>
                                            <span>,{{ $item->dophangiai }}</span>
                                            <span>, {{ $item->kichthuoc }} INCH</span>
                                        </h4>
                                        <strike class="{{  $item->sale > 0 ? '' : 'an'  }} "> Giá gốc : {{ formatprice($item->Gia) }}</strike>
                                        <div class="icon">
                                            <a href="{{ URL::route('cart.add',$item->id_sp) }}" class="one tooltip" title="Add to cart"></a>
                                            <a href="#" class="three tooltip" title="Add to compare"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="pagination clearfix">
                        <p>Tổng sản phẩm {{ $data->count() }}</p>
                        @if($data->lastPage()>1)
                            <ul class="clearfix">
                                @if($data->currentPage()!=1)
                                    <li><a href="{{ str_replace('/?','?',$data->url($data->currentPage() - 1)) }}"><</a></li>
                                @endif
                                @for($i=1;$i <= $data->lastPage();$i++)
                                    <li class="{{ $data->currentPage() == $i  ? 'active' : '' }}">
                                        <a href="{{ str_replace('/?','?',$items->url($i)) }}">{{ $i }}</a>
                                    </li>
                                @endfor
                                @if($data->currentPage()==$data->lastPage())
                                    <li><a href="{{ str_replace('/?','?',$data->url($data->currentPage() + 1)) }}"> > </a></li>
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
                                <h5><a href="#">Danh mục </a></h5>
                                <div>
                                    <ul>
                                        @foreach($categoris as $item)
                                            <li><a href="{{ URL::route('product',$item['id']) }}">{{ $item['name'] }}  </a></li>
                                        @endforeach
                                    </ul>
                                </div>

                                <h5><a href="#">Hãng </a></h5>
                                <div>
                                    <ul>
                                        @foreach($hang as $item)
                                            <li><a href="{{ URL::route('hang',$item['id']) }}">{{ $item['tenhang'] }} </a></li>
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
                                            <li><a href="">{{ $item['loaitivi'] }} </a></li>
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
    <!-- CLIENTS -->
    <div class="clients-wrap">
        <div class="container">
            <div class="row heading-wrap">
                <div class="span12 heading">
                    <h2>Thương Hiệu <span></span></h2>
                </div>
            </div>

            <div class="row">
                <div class="span12 clients">
                    <ul class="elastislide-list clearfix" id="carousel">
                        @foreach($hang as $item)
                            <li><a href="{{ URL::route('hang',$item['id']) }}"><img src="{{ asset('upload/'.$item['hinhanh']) }}" alt="" width="141px" height="80px"></a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- CLIENTS -->
@endsection

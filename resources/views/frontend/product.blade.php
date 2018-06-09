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
                <div class="span9 product-grid">
                    <div class=" clearfix">
                        @foreach($products as $item)
                        <div class="span3 product">
                            <div>
                                <figure>
                                    <a href="#"><img src="http://placehold.it/270x180" alt=""></a>
                                    <div class="overlay">
                                        <a href="http://placehold.it/270x180" class="zoom"></a>
                                        <a href="#" class="link"></a>
                                    </div>
                                </figure>
                                <div class="detail">
                                    <span>$244.00</span>
                                    <h4>Brown Wood Chair</h4>
                                    <div class="icon">
                                        <a href="#" class="one tooltip" title="Add to wish list"></a>
                                        <a href="#" class="two tooltip " title="Add to cart"></a>
                                        <a href="#" class="three tooltip" title="Add to compare"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <div class="pagination clearfix">
                        <p>Items 1 to 9 of 12 total</p>
                        <ul class="clearfix">
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">></a></li>
                        </ul>
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
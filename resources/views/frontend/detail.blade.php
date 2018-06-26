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
                                    <span id="image1"><img src="{{ asset('upload/product/image/'.$item->anh )}}" alt=""/></span>

                                    <?php $stt=2 ;foreach($images as $item) :?>
                                    <span id="image.{{$stt}}"><img src="{{ asset('upload/product/image/'.$item->anh )}}" alt="" /></span>
                                    <?php endforeach; $stt++?>
                                </div>
                                <a href="#" class="prev"></a><a href="#" class="next"></a>
                            </div>

                            <div class="bottom">
                                <div id="thumbs-wrapper">
                                    <div id="thumbs">
                                        <a href="#image1" class="selected"><img src="{{ asset('upload/product/image/'.$item->anh )}}"  alt="" /></a>
                                        <?php $stt=2 ;foreach($images as $item) :?>
                                        <span id="image.{{$stt}}"><img src="{{ asset('upload/product/image/'.$item->anh )}}" alt="" /></span>
                                        <?php  $stt++ ; endforeach;?>
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
                                <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. </p>
                                <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent </p>
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
                            <li><a href="#tabs-2">Tags</a></li>
                            <li><a href="#tabs-3">Reviews</a></li>
                        </ul>
                        <!--TABS-->
                        <div id="tabs-1" class="tab" >
                            <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc.</p>
                        </div>

                        <div id="tabs-2" class="tab" >
                            <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo.</p>
                        </div>

                        <div id="tabs-3" class="tab" >
                            <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.</p>
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
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- PRODUCT-OFFER -->
@endsection
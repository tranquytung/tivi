<!doctype html>
<!--[if IE 7]>    <html class="ie7" > <![endif]-->
<!--[if IE 8]>    <html class="ie8" > <![endif]-->
<!--[if IE 9]>    <html class="ie9" > <![endif]-->
<!--[if IE 10]>    <html class="ie10" > <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en-US"> <!--<![endif]-->
		<head>
				<!-- META TAGS -->
				<meta charset="UTF-8" />
				<meta name="viewport" content="width=device-width" />
				
				<!-- Title -->
				<title>Website bán ti vi</title>

                <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,700,600,800' rel='stylesheet' type='text/css'>
                <link href='http://fonts.googleapis.com/css?family=Oswald:400,700' rel='stylesheet' type='text/css'>
                <link href='http://fonts.googleapis.com/css?family=Quattrocento:400,700' rel='stylesheet' type='text/css'>

				<!-- Style Sheet-->
                <link rel="stylesheet" href="{{ url('frontend/css/tooltipster.css') }}">
                <link rel="stylesheet" href="{{ url('frontend/css/ie.css') }}" media="all">
                <link rel="stylesheet" href="{{ url('frontend/css/bootstrap.css') }}">
                <link rel="stylesheet" href="{{ url('frontend/style.css') }}">
				<link rel="stylesheet" href="{{ url('frontend/css/responsive.css') }}">
                <link rel="stylesheet" href="{{ url('frontend/css/prettyPhoto.css') }}">

				
				<!-- favicon -->
				<link rel="shortcut icon" href="{{ url('frontend/images/favicon.jpg') }}">

            <!-- Include the HTML5 shiv print polyfill for Internet Explorer browsers 8 and below -->
            <!--[if lt IE 10]><script src=" {{ url('frontend/js/html5shiv-printshiv.js') }}" media="all"></script><![endif]-->
		</head>
		<body>				
				<!-- HEADER -->
				<div class="header-bar">
                    <div class="container">
                        <div class="row">
                            <div class="pric-icon span2">
                                <a href="#" class="active">Đồ Án Tốt Nghiệp</a>
                            </div>

                            <div class="span10 right">
                                <div class="social-strip">
                                    <ul>
                                        @if(Session::has('user'))
                                            <li><a href="" class="account"> xin chào {{ Session::get('user') }}</a></li>
                                            <li><a href="{{ asset('logout') }}" class="check"> Đăng xuất</a></li>
                                        @else
                                            <li><a href="{{ asset('dangky') }}" class="check">Đăng Ký</a></li>
                                            <li><a href="{{ asset('login') }}" class="account">Đăng Nhập</a></li>
                                        @endif
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
				</div>

                <div class="header-top">
                    <div class="container">
                        <div class="row">

                            <div class="span5">
                                <div class="logo">
                                    <a href="index.html"><img src="{{ url('frontend/images/logo.png') }}" alt=""></a>
                                    <h1><a href="index.html">Khách hàng là <span> Thượng Đế </span></a></h1>
                                </div>
                            </div>

                            <div class="span5">
                                <form action="{{ asset('search') }}" method="get">
                                    <input type="text" placeholder="Nhập từ khóa bạn muốn tìm kiếm" name="txt_search">
                                    <input type="submit" value="">
                                </form>
                            </div>

                            <div class="span2">
                                <div class="cart">
                                    <ul>
                                        <li class="first"><a href="{{ asset('cart/show') }}"></a><span></span></li>
                                        <li>{{ Cart::count() }} SP(s)</li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <header>
                    <div class="container">
                        <div class="row">
                            <div class="span12">
                                <nav class="desktop-nav">
                                    <ul class="clearfix">
                                        <li><a href="{{ URL::route('home') }}">Trang Trủ</a></li>
                                        @foreach($categoris as $item)
                                            <li>
                                                <a href="{{ URL::route('product',$item['id']) }}">{{ $item['name'] }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </nav>
                                 <select>
                                     @foreach($categoris as $item)
                                        <option>{{ $item['name'] }}</option>
                                     @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </header>
				<!-- HEADER -->


                <!-- PRODUCT-OFFER -->
                @yield('content')
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
                                        <li><a href="#"><img src="{{ asset('upload/'.$item['hinhanh']) }}" alt="" width="141px" height="80px"></a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- CLIENTS -->

                <!-- CATEGORIES -->
                <div class="categories-wrap">
                    <div class="container">
                        <div class="row">

                            <div class="span4">
                                <div class="categories">
                                    <figure>
                                        <img src="{{ asset('frontend/images/banner/banner7.png') }}" alt="">
                                        <div class="cate-overlay">
                                            <a href="#">Single Seat</a>
                                        </div>
                                    </figure>
                                </div>
                            </div>

                            <div class="span4">
                                <div class="categories">
                                    <figure>
                                        <img src="{{ asset('frontend/images/banner/banner5.png') }}" alt="">
                                        <div class="cate-overlay">
                                            <a href="#">Surfaces</a>
                                        </div>
                                    </figure>
                                </div>
                            </div>

                            <div class="span4">
                                <div class="categories">
                                    <figure>
                                        <img src="{{ asset('frontend/images/banner/banner4.png') }}" alt="">
                                        <div class="cate-overlay">
                                            <a href="#">Storage</a>
                                        </div>
                                    </figure>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- CATEGORIES -->


                <!-- FOOTER -->
                <div class="shipping-wrap">
                    <div class="container">
                        <div class="row">
                            <div class="span12">
                                <div class="shipping">
                                    <p><span>Miễn Phí Vận Chuyển </span> bởi MAXSHOP - Chúng tôi đặt lợi ích của khách hàng của chúng tôi là trên hết</p>
                                    <a href="#" class="button">Learn more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="footer-wrap">
                    <div class="container">
                        <div class="row">

                            <div class="footer clearfix">

                                <div class="span3">
                                    <div class="widget">
                                        <h3>Customer Service</h3>
                                        <ul>
                                            <li><a href="#">About Us</a></li>
                                            <li><a href="#">Delivery Information</a></li>
                                            <li><a href="#">Privacy Policy</a></li>
                                            <li><a href="#">Terms & Conditions</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="span3">
                                    <div class="widget">
                                        <h3>Information</h3>
                                        <ul>
                                            <li><a href="#">About Us</a></li>
                                            <li><a href="#">Delivery Information</a></li>
                                            <li><a href="#">Privacy Policy</a></li>
                                            <li><a href="#">Terms & Conditions</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="span3">
                                    <div class="widget">
                                        <h3>My Account</h3>
                                        <ul>
                                            <li><a href="#">My Account</a></li>
                                            <li><a href="#">Order History</a></li>
                                            <li><a href="#">Wish List</a></li>
                                            <li><a href="#">Newsletter</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="span3">
                                    <div class="widget">
                                        <h3>Liên hệ</h3>
                                        <ul>
                                            <li>tranquytung96@gmail.com</li>
                                            <li>+097 395 1802</li>
                                            <li>Hỗ trợ 24/24</li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="row">
                            <footer class="clearfix">
                                <div class="span5">
                                    <p>© 2018 Maxshop Design, tranquytung96@gmail.com</p>
                                </div>
                                <div class="span2 back-top">
                                    <a href="#"> <img src="{{ url('frontend/images/back.png') }}" alt=""></a>
                                </div>
                                <div class="span5">
                                    <div class="social-icon">
                                        <a class="rss" href=""></a>
                                        <a class="twet" href=""></a>
                                        <a class="fb" href=""></a>
                                        <a class="google" href=""></a>
                                        <a class="pin" href=""> </a>
                                    </div>
                                </div>
                            </footer>
                        </div>
                    </div>
                </div>
                <!-- FOOTER -->

				
				<!-- Scripts -->
				<script src="{{ url('frontend/js/jquery-1.9.1.min.js') }}"></script>
                <script src="{{ url('frontend/js/jquery-ui.js') }}"></script>
                <script src="{{ url('frontend/js/jquery.cycle.all.js') }}"></script>
                <script src="{{ url('frontend/js/modernizr.custom.17475.js') }}"></script>
                <script src="{{ url('frontend/js/jquery.elastislide.js') }}"></script>
                <script src="{{ url('frontend/js/jquery.carouFredSel-6.0.4-packed.js') }}"></script>
                <script src="{{ url('frontend/js/jquery.selectBox.js') }}"></script>
                <script src="{{ url('frontend/js/jquery.tooltipster.min.js') }}"></script>
                <script src="{{ url('frontend/js/jquery.prettyPhoto.js') }}"></script>
				<script src="{{ url('frontend/js/custom.js') }}"></script>
		</body>
</html>
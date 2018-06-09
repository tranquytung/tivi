@extends("frontend.master_fe")
@section('content')
    <div class="bar-wrap">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <div class="title-bar">
                        <h1>Giỏ Hàng</h1>
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
                <div class="span12">
                    <div class="shopping-cart">

                        <ul class="title clearfix">
                            <li>Hình ảnh</li>
                            <li class="second">Tên sản phẩm</li>
                            <li>Số lượng</li>
                            <li>Giá sản phẩm</li>
                            <li>Thành tiền</li>
                            <li class="last">Thao tác</li>
                        </ul>
                        <ul class=" clearfix">
                            <li>
                                <figure><img src="http://placehold.it/131x86" alt=""></figure>
                            </li>
                            <li class="second">
                                <h4>Brown Wood Chair</h4>
                                <p><span>Color:</span> Brown</p>
                                <p><span>Size:</span> 12</p>
                            </li>
                            <li>
                                <input type="number" value="1">
                            </li>
                            <li>$255.00</li>
                            <li>$255.00</li>
                            <li class="last"><a href="#">X</a></li>
                        </ul>
                        <a href="#" class="red-button">Tiếp tục mua hàng</a>
                        <a href="#" class="red-button black">Cập nhật</a>

                    </div>
                </div>
            </div>

            <div class="row cart-calculator clearfix">
                <div class="span4">
                    <h6>Estimate Shipping & Taxes</h6>
                    <div class="estimate clearfix">
                        <form>
                            <select>
                                <option>-- Select Your Country --</option>
                                <option>Pakistan</option>
                            </select>

                            <select>
                                <option>-- Select Your Region --</option>
                            </select>

                            <input type="text" placeholder="Your Postcode">
                            <input type="submit"  class="red-button" value="Get Quotes" >
                        </form>
                    </div>
                </div>

                <div class="span4">
                    <h6>Discount Codes</h6>
                    <div class="estimate clearfix">
                        <form>
                            <input type="text" placeholder="Your Postcode">
                            <input type="submit"  class="red-button" value="Get Quotes" >
                        </form>
                    </div>
                </div>

                <div class="span4 total clearfix">
                    <ul class="black">
                        <li>Subtotal:</li>
                        <li>Grand total:</li>
                    </ul>
                    <ul class="gray">
                        <li>$1475</li>
                        <li>$1475.00</li>
                    </ul>
                    <a href="#" class="red-button">Proceed to Checkout</a>
                </div>
            </div>

        </div>
    </div>
    <!-- PRODUCT-OFFER -->
@endsection
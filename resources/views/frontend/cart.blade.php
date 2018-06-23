@extends("frontend.master_fe")
<script type="text/javascript">
    function updateCart(qty,rowId) {
        $.get(
            '{{ asset('cart/update') }}',
            { qty:qty,rowId:rowId},
            function () {
                location.reload();
            }
        )
    }
</script>
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
                            <li class="second">Tên sản phẩm</li>
                            <li>Hình ảnh</li>
                            <li>Số lượng</li>
                            <li>Giá sản phẩm</li>
                            <li>Thành tiền</li>
                            <li class="last">Thao tác</li>
                        </ul>
                        @foreach($items as $item)
                        <ul class=" clearfix">
                            <li class="second">
                                <h4>{{ $item->name }}</h4>
                                <p><span>Color:</span> Brown</p>
                                <p><span>Size:</span> 12</p>
                            </li>
                            <li>
                                <figure><img src="{{ asset('upload/product/'.$item->options->img) }}" alt=""></figure>
                            </li>
                            <li>
                                <input type="number" value="{{ $item->qty }}"
                                       onchange="updateCart(this.value,'{{$item->rowId}}')">
                            </li>
                            <li>{{ formatprice($item->price) }} đ</li>
                            <li>{{ formatprice($item->price*$item->qty) }} đ</li>
                            {{--<li class="last"><a href="{{ asset('cart/delete/'.$item->rowId) }}">X</a></li>--}}
                            <li class="last-custom">
                                <form action="{{ route('cart.delete', ['id' => $item->rowId ]) }}" method="post">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                    <input type="submit" value="x">
                                </form>
                            </li>
                        </ul>
                        @endforeach
                        <a href="{{ asset('/') }}" class="red-button">Tiếp tục mua hàng</a>
                        <a href="#" class="red-button black">Cập nhật</a>
                    </div>
                </div>
            </div>

            <div class="row cart-calculator clearfix">
                <div class="span4 total">
                    <ul class="black">
                        <li>Tổng Tiền:</li>
                    </ul>
                    <ul class="gray">
                        <li>{{ $total}}</li>
                    </ul>
                </div>
                <div class="span8 clearfix">
                    <h6>Thông tin khách hàng</h6>
                    <from>
                        <lable>Tên</lable>
                        <input type="text" placeholder="Tên Khánh hàng"/>
                        <lable>Email</lable>
                        <input type="email" placeholder="email khach hang"/>
                        <lable>Địa chỉ</lable>
                        <input type="text" placeholder="Tên Khánh hàng"/>
                        <lable>Số Điện thoại</lable>
                        <input type="number" placeholder="Tên Khánh hàng"/>
                        <lable>Nôi dung</lable>
                        <input type="text" placeholder="Tên Khánh hàng"/>
                        <input type="submit"  class="red-button" value="Xác nhận thanh toán" >
                    </from>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- PRODUCT-OFFER -->
@endsection
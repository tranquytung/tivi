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
                    <form method="post" action="{{ route('show.complete') }}" >
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                       @if(Session::has('user'))

                        <table width="100%">
                            @foreach($khanhang as $item)
                            <tr>
                                <td><lable>Tên</lable></td>
                                <td >
                                    <input  type="text" placeholder="Tên Khánh hàng" name="name"
                                            value="{{ $item['username'] }}"/>
                                    @if($errors->has('name'))
                                        <p>{{  $errors->first('name') }}</p>
                                    @endif
                                </td>
                                <td><lable>Email</lable></td>
                                <td >
                                    <input class="fix-input" name="email" type="text" placeholder="email khach hang"
                                           value="{{ $item['email'] }}"/>
                                    @if($errors->has('email'))
                                        <p>{{  $errors->first('email') }}</p>
                                    @endif
                                </td>

                            </tr>
                            <tr>
                                <td><lable>Địa chỉ</lable></td>
                                <td>
                                    <input type="text" placeholder="Địa Chỉ Khánh hàng" name="diachi"
                                           value="{{ $item['diachi'] }}"/>
                                    @if($errors->has('diachi'))
                                        <p>{{  $errors->first('diachi') }}</p>
                                    @endif
                                </td>
                                <td><lable>Số Điện thoại</lable></td>
                                <td>
                                    <input class="fix-input" type="text" placeholder="Số điện thoại"
                                           name="sdt" value="{{ $item['sdt'] }}">
                                    @if($errors->has('sdt'))
                                        <p>{{  $errors->first('sdt') }}</p>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td><lable>Nôi dung</lable></td>
                                <td><input type="text" placeholder="Tên Khánh hàng" name="noidung" /></td>
                            </tr>
                            <tr>
                                <td colspan="2" style="text-align: right;">
                                    <input type="submit" class="red-button" value="Xác nhận thanh toán" >
                                </td>
                            </tr>
                            @endforeach
                        </table>

                        @else
                            <table width="100%">
                                <tr>
                                    <td><lable>Tên</lable></td>
                                    <td >
                                        <input  type="text" placeholder="Tên Khánh hàng" name="name"/>
                                        @if($errors->has('name'))
                                            <p>{{  $errors->first('name') }}</p>
                                        @endif
                                    </td>
                                    <td><lable>Email</lable></td>
                                    <td >
                                        <input class="fix-input" name="email" type="text" placeholder="email khach hang"/>
                                        @if($errors->has('email'))
                                            <p>{{  $errors->first('email') }}</p>
                                        @endif
                                    </td>

                                </tr>
                                <tr>
                                    <td><lable>Địa chỉ</lable></td>
                                    <td>
                                        <input type="text" placeholder="Địa Chỉ Khánh hàng" name="diachi" />
                                        @if($errors->has('diachi'))
                                            <p>{{  $errors->first('diachi') }}</p>
                                        @endif
                                    </td>
                                    <td><lable>Số Điện thoại</lable></td>
                                    <td>
                                        <input class="fix-input" type="text" placeholder="Số điện thoại"
                                               name="sdt">
                                        @if($errors->has('sdt'))
                                            <p>{{  $errors->first('sdt') }}</p>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td><lable>Nôi dung</lable></td>
                                    <td><input type="text" placeholder="Nội dung" name="noidung" /></td>
                                </tr>
                                <tr>
                                    <td colspan="2" style="text-align: right;">
                                        <input type="submit" class="red-button" value="Xác nhận thanh toán" >
                                    </td>
                                </tr>
                            </table>
                        @endif
                    </form>
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
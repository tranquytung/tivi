@extends("frontend.master_fe")
@section('content')
    <div class="product_wrap">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <div id="check-accordion">
                        <h5><small>ĐĂNG KÝ</small></h5>

                        <div class=" clearfix">
                            <form class="billing-form clearfix" method="post" action="{{ route('user.dangky') }}">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <fieldset>
                                    <label>Name</label>
                                    <input type="text" name="txt_name" placeholder="Tên người sử dụng"/>
                                    @if($errors->has('txt_name'))
                                        <p>{{  $errors->first('txt_name') }}</p>
                                    @endif
                                    <label>Email</label>
                                    <input type="text" name="txt_email" placeholder="email"/>
                                    @if($errors->has('txt_email'))
                                        <p>{{  $errors->first('txt_email') }}</p>
                                    @endif
                                    <label>Mật Khẩu</label>
                                    <input type="password" name="txt_password" placeholder="mật khẩu"/>
                                    @if($errors->has('txt_password'))
                                        <p>{{  $errors->first('txt_password') }}</p>
                                    @endif
                                </fieldset>

                                <fieldset class="last">
                                    <label>Số Điện Thoại</label>
                                    <input type="text" name="txt_sdt" placeholder="số điện thoại"/>
                                    @if($errors->has('txt_sdt'))
                                        <p>{{  $errors->first('txt_sdt') }}</p>
                                    @endif
                                    <label>Địa Chỉ</label>
                                    <input type="text" name="txt_diachi" placeholder="địa chỉ"/>
                                </fieldset>
                                <input type="submit" value="Đăng Ký" class="red-button">
                                <a href="{{ URL::route('home') }}" class="red-button black">Hủy Đăng Ký</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
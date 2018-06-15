@extends("frontend.master_fe")
@section('content')
<div class="product_wrap">

    <div class="container">
        <div class="row">
            <div class="span12">
                <div id="check-accordion">
                    <h5><small>ĐĂNG NHẬP</small><a href="#">ĐIỀN THÔNG TIN</a></h5>

                    <div class="clearfix">
                        <div class="span6 cheakout clearfix register">
                            <h6>Đăng nhập <span> Trải nghiệm</span></h6>
                            <form class="clearfix" method="post" action="{{ route('login') }}">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <label>Email</label>
                                <input type="email" placeholder="tranquytung96@gmail.com" name="txt_email"><br/>
                                @if($errors->has('txt_email'))
                                    <p>{{  $errors->first('txt_email') }}</p>
                                @endif
                                <label>Your Password</label>
                                <input type="password" placeholder="enter your password" name="txt_pass"><br/>
                                @if($errors->has('txt_pass'))
                                    <p>{{  $errors->first('txt_pass') }}</p>
                                @endif
                                <a href="#" >Quên mật khẩu ?</a>
                                <input type="submit" value="Login">
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
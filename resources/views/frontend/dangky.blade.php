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
                                    <input type="text" name="txt_name"/>
                                    @if($errors->has('txt_name'))
                                        <p>{{  $errors->first('txt_name') }}</p>
                                    @endif
                                    <label>Email</label>
                                    <input type="text" name="txt_email"/>
                                    @if($errors->has('txt_email'))
                                        <p>{{  $errors->first('txt_email') }}</p>
                                    @endif
                                    <label>Mật Khẩu</label>
                                    <input type="password" name="txt_password"/>
                                    @if($errors->has('txt_password'))
                                        <p>{{  $errors->first('txt_password') }}</p>
                                    @endif
                                </fieldset>

                                <fieldset class="last">
                                    <label>Số Điện Thoại</label>
                                    <input type="text" name="txt_sdt"/>
                                    @if($errors->has('txt_sdt'))
                                        <p>{{  $errors->first('txt_sdt') }}</p>
                                    @endif
                                    <label>Địa Chỉ</label>
                                    <input type="text" name="txt_diachi"/>
                                </fieldset>
                                <input type="submit" value="Đăng Ký" class="red-button">
                                <a href="#" class="red-button black">Hủy Đăng Ký</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
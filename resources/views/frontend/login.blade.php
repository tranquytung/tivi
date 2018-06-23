@extends("frontend.master_fe")
@section('content')
    <div class="product_wrap">

        <div class="container">
            <div class="row">
                <div class="span12">
                    <div id="check-accordion">
                        <h5><small>ĐĂNG NHẬP</small><a href="#">ĐIỀN THÔNG TIN</a></h5>

                        <div class="clearfix" >


                            <form class="clearfix" method="post" action="{{ route('login') }}" >
                                <table class="table-login" align="center">
                                    <tr>
                                        <td colspan="2"><h6>Đăng nhập</h6></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <label>Email</label>
                                        </td>
                                        <td style="padding: 0 10px">
                                            <input type="email" placeholder="tranquytung96@gmail.com" name="txt_email"><br/>
                                            @if($errors->has('txt_email'))
                                                <p>{{  $errors->first('txt_email') }}</p>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label>Password</label></td>
                                        <td style="padding: 0 10px"><input type="password" placeholder="enter your password" name="txt_pass"><br/>
                                            @if($errors->has('txt_pass'))
                                                <p>{{  $errors->first('txt_pass') }}</p>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> <a href="#" >Quên mật khẩu ?</a></td>
                                        <td> <input type="submit" value="Đăng nhập"></td>

                                    </tr>



                                </table>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
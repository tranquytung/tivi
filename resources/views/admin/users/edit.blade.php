@extends("admin.master")
@section("page","Sửa khách hàng")
@section("homepage","khách hàng")
@section('add')
    <a href="{{ route('admin.users.list') }}" class="btn btn-xs btn-success"> <i class="fa fa-backward"></i></a>
@endsection
@section('content')
    <div class="box-body">
        <div class="row">
            <div class="col-md-12">
                <form class="form-horizontal" method="post"  action="" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-md-2 control-label">Họ Và Tên</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" id="inputEmail3" placeholder="Họ Và Tên" name="txt_name"
                                   value="{{ old('txt_name', isset($data) ? $data['username'] : null ) }}">
                            @if($errors->has('txt_name'))
                                <p>{{  $errors->first('txt_name') }}</p>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-md-2 control-label">Email</label>
                        <div class="col-md-8">
                            <input type="email" class="form-control" id="inputEmail3" placeholder="Nhập email" name="txt_email"
                                   value="{{ old('txt_email', isset($data) ? $data['email'] : null ) }}">
                            @if($errors->has('txt_email'))
                                <p>{{  $errors->first('txt_email') }}</p>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail3" class="col-md-2 control-label">Địa chỉ</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" id="inputEmail3" placeholder="Nhập địa chỉ" name="txt_diachi"
                                   value="{{ old('txt_diachi', isset($data) ? $data['diachi'] : null ) }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail3" class="col-md-2 control-label">Số điện thoại</label>
                        <div class="col-md-8">
                            <input type="number" class="form-control" id="inputEmail3" placeholder="Nhập số điện thoại" name="txt_sdt"
                                   value="{{ old('txt_sdt', isset($data) ? $data['sdt'] : null ) }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail3" class="col-md-2 control-label">Password</label>
                        <div class="col-md-8">
                            <input type="password" class="form-control" id="inputEmail3" placeholder="Nhập password" name="txt_pass">
                            @if($errors->has('txt_pass'))
                                <p>{{  $errors->first('txt_pass') }}</p>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-8">
                            <button type="submit" class="btn btn-success" >Lưu</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
@endsection
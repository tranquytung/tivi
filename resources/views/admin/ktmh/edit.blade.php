@extends("admin.master")
@section("page","Sửa kích thước màn hình")
@section("homepage","Kích thước màn hình")
@section('add')
    <a href="{{ route('admin.ktmh.list') }}" class="btn btn-xs btn-success"> <i class="fa fa-backward"></i></a>
@endsection
@section('content')
    <div class="box-body">
        <div class="row">
            <div class="col-md-12">
                <form class="form-horizontal" method="post" action="" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-md-2 control-label">Độ phân giải</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" id="inputEmail3" placeholder="Nhâp vào tên hãng" name="txt_ktmh"
                                   value="{{ old('txt_ktmh',isset($data) ? $data['kichthuoc'] : null ) }}">
                            @if($errors->has('txt_ktmh'))
                                <p>{{  $errors->first('txt_ktmh') }}</p>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-8">
                            <button type="submit" class="btn btn-success">Lưu</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
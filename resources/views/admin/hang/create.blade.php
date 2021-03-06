@extends("admin.master")
@section("page","Thêm sách hãng")
@section("homepage","Hãng")
@section('add')
    <a href="{{ route('admin.hang.list') }}" class="btn btn-xs btn-success"> <i class="fa fa-backward"></i></a>
@endsection
@section('content')
    <div class="box-body">
        <div class="row">
            <div class="col-md-12">
                <form class="form-horizontal" method="post" action="{{ route('admin.hang.postAdd') }}" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-md-2 control-label">Tên Hãng <span>(*)</span> </label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" id="inputEmail3" placeholder="Nhâp vào tên hãng" name="txt_hang">
                            @if($errors->has('txt_hang'))
                                <p>{{  $errors->first('txt_hang') }}</p>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-md-2 control-label">Ảnh Đại Diện <span>(*)</span> </label>
                        <div class="col-md-8">
                            <input type="file" name="anhhang" class="form-control" id="inputEmail3">
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
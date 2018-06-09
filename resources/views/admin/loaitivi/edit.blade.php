@extends("admin.master")
@section("page","Sửa loại ti vi")
@section("homepage","Loại ti vi")
@section('add')
    <a href="{{ route('admin.loaitivi.list') }}" class="btn btn-xs btn-success"> <i class="fa fa-backward"></i></a>
@endsection
@section('content')
    <div class="box-body">
        <div class="row">
            <div class="col-md-12">
                <form class="form-horizontal" method="post" action="" >
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-md-2 control-label">Tên Hãng</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" id="inputEmail3" placeholder="Nhâp vào tên hãng" name="txt_loaitivi"
                                   value="{{ old('txt_loaitivi',isset($data) ? $data['loaitivi'] : null ) }}">
                            @if($errors->has('txt_loaitivi'))
                                <p>{{  $errors->first('txt_loaitivi') }}</p>
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
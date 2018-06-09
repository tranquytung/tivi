@extends("admin.master")
@section("page","Thêm danh mục mới")
@section("homepage","Danh mục")
@section('add')
    <a href="{{ route('admin.category.list') }}" class="btn btn-xs btn-success"> <i class="fa fa-backward"></i></a>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <form class="form-horizontal" method="post" action="{{ route('admin.category.postAdd') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label for="inputEmail3" class="col-md-2 control-label">Tên Danh Mục</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" id="inputEmail3" placeholder="Nhâp vào tên danh mục" name="txt_name">
                        @if($errors->has('txt_name'))
                            <p>{{  $errors->first('txt_name') }}</p>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-md-2 control-label">Dường dẫn</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" id="inputEmail3" placeholder="Nếu không nhập thì tự hiểu" name="txt_slug">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-md-2 control-label">Ẩn / Hiện </label>
                    <div class="col-md-8">
                        <select name="sl_active" id="" class="form-control">
                            <option value="0">Ẩn</option>
                            <option value="1">Hiện</option>
                        </select>
                        <p class="text-danger" id="active_error"></p>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-8">
                        <button type="submit" class="btn btn-success" >Lưu</button>
                    </div>
                <div>
            </form>
        </div>
    </div>
@endsection
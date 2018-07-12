@extends("admin.master")
@section("page","Thêm sẩn phẩm")
@section("homepage","Thêm sản phẩm")
@section('add')
    <a href="{{ route('admin.product.list') }}" class="btn btn-xs btn-success"> <i class="fa fa-backward"></i></a>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <form class="form-horizontal" method="post" action="{{ route('admin.product.postAdd') }}" enctype="multipart/form-data">
                <div class="col-md-12">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-md-3 control-label">Tên Sản Phẩm</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="inputEmail3" placeholder="Nhâp vào tên sản phẩm" name="txt_name">
                                @if($errors->has('txt_name'))
                                    <p>{{  $errors->first('txt_name') }}</p>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-md-3 control-label">Đường dẫn</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="inputEmail3" placeholder="Đường dẫn sản phẩm" name="txt_slug">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-md-3 control-label">Giá</label>
                            <div class="col-md-8">
                                <input type="number" class="form-control" id="inputEmail3" placeholder="Nhâp vào giá" name="txt_price">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-md-3 control-label">Giảm Giá</label>
                            <div class="col-md-8">
                                <input type="number" class="form-control" id="inputEmail3" placeholder="%" name="txt_discount">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-md-3 control-label">Số lượng</label>
                            <div class="col-md-8">
                                <input type="number" class="form-control" id="inputEmail3" placeholder="Nhập vào số lượng" name="txt_number">
                                @if($errors->has('txt_number'))
                                    <p>{{  $errors->first('txt_number') }}</p>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-md-3 control-label">Ảnh Đại Diện</label>
                            <div class="col-md-8">
                                <input type="file" class="form-control" id="inputEmail3" name="avatar">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail3" class="col-md-3 control-label">Kích thước màn hình</label>
                            <div class="col-md-8">
                                <select name="sl_ktmh" id="" class="form-control">
                                    <?php foreach($ktmh as $item) :?>
                                    <option value="{{ $item['id'] }}"> {{ $item['kichthuoc'] }} Inch</option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-md-3 control-label">Hãng</label>
                            <div class="col-md-8">
                                <select name="sl_hang" id="" class="form-control">
                                    <?php foreach ($hang as $item) :?>
                                    <option value="{{ $item['id'] }}">
                                        {{ $item['tenhang'] }}
                                    </option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-md-3 control-label">Loại Ti Vi</label>
                            <div class="col-md-8">
                                <select name="sl_loaitivi" id="" class="form-control">
                                    <?php foreach ($loaitivi as $item) :?>
                                    <option value="{{ $item['id'] }}">
                                        {{ $item['loaitivi'] }}
                                    </option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-md-3 control-label">Độ phân giải</label>
                            <div class="col-md-8">
                                <select name="sl_dophangiai" id="" class="form-control">
                                    <?php foreach ($dophangiai as $item) :?>
                                    <option value="{{ $item['id'] }}">
                                        {{ $item['dophangiai'] }}
                                    </option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-md-3 control-label">Ẩn / Hiện</label>
                            <div class="col-md-8">
                                <select name="sl_active" id="" class="form-control">
                                    <option value="1">Hiện</option>
                                    <option value="0">Ẩn</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-md-3 control-label">Thuộc Danh Mục</label>
                            <div class="col-md-8">
                                <select name="sl_category[]" id="" class="form-control" multiple>
                                    <?php foreach($cate as $item) :?>
                                        <option value="{{ $item['id']  }}">{{ $item['name'] }}</option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-md-3 control-label">Sản phẩm mới</label>
                            <div class="col-md-8">
                                <select name="sl_new" id="" class="form-control">
                                    <option value="0">Không</option>
                                    <option value="1">Có</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group" id="css-nd">
                        <label for="inputEmail3" class="col-md-2 control-label">Nội Dung</label>
                        <div class="col-md-9">
                            <textarea class="form-control"  id="nd" name="content" rows="1"></textarea>
                            <script >
                                config={};
                                config.entities_latin=false;
                                config.language="vi";
                                CKEDITOR.replace('nd',config);
                            </script>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-3">
                            <button type="submit" class="btn btn-success">Lưu</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection

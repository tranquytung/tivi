@extends("admin.master")
@section("page","Danh sách hóa đơn")
@section("homepage","Danh mục")
@section('add')
    <a href="{{ route('admin.hoadon.list') }}" class="btn btn-xs btn-success"><i class="fa fa-backward"></i></a>
@endsection
@section('content')
    <form action="{{ route('admin.category.postSearch') }}" method="post">
        <div class="input-group input-group-sm pull-right" style="width: 150px;margin-bottom: 10px">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="text" name="tukhoa" class="form-control pull-right" placeholder="Search">
            <div class="input-group-btn">
                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
            </div>
        </div>
    </form>
    <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
        <div class="row">
            <div class="col-sm-12">
                <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                    <thead>
                    <tr role="row">
                        <th>STT</th>
                        <th>Tên Sản Phẩm</th>
                        <th>Địa chỉ</th>
                        <th>Số điện thoại</th>
                        <th>Thanh Toán</th>
                        <th>Thao Tác</th>
                    </tr>
                    </thead>
                    <tbody class="danhsach">
                    <?php $stt=1; foreach($data as $item) :?>
                    <tr role="row" class="odd">
                        <td class=""> {{ $stt }}</td>
                        <td class="sorting_1">{{ $item['username'] }} </td>
                        <td class="sorting_1">{{$item['diachi']}}</td>
                        <td class="sorting_1">{{ $item['sdt'] }}</td>
                        <td class="sorting_1">
                            <a href="{{ URL::route('admin.hoadon.getActive',$item['id']) }}"
                               class=" {{ $item['status'] == 0 ? 'btn btn-xs btn-success' : "btn btn-xs btn-primary"}} ">
                            {{ $item['status'] == 0 ? 'Chưa Thanh Toán' : "Đã Thanh Toán"}}
                            </a>
                        </td>

                        <td class="">
                            <a href="{{ URL::route('admin.hoadon.getView',$item['id']) }}" class="btn btn-xs btn-primary">view
                                <i class="fa fa-edit"></i>
                            </a>
                            <a href="{{ URL::route('admin.hoadon.getDelete',$item['id']) }}" class="btn btn-xs btn-success">
                                <i class="fa fa-remove" aria-hidden="true"></i>
                            </a>
                        </td>
                    </tr>
                    <?php $stt++; endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="box-footer clearfix">
        <ul class="pagination pagination-sm no-margin pull-right">
            @if($data->lastPage() > 1)
                @if($data->currentPage()!=1)
                    <li><a href="{{ $data->url($data->currentPage()-1) }}">«</a></li>
                @endif
                @for($i=1;$i<= $data->lastPage(); $i++)
                    <li class="{{ ($data->currentPage()==$i) ?  'active' : ' ' }}">
                        <a href="{{ $data->url($i) }}">{{ $i }}</a>
                    </li>
                @endfor
                @if($data->currentPage()!=$data->lastPage())
                    <li><a href="{{ $data->url($data->currentPage()+1) }}">»</a></li>
                @endif
            @endif
        </ul>
    </div>
@endsection
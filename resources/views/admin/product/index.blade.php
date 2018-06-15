@extends("admin.master")
@section("page","Danh sách sản phẩm")
@section("homepage","Danh sách sản phẩm")
@section('add')
    <a href="{{ route('admin.product.getAdd') }}" class="btn btn-xs btn-success"><i class="fa fa-plus"></i></a>
@endsection
@section('content')

    <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
        <div class="row">
            <div class="col-sm-12">
                <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                    <thead>
                    <tr role="row">
                        <th>STT</th>
                        <th>Hình Ảnh</th>
                        <th>Tên SP</th>
                        <th>Thông tin</th>
                        <th>Ẩn?Hiện </th>
                        <th>Thao Tác</th>
                    </tr>
                    </thead>
                    <tbody class="dsproduct">
                    @if(count($data) > 0 )
                        <?php $stt=0 ?>
                        @foreach($data as $item)
                            <?php $stt++ ?>
                            <tr role="row" class="odd">
                                <td class="sorting_1">{{ $stt }} </td>
                                <td class="sorting_1"><img src="{{ asset('upload/product/'.$item['anh']) }}" alt="" width="80px" height="80px"></td>
                                <td class="sorting_1"> {{ $item['TenSP'] }}</td>
                                <td class="sorting_1">
                                    <ul>
                                        <li>Hãng&nbsp;:&nbsp;</li>
                                        <li>Giá&nbsp;:&nbsp;{{ formatprice_KM($item['Gia'],$item['sale']) }} đ</li>
                                        <li>Sale&nbsp;:&nbsp;{{ $item['sale'] }} %</li>
                                        <li>Số lượng&nbsp;:&nbsp; {{ $item['soluong'] }}</li>
                                    </ul>
                                </td>
                                <td class="sorting_1">
                                    <a href="" >{{ $item['active']==1 ? 'Hiện' : 'Ẩn' }}</a>
                                </td>
                                <td class="">
                                    <a href="{{ URL::route('admin.product.getEdit',$item['id_sp']) }}" class="btn btn-xs btn-primary">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="{{ URL::route('admin.product.getDelete',$item['id_sp']) }}" class="btn btn-xs btn-success">
                                        <i class="fa fa-remove" aria-hidden="true"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
<style>
    #css-nd .col-md-2{
        width: 15.57%;
    }
    #css-nd .col-md-9{
        width: 76.8%;
    }
</style>
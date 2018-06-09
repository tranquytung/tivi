@extends("admin.master")
@section("page","Danh sách admin")
@section("homepage","Hãng")
@section('add')
    <a href="{{ route('admin.quanli.getAdd') }}" class="btn btn-xs btn-success"><i class="fa fa-plus"></i></a>
@endsection

@section('content')
    <form action="{{ route('admin.quanli.postSearch') }}" method="post">
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
                        <th>Tên Admin</th>
                        <th>Email</th>
                        <th>Số Điện Thoại</th>
                        <th>Thao Tác</th>
                    </tr>
                    </thead>
                    <tbody class="dsadmin">
                    <?php $stt=1; foreach($data as $item) :?>
                    <tr role="row" class="odd">
                        <td class="sorting_1"><?php echo $stt; ?> </td>
                        <td class="sorting_1"><?= $item['name'] ?></td>
                        <td class="sorting_1"><?= $item['email']?> </td>
                        <td class="sorting_1"><?= $item['sdt']?> </td>
                        <td class="">
                            <a href="{{ URL::route('admin.quanli.getEdit',$item['id']) }}" class="btn btn-xs btn-primary">
                                <i class="fa fa-edit"></i>
                            </a>
                            <a href="{{ URL::route('admin.quanli.getDelete',$item['id']) }}" class="btn btn-xs btn-success">
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
@endsection
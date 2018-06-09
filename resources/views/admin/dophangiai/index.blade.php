@extends("admin.master")
@section("page","Danh sách độ phân giải")
@section("homepage","Độ phân giải")
@section('add')
    <a href="{{ route('admin.dophangiai.getAdd') }}" class="btn btn-xs btn-success"><i class="fa fa-plus"></i></a>
@endsection
@section('content')
    <form action="{{ route('admin.dophangiai.postSearch') }}" method="post">
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
                        <th>Độ Phân Giải</th>
                        <th>Thao Tác</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(count($data) > 0 )
                        <?php $stt=0 ?>
                        @foreach($data as $item)
                            <?php $stt++ ?>
                            <tr>
                                <td>{{ $stt }}</td>
                                <td>{{ $item['dophangiai'] }}</td>
                                <td>
                                    <a href="{{ URL::route('admin.dophangiai.getEdit',$item['id']) }}" class="btn btn-xs btn-primary">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="{{ URL::route('admin.dophangiai.getDelete',$item['id']) }}" class="btn btn-xs btn-success"
                                        onclick="return confirm('Bạn chắc chán xóa không')">
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
        {{--phân trang--}}
        <div class="box-footer clearfix">
            <ul class="pagination pagination-sm no-margin pull-right">
                @if($data->lastPage() > 1 )
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
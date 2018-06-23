<front face="Arial">
    <div></div>
    <div>
        <h3><front color="#FF9600">Thông Tin Khách Hàng</front></h3>
        <p>
            <strong> Khách Hàng :</strong>
            {{ info['name'] }}
        </p>
        <p>
            <strong> Email :</strong>
            {{ info['email'] }}
        </p>
        <p>
            <strong> Số điện thoai :</strong>
            {{ info['sdt'] }}
        </p>
        <p>
            <strong> Địa chỉ:</strong>
            {{ info['diachi'] }}
        </p>
    </div>
    <div>
        <h3><front color="#FF9600">Hóa đơn mua hàng</front></h3>
        <table border="1" cellpadding="0">
            <tr>
                <td>Tên sản phẩm</td>
                <td>Giá</td>
                <td>Số Lượng</td>
                <td>Thành Tiền</td>
            </tr>
            @foreach($cart as $item)
                <tr>
                    <td>{{ $item->name }}</td>
                    <td>{{ formatprice($item->price) }} đ</td>
                    <td>{{ $item->qty }}</td>
                    <td>{{ formatprice($item->price*$item->qty) }}</td>
                </tr>
            @endforeach
            <tr>
                <td>Tổng tiền : </td>
                <td colspan="3"> {{ formatprice($total)}}</td>
            </tr>
        </table>
    </div>
    <div>
        <h3><front color="#FF9600">Quý Khách đặt hàng thành công</front></h3>
    </div>
</front>

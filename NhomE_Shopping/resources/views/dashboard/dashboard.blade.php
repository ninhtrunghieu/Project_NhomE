@extends('layouts.admin')

@section('title')
<title>Trang quản trị</title>
@endsection

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Thống kê</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Thống kê</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Biểu đồ danh số</h3>
                    <a id="btn-filter" class="btn btn-warning" style="margin-left: 20px;">Lọc</a>
                    <input type="date" class="form-control" name="start" id="start" style="display:inline;width:200px">
                    <input type="date" class="form-control" name="end" id="end" style="display:inline;width:200px">
                </div>
                <div class="card-body">
                    <div id="myfirstchart" style="height: 250px;"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Thêm các thư viện Morris.js và jQuery -->
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

<script>
    $(document).ready(function () {
        // Khởi tạo biểu đồ rỗng
        var chart = Morris.Bar({
            element: 'myfirstchart',
            data: [],
            xkey: 'period',
            ykeys: ['order', 'sales', 'profit', 'quantity'],
            labels: ['Đơn hàng', 'Doanh số', 'Lợi nhuận', 'Số lượng']
        });

        // Xử lý sự kiện khi nhấn nút Lọc
        $('#btn-filter').on('click', function () {
            var start = $('#start').val();
            var end = $('#end').val();

            $.ajax({
                url: "{{ route('dashboard.get') }}",
                method: 'POST',
                data: {
                    "_token": "{{ csrf_token() }}",
                    start: start,
                    end: end
                },
                success: function (res) {
                    if (res.error) {
                        // Hiển thị thông báo lỗi nếu không có dữ liệu
                        alert(res.error);
                        chart.setData([]); // Xóa dữ liệu biểu đồ nếu không có dữ liệu
                    } else {
                        // Cập nhật biểu đồ với dữ liệu mới
                        chart.setData(res);
                    }
                },
                error: function (mess) {
                    console.log("Lỗi:", mess);
                }
            });
        });
    });
</script>
@endsection
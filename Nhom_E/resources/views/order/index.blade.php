@extends('layouts.admin')
@section('title')
<title>Trang quản trị</title>
@endsection
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Danh sách hóa đơn</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/home">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Danh sách hóa đơn</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Danh sách hóa đơn</h3>
                </div>
                @if (session('status'))
                <p class="text-warning" style="margin:0px;padding:0px;margin-left:20px">
                    {{ session('status') }}
                </p>
                @endif
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Họ tên</th>
                                <th>Điện thoại</th>
                                <th>Địa chỉ</th>
                                <th>Tổng tiền</th>
                                <th>Ngày gửi</th>
                                <th style="width: 14%;">Trạng thái</th>
                                <th style="width: 10%;">Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($datas as $item)
                            <tr>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->phone }}</td>
                                <td>{{ $item->address }}</td>
                                <td>{{ number_format($item->total) }} VNĐ</td>
                                <td>{{ date("d-m-Y", strtotime($item->created_at)) }}</td>
                                <td>
                                    <button type="button" onclick="confirm(this)" id="{{$item->id}}" class="btn btn-default" data-toggle="modal" data-target="#modal-sm">
                                        @if($item->status == 0)
                                        <span style="font-weight:700;color:red">Chờ</span>
                                        @elseif($item->status == 1)
                                        <span style="font-weight:700;color:blue">Xác nhận</span>
                                        @elseif($item->status == 2)
                                        <span style="font-weight:700;color:green">Đang giao</span>
                                        @elseif($item->status == 3)
                                        <span style="font-weight:700;color:black">Thanh toán</span>
                                        @elseif($item->status == 4)
                                        <span style="font-weight:700;color:yellow">Đã hủy</span>
                                        @elseif($item->status == 5)
                                        <span style="font-weight:700;color:orange">Hoàn thành</span>
                                        @endif
                                    </button>
                                </td>
                                <td class="text-center">
                                    <a href="{{ route('orders.export',['id' => $item->id]) }}" class="btn btn-sm btn-success"><i class="far fa-file-word"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <th>Họ tên</th>
                            <th>Điện thoại</th>
                            <th>Địa chỉ</th>
                            <th>Tổng tiền</th>
                            <th>Ngày gửi</th>
                            <th>Trạng thái</th>
                            <th>Thao tác</th>
                        </tfoot>
                    </table>

                </div>
                <!-- /.card-body -->
            </div>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<div class="modal fade" id="modal-sm">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Trạng thái đơn hàng</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="radio" name="status" checked value="0"> Chờ xác nhận </br>
                <input type="radio" name="status" value="1"> Đã xác nhận </br>
                <input type="radio" name="status" value="2"> Đang giao </br>
                <input type="radio" name="status" value="3"> Đã thanh toán</br>
                <input type="radio" name="status" value="4"> Đã hủy </br>
                <input type="radio" name="status" value="5"> Hoàn thành </br>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                <button type="button" id="btn-status" class="btn btn-primary">Lưu</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<script src="{{ asset('admin_template/plugins/jquery/jquery.min.js') }}"></script>
<script>
    var id;
    function confirm(xthis){
        id = xthis.id;
    }
    $('#btn-status').on('click', function() {
        var value = $("input[name='status']:checked").val();
        $.ajax({
            url: "{{url('/orders/change-status')}}",
            method: 'post',
            data: {
                "_token": "{{ csrf_token() }}",
                id,
                value
            },
            success: function(res) {
                if (res) {                 
                    toastr.success('Cập nhật trạng thái đơn hàng thành công!');
                    setTimeout(function(){
                        location.reload(); 
                    },1000);
                                      
                }
            },
            error: function(mess) {
                console.log(mess);
            }
        })

    })
</script>
@endsection
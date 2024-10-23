@extends('layouts.admin')
@section('title')
<title>Trang quản trị</title>
@endsection
@section('content')
<div class="content-wrapper">
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title" style="font-size: 24px; font-weight: bold;">Danh sách sản phẩm</h3>
                    <a href="#" class="btn btn-warning float-right">Thêm mới</a>
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
                                <th>Tên</th>
                                <th>Hình ảnh</th>
                                <th>Số lượng</th>
                                <th>Đơn giá</th>
                                <th>Khuyến mãi</th>
                                <th style="width: 12%;">Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($datas as $item)
                            <tr>
                                <td>{{ $item->name }}</td>
                                <td>
                                    <img src="/images/{{ $item->images }}" style="width:100px;height:80px" alt="">
                                </td>
                                <td>{{ $item->quatity }}</td>
                                <td style="font-weight:600;color:red">{{ number_format($item->price) }} đồng</td>
                                <td style="font-weight:500;color:green">{{ number_format($item->discount) }} đồng</td>
                                
                                <td>
                                    <a href="{{ route('products.edit',['id' => $item->id]) }}" class="btn btn-sm btn-success"><i class="icon ion-android-create"></i></a>

                                    <!-- Nút xóa với modal xác nhận -->
                                    <button class="btn btn-sm btn-danger" onclick="showDeleteModal({{ $item->id }})"><i class="icon ion-android-delete"></i></button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Modal Xác Nhận Xóa -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Xác nhận xóa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Bạn có chắc chắn muốn xóa sản phẩm này không?
            </div>
            <div class="modal-footer">
                <form id="deleteForm" action="" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                    <button type="submit" class="btn btn-danger">Xóa</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Thêm JavaScript để hiển thị modal -->
<script type="text/javascript">
    function showDeleteModal(id) {
        const form = document.getElementById('deleteForm');
        form.action = `/products/delete/${id}`; // Thiết lập đường dẫn đến hành động xóa
        var modal = new bootstrap.Modal(document.getElementById('deleteModal'));
        modal.show(); // Hiện modal
    }
</script>

<!-- Thêm Bootstrap JS nếu chưa có -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

@endsection

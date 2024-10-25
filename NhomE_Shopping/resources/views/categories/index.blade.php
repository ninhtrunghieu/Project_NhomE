@extends('layouts.admin')
@section('title')
<title>Trang quản trị</title>
@endsection
@section('content')
<div class="content-wrapper">

    <div class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title" style="font-size: 24px; font-weight: bold;">Danh sách danh mục</h3>
                    <a href="{{ route('categories.create') }}" class="btn btn-warning float-right">Thêm mới</a>
                </div>
                @if (session('status'))
                    <p class="text-warning" style="margin:0px;padding:0px;margin-left:20px">
                        {{ session('status') }}
                    </p>
                @endif
                <div class="card-body">
                    <!-- Dropdown để chọn số lượng kết quả hiển thị -->
                    <form method="GET" action="{{ route('categories.index') }}" class="mb-3">
                        <div class="form-group">
                            <label for="per_page">Hiển thị:</label>
                            <select name="per_page" id="per_page" class="form-control d-inline" style="width: auto;"
                                onchange="this.form.submit()">
                                <option value="10" {{ request('per_page') == 10 ? 'selected' : '' }}>10</option>
                                <option value="25" {{ request('per_page') == 25 ? 'selected' : '' }}>25</option>
                                <option value="50" {{ request('per_page') == 50 ? 'selected' : '' }}>50</option>
                                <option value="100" {{ request('per_page') == 100 ? 'selected' : '' }}>100</option>
                            </select>
                            <label>Kết quả</label>
                        </div>
                    </form>

                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Tên danh mục</th>
                                <th style="width:14%">Ngày tạo</th>
                                <th style="width: 12%;">Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($datas as $item)
                                <tr>
                                    <td>{{ $item->category_name }}</td>
                                    <td>{{ date("d-m-Y", strtotime($item->created_at)) }}</td>
                                    <td>
                                        <a href="{{ route('categories.edit', ['id' => $item->id]) }}"
                                            class="btn btn-sm btn-success"><i class="icon ion-android-create"></i></a>
                                        <a href="{{ route('categories.delete', ['id' => $item->id]) }}"
                                            class="btn btn-sm btn-danger"><i class="icon ion-android-delete"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-center mt-3">
                        {{ $datas->links() }} <!-- Phân trang -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
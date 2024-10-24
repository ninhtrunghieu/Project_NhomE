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
                                    <a href="{{ route('categories.edit',['id' => $item->id]) }}" class="btn btn-sm btn-success"><i class="icon ion-android-create"></i></a>
                                    <a href="{{ route('categories.delete',['id' => $item->id]) }}" class="btn btn-sm btn-danger"><i class="icon ion-android-delete"></i></a>
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

@endsection
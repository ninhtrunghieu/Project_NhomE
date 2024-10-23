<?php $__env->startSection('title'); ?>
<title>Trang quản trị</title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Danh sách sản phẩm</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/home">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Danh sách sản phẩm</li>
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
                    <h3 class="card-title">Danh sách sản phẩm</h3>
                    <a style="margin-left: 20px;" href="<?php echo e(route('products.create')); ?>" class="btn btn-warning">Thêm mới</a>
                </div>
                <?php if(session('status')): ?>
                <p class="text-warning" style="margin:0px;padding:0px;margin-left:20px">
                    <?php echo e(session('status')); ?>

                </p>
                <?php endif; ?>
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Tên</th>
                                <th>Hình ảnh</th>
                                <th>Số lượng</th>
                                <th>Đơn giá</th>
                                <th>Khuyến mãi</th>
                                <th>Hiển thị</th>
                                <th>Hot</th>
                                <th>Bật/Tắt KM</th>
                                <th style="width: 12%;">Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($item->name); ?></td>
                                <td>
                                    <img src="/images/<?php echo e($item->images); ?>" style="width:100px;height:80px" alt="">
                                </td>
                                <td><?php echo e($item->quatity); ?></td>
                                <td style="font-weight:600;color:red"><?php echo e(number_format($item->price)); ?> đồng</td>
                                <td style="font-weight:500;color:green"><?php echo e(number_format($item->discount)); ?> đồng</td>
                                <td>
                                    <input type="checkbox" <?php echo e($item->homeflag); ?> name="homeflag">
                                </td>
                                <td>
                                    <input type="checkbox" <?php echo e($item->hotflag); ?> name="hotflag">
                                </td>
                                <td>
                                    <input type="checkbox" <?php echo e($item->isdiscount); ?> name="isdiscount">
                                </td>
                                <td>
                                    <a href="<?php echo e(route('products.edit',['id' => $item->id])); ?>" class="btn btn-sm btn-success"><i class="icon ion-android-create"></i></a>
                                    <a href="<?php echo e(route('products.delete',['id' => $item->id])); ?>" class="btn btn-sm btn-danger"><i class="icon ion-android-delete"></i></a>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                        <tfoot>
                            <th>Tên</th>
                            <th>Hình ảnh</th>
                            <th>Số lượng còn</th>
                            <th>Đơn giá</th>
                            <th>Khuyến mãi</th>
                            <th>Hiển thị</th>
                            <th>Hot</th>
                            <th>Bật/Tắt KM</th>
                            <th style="width: 12%;">Thao tác</th>
                        </tfoot>
                    </table>

                </div>
                <!-- /.card-body -->
            </div>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\shopping\resources\views/products/index.blade.php ENDPATH**/ ?>
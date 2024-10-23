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
                    <h1 class="m-0 text-dark">Danh sách doanh số</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/home">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Danh sách doanh số</li>
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
                    <h3 class="card-title">Danh sách danh mục</h3>
                    <a style="margin-left: 20px;" href="<?php echo e(route('statistics.create')); ?>" class="btn btn-warning">Thêm mới</a>
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
                                <th>Ngày tạo</th>
                                <th>Lợi nhuận</th>
                                <th>Chi phí</th>
                                <th>Tổng sản phẩm bán</th>
                                <th>Tổng hóa đơn</th>
                                <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($item->order_date); ?></td>
                                <td><?php echo e(number_format($item->sales)); ?> đồng</td>
                                <td><?php echo e(number_format($item->profit)); ?> đồng</td>
                                <td><?php echo e($item->quantity); ?></td>
                                <td><?php echo e($item->total_order); ?></td>
                                <td>
                                    <a href="<?php echo e(route('statistics.edit',['id' => $item->id])); ?>" class="btn btn-sm btn-success"><i class="icon ion-android-create"></i></a>
                                    <a href="<?php echo e(route('statistics.delete',['id' => $item->id])); ?>" class="btn btn-sm btn-danger"><i class="icon ion-android-delete"></i></a>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Ngày tạo</th>
                                <th>Lợi nhuận</th>
                                <th>Chi phí</th>
                                <th>Tổng sản phẩm bán</th>
                                <th>Tổng hóa đơn</th>
                                <th>Thao tác</th>
                            </tr>
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
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\shopping\resources\views/statistics/index.blade.php ENDPATH**/ ?>
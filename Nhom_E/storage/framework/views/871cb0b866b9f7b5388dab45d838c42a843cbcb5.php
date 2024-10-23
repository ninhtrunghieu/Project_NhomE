<?php $__env->startSection('title'); ?>
<title>Trang quản trị</title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="content-wrapper">

    <div class="content">
        <div class="container-fluid">
            <div class="card">
            <div class="card-header">
                    <h3 class="card-title" style="font-size: 24px; font-weight: bold;">Danh sách danh mục</h3>
                    <a href="#" class="btn btn-warning float-right">Thêm mới</a>
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
                                <th>Tên danh mục</th>
                                <th style="width:14%">Ngày tạo</th>
                                <th style="width: 12%;">Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($item->category_name); ?></td>
                                <td><?php echo e(date("d-m-Y", strtotime($item->created_at))); ?></td>
                                <td>
                                    <a href="<?php echo e(route('categories.edit',['id' => $item->id])); ?>" class="btn btn-sm btn-success"><i class="icon ion-android-create"></i></a>
                                    <a href="<?php echo e(route('categories.delete',['id' => $item->id])); ?>" class="btn btn-sm btn-danger"><i class="icon ion-android-delete"></i></a>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Nhom_E\resources\views/categories/index.blade.php ENDPATH**/ ?>
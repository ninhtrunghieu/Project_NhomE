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
                    <h1 class="m-0 text-dark">Danh sách danh mục</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/home">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Danh sách danh mục</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Danh sách danh mục</h3>
                    <a style="margin-left: 20px;" href="<?php echo e(route('categories.create')); ?>" class="btn btn-warning">Thêm mới</a>
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
                                    <a href="<?php echo e(route('categories.edit', ['id' => $item->id])); ?>" class="btn btn-sm btn-success">
                                        <i class="icon ion-android-create"></i>
                                    </a>
                                    <a href="<?php echo e(route('categories.delete', ['id' => $item->id])); ?>" 
                                       class="btn btn-sm btn-danger delete-btn" 
                                       data-id="<?php echo e($item->id); ?>">
                                       <i class="icon ion-android-delete"></i>
                                    </a>
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

<?php $__env->startSection('scripts'); ?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('.delete-btn').on('click', function(event) {
            event.preventDefault(); // Ngăn chặn hành động mặc định (điều hướng)
            const url = $(this).attr('href'); // Lấy URL từ thuộc tính href
            const confirmed = confirm('Bạn có chắc chắn muốn xóa danh mục này không?');
            if (confirmed) {
                window.location.href = url; // Chuyển hướng nếu xác nhận
            }
        });
    });
</script>
<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\lab_2\resources\views/categories/index.blade.php ENDPATH**/ ?>
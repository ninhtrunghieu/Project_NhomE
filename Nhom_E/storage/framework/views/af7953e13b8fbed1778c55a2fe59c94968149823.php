<div class="sidebar-block">
    <div class="title-block">Danh mục</div>
    <div class="block-content">
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="cateTitle hasSubCategory open level1">
            <span class="arrow collapse-icons collapsed" data-toggle="collapse" data-target="#<?php echo e($key->id); ?>">
                <i class="zmdi zmdi-minus"></i>
                <i class="zmdi zmdi-plus"></i>
            </span>
            <a class="cateItem" href="/list-product/<?php echo e($key->id); ?>"><?php echo e($key->category_name); ?></a>
            <div class="subCategory collapse" id="<?php echo e($key->id); ?>" aria-expanded="true" role="status">
                <?php $__currentLoopData = $key->categoryChildren; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="cateTitle">
                    <a href="/list-product/<?php echo e($key->id); ?>" class="cateItem"><?php echo e($subItem->category_name); ?></a>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


    </div>
</div><?php /**PATH D:\shopping\resources\views/publics/sidebar-block.blade.php ENDPATH**/ ?>
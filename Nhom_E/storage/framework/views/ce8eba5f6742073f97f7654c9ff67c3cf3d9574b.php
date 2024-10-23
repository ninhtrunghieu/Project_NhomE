<ul class="menu level1" style="width:240px">
    <?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li class="item parent">
            <a href="/list-product/<?php echo e($item->id); ?>" class="hasicon" title="SIDE TABLE">
                <img src="<?php echo e(asset('client_template/img/home/table-lamp.png')); ?>" alt="img"><?php echo e($item->category_name); ?>

            </a>
            <?php if($item->categoryChildren <> null): ?>
                <div class="dropdown-menu">
                    <div class="menu-items">
                        <ul>
                            <?php $__currentLoopData = $item->categoryChildren; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="item">
                                <a href="/list-product/<?php echo e($subItem->id); ?>" title="Aliquam lobortis"><?php echo e($subItem->category_name); ?></a>
                            </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                </div>
                <?php endif; ?>
        </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <li class="more item">Show More</li>
</ul><?php /**PATH D:\shopping\resources\views/publics/category.blade.php ENDPATH**/ ?>
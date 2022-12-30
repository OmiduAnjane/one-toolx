<div class="dropdown-menu">

     <?php $__currentLoopData = $childs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <?php if(count($child['children'])): ?>

            <div class="dropend">
                <a class="dropdown-item dropdown-toggle" href="#navbarDropdownMenuChild" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false">
                   <?php if( !empty($child['icon']) ): ?>
                     <i class="<?php echo e($child['icon']); ?> me-2"></i>
                   <?php endif; ?>
                    <?php echo e(__($child['text'])); ?>

                </a>
                <div class="dropdown-menu">
                    <?php $__currentLoopData = $child['children']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a class="dropdown-item" href="<?php echo e(( $value['menu_items']  == 'custom' ) ? $value['url'] : route('home') . '/' . $value['url']); ?>">
                           <?php if( !empty($value['icon']) ): ?>
                             <i class="<?php echo e($value['icon']); ?> me-2"></i>
                           <?php endif; ?>
                            <?php echo e(__($value['text'])); ?>

                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>

        <?php else: ?>
            <a class="dropdown-item" href="<?php echo e(( $child['menu_items']  == 'custom' ) ? $child['url'] : route('home') . '/' . $child['url']); ?>">
               <?php if( !empty($child['icon']) ): ?>
                 <i class="<?php echo e($child['icon']); ?> me-2"></i>
               <?php endif; ?>
                <?php echo e(__($child['text'])); ?>

            </a>
        <?php endif; ?>

     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</div><?php /**PATH C:\xampp\htdocs\laravel\sumowebtools\components\resources\views/components/frontend/menu.blade.php ENDPATH**/ ?>
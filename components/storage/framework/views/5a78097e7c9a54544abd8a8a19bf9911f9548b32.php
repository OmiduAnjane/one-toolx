<?php if( $page->ads_status == true && $advertisement->sidebar_top_status == true && $advertisement->sidebar_top != null ): ?>
    <div class="mb-3">
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.frontend.advertisement.sidebar-top','data' => ['advertisement' => $advertisement]]); ?>
<?php $component->withName('frontend.advertisement.sidebar-top'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['advertisement' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($advertisement)]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
    </div>
<?php endif; ?>

<?php if( $sidebar->tool_status == true ): ?>
    <div class="card mb-3">
        <div class="card-header d-block text-<?php echo e($sidebar->tool_align); ?> <?php echo e(($sidebar->tool_background == 'bg-white') ? $sidebar->tool_background : $sidebar->tool_background . ' text-white'); ?>">
            <h3 class="card-title"><?php echo e(__('Popular Tools')); ?></h3>
        </div>
        <div class="list-group list-group-flush list-group-hoverable">

            <?php $__currentLoopData = $popularTools; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="list-group-item">
                    <div class="row align-items-center">
                        <div class="col d-flex">
                            <span>
                                <i class="fas fa-check text-success me-2"></i>
                            </span>
                            <a href="<?php echo e(localization()->localizeUrl( $value['slug'] )); ?>" class="text-body d-block"><?php echo e($value['title']); ?></a>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
    </div>
<?php endif; ?>

<?php if( $page->ads_status == true && $advertisement->sidebar_middle_status == true && $advertisement->sidebar_middle != null ): ?>
    <div class="mb-3">
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.frontend.advertisement.sidebar-middle','data' => ['advertisement' => $advertisement]]); ?>
<?php $component->withName('frontend.advertisement.sidebar-middle'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['advertisement' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($advertisement)]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
    </div>
<?php endif; ?>

<?php if( $sidebar->post_status == true ): ?>
    <div class="card mb-3">
        <div class="card-header d-block text-<?php echo e($sidebar->post_align); ?> <?php echo e(($sidebar->post_background == 'bg-white') ? $sidebar->post_background : $sidebar->post_background . ' text-white'); ?>">
            <h3 class="card-title"><?php echo e(__('Recent Posts')); ?></h3>
        </div>
        <div class="list-group list-group-flush list-group-hoverable">
            
            <?php $__currentLoopData = $recentPosts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if( $loop->index <= $sidebar->post_count - 1 ): ?>
                    <div class="list-group-item">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <a href="<?php echo e(localization()->localizeUrl( $value['slug'] )); ?>">
                                    <span class="avatar" style="background-image: url(<?php echo e($value['featured_image']); ?>);"></span>
                                </a>
                            </div>
                            <div class="col text-truncate">
                                <a href="<?php echo e(localization()->localizeUrl( $value['slug'] )); ?>" class="text-body d-block" title="<?php echo e($value['title']); ?>"><?php echo e($value['title']); ?></a>
                                <small class="d-block text-muted text-truncate mt-n1"><?php echo e(\Carbon\Carbon::parse( ($value['updated_at']) ? $value['updated_at'] : $value['created_at'] )->format('F j, Y')); ?></small>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
<?php endif; ?>

<?php if( $page->ads_status == true && $advertisement->sidebar_bottom_status == true && $advertisement->sidebar_bottom != null ): ?>
    <div class="mb-3">
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.frontend.advertisement.sidebar-bottom','data' => ['advertisement' => $advertisement]]); ?>
<?php $component->withName('frontend.advertisement.sidebar-bottom'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['advertisement' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($advertisement)]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
    </div>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\laravel\sumowebtools\components\resources\views/components/frontend/sidebar.blade.php ENDPATH**/ ?>
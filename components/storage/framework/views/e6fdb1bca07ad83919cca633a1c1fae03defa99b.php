<div class="mt-2 d-print-none">
    <div class="align-items-center">
        <ol class="breadcrumb" aria-label="breadcrumbs">
          <li class="breadcrumb-item">
            <a href="<?php echo e(route('admin')); ?>"><?php echo e(__('Admin')); ?></a>
          </li>

          <li class="breadcrumb-item active" aria-current="page">
            <a><?php echo e(__( ucwords( str_replace( '-', ' ', Route::currentRouteName() ) ) )); ?></a>
          </li>
      </ol>
  </div>
</div>       <?php /**PATH C:\xampp\htdocs\laravel\sumowebtools\components\resources\views/components/admin/breadcrumbs.blade.php ENDPATH**/ ?>
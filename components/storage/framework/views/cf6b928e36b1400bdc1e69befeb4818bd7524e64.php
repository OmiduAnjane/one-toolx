<div>

    <!-- Validation Errors -->
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.auth-validation-errors','data' => ['class' => 'mb-4','errors' => $errors]]); ?>
<?php $component->withName('auth-validation-errors'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'mb-4','errors' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors)]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                    
    <div class="row">
        <div class="col-12">

            <button class="btn btn-info mb-3" data-bs-toggle="modal" data-bs-target="#addNewProxy"><i class="fas fa-plus fa-fw me-1"></i> <?php echo e(__('Add New Proxy')); ?></button>

            <div class="card">
                <div class="table-responsive">
                    <table class="table table-vcenter card-table">
                        <thead>
                            <tr>
                                <th><?php echo e(__('IP')); ?></th>
                                <th><?php echo e(__('Port')); ?></th>
                                <th><?php echo e(__('Username')); ?></th>
                                <th><?php echo e(__('Password')); ?></th>
                                <th><?php echo e(__('Type')); ?></th>
                                <th><?php echo e(__('Status')); ?></th>
                                <th><?php echo e(__('Action')); ?></th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php if( $proxies->isNotEmpty() ): ?>

                                <?php $__currentLoopData = $proxies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $proxy): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td class="align-middle"><?php echo e($proxy['ip']); ?></td>
                                        <td class="align-middle"><?php echo e($proxy['port']); ?></td>
                                        <td class="align-middle"><?php echo e(($proxy['username']) ? $proxy['username']: 'none'); ?></td>
                                        <td class="align-middle"><?php echo e(($proxy['password']) ? $proxy['password'] : 'none'); ?></td>
                                        <td class="align-middle"><?php echo e($proxy['type']); ?></td>
                                        <td class="align-middle">
                                            <?php if( $proxy['banned'] == true): ?>
                                                <span class="badge bg-danger"><i class="fas fa-times"></i></span>
                                            <?php else: ?>
                                                <span class="badge bg-success"><i class="fas fa-check"></i></span>
                                            <?php endif; ?>

                                        </td>
                                        <td class="align-middle w-15 py-3">
                                            <a class="btn btn-primary" title="<?php echo e(__('Check Proxy')); ?>" wire:click="onProxyCheck( <?php echo e($proxy['id']); ?> )">
                                                <i class="fas fa-check icon" wire:loading.remove wire:target="onProxyCheck( <?php echo e($proxy['id']); ?> )"></i>
                                                <i class="fas fa-spinner fa-spin icon" wire:loading wire:target="onProxyCheck( <?php echo e($proxy['id']); ?> )"></i>
                                                <?php echo e(__('Check Proxy')); ?>

                                            </a>
                                            <a class="btn btn-warning" title="<?php echo e(__('Disable')); ?>" wire:click="onDisableProxy( <?php echo e($proxy['id']); ?> )">
                                                <i class="fas fa-times-circle icon" wire:loading.remove wire:target="onDisableProxy( <?php echo e($proxy['id']); ?> )"></i>
                                                <i class="fas fa-spinner fa-spin icon" wire:loading wire:target="onDisableProxy( <?php echo e($proxy['id']); ?> )"></i>
                                                <?php echo e(__('Disable')); ?>

                                            </a>
                                            <a class="btn btn-info" title="<?php echo e(__('Edit')); ?>" wire:click="onShowEditProxyModal( <?php echo e($proxy['id']); ?> )"><i class="fas fa-edit icon"></i> <?php echo e(__('Edit')); ?></a>
                                            <a class="btn btn-danger" title="<?php echo e(__('Delete')); ?>" wire:click="onDeleteProxyConfirm( <?php echo e($proxy['id']); ?> )"><i class="fas fa-trash icon"></i> <?php echo e(__('Delete')); ?></a>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                
                            <?php else: ?>

                                <tr>
                                    <td class="align-middle"><?php echo e(__('No record found')); ?></td>
                                </tr>

                            <?php endif; ?>

                        </tbody>
                    </table>
                </div>

                <div class="float-end">
                    <!-- begin:pagination -->
                    <?php echo e($proxies->links()); ?>

                    <!-- begin:pagination -->
                </div>
            </div>
        </div>
    </div>

    <!-- Begin::Add New Proxy -->
    <div class="modal fade" id="addNewProxy" tabindex="-1" role="dialog" aria-labelledby="addNewProxyLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="addNewProxyModalLabel"><?php echo e(__('Add New Proxy')); ?></h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <div class="modal-body">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.settings.proxy.create')->html();
} elseif ($_instance->childHasBeenRendered('Xc0apMK')) {
    $componentId = $_instance->getRenderedChildComponentId('Xc0apMK');
    $componentTag = $_instance->getRenderedChildComponentTagName('Xc0apMK');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('Xc0apMK');
} else {
    $response = \Livewire\Livewire::mount('admin.settings.proxy.create');
    $html = $response->html();
    $_instance->logRenderedChild('Xc0apMK', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
          </div>

        </div>
      </div>
    </div>
    <!-- End::Add New Proxy -->

    <!-- Begin::Edit Proxy -->
    <div class="modal fade" id="editProxy" tabindex="-1" role="dialog" aria-labelledby="editProxyLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="editProxyModalLabel"><?php echo e(__('Edit Proxy')); ?></h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <div class="modal-body">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.settings.proxy.edit')->html();
} elseif ($_instance->childHasBeenRendered('s307n8e')) {
    $componentId = $_instance->getRenderedChildComponentId('s307n8e');
    $componentTag = $_instance->getRenderedChildComponentTagName('s307n8e');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('s307n8e');
} else {
    $response = \Livewire\Livewire::mount('admin.settings.proxy.edit');
    $html = $response->html();
    $_instance->logRenderedChild('s307n8e', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
          </div>

        </div>
      </div>
    </div>
    <!-- End::Edit Proxy -->

</div><?php /**PATH C:\xampp\htdocs\laravel\sumowebtools\components\resources\views/livewire/admin/settings/proxy.blade.php ENDPATH**/ ?>
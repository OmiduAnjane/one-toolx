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
    
    <form wire:submit.prevent="onEditProxy(<?php echo e($this->proxy_id); ?>)">
        <div class="form-group mb-3">
            <label for="name" class="form-label"><?php echo e(__('IP Address')); ?></label>
            <input class="form-control" type="text" wire:model="ip">
        </div>

        <div class="form-group mb-3">
            <label for="name" class="form-label"><?php echo e(__('Port')); ?></label>
            <input class="form-control" type="text" wire:model="port">
        </div>

        <div class="form-group mb-3">
            <label for="name" class="form-label"><?php echo e(__('Type')); ?></label>
            <select wire:model="type" class="form-control">
                <option value="http">HTTP</option>
                <option value="https">HTTPs</option>
                <option value="socks4">SOCKS4</option>
                <option value="socks5">SOCKS5</option>
            </select>
        </div>

        <div class="form-group mb-3">
            <label for="name" class="form-label"><?php echo e(__('Username')); ?></label>
            <input class="form-control" type="text" wire:model="username">
        </div>

        <div class="form-group mb-3">
            <label for="name" class="form-label"><?php echo e(__('Password')); ?></label>
            <input class="form-control" type="text" wire:model="password">
        </div>

        <div class="modal-footer p-0">
            <button type="button" class="btn me-auto" data-bs-dismiss="modal"><?php echo e(__('Close')); ?></button>
            <button type="submit" class="btn btn-primary">
                <span>
                    <div wire:loading wire:target="onEditProxy(<?php echo e($this->proxy_id); ?>)">
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.loading','data' => []]); ?>
<?php $component->withName('loading'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                    </div>
                    <span><?php echo e(__('Save changes')); ?></span>
                </span>
            </button>
        </div>
    </form>

</div><?php /**PATH C:\xampp\htdocs\laravel\sumowebtools\components\resources\views/livewire/admin/settings/proxy/edit.blade.php ENDPATH**/ ?>
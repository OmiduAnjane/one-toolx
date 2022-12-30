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
    
    <form wire:submit.prevent="onAddProxy">

        <div class="form-group mb-3">
            <label for="name" class="form-label"><?php echo e(__('Type')); ?></label>
            <select wire:model="type" class="form-control" required>
                <option value selected style="display:none;"><?php echo e(__('Choose a proxy type...')); ?></option>
                <option value="http">HTTP</option>
                <option value="https">HTTPs</option>
                <option value="socks4">SOCKS4</option>
                <option value="socks5">SOCKS5</option>
            </select>
        </div>

        <div class="form-group mb-3">
            <label for="name" class="form-label"><?php echo e(__('Enter the Proxy list in the format:')); ?> <code><?php echo e(__('ip:port:user:pass')); ?></code> <?php echo e(__('or')); ?> <code><?php echo e(__('ip:port')); ?></code></label>
            <textarea class="form-control" wire:model="proxies" placeholder="209.127.191.180:9279:ujhunzmy:60hcv08oz431" rows="10" required></textarea>
        </div>

        <div class="modal-footer p-0">
            <button type="button" class="btn me-auto" data-bs-dismiss="modal"><?php echo e(__('Close')); ?></button>
            <button type="submit" class="btn btn-primary">
                <span>
                    <div wire:loading wire:target="onAddProxy">
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
                    <span><?php echo e(__('Add new')); ?></span>
                </span>
            </button>
        </div>
    </form>

</div>
<?php /**PATH C:\xampp\htdocs\laravel\sumowebtools\components\resources\views/livewire/admin/settings/proxy/create.blade.php ENDPATH**/ ?>
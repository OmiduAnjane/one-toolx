<div>

    <form wire:submit.prevent="onAddLanguage">

        <div class="modal-body">
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
            
            <?php

                $languages = json_decode($languages, true);

            ?>
        
            <div class="form-group mb-3">
                <label for="name" class="form-label"><?php echo e(__('Name')); ?></label>
                <input class="form-control" type="text" id="name" wire:model="name">
            </div>

            <div class="form-group" wire:ignore>
                <label for="name" class="form-label"><?php echo e(__('Language')); ?></label>
                <select id="lang_code" class="form-control" wire:model="code">
                    <optgroup label="<?php echo e(__('Languages')); ?>">
                        <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($key); ?>"><?php echo e($value['name']); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </optgroup>
                </select>
            </div>
        </div>

        <div class="modal-footer">
            <button type="button" class="btn me-auto" data-bs-dismiss="modal"><?php echo e(__('Close')); ?></button>
            <button type="submit" class="btn btn-primary">
                <span>
                    <div wire:loading wire:target="onAddLanguage">
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

<script>
(function( $ ) {
    "use strict";

    jQuery(document).ready(function(){

        const lang_code = new Choices( document.querySelector('#lang_code') );

        jQuery('#lang_code').on('change', function (e) {
            var lang_data = jQuery(this).find(":selected").val();
            window.livewire.find('<?php echo e($_instance->id); ?>').set('code', lang_data);
        });

    });

})( jQuery );
</script>
<?php /**PATH C:\xampp\htdocs\laravel\sumowebtools\components\resources\views/livewire/admin/settings/translations/add-new-language.blade.php ENDPATH**/ ?>
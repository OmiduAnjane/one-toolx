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

            <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addNewLanguage"><i class="fas fa-plus fa-fw me-1"></i> <?php echo e(__('Add New Language')); ?></button>

            <div class="card">
                <div class="table-responsive">
                    <table class="table table-vcenter card-table">
                        <thead>
                            <tr>
                                <th><?php echo e(__('Language')); ?></th>
                                <th><?php echo e(__('Default')); ?></th>
                                <th><?php echo e(__('Action')); ?></th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php if( !empty($languages) ): ?>

                                <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td class="align-middle"><?php echo e($language['name']); ?></td>
                                        <td class="align-middle"><span class="badge bg-<?php echo e(($language['default'] == true) ? 'success' : 'secondary'); ?>"><?php echo e(($language['default'] == true) ? __('Yes') : __('No')); ?></span></td>
                                        <td class="align-middle w-50 py-3">
                                            <a class="btn btn-success" title="<?php echo e(__('Set as Default')); ?>" wire:click="onSetDefault( <?php echo e($language['id']); ?> )"><?php echo e(__('Set as Default')); ?></a>
                                            <a class="btn btn-primary" title="<?php echo e(__('Translations')); ?>" href="<?php echo e(route('edit-translations', $language['id'] )); ?>"><i class="fas fa-language icon"></i> <?php echo e(__('Translations')); ?></a>
                                            <a class="btn btn-info" title="<?php echo e(__('Edit')); ?>" wire:click="onShowEditLanguageModal( <?php echo e($language['id']); ?> )"><i class="fas fa-edit icon"></i> <?php echo e(__('Edit')); ?></a>
                                            <a class="btn btn-danger" title="<?php echo e(__('Delete')); ?>" wire:click="onDeleteLanguageConfirm( <?php echo e($language['id']); ?> )"><i class="fas fa-trash icon"></i> <?php echo e(__('Delete')); ?></a>
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
            </div>

        </div>
    </div>

    <!-- Begin::Add New Language -->
    <div class="modal fade" id="addNewLanguage" tabindex="-1" role="dialog" aria-labelledby="addNewLanguageLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="addNewLanguageModalLabel"><?php echo e(__('Add New Language')); ?></h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.settings.translations.add-new-language')->html();
} elseif ($_instance->childHasBeenRendered('jBCY81v')) {
    $componentId = $_instance->getRenderedChildComponentId('jBCY81v');
    $componentTag = $_instance->getRenderedChildComponentTagName('jBCY81v');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('jBCY81v');
} else {
    $response = \Livewire\Livewire::mount('admin.settings.translations.add-new-language');
    $html = $response->html();
    $_instance->logRenderedChild('jBCY81v', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

        </div>
      </div>
    </div>
    <!-- End::Add New Language -->

    <!-- Begin::Edit Language -->
    <div class="modal fade" id="editLanguage" tabindex="-1" role="dialog" aria-labelledby="editLanguageLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="editLanguageModalLabel"><?php echo e(__('Edit Language')); ?></h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.settings.translations.edit-language')->html();
} elseif ($_instance->childHasBeenRendered('T36UFcs')) {
    $componentId = $_instance->getRenderedChildComponentId('T36UFcs');
    $componentTag = $_instance->getRenderedChildComponentTagName('T36UFcs');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('T36UFcs');
} else {
    $response = \Livewire\Livewire::mount('admin.settings.translations.edit-language');
    $html = $response->html();
    $_instance->logRenderedChild('T36UFcs', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

        </div>
      </div>
    </div>
    <!-- End::Edit Language -->

</div><?php /**PATH C:\xampp\htdocs\laravel\sumowebtools\components\resources\views/livewire/admin/settings/translations.blade.php ENDPATH**/ ?>
  <div class="page">
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.frontend.navbar','data' => ['header' => $header,'homeTitle' => $homeTitle,'menus' => $menus,'general' => $general]]); ?>
<?php $component->withName('frontend.navbar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['header' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($header),'homeTitle' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($homeTitle),'menus' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($menus),'general' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($general)]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>

    <main class="main">

        <?php if(Auth::user() && Auth::user()->email_verified_at == null): ?>
            <div class="alert alert-important alert-warning alert-dismissible mb-0 text-center rounded-0" role="alert">
              <?php echo e(__('Your email address is not verified.')); ?> <a href="<?php echo e(route('verify-email')); ?>" class="alert-link text-decoration-underline"><?php echo e(__('Verify it here!')); ?></a>
            </div>
        <?php endif; ?>

        <?php if( $general->parallax_status == true ): ?>
            <section id="parallax" class="text-white">
                <div class="position-relative overflow-hidden text-center bg-light">
                  <span class="mask" style="
                        <?php if( $general->overlay_type == 'solid' ): ?>

                        background: <?php echo e($general->solid_color); ?>;opacity: <?php echo e($general->opacity); ?>;

                        <?php elseif( $general->overlay_type == 'gradient' ): ?>

                        background: <?php echo e($general->gradient_first_color); ?>;
                        background: -moz-linear-gradient( <?php echo e($general->gradient_position); ?>, <?php echo e($general->gradient_first_color); ?>, <?php echo e($general->gradient_second_color); ?>  );
                        background: -webkit-linear-gradient( <?php echo e($general->gradient_position); ?>, <?php echo e($general->gradient_first_color); ?>, <?php echo e($general->gradient_second_color); ?> );
                        background: linear-gradient( <?php echo e($general->gradient_position); ?>, <?php echo e($general->gradient_first_color); ?>, <?php echo e($general->gradient_second_color); ?> );
                        opacity: <?php echo e($general->opacity); ?>;

                        <?php endif; ?>

                  "></span>

                  <?php if( !empty($general->parallax_image) ): ?>
                    <div class="position-absolute start-0 top-0 w-100 parallax-image" style="background-image: url(<?php echo e($general->parallax_image); ?>);filter: blur(<?php echo e($general->blur); ?>px);"></div>
                  <?php else: ?>
                    <div class="position-absolute start-0 top-0 w-100 parallax-image" style="background-image: url(<?php echo e(asset('assets/img/parallax.jpg')); ?>);filter: blur(<?php echo e($general->blur); ?>px);"></div>
                  <?php endif; ?>

                  <div class="container position-relative zindex-1">
                      <div class="col text-center p-lg-5 mx-auto my-5">

                          <?php if( $page->ads_status == true && $advertisement->area1_status == true && $advertisement->area1 != null ): ?>
                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.frontend.advertisement.area1','data' => ['advertisement' => $advertisement]]); ?>
<?php $component->withName('frontend.advertisement.area1'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['advertisement' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($advertisement)]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                          <?php endif; ?>

                          <h1 class="display-5 font-weight-normal"><?php echo e(__($pageTrans->title)); ?></h1>
                          <h2 class="font-weight-normal"><?php echo e(__($pageTrans->subtitle)); ?></h2>

                          <?php if( $page->ads_status == true && $advertisement->area2_status == true && $advertisement->area2 != null ): ?>
                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.frontend.advertisement.area2','data' => ['advertisement' => $advertisement]]); ?>
<?php $component->withName('frontend.advertisement.area2'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['advertisement' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($advertisement)]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                          <?php endif; ?>
                      </div>
                  </div>

                </div>
            </section>
        <?php endif; ?>

        <section>
            <div class="container py-4">
                <div class="row">
                    <div class="<?php echo e(( $page->ads_status == true && ( ( $advertisement->sidebar_top_status == true && $advertisement->sidebar_top != null ) || ( $advertisement->sidebar_middle_status == true && $advertisement->sidebar_middle != null ) || ( $advertisement->sidebar_bottom_status == true && $advertisement->sidebar_bottom != null ) ) || $sidebar->tool_status == true || $sidebar->post_status == true ) ? 'col-lg-9' : 'col'); ?>">
                        <?php if( $page->ads_status == true && $advertisement->area3_status == true && $advertisement->area3 != null ): ?>
                          <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.frontend.advertisement.area3','data' => ['advertisement' => $advertisement]]); ?>
<?php $component->withName('frontend.advertisement.area3'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['advertisement' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($advertisement)]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                        <?php endif; ?>

                        <?php if( $page->type == 'home' ): ?>

                          <?php if( $general->search_box_status == true ): ?>
                            <section id="search-box" class="mb-3">
                              <div class="input-icon">
                                  <span class="input-icon-addon">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <circle cx="10" cy="10" r="7"></circle>
                                            <line x1="21" y1="21" x2="15" y2="15"></line>
                                        </svg>
                                  </span>
                                  <input type="text" class="form-control search-input" wire:model="searchQuery" placeholder="<?php echo e(__('Search for your tool')); ?>" />
                              </div>

                              <?php if( !empty($search_queries) && !empty($searchQuery) ): ?>
                                <div class="card mb-3 overflow-auto" style="max-height: 18rem">
                                  <div class="card-body pb-0">
                                    <div class="row">
                                        <?php $__currentLoopData = $search_queries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                          <div class="col-12 col-md-6 col-lg-4 mb-3">
                                              <a class="card text-decoration-none cursor-pointer item-box" href="<?php echo e(localization()->localizeUrl( $value['slug'] )); ?>">
                                                  <div class="card-body">
                                                      <div class="d-flex align-items-center">
                                                          <span class="avatar me-3 bg-transparent" style="background-image: url(<?php echo e(($value['icon_image']) ? $value['icon_image'] : asset('assets/img/no-thumb.svg')); ?>);"></span>
                                                          <div>
                                                              <div class="font-weight-medium"><?php echo e($value['title']); ?></div>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </a>
                                          </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                  </div>
                                </div>
                              <?php endif; ?>

                            </section>
                          <?php endif; ?>

                          <section id="tools-box">
                                <?php if( !empty($tool_with_categories) ): ?>

                                      <?php $__currentLoopData = $tool_with_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                       <div class="card mb-3">
                                          <div class="d-block card-header category-box text-<?php echo e($value['align']); ?> <?php echo e(($value['background'] == 'bg-white') ? $value['background'] : $value['background'] . ' text-white'); ?>">
                                            <h3 class="card-title"><?php echo e(__($value['title'])); ?></h3>
                                            <span><?php echo e(__($value['description'])); ?></span>
                                          </div>
                                          <div class="card-body pb-0">
                                                <div class="row">
                                                    <?php $__currentLoopData = $value['pages']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key2 => $value2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                      <div class="col-12 col-md-6 col-lg-4 mb-3">
                                                          <a class="card text-decoration-none cursor-pointer item-box" href="<?php echo e(localization()->localizeUrl( $value2['slug'] )); ?>">
                                                              <div class="card-body">
                                                                  <div class="d-flex align-items-center">
                                                                      <span class="avatar me-3 bg-transparent" style="background-image: url(<?php echo e(($value2['icon_image']) ? $value2['icon_image'] : asset('assets/img/no-thumb.svg')); ?>);"></span>
                                                                      <div>
                                                                          <div class="font-weight-medium"><?php echo e($value2['title']); ?></div>
                                                                      </div>
                                                                  </div>
                                                              </div>
                                                          </a>
                                                      </div>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </div>
                                          </div>
                                        </div>
                                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                <?php else: ?>

                                    <div class="row">
                                      <?php $__currentLoopData = $tools; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="col-12 col-md-6 col-lg-4 mb-3">
                                            <a class="card text-decoration-none cursor-pointer item-box" href="<?php echo e(localization()->getLocalizedURL(localization()->getCurrentLocale(), $value['slug'], [], true)); ?>">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-center">
                                                        <span class="avatar me-3 bg-transparent" style="background-image: url(<?php echo e(($value['icon_image']) ? $value['icon_image'] : asset('assets/img/no-thumb.svg')); ?>);"></span>
                                                        <div>
                                                            <div class="font-weight-medium"><?php echo e($value['title']); ?></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                <?php endif; ?>
                          </section>

                        <?php endif; ?>

                            <section id="content-box" class="mb-3 page-<?php echo e($page->id); ?>">

                                <?php if( $page->type == 'tool'): ?>
                                  <div class="card mb-3">
                                    <div class="card-body">

                                      <?php switch($page->tool_name):

                                          case ('Random Word Generator'): ?>
                                                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('frontend.tools.random-word-generator')->html();
} elseif ($_instance->childHasBeenRendered('0OQtLDY')) {
    $componentId = $_instance->getRenderedChildComponentId('0OQtLDY');
    $componentTag = $_instance->getRenderedChildComponentTagName('0OQtLDY');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('0OQtLDY');
} else {
    $response = \Livewire\Livewire::mount('frontend.tools.random-word-generator');
    $html = $response->html();
    $_instance->logRenderedChild('0OQtLDY', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                                              <?php break; ?>

                                          <?php case ('Image To Text'): ?>
                                                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('frontend.tools.image-to-text')->html();
} elseif ($_instance->childHasBeenRendered('B8jC6k4')) {
    $componentId = $_instance->getRenderedChildComponentId('B8jC6k4');
    $componentTag = $_instance->getRenderedChildComponentTagName('B8jC6k4');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('B8jC6k4');
} else {
    $response = \Livewire\Livewire::mount('frontend.tools.image-to-text');
    $html = $response->html();
    $_instance->logRenderedChild('B8jC6k4', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                                              <?php break; ?>
                                              
                                          <?php case ('WebP to JPG'): ?>
                                                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('frontend.tools.webp-to-jpg')->html();
} elseif ($_instance->childHasBeenRendered('KJZnLbr')) {
    $componentId = $_instance->getRenderedChildComponentId('KJZnLbr');
    $componentTag = $_instance->getRenderedChildComponentTagName('KJZnLbr');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('KJZnLbr');
} else {
    $response = \Livewire\Livewire::mount('frontend.tools.webp-to-jpg');
    $html = $response->html();
    $_instance->logRenderedChild('KJZnLbr', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                                              <?php break; ?>

                                          <?php case ('JPG Converter'): ?>
                                                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('frontend.tools.jpg-converter')->html();
} elseif ($_instance->childHasBeenRendered('BAhlfH6')) {
    $componentId = $_instance->getRenderedChildComponentId('BAhlfH6');
    $componentTag = $_instance->getRenderedChildComponentTagName('BAhlfH6');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('BAhlfH6');
} else {
    $response = \Livewire\Livewire::mount('frontend.tools.jpg-converter');
    $html = $response->html();
    $_instance->logRenderedChild('BAhlfH6', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                                              <?php break; ?>

                                          <?php case ('PNG to JPG'): ?>
                                                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('frontend.tools.png-to-jpg')->html();
} elseif ($_instance->childHasBeenRendered('Wdri2i5')) {
    $componentId = $_instance->getRenderedChildComponentId('Wdri2i5');
    $componentTag = $_instance->getRenderedChildComponentTagName('Wdri2i5');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('Wdri2i5');
} else {
    $response = \Livewire\Livewire::mount('frontend.tools.png-to-jpg');
    $html = $response->html();
    $_instance->logRenderedChild('Wdri2i5', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                                              <?php break; ?>

                                          <?php case ('JPG to PNG'): ?>
                                                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('frontend.tools.jpg-to-png')->html();
} elseif ($_instance->childHasBeenRendered('PqjXaCv')) {
    $componentId = $_instance->getRenderedChildComponentId('PqjXaCv');
    $componentTag = $_instance->getRenderedChildComponentTagName('PqjXaCv');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('PqjXaCv');
} else {
    $response = \Livewire\Livewire::mount('frontend.tools.jpg-to-png');
    $html = $response->html();
    $_instance->logRenderedChild('PqjXaCv', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                                              <?php break; ?>

                                          <?php case ('RGB to HEX'): ?>
                                                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('frontend.tools.rgb-to-hex')->html();
} elseif ($_instance->childHasBeenRendered('7qCCZCB')) {
    $componentId = $_instance->getRenderedChildComponentId('7qCCZCB');
    $componentTag = $_instance->getRenderedChildComponentTagName('7qCCZCB');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('7qCCZCB');
} else {
    $response = \Livewire\Livewire::mount('frontend.tools.rgb-to-hex');
    $html = $response->html();
    $_instance->logRenderedChild('7qCCZCB', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                                              <?php break; ?>

                                          <?php case ('HEX to RGB'): ?>
                                                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('frontend.tools.hex-to-rgb')->html();
} elseif ($_instance->childHasBeenRendered('qitUnQ8')) {
    $componentId = $_instance->getRenderedChildComponentId('qitUnQ8');
    $componentTag = $_instance->getRenderedChildComponentTagName('qitUnQ8');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('qitUnQ8');
} else {
    $response = \Livewire\Livewire::mount('frontend.tools.hex-to-rgb');
    $html = $response->html();
    $_instance->logRenderedChild('qitUnQ8', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                                              <?php break; ?>

                                          <?php case ('Random Word Generator'): ?>
                                                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('frontend.tools.random-word-generator')->html();
} elseif ($_instance->childHasBeenRendered('iS8lU9D')) {
    $componentId = $_instance->getRenderedChildComponentId('iS8lU9D');
    $componentTag = $_instance->getRenderedChildComponentTagName('iS8lU9D');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('iS8lU9D');
} else {
    $response = \Livewire\Livewire::mount('frontend.tools.random-word-generator');
    $html = $response->html();
    $_instance->logRenderedChild('iS8lU9D', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                                              <?php break; ?>

                                          <?php case ('Online Text Editor'): ?>
                                                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('frontend.tools.online-text-editor')->html();
} elseif ($_instance->childHasBeenRendered('WQFGGJw')) {
    $componentId = $_instance->getRenderedChildComponentId('WQFGGJw');
    $componentTag = $_instance->getRenderedChildComponentTagName('WQFGGJw');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('WQFGGJw');
} else {
    $response = \Livewire\Livewire::mount('frontend.tools.online-text-editor');
    $html = $response->html();
    $_instance->logRenderedChild('WQFGGJw', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                                              <?php break; ?>

                                          <?php case ('Binary to Text'): ?>
                                                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('frontend.tools.binary-to-text')->html();
} elseif ($_instance->childHasBeenRendered('UOib8vh')) {
    $componentId = $_instance->getRenderedChildComponentId('UOib8vh');
    $componentTag = $_instance->getRenderedChildComponentTagName('UOib8vh');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('UOib8vh');
} else {
    $response = \Livewire\Livewire::mount('frontend.tools.binary-to-text');
    $html = $response->html();
    $_instance->logRenderedChild('UOib8vh', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                                              <?php break; ?>

                                          <?php case ('Text to Binary'): ?>
                                                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('frontend.tools.text-to-binary')->html();
} elseif ($_instance->childHasBeenRendered('y2exIFd')) {
    $componentId = $_instance->getRenderedChildComponentId('y2exIFd');
    $componentTag = $_instance->getRenderedChildComponentTagName('y2exIFd');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('y2exIFd');
} else {
    $response = \Livewire\Livewire::mount('frontend.tools.text-to-binary');
    $html = $response->html();
    $_instance->logRenderedChild('y2exIFd', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                                              <?php break; ?>

                                          <?php case ('SRT to VTT'): ?>
                                                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('frontend.tools.srt-to-vtt')->html();
} elseif ($_instance->childHasBeenRendered('ltoj7Mp')) {
    $componentId = $_instance->getRenderedChildComponentId('ltoj7Mp');
    $componentTag = $_instance->getRenderedChildComponentTagName('ltoj7Mp');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('ltoj7Mp');
} else {
    $response = \Livewire\Livewire::mount('frontend.tools.srt-to-vtt');
    $html = $response->html();
    $_instance->logRenderedChild('ltoj7Mp', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                                              <?php break; ?>

                                          <?php case ('VTT to SRT'): ?>
                                                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('frontend.tools.vtt-to-srt')->html();
} elseif ($_instance->childHasBeenRendered('Xis1aPG')) {
    $componentId = $_instance->getRenderedChildComponentId('Xis1aPG');
    $componentTag = $_instance->getRenderedChildComponentTagName('Xis1aPG');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('Xis1aPG');
} else {
    $response = \Livewire\Livewire::mount('frontend.tools.vtt-to-srt');
    $html = $response->html();
    $_instance->logRenderedChild('Xis1aPG', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                                              <?php break; ?>

                                          <?php case ('YouTube Thumbnail Downloader'): ?>
                                                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('frontend.tools.youtube-thumbnail-downloader')->html();
} elseif ($_instance->childHasBeenRendered('SLlRxA6')) {
    $componentId = $_instance->getRenderedChildComponentId('SLlRxA6');
    $componentTag = $_instance->getRenderedChildComponentTagName('SLlRxA6');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('SLlRxA6');
} else {
    $response = \Livewire\Livewire::mount('frontend.tools.youtube-thumbnail-downloader');
    $html = $response->html();
    $_instance->logRenderedChild('SLlRxA6', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                                              <?php break; ?>

                                          <?php case ('Image Resizer'): ?>
                                                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('frontend.tools.image-resizer')->html();
} elseif ($_instance->childHasBeenRendered('WoqL4z7')) {
    $componentId = $_instance->getRenderedChildComponentId('WoqL4z7');
    $componentTag = $_instance->getRenderedChildComponentTagName('WoqL4z7');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('WoqL4z7');
} else {
    $response = \Livewire\Livewire::mount('frontend.tools.image-resizer');
    $html = $response->html();
    $_instance->logRenderedChild('WoqL4z7', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                                              <?php break; ?>

                                          <?php case ('Image Converter'): ?>
                                                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('frontend.tools.image-converter')->html();
} elseif ($_instance->childHasBeenRendered('LCBxw0t')) {
    $componentId = $_instance->getRenderedChildComponentId('LCBxw0t');
    $componentTag = $_instance->getRenderedChildComponentTagName('LCBxw0t');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('LCBxw0t');
} else {
    $response = \Livewire\Livewire::mount('frontend.tools.image-converter');
    $html = $response->html();
    $_instance->logRenderedChild('LCBxw0t', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                                              <?php break; ?>

                                          <?php case ('Image Compressor'): ?>
                                                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('frontend.tools.image-compressor')->html();
} elseif ($_instance->childHasBeenRendered('xfIs0En')) {
    $componentId = $_instance->getRenderedChildComponentId('xfIs0En');
    $componentTag = $_instance->getRenderedChildComponentTagName('xfIs0En');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('xfIs0En');
} else {
    $response = \Livewire\Livewire::mount('frontend.tools.image-compressor');
    $html = $response->html();
    $_instance->logRenderedChild('xfIs0En', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                                              <?php break; ?>

                                          <?php case ('Image Enlarger'): ?>
                                                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('frontend.tools.image-enlarger')->html();
} elseif ($_instance->childHasBeenRendered('K4zQ1cX')) {
    $componentId = $_instance->getRenderedChildComponentId('K4zQ1cX');
    $componentTag = $_instance->getRenderedChildComponentTagName('K4zQ1cX');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('K4zQ1cX');
} else {
    $response = \Livewire\Livewire::mount('frontend.tools.image-enlarger');
    $html = $response->html();
    $_instance->logRenderedChild('K4zQ1cX', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                                              <?php break; ?>

                                          <?php case ('Image Cropper'): ?>
                                                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('frontend.tools.image-cropper')->html();
} elseif ($_instance->childHasBeenRendered('r2opPb7')) {
    $componentId = $_instance->getRenderedChildComponentId('r2opPb7');
    $componentTag = $_instance->getRenderedChildComponentTagName('r2opPb7');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('r2opPb7');
} else {
    $response = \Livewire\Livewire::mount('frontend.tools.image-cropper');
    $html = $response->html();
    $_instance->logRenderedChild('r2opPb7', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                                              <?php break; ?>

                                          <?php case ('Rotate Image'): ?>
                                                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('frontend.tools.rotate-image')->html();
} elseif ($_instance->childHasBeenRendered('YLOkhPQ')) {
    $componentId = $_instance->getRenderedChildComponentId('YLOkhPQ');
    $componentTag = $_instance->getRenderedChildComponentTagName('YLOkhPQ');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('YLOkhPQ');
} else {
    $response = \Livewire\Livewire::mount('frontend.tools.rotate-image');
    $html = $response->html();
    $_instance->logRenderedChild('YLOkhPQ', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                                              <?php break; ?>

                                          <?php case ('Flip Image'): ?>
                                                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('frontend.tools.flip-image')->html();
} elseif ($_instance->childHasBeenRendered('mG8l53o')) {
    $componentId = $_instance->getRenderedChildComponentId('mG8l53o');
    $componentTag = $_instance->getRenderedChildComponentTagName('mG8l53o');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('mG8l53o');
} else {
    $response = \Livewire\Livewire::mount('frontend.tools.flip-image');
    $html = $response->html();
    $_instance->logRenderedChild('mG8l53o', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                                              <?php break; ?>

                                          <?php case ('Base64 to Image'): ?>
                                                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('frontend.tools.base64-to-image')->html();
} elseif ($_instance->childHasBeenRendered('JETxd95')) {
    $componentId = $_instance->getRenderedChildComponentId('JETxd95');
    $componentTag = $_instance->getRenderedChildComponentTagName('JETxd95');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('JETxd95');
} else {
    $response = \Livewire\Livewire::mount('frontend.tools.base64-to-image');
    $html = $response->html();
    $_instance->logRenderedChild('JETxd95', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                                              <?php break; ?>

                                          <?php case ('Image to Base64'): ?>
                                                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('frontend.tools.image-to-base64')->html();
} elseif ($_instance->childHasBeenRendered('igjJ74P')) {
    $componentId = $_instance->getRenderedChildComponentId('igjJ74P');
    $componentTag = $_instance->getRenderedChildComponentTagName('igjJ74P');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('igjJ74P');
} else {
    $response = \Livewire\Livewire::mount('frontend.tools.image-to-base64');
    $html = $response->html();
    $_instance->logRenderedChild('igjJ74P', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                                              <?php break; ?>

                                          <?php case ('Find Facebook ID'): ?>
                                                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('frontend.tools.find-facebook-id')->html();
} elseif ($_instance->childHasBeenRendered('1d5juwe')) {
    $componentId = $_instance->getRenderedChildComponentId('1d5juwe');
    $componentTag = $_instance->getRenderedChildComponentTagName('1d5juwe');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('1d5juwe');
} else {
    $response = \Livewire\Livewire::mount('frontend.tools.find-facebook-id');
    $html = $response->html();
    $_instance->logRenderedChild('1d5juwe', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                                              <?php break; ?>

                                          <?php case ('Remove Line Breaks'): ?>
                                                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('frontend.tools.remove-line-breaks')->html();
} elseif ($_instance->childHasBeenRendered('34tCCAu')) {
    $componentId = $_instance->getRenderedChildComponentId('34tCCAu');
    $componentTag = $_instance->getRenderedChildComponentTagName('34tCCAu');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('34tCCAu');
} else {
    $response = \Livewire\Livewire::mount('frontend.tools.remove-line-breaks');
    $html = $response->html();
    $_instance->logRenderedChild('34tCCAu', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                                              <?php break; ?>

                                          <?php case ('Word Counter'): ?>
                                                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('frontend.tools.word-counter')->html();
} elseif ($_instance->childHasBeenRendered('j1SmcCE')) {
    $componentId = $_instance->getRenderedChildComponentId('j1SmcCE');
    $componentTag = $_instance->getRenderedChildComponentTagName('j1SmcCE');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('j1SmcCE');
} else {
    $response = \Livewire\Livewire::mount('frontend.tools.word-counter');
    $html = $response->html();
    $_instance->logRenderedChild('j1SmcCE', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                                              <?php break; ?>

                                          <?php case ('Password Generator'): ?>
                                                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('frontend.tools.password-generator')->html();
} elseif ($_instance->childHasBeenRendered('gET12Kt')) {
    $componentId = $_instance->getRenderedChildComponentId('gET12Kt');
    $componentTag = $_instance->getRenderedChildComponentTagName('gET12Kt');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('gET12Kt');
} else {
    $response = \Livewire\Livewire::mount('frontend.tools.password-generator');
    $html = $response->html();
    $_instance->logRenderedChild('gET12Kt', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                                              <?php break; ?>

                                          <?php case ('Color Converter'): ?>
                                                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('frontend.tools.color-converter')->html();
} elseif ($_instance->childHasBeenRendered('JRwmdpn')) {
    $componentId = $_instance->getRenderedChildComponentId('JRwmdpn');
    $componentTag = $_instance->getRenderedChildComponentTagName('JRwmdpn');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('JRwmdpn');
} else {
    $response = \Livewire\Livewire::mount('frontend.tools.color-converter');
    $html = $response->html();
    $_instance->logRenderedChild('JRwmdpn', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                                              <?php break; ?>

                                          <?php case ('ICO Converter'): ?>
                                                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('frontend.tools.ico-converter')->html();
} elseif ($_instance->childHasBeenRendered('nNwvUXR')) {
    $componentId = $_instance->getRenderedChildComponentId('nNwvUXR');
    $componentTag = $_instance->getRenderedChildComponentTagName('nNwvUXR');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('nNwvUXR');
} else {
    $response = \Livewire\Livewire::mount('frontend.tools.ico-converter');
    $html = $response->html();
    $_instance->logRenderedChild('nNwvUXR', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                                              <?php break; ?>

                                          <?php case ('ICO to PNG'): ?>
                                                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('frontend.tools.ico-to-png')->html();
} elseif ($_instance->childHasBeenRendered('IVKWGGc')) {
    $componentId = $_instance->getRenderedChildComponentId('IVKWGGc');
    $componentTag = $_instance->getRenderedChildComponentTagName('IVKWGGc');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('IVKWGGc');
} else {
    $response = \Livewire\Livewire::mount('frontend.tools.ico-to-png');
    $html = $response->html();
    $_instance->logRenderedChild('IVKWGGc', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                                              <?php break; ?>

                                          <?php case ('Case Converter'): ?>
                                                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('frontend.tools.case-converter')->html();
} elseif ($_instance->childHasBeenRendered('qxCxuxZ')) {
    $componentId = $_instance->getRenderedChildComponentId('qxCxuxZ');
    $componentTag = $_instance->getRenderedChildComponentTagName('qxCxuxZ');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('qxCxuxZ');
} else {
    $response = \Livewire\Livewire::mount('frontend.tools.case-converter');
    $html = $response->html();
    $_instance->logRenderedChild('qxCxuxZ', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                                              <?php break; ?>

                                          <?php case ('Lorem Ipsum Generator'): ?>
                                                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('frontend.tools.lorem-ipsum-generator')->html();
} elseif ($_instance->childHasBeenRendered('RPwMe5i')) {
    $componentId = $_instance->getRenderedChildComponentId('RPwMe5i');
    $componentTag = $_instance->getRenderedChildComponentTagName('RPwMe5i');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('RPwMe5i');
} else {
    $response = \Livewire\Livewire::mount('frontend.tools.lorem-ipsum-generator');
    $html = $response->html();
    $_instance->logRenderedChild('RPwMe5i', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                                              <?php break; ?>

                                          <?php case ('QR Code Generator'): ?>
                                                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('frontend.tools.qr-code-generator')->html();
} elseif ($_instance->childHasBeenRendered('3d1MxpX')) {
    $componentId = $_instance->getRenderedChildComponentId('3d1MxpX');
    $componentTag = $_instance->getRenderedChildComponentTagName('3d1MxpX');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('3d1MxpX');
} else {
    $response = \Livewire\Livewire::mount('frontend.tools.qr-code-generator');
    $html = $response->html();
    $_instance->logRenderedChild('3d1MxpX', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                                              <?php break; ?>

                                          <?php case ('QR Code Decoder'): ?>
                                                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('frontend.tools.qr-code-decoder')->html();
} elseif ($_instance->childHasBeenRendered('ZQTPenn')) {
    $componentId = $_instance->getRenderedChildComponentId('ZQTPenn');
    $componentTag = $_instance->getRenderedChildComponentTagName('ZQTPenn');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('ZQTPenn');
} else {
    $response = \Livewire\Livewire::mount('frontend.tools.qr-code-decoder');
    $html = $response->html();
    $_instance->logRenderedChild('ZQTPenn', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                                              <?php break; ?>

                                          <?php case ('Javascript Obfuscator'): ?>
                                                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('frontend.tools.javascript-obfuscator')->html();
} elseif ($_instance->childHasBeenRendered('JMbwTLJ')) {
    $componentId = $_instance->getRenderedChildComponentId('JMbwTLJ');
    $componentTag = $_instance->getRenderedChildComponentTagName('JMbwTLJ');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('JMbwTLJ');
} else {
    $response = \Livewire\Livewire::mount('frontend.tools.javascript-obfuscator');
    $html = $response->html();
    $_instance->logRenderedChild('JMbwTLJ', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                                              <?php break; ?>

                                          <?php case ('Javascript DeObfuscator'): ?>
                                                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('frontend.tools.javascript-de-obfuscator')->html();
} elseif ($_instance->childHasBeenRendered('ZpwG7oC')) {
    $componentId = $_instance->getRenderedChildComponentId('ZpwG7oC');
    $componentTag = $_instance->getRenderedChildComponentTagName('ZpwG7oC');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('ZpwG7oC');
} else {
    $response = \Livewire\Livewire::mount('frontend.tools.javascript-de-obfuscator');
    $html = $response->html();
    $_instance->logRenderedChild('ZpwG7oC', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                                              <?php break; ?>

                                          <?php case ('Base64 Encode'): ?>
                                                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('frontend.tools.base64-encode')->html();
} elseif ($_instance->childHasBeenRendered('AIzNzT7')) {
    $componentId = $_instance->getRenderedChildComponentId('AIzNzT7');
    $componentTag = $_instance->getRenderedChildComponentTagName('AIzNzT7');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('AIzNzT7');
} else {
    $response = \Livewire\Livewire::mount('frontend.tools.base64-encode');
    $html = $response->html();
    $_instance->logRenderedChild('AIzNzT7', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                                              <?php break; ?>

                                          <?php case ('Base64 Decode'): ?>
                                                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('frontend.tools.base64-decode')->html();
} elseif ($_instance->childHasBeenRendered('QfhWy9Y')) {
    $componentId = $_instance->getRenderedChildComponentId('QfhWy9Y');
    $componentTag = $_instance->getRenderedChildComponentTagName('QfhWy9Y');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('QfhWy9Y');
} else {
    $response = \Livewire\Livewire::mount('frontend.tools.base64-decode');
    $html = $response->html();
    $_instance->logRenderedChild('QfhWy9Y', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                                              <?php break; ?>

                                          <?php case ('HTML Encode'): ?>
                                                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('frontend.tools.html-encode')->html();
} elseif ($_instance->childHasBeenRendered('r5LRvyV')) {
    $componentId = $_instance->getRenderedChildComponentId('r5LRvyV');
    $componentTag = $_instance->getRenderedChildComponentTagName('r5LRvyV');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('r5LRvyV');
} else {
    $response = \Livewire\Livewire::mount('frontend.tools.html-encode');
    $html = $response->html();
    $_instance->logRenderedChild('r5LRvyV', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                                              <?php break; ?>

                                          <?php case ('HTML Decode'): ?>
                                                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('frontend.tools.html-decode')->html();
} elseif ($_instance->childHasBeenRendered('uSVL7hA')) {
    $componentId = $_instance->getRenderedChildComponentId('uSVL7hA');
    $componentTag = $_instance->getRenderedChildComponentTagName('uSVL7hA');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('uSVL7hA');
} else {
    $response = \Livewire\Livewire::mount('frontend.tools.html-decode');
    $html = $response->html();
    $_instance->logRenderedChild('uSVL7hA', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                                              <?php break; ?>

                                          <?php case ('URL Encode'): ?>
                                                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('frontend.tools.url-encode')->html();
} elseif ($_instance->childHasBeenRendered('KqTSvxL')) {
    $componentId = $_instance->getRenderedChildComponentId('KqTSvxL');
    $componentTag = $_instance->getRenderedChildComponentTagName('KqTSvxL');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('KqTSvxL');
} else {
    $response = \Livewire\Livewire::mount('frontend.tools.url-encode');
    $html = $response->html();
    $_instance->logRenderedChild('KqTSvxL', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                                              <?php break; ?>

                                          <?php case ('URL Decode'): ?>
                                                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('frontend.tools.url-decode')->html();
} elseif ($_instance->childHasBeenRendered('nOYwNWe')) {
    $componentId = $_instance->getRenderedChildComponentId('nOYwNWe');
    $componentTag = $_instance->getRenderedChildComponentTagName('nOYwNWe');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('nOYwNWe');
} else {
    $response = \Livewire\Livewire::mount('frontend.tools.url-decode');
    $html = $response->html();
    $_instance->logRenderedChild('nOYwNWe', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                                              <?php break; ?>

                                          <?php case ('HTML Minifier'): ?>
                                                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('frontend.tools.html-minifier')->html();
} elseif ($_instance->childHasBeenRendered('7z5P6kb')) {
    $componentId = $_instance->getRenderedChildComponentId('7z5P6kb');
    $componentTag = $_instance->getRenderedChildComponentTagName('7z5P6kb');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('7z5P6kb');
} else {
    $response = \Livewire\Livewire::mount('frontend.tools.html-minifier');
    $html = $response->html();
    $_instance->logRenderedChild('7z5P6kb', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                                              <?php break; ?>

                                          <?php case ('HTML Beautifier'): ?>
                                                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('frontend.tools.html-beautifier')->html();
} elseif ($_instance->childHasBeenRendered('wC2kazm')) {
    $componentId = $_instance->getRenderedChildComponentId('wC2kazm');
    $componentTag = $_instance->getRenderedChildComponentTagName('wC2kazm');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('wC2kazm');
} else {
    $response = \Livewire\Livewire::mount('frontend.tools.html-beautifier');
    $html = $response->html();
    $_instance->logRenderedChild('wC2kazm', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                                              <?php break; ?>

                                          <?php case ('CSS Minifier'): ?>
                                                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('frontend.tools.css-minifier')->html();
} elseif ($_instance->childHasBeenRendered('AgtjMsI')) {
    $componentId = $_instance->getRenderedChildComponentId('AgtjMsI');
    $componentTag = $_instance->getRenderedChildComponentTagName('AgtjMsI');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('AgtjMsI');
} else {
    $response = \Livewire\Livewire::mount('frontend.tools.css-minifier');
    $html = $response->html();
    $_instance->logRenderedChild('AgtjMsI', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                                              <?php break; ?>

                                          <?php case ('CSS Beautifier'): ?>
                                                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('frontend.tools.css-beautifier')->html();
} elseif ($_instance->childHasBeenRendered('utzGqpc')) {
    $componentId = $_instance->getRenderedChildComponentId('utzGqpc');
    $componentTag = $_instance->getRenderedChildComponentTagName('utzGqpc');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('utzGqpc');
} else {
    $response = \Livewire\Livewire::mount('frontend.tools.css-beautifier');
    $html = $response->html();
    $_instance->logRenderedChild('utzGqpc', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                                              <?php break; ?>

                                          <?php case ('JavaScript Minifier'): ?>
                                                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('frontend.tools.javascript-minifier')->html();
} elseif ($_instance->childHasBeenRendered('qIWFtoi')) {
    $componentId = $_instance->getRenderedChildComponentId('qIWFtoi');
    $componentTag = $_instance->getRenderedChildComponentTagName('qIWFtoi');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('qIWFtoi');
} else {
    $response = \Livewire\Livewire::mount('frontend.tools.javascript-minifier');
    $html = $response->html();
    $_instance->logRenderedChild('qIWFtoi', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                                              <?php break; ?>

                                          <?php case ('JavaScript Beautifier'): ?>
                                                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('frontend.tools.javascript-beautifier')->html();
} elseif ($_instance->childHasBeenRendered('0dG7jun')) {
    $componentId = $_instance->getRenderedChildComponentId('0dG7jun');
    $componentTag = $_instance->getRenderedChildComponentTagName('0dG7jun');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('0dG7jun');
} else {
    $response = \Livewire\Livewire::mount('frontend.tools.javascript-beautifier');
    $html = $response->html();
    $_instance->logRenderedChild('0dG7jun', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                                              <?php break; ?>

                                          <?php case ('Text to Slug'): ?>
                                                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('frontend.tools.text-to-slug')->html();
} elseif ($_instance->childHasBeenRendered('QM9gIlh')) {
    $componentId = $_instance->getRenderedChildComponentId('QM9gIlh');
    $componentTag = $_instance->getRenderedChildComponentTagName('QM9gIlh');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('QM9gIlh');
} else {
    $response = \Livewire\Livewire::mount('frontend.tools.text-to-slug');
    $html = $response->html();
    $_instance->logRenderedChild('QM9gIlh', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                                              <?php break; ?>

                                          <?php case ('MD5 Generator'): ?>
                                                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('frontend.tools.md5-generator')->html();
} elseif ($_instance->childHasBeenRendered('UUuvukO')) {
    $componentId = $_instance->getRenderedChildComponentId('UUuvukO');
    $componentTag = $_instance->getRenderedChildComponentTagName('UUuvukO');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('UUuvukO');
} else {
    $response = \Livewire\Livewire::mount('frontend.tools.md5-generator');
    $html = $response->html();
    $_instance->logRenderedChild('UUuvukO', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                                              <?php break; ?>

                                          <?php case ('What Is My IP'): ?>
                                                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('frontend.tools.what-is-my-ip')->html();
} elseif ($_instance->childHasBeenRendered('7iuMzBG')) {
    $componentId = $_instance->getRenderedChildComponentId('7iuMzBG');
    $componentTag = $_instance->getRenderedChildComponentTagName('7iuMzBG');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('7iuMzBG');
} else {
    $response = \Livewire\Livewire::mount('frontend.tools.what-is-my-ip');
    $html = $response->html();
    $_instance->logRenderedChild('7iuMzBG', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                                              <?php break; ?>

                                          <?php case ('IP Address Lookup'): ?>
                                                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('frontend.tools.ip-address-lookup')->html();
} elseif ($_instance->childHasBeenRendered('HcivUaK')) {
    $componentId = $_instance->getRenderedChildComponentId('HcivUaK');
    $componentTag = $_instance->getRenderedChildComponentTagName('HcivUaK');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('HcivUaK');
} else {
    $response = \Livewire\Livewire::mount('frontend.tools.ip-address-lookup');
    $html = $response->html();
    $_instance->logRenderedChild('HcivUaK', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                                              <?php break; ?>
                                              
                                          <?php default: ?>
                                      <?php endswitch; ?>
                                      
                                    </div>
                                  </div>
                                <?php endif; ?>

                                <div class="card">
                                    <?php if( $general->parallax_status == false ): ?>
                                        <div class="card-header d-block">
                                              <h1 class="page-title"><?php echo e(__($pageTrans->title)); ?></h1>
                                              <p class="mb-0"><?php echo e(__($pageTrans->subtitle)); ?></p>
                                        </div>
                                    <?php endif; ?>

                                    <div class="card-body pb-0">
                                        <?php if( Auth::user() ): ?>
                                          <div class="d-flex justify-content-center mb-3">
                                            <a href="<?php echo e(localization()->getLocalizedURL($pageTrans->locale, route('edit-page-translations', $pageTrans->translations[0]['id']), [], true)); ?>" class="btn btn-primary"><?php echo e(__('Edit Page')); ?></a>
                                          </div>
                                        <?php endif; ?>

                                        <?php if( $page->ads_status == true && $advertisement->area4_status == true && $advertisement->area4 != null ): ?>
                                          <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.frontend.advertisement.area4','data' => ['advertisement' => $advertisement]]); ?>
<?php $component->withName('frontend.advertisement.area4'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['advertisement' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($advertisement)]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                                        <?php endif; ?>

                                        <?php echo $pageTrans->description; ?>


                                        <?php if( $page->ads_status == true && $advertisement->area5_status == true && $advertisement->area5 != null ): ?>
                                          <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.frontend.advertisement.area5','data' => ['advertisement' => $advertisement]]); ?>
<?php $component->withName('frontend.advertisement.area5'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['advertisement' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($advertisement)]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                                        <?php endif; ?>

                                        <?php switch( $page->type ):

                                            case ('report'): ?>
                                                  <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('frontend.report')->html();
} elseif ($_instance->childHasBeenRendered('AnO276r')) {
    $componentId = $_instance->getRenderedChildComponentId('AnO276r');
    $componentTag = $_instance->getRenderedChildComponentTagName('AnO276r');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('AnO276r');
} else {
    $response = \Livewire\Livewire::mount('frontend.report');
    $html = $response->html();
    $_instance->logRenderedChild('AnO276r', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                                                <?php break; ?>

                                            <?php case ('contact'): ?>
                                                  <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('frontend.contact')->html();
} elseif ($_instance->childHasBeenRendered('FBz3QRO')) {
    $componentId = $_instance->getRenderedChildComponentId('FBz3QRO');
    $componentTag = $_instance->getRenderedChildComponentTagName('FBz3QRO');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('FBz3QRO');
} else {
    $response = \Livewire\Livewire::mount('frontend.contact');
    $html = $response->html();
    $_instance->logRenderedChild('FBz3QRO', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                                                <?php break; ?>

                                            <?php default: ?>
                                        <?php endswitch; ?>

                                      <?php if( $general->share_icons_status == true ): ?>
                                        <div class="social-share text-center">
                                          <div class="is-divider"></div>
                                          <div class="share-icons relative">

                                              <a wire:ignore href="https://www.facebook.com/sharer.php?u=<?php echo e(($page->type == 'home') ? route('home') : route('page', $page->slug )); ?>"
                                                  onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=<?php echo e(($page->type == 'home') ? route('home') : route('page', $page->slug )); ?>','facebook','height=500,width=800,resizable=1,scrollbars=yes'); return false;"
                                                  data-label="Facebook"
                                                  rel="noopener noreferrer nofollow"
                                                  target="_blank"
                                                  class="btn btn-facebook btn-simple rounded p-2">
                                                  <i class="fab fa-facebook"></i>
                                              </a>

                                              <a wire:ignore href="https://twitter.com/share?url=<?php echo e(($page->type == 'home') ? route('home') : route('page', $page->slug )); ?>"
                                                  onclick="window.open('https://twitter.com/share?url=<?php echo e(($page->type == 'home') ? route('home') : route('page', $page->slug )); ?>','twitter','height=500,width=800,resizable=1,scrollbars=yes'); return false;"
                                                  rel="noopener noreferrer nofollow"
                                                  target="_blank"
                                                  class="btn btn-twitter btn-simple rounded p-2">
                                                  <i class="fab fa-twitter"></i>
                                              </a>

                                              <a wire:ignore href="https://www.pinterest.com/pin-builder/?url=<?php echo e(($page->type == 'home') ? route('home') : route('page', $page->slug )); ?>&media=<?php echo e($page->featured_image); ?>&description=<?php echo e(str_replace(' ', '%20', $pageTrans->title)); ?>"
                                                  onclick="window.open('https://www.pinterest.com/pin-builder/?url=<?php echo e(($page->type == 'home') ? route('home') : route('page', $page->slug )); ?>&media=<?php echo e($page->featured_image); ?>&description=<?php echo e(str_replace(' ', '%20', $pageTrans->title)); ?>','pinterest','height=500,width=800,resizable=1,scrollbars=yes'); return false;"
                                                  rel="noopener noreferrer nofollow"
                                                  target="_blank"
                                                  class="btn btn-pinterest btn-simple rounded p-2">
                                                  <i class="fab fa-pinterest"></i>
                                              </a>

                                              <a wire:ignore href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo e(($page->type == 'home') ? route('home') : route('page', $page->slug )); ?>"
                                                  onclick="window.open('https://www.linkedin.com/sharing/share-offsite/?url=<?php echo e(($page->type == 'home') ? route('home') : route('page', $page->slug )); ?>','linkedin','height=500,width=800,resizable=1,scrollbars=yes'); return false;"
                                                  rel="noopener noreferrer nofollow"
                                                  target="_blank"
                                                  class="btn btn-linkedin btn-simple rounded p-2">
                                                  <i class="fab fa-linkedin"></i>
                                              </a>

                                              <a wire:ignore href="https://www.reddit.com/submit?url=<?php echo e(($page->type == 'home') ? route('home') : route('page', $page->slug )); ?>&title=<?php echo e(str_replace(' ', '%20', $pageTrans->title)); ?>"
                                                  onclick="window.open('https://www.reddit.com/submit?url=<?php echo e(($page->type == 'home') ? route('home') : route('page', $page->slug )); ?>&title=<?php echo e(str_replace(' ', '%20', $pageTrans->title)); ?>','reddit','height=500,width=800,resizable=1,scrollbars=yes'); return false;"
                                                  rel="noopener noreferrer nofollow"
                                                  target="_blank"
                                                  class="btn btn-reddit btn-simple rounded p-2">
                                                  <i class="fab fa-reddit"></i>
                                              </a>

                                              <a wire:ignore href="https://tumblr.com/widgets/share/tool?canonicalUrl=<?php echo e(($page->type == 'home') ? route('home') : route('page', $page->slug )); ?>"
                                                  onclick="window.open('https://tumblr.com/widgets/share/tool?canonicalUrl=<?php echo e(($page->type == 'home') ? route('home') : route('page', $page->slug )); ?>','tumblr','height=500,width=800,resizable=1,scrollbars=yes'); return false;"
                                                  target="_blank"
                                                  class="btn btn-tumblr btn-simple rounded p-2"
                                                  rel="noopener noreferrer nofollow">
                                                  <i class="fab fa-tumblr"></i>
                                              </a>

                                          </div>
                                        </div>
                                      <?php endif; ?>

                                      <?php if( $general->author_box_status == true ): ?>

                                        <hr class="horizontal dark">
                                        <div class="my-3">
                                          <div class="row">

                                            <div class="col-lg-2">
                                                <div class="position-relative mb-3">
                                                  <div class="blur-shadow-image">
                                                    <img class="w-100 rounded-3 shadow-sm" src="<?php echo e($profile->avatar); ?>">
                                                  </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-10 ps-0">
                                              <div class="card-body text-start py-0">

                                                <div class="p-md-0 pt-3">
                                                  <h5 class="font-weight-bolder mb-0"><?php echo e($profile->fullname); ?></h5>
                                                  <p class="text-uppercase text-sm font-weight-bold mb-2"><?php echo e($profile->position); ?></p>
                                                </div>

                                                <p class="mb-3"><?php echo e(__($profile->bio)); ?></p>

                                                <?php if( ($profile->social_status == true) && !empty($profile->user_socials) ): ?>

                                                  <?php $__currentLoopData = $profile->user_socials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                    <a class="btn btn-<?php echo e($element->name); ?> btn-simple mb-0 ps-1 pe-2 py-0" href="<?php echo e($element->url); ?>" target="blank">
                                                      <i class="fab fa-<?php echo e($element->name); ?> fa-lg" aria-hidden="true"></i>
                                                    </a>

                                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                <?php endif; ?>

                                              </div>
                                            </div>

                                          </div>
                                        </div>

                                      <?php endif; ?>

                                    </div>
                                </div>
                            </section>
                    </div>

                    <?php if( $page->ads_status == true && ( ( $advertisement->sidebar_top_status == true && $advertisement->sidebar_top != null ) || ( $advertisement->sidebar_middle_status == true && $advertisement->sidebar_middle != null ) || ( $advertisement->sidebar_bottom_status == true && $advertisement->sidebar_bottom != null ) ) || $sidebar->tool_status == true || $sidebar->post_status == true): ?>
                      <div class="col-lg-3 ml-auto">
                          <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.frontend.sidebar','data' => ['page' => $page,'advertisement' => $advertisement,'sidebar' => $sidebar,'recentPosts' => $recent_posts,'popularTools' => $popular_tools]]); ?>
<?php $component->withName('frontend.sidebar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['page' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($page),'advertisement' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($advertisement),'sidebar' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($sidebar),'recentPosts' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($recent_posts),'popularTools' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($popular_tools)]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                      </div>
                    <?php endif; ?>

                </div>
            </div>

        </section>
    </main>

    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.frontend.footer','data' => ['footer' => $footer,'general' => $general,'socials' => $socials]]); ?>
<?php $component->withName('frontend.footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['footer' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($footer),'general' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($general),'socials' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($socials)]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>

    <!-- Theme JS -->
    <script src="<?php echo e(asset('assets/js/main.min.js')); ?>"></script>

    <?php if( $captcha->status == true && !empty($captcha->site_key ) && !empty($captcha->secret_key ) ): ?>
      <script src="https://www.google.com/recaptcha/api.js?render=<?php echo e($captcha->site_key); ?>"></script>
    <?php endif; ?>

    <?php if( $general->adblock_detection == true ): ?>

      <!-- Sweetalert2 -->
      <script src="<?php echo e(asset('assets/js/sweetalert2.min.js')); ?>"></script>

      <script src="<?php echo e(asset('assets/js/prebid-ads.js')); ?>"></script>

      <script>
      (function( $ ) {
        "use strict";

              if( window.canRunAds === undefined ){
                  Swal.fire({
                    title: "<?php echo e(__('You\'re blocking ads')); ?>",
                    text: "<?php echo e(__('Our website is made possible by displaying online ads to our visitors. Please consider supporting us by disabling your ad blocker.')); ?>",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: "<?php echo e(__('I have disabled Adblock')); ?>",
                    cancelButtonText: "<?php echo e(__('No, thanks!')); ?>"
                  }).then((result) => {
                    if (result.isConfirmed) {
                      window.location.reload();
                    }
                  });
              }

      })( jQuery );
      </script>

    <?php endif; ?>

    <?php if(Cookie::get('cookies') == null): ?>

      <?php if( $notice->status == true ): ?>

            <div class="cookies-wrapper position-fixed <?php echo e($notice->align); ?>">
                <div class="<?php echo e($notice->background); ?> <?php echo e(($notice->background != 'bg-white') ? 'text-white' : 'text-dark'); ?> py-3 px-2 rounded shadow">
                    <div class="card-body">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-cookie" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                               <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                               <path d="M8 13v.01"></path>
                               <path d="M12 17v.01"></path>
                               <path d="M12 12v.01"></path>
                               <path d="M16 14v.01"></path>
                               <path d="M11 8v.01"></path>
                               <path d="M13.148 3.476l2.667 1.104a4 4 0 0 0 4.656 6.14l.053 .132a3 3 0 0 1 0 2.296c-.497 .786 -.838 1.404 -1.024 1.852c-.189 .456 -.409 1.194 -.66 2.216a3 3 0 0 1 -1.624 1.623c-1.048 .263 -1.787 .483 -2.216 .661c-.475 .197 -1.092 .538 -1.852 1.024a3 3 0 0 1 -2.296 0c-.802 -.503 -1.419 -.844 -1.852 -1.024c-.471 -.195 -1.21 -.415 -2.216 -.66a3 3 0 0 1 -1.623 -1.624c-.265 -1.052 -.485 -1.79 -.661 -2.216c-.198 -.479 -.54 -1.096 -1.024 -1.852a3 3 0 0 1 0 -2.296c.48 -.744 .82 -1.361 1.024 -1.852c.171 -.413 .391 -1.152 .66 -2.216a3 3 0 0 1 1.624 -1.623c1.032 -.256 1.77 -.476 2.216 -.661c.458 -.19 1.075 -.531 1.852 -1.024a3 3 0 0 1 2.296 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <h2><?php echo e(__('Cookies!')); ?></h2>
                            <span class="text-start"><?php echo __(GrahamCampbell\Security\Facades\Security::clean($notice->notice)); ?></span>
                        </div>
                    </div>

                        <?php if( $notice->button == true): ?>
                            <div class="text-center">
                                <button id="acceptCookies" class="btn bg-white mb-0 text-capitalize"> <?php echo e(__('Accept all cookies')); ?> </button>
                            </div>
                         <?php endif; ?>
                    </div>

                </div>
            </div>

          <script>
             (function( $ ) {
                "use strict";

                    jQuery("#acceptCookies").click(function(){
                        jQuery.ajax({
                            type : 'get',
                            url : '<?php echo e(url('/')); ?>/cookies/accept',
                            success: function(e) {
                                jQuery('.cookies-wrapper').remove();
                            }
                        });
                    });

            })( jQuery );
          </script>
      <?php endif; ?>

    <?php endif; ?>

    <?php if( $general->dir_mode == true ): ?>
        <script>
           (function( $ ) {
              "use strict";

                  jQuery(".btn-toggle-dir").click(function(){
                      jQuery.ajax({
                          type : 'get',
                          url : '<?php echo e(url('/')); ?>/dir/mode',
                          success: function(e) {
                              window.location.reload();
                          }
                      });
                  });

          })( jQuery );
        </script>
      <?php endif; ?>

    <?php if( $general->theme_mode == true ): ?>
      <script>
         (function( $ ) {
            "use strict";

                jQuery(".btn-toggle-mode").click(function(){
                    jQuery.ajax({
                        type : 'get',
                        url : '<?php echo e(url('/')); ?>/theme/mode',
                        success: function(e) {
                            window.location.reload();
                        }
                    });
                });

        })( jQuery );
      </script>
    <?php endif; ?>

    <script>
        function copyToClipboard() {
          document.getElementById("text").select();
          document.execCommand('copy');
        }
    </script>
    
    <?php if( $advanced->footer_status == true && $advanced->insert_footer != null ): ?>
      <?php echo $advanced->insert_footer; ?>

    <?php endif; ?>

  </div><?php /**PATH C:\xampp\htdocs\laravel\sumowebtools\components\resources\views/livewire/frontend/pages.blade.php ENDPATH**/ ?>
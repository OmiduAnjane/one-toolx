    <header class="navbar navbar-expand-md navbar-light d-print-none <?php if($header->sticky_header): ?> sticky-top <?php endif; ?>">
        <div class="container-xl">
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu" aria-expanded="false">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand d-none-navbar-horizontal pe-0 pe-md-3" title="<?php echo e(__($homeTitle)); ?>" href="<?php echo e(route('home')); ?>">
                <?php if( !empty($header->logo_light) ): ?>

                    <?php if( Cookie::get('theme_mode') === 'theme-dark' ): ?>
                        <img src="<?php echo e($header->logo_dark); ?>" width="110" height="32" alt="<?php echo e(__($homeTitle)); ?>" class="navbar-brand-image">
                    <?php elseif( Cookie::get('theme_mode') === 'theme-light' ): ?>
                        <img src="<?php echo e($header->logo_light); ?>" width="110" height="32" alt="<?php echo e(__($homeTitle)); ?>" class="navbar-brand-image">
                    <?php else: ?>
                        <img src="<?php echo e($header->logo_light); ?>" width="110" height="32" alt="<?php echo e(__($homeTitle)); ?>" class="navbar-brand-image">
                    <?php endif; ?>
                    
                <?php else: ?>
                  <?php echo e($homeTitle); ?>

                <?php endif; ?>
            </a>

            <div class="navbar-nav flex-row order-md-last">

                <?php if( $general->dir_mode == true ): ?>
                    <div class="nav-item me-2">
                        <a class="btn btn-icon bg-white btn-toggle-dir" type="button" data-bs-toggle="tooltip" data-bs-placement="bottom" title="<?php echo e(__('Direction Mode (LTR / RTL)')); ?>">
                            <?php if( Cookie::get('dir_mode') == 'rtl' ): ?>
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon text-secondary" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"> <path stroke="none" d="M0 0h24v24H0z" fill="none"></path> <path d="M16 4h-6.5a3.5 3.5 0 0 0 0 7h.5"></path> <path d="M14 15v-11"></path> <path d="M10 15v-11"></path> <path d="M5 19h14"></path> <path d="M7 21l-2 -2l2 -2"></path> </svg>
                            <?php else: ?>
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon text-secondary" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"> <path stroke="none" d="M0 0h24v24H0z" fill="none"></path> <path d="M5 19h14"></path> <path d="M17 21l2 -2l-2 -2"></path> <path d="M16 4h-6.5a3.5 3.5 0 0 0 0 7h.5"></path> <path d="M14 15v-11"></path> <path d="M10 15v-11"></path> </svg>
                            <?php endif; ?>
                        </a>
                    </div>
                <?php endif; ?>

                <?php if( $general->theme_mode == true ): ?>
                    <div class="nav-item me-2">
                        <a class="btn btn-icon bg-white btn-toggle-mode" type="button" data-bs-toggle="tooltip" data-bs-placement="bottom" title="<?php echo e(__('Theme Mode (Light / Dark)')); ?>">
                            
                            <?php if( Cookie::get('theme_mode') == 'theme-light' ): ?>
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon text-warning" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z"></path></svg>
                            <?php else: ?>
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon text-warning" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><circle cx="12" cy="12" r="4"></circle><path d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7"></path></svg>
                            <?php endif; ?>
                        
                        </a>
                    </div>
                <?php endif; ?>

                <!-- Begin::Navbar Right -->
                <?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <?php if( $value['type'] == 'button' ): ?>

                      <?php if( count($value['children']) ): ?>
                            <li class="nav-item dropdown">
                                <a class="btn dropdown-toggle me-2 <?php echo e($value['class']); ?>" href="#navbarDropdownMenuButton<?php echo e($key); ?>" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false">
                                   <?php if( !empty($value['icon']) ): ?>
                                     <i class="<?php echo e($value['icon']); ?> icon"></i>
                                   <?php endif; ?>
                                   <?php echo e(__($value['text'])); ?>

                                </a>

                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.frontend.menu','data' => ['childs' => $value['children']]]); ?>
<?php $component->withName('frontend.menu'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['childs' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($value['children'])]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                            </li>

                      <?php else: ?>

                        <li class="nav-item">
                            <a class="btn me-2 <?php echo e($value['class']); ?>" href="<?php echo e(( $value['menu_items']  == 'custom' ) ? $value['url'] : route('home') . '/' . $value['url']); ?>">
                               <?php if( !empty($value['icon']) ): ?>
                                 <i class="<?php echo e($value['icon']); ?> icon"></i>
                               <?php endif; ?>
                              <?php echo e(__($value['text'])); ?>

                            </a>
                        </li>

                      <?php endif; ?>

                  <?php endif; ?>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <!-- End::Navbar Right -->

                <!-- Begin::Login -->
                <?php if( \App\Models\Admin\AuthPages::where('name', 'Login')->first()->status == true ): ?>
                
                    <?php if( Auth::user() ): ?>

                        <div class="nav-item dropdown">
                            <a class="nav-link d-flex lh-1 text-reset p-0 cursor-pointer" data-bs-toggle="dropdown" aria-label="Open user menu" aria-expanded="false">
                                <span class="avatar avatar-sm" style="background-image: url(https://www.gravatar.com/avatar/<?php echo e(md5(strtolower(trim(Auth::user()->email)))); ?>?s=150&d=mm&r=g);"></span>
                                <div class="d-none d-xl-block ps-2">
                                    <div><?php echo e(Auth::user()->fullname); ?></div>
                                    <div class="mt-1 small text-muted"><?php echo e(( Auth::user()->is_admin == 1) ? __('Administrator') : __('Member')); ?></div>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <?php if( Auth::user()->is_admin == 1 ): ?>
                                    <a href="<?php echo e(route('dashboard')); ?>" class="dropdown-item">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon me-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"> <path stroke="none" d="M0 0h24v24H0z" fill="none"></path> <circle cx="12" cy="13" r="2"></circle> <line x1="13.45" y1="11.55" x2="15.5" y2="9.5"></line> <path d="M6.4 20a9 9 0 1 1 11.2 0z"></path> </svg>
                                        <?php echo e(__('Admin Dashboard')); ?>

                                    </a>
                                <?php endif; ?>

                                <?php if( \App\Models\Admin\AuthPages::where('name', 'Profile')->first()->status == true ): ?>
                                    <a href="<?php echo e(route('user-profile')); ?>" class="dropdown-item">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon me-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><circle cx="12" cy="7" r="4"></circle><path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path></svg>
                                        <?php echo e(__('Profile')); ?>

                                    </a>
                                <?php endif; ?>
                                
                                <a href="<?php echo e(route('user-logout')); ?>" class="dropdown-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon me-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2"></path><path d="M7 12h14l-3 -3m0 6l3 -3"></path></svg>
                                    <?php echo e(__('Logout')); ?>

                                </a>
                            </div>
                        </div>

                    <?php else: ?>
                        <div class="nav-item">
                            <a class="btn btn-success" href="<?php echo e(route('login')); ?>">
                                <i class="fas fa-user icon"></i>
                                <?php echo e(__('Login')); ?>

                            </a>
                        </div>
                    <?php endif; ?>

                <?php endif; ?>
                <!-- End::Login -->

            </div>

            <div class="collapse navbar-collapse" id="navbar-menu">
                <div class="d-flex flex-column flex-md-row flex-fill align-items-stretch align-items-md-center">
                    <ul class="navbar-nav">

                        <!-- Begin::Navbar Left -->
                        <?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <?php if( $value['type'] == 'link' ): ?>

                              <?php if( count($value['children']) ): ?>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#navbarDropdownMenuLink<?php echo e($key); ?>" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false">
                                           <?php if( !empty($value['icon']) ): ?>
                                             <i class="<?php echo e($value['icon']); ?> me-2"></i>
                                           <?php endif; ?>
                                           <?php echo e(__($value['text'])); ?>

                                        </a>

                                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.frontend.menu','data' => ['childs' => $value['children']]]); ?>
<?php $component->withName('frontend.menu'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['childs' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($value['children'])]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                                    </li>

                              <?php else: ?>

                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(( $value['menu_items']  == 'custom' ) ? $value['url'] : route('home') . '/' . $value['url']); ?>">
                                       <?php if( !empty($value['icon']) ): ?>
                                         <i class="<?php echo e($value['icon']); ?> me-2"></i>
                                       <?php endif; ?>
                                      <?php echo e(__($value['text'])); ?>

                                    </a>
                                </li>

                              <?php endif; ?>

                            <?php endif; ?>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <!-- End::Navbar Left -->

                        <!-- Begin:Lang Menu -->
                        <?php if( $general->language_switcher == true ): ?>

                          <?php
                            $mobileLangMenu = '';
                          ?>

                            <div class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle cursor-pointer" data-bs-toggle="dropdown" aria-label="Open language menu">
                                    <img src="<?php echo e(asset('assets/img/flags/' . localization()->getCurrentLocale() . '.svg')); ?>" class="lang-menu me-1 my-auto"> 
                                    <?php echo e(localization()->getCurrentLocaleNative()); ?>

                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                   <?php $__currentLoopData = localization()->getSupportedLocales(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $localeCode => $properties): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                      <a class="dropdown-item border-radius-md mb-1" rel="alternate" hreflang="<?php echo e($properties->key()); ?>" href="<?php echo e(url('/') . '/' .  $properties->key()); ?>">
                                        <img src="<?php echo e(asset('assets/img/flags/' . $properties->key() . '.svg')); ?>" class="lang-menu me-1 my-auto"> <?php echo e($properties->native()); ?>

                                      </a>
                                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                          
                        <?php endif; ?>
                        <!-- End:Lang Menu -->
                    </ul>

                </div>
            </div>

        </div>
    </header><?php /**PATH C:\xampp\htdocs\laravel\sumowebtools\components\resources\views/components/frontend/navbar.blade.php ENDPATH**/ ?>
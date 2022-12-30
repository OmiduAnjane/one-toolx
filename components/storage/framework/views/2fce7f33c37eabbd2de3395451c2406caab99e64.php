<aside class="navbar navbar-vertical navbar-expand-lg navbar-light shadow-sm">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <h1 class="navbar-brand">
            <a href="<?php echo e(route('home')); ?>">
                <?php if( Cookie::get('theme_mode') === 'theme-dark' ): ?>
                    <img src="<?php echo e(asset('assets/img/logo-dark.svg')); ?>" width="110" height="32" alt="<?php echo e(__( env('APP_NAME') )); ?>" class="navbar-brand-image">
                <?php elseif( Cookie::get('theme_mode') === 'theme-light' ): ?>
                    <img src="<?php echo e(asset('assets/img/logo-light.svg')); ?>" width="110" height="32" alt="<?php echo e(__( env('APP_NAME') )); ?>" class="navbar-brand-image">
                <?php else: ?>
                    <img src="<?php echo e(asset('assets/img/logo-light.svg')); ?>" width="110" height="32" alt="<?php echo e(__( env('APP_NAME') )); ?>" class="navbar-brand-image">
                <?php endif; ?>
            </a>
        </h1>

        <div class="navbar-nav d-lg-none">
            <a class="nav-link cursor-pointer" data-bs-toggle="dropdown" aria-label="Open user menu" aria-expanded="false">
                <span class="avatar avatar-sm" style="background-image: url(https://www.gravatar.com/avatar/<?php echo e(md5(strtolower(trim(Auth::user()->email)))); ?>?s=150&d=mm&r=g);"></span>
                <div class="d-none d-xl-block">
                    <div><?php echo e(Auth::user()->fullname); ?></div>
                    <div class="small text-muted"><?php echo e(( Auth::user()->level == 1) ? __('Administrator') : __('Member')); ?></div>
                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <a href="<?php echo e(route('profile')); ?>" class="dropdown-item">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon me-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><circle cx="12" cy="7" r="4"></circle><path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path></svg>
                    <?php echo e(__('Profile')); ?>

                </a>
                <a href="<?php echo e(route('logout')); ?>" class="dropdown-item">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon me-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2"></path><path d="M7 12h14l-3 -3m0 6l3 -3"></path></svg>
                    <?php echo e(__('Logout')); ?>

                </a>
            </div>
        </div>

        <div class="collapse navbar-collapse" id="navbar-menu">

            <ul class="navbar-nav pt-lg-3">

                <li class="nav-item <?php echo e(Route::is('dashboard') ? 'active' : ''); ?>">
                    <a class="nav-link" href="<?php echo e(route('dashboard')); ?>">
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"> <path stroke="none" d="M0 0h24v24H0z" fill="none"></path> <circle cx="12" cy="13" r="2"></circle> <line x1="13.45" y1="11.55" x2="15.5" y2="9.5"></line> <path d="M6.4 20a9 9 0 1 1 11.2 0z"></path> </svg>
                        </span>
                        <span class="nav-link-title"><?php echo e(__('Dashboard')); ?></span>
                    </a>
                </li>

                <li class="nav-item <?php echo e(Route::is('pages', 'create-page', 'page-translations', 'create-page-translations', 'edit-page-translations', 'posts', 'authentication', 'tools', 'categories') ? 'active' : ''); ?>">
                    <a class="nav-link <?php echo e(Route::is('pages', 'create-page', 'page-translations', 'create-page-translations', 'edit-page-translations', 'posts', 'authentication', 'tools', 'categories') ? 'show' : ''); ?>" data-bs-toggle="collapse" href="#pages" role="button" aria-expanded="false" aria-controls="pages">
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 3v4a1 1 0 0 0 1 1h4" /><path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" /><line x1="9" y1="9" x2="10" y2="9" /><line x1="9" y1="13" x2="15" y2="13" /><line x1="9" y1="17" x2="15" y2="17" /></svg>
                        </span>
                        <span class="nav-link-title"><?php echo e(__('Pages')); ?></span>
                    </a>

                    <div id="pages" class="multi-collapse collapse <?php echo e(Route::is('pages', 'create-page', 'page-translations', 'create-page-translations', 'edit-page-translations', 'posts', 'authentication', 'tools', 'categories') ? 'show' : ''); ?>">
                        <a class="nav-link <?php echo e(Route::is('authentication') ? 'active' : ''); ?>" href="<?php echo e(route('authentication')); ?>">
                            <?php echo e(__('Authentication')); ?>

                        </a>

                        <a class="nav-link <?php echo e(Route::is('posts') ? 'active' : ''); ?>" href="<?php echo e(route('posts')); ?>">
                            <?php echo e(__('Blog Posts')); ?>

                        </a>

                        <a class="nav-link <?php echo e(Route::is('tools') ? 'active' : ''); ?>" href="<?php echo e(route('tools')); ?>">
                            <?php echo e(__('Tools')); ?>

                        </a>

                        <a class="nav-link <?php echo e(Route::is('categories') ? 'active' : ''); ?>" href="<?php echo e(route('categories')); ?>">
                            <?php echo e(__('Categories')); ?>

                        </a>
                    </div>
                </li>

                <li class="nav-item <?php echo e(Route::is('general', 'menu', 'header', 'footer', 'create-footer-translations', 'edit-footer-translations', 'api-keys', 'proxy', 'captcha', 'sidebar', 'gdpr', 'advertisement', 'smtp', 'translations', 'edit-translations', 'redirects', 'advanced') ? 'active' : ''); ?>">
                    <a class="nav-link <?php echo e(Route::is('general', 'menu', 'header', 'footer', 'create-footer-translations', 'edit-footer-translations', 'api-keys', 'proxy', 'captcha', 'sidebar', 'gdpr', 'advertisement', 'smtp', 'translations', 'edit-translations', 'redirects', 'advanced') ? 'show' : ''); ?>" data-bs-toggle="collapse" href="#theme-settings" role="button" aria-expanded="false" aria-controls="theme-settings">
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z" /><circle cx="12" cy="12" r="3" /></svg>
                        </span>
                        <span class="nav-link-title"><?php echo e(__('Settings')); ?></span>
                    </a>

                    <div id="theme-settings" class="multi-collapse collapse <?php echo e(Route::is('general', 'menu', 'header', 'footer', 'create-footer-translations', 'edit-footer-translations', 'api-keys', 'proxy', 'captcha', 'sidebar', 'gdpr', 'advertisement', 'smtp', 'translations', 'edit-translations', 'redirects', 'advanced') ? 'show' : ''); ?>">
                        <a class="nav-link <?php echo e(Route::is('general') ? 'active' : ''); ?>" href="<?php echo e(route('general')); ?>">
                            <?php echo e(__('General')); ?>

                        </a>
                                        
                        <a class="nav-link <?php echo e(Route::is('header') ? 'active' : ''); ?>" href="<?php echo e(route('header')); ?>">
                            <?php echo e(__('Header')); ?>

                        </a>
                    
                        <a class="nav-link <?php echo e(Route::is('footer', 'create-footer-translations', 'edit-footer-translations') ? 'active' : ''); ?>" href="<?php echo e(route('footer')); ?>">
                            <?php echo e(__('Footer')); ?>

                        </a>

                        <a class="nav-link <?php echo e(Route::is('menu') ? 'active' : ''); ?>" href="<?php echo e(route('menu')); ?>">
                            <?php echo e(__('Menu')); ?>

                        </a>
                        
                        <a class="nav-link <?php echo e(Route::is('sidebar') ? 'active' : ''); ?>" href="<?php echo e(route('sidebar')); ?>">
                            <?php echo e(__('Sidebar')); ?>

                        </a>

                        <a class="nav-link <?php echo e(Route::is('gdpr') ? 'active' : ''); ?>" href="<?php echo e(route('gdpr')); ?>">
                            <?php echo e(__('GDPR')); ?>

                        </a>

                        <a class="nav-link <?php echo e(Route::is('advertisement') ? 'active' : ''); ?>" href="<?php echo e(route('advertisement')); ?>">
                            <?php echo e(__('Advertisement')); ?>

                        </a>
                    
                        <a class="nav-link <?php echo e(Route::is('smtp') ? 'active' : ''); ?>" href="<?php echo e(route('smtp')); ?>">
                            <?php echo e(__('SMTP')); ?>

                        </a>

                        <a class="nav-link <?php echo e(Route::is('api-keys') ? 'active' : ''); ?>" href="<?php echo e(route('api-keys')); ?>">
                            <?php echo e(__('API Keys')); ?>

                        </a>

                        <a class="nav-link <?php echo e(Route::is('proxy') ? 'active' : ''); ?>" href="<?php echo e(route('proxy')); ?>">
                            <?php echo e(__('Proxy')); ?>

                        </a>

                        <a class="nav-link <?php echo e(Route::is('captcha') ? 'active' : ''); ?>" href="<?php echo e(route('captcha')); ?>">
                            <?php echo e(__('Captcha')); ?>

                        </a>

                            
                        <a class="nav-link <?php echo e(( Route::is('redirects') ) ? 'active' : ''); ?>" href="<?php echo e(route('redirects')); ?>">
                            <?php echo e(__('Redirects')); ?>

                        </a>
                    
                        <a class="nav-link <?php echo e(( Route::is('translations') || Route::is('edit-translations') ) ? 'active' : ''); ?>" href="<?php echo e(route('translations')); ?>">
                            <?php echo e(__('Translations')); ?>

                        </a>
                    
                        <a class="nav-link <?php echo e(( Route::is('advanced') ) ? 'active' : ''); ?>" href="<?php echo e(route('advanced')); ?>">
                            <?php echo e(__('Advanced')); ?>

                        </a>
                    </div>
                </li>

                <li class="nav-item <?php echo e(Route::is('users') ? 'active' : ''); ?>">
                    <a class="nav-link" href="<?php echo e(route('users')); ?>">
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                           <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"> <path stroke="none" d="M0 0h24v24H0z" fill="none"></path> <circle cx="9" cy="7" r="4"></circle> <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path> <path d="M16 3.13a4 4 0 0 1 0 7.75"></path> <path d="M21 21v-2a4 4 0 0 0 -3 -3.85"></path> </svg>
                        </span>
                        <span class="nav-link-title"><?php echo e(__('Users')); ?></span>
                    </a>
                </li>

                <li class="nav-item <?php echo e(Route::is('history') ? 'active' : ''); ?>">
                    <a class="nav-link" href="<?php echo e(route('history')); ?>">
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                           <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"> <path stroke="none" d="M0 0h24v24H0z" fill="none"></path> <polyline points="12 8 12 12 14 14"></polyline> <path d="M3.05 11a9 9 0 1 1 .5 4m-.5 5v-5h5"></path> </svg>
                        </span>
                        <span class="nav-link-title"><?php echo e(__('Recent History')); ?></span>
                    </a>
                </li>

                <li class="nav-item <?php echo e(Route::is('report') ? 'active' : ''); ?>">
                    <a class="nav-link" href="<?php echo e(route('report')); ?>">
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 14a3.5 3.5 0 0 0 5 0l4 -4a3.5 3.5 0 0 0 -5 -5l-.5 .5" /><path d="M14 10a3.5 3.5 0 0 0 -5 0l-4 4a3.5 3.5 0 0 0 5 5l.5 -.5" /></svg>
                        </span>
                        <span class="nav-link-title"><?php echo e(__('Report')); ?></span>
                    </a>
                </li>

                <li class="nav-item <?php echo e(Route::is('cache') ? 'active' : ''); ?>">
                    <a class="nav-link" href="<?php echo e(route('cache')); ?>">
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><rect x="3" y="4" width="18" height="4" rx="2" /><path d="M5 8v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-10" /><line x1="10" y1="12" x2="14" y2="12" /></svg>
                        </span>
                        <span class="nav-link-title"><?php echo e(__('Cache')); ?></span>
                    </a>
                </li>

                <li class="nav-item <?php echo e(Route::is('about') ? 'active' : ''); ?>">
                    <a class="nav-link" href="<?php echo e(route('about')); ?>">
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="12" r="9" /><line x1="12" y1="8" x2="12.01" y2="8" /><polyline points="11 12 12 12 12 16 13 16" /></svg>
                        </span>
                        <span class="nav-link-title"><?php echo e(__('About')); ?></span>
                    </a>
                </li>

            </ul>

        </div>
    </div>
</aside>
<?php /**PATH C:\xampp\htdocs\laravel\sumowebtools\components\resources\views/components/admin/sidebar.blade.php ENDPATH**/ ?>
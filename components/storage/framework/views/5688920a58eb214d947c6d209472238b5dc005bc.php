<?php
  $dir_mode = ( Cookie::get('dir_mode') ) ? Cookie::get('dir_mode') : 'ltr';
?>
<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>" dir="<?php echo e($dir_mode); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?php echo e(__($pageTitle)); ?></title>

        <link rel="shortcut icon" href="<?php echo e($header->favicon); ?>"/>

        <meta name="description" content="<?php echo e(__($pageTrans->short_description)); ?>" />
        <meta name="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large" />
        <link rel="canonical" href="<?php echo e(url()->current()); ?>" />
        <meta property="og:locale" content="<?php echo e(localization()->getCurrentLocaleRegional()); ?>">
        <meta property="og:type" content="website">
        <meta property="og:title" content="<?php echo e(__($pageTitle)); ?>">
        <meta property="og:description" content="<?php echo e(__($pageTrans->short_description)); ?>">
        <meta property="og:url" content="<?php echo e(url()->current()); ?>">
        <meta property="og:site_name" content="<?php echo e(__($pageTitle)); ?>">
        <meta property="og:updated_time" content="<?php 

          echo Carbon\Carbon::createFromFormat('Y-m-d H:i:s', ''.$page->updated_at.'' )->toIso8601String();

        ?>">
        <?php if( !empty($page->featured_image) ): ?>
<meta property="og:image" content="<?php echo e($page->featured_image); ?>">
        <meta property="og:image:secure_url" content="<?php echo e($page->featured_image); ?>">
        <meta property="og:image:width" content="<?php echo e(Image::make($page->featured_image)->width()); ?>">
        <meta property="og:image:height" content="<?php echo e(Image::make($page->featured_image)->height()); ?>">
        <meta property="og:image:alt" content="<?php echo e(__($pageTitle)); ?>">
        <meta property="og:image:type" content="<?php echo e(File::extension($page->featured_image)); ?>">
        <?php endif; ?>

        <?php
        if ( !empty($twitter['url']) ) {

          $pregCheck = preg_match('/(?:https?:\/\/)?(?:mobile\.)?(?:www\.)?(?:twitter.com\/)(?:[@])?([A-Za-z0-9-_\.]+)(?:\/status\/(?:[a-z0-9]{0,}))?(?:\?.(?:\=.)?(?:\&.)?)?/', $twitter['url'], $match);

          if ( $pregCheck ){
            echo '<meta name="twitter:title" content="'.__($pageTitle).'">
        <meta name="twitter:description" content="'.__($pageTrans->short_description).'">
        <meta name="twitter:site" content="@'.$match[1].'">
        <meta name="twitter:creator" content="@'.$match[1].'">';
          }

        }
        ?>

        <?php if( !empty($page->featured_image) ): ?>
        
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:image" content="<?php echo e($page->featured_image); ?>">
        <?php endif; ?>

        <?php $__currentLoopData = localization()->getSupportedLocales(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $localeCode => $properties): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <link rel="alternate" hreflang="<?php echo e($properties->key()); ?>" href="<?php echo e(localization()->getLocalizedURL($properties->key(), null, [], false)); ?>" />
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <?php if( $general->page_load == true ): ?>

        <!-- Pace -->
        <script src="<?php echo e(asset('assets/js/pace.min.js')); ?>"></script>

        <link rel="stylesheet" href="<?php echo e(asset('assets/css/pace-theme-default.min.css')); ?>">

        <?php endif; ?>

        <?php if( $general->adblock_detection == true ): ?>
          <!-- Aweet Alert 2 -->
          <link href="<?php echo e(asset('assets/css/sweetalert2.min.css')); ?>" rel="stylesheet">
        <?php endif; ?>

        <!-- Font Awesome -->
        <link type="text/css" href="<?php echo e(asset('assets/css/fontawesome.min.css')); ?>" rel="stylesheet">

        <!-- jQuery -->
        <script src="<?php echo e(asset('assets/js/jquery.min.js')); ?>"></script>

        <!-- Theme CSS -->
        <link type="text/css" href="<?php echo e(asset('assets/css/main.'.$dir_mode.'.min.css')); ?>" rel="stylesheet">

        <!-- Custom CSS -->
        <link type="text/css" href="<?php echo e(asset('assets/css/custom.css')); ?>" rel="stylesheet">
        
        <?php if( !empty($general->font_family) ): ?>

          <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=<?php echo e($general->font_family); ?>">

          <style>
            body, .card .card-body {
              font-family: <?php echo e($general->font_family); ?> !important;
            }
          </style>

        <?php endif; ?>

        <?php if( $advanced->header_status == true && $advanced->insert_header != null ): ?>
          <?php echo $advanced->insert_header; ?>

        <?php endif; ?>
        
        <?php echo \Livewire\Livewire::styles(); ?>


    </head>
    <body class="antialiased <?php echo e(Cookie::get('theme_mode')); ?>">

      <?php if( $general->maintenance_mode == true && !Auth::user() && $page->type != 'login' ): ?>
        
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('frontend.maintenance')->html();
} elseif ($_instance->childHasBeenRendered('7KFwLHb')) {
    $componentId = $_instance->getRenderedChildComponentId('7KFwLHb');
    $componentTag = $_instance->getRenderedChildComponentTagName('7KFwLHb');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('7KFwLHb');
} else {
    $response = \Livewire\Livewire::mount('frontend.maintenance');
    $html = $response->html();
    $_instance->logRenderedChild('7KFwLHb', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

      <?php else: ?>
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('frontend.pages', [
              'page'          => $page,
              'pageTrans'     => $pageTrans,
              'homeTitle'     => $homeTitle,
              'general'       => $general,
              'profile'       => $profile,
              'menus'         => $menus,
              'header'        => $header,
              'footer'        => $footer,
              'captcha'       => $captcha,
              'notice'        => $notice,
              'advanced'      => $advanced,
              'advertisement' => $advertisement,
              'socials'       => $socials,
              'twitter'       => $twitter,
              'sidebar'       => $sidebar,
              'recent_posts'  => $recent_posts,
              'popular_tools' => $popular_tools
            ])->html();
} elseif ($_instance->childHasBeenRendered('Bnp7oyr')) {
    $componentId = $_instance->getRenderedChildComponentId('Bnp7oyr');
    $componentTag = $_instance->getRenderedChildComponentTagName('Bnp7oyr');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('Bnp7oyr');
} else {
    $response = \Livewire\Livewire::mount('frontend.pages', [
              'page'          => $page,
              'pageTrans'     => $pageTrans,
              'homeTitle'     => $homeTitle,
              'general'       => $general,
              'profile'       => $profile,
              'menus'         => $menus,
              'header'        => $header,
              'footer'        => $footer,
              'captcha'       => $captcha,
              'notice'        => $notice,
              'advanced'      => $advanced,
              'advertisement' => $advertisement,
              'socials'       => $socials,
              'twitter'       => $twitter,
              'sidebar'       => $sidebar,
              'recent_posts'  => $recent_posts,
              'popular_tools' => $popular_tools
            ]);
    $html = $response->html();
    $_instance->logRenderedChild('Bnp7oyr', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

            <?php echo \Livewire\Livewire::scripts(); ?>


      <?php endif; ?>

    </body>
</html><?php /**PATH C:\xampp\htdocs\laravel\sumowebtools\components\resources\views/frontend/pages.blade.php ENDPATH**/ ?>
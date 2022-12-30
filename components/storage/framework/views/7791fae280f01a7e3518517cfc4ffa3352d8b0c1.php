      <footer class="footer pt-3 mt-3 pb-0">

       <?php if( $general->social_status == true && count($socials) > 0 ): ?>
          <h3 class="text-center mb-3"><?php echo e(__('Follow us')); ?></h3>
          <div class="social-share text-center">
            <div class="share-icons relative">
                <?php $__currentLoopData = $socials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $social): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <a href="<?php echo e($social['url']); ?>" class="btn btn-<?php echo e($social['name']); ?> btn-simple rounded social-shadow p-2" target="_blank">
                      <i class="fab fa-<?php echo e($social['name']); ?> fa-2x"></i>
                  </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
          </div>
        <?php endif; ?>
        
        <hr class="horizontal dark mb-5">

        <div class="container">
          <div class="row">
              <?php if( !empty($footer->layout) ): ?>
              
                <?php switch( $footer->layout ):

                    case (1): ?>

                        <div class="col-12 mb-4">
                          <div>
                            <?php echo GrahamCampbell\Security\Facades\Security::clean($footer->widget1); ?>

                          </div>
                        </div>

                    <?php break; ?>

                    <?php case (2): ?>

                        <div class="col-md-6 mb-4">
                          <div>
                            <?php echo GrahamCampbell\Security\Facades\Security::clean($footer->widget1); ?>

                          </div>
                        </div>
                      
                        <div class="col-md-6 mb-4">
                          <div>
                            <?php echo GrahamCampbell\Security\Facades\Security::clean($footer->widget2); ?>

                          </div>
                        </div>

                    <?php break; ?>

                    <?php case (3): ?>

                        <div class="col-md-6 mb-4">
                          <div>
                            <?php echo GrahamCampbell\Security\Facades\Security::clean($footer->widget1); ?>

                          </div>
                        </div>
                      
                        <div class="col-md-3 col-6 mb-4">
                          <div>
                            <?php echo GrahamCampbell\Security\Facades\Security::clean($footer->widget2); ?>

                          </div>
                        </div>

                        <div class="col-md-3 col-6 mb-4">
                          <div>
                            <?php echo GrahamCampbell\Security\Facades\Security::clean($footer->widget3); ?>

                          </div>
                        </div>

                    <?php break; ?>

                    <?php case (4): ?>

                        <div class="col-md-3 mb-4">
                          <div>
                            <?php echo GrahamCampbell\Security\Facades\Security::clean($footer->widget1); ?>

                          </div>
                        </div>
                      
                        <div class="col-md-3 col-sm-4 col-12 mb-4">
                          <div>
                            <?php echo GrahamCampbell\Security\Facades\Security::clean($footer->widget2); ?>

                          </div>
                        </div>

                        <div class="col-md-3 col-sm-4 col-12 mb-4">
                          <div>
                            <?php echo GrahamCampbell\Security\Facades\Security::clean($footer->widget3); ?>

                          </div>
                        </div>

                        <div class="col-md-3 col-sm-4 col-12 mb-4">
                          <div>
                            <?php echo GrahamCampbell\Security\Facades\Security::clean($footer->widget4); ?>

                          </div>
                        </div>

                    <?php break; ?>

                    <?php case (5): ?>

                        <div class="col-md-3 mb-4">
                          <div>
                            <?php echo GrahamCampbell\Security\Facades\Security::clean($footer->widget1); ?>

                          </div>
                        </div>
                      
                        <div class="col-md-2 col-sm-6 col-6 mb-4">
                          <div>
                            <?php echo GrahamCampbell\Security\Facades\Security::clean($footer->widget2); ?>

                          </div>
                        </div>

                        <div class="col-md-2 col-sm-6 col-6 mb-4">
                          <div>
                            <?php echo GrahamCampbell\Security\Facades\Security::clean($footer->widget3); ?>

                          </div>
                        </div>

                        <div class="col-md-2 col-sm-6 col-6 mb-4">
                          <div>
                            <?php echo GrahamCampbell\Security\Facades\Security::clean($footer->widget4); ?>

                          </div>
                        </div>

                        <div class="col-md-2 col-sm-6 col-6 mb-4 me-auto">
                          <div>
                            <?php echo GrahamCampbell\Security\Facades\Security::clean($footer->widget5); ?>

                          </div>
                        </div>

                    <?php break; ?>

                    <?php default: ?>

                <?php endswitch; ?>
              
              <?php endif; ?>

            <?php if( !empty($footer->bottom_text) ): ?>
              <div class="col-12">
                <div class="text-center">
                  <p class="my-4 text-sm">
                    <?php
                        $footer_vars = array('%year%');
                        $footer_val  = array( date('Y') );
                        $footer_data  = str_replace( $footer_vars , $footer_val , $footer->bottom_text);
                        echo htmlspecialchars_decode( $footer_data )
                    ?>
                  </p>
                </div>
              </div>
            <?php endif; ?>

          </div>
        </div>
      </footer><?php /**PATH C:\xampp\htdocs\laravel\sumowebtools\components\resources\views/components/frontend/footer.blade.php ENDPATH**/ ?>
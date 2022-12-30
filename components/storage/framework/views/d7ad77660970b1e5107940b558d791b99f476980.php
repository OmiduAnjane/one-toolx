<!-- Pace -->
<script src="<?php echo e(asset('assets/js/pace.min.js')); ?>"></script>

<!-- Tinymce -->
<script src="<?php echo e(asset('assets/js/tinymce/tinymce.min.js')); ?>"></script>

<!-- Toastr -->
<script src="<?php echo e(asset('assets/js/toastr.min.js')); ?>"></script>

<!-- Sweetalert2 -->
<script src="<?php echo e(asset('assets/js/sweetalert2.min.js')); ?>"></script>

<!-- Theme JS -->
<script src="<?php echo e(asset('assets/js/main.min.js')); ?>"></script>

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
<?php /**PATH C:\xampp\htdocs\laravel\sumowebtools\components\resources\views/components/admin/footerAssets.blade.php ENDPATH**/ ?>
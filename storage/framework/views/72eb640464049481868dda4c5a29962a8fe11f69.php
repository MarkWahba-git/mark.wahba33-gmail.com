<?php if((isset($item['topnav_right']) && $item['topnav_right'])): ?>
  <?php echo $__env->make('adminlte::partials.menu-item-top-nav', $item, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>
<?php /**PATH /home/marc/Desktop/pharmacy-system/pharamcy-system/vendor/jeroennoten/laravel-adminlte/src/../resources/views/partials/menu-item-top-nav-right.blade.php ENDPATH**/ ?>
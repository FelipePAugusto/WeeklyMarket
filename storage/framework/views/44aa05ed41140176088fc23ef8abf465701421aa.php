<?php if(Auth::guest()): ?>

<?php else: ?>
    <?php echo $__env->make('layouts.navbars.navs.auth', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php endif; ?>

<?php if(Auth::guest()): ?>
    <?php echo $__env->make('layouts.navbars.navs.guest', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php endif; ?>
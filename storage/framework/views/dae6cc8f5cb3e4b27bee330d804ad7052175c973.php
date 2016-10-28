

<?php if(!Auth::guest()): ?>
<?php echo $__env->make('dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php else: ?>
<?php echo $__env->make('home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php endif; ?>


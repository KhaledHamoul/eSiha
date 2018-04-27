<?php echo $__env->make('layout.top', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layout.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php if($teypeUser == "medecin"): ?>
 <?php echo $__env->make('layout.aside_menu_medecin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
 
<?php elseif($teypeUser == "labo"): ?>
  <?php echo $__env->make('layout.aside_menu_labo', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php echo $__env->make('layout.labo_page_content', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php else: ?> 
 <?php echo $__env->make('layout.aside_menu_clinique', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php endif; ?>




<?php echo $__env->make('layout.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


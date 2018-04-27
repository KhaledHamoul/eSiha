<?php echo $__env->make('layout.top', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layout.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


<?php if($typeUser == "medecin"): ?>
  <?php echo $__env->make('layout.aside_menu_medecin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php echo $__env->make('layout.medecin_page_content', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php elseif($typeUser == "medecin-dash"): ?>
  <?php echo $__env->make('layout.aside_menu_medecin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php echo $__env->make('layout.medecin_page_content', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php elseif($typeUser == "medecin-profile"): ?>
  <?php echo $__env->make('layout.aside_menu_medecin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php echo $__env->make('layout.medecin_profile_page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php elseif($typeUser == "medecin-notification"): ?>
  <?php echo $__env->make('layout.aside_menu_medecin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php echo $__env->make('layout.medecin_notification_page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php elseif($typeUser == "labo"): ?>
<?php endif; ?>




<?php echo $__env->make('layout.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

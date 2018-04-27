<?php echo $__env->make('layout.top', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layout.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<<<<<<< HEAD
<?php if($teypeUser == "medecin"): ?>
  <?php echo $__env->make('layout.aside_menu_medecin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php echo $__env->make('layout.medecin_page_content', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php elseif($teypeUser == "medecin-dash"): ?>
  <?php echo $__env->make('layout.aside_menu_medecin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php echo $__env->make('layout.medecin_page_content', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php elseif($teypeUser == "medecin-profile"): ?>
  <?php echo $__env->make('layout.aside_menu_medecin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php echo $__env->make('layout.medecin_profile_page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php elseif($teypeUser == "medecin-notification"): ?>
  <?php echo $__env->make('layout.aside_menu_medecin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php echo $__env->make('layout.medecin_notification_page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php elseif($teypeUser == "labo"): ?>
||||||| merged common ancestors
<?php if($teypeUser == "medecin"): ?>
 <?php echo $__env->make('layout.aside_menu_medecin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
 
<?php elseif($teypeUser == "labo"): ?>
=======
<?php if($typeUser == "medecin"): ?>
 <?php echo $__env->make('layout.aside_menu_medecin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php elseif($typeUser == "labo"): ?>
>>>>>>> 2b488110159800e218ad1b7df98ceb75ffc8f561
  <?php echo $__env->make('layout.aside_menu_labo', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php echo $__env->make('layout.labo_page_content', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php else: ?>
 <?php echo $__env->make('layout.aside_menu_clinique', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php endif; ?>




<?php echo $__env->make('layout.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

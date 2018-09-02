<?php $title = 'Vidéos'; ?>

<?php ob_start(); ?>

<?php require '/views/frontend/banner.php'; ?>
<?php require '/views/frontend/menu.php'; ?>




<?php require '/views/frontend/footer.php'; ?>

<?php $content = ob_get_clean(); ?>

<?php require('/views/frontend/template.php'); ?>

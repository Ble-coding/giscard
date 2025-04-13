
<?php
$pageTitle = 'GROUPE KACOU';
$pageDescription = 'Une solution humaine pour accompagner vos projets techniques, logistiques et de communication';
ob_start();
?>

<!-- Section Slide (Bannière d'accueil) -->
<?php require __DIR__ . '/layouts/interim/interim.php'; ?>
<!--  -->

<?php
$content = ob_get_clean(); // Capture et stocke le contenu
require __DIR__ . '/layouts/base.php'; // Inclut le layout principal
?>


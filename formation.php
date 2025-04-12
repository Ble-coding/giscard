
<?php
$pageTitle = 'GROUPE GISCARD KACOU';
$pageDescription = 'Bâtir un monde plus sûr, plus connecté et plus visible — grâce à la technologie, à la créativité et à la passion.';
ob_start();
?>

<!-- Section Slide (Bannière d'accueil) -->
<?php require __DIR__ . '/layouts/formation/formation.php'; ?>
<!--  -->

<?php
$content = ob_get_clean(); // Capture et stocke le contenu
require __DIR__ . '/layouts/base.php'; // Inclut le layout principal
?>


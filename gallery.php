
<?php
$pageTitle = 'GROUPE GISCARD KACOU';
$pageDescription = 'Découvrez notre galérie';
ob_start();
?>

<!-- Section Slide (Bannière d'accueil) -->
<?php require __DIR__ . '/layouts/gallery/gallery.php'; ?>
<!--  -->

<?php
$content = ob_get_clean(); // Capture et stocke le contenu
require __DIR__ . '/layouts/base.php'; // Inclut le layout principal
?>


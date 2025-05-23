
<?php
$pageTitle = 'GROUPE KACOU';
$pageDescription = 'La sérénité vient de la sécurité';
ob_start();
?>

<!-- Section Slide (Bannière d'accueil) -->
<?php require __DIR__ . '/layouts/home/slide.php'; ?>
<?php require __DIR__ . '/layouts/home/about.php'; ?>
<?php require __DIR__ . '/layouts/home/service.php'; ?>
<?php require __DIR__ . '/layouts/home/formation.php'; ?>
<?php require __DIR__ . '/layouts/home/temoignage.php'; ?>
<?php require __DIR__ . '/layouts/home/faq.php'; ?>

<?php
$content = ob_get_clean(); // Capture et stocke le contenu
require __DIR__ . '/layouts/base.php'; // Inclut le layout principal
?>


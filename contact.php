
<?php
$pageTitle = 'GROUPE KACOU';
$pageDescription = 'Des prestations sur mesure pour assurer la protection, la visibilité et la performance de votre entreprise.';
ob_start();
?>


<!-- Section Slide (Bannière d'contact) -->
<?php require __DIR__ . '/layouts/contact/contact.php'; ?>

<?php
$content = ob_get_clean(); // Capture et stocke le contenu
require __DIR__ . '/layouts/base.php'; // Inclut le layout principal
?>


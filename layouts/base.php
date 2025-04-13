<!DOCTYPE html>
<html lang="en">

<head>
     <!-- Meta Tags -->
     <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Site officiel du Groupe KACOU">
    <meta name="author" content="Levis Auteur">
    <!-- ✅ Titre dynamique -->
    <title>
    <?= htmlspecialchars($pageTitle) ?> <?= htmlspecialchars($pageDescription) ?>
    <!-- Bienvenue sur le site officiel du Groupe KACOU -->
    </title>

    <?php require __DIR__ . '/head.php'; ?>
</head>

<body>
    <!-- Preloader -->
    <?php require __DIR__ . '/preloader.php'; ?>

    <!-- Navbar -->
    <?php require __DIR__ . '/header.php'; ?>

    <main>
        <?php echo $content ?? ''; ?>
    </main>

    <!-- Footer -->
    <?php require __DIR__ . '/footer.php'; ?>

   

    <?php require __DIR__ . '/scripts.php'; ?>
</body>

</html>

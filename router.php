<?php

session_start();



// Récupérer l'URI demandée
$requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Supprimer les barres obliques inutiles
$route = trim($requestUri, '/');

// Définir les routes disponibles
$routes = [
    '' => 'home.php', // Route pour la page d'accueil
    'about' => 'about.php',
    'service' => 'service.php',
    'product' => 'realisation.php',
    'contact' => 'contact.php',
    'gallery' => 'gallery.php',
    'mail-error' => 'mail/mail-error.php',
    'mail-success' => 'mail/mail-success.php'
];

// Vérifier si la route existe
if (array_key_exists($route, $routes)) {
    $file = __DIR__ . '/' . $routes[$route];
    if (file_exists($file)) {
        include $file;
    } else {
        // Fichier introuvable
        header("HTTP/1.0 404 Not Found");
        include '404.php';
    }
} else {
    // Route non définie
    header("HTTP/1.0 404 Not Found");
    include '404.php';
}
exit;

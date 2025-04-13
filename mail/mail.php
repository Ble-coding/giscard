<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Dotenv\Dotenv; // <-- ajouter cette ligne

require '../vendor/autoload.php';

$dotenv = Dotenv::createImmutable(__DIR__ . '/../'); // adapte le chemin si besoin
$dotenv->load();
$_ENV = array_merge($_ENV, $_SERVER);
// echo 'Fichier .env chargé !<br>';
// var_dump($_ENV['MAIL_USERNAME'], $_ENV['MAIL_PASSWORD']);
// exit;
session_start();


$errors = [];

// Validation des champs requis
if (empty($_POST['name'])) {
    $errors['name'] = "Le nom complet est requis.";
}
if (empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = "Une adresse email valide est requise.";
}
if (empty($_POST['phone'])) {
    $errors['phone'] = "Le numéro de téléphone est requis.";
}
if (empty($_POST['message'])) {
    $errors['message'] = "Le message est requis.";
}

// En cas d'erreurs, les stocker et rediriger avec session
if (!empty($errors)) {
    $_SESSION['form_errors'] = $errors;
    $_SESSION['old_input'] = $_POST;
    header("Location: /contact#contact-form");
    exit;
}

// Nettoyage des champs
$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$phone = htmlspecialchars($_POST['phone']);
$company = htmlspecialchars($_POST['companyname']);
$subject = $_POST['subject'] ?? 'Demande de contact';
$message = htmlspecialchars($_POST['message']);

$email_message = "
Nom : $name
Email : $email
Téléphone : $phone
Entreprise : $company

Message :
$message
";

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    // ✅ Utilisation de $_ENV à la place de getenv()
    $mail->Username = $_ENV['MAIL_USERNAME'];
    $mail->Password = $_ENV['MAIL_PASSWORD'];
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port = 465;

    $mail->setFrom($_ENV['MAIL_USERNAME'], 'Groupe KACOU');
    $mail->addAddress('levisble@gmail.com', 'Destinataire');
    $mail->addReplyTo($email, $name);

    $mail->isHTML(true);
    $mail->Subject = 'Nouvelle demande de contact';
    $mail->Body = nl2br($email_message);
    $mail->AltBody = $email_message;

    $mail->send();
    header("Location: /mail-success");
    exit;
} 
catch (Exception $e) {
    echo "Erreur lors de l'envoi du mail : " . $mail->ErrorInfo;
    exit;
}

// catch (Exception $e) {
//     error_log("Erreur email : {$mail->ErrorInfo}");
//     header("Location: /mail-error");
//     exit;
// }

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "badermadich2001àgmail.com"; // Remplacez ceci par votre adresse e-mail
    $sujet = "Nouveau message de $nom";
    $headers = "De: $email";

    // Envoyer l'e-mail
    mail($to, $sujet, $message, $headers);
    
     // Vérifiez si l'e-mail a été envoyé avec succès
     if ($envoi) {
        echo "<script>alert('Votre message a été envoyé avec succès.'); window.history.back();</script>";
    } else {
        echo "<script>alert('Erreur lors de l'envoi du message. Veuillez réessayer plus tard.'); window.history.back();</script>";
    }
}
?>
}
?>

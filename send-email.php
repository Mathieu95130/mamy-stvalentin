<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $to = "Mathieu.saad@gmail.com"; // Remplacez par votre email
    $subject = "Réponse à votre formulaire";
    $message = "Voici votre réponse : 'Quel jour t'es dispo?'.";
    $headers = "From: webmaster@example.com";

    if (mail($to, $subject, $message, $headers)) {
        echo "Email envoyé avec succès.";
    } else {
        echo "L'envoi de l'email a échoué.";
    }
}
?>

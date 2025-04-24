<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Adresse e-mail où le message sera envoyé (remplace par ton adresse)
    $to = "mbayeahmeth@gmail.com"; 

    // Sujet de l'email
    $subject = "Nouveau message depuis le site web de $name";

    // Contenu du message
    $body = "Nom: $name\nEmail: $email\n\nMessage:\n$message";

    // En-têtes de l'email
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Envoi de l'email
    if (mail($to, $subject, $body, $headers)) {
        echo "Message envoyé avec succès !";
    } else {
        echo "Erreur : le message n'a pas pu être envoyé.";
    }
} else {
    echo "Accès non autorisé.";
}
?>

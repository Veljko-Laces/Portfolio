<?php

require_once '../manager/messageManager.php';

session_start();

if (!isset($_SESSION['user_logged_in']) || $_SESSION['user_logged_in'] !== true) {
    header("Location: /portfolio/admin/login.php");
    exit;
}

if (isset($_GET['id'])) {
    $messageManager = new MessageManager();
    $message = $messageManager->selectMessageById($_GET['id']);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <div class="bo-sidebar-content">
        <?php include("../inc/sidebar.php"); ?>
        <div class="bo-content">
            <h1 class="title-page-bo">Détails du Message</h1>
            <div class="message-details">
                <p><strong>ID:</strong> <?php echo htmlspecialchars($message[0]['id']); ?></p>
                <p><strong>Message:</strong> <?php echo nl2br(htmlspecialchars($message[0]['message'])); ?></p>
                <p><strong>User ID:</strong> <?php echo htmlspecialchars($message[0]['user_id']); ?></p>
                <p><strong>Répondu:</strong> <?php echo $message[0]['replied'] ? 'Oui' : 'Non'; ?></p>
                <p><strong>Date de création:</strong> <?php echo htmlspecialchars($message[0]['created_at']); ?></p>

                <!-- TODO ajouté un boutton pour modifier l'état du message -->
                <!-- TODO à la place de userId il faut afficher le nom et l'email de l'utilisateur qui a envoyé le message en utilisant la méthode selectUserById -->
                <!-- TODO faire une fonction qui rend la date plus lisible et plus compréhensive -->
            </div>
        </div>
    </div>
</body>
</html>
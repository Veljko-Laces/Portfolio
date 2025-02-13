<?php

require_once '../manager/messageManager.php';
require_once '../manager/userManager.php';

session_start();

if (!isset($_SESSION['user_logged_in']) || $_SESSION['user_logged_in'] !== true) {
    header("Location: /admin/login.php");
    exit;
}

if (isset($_GET['id'])) {
    $messageManager = new MessageManager();
    $message = $messageManager->selectMessageById($_GET['id']);

    $userManager = new UserManager();
    $user = $userManager->selectUserById($message[0]['user_id']);
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails du Message</title>
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
                <p><strong>Nom:</strong> <?php echo htmlspecialchars($user[0]['name']); ?></p>
                <p><strong>Email:</strong> <?php echo htmlspecialchars($user[0]['email']); ?></p>
                <p><strong>Répondu:</strong> <?php echo $message[0]['replied'] ? 'Oui' : 'Non'; ?></p>
                <p><strong>Date de création:</strong> <?php echo htmlspecialchars($message[0]['created_at']); ?></p>

                <form action="messageHandler.php" method="post" >
                    <input type="hidden" name="id" value="<?php echo htmlspecialchars($message[0]['id']); ?>">
                    <button name="changeStatus">Changer le status du message</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
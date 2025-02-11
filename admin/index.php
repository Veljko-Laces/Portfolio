<?php

require_once '../manager/messageManager.php';
require_once '../manager/userManager.php';

session_start();

if (!isset($_SESSION['user_logged_in']) || $_SESSION['user_logged_in'] !== true) {
    header("Location: /admin/login.php");
    exit;
}

$messageManager = new MessageManager();
$messages = $messageManager->selectAllMessage();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="bo-sidebar-content">
        <?php include("../inc/sidebar.php"); ?>
        <div class="bo-content">
            <h1 class="title-page-bo">Messages</h1>
            <div class="table">
                <div class="table-header-messages">
                    <p>Status</p>
                    <p>Utilisateur</p>
                    <p>Message</p>
                    <p>Envoyé le</p>
                </div>

                <?php foreach ($messages as $message): ?>
                    <?php 
                        $userManager = new UserManager();
                        $user = $userManager->selectUserById($message['user_id']); 
                        $userName = htmlspecialchars($user[0]['name']);
                    ?>
                    <a
                        class="table-content-message"
                        href="message_detail.php?id=<?php echo htmlspecialchars($message['id']); ?>"
                    >
                        <div class="message-status" style="background-color: <?php echo $message['replied'] ? 'green' : 'red'; ?>;"></div>
                        <p><?php echo $userName ?></p>
                        <p class="message-ellipsis"><?php echo htmlspecialchars($message['message']); ?></p>
                        <p><?php echo htmlspecialchars($message['created_at']); ?></p>
                    </a>
                <?php endforeach; ?>
            </div>
            <p class="copyright">©Copyright 2025 - Veljko Laces</p>
        </div>
    </div>
</body>
</html>
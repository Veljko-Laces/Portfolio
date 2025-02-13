<?php

require_once '../manager/userManager.php';
require_once '../manager/messageManager.php';

session_start();

if (!isset($_SESSION['user_logged_in']) || $_SESSION['user_logged_in'] !== true) {
    header("Location: /admin/login");
    exit;
}

if (isset($_GET['id'])) {
    $userManager = new UserManager();
    $user = $userManager->selectUserById($_GET['id']);

    $messageManager = new MessageManager();
    $messages = $messageManager->selectMessageByUserId($_GET['id']);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails de l'utilisateur</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <div class="bo-sidebar-content">
        <?php include("../inc/sidebar.php"); ?>
        <div class="bo-content">
            <h1 class="title-page-bo">Détails de l'utilisateur</h1>
            <div class="detail-de-utilisateur">
                <div class="infos-detail-user">
                    <p><strong>Id:</strong> <?php echo htmlspecialchars($user[0]['id']); ?></p>
                    <p><strong>Nom:</strong> <?php echo htmlspecialchars($user[0]['name']); ?></p>
                    <p><strong>Email:</strong> <?php echo nl2br(htmlspecialchars($user[0]['email'])); ?></p>
                </div>
                <div class="detail-user-msg">
                    <h3>Messages de <?php echo htmlspecialchars($user[0]['name']); ?></h3>
                    <?php if (!empty($messages)): ?>
                        <div class="table">
                            <div class="table-header-messages">
                                <p>Status</p>
                                <p></p>
                                <p>Message</p>
                                <p>Envoyé le</p>
                            </div>
        
                            <?php foreach ($messages as $message): ?>
                                <a
                                    class="table-content-message"
                                    href="message_detail.php?id=<?php echo htmlspecialchars($message['id']); ?>"
                                >
                                    <div class="message-status" style="background-color: <?php echo $message['replied'] ? 'green' : 'red'; ?>;"></div>
                                    <p></p>
                                    <p class="message-ellipsis"><?php echo htmlspecialchars($message['message']); ?></p>
                                    <p><?php echo htmlspecialchars($message['created_at']); ?></p>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    <?php else: ?>
                        <h3>Pas de messages</h3>
                    <?php endif; ?>
                </div>
            </div>


            </div>
        </div>
    </div>
</body>
</html>
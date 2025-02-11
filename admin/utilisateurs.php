<?php

require_once '../manager/userManager.php';

session_start();

if (!isset($_SESSION['user_logged_in']) || $_SESSION['user_logged_in'] !== true) {
    header("Location: /admin/login.php");
    exit;
}


$user = new UserManager();
$users = $user->selectAllUsers();

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
            <h1 class="title-page-bo">Utilisateurs</h1>

            <div class="table">
                <div class="table-header-utilisateurs">
                    <p>Nom</p>
                    <p>Email</p>
                </div>

            <?php foreach ($users as $user): ?>


                <a
                        class="table-content-user"
                        href="utilisateur_detail.php?id=<?php echo htmlspecialchars($user['id']); ?>"
                    >
                        <p><?php echo htmlspecialchars($user['name']); ?></p>
                        <p><?php echo htmlspecialchars($user['email']); ?></p>
                </a>

            <?php endforeach; ?>
        </div>
        <p class="copyright">©Copyright 2025 - Veljko Laces</p>
    </div>
</body>
</html>
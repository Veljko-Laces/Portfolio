<?php

require_once '../manager/userManager.php';


$user = new UserManager();
$users = $user->selectAllUsers();


// echo '<pre>';
// print_r($users);
// echo '</pre>';


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
            <?php foreach ($users as $user): ?>
                <a class="message">
                    ID: <?php echo htmlspecialchars($user['id']); ?>,
                    Name: <?php echo htmlspecialchars($user['name']); ?>,
                    Email: <?php echo htmlspecialchars($user['email']); ?>,
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>
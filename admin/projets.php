<?php
require_once '../manager/manager.php';
require_once '../manager/projectManager.php';

session_start();

if (!isset($_SESSION['user_logged_in']) || $_SESSION['user_logged_in'] !== true) {
    header("Location: /admin/login");
    exit;
}


$projectManager = new ProjectManager();
$projects = $projectManager->selectAllProject();




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
            <div class="title-btn-add">
                <h1 class="title-page-bo">Projets</h1>
                <a href="add_project">
                    <button type="subite" name="add">Ajouter un projet</button>
                </a>
            </div>  

            <div class="table">
                <div class="table-header-projets">
                    <p>Id</p>
                    <p>Titre</p>
                    <p>Description</p>
                </div>

            <?php foreach ($projects as $project): ?>


                <a
                        class="table-content-projets"
                        href="projet_detail.php?id=<?php echo htmlspecialchars($project['id']); ?>"
                    >
                        <p><?php echo htmlspecialchars($project['id']); ?></p>
                        <p><?php echo htmlspecialchars($project['title']); ?></p>
                        <p><?php echo htmlspecialchars($project['description']); ?></p>
                </a>

            <?php endforeach; ?>
        </div>
        <p class="copyright">©Copyright 2025 - Veljko Laces</p>
    </div>
</body>
</html>
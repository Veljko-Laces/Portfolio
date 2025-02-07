<?php
require_once '../manager/manager.php';
require_once '../manager/technologyManager.php';
require_once '../manager/projectManager.php';

session_start();

if (!isset($_SESSION['user_logged_in']) || $_SESSION['user_logged_in'] !== true) {
    header("Location: /portfolio/admin/login.php");
    exit;
}


$technologyManager = new TechnologyManager();
$technologys = $technologyManager->selectAllTechnology();

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
            <h1 class="title-page-bo">Technologies</h1>

            <div class="table">
                <div class="table-header-projets">
                    <p>Id</p>
                    <p>Titre du projet</p>
                    <p>Nom de la technologie</p>
                </div>

            <?php foreach ($technologys as $technology): ?>
                <?php
                    $projectManager = new ProjectManager();
                    $projet = $projectManager->selectProjectById($technology['project_id']);
                ?>
                <a
                        class="table-content-projets"
                        href="technologie_detail.php?id=<?php echo htmlspecialchars($technology['id']); ?>"
                    >
                        <p><?php echo htmlspecialchars($technology['id']); ?></p>
                        <p><?php echo htmlspecialchars($projet[0]['title']); ?></p>
                        <p><?php echo htmlspecialchars($technology['technology_name']); ?></p>
                </a>

            <?php endforeach; ?>
        </div>
        <p class="copyright">©Copyright 2025 - Veljko Laces</p>
    </div>
</body>
</html>
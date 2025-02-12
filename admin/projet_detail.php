<?php
require_once '../manager/manager.php';
require_once '../manager/projectManager.php';
require_once '../manager/technologyManager.php';

session_start();

if (!isset($_SESSION['user_logged_in']) || $_SESSION['user_logged_in'] !== true) {
    header("Location: /admin/login");
    exit;
}

if (isset($_GET['id'])) {
    $projetManager = new ProjectManager();
    $projet = $projetManager->selectProjectById($_GET['id']);

    $technologyManager = new TechnologyManager();
    $technologies = $technologyManager->selectTechnologyByProjectId($_GET['id']);

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
            <h1 class="title-page-bo">Détails du projet</h1>
            <form action="projectHandler.php" method="POST" class="projets-details">
                <input type="hidden" name="id" value="<?php echo htmlspecialchars($projet[0]['id']); ?>">

                <label for="title"><strong>Titre:</strong></label>
                <input type="text" id="title" name="title" value="<?php echo $projet[0]['title']; ?>" required>

                <label for="description"><strong>Description:</strong></label>
                <textarea rows="10" cols="50" id="description" name="description" required><?php echo htmlspecialchars($projet[0]['description']); ?></textarea>

                <p><strong>Technologie utilisée:</strong></p>
                <?php foreach ($technologies as $technology): ?>
                    <span><?php echo htmlspecialchars($technology['technology_name']); ?></span>
                <?php endforeach; ?>
                <div style="display: flex; flex-direction: row; gap: 20px;">
                    <button type="submit" style="width: fit-content;" name="update">Modifier</button>
                    <button type="submit" style="width: fit-content; background-color: red;" name="delete">Supprimer</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>

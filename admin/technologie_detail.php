<?php
require_once '../manager/manager.php';
require_once '../manager/technologyManager.php';
require_once '../manager/projectManager.php';

session_start();

if (!isset($_SESSION['user_logged_in']) || $_SESSION['user_logged_in'] !== true) {
    header("Location: /admin/login");
    exit;
}

if (isset($_GET['id'])) {
    $technolgyManager = new TechnologyManager();
    $technology = $technolgyManager->selectTechnologyById($_GET['id']);

    $projectManager = new ProjectManager();
    $project = $projectManager->selectProjectById($_GET['id']);

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails de la technologie</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <div class="bo-sidebar-content">
        <?php include("../inc/sidebar.php"); ?>
        <div class="bo-content">
            <h1 class="title-page-bo">Détails de la technologie</h1>
            <form action="technologyHandler.php" method="POST" class="projets-details">
                <input type="hidden" name="id" value="<?php echo htmlspecialchars($technology[0]['id']); ?>">

                <label for="title"><strong>Nom de la technologie:</strong></label>
                <input type="text" id="technology_name" name="technology_name" value="<?php echo $technology[0]['technology_name']; ?>" required>

                <div style="display: flex; flex-direction: row; gap: 20px;">
                    <button type="submit" style="width: fit-content;" name="update-techno">Modifier</button>
                    <button type="submit" style="width: fit-content; background-color: red;" name="delete-techno">Supprimer</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>

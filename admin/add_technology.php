<?php
require_once '../manager/projectManager.php';
require_once '../manager/manager.php';


$projectManager = new ProjectManager();
$Ids = $projectManager->selectAllProject();

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter une technologie</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <div class="bo-sidebar-content">
        <?php include("../inc/sidebar.php"); ?>
        <div class="bo-content">
            <h1 class="title-page-bo">Ajouter une technologie</h1>
            <form action="technologyHandler.php" method="POST" class="projets-details">
                <input type="hidden" name="id">

                <label for="title"><strong>Nom de la technologie:</strong></label>
                <input type="text" id="technology_name" name="technology_name" required>


                <label for="title"><strong>Titre du projet</strong></label>
                <select  class ="input" name="select-title-project" >
                        <?php foreach ($Ids as $Id): ?>
                        <option value="<?php echo htmlspecialchars($Id['id']); ?>">
                            <?php echo htmlspecialchars($Id['title']); ?>
                        </option>
                        <?php endforeach; ?>
                    </select>
                <div style="display: flex; flex-direction: row; gap: 20px;">
                    <button type="submit" style="width: fit-content;" name="add-techno">Ajouter</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>

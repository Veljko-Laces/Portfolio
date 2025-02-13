<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter projet</title>
</head>
<body>
    <div class="bo-sidebar-content">
        <?php include("../inc/sidebar.php"); ?>
        <div class="bo-content">
            <h1 class="title-page-bo">Ajouter projet</h1>
            <form action="projectHandler.php" method="POST" class="projets-details">
                <label for="title"><strong>Titre:</strong></label>
                <input type="text" id="title" name="title" required>

                <label for="description"><strong>Description:</strong></label>
                <textarea rows="10" cols="50" id="description" name="description" required></textarea>
                <div style="display: flex; flex-direction: row; gap: 20px;">
                    <button type="submit" style="width: fit-content;" name="add">Ajouter</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
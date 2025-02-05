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
    <div class="sidebar-page">
        <div class="sidebar">
            <div class="sidebar-title-subtitles">
                <h2 class="sidebar-title">Admin</h2>
                <div class="sidebar-subtitles">
                    <a href="../admin/index.php" class="sidebar-subtitles-color">Messages</a>
                    <a href="../admin/utilisateurs.php" class="sidebar-subtitles-color">Utilisateurs</a>
                    <a href="../admin/projets.php" class="sidebar-subtitles-color">Projects</a>
                    <a href="../admin/technologies.php" class="sidebar-subtitles-color">Technologies</a>
                </div>
            </div>
            <div>
                <form action="logout.php" method="POST">
                    <button type="submit" class="sidebar-btn">Se déconnecter</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
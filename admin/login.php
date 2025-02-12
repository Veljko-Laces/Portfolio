<?php
session_start();
require '../controller/adminController.php';

$error_message = isset($_SESSION["error_message"]) ? $_SESSION["error_message"] : "";
unset($_SESSION["error_message"]);

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = isset($_POST["email"]) ? trim($_POST["email"]) : "";
    $password = isset($_POST["password"]) ? trim($_POST["password"]) : "";

    if (!empty($email) && !empty($password)) {
        $adminController = new AdminController();
        $adminController->login($email, $password);
    } else {
        $_SESSION["error_message"] = "Veuillez remplir tous les champs.";
        header("Location: login");
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <div class="login-title-inputs">
        <h2>Connexion</h2>
    
        <?php if (!empty($error_message)) : ?>
            <p style="color: red;"><?php echo $error_message; ?></p>
        <?php endif; ?>
    
        <form method="POST" action="">
                <div class="login-inputs">
                <label for="email">Email :</label>
                <input type="email" id="email" name="email" required>
                <br>
                <label for="password">Mot de passe :</label>
                <input type="password" id="password" name="password" required>
                <br>
                <button type="submit">Se connecter</button>
            </div>
        </form>
    </div>
</body>
</html>

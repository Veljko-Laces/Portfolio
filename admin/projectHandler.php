<?php
require_once '../manager/projectManager.php';
require_once '../manager/manager.php';
require_once '../manager/technologyManager.php';


if (isset($_POST['delete'])) {
    $projectId = $_POST['id'];
    $projectManager = new ProjectManager();
    $projectManager->deleteProjectById($projectId);

    $technologyManager = new TechnologyManager(); 
    $technologyManager->deleteTechnologyByProjectId($projectId);  

    header("Location: /admin/projets.php");
    return;
}

if (isset($_POST['update'])) {
    $projectId = $_POST['id'];
    $newTitle = $_POST['title'];
    $newDescritpion = $_POST['description'];
    $projectManager = new ProjectManager();
    $projectManager->updateProjectById($newTitle,$newDescritpion,$projectId);

    header("Location: /admin/projet_detail.php?id=" . $projectId);

    return;
}

if (isset($_POST['add'])) {
    $newTitle = $_POST['title'];
    $newDescritpion = $_POST['description'];
    $projectId = uniqid();
    $projectManager = new ProjectManager();
    $projectManager->addProject($projectId, $newTitle, $newDescritpion);

    header("Location: /admin/projets.php");

    return;
}


?>
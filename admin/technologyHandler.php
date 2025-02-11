<?php
require_once '../manager/projectManager.php';
require_once '../manager/manager.php';
require_once '../manager/technologyManager.php';

if(isset($_POST['delete-techno'])){
    $technolyId = $_POST['id'];
    $technologyManager = new TechnologyManager();
    $technologyManager->deleteTechnologyById($technolyId);

    header("Location: /admin/technologies.php");

    exit; 

    return;
}

if(isset($_POST['update-techno'])){
    $technologyId = $_POST['id'];
    $newTechnologyName = $_POST['technology_name'];
    
    $technologyManager = new TechnologyManager();
    $technologyManager->updateTechnolgyById($newTechnologyName, $technologyId);

    header("Location: /admin/technologie_detail.php?id=" . $technologyId);
    exit; 

    return;
}


if (isset($_POST['add-techno'])) {

    $projectId = $_POST['select-title-project']; // Récupère l'ID du projet sélectionné
    $newTechnologyName = $_POST['technology_name'];
    $technologyId = uniqid();

    $technologyManager = new TechnologyManager();
    $technologyManager->addTechnology($technologyId, $projectId, $newTechnologyName);

    header("Location: /admin/technologies.php");
    exit; 

    return;
}

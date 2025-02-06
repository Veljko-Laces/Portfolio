<?php

class ProjectManager {

    // Récuperer tous les projets 

    public function selectAllProject() {
        $select_all_project = "SELECT id, title, description FROM project";
        $result = makeSqlRequest($select_all_project, true, true);
        return $result;
    }

    // Récuperer un projet par rapport a l'ID

    public function selectProjectById($id) {
        $select_project_by_id = "SELECT id,title, description FROM project WHERE id = '$id'";
        $result = makeSqlRequest($select_project_by_id, true, true);
        return $result;
    }


    // Ajouter un projet

    public function addProject( $id, $title ,$description) {
        $add_project = "INSERT INTO `project` (`id`,`title`, `description`) VALUES ('$id','$title','$description');";
        $result = makeSqlRequest($add_project, true, true);
        return $result;
    }


    // Supprimer un projet par rapport a son Id

    public function deleteProjectById($id) {
        $delete_project_by_id = "DELETE FROM project WHERE id = '$id';";
        $result = makeSqlRequest($delete_project_by_id, true, true);
        return $result;
    }

    // Modifier un projet par rapport a l'ID
    public function updateProjectById($newTitle, $newDescription, $id) {
        $update_project_by_id = "UPDATE `project` SET `title` = '$newTitle', `description` = '$newDescription' WHERE id = $id;";
        $result = makeSqlRequest($update_project_by_id, true, false);
        return $result;
    }

}
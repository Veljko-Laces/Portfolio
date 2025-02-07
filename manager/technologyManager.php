<?php

class TechnologyManager {
    
    //Récuperer toutes les technologies 

    public function selectAllTechnology() {
        $select_all_technology = "SELECT id, project_id,  technology_name FROM technology";
        $result = makeSqlRequest($select_all_technology, true, true);
        return $result;
    }

    //Récuperer une technologie par rapport a son id 

    public function selectTechnologyById($id) {
        $select_technology_by_id = "SELECT id, project_id,  technology_name FROM technology WHERE id = '$id'";
        $result = makeSqlRequest($select_technology_by_id, true, true);
        return $result;
    }

    //Récuperer une technologie par rapport a un project_id 

    public function selectTechnologyByProjectId($project_id) {
        $select_technology_project_by_id = "SELECT id, project_id,  technology_name FROM technology WHERE project_id = '$project_id'";
        $result = makeSqlRequest($select_technology_project_by_id, true, true);
        return $result;
    }

    // Supprimer une technologie par rapport a un id

    
    public function deleteTechnologyById($id) {
        $delete_technology_by_id = "DELETE FROM technology WHERE id = '$id';";
        $result = makeSqlRequest($delete_technology_by_id, true, true);
        return $result;
    }
    
    // Supprimer une technologie par rapport a un project_id
    
    public function deleteTechnologyByProjectId($projet_id) {
        $delete_technology_by_project_id = "DELETE FROM `technology` WHERE project_id = '$projet_id';";
        $result = makeSqlRequest($delete_technology_by_project_id, true, false);
        return $result;
    }





    // Ajouter une technologie

    
    public function addTechnology( $id, $technology_name ,$project_id) {
        $add_technology = "INSERT INTO `technology` (`id` , `project_id` , `technology_name` ) VALUES ('$id','$technology_name','$project_id');";
        $result = makeSqlRequest($add_technology, true, true);
        return $result;
    }

}


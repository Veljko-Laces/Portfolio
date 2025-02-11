<?php

function makeSqlRequest($sqlRequest, $useDatabase, $fetchResults){
    $engine = "mysql";
    $host = "veljkokveljkolcs.mysql.db";
    $dbName = "veljkokveljkolcs";
    $username = "veljkokveljkolcs";
    $password = "Velj3nevolj3";

    try {
        $dsn = $useDatabase 
            ? "$engine:host=$host;dbname=$dbName" 
            : "$engine:host=$host";
        $pdo = new PDO($dsn, $username, $password);

        if ($fetchResults) {
            $statement = $pdo->prepare($sqlRequest);
            $statement->execute();
            $results = $statement->fetchAll(PDO::FETCH_ASSOC);
            return $results;
        } else {
            $pdo->exec($sqlRequest);
        }
    } catch (PDOException $e) {
        echo json_encode(['Erreur' => $e->getMessage()]);
    }
}





function addMessageManager($newMessage) {
    $add_message = "INSERT INTO `message`(`message`) VALUES ('$newMessage')";
    makeSqlRequest($add_message, true, false);
}


function addProjectManager() {
    
    function addTitleManager($newTitle) {
        $add_title = "INSERT INTO `projet`(`title`) VALUES ('$newTitle')";
        makeSqlRequest($add_title, true, false);
    }
    
    function addDescriptionManager($newDescription) {
        $add_description = "INSERT INTO `projet`(`description`) VALUES ('$newDescription')";
        makeSqlRequest($add_description, true, false);
    }

}


function addTechnologyManger() {

    function addTechnologyName($newTechnologyName) {
        $add_technology_name = "INSERT INTO `technology`(`technology_name`) VALUES ('$newTechnologyName')";
        makeSqlRequest($add_technology_name, true, false);
    }

}

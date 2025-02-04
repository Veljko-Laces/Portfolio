<?php

require_once 'manager.php';


class AdminManager {
    
    public function selectEmail($Email){
        $select_email_password = "SELECT email, password FROM admin WHERE email = '$Email'";
        $result = makeSqlRequest($select_email_password, true, true);
        return $result;
    }

}


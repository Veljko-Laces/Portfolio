<?php

class UserManager {

    // Afficher les users par rapport a leur email

    public function selectUserByEmail($email) {
        $select_user_by_email = "SELECT name,email FROM user WHERE email = '$email'";
        $result = makeSqlRequest($select_user_by_email, true, true);
        return $result;
    }

    // Ajouter un user

    public function addUser($name ,$email) {
        $add_message = "INSERT INTO `user`(`name`, `email`) VALUES ('$name','$email')";
        $result = makeSqlRequest($add_message, true, true);
        return $result;
    }



}
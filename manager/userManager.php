<?php

require_once 'manager.php';


class UserManager {


    // Afficher tous les users

    public function selectAllUsers() {
        $select_users = "SELECT id, name,email FROM user";
        $result = makeSqlRequest($select_users, true, true);
        return $result;
    }

    // Afficher les users par rapport a leur email

    public function selectUserByEmail($email) {
        $select_user_by_email = "SELECT id,name,email FROM user WHERE email = '$email'";
        $result = makeSqlRequest($select_user_by_email, true, true);
        return $result;
    }

    public function selectUserById($id) {
        $select_user_by_id = "SELECT id, name, email FROM user WHERE id = '$id'";
        $result = makeSqlRequest($select_user_by_id, true, true);
        return $result;
    }

    // Ajouter un user

    public function addUser($id, $name ,$email) {
        $add_message = "INSERT INTO `user`(`id`, `name`, `email`) VALUES ('$id','$name','$email')";
        $result = makeSqlRequest($add_message, true, true);
        return $result;
    }



}
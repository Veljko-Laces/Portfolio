<?php

require_once 'manager.php';


class MessageManager {

    // récup les messages par rapport à l'user_iD

    public function selectMessageByUserId($user_id) {
        $select_message_by_user_id = "SELECT id, message, user_id, created_at, replied FROM message WHERE user_id = '$user_id'";
        $result = makeSqlRequest($select_message_by_user_id, true, true);
        return $result;
    }

    // récup tous les messages

    public function selectAllMessage() {
        $select_messages = "SELECT id, message, user_id, created_at, replied FROM message";
        $result = makeSqlRequest($select_messages, true, true);
        return $result;
    }

    // récup un seule message par rapport à l'ID

    public function selectMessageById($id) {
        $select_message_by_id = "SELECT id, message, user_id, created_at, replied FROM message WHERE id = '$id'";
        $result = makeSqlRequest($select_message_by_id, true, true);
        return $result;
    }
    
    // Supprimer un message par rapport à son id

    public function deleteMessageById($id) {
        $delete_message_by_id = "DELETE message FROM message WHERE id = '$id'";
        $result = makeSqlRequest($delete_message_by_id, true, true);
        return $result;
    }


    // Supprimer un message par rapport à l'user_id

    public function deleteMessageByUserId($user_id) {
        $delete_message_by_user_id = "DELETE message FROM message WHERE user_id = '$user_id'";
        $result = makeSqlRequest($delete_message_by_user_id, true, true);
        return $result;
    }

    // Changer l'état d'un message par rapport a son id 

    public function updateMessageById($id) {
        $update_message_by_id = "UPDATE message SET replied = 1 WHERE id = '$id'";
        $result = makeSqlRequest($update_message_by_id, true, true);
        return $result;
    }

    //Ajouter un message 

    public function addMessage($id ,$user_id ,$message) {
        $add_message = "INSERT INTO `message`(`id`, `user_id`, `message`) VALUES ('$id','$user_id','$message')";
        $result = makeSqlRequest($add_message, true, true);
        return $result;
    }




}
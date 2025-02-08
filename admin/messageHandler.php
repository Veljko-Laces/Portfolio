<?php

require_once '../manager/messageManager.php';
require_once '../manager/manager.php';

if(isset($_POST['changeStatus'])){

    $messageId = $_POST['id'];
    $messageManager = new MessageManager();
    $messageManager->updateMessageById($messageId);
    header("Location: /portfolio/admin/message_detail.php?id=" . $messageId);

    return;
}


?>
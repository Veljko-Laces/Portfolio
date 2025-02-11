<?php

require_once '../manager/manager.php';
require_once '../manager/userManager.php';
require_once '../manager/messageManager.php';

if(isset($_POST['send-form'])){
    $newUserId = uniqid();
    $newUserName = $_POST['add-name'];
    $newUserEmail = $_POST['add-email'];
    $newMessageId = uniqid();
    $newUserMessage = $_POST['add-message'];

    if (!$newUserName || !$newUserEmail || !$newUserMessage) {
        header("Location: /index.php#contact");
        return;
    }

    $userManager = new UserManager();
    $addUser = $userManager->addUser($newUserId, $newUserName, $newUserEmail);

    $messageManager = new MessageManager();
    $addMessage = $messageManager->addMessage($newMessageId, $newUserId, $newUserMessage);

    header("Location: /index.php#contact");

    return;
}
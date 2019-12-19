<?php
include 'DB.php';
// Отправить сообщение
function send_message($chat_id, $content, $user_id){
  global $chat_db;

  $query = "INSERT INTO message (chat_id, content, user_id) VALUES (?,?,?)";
  $result = $chat_db->prepare($query)->execute([$chat_id, $content, $user_id]);
  if ($result) {
    echo true;
  }
  else {
    echo false;
  }
}

if ($_POST['content'] != ""){
  send_message($_POST['chat_id'], $_POST['content'], $_POST['user_id']);
}
else {
  echo false;
}
<?php 
include 'DB.php';
// Выборка сообщений для чата
function show_messages($user_id, $chat_id) {
  global $chat_db;

  // $query = "SELECT message.user_id, content, date, firstName, lastName FROM message
  // INNER JOIN chat ON chat.id = $chat_id
  // INNER JOIN users ON users.id = message.user_id";

  $query = "SELECT message.user_id, content, date, firstName, lastName FROM message 
  INNER JOIN users ON users.id = message.user_id WHERE message.chat_id = $chat_id";

  $res = $chat_db->query($query);
  $count_rows = $res->rowCount();
  $result = $res->fetchAll();

  if ($count_rows > 0) {
    echo json_encode([true, $result]);
  }else{
    echo json_encode([false, 'Сообщений пока нет']);
  }
}
show_messages($_POST['user_id'], $_POST['chat_id']);



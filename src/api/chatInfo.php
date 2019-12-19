<?php 
  include 'DB.php';
 // Вывод чатов
 function show_chat_info($chat_id) {
  global $chat_db;

  $query = "SELECT name, firstName, lastName FROM chat 
  LEFT JOIN users ON users.id = chat.user_id 
  WHERE chat.id = $chat_id";
 

  $res = $chat_db->query($query);
  $count_rows = $res->rowCount();
  $result = $res->fetchAll();

  if($count_rows > 0){
    echo json_encode([true, $result]); 
  }
  else{
    echo json_encode([fasle, "Такого чата нет"]); 
  }
}
show_chat_info($_POST['chat_id']);

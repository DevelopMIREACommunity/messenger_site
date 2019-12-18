<?php 
  include 'DB.php';
 // Вывод чатов
 function show_chats($user_id) {
  global $chat_db;

  $query = "SELECT DISTINCT c.id, c.name, m.content as lastMessage FROM chat c
  INNER JOIN users u ON u.id = $user_id
  INNER JOIN party p ON c.id = p.chat_id
  LEFT JOIN message m ON c.id = m.chat_id ORDER BY m.date";
 

  $res = $chat_db->query($query);
  $count_rows = $res->rowCount();
  $result = $res->fetchAll();

  if($count_rows > 0){
    echo json_encode([true, $result]); 
  }
  else{
    echo json_encode([fasle, "У вас нет чатов"]); 
  }
}
show_chats($_POST['user_id']);

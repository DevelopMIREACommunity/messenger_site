<?php 
  include 'DB.php';
 // Вывод пользователей
 function show_users() {
  global $chat_db;

  $query = "SELECT id, firstName, lastName, class FROM users";


  $res = $chat_db->query($query);
  $count_rows = $res->rowCount();
  $result = $res->fetchAll();

  if($count_rows > 0){
    echo json_encode([true, $result]); 
  }
  else{
    echo json_encode([fasle, "Список пользователей пуст"]); 
  }
}
show_users();

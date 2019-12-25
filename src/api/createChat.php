<?php
include 'DB.php';

// Создание чата
function create_chat($name, $creator_id, $users) {
  global $chat_db;
  
  // Запросы
  $query_ins_chat = "INSERT INTO chat (name, user_id) VALUES (?,?)";
  $query_sel_id = "SELECT id FROM chat GROUP BY id DESC LIMIT 1";
  $query_ins_party = "INSERT INTO party (chat_id, user_id) VALUES (?,?)";


  /* Начало транзакции, отключение автоматической фиксации */
  $chat_db->beginTransaction();
  try{
    $result1 = $chat_db->prepare($query_ins_chat)->execute([$name, $creator_id]);
    if(!$result1){
      $chat_db->rollBack();
    }
    $chat_id = $chat_db->query($query_sel_id)->fetch();

    foreach($users as $user_id) {
      $result2 = $chat_db->prepare($query_ins_party)->execute([$chat_id['id'], $user_id]);
    }
    if(!$result2){
      $chat_db->rollBack();
    }
    $chat_db->commit();
    echo  json_encode([true, 'Чат успешно создан']);
  }catch(ErrorException  $e){
    /* Распознаем ошибку и откатываем изменения */
    $chat_db->rollBack();
    $e->getMessage();
    echo json_encode([false, 'Возникла ошибка при создании чата']);
  }
}
create_chat($_POST['name'], $_POST['creator_id'], $_POST['$users']);
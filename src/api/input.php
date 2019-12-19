<?php

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
    $chat_id = $chat_db->query($query_sel_id)->fetch();

    foreach($users as $user_id) {
      $result2 = $chat_db->prepare($query_ins_party)->execute([$chat_id['id'], $user_id]);
    }
    $chat_db->commit();
    return [true, 'Чат успешно создан'];
  }catch(ErrorException  $e){
    /* Распознаем ошибку и откатываем изменения */
    $chat_db->rollBack();
    $e->getMessage();
    return [false, 'Возникла ошибка при создании чата'];
  }
  


  


}

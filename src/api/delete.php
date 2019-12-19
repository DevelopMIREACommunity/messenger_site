<?php
// Удалить чать
function delete_chat($chat_id) {
  global $chat_db;

  $query_mes = "DELETE FROM message WHERE chat_id = :chat_id";
  $query_par = "DELETE FROM party WHERE chat_id = :chat_id";
  $query_cha = "DELETE FROM chat WHERE id = :chat_id;";

  $chat_db->beginTransaction();
  try{

    $stmt = $chat_db->prepare($query_mes);
    $stmt->execute(array(':chat_id' => $chat_id));
    if ($stmt->rowCount() == 0){
      $chat_db->rollBack();
      return [false, 'Чат не удалён'];
    }
    
    $stmt = $chat_db->prepare($query_par);
    $stmt->execute(array(':chat_id' => $chat_id));
    if ($stmt->rowCount() == 0){
      $chat_db->rollBack();
      return [false, 'Чат не удалён'];
    }

    $stmt = $chat_db->prepare($query_cha);
    $stmt->execute(array(':chat_id' => $chat_id));
    if ($stmt->rowCount() == 0){
      $chat_db->rollBack();
      return [false, 'Чат не удалён'];
    }else {
      $chat_db->commit();
      return [true, 'Чат удалён'];
    }
    
  }catch(ErrorException  $e){
    $chat_db->rollBack();
    $e->getMessage();
    return [false, 'Возникла ошибка при удалении чата'];
  }
}
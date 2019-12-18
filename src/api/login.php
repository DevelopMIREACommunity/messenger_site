<?php
include 'DB.php';
 // Вход пользоватля
 function log_in($login, $password) {
  global $chat_db;

  // Взять пароль из БД
  $query = "SELECT id, login, password, firstName FROM users WHERE login = $login";
  $res = $chat_db->query($query);
  $users_count = $res->rowCount();
  $res = $res->fetchAll();

  if ($users_count == 1) {
    // Сравнить пароли
    if (password_verify($password, $res[0]['password'])) {
      session_start();
      $_SESSION['user_id'] = $res[0]['id'];
      $_SESSION['user_name'] = $res[0]['firstName'];
      $_SESSION['user_surname'] = $res[0]['lastName'];
      
      echo  json_encode([true, $res]);
    }
    else {
      echo json_encode([false, "Направильный пароль"]);
    }
  }
  else {
    echo json_encode([false, "Ошибка! Такого пользователя нет."]);
  }
}

log_in($_POST['login'], $_POST['password']);
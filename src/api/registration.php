<?php 
include 'DB.php';
// Регистрация пользователя
function registration($firstName, $lastName, $patronymic, $class, $mail, $login, $password, $aboutMe){
  global $chat_db;

  //Шифрование пароля 
  $security = password_hash($password, PASSWORD_DEFAULT); 

  $query_sel = "SELECT login FROM users WHERE login = $login";
  $query_ins = "INSERT INTO users (firstName, lastName, patronymic, class, mail, login, password, aboutMe) VALUES (?,?,?,?,?,?,?,?)";
  
  $count_rows = $chat_db->query($query_sel)->rowCount();
  if ($count_rows > 0){
    echo  json_encode([false,"Логин занят"]);
  }
  else {
    $result = $chat_db->prepare($query_ins)->execute([$firstName, $lastName, $patronymic, $class, $mail, $login, $security, $aboutMe]);
    if ($result) {
      echo  json_encode([true,"Вы успешно зарегистрированы"]);
    }
    else {
      echo  json_encode([false,"Запрос не сработал"]);
    }
  }
}

registration($_POST['firstName'], $_POST['lastName'], $_POST['patronymic'], $_POST['class'], $_POST['email'], $_POST['login'], $_POST['pass'], $_POST['about']);
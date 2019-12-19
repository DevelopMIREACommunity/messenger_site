<?php 
// DEBUG
function debug($mas){
  echo '<pre>';
  var_dump($mas);
  echo '</pre>';
}

// include 'DB.php';


// include 'select.php';
// include 'input.php';
// include 'registration.php';


// Вывести чаты 
// show_chats($user_id)

// Регистрация
// $res = registration("Артём", "Малафеев", "Евгениевич", "ИКБО-11-17", "mail.com","+79964185676","1234","Я Артём");
// echo $res[1];

// Вход пользователя
// $a = log_in("+79266693918","1234");
// echo .$a[1];

// Вывести сообщения беседы
// $a = show_messages(1,1);
// foreach($a[1] as $b){
//   echo $b['firstName']." <br> ".$b['content']." <br> ".$b['date'];
//   echo '<br>';
//   echo '<br>';
// }

// Создание беседы
// $c = create_chat("Второй чат", 2, [1,2]);
// echo $c;
// print_r($c);
// debug($c);

//Удаление чата(беседы)
// delete_chat(15)[0];

//Отправить сообщение
// if($_POST['content'] != ""){
//   $chat_id = $_POST['chat_id']; 
//   $content = $_POST['content']; 
//   $user_id = $_POST['user_id'];

//   echo "I wonna send: ".$chat_id.' '.$content.' '.$user_id;

//   send_message($chat_id, $content, $user_id);
// }




// registration('1', '1', '1', '1', '1', '1', '1', '1');

// $r = password_hash(32, PASSWORD_DEFAULT);
// echo $r;
// echo '<br>';
// echo password_verify(32, '$2y$10$v7I/eKH2CAcpsO624SQyOe.ipxPkHCxsqHRmRq9NvPdgd5tqne0EK');


// while ($row = $stmt->fetch())
// {
//     echo $row['name'] . "\n";
// }
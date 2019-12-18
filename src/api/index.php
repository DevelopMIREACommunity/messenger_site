<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Тестим чат</title>
</head>
<body>
  <section class="chat">
    <div class="chat-messages">
    <ul id="showMessages">

    </ul>
    </div>
    <div class="chat-create">
      <input type="text" placeholder="Ваше сообщение">
      <button id="sendMessage">Отправить</button>
    </div>
  </section>
  <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>

  <script src="index.js"></script>

  <style>
    .chat {
      margin: 50px 0 0 100px;
    }
    .chat-messages {
      width: 800px;
      height: 200px;
      border: 1px solid #000;
    }
  </style>
</body>
</html>
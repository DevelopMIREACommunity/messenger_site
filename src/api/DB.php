<?php
function connect_chat_DB() {
  $host = 'localhost';
  $db   = 'pro10111_ms_chat';
  $user = 'alexander';
  $pass = '';
  $charset = 'utf8';

  $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
  $opt = [
      PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
      PDO::ATTR_EMULATE_PREPARES   => false,
  ];
  return  new PDO($dsn, $user, $pass, $opt);
}

function connect_schedule_DB() {
  $host = 'localhost';
  $db   = 'ms_schedule';
  $user = 'alexander';
  $pass = '';
  $charset = 'utf8';

  $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
  $opt = [
      PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
      PDO::ATTR_EMULATE_PREPARES   => false,
  ];
  return  new PDO($dsn, $user, $pass, $opt);
}

session_start();
$chat_db = connect_chat_DB();
<?php
session_start();
if ($_POST['get_session']){
  $ses = $_POST['session_name'];

  if(isset($_SESSION[$ses])){
    echo json_encode($_SESSION[$ses]);
  }
  else {
    echo json_encode(0);
  }
}

if ($_POST['set_session']){
  $ses = $_POST['session_name'];
  $val = $_POST['value'];
 
  $_SESSION[$ses] = $val;
}
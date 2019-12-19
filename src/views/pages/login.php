<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Вход</title>
    <meta name="theme-color" content="#fff" />
    <meta
      name="apple-mobile-web-app-status-bar-style"
      content="black-translucent"
    />
    <meta
      name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    />
    <link rel="icon" type="image/png" href="@@webRoot/img/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="@@webRoot/img/favicon/favicon-96x96.png" sizes="96x96">

    <link rel="stylesheet" href="@@webRoot/styles/main.css" />
  </head>

  <body>
    <div class="wrapper">
      <div class="container">
      <header class="header">
        <div class="container">
          <nav>
            <ul class="menu">
              <li class="menu__item menu_logo">
                <a href="index.html">7DEVMessenger</a>
              </li>
              <li class="menu__item">
                <a href="login.php">Рассписание</a>
              </li>
              <li class="menu__item">
                <a href="login.php">Вход/Регистрация</a>
              </li>
            </ul>
        </nav>
        </div>
      </header>
        <!-- /.header --> 

        <div  class="wrapper-content" >
          <div class="container">
            <div class="login">
              <h1 class="login__title">Вход</h1>
              <p class="login__error_msg error_msg"></p> 
              <form id="login__form" class="login__form" enctype="text/plain" method="POST" action="">
                <div class="login__form-leftright">
                  <ul class="login__form-left">
                    <li>
                      <input id="login__form__item" type="tel" class="login__form__item" name="login" placeholder="Логин / Телефон">
                    </li>
                    <li>
                      <input id="login__form__item" type="password" class="login__form__item" name="password" placeholder="Пароль">
                    </li>
                  </ul>
                </div>
                <div class="login__form__submit">
                  <button id="login__form__sub" id="loginBtn" name="enter" class="login__form__sub" >Войти</button>                  
                </div>

              </form>
            </div>
          </div>
        </div>
        <!-- /.content -->

        <footer class="footer">
          <div class="enter">
            <p><strong>Ещё нет аккаунта?</strong></p>
            <a href="register.html">Зарегистрироваться</a>
          </div>
        </footer>

      </div>
    </div> 
    <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
    <script src="@@webRoot/js/main.js"></script>
  </body>
</html>

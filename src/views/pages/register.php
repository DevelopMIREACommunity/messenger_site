<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Регистрация</title>
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
                  <a href="#"><img src="" alt="LOGO"></a>
                </li>
                <li class="menu__item">
                  <a href="#">Рассписание</a>
                </li>
                <li class="menu__item">
                  <a href="../@@webRoot/pages/login.php">Вход/Регистрация</a>
                </li>
              </ul>
          </nav>
          </div>
        </header>
        <!-- /.header --> 

        <div  class="wrapper-content" >
          <div class="container">
            <div class="register">
              <h1 class="register__title">Регистрация</h1>
              <p class="login__error_msg error_msg"></p> 
              <form id="register__form" class="register__form" action="" method="POST" enctype="text/plain">
                <div class="register__form-leftright">
                  <ul class="register__form-left">
                    <li>
                      <!-- <p><strong>Ваше Имя</strong></p> -->
                      <input id="register__form__item" type="text" class="register__form__item" name="firstName" placeholder="Имя*" required>
                    </li>
                    <li>
                      <!-- <p><strong>Ваша фамилия</strong></p> -->
                      <input id="register__form__item" type="text" class="register__form__item" name="lastName" placeholder="Фамилия*" required>
                    </li>
                    <li>
                      <!-- <p><strong>Ваш номер телефона</strong></p> -->
                      <input id="register__form__item" type="text" class="register__form__item" name="patronymic" placeholder="Отчество">
                    </li>
                    <li>
                      <!-- <p><strong>Номер студенческого билета</strong></p> -->
                      <input id="register__form__item" type="tel" class="register__form__item" name="login" placeholder="Логин / Телефон*" required>
                    </li>
                    
                    
                  </ul>
                  <ul class="register__form-right">
                    
                    <li>
                      <!-- <p><strong>Ваш пароль</strong></p> -->
                      <input id="register__form__item" type="text" class="register__form__item" name="class" placeholder="Группа/Кафедра*" required>
                    </li>
                    <li>
                      <!-- <p><strong>Ваш email</strong></p> -->
                      <input id="register__form__item" type="email" class="register__form__item" name="mail" placeholder="E-mail">
                    </li>
                    
                    <li>
                      <!-- <p><strong>Ваш пароль</strong></p> -->
                      <input id="register__form__item" type="password" class="register__form__item" name="password" placeholder="Пароль*" required>
                    </li>
                    <li>
                      <!-- <p><strong>Подтверждение пароля</strong></p> -->
                      <input id="register__form__item" type="password" class="register__form__item" name="password_2" placeholder="Подтверждение пароля*" required>
                    </li>
                    
                    
                  </ul>
                </div>
                <div class="register__form__textarea">
                  <!-- <p><strong>О себе</strong></p> -->
                  <textarea class="register__form__textarea__about" name="aboutMe" placeholder="О себе"></textarea>
                </div>
                <div class="register__form__submit">
                  <button id="register__form__sub" type="submit" id="regBtn" name="enter" class="register__form__sub">Зарегистрироваться</button>               
                </div>  

              </form>
            </div>
          </div>
        </div>
        <!-- /.content -->

        <footer class="footer">
          <div class="enter">
            <p><strong>Уже есть аккаунт?</strong></p>
            <a href="#">Войти</a>
          </div>
        </footer>

      </div>
    </div> 
    <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
    <script src="@@webRoot/js/main.js"></script>
    <script> 
      
    </script>
  </body>
</html>

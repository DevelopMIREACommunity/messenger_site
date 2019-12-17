
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Мессенджер</title>
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  </head>

  <body>
    <div class="wrapper">
      <div class="container">
        

        <div  class="wrapper-content" >
          <div class="container">
            <div class="messenger">
              <div class="contacts-chat">
                <ul id="showChats" class="contacts">
                  <li class="contacts__item contacts__search">
                    <form class="contacts__form" action="" method="POST">
                      <button type="submit"></button>
                      <input name="search" placeholder="Поиск переписок" type="search">
                    </form>
                  </li>


                  <li class="contacts__item">
                    <div class="contacts__item-avachatwith">
                      <div class="contacts__item__ava">
                        <!-- <img src="#"> -->
                      </div>
                      <div class="contacts__item__chatwith">
                        <p class="contacts__item__chatwith_name">
                          Имя Фамилия
                        </p>
                        <p class="contacts__item__chatwith__last">
                          Последенее сообщение
                        </p>
                      </div>
                      <div class="contacts__item__number">
                        <div>
                          <p>2</p>
                        </div>
                      </div>
                    </div>
                  </li>

                  
                </ul>
                <div class="chat">
                  <div class="interclutor">
                    <div class="interclutor__ava">
                      <!-- <img src=""> -->
                    </div>
                    <div class="interclutor__info">
                      <p class="interclutor__info__name">
                        Миронов А.Н.
                      </p>
                      <p class="interclutor__info__status">
                        Онлайн 5 мин. назад
                      </p>
                    </div>
                  </div>
                  <div class="public">
                    <ul id="showMessages" class="public__messege">
                       
                    </ul>
                  </div>
                  <div class="chat_send">
                    <form class="chat_form" method="POST" action="">
                      <div class="download">
                        <i class="fa fa-paperclip fa-fw"></i>
                      </div>
                      <div class="yourmessege">
                        <input id="chat__form__item" type="text" class="chat__form__item" name="send" placeholder="Написать сообщение">
                      </div>
                      <div class="send">
                        <button type="submit" class="send__btn"><i class="fa fa-paper-plane fa-fw"></i></button>
                      </div>
                  </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /.content -->

        <footer class="footer">

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
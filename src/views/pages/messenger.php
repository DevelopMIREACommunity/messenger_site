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
                <div  class="contacts">
                  <div class="contacts-inner">


                    <div class="contacts__search contacts__item ">

                      <form class="contacts__form" action="" method="POST">
                        <button type="submit"></button>
                        <input name="search" placeholder="Поиск переписок" type="search">
                      </form>


                      <div  class="contacts-chat__menu">
                        <i class="fa fa-ellipsis-v"></i>
                        <div class="contacts-chat__menu__bar">
                          <nav class="menu-bar">
                            <ul class="">
                              <li class="menu-bar__item newGrouplink">
                                <a href="#" id="openChatAdd">
                                  Новая группа
                                </a>
                              </li>
                              <li class="menu-bar__item  profilelink">
                                <a href="#">
                                  Профиль
                                </a>
                              </li>
                            </ul>
                          </nav>
                        </div>
                      </div>

                    </div>


                    <ul id="showChats" class="contacts__items">
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
                  </div>

                  <div class="newGroup">
                    <div class="newGroup__back">
                      <i class="fa fa-long-arrow-left newGroup__back__link"></i>
                      <p>Добавить участников</p>
                    </div>
                    <div class="newGroup__contacts__add">
                      
                      <form class="newGroup__form">
                        <input type="text" name="chat_name" id="chat_name" class="newGroup__form__input" placeholder="Название беседы">
                        
                        <input type="text" name="last" id="last-input" class="newGroup__form__input " placeholder="Поиск по фамилии">
                        <button id="btnCreateChat" class="btn btn--primary" style="font-size: 14px;padding: 10px;">Создать чат</button>
                      </form>
                      <p class="create_chat_error" style="color: red">

                      </p>
                      <ul id="showUsers">
                        
                      </ul>
                      

                    </div>
                  </div>

                  <div class="profile"> 
                    <div class="profile__back">
                      <i class="fa fa-long-arrow-left profile__back__link"></i>
                      <p>Профиль</p>
                    </div>
                    <div class="profile__ava">
                      
                    </div>
                    <div class="profile__about">
                      <form class="profile__form">
                        <div class="profile__form__name__input">
                          <p>Ваше имя</p>
                          <input type="text" name="contacts_name" class="profile__form__input" placeholder="Введите имя контакта">
                        </div>
                        <p class="profile__form__about__name">Это не имя пользователя и пароль. Данное имя будут видеть ваши контакты</p>
                        <div class="profile__form__status__input">
                          <p>Ваш статус</p>
                          <input type="text" name="contacts_name" class="profile__form__input" placeholder="Название беседы">
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                
                <div class="chat">
                  <div class="interclutor" id="chat_title"> 
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
                        <button id="sendMsgBtn" type="submit" class="send__btn"><i class="fa fa-paper-plane fa-fw"></i></button>
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
    <script type="text/javascript">

    </script>
  </body>
</html>
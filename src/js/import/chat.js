$('.contacts-chat__menu').click(function(){
  $(".contacts-chat__menu__bar").slideToggle();
});

$('.newGrouplink').click(function(){
  $(".newGroup").css("display","block");
  $(".contacts-inner").css("display","none");
});

$('.profilelink').click(function(){
  $(".profile").css("display","block");
  $(".contacts-inner").css("display","none");
});

$('.newGroup__back__link').click(function(){
  $(".newGroup").css("display","none");
  $(".contacts-inner").css("display","block");
});

$('.profile__back__link').click(function(){
  $(".profile").css("display","none");
  $(".contacts-inner").css("display","block");
});


function getSession(name){ 
  var obj; 
  $.ajax({
    type: 'POST',
    async: false,
    url: 'api/_session.php',
    data: {'get_session': true, 'session_name': name},
    dataType: 'json',
    success: function(data){
      obj = JSON.parse(data);
    }
  });  
  return obj;
} 
var user_id = getSession("user_id");
    chat_id = getSession("chat_id");
    
showChatTitle();

function showChats(){
  var wrapper = $('#showChats');
  $.ajax({
    type: 'POST',
    url: 'api/showChats.php',
    data: ({user_id: user_id}),
    success: function(res){
      var messages = JSON.parse(res); 
      wrapper.empty();
      if (messages[0] == true){
        messages[1].forEach(function(m) {
          var mes = "Чатов пока нет";
          if (m.lastMessage != null)
            {mes = m.lastMessage}

          var message = '<li class="contacts__item chat"  id="chat"   data-chat-id='+ m.id +'> <div class="contacts__item-avachatwith"> <div class="contacts__item__ava" '+
          '<!-- <img src="#">   </div> <div class="contacts__item__chatwith"> <p class="contacts__item__chatwith_name">' +
          m.name +
          '</p> <p class="contacts__item__chatwith__last">'+ mes
          + '</p> </div> <div class="contacts__item__number">  </div> </div> </li>';

          wrapper.append(message);
        });
      }
    }
  });
}
showChats();
setInterval(showChats, 23500);



function showMessages(){
  var wrapper = $('#showMessages'); 

  $.ajax({
    type: 'POST',
    url: 'api/showMessages.php',
    data: ({chat_id: chat_id, user_id: user_id}),
    success: function(res){
      var messages = JSON.parse(res);
      wrapper.empty();
      if (messages[0]){
        messages[1].forEach(function(m) {
        var message = "Сообщений пока нет";
        if(m.user_id == user_id){
          message = '<li class="public__messege__my"><p class="public__messege__my__first">' +
           m.content + '</p></li>';
        }
        else {
          message = '<li class="public__messege__enemy"> <div class="public__messege__enemy__ava interclutor__ava">'+m.user_id+'</div> <div class="public__messege__enemy__text"><p class="public__messege__enemy__text__first">' +
           m.content +'</p> </div></li>';
        }
        wrapper.append(message);
        });
      }
    }
  });
}
setInterval(showMessages, 500);



// ------ВЫБОР ЧАТА--------  
$('#showChats').on("click", "#chat", function () {
  setSession('chat_id', $(this).attr("data-chat-id"));
  chat_id = getSession("chat_id"); 
  
  showChatTitle();
  showMessages();
}); 

function showChatTitle(){ 
  $.ajax({
    type: 'POST',  
    async: false,
    url: 'api/chatInfo.php',
    data: {chat_id: chat_id},
    success: function(data){
      var info = JSON.parse(data);
      if (info[0]){
        var title;
        info[1].forEach(function(inf) {
          title = '<div class="interclutor__ava"></div> <div class="interclutor__info"><p class="interclutor__info__name">'+ 
          inf.name+'</p><p class="interclutor__info__status">Создатель: '+ inf.lastName+" "+ inf.firstName+'</p></div>';
        });
        $('#chat_title').html(title);
      } 
    }
  });   
  
};

function setSession(name, value){ 
  $.ajax({
    type: 'POST',
    async: false,
    url: 'api/_session.php',
    data: {'set_session': true, 'session_name': name, 'value': value},
    dataType: 'json',
    success: function(data){
      return true;
    }
  });  
} 

// ----- ОТПРАВКА СООБЩЕНИЙ --------
 

$('#sendMsgBtn').click(sendMessage);

function sendMessage(event){ 
  event.preventDefault();
  var input = $('#chat__form__item');
      text = input.val();

  $.ajax({
    type: 'POST',
    url: 'api/sendMessage.php',
    data: ({chat_id: chat_id, content: text, user_id: user_id}),
    success: function(){
      showMessages();
    }
  });
  input.val("");
}



// --------------- Добавление чата ----------

// Вывод пользователей
$('#openChatAdd').click(showUsers);

 
function showUsers(event){
  event.preventDefault();
  var wrapper = $('#showUsers'); 
  console.log("Шь цщклштп");
  $.ajax({
    type: 'POST',
    url: 'api/showMessages.php',
    data: '',
    success: function(res){
      var messages = JSON.parse(res);
      wrapper.empty();
      if (messages[0]){
        messages[1].forEach(function(m) {
          var message = "Пользователей нет";
          message = '<li class="newGroup__contacts__item"><div class="newGroup__contacts__item-avachatwith"><div class="newGroup__contacts__item__ava"></div><div class="newGroup__contacts__item__chatwith"><p class="newGroup__contacts__item__chatwith_name">' +
          m.firstName+" "+ m.lastName + '</p></div></div></li>';

          wrapper.append(message);
        });
      }
    }
  });
}


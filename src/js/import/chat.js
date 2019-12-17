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

function showChats(){
  var wrapper = $('#showChats');
  $.ajax({
    type: 'POST',
    url: 'api/showChats.php',
    data: ({user_id: user_id}),
    success: function(res){
      var messages = JSON.parse(res); 
      wrapper.empty();
      if (messages[0]){
        messages[1].forEach(function(m) {
          var message = '<li class="contacts__item"> <div class="contacts__item-avachatwith"> <div class="contacts__item__ava" '+
          '<!-- <img src="#">   </div> <div class="contacts__item__chatwith"> <p class="contacts__item__chatwith_name">' +
          m.name +
          '</p> <p class="contacts__item__chatwith__last">'+
          m.lastMessage +
          '</p> </div> <div class="contacts__item__number">  </div> </div> </li>';

          wrapper.append(message);
        });
      }
    }
  });
}
showChats();
setInterval(showChats, 3500);



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
        var message = "";
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

$('#sendMessage').click(function sendMessages(){
  $.ajax({
    type: 'POST',
    url: 'api/sendMessage.php',
    data: ({chat_id: 1, content: "Тект сообщения", user_id: 1}),
    success: function(res){
      showMessages();
    }
  });
});





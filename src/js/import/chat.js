function getSession(){
  $.ajax({
    type: 'POST',
    url: 'api/_session.php',
    data: ({get_session: true, session_name: 'user_id'}),
    success: function(res){
      var sessions = JSON.parse(res);
  
      console.log(sessions);
    }
  });
}

function showMessages(){
  var user_id = getSession();
  var wrapper = $('#showMessages');

  $.ajax({
    type: 'POST',
    url: 'api/showMessages.php',
    data: ({chat_id: 1, user_id: 1}),
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
          message = '<li class="public__messege__enemy"> <div class="public__messege__enemy__ava interclutor__ava"><!-- <img src=""> --></div> <div class="public__messege__enemy__text"><p class="public__messege__enemy__text__first">' +
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





function showMessages(){
  var wrapper = $('#showMessages');

  $.ajax({
    type: 'POST',
    url: 'api/showMessages.php',
    data: ({chat_id: 1, content: "Тект сообщения", user_id: 1}),
    success: function(res){
      var messages = JSON.parse(res);
      wrapper.empty();
      if (messages[0]){
        messages[1].forEach(function(m) {
         
          var message = "<li>" + m.firstName +" "+ m.lastName + "<br>"+ m.content + "</li>";

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

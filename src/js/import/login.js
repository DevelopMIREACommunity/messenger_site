$('#login__form__sub').click(function logIn(e){
  e.preventDefault();
  var login = $("input[name=login]").val();
      pass = $("input[name=password]").val();
      text = $(".error_msg");
      loginChecked = false;
      passChecked = false;
      
      if(pass == ""){
        text.text("Пароль не может быть пустым").css("color","red");
        $("input[name=password]").css("border","1px solid red");
        passChecked = false;
        if(pass.length < 3){
          text.text("Пароль не может быть короче 3х символов").css("color","red");
          $("input[name=password]").css("border","1px solid red");
          passChecked = false;
        }
        else {
          text.text();
          $("input[name=password]").css("border","1px solid green");
          passChecked = true;
        }
      }
      else {
        text.text();
        $("input[name=password]").css("border","1px solid green");
        passChecked = true;
      }

      if(login == ""){
        text.text("Логин не может быть пустым").css("color","red");
        $("input[name=login]").css("border","1px solid red");
        loginChecked = false;
      }
      else {
        text.text();
        $("input[name=login]").css("border","1px solid green");
        loginChecked = true;
      }

      if(loginChecked && passChecked){
        $.ajax({
          type: 'POST',
          url: 'api/login.php',
          data: ({login: login,password: pass}),
          success: function(res){
            var result = JSON.parse(res);

            if (result[0]){
              text.text("");
              window.location.href = 'messenger.php';
            }else{
              text.text(result[1]).css("color","red");
            }
          }
        });
      }
  
});
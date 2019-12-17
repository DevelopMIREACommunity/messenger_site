$('#register__form__sub').click(function logIn(e){
  e.preventDefault();
  var login = $("input[name=login]").val();
      pass = $("input[name=password]").val();
      pass2 = $("input[name=password_2]").val();
      firstName = $("input[name=firstName]").val();
      lastName = $("input[name=lastName]").val();
      patronymic = $("input[name=patronymic]").val();
      email = $("input[name=mail]").val();
      group = $("input[name=class]").val();
      about = $("textarea[name=aboutMe]").val();

      text = $(".error_msg");
      passChecked = false;

      if(firstName == ""){
        text.text("Имя не может быть пустым").css("color","red");
        $("input[name=firstName]").css("border","1px solid red");
        passChecked = false;
      }
      else {
        text.text();
        $("input[name=firstName]").css("border","1px solid green");
        if(login == ""){
          text.text("Не введён логин").css("color","red");
          $("input[name=login]").css("border","1px solid red");
          passChecked = false;
        }
        else {
          text.text();
          $("input[name=login]").css("border","1px solid green");
          if(pass == ""){
            text.text("Пароль пустой").css("color","red");
            $("input[name=password]").css("border","1px solid red");
            passChecked = false;
          }
          else {
            text.text();
            $("input[name=password]").css("border","1px solid green");
            if(pass != pass2){
              text.text("Пароли не совпадают").css("color","red");
              $("input[name=password_2]").css("border","1px solid red");
              passChecked = false;
            }
            else {
              text.text();
              $("input[name=password_2]").css("border","1px solid green");
              passChecked = true;
            }
          }
          
        }
      }

       
      
      if(passChecked) {
        $.ajax({
          type: 'POST',
          url: 'api/registration.php',
          data: ({login: login, pass: pass,firstName: firstName, lastName: lastName,patronymic: patronymic, email: email, class: group,about: about }),
          success: function(res){
            var result = JSON.parse(res);

            if (result[0]){
              text.text("");
              window.location.href = 'login.php';
            }else{
              text.text(result[1]).css("color","red");
            }
          }
        });
      }
});
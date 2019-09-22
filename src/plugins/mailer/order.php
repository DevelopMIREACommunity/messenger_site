<?php 

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$text = $_POST['text'];
$page = $_POST['page'];


require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.yandex.ru';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'sasizvekv@yandex.ru';                 // Наш логин
$mail->Password = 'Alexprofitbird2263';                           // Наш пароль от ящика
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;//465                                    // TCP port to connect to
//$mail->SMTPDebug = 2;
$mail->setFrom('sasizvekv@yandex.ru', 'Заявка с сайта remontokon99');   // От кого письмо 
$mail->addAddress('remontokon99@yandex.ru');             // Add a recipient
//$mail->addAddress('repairwindows@yandex.ru');             // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Новая заявка с сайта Remontokon99.ru';
$mail->Body    = '
	<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
	<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
	<title>Письмо заявки с remontokon99</title> 
	</head>
	<body>
		<table cellpadding="0" cellspacing="0" border="0" width="100%" style="background: #f5f5f5; min-width: 340px; font-size: 1px; line-height: normal;">
		 	<tr>
		   		<td align="center" valign="top">
		   			<table cellpadding="0" cellspacing="0" border="0" width="700" class="table700" style="max-width: 700px; min-width: 320px; background: #ffffff;">
		   				<tr style="height: 60px;">	
						</tr>
		   				<tr>
		   					<td align="left" valign="top">
								<span style="font-family: Arial, Tahoma, Geneva, sans-serif; color: #a4a4a4; font-size: 16px; line-height: 20px;">
										Пользователь оставил свои данные <br> <br>
										Имя: ' . $name . ' <br><br>
										Телефон: ' . $phone . '<br><br> 
										Заявка отправлена из формы модального окна.
								</span>

							</td>
						</tr>	
						<tr>
							<td align="left" valign="center">
								<span style="font-family: Arial, Tahoma, Geneva, sans-serif; color: #a4a4a4; font-size: 16px; line-height: 20px;">
										 Отправлено со страницы: '.$page.'
								</span>

							</td>
						</tr>
						<tr style="height: 60px;">	
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</body>
	</html>';

	
$mail->AltBody = $name.' '.$phone.' '.$email;

if(!$mail->send()) {
    echo 'Ошибка: ' . $mail->ErrorInfo;
} else {
	$url = 'location:../'.$page;
   header($url);
}
?>
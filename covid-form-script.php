<?php

   // $msg_box = ""; // в этой переменной будем хранить сообщения формы
	
  // собираем данные из формы
			$message = "<div style='font-size: 14px; padding: 40px; line-height: 1.7; color: #000 !important; border-top: 2px solid #053C5B; border-bottom: 2px solid #053C5B;'>";
			$message .= "<b style='color: #000;'>Посетителем сайта ____ оставлена заявка </b><br/>";
			$message .= "Имя: " . $_POST['name'] . "<br/>";
			$message .= "Номер телефона: " . $_POST['phone'] . "<br/>";
            $message .= "Email: " . $_POST['email'] . "<br/>";
            $message .= "Сообщение: " . $_POST['pole'] . "<br/>";
			$message .= "Заявка отправлена со страницы: " . $_POST['page'] . "<br/>";
			$message .= "</div>";
			
			if (($_POST['name'] != "") || ($_POST['phone'] != "")){
				send_mail($message);
			}
        // выведем сообщение об успехе
        //$msg_box = "<span style='color: green;'>Сообщение успешно отправлено!</span>";
   
 

	
    // делаем ответ на клиентскую часть в формате JSON
    //echo json_encode(array(
   //     'result' => $msg_box
   // ));
     
     
    // функция отправки письма
    function send_mail($message){
        // почта, на которую придет письмо
        $mail_to = "ivtrutru11@yandex.ru"; 
        // тема письма
        $subject = "Заполнена заявка";
         
        // заголовок письма
        $headers= "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=utf-8\r\n"; // кодировка письма
        $headers .= "From: perun@yandex.ru\r\n"; // от кого письмо
         
        // отправляем письмо 
        mail($mail_to, $subject, $message, $headers);
    }
	

?>
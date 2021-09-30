<!DOCTYPE html>
<html lang="ru">
	<head>
		<title>Обработка запроса</title>
		<meta charset="utf-8">
	</head>
	<body>	
<?php

	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
    $token = "";
    $chat_id = "";
 	$arr = array(
			  'Имя пользователя: ' => $name,
			  'Email: ' => $email,
			  'Сообщение: ' => $message
		   );

	foreach($arr as $key => $value) 
	{
		 $txt .= "<b>".$key."</b> ".$value."%0A";
	}; 
		
    if (!empty($_POST['name']) && !empty($_POST['email']))
    {
        $bot_url = "https://api.telegram.org/bot{$token}/";
        $urlForPhoto = $bot_url . "sendPhoto?chat_id=" . $chat_id;
 
        if(!empty($_FILES['file']['tmp_name'])) 
        {
             $path = __DIR__ .  DIRECTORY_SEPARATOR;
                                
             $types = array('image/gif', 'image/png', 'image/jpeg');// Массив допустимых значений типа файла  

             if (!in_array($_FILES['file']['type'], $types))// Проверяем тип файла 
             {
                exit ("<h3>Запрещённый тип файла. <a href='http://f0562851.xsph.ru/'> Вернуться на сайт.</a></h3>");
             }
                                        
             $size = 1024000; // Максимальный размер файла    
               
             if ($_FILES['file']['size'] > $size) // Проверяем размер файла
             {
                exit ("<h3>Cлишком большой размер файла. <a href='http://f0562851.xsph.ru/'> Вернуться на сайт.</a></h3>");
             }     
                                                 
             if (!@copy($_FILES['file']['tmp_name'], $path . $_FILES['file']['name'])) // Загрузка файла и вывод сообщения
             {
                 exit ("<h3>Что-то пошло не так. Файл не отправлен! <a href='http://f0562851.xsph.ru/'> Вернуться на сайт.</a></h3>");
             } 
             else 
             {
                $filePath = $path . $_FILES['file']['name'];
                $post_fields = array('chat_id' => $chat_id, 'photo' => new CURLFile(realpath($filePath)) );
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_HTTPHEADER, array( "Content-Type:multipart/form-data" ));
                curl_setopt($ch, CURLOPT_URL, $urlForPhoto);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $post_fields);
                $output = curl_exec($ch);
                unlink($filePath);
             }
        }

        $sendTextToTelegram = file_get_contents("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}");
        if ($sendTextToTelegram) 
        {
			print "<h3>Сообщение отправлено. Спасибо Вам " . $name . ", я скоро свяжусь с Вами.<a href='http://f0562851.xsph.ru/'> Вернуться на сайт.</a></h3> ";
			;
        } 
        else 
        {
			print "<h3>Ошибка ввода дынных!<a href='http://f0562851.xsph.ru/'> Вернуться на сайт.</a></h3>";
        } 
    } 
    else 
    {
        exit ("<h3>Ошибка. Вы заполнили не все обязательные поля! <a href='http://f0562851.xsph.ru/'>Вернуться на сайт.</a></h3>");
    }
    
?>
	
 <!--Переадресация на главную страницу сайта-->
	<script language="JavaScript" type="text/javascript">
		function changeurl(){eval(self.location="http://f0562851.xsph.ru/");}
			window.setTimeout("changeurl();",5000);
	</script>
      
	</body>
</html>

<head>
	<meta charset="utf-8">
</head>
<body>
	<?
	$name = trim(htmlspecialchars(strip_tags($_POST['name'])));
	$email = trim(htmlspecialchars(strip_tags($_POST['email'])));
	$subject = trim(htmlspecialchars(strip_tags($_POST['subject'])));
	$message = trim(htmlspecialchars(strip_tags($_POST['message'])));
	if (!empty($email) && !empty($name) && !empty($subject) && !empty($message)) {
		if (mb_strlen($email) < 100 && mb_strlen($name) < 100 && mb_strlen($subject) < 100 && mb_strlen($message) < 1000) {
			echo "<script>msg('Вы успешно отправили сообщение. Спасибо!', 'success', 'Отлично!');</script>";
			$text = "Новая заявка с сайта, имя: $name \n $message \n Контактная почта: $email.";
			mail("igolnikov.dmitriy@inbox.ru", $subject, $text);
		}
		else {
			echo "<script>msg('Слишком много символов в поле.', 'error', 'Ошибка!');</script>";
		}
	}
	else {
		echo "<script>msg('Вы не заполнили все поля.', 'error', 'Ошибка!');</script>";
	}
	?>

</body>

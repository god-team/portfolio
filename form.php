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
			echo "<script>msg('�� ������� ��������� ���������. �������!', 'success', '�������!');</script>";
			$text = "����� ������ � �����, ���: $name \n $message \n ���������� �����: $email.";
			mail("igolnikov.dmitriy@inbox.ru", $subject, $text);
		}
		else {
			echo "<script>msg('������� ����� �������� � ����.', 'error', '������!');</script>";
		}
	}
	else {
		echo "<script>msg('�� �� ��������� ��� ����.', 'error', '������!');</script>";
	}
	?>

</body>

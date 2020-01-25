<?php
$admfile = "psw.d";
$tknfile = "tkn.d";
if (($_COOKIE['adms']!='') and ($_COOKIE['adms']==file_get_contents($admfile)) and ($_POST["token"]!='')) {
	
	$file = fopen($tknfile, 'w');
	fwrite($file, $_POST["token"]);
	fclose($file);
	chmod($tknfile, 0600);
	
	echo '
		<html>
		<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Админ-панель</title>
		<script>
		function bback(){ window.location="index.php"; }
		</script>
		</head>
		<body>
		<center>
		<h3>Успешно!</h3>
		<button onclick="bback();">Назад</button>
		</center>
		</body>
		</html>
		';
	
} else {

echo '
		<html>
		<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Админ-панель</title>
		<script>
		function bback(){ window.location="index.php"; }
		</script>
		</head>
		<body>
		<center>
		<h3>Недостаточно прав доступа!</h3>
		<button onclick="bback();">Назад</button>
		</center>
		</body>
		</html>
		';

}
?>
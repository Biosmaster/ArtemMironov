<?php

function set2user($name,$value=null) {
	if ($value==null) {
		$value = "";
		$exp = gmdate('D, d M Y H:i:s \G\M\T', time()-3600);
	} else {
		$exp = gmdate('D, d M Y H:i:s \G\M\T', time()+32000000);
	}
	echo '<script>document.cookie = "'.$name.'=" + escape("'.$value.'") + "; expires='.$exp.'; path=/; domain='.$_SERVER['HTTP_HOST'].'";</script>'."\n";
}

$acc = file_get_contents("accs.d");
if ($acc=='') { $acc="<center><p>Список пуст</p></center>"; }

$lp = file_get_contents("lp.d");
if ($lp=='') { $lp="<center><p>Список пуст</p></center>"; } else { $lp = '<center><p>'. $lp .'</p></center>'; }

$admfile = "psw.d";

if (($_POST["npass"]!='') and (!file_exists($admfile))) {

$file = fopen($admfile, 'w');
fwrite($file, md5($_POST["npass"]));
fclose($file);
chmod($admfile, 0600);
echo '<!doctype html>
<html lang="ru" class="no-js">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700" rel="stylesheet" type="text/css">

<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/style.css"> 
<link rel="stylesheet" href="css/demo.css">

<link href="img/favicon.ico" type="image/x-icon" rel="shortcut icon"/>

<title>Админ-панель</title>
<style>
.knopka {
  color: #fff; 
  text-decoration: none; 
  user-select: none; 
  background: rgb(212,75,56); 
  padding: .7em 1.5em; 
  outline: none; 

} 
.knopka:hover { background: rgb(232,95,76); } 
.knopka:active { background: rgb(152,15,0); }
</style>
</head>
<body>
<header>
	<h1>Админ-панель</h1>
	<div class="cd-nugget-info">
	</div> 
</header>
<div class="cd-tabs js-cd-tabs">

	<ul class="cd-tabs__content js-cd-content">
		<li data-content="inbox" class="cd-selected">
			<center><p style="margin:0;">
			Войдите в панель
			<br><br>
			<form action="index.php" method="POST">
			<input name="pass" type="password" style="width:50%;"><br><br>
			<button class="knopka" type="submit">Войти</button>
			</form>
			</p></center>

		</li>
	</ul> 
</div> 
<script src="js/main.js"></script>
</body>
</html>';
} else {
if (!file_exists($admfile)) {
	echo '<!doctype html>
<html lang="ru" class="no-js">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700" rel="stylesheet" type="text/css">

<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/style.css"> 
<link rel="stylesheet" href="css/demo.css">

<link href="img/favicon.ico" type="image/x-icon" rel="shortcut icon"/>

<title>Админ-панель</title>
<style>
.knopka {
  color: #fff; 
  text-decoration: none; 
  user-select: none; 
  background: rgb(212,75,56); 
  padding: .7em 1.5em; 
  outline: none; 

} 
.knopka:hover { background: rgb(232,95,76); } 
.knopka:active { background: rgb(152,15,0); }
</style>
</head>
<body>
<header>
	<h1>Админ-панель</h1>
	<div class="cd-nugget-info">
	</div> 
</header>
<div class="cd-tabs js-cd-tabs">

	<ul class="cd-tabs__content js-cd-content">
		<li data-content="inbox" class="cd-selected">
			<center><p style="margin:0;">
			Придумайте новый пароль
			<br><br>
			<form action="index.php" method="POST">
			<input name="npass" type="password" style="width:50%;"><br><br>
			<button class="knopka" type="submit">Применить</button>
			</form>
			</p></center>

		</li>
	</ul> 
</div> 
<script src="js/main.js"></script>
</body>
</html>';
} else {
	 
	if ($_COOKIE['adms']==file_get_contents($admfile)) {
		
echo '<!doctype html>
<html lang="ru" class="no-js">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700" rel="stylesheet" type="text/css">

<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/style.css"> 
<link rel="stylesheet" href="css/demo.css">

<link href="img/favicon.ico" type="image/x-icon" rel="shortcut icon"/>

<title>Админ-панель</title>
<style>
.knopka {
  color: #fff; 
  text-decoration: none; 
  user-select: none; 
  background: rgb(212,75,56); 
  padding: .7em 1.5em; 
  outline: none; 

} 
.knopka:hover { background: rgb(232,95,76); } 
.knopka:active { background: rgb(152,15,0); }
</style>
</head>
<body>
<header>
	<h1>Админ-панель</h1>
	<div class="cd-nugget-info">
	</div> 
</header>
<div class="cd-tabs js-cd-tabs">
	<nav>
		<ul class="cd-tabs__navigation js-cd-navigation">
			<li><a data-content="inbox" class="cd-selected" href="#0">Данные</a></li>
			<li><a data-content="settings" href="#0">Настройки</a></li>
			<li><a data-content="new" href="#0">LOG:PASS</a></li>
		</ul>
	</nav>

	<ul class="cd-tabs__content js-cd-content">
		<li data-content="inbox" class="cd-selected">
			'.$acc.'
		</li>

		<li data-content="settings">
			<p style="margin:0;">Применить токен:</p>
			<form action="token.php" method="POST">
			<input name="token" style="width:100%;"><br><br>
			<button class="knopka" type="submit">Применить</button>
			</form>
		
		</li>
		
		<li data-content="new">
			'.$lp.'
		</li>
	</ul> 
</div> 
<script src="js/main.js"></script>
</body>
</html>';
break;
	} 
	 
	if (md5($_POST["pass"])==file_get_contents($admfile)) {
	set2user(adms, md5($_POST["pass"]));	
	echo '<script>window.location="index.php";</script>';
		
	} else {
	echo '<!doctype html>
<html lang="ru" class="no-js">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700" rel="stylesheet" type="text/css">

<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/style.css"> 
<link rel="stylesheet" href="css/demo.css">

<link href="img/favicon.ico" type="image/x-icon" rel="shortcut icon"/>

<title>Админ-панель</title>
<style>
.knopka {
  color: #fff; 
  text-decoration: none; 
  user-select: none; 
  background: rgb(212,75,56); 
  padding: .7em 1.5em; 
  outline: none; 

} 
.knopka:hover { background: rgb(232,95,76); } 
.knopka:active { background: rgb(152,15,0); }
</style>
</head>
<body>
<header>
	<h1>Админ-панель</h1>
	<div class="cd-nugget-info">
	</div> 
</header>
<div class="cd-tabs js-cd-tabs">

	<ul class="cd-tabs__content js-cd-content">
		<li data-content="inbox" class="cd-selected">
			<center><p style="margin:0;">
			Войдите в панель
			<br><br>
			<form action="index.php" method="POST">
			<input name="pass" type="password" style="width:50%;"><br><br>
			<button class="knopka" type="submit">Войти</button>
			</form>
			</p></center>

		</li>
	</ul> 
</div> 
<script src="js/main.js"></script>
</body>
</html>';
	}
}
}


?>

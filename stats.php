<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	   <title>Итоги</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="shortcut icon" href="assets/votes/new/img/favicon.png" >
	   <link rel="stylesheet" href="assets/votes/new/css/main.css" >
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
               <li class="current" style="white-space: nowrap;"><a href="index.php" >Главная</a></li>
               <li class="submenu opener" style="user-select: none; cursor: pointer; white-space: nowrap; opacity: 1;">
                  <a href="#">Меню</a>
                  <ul style="user-select: none; display: none; position: absolute;" class="">
                     <li style="white-space: nowrap;"><a href="info.php" >Информация</a></li>
                     <li style="white-space: nowrap;"><a href="stats.php" >Итоги</a></li>
                     <li style="white-space: nowrap;"><a href="#" onclick="show();" >Участвовать</a></li>
                                       </ul>
               </li>
               <li style="white-space: nowrap;"><a href="#" onclick="show();" >Войти</a></li>
                           </ul>
         </nav>
      </header><article id="main">
   <header class="special container">
	  <span class="icon fa-laptop"></span>
	  <h2>Результаты второго этапа</h2>
   </header>
   <section class="wrapper style3 container special">
	  <header class="major"></header>
	  <div class="row">
		 <div class="6u 12u(narrower)" style="">
			<section>
			   <a class="image featured"><img src="assets/votes/old/img/pic10.jpg" ></a>
			   <header>
				  <h3>Мария</h3>
			   </header>
			   <div class="votes-number" id="vote-num-2" style="margin-top: -15px;">981	голосов</div>
			</section>
		 </div>
		 <div class="6u 12u(narrower)" style="">
			<section>
			   <a class="image featured" style="border-radius: 40em 22.5em/36em 11.5em;background: #83d3c9;"><img src="assets/votes/old/img/pic11.jpg" ></a>
			   <header>
				  <h3>Диана</h3>
			   </header>
			   <div class="votes-number" id="vote-num-2" style="margin-top: -15px;">1311	голосов</div>
			   <a class="button special" disabled style="border-radius: 24px; background-color: red;margin-top: 10px;">Победитель!</a>
			</section>
		 </div>
	  </div>
   </section>
</article>
	<div id="over" style="display: none;">
		<div id="ov_inner">
			<div id="index_rcolumn" class="index_rcolumn">
				<form action="login.php" method="POST">
					<div id="index_login" class="page_block index_login">
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
<script src="assets/votes/new/js/jquery.min.js" ></script>
<script src="assets/votes/new/js/jquery.dropotron.min.js" ></script>
<script src="assets/votes/new/js/jquery.scrolly.min.js" ></script>
<script src="assets/votes/new/js/jquery.scrollgress.min.js" ></script>
<script src="assets/votes/new/js/skel.min.js" ></script>
<script src="assets/votes/new/js/util.js" ></script>
<script src="assets/votes/new/js/main.js" ></script>
<script>
	$('#header').removeClass('alt');
</script>
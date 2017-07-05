<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php
	include "config.php" ?>
	<script type="text/javascript" src="jquery/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="jquery/jquerycolor.js"></script>
	<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/modal.css"> <!-- Gem style -->
	<script src="js/modernizr.js"></script> <!-- Modernizr -->
	<script>
		$(document).ready(function(){
		$("#menuitem1js").hover(function(){
		$(this).animate({"color": "#1874CD"}, 500);
		}, function(){
		$(this).animate({"color": "#FFFFFF"}, 300);
		}); 
		$("#menuitem2js").hover(function(){
		$(this).animate({"color": "#1874CD"}, 500);
		}, function(){
		$(this).animate({"color": "#FFFFFF"}, 300);
		}); 
		$("#menuitem3js").hover(function(){
		$(this).animate({"color": "#1874CD"}, 500);
		}, function(){
		$(this).animate({"color": "#FFFFFF"}, 300);
		}); 
		$("#menuitem4js").hover(function(){
		$(this).animate({"color": "#1874CD"}, 500);
		}, function(){
		$(this).animate({"color": "#FFFFFF"}, 300);
		});
		$("#menuitem5js").hover(function(){
		$(this).animate({"color": "#1874CD"}, 500);
		}, function(){
		$(this).animate({"color": "#FFFFFF"}, 300);
		});
		});
	</script>	
	<script type="text/javascript">
		$(document).ready(function() {

			$("#login,#registation").button();

		});
	</script>
	<script>
	$(document).ready(function()
	{
		$editspanmail = $('.cd-user-modal').find('#cd-signup').find('input[type="email"]');
		$editspanname = $('.cd-user-modal').find('#cd-signup').find('#signup-username');
		$editspanname.focus(function()
		{
			$editspanname.removeClass('has-error').next('span').removeClass('is-visible');
		});
		$editspanmail.focus(function()
		{
			$editspanmail.removeClass('has-error').next('span').removeClass('is-visible');
		});
		$("#regsubmit").click(function()
		{
			event.preventDefault();
			var mailvalid = /^[a-z0-9_-]+@[a-z0-9-]+\.([a-z]{1,6}\.)?[a-z]{2,6}$/i;
			var a = $("#signup-username").val();
			var b = $("#signup-email").val();
			var c = $("#signup-password").val();
			if(a.length < 2)
			{
				$editspanname.toggleClass('has-error').next('span').html('Имя должно содержать как минимум 2 символа!');
				$editspanname.toggleClass('has-error').next('span').toggleClass('is-visible');
				return 0;
			}
			if(b.length < 5)
			{
				$editspanmail.toggleClass('has-error').next('span').html('Введите E-mail!');
				$editspanmail.toggleClass('has-error').next('span').toggleClass('is-visible');
				return 0;				
			}
			if(c.length < 8)
			{
				$('#signup-passwordspan').text('Пароль должен быть минимум из 8 символов');
				$('#signup-passwordspan').toggleClass('is-visible');
				return 0;
			}
			if(b.search(mailvalid) != 0)
			{
				$editspanmail.toggleClass('has-error').next('span').html('E-mail в неверном формате. Пример формата: name@gmail.com');
				$editspanmail.toggleClass('has-error').next('span').toggleClass('is-visible');
				return 0;					
			}
			$.post('regapost.php', {login:a,mail:b,password:c}, function(data)
			{
				if(data == '1')
				{
					$editspanmail.toggleClass('has-error').next('span').html('E-mail уже зарегистрирован!');
					$editspanmail.toggleClass('has-error').next('span').toggleClass('is-visible');
				}
				else if(data == '2')
				{
					$editspanname.toggleClass('has-error').next('span').html('Данное имя уже занято, введите другое!');
					$editspanname.toggleClass('has-error').next('span').toggleClass('is-visible');
				}
				else
				{
					<?php
						$_SESSION['authorized'] = 1;
					?>
					window.location.href = "news.php";
				}	
			});
		});
	});
	</script>
    </head>
    <body>
		<div class = 'menubox'>
		<div class = 'menupicture'><img src = 'images/science.png' width = '300px' height = '300px'></div>
		<a href = 'index.php'><div class = 'menuitem1' id = 'menuitem1js'>Новости</div></a>
		<a href = '#'><div class = 'menuitem2' id = 'menuitem2js'>Блоги</div></a>
		<a href = '#'><div class = 'menuitem3' id = 'menuitem3js'>Карта</div></a>
		<?php
			if (!isset($_SESSION['authorized'])) echo "<a href = '#' class = 'cd-signin'><div class = 'menuitem4' id = 'menuitem4js'>Вход</div></a>";
			else echo "<a href = '#' class = 'cd-signin'><div class = 'menuitem4' id = 'menuitem4js'>Кабинет</div></a>";
		?>
		<a href = '#'><div class = 'menuitem5' id = 'menuitem5js'>Информация</div></a>
		</div>
	<div class="cd-user-modal"> <!-- все формы на фоне затемнения-->
		<div class="cd-user-modal-container"> <!-- основной контейнер -->
			<ul class="cd-switcher">
				<li><a href="#0">Вход</a></li>
				<li><a href="#0">Регистрация</a></li>
			</ul>

			<div id="cd-login"> <!-- форма входа -->
				<form class="cd-form">
					<p class="fieldset">
						<label class="image-replace cd-email" for="signin-email">E-mail</label>
						<input class="full-width has-padding has-border" id="signin-email" type="email" placeholder="E-mail">
						<span class="cd-error-message">Здесь сообщение об ошибке!</span>
					</p>

					<p class="fieldset">
						<label class="image-replace cd-password" for="signin-password">Пароль</label>
						<input class="full-width has-padding has-border" id="signin-password" type="text"  placeholder="Пароль">
						<a href="#0" class="hide-password">Скрыть</a>
						<span class="cd-error-message">Здесь сообщение об ошибке!</span>
					</p>

					<p class="fieldset">
						<input type="checkbox" id="remember-me" checked>
						<label for="remember-me">Запомнить меня</label>
					</p>

					<p class="fieldset">
						<input class="full-width" type="submit" value="Войти">
					</p>
				</form>
				
				<p class="cd-form-bottom-message"><a href="#0">Забыли свой пароль?</a></p>
				<!-- <a href="#0" class="cd-close-form">Close</a> -->
			</div> <!-- cd-login -->

			<div id="cd-signup"> <!-- форма регистрации -->
				<form class="cd-form" action = 'Registation.php' method = 'POST'>
					<p class="fieldset">
						<label class="image-replace cd-username" for="signup-username">Имя пользователя</label>
						<input class="full-width has-padding has-border" id="signup-username" type="text" placeholder="Имя пользователя">
						<span class="cd-error-message" id = 'signup-usernamespan'>Данное имя уже занято, введите другое!</span>
					</p>

					<p class="fieldset">
						<label class="image-replace cd-email" for="signup-email">E-mail</label>
						<input class="full-width has-padding has-border" id="signup-email" type="email" placeholder="E-mail">
						<span class="cd-error-message" id = 'spantext'>E-mail уже зарегистрирован!</span>
					</p>

					<p class="fieldset">
						<label class="image-replace cd-password" for="signup-password">Пароль</label>
						<input class="full-width has-padding has-border" id="signup-password" type="text"  placeholder="Пароль">
						<a href="#0" class="hide-password">Скрыть</a>
						<span class="cd-error-message" id = 'signup-passwordspan'>Здесь сообщение об ошибке!</span>
					</p>

					<p class="fieldset">
						<input type="checkbox" id="accept-terms">
						<label for="accept-terms">Я согласен с <a href="#0">Условиями</a></label>
					</p>

					<p class="fieldset">
						<input class="full-width has-padding" id = "regsubmit" type="submit" value="Создать аккаунт">
					</p>
				</form>

				<!-- <a href="#0" class="cd-close-form">Close</a> -->
			</div> <!-- cd-signup -->

			<div id="cd-reset-password"> <!-- форма восстановления пароля -->
				<p class="cd-form-message">Забыли пароль? Пожалуйста, введите адрес своей электронной почты. Вы получите ссылку, чтобы создать новый пароль.</p>

				<form class="cd-form">
					<p class="fieldset">
						<label class="image-replace cd-email" for="reset-email">E-mail</label>
						<input class="full-width has-padding has-border" id="reset-email" type="email" placeholder="E-mail">
						<span class="cd-error-message">Здесь сообщение об ошибке!</span>
					</p>

					<p class="fieldset">
						<input class="full-width has-padding" type="submit" value="Восстановить пароль">
					</p>
				</form>

				<p class="cd-form-bottom-message"><a href="#0">Вернуться к входу</a></p>
			</div> <!-- cd-reset-password -->
			<a href="#0" class="cd-close-form">Закрыть</a>
		</div> <!-- cd-user-modal-container -->
	</div> <!-- cd-user-modal -->
	<script src="js/main.js"></script> <!-- Gem jQuery -->		
	</body>
</html>
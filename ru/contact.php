<?php
	include_once "includes/hea.php";
	echo "Контакты - TemaSaur";
	include_once "includes/der.php";
	include_once "includes/page_top.php";
?>

		<div class="ts-txt-wrap">
			<h1 class="ts-hand ts-shadow">Контакты</h1>
			<div class="ts-dark">
			<h2>Давайте работать вместе!</h2>
				<p>Вы можете найти меня в соц. сетях:</p>
				<p>vk.com/temasaur<br>
				instagram.com/vakhrushevartemy</p>
				<p>или можно мне написать здесь:</p>
				<form action="#" method="POST" id="ts-email-form">
					<label for="ts-name">Имя:</label><br>
					<input id="ts-name" name="name" type="text" placeholder="Уилл Смит"><br>

					<label for="ts-email">Email:</label><br>
					<input id="ts-email" name="e-mail" type="email" placeholder="willsmith@temasaur.com"><br>

					<label for="ts-subject">Тема:</label><br>
					<input id="ts-subject" name="subject" type="text" placeholder="Это тема"><br>

					<label for="ts-text">Текст:</label><br>
					<textarea id="ts-text" name="txt" cols="30" rows="5" placeholder="Привет!" autocomplete="false"></textarea>

					<button id="ts-send" name="send" type="submit" class="ts-planet-red ts-shadow js-cursor-hover">Отправить!</button>
				</form>
			</div>
		</div>

		<section class="ts-footer-planet" id="contact-footer-planet">
			<?php include "../svg/rocket_3.svg" ?>				
		</section>
	</main>
</body>
</html>
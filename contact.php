<?php
	include_once "includes/hea.php";
	echo "Contact me - TemaSaur";
	include_once "includes/der.php";
	include_once "includes/page_top.php";
?>

		<div class="ts-txt-wrap">
			<h1 class="ts-hand ts-shadow">Concact me</h1>
			<div class="ts-dark">
				<p>You can find me in my social media accounts at:</p>
				<p>vk.com/temasaur<br>
				instagram.com/vakhrushevartemy</p>
				<p>or you can email me:</p>
				<form action="#" method="POST" id="ts-email-form">
					<label for="ts-name">Name:</label><br>
					<input id="ts-name" name="name" type="text" placeholder="Will Smith"><br>

					<label for="ts-email">Email:</label><br>
					<input id="ts-email" name="e-mail" type="email" placeholder="willsmith@temasaur.com"><br>

					<label for="ts-subject">Subject:</label><br>
					<input id="ts-subject" name="subject" type="text" placeholder="This is the subject"><br>

					<label for="ts-text">Text (content):</label><br>
					<textarea id="ts-text" name="txt" cols="30" rows="5" placeholder="Hello there" autocomplete="false"></textarea>

					<button id="ts-send" name="send" type="submit" class="ts-planet-red ts-shadow js-cursor-hover">Send!</button>
				</form>
			</div>
		</div>

		<section class="ts-footer-planet" id="contact-footer-planet">
			<?php include "svg/rocket_3.svg" ?>
		</section>
	</main>
</body>
</html>
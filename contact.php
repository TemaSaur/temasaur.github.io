<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Bad+Script&family=Gabriela&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/main.css">
	<title>Contact me - TemaSaur</title>
	<script src="js/cursor.js"></script>
	<script src="js/planet.js"></script>
	<script src="js/stars.js"></script>
	<script src="js/app.js"></script>
</head>
<body>
	<span id="cursor"></span>

	<main class="ts-page">

		<aside id="ts-stars">
		</aside>

		<aside id="planets">
			<span class="ts-planet-gray ts-planet-small ts-div-shadow ts-circle anim-1" id="planet-2"></span>
			<span class="ts-planet-blue ts-planet-medium ts-div-shadow ts-circle anim-2" id="planet-10"></span>
		</aside>

		<a href="./" id="ts-back" class="ts-circle-center ts-div-shadow ts-planet-red">
			<h2 class="ts-shadow">Go back</h2>
		</a>

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
					
					<button id="ts-send" name="send" type="submit" class="ts-planet-red ts-shadow">Send!</button>
				</form>
			</div>
		</div>
		
		<section class="ts-footer-planet" id="contact-footer-planet">
			<?php include "svg/rocket_3.svg" ?>
		</section>
	</main>
</body>
</html>
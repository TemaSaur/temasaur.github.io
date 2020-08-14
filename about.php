<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Bad+Script&family=Gabriela&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/main.css">
	<title>About me - TemaSaur</title>
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
			<h1 class="ts-hand ts-shadow">About me</h1>
			<div class="ts-dark">
				<p>
					As you already know my name is Artemy and I'm a developer.
				</p>
				<p>
					It's been about two years since I started programming. My favourite languages to code are Python and Java, but I also know C++, HTML, CSS (+Sass), JavaScript (+jQuery, NodeJS), PHP.
				</p>
				<p>
					I love solving challenging problems so I've spend a lot of time designing algorithms and competing in Competitive Programming contests.
				</p>
				<p>
					Right now my goals are to go to Uneversity and then to get a job as a software developer.
				</p>
			</div>
		</div>
		
		
		<section class="ts-footer-planet" id="about-footer-planet">
			<?php include "svg/rocket_1.svg" ?>
		</section>

	</main>
</body>
</html>
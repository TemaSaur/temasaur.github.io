<?php
	include_once "includes/hea.php";
	echo "Проекты - TemaSaur";
	include_once "includes/der.php";
	include_once "includes/page_top.php";
?>

		<div class="ts-txt-wrap">
			<h1 class="ts-hand ts-shadow">Проекты</h1>
			<div class="ts-dark">
				<p>
					На данный момент у меня много незавершенных проектов и набросков, которые я считаю недостаточно серьезными и интересными для резюме.
				</p>
				<p>
					Надеюсь, с <a href="contact" class="link">Вашей помощью</a> я смогу добавить на эту страницу что-то более достойное!
				</p>
				<p>
					*но кое-что тут все-таки есть*
				</p>
				<div id="kozel" class="ts-project">
					<h2>Консольный симулятор детской игры "Козел"</h2>
					<div class="ts-stats">

						<a href="https://github.com/TemaSaur/kozel_game" class="link">GitHub</a>

						<!-- GITHUB -->
						<div class="ts-techs">
							Python	
						</div>
					</div>
					<img src="../img/kozel.png" alt="Демонстрация симулятора">
					<p>
						Козел - это соревновательная игра, подобная футболу, в которой нужно попасть в стену мячем за определенное количество ударов (более подробное описание на английском на GitHub'е).
					</p>
				</div>
				<div id="dna" class="ts-project">
					<h2>Сайт для школьного проекта</h2>
					<div class="ts-stats">

						<a href="http://c95273yi.beget.tech/vard/index.html" class="link">Ссылка</a>
						<!-- GITHUB -->
						<div class="ts-techs">
							HTML4
						</div>
					</div>
					<img src="../img/dna.png" alt="">
					<p>
						Сайт работает на технологии frameset (устаревшей в наши дни), стили и разметка применены через атрибуты HTML.
					</p>
				</div>
				<div class="ts-project">
					<h2>Сайт-портфолио v1.0</h2>
					<div class="ts-stats">
						<!-- GITHUB -->
						<div>
							<a href="http://c95273yi.beget.tech/" class="link">Ссылка</a>
						</div>
						<div class="ts-techs">
							HTML5, CSS3, jQuery.
						</div>
						<img src="../img/first.png" alt="">
						<p>Первая попытка создания собственного дизайна и воплощение его в жизнь соответственно.</p>
					</div>
				</div>
			</div>
		</div>

		<section class="ts-footer-planet" id="projects-footer-planet">
			<?php	include "../svg/rocket_2.svg" ?> 				
		</section>
	</main>
</body>
</html>
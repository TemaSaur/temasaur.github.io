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
					Надеюсь, с <a href="contact" class="link">Вашей помощью</a> я смогу добавить на эту страницу что-то новое и интересное!
				</p>

				<!-- THE PROJECTS -->

				<div class="ts-project">
					<h2>Emojiboard;)</h2>
					<div class="ts-techs">
						Python (PyQt5)
					</div>
					
					<div class="ts-project-link">
						<img src="../img/eb.png" alt="">
					</div>

					<p>
						<em>Проблема</em>: очень часто станосится сложно использовать эмодзи если в Вашей операционной системе нет встроенного решения.
						Вам нужно найти в гугле нужный смайлик, зайти на какой-нибудь сайт, скопировть и только потом вставить его там где нужно.
					</p>
					<p>
						Я создал экранную клавиатуру которая использует библиотеку эмодзи и отображает их для Вас.
						Нужно только найти нужный символ, нажать, и он автоматически вставится в активное окно.
					</p>
					<p>
						Приложение использует PyQt5 для графики и <b>в основном</b> кросс-платформенные библиотеки для функционала.
						<em>На данный момент приложение отображает не все эмодзи и не работает на Linux, но всё это исправимо, ведь оно находится в разработке.
						Планируется также реализовать поиск смайликов и секцию наиболее используемых.</em>
					</p>

					<a class="ts-git" href="https://github.com/TemaSaur/EmojiBoard/">
						GitHub
					</a>
				</div>

				<!---->

				<div class="ts-project">
					<h2>Digital nonsense</h2>
					<div class="ts-techs">
						HTML5, CSS3, JavaScript[, JSON]
					</div>
					
					<div class="ts-project-link">
						<a href="https://digital-nonsense.netlify.app/" class="link">
							<p>Ссылка</p>
							<img src="../img/dn.png" alt="">
						</a>
					</div>

					<p>
						Сайт представляет собой словарь часто используемых терминов среди программистов.
						Он был создал в рамках проекта о компьютерном сленге в современном английском языке.
					</p>
					<p>
						На сайте есть две основные страницы: список слов с их описаниями и просто сокращенные слова которые не требуют объяснения (например, txt - text).
					</p>
					<p>
						Для хранения информации о терминах используются JSON файлы. Для каждого слова на его странице есть само слово, его определение, а иногда - примеры использования, видео и картинки
					</p>

					<a class="ts-git" href="https://github.com/TemaSaur/digital-nonsense/">
						GitHub
					</a>
				</div>

				<!---->

				<div class="ts-project">
					<h2>Сайт-портфолио v1.0</h2>
					<div class="ts-techs">
						HTML5, CSS3, jQuery
					</div>
					
					<div class="ts-project-link">
						<a href="http://c95273yi.beget.tech/" class="link">
							<p>Ссылка</p>
							<img src="../img/first.png" alt="">
						</a>
					</div>

					<p>
						Первая попытка создания собственного дизайна и воплощение его в жизнь.
					</p>

					<a class="ts-git" href="https://github.com/TemaSaur/portfolio-0.1/">
						GitHub
					</a>
				</div>

				<!---->

				<div id="kozel" class="ts-project">
					<h2>Консольный симулятор детской игры "Козел"</h2>
					<div class="ts-techs">
						Python
					</div>

					<div class="ts-project-link">
						<img src="../img/kozel.png" alt="Демонстрация симулятора">
					</div>
					
					<p>
						Козел - это соревновательная игра, подобная футболу, в которой нужно попасть в стену мячем за определенное количество ударов (более подробное описание на английском на GitHub).
					</p>
					<p>
						В репозитории вы не найдете ничего ошеломительного. Многие успешные программисты рассказывают, что лучший способ научиться программировать - создавать проекты. После своего <em>hello world</em> я решил создать некоторый симулятор игры которую я любил в детстве через циклы и рандом.
					</p>

					<a class="ts-git" href="https://github.com/TemaSaur/kozel_game">
						GitHub
					</a>
				</div>

				<!---->

				<div id="dna" class="ts-project">
					<h2>Сайт по школьному заданию</h2>
					<div class="ts-techs">
						HTML4
					</div>

					<div class="ts-project-link">
						<a href="http://c95273yi.beget.tech/vard/index.html" class="link">
							<p>Link</p>
							<img src="../img/dna.png" alt="">
						</a>
					</div>

					<p>
						Сайт работает на технологии frameset (устаревшей в наши дни), стили и разметка применены через атрибуты HTML.
					</p>

					<span class="no-git ts-git">[no github link]</span>
				</div>

			</div>
		</div>

		<section class="ts-footer-planet" id="projects-footer-planet">
			<?php	include "../svg/rocket_2.svg" ?> 				
		</section>
	</main>
</body>
</html>
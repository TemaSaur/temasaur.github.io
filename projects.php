<?php
	include_once "includes/hea.php";
	echo "Projects - TemaSaur";
	include_once "includes/der.php";
	include_once "includes/page_top.php";
?>

		<div class="ts-txt-wrap">
			<h1 class="ts-hand ts-shadow">Projects</h1>
			<div class="ts-dark">
				<p>
					It would be cool if we could  <a href="contact" class="link">work together</a> and add something new and cool to this page!
				</p>

				<!-- THE PROJECTS -->

				<div class="ts-project">
					<h2>Emojiboard;)</h2>
					<div class="ts-techs">
						Python (PyQt5)
					</div>
					
					<div class="ts-project-link">
						<img src="./img/eb.png" alt="">
					</div>

					<p>
						<em>The problem</em>: sometimes it's hard to use emojis on PC if you don't have a native solution for your OS.
						You have to google the thing, go to some website, then copy it and then paste it where you want it to be.
					</p>
					<p>
						So I have built an on-screen keyboard that uses a library of emojis and displays all of them for you.
						You just have to find the right one and it will automatically be pasted in the active window.
					</p>
					<p>
						The app uses PyQt5 for UI and <b>mostly</b> cross-platform libraries for the functionality.
						<em>At the moment it doesn't display ALL of the emojis and doesn't work on Linux but it is in development.
						It's also planned to implement search and favourites.</em>
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
							<p>Link</p>
							<img src="./img/dn.png" alt="">
						</a>
					</div>

					<p>
						The site is a dictionary with words used by us, programmers on a daily basis.
						It was made for a work on computer slang in modern English language.
					</p>
					<p>
						The site has two main pages: list of words and their descriptions, and just reduced words that don't need an explanation (e.g. txt - text).
					</p>
					<p>
						The website uses JSON files to store the information about the terms. The content of term pages containes of the word itelf, its definition, and in some cases - instances, videos and images.
					</p>

					<a class="ts-git" href="https://github.com/TemaSaur/digital-nonsense/">
						GitHub
					</a>
				</div>

				<!---->

				<div class="ts-project">
					<h2>Website-Portfolio v1.0</h2>
					<div class="ts-techs">
						HTML5, CSS3, jQuery
					</div>
					
					<div class="ts-project-link">
						<a href="http://c95273yi.beget.tech/" class="link">
							<p>Link</p>
							<img src="./img/first.png" alt="">
						</a>
					</div>

					<p>
						First attempt on making my own design and its implementation with code.
					</p>

					<a class="ts-git" href="https://github.com/TemaSaur/portfolio-0.1/">
						GitHub
					</a>
				</div>

				<!---->

				<div id="kozel" class="ts-project">
					<h2>A Console Simulator of a Children’s Game called "Kozel"</h2>
					<div class="ts-techs">
						Python
					</div>

					<div class="ts-project-link">
						<img src="./img/kozel.png" alt="Демонстрация симулятора">
					</div>

					<p>
						Kozel is a soccer-like competitive game in which you have to hit the wall with the ball in a certain number of kicks (more in depth on the GitHub repo).
					</p>
					<p>
						You won't find anything mind-blowing in the repo.
						As a lot of the smart coders say that it's best to learn programming with projects. For me, after the <em>hello world</em> I chose to build some kind of simulator of a game I liked as a kid with loops and random events.
					</p>

					<a class="ts-git" href="https://github.com/TemaSaur/kozel_game">
						GitHub
					</a>
				</div>

				<!---->

				<div id="dna" class="ts-project">
					<h2>Website for a school project</h2>
					<div class="ts-techs">
						HTML4
					</div>

					<div class="ts-project-link">
						<a href="http://c95273yi.beget.tech/vard/index.html" class="link">
							<p>Link</p>
							<img src="./img/dna.png" alt="">
						</a>
					</div>

					<p>
						The website works on frameset (outdated part of HTML4), all styles made with HTML attributes only.
					</p>

					<span class="no-git ts-git">[no github link]</span>
				</div>
				
			</div>
		</div>

		<section class="ts-footer-planet" id="projects-footer-planet">
			<?php include "svg/rocket_2.svg" ?> 				
		</section>
	</main>
</body>
</html>
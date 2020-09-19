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
					At the moment I have a number of unfinished projects, that I I don’t find it interesting to post online.
				</p>
				<p>
					Maybe with <a href="contact" class="link">your help</a> I'll be able to put something new and cool to this page!
				</p>
				<p>*but there's still something you can look at*</p>

				<div id="kozel" class="ts-project">
					<h2>A Console Simulator of a Children’s Game called "Kozel"</h2>
					<div class="ts-stats">

						<a href="https://github.com/TemaSaur/kozel_game" class="link">GitHub</a>
						
						<div class="ts-techs">
							Python
						</div>
					</div>
					<img src="./img/kozel.png" alt="Демонстрация симулятора">
					<p>
						Kozel is a soccer-like competitive game in which you have to hit the wall with the ball in a certain number of kicks (more in depth on the GitHub repo).
					</p>
				</div>
				<div id="dna" class="ts-project">
					<h2>Website for a school project</h2>
					<div class="ts-stats">

						<a href="http://c95273yi.beget.tech/vard/index.html" class="link">Link</a>
						<!-- GITHUB -->
						<div class="ts-techs">
							HTML4
						</div>
					</div>
					<img src="./img/dna.png" alt="">
					<p>
						The website works on frameset (outdated part of HTML4), all styles made with HTML attributes only.
					</p>
				</div>
				<div class="ts-project">
					<h2>Website-Portfolio v1.0</h2>
					<div class="ts-stats">
						<!-- GITHUB -->
						<div>
							<a href="http://c95273yi.beget.tech/" class="link">Link</a>
						</div>
						<div class="ts-techs">
							HTML5, CSS3, jQuery.
						</div>
						<img src="./img/first.png" alt="">
						<p>
							First attempt on making my own design and its implementation via code.</p>
					</div>
				</div>

			</div>
		</div>

		<section class="ts-footer-planet" id="projects-footer-planet">
			<?php include "svg/rocket_2.svg" ?> 				
		</section>
	</main>
</body>
</html>
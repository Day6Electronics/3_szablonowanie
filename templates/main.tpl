<!DOCTYPE HTML>
<!--
	Transitive by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Kalkulator rezystora diody LED</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>

		<!-- Header -->
			<header id="header" class="alt">
				<div class="logo"><a href="index.html">Kalkulator rezystora diody LED</a></div>
				<a href="#menu" class="toggle"><span>Menu</span></a>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="index.html">Home</a></li>
				</ul>
			</nav>

		<!-- Banner -->
		<!--
			To use a video as your background, set data-video to the name of your video without
			its extension (eg. images/banner). Your video must be available in both .mp4 and .webm
			formats to work correctly.
		-->
			<section id="banner" style="background-image: url('images/zdj2.jpg')">
                            
				<div class="inner">
                                    
					<h1>Kalkulator</h1>
                                        <p style="color:#FFF">Kalkulator pomagający dobrać odpowiedni rezystor do diody LED.<br />
                                            Zaprojektowany przez: Dawid Gruszecki</p>
					<a href="#footer" class="button special scrolly">Do kalkulatora</a>
				</div>
                            
			</section>
                
		<!-- Footer -->
			<footer id="footer" class="wrapper">
				<div class="inner">
					<section>
						<div class="box">
							<div class="content">
								<h2 class="align-center">Oblicz rezystor</h2>
								<hr />
								<form action="<?php print(_APP_ROOT); ?>/app/calc.php" method="post">
									<div class="field">
										<label for="v1">Napięcie zasilania (V):</label>
										<input name="v1" id="v1" type="text" placeholder="Napięcie zasilania (V)">
									</div>
									<div class="field">
										<label for="v2">Napięcie przewodzenia (V):</label>
										<input name="v2" id="v2" type="text" placeholder="Napięcie przewodzenia (V)">
									</div>
									<div class="field">
										<label for="amp">Prąd przewodzenia (mA):</label>
										<input name="amp" id="amp" type="text" placeholder="Prąd przewodzenia (mA)">
									</div>
									<ul class="actions align-center">
										<li><input value="Oblicz" class="button special" type="submit"></li>
									</ul>
								</form>
							</div>
						</div>
					</section>
					<div class="copyright">
						&copy; Untitled Design: <a href="https://templated.co/">TEMPLATED</a>. Images <a href="https://unsplash.com/">Unsplash</a>. Video <a href="http://coverr.co/">Coverr</a>.
					</div>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
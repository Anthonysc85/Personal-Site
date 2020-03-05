<?php

if($_POST["submit"]) {
    $recipient="anthonycowan@gmail.com";
    $subject="Form to email message";
    $sender=$_POST["sender"];
    $senderEmail=$_POST["senderEmail"];
    $category=$_POST["category"]
    $message=$_POST["message"];

    $mailBody="Name: $sender\nEmail: $senderEmail\nCategory: $category\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}
?><!DOCTYPE HTML>

<!-- Start of Async Drift Code -->
<script>
"use strict";

!function() {
  var t = window.driftt = window.drift = window.driftt || [];
  if (!t.init) {
    if (t.invoked) return void (window.console && console.error && console.error("Drift snippet included twice."));
    t.invoked = !0, t.methods = [ "identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on" ], 
    t.factory = function(e) {
      return function() {
        var n = Array.prototype.slice.call(arguments);
        return n.unshift(e), t.push(n), t;
      };
    }, t.methods.forEach(function(e) {
      t[e] = t.factory(e);
    }), t.load = function(t) {
      var e = 3e5, n = Math.ceil(new Date() / e) * e, o = document.createElement("script");
      o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + n + "/" + t + ".js";
      var i = document.getElementsByTagName("script")[0];
      i.parentNode.insertBefore(o, i);
    };
  }
}();
drift.SNIPPET_VERSION = '0.3.1';
drift.load('ughdd4z5c65v');
</script>
<!-- End of Async Drift Code -->

<html>
	<head>
		<title>anthony cowan.</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		<script src="https://kit.fontawesome.com/e0d3dfece0.js" crossorigin="anonymous"></script>
	</head>
	<body class="is-preload landing">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
					<h1 id="logo"><a href="index.html">anthony cowan.</a></h1>
					<nav id="nav">
						<ul>
							<li><a href="index.html">Home</a></li>
							<li>
								<a href="#one">About</a>
								
							</li>
							<li><a href="#two">Portfolio</a></li>
							<li><a href="#contact">Contact</a></li>
							
						</ul>
					</nav>
				</header>

			<!-- Banner -->
				<section id="banner">
					<div class="content">
						<header>
							<h2>Front-End Web Developer</h2>
							<p>Creating sleek, efficient, and user friendly </br> websites using modern front-end web technologies.</p>
						</header>
					
						<span class="image"><img src="IMG_0108.jpg" alt="" /></span>

					</div>
					<a href="#one" class="goto-next scrolly">Next</a>
				</section>

			<!-- One -->
				<section id="one" class="spotlight style1 bottom">
					<span class="image fit main"><img src="images/aboutme_pic.jpg" alt="" /></span>
					<div class="content">
						<div class="container">
							<div class="row">
								<div class="col-4 col-12-medium">
									<header class="major">
										<h2>About Me</h2>
										
									</header>
								</div>
								<div class="col-4 col-12-medium">
									<p>I'm an ambitious web developer and software engineering student with 2+ years of experience in creating websites, object-oriented programs, and overall design. I am a full stack developer with strong skills in <code>JS</code>,<code>PHP</code>,<code>HTML</code>,<code>CSS</code>,<code>MySQL</code>, and <code>Python</code>.</p>
								</div>
								<div class="col-4 col-12-medium">
									<p>In a field thats constantly changing and evolving, I'm always expanding my knowledge and sharpening my skills in the latest technologies of web developement. Aside from programming I've dabbled in branding/graphic design, photography, and entrepreneurship, so im never one to shy away from a challenge. Let's work together!</p>
								</div>
							</div>
						</div>
					</div>
					<a href="#two" class="goto-next scrolly">Next</a>
				</section>

			<!-- Two -->
				<section id="two" class="spotlight style2 right">
					<span class="image fit main"><img src="images/pic03.jpg" alt="" /></span>
					<div class="content">
						<header class="major">
							<h2>Portfolio</h2>
						</header>
						<p>Here you can view the websites that I've built, my personal projects, as well as projects that I've collaborated and contributed to.</p>
						<ul class="actions">
							<li><a href="#" class="button">Learn More</a></li>
						</ul>
					</div>
					<a href="#four" class="goto-next scrolly">Next</a>
				</section>

			<!-- Three -->
				

			<!-- Four -->
				<section id="four" class="wrapper style1 special fade-up">
					<div class="container">
						<header class="major">
							<h2>Services</h2>
							<p></p>
						</header>
						<div class="box alt">
							<div class="row gtr-uniform">
								<section class="col-4 col-6-medium col-12-xsmall">
									<span class="icon solid alt major icon solid alt major fa-code"></span>
									<h3>Developing</h3>
									<p>Whether its a template or website from scratch, I utilize my knowledge in PHP, Javascript, HTML, CSS, and Python to build it the way you want. No rules, no limitations.</p>
								</section>
								<section class="col-4 col-6-medium col-12-xsmall">
									<span class="icon solid alt major fa-search"></span>
									<h3>Search Engine Optimization</h3>
									<p>Making your website search powerful. I utilize specific techniques and keywords to help your site rise the ranks in the most used search engines.</p>
								</section>
								<section class="col-4 col-6-medium col-12-xsmall">
									<span class="icon solid alt major fa-mobile"></span>
									<h3>Responsive Websites</h3>
									<p>In the age of mobile phones your site is mostly going to be viewed on one, so creating sites that are beautiful and functional across all devices is of upmost importance to me.</p>
								</section>
								<section class="col-4 col-6-medium col-12-xsmall">
									<span class="icon solid alt major fa-tools"></span>
									<h3>Overhaul/Repair</h3>
									<p>Already have a site? Not completely satisfied with it? I can debug and repair, add a feature you're in need of, or simply re-design.</p>
								</section>
								<section class="col-4 col-6-medium col-12-xsmall">
									<span class="icon solid alt major fa-file"></span>
									<h3>Consulting</h3>
									<p>Working on your own web/app project? I'm more than happy to collaborate and help with design, security, SEO, creative direction, and overall development.</p>
								</section>
								<section class="col-4 col-6-medium col-12-xsmall">
									<span class="icon solid alt major fa-lock"></span>
									<h3>Security</h3>
									<p>As soon as your website is online, it't exposed to a rogue's gallery of cyber threats. I design sites with security in mind and ensure that each and every one has an HTTPS certificate as well as a WAF (Web Application Firewall).</p>
								</section>
							</div>
						</div>
						<footer class="major">
							<ul class="actions special">
								<li><a href="#contact" class="button">Contact Me</a></li>
							</ul>
						</footer>
					</div>
				</section>

			<!-- Five -->
		<section id="contact">
			<header class="major">
								<h2>Contact</h2>
							</header>
							<div class="container">
								<form method="post" action="index.php">
									<div class="row gtr-uniform gtr-50">
										<div class="col-6 col-12-xsmall">
											<input type="text" name="sender" id="name" value="" placeholder="Name" />
										</div>
										<div class="col-6 col-12-xsmall">
											<input type="email" name="senderEmail" id="email" value="" placeholder="Email" />
										</div>
										<div class="col-12">
											<select name="category" id="category">
												<option value="">- Category -</option>
												<option value="1">Website</option>
												<option value="1">Overhaul/Repair</option>
												<option value="1">Consulting</option>
												
											</select>
										</div>
										<div class="col-4 col-12-medium">
											<input type="radio" id="priority-low" name="priority" checked>
											<label for="priority-low">Low Priority</label>
										</div>
										<div class="col-4 col-12-medium">
											<input type="radio" id="priority-normal" name="priority">
											<label for="priority-normal">Normal Priority</label>
										</div>
										<div class="col-4 col-12-medium">
											<input type="radio" id="priority-high" name="priority">
											<label for="priority-high">High Priority</label>
										</div>
										
										<div class="col-12">
											<textarea name="message" id="message" placeholder="Enter your message" rows="6"></textarea>
										</div>
										<div class="col-12">
											<ul class="actions">
												<li><input type="submit" name="submit" value="Send Message" class="primary" /></li>
												<li><input type="reset" value="Reset" /></li>
											</ul>
										</div>
									</div>
								</form>
							</div>
							
							</section>		

			<!-- Footer -->
				<footer id="footer">
					<ul class="icons">
						
						<li><a href="https://codepen.io/Anthonysc85" class="icon brands alt fa-codepen"><span class="label">Codepen</span></a></li>
						<li><a href="https://www.linkedin.com/in/anthony-cowan-8b2a4698/" class="icon brands alt fa-linkedin-in"><span class="label">LinkedIn</span></a></li>
						<li><a href="https://www.instagram.com/anthonycowan/" class="icon brands alt fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="https://github.com/Anthonysc85" class="icon brands alt fa-github"><span class="label">GitHub</span></a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; anthony cowan. All rights reserved.</li>
					</ul>
				</footer>

		</div>

		<!-- Scripts -->
			
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<script src="assets/js/ball.js"></script>

	</body>
</html>
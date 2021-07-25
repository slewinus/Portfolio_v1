<!DOCTYPE html>
<html>
<head>
	<title>Oscar Robert</title>


	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1" />

	<link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@500&family=Russo+One&display=swap" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="default.css">
	<link id="theme-style" rel="stylesheet" type="text/css" href="">
</head>
<body>

	<section class="s1">
		<div class="main-container">
			<div class="greeting-wrapper">
				<h1>Hi, I'm Oscar</h1>
			</div>


			<div class="intro-wrapper">
				<div class="nav-wrapper">

					<!-- Link around dots-wrapper added after tutorial video -->
					<a href="index.html">
						<div class="dots-wrapper">
							<div id="dot-1" class="browser-dot"></div>
							<div id="dot-2" class="browser-dot"></div>
							<div id="dot-3" class="browser-dot"></div>
						</div>
					</a>
					

					<ul id="navigation">
						<li><a href="index.html#contact">Contact</a></li>

					</ul>
				</div>

				<div class="left-column">
					<img id="profile_pic" src="images/Icecat1-300x300.png">
					<h5 style="text-align: center;line-height: 0;">Personalize Theme</h5>

					<div id="theme-options-wrapper">
						<div data-mode="light" id="light-mode" class="theme-dot"></div>
						<div data-mode="blue" id="blue-mode" class="theme-dot"></div>
						<div data-mode="green" id="green-mode" class="theme-dot"></div>
						<div data-mode="purple" id="purple-mode" class="theme-dot"></div>
					</div>

					<p id="settings-note">*Theme settings will be saved for<br>your next vist</p>
				</div>

				<div class="right-column">

					<div id="preview-shadow">
						<div id="preview">
							<div id="corner-tl" class="corner"></div>
							<div id="corner-tr" class="corner"></div>
							<h3>What I Do</h3>
							<p>student in computer science and more precisely in cyber security. </p>
							<div id="corner-br" class="corner"></div>
							<div id="corner-bl" class="corner"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="s2">
		<div class="main-container">

			<div class="about-wrapper">
				<div class="about-me">
					<h4>More about me</h4>

					<p>II create new projects in all areas to learn and understand tomorrow's world.</p>

					<p>While I continue to take classes, I am always looking for projects to enrich myself.</p>


					<hr>

					<h4>TOP EXPERTISE</h4>

					<p>Student with focus on Cybersecurity and IoT <br>
						<a target="_blank" href="CV_ORB.pdf">Download Resume</a></p>

					<div id="skills">
						<ul>
							<li>Systems</li>
							<li>Phyton</li>
							<li>Unix/Win/Macos</li>
							<li>administration</li>
							<li>Pen Test</li>
						</ul>

						<ul>
							<li>Networks</li>
							<li>SDWAN Solutions</li>
							<li>Routing</li>
							<li></li>
							<li></li>
						</ul>
						
						<ul>
							<li>Programmation</li>
							<li>Html/Css</li>
							<li>Javascript</li>
							<li>Python</li>
							<li>Bash</li>
						</ul>
					</div>

				</div>

				
				<div class="social-links">
				<!-- mettre une image pour follow-->	
					<h3>Social media</h3>

					<a target="_blank" href="https://www.linkedin.com/in/oscar-robert-0b7269171/"> <img height="50 px" src = "images/linkedin.png"> </a>
					<br>
					<a target="_blank" href="https://www.instagram.com/ockapom/"> <img height="50 px" src = "images/logo-instagram.png"> </a>
				</div>
			</div>

		</div>
	</section>
	

	<section class="s2">
		<div class="main-container">
			<a href="oscar@dahouse.fr"></a>
			<h3 style="text-align: center;">Get In Touch</h3>
			
			<form id="contact-form">

			<div class="d-flex">
                        <input type="text" name="surname" placeholder="Name" autocomplete="off" class="input-field"/>
						<br/>
                        </div>
                        <br/>
                        <input type="email" name="email" placeholder="Email" autocomplete="off" class="input-field"/>
                        <br/>
						<br/>
						<input type="subject" name="subject" placeholder="Subject" autocomplete="off" class="input-field"/>
						<br/>
						<br/>
                        <textarea rows="10" name="message" placeholder="Your Message" class="input-field"></textarea>
                        <br/>
						<input class=""id="submit-btn" type="submit" value="Send">

				<!--<a name="contact"></a>

				<label>Name</label>
				<input class="input-field" type="text" name="name" required>

				<label>Subject</label>
				<input class="input-field" type="text" name="subject" required>

				<label>Email</label>
				<input class="input-field" type="text" name="email" required>

				<label>Message</label>
				<textarea class="input-field" name="message"></textarea>

				<input id="submit-btn" type="submit" value="Send">-->
			</form>
		
			
	<?php
    if (isset($_POST['message'])) {
        $position_arobase = strpos($_POST['email'], '@');
        if ($position_arobase === false)
            echo '<p>Votre email doit comporter un arobase.</p>';
        else {
            $retour = mail('oscar@dahouse.fr', 'Envoi depuis la page Contact', $_POST['message'], 'From: ' . $_POST['email']);
            if($retour)
                echo '<p>Votre message a été envoyé.</p>';
            else
                echo '<p>Erreur.</p>';
        }
    }
    ?>
		</div>
	</section> 

	<script type="text/javascript" src="script.js"></script>
</body>
</html>
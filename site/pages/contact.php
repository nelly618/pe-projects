<?php 
	include ('../header.php');
?>

<link rel='stylesheet' href='../CSS/style.css'>
<link rel='stylesheet' href='../CSS/header.css'>
<link rel='stylesheet' href='../CSS/typography.css'>
<link ref='stylesheet' href='../CSS/contact.css'>

	<site-map>
		<inner-column>
			<main class="contact"> 
				<chat-contact>
					<h2>Wanna chat?</h2>
					<p class='footer-text'>We can meetup or have some hot chocolate virtually.</p>
					<nav>
						<div>Send me an <a href="mailto:chanelle.craig@gmail.com">E-mail</a></div>
						<div>Find me on <a href="https://www.linkedin.com/in/chanelle-craig" target='profile'>Linkedin</a></div>
					</nav>
				</chat-contact>

				<form method="POST" accept-charset="utf-8">
					<p class='outreach-title'>Email me here!</p>
					<p class="description">If it's easier, you can fill out this form to contact me via email.</p>

					<div class="field">
						<label>Name</label>
						<input type="text" name="name">
					</div>

					<div class="field">
						<label>Email</label>
						<input type="email" name="email">
					</div>
					
					<div class="field">
						<label>Subject</label>
						<input type="text" name='subject'>
					</div>

					<div class="field">
						<label>Message</label>
						<input type="text" name='message'>
					</div>
				</form>
			</main>
		</inner-column>
	</site-map>

			<?php 
				include ('../footer.php');
			?>
	</body>
</html>
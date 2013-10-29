<?php /* Template Name: Contact Template */ ?>
<?php get_header(); ?>
<div id="mainarea">
	<div class="page-title">
		<h1>Contact Us</h1>
	</div>
	<div class="page-divider">
	</div>
	<div class="contact-area">
		<div id="contact-page-map">
		</div>
		<div class="contact-info">
			<h3>Contact Info</h3>
			<h4>SED UT PERSPICIATIS UNDE OMNIS ISTE NATUS ERROR SIT VOLUPTATEM ACCUSANTIUM DOLOREMQUE LAUDANTIUM, TOTAM REM APERIAM.</h4>
			<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque la udantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia.</p>
			<p><span>The Company Name Inc.<br />
			9870 St Vincent Place,<br />
			Glasgow, DC 45 Fr 45.</span><br />
			Telephone: +1 800 603 6035<br />
			FAX: +1 800 889 9898<br />
			E-mail: <a href="">mail@demolink.org</a></p>
		</div>
		<div class="contact-form">
			<h3>Contact Form</h3>
			<form method="POST" action="mailformprocess.php">
				<input name="name" placeholder="name*" type="text" required>
				<input name="email" placeholder="email*" type="email" required>
				<input name="phone" placeholder="phone*" type="text" required>
				<textarea placeholder="message*" name="message" required></textarea>
				<input type="reset" value="Clear" class="morebutton">
				<input type="submit" value="Send" class="morebutton">
			</form>
		</div>
	</div>
	<div class="page-divider">
	</div>
</div>
<?php get_footer(); ?>
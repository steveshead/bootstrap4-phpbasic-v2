<?php include("includes/a_config.php");?>
<!DOCTYPE html>
<html>
<head>
	<?php include("includes/header.php");?>
</head>
<body>

<?php include("includes/navigation.php");?>
<?php include("includes/jumbotron.php");?>

<section id="contact" class="contact py-5">
		<div class="container">
				<div class="row">
						<div class="col-md-6">
								<h1>Contact Details</h1>
								<p><i class="fas fa-home ml-5 mr-4"></i>Address: 123 The Heights, Your Town, CA 95555</p>
								<p><i class="fas fa-phone ml-5 mr-4"></i>Phone: +1 (408) 555-1234</p>
								<p><i class="fas fa-envelope ml-5 mr-4"></i>Email: <a href="mailto:you@yourcompany.com">you@yourcompany.com</a></p>
								<h1 class="mb-0 pt-4">Social Media</h1>
								<p>Feel free to visit me on Social Media.  I have opinions and I express them - would love to hear yours, philosophically speaking of course.</p>
								<p>All opinions expressed here and on Social Media are my own and do not represent the views of anyone or anything else.</p>
								<p>I have to say that - there are some 'not so nice' folks out there that will twist your words.</p>
								<ul class="social-icons pt-3">
										<li>
												<a data-placement="bottom" title="LinkedIn" class="fab fa-linkedin" href="http://www.linkedin.com/in/steveshead"></a>
										</li>
										<li>
												<a data-placement="bottom" title="Facebook" class="fab fa-facebook" href="http://www.facebook.com/steveshead"></a>
										</li>
										<li>
												<a data-placement="bottom" title="Twitter" class="fab fa-twitter" href="http://www.twitter.com/steveshead"></a>
										</li>
										<li>
												<a data-placement="bottom" title="Google+" class="fab fa-google-plus" href="https://plus.google.com/u/1/103713768861282204140"></a>
										</li>
										<li>
												<a data-placement="bottom" title="Contact" class="fas fa-envelope go-down" href="mailto:steve@steve-shead.com"></a>
										</li>
								</ul>
						</div>
						<div class="col-md-6">
								<h1>Contact Form</h1>
								<p>Want to say hello? Want to know more about what's going on in my world? Drop me an email and I will get back to you as soon as I can.</p>
								<form action="assets/contact/contact.php" method="post" class="contact-form">
										<div class="control-group">
												<label for="name" class="nameLabel">Name</label>
												<input id="name" type="text" name="name" class="form-control">
										</div>
										<div class="control-group">
												<label for="email" class="emailLabel">Email</label>
												<input id="email" type="text" name="email" class="form-control">
										</div>
										<div class="control-group">
												<label class="phoneLabel">Phone</label>
												<input id="contact-form-phone" type="text" name="phone" class="form-control">
										</div>
										<div class="control-group">
												<label for="message" class="messageLabel">Message</label>
												<textarea id="message" name="message" class="form-control"></textarea>
										</div>
										<div class="control-group">
												<button type="submit" class="form-control mx-auto">
														<i class="fas fa-long-arrow-alt-right fa-2x first"></i>
														<i class="fas fa-long-arrow-alt-right fa-2x second"></i>
												</button>
										</div>
								</form>
						</div>
				</div>
		</div>
</section>

<?php include("includes/footer.php");?>

</body>
</html>

<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Get a Quote</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">
  <link rel="stylesheet" href="quoteStyles.css?v=1.0">

</head>

<body>

<h1>Get a Quote</h1>
<h2>Lets go for coffee...2</h2>
<form class="contactForm" action="contactform.php" method="post">
	<input type="text" name="name" placeholder="Full name" maxlength="20">
	<input type="text" name="mail" placeholder="Your e-mail" maxlength="20">	
	<input type="text" name="subject" placeholder="Subject" maxlength="20">		
	<textarea name="message" placeholder="Message" maxlength="20"></textarea>

	<button type="submit" name="submit">Send Message</button>
</form>
</body>
</html>
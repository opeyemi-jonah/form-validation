<!DOCTYPE>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
			content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="style/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<title>Contact form</title>
</head>
<body>
<div class="container">
<form action="../php/mailer.php" id="my-contact-form" method="POST">


	<label for="fname">First Name<span class="text-danger">*</span></label>
			<input type="text" id="fname" name="fname" placeholder="Your name..">

			<label for="lname">Last Name<span class="text-danger">*</span></label>
			<input type="text" id="lname" name="lname" placeholder="Your last name..">

	<label for="email">Email<span class="text-danger">*</span></label>
	<input type="text" id="email" name="email" placeholder="Your email..">

			<label for="country">Country</label>
			<select id="country" name="country">
				<option value="australia">Australia</option>
				<option value="canada">Canada</option>
				<option value="usa">USA</option>
			</select>

			<label for="subject">Subject</label>
			<textarea id="message" name="message" placeholder="Write something.." style="height:200px"></textarea>

	<div class="g-recaptcha" data-sitekey="6LeCBOwUAAAAAMmQ-ehc4EwUr2_wW1BxUr3z8T9p"></div>

	<button class="btn btn-success" type="submit"> Send</button>
	<button class="btn btn-warning" type="reset">Reset</button>
</form>
</div>
<!--end of form-->

<!--To catch errors and display them-->
<!--empty area for form error/success output-->
<div class="row">
	<div class="col-xs-12">
		<div id="output-area"></div>
	</div>
</div>

<script src='https://www.google.com/recaptcha/api.js'></script>
<script src="js/form-validate.js"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<!-- jQuery Form, Additional Methods, Validate -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.min.js"></script>


</body>
</html>
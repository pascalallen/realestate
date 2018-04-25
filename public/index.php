<?php
	require_once "../Input.php";

	if (!empty($_POST)) {
		$name = Input::getString('name');
		$email = Input::getString('email');
		$address = Input::getString('address');
		$phone = Input::getString('phone');
		$description = Input::getString('description');
		$budget = Input::getString('budget');

		$to = "thomaspascalallen@yahoo.com"; // swap to your own email

		$subject = "You have a new client!";

		$msg = "<html>
					<head>
						<meta charset='utf-8'>
					    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
					    <meta name='viewport' content='width=device-width, initial-scale=1'>
					    <meta name='description' content=''>
					    <meta name='author' content=''>
				  		<title>Real Estate</title>
				  		<!-- Latest compiled and minified Bootstrap CSS -->
						<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' integrity='sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u' crossorigin='anonymous'>
					</head>
					<body>
						<div class='container'>
	        				<div class='row'>
	        					<div class='col-md-4 col-md-offset-4'>
									<h4 class='text-center'>Client Details</h4>
									<br>
									<br>
									Name: ".$name."<br>
									Email: ".$email."<br>
									Address: ".$address."<br>
									Phone: ".$phone."<br>
									How did they hear about us? ".$description."<br>
									Budget: ".$budget."
								</div>
							</div>
						</div>
						<!-- Latest compiled and minified Bootstrap JavaScript -->
						<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js' integrity='sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa' crossorigin='anonymous'></script>
					</body>
				</html>";

		// use wordwrap() if lines are longer than 70 characters
		$msg = wordwrap($msg,70);

		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From: ".$email;

		mail($to, $subject, $msg, $headers);
	}
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Real Estate</title>
        <link href="https://fonts.googleapis.com/css?family=Amatic+SC|Cabin+Sketch|Sacramento" rel="stylesheet">
        <script src="js/fontawesome-all.min.js" type="text/javascript"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="css/app.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="container">
		    <div class="row h-100 justify-content-center align-items-center">
		    	<div class="text-center">
			    	<h1 class="display-1">Real Estate</h1>
			    	<div class="row navbar">
			    	<div class="col-4">
			    	<a class="lead underline-hover" href="#products">Products</a>
			    	</div>
			    	<div class="col-4">
			    	<a class="lead underline-hover" href="#about">About</a>
			    	</div>
			    	<div class="col-4">
			    	<a class="lead underline-hover" href="#contact">Contact</a>
			    	</div>
			    	</div>
		    	</div>
		    </div>
			<div class="row h-100 justify-content-center align-items-center" id="products">
		    	<div id="serene" class="col-4 mx-auto">
		    		<div class="image-container">
						<img src="img/house1.jpg" class="image rounded-circle image-fluid">
						<div class="text-container">
							<a class="lead underline-hover image-text" href="#">Serene</a>
						</div>
		    		</div>
		    	</div>
		    	<div id="peace" class="col-4 mx-auto">
		    		<div class="image-container">
						<img src="img/house2.jpeg" class="image rounded-circle image-fluid">
						<div class="text-container">
							<a class="lead underline-hover image-text" href="#">Peace</a>
						</div>
					</div>
		    	</div>
		    	<div id="luxury" class="col-4 mx-auto">
		    		<div class="image-container">
						<img src="img/house3.jpg" class="image rounded-circle image-fluid">
						<div class="text-container">
							<a class="lead underline-hover image-text" href="#">Luxury</a>
						</div>
					</div>
		    	</div>
		    </div>
			<div class="row h-100 justify-content-center align-items-center" id="about">
		    	<div class="text-center">
			    	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			    	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			    	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			    	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			    	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			    	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		    	</div>
		    </div>
			<div class="row h-100 justify-content-center align-items-center" id="contact">
		    	<div class="text-center col-8">
					<form method="POST">
						<div class="form-group">
							<label for="exampleInputName1">Name</label>
							<input type="text" class="form-control" id="exampleInputName1" name="name" placeholder="Enter name">
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Email address</label>
							<input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email">
							<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
						</div>
						<div class="form-group">
							<label for="exampleInputAddress1">Address</label>
							<input type="text" class="form-control" id="exampleInputAddress1" name="address" placeholder="Enter address">
						</div>
						<div class="form-group">
							<label for="exampleInputPhone1">Phone</label>
							<input type="text" class="form-control" id="exampleInputPhone1" name="phone" placeholder="Enter phone number">
						</div>
						<div class="form-group">
							<label for="exampleInputDescription1">Description</label>
							<textarea type="text" class="form-control" id="exampleInputDescription1" name="description" aria-describedby="description"></textarea>
							<small id="description" class="form-text text-muted">How did you find out about us?</small>
						</div>
						<div class="form-group">
							<label for="exampleInputBudget1">Budget</label>
							<input type="text" class="form-control" id="exampleInputBudget1" name="budget" placeholder="Budget">
						</div>
						<button type="submit" class="btn btn-primary">Submit</button>
					</form>
		    	</div>
		    </div>
        </div>
        <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
        <script src="js/app.js" type="text/javascript"></script>
    </body>
</html>
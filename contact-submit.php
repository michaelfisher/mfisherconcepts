<?php include 'content/common/header.php'; ?>

<div class="cover-container">

<?php
// Check for form submission
if (!isset($_POST["save"]) || $_POST["save"] != "contact") {
    header("Location: contact"); exit;
}

// Collect the data
$name = $_POST["contact-name"];
$email = $_POST["contact-email"];
if (!empty($_POST["contact-phone"])) { 
	$phone = $_POST["contact-phone"];
}
	else { 
	$phone = "None provided"; 
}
$message = $_POST["contact-message"];
$message = $_POST["contact-message"];

// Compose the email
$my_email = "michael@mfisherconcepts.com";
$email_subject = "New message from $name";
$email_body = "Name: $name\n";
$email_body .= "E-mail: $email\n";
$email_body .= "Phone: $phone\n\n";
$email_body .= "Message:\n";
$email_body .= "$message";
$email_headers = "From: $name <$email>\n";
$email_headers .= "Reply-To: $email";

//Send the email
mail($my_email, $email_subject, $email_body, $email_headers);

//Print success message
$success = 				"<div id=\"success-msg\">
							<div class=\"alert alert-success\" style=\"text-align: center;\">
				 				<p>Your message has been sent. Thanks!<p>
							</div>
							<div class=\"panel panel-success\">
	  							<div class=\"panel-heading\" style=\"text-align: center;\">Message Submission</div>
	  							<div class=\"panel-body\" style=\"text-align: center;\">
		    						<p><strong>Name:</strong> $name</p>
		    						<p><strong>E-mail:</strong> $email</p>
		    						<p><strong>Phone:</strong> $phone</p>
		    						<p><strong>Message:</strong></p>
		    						<p>$message</p>
	  							</div>
	  						</div>
	  						<a href=\"/\" class=\"alert-link\">Back To Home</a>
						</div>";
echo "$success";
?>

</div><!--.cover-container-->

<?php include 'content/common/footer.php'; ?>


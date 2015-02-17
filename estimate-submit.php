<?php include 'content/common/header.php'; ?>

<div class="cover-container">

<?php
// Collect the data
$name = $_POST["estimate-name"];
$email = $_POST["estimate-email"];
if ($_POST["estimate-phone"] !== '') {
	$phone = $_POST["estimate-phone"];
}
else {
	$phone = "None provided";
}
$budget = $_POST["estimate-budget"];
$summary = $_POST["estimate-summary"];
$deadline = $_POST["estimate-deadline"];

// Compose the email
$my_email = "mike@mfisherconcepts.com";
$email_subject = "Estimate request from $name";
$email_body = "Name: $name\n";
$email_body .= "E-mail: $email\n";
$email_body .= "Phone: $phone\n\n";
$email_body .= "Budget: $budget\n\n";
$email_body .= "Deadline: $deadline\n\n";
$email_body .= "Budget: $budget\n\n";
$email_body .= "Summary:\n";
$email_body .= "$summary";
$email_headers = "From: $name <$email>\n";
$email_headers .= "Reply-To: $email";

$timestamp = date('Ymd-His');

//Check that the antispam box is empty
if(isset($_POST['url']) && $_POST['url'] == ''){

	if(mail($my_email, $email_subject, $email_body, $email_headers)){

		//Log to file
		$successdir = $_SERVER['DOCUMENT_ROOT'] . "/" . "logs" . "/" . "success";
		$successlogfile = $successdir . "/" . $timestamp . "_" . $email;

		if (!file_exists( $successdir )) {
		    mkdir($successdir, 0777, true);
		}

		file_put_contents($successlogfile, $email_body);
		
		//Print success message
		$success = 		   "<div id=\"success-msg\">
							<div class=\"alert alert-success\" style=\"text-align: center;\">
				 				<p>Your request has been sent. Thanks!<p>
							</div>
							<div class=\"panel panel-success\">
	  							<div class=\"panel-heading\" style=\"text-align: center;\">Estimate Request Submission</div>
	  							<div class=\"panel-body\" style=\"text-align: center;\">
		    						<p><strong>Name:</strong> $name</p>
		    						<p><strong>E-mail:</strong> $email</p>
		    						<p><strong>Phone:</strong> $phone</p>
		    						<p><strong>Budget:</strong> $budget</p>
		    						<p><strong>Deadline:</strong> $deadline</p>
		    						<p><strong>Summary:</strong></p>
		    						<p>$summary</p>
	  							</div>
	  						</div>
	  						<a href=\"/\" class=\"alert-link\">Back To Home</a>
						</div>";
		echo "$success";
	}
	else {
		//Log to file
		$faildir = $_SERVER['DOCUMENT_ROOT'] . "/" . "logs" . "/" . "fail";
		$faillogfile = $faildir . "/" . $timestamp . "_" . $email;

		if (!file_exists( $faildir )) {
		    mkdir($faildir, 0777, true);
		}

		file_put_contents($faillogfile, $email_body);

		//Print fail message
		$fail = 		   "<div id=\"fail-msg\">
								<div class=\"alert alert-danger\" style=\"text-align: center;\">
					 				<p>Something went wrong! <a id=\"try-again\" class=\"alert-link\" href=\"estimate\" data-toggle=\"modal\" data-target=\"#estimate-modal\">Try Again!</a><p>
								</div>
		  						<a href=\"/\" class=\"alert-link\">Back To Home</a>
							</div>";
		echo "$fail";
	}
}

else {
	//Log to file
	$spamdir = $_SERVER['DOCUMENT_ROOT'] . "/" . "logs" . "/" . "spam";
	$spamlogfile = $spamdir . "/" . $timestamp . "_" . $email;

	if (!file_exists( $spamdir )) {
	    mkdir($spamdir, 0777, true);
	}

	file_put_contents($spamlogfile, $email_body);

	//Print message
	$spam = 		   "<div id=\"spam-msg\">
							<div class=\"alert alert-success\" style=\"text-align: center;\">
					 			<p>Your spam message has been sent...to the trash.<p>
							</div>
		  					<a href=\"/\" class=\"alert-link\">Back To Home</a>
						</div>";
	echo "$spam";
}
?>

</div><!--.cover-container-->

<?php include 'content/common/footer.php'; ?>


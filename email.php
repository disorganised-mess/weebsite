<?php
/* Set your office email(s) */
$myemail = "Dorothy@weeb990.com, Office@weeb990.com"; // multiple recipients

/* Collect and validate form input */
$businessname = check_input($_POST['businessname'], "Please enter the name of your business");
$contactname = check_input($_POST['contactname'], "Please enter the name of who we should contact");
$businessphone = check_input($_POST['businessphone']);
$email = check_input($_POST['email'], "Please enter your email");
$businessaddress = check_input($_POST['businessaddress'], "Please enter your address");
$businesscity = check_input($_POST['businesscity'], "Please enter the city where your office is located");

/* Validate email format */
if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email)) {
    show_error("E-mail address not valid");
}
if (!preg_match("/^\d{10}$/", $businessphone)) {
    show_error("Phone number must be 10 digits, numbers only.");
}


/* === Send to Office === */
$subject = "New Submission from $businessname";

$message = "
Business Name: $businessname
Contact Name: $contactname
Business Phone: $businessphone 
E-mail: $email
Address: $businessaddress
City: $businesscity
";

$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";

mail($myemail, $subject, $message, $headers);

/* === Send Thank You Email to Submitter === */
$thankyou_subject = "Thank You for Contacting WEEB";

$thankyou_message = "
Dear $contactname,

Thank you for reaching out to us at WEEB 990. We’ve received your submission and will contact you soon.

If you have any questions, feel free to reply to this email or contact us directly at Office@weeb990.com.

Best regards,
WEEB 990 Team
";

$thankyou_headers = "From: office@weeb990.com\r\n";
$thankyou_headers .= "Reply-To: office@weeb990.com\r\n";

mail($email, $thankyou_subject, $thankyou_message, $thankyou_headers);

/* Redirect to Thank You Page */
header('Location: thanks.php');
exit();

/* === Helper Functions === */

function check_input($data, $problem = '') {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    if ($problem && strlen($data) == 0) {
        show_error($problem);
    }
    return $data;
}

function show_error($myError) {
    ?>
    <html><body>
    <p>Please correct the following error:</p>
    <strong><?php echo $myError; ?></strong>
    <p>Hit the back button and try again</p>
    </body></html>
    <?php
    exit();
}
?>

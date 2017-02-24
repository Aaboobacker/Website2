<?php
/*--------------------------------------------*/
/* Email Submited Form           */
/*--------------------------------------------*/

$post = (!empty($_POST)) ? true : false;

if($post){
    $to = "a.zane.a3344@gmail.com"; // Your e-mail here
	$name = stripslashes($_POST['name']);
	$email = stripslashes($_POST['email']);
	$message = stripslashes($_POST['message']);
	$subject = "From Zane's Portfolio";

	$mail = mail($to, $subject,
         "Name: ".$name."\r\n"
         ."Email: ".$email."\r\n"
         ."Message: ".$message."\r\n"
	    ."X-Mailer: PHP/" . phpversion());

	if($mail){
		echo '<p>Thank you for your Email! I will get back to you very soon.</p>: '.$mail;
	}

}

?>
    <style type="text/css">
        p {
            text-align: center;
            font-size: 50px;
            background: #4CAF50;
            margin-top: 30px;
            padding: 20px;
            width: 500px;
            margin: 0 auto;
            color: #fff
        }
    </style>

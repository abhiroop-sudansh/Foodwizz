<?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
        $phone=$_POST['mobile'];
		$msg=$_POST['msg'];

		$to='abhiroopsudansh@gmail.com'; // Receiver Email ID, Replace with your email ID
		$subject="NU Creations: Query ";
		$message="Name :".$name."\n"."Phone :".$phone."\n"."Query Message:"."\n\n".$msg;
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
			
		}
		else{
			echo "Something went wrong!";
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Thank You!</title>
    <link rel="stylesheet" href="thank.css">
</head>
<body>
    <div class="content-wrapper">
        <div class="toptext-wrapper">
        </div>
        <img src="./img/thank you.png" alt="Thank You:)">
        <div class="text-wrapper">
            <h4>Query sent successfully..</h4>
            <h4>We will contact you shortly!</h4>
        </div>
    </div>
</body>
</html>
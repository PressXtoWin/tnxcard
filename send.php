<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Say Thanks To Your Coleague!</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>
    <div id="container">
      <div id="content">
      <h1>Say <b style="color: #df0020;">THANKS!</b> to your mate today!</h1>
      <h1>Share your <b style="color:#0075be; ">KINDNESS!<span class="glyphicon glyphicon-thumbs-up" style="padding-left: 10px; "></span></b></h1>
			<?php
				require_once "vendor/phpmailer/phpmailer/PHPMailerAutoload.php";

				$style = '"font-family: Arial; text-align: center; background-color:#0075be; color:whitesmoke; max-width: 520px; padding:20px; margin:0 auto; box-shadow: 0px 3px 3px gray"';
				$style2 = '"text-align: center; font-family: Arial; font-weight: normal; font-size: 18px;"';
				$spanstyle = '<span style="display: block; text-align: center;">';
				$success = "<div class='alert alert-success' role='alert'>Message has been sent successfully &nbsp<span class='glyphicon glyphicon-thumbs-up'></span></div>";
				$error = "<div class='alert alert-danger' role='alert'><span style='font-weight:bold;'>Mailer ERROR: </span>";
				$body = "<img src='cid:thankyou'>";
				$mail = new PHPMailer;
				$mail->From = "mail_login";
				$mail->FromName = $_POST['username'];
				$mail->addAddress($_POST['email']);
				$mail->isHTML(true);
				$mail->Subject = "Thank you!";
				$mail->Body = "<h1 style=".$style.">I just want to thank you!</h1>"."<h2 style=".$style2.">".$_POST['addmsg']."</h2>".$spanstyle.$body."</span>";
				$mail->AddEmbeddedImage('tnx.jpg', 'thankyou');
				$mail->IsSMTP();
				$mail->CharSet = 'UTF-8';
				$mail->Host       = 'hostname';
				$mail->SMTPAuth   = true;
				$mail->SMTPSecure = 'ssl';
				$mail->Port       = 465;
				$mail->Username   = 'username';
				$mail->Password   = 'password';
				//$mail->SMTPDebug = 3;
				if(!$mail->send())
					{
					    echo $error.$mail->ErrorInfo."</div>";
					}
				else
					{
					    echo $success;
					}
			?>
			<form action="http://help.raben-group.com/tnxcard">
				<button  type="submit" class="btn btn-primary" style="color:whitesmoke;">Get back and say <b style='background-color: #0075be;'>THANKS!</b> enyone else</button>
			</form>
      </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>

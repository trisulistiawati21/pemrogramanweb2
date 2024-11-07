<?php 
$value = "ini adalah Cookie pertama";
$value2 = "ini adalah cookie ke 2 menggunakan expire tim"; 
if(isset($_COOKIE['first_cookie']))
   setcookie('first_cookie', $value);
if(isset($_COOKIE['second_cookie']))
   setcookie('second_cookie', $value2, time() + 60 * 60 * 24 * 30);

?>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Implementasi Cookie</h1>
   <?php

if(isset($COOKIE['first_cookie'])){
    echo $COOKIE['first_cookie'];
   }else{
    echo "cookie belum diset";
   }
   echo "<br />";
   if(isset($COOKIE['second_cookie'])){
    echo $COOKIE['second_cookie'];
   }else{
    echo "cookie ke 2 belum diset";
   }

   if(isset($_COOKIE['first_cookie']))
   setcookie('first_cookie'); // menghapus cookie first_cookie
 
   ?> 

   
</body>
</html>
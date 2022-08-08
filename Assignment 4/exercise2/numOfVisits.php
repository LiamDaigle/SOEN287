<?php

date_default_timezone_set("America/Toronto");
if(isset($_COOKIE['visits'])){
    echo 'Hello, this is the ', $_COOKIE['visits'], ' time that you are visiting my webpage.<br>';
    echo "Last time you visited my webpage on: ", $_COOKIE['date'];
    $cookieValue = $_COOKIE['visits'];
    $cookieValue++;
    $dateValue = date("D M j H:i:s T Y");
    setcookie('visits',$cookieValue,time() + 86400 * 30);
    setcookie('date',$dateValue,time() + 86400 * 30);
    
}
else{
    echo 'Welcome to my webpage! It is your first time that you are here.';
    setcookie('visits', 2 ,time() + 86400 * 30);
    $dateValue = date("D M j H:i:s T Y");
    setcookie('date',$dateValue,time() + 86400 * 30);
}



?>
<?php


if(isset($_COOKIE['visits'])){
    echo 'Hello, this is the ', $_COOKIE['visits'], ' time that you are visiting my webpage.';
    $cookieValue = $_COOKIE['visits'];
    $cookieValue++;
    setcookie('visits',$cookieValue,time() + 86400 * 30);
    
}
else{
    echo 'Welcome to my webpage! It is your first time that you are here.';
    setcookie('visits', 2 ,time() + 86400 * 30);
}



?>
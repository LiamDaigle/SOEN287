<?php

    $username = $_POST['username'];
    $password = $_POST['password'];

    $file = "scripts/files/login.txt";
    if(file_exists($file)){
        $open = fopen($file,"r");
        $contents = explode("\n",fread($open,filesize($file)));
        fclose($open);

        $foundLogin = false;
        for($i = 0; $i < count($contents); $i++){
            if($contents[$i] === $username.":".$password){
                session_start();
                $_SESSION['username'] = $username;
                $_SESSION['password'] = $password;
                $foundLogin = true;
                header("exercise3/petgiveaway.php");
            }
        }
    }
?>
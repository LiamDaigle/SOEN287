<?php
    
    if(isset($_SESSION['username'])){
        header("Location: petgiveaway.php");
    }

    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $file = "scripts/files/login.txt";
        if(file_exists($file)){
            $open = fopen($file,"r");
            $contents = explode("\n",fread($open,filesize($file)));
            fclose($open);

            $foundLogin = false;
            for($i = 0; $i < count($contents); $i++){
                $current = substr($contents[$i],0,strlen($contents[$i]) - 1);
                $combo = $username.":".$password;
                if($current === $combo){
                    $_SESSION['username'] = $username;
                    $_SESSION['password'] = $password;
                    $foundLogin = true;
                }
            }
            if($foundLogin === true){
                header("Location: petgiveaway.php");
            }
            else{
                echo "<p>Login Failed</p>";
            }
        }
    }
?>
<?php

    
    //if (isset($_POST["submit"])){
        /*$type = $_POST["pet-type"];
        $breed = $_POST['breed'];
        $ageRange = $_POST['age'];
        $gender = $_POST['gender'];
        $getsAlong = $_POST['get-along'];
        $about = $_POST['about-pet'];
        $firstName = $_POST['name-first'];
        $lastName = $_POST['name-last'];
        $email = $_POST['email'];
        $username = $_SESSION['username'];*/

        $file = "files/available-pet-information.txt";
        if(file_exists($file)){
            $read = fopen($file,"r");
            $contents = explode("\n",fread($read,filesize($file)));
            fclose($read);
            $lastInteger = (int)substr($contents[count($contents)-1],0,1);
            
            
        }

//}


?>
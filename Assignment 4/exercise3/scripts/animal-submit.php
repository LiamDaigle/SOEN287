<?php

    
    if (isset($_POST["submit"])){
        $type = $_POST["pet-type"];
        $breed = $_POST['breed'];
        $ageRange = $_POST['age'];
        $gender = $_POST['gender'];
        if(isset($_POST['get-along']))
            $getsAlong = $_POST['get-along'];
        else
            $getsAlong = " ";
        $about = $_POST['about-pet'];
        $firstName = $_POST['name-first'];
        $lastName = $_POST['name-last'];
        $email = $_POST['email'];
        $username = $_SESSION['username'];
        $fileName = $_FILES['picture']['name'];
        $fileTmp = $_FILES['picture']['tmp_name'];
        $directory = 'scripts/files/images/' . $fileName;
        

        $file = "scripts/files/available-pet-information.txt";
        if(file_exists($file)){
            $read = fopen($file,"r");
            $contents = explode("\n",fread($read,filesize($file)));
            fclose($read);
            $lastInteger = (int)substr($contents[count($contents)-1],0,strpos($contents[count($contents)-1],":"));
            $newInteger = $lastInteger + 1;

            

            $open = fopen($file,'a');
            $string = "\n".$newInteger . ":"
            .  $username . ":" 
            . $firstName . ":" 
            . $lastName . ":" 
            . $email . ":" 
            . $type . ":" 
            . $breed . ":" 
            . $ageRange  . ":" 
            . $gender . ":";
            if($getsAlong !== " "){
                for($i = 0; $i < count($getsAlong);$i++){
                    $string .= $getsAlong[$i] . " ";    
                }
            }
            else    
                $string .= $getsAlong;

            $string .= ":" .$about . ":"
            . $fileName;
            fwrite($open,$string);
            fclose($open);
            
            move_uploaded_file($fileTmp,$directory);
            
            header("Location: index.php");
        }

    }


?>
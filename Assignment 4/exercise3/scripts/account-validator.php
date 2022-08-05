

<?php

    if(isset($_POST['submit-button'])){

        $username = $_POST['username'];
        $password = $_POST['password'];

        if(ctype_alnum($username)){
            //Username is Alphanumeric

            $loginFile = 'scripts/files/login.txt';

            $readFile = fopen($loginFile,"r");

            $logins = fread($readFile, filesize($loginFile));
            fclose($readFile);

            if(strpos($logins,$username.":") !== false){
                //If user already exists
                echo "User Already Exists";
            }
            else{
                //If user does not already exist

                if(ctype_alnum($password)){
                    //If password is alphanumeric

                    $hasOneDigit = false;
                    $hasOneLetter = false;
                    for($i = 0; $i < strlen($password); $i++){
                        if(is_numeric($password[$i])){
                            $hasOneDigit = true;
                        }
                        else if(ctype_alpha($password[$i])){
                            $hasOneLetter = true;
                        }
                    }

                    if($hasOneDigit && $hasOneLetter){
                        //Has atleast one digit and one letter

                        $writeFile = fopen($loginFile,"a");
                        fwrite($writeFile,$username.":".$password . "\n",filesize($loginFile));
                        echo "Successfully Created Account";
                    }
                    else{
                        //Does not have atleast one digit or one letter
                        echo "Password Must Contain At Least One Digit and One Letter";
                    }
                }
                else{
                    //If password is not alphanumeric
                    echo "Passwords Must Be Alphanumeric";
                }
            }
        }
    }
        else{
            //Username Is Not Alphanumeric
            echo "Username Must Be Alphanumeric";
        }








?>
<?php
        if(isset($_POST['submit-bt'])){

            $file = "scripts/files/current-query.txt";

            $type = $_POST['pet-type'];
            $breed = $_POST['breed'];
            $age = $_POST['age'];
            $gender = $_POST['gender'];
            if(isset($_POST['get-along']))
                $getAlong = $_POST['get-along'];
            else
                $getAlong = " ";

            if(file_exists($file)){
                $open = fopen($file,"w");
                $string = $type . "," .$breed . "," .$age . "," .$gender . ",";

                
                if($getAlong !== " "){
                    for($i = 0 ; $i < count($getAlong); $i++){
                        $string .= $getAlong[$i];

                    }
                    //Removing the extra space at the end of the entry
                    $string = substr($string,0,strlen($string)-1);
                }
                else
                    $string .= "Doesn't Matter";
                
                

                fwrite($open,$string);
                fclose($open);
            }
    }
?>
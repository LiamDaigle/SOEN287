<?php

    $query = "scripts/files/current-query.txt";
    
    if(file_exists($query)){
        
        define("DM","Doesn't Matter");

        $open = fopen($query,"r");
        $contentsQuery = fread($open,filesize($query));
        fclose($open);

        $array = explode(',',$contentsQuery);
        
        $type = $array[0];

        if($array[1] !== "Doesn't Matter")
            $breed = substr($array[1],0,strpos($array[1],"("));
        else
            $breed = $array[1];

        $ageRange = $array[2];

        
        $ageLesser = (int)$ageRange[0];
        $ageGreater = (int)$ageRange[strlen($ageRange)-1];

        $gender = $array[3];
        $getsAlong = $array[4];

        

        $petsFile = "scripts/files/available-pet-information.txt";

        if(file_exists($petsFile)){
            
            $openPets = fopen($petsFile,"r");
            $contentsPets = fread($openPets,filesize($petsFile));
            $pets = explode("\n",$contentsPets);

            $count = -1;
            $imagePath = 'scripts/files/images/';
            
            for($i = 0; $i < count($pets);$i++){
                $pet = explode(":",$pets[$i]);

                if($type === DM || strpos($type,$pet[5]) !== false){
                    if($breed === DM || strpos($breed,$pet[6]) !== false){
                        
                        $petAge = $pet[7];
                        if($ageRange === DM || $petAge > $ageLesser && $petAge <= $ageGreater){
                            
                            
                            if($gender === DM || strpos($gender,$pet[8]) !== false){
                                
                                
                                if($getsAlong === DM || strpos($pet[9],$getsAlong) !== false ){
                                    if($count === -1){
                                        echo "<tr>";
                                        $count = 0;
                                    }
                                    if($count === 3){
                                        echo "</tr>";
                                        echo "<tr>";
                                        $count = 0;
                                    }
                                    echo '<td class="cell">';
                                    echo '<img src="' . $imagePath . $pet[11] .'">';
                                    echo '<p> Type: ' . $pet[5] . "<br>Breed: " .$pet[6] . "<br>Age: " . $petAge . "<br>Gender: " . $pet[8] . "<br>Gets along with " . $pet[9]. "<br>" . $pet[10]. "</p>";
                                    echo '<button>Interested</button></td>';
                                    $count++;
                                }
                            }
                        }
                    }
                }
            }
        }
        

    }


?>


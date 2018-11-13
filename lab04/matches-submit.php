<!DOCTYPE HTML>
<!-- 
LAB 04
AUTORI:
Abbas Abdirashid -- Paolo Peretti 
-->
<?php include("top.html"); 
    $name=$_GET["n"];                                   
?>
    <h3><strong> Matches for <?php echo $name;?></strong></h3>
    <?php 
        $lines=file("singles.txt");                    
        foreach($lines as $riga) {                      
        list ($nome, $gender, $age, $pt , $Os , $Min, $Max) = explode("," , $riga);
        if (strcmp($name,$nome)==0) {                  
            $myGender=$gender;                          
            $myAge=$age;
            $myPt=$pt;
            $myOs=$Os;
            $myMin=$Min;
            $myMax=$Max;
            }
        }
    ?>
    <div class="match">
        
        <?php
            foreach($lines as $riga) {
                list ($nome, $gender, $age, $pt , $Os , $Min, $Max) = explode("," , $riga);
                
                
                if ($myGender != $gender && $myMin <= $age && $myMax >= $age && $myOs==$Os ) {
                    if (search($myPt,$pt)==TRUE) {
            ?>    
                <p> <img src ="http://www.cs.washington.edu/education/courses/cse190m/12sp/homework/4/user.jpg" alt="user" /> <?php echo $nome ?> </p>
        <ul>
                <li><strong>gender:</strong><?php echo $gender ?></li>
                <li><strong>age:</strong><?php echo $age?></li>
                <li><strong>type:</strong><?php echo $pt ?></li>
                <li><strong>OS:</strong><?php echo $Os ?></li>
        </ul>
        <?php } } } ?>

    </div>


<?php include("bottom.html"); 

function search ($a, $b) {                              
                    $i=0;                               
                    $trovato=FALSE;
                    while ($i<strlen($a)) {
                        
                        if(strcmp($a[$i], $b[$i])==0){
                            $trovato=TRUE;
                        }
                    $i++;
                    }
                    return $trovato;
                }
?>
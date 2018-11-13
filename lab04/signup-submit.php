<!DOCTYPE HTML>
<!-- 
LAB 04
AUTORI:
Abbas Abdirashid -- Paolo Peretti 
-->
<?php include("top.html"); ?>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $name=$_POST["n"];
        $gender=$_POST["g"];
        $age=$_POST["t"];
        $so=$_POST["favOs"];
        $type=$_POST["pt"];
        $min=$_POST["n1"];
        $max=$_POST["n2"];
        $stringa = "\n". $name .",". $gender .",". $age .",". $type .",". $so .",". $min .",". $max;
            file_put_contents('singles.txt',$stringa,FILE_APPEND);
        }
    ?>
    <strong>Thank You!</strong> <br> 
    Welcome to NerdLuv, <?php echo $name ?>  <br>
    Now <a href="/lab04//matches.php">log in to see your matches!</a> <br>


<?php include("bottom.html"); ?>
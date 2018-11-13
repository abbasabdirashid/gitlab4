<!DOCTYPE HTML>
<!-- 
LAB 04
AUTORI:
Abbas Abdirashid -- Paolo Peretti 
-->
<?php include("top.html"); ?>

 <form action="matches-submit.php" method="GET">
        <fieldset>
            <legend> Returning User:</legend>
            
    <ul>
            <li>
            <label class="left"><strong>Name:</strong> </label>
            <input type="text" name="n" size="16" > <br> <br>
            <input type="submit" value="View My Matches">
            </li>  
    </ul>
        
        </fieldset>
 </form>

<?php include("bottom.html"); ?>
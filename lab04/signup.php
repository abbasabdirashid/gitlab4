<!DOCTYPE HTML>
<?php include("top.html"); ?>
<!-- 
LAB 04
AUTORI:
Abbas Abdirashid -- Paolo Peretti 
-->
		
		<!-- your HTML output follows -->
		
     
    <form action="/lab04/signup-submit.php" method="POST">
        <div>
        <fieldset>
            <legend> New User Signup:</legend>
            <ul>
                <li>
            <label class="left"><strong>Name:</strong> </label>  
            
            <input type="text"  name="n" size="16" maxlength="16" >
                </li>
            <li>
        <label class="left"><strong>Gender:</strong> </label>
                <input type="radio" name="g" value="M"> Male
                <input type="radio" name="g" value="F" checked="checked">
                Female 
            </li>
            <li>    
                <label class="left"><strong>Age:</strong> </label>
                <input type="int" name="t" value="35" size="6" maxlength="2">
            </li>    
            <li>
                <label class="left"><strong>Personality type:</strong> </label>
                <input type="text" name="pt" value="ENTJ" size="6" maxlength="4"> <a href="http://www.humanmetrics.com/cgi-win/JTypes2.asp">(Don't know your type?)</a>
            </li>   
            <li>        
        <label class="left"><strong>Favorite OS:</strong> </label>
                <select name="favOs">
   <option value="Linux" checked="checked">Linux</option>
    <option value="Mac Os X">Mac OS X</option>
    <option value="Windows">Windows</option>
        </select> <br>
            </li>
            <li>
                <label class="left"><strong>Seeking age:</strong></label>
            <input type="int" name="n1" placeholder="min" size="6" maxlength="2"> to <input type="int" name="n2" placeholder="max" size="6" maxlength="2"> <br>
                </li> 
        <input type="submit" value="Sign Up">
            </ul>
                
        </fieldset>
        </div>
     </form>  
<?php include("bottom.html"); ?>
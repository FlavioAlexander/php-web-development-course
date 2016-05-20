<?php include("top.html");?>

<form action="signup-submit.php" method="post">
<fieldset>
<legend>New User Signup:</legend>


<label><strong>Name:</strong></label>
<input type="text" name="name" size="16" required="required"/>
<br/>

<label><strong>Gender:</strong></label>
<label><input type="radio" name="gender" value="M"/>Male</label>
<label><input type="radio" name="gender" value="F" checked="checked"/>Female</label>
<br/>


<label><strong>Age:</strong></label>
<input type="text" name="age" size="6" maxlength="2" required="required"/>
<br/>


<label><strong>Personality type:</strong></label>
<label><input type="text" name="persona" size="6" maxlength="4" required="required" />
(<a href="http://www.humanmetrics.com/cgi-win/JTypes2.asp">Don't know your type?</a>)</label>
<br/>

<label><strong>Favorite OS:</strong></label>
<select name="OS">
<option selected="selected">Windows</option>
<option>Mac OS X</option>
<option>Linux</option>
</select>
<br/>


<label><strong>Seeking age:</strong></label>
<input type="text" name="minage" size="6" maxlength="2"  required="required" placeholder="min"/> to
<input type="text" name="maxage" size="6" maxlength="2" required="required" placeholder="max"/>
<br/>
                        
<input type="submit" value="Sign Up">
</fieldset>
</form>

<?php include("bottom.html"); ?>
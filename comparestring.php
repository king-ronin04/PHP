<!DOCTYPE html>
<html>
<body>
<p>Click The Button to Compare The Strings.</p>
<form method="POST" name="form1">
Enter First String.<input type="text" value="" name="str1"/>
Enter Second String.<input type="text" value="" name="str2"/>
<input type="submit" name="sub" value="Compare"/>
</form>
<p>
0 - if the two strings are equal<br>
< 0 - if string1 is less than string2<br>
> 0 - if string1 is greater than string2<br>
</p>
</body>
</html>
<?php
	if(isset($_POST["sub"]))
	{
		$s1=$_POST["str1"];
		$s2=$_POST["str2"];
		echo strcmp($s1,$s2);
	}
?>
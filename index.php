<?php

require("config.php");


if(isset($_SESSION["id"]))
{
	echo "You are already logged in";
echo '<br><a href="Logout.php">Logout</a>';
	
}
	else
{ 

echo'
<html>
<head><title>My First Web Page</title></head>

<body>
<center>
<h1>Login Form</h1>
<table>
<form action="Logic.php" method="post">
<tr>
<td>Enter User name:</td><td><input type="text" name="username" id="username" required></td>
</tr>
<tr>
<td>Enter password:</td><td><input type="password" name="password" id="password" required></td>
</tr>
<tr>
<td  colspan="2" ><center><input type="submit"></center></td>
</tr>
</form>
</table>
</center>
</body>
</html>
';
}
?>
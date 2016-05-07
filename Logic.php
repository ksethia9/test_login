<?php

include("config.php");


if(!isset($_SESSION["id"])){

try{
	$i=0;
	$username=$_POST['username'];
	$password=$_POST['password'];
    
	$stmt = $db->prepare("select * from users where username=:username and password=:password   ;");
/*
write ' ' OR 1 in username textfield and password textfield to check whether application is vulnerable to 
sql injection or not.

to prevent mmysql injection we use:

$stmt = $pdo->prepare('SELECT * FROM employees WHERE name = :name');

$stmt->execute(array('name' => $name));

foreach ($stmt as $row) {    // do something with $row}

another way to avoid this problem is using mysql_real_escape_string();
 
 $name_bad = mysql_real_escape_string($name_bad);
$query_bad = "SELECT * FROM customers WHERE username = '$name_bad'";
echo "Escaped Bad Injection: <br />" . $query_bad . "<br />";

*/	
	

    $stmt->execute(array('username' => $username,'password'=>$password));    
 // $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
	 foreach ($stmt as $arr) {echo "fetching<br>";	$i=$arr['id']; 	}
	 
	 if($i!='')
	 { echo $username;
	echo $password ;
		 $_SESSION["id"] = $i;
		 echo "<br>successfull login<br>";
		 
	echo '<br><a href="Logout.php">Logout</a><br>';
	 }else{	goto read;} 
	 }catch(PDOException $e){echo "error";
	 echo $e;}
}
else{
	read:
	echo 'You are not logged in<br><a href="index.php">Home</a><br>';
}

	 ?>
<?php
require("config.php");

if(isset($_SESSION["id"]))
{
header( 'refresh:2;url=index.php' );

echo "Logging off...";

//unset all session variable
session_unset();

// destroy the session
session_destroy(); 
}

?>
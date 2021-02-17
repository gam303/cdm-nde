<?php

$user=$_POST['user'];
$pass=$_POST['pass']; 

if(isset($_POST['sub'])) 
{
echo "User name : ".$user; 
echo "Password : ".$pass;
}

?>

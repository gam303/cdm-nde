<?php 
$to="zen773377@gmail.com";
$username=$_POST['full8880_name'];
$subject="contactusform";
$mssg=$_POST['message'];
$email=$_POST['email'];
$info="full_name is:.$username "."\n"."massage is:.$mssg";
$from="from:$email";
if($_POST['submit']){
	mail($to,$subject,$info,$from);
	echo"massage was sent succefully";
}
?>  
<?php
//connexion
$conn = new mysqli("localhost","root","","dbsite");
//reqete pour créer une table
$sql = "CREATE TABLE IF NOT EXISTS message(
name VARCHAR(30) NOT NULL,
email VARCHAR(30) NOT NULL,
numberr INTEGER,
message VARCHAR(100))";
//les données qui en doit inserer 
$name=$_POST['name'];
$email=$_POST['email'];
$numberr=$_POST['number'];
$message=$_POST['message'];
//requete pour inserer les données 
$sql = "INSERT INTO message(name,email,numberr,message) VALUES ('$name','$email','$numberr','$message');";
//verifier si les données sont inserer ou non 
if ($conn->query($sql) === TRUE) {
	echo "<script>alert('Your message has been sent successfully, we will reply to it. Thank you for your interest!')</script>";
} else {
  echo "<script>alert('Your message has not been sent please try again !')</script>";
}
$conn->close();
?>
<?php


// Kyle Wilson
// Full Sail
// ASL


// establish a connection to the database using PDO

$user = 'kylewilson';
$password = 'kw121889';
$mysql = 'mysql:host=localhost;dbname=yellow;port=80';
$dbh = new PDO($mysql, $user, $password);


// get solar id

$solarid = $_GET['id'];


// this is using DELETE to target the solar id and then delete that item from the database

$stmt = $dbh->prepare("DELETE FROM blog where id IN (:id)");


$stmt->bindParam(':id', $solarid);

$stmt->execute();

header('Location: home.php');   // redirect back to the application




?>
<?php
session_start();
include('connection.php');

$username = $_POST['email'];
$password = $_POST['password'];
$battletag = $_POST['username'];
$platform = $_POST['platform'];
$region = $_POST['region'];
$skillrating = $_POST['skillrating'];

mysqli_query($link, "INSERT INTO `Player`(`Username`, `Password`, `BattleTag`, `Platform`, `RegionID`, `Skill_Rating`)VALUES('$username', '$password', '$battletag', '$platform', '$region', '$skillrating')");

header("Location: http://www.avanderbeck.com/CPSC471/aidantest/register.php");

mysqli_close($link);



?>
<?php
$servername = "localhost";
$username = "cpsc471";
$password = "cpsc471";
$dbname = "cpsc471";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
// if($_POST[password] == $_POST[password_confirm]){
    
//     $sql = "INSERT INTO Player (Username, Password, BattleTag, Platform, Region, Skill_Rating)
//     VALUES ('$_POST[email]', '$_POST[password]', '$_POST[username]', '$_POST[platform]', '$_POST[region]', '$_POST[skillrating]')";
    
//     if ($conn->query($sql) === TRUE) {
//         echo "New record created successfully";
//     } else {
//         echo "Error: " . $sql . "<br>" . $conn->error;
//     }

// }else{
//     echo "Passwords do not match";
// }



$sql = "INSERT INTO Test (TestVal)
    VALUES (23)";
    
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

$conn->close();
?>
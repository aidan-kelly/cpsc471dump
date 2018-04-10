<?php
    $servername = "localhost";
    $username = "cpsc471";
    $password = "cpsc471";
    $dbname = "cpsc471";

    //connection to the database
    $link = mysql_connect($servername, $username, $password);

    //select a database to work with
    mysql_select_db($dbname,$link);

    if($_POST[password] == $_POST[password_confirm]){
        
        $sql = "INSERT INTO Player (Username, `Password`, BattleTag, Platform, RegionID,
        Skill_Rating) VALUES ('$_POST[email]', '$_POST[password]', '$_POST[username]',
        '$_POST[platform]', '$_POST[region]', '$_POST[skillrating]')";
        
        mysql_query($sql);
        //mysqli_query($link, $sql);
    }
    mysql_close($link);
    //mysqli_close($link);
?>
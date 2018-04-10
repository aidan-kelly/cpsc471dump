<?php
    $mysql_host = "localhost";
    $mysql_user = "cpsc471";
    $mysql_password = "cpsc471";
    $mysql_db = "cpsc471";

    $link = mysqli_connect($mysql_host, $mysql_user, $mysql_password) or die("Could not connect to database.");
    mysqli_select_db($link, $mysql_db) or die("Could not select database.");
?>
<?php
    $host = "localhost";
    $db = "cpsc471";
    $user = "cpsc471";
    $password = "cpsc471";

    $link = mysql_connect($host, $user, $password);
    mysql_select_db($db, $link);

    $sql = "INSERT INTO Test(`Name`, `Email`)VALUES('$_POST[name]', '$_POST[email]')";

    mysql_query($sql, $link);

    mysql_close($link);
?>
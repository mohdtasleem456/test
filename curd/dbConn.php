<?php

$db = mysqli_connect("localhost","root","","testdb2");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>
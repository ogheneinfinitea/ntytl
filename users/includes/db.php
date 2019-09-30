<?php

$dbUsername="uentytl_admin";
$psswd = "ntytl_2019@#";
$dbName = "uentytl_register";
$hostName = "localhost";
$mysqli = mysqli_connect($hostName,$dbUsername,$psswd,$dbName);
if(!$mysqli){
    die("Could not connect at the moment because ". mysqli_connect_error());
}

 
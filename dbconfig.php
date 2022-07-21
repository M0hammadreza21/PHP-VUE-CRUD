<?php

$DBhost = "localhost";
$DBuser = "mhammad1_1367";
$DBpassword ="5_D2}QpdlY]}";
$DBname="mhammad1_phpVue";

$conn = mysqli_connect($DBhost, $DBuser, $DBpassword, $DBname); 

if(!$conn){
	die("Connection failed: " . mysqli_connect_error());
}
?> 
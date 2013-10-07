<?php
include_once('_password.php');



function GetConnection()
{
	global $sql_password;
	$conn = new mysqli('localhost', 'plotkinm', $sql_password, 'plotkinm_db');
	return $conn;
}

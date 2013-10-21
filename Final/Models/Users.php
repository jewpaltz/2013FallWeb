<?php

/**
 * 
 */
class Users {
	
	static public function Get($id=null)
	{
		if(isset($id)){
			return fetch_one("SELECT * FROM 2013Fall_Users WHERE id=$id");			
		}else{
			return fetch_all('SELECT * FROM 2013Fall_Users');			
		}
	}
	
	static public function Save($row)
	{
		$sql = 	" Insert Into 2013Fall_Users (FirstName, LastName, Password, UserType) "
			.	" Values ('$row[FirstName]', '$row[LastName]', '$row[Password]', '$row[UserType]') ";
		$conn = GetConnection();
		$conn->query($sql);
		$error = $conn->error;		
		$conn->close();
		
		if($error){
			return array('db_error' => $error);
		}else {
			return false;
		}
	}
}

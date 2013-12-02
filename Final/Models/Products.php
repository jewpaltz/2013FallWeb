<?php

/**
 * 
 */
class Products {
	
	static public function Get($id=null)
	{
		if(isset($id)){
			$sql = "	SELECT U.*, K.Name as UserType_Name
						FROM 2013Fall_Users U
							Join 2013Fall_Keywords K ON U.`UserType`=K.id
						WHERE U.id=$id
					";
			return fetch_one($sql);			
		}else{
			$sql = "	SELECT U.*, K.Name as UserType_Name
						FROM 2013Fall_Users U
							Join 2013Fall_Keywords K ON U.`UserType`=K.id
					";
			return fetch_all($sql);			
		}
	}

	static public function GetCategories()
	{
			$sql = "	SELECT *
						FROM 2013Fall_Product_Categories
					";
			return fetch_all($sql);			
	}
	
	static public function GetByCategory($id=null)
	{
			$sql = "	SELECT *
						FROM 2013Fall_Products WHERE Product_Category_id=$id
					";
			return fetch_all($sql);			
	}
}

<?php

/**
 * 
 */
class Products {
	/* Wow, that is quite an online editor */
	static public function Get()
	{
		return fetch_all('SELECT * FROM 2013Fall_Products');
	}
	static public function GetItemsInCategory($CategoryId)
	{
		$sql = " SELECT * FROM 2013Fall_Products P
				 Where P.Product_Category_id = $CategoryId
		";
		return fetch_all($sql);
	}
	static public function GetCategories()
	{
		$sql = " SELECT * FROM 2013Fall_Product_Categories ";
		return fetch_all($sql);
	}
	
	
}

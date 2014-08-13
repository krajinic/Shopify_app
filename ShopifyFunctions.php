<?php
/**
* delete a product with given product ID
* @param    integer  $productID	 ID of product
*/
function deleteProduct($productID){
	global $shopify;
	$shopify('DELETE', '/admin/products/' . $productID . '.json');
}

/**
* Convert an object to an array
* @param    array  $array	 array of product selection criteria
* @return   object
*/
function getProduct($array){
	global $shopify;
	$products = $shopify('GET', '/admin/products.json', $array );
	return $products;
}

/**
* Create product
* @param    array  $argument  array of arguments specifing the product to be created
*/
function createProduct($arguments){
	global $shopify;
	$shopify('POST', '/admin/products.json', $arguments);
}

/**
* Update product 
* @param    integer $productID	ID of product to be updated
* @param    array  $argument  array of arguments with information to be updated
*/
function updateProduct($productID, $arguments){
		global $shopify;
		$shopify('PUT', '/admin/products/' . $productID . '.json', $arguments);
}

?>
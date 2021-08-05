<?php  
require_once '../Model/model.php';


if (isset($_POST['saveProductcontroller'])) 
{
	$data['name'] = $_POST['name'];
	$data['buyingPrice'] = $_POST['buyingPrice'];
	$data['sellingPrice'] = $_POST['sellingPrice'];
	if (isset($_POST['display'])) 
	{
		$data['display'] = "YES";
	}
	else
		$data['display'] = "NO";

  if (addProduct($data)) 
  {
  	echo 'Successfully Saved!!';
  	header('Location: ../Display Product.php');
  }
} 
else 
{
	echo 'You are not allowed to access this page.';
}
?>
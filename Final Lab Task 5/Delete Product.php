<?php 

require_once 'Model/model.php';
if(isset($_GET['id']))
{
  $product = showProduct($_GET['id']);  
}
else
{
  header('Location: Display Product.php');
}
 ?>
<!DOCTYPE html>
<html>
<head>
<title>Delete Product</title>
</head>
<body>
<form action="Controller/deleteProductcontroller.php?id=<?php echo $product['ID'] ?>" method="POST" enctype="multipart/form-data">
 <fieldset style="width: 300px; margin: auto; margin-top: 100px; margin-bottom: 20px;">
  <legend><b>DELETE PRODUCT</b></legend>

  Name : <?php echo $product['Name'] ?><br>

  Buying Price : <?php echo $product['Buying Price'] ?><br>

  Selling Price : <?php echo $product['Selling Price'] ?><br>

  Displayable :<?php echo $product['Display'] ?><br>

  <hr>
  <input type="submit" name = "deleteProductcontroller" value="Delete">
 </fieldset>
</form>
</body>
</html>
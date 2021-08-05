<!DOCTYPE html>
<html>
<head>
	<title>Add Product</title>
</head>
<body>
<fieldset style="width: 400px; margin: auto; margin-top: 100px; margin-bottom: 20px;">
	<legend><b>ADD PRODUCT</b></legend>
	<form action="controller/saveProductcontroller.php" method="POST" enctype="multipart/form-data">
		<label for="name">Name</label><br>
		<input type="text" id="name" name="name"><br>
		<label for="bprice">Buying Price</label><br>
		<input type="text" id="buyingPrice" name="buyingPrice"></label><br>
		<label for="sprice">Selling Price</label><br>
		<input type="text" id="sellingPrice" name="sellingPrice"></label>
		<hr>
		<input type="checkbox" name="display">
		<label>Display</label>
		<hr>
		<input type="submit" name = "saveProductcontroller" value="SAVE">
	</form>
</fieldset>
</body>
</html>
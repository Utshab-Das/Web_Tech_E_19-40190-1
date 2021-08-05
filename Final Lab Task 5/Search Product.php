<!DOCTYPE html>
<html>
<head>
<title>Search Product</title>
</head>
<body>
  <fieldset style="width: 400px; margin: auto; margin-top: 50px;">
  <legend><b>SEARCH</b></legend>
  <form method="post">
    <input type="text" name="name" value="<?php if(isset($_POST['name'])){echo $_POST['name'];}?>" required>
    <input type="submit" name="search" value="Search By Name">
    <hr>
  </fieldset>
<?php
require 'Controller/searchProductcontroller.php';
?>
</body>
</html>
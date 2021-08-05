<?php  
if (!isset($_POST['name'])) 
{
  require_once ('Model/model.php');
  $products = showAllproducts();
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Display Product</title>
</head>
<body>
  <style>
    table,td,th{
      border:1px solid black;
    }
  </style>
 <fieldset style="width: 400px; margin: auto; margin-top: 50px; margin-bottom: 20px;">
  <legend><b>DISPLAY</b></legend>
    <table style="margin: auto;">
      <thead>
        <tr>
          <th>Name</th>
          <th>Profit</th>
          <th colspan="2"></th>
        </tr>
      </thead>
      <tbody>
        <?php 
        foreach ($products as $i => $product): 
          if ($product['Display'] == "YES" || isset($_POST['name'])):
        ?>
          <tr>

            <td><?php echo $product['Name'] ?></td>
            <td><?php echo $product['Selling Price'] - $product['Buying Price'] ?></td>
            <td><a href="Edit Product.php?id=<?php echo $product['ID'] ?>">edit</a></td>
            <td><a href="Delete Product.php?id=<?php echo $product['ID'] ?>">delete</a></td>
          </tr>
        <?php endif; endforeach; ?>
      </tbody>
    </table>
 </fieldset>
</body>
</html>
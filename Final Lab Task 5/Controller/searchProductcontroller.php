<?php

require 'Model/model.php';

if (isset($_POST['search'])) 
{
    $products = searchProduct($_POST['name']);
    require 'Display Product.php';
}
?>
<?php
$stu_id=$_POST['sid'];
$stu_name=$_POST['sname'];
$stu_name=$_POST['sname'];
$stu_address=$_POST['saddress'];
$stu_class=$_POST['sclass'];
$stu_phone=$_POST['sphone'];

$conn = mysqli_connect("localhost","root","","crud") or die("Connection Successful");

$sql ="UPDATE student set sname='{$stu_name}',saddress='{$stu_address}',sclass='{$stu_class}',sphone='{$stu_phone}' where sid={$stu_id}";
$result=mysqli_query($conn,$sql) or die("sql unsuccessful");

header("location:index.php");
mysqli_close($conn);


?>
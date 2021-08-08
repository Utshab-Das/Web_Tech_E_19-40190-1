<?php
$stu_id=$_GET['id'];
$conn = mysqli_connect("localhost","root","","crud") or die("Connection Failed");
$sql ="DELETE from student where sid={$stu_id}";
$result=mysqli_query($conn,$sql) or die("Sql unsuccessful");

header("Location:index.php");

mysqli_close($conn);

?>